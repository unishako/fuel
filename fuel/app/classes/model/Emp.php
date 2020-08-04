<?php


use Orm\Model;

class Model_Emp extends Model
{
    protected static $_table_name = 'emp';

    protected static $_primary_key = array('id');

    protected static $_properties = array(
        'id' => array(
            'data_type' => 'int',
            'label' => 'id',
        ),
        'name' => array(
            'data_type' => 'varchar',
            'label' => 'name',
        ),
    );
}