<?php

/**
 * Actors model config
 */
return array(
    'title' => "Kits",
    'single' => 'kit',
    'model' => 'App\Kits',
    /**
     * The display columnss
     */
    'columns' => array(
        'id',
        'name' => array(
            'title' => 'Nombre',
        ),
        'description' => array(
            'title' => 'Descripcion',
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
    ),
    /**
     * The editable fields
     */
    'edit_fields' => array(
        'name' => array(
            'title' => 'Nombre',
            'type' => 'text',
            'limit' => 150,
        ),
        'tags' => array(
            'title' => 'Tags',
            'type' => 'text',
            'limit' => 150,
        ),
        'price' => array(
            'type' => 'number',
            'title' => 'Precio',
            'symbol' => '$', //optional, defaults to ''
            'decimals' => 0, //optional, defaults to 0
            //'thousands_separator' => '.', //optional, defaults to ','
            //'decimal_separator' => '.', //optional, defaults to '.'
        ),
        'picture' => array(
           'title' => 'Imagen (1200 x 1314)',
            'type' => 'image',
           'naming' => 'random',
            'location' => public_path('\public\img'),
            'size_limit' => 2,
            'sizes' => array(
                array(1200, 1314, 'crop', public_path() . '/uploads/kits/resize/', 100),
                array(452, 495, 'landscape', public_path() . '/uploads/kits/detail/', 100),
            )
        ),
        'description' => array(
            'title' => 'Descripcion',
            'type' => 'wysiwyg',
        ),
        'contents' => array(
            'title' => 'Contenidos',
            'type' => 'textarea',
        ),
        'state' => array(
            'type' => 'enum',
            'title' => 'Estado',
            'options' => array(
                'act' => 'Activo',
                'pau' => 'Pausado',
                'old' => 'Deshabilitado',
            ),
        ),
        'type' => array(
            'type' => 'enum',
            'title' => 'Tipo',
            'options' => array(
                'tra' => 'Trasteo',
                'otr' => 'Otro',
            ),
        ),
    ),
    'foconterm_width' => 600,
);
