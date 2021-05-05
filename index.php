<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>php-google-faq</title>
  </head>
  <body>
    <style>

      body {
        
      }

      header, main {
        color: white;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
      }

    </style>

    <!-- <section>
      <h2>
        <?php
        // Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare "Accesso riuscito", altrimenti "Accesso negato"
        echo $_GET["name"];
        echo $_GET["email"];
        echo $_GET["age"];

        echo "<br>";

        $name = $_GET["name"];
        $email = $_GET["email"];
        $age = $_GET["age"];

        $findDot = ".";
        $findAt = "@";
        $searchDot = strpos($email, $findDot);
        $searchAt = strpos($email, $findAt);

        if( (strlen($name) > 3) && ( ($searchDot !== false) && ($searchAt !== false) ) && (is_numeric($age) == true ) ) {
          echo "Accesso riuscito";
        } else {
          echo "Accesso negato";
        }

        // Danny lollallero@gmail.com 33
        ?>
      </h2>

      <h3>
      <?php
        // Creare un array di array.
        // Ogni array ﬁglio avrà come chiave una data in questo formato: DD/MM/YYYY
        // (ad es 31/01/2007) e come valore un array di post associati a quella data.
        // Stampare ogni data con i relativi post.
        // Qui l'array di esempio:

        $posts = [

          '10/01/2019' => [

            [
              'title' => 'Post 1',
              'author' => 'Michele Papagni',
              'text' => 'La simpatia è il mio forte'
            ],
            [
              'title' => 'Post 2',
              'author' => 'Caio Giuslio Cesare',
              'text' => 'VENI VIDI VICI'
            ],

          ], // END OF 10/01/2019

          '10/02/2019' => [

            [
              'title' => 'Post 3',
              'author' => 'Annibale Barca',
              'text' => 'I love salt'
            ]

          ], // END OF 10/02/2019

          '15/05/2019' => [

            [
              'title' => 'Post 4',
              'author' => 'Ottaviano Augusto',
              'text' => 'lallero'
            ],
            [
              'title' => 'Post 5',
              'author' => 'CHiara ferragni',
              'text' => '...'
            ],
            [
              'title' => 'Post 6',
              'author' => 'Totonnu ù Squalu',
              'text' => 'Mangiaci cù sà vucca'
              ]

          ],   // END OF 15/05/2019

        ];   // END OF POSTS

        foreach ($posts as $date => $datePosts) {
          echo $date;
          foreach ($datePosts as $post ) {
            echo " <br> " . $post["title"] . " - Autore: " . $post["author"] . " - testo: " . $post["text"] . "<br>";
          }
          echo "<br>";
        }
      ?>
      </h3>

      <h3>
        <?php
          // Creare un array contenente qualche alunno di un'ipotetica classe. Ogni alunno
          // avrà Nome, Cognome e un array contenente i suoi voti scolastici.
          // Stampare Nome, Cognome e la media dei voti di ogni alunno.

          $school = [

            "Student 1" => [

              [
                "name" => "Ennio",
                "lastname" => "Annio",
                "grades" => [2, 2, 2, 2, 2]
              ]

            ], // END OF ALUNNO 1

            "Student 2" => [

              [
                "name" => "Fabbio",
                "lastname" => "Di Ninno",
                "grades" => [3, 3, 3 ,3, 3]
              ]

            ], // END OF ALUNNO 2

            "Student 3" => [

              [
                "name" => "Maccio",
                "lastname" => "Capatonda",
                "grades" => [4, 4, 4, 4, 4]
              ]
            ]   // END OF ALUNNO 3

          ];   // END OF $school

          // FIRST FOREACH EXTRACTS THE KEY (alunno 1- alunno 2 - alunno 3)
          foreach ($school as $key => $value) {
            echo $key . ": " . "<br>";

            // SECOND FOREACH EXTRACTS THE VALUE OF EACH KEY
            foreach ($value as $details) {

              $grades = $details["grades"];
              $average = 0;

              // THIRD FOREACH EXTRACTS THE GRADES FOR EACH PUPIL
              foreach ($grades as $grade) {
                $average += $grade;
              }

              $average /= count($grades);

              echo $details["name"] . " " . $details["lastname"] . " - Average grade: ". round($average) . "<br>" ;
              echo "<br>";
            }

          }

          ?>
          </h3>
    </section> -->


  </body>

</html>
