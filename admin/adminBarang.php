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
    <title>Admin Barang</title>
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
                        <a class="menu-text  active-menu" href="#">Data Barang</a>
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
        <h2>Admin Barang</h2>
        <!-- Include Modal -->
        <?php include('modal/modal.php'); ?>
        <!-- Button trigger modal -->
        <div style="display: flex; justify-content: flex-end;">
            <input type="button" value="Add Item" class="btn btn-success mb-2" data-bs-toggle="modal" data-bs-target="#addModal">
        </div>
        <table class="table text-center table-striped">
            <thead class="table-dark">
                <tr>
                <th scope="col">No</th>
                <th scope="col">Kode Barang</th>
                <th scope="col">Nama Barang</th>
                <th scope="col">Kategori</th>
                <th scope="col">Harga</th>
                <th scope="col">Handler</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    include('connection/conn.php');
                    
                    $sql_tampil = "SELECT * FROM barangadmin ORDER BY idBrg ASC";
                    $result = mysqli_query($db, $sql_tampil);
                    $no = 0;

                    if(mysqli_num_rows($result) > 0){
                        while($data = mysqli_fetch_array($result)){
                            $no++;
                ?>
                <tr>
                    <th scope="row"><?= $no ?></th>
                    <td><?= $data['idBrg'] ?></td>
                    <td><?= $data['namaBrg'] ?></td>
                    <td><?= $data['category'] ?></td>
                    <td><?= "Rp ".number_format($data['hargaBrg']) ?></td>
                    <td>
                        <input type="button" value="Edit" class="btn btn-warning" data-bs-target="#editModal<?= $data['idBrg'] ?>" data-bs-toggle="modal">
                        <input type="button" value="Delete" class="btn btn-danger" data-bs-target="#deleteModal<?= $data['idBrg'] ?>" data-bs-toggle="modal">
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