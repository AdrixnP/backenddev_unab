<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../CSS/index.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sección 01</title>
</head>
<body>
    <div>
    <?php
    function cypherHalf1($i){
        $sum = $i+7;
        return $sum % 10;
    }

    $n = str_split($_POST["nInicial"]);
    $n = array_map("cypherHalf1", $n);
    $f[0] = $n[2];
    $f[1] = $n[3];
    $f[2] = $n[0];
    $f[3] = $n[1];
    print_r("El número cifrado es: ");
    print_r(join("", $f));


    ?>
    </pre>
    </div>
</body>
</html>
<pre>
