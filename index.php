<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>php-google-faq</title>
  </head>
  <body>
    <style>

      * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
      }

      li {
        list-style: none;
      }

      a {
        text-decoration: none;
      }

      header, main {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        color: black;
      }

      .test {
        color: blue;
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

    <main>
      <?php
        // GOAL: riscrivere questa pagina del sito google
        // Ci sono diverse domande con relative risposte.
        // Gestire il "Database" e la visualizzazione di
        // queste domande e risposte con PHP.

        $googleDatabase = [

          [
            "question" => "<h2>" . 'How are you implementing the recent Court of Justice of the European Union (CJEU) decision on the right to be forgotten?' . "</h2>",
            "answers" =>
              [
                  "The recent ruling by the Court of Justice of the European Union has profound consequences for <span class='test'> search </span> engines in Europe. The court found that certain users have the right to ask search engines like Google to remove results for queries that include the person's name. To qualify, the results shown would need to be inadequate, irrelevant, no longer relevant, or excessive.",
                  "Since this ruling was published on 13 May 2014, we've been working around the clock to comply. This is a complicated process because we need to assess each individual request and balance the rights of the individual to control his or her personal data with the public's right to know and distribute information.",
                  "If you have a removal request, please fill out this web form. You'll receive an automatic reply confirming that we have received your request. We will then assess your case – please note that this may take some time because we have already received many such requests. In evaluating your request, we will look at whether the results include outdated information about your private life. We'll also look at whether there's a public interest in the information remaining in our search results – for example, if it relates to financial scams, professional malpractice, criminal convictions or your public conduct as a government official (elected or unelected). These are difficult judgements and as a private organisation, we may not be in a good position to decide on your case. If you disagree with our decision you can contact your local DPA",
                  "We look forward to working closely with data protection authorities and others over the coming months as we refine our approach. The CJEU's ruling constitutes a significant change for search engines. While we are concerned about its impact, we also believe that it's important to respect the Court's judgement and we are working hard to devise a process that complies with the law.",
                  "When you search for a name, you may see a notice that says that results may have been modified in accordance with data protection law in Europe. We’re showing this notice in Europe when a user searches for most names, not just pages that have been affected by a removal."
              ]

          ]   // END OF FIRST PARAGRAPH

        ]; // END OF $googleDatabase

          foreach ($googleDatabase as $content) {
            echo $content["question"];
            foreach ($content as $answer ) {
              echo $answer[0];
            }
          }

          // foreach ($posts as $date => $datePosts) {
          //   echo $date;
          //   foreach ($datePosts as $post ) {
          //     echo " <br> " . $post["title"] . " - Autore: " . $post["author"] . " - testo: " . $post["text"] . "<br>";
          //   }
          //   echo "<br>";
          // }
        ?>
    </main>

  </body>

</html>
