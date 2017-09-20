<?PHP

/* Arquivo de coenexão com o banco de dados */

$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "estacione";



try{
    $con = new PDO( 'mysql:host=' . $servidor . ';dbname=' . $banco, $usuario, $senha );
}
catch ( PDOException $e ){
    echo 'Erro ao conectar com o MySQL: ' . $e->getMessage();
}

?>