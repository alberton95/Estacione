<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Lista de Estacionamentos</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Tabela de Clientes
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Nome Cliente</th>
                                        <th>Longitude</th>
                                        <th>Latitude</th>
                                        <th>Quant. de Vagas</th>
                                        <th>Hor. de Funcionamento</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                        include '../DAO/EstacionamentoDAO.php';
                                        $estacionameto = new EstacionamentoDAO();
                                        $estacionameto->listarEstacionamento();
                                    ?>
                                    
                                </tbody>
                            </table>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
        </div>
        <!-- /#page-wrapper -->