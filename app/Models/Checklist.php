<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class checklist extends Model
{
    use HasFactory;
    protected $table="checklist";
    protected $fillable = [
   
      'nome',
      'dataSolicitacao',
      'cns',
      'dn',
      'idade',
      'sexo',
      'cpf',
      'rg',
      'orgaoEmissor',
      'estado',
      'diagnostico',
      'macroOrigem',
      'hospitalOrigem',
      'LeitoOrigem',
      'macroDestino',
      'hospitalDestino',
      'LeitoDestino',
      /*Tipo de precaução */ 
      'padrao',
      'contato',
      'respiratoria',
      'covid',
      'metodo',
      'data',
      /*Dispositivos invasivos */ 
      /*fila 1 */ 
      'sng',
      'svd',
      'dreno',
      'tottqd',
      'gtt',
      /*Dispositivos invasivos */ 
      /*fila 2 */ 
      'pai',
      'kehr',
      'acessoVenosoCentral',
      'acessoVenosoPeriferico',
      'cateterDialise',
      /*Dispositivos invasivos */ 
      /*fila 3 */ 
      'dve',
      'outros',
      /*suporte hemodinamico */ 
      'drogas',
      
   ];
}


  
