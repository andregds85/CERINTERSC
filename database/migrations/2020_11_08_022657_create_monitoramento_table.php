<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMonitoramentoTable extends Migration
{
   
    public function up()
    {
        Schema::create('monitoramento', function (Blueprint $table) {
          
            $table->id();
            $table->string('solicitacao')->nullable();
            $table->timestamps();  
        });
        
    }

        public function down()
        {
          Schema::dropIfExists('monitoramento');
        }
    }


