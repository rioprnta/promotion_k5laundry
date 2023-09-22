<?php
    session_start();
    if(!isset($_SESSION['user'])){
        header("Location: index.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- CSS Extra -->
    <link rel="stylesheet" href="style_1.css">
    <!-- Font Awesome -->
    <link href="fontawesome/css/fontawesome.css" rel="stylesheet">
    <link href="fontawesome/css/brands.css" rel="stylesheet">
    <link href="fontawesome/css/solid.css" rel="stylesheet">
    <link href="fontawesome/css/all.css" rel="stylesheet">
    <title>Dashboard Admin</title>
</head>
<body>
        <nav class="navbar navbar-dark navbar-expand-lg bg-dark fixed-top">
            <div class="container px-4">
                <a class="navbar-brand text-white" href="#">
                    <img src="../images/kr5.png" alt="Logo" width="50px">
                    KR5 LAUNDRY
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarText">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 menu">
                        <li class="nav-item">
                        <a class="menu-text active-menu" href="#">Dashboard</a>
                        </li>
                        <li class="nav-item">
                        <a class="menu-text" href="adminBarang.php">Data Barang</a>
                        </li>
                        <li class="nav-item">
                        <a class="menu-text" href="adminContorllerIP.php">Controller IP</a>
                        </li>
                        <li class="nav-item">
                        <a class="menu-text" href="adminPromo.php">Promo</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <img class="logo-admin" src="../images/kr5.png" alt="Logo Laundry">
                            <?= $_SESSION['name'] ?>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDarkDropdownMenuLink">
                            <li><a class="dropdown-item" href="#">Profile</a></li>
                            <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                        </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    
    <!-- BODY CONTENT -->
    <div class="row container mx-auto" style="margin-top: 100px;">
        <div class="card col m-2" style="max-width: 540px;margin: 0;padding: 0;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="../images/person_1.jpg" class="rounded-start" style="width:120px;height:auto">
                </div>
                <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">Amount of stuff</h5>
                    <p class="card-text">12 is waiting</p>
                </div>
                </div>
            </div>
        </div>
        <div class="card col m-2" style="max-width: 540px;margin: 0;padding: 0;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="../images/person_2.jpg" class="rounded-start" style="width:120px;height:auto">
                </div>
                <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">Different Price</h5>
                    <p class="card-text">12 is waiting</p>
                </div>
                </div>
            </div>
        </div>
        <div class="card col m-2" style="max-width: 540px;margin: 0;padding: 0;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="../images/person_3.jpg" class="rounded-start" style="width:120px;height:auto">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">Available Promotions</h5>
                        <p class="card-text">12 is waiting</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="card col m-2" style="max-width: 540px;margin: 0;padding: 0;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="../images/person_1.jpg" class="rounded-start" style="width:120px;height:auto">
                </div>
                <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">Visitor Site</h5>
                    <p class="card-text">12 is waiting</p>
                </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END BODY CONTENT -->

    <hr>
    <div class="container">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Promo Kiloan Count 5kg</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
            <img src="../images/property_1.jpg" class="card-img-bottom" alt="..." style="height: 200px;">
        </div>
        <div class="card mt-4">
            <div class="card-body">
                <h5 class="card-title">Promo Satuan Jas 1 Stell</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <p class="card-text"><small class="text-muted">Last updated 15 mins ago</small></p>
            </div>
            <img src="../images/property_2.jpg" class="card-img-bottom" alt="..." style="height: 200px;">
        </div>
    </div>
    
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script>
    // 1. tangkap element dengan class menu
    const menu = document.querySelector(".menu");

    // 2. jika element dengan class menu diklik
    menu.addEventListener('click', function(e) {
        // 3. maka ambil element apa yang diklik oleh user
    const targetMenu = e.target;

    // 4. lalu cek, jika element itu adalah link dengan class menu-text
    if(targetMenu.classList.contains('menu-text')) {
            
        // 5. maka ambil menu link yang aktif
        const menuLinkActive = document.querySelector("ul li a.active-menu");

        // 6. lalu cek, Jika menu link active ada dan menu yang di klik user adalah menu yang tidak sama dengan menu yang aktif, (cara cek-nya yaitu dengan membandingkan value attribute href-nya)
        if(menuLinkActive !== null && targetMenu.getAttribute('href') !== menuLinkActive.getAttribute('href')) {

            // 7. maka hapus class active pada menu yang sedang aktif
            menuLinkActive.classList.remove('active-menu');
        }

        // 8. terakhir tambahkan class active pada menu yang di klik oleh user
        targetMenu.classList.add('active-menu');
    }
});
</script>
</html>