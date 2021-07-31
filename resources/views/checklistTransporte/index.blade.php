@extends('layouts3.app')
@section('content')

    <!-- Adicionando JQuery -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"
            integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
            crossorigin="anonymous"></script>

    <!-- Adicionando Javascript -->
    <script type="text/javascript" >

        $(document).ready(function() {

            function limpa_formulário_cep() {
                // Limpa valores do formulário de cep.
                $("#rua").val("");
                $("#bairro").val("");
                $("#cidade").val("");
                $("#uf").val("");
                $("#ibge").val("");
            }
            
            //Quando o campo cep perde o foco.
            $("#cep").blur(function() {

                //Nova variável "cep" somente com dígitos.
                var cep = $(this).val().replace(/\D/g, '');

                //Verifica se campo cep possui valor informado.
                if (cep != "") {

                    //Expressão regular para validar o CEP.
                    var validacep = /^[0-9]{8}$/;

                    //Valida o formato do CEP.
                    if(validacep.test(cep)) {

                        //Preenche os campos com "..." enquanto consulta webservice.
                        $("#rua").val("...");
                        $("#bairro").val("...");
                        $("#cidade").val("...");
                        $("#uf").val("...");
                        $("#ibge").val("...");

                        //Consulta o webservice viacep.com.br/
                        $.getJSON("https://viacep.com.br/ws/"+ cep +"/json/?callback=?", function(dados) {

                            if (!("erro" in dados)) {
                                //Atualiza os campos com os valores da consulta.
                                $("#rua").val(dados.logradouro);
                                $("#bairro").val(dados.bairro);
                                $("#cidade").val(dados.localidade);
                                $("#uf").val(dados.uf);
                                $("#ibge").val(dados.ibge);
                            } //end if.
                            else {
                                //CEP pesquisado não foi encontrado.
                                limpa_formulário_cep();
                                alert("CEP não encontrado.");
                            }
                        });
                    } //end if.
                    else {
                        //cep é inválido.
                        limpa_formulário_cep();
                        alert("Formato de CEP inválido.");
                    }
                } //end if.
                else {
                    //cep sem valor, limpa formulário.
                    limpa_formulário_cep();
                }
            });
        });

    </script>
    

    <SCRIPT> 
<!--
function valida()
{
   if (document.regform.comorbidades[0].checked==false)
{
alert( "Selecione a comorbidade" );
document.regform.nome.focus();
return false;
}









 return true;
 
    }
 
//-->
</SCRIPT>













<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Solicitação de Checklist Transporte Seguro') }}</div>

                <div class="card-body">
                <form action="{{ route('checklist.store') }}" method="POST" enctype="multipart/form-data" NAME="regform"
    onsubmit="return valida()" >>
                        @csrf


<?php 
use App\Models\Checklist;
use App\Http\Controllers\ChecklistController;
?>

 

