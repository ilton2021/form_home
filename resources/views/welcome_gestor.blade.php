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
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
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
		   <table class="table table-borderless" style="width: 1400px; height:110px; background-color:#3CB371; color: white;" cellspacing="0"> 
			<tr>
				
			  <td colspan="1"><center><strong><h3><br><b><img id="hcp" src="{{ asset('img/logo.png') }}"></br>Trabalho Home Office - HCP GESTÃO</b></h3></strong></center></td>
			  <td hidden><input hidden class="form-control" type="text" id="vaga_id" name="vaga_id" value="" readonly="true" /></td>
			</tr>
		   </table>
		   <table class="table table-borderless" style="width: 800px;" cellspacing="0"> 
			<tr>
			 <td align="center" colspan="3"> <h5><b>Dados do Gestor</b></h5> </td>
			</tr>
			<tr>
			  <td colspan="2"><input class="form-control" type="text" id="nome_completo_gestor" name="nome_completo_gestor" Placeholder="Nome Completo" required="true" value="{{ Request::old('nome_completo_gestor') }}" maxlength="1000" /></td>
			</tr>
			<tr>
			  <td colspan="1" width="500px"><input class="form-control" type="text" id="email_gestor" name="email_gestor" placeholder="Email (Coorporativo ou Funcional): " required value="{{Request::old('email_gestor')}}" />
			  </td>
			</tr>
			</table>
		  </center>
		  
		  <center>
		   <table class="table table-borderless" style="width: 800px;" cellspacing="0"> 
			<tr>
			 <td align="center" colspan="3"> <h5><b>Dados do Funcionário</b></h5> </td>
			</tr>
			<tr>
			  <td colspan="2"><input class="form-control" type="text" id="nome_completo_funcionario" name="nome_completo_funcionario" Placeholder="Nome Completo" required="true" value="{{ Request::old('nome_completo_funcionario') }}" maxlength="1000" /></td>
			</tr>
			<tr>
			  <td colspan="1" width="500px"><input class="form-control" type="text" id="email_funcionario" name="email_funcionario" Placeholder="Email (Coorporativo ou Funcional): " required value="{{Request::old('email_funcionario')}}" /></td>
			</tr>
			<tr>
			  <td colspan="1" width="200px">
			   <select class="form-control" id="unidade" name="unidade">
				   <option selected > Unidade </option>
			   @foreach($unidades as $unidade)
				 <option id="unidade" name="unidade" value="<?php echo $unidade->nome; ?>"> {{ $unidade->nome }}</option>
			   @endforeach
			   </select>
			  </td>
			</tr>
			</table>
		  </center>
		  
		  <center>
		   <table class="table table-borderless" border="0" style="width: 800px;" cellspacing="0"> 
			<tr>
			 <td align="center" style="font-size: 18px" colspan="3"><b>Envie o formulário para o funcionário validar!</b></td>
			
			</tr>
			<tr>
			<td align="center"> 
			 <input type="submit" class="btn btn-success btn-sm" style="margin-top: 10px;" value="Enviar" id="Salvar" name="Salvar" /> 
			</td>
			</tr>
			</table>
		  </center>
   </form>
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
</body>