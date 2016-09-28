<?php

/**
 * Actors model config
 */
return array(
    'title' => "Orders",
    'single' => 'order',
    'model' => 'App\Orders',
    /**
     * The display columnss
     */
    'columns' => array(
        'id',
        'name' => array(
            'title' => 'Nombre',
        ),
        'date' => array(
            'title' => 'Fecha',
        ),
        'state' => array(
            'title' => 'Estado',
        ),
        'city' => array(
            'title' => 'Ciudad',
        ),
        'neighborhood' => array(
            'title' => 'Barrio',
        ),
        'payment' => array(
            'title' => 'Pago',
        ),
        'kit_id' => array(
            'title' => "Kit",
            'relationship' => 'kit', //this is the name of the Eloquent relationship method!
            'select' => "(:table).name",
        ),
         'extra_id' => array(
            'title' => "Extras",
            'relationship' => 'extra', //this is the name of the Eloquent relationship method!
            'select' => "(:table).id",
        ),
    ),
    /**
     * The filter set
     */
    'filters' => array(
        'id',
        'name' => array(
            'title' => 'Nombre',
        ),
        'date' => array(
            'title' => 'Fecha',
            'type' => 'date',
        ),
        'state' => array(
            'title' => 'Estado',
        ),
        'payment' => array(
            'title' => 'Pago',
        ),
        'kit' => array(
            'type' => 'relationship',
            'title' => 'Collection',
            'name_field' => 'name',
        ),
    ),
    /**
     * The editable fields
     */
    'edit_fields' => array(
        'id',
        'name' => array(
            'title' => 'Nombre',
            'type' => 'text',
            'limit' => 150,
            'editable' => false,
        ),
        'code' => array(
            'title' => 'Codigo',
            'type' => 'text',
            'limit' => 150,
            'editable' => false,
        ),
        'email' => array(
            'title' => 'Email',
            'type' => 'text',
            'limit' => 150,
            'editable' => false,
        ),
        'tel' => array(
            'title' => 'Telefono',
            'type' => 'text',
            'limit' => 150,
            'editable' => false,
        ),
        'city' => array(
            'title' => 'Ciudad',
            'type' => 'text',
            'limit' => 150,
            'editable' => false,
        ),
        'neighborhood' => array(
            'title' => 'Barrio',
            'type' => 'text',
            'limit' => 150,
            'editable' => false,
        ),
        'address' => array(
            'title' => 'Dirección',
            'type' => 'textarea',
        ),
        'comments' => array(
            'title' => 'Comentarios',
            'type' => 'textarea',
            'editable' => false,
        ),
        'extra' => array(
            'title' => 'Información Extra',
            'type' => 'textarea',
        ),
        'state' => array(
            'type' => 'enum',
            'title' => 'Estado',
            'options' => array(
                'La compra de tu pedido ha sido aprobada' => 'La compra de tu pedido ha sido aprobada',
                'Tu kit esta siendo armado' => 'Tu kit esta siendo armado',
                'Tu kit ya fue despachado' => 'Tu kit ya fue despachado',
                'Tu kit ha sido entregado' => 'Tu kit ha sido entregado',
                
            ),
        ),
        'payment' => array(
            'type' => 'enum',
            'title' => 'Pago',
            'options' => array(
                'Contra entrega' => 'Contra entrega',
                'Tarjeta de crédito' => 'Tarjeta de crédito',
                'PSE' => 'PSE',
                'Baloto' => 'Baloto',
            ),
        ),
        'kit' => array(
            'type' => 'relationship',
            'title' => 'Kit',
            'name_field' => 'name',
        ),
        'date' => array(
            'type' => 'date',
            'title' => 'Date',
            //'date_format' => 'yy-mm-dd', //optional, will default to this value
        ),
        'response' => array(
            'title' => 'Respuesta',
            'type' => 'textarea',
            'editable' => false,
        ),
        'response_code' => array(
            'title' => 'Código de respuesta',
            'type' => 'text',
            'editable' => false,
        ),
        'response_date' => array(
            'title' => 'Fecha respuesta',
            'type' => 'date',
            'editable' => false,
        ),
    ),
    'form_width' => 600,
);
