<?php
$host = 'localhost';
$username = 'root';
$password = '';
$dbname = 'formationsite';
$form_id = $_GET['form_id'];

$connection = mysqli_connect($host, $username, $password, $dbname);
if ($connection == false) {
  die('Erreur de connexion!');
} else {
  $select = "SELECT * from Formations where id_formation=$form_id";
  $result = mysqli_query($connection, $select);
  if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_array($result)) {
      $nom = $row[1];
      $image = $row[2];
      $objectif = $row[3];
      $descriptif = $row[4];
      $localisation = $row[5];
      $date = $row[6];
      $masse_horaire = $row[7];
      $duree = $row[8];
      $prix = $row[9];
      $public_cible = $row[10];
      $avantages = $row[11];
      $poster = $row[12];
      $encours = $row[13];
    }
  } else {
    echo "<p>Erreur!</p>";
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title><?php echo $nom; ?> - Ibtikarcom</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: MyBiz - v4.7.0
  * Template URL: https://bootstrapmade.com/mybiz-free-business-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="fixed-top d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:agenceibtikarcom@gmail.com">agenceibtikarcom@gmail.com</a></i>
        <i class="bi bi-phone d-flex align-items-center ms-4"><span>+212-700-252-045</span></i>
      </div>
      <div class="social-links d-none d-md-flex">
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <!--<h1><a href="index.html">My<span>Biz</span></a></h1>-->
        <!-- Uncomment below if you prefer to use an image logo -->
        <a href="https://ibtikarcom.com/"><img src="assets/img/logo_.png" alt="Ibtikarcom" class="img-fluid"></a>
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto " href="index.php">Formations</a></li>
          <li><a class="nav-link scrollto" href="https://ibtikarcom.com/">Ibtikarcom</a></li>
          <li><a class="nav-link scrollto" href="https://event.ibtikarcom.com/">Evenements</a></li>
          <li><a class="nav-link scrollto " href="#">Entreprenariat</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Portfolio Details</h2>
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>Portfolio Details</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details mt-5">
      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-8">
            <div class="portfolio-details-slider swiper">
              <div class="swiper-wrapper align-items-center">

                <div class="swiper-slide">
                  <img src="assets/img/<?php echo $poster; ?>" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="<?php echo $image; ?>" alt="">
                </div>

              </div>
              <div class="swiper-pagination"></div>
            </div>
            <?php
            if ($encours == 1) {
              echo "
            <div class='formulaire p-3'>
              <form action='#' method='post'>
                <fieldset>
                  <legend>Formulaire de Participation</legend>
                  <div class='row'>
                    <div class='mb-3 col-lg-6 col-md-12'>
                      <label for='name' class='form-label'>Nom et Prénom :</label>
                      <input type='text' name='name' id='name' class='form-control' required>
                    </div>
                    <div class='mb-3 col-lg-6 col-md-12'>
                      <label for='phone' class='form-label'>Numéro de téléphone :</label>
                      <input type='text' name='phone' id='phone' class='form-control' required>
                    </div>
                    <div class='mb-3 col-lg-6 col-md-12'>
                      <label for='email' class='form-label'>Email :</label>
                      <input type='email' name='email' id='email' class='form-control' required>
                    </div>
                    <div class='mb-3 col-lg-6 col-md-12'>
                      <label for='entreprise' class='form-label'>Enreprise/Université/Ecole :</label>
                      <input type='text' name='entreprise' id='entreprise' class='form-control' required>
                    </div>
                    <div class='mb-3 col-lg-6 col-md-12'>
                      <label for='fonction' class='form-label'>Fonction :</label>
                      <input type='text' name='fonction' id='fonction' class='form-control' required>
                    </div>
                    <div class='mb-3 col-lg-6 col-md-12'>
                      <label for='secteur' class='form-label'>Secteur d'activité :</label>
                      <input type='text' name='secteur' id='secteur' class='form-control' required>
                    </div>
                    <div class='mb-3 col-lg-6 col-md-12'>
                      <label for='ville' class='form-label'>Ville :</label>
                      <input type='text' name='ville' id='ville' class='form-control' required>
                    </div>
                    <div class='mb-3 col-lg-6 col-md-12'>
                      <label for='paiement' class='form-label'>Paiement :</label><br>
                      <input type='radio' name='paiement' value='virement' id='paiement' required> <label for='virement' class='form-label'>Virement</label><br>
                      <input type='radio' name='paiement' value='especes' id='paiement' required> <label for='especes' class='form-label'>Espèces</label><br>
                      <input type='radio' name='paiement' value='cheques' id='paiement' required> <label for='cheques' class='form-label'>Par Chèques</label>
                    </div>
                  </div>
                </fieldset>
                <div class=' mb-3 mt-3 d-flex justify-content-center'>
                  <button type='submit' name='submit' class='btn btn-info'>S'inscrire</button>
                </div>
              </form></div>";
            }

            $host = 'localhost';
            $username = 'root';
            $password = '';
            $dbname = 'formationsite';

            $connection = mysqli_connect($host, $username, $password, $dbname);
            if (!$connection) {
              die('Could not Connect MySql Server!');
            }
            if (isset($_POST['submit'])) {


              $name = $_POST['name'];
              $email = $_POST['email'];
              $tel = $_POST['phone'];
              $entreprise = $_POST['entreprise'];
              $fonction = $_POST['fonction'];
              $secteur = $_POST['secteur'];
              $ville = $_POST['ville'];
              $paiement = $_POST['paiement'];
              $id_formation = $_GET['form_id'];
              $sql = "INSERT INTO users (name_user, email,id_formation, entreprise, phone, fonction, secteur, ville, paiement) 
                    VALUES ('$name', '$email', '$id_formation', '$entreprise','$tel', '$fonction', '$secteur', '$ville', '$paiement')";
              if (mysqli_query($connection, $sql)) {
                echo "Votre insription a été enregistée avec succès!";
              } else {
                echo "Error: " . $sql . ":-" . mysqli_error($connection);
              }
              mysqli_close($connection);
            }

            ?>
        </div>


        <div class="col-lg-4">
          <div class="portfolio-info">
            <h3>Formation: <span><?php echo $nom; ?></span></h3>
            <ul>
              <li><strong>Localisation</strong>: <?php echo $localisation; ?></li>
              <li><strong>Date</strong>: <?php echo $date; ?></li>
              <li><strong>Masse Horaire</strong>: <?php echo $masse_horaire; ?></li>
              <li><strong>Durée</strong>: <?php echo $duree; ?></li>
              <li><strong>Prix</strong>: <?php echo $prix; ?> dh/mois</li>
              <li><strong>Public Cible</strong>: <?php echo $public_cible; ?></li>
            </ul>
          </div>
          <div class="portfolio-description">
            <h2>Informations sur la formation</h2>
            <p>
              <?php
              echo str_replace("-", "<br>-", $descriptif);
              ?>
            </p>
          </div>
          <div class="portfolio-description">
            <h2>Objectifs</h2>
            <ul>
              <?php
              echo str_replace("-", "<li>", $objectif);

              ?>
            </ul>
          </div>
          <div class="portfolio-description">
            <h2>Avantages</h2>
            <ul>
              <?php
              echo str_replace("-", "<li>", $avantages);
              ?>
            </ul>
          </div>
        </div>

      </div>

      </div>
    </section><!-- End Portfolio Details Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>Ibtikarcom</h3>
              <p>
                47, Rue Aït Ba Amrane 3ème étage - Casablanca Maroc<br><br>
                <strong>Phone:</strong> +212-700-252-045<br>
                <strong>Email:</strong> agenceibtikarcom@gmail.com<br>
              </p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Liens Utils</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#hero">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#about">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#services">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#team">Terms of service</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Nos Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="">Design & Edition</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="">Production Audio-visuelle</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="">Evènementiel</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="">Location de matériel</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="">Formation, conseil et stratégie</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Agence</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="">A propos de L'agence</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="">Equipe</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="">Projets</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="">Blog</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="">Contact</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="">FAQs</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>MyBiz</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/mybiz-free-business-bootstrap-theme/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>