<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Test
 *
 * @ORM\Table(name="test")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\TestRepository")
 */
class Test
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="annonces", type="text")
     */
    private $annonces;

    /**
     * @var string
     *
     * @ORM\Column(name="resumes", type="text")
     */
    private $resumes;


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
     * Set annonces
     *
     * @param string $annonces
     *
     * @return Test
     */
    public function setAnnonces($annonces)
    {
        $this->annonces = $annonces;

        return $this;
    }

    /**
     * Get annonces
     *
     * @return string
     */
    public function getAnnonces()
    {
        return $this->annonces;
    }

    /**
     * Set resumes
     *
     * @param string $resumes
     *
     * @return Test
     */
    public function setResumes($resumes)
    {
        $this->resumes = $resumes;

        return $this;
    }

    /**
     * Get resumes
     *
     * @return string
     */
    public function getResumes()
    {
        return $this->resumes;
    }
}
