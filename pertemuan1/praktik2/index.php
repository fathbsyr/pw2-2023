<?php
/*
    variabel sistem (yang sudah built-in)
*/
    echo $_SERVER["DOCUMENT_ROOT"];
    echo '<br>';
    echo '<br>';


/*
    variabel user
    variabel yang dibuat user
*/
    $name = "Fatih";
    $age = 18;
    $weight = 75;
    $name = "Mubasyir";

    echo "Nama Saya Adalah " . $name;
    echo '<br>';
    echo '<br>';



  /*
    Variable konstan
    variable yang tidak bisa diubah nilainya
	  1. Menggunakan define | define('fruit', "Apel");
	  2. Menggunakan const  | const fruit = "Apel";
  */
  define ("SITE_NAME", "Elena");
  const BASE_URL = "https://elena.nurulfikri.ac.id/";

  // Menampilkan variable konstanta
  echo "Site name: " . SITE_NAME . "<br/>";
  echo "URL: " . BASE_URL . "<br/>"
?>