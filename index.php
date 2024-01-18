<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pogoda</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="img/sun.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400&display=swap" rel="stylesheet">
    <link rel="stylesheet" data-purpose="Layout StyleSheet" title="Web Awesome" href="/css/app-wa-02670e9412103b5852dcbe140d278c49.css?vsn=d">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.4.2/css/all.css">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.4.2/css/sharp-solid.css">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.4.2/css/sharp-regular.css">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.4.2/css/sharp-light.css">
</head>

<body>
    <div class="container">
        <div class="header">
            <div class="header-left">
                <a href="index.php"><div class="logo"></div></a>
            </div>
            <div class="header-middle">
                <input type="text" placeholder="Znajdz miasto lub kod pocztowy" class="wyszukaj-input">
                <button class="szukaj-button"><i class="fa-regular fa-magnifying-glass-location"></i></button>
            </div>
            <div class="error"><p>Zła nazwa miasta</p></div>
            <div class="header-right">
<!-- KOD PHP KTORY SPRAWDZA CZY UZYTKOWNIK JEST ZALOGOWANY JEZLI TAK TO WYSWIETLA POSZCZEGOLNE PRZYCZYSKI -->
                <?php
                    session_start();
                    $isLoggedIn = isset($_SESSION['login']);

                    if ($isLoggedIn) {
                        echo '<div class="header-button" onclick="window.location.href=\'panel.php\'">Panel Sterowania</div>';
                        echo '<div class="header-button" onclick="logout()">Wyloguj się</div>';
                    
                    } else {
                        echo '<div class="header-button" id="loginbutton">Zaloguj się</div>';
                    }
                ?>
            </div>
        </div>

        <div class="main">

               
<?php
                $Day = '15.01';
                $TempDayWeek = 0;
                $TempNightWeek = -1;
                $TempToday = 5;
                $MaksymalnaTemp = 4;
                $MinimalnaTemp = 1;
                $Wilgotnosc = 32;
                $Cisnienie  = 423;
                $Wiatr = 43;
                $IndeksUV = 0;
                $FazaKsiezyca = 'Pełnia';
                $Miejscowosc = 'Warszawa';
                $Clouds = '<i class="fa-light fa-clouds"></i>';
                $Clear = '<i class="fa-light fa-sun-bright"></i>';
                $Rain = '<i class="fa-light fa-cloud-rain"></i>';
                $Drizzle = '<i class="fa-light fa-cloud-drizzle"></i>';
                $Mist = '<i class="fa-light fa-cloud-fog"></i>';
                
                // PROGNOZA W WYBRANYM MIEJSCU
        echo '<div class="prognoza-dane-miejsce">';
                // GDZIE WYBRANO
                    echo '<a class="tekst-prognoza">Prognoza w miejscowości ' . $Miejscowosc . '</a>'; echo '<br>';
                //GORNY DIV W PROGNOZIE W DANYM MIEJSCU
                    echo '<div class="prognoza-dane-miejsce-gora">';
                //ODCZUWALNA TEMPERATURA W GORNYM DIVEI
                        echo '<div class="prognoza-dane-miejsce-gora-odczuwalna">';
                            echo '<a class="tekst-prognoza-dane-miejsce-gora-odczuwalna"> ' . $TempToday . '°C</a>'; echo '<br>';
                        echo '</div>';

                    echo '</div>';
                    
                // DOLNY DIV W PROGNOZIE W DANYM MIEJSCU
            echo '<div class="prognoza-dane-miejsce-dol">';
                // LEWY DOLNY DIV W PROGNOZIE W DANYM MIEJSCU
                    echo '<div class="prognoza-dane-miejsce-dol-lewo">';

                            echo '<div class="prognoza-dane-miejsce-dol-info">';
                                echo '<a class="prognoza-dane-miejsce-dol-info-tekst"> Maks/min</a>'; echo '<br>'; 
                                echo '<div class="prognoza-dane-miejsce-dol-info-dane">' . $MaksymalnaTemp . '°' . '/' . $MinimalnaTemp .'°'; echo '</div>';
                            echo '</div>';

                                            echo '<div class="kreska-pozioma">';echo '</div>';

                            echo '<div class="prognoza-dane-miejsce-dol-info">';
                                echo '<a class="prognoza-dane-miejsce-dol-info-tekst"> Wilgotność</a>'; echo '<br>'; 
                                echo '<div class="prognoza-dane-miejsce-dol-info-dane">' . $Wilgotnosc . '%'; echo '</div>';
                            echo '</div>';

                                            echo '<div class="kreska-pozioma">';echo '</div>';

                            echo '<div class="prognoza-dane-miejsce-dol-info">';
                                echo '<a class="prognoza-dane-miejsce-dol-info-tekst"> Ciśnienie</a>'; echo '<br>'; 
                                echo '<div class="prognoza-dane-miejsce-dol-info-dane">' . $Cisnienie . ' mbar'; echo '</div>';
                            echo '</div>';

                echo '<div class="kreska-pozioma">';echo '</div>';
                            
                    echo '</div>';
                    // PRAWY DOLNY DIV W PROGNOZIE W DANYM MIEJSCU
                                            echo '<div class="prognoza-dane-miejsce-dol-prawo">';
                        
                            echo '<div class="prognoza-dane-miejsce-dol-info">';
                                echo '<a class="prognoza-dane-miejsce-dol-info-tekst">Wiatr</a>'; echo '<br>'; 
                                echo '<div class="prognoza-dane-miejsce-dol-info-dane">' . $Wiatr . ' km/h'; echo '</div>';
                            echo '</div>';

                                            echo '<div class="kreska-pozioma">';echo '</div>';

                            echo '<div class="prognoza-dane-miejsce-dol-info">';
                                echo '<a class="prognoza-dane-miejsce-dol-info-tekst">Ideks UV</a>'; echo '<br>'; 
                                echo '<div class="prognoza-dane-miejsce-dol-info-dane">' . $IndeksUV .  '';echo '</div>';
                            echo '</div>';

                                            echo '<div class="kreska-pozioma">';echo '</div>';

                            echo '<div class="prognoza-dane-miejsce-dol-info">';
                                echo '<a class="prognoza-dane-miejsce-dol-info-tekst">Faza Księżyca</a>' ; echo '<br>'; 
                                echo '<div class="prognoza-dane-miejsce-dol-info-dane">' . $FazaKsiezyca . ''; echo '</div>';
                            echo '</div>';

                                            echo '<div class="kreska-pozioma">';echo '</div>';

                    echo '</div>';

            echo '</div>';

        echo '</div>';
                
            // PROGNOZA 7-DNIOWA
                echo '<div class="prognoza">';
                echo '<a class="tekst-prognoza">Prognoza 7-dniowa ' . $Miejscowosc . '</a>'; echo '<br>';
                echo    '<div class="day">' . $Day . '<a>' . $TempDayWeek . '</a><a class="tempnoc">' . $TempNightWeek . '</a>' . $Clouds . '</div>';
                echo    '<div class="kreska"></div>';
                echo    '<div class="day">' . $Day . '<a>' . $TempDayWeek . '</a><a class="tempnoc">' . $TempNightWeek . '</a>' . $Clear .'</div>';
                echo    '<div class="kreska"></div>';
                echo    '<div class="day">' . $Day . '<a>' . $TempDayWeek . '</a><a class="tempnoc">' . $TempNightWeek . '</a>' . $Rain .'</div>';
                echo    '<div class="kreska"></div>';
                echo    '<div class="day">' . $Day . '<a>' . $TempDayWeek . '</a><a class="tempnoc">' . $TempNightWeek . '</a>' . $Drizzle .'</div>';
                echo    '<div class="kreska"></div>';
                echo    '<div class="day">' . $Day . '<a>' . $TempDayWeek . '</a><a class="tempnoc">' . $TempNightWeek . '</a>' . $Mist .'</div>';
                echo    '<div class="kreska"></div>';
                echo    '<div class="day">' . $Day . '<a>' . $TempDayWeek . '</a><a class="tempnoc">' . $TempNightWeek . '</a>' . $Clear .'</div>';
                echo    '<div class="kreska"></div>';
                echo    '<div class="day">' . $Day . '<a>' . $TempDayWeek . '</a><a class="tempnoc">' . $TempNightWeek . '</a>' . $Clouds .'</div>';
                echo '</div>';
