<?php

class Movie {
    
    // Properties
    public $title;
    public $year;
    public $director;
    public $genre;
    public $main_actor;
    public $supporting_actor;
    public $budget;
    public $revenue;
    
    // Constructor
    public function __construct ($_title, $_year, $_director, $_genre, $_main_actor, $_supporting_actor, $_budget, $_revenue) {
        $this -> title = $_title;
        $this -> year = $_year;
        $this -> director = $_director;
        $this -> genre = $_genre;
        $this -> main_actor = $_main_actor;
        $this -> supporting_actor = $_supporting_actor;
        $this -> budget = $_budget;
        $this -> revenue = $_revenue;
    }
    
    // Methods
    public function calcProfit() {
        return $this -> revenue - $this -> budget;
    }
    
    public function show() {
        echo "<br>Title: {$this->title}";
        echo "<br>Year: {$this->year}";
        echo "<br>Director: {$this->director}";
        echo "<br>Genre: {$this->genre}";
        echo "<br>Main Act: {$this->main_actor}";
        echo "<br>Supporti: {$this->supporting_actor}";
        echo "<br>Budget: {$this->budget}";
        echo "<br>Revenue: {$this->revenue}";
        echo "<br>Profit: {$this->calcProfit()}";
        echo "<br>";
    }
    
}

$movie1 = new Movie ("The Lord of Rings", "1984", "Jonathan Colpepper", "Fantasy", "Pippo Franco", "Leo Gullotta", 15030544, 98246500);
$movie2 = new Movie ("The Lord of Rings II", "1985", "Mary Johnson", "Fantasy", "Pippo Franco", "Leo Gullotta", 54000000, 450000000);

$movie1 -> show();
$movie2 -> show();