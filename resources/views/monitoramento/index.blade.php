@extends('layouts3.app')
@section('content')

<?php 

echo "Sucesso";
echo "<Br>";
echo "Motiramento";


use App\Models\monitoramento;
use App\Http\Controllers\MonitoramentoController;


$tabela=monitoramento::all();
$idM=1;

/*
monitoramento::where('id', $idM)->update(['solicitacao' => 'S']); 
*/
monitoramento::insert(['solicitacao' => 'Chegou Nova Solicitacao']); 



?>
















@endsection