?>
                
            
        </div>
       
    </div>
<!-- FORMULARZ LOGOWANIA WYSWIETLANY NA SRODKU EKRANU -->
    <div class="loginContainer" id="loginContainer">
            <i class="fa-regular fa-xmark-large" id="x"></i>

            <form method="post" action="">
                <label for="username">Login</label> <br>
                <input type="text" id="login" name="login" required class="login-input"> <br>

                <label for="password">Hasło</label> <br>
                <input type="password" id="haslo" name="haslo" required class="password-input"> <br> <br>

                <button type="submit" name="submit" class="login-button">Zaloguj</button> <br>
            </form>
        </div>
<!-- KOD PHP DO LOGOWANIA POBIERA INFORMACJE Z WYSIWETLANEGO OKIENKA -->
        <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['submit'])) {
        $login = $_POST['login'];
        $password = $_POST['haslo'];

        $servername = "localhost";
        $username = "root";
        $password_db = "";
        $dbname = "pogoda";


        $conn = mysqli_connect($servername, $username, $password_db, $dbname);

        if (!$conn) {
            die("Błąd połączenia z bazą danych: " . mysqli_connect_error());
        }


        $sql = "SELECT * FROM konta WHERE username = '$login' AND pass = '$password'";

   
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            $_SESSION["login"] = $login;
            echo "<script>window.location.href = 'index.php';</script>";
            exit();
        } else {
            $_SESSION["login_error"] = true; 
        }

        mysqli_close($conn);
    }

    if (isset($_SESSION["login_error"]) && $_SESSION["login_error"]) {
        echo "<p>Nieprawidłowy login lub hasło.</p>";
        unset($_SESSION["login_error"]); 
    }
    ?>

<script src="script.js"></script>
</body>
</html>
