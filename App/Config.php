<?php

namespace App;

/**
 * Application configuration
 *
 * PHP version 7.0
 */
class Config
{

    /**
     * Database host
     * @var string
     */
    const DB_HOST = 'chickenland';

    /**
     * Database name
     * @var string
     */
    const DB_NAME = 'db_name';

    /**
     * Database user
     * @var string
     */
    const DB_USER = 'db_user';

    /**
     * Database password
     * @var string
     */
    const DB_PASSWORD = 'password';

    /**
     * Show or hide error messages on screen
     * @var boolean
     */
    const SHOW_ERRORS = true;

    /**
    * Secret key for hashing
    * @var string
    */
    const SECRET_KEY = 'mysecret';

    /**
    * 256-bit include hex key for hashing
    * @var string
    */
    const CONFIRM_KEY = 'myconfirm';
}
