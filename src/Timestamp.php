<?php
/**
 * Created by PhpStorm.
 * User: m3tagh0st
 * Date: 1/27/19
 * Time: 11:26 PM
 */

namespace Zenchron\TimestampLayer;


trait Timestamp
{
    private $createdAt;

    private $updatedAt;

    public function getUpdatedAt(): \DateTime
    {
        return $this->updatedAt;
    }

    public function getCreatedAt(): \DateTime
    {
        return $this->createdAt;
    }

    /**
     * @throws \Exception
     */
    public function onPrePersist()
    {
        $this->createdAt = new \DateTime();
        $this->updatedAt = new \DateTime();
    }

    /**
     * @throws \Exception
     */
    public function onPreUpdate()
    {
        $this->updatedAt = new \DateTime();
    }
}