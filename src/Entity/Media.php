<?php

namespace App\Entity;

use App\Repository\MediaRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=MediaRepository::class)
 */
class Media
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $title;

    /**
     * @ORM\Column(type="smallint")
     */
    private $year;

    /**
     * @ORM\Column(type="smallint", nullable=true)
     */
    private $duration;

    /**
     * @ORM\Column(type="smallint", nullable=true)
     */
    private $nb_season;

    /**
     * @ORM\Column(type="smallint", nullable=true)
     */
    private $nb_episode;

    /**
     * @ORM\Column(type="smallint", nullable=true)
     */
    private $duration_episode;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $image;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $preface;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $synopsis;

    /**
     * @ORM\Column(type="text")
     */
    private $summary;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $anecdote;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $trailer;

    /**
     * @ORM\Column(type="datetime_immutable")
     */
    private $created_at;

    /**
     * @ORM\Column(type="datetime_immutable", nullable=true)
     */
    private $updated_at;

    /**
     * @ORM\ManyToMany(targetEntity=Person::class, inversedBy="medias")
     */
    private $persons;

    /**
     * @ORM\ManyToMany(targetEntity=Type::class, inversedBy="medias")
     */
    private $types;

    /**
     * @ORM\ManyToOne(targetEntity=MediaCategory::class, inversedBy="medias")
     */
    private $media_categories;

    /**
     * @ORM\ManyToMany(targetEntity=User::class, mappedBy="medias")
     */
    private $users;

    /**
     * @ORM\OneToMany(targetEntity=CommentMedia::class, mappedBy="medias")
     */
    private $comment_medias;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="media")
     */
    private $user;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $slug;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $original_title;

    public function __construct()
    {
        $this->created_at = new \DateTimeImmutable();
        $this->persons = new ArrayCollection();
        $this->types = new ArrayCollection();
        $this->users = new ArrayCollection();
        $this->comment_medias = new ArrayCollection();
    }

    public function __toString()
    {
        return $this->title;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getYear(): ?int
    {
        return $this->year;
    }

    public function setYear(int $year): self
    {
        $this->year = $year;

        return $this;
    }

    public function getDuration(): ?int
    {
        return $this->duration;
    }

    public function setDuration(?int $duration): self
    {
        $this->duration = $duration;

        return $this;
    }

    public function getNbSeason(): ?int
    {
        return $this->nb_season;
    }

    public function setNbSeason(?int $nb_season): self
    {
        $this->nb_season = $nb_season;

        return $this;
    }

    public function getNbEpisode(): ?int
    {
        return $this->nb_episode;
    }

    public function setNbEpisode(?int $nb_episode): self
    {
        $this->nb_episode = $nb_episode;

        return $this;
    }

    public function getDurationEpisode(): ?int
    {
        return $this->duration_episode;
    }

    public function setDurationEpisode(?int $duration_episode): self
    {
        $this->duration_episode = $duration_episode;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(?string $image): self
    {
        $this->image = $image;

        return $this;
    }

    public function getPreface(): ?string
    {
        return $this->preface;
    }

    public function setPreface(?string $preface): self
    {
        $this->preface = $preface;

        return $this;
    }

    public function getSynopsis(): ?string
    {
        return $this->synopsis;
    }

    public function setSynopsis(?string $synopsis): self
    {
        $this->synopsis = $synopsis;

        return $this;
    }

    public function getSummary(): ?string
    {
        return $this->summary;
    }

    public function setSummary(string $summary): self
    {
        $this->summary = $summary;

        return $this;
    }

    public function getAnecdote(): ?string
    {
        return $this->anecdote;
    }

    public function setAnecdote(?string $anecdote): self
    {
        $this->anecdote = $anecdote;

        return $this;
    }

    public function getTrailer(): ?string
    {
        return $this->trailer;
    }

    public function setTrailer(?string $trailer): self
    {
        $this->trailer = $trailer;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeImmutable
    {
        return $this->created_at;
    }

    public function setCreatedAt(\DateTimeImmutable $created_at): self
    {
        $this->created_at = $created_at;

        return $this;
    }

    public function getUpdatedAt(): ?\DateTimeImmutable
    {
        return $this->updated_at;
    }

    public function setUpdatedAt(?\DateTimeImmutable $updated_at): self
    {
        $this->updated_at = $updated_at;

        return $this;
    }

    /**
     * @return Collection|Person[]
     */
    public function getPersons(): Collection
    {
        return $this->persons;
    }

    public function addPerson(Person $person): self
    {
        if (!$this->persons->contains($person)) {
            $this->persons[] = $person;
        }

        return $this;
    }

    public function removePerson(Person $person): self
    {
        $this->persons->removeElement($person);

        return $this;
    }

    /**
     * @return Collection|Type[]
     */
    public function getTypes(): Collection
    {
        return $this->types;
    }

    public function addType(Type $type): self
    {
        if (!$this->types->contains($type)) {
            $this->types[] = $type;
        }

        return $this;
    }

    public function removeType(Type $type): self
    {
        $this->types->removeElement($type);

        return $this;
    }

    public function getMediaCategories(): ?MediaCategory
    {
        return $this->media_categories;
    }

    public function setMediaCategories(?MediaCategory $media_categories): self
    {
        $this->media_categories = $media_categories;

        return $this;
    }

    /**
     * @return Collection|User[]
     */
    public function getUsers(): Collection
    {
        return $this->users;
    }

    public function addUser(User $user): self
    {
        if (!$this->users->contains($user)) {
            $this->users[] = $user;
            $user->addMedia($this);
        }

        return $this;
    }

    public function removeUser(User $user): self
    {
        if ($this->users->removeElement($user)) {
            $user->removeMedia($this);
        }

        return $this;
    }

    /**
     * @return Collection|CommentMedia[]
     */
    public function getCommentMedias(): Collection
    {
        return $this->comment_medias;
    }

    public function addCommentMedia(CommentMedia $commentMedia): self
    {
        if (!$this->comment_medias->contains($commentMedia)) {
            $this->comment_medias[] = $commentMedia;
            $commentMedia->setMedias($this);
        }

        return $this;
    }

    public function removeCommentMedia(CommentMedia $commentMedia): self
    {
        if ($this->comment_medias->removeElement($commentMedia)) {
            // set the owning side to null (unless already changed)
            if ($commentMedia->getMedias() === $this) {
                $commentMedia->setMedias(null);
            }
        }

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

    public function getSlug(): ?string
    {
        return $this->slug;
    }

    public function setSlug(?string $slug): self
    {
        $this->slug = $slug;

        return $this;
    }

    public function getOriginalTitle(): ?string
    {
        return $this->original_title;
    }

    public function setOriginalTitle(?string $original_title): self
    {
        $this->original_title = $original_title;

        return $this;
    }
}
