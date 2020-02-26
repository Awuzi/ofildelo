<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PatrimoineRepository")
 */
class Patrimoine
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, unique=true)
     *
     */
    private $identifiant;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $commune;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $elem_patri;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $elem_princ;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdentifiant(): ?string
    {
        return $this->identifiant;
    }

    public function setIdentifiant(string $identifiant): self
    {
        $this->identifiant = $identifiant;

        return $this;
    }

    public function getCommune(): ?string
    {
        return $this->commune;
    }

    public function setCommune(string $commune): self
    {
        $this->commune = $commune;

        return $this;
    }

    public function getElemPatri(): ?string
    {
        return $this->elem_patri;
    }

    public function setElemPatri(string $elem_patri): self
    {
        $this->elem_patri = $elem_patri;

        return $this;
    }

    public function getElemPrinc(): ?string
    {
        return $this->elem_princ;
    }

    public function setElemPrinc(string $elem_princ): self
    {
        $this->elem_princ = $elem_princ;

        return $this;
    }

    public function __toString()
    {
        return $this->getIdentifiant()." ".$this->getCommune()." ".$this->getElemPrinc()." ".$this->getElemPatri();
    }

}
