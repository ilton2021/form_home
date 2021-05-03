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
</head>
<body>

<table class="table table-bordered">
<tr>
 <td colspan="2"><center><h2> Dados do Formulário </h2></center></td>
</tr>
<tr>
 <td> Nome Completo: </td>
 <td><?php echo $funcionario[0]->nome_completo  ?></td>
</tr>
<tr>
 <td> Unidade: </td>
 <td><?php echo $unidade[0]->nome  ?></td>
</tr>
<tr>
 <td> Matrícula: </td>
 <td><?php echo $funcionario[0]->matricula  ?></td>
</tr>
<tr>
 <td> CPF: </td>
 <td><?php echo $funcionario[0]->cpf  ?></td>
</tr>
<tr>
 <td> Cargo: </td>
 <td><?php echo $cargo[0]->nome ?></td>
</tr>
<tr>
 <td> Telefone: </td>
 <td><?php echo $funcionario[0]->telefone ?></td>
</tr>
<tr>
 <td> E-mail: </td>
 <td><?php echo $funcionario[0]->email ?></td>
</tr>
<tr>
 <td> Descreva as Atividades: </td>
 <td>
  <textarea disabled="true" id="atividades" name="atividades" class="form-control" rows="5"> <?php echo $funcionario[0]->atividades ?> </textarea>
 </td>
</tr>
<tr>
 <td> Declaração: </td>
 <td>
  @if($funcionario[0]->declaracao == 1)
	Sim 
  @else 
	Não 
  @endif
	
 </td>
</tr>

</table>

</body>
</html>