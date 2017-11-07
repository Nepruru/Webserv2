<?php

class Movie 
{
    private $name = null;
    private $description = "une description";
    private $time = 120;
    private $releas = '21.12.2010';

    public function __construct($name = "", $description = "", $time ="", $release = "")
    {
        $this->name = $name;
        $this->description = $description;
        $this->time = $time;
        $this->release = $release;
    }

    public function getName()
    {
        return $this->name;
    }
    
    public function setName($name = "")
    {
        $this->name = $name;
    }
    
    
    public function getDesciption()
    {
        return $this->description;
    }
    
    public function setdescription($description = "")
    {
        $this->description = $description;
    }
 
      public function getTime()
    {
        return $this->time;
    }
    
    public function setTime($time = 120)
    {
        $this->time = $time;
    }

    
    function afficher()
    {
        print 'The movie is ' .$this->name.' it is ' .$this->description. ' release the ' .$this->releaseDate. ' and the fun is here for ' .$this->time ;
        
    }
    function ShowTitle()
    {
        print $this->name;
    }

}

$movie = new Movie("MegaShark","cool","120","21.10.2010");
$movie->ShowTitle;
