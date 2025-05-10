<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <style>
        .navbar-nav .nav-link {
            color: white !important;
        }

        .sosyal-medya {
            list-style: none;
            margin: 0;
            padding: 0;
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
            background-image: url('https://r.resimlink.com/MeD0Sj6qKLF2.jpg');
            background-size: cover;
            background-attachment: fixed;
        }

        .carousel {
            margin-top: 125px;
            width: 1200px;
            margin-left: auto;
            margin-right: auto;
        }


        .dropdown-container {
            position: relative;
            display: flex;
            justify-content: center;
            margin-top: 100px;
        }


        .dropdown-btn {
            background-color: #155c0a;
            color: rgb(255, 255, 255);
            padding-left: 550px;
            padding-right: 550px;
            justify-content: center;
            font-size: 17px;
            border: none;
            cursor: pointer;
        }


        .dropdown-content {
            display: none;
            position: absolute;
            background-color: rgba(187, 184, 184, 0.96);
            padding-left: 3px;
            padding-right: 3px;
            justify-content: center;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }


        .dropdown-content a {
            color: rgb(0, 0, 0);
            padding: 12px 16px;
            padding-left: 300px;
            padding-right: 300px;
            text-decoration: none;
            display: block;
            margin-top: 10px;
        }


        .dropdown-content a:hover {
            background-color: rgb(0, 0, 0, 0.9);
            margin-top: 10px;
            color: aliceblue;

        }


        .dropdown-container:hover .dropdown-content {
            display: block;
            margin-top: 27px;
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
    <div class="dropdown-container">
        <button class="dropdown-btn">Lütfen Hat Seçiniz</button>
        <div class="dropdown-content" style="font-size: 16px; font-family:'Times New Roman', Times, serif">
            <a href="https://www.ulasimburada.com/kocaeli/route/10" target="_blank">Hat 10 (OTOGAR - BAYINDIRLIK -
                UMUTTEPE)</a>
            <a href="https://www.ulasimburada.com/kocaeli/route/13" target="_blank">Hat 13 (ALİKAHYA - UMUTTEPE)</a>
            <a href="https://www.ulasimburada.com/kocaeli/route/14" target="_blank">Hat 14 (KOÜ A KAPISI - BESYO -
                İLAHİYAT FAKÜLTESİ - SAĞLIK FAKÜLTESİ​)</a>
            <a href="https://www.ulasimburada.com/kocaeli/route/20/direction/1" target="_blank">Hat 20 (UMUTTEPE -
                GÜLTEPE - BATI TERMİNALİ)</a>
            <a href="https://www.ulasimburada.com/kocaeli/route/24/direction/1" target="_blank">Hat 24 (UMUTTEPE -
                VİNSAN)</a>
            <a href="https://www.ulasimburada.com/kocaeli/route/33" target="_blank">Hat 33 (BATI TERMİNALİ - SEKA PARK -
                UMUTTEPE)</a>
            <a href="#">Hat 41K (KÖRFEZ-DERİNCE - İZMİT-KARTEPE)</a>
            <a href="https://www.ulasimburada.com/kocaeli/route/43" target="_blank">Hat 43 (BATI TERMİNALİ -
                UMUTTEPE)</a>
            <a href="https://www.ulasimburada.com/kocaeli/route/53" target="_blank">Hat 53 (BATI TERMİNALİ - TOPÇULAR -
                TUANA EVLERİ - UMUTTEPE)</a>
            <a href="https://www.ulasimburada.com/kocaeli/route/70" target="_blank">Hat 70 (AKPINAR TOKİ -
                BAYINDIRLIK-ŞEHİR HASTANESİ - UMUTTEPE)</a>
            <a href="https://www.ulasimburada.com/kocaeli/route/73" target="_blank">Hat 73 (ARIZLI YURT - UMUTTEPE)</a>
            <a href="https://www.ulasimburada.com/kocaeli/route/85" target="_blank">Hat 85 (AKPINAR TOKİ - DÜNYABANKASI
                - UMUTTEPE)</a>
            <a href="https://www.ulasimburada.com/kocaeli/route/105" target="_blank">Hat 105 (UMUTTEPE - ŞEHİR HST -
                GÜNDĞDU - HALKEVİ - R. CAMİ)</a>
            <a href="https://www.ulasimburada.com/kocaeli/route/115Ç" target="_blank">Hat 115Ç (KÖRFEZKENT -
                SOPALI-ÇENEDAĞ - ÜÇYOL-UMUTTEPE)</a>
            <a href="https://www.ulasimburada.com/kocaeli/route/145" target="_blank">Hat 145 (60 EVLER - DERİNCE -
                HALKEVİ - ŞEHİR H. - UMUTTEPE)</a>
            <a href="https://www.ulasimburada.com/kocaeli/route/190" target="_blank">Hat 190 (YUKARI HEREKE - İZMİT -
                OTOGAR - UMUTTEPE)</a>
            <a href="https://www.ulasimburada.com/kocaeli/route/200" target="_blank">Hat 200 (İZMİT - KARTAL)</a>
            <a href="https://www.ulasimburada.com/kocaeli/route/210" target="_blank">Hat 210 (KARTEPE - UMUTTEPE)</a>
            <a href="https://www.ulasimburada.com/kocaeli/route/250" target="_blank">Hat 250 (OTOGAR - SABİHA GÖKÇEN
                HAVALİMANI)</a>
            <a href="https://www.ulasimburada.com/kocaeli/route/250G" target="_blank">Hat 250G (GEBZE OTOGAR - SABİHA
                GÖKÇEN HAVAALANI)</a>
            <a href="https://www.ulasimburada.com/kocaeli/route/255" target="_blank">Hat 255 (DERBENT - İZMİT - OTOGAR -
                UMUTTEPE)</a>
            <a href="https://www.ulasimburada.com/kocaeli/route/265" target="_blank">Hat 265 (UMUTTEPE - OTOGAR - İZMİT
                - MAŞUKİYE)</a>
            <a href="https://www.ulasimburada.com/kocaeli/route/300" target="_blank">Hat 300 (UMUTTEPE - İZMİT -
                DİLOVASI)</a>
            <a href="https://www.ulasimburada.com/kocaeli/route/305" target="_blank">Hat 305 (UMUTTEPE - DİLİSKELESİ -
                BİLİŞİM VADİSİ)</a>
            <a href="https://www.ulasimburada.com/kocaeli/route/405" target="_blank">Hat 405 (ÖZGÜNKENT - İZMİT -
                UMUTTEPE)</a>
            <a href="https://www.ulasimburada.com/kocaeli/route/435" target="_blank">Hat 435 (KBB GEBZE GARAJ - İZMİT -
                UMUTTEPE)</a>
            <a href="https://www.ulasimburada.com/kocaeli/route/435MR" target="_blank">Hat 435MR (ÇAYIROVA TREN İST. -
                İZMİT OTOGAR)</a>
            <a href="https://www.ulasimburada.com/kocaeli/route/530" target="_blank">Hat 530 (UMUTTEPE - İZMİT - GEBZE -
                DARICA)</a>
            <a href="https://www.ulasimburada.com/kocaeli/route/600" target="_blank">Hat 600 (UMUTTEPE - İZMİT - KULLAR
                - DOĞANTEPE)</a>
            <a href="https://www.ulasimburada.com/kocaeli/route/635" target="_blank">Hat 635 (BAHÇECİK - YEŞİLKENT -
                İZMİT - UMUTTEPE)</a>
            <a href="https://www.ulasimburada.com/kocaeli/route/640" target="_blank">Hat 640 (DÖNGEL - ALTINKENT - İZMİT
                - UMUTTEPE)</a>
            <a href="https://www.ulasimburada.com/kocaeli/route/645" target="_blank">Hat 645 (ALTINKENT - DÖNGEL - İZMİT
                - UMUTTEPE)</a>
            <a href="https://www.ulasimburada.com/kocaeli/route/650" target="_blank">Hat 650 (HAVUZLUBAHÇE - YENİKÖY -
                İZMİT - UMUTTEPE)</a>
            <a href="https://www.ulasimburada.com/kocaeli/route/750" target="_blank">Hat 750 (KARAMÜRSEL - GÖLCÜK -
                İZMİT - UMUTTEPE)</a>
            <a href="https://www.ulasimburada.com/kocaeli/route/755" target="_blank">Hat 755 (KARAMÜRSEL - UMUTTEPE)</a>
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