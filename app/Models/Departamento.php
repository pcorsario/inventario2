<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
	use HasFactory;
	
    public $timestamps = true;

    protected $table = 'departamentos';

    protected $fillable = ['nombre_departamento'];

    public function inventarios()
    {
        return $this->hasMany('App\Models\inventario', 'departamento_id', 'id');
    }
	
}
