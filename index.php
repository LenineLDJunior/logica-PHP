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
        echo '<h1>#TodoDiaSemErrar</h1>', 'Essa é o foco' ;
        $data = date("d/m/Y") ; 
        echo 'a Data de hoje é' .$data ; 

        $a = 1 ;
        $b = "1";
        $c = 2;

        $result =  [
            a == b => ($a == $b),
            a === b => ($a === $b),
            a != b => ($a != $b),
            a !== b => ($a !== $c),
            a < b => ($a < $c),
            a > b => ($a > $c),
            a >= b => ($a >= $b),
            a <= c => ($a <= $c)
             
        ]
        
    ?>
</body>
</html>