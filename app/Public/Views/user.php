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
                <div class="d1">
                    <img src="/Public/img/imie.svg">
                    <form class="d1" method="POST">
                        <input name="name" type="text" placeholder="Imię: <?php echo $user->getName();?>">
                    </form>
                </div>
                <div class="d2">
                    <img src="/Public/img/imie.svg">
                    <form class="d2" method="POST">
                        <input name="surname" type="text" placeholder="Nazwisko: <?php echo $user->getSurname();?>">
                    </form>
                </div>
                <div class="d3">
                    <img src="/Public/img/emaild.svg">
                    <form class="d3" method="POST">
                        <input name="emial" type="text" placeholder="E-mail: <?php echo $user->getemail();?>">
                    </form>
                </div>
                <div class="d4">
                    <img src="/Public/img/data.svg">
                    <form class="d4" method="POST">
                        <input name="date" type="text" placeholder="Data urodzenia: <?php echo $user->getDate();?>">
                    </form>
                </div>

                <div class="pasek5"></div>
            </data>
    </body>
</html>