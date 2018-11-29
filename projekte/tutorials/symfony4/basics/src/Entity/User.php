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


    /**
     * @ORM\Column(type="string", length=30, unique=true)
     */



    /**
     * @ORM\Column(type="json")
     */
    private $roles = [];


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

    //Role
    //wichtig -> nur zur ausgabe

    public function getRole(int $i) : string
    {
        return substr($this->roles[$i],5);
    }

    //Role
    //User Interface implementation:
    //Funktion wichtig für Login!

    public function getRoles() :array
    {
        return $this->roles;
    }


    public function setRoles(array $newRoles = ['ROLE_USER']) :void
    {
            $this->roles = $newRoles;  // [] == array()
    }


    //TODO: Testing addRole
    public function addRole(string $newRole ='ROLE_USER') :void
    {

        $sizeOfRoles = sizeof($this->roles);
        $newSize = $sizeOfRoles+1;

        if ( $sizeOfRoles == 0 ) {
            $this->roles[0] = $newRole;
        } else {
            //Neuen Array der einen weiteren freien slot hat erstellen
            $newRoles = array($newSize);

            //Diesen mit altem befüllen
            for ($i=0; $i< $sizeOfRoles; $i++)
            {
                $newRoles[$i] = $this->roles[$i];
            }

            //die letzte Stelle mit der neuen Rolle befüllen
            $newRoles[$newSize-1] = $newRole;

            //neuen Array in User abspeichern
            $this->roles = $newRoles;
        }

    }

    public function getSalt(){}

    public function eraseCredentials(){}


    //TODO: serialize wird irgendwie nicht benötigt, ist aber teil des Tutorials? kein fehler? checken!

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
