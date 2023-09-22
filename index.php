<!DOCTYPE html>
<html lang="en">
  <head>
    <title>KR5 Laundry</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link  href="images/kr5.png" rel="shortcut icon">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,900|Oswald:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <link rel="stylesheet" href="css/jquery.fancybox.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css_extra_1.css">
    <link rel="stylesheet" href="sweetalert/sweetalert2.min.css">
  </head>
  <style>
    @media only screen and (max-width: 600px) {
      body {
      }
    }
    /* Scroll Bar */
    ::-webkit-scrollbar {
      -webkit-appearance: none;
      width: 5px;
      height: 5px;
    }

    ::-webkit-scrollbar-track {
      background-color: transparent;
    }

    ::-webkit-scrollbar-thumb {
      background: linear-gradient(to bottom, #bf0b14, #0b35bf);
      border-radius: 10px;
    }
  </style>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300"
  unselectable="on"
 onselectstart="return false;" 
 onmousedown="return false;">
 <script src="sweetalert/sweetalert2.all.min.js"></script>
  <script src="sweetalert/sweetalert.min.js"></script>
    <?php 
        include('modals/modal_all.html');
        include('cek_ip.php');
    ?>
    <div class="sos">
      <a class="wabox-chat" href="https://wa.me/628126404686" title="Show Chat">
        <svg width="25" height="25" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
          <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
        </svg>
      </a>
      <a class="facebook" href="https://business.facebook.com/kr5laundry" title="Show Facebook">
        <svg width="25" height="25" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
          <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
        </svg>
      </a>
      <a class="instagram" href="https://www.instagram.com/kr5laundry/" title="Show Instagram">
        <svg width="25" height="25" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
          <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
        </svg>
      </a>
    </div>
  
  

  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
   
    
    <header class="site-navbar js-sticky-header site-navbar-target" role="banner">

      <div class="container">
        <div class="row align-items-center">
          
          <div class="col-3  d-inline-block d-xl-none ml-md-0 py-3">
            <a href="#" class="site-menu-toggle js-menu-toggle text-white float-left">
              <span class="icon-menu h3"></span>
            </a>
          </div>

          <div class="col-0" >
            <h5 class="mb-0 site-logo" style="margin-left:-30px">
              <a href="index.php"><img src="images/kr5_ps.png" style="width:60px;height:60px"/>
                <font size="3">KR5 Laundry & Dry Clean</font>
              </a>
            </h5>
          </div>

          <div class="col-md-14 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">

              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li><a href="#home-section" class="nav-link">Home</a></li>
                <li><a href="#properties-section" class="nav-link">Produk & Layanan</a></li>
                <li><a href="#howitworks-section" class="nav-link">About</a></li>
                <li><a href="#testimoni-section" class="nav-link">Testimoni</a></li>
                <li><a href="#section-navigasi" class="nav-link">Navigasi</a></li> 
                
                <!-- <li><a href="#contact-section" class="nav-link">Contact</a></li> -->
              </ul>
            </nav>
          </div>
          <center>
          <div class="col-0 ml-4">
            <h5 class="mb-2 site-logo m-0 p-0">
          <a href="https://wa.me/628126404686" target="_blank"><font size="2"><img src="images/Laundry/wa.png" style="width:20px;height:20px;margin-top:0px" class="mb-1"/></font></a>
        </h5>
          </div>
          </center>
        </div>
      </div>
      
    </header>

    
    <div class="site-block-wrap">
    <div class="owl-carousel with-dots">
      <div class="site-blocks-cover overlay overlay-2" style="background-image: url(images/ruangkomputer2.png);" data-aos="fade" id="home-section">


        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-md-6 mt-lg-5 text-center">
              <h1 class="text-shadow">Laundry Kiloan <br>&amp; <br>Jasa Jemput Karpet</h1>
              <p class="mb-5 text-shadow">Langsung door to door untuk daerah Medan Tuntugan & sekitarnya.</p>
              <!--<p><a href="#" target="_blank" class="btn btn-primary px-5 py-3">Get Started</a></p> -->
              
            </div>
          </div>
        </div>
  
        
      </div>  
  
      <div class="site-blocks-cover overlay overlay-2" style="background-image: url(images/ruangkomputer4.png);" data-aos="fade" id="home-section">
  
  
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-md-6 mt-lg-5 text-center">
              <h1 class="text-shadow">Duduk & Santai. <br> Kami Datang Untuk Anda!</h1>
              <p class="mb-5 text-shadow">Gunakan waktu anda dengan santai,  biarkan kami bersihkan pakaian Anda karena itu memang tugas kami. Anda cukup chat kami melalui media sosial seperti WhatsApp (Tersedia sudut atas Website ini. ), Instagram, Facebook, GoogleMaps, Tiktok maka kami akan hadir untuk anda.</p>
              <!--<p><a href="#" target="_blank" class="btn btn-primary px-5 py-3">Get Started</a></p>-->
              
            </div>
          </div>
        </div>
  
        
      </div>  

      <div class="site-blocks-cover overlay overlay-2" style="background-image: url(images/ruangkomputer.png);" data-aos="fade" id="home-section">


        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-md-6 mt-lg-5 text-center">
              <h1 class="text-shadow">Sayang Istri</h1>
              <p class="mb-5 text-shadow">Jangan Biarkan Tangan Lembutnya Rusak Karena Mencuci, Karena Itu Adalah Tugas Kami</p>
              <!--<p><a href="#" target="_blank" class="btn btn-primary px-5 py-3">Get Started</a></p> -->
              
            </div>
          </div>
        </div>
  
        
      </div>  

      <div class="site-blocks-cover overlay overlay-2" style="background-image: url(images/ruangkomputer3.png);" data-aos="fade" id="home-section">


        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-md-6 mt-lg-5 text-center">
              <h1 class="text-shadow">Bagi Kami Kenyamanan Pelanggan Adalah Nomor 1</h1>
              <p class="mb-5 text-shadow">Kami Sangat Menerima Masukkan Untuk Memperbaiki Kualitas Layanan Kami :)</p>
              <!--<p><a href="#" target="_blank" class="btn btn-primary px-5 py-3">Get Started</a></p> -->
              
            </div>
          </div>
        </div>
  
        
      </div>  
    </div>   
    
  </div>      


  <div class="site-section1" id="properties-section">
    <div class="container">
        <div class="mb-2">
            <div class="text-left ml-1">
              <h2 class="section-title mb-3 mt-3">Harga Cucian Produk</h2>
              <p class="lead">Harga yang sangat terjangkau untuk hasil yang terbaik</p>
            </div>
        </div>
        <div>
