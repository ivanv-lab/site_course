<!-- код header.php -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <? wp_head(); ?>
    <title><?php bloginfo('name');//echo $title ?></title>
</head>
<div class="wrapper d-flex flex-column">
    <div class="content">
        <header class="fixed-top header bg-black opacity-75">
            <nav class="navbar navbar-expand-lg navbar-dark bg-transparent">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div style="font-size: 1.2em;" class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav m-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="/">Главная</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/contact">Наши школы</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/shedule">Расписание занятий</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/news">Новости</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/services">Наши услуги</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/#teachers-1">Преподаватели</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/#reviews">Отзывы</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>