<!DOCTYPE html>

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="index.css">


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kocaeli Ulaşım Merkezi</title>
</head>

<body>
    <style>
        body {
            background-image: url('https://r.resimlink.com/MlLTZGt.jpg');
        }
    </style>
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
        </div>


    </nav>
    <br><br><br><br>
    <div style=" background-color: rgba(31, 54, 54, 0.6); text-align: center; padding: 10px;">
        <p style="font-size: 50px; font-style: italic; color: rgb(240, 248, 255);"><br>~ KOCAELİ BÜYÜKŞEHİR BELEDİYESİ ~
            <br>
        </p>
        <p style="font-size: 28px; color: rgb(240, 248, 255, 0.8);">Ulaşım ve KentKart Merkezi <br><br></p>
    </div>
    <br><br><br>
    <div>
        <a href="kartBasvuru.php" title="KentKart başvurusu başlat." class="btn btn-primary btn-lg active" role="button"
            aria-pressed="true"
            style="font-size: 25px; padding: 20px; padding-left: 50px; padding-right: 50px; margin-left: 0px; background-color: rgb(240, 248, 255, 0.8); color: black; font-family:TT neoris; font-weight: 1000; border-radius: 30px; ">Kart
            Edin </a>
        <a href="BakiyeSorgulama.php" title="KentKart bakiyenizi görüntüleyin." class="btn btn-primary btn-lg active"
            role="button" aria-pressed="true"
            style="font-size: 25px; padding: 20px; padding-left: 20px; padding-right: 20px; margin-left: 125px; background-color: rgb(240, 248, 255, 0.8); color: black; font-family:TT neoris; font-weight: 1000; border-radius: 30px; ">Bakiye
            Sorgula </a>
        <a href="BakiyeYukleme.php" title="Kartınıza TL yükleyin." class="btn btn-primary btn-lg active" role="button"
            aria-pressed="true"
            style="font-size: 25px; padding: 20px; padding-left: 30px; padding-right: 30px; margin-left: 100px; background-color: rgb(240, 248, 255, 0.8); color: black; font-family:TT neoris; font-weight: 1000; border-radius: 30px; ">Bakiye
            Yükle </a>
        <a href="NasilGiderim.php" title="Hatlar hakkında bilgi edinin." class="btn btn-primary btn-lg active"
            role="button" aria-pressed="true"
            style="font-size: 25px; padding: 20px; padding-left: 20px; padding-right: 20px; margin-left: 110px; background-color: rgb(240, 248, 255, 0.8); color: black; font-family:TT neoris; font-weight: 1000; border-radius: 30px;">Nasıl
            Giderim? </a>
    </div>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="resimlerr/travmaay2.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="resimlerr/kocaeli.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="resimlerr/vapuranasayfa22.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-target="#carouselExampleIndicators" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-target="#carouselExampleIndicators" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </button>

    </div>

    <div
        style=" text-align: center; padding: 119px; background-color:rgba(119, 209, 192, 0.3) ; margin-top: 70px; margin-bottom: 70px;">
        <p
            style=" background-color:rgba(31, 54, 54, 0.7) ; font-size: 40px; color: rgb(136, 216, 171); font-style: italic; font-family:TT neoris; font-weight: 1000;">
            Hakkımızda</p>
        <p
            style="font-size: 20px; color: aliceblue; background-color:rgba(31, 54, 54, 0.8  ); font-family:'Times New Roman', Times, serif ;">
            Kocaeli Büyükşehir Belediyesi olarak vatandaşlarımıza ulaşım konusunda en iyi imkanları sunmak ve en
            konforlu ulaşım şartlarını sağlamak için mücadele vermekteyiz. Şehrimizde bulunan çeşitli taşıtlar sayesinde
            karayolu, denizyolu ve demiroylu taşımacıklarında faaliyetlerimiz bulunmaktadır. Bu faaliyetlerimizde her
            geçen gün daha iyiye ve rahata ulaşabilmek ve değerli halkımıza en iyi hizmeti sunabilmek için "ekomobil"
            uygulamamızın yanısıra internet sitemiz üzerinden de sınırsız hizmet gösterme gayretindeyiz. Kocaeli
            Büyükşehir Belediyesi olarak toplu taşıma konforuna son derece önem vermekteyiz ve bu konfor için otobüs,
            tramvay ve vapur içerisinde çalışmalarımıza kesintisiz devam etmekteyiz. Ulaşım ve pek çok konuda daha
            detaylı bilgi sahibi olmak için 0 (262) 325 23 05 numarasını arayabilir veya "bilgi@ulasimpark.com.tr"
            adresine mail atabilirsiniz.
        </p>
        <p
            style="font-size: 18px; color: aliceblue; background-color:rgba(31, 54, 54, 0.8  ); font-family:'Times New Roman', Times, serif ;">
            "Altını çizerek söylüyorum: Kaliteli bir yaşam için, hemşehrilerimizin hak ettiği standartları Kocaeli’ne
            getirmeye devam edeceğiz… Yolunuz her daim açık olsun."
        <p
            style="font-size: 18px; color: aliceblue; background-color:rgba(31, 54, 54, 0.8  ); font-family:'Times New Roman', Times, serif ;">
            Doç. Dr. Tahir Büyükakın</p>
        </p>
        <li>
            <a href="İletişim.php" target="_blank"
                style="color: white; background-color: rgba(0,0,0, 0.8); padding: 4px; border-radius: 5px;">İletişim
                bölümü için
                tıklayabilirsiniz</a>
        </li>
    </div>

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