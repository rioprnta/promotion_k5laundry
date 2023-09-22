<?php
    include('connection/conn.php');
    if(isset($_POST['btnLogin'])){
        $user = $_POST['adminUser'];
        $pass = $_POST['passUser'];
        $sql_login = "SELECT * FROM loginadmin WHERE userAdmin='$user' AND passAdmin='$pass'";
        $result_login = mysqli_query($db, $sql_login);
        if(mysqli_num_rows($result_login) > 0){ 
            $data = mysqli_fetch_assoc($result_login);
                
            //Session
            session_start();
            $_SESSION['name'] = $data['namaAdmin'];
            $_SESSION['user'] = $data['userAdmin'];
            $_SESSION['pass'] = $data['passAdmin'];
            header("Location: adminDashboard.php");
            //END Session
                
        }else{
            echo "<script>alert('Email atau password Anda salah. Silahkan coba lagi!')</script>";
            header("Location: index.php");
        }
    }
?>
<?php
    session_start();
    if(isset($_SESSION['user'])){
        header("Location: adminDashboard.php");
        exit();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Login Admin</title>
</head>
<style>
    .S_login{
        display: flex;
        align-items: center;
        justify-content: center;
        margin : 100px auto;
    }
</style>
<body class="container bg-secondary">
    <div class="S_login">
        <div class="card" style="width: 400px;min-width: auto;max-width: auto;">
            <div class="card-header text-center">
                <h1 class="fw-bold">LOGIN</h1>
            </div>
            <div class="card-body">
                <form method="POST" action="    ">
                <div class="mb-3">
                    <div class="input-group mb-3">
                        <span class="input-group-text" style="min-width: 90px;" id="basic-addon1">Username</span>
                        <input type="text" name="adminUser" class="form-control" placeholder="Masukkan Username" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                </div>
                <div class="row mb-3 align-items-center">
                    <div class="input-group mb-3">
                        <span class="input-group-text" style="min-width: 96px;" id="basic-addon1">Password</span>
                        <input type="password" name="passUser" class="form-control" placeholder="Masukkan Password" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                    <p class="text-secondary"style="text-align: right;font-size: 10px;margin-bottom:0;margin-top:-10px">Must be 8-20 characters long.</p>
                </div>
                <div class="row">
                    <div class="col mb-3">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Remember Me</label>
                    </div>
                    <div class="col mb-3" style="text-align: right;">
                        <a href="#" class="text-decoration-non">
                            <p style="font-size: 12px;">Forgot Password ?</p>
                        </a>
                    </div>
                </div>
                    <button type="submit" name="btnLogin" class="btn btn-primary" style="width: 100%;">Login</button>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>