<div class="row">
<!--Tabel Cuci KILOAN-->
<div class="col-md-6">
          <table class="styleds-table mb-2" style="width: 98%;">
            <thead>
                <tr class="text-center">
                  <th scope="col">No.</th>
                  <th scope="col">Layanan</th>
                  <th scope="col">Harga</th>
                </tr>
            </thead>
            <tbody class="text-center">
              <tr>
                <th scope="row">1</th>
                <td>Cuci Kiloan Biasa</td>
                <td>Rp 7.000/Kg</td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Cuci Kering</td>
                <td>Rp 4.000/Kg</td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>Cuci Basah</td>
                <td>Rp 4.000/Kg</td>
              </tr>
              <tr>
                <th scope="row">4</th>
                <td>Setrika</td>
                <td>Rp 4.000/Kg</td>
              </tr>
              <tr>
                <th scope="row">5</th>
                <td>Express</td>
                <td>Rp 12.000/Kg</td>
              </tr>
            </tbody>
          </table>
    </div>
    <div class="col-md-6">
      <span class="highlighted-text teksarah" style="margin-left: -20px;font-size:20px;"><strong><font size="4"> ⤪ </font></strong>Harga Kiloan</span>
      <br>
      <center style="margin-top:-9px;margin-left:60px"><span class="highlighted-text teksarah" style="text-align: center; font-size:20px;">Harga Delivery<strong><font size="4">⤵</font></strong></span></center>
<!--Tabel Delivery Laundry-->
          <table class="styleds-table" style="width: 98%;">
            <thead>
                <tr class="text-center">
                  <th scope="col">No.</th>
                  <th scope="col">Jenis Delivery</th>
                  <th scope="col">Harga</th>
                </tr>
            </thead>
            <tbody class="text-center">
              <tr>
                <th scope="row">1</th>
                <td>Delivery < 5 KM</td>
                <td>FREE</td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Delivery 6-10 KM</td>
                <td>Rp 3.500/Kg</td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>Delivery > 10 KM</td>
                <td>Rp 6.000/Kg</td>
              </tr>
            </tbody>
          </table>
        </div>
