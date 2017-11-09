<?php

class Movie
{
    private $name = null;
    private $date = 'Date of the movie';
    private $description = 'Description of the movie';
    private $duration = 'Duration of the movie';
    
    public function __construct($name = "",$date = "", $description = "", $duration = "")
    {
        $this -> name = $name;
        $this -> date = $date;
        $this -> description = $description;
        $this -> duration = $duration;
    }
    
    public function getName()
    {
        return $this -> name;
    }
    
    public function setName($name = "")
    {
        $this -> name = $name;
    }
    
    public function getDate()
    {
        return $this -> date;
    }
    
    public function setDate($date = "")
    {
        $this -> date = $date;
    }
    
    public function getDescription()
    {
        return $this -> description;
    }
    
    public function setDescription($description = "")
    {
        $this -> description = $description;
    }
    
    public function getDuration()
    {
        return $this -> duration;
    }
    
    public function setDuration($duration = "")
    {
        $this -> duration = $duration;
    }
    
    public function affiche()
    {
        print "Nom : ".$this -> name."\nDate : ".$this -> date."\nDescription : ".$this -> description."\nDuration : ".$this -> duration."\n";
    }
}

$film = new Movie;
$film -> setName("Furassic Fark");
$film -> setDate("1/1/2000");
$film -> setDescription("Dinosaur");
$film -> setDuration("Over 9000");
$film -> affiche();

$filmTest = new Movie("Bonjour", "Au moins ça", "Politesse", "Test");
$filmTest -> affiche();

