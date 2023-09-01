<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sede extends Model
{
	use HasFactory;
	
    public $timestamps = true;

    protected $table = 'sedes';

    protected $fillable = ['nom_sede'];
	

    public function inventarios()
    {
        return $this->hasMany('App\Models\inventario', 'sede_id', 'id');
    }
}
