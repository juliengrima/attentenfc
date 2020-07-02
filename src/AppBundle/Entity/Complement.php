<?php

namespace AppBundle\Entity;

/**
 * Complement
 */
class Complement
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $civility;

    /**
     * @var string
     */
    private $birthname;

    /**
     * @var \DateTime
     */
    private $birthdate;

    /**
     * @var integer
     */
    private $phone1;

    /**
     * @var integer
     */
    private $phone2;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set civility
     *
     * @param string $civility
     *
     * @return Complement
     */
    public function setCivility($civility)
    {
        $this->civility = $civility;

        return $this;
    }

    /**
     * Get civility
     *
     * @return string
     */
    public function getCivility()
    {
        return $this->civility;
    }

    /**
     * Set birthname
     *
     * @param string $birthname
     *
     * @return Complement
     */
    public function setBirthname($birthname)
    {
        $this->birthname = $birthname;

        return $this;
    }

    /**
     * Get birthname
     *
     * @return string
     */
    public function getBirthname()
    {
        return $this->birthname;
    }

    /**
     * Set birthdate
     *
     * @param \DateTime $birthdate
     *
     * @return Complement
     */
    public function setBirthdate($birthdate)
    {
        $this->birthdate = $birthdate;

        return $this;
    }

    /**
     * Get birthdate
     *
     * @return \DateTime
     */
    public function getBirthdate()
    {
        return $this->birthdate;
    }

    /**
     * Set phone1
     *
     * @param integer $phone1
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
     * @return integer
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
     * @return integer
     */
    public function getPhone2()
    {
        return $this->phone2;
    }
}