</div>
            <div class="row row-cols-1 row-cols-md-2 g-4">
                <div class="col m-1">
                  <div class="card h-100">
                    <img src="images/Laundry/helm.png" class="card-img-top" height="300px">
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <p class="card-text">Helm</p>
                            </div>
                            <div class="col">
                                <button class="button-29" style="float: right;" data-toggle="modal" data-target="#helem_modal">Detail</button>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-black">
                                <p class="card-text">Harga</p>
                                <h6 class="card-title text-right" style="margin-top:-38px ;">Rp 20.000</h6>
                    </div>
                  </div>
                  </div>

                  <div class="col m-1">
                  <div class="card h-100">
                    <img src="images/Laundry/cucikarpet.jpg" class="card-img-top" height="300px">
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <p class="card-text">Karpet</p>
                            </div>
                            <div class="col">
                                <button class="button-29" style="float: right;" data-toggle="modal" data-target="#karpet_modal">Detail</button>
                            </div>
                        </div>
                    </div>
                    
                    <div class="card-footer text-black">
                                <p class="card-text">Harga</p>
                                <h6 class="card-title text-right" style="margin-top:-38px ;">Rp 8.000 - 12.000/m</h6>
                    </div>
                  </div>
                  </div>

                  <div class="col m-1">
                    <div class="card h-100">
                        <img src="images/Laundry/sepatu.png" class="card-img-top" height="300px">
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <p class="card-text">Sepatu</p>
                                </div>
                                <div class="col">
                                    <button class="button-29" style="float: right;" data-toggle="modal" data-target="#sepatu_modal">Detail</button>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-black">
                                    <p class="card-text">Harga</p>
                                    <h6 class="card-title text-right" style="margin-top:-38px ;">Rp 20.000</h6>
                        </div>
                    </div>
                  </div>

                  <div class="col m-1">
                    <div class="card h-100">
                        <img src="images/Laundry/jas.jpg" class="card-img-top" height="300px">
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <p class="card-text">Jas</p>
                                </div>
                                <div class="col">
                                    <button class="button-29" style="float: right;" data-toggle="modal" data-target="#jas_modal">Detail</button>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-black">
                                    <p class="card-text">Harga</p>
                                    <h6 class="card-title text-right" style="margin-top:-38px ;">Rp 20.000</h6>
                        </div>
                    </div>
                  </div>

                  <div class="col m-1">
                    <div class="card h-100">
                        <img src="images/Laundry/boneka.jpg" class="card-img-top" height="300px">
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <p class="card-text">Boneka</p>
                                </div>
                                <div class="col">
                                    <button class="button-29" style="float: right;" data-toggle="modal" data-target="#boneka_modal">Detail</button>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-black">
                                    <p class="card-text">Harga</p>
                                    <h6 class="card-title text-right" style="margin-top:-38px ;">Rp 10.000 - 40.000</h6>
                        </div>
                    </div>
                  </div>
                  <div class="col m-1">
                    <div class="card h-100">
                        <img src="images/Laundry/kebaya.jpg" class="card-img-top" height="300px">
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <p class="card-text">Kebaya</p>
                                </div>
                                <div class="col">
                                    <button class="button-29" style="float: right;"  data-toggle="modal" data-target="#kebaya_modal">Detail</button>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-black">
                                    <p class="card-text">Harga</p>
                                    <h6 class="card-title text-right" style="margin-top:-38px ;">Rp 15.000 - 25.000</h6>
                        </div>
                    </div>
                  </div>
                  <div class="col m-1">
                    <div class="card h-100">
                        <img src="images/Laundry/tas.jpg" class="card-img-top" height="300px">
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <p class="card-text">Tas</p>
                                </div>
                                <div class="col">
                                    <button class="button-29" style="float: right;" data-toggle="modal" data-target="#tas_modal">Detail</button>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-black">
                                    <p class="card-text">Harga</p>
                                    <h6 class="card-title text-right" style="margin-top:-38px ;">Rp 15.000 - 20.000</h6>
                        </div>
                    </div>
                  </div>
                  <div class="col m-1">
                    <div class="card h-100">
                        <img src="images/Laundry/bedcover.jpg" class="card-img-top" height="300px">
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <p class="card-text">Bedcover</p>
                                </div>
                                <div class="col">
                                    <button class="button-29" style="float: right;" data-toggle="modal" data-target="#bedcover_modal">Detail</button>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-black">
                                    <p class="card-text">Harga</p>
                                    <h6 class="card-title text-right" style="margin-top:-38px ;">Rp 27.000 - 32.000</h6>
                        </div>
                    </div>
                  </div>

                  <div class="col m-1">
                    <div class="card h-100">
                        <img src="images/Laundry/songket.jpg" class="card-img-top" height="300px">
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <p class="card-text">Songket<br>/Sarung</p>
                                </div>
                                <div class="col">
                                    <button class="button-29" style="float: right;" data-toggle="modal" data-target="#sarung_modal">Detail</button>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-black">
                                    <p class="card-text">Harga</p>
                                    <h6 class="card-title text-right" style="margin-top:-38px ;">Rp 15.000</h6>
                        </div>
                    </div>
                  </div>
                  <div class="col m-1">
                    <div class="card h-100">
                        <img src="images/Laundry/sprei.jpg" class="card-img-top" height="300px">
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <p class="card-text">Sprei</p>
                                </div>
                                <div class="col">
                                    <button class="button-29" style="float: right;" data-toggle="modal" data-target="#sprei_modal">Detail</button>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-black">
                                    <p class="card-text">Harga</p>
                                    <h6 class="card-title text-right" style="margin-top:-38px ;">Rp 13.000 - 15.000</h6>
                        </div>
                    </div>
                  </div>
                  <div class="col m-1">
                    <div class="card h-100">
                        <img src="images/Laundry/gaun.jpg" class="card-img-top" height="300px">
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <p class="card-text">Gaun</p>
                                </div>
                                <div class="col">
                                    <button class="button-29" style="float: right;" data-toggle="modal" data-target="#gaun_modal">Detail</button>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-black">
                                    <p class="card-text">Harga</p>
                                    <h6 class="card-title text-right" style="margin-top:-38px ;">Rp 20.000 - 25.000</h6>
                        </div>
                    </div>
                  </div>
                  <div class="col m-1">
                    <div class="card h-100">
                        <img src="images/Laundry/gorden.jpg" class="card-img-top" height="300px">
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <p class="card-text">Gordyn</p>
                                </div>
                                <div class="col">
                                    <button class="button-29" style="float: right;" data-toggle="modal" data-target="#gorden_modal">Detail</button>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-black">
                                    <p class="card-text">Harga</p>
                                    <h6 class="card-title text-right" style="margin-top:-38px ;">Rp 8.000 - 10.000/m</h6>
                        </div>
                    </div>
                  </div>
                <div class="col m-1">
                  <div class="card h-100">
                    <img src="images/Laundry/selimut.jpg" class="card-img-top" height="300px">
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <p class="card-text">Selimut</p>
                            </div>
                            <div class="col">
                                <button class="button-29" style="float: right;" data-toggle="modal" data-target="#selimut_modal">Detail</button>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-black">
                                <p class="card-text">Harga</p>
                                <h6 class="card-title text-right" style="margin-top:-38px ;">Rp 13.000 - 27.000</h6>
                    </div>
                  </div>
                  </div>

                  <div class="col m-1">
                  <div class="card h-100">
                    <img src="images/Laundry/jaket.jpg" class="card-img-top" height="300px">
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <p class="card-text">Jaket</p>
                            </div>
                            <div class="col">
                                <button class="button-29" style="float: right;" data-toggle="modal" data-target="#jaket_modal">Detail</button>
                            </div>
                        </div>
                    </div>
                    
                    <div class="card-footer text-black">
                                <p class="card-text">Harga</p>
                                <h6 class="card-title text-right" style="margin-top:-38px ;">Rp 12.000 - 25.000</h6>
                    </div>
                  </div>
                  </div>

                  <div class="col m-1">
                    <div class="card h-100">
                        <img src="images/Laundry/cd.jpg" class="card-img-top" height="300px">
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <p class="card-text">CD/BH</p>
                                </div>
                                <div class="col">
                                    <button class="button-29" style="float: right;" data-toggle="modal" data-target="#cd_modal">Detail</button>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-black">
                                    <p class="card-text">Harga</p>
                                    <h6 class="card-title text-right" style="margin-top:-38px ;">Rp 2.000</h6>
                        </div>
                    </div>
                  </div>

                  <div class="col m-1">
                    <div class="card h-100">
                        <img src="images/Laundry/koper.jpg" class="card-img-top" height="300px">
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <p class="card-text">Koper</p>
                                </div>
                                <div class="col">
                                    <button class="button-29" style="float: right;" data-toggle="modal" data-target="#koper_modal">Detail</button>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-black">
                                    <p class="card-text">Harga</p>
                                    <h6 class="card-title text-right" style="margin-top:-38px ;">Rp 30.000 - 50.000</h6>
                        </div>
                    </div>
                  </div>

                  <div class="col m-1">
                    <div class="card h-100">
                        <img src="images/Laundry/kasurpalembang.jpg" class="card-img-top" height="300px">
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <p class="card-text">Kasur Palembang</p>
                                </div>
                                <div class="col">
                                    <button class="button-29" style="float: right;" data-toggle="modal" data-target="#kasurpalembang_modal">Detail</button>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-black">
                                    <p class="card-text">Harga</p>
                                    <h6 class="card-title text-right" style="margin-top:-38px ;">Rp 40.000</h6>
                        </div>
                    </div>
                  </div>
                  <div class="col m-1">
                    <div class="card h-100">
                        <img src="images/Laundry/taplakmeja.jpg" class="card-img-top" height="300px">
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <p class="card-text">Taplak Meja</p>
                                </div>
                                <div class="col">
                                    <button class="button-29" style="float: right;"  data-toggle="modal" data-target="#taplakmeja_modal">Detail</button>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-black">
                                    <p class="card-text">Harga</p>
                                    <h6 class="card-title text-right" style="margin-top:-38px ;">Rp 7.000 - 10.000</h6>
                        </div>
                    </div>
                  </div>
                  <div class="col m-1">
                    <div class="card h-100">
                        <img src="images/Laundry/handuk.jpg" class="card-img-top" height="300px">
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <p class="card-text">Handuk</p>
                                </div>
                                <div class="col">
                                    <button class="button-29" style="float: right;" data-toggle="modal" data-target="#handuk_modal">Detail</button>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-black">
                                    <p class="card-text">Harga</p>
                                    <h6 class="card-title text-right" style="margin-top:-38px ;">Rp 7.000 - 9.000</h6>
                        </div>
                    </div>
                  </div>
                  <div class="col m-1">
                    <div class="card h-100">
                        <img src="images/Laundry/bantal.jpg" class="card-img-top" height="300px">
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <p class="card-text">Bantal</p>
                                </div>
                                <div class="col">
                                    <button class="button-29" style="float: right;" data-toggle="modal" data-target="#bantal_modal">Detail</button>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-black">
                                    <p class="card-text">Harga</p>
                                    <h6 class="card-title text-right" style="margin-top:-38px ;">Rp 15.000</h6>
                        </div>
                    </div>
                  </div>

                  <div class="col m-1">
                    <div class="card h-100">
                        <img src="images/Laundry/topi.jpg" class="card-img-top" height="300px">
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <p class="card-text">Topi</p>
                                </div>
                                <div class="col">
                                    <button class="button-29" style="float: right;" data-toggle="modal" data-target="#topi_modal">Detail</button>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-black">
                                    <p class="card-text">Harga</p>
                                    <h6 class="card-title text-right" style="margin-top:-38px ;">Rp 6.000</h6>
                        </div>
                    </div>
                  </div>
                  <div class="col m-1">
                    <div class="card h-100">
                        <img src="images/Laundry/dasi.jpg" class="card-img-top" height="300px">
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <p class="card-text">Dasi</p>
                                </div>
                                <div class="col">
                                    <button class="button-29" style="float: right;" data-toggle="modal" data-target="#dasi_modal">Detail</button>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-black">
                                    <p class="card-text">Harga</p>
                                    <h6 class="card-title text-right" style="margin-top:-38px ;">Rp 6.000</h6>
                        </div>
                    </div>
                  </div>
                  <div class="col m-1">
                    <div class="card h-100">
                        <img src="images/Laundry/rompi.jpg" class="card-img-top" height="300px">
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <p class="card-text">Rompi</p>
                                </div>
                                <div class="col">
                                    <button class="button-29" style="float: right;" data-toggle="modal" data-target="#rompi_modal">Detail</button>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-black">
                                    <p class="card-text">Harga</p>
                                    <h6 class="card-title text-right" style="margin-top:-38px ;">Rp 15.000</h6>
                        </div>
                    </div>
                  </div>
                  <div class="col m-1">
                    <div class="card h-100">
                        <img src="images/Laundry/wedd_dress.jpg" class="card-img-top" height="300px">
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <p class="card-text">Wedding Dress</p>
                                </div>
                                <div class="col">
                                    <button class="button-29" style="float: right;" data-toggle="modal" data-target="#dress_modal">Detail</button>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-black">
                                    <p class="card-text">Harga</p>
                                    <h6 class="card-title text-right" style="margin-top:-38px ;">Rp 75.000</h6>
                        </div>
                    </div>
                  </div>

            </div>
    </div>
  </div>
    
    
    <section class="site-section1" id="agents-section">
      <div class="container">
        <div class="row mb-5">
          <div class="ml-1 mt-3">
            <!-- <h2 class="section-title mb-3">Pemilik Toko</h2> -->
            <span class="lead mr-4  text-black" style="font-family: JetBrains Mono,monospace;">Langsung Pesan Layanan Laundry Yuuukkk.. :)</span> 
              <a href="https://wa.me/628126404686">
                <img loading="lazy" class="size-full wp-image-720 aligncenter" src="images/Laundry/hubungi-kami-wa.png" alt="Hubungi Kami Via Whatsapp" srcset="images/Laundry/hubungi-kami-wa.png 468w 300w" sizes="(max-width: 468px) 100vw, 468px" width="234" height="70">
              </a>   
            
          </div>
        </div>

        <!--Pemilik!-->
    <div class="row"> 
  <!--        <div class="col-md-6 col-lg-4 mb-4">-->
  <!--          <div class="container team-member">-->
  <!--            <figure>-->
  <!--              <ul class="social">-->
  <!--                <li class="m-3"><a href="#"><span class="icon-facebook"></span></a></li>-->
  <!--                <li class="m-3"><a href="#"><span class="icon-twitter"></span></a></li>-->
  <!--                <li class="m-3"><a href="#"><span class="icon-instagram"></span></a></li>-->
  <!--              </ul>-->
  <!--              <img style="height: 330px; width: 350px" src="images/Pemilik/bapak.jpg" alt="Image" class="img-fluid">-->
  <!--            </figure>-->
  <!--            <div class="p-3 warnadasar gambarcirclebwh">-->
  <!--              <h3 class="mb-2">(Alm) Kasiman Perangin-angin</h3>-->
  <!--              <span class="position">Owner</span>-->
  <!--            </div>-->
  <!--          </div>-->
  <!--        </div>-->
          <!-- <div class="col-md-6 col-lg-4 mb-4">
            <div class="container team-member">
              <figure class="container">
                <ul class="social">
                  <li class="m-3"><a href="#"><span class="icon-facebook"></span></a></li>
                  <li class="m-3"><a href="#"><span class="icon-twitter"></span></a></li>
                  <li class="m-3"><a href="#"><span class="icon-instagram"></span></a></li>
                </ul>
                <img style="height: 330px; width: 350px" src="images/Pemilik/mama.jpg" alt="Image" class="img-fluid">
              </figure>
              <div class="p-3 warnadasar gambarcirclebwh">
                <h3 class="mb-2">Rustiana Pandiangan</h3>
                <span class="position">Owner</span>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 mb-4">
            <div class="container team-member">
              <figure>
                <ul class="social">
                  <li class="m-3"><a href="#"><span class="icon-facebook"></span></a></li>
                  <li class="m-3"><a href="#"><span class="icon-twitter"></span></a></li>
                  <li class="m-3"><a href="#"><span class="icon-instagram"></span></a></li>
                </ul>
                <img style="width: 350px; height: 330px;" src="images/Pemilik/Bray.JPG" alt="Image" class="img-fluid">
              </figure>
              <div class="p-3 warnadasar gambarcirclebwh">
                <h3 class="mb-2">Ray Christian Perangin-angin</h3>
                <span class="position">Anak Ke-1</span>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4  mb-4">
            <div class="container team-member">
              <figure>
                <ul class="social">
                  <li class="m-3"><a href="#"><span class="icon-facebook"></span></a></li>
                  <li class="m-3"><a href="#"><span class="icon-twitter"></span></a></li>
                  <li class="m-3"><a href="https://www.instagram.com/riopranata__/"><span class="icon-instagram"></span></a></li>
                </ul>
                <img style="width: 350px ;height: 330px;" src="images/Pemilik/Rio Pranata P.JPG" alt="Image" class="img-fluid">
              </figure>
              <div class="p-3 warnadasar gambarcirclebwh">
                <h3 class="mb-2">Rio Pranata Perangin-angin</h3>
                <span class="position">Anak Ke-2</span>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 mb-4">
            <div class="container team-member">
              <figure>
                <ul class="social">
                  <li class="m-3"><a href="#"><span class="icon-facebook"></span></a></li>
                  <li class="m-3"><a href="#"><span class="icon-twitter"></span></a></li>
                  <li class="m-3"><a href="#"><span class="icon-instagram"></span></a></li>
                </ul>
                <img style="height: 330px; width: 350px" src="images/Pemilik/ryan.jpg" alt="Image" class="img-fluid">
              </figure>
              <div class="p-3 warnadasar gambarcirclebwh">
                <h3 class="mb-2">Ryan Perangin-angin</h3>
                <span class="position">Anak Ke-3</span>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4">
            <div class="container team-member">
              <figure>
                <ul class="social">
                  <li class="m-3"><a href="#"><span class="icon-facebook"></span></a></li>
                  <li class="m-3"><a href="#"><span class="icon-twitter"></span></a></li>
                  <li class="m-3"><a href="#"><span class="icon-instagram"></span></a></li>
                </ul>
                <img style="height: 330px; width: 350px" src="images/Pemilik/ricco.jpeg" alt="Image" class="img-fluid">
              </figure>
              <div class="p-3 warnadasar gambarcirclebwh">
                <h3 class="mb-2">Ricco Perangin-angin</h3>
                <span class="position">Anak Ke-4</span>
              </div>
            </div>
          </div>

        </div>

      </div> -->
    </section>

    <section class="py-5 warnadasar site-section how-it-works" id="howitworks-section">
      <div class="container">
        <div class="row mb-5 justify-content-center">
          <div class="col-md-7 text-center">
            <h2 class="section-title mb-3 text-black">Bagaimana Cara Kerjanya</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 text-center">
            <div class="pr-5 first-step">
              <span class="text-black">01.</span>
              <span class="custom-icon flaticon-house text-black"></span>
              <h3 class="text-black">Memilah pakaian berdasarkan kategori</h3>
              <p class="text-black"></p>
            </div>
          </div>

          <div class="col-md-4 text-center">
            <div class="pr-5 second-step">
              <span class="text-black">02.</span>
              <span class="custom-icon flaticon-coin text-black"></span>
              <h3 class="text-black">Melist barang ke Nota berdasarkan harga</h3>
              <p class="text-black"></p>
            </div>
          </div>

          <div class="col-md-4 text-center">
            <div class="pr-5">
              <span class="text-black">03.</span>
              <span class="custom-icon flaticon-home text-black"></span>
              <h3 class="text-black">Proses Laundry dilakukan berdasarkan jenis pelayanan yang di pilih</h3>
              <p class="text-black"></p>
            </div>
          </div>
        </div>
      </div>  
    </section>


