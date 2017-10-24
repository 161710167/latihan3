<?php

require_once 'kelas.php';

$kelas = new kelas ('yeni','xi-rpl 1');

echo"nama =".$kelas->get_nama()."<br>";
echo"kelas =".$kelas->get_kelas()."<br>";


?>