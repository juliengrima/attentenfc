<?php

namespace AppBundle\Entity;

/**
 * doctorOfficeComplement
 */
class DoctorOfficeComplement
{

    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $building;

    /**
     * @var integer
     */
    private $level;

    /**
     * @var string
     */
    private $door;

    /**
     * @var \AppBundle\Entity\DoctorOffice
     */
    private $office;


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
     * Set building
     *
     * @param string $building
     *
     * @return DoctorOfficeComplement
     */
    public function setBuilding($building)
    {
        $this->building = $building;

        return $this;
    }

    /**
     * Get building
     *
     * @return string
     */
    public function getBuilding()
    {
        return $this->building;
    }

    /**
     * Set level
     *
     * @param integer $level
     *
     * @return DoctorOfficeComplement
     */
    public function setLevel($level)
    {
        $this->level = $level;

        return $this;
    }

    /**
     * Get level
     *
     * @return integer
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * Set door
     *
     * @param string $door
     *
     * @return DoctorOfficeComplement
     */
    public function setDoor($door)
    {
        $this->door = $door;

        return $this;
    }

    /**
     * Get door
     *
     * @return string
     */
    public function getDoor()
    {
        return $this->door;
    }

    /**
     * Set office
     *
     * @param \AppBundle\Entity\DoctorOffice $office
     *
     * @return DoctorOfficeComplement
     */
    public function setOffice(\AppBundle\Entity\DoctorOffice $office = null)
    {
        $this->office = $office;

        return $this;
    }

    /**
     * Get office
     *
     * @return \AppBundle\Entity\DoctorOffice
     */
    public function getOffice()
    {
        return $this->office;
    }
}
