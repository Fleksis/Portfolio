<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "portfolio";

$conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="static/css/style.css">
  <link rel="stylesheet" href="static/css/fonts.css">
  <link rel="shortcut icon" href="static/images/profilePicTransperecy.gif">
  <title>Markuss Mišins</title>
</head>
<body>
<div class="container">
  <div id="pages">
    <div id="one" class="page">
      <div id="navigation">
        <div class="navigation-title">
          <span title="Wannabe junior fullstack developer">Markuss Misins</span>
        </div>
        <div class="navigation-buttons">
          <a onclick="currentPage = '#two'" href="#two">Par mani</a>
          <a onclick="currentPage = '#three'" href="#three">Valodas un rīki</a>
          <a href="#four">Mani projekti</a>
          <a href="#five">Kontaktinformācija</a>
        </div>
      </div>
      <div class="navigation-contact-information">
        <div>
          <img src="static/svg/Discord.svg" alt="discord">
          <span class="text-first-child">Discord</span>
          <span class="text-last-child">Copy</span>
        </div>
        <div onclick="window.open('https://steamcommunity.com/id/mrlatvian/', '_blank')">
          <img src="static/svg/Steam.svg" alt="steam">
          <span class="text-first-child">Steam</span>
          <span class="text-last-child">Link</span>
        </div>
        <div onclick="copyEmail()">
          <img src="static/svg/Gmail.svg" alt="gmail">
          <span class="text-first-child">Gmail</span>
          <span class="text-last-child">Copy</span>
        </div>
      </div>
    </div>
    <div id="two" class="page">
      <div class="about-me-title">
        <div>
          <span>Par mani</span>
        </div>
      </div>
      <div class="about-me-description">
        <p>
          Mani sauc Markuss Mišins, esmu <span id="old"></span> gadus vecs, aktīvi nodarbojos ar <span>Web programmēšanu</span> jau <span id="howLong"></span>.
          <br><br>
          Mana programmēšanas karjera sākās ar programmēšanas valodu <span>Python</span>, bet ātri vien pārgāju uz <span>C</span> valodām.
          Tad pēc kāda laika izdomāju sākt aktīvi mācīties web programmēšanu, lai spētu taisīt pilnvērtīgus <span>Full-stack</span> projektus.
          <br><br>
          Pašlaik apgūstu <span>Laravel</span> ar <span>PHP</span>, kā arī <span>VueJS</span> ar <span>JavaScript</span>,
          un esmu motivēts turpmāk mācīties un apgūt industrijas valodas un rīkus.
        </p>
      </div>
    </div>
    <div id="three" class="page">
      <div class="exp-container">
        <div class="exp-title">
          <div>
            <span>Valodas un riki</span>
            <span>Fullstack developer</span>
            <span>Laravel developer</span>
            <span>VueJS developer</span>
          </div>
        </div>
        <div class="exp-description">
          <p>
            Rakstu uz <span>JavaScript</span> un <span>PHP</span>,
            lai taisītu fullstack projektus, bet lai efektīvak veidotu projektus, tiek izmantoti frameworks - <span>"VueJS"</span> un <span>"Laravel"</span>.
          </p>
        </div>
      </div>
      <div class="exp">
        <div class="exp-column-1">
          <div>
            <div class="tool-image">
              <img src="static/svg/PHP.svg" alt="PHP">
            </div>
            <div class="tool-description">
              <h2>PHP</h2>
              <p>Pieredze <span id="php-exp"></span></p>
            </div>
          </div>
          <div>
            <div class="tool-image">
                <img src="static/svg/JavaScript.svg" alt="JS">
            </div>
            <div class="tool-description">
              <h2>JavaScript</h2>
              <p>Pieredze <span id="js-exp" onload="getExpLength('2021, 4, 3', 'js-exp')"></span></p>
            </div>
          </div>
          <div>
            <div class="tool-image">
              <img src="static/svg/Html.svg" alt="HTML">
            </div>
            <div class="tool-description">
              <h2>HTML</h2>
              <p>Pieredze <span id="html-exp"></span></p>
            </div>
          </div>
          <div>
            <div class="tool-image">
              <img src="static/svg/Git.svg" alt="HTML">
            </div>
            <div class="tool-description">
              <h2>Git</h2>
              <p>Pieredze <span id="git-exp"></span></p>
            </div>
          </div>
          <div>
            <div class="tool-image">
              <img src="static/svg/PostgreSQL.svg" alt="HTML">
            </div>
            <div class="tool-description">
              <h2>PostgreSQL</h2>
              <p>Pieredze <span id="postgresql-exp"></span></p>
            </div>
          </div>
        </div>
        <div class="exp-column-2">
          <div>
            <div class="tool-image">
              <img src="static/svg/Laravel.svg" alt="Laravl">
            </div>
            <div class="tool-description">
              <h2>Laravel</h2>
              <p>Pieredze <span id="laravel-exp"></span></p>
            </div>
          </div>
          <div>
            <div class="tool-image">
              <img src="static/svg/VueJS.svg" alt="VueJS">
            </div>
            <div class="tool-description">
              <h2>VueJS</h2>
              <p>Pieredze <span id="vue-exp"></span></p>
            </div>
          </div>
          <div>
            <div class="tool-image">
              <img src="static/svg/Css.svg" alt="CSS">
            </div>
            <div class="tool-description">
              <h2>CSS</h2>
              <p>Pieredze <span id="css-exp"></span></p>
            </div>
          </div>
          <div>
            <div class="tool-image">
              <div>
                <img src="static/images/Linux.png" alt="CSS">
              </div>
            </div>
            <div class="tool-description">
              <h2>Linux</h2>
              <p>Pieredze <span id="linux-exp"></span></p>
            </div>
          </div>
          <div>
            <div class="tool-image">
              <img src="static/images/MySQL.png" alt="CSS">
            </div>
            <div class="tool-description">
              <h2>MySQL</h2>
              <p>Pieredze <span id="mysql-exp"></span></p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div id="four" class="page">
      <div>
        <h1>fhjfkfhsdjl</h1>
      </div>
    </div>
    <div id="five" class="page">
      <div>
        <h1>Sazinies ar mani</h1>
        <form method="POST">
          <?php
          if (isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['email']) && isset($_POST['description'])) {
              $firstname = $_POST['firstname'];
              $lastname = $_POST['lastname'];
              $email = $_POST['email'];
              $description = $_POST['description'];

              $sqlSave = "INSERT INTO messages (firstname, lastname, email, description) VALUES ('$firstname', '$lastname', '$email', '$description')";
              $conn->exec($sqlSave);

              header("Location: ".$_SERVER['REQUEST_URI']);
          }
          ?>
          <div>
            <label class="input-container">
              <p>Vārds</p>
              <input placeholder="Ievadiet vārdu" name="firstname">
            </label>
            <label class="input-container">
              <p>Uzvārds</p>
              <input placeholder="Ievadiet uzvārdu" name="lastname">
            </label>
          </div>
          <label class="input-container">
            <p>E-pasts</p>
            <input placeholder="Ievadiet epastu" name="email">
          </label>
          <label class="input-container">
            <p>Apraksts</p>
            <textarea placeholder="Ievadiet aprakstu" name="description"></textarea>
          </label>
          <button>Sūtīt!</button>
        </form>
        <div class="navigation-contact-information">
          <div>
            <img src="static/svg/Discord.svg" alt="discord">
            <span class="text-first-child">Discord</span>
            <span class="text-last-child">Copy</span>
          </div>
          <div onclick="window.open('https://steamcommunity.com/id/mrlatvian/', '_blank')">
            <img src="static/svg/Steam.svg" alt="steam">
            <span class="text-first-child">Steam</span>
            <span class="text-last-child">Link</span>
          </div>
          <div onclick="copyEmail()">
            <img src="static/svg/Gmail.svg" alt="gmail">
            <span class="text-first-child">Gmail</span>
            <span class="text-last-child">Copy</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</body>
<script src="Main.js"></script>
</html>
