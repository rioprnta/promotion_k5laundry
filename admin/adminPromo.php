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
    <link rel="stylesheet" href="style_1.css">
    <title>Promo Admin</title>
</head>
<body>
        <nav class="navbar navbar-dark navbar-expand-lg bg-dark fixed-top">
            <div class="container px-4">
                <a class="navbar-brand text-white" href="adminDashboard.php">
                    <img src="../images/kr5.png" alt="Logo" width="50px">
                    KR5 LAUNDRY
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarText">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 menu">
                        <li class="nav-item">
                        <a class="menu-text" href="adminDashboard.php">Dashboard</a>
                        </li>
                        <li class="nav-item">
                        <a class="menu-text" href="adminBarang.php">Data Barang</a>
                        </li>
                        <li class="nav-item">
                        <a class="menu-text" href="adminContorllerIP.php">Controller IP</a>
                        </li>
                        <li class="nav-item">
                        <a class="menu-text active-menu" href="#">Promo</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <img class="logo-admin" src="../images/kr5.png" alt="Logo Laundry">
                            Rio Pranata
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
    <div class="container" style="margin-top: 100px;">
        <h2>Manage Promo</h2>
        
        <!-- Include Modal -->
        <?php include('modal/modal.php'); ?>

        <div style="display: flex; justify-content: flex-end;">
            <input type="button" value="New Promo" class="btn btn-success mb-2" data-bs-target="#tambahModalPromo" data-bs-toggle="modal">
        </div>
        <table class="table text-center table-striped">
            <thead class="table-dark">
                <tr>
                <th scope="col">No</th>
                <th scope="col">Kode Promo</th>
                <th scope="col">Tittle Promo</th>
                <th scope="col">Start</th>
                <th scope="col">Sisa</th>
                <th scope="col">Expired</th>
                <th scope="col">Deskripsi Promo</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    include('connection/conn.php');

                    $sql_promo_tampil = "SELECT * FROM promocurrent";
                    $result_promo_tampil = mysqli_query($db, $sql_promo_tampil);
                    $i = 0;
                    if(mysqli_num_rows($result_promo_tampil) > 0){
                        while($promo = mysqli_fetch_array($result_promo_tampil)){
                            $i++;
                ?>
                    <tr>
                        <th scope="row"><?= $i ?></th>
                        <td>
                            <div class="d-flex" style="justify-content: center;">
                                <a href="#" style="margin-right: 5px;" class="fst-italic fw-bolder"><?= $promo['ID_Promo'] ?></a>
                                <p style="color: red;font-size: 10px;" class="mt-2"> WhatsApp</p>
                            </div>
                        </td>
                        <td><?= $promo['Title_Promo'] ?></td>
                        <td><?= $promo['start_promo'] ?></td>
                        <td><?= $promo['sisa_promo']." hari" ?></td>
                        <td><?= $promo['end_promo'] ?></td>
                        <td>
                            <button class="btn btn-info m-1" name="detailPromo"  data-bs-target="#detailModalPromo<?= $promo['ID_Promo'] ?>" data-bs-toggle="modal">Detail</button>
                            <input type="button" value="Delete" class="btn btn-danger" data-bs-target="#deleteModalPromo<?= $promo['ID_Promo'] ?>" data-bs-toggle="modal">
                        </td>
                    </tr>
                <?php      
                    }
                }
                ?>
            </tbody>
        </table>
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