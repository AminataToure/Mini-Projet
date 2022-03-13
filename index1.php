<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    define("constant", "Je suis un constant");
    echo constant . ".<br>";
    $m = 12.6666666667;
    $moy = number_format($m, 2, ',', '') . "<br>";
    echo $moy;
    $chaine = 'a/b/c';
    $tab = explode('/', $chaine);
    $j = 1;
    foreach ($tab as $value) {
        # code...
        echo "element" . $j . ": " . $value . " ";
        $j++;
    }
    echo "<br>";
    $tab1 = array(0 => 'Ami', 1 => 'Aminata', 2 => 'Touré');
    for ($i = 0; $i < sizeof($tab1); $i++) {
        # code...
        echo $tab1[$i] . "<br>";
    }

    ?>
</body>

</html>