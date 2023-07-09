<!DOCTYPE html>
<html>
<head>
	<title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>




    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="css/style.css">



             


</head>
<body>


<?php include 'menu.php'; ?>
 <!-- <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">LifeHacker</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Services</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contact</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav> -->
<!-- --------------------Home Page------------------------- -->

<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/fff1.jpg" alt="Los Angeles" width="1100" height="500">
      <div class="carousel-caption">
        <h3>I'm Shailesh Singh</h3>
        <p>This is my official portfolio website to show all
        Details and work experiance web development</p>
      </div>   
    </div>

    <div class="carousel-item">
      <img src="images/fff2.jpg" alt="New York" width="1100" height="500">
      <div class="carousel-caption">
        <h3>I'm Shailesh Singh</h3>
        <p>This is my official portfolio website to show all
        Details and work experiance web development</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/fff5.jpg" alt="New York" width="1100" height="500">
      <div class="carousel-caption">
        <h3>I'm Shailesh Singh</h3>
        <p>This is my official portfolio website to show all
        Details and work experiance web development</p>
      </div>   
    </div>



  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

<section class="my-5">
	<div class="py-5">
		<h2 class="text-center">About Us</h2>
	</div>
	<div class="container-fluid">
	<div class="row">
		<div class="col-lg-6 col-md-6 col-12">
			<!-- <img src="https://www.isynbus.com/wp-content/uploads/2022/09/p3.png" class="img-fluid aboutimg"> -->
				<div>
				<img src="images/about.jpg" class="img-fluid aboutimg">
				</div>

		</div>
		<div class="col-lg-6 col-md-6 col-12">
			<h2 class="display-4">I'am Shailesh Singh.</h2>
			<p class="py-3">Building a site is, in many ways, an exercise of willpower. It's intriguing to get distracted by the fancy world of the design process and forget all about generating compelling content.</p>
              <a href="about.php" class="btn btn-success"> Check More </a>
		</div>
	</div>
    </div>
</section>

<!-- ----------------------Our services----------------------- -->

<section class="my-5">
  <div class="py-5">
    <h2 class="text-center">Our Services</h2>
  </div>

  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-4 col-md-4 col-12">
        <div class="card">
                <img class="card-img-top" src="images/service1.png" alt="Card image">
          <div class="card-body">
          <h4 class="card-title">Front End Development</h4>
          <p class="card-text">+ Carfting Unique Designs<br>+ Architecting Theme Frameworks<br>+ Theme Layout</p>
          <!--<a href="" class="btn btn-primary">See Profile</a>-->
          </div>
        </div>
      </div>


      <div class="col-lg-4 col-md-4 col-12">
        <div class="card" >
        <img class="card-img-top" src="images/service2.png" alt="Card image">
          <div class="card-body">
          <h4 class="card-title">E-commerce Development</h4>
          <p class="card-text">+ Custom API Integrations<br>+ Optimized Server Setup<br>+ Safety & Security</p>
          <!--<a href="#" class="btn btn-primary">See Profile</a>-->
          </div>
        </div>
      </div>


      <div class="col-lg-4 col-md-4 col-12">
        <div class="card" >
        <img class="card-img-top" src="images/service3.png" alt="Card image">
          <div class="card-body">
          <h4 class="card-title">Custom Web Development</h4>
          <p class="card-text">+ WordPress Web Development<br>+ App Development<br>+ Email Template Development</p>
          <!--<a href="#" class="btn btn-primary">See Profile</a>-->
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- ------------------------Our Gallery------------------------------ -->

<section class="my-5">
  <div class="py-5">
    <h2 class="text-center">Our Gallery</h2>
  </div>

  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-4 col-md-4 col-6">
        <img src="images/gg1.png" class="img-fluid pb-4 pl-0">
      </div>
      <div class="col-lg-4 col-md-4 col-6">
        <img src="images/gg2.png" class="img-fluid pb-4 pl-0">
      </div>
      <div class="col-lg-4 col-md-4 col-6">
        <img src="images/gg3.png" class="img-fluid pb-4 pl-0">
      </div>
      <div class="col-lg-4 col-md-4 col-6">
        <img src="images/gg4.png" class="img-fluid pb-4 pl-0">
      </div>
      <div class="col-lg-4 col-md-4 col-6">
        <img src="images/gg7.png" class="img-fluid pb-4 pl-0">
      </div>
    
    </div>
  </div>
  </section>


 <!-- ------------------------Contact Us----------------------------->


 <section class="my-5">
  <div class="py-5">
    <h2 class="text-center">Contact Us</h2>
  </div>
  <div class="w-50 m-auto">
    <form action="userinfo.php" method="post">

      <div class="form-group">
        <label>Username</label>
        <input type="text" name="user" autocomplete="off" class="form-control">
      </div>

      <div class="form-group">
        <label>Email Id</label>
        <input type="text" name="email" autocomplete="off" class="form-control">
      </div>

      <div class="form-group">
        <label>Mobile</label>
        <input type="text" name="mobile" autocomplete="off" class="form-control">
      </div>

      <div class="form-group">
        <label>Comments</label>
        <textarea name="" class="form-control">
          
        </textarea>
      </div>
      <button type="submit" class="btn btn-primary">Submit
      </button>

    </form>
  </div>
</section>

<!-- ------------------------Footer------------------------------ -->


    <div class="footer-clean text-center">
        <footer>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-sm-4 col-md-3 item">
                        <h3>Services</h3>
                        <ul>
                            <li><a href="#">Web design</a></li>
                            <li><a href="#">Development</a></li>
                            <li><a href="#">Hosting</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-4 col-md-3 item">
                        <h3>About</h3>
                        <ul>
                            <li><a href="#">Company</a></li>
                            <li><a href="#">Team</a></li>
                            <li><a href="#">Legacy</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-4 col-md-3 item">
                        <h3>Careers</h3>
                        <ul>
                            <li><a href="#">Job openings</a></li>
                            <li><a href="#">Employee success</a></li>
                            <li><a href="#">Benefits</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-4 item text-center social"><a href="https://www.facebook.com/profile.php?id=100015611161087"><i class="icon ion-social-facebook"></i></a><a href="https://twitter.com/SHAILES64925730"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="https://www.instagram.com/ashi_tani/"><i class="icon ion-social-instagram"></i></a>
                        <p class="copyright">copyright © 2022 all rights reserved</p>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>








  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>