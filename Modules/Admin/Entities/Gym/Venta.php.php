<?php


namespace Modules\Admin\Entities\Gym;


use Eloquent;
class Venta extends Eloquent
{
    

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'fecha', 'id_cliente', 'id_empleado','tipo_pago','total','estatus','descuento_id','factura'
    ];
 protected $table = 'gym_venta';
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
public $timestamps = false;
     public function  detalleVenta(){
    return $this->hasMany('Modules\Admin\Entities\Gym\DetalleVenta');          
    }
    
    
        public function  cliente(){
                              return $this->belongsTo('Modules\Admin\Entities\Gym\UsuarioCliente','id_cliente','id_usuario');
           }
           
                   public function  usuario(){
                              return $this->belongsTo('Modules\Admin\Entities\Gym\User','id_cliente','id');
           }
}