<!--
    <section class="site-section1" id="about-section">
      <div class="container">
        
        <div class="row large-gutters">
          <div class="col-lg-6 mb-5">

              <div class="owl-carousel slide-one-item with-dots">
                  <div><img src="images/img_1.jpg" alt="Image" class="img-fluid"></div>
                  <div><img src="images/img_2.jpg" alt="Image" class="img-fluid"></div>
                  <div><img src="images/img_3.jpg" alt="Image" class="img-fluid"></div>
                </div>

          </div>
          <div class="col-lg-6 ml-auto">
            
            <h2 class="section-title mb-3">Warehouse Real Estate Template</h2>
                <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                <p>Est qui eos quasi ratione nostrum excepturi id recusandae fugit omnis ullam pariatur itaque nisi voluptas impedit  Quo suscipit omnis iste velit maxime.</p>

                <ul class="list-unstyled ul-check success">
                  <li>Placeat maxime animi minus</li>
                  <li>Dolore qui placeat maxime</li>
                  <li>Consectetur adipisicing</li>
                  <li>Lorem ipsum dolor</li>
                  <li>Placeat molestias animi</li>
                </ul>

                <p><a href="#" class="btn warnadasar mr-2 mb-2"><font color="white">Learn More</font></a></p>
            
          </div>
        </div>
      </div>
    </section>
