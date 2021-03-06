<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="/Public/css/style.css"/>
    <link rel="stylesheet" type="text/css" href="/Public/css/grafik-sprzatan.css"/>
    <script src="https://kit.fontawesome.com/218395494c.js" crossorigin="anonymous"></script>
    <title>Shifts</title>
</head>
<body>
<div class="base-container">
    <nav>
        <div class="podkreslenie3"></div>
        <img src="/Public/img/logo_web.svg">
        <ul>
            <li>
                <i class="fas fa-user"></i>
                <a href="/user" class="button"><?php echo $user->getName();?> <?php echo $user->getSurname(); ?></a>
            </li>
            <li>
                <i class="fas fa-home"></i>
                <a href="homepage" class="button">Strona domowa</a>
            </li>
            <li>
                <i class="far fa-calendar"></i>
                <a href="#" class="button">Shifts</a>
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
                <i class="far fa-calendar"></i> Shifts
            </div>
        </header>
        <div class="shift_cal">

        </div>
        <div class="p1"> </div>
        <div class="shift_t">

        </div>
        <div class="p2"> </div>
    </main>


</body>
</html>