<!DOCTYPE html >
<html lang="en"  style="scroll-behavior: auto;">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>
<style>
  
  .carousel-indicators button {
    height: 10px !important;
    width: 10px !important;
    margin: 0 10px !important;
    border-radius: 100%;
    background-color: #f7f7f7 !important;
}
                
</style>
<body id="top"  style="font-family: 'EB Garamond', serif;">
  <div class="container">
    <header class="blog-header lh-1 py-3 shadow-sm  bg-body rounded">
      <div class="row flex-nowrap justify-content-between align-items-center">
        <div class="col-8">
          <a class="blog-header-logo  text-dark" href="../home" style="text-decoration:none">Kinclongkan kendaraan anda bersama Hugo Car Wash</a>
        </div>
        <div class="col-4 d-flex justify-content-end align-items-center">
          <a class="btn btn-sm btn-outline-secondary" href="#">Sign up</a>
        </div>
      </div>
    </header>
  </div>
  <nav class="navbar navbar-expand-lg bg-light sticky-top">
    <div class="container ">
      <a class="navbar-brand" href="#top"><h3><b>Simba - Carwash</b></h3></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link active" aria-current="page" href="#top">Home</a>
          <a class="nav-link" href="#tentang kami">Tentang Kami</a>
          <a class="nav-link" href="#pendaftaran">Pendaftaran</a>
          <a class="nav-link disabled">Kritik dan Saran</a>
        </div>
      </div>
    </div>
  </nav>
      <div id="home" class="container-fluid mt-5">
        <div id="carouselExampleDark" class="carousel  w-100 slide" data-bs-ride="carousel">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner  border rounded shadow-sm h-md-250">
              <div class="carousel-item active" data-bs-interval="10000">
                  <img style="filter: brightness(50%)" src="img/slider1.jpg" class="d-block w-100" alt="...">
                  <div class="carousel-caption">
                      <p><b>Percayakan noda kendaraan Anda kepada Kami.</b></p>
                      <h3><b>Samba - Car Wash</b></h3>
                      <button type="button" class="btn btn-success mb-5">Warning</button>
                  </div>
              </div>
              <div class="carousel-item" data-bs-interval="2000">
                  <img style="filter: brightness(50%)" src="img/slider2.jpg" class="d-block w-100" alt="...">
                  <div class="carousel-caption ">
                      <p><b>Some representative placeholder content for the second slide.</b></p>
                      <h3><b>Samba - Car Wash</b></h3>
                      <button type="button" class="btn btn-success mb-5">Warning</button>
                  </div>
              </div>
              <div class="carousel-item">
                  <img style="filter: brightness(50%)" src="img/slider3.jpg" class="d-block w-100" alt="...">
                  <div class="carousel-caption">
                      <p><b>Some representative placeholder content for the third slide.</b></p>
                      <h3><b>Samba - Car Wash</b></h3>
                      <button type="button" class="btn btn-success mb-5">Warning</button>
                  </div>
              </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
      </div>
</div>

<div id="tentang kami" class="container-fluid mt-5" style="background-color: #F4F4F4;">
  <div class="row ">
    <div class="col-md-6 col-sm-6 mt-5">
         <div class="about-info p-5">
              <h2 class="wow fadeInUp animated" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;"><b>Tentang Kami</b></h2>
              <div class="wow fadeInUp animated" data-wow-delay="0.8s" style="visibility: visible; animation-delay: 0.8s; animation-name: fadeInUp;">
                   <p>Hugo Carwash merupakan salah satu bidang usaha yang menawarkan jasa perawatan kendaraan berupa pencucian dan pembersihan kendaraan.</p>
              </div>
              <figure class="profile wow fadeInUp animated" data-wow-delay="1s" style="visibility: visible; animation-delay: 1s; animation-name: fadeInUp;">
                   <figcaption>
                        <h3><b>Dijamin Bersih</b></h3>
                   </figcaption>
              </figure>
              <figure class="profile wow fadeInUp animated" data-wow-delay="1s" style="visibility: visible; animation-delay: 1s; animation-name: fadeInUp;">
                   <figcaption>
                        <h3><b>Dijamin Kilat</b></h3>
                   </figcaption>
              </figure>
              <figure class="profile wow fadeInUp animated" data-wow-delay="1s" style="visibility: visible; animation-delay: 1s; animation-name: fadeInUp;">
                   <figcaption>
                        <h3><b>Dijamin Wangi</b></h3>
                   </figcaption>
              </figure>
              <figure class="profile wow fadeInUp animated" data-wow-delay="1s" style="visibility: visible; animation-delay: 1s; animation-name: fadeInUp;">
                   <figcaption>
                        <h3><b>Dijamin Puas</b></h3>
                   </figcaption>
              </figure>
         </div>
    </div>

