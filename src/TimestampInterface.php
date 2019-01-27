<?php
/**
 * Created by PhpStorm.
 * User: m3tagh0st
 * Date: 1/27/19
 * Time: 11:29 PM
 */

namespace Zenchron\TimestampLayer;


interface TimestampInterface
{
    public function getCreatedAt();

    public function getUpdatedAt();
}