<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <title>Web-Разработчик</title>
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <!--
    <body>
        ?php include "header.html"; ?>
        
        <div class="container">
            ?php include "about.html"; ?>
        </div>
    
        ?php include "footer.php"; ?>
    </body>
    -->

    <body class="overflow-hidden">
        <!--<div class="preloader"><div class="item"><strong class="preloaderText">Сайт разрабатывается...</strong><img src="img/preloader.gif" alt="preloader"></div></div>-->
        <div class="window-left">
            <nav class="">
                <ul class="nav">
                    <li class="nav-item active" data-tab="1">
                        <a class="nav-link" href="javascript:void(0)">Обо мне</a>
                    </li>
                    <li class="nav-item" data-tab="2">
                        <a class="nav-link" href="javascript:void(0)">Мои навыки</a>
                    </li>
                    <li class="nav-item" data-tab="3">
                        <a class="nav-link" href="javascript:void(0)">Образование</a>
                    </li>
                </ul>
            </nav>
            <hr>
            <div class="contacts">
                <a href="tel:+79505786632">📞 +7 (950)-578-66-32</a>
                <a href="mailto:lyubimov.a.m.12@mail.ru">📧 lyubimov.a.m.12@mail.ru</a>
            </div>
        </div>
        <div class="content">
            <section id="about" class="active" data-tab="1">
                <div class="section-content">
                    <div class="facts">
                        <h4>Любимов Александр Михайлович</h4>
                        <ul>
                            <li>Город: Новокузнецк(с возможностью удалённой работы)</li>
                            <li>Возраст: 18 лет</li>
                            <li>Опыт работы: 2 года</li>
                            <li>Желаемая должность: Junior backend developer</li>
                        </ul>
                    </div>
                    <img class="myPhoto" src="img/Фото.png" alt="Моё фото">
                </div>
            </section>
            <section id="skills" data-tab="2">
                <div class="card-header">Мои навыки:</div>
                <div class="cards col-4">
                    <div class="card col">
                        <div class="card-body">
                            <svg>
                                <path d="M10 100 
                                        A50 50 0 0 1 200 100 
                                        A50 50 0 0 1 10 100"
                                    style="
                                        stroke: rgb(13,202,240);
                                        stroke-width: 6px;
                                        fill: none;
                                    ">
                                </path>
                                <text x="90" y="110" font-size="15px">JS</text>
                            </svg>
                        </div>
                    </div>
                </div>
            </section>
            <section id="learning" data-tab="3">
                <div class="card-header">Мои навыки:</div>
                <div class="cards col-4">
                    <div class="card col">
                        <div class="card-body">
                            <svg>
                                <path d="M10 100
                                        A50 50 0 0 1 200 100
                                        A50 50 0 0 1 10 100"
                                    style="
                                        stroke: rgb(13,202,240);
                                        stroke-width: 6px;
                                        fill: none;
                                    ">
                                </path>
                                <text x="90" y="110" font-size="15px">JS</text>
                            </svg>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </body>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/scripts.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
</html>