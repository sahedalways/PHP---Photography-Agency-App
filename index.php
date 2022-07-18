<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Hello, world!</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,400;0,500;1,300&display=swap" rel="stylesheet"> 
    
  </head>
  <body>



  <!--header area starts here!-->

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="">Sahed's Creation</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav  m-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
     
        <li class="nav-item">
          <a class="nav-link" href="about.php">Services</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
        
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-light" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>



<!--carousel area starts here!-->
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="/public/Images/c.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Priority to Quality</h5>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
      </div>
    </div>
      </div>
    </div>
    <div class="carousel-item">
      <img src="/public/images/c2.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Priority to Quality</h5>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<!--carousel area ends here!-->
<!--header area ends here!-->

<!--about section starts here!-->
<section>
  <div>
    <h2 class="my-5 text-center">About Us</h2>
  </div>

  <div class="container-fluid py-3">
    <div class="row">
    <div class="about-single-box col-lg-6 col-md-6 col-12">
      <img src="/public/images/a.jpg" alt="">
    </div>

    <div class="about-single-box col-lg-6 col-md-6 col-12">
       <h1>I am Sk Sahed Ahmed</h1>
       <p class="py-4 text-left">Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati sunt minima, aliquid rem cupiditate optio temporibus pariatur! Omnis at animi rem eligendi eius voluptatum nemo reiciendis laboriosam dolorem officiis provident inventore obcaecati harum nisi, qui dicta velit vero porro dolor.</p>
       <input class=" btn btn-success" type="submit" value="Wanna Know Me">
    </div>
    </div>
  </div>
</section>
<!--about section ends here!-->

<!--service section starts here!-->
<section>
  <h2 class="text-center my-5">Our Services</h2>
  <div class="container-fluid">
   <div class="row">

    <div class="services-single-box col-lg-4 col-md-4 col-12">
    <div class="card">
  <img class="card-img-top" src="/public/images/s.jpg" alt="Card image cap">
  <div class="card-body">
    <h4 class="card-title">Limitless Satisfaction</h4>
    <p class="card-text">Priority to Quality</p>
    <a href="#" class="btn btn-success">See More</a>
  </div>
</div>
</div>

<div class="services-single-box col-lg-4 col-md-4 col-12">
<div class="card">
  <img class="card-img-top" src="/public/images/s2.jpg" alt="Card image cap">
  <div class="card-body">
    <h4 class="card-title">Beautiful Nature</h4>
    <p class="card-text">Priority to Quality.</p>
    <a href="#" class="btn btn-success">See More</a>
  </div>
</div>
</div>

<div class="services-single-box col-lg-4 col-md-4 col-12">
<div class="card">
  <img class="card-img-top" src="/public/images/s3.jpg" alt="Card image cap">
  <div class="card-body">
    <h4 class="card-title">Beautiful Experience</h4>
    <p class="card-text">Priority to Quality</p>
    <a href="#" class="btn btn-success">See More</a>
  </div>
</div>
</div>
   </div>
  </div>
</section>

<!--service section ends here!-->

<!--Gallery area starts here!-->
<section>
  <h2 class="text-center my-5">Our Gallery</h2>
  <div class="container-fluid">
   <div class="row">

<div class="gallery-single-box col-lg-3 col-md-3 col-12 pb-4">
   <img src="/public/images/g.jpg" alt="">
   </div>
   <div class="gallery-single-box col-lg-3 col-md-3 col-12 pb-4">
   <img src="/public/images/g2.jpg" alt="">
   </div>
   <div class="gallery-single-box col-lg-3 col-md-3 col-12 pb-4">
   <img src="/public/images/g3.jpg" alt="">
   </div>
   <div class="gallery-single-box col-lg-3 col-md-3 col-12 pb-4">
   <img src="/public/images/g4.jpg" alt="">
</div>

<div class="gallery-single-box col-lg-3 col-md-3 col-12 pb-4">
   <img src="/public/images/g5.jpg" alt="">
   </div>
   <div class="gallery-single-box col-lg-3 col-md-3 col-12 pb-4">
   <img src="/public/images/g6.jpg" alt="">
   </div>
   <div class="gallery-single-box col-lg-3 col-md-3 col-12 pb-4">
   <img src="/public/images/g7.jpg" alt="">
   </div>
   <div class="gallery-single-box col-lg-3 col-md-3 col-12 pb-4">
   <img src="/public/images/g8.jpg" alt="">
</div>
 

<div class="gallery-single-box col-lg-3 col-md-3 col-12  pb-4">
   <img src="/public/images/g9.jpg" alt="">
   </div>
<div class="gallery-single-box col-lg-3 col-md-3 col-12  pb-4">
   <img src="/public/images/g10.jpg" alt="">
   </div> 
<div class="gallery-single-box col-lg-3 col-md-3 col-12  pb-4">
   <img src="/public/images/g11.jpg" alt="">
   </div>
<div class="gallery-single-box col-lg-3 col-md-3 col-12  pb-4">
   <img src="/public/images/g12.jpg" alt="">
</div>

</div>
</div>
</section>
<!--Gallery area ends here!-->

<!--Contact area starts here!-->
<section>
  <h2 class="text-center my-5">Contact Us</h2>
  <div class="container-fluid">
   <div class="row">

   <?php
if(isset($_REQUEST["action"])){
  if($_REQUEST["action"] == "true"){

    echo "<font style='color:green'><h4>'We have accepted your comment!'</h4></font>";
  }

  else{
    echo "<font style='color:red'><h4>'Fill the require field please!'</h4></font>";
  }
}

?>

  <form action="user_info.php" htmlspecialchars method="post">
<div class="w-50 m-auto">
  <div class="form-group pb-3">
  <label for="fname">First Name:</label>
  <input type="text" name="fname" placeholder="Type your first name" class="form-control" autocomplete="off" Required>
  </div>



  <div class="form-group pb-3">
  <label for="lname">Last Name:</label>
  <input type="text" name="lname" placeholder="Type your last name" class="form-control" autocomplete="off" Required>
  </div>

  <div class="form-group pb-3">
  <label for="email">Email Address:</label>
  <input type="email" name="email_addr" placeholder="Type your email" class="form-control" autocomplete="off" Required>
  </div>

  <div class="form-group pb-3">
  <label for="email">Mobile No:</label>
  <input type="text" name="mobile" placeholder="Type your mobile no." class="form-control" autocomplete="off" Required>
  </div>


  <div class="form-group pb-3">
  <label for="comment">Comment:</label>
  <textarea name="comment" id="" class="form-control" cols="15" rows="6" placeholder="Type your comment.." Required></textarea>
  </div>

  <button  type="submit" class="btn btn-success mb-3">Submit Now</button>
  </form>
  </div>
</div>
</div>
</section>
<!--Contact area ends here!-->

<!--footer area starts here!-->
<footer>
<h6 class="bg-dark text-light py-3 mt-5 mb-0 text-center">&copy 2020-2021 Sahed's Creation. All right reserved.</h6>
</footer>
<!--footer area ends here!-->



    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
  </body>
</html>
