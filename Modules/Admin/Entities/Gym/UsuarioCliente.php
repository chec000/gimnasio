<?php


namespace Modules\Admin\Entities\Gym;


use Eloquent;
class UsuarioCliente extends Eloquent
{
    
 protected $table = 'gym_cliente';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'fecha_inscripcion', 'id_usuario', 'estado',
    ];
  public function usuario()
    {
         return $this->belongsTo('Modules\Admin\Entities\Gym\User','id_usuario','id');
    }
  public $timestamps = false;
     public function  membresias(){
                              return $this->belongsToMany('Modules\Admin\Entities\Gym\Membresia', 'gym_cliente_membresia', 'cliente_id', 'membresia_id');

           }
             public function  ventas(){
                              return $this->hasMany('Modules\Admin\Entities\Gym\Venta','id_cliente','id_usuario');
           }
           
}
