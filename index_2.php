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
     <?php require 'koneksi.php'; ?>
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
                              <a href="index.php" class="nav-link ">Home</a>
                         </li>
                         <li class="nav-item">
                              <a href="lokasi.php" class="nav-link">Lokasi</a>
                         </li>
                         <li class="nav-item">
                              <a href="#" class="nav-link active">Jadwal</a>
                         <li class="nav-item">
                              <a href="#contact" class="nav-link ">Contact</a>
                         </li>
                         <li class="nav-item">
            <a href="#" class="nav-link">
            <i class="fas fa-user-cog" title="Login Admin" > </i>
            </a>
          </li>
                    </ul>
               </nav>
          </div>
     </header>
     <!-- Header ends -->

     <!-- discover our story end -->
     <section class="jadwal between">
          <div class="container">
               <div class="global-headline">
                    <div class="animate-top">
                         <h2 class="sub-headline">
                              <span class="first-letter">J</span>adwal
                         </h2>
                    </div>
                    <div class="animate-bottom">
                         <h1 class="headline headline-white">pemberangkatan</h1>
                    </div>
               </div>
          </div>
     </section>
     <!-- Tastefull recipe end -->

     <section class="discover-our-menu">
          <div class="container">
               <div class="full">
                    <table class="table" style="font-size: 14px; width: auto; margin-top: 0">
                         <tr>
                             <th>No</th>
                             <th>Terminal Asal</th>
                             <th>Operator</th>
                             <th>Kelas</th>
                             <th>Jam Keberangkatan</th>
                             <th>Jam Kedatangan</th>
                             <th>Tujuan</th>
                             <th>Waktu Tempuh</th>
                             <th>Harga Tiket</th>
                         </tr>

                         <?php 
                         $query_tampilSemua = "SELECT * FROM jadwal_keberangkatan";
                         $sql_tS = mysqli_query($koneksi, $query_tampilSemua);

                         while ($row1 = mysqli_fetch_array($sql_tS)) {?>
                             <tr>
                                 <th style="background-color: rgb(140, 139, 136)">
                                     <?php echo $row1['id']; ?></th>

                                 <td><?php echo $row1['id_terminal'];?></td>
                                 <td><?php echo $row1['operator'];?></td>
                                 <td><?php echo $row1['kelas'];?></td>
                                 <td><?php echo $row1['jam_berangkat'];?></td>
                                 <td><?php echo $row1['jam_datang'];?></td>
                                 <td><?php echo $row1['tujuan'];?></td>
                                 <td><?php echo $row1['waktu_tempuh'];?></td>
                                 <td><?php echo $row1['harga'];?></td>
                                 
                             </tr>
                        <?php }
                          ?>
                     </table>


               </div>
          </div>
     </section>

     <footer>
          <div class="container">
               <div class="back-to-top">
                    <a href="#"><i class="fas fa-chevron-up"></i></a>
               </div>
               <div class="footer-content" id="contact">
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