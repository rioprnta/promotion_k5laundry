<?php
    $db = new mysqli('localhost','root','','admin_kr5_laundry');
    if($db -> connect_errno){
        echo "
            <script>
                alert('Gagal Terhubung');
            </script>
        ";
    }
?>