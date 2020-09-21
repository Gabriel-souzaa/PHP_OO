<?php
    // namespace é utizado quando existe 2 classes diferentes com o mesmo nome. Assim que declarado "namespace class(ou qualquer nome)" basta
    // ir no arquivo onde a classe deve ser chamada e definir "use nome do namesapce\classe();" ou  $variavel = new \namespace\ classe();
    require "class/produto.php";
    require "models/produto.php";

    // use model\Produto();  // use model\Produto as productModel;
    use model\Produto as productModel;
    use classes\Produto as productClass;

    $produto = new productClass();
    $produto->mostrarDetalhes();
    echo "<br>";
    $produto = new productModel();
    $produto->mostrarDetalhes();