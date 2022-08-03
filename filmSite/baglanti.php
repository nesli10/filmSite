<?php

$baglanti = new mysqli("localhost", "root", "", "nesli_proje");

if ($baglanti->connect_errno > 0) {
    die("<b>Bağlantı Hatası:</b> " . $baglanti->connect_error);
}

$baglanti->set_charset("utf8");

$sorgu = $baglanti->query("SELECT * FROM filmler");
$sorgu2 = $baglanti->query("SELECT * FROM yorumlar order by yorum_id desc");












if ($baglanti->errno > 0) {
    die("<b>Sorgu Hatası:</b> " . $baglanti->error);
}





?>
