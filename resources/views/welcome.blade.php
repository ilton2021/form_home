<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Trabalho Home Office - RH</title>
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link href="{{ asset('js/utils.js') }}" rel="stylesheet">
  <link href="{{ asset('js/bootstrap.js') }}" rel="stylesheet">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script src="https://igorescobar.github.io/jQuery-Mask-Plugin/js/jquery.mask.min.js"></script>
<body> 
	  @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div>
	  @endif		 
	  <form action="{{\Request::route('store'), $unidades[0]->id}}" method="POST">             
	  <input type="hidden" name="_token" value="{{ csrf_token() }}">
          <center>
		   <table class="table table-borderless" style="width: 1400px; height:110px; background-color:#3CB371; color: white;"cellspacing="0"> 
			<tr>
			  <td colspan="1"><center><strong><h3><br><b><img id="hcp" src="{{ asset('img/logo.png') }}"></br>Trabalho Home Office - HCP GESTÃO</b></h3></strong></center></td>
			  <td hidden><input hidden class="form-control" type="text" id="vaga_id" name="vaga_id" value="" readonly="true" /></td>
			</tr>
		   </table>
		   <table class="table table-borderless" style="width: 800px;" cellspacing="0"> 
			
			<tr>
			  <td colspan="2" width="800px"><input class="form-control" type="text" id="nome_completo" name="nome_completo" placeholder="Nome Completo" required="true" value="{{ Request::old('nome_completo') }}" maxlength="1000" /></td>
			  <td colspan="1"><input class="form-control" type="text" id="matricula" name="matricula" placeholder="Matrícula" value="{{Request::old('matricula')}}" maxlength="10" /> </td>
			</tr>
			<tr>
			  <td colspan="1" width="420px"><input class="form-control" type="text" id="email" name="email" placeholder="Email (Coorporativo ou Funcional)" value="{{Request::old('email')}}" />
			  <td colspan="1"><input class="form-control" type="text" id="cpf" name="cpf" required="true" placeholder="CPF" value="{{ Request::old('cpf') }}" maxlength="14" /></td>
			  <td colspan="0">
			  <select class="form-control" id="unidade_id" name="unidade_id" required="true">
				  <option id="unidade_id" name="unidade_id" value="">Unidade</option>
				  @if(!empty($unidades))	
					@foreach($unidades as $unidade)
						<option id="unidade_id" name="unidade_id" value="<?php echo $unidade->id; ?>">{{ $unidade->nome }}</option>	
					@endforeach
				  @endif
				</select>
			  </td>
			  
			</tr>
			<tr>
			  <td width="600px" hidden>Unidade: <input class="form-control" type="text" id="unidade" name="unidade" value="<?php echo $unidades[0]->id; ?>" readonly="true" /></td>
			</tr>
			<tr>
			  <td colspan="2"> 
			    <select class="form-control" id="cargo" name="cargo" required="true">
				  <option id="cargo" name="cargo" value="">Cargo</option>
				  @if(!empty($cargos))	
					@foreach($cargos as $cargo)
						<option id="cargo" name="cargo" value="<?php echo $cargo->id; ?>">{{ $cargo->nome }}</option>	
					@endforeach
				  @endif
				</select>
			  </td>
			  <td><input class="form-control" type="text" id="telefone" name="telefone" required="true" placeholder="Telefone" value="{{ Request::old('telefone') }}" maxlength="14" /></td>
			</tr>
		   </table>
		  </center>
		  
		  <br>
		  <center>		
		  <table class="table table-borderless" style="width: 800px;" cellspacing="0">
			<tr>
			<td width="180px"><center><strong><h5><b>Descreva as Atividades:</b></h5></strong></td></center>
	
			</tr>
		  <tr>
			<td><textarea style="height:100px;" type="text" id="atividades" name="atividades" class="form-control" required="true" rows="10" cols="60">{{ Request::old('atividades') }}</textarea></td>
		   </tr>
		  </table>
		  </center>
		  
		  <br>
		  <center>		
		  <table class="table table-borderless" style="width: 800px;" cellspacing="0">
		   <tr>
			<td width="180">
			<b><p>DECLARAÇÃO Declaro, sob as penas da lei, verdadeiras as informações neste ato prestadas, fazendo parte integrante dos registros e arquivos do HCP GESTÃO, tendo ciência do que estabelecem os artigos do Código Penal Brasileiro, a legislação aplicada e demais normas complementares, aquiescendo com todas as responsabilidades inerentes ao uso dos recursos tecnológicos do órgão, bem como das implicações legais decorrentes do seu uso indevido, seja qual for a circunstância, constituindo o usuário e senha disponibilizados para acesso (e-mail e/ou rede corporativa), propriedade do HCP GESTÃO e portanto, sujeitos ao monitoramento e controle das ações realizadas no seu âmbito. Declaro ainda que, estou ciente que o HCP GESTÃO concede contas para acesso à rede de computadores e e-mail para utilização exclusiva do usuário, portanto, não disponibilizarei nem facilitarei o uso das minhas referidas contas para qualquer pessoa, funcionário ou não, ainda que hierarquicamente superior.</p></b>
			</td>
		   </tr>
		   <tr>
		    <td align="left"><b>Sim</b> <input type="checkbox" id="declaracao" onchange="termos()" name="declaracao" value="1"><b> Não</b> <input type="checkbox" id="declaracao" name="declaracao" value="0"></td>
		   </tr>
		  </table>
		  </center>
		  
		  <center>
		  <table class="table table-borderless" style="width: 800px;" cellspacing="0">
		   <tr>
		    <td align="center"> 
			 <input type="submit" class="btn btn-success btn-sm" style="margin-top: 10px;" value="Concluir" id="Salvar" name="Salvar" disabled /> 
			</td>
		   </tr>
		  </table>
		  </center>
   </form>
</body>

<script>


			document.addEventListener('keydown', function(event) { //pega o evento de precionar uma tecla
				if(event.keyCode != 46 && event.keyCode != 8){//verifica se a tecla precionada nao e um backspace e delete
					var i = document.getElementById("cpf").value.length; //aqui pega o tamanho do input
					if (i === 3)
					document.getElementById("cpf").value = document.getElementById("cpf").value + ".";
					if (i === 7)
					document.getElementById("cpf").value = document.getElementById("cpf").value + ".";
					if (i === 11) //aqui faz a divisoes colocando um ponto no terceiro e setimo indice
					document.getElementById("cpf").value = document.getElementById("cpf").value + "-";
				}
				});
				

				document.addEventListener('keydown', function(event) { //pega o evento de precionar uma tecla
				if(event.keyCode != 46 && event.keyCode != 8){//verifica se a tecla precionada nao e um backspace e delete
					var i = document.getElementById("telefone").value.length; //aqui pega o tamanho do input
					if (i === 0)
					document.getElementById("telefone").value = document.getElementById("telefone").value + "(";
					if (i === 3)
					document.getElementById("telefone").value = document.getElementById("telefone").value + ")";
					if (i === 9) //aqui faz a divisoes colocando um ponto no terceiro e setimo indice
					document.getElementById("telefone").value = document.getElementById("telefone").value + "-";
				}
				});
				

			function termos(){

			var termo = document.getElementById("declaracao").value;

			if(termo == "1"){
				document.getElementById("Salvar").disabled = false;
			}else{
				document.getElementById("Salvar").disabled = true;
			}
			}

</script>
<style>
	   h5{
		   background-color:#3CB371	;
		   width: 200px;
		   border-radius: 20px 20px 20px 20px;
		   color:white;
		   font-size: 16px;
	   }

	img#hcp{
		width:100px;
		height:50px;
	}
	   
	   </style>