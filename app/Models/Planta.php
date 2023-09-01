<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Planta extends Model
{
	use HasFactory;
	
    public $timestamps = true;

    protected $table = 'plantas';

    protected $fillable = ['nom_planta'];
    public function inventarios()
    {
        return $this->hasMany('App\Models\inventario', 'planta_id', 'id');
    }
}
