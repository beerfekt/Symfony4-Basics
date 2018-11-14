<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ArticleRepository")
 */
class Article
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;


//STEP 2: create custom fields here:

    /*With @ annotation - there will be fields in db-table created*/
    /*varchar with 100 chars*/

    /**
     * @ORM\Column(type="text", length=100)
     */
    private $title;


    /**
     * @ORM\Column(type="text")
     */
    private $body;


//STEP3 : Migrations: Creating the Database Tables/Schema php file which contains sql commands
// run in terminal:
//     php bin/console doctrine:migrations:diff


//STEP4 : Migrate
// To run that SQL, execute your migrations :
//     php bin/console doctrine:migrations:migrate



//STEP5 : Write down below getters/setters (Playn php)


    public function getId()
    {
        return $this->id;
    }


    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function getTitle()
    {
        return $this->title;
    }



    public function setBody($body)
    {
        $this->body = $body;
    }

    public function getBody()
    {
        return $this->body;
    }


}
