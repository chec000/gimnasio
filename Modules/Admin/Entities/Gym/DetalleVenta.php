<?php


namespace Modules\Admin\Entities\Gym;

use Eloquent;
class DetalleVenta extends Eloquent
{
    
 protected $table = 'users';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'codigo', 'nombres', 'apellidos','direccion','fecha_nacimiento','email','fecha_inscripcion','estado','foto',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

}
