<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="/Public/css/style.css"/>
        <link rel="stylesheet" type="text/css" href="/Public/css/grafik-sprzatan.css"/>
        <script src="https://kit.fontawesome.com/218395494c.js" crossorigin="anonymous"></script>
        <title>Dane osobowe</title>
    </head>
    <body>
        <div class="base-container">
            <nav>
                <div class="podkreslenie2"></div>
                <img src="/Public/img/logo_web.svg">
                <ul>
                    <li>
                        <i class="fas fa-user"></i>
                        <a href="#" class="button"><?php echo $user->getName();?> <?php echo $user->getSurname(); ?></a>
                    </li>
                    <li>
                        <i class="fas fa-home"></i>
                        <a href="/homepage" class="button">Strona domowa</a>
                    </li>
                    <li>
                        <i class="far fa-calendar"></i>
                        <a href="/shifts" class="button">Shifts</a>
                    </li>
                    <li>
                        <i class="fas fa-umbrella-beach"></i>
                        <a href="/holidays" class="button">Holidays</a>
                    </li>
                    <li>
                        <i class="far fa-calendar-check"></i>
                        <a href="/workedtime" class="button">Worked time</a>
                    </li>
                    <li>
                        <i class="fas fa-sync"></i>
                        <a href="/swap" class="button">Swap shifts</a>
                    </li>
                    <li>
                        <i class="fas fa-power-off"></i>
                        <a href="/login" class="button">Wyjdź</a>
                    </li>
                </ul>
            </nav>
            <main>
                <header>
                    <div class="dom">
                        <i class="fas fa-user"></i> Dane osobowe                    
                    </div>
                </header>
            </main>
            <profile>
                <div class="dane1">
                    <div>AK</div>  
                </div>
                <div class="dane2">
                    <div><?php echo $user->getName();?> <?php echo $user->getSurname(); ?></div>
                    <div><?php echo $user->getEmail(); ?></div>
                </div>
                <div class="pasek4"></div>
                <div class="f1">
                    <i class="fas fa-camera"></i>
                    <a href="#" class="button">Zmień zdjęcie profilowe</a>
                </div>
                <div class="f2">
                    <i class="fas fa-user"></i>
                    <a href="#" class="button">Dane osobowe</a>
                </div>
                <div class="f3">
                    <i class="fas fa-key"></i>
                    <a href="#" class="button">Zmień PIN</a>
                </div>
            </profile>
            <data>
                <div class="pasek5"></div>
            </data>
    </body>
</html>