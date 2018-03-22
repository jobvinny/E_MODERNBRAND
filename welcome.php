<?php
include('adminsession.php');
?>
<html>
<head>

    <?php
    require 'headerFile.php';
    ?>

</head>
<body>
<div class="container-fluid">
    <div class="row">
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container-fluid dark">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle lwrite2" data-toggle="collapse" data-target="#myNavbar">
                        <!--                        <span class="icon-bar"></span>-->
                        <!--                        <span class="icon-bar"></span>-->
                        <!--                        <span class="icon-bar"></span>-->
                        <!--                        <span class="icon-bar"></span>-->
                    </button>
                    <a class="navbar-brand" href="welcome.php"><img src="img/logo.png" class="img-responsive"
                                                                    id="logoimage"></a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="operations.php">ADD</a></li>
                        <li><a href="dailysells.php">Daily Sells</a></li>
                        <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> LogOut </a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</div>

<!--home-->
<div class="container-fluid defaultimage">
    <div class="row dark">
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="img/motor8.jpg" alt="LaFerrari"
                     class="img-responsive img-transparency homesize">
                <div class="carousel-caption dark cbrand2 mydesign">
                    <h1 class="text-muted text-uppercase">ADMIN DASHBOARD</h1>
                    <h3 class="text-center text-uppercase">HELLO</h3>
                    <h4 class="text-uppercase text-success" id="welcome"><?php echo $eadmin_session; ?></h4>
                    <h3 class="text-center text-uppercase">WELCOME BACK</h3>
                </div>
            </div>
        </div>
    </div>
</div>

<!--Footer-->
<div class="footer Footerimage">
    <div class="container-fluid">
        <div class="row  dark2">
            <div class="col-md-4 text-center">
                <h4 class="defaultborder text-center text-muted">Social Media</h4>
                <div class="col-md-2">
                    &nbsp;
                </div>
                <div class="col-md-2">
                    <a href="#"><img src="img/facebookIcon.jpg" class="img-responsive img-circle"></a>
                </div>
                <div class="col-md-2">
                    <a href="#"><img src="img/googlePlusIcon.jpg" class="img-responsive img-circle"></a>
                </div>
                <div class="col-md-2">
                    <a href="#"><img src="img/linkedinIcon.jpg" class="img-responsive img-circle"></a>
                </div>
                <div class="col-md-2">
                    <a href="#"><img src="img/twitterIcon.jpg" class="img-responsive img-circle"></a>
                </div>
            </div>
            <div class="col-md-2">
                <h4 class="defaultborder text-center text-muted">E-MODERNBRAND</h4>
                <h5><a href="index.php" class="defaultlink pull-right">HOME</a></h5>
                <br/>
                <h5><a href="#motors" class="defaultlink pull-right">MOTORS</a></h5>
                <br/>
                <h5><a href="#electronics" class="defaultlink pull-right">ELECTRONICS</a></h5>
                <br/>
                <h5><a href="#fashion" class="defaultlink pull-right">FASHION</a></h5>
                <br/>
                <h5><a href="#sport" class="defaultlink pull-right">SPORTS WEAR</a></h5>
                <br/>
                <h5><a href="#contactus" class="defaultlink pull-right">CONTACT US</a></h5>
            </div>
            <div class="col-md-6">
                <h4 class="defaultborder text-center text-muted">Partners</h4>
                <div class="col-md-3">
                    <a href="#"><img src="img/logo.png" class="img-responsive img-thumbnail img4"></a>
                </div>
                <div class="col-md-3">
                    <a href="#"><img src="img/logo.ico" class="img-responsive img-thumbnail img4"></a>
                </div>
                <div class="col-md-3">
                    <a href="#"><img src="img/Techno Science 20170911_091025.jpg"
                                     class="img-responsive img-thumbnail img4"></a>
                </div>
                <div class="col-md-3">
                    <a href="#"><img src="img/tecksol2.png" class="img-responsive img-thumbnail img4"></a>
                </div>
            </div>
        </div>
        <div class="row dark2">
            <div class="col-md-4">
                <hr/>
                <p class="text-center text-muted">&copy; CopyRight 2017</p>
                <hr/>
            </div>
            <div class="col-md-4">
                <h1 class="text-center"><img src="img/logo.png"></h1>
            </div>
            <div class="col-md-4">
                <hr/>
                <p class="text-center text-muted">&rightsquigarrow; All Rights Reserved For E-MODERNBRAND</p>
                <hr/>
            </div>
        </div>
    </div>
</div>

<?php
require 'scriptFile.php';
?>

</body>
</html>