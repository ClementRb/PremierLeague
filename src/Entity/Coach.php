<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CoachRepository")
 */
class Coach
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Name;

    /**
     * @ORM\Column(type="integer")
     */
    private $Year;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $Nationality;


    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Trophies", inversedBy="Coach")
     */
    private $trophies;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\Team", inversedBy="coach", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $Team;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->Name;
    }

    public function setName(string $Name): self
    {
        $this->Name = $Name;

        return $this;
    }

    public function getYear(): ?string
    {
        return $this->Year;
    }

    public function setYear(?string $Year): self
    {
        $this->Year = $Year;

        return $this;
    }

    public function getNationality(): ?string
    {
        return $this->Nationality;
    }

    public function setNationality(?string $Nationality): self
    {
        $this->Nationality = $Nationality;

        return $this;
    }

    public function getTeam(): ?Team
    {
        return $this->Team;
    }

    public function setTeam(?Team $Team): self
    {
        $this->Team = $Team;

        return $this;
    }

    public function getTrophies(): ?Trophies
    {
        return $this->trophies;
    }

    public function setTrophies(?Trophies $trophies): self
    {
        $this->trophies = $trophies;

        return $this;
    }
}
