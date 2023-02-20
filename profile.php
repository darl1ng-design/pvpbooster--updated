<?php
require 'profile-authentication.php';
?>

<!DOCTYPE html>
            <html lang="en">
            <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <meta name="author" content = "darl1ng#9549">
            <meta name ="keywords" content = "minecraft, pvp, clicker, pvp booster, 
            scripts, minecraft scripts, minecraft cheats, hacki minecraft, minecraft skrypty, 
            minecraft pvp skrypty, minecraft pvp scripts, minecraft mining scripts, minecraft kopacz, 
            mining scripts, anti kick scripts, minecraft anti kick, blazingpack, kopanie w tle, obejscie, discord, fake lag, 
            obejscie bp, badlion, lunar, client">
            <title>pvpbooster</title>
            <link rel="stylesheet" href="css/kupa.css?v=<?php echo time(); ?>">
            <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
            <script src="https://kit.fontawesome.com/0d84a0dd17.js" crossorigin="anonymous"></script>
            </head>
            <body>

            <section class = 'wrapper'>
            
            <header>
            <div class = 'logo'>pvp<span>booster</span></div>

            <div class = 'burger' id = 'burger'>
            <span class="burger-el"></span>
            <span class="burger-el"></span>
            <span class="burger-el"></span>
            </div>

            <nav id = 'main-nav'> 
            <ul class="navigation-bar">
            <li><?php   echo '<a href = "index-logged.php"> Strona główna </a>'; ?></li>
            <li><?php   echo '<a href = "index-logged.php"> Funkcjonalności </a>'; ?></li>
            <li><?php   echo '<a href = "index-logged.php"> Społeczność </a>'; ?></li>
            <li><?php   echo '<a class = "profile" href = "profile.php">Profil </a>'; ?></li>
            <li><?php   echo '<a class = "logout" href = "logout.php"> Wyloguj się </a>'; ?></li>
            </ul>
            </nav>
            </header>   

            <div id="overlay"></div>

            <div class="wrapper-grid-main-element" id="home">
           
            <div class="gowno">
            <h1><?php echo "Cześć,  " . $_SESSION['username']; ?></h1>
            <p style="font-size:15px;">Tutaj możesz zedytować swoje informacje</p>
            <div class = 'form-container'>
            <?php
            if(isset($_GET['mode'])){
              if($_GET['mode'] == 'changed'){
                echo '<div style="color:green; font-weight:bold; margin-bottom:1rem;">Hasło zostało zmienione.</div>';
              }
              elseif($_GET['mode'] == 'short'){
                echo '<div style="color:red; font-weight:bold; margin-bottom:1rem;">Podane hasła są zbyt krótkie.</div>';
              }
              elseif($_GET['mode'] == 'whitespace'){
                echo '<div style="color:red; font-weight:bold; margin-bottom:1rem;">Podane hasła nie mogą zawierać spacji!</div>';
              }
              elseif($_GET['mode'] == 'nomatch'){
                echo '<div style="color:red; font-weight:bold; margin-bottom:1rem;">Podane hasła się nie zgadzają.</div>';
              }
              elseif($_GET['mode'] == 'niegit'){
                echo '<div style="color:red; font-weight:bold; margin-bottom:1rem;">Stare hasło musi być takie samo. </div>';
              }
            }
            ?>
            <form action='change.php' method="POST">
            <label>Nazwa użytkownika</label>
            <input type = 'text' name="username" class='form-el' value = "<?php echo $_SESSION['username'];?>">
            <label>Stare hasło</label>
            <input type = 'password' name="oldpassword" class='form-el' required>
            <label>Nowe hasło</label>
            <input type = 'password' name="newpassword" class='form-el' required>
            <label>Potwierdź hasło</label>
            <input type = 'password' name="new2password" class='form-el' required>
            <input type="submit" value="Zaktualizuj" id ="save">
            </form>
            </div>
           
            </div>
            </div>
            </section>


            <section class="wrapper-sec">
           
            </section>

            <footer>
            
            <div class = 'logo-copyright'>
            <p class="copyright"><b>pvp<span>booster</span></b> &copy 2022</p>
            </div>
            
            <nav> 
            <ul>
            <li><?php   echo '<a href = "index-logged.php"> Strona główna </a>'; ?></li>
            <li><?php   echo '<a href = "index-logged.php"> Funkcjonalności </a>'; ?></li>
            <li><?php   echo '<a href = "index-logged.php"> Społeczność </a>'; ?></li>
            <li><?php   echo '<a class = "profile" href = "profile.php">Profil </a>'; ?></li>
            <li><?php   echo '<a class = "logout" href = "logout.php"> Wyloguj się </a>'; ?></li>
            </ul>
            </nav>

            <div class="socials">
            <a href = 'https://www.tiktok.com/@pvpbooster?lang=pl-PL' target="blank"><i class="fa-brands fa-tiktok" target="blank"></i></a>
            <a href = 'https://discord.gg/JdrQqW6t2k' target="blank"><i class="fa-brands fa-discord"></i></a>
            </div>

            </footer>
            <script src="index.js"></script>
            </body>
            </html>