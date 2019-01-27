<?php
/**
 * Created by PhpStorm.
 * User: m3tagh0st
 * Date: 1/27/19
 * Time: 11:26 PM
 */

namespace Zenchron\TimestampLayer;


use Doctrine\ORM\Mapping as ORM;

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
     * Get triggered only on insert
     *
     * @ORM\PrePersist()
     * @throws \Exception
     */
    public function onPrePersist()
    {
        $this->createdAt = new \DateTime();
        $this->updatedAt = new \DateTime();
    }

    /**
     * Gets triggered every time when you update the entity
     *
     * @ORM\PreUpdate()
     * @throws \Exception
     */
    public function onPreUpdate()
    {
        $this->updatedAt = new \DateTime();
    }
}