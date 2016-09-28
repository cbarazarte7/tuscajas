<?php

/**
 * Actors model config
 */
return array(
    'title' => 'Users',
    'single' => 'user',
    'model' => 'App\User',
    /**
     * The display columnss
     */
    'columns' => array(
        'id',
        'email' => array(
            'title' => 'Email',
        ),
        'name' => array(
            'title' => 'Name',
        ),
    ),
    /**
     * The filter set
     */
    'filters' => array(
        'id',
        'email' => array(
            'title' => 'Email',
        ),
        'name' => array(
            'title' => 'Name',
        ),
    ),
    /**
     * The editable fields
     */
    'edit_fields' => array(
        'name' => array(
            'title' => 'Name',
            'type' => 'text',
        ),
        'email' => array(
            'title' => 'Email',
            'type' => 'text',
        ),
    ),
    'form_width' => 600,

    
);

?>