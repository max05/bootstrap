<?php

namespace PPE\HopitalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RDV
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="PPE\HopitalBundle\Entity\RDVRepository")
 */
class RDV
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

    /**
     * @var integer
     *
     * @ORM\Column(name="etats", type="integer")
     */
    private $etats;


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
     * Set date
     *
     * @param \DateTime $date
     * @return RDV
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set etats
     *
     * @param integer $etats
     * @return RDV
     */
    public function setEtats($etats)
    {
        $this->etats = $etats;

        return $this;
    }

    /**
     * Get etats
     *
     * @return integer 
     */
    public function getEtats()
    {
        return $this->etats;
    }
}
