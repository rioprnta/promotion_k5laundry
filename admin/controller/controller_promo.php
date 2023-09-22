<?php
    //Tambah Promo Baru
    include('../connection/conn.php');

    //Query Tambah Promo
    if(isset($_POST['btnSavePromo'])){
        $kodePromo = $_POST['kodePromo'];
        $tittlePromo = $_POST['tittlePromo'];
        $startPromo = $_POST['startPromo'];
        $sisaPromo = $_POST['sisaPromo'];
        $expPromo = $_POST['expPromo'];
        $descPromo = $_POST['descPromo'];
        $sql_promo = "INSERT INTO promocurrent value('$kodePromo', '$tittlePromo', '$startPromo', '$sisaPromo', '$expPromo', '$descPromo')";
        $result_promo = mysqli_query($db, $sql_promo);

        if(!$result_promo){
            echo"<script>
                alert('Gagal Menyimpan');
                document.location = '../adminPromo.php';
            </script>";
        }else{
            echo"<script>
                alert('Data Berhasil Disimpan');
                document.location = '../adminPromo.php';
            </script>";
        }
    }

    //Query Delete Promo
    if(isset($_POST['deletePromo'])){
        $kodePromoDelete = $_POST['kodePromoDelete'];
        $sql_promo = "DELETE FROM promocurrent WHERE ID_Promo='$kodePromoDelete'";
        $result_promo = mysqli_query($db, $sql_promo);

        if(!$result_promo){
            echo"<script>
                alert('Gagal Delete');
                document.location = '../adminPromo.php';
            </script>";
        }else{
            echo"<script>
                alert('Data Berhasil Didelete');
                document.location = '../adminPromo.php';
            </script>";
        }
    }
?>
