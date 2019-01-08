<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\TeamRepository")
 */
class Team
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
    private $Stadium;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $NumberOfTitles;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $Logo;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $Points;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $Win;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $Loses;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $Draws;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\Owner", mappedBy="Team", cascade={"persist", "remove"})
     */
    private $owner;



    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Player", mappedBy="Team")
     */
    private $players;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Games", mappedBy="Teams")
     */
    private $games;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Trophies", inversedBy="Team")
     */
    private $trophies;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\Coach", mappedBy="Team", cascade={"persist", "remove"})
     */
    private $coach;

    public function __construct()
    {
        $this->players = new ArrayCollection();
        $this->games = new ArrayCollection();
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

    public function getYear(): ?int
    {
        return $this->Year;
    }

    public function setYear(int $Year): self
    {
        $this->Year = $Year;

        return $this;
    }


    public function getStadium(): ?string
    {
        return $this->Stadium;
    }

    public function setStadium(?string $Stadium): self
    {
        $this->Stadium = $Stadium;

        return $this;
    }

    public function getNumberOfTitles(): ?int
    {
        return $this->NumberOfTitles;
    }

    public function setNumberOfTitles(?int $NumberOfTitles): self
    {
        $this->NumberOfTitles = $NumberOfTitles;

        return $this;
    }

    public function getLogo(): ?string
    {
        return $this->Logo;
    }

    public function setLogo(?string $Logo): self
    {
        $this->Logo = $Logo;

        return $this;
    }

    public function getPoints(): ?int
    {
        return $this->Points;
    }

    public function setPoints(?int $Points): self
    {
        $this->Points = $Points;

        return $this;
    }

    public function getWin(): ?int
    {
        return $this->Win;
    }

    public function setWin(?int $Win): self
    {
        $this->Win = $Win;

        return $this;
    }

    public function getLoses(): ?int
    {
        return $this->Loses;
    }

    public function setLoses(?int $Loses): self
    {
        $this->Loses = $Loses;

        return $this;
    }

    public function getDraws(): ?int
    {
        return $this->Draws;
    }

    public function setDraws(?int $Draws): self
    {
        $this->Draws = $Draws;

        return $this;
    }

    public function getOwner(): ?Owner
    {
        return $this->owner;
    }

    public function setOwner(?Owner $owner): self
    {
        $this->owner = $owner;

        // set (or unset) the owning side of the relation if necessary
        $newTeam = $owner === null ? null : $this;
        if ($newTeam !== $owner->getTeam()) {
            $owner->setTeam($newTeam);
        }

        return $this;
    }

    /**
     * @return Collection|Player[]
     */
    public function getPlayers(): Collection
    {
        return $this->players;
    }

    public function addPlayer(Player $player): self
    {
        if (!$this->players->contains($player)) {
            $this->players[] = $player;
            $player->setTeam($this);
        }

        return $this;
    }

    public function removePlayer(Player $player): self
    {
        if ($this->players->contains($player)) {
            $this->players->removeElement($player);
            // set the owning side to null (unless already changed)
            if ($player->getTeam() === $this) {
                $player->setTeam(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Games[]
     */
    public function getGames(): Collection
    {
        return $this->games;
    }

    public function addGame(Games $game): self
    {
        if (!$this->games->contains($game)) {
            $this->games[] = $game;
            $game->addTeam($this);
        }

        return $this;
    }

    public function removeGame(Games $game): self
    {
        if ($this->games->contains($game)) {
            $this->games->removeElement($game);
            $game->removeTeam($this);
        }

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

    public function getCoach(): ?Coach
    {
        return $this->coach;
    }

    public function setCoach(Coach $coach): self
    {
        $this->coach = $coach;

        // set the owning side of the relation if necessary
        if ($this !== $coach->getTeam()) {
            $coach->setTeam($this);
        }

        return $this;
    }
}
