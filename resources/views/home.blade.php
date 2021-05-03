<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Trabalho Home Office</title>
  <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('css/style-dashboard.css')}}">
  <link href="{{ asset('js/utils.js') }}" rel="stylesheet">
  <link href="{{ asset('js/bootstrap.js') }}" rel="stylesheet">
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
</head>
<body>
	  <br><br><br><br><br>
	      <center>
		   <table class="table table-bordered" style="width: 1000px;" cellspacing="0"> 
			<tr>
			  <td><center><strong><br>{{ $nome }} </strong> <br>Sua Solicitação foi Concluída com Sucesso!!!</center></td>
			  <td><center><br>Verifique seu E-mail: <br> <strong>{{ $email }}</strong> para confirmar!!! </center></td>
			</tr>
		   </table>
		  </center>		  		  
		  <center>
		  <table class="table table-bordered" style="width: 1000px;" cellspacing="0">
		   <tr>
		    <td align="right"> <a href="{{ url('/') }}" class="btn btn-success">Voltar</a></td>
		   </tr>
		  </table>
		  </center>
   </form>   
</body>