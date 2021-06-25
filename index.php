<!-- 
Oggi pomeriggio ripassate i primi concetti di classe e di variabili e metodi d'istanza che abbiamo visto stamattina e create un file index.php in cui:
- è definita una classe ‘Movie’
=> all'interno della classe sono dichiarate delle variabili d'istanza
=> all'interno della classe è definito un costruttore
=> all'interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà
 -->

 <?php
 /* Defnisco classe Movie con 4 variabili di istanza */
 class Movie{
     public $title;
     public $year;
     public $director;
     public $rating = 'N/D';

     /* Definisco un costruttore per assegnare valori alle variabili*/
    function __construct(string $title, int $year, string $director){
        $this->title = $title;
        $this->year = $year;
        $this->director = $director;
    }
    /* Definisco un metodo per dare alla variabile $rating un valore random tra 1 e 10 */
    public function setRating(int $rating){
        $this->rating = $rating;
    }
 }
 
 /* Genere quattro istanze usando il costruttore */

 $movies = [
     new Movie('Ghost in the Shell', 1995, 'Mamoru Oshii'),
     new Movie('Akira', 1988, 'Katsuhiro Otomo'),
     new Movie('Blade Runner', 1982, 'Ridley Scott'),
     new Movie('eXistenZ', 1999, 'David Cronenberg')
 ]
 ;

$movies[1]->setRating(rand(1,10));
?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>PHP-OOP-1</title>
     <style>
        body{
            text-align: center;
        }

        main{
            display: flex;
            justify-content: center;
        }

        main div{
            margin: 1rem;
        }
     </style>
 </head>
 <body>
     <h1>Cyberpunk Movies</h1>

    <main>
     <?php foreach ($movies as $movie) : ?>
        
        <?= $movie->setRating(rand(1,10));  ?>
        <div>
        <h2><?= $movie->title; ?></h2>
        <div><?= $movie->year; ?></div>
        <strong><?= $movie->director; ?></strong>
        <div><?= $movie->rating; ?></div>
        </div>

     <?php endforeach; ?>
    </main>
 </body>
 </html>