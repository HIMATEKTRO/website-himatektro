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

    <title>HIMATEKTRO | DEPARTEMEN</title>

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

    <!-- Page Content -->
    <div class="container">

      <div class="row" style="margin-top: 4%">

        <!-- Blog Entries Column -->
        <div class="col-md-8">

          <!-- Blog Post -->
          <div class="card mb-4">
            <h5 class="card-header">VISI dan MISI</h5>
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

        <!-- Sidebar Widgets Column -->
      <?php include('includes/sidebar.php');?>
      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- Footer -->
      <?php include('includes/footer.php');?>


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

 
</head>
  </body>

</html>
