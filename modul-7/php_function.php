<?php
    // String
    $kalimat = "Sedang belajar PHP";
    echo strtolower($kalimat); 
    echo "<br>";
    echo strtoupper($kalimat);

    echo "<br/><br/>";

    // String
    $kalimat = "sedang dalam perjalanan menjadi seorang web programmer";
    echo ucfirst($kalimat);
    echo "<br>";
    $kalimat = "Sedang dalam perjalanan menjadi seorang web programmer";
    echo lcfirst($kalimat);

    echo "<br/><br/>";

    // Trim
    $a = "      abcd      ";
    $trim_a = trim($a);
    echo $a."<br>";
    echo $trim_a."<br>";

    echo "<br/><br/>";

    // Number Format
    echo number_format(39999.99,0,',','.')."<br>";   
    echo number_format(39999.99,2,',','.')."<br>";   
    echo number_format(39999.99,4,',','.')."<br>";   
    echo number_format(1499999,2,',','.')."<br>";    
    echo number_format(135000,2,' ',' ')."<br>";  

    echo "<br/><br/>";
    
    // SubString
    $kalimat = "Belajar PHP di Telkom University Surabaya";
    echo substr($kalimat,0)."<br>";   
    echo substr($kalimat,15)."<br>";  
    echo substr($kalimat,0,7)."<br>"; 
    echo substr($kalimat,0,11);

    echo "<br/><br/>";

    // Array Count
    $zoo = array("kucing","ikan","ayam","bebek","sapi");
    echo count($zoo);

    echo "<br/><br/>";

    // Array Count
    $zoo = array("kucing","ikan","ayam","bebek","sapi");
    for ($i=0; $i < count($zoo); $i++) {
        echo $zoo[$i]."<br>";
    }

    echo "<br/><br/>";

    // Array Push
    $siswa = array("andi", "gina", "joko", "santi");
    $var = array_push($siswa,"rani");
    echo $var;
    echo "<br/>";
    print_r($siswa); 

    echo "<br/><br/>";

    // Array Pop
    $siswa = array("andi", "gina", "joko", "santi");
    $satu_siswa = array_pop($siswa);
    echo $satu_siswa;
    echo "<br/>";
    print_r($siswa);

    echo "<br/><br/>";

    // In Array
    $siswa = array("andi", "gina", "joko", "santi");
    $cek = in_array("joko",$siswa);
    var_dump($cek); 