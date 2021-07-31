<?php 
use App\Models\Checklist;
use App\Http\Controllers\ChecklistController;

$tabela = Checklist::all(); 
?>
    @foreach ($tabela as $t)

     <!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" />
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
    <title>Relatório de Transporte terrestre</title>
</head>
<body>
<img src="img/logo_menor.png" width="100" height="100">
<p>
    <h3 align="center">{{$title}}</h3>
    <h3 align="center">{{$date}}</h3>

  </p>






    <p><h3><B> Dados do Paciente</h3></B><p>
    <p align="center"><B>ID :</B>{{$t->id }}<p>
    <p align="center"><B>Data :</B>{{$t->created_at }}<p>
  
    <p><B> Nome:</B>{{$t->nome }}<p>
    <p><B> Data da Solicitação: </B>{{$t->dataSolicitacao }}<p>
    <p><B> CNS: </B>{{$t->cns }}<p>
    <p><B> DN: </B>{{$t->dn }}<p>
    <p><B> Sexo: </B>{{$t->sexo }}<p>
    <p><B> CPF: </B>{{$t->cpf }}<p>
    <p><B> RG: </B>{{$t->rg }}<p>
    <p><B> Orgão Emissor: </B>{{$t->orgaoEmissor }}<p>
    <p><B> Estado: </B>{{$t->estado }}<p>
    <p><B> Diagnóstico: </B>{{$t->diagnostico }}<p>
    <p><B> Macro de Origem: </B>{{$t->macroOrigem }}<p>
    <p><B> Hospital de Origem: </B>{{$t->hospitalOrigem }}<p>
    <p><B> Leito de Origem: </B>{{$t->LeitoOrigem }}<p>
    <p><B> Macro de Destino: </B>{{$t->macroDestino }}<p>
    <p><B> Hospital de Destino: </B>{{$t->hospitalDestino }}<p>
    <p><B> Leito de Destino: </B>{{$t->LeitoDestino }}<p>
    <p><h3><B> Dados do Paciente</h3></B><p>


    </body>


    @endforeach


  
    </html>  








  
