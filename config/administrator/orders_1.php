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
        'payment' => array(
            'title' => 'Pago',
        ),
        'kit_id' => array(
            'title' => "Kit",
            'relationship' => 'kit', //this is the name of the Eloquent relationship method!
            'select' => "(:table).name",
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
                'La compra de su pedido ha sido aprobada' => 'La compra de su pedido ha sido aprobada',
                'Su kit esta siendo armado' => 'Su kit esta siendo armado',
                'Su kit ya fue despachado' => 'Su kit ya fue despachado',
                'Su kit ha sido entregado' => 'Su kit ha sido entregado',
                
            ),
        ),
        'payment' => array(
            'type' => 'enum',
            'title' => 'Pago',
            'options' => array(
                'ent' => 'Contra entrega',
                'cre' => 'Tarjeta de crédito',
                'pse' => 'PSE',
                'bal' => 'Baloto',
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
