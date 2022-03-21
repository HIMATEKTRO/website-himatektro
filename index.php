<?php 
session_start();
include('includes/config.php');

    ?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> Home Page | HIMPUNAN MAHASISWA TEKNIK ELEKTRO | UNIVERSITAS SYIAH KUALA </title>
    
    <!-- Set favicon icon in head-->
    <link rel="shortcut icon" type="image/png" href="./himatektro-icon.png">

    <!-- JavaScript FontAwesome -->
    <script src="https://kit.fontawesome.com/ad0d081d8e.js" crossorigin="anonymous"></script>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/modern-business.css" rel="stylesheet">

  </head>

  <body>

     <!-- Navigation -->
    <?php include('includes/header.php');?>

    <!-- Page Content-->

    <!-- START IMAGE SILDER-->
    <div class="container p-4">
      <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators ">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="images/slide1.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>First slide label</h5>
              <p>Some representative placeholder content for the first slide.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="images/slide2.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Second slide label</h5>
              <p>Some representative placeholder content for the second slide.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="images/slide3.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Third slide label</h5>
              <p>Some representative placeholder content for the third slide.</p>
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
    </div>
    <!-- END IMAGE SILDER-->

    <div class="container p-4">
      <!-- Welcome text -->
      <p class="text-center fw-bolder fs-4">SELAMAT DATANG DI WEBSITE HIMPUNAN MAHASISWA TEKNIK ELEKTRO</p>
      <!-- START VISI DAN MISI CARD -->
      <div class="row" style="margin-top: 4%">
        <!-- Blog Entries Column -->
        <div class="col-md-12">
          <!-- Blog Post -->
          <div class="shadow card p-3 mb-4">
            <h5 class="card-header text-center">VISI dan MISI</h5>
            <div class="card-body">
              <h5 class="card-title">VISI :</h5>
              <p class="card-text">Terwujudnya Himpunan Mahasiswa Teknik Elektro sebagai tempat berkarya bagi seluruh mahasiswa untuk memiliki karakter Progresivitas, Kompetitif, dan Aktualis.</p>
              <h5 class="card-title">MISI :</h5>
              <p class="card-text">1. Peningkatkan koordinasi dan kualitas kerjasama BEM dengan seluruh organisasi</p>
              <p class="card-text">2. Peningkatan mutu pengabdian masyarakat terorganisir</p>
              <p class="card-text">3. Fasilitas pengembangan mutu minat bakat, keilmuan, dan karakter mahasiswa pada tingkat Universitas, Regional, Nasional, dan Internasional</p>
            </div>
          </div>
        </div>
      </div>
      <!-- END VISI DAN MISI CARD -->
    </div>

    <!-- OTHER WEBSITE LINK -->
    <div class="container p-4">
      <div class="d-flex align-items-center p-4">
        <a href="https://elektro.unsyiah.ac.id/"><img src="images/UskLogo.png" alt="" width="96" height="96" class="shadow rounded-circle img-thumbnail"></a>
        <a class="link-warning ps-4" href="https://elektro.unsyiah.ac.id/">Program Studi Teknik Elektro Universitas Syiah Kuala</a>
      </div>
      <div class="d-flex align-items-center p-4">
        <a href="https://ikatektro.org/"><img src="images/IkatektroLogo.png" alt="" width="96" height="96" class="shadow rounded-circle img-thumbnail"></a>
        <a class="link-warning ps-4" href="https://ikatektro.org/">Ikatan Alumni Teknik Elektro Universitas Syiah Kuala</a>
      </div>
      <!-- KROENG
      <div class="d-flex align-items-center p-4">
        <a href="#"><img src="images/IkatektroLogo.png" alt="" width="96" height="96" class="shadow rounded-circle img-thumbnail"></a>
        <a class="link-warning ps-4" href="#">KROENG</a>
      </div>
      -->
    </div>

    <!-- Adress -->
    <div class="container p-4">
      <div class="shadow embed-responsive embed-responsive-16by9">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d992.7490038330377!2d95.36880162922857!3d5.567604234525771!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x304037f8a4d365a5%3A0x726f948b6c71096c!2sSEKRETARIAT%20HIMATEKTRO%20FT%20USK!5e0!3m2!1sen!2sid!4v1647761497770!5m2!1sen!2sid" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
      </div>
      
      <div class="d-lg-flex align-items-center p-4">
        <img src="images/HimatektroLogo.png" alt="" width="96" height="96" class="shadow rounded-circle img-thumbnail me-4">
        <p class="lead">Address:
        <br>Jln. Meureubo No.A9, Kopelma Darussalam, Kec. Syiah Kuala, Kota Banda Aceh, Aceh 24415
        <br>Email: himatektro.ft@unsyiah.ac.id</p>
      </div>
    </div>

    
    <!-- /.Content -->

    <!-- Footer -->
    <?php include('includes/footer.php');?>


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    
    <!--
  </body>

</html>
-->
 
