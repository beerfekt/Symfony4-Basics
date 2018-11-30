<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UserRepository")
 */
class User implements UserInterface
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $username;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $password;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $email;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Rolle", inversedBy="users")
     */
    private $roles;

    public function __construct()
    {
        $this->roles = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUsername(): ?string
    {
        return $this->username;
    }

    public function setUsername(string $username): self
    {
        $this->username = $username;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

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

    //  @return Collection|Rolle[]

    /**
     * @return (Role|string)[]
     */
    public function getRoles():array
    {

        //TODO: collection Frimmelei noch dokumentieren!
        $collection = $this->roles;
        $array = $collection->toArray();
        $anzahlRollen = sizeof($array);
        dump($array);

        $rolesAsStrings = array($anzahlRollen);

        for ($i = 0; $i < $anzahlRollen; $i++)
        {
            $rolesAsStrings[$i] = $array[$i]->getBezeichnung();
        }

        return $rolesAsStrings;
    }

    public function addRoles(Rolle $rolle): self
    {
        if (!$this->roles->contains($rolle)) {
            $this->roles[] = $rolle;
        }

        return $this;
    }

    public function removeRoles(Rolle $rolle): self
    {
        if ($this->roles->contains($rolle)) {
            $this->roles->removeElement($rolle);
        }
        return $this;
    }


    public function getSalt(){}

    public function eraseCredentials(){}

}
