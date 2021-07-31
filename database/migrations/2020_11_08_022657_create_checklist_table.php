<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatechecklistTable extends Migration
{
   
    public function up()
    {
        Schema::create('checklist', function (Blueprint $table) {
          
             /*Dados do Paciente */ 
            $table->id();
            $table->string('nome',100)->nullable();
            $table->string('dataSolicitacao',25)->nullable();
            $table->string('cns',30)->nullable();
            $table->string('dn',50)->nullable();
            $table->string('idade',20)->nullable();
            $table->string('sexo',20)->nullable();
            $table->string('cpf',20)->nullable();
            $table->string('rg',20);
            $table->string('orgaoEmissor',30)->nullable();
            $table->string('estado',30)->nullable();
            $table->string('diagnostico',250)->nullable();
            $table->string('macroOrigem',30)->nullable();
            $table->string('hospitalOrigem',50)->nullable();
            $table->string('LeitoOrigem',50)->nullable();
            $table->string('macroDestino',30)->nullable();
            $table->string('hospitalDestino',50)->nullable();
            $table->string('LeitoDestino',50)->nullable();

     
            /*Tipo de precaução */ 
           $table->string('padrao',10)->nullable();
           $table->string('contato',10)->nullable();
           $table->string('respiratoria',10)->nullable();
           $table->string('covid',15)->nullable();
           $table->string('metodo',10)->nullable();
           $table->string('data',15)->nullable();


                     /*Dispositivos invasivos */ 
                     /*fila 1 */ 
           $table->string('sng',30)->nullable();
           $table->string('svd',30)->nullable();
           $table->string('dreno',30)->nullable();
           $table->string('tottqd',30)->nullable();
           $table->string('gtt',30)->nullable();
         
         
           /*Dispositivos invasivos */ 
                     /*fila 2 */ 
                     $table->string('pai',30)->nullable();
                     $table->string('kehr',30)->nullable();
                     $table->string('acessoVenosoCentral',30)->nullable();
                     $table->string('acessoVenosoPeriferico',15)->nullable();
                     $table->string('cateterDialise',10)->nullable(); 



                       /*Dispositivos invasivos */ 
                     /*fila 3 */ 
                     $table->string('dve',30)->nullable();
                     $table->string('outros',30)->nullable();
            

                          /*suporte hemodinamico */ 
                     $table->string('drogas',30)->nullable();
           




            $table->timestamps();  
        });
        
    }

        public function down()
        {
      
            Schema::dropIfExists('checklist');
       
        }
    }


   