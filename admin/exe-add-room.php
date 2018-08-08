<?php

//start session
session_start();

//require connection configuration php file
require('../connect.php');

//create connection object
$conn = Connection::getConnection();

if($_POST['Nome']=="" || $_POST['NumeroPosti']==""){
    //if, bypassed javascript, some fields are empty
    $_SESSION['empty_fields'] = TRUE;
    die();
    header('Location: add-room.php');
}else{
    //insert query
    //movie information
    $insert_query = 'INSERT INTO Sale (Nome, NumeroPosti) VALUES (?,?)';
    $result = $conn->prepare($insert_query);
    $result->execute([$_POST['Nome'], $_POST['NumeroPosti']]);
    
    //redirect
    $_SESSION['add-room-success'] = TRUE;
    header('Location: index.php');
}

?>