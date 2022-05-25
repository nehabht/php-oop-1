<?php

class Movie {

    public $title;
    public $year;
    public $rating;
    public $image;


    function __construct($title, $rating, $year, $image){

        $this->title = $title;
        $this->year = $year;
        $this->image = $image;
        $this->rating = $rating;

    }


    public function recommend()
    {
        if($this->rating >= 8)
        {   
            return "Recommended";
        } else {
            return "Not bad";
        }
    }


};


$movies = [

    new Movie ('La Fantastica Signora Maisel - Stagione 4', 9, '2022', 'https://n7m3z4b2.stackpathcdn.com/wp-content/uploads/2022/02/La-fantastica-signora-Maisel-4-Poster.webp'),
    new Movie ('La leggenda di Vox Machina - Stagione 1', 7, '2022', 'https://sm.ign.com/ign_it/tv/t/the-legend/the-legend-of-vox-machina_w1bt.jpg'),
    new Movie ('The Expanse - Stagione 6', 8, '2022', 'https://tv-fanatic-res.cloudinary.com/iu/s--xIVP1Vbv--/c_scale,f_auto,h_1078,q_auto,w_696/v1564260220/the-expanse-season-4-poster'),

];


//  è definita una classe ‘Movie’
// => all'interno della classe sono dichiarate delle variabili d'istanza
// => all'interno della classe è definito un costruttore
// => all'interno della classe è definito almeno un metodo
//  vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà