<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Trabalho Home Office - RH</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
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
		   <table class="table table-bordered" style="width: 1000px;" cellspacing="0"> 
			<tr>
			  <td colspan="3"><center><strong><h3><br>Trabalho Home Office - HCP GESTÃO</h3></strong></center></td>
			  <td hidden><input hidden class="form-control" type="text" id="vaga_id" name="vaga_id" value="" readonly="true" /></td>
			</tr>
		   </table>
		   <table class="table table-bordered" style="width: 1000px;" cellspacing="0"> 
			
			<tr>
			  <td colspan="2" width="800px">Nome Completo: <input class="form-control" type="text" id="nome_completo" name="nome_completo" required="true" value="{{ Request::old('nome_completo') }}" maxlength="1000" /></td>
			  <td colspan="1"> Matrícula: <input class="form-control" type="text" id="matricula" name="matricula" value="{{Request::old('matricula')}}" maxlength="10" /> </td>
			</tr>
			<tr>
			  <td colspan="1" width="500px"> Email (Coorporativo ou Funcional): <input class="form-control" type="text" id="email" name="email" value="{{Request::old('email')}}" />
			  <td colspan="1">CPF: <input class="form-control" type="text" id="cpf" name="cpf" required="true" value="{{ Request::old('cpf') }}" maxlength="11" /></td>
			  <td colspan="0"> Unidade:
			  <select class="form-control" id="unidade_id" name="unidade_id" required="true">
				  <option id="unidade_id" name="unidade_id" value="">Selecione...</option>
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
			  <td colspan="2"> Cargos:
			    <select class="form-control" id="cargo" name="cargo" required="true">
				  <option id="cargo" name="cargo" value="">Selecione...</option>
				  @if(!empty($cargos))	
					@foreach($cargos as $cargo)
						<option id="cargo" name="cargo" value="<?php echo $cargo->id; ?>">{{ $cargo->nome }}</option>	
					@endforeach
				  @endif
				</select>
			  </td>
			  <td>Telefone: <input class="form-control" type="text" id="telefone" name="telefone" required="true" value="{{ Request::old('telefone') }}" maxlength="16" /></td>
			</tr>
		   </table>
		  </center>
		  
		  <br>
		  <center>		
		  <table class="table table-bordered" style="width: 1000px;" cellspacing="0">
		   <tr>
			<td width="180px"><center><strong><h5>Descreva as Atividades:</h5></strong></td></center>
			<td><textarea type="text" id="atividades" name="atividades" class="form-control" required="true" rows="10" cols="60">{{ Request::old('atividades') }}</textarea></td>
		   </tr>
		  </table>
		  </center>
		  
		  <br>
		  <center>		
		  <table class="table table-bordered" style="width: 1000px;" cellspacing="0">
		   <tr>
			<td width="180px"><center>
			<b><p align="justify">DECLARAÇÃO Declaro, sob as penas da lei, verdadeiras as informações neste ato prestadas, fazendo parte integrante dos registros e arquivos do HCP GESTÃO, tendo ciência do que estabelecem os artigos do Código Penal Brasileiro, a legislação aplicada e demais normas complementares, aquiescendo com todas as responsabilidades inerentes ao uso dos recursos tecnológicos do órgão, bem como das implicações legais decorrentes do seu uso indevido, seja qual for a circunstância, constituindo o usuário e senha disponibilizados para acesso (e-mail e/ou rede corporativa), propriedade do HCP GESTÃO e portanto, sujeitos ao monitoramento e controle das ações realizadas no seu âmbito. Declaro ainda que, estou ciente que o HCP GESTÃO concede contas para acesso à rede de computadores e e-mail para utilização exclusiva do usuário, portanto, não disponibilizarei nem facilitarei o uso das minhas referidas contas para qualquer pessoa, funcionário ou não, ainda que hierarquicamente superior.</p></b>
			</td></center>
		   </tr>
		   <tr>
		    <td align="right">Sim <input type="checkbox" id="declaracao" name="declaracao" value="1"> Não <input type="checkbox" id="declaracao" name="declaracao" value="0"></td>
		   </tr>
		  </table>
		  </center>
		  
		  <center>
		  <table class="table table-bordered" style="width: 1000px;" cellspacing="0">
		   <tr>
		    <td align="right"> 
			 <input type="submit" class="btn btn-success btn-sm" style="margin-top: 10px;" value="Concluir" id="Salvar" name="Salvar" /> 
			</td>
		   </tr>
		  </table>
		  </center>
   </form>
</body>