<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Language Lines
    |--------------------------------------------------------------------------
    */

    'select_new_shipping_address' => 'Selecciona una dirección de envío',
    'we_have_a_problem' => 'Se produjo uno o varios problemas',
    'success' => 'Éxito',
    'edit_address' => 'Editar dirección',
    'delete_address' => 'Eliminar dirección',
    'msg_confirm_delete_address' => '¿Estás seguro que deseas eliminar esta dirección?',
    'save'       => 'Guardar',
    'accept'     =>'Aceptar',
    'cancel'     => 'Cancelar',
    'delete'    => 'Eliminar',
    'edit'      => 'Editar',
    'close'      => 'close',
    'tag_shipping_address'  => "<span class='desk'>1. </span> Dirección <span class='desk'>de envío</span>",
    'tag_way_to_pay'    => "<span class='desk'>2. Forma de pago</span><span class='mov'>Pago</span>",
    'tag_confirm'   => "<span class='desk'>3.</span> Confirmación",
    'new_address'   => "Nueva dirección",
    'enter_new_data'  => "Ingresa los datos para que te llegue a otra dirección.",
    'msg_new_address_change'    => '*Esta dirección podrá cambiar el costo del manejo de envío.',
    'msg_address_error' => 'Direccion incorrecta, favor de editarla.',
    'msg_address_add_success'   => "La dirección :attribute ha sido registrada exitosamente.",
    'msg_address_delete_success'      => 'La dirección ha sido eliminada exitosamente.',
    'msg_address_edit_success' => "La dirección :attribute ha sido editada exitosamente.",
    'msg_error_getAddress' => 'Ocurrio un error al obtener las direcciones, intentelo mas tarde',
    'success_delete'      => 'Dirección eliminada con éxito',
    'error_deleted'     => 'Error al eliminar',
    'success_add'      => 'Dirección agregada con éxito',
    'error_add'     => 'Error al agregar',
    'success_edit'      => 'Dirección editada',
    'error_edit'     => 'Error al editar',
    'success_selected'      => 'Dirección seleccionada',
    'error_selected'     => 'Dirección no encontrada. Por favor intente mas tarde.',
    'session_eo_expired' => 'La sessión ha expirado',



    'fields' => [
        'name'      => [
            'label'         => 'Nombre completo',
            'placeholder'   => 'Nombre',
        ],
        'description'      => [
            'label'         => 'Descipción',
            'placeholder'   => 'Descripción',
        ],
        'zip' => [
            'placeholder' => 'Código postal',
        ],
        'city' => [
            'label' => 'Seleccione ciudad',
            'placeholder' => 'Ciudad',
        ],
        'state' => [
            'label' => 'Seleccione Estado',
            'placeholder' => 'Estado',
        ],
        'county' => [
            'placeholder' => 'Condado',
        ],
        'address' => [
            'placeholder' => 'Dirección',
        ],
        'email' => [
            'placeholder' => 'Email',
        ],
        'phone' => [
            'placeholder' => 'Teléfono',
        ],
        'shippingCompany' => [
            'placeholder' => 'Compania de envío',
        ],
        'suburb' => [
            'placeholder' => 'Colonia',
        ],

        'required'  => 'El campo :attribute es requerido.',
    ],
];
