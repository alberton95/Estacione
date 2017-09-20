<?php 
    include 'head.php';
?>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Estacione - Painel Administrativo</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" title="Sair" href="../logout.php">
                        <i class="fa fa-sign-out"></i>
                    </a>
                    
                </li>
                <!-- /.dropdown -->
            </ul> 
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Buscar...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-dashboard fa-fw"></i> Painel</a>
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <?php 
            include '../functions/funcoes.php';
            $obj = listaInformacoes();
        ?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"><?php echo "$obj->Nome"; ?></h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Informações do Estacionamento 
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form">
                                        <div class="form-group">
                                            <label>Nome do Estacionamento</label>
                                            <input class="form-control" type="text" value='<?php echo "$obj->Nome"; ?>'>
                                        </div>
                                        <div class="form-group">
                                            <label>Endereco</label>
                                            <input class="form-control" type="text" value='<?php echo "$obj->Rua"; ?>'>
                                            <label>Numero</label>
                                            <input class="form-control" type="number" value='<?php echo "$obj->Numero"; ?>'>
                                        </div>
                                        <div class="form-group">
                                            <label>Bairro</label>
                                            <input class="form-control" type="text" value='<?php echo "$obj->Bairro"; ?>'>
                                        </div>
                                        <div class="form-group">
                                            <label>Estado</label>
                                            <input class="form-control" type="text" value='<?php echo "$obj->Estado"; ?>'>
                                        </div>
                                        <div class="form-group">
                                            <label>Quantidade de Vagas</label>
                                            <input class="form-control" type="number" value='<?php echo "$obj->QuantVagas"; ?>' disabled>
                                        </div>
                                        <div class="form-group">
                                            <label>Preço</label>
                                            <input class="form-control" type="number" value='<?php echo "$obj->Valor"; ?>' disabled>
                                        </div>
                                        <div class="form-group">
                                            <label>Horario de Funcionamento</label>
                                            <input class="form-control" type="text" value='<?php echo "$obj->HorarioFunc"; ?>'>
                                        </div>
                                        <div class="form-group">
                                            <label>Observações</label>
                                            <textarea class="form-control" rows="3"></textarea>
                                        </div>
                                        <input type="submit" class="btn btn-success" value="Atualizar">
                                        <input type="reset" class="btn btn-warning" value="Limpar">
                                    </form>
                                </div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
<?php include 'footer.php'; ?>