</div>
</div>

<section id="pendaftaran" data-stellar-background-ratio="3" style="background-position: 0px 1241.5px;">
  <div class="container mt-3 p-5">
    <h1 class="text-center mt-3">Pendaftaran</h1>
    <form class="row g-3 ">
      <div class="col-md-6">
        <label for="inputEmail4" class="form-label">Nama</label>
        <input type="email" class="form-control" id="Nama Anda">
      </div>
      <div class="col-md-6">
        <label for="inputPassword4" class="form-label">No.Handphone</label>
        <input type="password" class="form-control" id="Masukkan No. Handphone Kamu">
      </div>
      <div class="col-md-6">
        <label for="inputAddress" class="form-label">Alamat</label>
        <input type="text" class="form-control" id="inputAddress" placeholder="1234 jl.pangoi">
      </div>
      <div class="col-md-6">
        <label for="inputAddress2" class="form-label">No. Plat</label>
        <input type="text" class="form-control" id="inputAddress2" placeholder="No. Plat kendaraan Anda">
      </div>
      <div class="col-md-6">
        <label for="inputState" class="form-label">Type Mobil</label>
        <select id="inputState" class="form-select">
          <option selected>Pilih Type Mobil Kamu.</option>
          <option>Avanza</option>
          <option>Innova</option>
          <option>Jazz</option>
          <option>SUV</option>
        </select>
      </div>
      <div class="col-md-6">
        <label for="inputAddress" class="form-label">No. Antrian</label>
        <input type="text" class="form-control" id="inputAddress" placeholder="1234">
      </div>
      <div class="col-md-6">
        <label for="inputState" class="form-label">Jenis Cucian</label>
        <select id="inputState" class="form-select">
          <option selected>Pilih Jenis Cucian Kamu</option>
          <option>Cucian Body</option>
          <option>Cucian Menyeluruh</option>
        </select>
      </div>
      <div class="col-md-6">
        <label for="inputZip" class="form-label">Tanggal Pendaftaran</label>
        <input type="text" class="form-control" id="inputZip" placeholder="">
      </div>
      <div class="col-md-6">
        <label for="inputAddress" class="form-label">jam pendaftaran</label>
        <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
      </div>
      <div class="d-grid gap-2 mt-5">
        <button class="btn text-white" style="background-color: #68762F;" type="button">Button</button>
      </div>
    </form>
  </div>
</section>

<div class="container-fluid mt-5 p-5">
  <div class="row p-5">

    <div class="col-md-4 col-sm-4">
         <div class="footer-thumb">
              <h4 class="wow fadeInUp animated" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">Informasi Lanjut</h4>
              <p>Untuk mengetahui informasi lebih lanjut, silahkan hubungi kontak berikut.</p>

              <div class="contact-info">
                   <p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                    <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                  </svg> 081223445667</p>
                   <p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                    <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"/>
                  </svg> <a href="#">info@company.com</a></p>
              </div>
         </div>
    </div>

    <div class="col-md-4 col-sm-4">
         &nbsp;
    </div>

    <div class="col-md-4 col-sm-4">
         <div class="footer-thumb">
              <div class="opening-hours">
                   <h4 class="wow fadeInUp animated" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">Waktu Operasional</h4>
                   <p>Senin - Minggu <span>07:30 - 17:00</span></p>
              </div>
         </div>
    </div>

    <div class="col-md-12 col-sm-12 border-top">
         <div class="col-md-6 col-sm-6">
              <div class="copyright-text">
                   Copyright © <script type="text/javascript">var creditsyear = new Date();document.write(creditsyear.getFullYear());</script>2023 <a expr:href="data:blog.homepageUrl"><data:blog.title></data:blog.title></a>. All rights reserved.
              </div>
         </div>

         <div class="col-md-2 col-sm-2 text-align-center">
              <div class="angle-up-btn">
                  <a href="#top" class="smoothScroll wow fadeInUp animated" data-wow-delay="1.2s" style="visibility: visible; animation-delay: 1.2s; animation-name: fadeInUp;"><i class="fa fa-angle-up"></i></a>
              </div>
         </div>
    </div>

</div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    
</body>
</html>