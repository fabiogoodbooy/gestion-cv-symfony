<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\FormationRepository")
 */
class Formation
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
    private $diplome;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $titre;

    /**
     * @ORM\Column(type="date")
     */
    private $anneescoler;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $mention;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $duree;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\User", inversedBy="formation")
     */
    private $user;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $anneeterminal;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDiplome(): ?string
    {
        return $this->diplome;
    }

    public function setDiplome(string $diplome): self
    {
        $this->diplome = $diplome;

        return $this;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): self
    {
        $this->titre = $titre;

        return $this;
    }

    

    public function getMention(): ?string
    {
        return $this->mention;
    }

    public function setMention(string $mention): self
    {
        $this->mention = $mention;

        return $this;
    }

    public function getDuree(): ?string
    {
        return $this->duree;
    }

    public function setDuree(string $duree): self
    {
        $this->duree = $duree;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

        return $this;
    }

   

    public function getAnneeterminal(): ?\DateTimeInterface
    {
        return $this->anneeterminal;
    }

    public function setAnneeterminal(?\DateTimeInterface $anneeterminal): self
    {
        $this->anneeterminal = $anneeterminal;

        return $this;
    }

    public function getAnneescoler(): ?\DateTimeInterface
    {
        return $this->anneescoler;
    }

    public function setAnneescoler(\DateTimeInterface $anneescoler): self
    {
        $this->anneescoler = $anneescoler;

        return $this;
    }
}
