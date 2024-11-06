<?php

namespace App\Entity;

use App\Repository\FilmRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: FilmRepository::class)]
class Film
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $titre = null;

    #[ORM\Column(type: Types::TIME_MUTABLE)]
    private ?\DateTimeInterface $duree = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $annee_sortie = null;

    #[ORM\ManyToOne(inversedBy: 'films')]
    private ?Realisateur $id_realisateur = null;

    /**
     * @var Collection<int, Acteur>
     */
    #[ORM\ManyToMany(targetEntity: Acteur::class, mappedBy: 'film')]
    private Collection $acteurs;

    /**
     * @var Collection<int, Utilisateur>
     */
    #[ORM\ManyToMany(targetEntity: Utilisateur::class, mappedBy: 'film')]
    private Collection $utilisateurs;

    /**
     * @var Collection<int, ActeurFilm>
     */
    #[ORM\ManyToMany(targetEntity: ActeurFilm::class, mappedBy: 'film_id')]
    private Collection $acteurFilms;

    public function __construct()
    {
        $this->acteurs = new ArrayCollection();
        $this->utilisateurs = new ArrayCollection();
        $this->acteurFilms = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): static
    {
        $this->titre = $titre;

        return $this;
    }

    public function getDuree(): ?\DateTimeInterface
    {
        return $this->duree;
    }

    public function setDuree(\DateTimeInterface $duree): static
    {
        $this->duree = $duree;

        return $this;
    }

    public function getAnneeSortie(): ?\DateTimeInterface
    {
        return $this->annee_sortie;
    }

    public function setAnneeSortie(\DateTimeInterface $annee_sortie): static
    {
        $this->annee_sortie = $annee_sortie;

        return $this;
    }

    public function getIdRealisateur(): ?Realisateur
    {
        return $this->id_realisateur;
    }

    public function setIdRealisateur(?Realisateur $id_realisateur): static
    {
        $this->id_realisateur = $id_realisateur;

        return $this;
    }

    /**
     * @return Collection<int, Acteur>
     */
    public function getActeurs(): Collection
    {
        return $this->acteurs;
    }

    public function addActeur(Acteur $acteur): static
    {
        if (!$this->acteurs->contains($acteur)) {
            $this->acteurs->add($acteur);
            $acteur->addFilm($this);
        }

        return $this;
    }

    public function removeActeur(Acteur $acteur): static
    {
        if ($this->acteurs->removeElement($acteur)) {
            $acteur->removeFilm($this);
        }

        return $this;
    }

    /**
     * @return Collection<int, Utilisateur>
     */
    public function getUtilisateurs(): Collection
    {
        return $this->utilisateurs;
    }

    public function addUtilisateur(Utilisateur $utilisateur): static
    {
        if (!$this->utilisateurs->contains($utilisateur)) {
            $this->utilisateurs->add($utilisateur);
            $utilisateur->addFilm($this);
        }

        return $this;
    }

    public function removeUtilisateur(Utilisateur $utilisateur): static
    {
        if ($this->utilisateurs->removeElement($utilisateur)) {
            $utilisateur->removeFilm($this);
        }

        return $this;
    }

    /**
     * @return Collection<int, ActeurFilm>
     */
    public function getActeurFilms(): Collection
    {
        return $this->acteurFilms;
    }

    public function addActeurFilm(ActeurFilm $acteurFilm): static
    {
        if (!$this->acteurFilms->contains($acteurFilm)) {
            $this->acteurFilms->add($acteurFilm);
            $acteurFilm->addFilmId($this);
        }

        return $this;
    }

    public function removeActeurFilm(ActeurFilm $acteurFilm): static
    {
        if ($this->acteurFilms->removeElement($acteurFilm)) {
            $acteurFilm->removeFilmId($this);
        }

        return $this;
    }
}
