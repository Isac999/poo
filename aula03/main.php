<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <pre>
        <?php 
            include_once('./Caneta.php');

            $c1 = new Caneta('Bic', 'Azul', 1.5);
            $c2 = new Caneta('Faber Castel', 'Vermelha', 2);
            
            print_r($c1);
        ?>
    </pre>
</body>
</html>