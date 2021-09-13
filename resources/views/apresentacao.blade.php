<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Trabalho Home Office - RH</title>
  <link rel="icon" type="image/x-icon" href="assets/favicon.ic" />
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link href="{{ asset('css/estilo.css') }}" rel="stylesheet">
  <link href="{{ asset('js/utils.js') }}" rel="stylesheet">
  <link href="{{ asset('js/bootstrap.js') }}" rel="stylesheet">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script src="https://igorescobar.github.io/jQuery-Mask-Plugin/js/jquery.mask.min.js"></script>
<body> 
	 
	  <input type="hidden" name="_token" value="{{ csrf_token() }}">
          <center>
		   <table class="table table-borderless" style="width: 100%; height:20%; background-color:#3CB371; color: white;" cellspacing="0"> 
			<tr>
				
			  <td colspan="1"><center><strong><h3><br><b><img id="hcp" src="{{ asset('img/logo.png') }}"></br>Trabalho Home Office - HCP GESTÃO</b></h3></strong></center></td>
			  <td hidden><input hidden class="form-control" type="text" id="vaga_id" name="vaga_id" value="" readonly="true" /></td>
			</tr>
		   </table>
		   <center>		
		  <table class="table table-borderless" style="width: 800px;" cellspacing="0">
		   <tr>
			<td width="180">
			<b><p>Olá, Seja bem vindo ao formulário de solicitação Home Office. Neste formulário, serão feitas as solicitações de trabalho em tal regime!</br>
				 	<i style="color:red;"></br>Como Funciona este formulário?</i></br>
				<p id="texto">	O mesmo, segue um fluxo de solicitação que começa à partir do gestor. Onde  mesmo irá preencher o form com os dados do funcionário ao qual ficará Home Office, e assim que preenchido
					é enviado um e-mail para o funcionário que se aplicará a tal regime, e também para a Infraestretura de T.I, para que
					eles possam avaliar se existe equipamento disponível para atender a necessidade do funcionário. Logo após, o funcionário deve visualizar em seu e-mail o seu formulário de respostas, o qual
					deve ser devidamente preenchido para que não haja ausência de dados do mesmo.</p>	</p></b>
			</td>
		   </tr>
		  </table>
		  </center>
		  <center>
		   <table class="table table-borderless" id="botoes" style="width: 800px;" cellspacing="0"> 
			
			<tr>
			<td align="center" > 
			<p><a href="{{url('/gestor')}}" type="button" class="btn btn-success btn-sm" style="color: #FFFFFF;"><b> Aréa do Gestor</b> <i class="fas fa-undo-alt"></i> </a></p>
			</td>		
			<td align="center" > 
			<p><a href="{{url('/funcionario')}}"type="button" class="btn btn-success btn-sm" style="color: #FFFFFF;"><b> Aréa do Funcionário</b> <i class="fas fa-undo-alt"></i> </a></p>
			</td>
			</tr>
			
			</table>
		  </center>
		  <footer>
			  <div id="rodape">
			  		<table>
					  	<tr>
						  <td>
    						</td>
					  	</tr>
					</table>
			</div>
		  </footer>
		  
		 
   <style>
	h5{
		background-color:#3CB371	;
		width: 100px;
		border-radius: 20px 20px 20px 20px;
		color:white;
		font-size: 16px;
	}

	img#hcp{
		width:100px;
		height:50px;
	}
	table#botoes{
		margin-top: 4rem;
	}

	footer div#rodape{
		position: absolute;	
		background-color: #3CB371;
		width: 100%;
		height:6%;
		margin-top:5.1%;
	}
	p#texto{
		text-align: center;
	}
	   </style>
</body>