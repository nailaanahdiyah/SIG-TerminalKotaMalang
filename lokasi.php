<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minumum-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>Terminal Bus Malang</title>
     <!-- font awesmoe  cdn-->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
     <!-- Scroll reveal Cdn -->
     <script src="https://unpkg.com/scrollreveal"></script>
     <link rel="stylesheet" href="style copy.css">
     <!-- js mapbox -->  
     <script src='https://api.tiles.mapbox.com/mapbox-gl-js/v2.2.0/mapbox-gl.js'></script>
     <link href='https://api.tiles.mapbox.com/mapbox-gl-js/v2.2.0/mapbox-gl.css' rel='stylesheet' />

<style>
     * {
          -webkit-box-sizing: border-box;
          -moz-box-sizing: border-box;
          box-sizing: border-box;
     }
     .sidebar {
          position: absolute;
          width: 33.3333%;
          height: 100%;
          top: 0;
          left: 0;
          overflow: hidden;
          border-right: 1px solid rgba(0, 0, 0, 0.25);
     }
     
     .map {
          position: absolute;
          left: 33.3333%;
          width: 66.6666%;
          top: 0;
          bottom: 0;
     }
     
     h1 {
          font-size: 22px;
          margin: 0;
          font-weight: 400;
          line-height: 20px;
          padding: 20px 2px;
     }
     
     a {
          color: #404040;
          text-decoration: none;
     }
     
     a:hover {
          color: #101010;
     }
     
     .heading {
          background: #fff;
          border-bottom: 1px solid #eee;
          min-height: 60px;
          line-height: 60px;
          padding: 0 10px;
          background-color: rgb(53, 58, 44);
          color: #fff;
     }
     
     .listings {
          height: 100%;
          overflow: auto;
          padding-bottom: 60px;
     }
     
     .listings .item {
          display: block;
          border-bottom: 1px solid #eee;
          padding: 10px;
          text-decoration: none;
     }
     
     .listings .item:last-child {
          border-bottom: none;
     }
     .listings .item .title {
          display: block;
          color: #c59d5f;
          font-weight: 700;
     }
     
     .listings .item .title small {
          font-weight: 400;
     }
     .listings .item.active .title,
     .listings .item .title:hover {
          color: rgb(53, 58, 44);
     }
     .listings .item.active {
          background-color: #f8f8f8;
     }
     ::-webkit-scrollbar {
          width: 3px;
          height: 3px;
          border-left: 0;
          background: rgba(0, 0, 0, 0.1);
     }
     ::-webkit-scrollbar-track {
          background: none;
     }
     ::-webkit-scrollbar-thumb {
          background: #000000;
          border-radius: 0;
     }
     
     .marker {
          border: none;
          cursor: pointer;
          height: 56px;  
          width: 56px;
          background-image: url(marker.png);
          background-color: rgba(0, 0, 0, 0);
     }
     
     .clearfix {
          display: block;
     }
     .clearfix:after {
          content: '.';
          display: block;
          height: 0;
          clear: both;
          visibility: hidden;
     }
     
     /* Marker tweaks */
     .mapboxgl-popup {
          padding-bottom: 50px;
     }
     
     .mapboxgl-popup-close-button {
          display: none;
     }
     .mapboxgl-popup-content {
          font: 400 15px/22px 'Source Sans Pro', 'Helvetica Neue', Sans-serif;
          padding: 0;
          width: 180px;
     }
     .mapboxgl-popup-content-wrapper {
          padding: 1%;
     }
     .mapboxgl-popup-content h3 {
          background: rgb(53, 58, 44);
          color: #fff;
          margin: 0;
          display: block;
          padding: 10px;
          border-radius: 3px 3px 0 0;
          font-weight: 700;
          margin-top: -15px;
     }
     
     .mapboxgl-popup-content h4 {
          margin: 0;
          display: block;
          padding: 10px 10px 10px 10px;
          font-weight: 400;
     }
     
     .mapboxgl-popup-content div {
          padding: 10px;
     }
     
     .mapboxgl-container .leaflet-marker-icon {
          cursor: pointer;
     }
     
     .mapboxgl-popup-anchor-top > .mapboxgl-popup-content {
          margin-top: 15px;
     }
     
     .mapboxgl-popup-anchor-top > .mapboxgl-popup-tip {
          border-bottom-color: #91c949;
     }
