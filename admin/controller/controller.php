<?php
    //Query Tambah Data
    include('../connection/conn.php');
    if(isset($_POST['btnSave'])){
        $kodeBrg = $_POST['kodeBrg'];
        $namaBrg = $_POST['nameBrg'];
        $hargaBrg = $_POST['hargaBrg'];
        $category = $_POST['category'];
        $tgl_add = $_POST['tanggalBrg'];
        $sqlTambah = "INSERT INTO barangadmin value('$kodeBrg','$namaBrg',$hargaBrg,'$category','$tgl_add','')";
        $result = mysqli_query($db, $sqlTambah);
        if(!$result){
            echo"<script>
                alert('Gagal Menyimpan');
                document.location = '../adminBarang.php';
            </script>";
        }else{
            echo"<script>
                alert('Data Berhasil Disimpan');
                document.location = '../adminBarang.php';
            </script>";
        }
    }

    //Query Update Data
    include('../connection/conn.php');
    if(isset($_POST['btnEdit'])){
        $kodeBrg = $_POST['kodeBrgUpdate'];
        $namaBrg = $_POST['nameBrgUpdate'];
        $hargaBrg = $_POST['hargaBrgUpdate'];
        $category = $_POST['categoryUpdate'];
        $tgl_update = $_POST['tanggalUpdate'];
        $sqlEdit = "UPDATE barangadmin SET namaBrg='$namaBrg', hargaBrg=$hargaBrg, category='$category', tgl_update='$tgl_update' WHERE idBrg='$kodeBrg'";
        $result = mysqli_query($db, $sqlEdit);
        if(!$result){
            echo"<script>
                alert('Gagal Mengubah');
                document.location = '../adminBarang.php';
            </script>";
        }else{
            echo"<script>
                alert('Data Berhasil Diubah');
                document.location = '../adminBarang.php';
            </script>";
        }
    }

    //Query Delete Data
    if(isset($_POST['btnDelete'])){
        $kodeBrg = $_POST['kodeBrg'];
        $sqlDelete = "DELETE FROM barangadmin WHERE idBrg='$kodeBrg'";
        $result = mysqli_query($db, $sqlDelete);
        if(!$result){
            echo"<script>
                alert('Gagal Menghapus');
                document.location = '../adminBarang.php';
            </script>";
        }else{
            echo"<script>
                alert('Data Berhasil Dihapus');
                document.location = '../adminBarang.php';
            </script>";
        }
    }
?>