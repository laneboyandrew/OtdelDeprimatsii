<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Lazy - Bootstrap UI Kit</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="A new design system for developing with less effort.">
    <meta name="author" content="BootstrapBay">

    <link href="/template/assets/img/favicon.ico" rel="icon" type="image/png">
    
    <link rel="stylesheet" href="/template/assets/vendor/bootstrap/bootstrap.min.css">
		<link rel="stylesheet" href="/template/assets/css/lazy.css">
		<link rel="stylesheet" href="/template/assets/css/demo.css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.0/css/all.css" integrity="sha384-aOkxzJ5uQz7WBObEZcHvV5JvRW3TUc2rNPA7pe3AwnsUohiw1Vj2Rgx2KSOkF5+h" crossorigin="anonymous">
  </head>
  <body class="profile">
    <nav class="navbar navbar-expand-md navbar-dark bg-primary mb-4 fixed-top">
    <div class="container">

      <a class="navbar-brand d-flex align-items-center" href="./"><img src="/template/assets/img/logo_white.svg" alt="Example Navbar 1" class="mr-2" height="30"> Отдел депремации</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown-3" aria-controls="navbarNavDropdown-3"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse mr-auto" id="navbarNavDropdown-3">
        <ul class="navbar-nav ml-auto text-center">
          <li class="nav-item">
            <a class="nav-link" href="#">
              <i class="far fa-compass"></i>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#">
              <i class="far fa-heart"></i>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#">
              <i class="far fa-user"></i>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
<div class="container">
  <div class="info">
    <div class="row">
	    <div class="col-12 col-md-4 text-center">
		    <img src="/template/assets/img/lorde.png" alt="Raised circle image" class="img-fluid rounded-circle shadow-lg" style="width: 180px;">
	    </div>
	    <div class="col-12 col-md-8 d-flex flex-column align-items-center align-items-lg-start">
		    <div class="d-flex flex-row align-items-start mt-3 mt-lg-0">
			    <div class="name">
		    		<h2 class="mb-0">Lordse</h2>
			    </div>
		    	<a href="#a" class="btn btn-primary btn-pill btn-sm ml-3 mt-1">Follow</a>
		    </div>
		    <div class="stats d-flex flex-row align-items-center align-items-lg-start text-center text-lg-left">
			    <div class="posts ml-2 ml-lg-0"><p class="lead"><b>134</b> posts</p></div>
			    <div class="posts"><p class="lead"><b>6.6m</b> followers</p></div>
			    <div class="posts"><p class="lead"><b>201</b> following</p></div>
		    </div>
		    <p class="lead mb-0 mt-2"><b>Ella Yelich-O'Connor</b></p>
		    <p class="lead text-center text-lg-left">Let's let things come out of the woodwork.  I'll give you my best side, tell you all my best lies.  Yeah, awesome right?</p>
	    </div>
    </div>
  </div>
	<div class="navigation d-flex justify-content-center">
    <ul class="nav nav-primary nav-tabs mt-3 d-flex flex-column flex-md-row">
      <li class="nav-item">
        <a class="nav-link active" data-toggle="tab" href="#photos">
          <i class="fas fa-th"></i> Photos
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#saved">
          <i class="far fa-bookmark"></i> Saved
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#tagged">
          <i class="far fa-id-badge"></i> Tagged
        </a>
      </li>
    </ul>
	</div>
  <div class="profile-tabs tab-content">
    <div class="tab-pane fade show active" id="photos">
				<div class="row">
					<div class="col-12 col-md-4">
						<div class="square" style="background-image:url('assets/img/dog-4.jpg');"></div>
					</div>
					<div class="col-12 col-md-4">
						<div class="square" style="background-image:url('assets/img/dog-5.jpg');"></div>
					</div>
					<div class="col-12 col-md-4">
						<div class="square" style="background-image:url('assets/img/dog-6.jpg');"></div>
					</div>
					<div class="col-12 col-md-4">
						<div class="square" style="background-image:url('assets/img/dog-7.jpg');"></div>
					</div>
					<div class="col-12 col-md-4">
						<div class="square" style="background-image:url('assets/img/dog-8.jpg');"></div>
					</div>
					<div class="col-12 col-md-4">
						<div class="square" style="background-image:url('assets/img/dog-3.jpg');"></div>
					</div>
				</div>
				<div class="d-flex justify-content-center my-5">
					<a href="#a" class="btn btn-outline-primary btn-pill">Load More</a>
				</div>
    </div>
    <div class="tab-pane fade text-center" id="saved">

      <p class="lead"><span class="text-danger"><i class="far fa-frown-open"></i></span> Nothing saved yet.</p>
    </div>
    <div class="tab-pane fade text-center" id="tagged">
      <p class="lead">Help people tag you.</p>
      <a href="#a" class="btn btn-info btn-pill">Find Friends</a>
    </div>
  </div>

</div>

    
<footer class="footer-1 bg-light text-dark">
<div class="container">
<div class="d-flex flex-column flex-md-row justify-content-between align-items-center">
	<div class="links">
		<ul class="footer-menu list-unstyled d-flex flex-row text-center text-md-left">
			<li><a href="https://bootstrapbay.com/" target="_blank">Store</a></li>
			<li><a href="https://bootstrapbay.com/about" target="_blank">About Us</a></li>
			<li><a href="https://bootstrapbay.com/blog/" target="_blank">Blog</a></li>
			<li><a href="https://bootstrapbay.com/terms" target="_blank">Terms & Conditions</a></li>
		</ul>
	</div>
	<div class="social mt-4 mt-md-0">
    <a class="twitter btn btn-outline-primary btn-icon" href="https://twitter.com/bootstrapbay" target="_blank">
      <i class="fab fa-twitter"></i>
      <span class="sr-only">View our Twitter Profile</span>
    </a>
    <a class="facebook btn btn-outline-primary btn-icon" href="https://www.facebook.com/bootstrapbayofficial/" target="_blank">
      <i class="fab fa-facebook"></i>
      <span class="sr-only">View our Facebook Profile
        <span>
    </a>
    <a class="github btn btn-outline-primary btn-icon" href="https://github.com/bootstrapbay" target="_blank">
      <i class="fab fa-github"></i>
      <span class="sr-only">View our GitHub Profile</span>
    </a>
  </div>
</div>
<div class="copyright text-center">
	<hr />
	<p class="small">&copy; 2019, made with <span class="text-danger"><i class="fas fa-heart"></i></span> by AndreyGrach</p>
</div>
</div>
</footer>


    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="/template/assets/vendor/jquery/jquery.min.js"></script>
    <script src="/template/assets/vendor/popper/popper.min.js"></script>
    <script src="/template/assets/vendor/bootstrap/bootstrap.min.js" ></script>

    <!-- optional plugins -->
    <script src="/template/assets/vendor/nouislider/js/nouislider.min.js"></script>

    <!--   lazy javascript -->
    <script src="/template/assets/js/lazy.js"></script>
  </body>
</html>
