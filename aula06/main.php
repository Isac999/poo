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
        require_once('Pessoa.php');
        require_once('Aluno.php');
        require_once('Professor.php');
        require_once('Funcionario.php');

        $p1 = new Pessoa();
        $p2 = new Aluno();
        $p3 = new Professor();
        $p4 = new Funcionario();

        $p1->setNome("João");
        $p2->setNome("Maria");
        $p3->setNome("Carlos");
        $p4->setNome("Luis");

        $p1->setIdade(17);
        $p2->setIdade(16);
        $p3->setIdade(52);
        $p4->setIdade(31);

        $p1->setSexo("M");
        $p2->setSexo("F");
        $p3->setSexo("M");
        $p4->setSexo("M");

        print_r($p1);
        print_r($p2);
        print_r($p3);
        print_r($p4);
        ?>
    </pre>
</body>
</html>