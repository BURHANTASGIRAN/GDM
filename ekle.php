<?php

if (isset($_POST["kaydet"])) {
  include 'baglan.php';
$sql="INSERT INTO `tunel` (`id`, `tarih`, `istasyon_saft`, `istikamet`, `iksa`, `beton_kalinlik`, `hasir`, `bulon`, `suren`, `umbrella`, `ayna_kapama`, `aciklama`, `islemler`) VALUES (NULL, ?, ?, ?, ?, ?, ?,?, ?, ?, ?, ?, ?);";
$dizi=[

    $_POST["tarih"],
    $_POST["istasyon_saft"],
    $_POST["istikamet"],
    $_POST["iksa"],
    $_POST["beton_kalinlik"],
    $_POST["hasir"],
    $_POST["bulon"],
    $_POST["suren"],
    $_POST["umbrella"],
    $_POST["ayna_kapama"],
    $_POST["açıklama"],
    $_POST["işlemler"]
];

$sth=$baglan->prepare($sql);
$sonuc=$sth->execute($dizi);
}

?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gebze Darıca Metrosu</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

</head>
<body>
    <header>
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1 class="display-1 text-center"> Gebze Darıca Metrosu</h1>
                </div>
            </div>
            <div class="btn-group" role="group" aria-label="Basic mixed styles example">

                <a href="index.php" class="btn btn-lg btn-outline-primary">Tüm İmalatlar</a>
                <a href="ekle.php" class="btn btn-lg btn-outline-primary">İmalat Ekle</a>

            </div>
        </div>
    </header>
    <main>
        <div class="container">
            <form action="" method="post" class="row mt-4 g-3">
            <div class="col-3">
                <label for="tarih" class="form-label">Tarih__________:</label>
                <input type="date" class="for-contol" name="tarih">
            </div>
            <div class="col-3">
                <label for="istasyon_saft" class="form-label">istasyon_şaft_:</label>
                <input type="text" class="for-contol" name="istasyon_saft">
            </div>
            <div class="col-3">
                <label for="istikamet" class="form-label">istikamet____:</label>
                <input type="text" class="for-contol" name="istikamet">
            </div>
            <div class="col-3">
                <label for="iksa" class="form-label">iksa__________:</label>
                <input type="text" class="for-contol" name="iksa">
            </div>
            <div class="col-3">
                <label for="beton_kalinlik" class="form-label">beton kalınlık:</label>
                <input type="text" class="for-contol" name="beton_kalinlik">
            </div>
            <div class="col-3">
                <label for="hasir" class="form-label">hasır_________:</label>
                <input type="text" class="for-contol" name="hasir">
            </div>
            <div class="col-3">
                <label for="bulon" class="form-label">bulon________:</label>
                <input type="text" class="for-contol" name="bulon">
            </div>
            <div class="col-3">
                <label for="suren" class="form-label">süren________:</label>
                <input type="text" class="for-contol" name="suren">
            </div>
             <div class="col-3">
                <label for="umbrella" class="form-label">umbrella_____:</label>
                <input type="text" class="for-contol" name="umbrella">
            </div>   
            <div class="col-3">
                <label for="" class="form-label">ayna_kapama Evet
                <input type="radio" name="ayna_kapama" value="E">
                </label>
                <label for="ayna_kapama" class="form-label">ayna_kapama Hayır
                <input type="radio" name="ayna_kapama" value="H">
                </label>
            </div>   
            <div class="col-3">
                <label for="açıklama" class="form-label">açıklama_____:</label>
                <input type="text" class="for-contol" name="açıklama">
            </div>  
            
            <div class="col-3">
                <label for="işlemler" class="form-label">işlemler_____:</label>
                <input type="text" class="for-contol" name="işlemler">
            </div>   
            <button type="submit" name="kaydet" class="btn btn-primary" type="button">Kaydet</button>
           
            </form>
        </div>
    </main>
    <footer></footer>
    

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>