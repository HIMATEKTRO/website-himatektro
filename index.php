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

    <!-- Page Content container-->
    <div class="container pb-4">

      <!-- START IMAGE SILDER-->
      <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators ">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="images/sld1.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>First slide label</h5>
              <p>Some representative placeholder content for the first slide.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="images/sld2.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Second slide label</h5>
              <p>Some representative placeholder content for the second slide.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="images/sld3.jpg" class="d-block w-100" alt="...">
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
      <!-- END IMAGE SILDER-->

      <!-- Welcome text -->
      <p class="text-center fw-bolder fs-4 pt-5">SELAMAT DATANG DI WEBSITE HIMPUNAN MAHASISWA TEKNIK ELEKTRO</p>


      <!-- START VISI DAN MISI CARD -->
      <div class="row" style="margin-top: 4%">
        <!-- Blog Entries Column -->
        <div class="col-md-12">
            <br /><br />
          <!-- Blog Post -->
          <div class="card mb-4">
              
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
    <!-- /.container -->

    <!-- Footer -->
    <?php include('includes/footer.php');?>


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    
    <!--
  </body>

</html>
-->
 