<!DOCTYPE html>
<html lang="en">
<head>
     <title>  WEB SAYA  </title>
     <style>
        .welcome {
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: justify;
            height: 100vh;
            width:  100vw;
            padding: 20px;
            box-sizing: border-box;
        }
        .teks-header-kontainer {
            font-family: 'Courier New', Courier, monospace;
            align-items: center;
            max-width: 800px;
        }
        .konten  {
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .navigasi    {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: row; /* Ensure elements are in a row */
            gap: 20px; /* Optional: Add space between items */
        }
        .tanggal    {
            font-family: 'Courier New', Courier, monospace;
        }
        .footer {
            display: flex;
            justify-content: center;
            align-items: center;
        }

     </style>

    
</head>
<body >

        <?php

                $_dbhost = 'localhost';
                $_dbuser = 'root';
                $_dbpass = 'dbpass';
                $_dbname = 'my-website';
                $koneksi = mysqli_connect($_dbhost, $_dbuser, '', 'my-website');
                if (mysqli_connect_errno()) {
                    echo "maaf, koneksinya gagal". mysqli_connect_error();
                    exit();
                }
                echo 'selamat, koneksi anda berhasil'
                

        ?>
   
        <header>    
            <div class="welcome">
                <div class="teks-header-kontainer">
                    <h1>
                        Halo! Selamat Datang!
                    </h1>
                <div class"identitas">
                            <p>
                                <h3>
                                    Adhi Nugroho
                                </h3>
                            </p>
                        </div>

                    <h3>
                        Anda sangat luar biasa, Masya Allah
                    </h3>
                </div>    
            </div>

            <div>
            <nav class="navigasi">
                <a href="index.php"> Home </a>
                <a href="tentang.php"> Tentang </a>
                <a href="kontak.php"> kontak </a>
            </nav>
        </div>
        </header>

        <div class="konten">
            <section>
                <p>
                    ini adalah konten website anda disini
                </p>

                <div class="tanggal">
                    <?php
                            $current_date = date("Y-m-d");
                            echo "<p> Sekarang adalah tanggal $current_date </p>";
                        ?>
                    </div>
            </section>
        </div>
        

        <footer class="footer">
            <p>
                &copy; PPLG SMK Takhasus Al Qur'an 2024 
            </p>
        </footer>
</body>
</html>