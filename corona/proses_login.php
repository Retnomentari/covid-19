<?php
    include 'config.php';
    session_start();

    $username = ($_POST ['username']);
    $password = (md5($_POST['password']));

    $query = "SELECT * FROM t_user WHERE username = '$username' AND password = '$password'";
    $sql = mysqli_query ($koneksi, $query);
    $cek = mysqli_num_rows($sql);

    if($cek > 0){
        $data = mysqli_fetch_assoc($sql);

        if($data['id_level']==3){
            $_SESSION['username'] = $username;
            $_SESSION['id_level'] = "3";
            header("Location: profil.php");

        }else{
            echo "<h1> Username atau Password anda Salah !! </h1>";
            echo "<div class='form'>
                <h3>
                    <br/> Klik untuk <a href='login.php'>Login lagi</a>
                </h3>
            </div>";
        }
    }
