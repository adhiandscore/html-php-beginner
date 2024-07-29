<?php 
   
include 'index.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $fakta = $_POST["fakta"];

        $query = "INSERT INTO tb_siswa(nama, email, fakta) VALUES ('$name', '$email', '$fakta') ";

        if (mysqli_query($koneksi, $query)) {
            echo "Sukses memasukkan data";
        }
        else {
            echo "GAGAL WOY";
        }

        echo "<p> Sukses,  $name! </p>";
    }
    else {
        echo "<p> maaf, anda belum sukses </p>";
    }

    

// bagian ini menggunakan tambahan htmlspecialchars untuk menghindari sql inject
    // if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //     $name = htmlspecialchars($_POST["name"]);
    //     $email = htmlspecialchars($_POST["email"]);
    //     $fakta = htmlspecialchars($_POST["fakta"]);

    //     echo "<p> Sukses,  $name! </p>";
    // }
    // else {
    //     echo "<p> maaf, anda belum sukses </p>";
    // }
?>