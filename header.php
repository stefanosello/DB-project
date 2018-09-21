<!-- LOGO HEADER BEGIN -->
<div class="navbar navbar-inverse set-radius-zero" >
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">
                <img class="logo" src="admin/assets/img/logo.png" />
            </a>
        </div>
    </div>
</div>
<!-- LOGO HEADER END-->
<!-- MENU SECTION BEGIN -->
<section class="menu-section">
    <div class="container">
        <div class="row ">
            <div class="col-md-12">
                <div class="navbar-collapse collapse ">
                    <ul id="menu-top" class="nav navbar-nav navbar-right">
                        <li>
                            <a href="admin/programmation.php" <?php if ($_SESSION['page']=='prgrammation') { echo('class="menu-top-active"'); } ?>>PROGRAMMATION</a>
                        </li>
                        <li>
                            <a href="admin/login.php" <?php if ($_SESSION['page']=='log-in') { echo('class="menu-top-active"'); } ?>>LOG IN</a>
                        </li>
                        <li>
                            <a href="admin/signup.php" <?php if ($_SESSION['page']=='sign-up') { echo('class="menu-top-active"'); } ?>>SIGN UP</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- MENU SECTION END-->