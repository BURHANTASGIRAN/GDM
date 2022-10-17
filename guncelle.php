<?php
include "baglan.php";

if (isset($_POST['guncelle'])) {
    $sql="UPDATE `tunel` 
    SET
    `tarih` = ?, 
    `istasyon_saft` = ?, 
    `istikamet` = ?, 
    `iksa` = ?, 
    `beton_kalinlik` = ?, 
    `hasir` = ?, 
    `bulon` = ?, 
    `suren` = ?, 
    `umbrella` = ?, 
    `ayna_kapama` = ?, 
    `aciklama` = ? WHERE `tunel`.`id` = ?";


    $dizi = [
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
        $_POST["aciklama"], 
        $_POST["id"]  ];

    $sorgu=$baglan->prepare($sql);
    $sorgu->execute($dizi);
       
    header("Location:index.php");
}
$sql ="SELECT * FROM tunel WHERE id=?";
$sorgu=$baglan->prepare($sql);
$sorgu->execute([
    $_GET['id']
]);
$satir=$sorgu->fetch(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">
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
                <input type="hidden" name="id" value="<?=$satir['id']?>">
            <div class="col-3">
                <label for="tarih" class="form-label">Tarih__________:</label>
                <input type="date" class="for-contol" name="tarih" value="<?=$satir['tarih']?>">
            </div>
            <div class="col-3">
                <label for="istasyon_saft" class="form-label">istasyon_şaft_:</label>
                <input type="text" class="for-contol" name="istasyon_saft" value="<?=$satir['istasyon_saft']?>">
            </div>
            <div class="col-3">
                <label for="istikamet" class="form-label">istikamet____:</label>
                <input type="text" class="for-contol" name="istikamet" value="<?=$satir['istikamet']?>">
            </div>
            <div class="col-3">
                <label for="iksa" class="form-label">iksa__________:</label>
                <input type="text" class="for-contol" name="iksa" value="<?=$satir['iksa']?>">
            </div>
            <div class="col-3">
                <label for="beton_kalinlik" class="form-label">beton kalınlık:</label>
                <input type="text" class="for-contol" name="beton_kalinlik"value="<?=$satir['beton_kalinlik']?>">
            </div>
            <div class="col-3">
                <label for="hasir" class="form-label">hasır_________:</label>
                <input type="text" class="for-contol" name="hasir"value="<?=$satir['hasir']?>">
            </div>
            <div class="col-3">
                <label for="bulon" class="form-label">bulon________:</label>
                <input type="text" class="for-contol" name="bulon"value="<?=$satir['bulon']?>">
            </div>
            <div class="col-3">
                <label for="suren" class="form-label">süren________:</label>
                <input type="text" class="for-contol" name="suren"value="<?=$satir['suren']?>">
            </div>
             <div class="col-3">
                <label for="umbrella" class="form-label">umbrella_____:</label>
                <input type="text" class="for-contol" name="umbrella"value="<?=$satir['umbrella']?>">
            </div>   
            <div class="col-3">
                <label for="" class="form-label">ayna_kapama Evet
                <input type="radio" name="ayna_kapama" value="E"value="<?=$satir['ayna_kapama']?>">
                </label>
                <label for="ayna_kapama" class="form-label">ayna_kapama Hayır
                <input type="radio" name="ayna_kapama" value="H"value="<?=$satir['ayna_kapama']?>">
                </label>
            </div>   
            <div class="col-3">
                <label for="aciklama" class="form-label">açıklama_____:</label>
                <input type="text" class="for-contol" name="aciklama"value="<?=$satir['aciklama']?>">
            </div>  
            
            <div class="col-3">
                <label for="islemler" class="form-label">işlemler_____:</label>
                <input type="text" class="for-contol" name="islemler"value="<?=$satir['islemler']?>">
            </div>   
            <button type="submit" name="guncelle" class="btn btn-primary" type="button">guncelle</button>
           
            </form>
        </div>
    </main>
    <footer></footer>
    

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>