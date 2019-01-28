<?php
/**
 * Created by PhpStorm.
 * User: m3tagh0st
 * Date: 1/27/19
 * Time: 11:58 PM
 */

namespace Zenchron\TimestampLayer;


use Doctrine\ORM\Mapping as ORM;

trait Expirable
{
    /**
     * @var \DateTime
     * @ORM\Column(type="datetime")
     */
    private $expireAt;

    public function getExpireAt(): \DateTime
    {
        return $this->expireAt;
    }

    /**
     * Get triggered only on insert
     *
     * @ORM\PrePersist()
     * @throws \Exception
     */
    public function onPrePersist()
    {
        $this->expireAt = new \DateTime();
    }

    /**
     * Gets triggered every time when you update the entity
     *
     * @ORM\PreUpdate()
     * @throws \Exception
     */
    public function onPreUpdate()
    {
        $this->expireAt = new \DateTime();
    }
}