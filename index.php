<?php
include "baglan.php";

if (isset($_GET['sil'])) {
    $sqlsil="DELETE FROM `tunel` WHERE `tunel`.`id` = ?";
    $sorgusil = $baglan->prepare($sqlsil);
    $sorgusil->execute([$_GET['sil']]);
    header('Location:index.php');
}

$sql="SELECT * FROM  tunel";
$sorgu=$baglan->prepare($sql);
$sorgu->execute();




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
            <div class="row mt-5" >
                <div class="col">
                    <table class="table table-hover table-dark  table-striped">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>tarih</th>
                                <th>istasyon_şaft</th>
                                <th>istikamet</th>
                                <th>iksa</th>
                                <th>beton_kalınlık</th>
                                <th>hasır</th>
                                <th>bulon</th>
                                <th>süren</th>
                                <th>umbrella</th>
                                <th>ayna_kapama</th>
                                <th>açıklama</th>
                                <th>işlemler</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while($satir=$sorgu->fetch(PDO::FETCH_ASSOC)){?>
                            <tr>
                                <td><?=$satir['id']?></td>
                                <td><?=$satir['tarih']?></td>
                                <td><?=$satir['istasyon_saft']?></td>
                                <td><?=$satir['istikamet']?></td>
                                <td><?=$satir['iksa']?></td>
                                <td><?=$satir['beton_kalinlik']?></td> 
                                <td><?=$satir['hasir']?></td>  
                                <td><?=$satir['bulon']?></td>
                                <td><?=$satir['suren']?></td>
                                <td><?=$satir['umbrella']?></td>
                                <td><?=$satir['ayna_kapama']?></td>
                                <td><?=$satir['aciklama']?></td>
                                <td><?=$satir['islemler']?></td>
                                <td></td>
                                <td>
                                    <div class="btn-group">

                                        <a href="guncelle.php?id=<?=$satir['id']?>" class="btn btn-secondary">Güncelle</a>
                                        <a href= "?sil=<?=$satir['id']?> " onclick="return confirm('silinsin mi')" class="btn btn-danger">Kaldır</a>
                                    </div>
                                </td>
                                
                            </tr>
                            <?php } ?>

                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </main>
    <footer></footer>
    

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>