<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\TrophiesRepository")
 */
class Trophies
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
     * @ORM\OneToMany(targetEntity="App\Entity\Team", mappedBy="trophies")
     */
    private $Team;

    /**
     * @ORM\Column(type="integer")
     */
    private $Year;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Coach", mappedBy="trophies")
     */
    private $Coach;

    public function __construct()
    {
        $this->Team = new ArrayCollection();
        $this->Coach = new ArrayCollection();
    }

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

    /**
     * @return Collection|Team[]
     */
    public function getTeam(): Collection
    {
        return $this->Team;
    }

    public function addTeam(Team $team): self
    {
        if (!$this->Team->contains($team)) {
            $this->Team[] = $team;
            $team->setTrophies($this);
        }

        return $this;
    }

    public function removeTeam(Team $team): self
    {
        if ($this->Team->contains($team)) {
            $this->Team->removeElement($team);
            // set the owning side to null (unless already changed)
            if ($team->getTrophies() === $this) {
                $team->setTrophies(null);
            }
        }

        return $this;
    }

    public function getYear(): ?\DateTimeInterface
    {
        return $this->Year;
    }

    public function setYear(\DateTimeInterface $Year): self
    {
        $this->Year = $Year;

        return $this;
    }

    /**
     * @return Collection|Coach[]
     */
    public function getCoach(): Collection
    {
        return $this->Coach;
    }

    public function addCoach(Coach $coach): self
    {
        if (!$this->Coach->contains($coach)) {
            $this->Coach[] = $coach;
            $coach->setTrophies($this);
        }

        return $this;
    }

    public function removeCoach(Coach $coach): self
    {
        if ($this->Coach->contains($coach)) {
            $this->Coach->removeElement($coach);
            // set the owning side to null (unless already changed)
            if ($coach->getTrophies() === $this) {
                $coach->setTrophies(null);
            }
        }

        return $this;
    }
}