-->
    

    <section class="site-section1 bg-light" id="services-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center">
            <h2 class="section-title mb-3 mt-3">Jasa Laundry Kami  </h2>
          </div>
        </div>
        <div class="row align-items-stretch">
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up">
            <div class="unit-4">
              <div><span class="text-primary">
                <img src="icon/timbangan.png" width="50px" style="display: block; margin: auto;">
              </span></div>
              <div style="text-align:center">
                <h3>Laundry Kiloan</h3>
                <p>Jasa laundry baju kiloan di KR5 Laundry & Dry Clean, cocok untuk pakaian sehari-hari. Sudah termasuk cuci, gosok dan lipat. Bisa antar-jemput</p>
                <!-- <p><a class="warnakata" href="#">Detail Laundry Kiloan  >></a></p> -->
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="unit-4">
              <div><span class="text-primary">
                <img src="icon/tshirt.png" width="50px" style="display: block; margin: auto;">
              </span></div>
              <div style="text-align:center">
                <h3>Laundry Satuan</h3>
                <p>Jasa laundry satuan seperti kemeja, jas dll.  Sangat cocok untuk pakaian spesial anda. Pengerjaan yang detail, bersih  dengan harga terjangkau.</p>
                <!-- <p><a class="warnakata" href="#">Detail Laundry Satuan >></a></p> -->
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="200">
            <div class="unit-4">
              <div><span class="text-primary">
                <img src="icon/carpet.png" width="50px" style="display: block; margin: auto;">
              </span></div>
              <div style="text-align:center">
                <h3>Jasa Cuci Karpet</h3>
                <p>Kami mengerjakan cuci karpet rumah, masjid dan cuci karpet kantor wilayah Kecamatan Medan Tuntungan, kami siap datang ke lokasi.</p>
                <!-- <p><a class="warnakata" href="#">Detail Cuci Karpet >></a></p> -->
              </div>
            </div>
          </div>


          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="300">
            <div class="unit-4" >
              <div><span class="text-primary">
                <img src="icon/sofa.png" width="50px" style="display: block; margin: auto;">
              </span></div>
              <div style="text-align:center">
                <h3>Cuci Sofa & Spring Bed</h3>
                <p>Kami mengerjakan cuci sofa, kursi kantor, spring bed dll. Khusus Kecamatan Medan Tuntungan kami menerima order laundry panggilan.</p>
                <!-- <p><a class="warnakata" href="#">Detail Cuci Sofa & Spring Bed >></a></p> -->
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="400">
            <div class="unit-4">
              <div><span class="text-primary">
                <img src="icon/shoes.png" width="50px" style="display: block; margin: auto;">
              </span></div>
              <div style="text-align:center">
                <h3>Laundry Sepatu</h3>
                <p>Ingin sepatu anda selalu bersih dan wangi, kami akan membersihkan dan memberikan perawatan pada sepatu kesayangan anda.</p>
                <!-- <p><a class="warnakata" href="#">Detail Laundry Sepatu >></a></p> -->
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="500">
            <div class="unit-4">
              <div><span class="text-primary">
                <img src="icon/baby.png" width="50px" style="display: block; margin: auto;">
              </span></div>
              <div style="text-align:center">
                <h3>Jasa Cuci Perlengkapan Bayi</h3>
                <p>Laundry perlengkapan bayi anda seperti stroller, box bayi dengan harga terjangkau, bersih, cepat dan kami melayani antar jemput.</p>
                <!-- <p><a class="warnakata" href="#">Detail Laundry Perlengkapan Bayi >></a></p> -->
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>

    <section class="site-section1 testimonial-wrap" id="testimoni-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center">
            <h2 class="section-title mb-3">Testimoni</h2>
          </div>
        </div>

        <div class="row">
            <div class="col-md-6 mb-4" data-aos="fade-down">
                <div class="ftco-testimonial-1">
                  <div class="ftco-testimonial-vcard d-flex align-items-center mb-4">
                    <img src="images/Customer/customer1.jpg" alt="Image" class="img-fluid mr-3">
                    <div>
                      <h3>Obin Mitra El Daeli</h3>
                      <span>Customer</span>
                    </div>
                  </div>
                  <div>
                    <p>Pelayanan sangat ramah sehingga saya merasa nyaman apalagi harga cukup murah jika dibandingkan dengan tempat lain</p>
                  </div>
                </div>
              </div>
              <div class="col-md-6 mb-4" data-aos="fade-down">
                  <div class="ftco-testimonial-1">
                      <div class="ftco-testimonial-vcard d-flex align-items-center mb-4">
                        <img src="images/Customer/customer2.jpg" alt="Image" class="img-fluid mr-3">
                        <div>
                          <h3>Setia Budiman Harefa</h3>
                          <span>Customer</span>
                        </div>
                      </div>
                      <div>
                        <p>Setiap minggu saya rutin mencuci disini, pelayanannya bagus harga juga terjangkau dan hasilnya juga bagus tidak apek seperti tempat laundry saya sebelumnya, terima kasih </p>
                      </div>
                    </div>
              </div> 

              <div class="col-md-6 mb-4" data-aos="fade-down">
                  <div class="ftco-testimonial-1">
                    <div class="ftco-testimonial-vcard d-flex align-items-center mb-4">
                      <img src="images/Customer/jessica.jpg" alt="Image" class="img-fluid mr-3">
                      <div>
                        <h3>Jessica Sinuraya</h3>
                        <span>Customer</span>
                      </div>
                    </div>
                    <div>
                      <p>Sudah kesekian kali pake jasa kleenly laundry alhamdulillah belum pernah kecewa, antar jemput gratis walapun gag bisa langsung datang mesti dijadwalin :) </p>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 mb-4" data-aos="fade-down">
                    <div class="ftco-testimonial-1">
                        <div class="ftco-testimonial-vcard d-flex align-items-center mb-4">
                          <img src="images/Customer/bramdy.jpg" alt="Image" class="img-fluid mr-3">
                          <div>
                            <h3>Bramdy Pandiangan</h3>
                            <span>Customer</span>
                          </div>
                        </div>
                        <div>
                          <p>Terima Kasih Layanan Express membantu saya saat perjalanan ke ciputat, pelayanannya ramah, cucian juga bersih dan wangi </p>
                        </div>
                      </div>
                </div> 
        </div>
      </div>
    </section>

  
