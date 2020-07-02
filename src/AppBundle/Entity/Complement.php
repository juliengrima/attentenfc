<?php

namespace AppBundle\Entity;

/**
 * Complement
 */
class Complement
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $phone1;

    /**
     * @var int
     */
    private $phone2;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set phone1
     *
     * @param string $phone1
     *
     * @return Complement
     */
    public function setPhone1($phone1)
    {
        $this->phone1 = $phone1;

        return $this;
    }

    /**
     * Get phone1
     *
     * @return string
     */
    public function getPhone1()
    {
        return $this->phone1;
    }

    /**
     * Set phone2
     *
     * @param integer $phone2
     *
     * @return Complement
     */
    public function setPhone2($phone2)
    {
        $this->phone2 = $phone2;

        return $this;
    }

    /**
     * Get phone2
     *
     * @return int
     */
    public function getPhone2()
    {
        return $this->phone2;
    }
}
