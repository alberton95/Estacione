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
                                <input type="text" class="form-control" placeholder="Search...">
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
                        <li>
                            <a href="?pg=cUsuario"><i class="fa fa-table fa-fw"></i> Cadastrar Usuario</a>
                        </li>
                        <li>
                            <a href="?pg=cEstacionamento"><i class="fa fa-table fa-fw"></i> Cadastrar Estacionamento</a>
                        </li>
                        <li>
                            <a href="?pg=listaEstacionamento"><i class="fa fa-edit fa-fw"></i> Listar Estacionamentos</a>
                        </li>
                        <li>
                            <a href="?pg=listaUsuario"><i class="fa fa-edit fa-fw"></i> Listar Usuarios</a>
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>