{{ Auth::user()->name}}
<br>
{{ Auth::user()->email}}
<br>





                        </div>
                        </div>
                        </div>
                        </div>
                        </div>





    
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dados do Paciente') }}</div>

                <div class="card-body">



                          <!--  nome -->
                          <div class="form-group row">
                            <label for="nome" class="col-md-4 col-form-label text-md-right">{{ __('Nome') }}</label>
                            <div class="col-md-6">
                                <input id="nome" type="text" class="form-control @error('nome') is-invalid @enderror" name="nome" required autocomplete="nome">
                                @error('nome')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                             

                      <!--  dataSolicitacao -->
                       <div class="form-group row">
                            <label for="dataSolicitacao" class="col-md-4 col-form-label text-md-right">{{ __('Data da Solicitacao') }}</label>
                            <div class="col-md-6">
                                <input id="dataSolicitacao" type="date" class="form-control @error('dataSolicitacao') is-invalid @enderror" name="dataSolicitacao" required autocomplete="dataSolicitacao">
                                @error('dataSolicitacao')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                       <!--  cns -->
                       <div class="form-group row">
                            <label for="cns" class="col-md-4 col-form-label text-md-right">{{ __('CNS') }}</label>
                            <div class="col-md-6">
                                <input id="cns" type="text" class="form-control @error('cns') is-invalid @enderror" name="cns"  required autocomplete="cns">
                                @error('cns')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                      <!--  DN -->
                       <div class="form-group row">
                            <label for="dn" class="col-md-4 col-form-label text-md-right">{{ __('DN') }}</label>
                            <div class="col-md-6">
                                <input id="dn" type="text" class="form-control @error('dn') is-invalid @enderror" name="dn"  required autocomplete="dn">
                                @error('dn')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>



                                   <!--  idade -->
                       <div class="form-group row">
                            <label for="idade" class="col-md-4 col-form-label text-md-right">{{ __('idade') }}</label>
                            <div class="col-md-6">
                                <input id="idade" type="text" class="form-control @error('idade') is-invalid @enderror" name="idade"  required autocomplete="idade">
                                @error('idade')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        

                        <!--  sexo -->
                          <div class="form-group row">
                            <label for="sexo" class="col-md-4 col-form-label text-md-right">{{ __('Sexo') }}</label>
                            <div class="col-md-6">
                                <input id="sexo" type="text" class="form-control @error('sexo') is-invalid @enderror" name="sexo"  required autocomplete="sexo">
                                @error('sexo')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                    <!--  cpf -->
                       <div class="form-group row">
                            <label for="cpf" class="col-md-4 col-form-label text-md-right">{{ __('cpf') }}</label>
                            <div class="col-md-6">
                                <input id="cpf" type="text" class="form-control @error('cpf') is-invalid @enderror" name="cpf"  required autocomplete="cpf">
                                @error('cpf')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                      <!--  rg -->
                       <div class="form-group row">
                            <label for="rg" class="col-md-4 col-form-label text-md-right">{{ __('RG') }}</label>
                            <div class="col-md-6">
                                <input id="rg" type="text" class="form-control @error('rg') is-invalid @enderror" name="rg"  required autocomplete="rg">
                                @error('rg')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                       <!--  orgaoEmissor -->
                       <div class="form-group row">
                            <label for="orgaoEmissor" class="col-md-4 col-form-label text-md-right">{{ __('Orgão Emissor') }}</label>
                            <div class="col-md-6">
                                <input id="orgaoEmissor" type="text" class="form-control @error('orgaoEmissor') is-invalid @enderror" name="orgaoEmissor"  required autocomplete="orgaoEmissor">
                                @error('orgaoEmissor')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                       <!--  estado -->
                       <div class="form-group row">
                            <label for="estado" class="col-md-4 col-form-label text-md-right">{{ __('Estado') }}</label>
                            <div class="col-md-6">
                                <input id="estado" type="text" class="form-control @error('estado') is-invalid @enderror" name="estado"  required autocomplete="estado">
                                @error('estado')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>





       <!--  diagnostico -->
       <div class="form-group row">
                            <label for="diagnostico" class="col-md-4 col-form-label text-md-right">{{ __('Diagnóstico') }}</label>
                            <div class="col-md-6">
                            <textarea class="form-control @error('diagnostico') is-invalid @enderror" name="diagnostico"  required autocomplete="diagnostico" rows="3"></textarea>
                                @error('diagnostico')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
              </div>




                     <!--  macroOrigem -->
                       <div class="form-group row">
                            <label for="macroOrigem" class="col-md-4 col-form-label text-md-right">{{ __('Macro de Origem') }}</label>
                            <div class="col-md-6">
                                <input id="macroOrigem" type="text" class="form-control @error('macroOrigem') is-invalid @enderror" name="macroOrigem"  required autocomplete="macroOrigem">
                                @error('estado')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        
                     <!--  hospitalOrigem -->
                       <div class="form-group row">
                            <label for="hospitalOrigem" class="col-md-4 col-form-label text-md-right">{{ __('Hospital de Origem') }}</label>
                            <div class="col-md-6">
                                <input id="macroOrigem" type="text" class="form-control @error('hospitalOrigem') is-invalid @enderror" name="hospitalOrigem"  required autocomplete="hospitalOrigem">
                                @error('hospitalOrigem')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                     <!--  LeitoOrigem -->
                       <div class="form-group row">
                            <label for="LeitoOrigem" class="col-md-4 col-form-label text-md-right">{{ __('Leito de Origem') }}</label>
                            <div class="col-md-6">
                                <input id="LeitoOrigem" type="text" class="form-control @error('LeitoOrigem') is-invalid @enderror" name="LeitoOrigem"  required autocomplete="LeitoOrigem">
                                @error('LeitoOrigem')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                     <!--  macroDestino -->
                       <div class="form-group row">
                            <label for="macroDestino" class="col-md-4 col-form-label text-md-right">{{ __('Macro de Destino') }}</label>
                            <div class="col-md-6">
                                <input id="macroDestino" type="text" class="form-control @error('macroDestino') is-invalid @enderror" name="macroDestino"  required autocomplete="macroDestino">
                                @error('macroDestino')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>



                        
                     <!--  hospitalDestino -->
                       <div class="form-group row">
                            <label for="hospitalDestino" class="col-md-4 col-form-label text-md-right">{{ __('Hospital de Destino') }}</label>
                            <div class="col-md-6">
                                <input id="hospitalDestino" type="text" class="form-control @error('hospitalDestino') is-invalid @enderror" name="hospitalDestino"  required autocomplete="hospitalDestino">
                                @error('hospitalDestino')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                                                
                     <!--  LeitoDestino -->
                       <div class="form-group row">
                            <label for="LeitoDestino" class="col-md-4 col-form-label text-md-right">{{ __('Leito de Destino') }}</label>
                            <div class="col-md-6">
                                <input id="LeitoDestino" type="text" class="form-control @error('LeitoDestino') is-invalid @enderror" name="LeitoDestino"  required autocomplete="LeitoDestino">
                                @error('LeitoDestino')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                 


                    </div>
                        </div>
                        </div>
                        </div>
                        </div>


                        <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Tipos de Precaução:') }}</div>
              
             


                <div class="card-body">
         <p><b>Comorbidades  </b> </p>
         <div>
         <input type="checkbox" name="comorbidades" value="SIM"> 
         <label for="horns"> SIM</label>
         </div>


        <div>
        <input type="checkbox" name="comorbidades" value="NAO">  
        <label for="horns"> NÃO</label>
        </div>







                       </div>
                        </div>
                        </div>
                        </div>

<!--  fim -->


















                         <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Registrar') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

 




