<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventario extends Model
{
	use HasFactory;
	
    public $timestamps = true;

    protected $table = 'inventarios';

    protected $fillable = ['fecha_inventario','hora_inventario','producto_id','condicion_id','sede_id','planta_id','departamento_id','user_id','cantidad'];
	
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function condicion()
    {
        return $this->hasOne('App\Models\Condicion', 'id', 'condicion_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function departamento()
    {
        return $this->hasOne('App\Models\Departamento', 'id', 'departamento_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function planta()
    {
        return $this->hasOne('App\Models\Planta', 'id', 'planta_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function producto()
    {
        return $this->hasOne('App\Models\Producto', 'id', 'producto_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function sede()
    {
        return $this->hasOne('App\Models\Sede', 'id', 'sede_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne('App\Models\User', 'id', 'user_id');
    }
    
}
