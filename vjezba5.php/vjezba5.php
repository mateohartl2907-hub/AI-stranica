<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
$cijena=450;
echo $cijena;
var_dump($cijena);
var_dump("450");

var_dump(7 / 2);
var_dump(8 / 2);
var_dump("5" + 3);
var_dump("5" . 3);
var_dump(17 % 5);


$ukupno_minuta = 135;
$sati = intdiv($ukupno_minuta, 60);
$minute = $ukupno_minuta % 60;

echo $sati . " h " . $minute . " min";

$nazivTvrtke = "SigurnaMreža d.o.o.";
echo strlen($nazivTvrtke) . " / " . mb_strlen($nazivTvrtke) . "<br>";
echo strtoupper($nazivTvrtke) . "<br>";
echo mb_strtoupper($nazivTvrtke);

     ?>

</body>
</html>