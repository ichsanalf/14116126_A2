<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo "Mencari bilangan prima dari 1 - 50: <br>";
    echo '<br>';
        for ($a=1; $a <= 50; $a ++) {
            $c= 0;
            for ($b =1; $b <=$a; $b++) {
                if ( $a % $b == 0) {
                    $c++;
                }
                }
                 if ($c == 2) {
                    echo $a;
                    echo ", ";
            }
        }
    ?>
</body>
</html>