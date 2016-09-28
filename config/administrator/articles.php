
<?php
return array(
    'title' => 'Articles',
    'single' => 'articles',
    'model' => 'App\articles',
    /**
     * The display columnss
     */
    'columns' => array(
        'id',
        'title' => array(
            'title' => 'Titulo',
        ),
        'description' => array(
            'title' => 'Descripcion',
            
        ),
        'state' => array(
            'title' => 'Estado',
        ),
    ),
    
     'filters' => array(
        'title' => array(
            'title' => 'Titulo',
        ),
        'description' => array(
            'title' => 'Descripcion',
        ),
        'state' => array(
            'title' => 'Estado',
    ),
        ),


    'edit_fields' => array(

        'title' => array(
            'title' => 'Titulo',
            'type' => 'text',
        ),
       'description' => array(
            'title' => 'Descripcion',
            'type' => 'wysiwyg',
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

         ),
        'form_width' => 700,

    
);

?>
