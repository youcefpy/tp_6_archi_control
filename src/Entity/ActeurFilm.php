<?php

namespace App\Entity;

use App\Repository\ActeurFilmRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ActeurFilmRepository::class)]
class ActeurFilm
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    /**
     * @var Collection<int, Acteur>
     */
    #[ORM\ManyToMany(targetEntity: Acteur::class, inversedBy: 'acteurFilms')]
    private Collection $acteur_id;

    /**
     * @var Collection<int, Film>
     */
    #[ORM\ManyToMany(targetEntity: Film::class, inversedBy: 'acteurFilms')]
    private Collection $film_id;

    public function __construct()
    {
        $this->acteur_id = new ArrayCollection();
        $this->film_id = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return Collection<int, Acteur>
     */
    public function getActeurId(): Collection
    {
        return $this->acteur_id;
    }

    public function addActeurId(Acteur $acteurId): static
    {
        if (!$this->acteur_id->contains($acteurId)) {
            $this->acteur_id->add($acteurId);
        }

        return $this;
    }

    public function removeActeurId(Acteur $acteurId): static
    {
        $this->acteur_id->removeElement($acteurId);

        return $this;
    }

    /**
     * @return Collection<int, Film>
     */
    public function getFilmId(): Collection
    {
        return $this->film_id;
    }

    public function addFilmId(Film $filmId): static
    {
        if (!$this->film_id->contains($filmId)) {
            $this->film_id->add($filmId);
        }

        return $this;
    }

    public function removeFilmId(Film $filmId): static
    {
        $this->film_id->removeElement($filmId);

        return $this;
    }
}
