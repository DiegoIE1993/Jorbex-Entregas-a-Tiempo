<?php


namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    use HasFactory;
    protected $fillable=['genero_id','nombres','apellidos','tipo_documento_id','identificacion','tipo_direccion_id','direcccion','telefono','correo', 'cargo_id'];

    public function genero(){
      return $this->belongsTo('App\Models\Admin\Genero', 'genero_id');
    }

    public function tipoDocumento(){
      return $this->belongsTo('App\Models\Admin\TipoDocumento', 'tipo_documento_id');
    }

    public function tipoDireccion(){
      return $this->belongsTo('App\Models\Admin\TipoDireccion', 'tipo_direccion_id');
    }

    public function cargo(){
        return $this->belongsTo('App\Models\Admin\Cargo', 'cargo_id');
    }
}
