<?php

class Movie{


    private $id;
    public $poster;
    public $title;
    public $cast;
    public $genre;
    public static $category='movie';



    public function __construct($_title, $_cast, $_genre, $_poster=null)
    {   $this-> id = rand(0,(10*10));
        $this-> poster = $_poster;
        $this-> title = $_title;
        $this-> cast = $_cast;
        $this-> genre = $_genre;
    }

    public function getId() {

        return $this -> id;
        
    }

    // public function setId($_value) {

    //    $this -> id = $_value;

    // }
    
}

$film1 = new Movie('Back to the future', 'Michael J. Fox', 'sci-fi');

$film2 = new Movie('Back to the future 2', 'Michael J. Fox', 'sci-fi');


?>




<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP OOP</title>

        <!--Google Fonts-->
        

        <!-- FA -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" 
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <!-- Bootstrap -->

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
        
        
    </head>
    
    <body >

        <div>

            <?php

                echo $film1 -> getId();

                foreach($film1 as $key => $value){

                    echo $film1->$key ;
                    echo'<br>';
                    
                }

                echo '<hr>';

            ?>

        </div>

        <div>

            <?php

                echo $film2 -> getId();

                foreach($film2 as $key=>$value){

                    echo $film2->$key;

                    echo'<br>';

                }

            ?>

        </div>

        
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    </body>

</html>