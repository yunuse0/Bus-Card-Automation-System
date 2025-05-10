<?php
include "baglanti.php";

if ($pdo) {
    echo " PDO bağlantısı başarılı!";
} else {
    echo " Bağlantı başarısız.";
}
?>