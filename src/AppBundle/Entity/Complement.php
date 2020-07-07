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
    private $civility;

    /**
     * @var string
     */
    private $firstname;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string|null
     */
    private $birthname;

    /**
     * @var \DateTime|null
     */
    private $birthdate;

    /**
     * @var int
     */
    private $phone1;

    /**
     * @var int|null
     */
    private $phone2;


    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set civility.
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
     * Get civility.
     *
     * @return string
     */
    public function getCivility()
    {
        return $this->civility;
    }

    /**
     * Set firstname.
     *
     * @param string $firstname
     *
     * @return Complement
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Get firstname.
     *
     * @return string
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Set name.
     *
     * @param string $name
     *
     * @return Complement
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set birthname.
     *
     * @param string|null $birthname
     *
     * @return Complement
     */
    public function setBirthname($birthname = null)
    {
        $this->birthname = $birthname;

        return $this;
    }

    /**
     * Get birthname.
     *
     * @return string|null
     */
    public function getBirthname()
    {
        return $this->birthname;
    }

    /**
     * Set birthdate.
     *
     * @param \DateTime|null $birthdate
     *
     * @return Complement
     */
    public function setBirthdate($birthdate = null)
    {
        $this->birthdate = $birthdate;

        return $this;
    }

    /**
     * Get birthdate.
     *
     * @return \DateTime|null
     */
    public function getBirthdate()
    {
        return $this->birthdate;
    }

    /**
     * Set phone1.
     *
     * @param int $phone1
     *
     * @return Complement
     */
    public function setPhone1($phone1)
    {
        $this->phone1 = $phone1;

        return $this;
    }

    /**
     * Get phone1.
     *
     * @return int
     */
    public function getPhone1()
    {
        return $this->phone1;
    }

    /**
     * Set phone2.
     *
     * @param int|null $phone2
     *
     * @return Complement
     */
    public function setPhone2($phone2 = null)
    {
        $this->phone2 = $phone2;

        return $this;
    }

    /**
     * Get phone2.
     *
     * @return int|null
     */
    public function getPhone2()
    {
        return $this->phone2;
    }
    /**
     * @var \UserBundle\Entity\User
     */
    private $user;


    /**
     * Set user.
     *
     * @param \UserBundle\Entity\User|null $user
     *
     * @return Complement
     */
    public function setUser(\UserBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user.
     *
     * @return \UserBundle\Entity\User|null
     */
    public function getUser()
    {
        return $this->user;
    }
}
