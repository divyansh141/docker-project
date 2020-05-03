<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<style>
    .fs{
        background-color: #101010;
        color: #9d9d9d;
        padding-top: 10px;
        padding-bottom: 10px;
        text-align: center;
        font-size: 15px;
    }
</style>
<body style="background-color: papayawhip">
<?php
if(array_key_exists('button1', $_POST)) {
    $loc =1;
    map($loc);
}
else {
    ;
}
function map($loc) {
    ;
}
?>
<nav class="nav navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="#" class="navbar-brand">Population Map</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
                <li style="margin: 10px;"><input type="search" placeholder="Search" name="search"><span class="glyphicon glyphicon-search"></span></li>
                <li><a href="Login.html"><span class="glyphicon glyphicon-log-in"></span> Login</a> </li>
            </ul>
        </div>
    </div>
</nav>
<br><br><br>
<div class="container">
    <div class="jumbotron" style="text-align: center; background-color: aqua">
        <h2 style="font-size: 50px"><b>Welcome to our Population Map!</b></h2>
        <p>We provide you Population details of India with a Beautiful Map</p>
    </div>
    <div class="row">
        <div class="col-md-2 col-sm-6">
            <div class="thumbnail">
                <img src="states/AP.jpg" class="img-responsive">
                <div class="text-center">
                    <h6>Andhra Pradesh</h6>
                    <button class="btn btn-primary btn-block" name="button1"><a href="MyMap.html" style="text-decoration: none; color: white">View Details</a></button>
                </div>
            </div>
        </div>
        <div class="col-md-2 col-sm-6">
            <div class="thumbnail">
                <img src="states/Arunachal.jpg" class="img-responsive">
                <div class="text-center">
                    <h6>Arunachal Pradesh</h6>
                        <button class="btn btn-primary btn-block" name="button2"><a href="MyMap.html" style="text-decoration: none; color: white">View Details</a></button>
                </div>
            </div>
        </div>
        <div class="col-md-2 col-sm-6">
            <div class="thumbnail">
                <img src="states/assam.jpg" class="img-responsive">
                <div class="text-center">
                    <h6>Assam</h6>
                    <button class="btn btn-primary btn-block">View Details</button>
                </div>
            </div>
        </div>
        <div class="col-md-2 col-sm-6">
            <div class="thumbnail">
                <img src="states/Bihar.jpg" class="img-responsive">
                <div class="text-center">
                    <h6>Bihar</h6>
                    <button class="btn btn-primary btn-block">View Details</button>
                </div>
            </div>
        </div>
        <div class="col-md-2 col-sm-6">
            <div class="thumbnail">
                <img src="states/Chhattisgarh.jpg" class="img-responsive">
                <div class="text-center">
                    <h6>Chhattisgarh</h6>
                    <button class="btn btn-primary btn-block">View Details</button>
                </div>
            </div>
        </div>
        <div class="col-md-2 col-sm-6">
            <div class="thumbnail">
                <img src="states/Goa.jpg" class="img-responsive">
                <div class="text-center">
                    <h6>Goa</h6>
                    <button class="btn btn-primary btn-block">View Details</button>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-2 col-sm-6">
            <div class="thumbnail">
                <img src="states/Gujarat.jpg" class="img-responsive">
                <div class="text-center">
                    <h6>Gujarat</h6>
                    <button class="btn btn-primary btn-block">View Details</button>
                </div>
            </div>
        </div>
        <div class="col-md-2 col-sm-6">
            <div class="thumbnail">
                <img src="states/Haryana.jpg" class="img-responsive">
                <div class="text-center">
                    <h6>Haryana</h6>
                    <button class="btn btn-primary btn-block">View Details</button>
                </div>
            </div>
        </div>
        <div class="col-md-2 col-sm-6">
            <div class="thumbnail">
                <img src="states/Himachal.jpg" class="img-responsive">
                <div class="text-center">
                    <h6>Himachal Pradesh</h6>
                    <button class="btn btn-primary btn-block">View Details</button>
                </div>
            </div>
        </div>
        <div class="col-md-2 col-sm-6">
            <div class="thumbnail">
                <img src="states/Jharkhand.jpg" class="img-responsive">
                <div class="text-center">
                    <h6>Jharkhand</h6>
                    <button class="btn btn-primary btn-block">View Details</button>
                </div>
            </div>
        </div>
        <div class="col-md-2 col-sm-6">
            <div class="thumbnail">
                <img src="states/JnK.jpg" class="img-responsive">
                <div class="text-center">
                    <h6>Jammu & Kashmir</h6>
                    <button class="btn btn-primary btn-block">View Details</button>
                </div>
            </div>
        </div>
        <div class="col-md-2 col-sm-6">
            <div class="thumbnail">
                <img src="states/Karnataka.jpg" class="img-responsive">
                <div class="text-center">
                    <h6>Karnataka</h6>
                    <button class="btn btn-primary btn-block">View Details</button>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-2 col-sm-6">
            <div class="thumbnail">
                <img src="states/Kerala.jpg" class="img-responsive">
                <div class="text-center">
                    <h6>Kerala</h6>
                    <button class="btn btn-primary btn-block">View Details</button>
                </div>
            </div>
        </div>
        <div class="col-md-2 col-sm-6">
            <div class="thumbnail">
                <img src="states/Maharastra.jpg" class="img-responsive">
                <div class="text-center">
                    <h6>Maharastra</h6>
                    <button class="btn btn-primary btn-block">View Details</button>
                </div>
            </div>
        </div>
        <div class="col-md-2 col-sm-6">
            <div class="thumbnail">
                <img src="states/Manipur.jpg" class="img-responsive">
                <div class="text-center">
                    <h6>Manipur</h6>
                    <button class="btn btn-primary btn-block">View Details</button>
                </div>
            </div>
        </div>
        <div class="col-md-2 col-sm-6">
            <div class="thumbnail">
                <img src="states/Meghalaya.jpg" class="img-responsive">
                <div class="text-center">
                    <h6>Meghalaya</h6>
                    <button class="btn btn-primary btn-block">View Details</button>
                </div>
            </div>
        </div>
        <div class="col-md-2 col-sm-6">
            <div class="thumbnail">
                <img src="states/MP.jpg" class="img-responsive">
                <div class="text-center">
                    <h6>Madhya Pradesh</h6>
                    <button class="btn btn-primary btn-block">View Details</button>
                </div>
            </div>
        </div>
        <div class="col-md-2 col-sm-6">
            <div class="thumbnail">
                <img src="states/Mz.jpg" class="img-responsive">
                <div class="text-center">
                    <h6>Mizoram</h6>
                    <button class="btn btn-primary btn-block">View Details</button>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-2 col-sm-6">
            <div class="thumbnail">
                <img src="states/Nagaland.jpg" class="img-responsive">
                <div class="text-center">
                    <h6>Nagaland</h6>
                    <button class="btn btn-primary btn-block">View Details</button>
                </div>
            </div>
        </div>
        <div class="col-md-2 col-sm-6">
            <div class="thumbnail">
                <img src="states/Odisha.jpg" class="img-responsive">
                <div class="text-center">
                    <h6>Odisha</h6>
                    <button class="btn btn-primary btn-block">View Details</button>
                </div>
            </div>
        </div>
        <div class="col-md-2 col-sm-6">
            <div class="thumbnail">
                <img src="states/Punjab.jpg" class="img-responsive">
                <div class="text-center">
                    <h6>Punjab</h6>
                    <button class="btn btn-primary btn-block">View Details</button>
                </div>
            </div>
        </div>
        <div class="col-md-2 col-sm-6">
            <div class="thumbnail">
                <img src="states/Rajasthan.jpg" class="img-responsive">
                <div class="text-center">
                    <h6>Rajasthan</h6>
                    <button class="btn btn-primary btn-block">View Details</button>
                </div>
            </div>
        </div>
        <div class="col-md-2 col-sm-6">
            <div class="thumbnail">
                <img src="states/Sikkim.jpg" class="img-responsive">
                <div class="text-center">
                    <h6>Sikkim</h6>
                    <button class="btn btn-primary btn-block">View Details</button>
                </div>
            </div>
        </div>
        <div class="col-md-2 col-sm-6">
            <div class="thumbnail">
                <img src="states/Tamilnadu.jpg" class="img-responsive">
                <div class="text-center">
                    <h6>Tamilnadu</h6>
                    <button class="btn btn-primary btn-block">View Details</button>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-2 col-sm-6">
            <div class="thumbnail">
                <img src="states/Telangana.jpg" class="img-responsive">
                <div class="text-center">
                    <h6>Telangana</h6>
                    <button class="btn btn-primary btn-block">View Details</button>
                </div>
            </div>
        </div>
        <div class="col-md-2 col-sm-6">
            <div class="thumbnail">
                <img src="states/Tripura.jpg" class="img-responsive">
                <div class="text-center">
                    <h6>Tripura</h6>
                    <button class="btn btn-primary btn-block">View Details</button>
                </div>
            </div>
        </div>
        <div class="col-md-2 col-sm-6">
            <div class="thumbnail">
                <img src="states/Uttar%20Pradesh.jpg" class="img-responsive">
                <div class="text-center">
                    <h6>Uttar Pradesh</h6>
                    <button class="btn btn-primary btn-block">View Details</button>
                </div>
            </div>
        </div>
        <div class="col-md-2 col-sm-6">
            <div class="thumbnail">
                <img src="states/Uttrakhand.jpg" class="img-responsive">
                <div class="text-center">
                    <h6>Uttrakhand</h6>
                    <button class="btn btn-primary btn-block">View Details</button>
                </div>
            </div>
        </div>
        <div class="col-md-2 col-sm-6">
            <div class="thumbnail">
                <img src="states/WB.jpg" class="img-responsive">
                <div class="text-center">
                    <h6>West Bengal</h6>
                    <button class="btn btn-primary btn-block">View Details</button>
                </div>
            </div>
        </div>
    </div>
</div>
<footer class="fs">
    <div class="container">
        Copyright © Lifestyle Store | All Rights Reserved
    </div>
</footer>
</body>
</html>