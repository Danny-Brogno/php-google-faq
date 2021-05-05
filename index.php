<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@1,300&display=swap" rel="stylesheet">
    <title>php-google-faq</title>
  </head>
  <body>
    <style>

      * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
      }

      body {
        font-family: Roboto, arial, sans-serif;
      }

      a {
        text-decoration: none;
      }

      ol li {
        margin: 20px 0px 20px 25px;
      }

      ul li {
        margin-left: 40px;
      }

      ul {
        list-style-type: lower-alpha;
      }

      main {
        display: flex;
        justify-content: center;
        flex-direction: column;
        width: 60%;
        margin: 0 auto;
      }

      .question {
        text-align: left;
        font-size: 30px;
        margin: 40px 0px 20px 0px;
      }

      .answer {
        text-align: left;
        margin-bottom: 30px;
        font-size: 18px;
        line-height: 150%;
      }

      .blue {
        color: royalblue;
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

          // START OF FIRST PARAGRAPH
          [
            "question" => "<h2 class='question'>How are you implementing the recent Court of Justice of the European Union (CJEU) decision on the right to be forgotten?</h2>",
            "answers" =>

              [
                  "<div class='answer'>The recent <a class='blue' href='#'> ruling by the Court of Justice of the European Union</a> has profound consequences for search engines in Europe. The court found that certain users have the right to ask search engines like Google to remove results for queries that include the person's name. To qualify, the results shown would need to be inadequate, irrelevant, no longer relevant, or excessive.</div>",

                  "<div class='answer'>Since this ruling was published on 13 May 2014, we've been working around the clock to comply. This is a complicated process because we need to assess each individual request and balance the rights of the individual to control his or her personal data with the public's right to know and distribute information.</div>",

                  "<div class='answer'>If you have a removal request, please fill out this <a class='blue' href='#'> web form</a>. You'll receive an automatic reply confirming that we have received your request. We will then assess your case – please note that this may take some time because we have already received many such requests. In evaluating your request, we will look at whether the results include outdated information about your private life. We'll also look at whether there's a public interest in the information remaining in our search results – for example, if it relates to financial scams, professional malpractice, criminal convictions or your public conduct as a government official (elected or unelected). These are difficult judgements and as a private organisation, we may not be in a good position to decide on your case. If you disagree with our decision you can contact your local DPA.</div>",

                  "<div class='answer'>We look forward to working closely with data protection authorities and others over the coming months as we refine our approach. The CJEU's ruling constitutes a significant change for search engines. While we are concerned about its impact, we also believe that it's important to respect the Court's judgement and we are working hard to devise a process that complies with the law.</div>",

                  "<div class='answer'>When you search for a name, you may see a notice that says that results may have been modified in accordance with data protection law in Europe. We’re showing this notice in Europe when a user searches for most names, not just pages that have been affected by a removal.</div>"
              ]

          ],   // END OF FIRST PARAGRAPH

          // START OF SECOND PARAGRAPH
          [
            "question" => "<h2 class='question'>How does Google protect my privacy and keep my information secure?</h2>",
            "answers" =>
              [
                  "<div class='answer'>We know that security and privacy are important to you - and they are important to us, too. We make it a priority to provide strong security and give you confidence that your information is safe and accessible when you need it.</div>",

                  "<div class='answer'>We’re constantly working to ensure strong security, protect your privacy and make Google even more effective and efficient for you. We spend hundreds of millions of dollars every year on security, and employ world-renowned experts in data security to keep your information safe. We've also built easy-to-use privacy and security tools like Google Dashboard, 2-step verification and Ads Settings. So when it comes to the information you share with Google, you’re in control.</div>",

                  "<div class='answer'>You can find out more about safety and security online, including how to protect yourself and your family online, at the <a class='blue' href='#'>Google Safety Centre</a>.</div>",

                  "<div class='answer'><a class='blue' href='#'>Find out more</a> about how we keep your personal information private and safe – and put you in control.</div>"
              ]

          ],  // END OF SECOND PARAGRAPH

          // START OF THIRD PARAGRAPH
          [
            "question" => "<h2 class='question'>Why is my account associated with a country?</h2>",
            "answers" =>
              [
                  "<div class='answer'>Your account is associated with a country (or territory) in the Terms of Service so that we can determine two things:</div>",

                  "<div class='answer'><ol><li>The Google affiliate that provides the services, that processes your information, and that is responsible for complying with applicable privacy laws. Generally, Google offers its consumer services through either of two companies:<ul><li>Google Ireland Limited, if you’re located in the European Economic Area (EU countries plus Iceland, Liechtenstein, and Norway) or Switzerland</li><li>Google LLC, based in the United States, for the rest of the world</li></ul></li><li>The version of the terms that govern our relationship, which can vary depending on local laws</li></ol></div>",

                  "<div class='answer'>Keep in mind that Google services are essentially the same, regardless of the affiliate that provides the services or your country association..</div>"
              ]

          ],  // END OF THIRD PARAGRAPH

          // START OF FOURTH PARAGRAPH
          [
            "question" => "<h2 class='question'>Determining the country associated with your account</h2>",
            "answers" =>
              [
                  "<div class='answer'>When you create a new account, we associate your account with a country based on where you created your Google Account. For accounts at least a year old, we use the country from which you usually access Google services – typically where you’ve spent the most time in the last year.</div>",

                  "<div class='answer'>Frequent travel doesn’t generally affect the country associated with your account. If you move to a new country, it can take about a year for your country association to update.</div>",

                  "<div class='answer'>If the country associated with your account doesn’t correspond to your country of residence, it could be because of a difference between your country of work and residence, because you’ve installed a Virtual Private Network (VPN) to mask your IP address, or because you live close to a territorial border. Contact us if you think that your country association is wrong.</div>"

              ]

          ],  // END OF FOURTH PARAGRAPH

          // START OF FIFTH PARAGRAPH
          [
            "question" => "<h2 class='question'>How can I remove information about myself from Google’s search results?</h2>",
            "answers" =>
              [
                  "<div class='answer'>Google search results are a reflection of the content publicly available on the web. Search engines can't remove content directly from websites, so removing search results from Google wouldn't remove the content from the web. If you want to remove something from the web, you should <a class='blue' href='#'> contact the webmaster </a> of the site the content is posted on and ask him or her to make a change. Additionally, if under European data protection law, you would like to request removal of certain information about you that appears in Google's search results, <a class='blue' href='#'> please click here</a>. Once the content has been removed and Google has noted the update, the information will no longer appear in Google's search results. If you have an urgent removal request, you can also <a class='blue' href='#'> visit our help page for more information</a>.</div>"

              ]

          ],  // END OF FIFTH PARAGRAPH

          // START OF SIXTH PARAGRAPH
          [
            "question" => "<h2 class='question'>Are my search queries sent to websites when I click on Google Search results?</h2>",
            "answers" =>
              [
                  "<div class='answer'>In some cases, yes. When you click on a search result in Google Search, your web browser may also send the Internet address, or URL, of the search results page to the destination web page as the <a class='blue' href='#'> Referrer URL</a>. The URL of the search results page may sometimes contain the search query that you entered. If you are using SSL Search (Google’s encrypted search functionality), under most circumstances, your search terms will not be sent as part of the URL in the Referrer URL. There are some exceptions to this behaviour, such as if you are using some less popular browsers. More information on SSL Search can be found <a class='blue' href='#'> here</a>. Search queries or information contained in the Referrer URL may be available via Google Analytics or an application programming interface (API). In addition, advertisers may receive information relating to the exact keywords that triggered an ad click.</div>"

              ]

          ]  // END OF SIXTH PARAGRAPH

        ]; // END OF $googleDatabase

          foreach ($googleDatabase as $content) {

            echo $content["question"];

            foreach ($content["answers"] as $answer ) {
              echo $answer;
            }

          } // END OF FIRST FOREACH

        ?>
    </main>

  </body>


</html>
