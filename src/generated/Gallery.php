<?php
//[PHPCOMPRESSOR(remove,start)]
/**
 * Created by PhpStorm.
 * User: Myslyvyi
 * Date: 09.02.16
 * Time: 13:35
 */
namespace samson\activerecord;

use samsonframework\orm\Record;

/**
 * This is emulated classes that should be generated by
 * ORM module. This is needed for IDE and databaseless testing.
 */
if (!class_exists('\samson\activerecord\gallery', false)) {
    class gallery extends Record
    {

    }
}
//[PHPCOMPRESSOR(remove,end)]