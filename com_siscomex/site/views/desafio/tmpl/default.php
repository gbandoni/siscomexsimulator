<?php // no direct access
defined('_JEXEC') or die('Restricted access'); 

?>

<html>
<head>
<title>Incluindo declaração de importação [Desafio 1]</title>
</head>
<body>

  <div class="py-5">
    <div class="container">
    <div class="row">
        <div class="col-md-8 text-center">
          <h3>Incluindo declaração de importação [Desafio 1]</h3>
        </div>	
        <div class="col-md-4 text-right">
          <a class="btn btn-primary" data-toggle="pill" href="">Salvar</a>
        </div>
    </div>
<br>	
      <div class="row">
        <div class="col-md-6">
          <p class="">Tipo de declaração</p>
        </div>
        <div class="col-md-6"> 
		<select name="tipo" id="tipo" class="form-control" >
        <option value="4">ADMISSAO EM ENTREPOSTO INDUSTRIAL</option>
<option value="13">NACIONALIZAÇÃO DE ADIMISSÃO TEMPORÁRIA</option>
<option value="14">NACIONALIZAÇÃO DE ENTREPOSTO ADUANEIRO</option>
<option value="15">SAIDA DE EIZOF - ENTREPOSTO INTERNACIONAL DA ZFM</option>
<option value="16">SAIDA DE ENTREPOSTO INDUSTRIAL</option>
<option value="17">NACIONALIZAÇÃO DE DEA - DEPOSITO ESPECIAL ALFANDEG</option>
<option value="18">NACIONALIZAÇÃO DE REGIME ADUANEIRO ESPECIAL</option>
<option value="19">INTERNAÇÃO DA ZFM - PRODUTO INDUSTRIALIZADO</option>
<option value="20">INTERNAÇÃO DA ZFM PRODUTO ESTRANGEIRO</option>
<option value="21">INTERNAÇÃO DA ALC - ÁREA DE LIVRE COMÉRCIO</option>
<option value="2">ADMISSAO EM ENTREPOSTO ADUANEIRO</option>
<option value="3">ADMISSÃO EM ENTREPOSTO INTERNACIONAL DA ZFM</option>
<option value="5">ADMISSÃO TEMPORARIA</option>
<option value="6">ADMISSAO NA ZFM - AM.OCIDENTAL</option>
<option value="7">ADMISSÃO EM LOJA FRANCA</option>
<option value="8">ADMISSÃO EM ÁREA DE LIVRE COMÉRCIO</option>
<option value="9">ADMISSÃO EM DEPÓSITO ADUANEIRO DE DISTRIBUIÇÃO</option>
<option value="10">ADMISSÃO EM DEPOSITO ESPECIAL ALFANDEGÁRIO</option>
<option value="12">CONSUMO E ADMISSÃO TEMPORÁRIA</option>
          </select> </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <ul class="nav nav-tabs">
            <li class="nav-item">
              <a data-toggle="pill" href="#importador" class="active nav-link">Importador</a>
            </li>
            <li class="nav-item">
              <a data-toggle="pill" href="#basicas" class="nav-link">Básicas</a>
            </li>
            <li class="nav-item">
              <a data-toggle="pill" href="#transporte" class="nav-link">Transporte</a>
            </li>
            <li class="nav-item">
              <a data-toggle="pill" href="#carga" class="nav-link">Carga</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="pill" href="#pagamento">Pagamento</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="pill" href="#complementares">Complementares</a>
            </li>
          </ul>
        </div>
      </div>
      <div class="row">
	  <div class="col-md-12">
    <form id="formulario" autocomplete="off">
    <div class="tab-content">
  <div id="importador" class="tab-pane fade in active">
      <fieldset>
        <legend>Para uso do importador</legend>
        <label>Identificação da DI:&nbsp;</label><input class="campo_nome" type="text"><br>
     </fieldset>		
      <fieldset>
        <legend>Tipo do Importador</legend>
        <input type="radio"><label>&nbsp;Pessoa Juridica:</label><br>
        <input type="radio"><label>&nbsp;Pessoa Física domiciliada no país:</label><br>
        <input type="radio"><label>&nbsp;Missão Diplomatica ou Representação de Organismo Internacional:</label><br>
        <label>CNPJ do Estabelecimento:&nbsp;</label><input class="campo_nome" type="text"><br>        
        <input class="btn_submit" type="submit" value="Seguinte>>">
      </fieldset>
  </div>
  <div id="basicas" class="tab-pane fade">
     <fieldset>
        <legend>URF de despacho</legend>
        <label>URF de despacho:&nbsp;</label><input class="campo_nome" type="text"><a href="#"> Pesquisar</a><br>
     </fieldset>		
  </div>
  <div id="transporte" class="tab-pane fade">
    <h3>Menu 2</h3>
    <p>Some content in menu 2.</p>
  </div>
  <div id="carga" class="tab-pane fade">
    <h3>Menu 3</h3>
    <p>Some content in menu 2.</p>
  </div>  
  <div id="pagamento" class="tab-pane fade">
    <h3>Menu 4</h3>
    <p>Some content in menu 2.</p>
  </div>  
  <div id="complementares" class="tab-pane fade">
    <h3>Menu 5</h3>
    <p>Some content in menu 2.</p>
  </div>  
</div>  
    </form>
      </div>
      </div>	  
<div class="col-md-12">
          <div class="alert alert-warning" role="warning">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">×</button>
            <h4 class="alert-heading">Atenção</h4>
            <p class="mb-0">Um ou mais campos importantes nessa aba ainda estão em branco</p>
          </div>
        </div>	  
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
  
<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true"  id="onload">
    <div class="modal-dialog">
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">×</button>
          <h4 class="modal-title">Submeter DI</h4>
        </div>
        <div class="modal-body">
         Você tem dados ainda incorretos ou incompletos, você deveria corrigi-los antes de salvar
        </div>
        <div class="modal-footer">
          <button type="button" class="btn" data-dismiss="modal">Enviar assim mesmo</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
        </div>
      </div>

    </div>
</div>

<script>
      //$('#onload').modal('show');
</script>  
  
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>  
</html>