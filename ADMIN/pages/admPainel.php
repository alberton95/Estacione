<?php 
    include 'head.php';
?>

<body>

    <div id="wrapper">


        <?php 

            include 'nav.php'; 
            if(@!$_GET['pg']){
                include 'listaEstacionamento.php';
            }else{
                $pagina = $_GET['pg'];
                include "$pagina.php";
            }

        ?>


    </div>
    <!-- /#wrapper -->
<?php include 'footer.php'; ?>
