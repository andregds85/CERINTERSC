@extends('layouts4.app')
@section('content')

<script>
function timedRefresh(timeoutPeriod) {
	setTimeout("location.reload(true);",timeoutPeriod);
}

window.onload = timedRefresh(5000);

//  5 segundos  -->
</script>

<?php
echo "Dados em tempo Real com Delay de 5 Segundos ";
echo "<br>";
echo "<br>";
?>





<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><img src="img/ambulancia.jpg"> Transporte Terrestre</div>
                <br>
                <div class="card-header"><img src="img/aereo.jpg"> Transporte Aério</div>

                <div class="card-header"><img src="img/4.gif"> </div>
               
                     
                <div class="card-header"><img src="img/3.gif"> </div>
                <div class="card-header"><img src="img/5.gif"> </div>



                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>
         
            </div>
        </div>
    </div>
</div>

<?php 













use App\Models\monitoramento;
use App\Http\Controllers\MonitoramentoController;

$tabela= monitoramento::all();
?>


@foreach ($tabela as $real)
	    <tr>
	        <td>{{ $real->id }}</td>
	        <td>{{ $real->solicitacao }}</td>
	    </tr>
	    @endforeach


    <?php 


        if ($tabela->isEmpty())
               
        {
           
            echo  "Nenhuma Solicitação foi Encontrada";

            
         }else{  ?>


       
        




        <script>
        window.location.href = "https://centraldetransferencia.eletivassc.com.br/content/transporte/public/sound";
        </script>   

        <?php  

           
         }



        ?>



        @endsection


