<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <title>Samba - carwash</title>
</head>
<body>
  <!--header-->
  <nav class="navbar bg-light">
    <div class="container-fluid">
      <span class="navbar-text">
        Kinclongkan kendaraan anda<br> 
        bersama Samba Car Wash
      </span>
    </div>
    <div class="col-lg-12 text-center">
    <span class="navbar-text">
        <B>Buka setiap hari!
      </span>
          <span class="phone-icon"><i class="fa fa-phone"></i>(07.30 - 17:00)</span>
          <span class="date-icon"><i class="fa fa-calendar-plus-o"></i>0895-6254-52902</span>
          </div>
  </nav> 
   <!--Navbar-->
   <nav class="navbar navbar-expand-lg" style="bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Samba - carwash</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" 
      data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" 
      aria-expanded="false" aria-label="Toggle navigation">
      
      <span class="navbar-toggler-icon"></span>
      </button>

      <nav class="navbar navbar-expand-lg" style="bg-light">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="order">Order</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Saran</a>
          </li>
          <li class="nav-item">
            <button type="button" class="btn btn-secondary">Login</button>
          </li>
        </nav>
      </nav>

          <!--carousel--> 
          <div id="carouselExampleRide" class="carousel slide" data-bs-ride="true">
          <div class="row justify-content-center mt-2s">
            <div class="col-lg-16">
                <div class="carousel-inner">
              <svg width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="var(--bs-secondary-color)"></rect></svg>

              <div class="carousel-item active">
                <img src="{{('img/slider1.jpg')}}" width="100%" height="100%">
              </div>
              <div class="carousel-item">
                <img src="{{('img/slider2.jpg')}}" width="100%" height="100%">
              </div>
              <div class="carousel-item">
                <img src="{{('img/slider3.jpg')}}" width="100%" height="100%">
              </div>
              
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
          </div>
            </div>
              </div>
                </div>
                   
                  


          <!--footer-->
          <footer class="py-3s">
            <div style="bg-light">
            <div class="container">
              <div class="row">
                <div class="col-lg-12 text-center">
              <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
                <svg class="bi" width="30" height="24"><use xlink:href="#bootstrap"></use></svg>
              </a>
            </div>
        
            <ul class="nav justify-content-center border-bottom pb-3 mb-3">
              <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Home</a></li>
              <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Order</a></li>
              <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Saran</a></li>
              <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Login</a></li>
            </ul>

            <p class="text-center text-body-secondary">©2023  Samba - carwash</p>
          </footer>
      </div>
    </div>
  </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>
</html>