<?php
include "baglanti.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['ad'];
    $surname = $_POST['soyad'];
    $idNumber = $_POST['tc'];
    $telephone = $_POST['telefon'];
    $card_name = $_POST['kartTuru'];
    $balance = 0;
    $createdate = date("Y-m-d H:i:s");
    $card_type_id = null;


    if ($card_name) {
        $sql_get_card_type_id = "SELECT id FROM card_type WHERE card_name = :card_name";
        $stmt = $pdo->prepare($sql_get_card_type_id);
        $stmt->execute([':card_name' => $card_name]);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($row) {
            $card_type_id = $row['id'];

            $sql_check = "SELECT * FROM users WHERE idNumber = :idNumber";
            $stmt = $pdo->prepare($sql_check);
            $stmt->execute([':idNumber' => $idNumber]);

            if ($stmt->rowCount() > 0) {
                echo "BU KULLANICI ZATEN KAYITLI";
            } else {
                $sql_insert_user = "INSERT INTO users (idNumber, name, surname, telephone, createdate, balance, card_type_id) 
                        VALUES (:idNumber, :name, :surname, :telephone, :createdate, :balance, :card_type_id)";
                $stmt = $pdo->prepare($sql_insert_user);
                $stmt->execute([
                    ':idNumber' => $idNumber,
                    ':name' => $name,
                    ':surname' => $surname,
                    ':telephone' => $telephone,
                    ':createdate' => $createdate,
                    ':balance' => $balance,
                    ':card_type_id' => $card_type_id
                ]);


                $user_id = $pdo->lastInsertId();
                $sql_insert_application = "INSERT INTO basvurular (user_id, basvuru_tarihi, durum) 
                        VALUES (:user_id, :basvuru_tarihi, :durum)";
                $stmt = $pdo->prepare($sql_insert_application);
                $stmt->execute([
                    ':user_id' => $user_id,
                    ':basvuru_tarihi' => $createdate,
                    ':durum' => 'beklemede'
                ]);

                // İşlem log kaydı
                $sql_log = "INSERT INTO islem_log (user_id, islem_turu, islem_tarihi, detay) 
            VALUES (:user_id, :islem_turu, :islem_tarihi, :detay)";
                $stmt_log = $pdo->prepare($sql_log);
                $stmt_log->execute([
                    ':user_id' => $user_id,
                    ':islem_turu' => 'başvuru',
                    ':islem_tarihi' => $createdate,
                    ':detay' => 'Yeni kart başvurusu yapıldı.'
                ]);

                if ($stmt) {
                    echo "BAŞVURUNUZ BAŞARIYLA TAMAMLANMIŞTIR";
                    exit;
                } else {
                    echo "Hata oluştu: Başvuru yapılamadı.";
                    exit;
                }
            }
        } else {
            echo "Kart türü bulunamadı.";
        }
    } else {
        echo "Kart türü seçilmedi.";
    }
}
?>


<!DOCTYPE html>

<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="index.css">
    <style>
        body {
            background-image: url('https://r.resimlink.com/MlLTZGt.jpg');
            background-size: cover;
            background-attachment: fixed;
            font-family: 'Segoe UI', sans-serif;

        }

        .container {

            margin: 0 auto;
            padding: 40px 20px;
            margin-top: 100px;
            border: 1px solid #ddd;
            border-radius: 20px;
            background-color: rgba(236, 236, 236, 0.9);
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
        }

        .container h2 {
            text-align: center;
            color: #333;
        }


        label {
            display: block;
            margin-bottom: 6px;
            font-weight: 600;
            color: #333;
        }

        input[type="text"],
        input {
            border: 1px solid rgb(60, 60, 60);
            width: 500px;
        }

        button[type="submit"] {
            margin-left: auto;
            margin-right: auto;
            width: 500px;
            background-color: #007bff;
            color: white;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            font-size: 16px;
        }

        select {
            width: 500px;
            padding: 10px 14px;
            border-radius: 12px;
            border: 1px solid #ccc;
            background-color: #fff;
            font-size: 15px;
        }


        @media screen and (max-width: 576px) {
            .container {
                margin-top: 120px;
                width: 90%;
            }
        }
    </style>


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anasayfa</title>
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
        </div>


    </nav>

    <div class="container" style="margin-top: 100px; padding: 20px; background-color:rgb(182, 182, 182);">
        <h2>KentKart Başvuru Formu</h2>
        <form id="kartBasvuruForm" action="" method="post">
            <div class="form-group">
                <label for="ad">İsim:</label>
                <br>
                <input type="text" id="ad" name="ad" required>
            </div>

            <div class="form-group">
                <label for="soyad">Soyisim:</label><br>
                <input type="text" id="soyad" name="soyad" required>
            </div>

            <div class="form-group">
                <label for="tc">TC Kimlik Numarası:</label><br>
                <input type="text" id="tc" name="tc" min="11" max="11" required>
            </div>

            <div class="form-group">
                <label for="telefon">Telefon Numarası:</label><br>
                <input type="text" id="telefon" name="telefon" min="11" max="11" required>
            </div>
            <div class="form-group">
                <label for="kartTuru">Kart Türü:</label>
                <br>
                <select name="kartTuru" id="kartTuru" required style="border:1px solid rgb(60, 60, 60); width: 500px;">
                    <option value="">Lütfen seçiniz</option>
                    <?php
                    $mysqli = new mysqli("localhost", "root", "", "kentkartdb");

                    if ($mysqli->connect_errno) {
                        echo "<option disabled>Veritabanına bağlanılamadı</option>";
                    } else {
                        $sql = "SELECT * FROM card_type";
                        $result = $mysqli->query($sql);
                        if ($result) {
                            while ($row = $result->fetch_assoc()) {
                                echo "<option value='" . $row['card_name'] . "'>" . $row['card_name'] . "</option>";
                            }
                            $result->free();
                        } else {
                            echo "<option disabled>Sorgu hatası</option>";
                        }
                        $mysqli->close();
                    }
                    ?>
                </select>
            </div>
            <div class="form-group">
                <button type="submit">Başvur</button>
            </div>


        </form>

    </div>

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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


    <script>
        // Sayfa yüklendiğinde çalışacak kod
        $(document).ready(function () {
            // Form gönderildiğinde AJAX isteği gönder
            $('#kartBasvuruForm').submit(function (event) {
                // Formun normal işlemini engelle
                event.preventDefault();

                // AJAX isteği gönder
                $.ajax({
                    type: "POST",
                    url: "kartbasvuru.php", // Verileri işleyecek PHP dosyasının adresi
                    data: $(this).serialize(), // Form verilerini doğrudan gönder
                    success: function (response) {
                        // AJAX isteği başarılı olduğunda
                        alert(response); // Mesajı alert ile göster
                        $("#kartBasvuruForm")[0].reset(); // Formu sıfırla
                    },
                    error: function (xhr, status, error) {
                        // AJAX isteği başarısız olduğunda
                        alert("Bir hata oluştu, lütfen tekrar deneyin."); // Hata mesajını alert ile göster
                    }
                });
            });
        });
    </script>