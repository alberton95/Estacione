<div id="page-wrapper">
	<div class="row">
        <div class="col-lg-12">
        	<h1 class="page-header">Cadastrar Usuário</h1>
        </div>
                <!-- /.col-lg-12 -->
    </div>
    <div class="row">
    	<form method="POST" action="../controller/UsuarioController.php">
            <div class="form-group">
                <label><b>Nome do Usuário</b></label>
                <input type="text" class="form-control" name="nome">
                <small class="form-text text-muted">* Caso seja um dono cliente adicione o nome completo
            </div>
            <div class="form-group">
                <label>Senha do Usuário</label>
                <input type="password" class="form-control" name="senha">
            </div>
            <div class="form-group">
                <label for="exampleSelect1">Tipo de Usuário</label>
                <select class="form-control" name="Tipo">
                  <option value="1">Administrador</option>
                  <option value="2">Cliente</option>
                </select>
            </div>
            <div class="form-group">
                <label><b>E-Mail</b></label>
                <input type="text" class="form-control" name="email">
            </div>
            <div class="form-group">
                <label><b>CPF</b></label>
                <input type="text" class="form-control" name="cpf">
            </div>
            <button type="submit" class="btn btn-primary">Cadastrar</button>
            <button type="reset" class="btn btn-primary">Limpar</button>  
        </form>
    </div>
</div>
