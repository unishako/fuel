<?php
/**
 * Fuel is a fast, lightweight, community driven PHP 5.4+ framework.
 *
 * @package    Fuel
 * @version    1.8.2
 * @author     Fuel Development Team
 * @license    MIT License
 * @copyright  2010 - 2019 Fuel Development Team
 * @link       https://fuelphp.com
 */

/**
 * -----------------------------------------------------------------------------
 *  Database settings for development environment
 * -----------------------------------------------------------------------------
 *
 *  These settings get merged with the global settings.
 *
 */

return array(
    'default' => array(
        'type'           => 'mysqli',
        'connection'     => array(
            'hostname'       => 'fuelphp_mysql',
            'port'           => '3306',
            'database'       => 'emp',
            'username'       => 'emp',
            'password'       => 'EMP',
            'persistent'     => false,
            'compress'       => false,
        ),
        'identifier'     => '`',
        'table_prefix'   => '',
        'charset'        => 'utf8mb4',
        'enable_cache'   => true,
        'profiling'      => false,
        'readonly'       => false,
    ),
);
