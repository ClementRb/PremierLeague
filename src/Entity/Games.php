<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\GamesRepository")
 */
class Games
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Team", inversedBy="games")
     */
    private $Teams;

    /**
     * @ORM\Column(type="integer")
     */
    private $Result;

    /**
     * @ORM\Column(type="integer")
     */
    private $Result2;


    /**
     * @ORM\Column(type="time")
     */
    private $Date;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Player", mappedBy="gameGoal")
     */
    private $Scorer;

    public function __construct()
    {
        $this->Teams = new ArrayCollection();
        $this->Scorer = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return Collection|Team[]
     */
    public function getTeams(): Collection
    {
        return $this->Teams;
    }

    public function addTeam(Team $team): self
    {
        if (!$this->Teams->contains($team)) {
            $this->Teams[] = $team;
        }

        return $this;
    }

    public function removeTeam(Team $team): self
    {
        if ($this->Teams->contains($team)) {
            $this->Teams->removeElement($team);
        }

        return $this;
    }

    public function getResult(): ?int
    {
        return $this->Result;
    }

    public function setResult(int $Result): self
    {
        $this->Result = $Result;

        return $this;
    }

    public function getResult2(): ?int
    {
        return $this->Result2;
    }

    public function setResult2(int $Result2): self
    {
        $this->Result2 = $Result2;

        return $this;
    }


    public function getDate(): ?\DateTimeInterface
    {
        return $this->Date;
    }

    public function setDate(\DateTimeInterface $Date): self
    {
        $this->Date = $Date;

        return $this;
    }

    /**
     * @return Collection|Player[]
     */
    public function getScorer(): Collection
    {
        return $this->Scorer;
    }

    public function addScorer(Player $scorer): self
    {
        if (!$this->Scorer->contains($scorer)) {
            $this->Scorer[] = $scorer;
            $scorer->setGameGoal($this);
        }

        return $this;
    }

    public function removeScorer(Player $scorer): self
    {
        if ($this->Scorer->contains($scorer)) {
            $this->Scorer->removeElement($scorer);
            // set the owning side to null (unless already changed)
            if ($scorer->getGameGoal() === $this) {
                $scorer->setGameGoal(null);
            }
        }

        return $this;
    }
}
