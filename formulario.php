<!DOCTYPE html>
<html>
	<title>Garantia</title>
	
	<head>
		<meta http-equiv="content-type" content="text/html charset=UTF-8">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

	</head>
	<body>
	<form action="script.php" class="form-horizontal" method="post">
		<fieldset>
		
		<legend>Nova Garantia</legend>
		
		<!-- produto input-->
		<div class="form-group">
		  <label class="col-md-4 control-label" for="produto">Produto/Serviço</label>  
		  <div class="col-md-6">
		  <input id="produto" name="produto" type="text" class="form-control input-md">
		  </div>
		</div>
		
		<!-- loja input-->
		<div class="form-group">
		  <label class="col-md-4 control-label" for="loja">Loja</label>  
		  <div class="col-md-6">
		  <input id="loja" name="loja" type="text" class="form-control input-md">
		  </div>
		</div>
		
		<!-- valor input-->
		<div class="form-group">
		  <label class="col-md-4 control-label" for="valor">Valor</label>  
		  <div class="col-md-4">
		  <input id="valor" name="valor" type="text" placeholder="valor do produto" class="form-control input-md">
		  </div>
		</div>
		
		<!-- dataCompra input-->
		<div class="form-group">
		  <label class="col-md-4 control-label" for="dataCompra">Data da Compra</label>  
		  <div class="col-md-4">
		  <input id="dataCompra" name="dataCompra" type="text" class="form-control input-md">
		  </div>
		</div>
		
		<!-- garantiaComprador input-->
		<div class="form-group">
		  <label class="col-md-4 control-label" for="garantiaComprador">Garantia do Comprador</label>  
		  <div class="col-md-4">
		  <input id="garantiaComprador" name="garantiaComprador" type="text" placeholder="nº de dias" class="form-control input-md">
		  </div>
		</div>
		
		<!-- garantiaFabrica input-->
		<div class="form-group">
		  <label class="col-md-4 control-label" for="garantiaFabrica">Garantia de Fábrica</label>  
		  <div class="col-md-4">
		  <input id="garantiaFabrica" name="garantiaFabrica" type="text" placeholder="nº de dias" class="form-control input-md">
		  </div>
		</div>
		
		<!-- Button --> 
		<div class="form-group"> <label class="col-md-4 control-label" for="singlebutton">Cadastrar</label> 
		<div class="col-md-4"> <button id="singlebutton" name="singlebutton" class="btn btn-primary">Enter</button>
		</div> 
		</div>
		
  	<!-- Table -->
  	<table class="table">
  	</table>
	</div>
	
	<div class="btn-group" data-toggle="buttons-radio">
		<button type="button" class="btn btn-primary">teste</button>
	</div>
	
	
	</body>
</html>

