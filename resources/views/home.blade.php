@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Central de Transferencia @ Secretária de Estado de Saúde') }}</div>
                <div class="card-header"><img src="img/ambulancia.jpg"> Transporte Terrestre</div>
                <br>
                <div class="card-header"><img src="img/aereo.jpg"> Transporte Aério</div>

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
@endsection
