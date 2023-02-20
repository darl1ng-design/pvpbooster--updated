        <?php session_start()?>
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
        <title>pvpbooster - Logowanie</title>
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
        <li><?php   echo '<a href = "index.php"> Strona główna </a>'; ?></li>
        <li><?php   echo '<a href = "index.php"> Funkcjonalności </a>'; ?></li>
        <li><?php   echo '<a href = "index.php"> Społeczność </a>'; ?></li>
        <li><?php   echo '<a href = "login.php"> Zaloguj się </a>'; ?></li>
        <li><?php   echo '<a href = "register.php"> Rejestracja </a>'; ?></li>
        </ul>
        </nav>
        </header>   

        <div id="overlay"></div>   
        

        <div class="form-container">
        <h1 class='form-el'>Zaloguj się</h1>
        <?php 
        if(isset($_GET['mode'])){   
        if($_GET['mode'] == 'wrong'){
            echo '<div style="color:red; font-weight:bold;  margin-bottom:1rem;">Wprowadź właściwe dane.</div>'; 
        }
        elseif($_GET['mode'] == 'whitespace'){
            echo '<div style="color:red; font-weight:bold;  margin-bottom:1rem;">Pola nie mogą zawierać spacji.</div>'; 
        }
        }?>

        <form action="login-authentication.php" method="post">
        <label>Nazwa Użytkownika</label>
        <input type = 'text' name="username" class='form-el' required>
        <label>Hasło</label>
        <input type = 'password' name="password" class='form-el' required >
        <input type="submit">
        </form>
        <p> <a class = 'register' href = 'register.php'>Zarejestruj się</a></p> 
        </div> 
        </section>
        <footer>
            
        <div class = 'logo-copyright'>
        <p class="copyright"><b>pvp<span>booster</span></b> &copy 2022</p>
        </div>
    
        <nav> 
        <ul>
        <li><a href ='index.php'>Strona główna</a></li>
        <li><a href ='index.php'>Funkcjonalności</a></li>
        <li><a href ='index.php'>Społeczność</a></li>
        <li><a href ='login.php'>Zaloguj</a></li>
        <li><a href ='register.php'>Rejestracja</a></li>
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