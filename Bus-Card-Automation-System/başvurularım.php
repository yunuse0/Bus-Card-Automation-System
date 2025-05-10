<?php

include "baglanti.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $tc = $_POST['kartNo'];
    $stmt = $pdo->prepare("SELECT durum FROM basvurular WHERE user_id = (SELECT id FROM users WHERE idNumber = :idNumber)");
    $stmt->execute([':idNumber' => $tc]);
    $basvurular = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($basvurular) {
        $basvuruDurumu = $basvurular['durum'];

        echo "<script>
        window.onload = function() {
            document.getElementById('basvuruDurumu').value = '$basvuruDurumu';
        };
      </script>";
    } else {

        echo "<script>
                    alert('Hata: Bu TC Kimlik Numarasına sahip bir kullanıcı bulunamadı.');
                </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <style>
        .navbar-nav .nav-link {
            color: white !important;
        }

        .sosyal-medya li {
            display: inline-block;
            margin-left: auto;
            padding-left: 25px;
        }

        .sosyal-medya li a {
            color: white;
            font-size: 18px;
        }

        .navbar-nav .nav-link {
            color: white !important;
        }

        .sosyal-medya {
            margin-left: 620px;
            margin-top: 7px;
        }

        body {
            background-image: url('https://r.resimlink.com/MlLTZGt.jpg');
            background-size: cover;
            background-attachment: fixed;
        }

        .container {
            padding: 40px 20px;
            margin-top: 170px;
            border: 1px solid #ddd;
            border-radius: 20px;
            background-color: rgba(236, 236, 236, 0.9);
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
        }

        .container h2 {
            text-align: center;
            color: black;
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="password"],
        input[type="number"],
        input[type="submit"] {
            width: 30%;
            padding: 7px;
            border-radius: 5px;
            border: 1px solid rgb(0, 0, 0);
            box-sizing: border-box;
        }


        input[type="submit"]:hover {
            background-color: #0056b3;
        }


        #miktar {
            background-color: #fff;
            color: #333;
        }

        button[type="submit"] {
            width: 30%;
            margin-left: auto;
            margin-right: auto;
            display: block;
            width: 30%;
            padding: 12px;
            background-color: #0073e6;
            color: white;
            border: none;
            border-radius: 12px;
            font-size: 16px;
            font-weight: bold;
            transition: background-color 0.3s;
        }

        button[type="submit"]:hover {
            background-color: #004fa3;
        }
    </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kocaeli Ulaşım Merkezi</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <a class="navbar-brand" href="index2.php"><i class="fas fa-house"></i> Anasayfa</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="kartBasvuru.php"><i class="fas fa-credit-card"></i> Kart Başvuru</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="başvurularım.php"><i class="fas fa-file-alt"></i> Başvurularım</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="kartIslemleri.php" role="button" data-toggle="dropdown"
                        aria-expanded="false">
                        <i class="fas fa-credit-card"></i> Kart İşlemleri
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="BakiyeSorgulama.php"><i class="fas fa-search-dollar"></i> Bakiye
                            Sorgulama</a>
                        <a class="dropdown-item" href="BakiyeYukleme.php"><i class="fas fa-money-bill-wave"></i> Bakiye
                            Yükleme</a>
                        <div class="dropdown-divider"></div>

                    </div>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="NasilGiderim.php"><i class="fas fa-bus"></i> Nasıl Giderim?</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="İletişim.php"><i class="fa-solid fa-phone"></i> İletişim</a>
                </li>
            </ul>
            <div class="sosyal-medya" style="margin-left: auto;">
                <ul>
                    <li><a href="https://www.facebook.com/ulasimpark/" target="_blank"><i
                                class="fab fa-facebook"></i></a></li>
                    <li><a href="https://twitter.com/ulasimpark" target="_blank"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="https://www.instagram.com/ulasimparkas/" target="_blank"><i
                                class="fab fa-instagram"></i></a></li>
                    <li><a href="https://www.youtube.com/channel/UCwJTOkDfYKDou0Pfq0b-DGw" target="_blank"><i
                                class="fa-brands fa-youtube"></i></a></li>
                </ul>
            </div>

            </ul>
        </div>

    </nav>
    <center>
        <div class="container" style="width: 700px; height: 420px; background-color:rgb(182, 182, 182);">
            <h2>KentKart Başvuru Sorgulama <br><br></h2>
            <form action="#" method="post" id="bakiyeForm">
                <div class="form-group">
                    <label for="kartNo">TC Kimlik Numarası:</label><br>
                    <input type="text" id="kartNo" name="kartNo" required>
                </div>

                <div class="form-group">
                    <label for="basvuruDurumu">Başvuru Durumu:</label><br>
                    <input type="text" id="basvuruDurumu" name="basvuruDurumu" disabled>
                </div>
                <button type="submit">Sorgula</button>
            </form>
        </div>
    </center>


    <br><br><br><br><br>
    <div class="card text-center" style="max-width: 1200px; margin-left: auto; margin-right: auto;">

        <div class="card-header">
            <strong><i> Kocaeli Büyükşehir Belediyesi</i> </strong>
        </div>
        <div class="card-body">


            <p class="card-text">
            <h5>ULAŞIMPARK ULAŞTIRMA HİZMETLERİ VE TİCARET ANONİM ŞİRKETİ</h5>
            <h5 style="font-size: 16px; ">Yahya Kaptan Mah., Elzem Sok.,No:68/5,
                İzmit/Kocaeli.</h5>
            <a href="mailto:bilgi@ulasimpark.com.tr" style="font-size: 16px;"><b>bilgi@ulasimpark.com.tr</b></a><br>
            <a href="tel:+02623252305" style="font-size: 20px;color: rgb(0, 0, 0);"><b>Telefon :&nbsp;0 (262) 325 23
                    05</b></a><br></p>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"
        integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+"
        crossorigin="anonymous"></script>
</body>

</html>