<!--    <section class="site-section1" id="news-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center">
            <h2 class="section-title mb-3">Promo &amp; Layanan Baru</h2>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
            <div class="h-entry">
              <a href="single.html"><img src="images/img_1.jpg" alt="Image" class="img-fluid"></a>
              <h2 class="font-size-regular"><a href="single.html" class="text-dark">Popular Real Estate Properties for 2019</a></h2>
              <div class="meta mb-4">Allison Holmes <span class="mx-2">&bullet;</span> Jan 18, 2019<span class="mx-2">&bullet;</span> <a class="warnakata" href="single.html">News</a></div>
            </div> 
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
            <div class="h-entry">
              <a href="single.html"><img src="images/img_2.jpg" alt="Image" class="img-fluid"></a>
              <h2 class="font-size-regular"><a href="single.html" class="text-dark">Popular Real Estate Properties for 2019</a></h2>
              <div class="meta mb-4">James Phelps <span class="mx-2">&bullet;</span> Jan 18, 2019<span class="mx-2">&bullet;</span> <a class="warnakata" href="single.html">News</a></div>
              
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
            <div class="h-entry">
              <a href="single.html"><img src="images/img_3.jpg" alt="Image" class="img-fluid"></a>
              <h2 class="font-size-regular"><a href="single.html" class="text-dark">Popular Real Estate Properties for 2019</a></h2>
              <div class="meta mb-4">Allison Holmes <span class="mx-2">&bullet;</span> Jan 18, 2019<span class="mx-2">&bullet;</span> <a  class="warnakata" href="single.html">News</a></div>
            </div> 
          </div>
          
        </div>
      </div>
    </section>