</style>
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
                              <a href="#" class="nav-link active">Lokasi</a>
                         </li>
                         <li class="nav-item">
                              <a href="index_2.php" class="nav-link">Jadwal</a>
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
                    <div class="animate-bottom">
                         <h1 class="headline headline-white">Peta Terminal</h1>
                    </div>
               </div>
          </div>
     </section>
     <!-- Tastefull recipe end -->

     <section class="discover-our-menu">
          <div class="container">
               <div class="pendidikan-info">
                    <div class="pendidikan-description padding-right animate-left">
                    <div class="sidebar">
                         <div class="heading">
                              <h1>Daftar Terminal</h1>
                         </div>
                         <div id="listings" class="listings"></div>
                    </div>
                    <div id="map" class="map"></div>
                         <div id='map' style='height: 450px; width: 1130px;'></div>
                         <?php
                              $query = "SELECT * FROM terminal";
                              $sql = mysqli_query($koneksi, $query);
                         ?>
                         <?php $hasil = "on" ?>

                        <script>
                         /* This will let you use the .remove() function later on */
                         if (!('remove' in Element.prototype)) {
                              Element.prototype.remove = function() {
                                   if (this.parentNode) {
                                        this.parentNode.removeChild(this);
                                   }
                              };
                         }

                         mapboxgl.accessToken = 'pk.eyJ1Ijoic2hpbmppeWFzdWhpcm8iLCJhIjoiY2tuYjlramlzMXA1azJ3cWRzejQzOGZjeiJ9.RXrtLPb0t2CEpSK6QcD8Ag';
 
                         /**
                         * Add the map to the page
                         */
                         var map = new mapboxgl.Map({
                              container: 'map',
                              style: 'mapbox://styles/mapbox/light-v10',
                              center: [112.632632, -7.966620],
                              zoom: 13,
                              scrollZoom: true
                         });

                         var stores = {
                              "type": "FeatureCollection",
                              "features": [
                                   <?php
                                   while($row = mysqli_fetch_array($sql)) {
                                        echo '{
                                             "type": "Feature",
                                             "properties": {
                                                  "title": "<p>'.$row['nama'].'</p>",
                                                  "alamat": "'.$row['alamat'].'",
                                                  "tipe": "'.$row['tipe'].'"
                                             },
                                             "geometry": {
                                                  "type": "Point",
                                                  "coordinates": ['.$row['longitude'].','.$row['latitude'].']
                                             }
                                        },';
                                   }
                                   ?>
                              ]
                         };

                         /**
                         * Assign a unique id to each store. You'll use this `id`
                         * later to associate each point on the map with a listing
                         * in the sidebar.
                         */
                         stores.features.forEach(function (store, i) {
                              store.properties.id = i;
                         });

                         /**
                         * Wait until the map loads to make changes to the map.
                         */
                         map.on('load', function (e) {
                              /**
                              * This is where your '.addLayer()' used to be, instead
                              * add only the source without styling a layer
                              */
                              map.addSource('places', {
                                   'type': 'geojson',
                                   'data': stores
                              });
                              
                              /**
                              * Add all the things to the page:
                              * - The location listings on the side of the page
                              * - The markers onto the map
                              */
                              buildLocationList(stores);
                              addMarkers();
                         });

                         /**
                         * Add a marker to the map for every store listing.
                         **/
                         <?php
                              if ($hasil == "on") {
                         ?>

                         function addMarkers() {
                              /* For each feature in the GeoJSON object above: */
                              stores.features.forEach(function (marker) {
                                   /* Create a div element for the marker. */
                                   var el = document.createElement('div');
                                   /* Assign a unique `id` to the marker. */
                                   el.id = 'marker-' + marker.properties.id;
                                   /* Assign the `marker` class to each marker for styling. */
                                   el.className = 'marker';
                                   
                                   /**
                                   * Create a marker using the div element
                                   * defined above and add it to the map.
                                   **/
                                   new mapboxgl.Marker(el, { offset: [0, -23] })
                                        .setLngLat(marker.geometry.coordinates)
                                        .addTo(map);
                                   
                                   /**
                                   * Listen to the element and when it is clicked, do three things:
                                   * 1. Fly to the point
                                   * 2. Close all other popups and display popup for clicked store
                                   * 3. Highlight listing in sidebar (and remove highlight for all other listings)
                                   **/
                                   el.addEventListener('click', function (e) {
                                        /* Fly to the point */
                                        flyToStore(marker);
                                        /* Close all other popups and display popup for clicked store */
                                        createPopUp(marker);
                                        /* Highlight listing in sidebar */
                                        var activeItem = document.getElementsByClassName('item active');
                                        e.stopPropagation();
                                        if (activeItem[0]) {
                                             activeItem[0].classList.remove('active');
                                        }
                                        var listing = document.getElementById(
                                             'listing-' + marker.properties.id
                                        );
                                        listing.classList.add('active');
                                   });
                              });
                         }
                         <?php
                         }
                         ?>
                         /**
                         * Add a listing for each store to the sidebar.
                         **/
                         function buildLocationList(data) {
                              data.features.forEach(function (store, i) {
                                   /**
                                   * Create a shortcut for `store.properties`,
                                   * which will be used several times below.
                                   **/
                                   var prop = store.properties;
                                   
                                   /* Add a new listing section to the sidebar. */
                                   var listings = document.getElementById('listings');
                                   var listing = listings.appendChild(document.createElement('div'));
                                   /* Assign a unique `id` to the listing. */
                                   listing.id = 'listing-' + prop.id;
                                   /* Assign the `item` class to each listing for styling. */
                                   listing.className = 'item';
                                   
                                   /* Add the link to the individual listing created above. */
                                   var link = listing.appendChild(document.createElement('a'));
                                   link.href = '#';
                                   link.className = 'title';
                                   link.id = 'link-' + prop.id;
                                   link.innerHTML = prop.title;
                                   
                                   /* Add details to the individual listing. */
                                   var details = listing.appendChild(document.createElement('div'));
                                   details.innerHTML = prop.tipe;
                                   if (prop.alamat) {
                                        details.innerHTML += ' &middot; ' + prop.alamat;
                                   }
                                   
                                   /**
                                   * Listen to the element and when it is clicked, do four things:
                                   * 1. Update the `currentFeature` to the store associated with the clicked link
                                   * 2. Fly to the point
                                   * 3. Close all other popups and display popup for clicked store
                                   * 4. Highlight listing in sidebar (and remove highlight for all other listings)
                                   **/
                                   link.addEventListener('click', function (e) {
                                        e.preventDefault();
                                        for (var i = 0; i < data.features.length; i++) {
                                             if (this.id === 'link-' + data.features[i].properties.id) {
                                                  var clickedListing = data.features[i];
                                                  flyToStore(clickedListing);
                                                  createPopUp(clickedListing);
                                             }
                                        }
                                        var activeItem = document.getElementsByClassName('item active');
                                        if (activeItem[0]) {
                                             activeItem[0].classList.remove('active');
                                        }
                                        this.parentNode.classList.add('active');     
                                   });
                              });
                         }

                         /**
                         * Use Mapbox GL JS's `flyTo` to move the camera smoothly
                         * a given center point.
                         **/
                         function flyToStore(currentFeature) {
                              map.flyTo({
                                   center: currentFeature.geometry.coordinates,
                                   zoom: 15
                              });
                         }

                         /**
                         * Create a Mapbox GL JS `Popup`.
                         **/
                         function createPopUp(currentFeature) {
                              var popUps = document.getElementsByClassName('mapboxgl-popup');
                              if (popUps[0]) popUps[0].remove();
                              var popup = new mapboxgl.Popup({ closeOnClick: false })
                                   .setLngLat(currentFeature.geometry.coordinates)
                                   .setHTML(
                                        '<h3>' + currentFeature.properties.title + '</h3>' +
                                        '<h4>' +
                                        currentFeature.properties.alamat +
                                        '</h4>'
                                   )
                                   .addTo(map);
                         }
                         </script>
                    </div>
               </div>
          </div>
     </section>

     <section class="aktifvitas between">
          <div class="container">
               <div class="global-headline">
                    <div class="animate-bottom">
                         <h1 class="headline headline-white">Tipe</h1>
                    </div>
                    <div class="animate-bottom">
                         <h1 class="headline headline-white">Terminal</h1>
                    </div>
               </div>
          </div>
     </section>
     <!-- aktifitas enddd -->

     <section class="daily" style="padding-top: 10">
          <div class="container" id="contact">

               <div class="full">
                    <table border="1" class="animate-top" id="jadwal">
                         <tr>
                              <thead>
                                   <th>No</th>
                                   <th>Nama</th>
                                   <th>Alamat</th>
                                   <th>Tipe</th>
                              </thead>
                         </tr>
                         <tbody>
                              <?php 
                              $query_tampilSemua = "SELECT id, nama, alamat, tipe FROM terminal";
                              $sql_tS = mysqli_query($koneksi, $query_tampilSemua);

                              while ($row1 = mysqli_fetch_array($sql_tS)) {
                                   # code...
                                   echo "<tr><th>".$row1['id']."</th>
                                   <td>".$row1['nama']."</td>
                                   <td>".$row1['alamat']."</td>
                                   <td>".$row1['tipe']."</td>";
                              }
                              ?>
                         </tbody>
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