<?php
require_once "Models/Movie.php";

$movies = array(
    new Movie("Toy Story", ["Adventure", "Animation", "Comedy", "Fantasy"], "1995"),
    new Movie("Toy Story 2", ["Adventure", "Animation", "Comedy", "Fantasy"], "1999"),
    new Movie("Toy Story 3", ["Adventure", "Animation", "Comedy", "Fantasy"], "2010"),
    new Movie("Toy Story 4", ["Adventure", "Animation", "Comedy", "Fantasy"], "2019"),
)
?>