-->
   
<!--

    <section class="site-section1 bg-light bg-image" id="contact-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center">
            <h2 class="section-title mb-3">Contact Us</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-7 mb-5">

            

            <form action="#" class="p-5 bg-white">
              
              <h2 class="h4 text-black mb-5">Form Masukkan</h2> 

              <div class="row form-group">
                <div class="col-md-6 mb-3 mb-md-0">
                  <label class="text-black" for="fname">Nama Depan</label>
                  <input type="text" id="fname" class="form-control">
                </div>
                <div class="col-md-6">
                  <label class="text-black" for="lname">Nama Belakang</label>
                  <input type="text" id="lname" class="form-control">
                </div>
              </div>

              <div class="row form-group">
                
                <div class="col-md-12">
                  <label class="text-black" for="email">Email</label> 
                  <input type="email" id="email" class="form-control">
                </div>
              </div>

              <div class="row form-group">
                
                <div class="col-md-12">
                  <label class="text-black" for="subject">Subject</label> 
                  <input type="subject" id="subject" class="form-control">
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <label class="text-black" for="message">Pesan/Masukkan</label> 
                  <textarea name="message" id="message" cols="30" rows="7" class="form-control" placeholder="Ketik pesan atau masukkan terhadap pelayanan dan website kami.."></textarea>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" value="Kirim Pesan" class="btn warnadasar btn-md text-white">
                </div>
              </div>

  
            </form>
          </div>
          <div class="col-md-5">
            
            <div class="p-4 mb-3 bg-white">
              <p class="mb-0 font-weight-bold">Alamat</p>
              <p class="mb-4">Jl.Jamin Ginting km 9.5 no.156, Mangga, Kec. Medan Tuntungan, Kota Medan, Sumatera Utara 20141</p>

              <p class="mb-0 font-weight-bold">Phone</p>
              <p class="mb-4"><a class="warnakata" href="#">0618367764</a></p>

              <p class="mb-0 font-weight-bold">Email Address</p>
              <p class="mb-0 "><a class="warnakata" href="#">kr5laundry@gmail.com</a></p>

            </div>
            
          </div>
        </div>
      </div>
    </section>

 -->   
 <section class="site-section1 bg-light" id="section-navigasi">
    <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <div class="row">
              <div class="col-md-5">
                  <div class="mb-4">
                <h2 class="footer-heading mb-4">About Us</h2>
                <p>Sayang Isteri, Jangan Biarkan Dia Bekerja Cuci Mencuci. Karena Itu Adalah Tugas Kami</p>
                </div>
                <div>
                <div class="">
              <h2 class="footer-heading mb-4">Follow Us</h2>
                <a href="https://business.facebook.com/kr5laundry" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
                <a href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="25" fill="currentColor" class="bi bi-tiktok" viewBox="0 3 17 16">
      <path d="M9 0h1.98c.144.715.54 1.617 1.235 2.512C12.895 3.389 13.797 4 15 4v2c-1.753 0-3.07-.814-4-1.829V11a5 5 0 1 1-5-5v2a3 3 0 1 0 3 3V0Z"/>
    </svg>
                </a>
                <a href="https://www.instagram.com/kr5laundry/" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
            </div>
                </div>
              </div>
              <div class="col-md-3 mx-auto">
                <h2 class="footer-heading mb-4">Quick Links</h2>
                <ul class="list-unstyled">
                  <li><a href="#howitworks-section">About Us</a></li>
                  <li><a href="#properties-section">Services</a></li>
                  <li><a href="#testimoni-section">Testimonials</a></li>
                  <li><a href="#">Contact Us</a></li>
                </ul>
              </div>
              
            </div>
          </div>
          <div class="col-md-4">
            <div class="mb-4">
              <h2 class="footer-heading mb-4">Lokasi KR5 Laundry</h2>
            <form action="#" method="post" class="footer-subscribe">
              <div class="input-group mb-3">
                <p>Jl. Letjend Jamin Ginting Km.9,5 No 156 Padang Bulan Medan 20141</p>
                
      <!-- View of Google Maps-->
      <iframe style="border-radius: 5%;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3982.2585765538156!2d98.63233151408944!3d3.527631451694659!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3031251565512d55%3A0x4593e4968545770d!2sKR5%20Laundry%20and%20Dry%20clean!5e0!3m2!1sid!2sid!4v1639140317232!5m2!1sid!2sid" width="300" height="300" style="border:0; margin-bottom:10px" allowfullscreen="" loading="lazy"></iframe>                
                      
                      <div >
      <!-- Link Maps -->                    
      <a type="button" href="https://goo.gl/maps/nJHww7t1vuk43hpT8" class="btn warnadasar text-black mt-2">                  
                      
        <!--Icon Navigasi-->
            <svg style="margin-left:-10px;border-radius:5%" width="20" height="20" fill="currentColor" class="bi bi-cursor-fill" viewBox="0 2 16 16">
              <path d="M14.082 2.182a.5.5 0 0 1 .103.557L8.528 15.467a.5.5 0 0 1-.917-.007L5.57 10.694.803 8.652a.5.5 0 0 1-.006-.916l12.728-5.657a.5.5 0 0 1 .556.103z"/>
            </svg>Navigasi</a>
            
                </div>
              </div>
            </form>  
            </div>
            
          </div>
        </div>
        <div class="row mt-5 text-center">
          <div class="col-md-12">
            <div class="border-top pt-5">
            <p class="copyright">
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> Website ini dibuat oleh<i class="icon-mouse text-info" aria-hidden="true"></i><br> <a href="https://www.instagram.com/riopranata__/" target="_blank" >Team KR5 Laundry</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
            </div>
          </div>
          
        </div>
      </div>
    </footer>
</section>
  </div> <!-- .site-wrap -->

  <a href="#top" class="gototop"><span class="icon-angle-double-up"></span></a> 

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/jquery.sticky.js"></script>

  
  <script src="js/main.js"></script>
  <script>  
            function clickIE4(){
                if (event.button==2){
                  swal("IMPORTANT !!", "This Content is Protected");
                  return false;
                }
            }

            function clickNS4(e){
              if (document.layers||document.getElementById&&!document.all)
                  {
                    if (e.which==2||e.which==3){
                      swal("IMPORTANT !!", "This Content is Protected");
                      return false;
                    }
                  }
            } 
              if (document.layers){
                  document.captureEvents(Event.MOUSEDOWN);
                  document.onmousedown=clickNS4;
              }else if (document.all&&!document.getElementById){
                  document.onmousedown=clickIE4;
              } 
            document.oncontextmenu=new Function(";return false")
              //"swal({title: 'IMPORTANT !!',text: 'This Content is Protected.',width: 100 ,timer: 1500, icon: 'error',buttons: false,});
</script>
  <!-- <script>
$('#myModal').modal('show');
</script>   -->
  </body>
</html>