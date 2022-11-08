<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Condicion extends Model
{
	use HasFactory;
	
    public $timestamps = true;

    protected $table = 'condicions';

    protected $fillable = ['condicion'];
	

    public function inventarios()
    {
        return $this->hasMany('App\Models\inventario', 'condicion_id', 'id');
    }
}
