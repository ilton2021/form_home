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
	  <form action="{{\Request::route('storeGestor')}}" method="POST">             
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
			 <td align="center" colspan="3"> <h5><b>Dados do Gestor:</b></h5> </td>
			</tr>
			<tr>
			  <td colspan="2">Nome Completo: <input class="form-control" type="text" id="nome_completo_gestor" name="nome_completo_gestor" required="true" value="{{ Request::old('nome_completo_gestor') }}" maxlength="1000" /></td>
			</tr>
			<tr>
			  <td colspan="1" width="500px"> Email (Coorporativo ou Funcional): <input class="form-control" type="text" id="email_gestor" name="email_gestor" required value="{{Request::old('email_gestor')}}" />
			  </td>
			</tr>
			</table>
		  </center>
		  
		  <center>
		   <table class="table table-bordered" style="width: 1000px;" cellspacing="0"> 
			<tr>
			 <td align="center" colspan="3"> <h5><b>Dados do Funcionário:</b></h5> </td>
			</tr>
			<tr>
			  <td colspan="2">Nome Completo: <input class="form-control" type="text" id="nome_completo_funcionario" name="nome_completo_funcionario" required="true" value="{{ Request::old('nome_completo_funcionario') }}" maxlength="1000" /></td>
			</tr>
			<tr>
			  <td colspan="1" width="500px"> Email (Coorporativo ou Funcional): <input class="form-control" type="text" id="email_funcionario" name="email_funcionario" required value="{{Request::old('email_funcionario')}}" /></td>
			</tr>
			<tr>
			  <td colspan="1" width="200px"> Unidade: 
			   <select class="form-control" id="unidade" name="unidade">
			   @foreach($unidades as $unidade)
				 <option id="unidade" name="unidade" value="<?php echo $unidade->nome; ?>"> {{ $unidade->nome }}</option>
			   @endforeach
			   </select>
			  </td>
			</tr>
			</table>
		  </center>
		  
		  <center>
		   <table class="table table-bordered" style="width: 1000px;" cellspacing="0"> 
			<tr>
			 <td align="center" colspan="3"><b>*Envie o formulário para o funcionário validar*</b></td>
			<td align="right"> 
			 <input type="submit" class="btn btn-success btn-sm" style="margin-top: 10px;" value="Enviar" id="Salvar" name="Salvar" /> 
			</td>
			</tr>
			</table>
		  </center>
   </form>
</body>