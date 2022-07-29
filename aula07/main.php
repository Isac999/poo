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
        require_once("./Aluno.php");
        require_once("./Bolsista.php");

        $a1 = new Aluno();
        $a1->setNome("Pedro");
        $a1->setIdade(16);
        $a1->setSexo("M");
        $a1->setMatricula("233-023");
        $a1->setCurso("Informática Básica");

        print_r($a1);
        $a1->pagarMensalidade();

        $b1 = new Bolsista();
        $b1->setNome("Carlos");
        $b1->setIdade(15);
        $b1->setSexo("M");
        $b1->setMatricula("169-103");
        $b1->setCurso("Programação Web");
        $b1->setBolsa("Plano Trimestral");

        print_r($b1);
        $b1->pagarMensalidade();
        $b1->renovarBolsa();
        ?>
    </pre>
</body>
</html>