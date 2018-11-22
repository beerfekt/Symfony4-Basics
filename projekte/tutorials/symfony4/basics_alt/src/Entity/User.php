<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;


//Security Settings are in :
//     projekte/.. ../basics/config/packages/security.yaml


/**
 * @ORM\Entity(repositoryClass="App\Repository\UserRepository")
 */
class User implements UserInterface /* , \Serializable  */
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=50, unique=true)
     */
    private $username;

    /**
     * @ORM\Column(type="string", length=200, unique=true)
     */
    private $password;

    /**
     * @ORM\Column(type="string", length=50, unique=true)
     */
    private $email;





    //Getters and Setters

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


    //User Interface implementation:

    public function getRoles() :array
    {
        return [
            'ROLE_USER'
        ];
    }



    public function getSalt(){}

    public function eraseCredentials(){

    }

    //serialize wird irgendwie nicht benötigt? kein fehler? checken!

    /*

    public function serialize()
    {
        return serialize(
            [ $this->id,
              $this->username,
              $this->email,
              $this->password  ]
        );
    }


    public function unserialize()
    {
        list (
             $this->id,
             $this->username,
             $this->email,
             $this->password
        ) = $this->unserialize($string, ['allowed_classes' => false]);
    }

       */

}
