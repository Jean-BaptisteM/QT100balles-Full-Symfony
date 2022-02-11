<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * @ORM\Entity(repositoryClass=UserRepository::class)
 */
class User implements UserInterface, PasswordAuthenticatedUserInterface
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=180, unique=true)
     */
    private $nickname;

    /**
     * @ORM\Column(type="string", length=180)
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $image;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $description;

    /**
     * @ORM\Column(type="json")
     */
    private $roles = [];

    /**
     * @ORM\ManyToMany(targetEntity=Media::class, inversedBy="users")
     */
    private $medias;

    /**
     * @ORM\ManyToMany(targetEntity=Item::class, inversedBy="users")
     */
    private $items;

    /**
     * @ORM\OneToMany(targetEntity=CommentMedia::class, mappedBy="users")
     */
    private $comment_medias;

    /**
     * @ORM\OneToMany(targetEntity=CommentItem::class, mappedBy="users")
     */
    private $comment_items;

    /**
     * @ORM\OneToMany(targetEntity=Media::class, mappedBy="user")
     */
    private $media;

    /**
     * @ORM\OneToMany(targetEntity=Item::class, mappedBy="user")
     */
    private $item;

    /**
     * @var string The hashed password
     * @ORM\Column(type="string")
     */
    private $password;

    /**
     * @ORM\Column(type="boolean")
     */
    private $charte;

    public function __construct()
    {
        $this->medias = new ArrayCollection();
        $this->items = new ArrayCollection();
        $this->comment_medias = new ArrayCollection();
        $this->comment_items = new ArrayCollection();
        $this->media = new ArrayCollection();
        $this->item = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNickname(): ?string
    {
        return $this->nickname;
    }

    public function setNickname(string $nickname): self
    {
        $this->nickname = $nickname;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

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

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUserIdentifier(): string
    {
        return (string) $this->nickname;
    }

    /**
     * @deprecated since Symfony 5.3, use getUserIdentifier instead
     */
    public function getUsername(): string
    {
        return (string) $this->nickname;
    }

    /**
     * @see UserInterface
     */
    public function getRoles(): array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }

    public function setRoles(array $roles): self
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * @see PasswordAuthenticatedUserInterface
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Returning a salt is only needed, if you are not using a modern
     * hashing algorithm (e.g. bcrypt or sodium) in your security.yaml.
     *
     * @see UserInterface
     */
    public function getSalt(): ?string
    {
        return null;
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials()
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }

    /**
     * @return Collection|Media[]
     */
    public function getMedias(): Collection
    {
        return $this->medias;
    }

    public function addMedia(Media $media): self
    {
        if (!$this->medias->contains($media)) {
            $this->medias[] = $media;
        }

        return $this;
    }

    public function removeMedia(Media $media): self
    {
        $this->medias->removeElement($media);

        return $this;
    }

    /**
     * @return Collection|Item[]
     */
    public function getItems(): Collection
    {
        return $this->items;
    }

    public function addItem(Item $item): self
    {
        if (!$this->items->contains($item)) {
            $this->items[] = $item;
        }

        return $this;
    }

    public function removeItem(Item $item): self
    {
        $this->items->removeElement($item);

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
            $commentMedia->setUsers($this);
        }

        return $this;
    }

    public function removeCommentMedia(CommentMedia $commentMedia): self
    {
        if ($this->comment_medias->removeElement($commentMedia)) {
            // set the owning side to null (unless already changed)
            if ($commentMedia->getUsers() === $this) {
                $commentMedia->setUsers(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|CommentItem[]
     */
    public function getCommentItems(): Collection
    {
        return $this->comment_items;
    }

    public function addCommentItem(CommentItem $commentItem): self
    {
        if (!$this->comment_items->contains($commentItem)) {
            $this->comment_items[] = $commentItem;
            $commentItem->setUsers($this);
        }

        return $this;
    }

    public function removeCommentItem(CommentItem $commentItem): self
    {
        if ($this->comment_items->removeElement($commentItem)) {
            // set the owning side to null (unless already changed)
            if ($commentItem->getUsers() === $this) {
                $commentItem->setUsers(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Media[]
     */
    public function getMedia(): Collection
    {
        return $this->media;
    }

    public function addMedium(Media $medium): self
    {
        if (!$this->media->contains($medium)) {
            $this->media[] = $medium;
            $medium->setUser($this);
        }

        return $this;
    }

    public function removeMedium(Media $medium): self
    {
        if ($this->media->removeElement($medium)) {
            // set the owning side to null (unless already changed)
            if ($medium->getUser() === $this) {
                $medium->setUser(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Item[]
     */
    public function getItem(): Collection
    {
        return $this->item;
    }

    public function getCharte(): ?bool
    {
        return $this->charte;
    }

    public function setCharte(bool $charte): self
    {
        $this->charte = $charte;

        return $this;
    }
}
