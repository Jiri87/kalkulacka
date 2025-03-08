<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="form.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Výpočty</title>
</head>
<body>
<?php

if ($_SERVER["REQUEST_METHOD"]=="POST") {

    $num1 = floatval($_POST["a"]);
    $num2 = floatval($_POST["b"]);
    $operace = $_POST["operace"];
    $vysledek = "";

    switch ($operace) {
        case "scitani":
            $result = $num1 + $num2;
             break;
        case "odecitani":
            $result = $num1 - $num2;
            break;
        case "nasobeni":
            $result = $num1 * $num2;
            break;
        case "deleni":
            if ($num2 == 0) {
                $result = "Chyba, nulou se nesmí dělit";
             }     else {
                $result = $num1/$num2;
             }
             break;   
             
    }

    echo "<h2>Výsledek: $result</h2>";

    

}

?>

<button onclick="window.location.href='form.html';" class="zpet" type="button">Zpět</button>

    
</body>
</html>



