<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport"
    content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minumum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Terminal Bus Malang</title>
  <!-- font awesmoe cdn-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
  <!-- Scroll reveal Cdn -->
  <script src="https://unpkg.com/scrollreveal"></script>
  <link rel="stylesheet" href="style copy.css">
</head>

<body>
  <header>
    <div class="container">
      <nav class="nav">
        <div class="menu-toggle">
          <i class="fas fa-bars"></i>
          <i class="fas fa-times"></i>
        </div>
        <a href="#" class="logo"><img src="image_bus/logo-bus.png" title="Ra-re logo"></a>
        <ul class="nav-list">
          <li class="nav-item">
            <a href="#" class="nav-link active">Home</a>
          </li>
          <li class="nav-item">
            <a href="lokasi.php" class="nav-link">Lokasi</a>
          </li>
          <li class="nav-item">
            <a href="index_2.php" class="nav-link">Jadwal</a>
          <li class="nav-item">
            <a href="#contact" class="nav-link">Contact</a>
          </li>

      
          <li class="nav-item">
            <a href="Admin/authenticationa.html" class="nav-link">
            <i class="fas fa-user-cog" title="Login Admin" > </i>
            </a>
          </li>
    

        </ul>
      </nav>
    </div>
  </header>
  <!-- Header ends -->
  <section class="hero" id="hero">
    <div class="container">
      <h2 class="sub-headline" style="font-family: 'Farro', sans-serif; font-size: 30px; font-weight: 600;">
        <!-- <center> -->
        <div class="me">
          <img src="image_bus/logo-bus.png" alt="">
        </div>
        <!-- </center> -->
        Terminal Bus dan Angkutan Umum
      </h2>
      <h1 class="headline">AREA KOTA MALANG</h1>
      <div class="headline-description">
        <div class="separator">
          <div class="line line-left"></div>
          <div class="asterik"><i class="fas fa-asterisk"></i></div>
          <div class="line line-right"></div>
        </div>
        <div class="single-animation">
          <h5>SELAMAT DATANG DI TERMINAL BUS DAN ANGKUTAN UMUM AREA KOTA MALANG </h5>
          <h5>KAMU BISA MENEMUKAN AREA DIMANA TERMINAL YANG BERADA DI MALANG DENGAN MUDAH</h5>
          <h5>SERTA JADWAL PEMBERANGKATAN.</h5>
          <a href="index_2.php" class="btn cta-btn">Cek jadwal</a>
        </div>
      </div>
    </div>
  </section>
  <!-- Hero ends -->

  <section class="discover-our-story" id="visi">
    <div class="container">
      <div class="pendidikan-info">
        <div class="pendidikan-description padding-right animate-left">
          <div class="global-headline">
            <h2 class="sub-headline">
              <span class="first-letter">V</span>ision 
            </h2>
            <h1 class="headline headline-dark" id="pendidikan">Tujuan</h1>
            <div class="asterik"><i class="fas fa-asterisk"></i></div>
          </div>
          <p>Tujuan pembuatan website ini untuk memudahkan para penduduk malang atau luar malang
            mengetahui titik lokasi dari terminal bis dan angkutan kota yang terdapat di malang, serta jadwal keberangkatan dari setiap bis.
          </p>
          <a href="lokasi.php" class="btn cta-btn" style="background-color: #dedede">Cek Lokasi</a>
        </div>
        <div class="img animate-right">
          <img src="image_bus/LOL.jpg" alt="">
        </div>
      </div>
    </div>
  </section>
   
 
  

  <footer>
    <div class="container">
      <div class="back-to-top">
        <a href="#"><i class="fas fa-chevron-up"></i></a>
      </div>
      <div class="footer-content">
        <div class="footer-content-about animate-top">
          <h4 id="contact">About Us</h4>
          <div class="asterik"><i class="fas fa-asterisk"></i></div>
          <p class="space-lorem">
            Mahasiswa Teknik Informatika Universitas Islam Negeri Malang angkatan 2018. Pembuatan website ini bertujuan untuk memenuhi tugas akhir mata kuliah praktikum sistem informasi geografis yang beranggotakan 3 orang.
          </p>
        </div>
        <div class="footer-content-divider animate-bottom">
          <div class="social-media">
            <h4>Follow along </h4>
            <ul class="social-icon">
              <li>
                <a href="#"><i class="fa-bars fab fa-twitter"></i></a>
              </li>
              <li>
                <a href="#"><i class="fa-bars fab fa-facebook-square"></i></a>
              </li>
              <li>
                <a href="#"><i class="fa-bars fab fa-pinterest"></i></a>
              </li>
              <li>
                <a href="#"><i class="fa-bars fab fa-linkedin-in"></i></a>
              </li>
              <li>
                <a href="#"><i class="fa-bars fab fa-tripadvisor"></i></a>
              </li>
            </ul>
          </div>
          <div class="newsletter-container">
            <h4>Newsletter</h4>
            <form action="" class="newsletter-form">
              <input type="text" class="newsletter-input" placeholder="Your email address...">

              <button class="newsletter-btn" type="submit">
                <i class="fas fa-envelope"></i>
              </button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <script src="main.js"></script>
</body>

</html>