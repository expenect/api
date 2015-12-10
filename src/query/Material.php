<?php
/**
 * Created by PhpStorm.
 * User: VITALYIEGOROV
 * Date: 08.12.15
 * Time: 23:11
 */
namespace samsoncms\api\query;

use samson\activerecord\dbQuery;

/**
 * Material with additional fields query.
 * @package samsoncms\api
 */
class Material extends Base
{
    /**
     * MaterialField constructor.
     *
     * @param string $identifier Entity identifier
     */
    public function __construct($identifier = '\samson\cms\CMSMaterial')
    {
        parent::__construct(
            new dbQuery(),
            $identifier
        );
    }
}