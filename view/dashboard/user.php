<?php
    require_once "./view/shared/usermenu.php";
?>
<body>
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
       <div class="carousel-inner">
            <div class="carousel-item active carousel-fade">
                <img src="/project/view/images/2.jpg" width="1000" height="400" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h1 style=" font-size: 40px;color: #ffff00;">Hamro Hostel</h1>
                    <b><p style="color: yellow; font-size:15px;">Looking for best quality hostel</p><b>
                    <a href="../room/uindex" class="btn btn-primary btn-md">Book Now</a>
                </div>
            </div>
            <div class="carousel-item carousel-fade">
                <img src="/project/view/images/3.jpg" width="500" height="400" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h1 style=" font-size: 40px;color: white;">Hamro hostel</h1>
                    <p>With very Good Enviroment</p>
                    <a href="../room/uindex" class="btn btn-success btn-md">Get Startred</a>
                </div>
            </div>
            <div class="carousel-item carousel-fade">
                <img src="/project/view/images/4.jpg" width="700" height="400" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h1 style="color: white;font-size: 40px;">Hamro Hostel</h1>
                    <p>Low cost with best service</p>
                    <a href="../room/uindex" class="btn btn-danger btn-md">Hurry up</a>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    </div>
 <!--  <div class="row w-100"  style="color: white; margin-top: 3%;">
        <div class="col-md-2" style="margin-left: 9%;">
            <div class="card bg-dark" >
                <div class="card-body">
                    <h5 class="card-title">Total Students</h5>
                    <h1>243</h1>
                </div>
            </div>
        </div>
        <div class="col-md-2" style="margin-left: 5%;">
            <div class="card bg-dark">
                <div class="card-body">
                    <h5 class="card-title">Total Rooms</h5>
                    <h1>124</h1>
                </div>
            </div>
        </div>
        <div class="col-md-2" style="margin-left: 5%;">
            <div class="card bg-dark">
                <div class="card-body">
                    <h5 class="card-title" >Total Courses</h5>
                    <h1>12</h1>
                </div>
            </div>
        </div>
        <div class="col-md-2" style="margin-left: 5%;">
            <div class="card bg-dark">
                <div class="card-body">
                    <h5 class="card-title" >Requests</h5>
                    <h1>54</h1>
                </div>
            </div>
        </div>
    </div>-->
    <?php
    require_once "./view/shared/footer.php";
?>
</body>