<!DOCTYPE html>
<html lang="ru">
<head>
  <!-- Кодировка документа -->
  <meta charset="utf-8">
  <!-- Заголовок страницы -->
  <title>Сайт-визитка</title>
  <!-- Подключения таблицы стилей Bootstrap 3 -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <!-- Подключение темы со стилями Bootstrap 3 -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
  <!-- Подключение таблицы стилей иконок Awesome -->
  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
  <!-- Подключение таблицы стилей, в которой будем прописывать свои стили -->
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <!-- Подключение библиотеки jQuery для работы скриптов Bootstrap 3 -->
  <script src="js/jquery-1.11.1.min.js"></script>
  <!-- Подключение скриптов Bootstrap 3 -->
  <script src="js/bootstrap.min.js"></script>
</head>
<body>

  <div class="container">
    
    <header class="page-header text-center" style="margin-top: 20px;">
      <h1>Бирюков Глеб
<small>Студент 2-го курса. Направление подготовки: "Прикладная информатика: когнитивные технологии".</small></h1>
    </header>
    
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <span class="navbar-brand"><i class="fa fa-code"></i> ПЗ</span>
        </div>
        
        <div class="collapse navbar-collapse" id="navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#main">Обо мне</a></li>
            <li><a href="#method">Мой стек</a></li>
            <li><a href="#work">Деятельность</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="mailto:polinazuravleva586@gmail.com"><i class="fa fa-envelope"></i> Написать мне</a></li>
          </ul>
        </div>
      </div>
    </nav>
    
    <div id="header-bottom" class="jumbotron text-center" style="background-color: #f5f5f5; border-radius: 6px; padding: 30px 15px;">
      <h2>Привет!</h2>
      <p class="lead">Меня зовут Глеб. Мне 20 лет, я обучаюсь в Орловском государственном университете им. И.С. Тургенева.</p>
    </div>
    
    <div id="main">

      <div class="row">

        <div class="col-md-4 text-center">
          <div class="well">
            <h3 style="color: #2e6da4;"><i class="fa fa-graduation-cap"></i> Обучение</h3>
            <p>Студент 2-го курса бакалавриата в <strong>ОГУ им. И.С. Тургенева</strong>. Получаю актуальные знания в сфере информационных технологий и развиваю инженерное мышление.</p>
          </div>
        </div>

        <div class="col-md-4 text-center">
          <div class="well">
            <h3 style="color: #3f903f;"><i class="fa fa-terminal"></i> Кодинг</h3>
            <p>Изучаю программирование на разных языках. Имею практический опыт работы со скриптами, структурами данных и версткой веб-интерфейсов.</p>
          </div>
        </div>
      </div>
    </div>
    
    <div id="method" style="margin-top: 40px; margin-bottom: 40px;">
      <div class="row">
        <div class="col-xs-12">
          <h2 class="text-center" style="margin-bottom: 30px;">Мой технологический стек</h2>
        </div>
        <div class="col-md-6">
          <p><strong>HTML5 & CSS3</strong> (Валидная семантическая верстка)</p>
          <div class="progress">
            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%;">
              70%
            </div>
          </div>
          <p><strong>JavaScript</strong> (Интерактивность на веб-страницах)</p>
          <div class="progress">
            <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" style="width: 65%;">
              65%
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <p><strong>Python</strong> (Скрипты, автоматизация, обработка и аналитика данных, парсинг)</p>
          <div class="progress">
            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;">
              90%
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <div id="work" style="margin-bottom: 50px;">
      <div class="row">
        <div class="col-xs-12">
          <h2 class="text-c enter" style="margin-bottom: 30px;">Направления деятельности</h2>
        </div>
        <div class="col-sm-6">
          <div class="thumbnail" style="padding: 15px; border: 1px solid #ddd;">
            <div class="caption text-center">
              <i class="fa fa-desktop fa-2x" style="color:#337ab7;"></i>
              <h3>Frontend-разработка</h3>
              <p>Создание современных сайтов и веб-страниц с использованием HTML, CSS и JavaScript. Работа с отзывчивым дизайном.</p>
            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="thumbnail" style="padding: 15px; border: 1px solid #ddd;">
            <div class="caption text-center">
              <i class="fa fa-gears fa-2x" style="color:#5cb85c;"></i>
              <h3>Алгоритмы на Python</h3>
              <p>Разработка консольных утилит, решение алгоритмических задач и парсинг данных для учебных и личных проектов.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Подвал сайта -->
  <footer style="background-color: #222; color: #fff; padding: 30px 0; margin-top: 50px;">
    <div class="container text-center">
      <p>&copy; 2026 Бирюков Глеб. Все права защищены.</p>
      <p>
        <i class="fa fa-envelope"></i> Email: 
        <a href="mailto:glebaskantrabas@gmail.com" style="color: #5cb85c; text-decoration: none;">
          glebaskantrabas@gmail.com
        </a>
      </p>
    </div>
  </footer>

</body>
</html>

       
