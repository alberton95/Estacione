<div id="page-wrapper">
	<div class="row">
        <div class="col-lg-12">
        	<h1 class="page-header">Cadastrar Estacionamento</h1>
        </div>
                <!-- /.col-lg-12 -->
    </div>
    <div class="row">
        <form method="POST" action="../controller/UsuarioController.php">
            <div class="form-group">
                <label><b>Nome do Estacionamento</b></label>
                <input type="text" class="form-control" name="nome">
                <small class="form-text text-muted">* Caso seja um dono cliente adicione o nome completo
            </div>
            <div class="form-group">
                <label>Quantidade de Vagas</label>
                <input type="number" class="form-control" name="quantidadeVagas">
            </div>
            <div class="form-group">
                <label><b>Longitude</b></label>
                <input type="text" class="form-control" name="longitude">
            </div>
            <div class="form-group">
                <label><b>Latitude</b></label>
                <input type="text" class="form-control" name="latitude">
            </div>
            <div class="form-group">
                <label><b>Horario de Funcionamento</b></label>
                <input type="text" class="form-control" name="horaFuncionamento">
            </div>
            <div class="form-group">
                <label><b>Valor</b></label>
                <input type="text" class="form-control" name="latitude">
            </div>
            
            <button type="submit" class="btn btn-primary">Cadastrar</button>
            <button type="reset" class="btn btn-primary">Limpar</button>  
        </form>
    </div>
</div>
