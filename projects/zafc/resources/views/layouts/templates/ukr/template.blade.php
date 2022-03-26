<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;900&display=swap" rel="stylesheet">    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/slick.css">
    <link rel="stylesheet" href="/css/slick-theme.css">
    <link rel="stylesheet" href="/css/style.css">
    <title>@yield('title')</title>
</head>
<body>

<div class="nav-mobile">
  <div class="modal fade" id="linkolleg" tabindex="-1"   aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="btn-close" data-bs-dismiss="modal"   aria-label="Close"></button>
        </div>
        <div class="modal-body text-center">
            <div class="row">
              <div class="col-12">
                <a href="#" class="nav-link ">
                    Історія коледжу
                </a>
              </div>   

              <div class="col-12">
                <a href="#" class="nav-link " data-bs-toggle="collapse" data-bs-target="#struct" aria-expanded="false" aria-controls="struct">
                    Структура та органи управління
                    <ul class="collapse" id="struct">
                      <li><a class="nav-link" href="#">Действие</a></li>
                      <li><a class="dropdown-item" href="#">Другое действие</a></li>
                      <li><a class="dropdown-item" href="#">Что-то еще здесь</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="#">Отделенная ссылка</a></li>
                    </ul>
                </a>
              </div>  

            </div>
        
        </div>
    </div>
  </div>
</div>



<div class="publicInfo">
  <div class="modal fade" id="structura" tabindex="-1"   aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="btn-close" data-bs-dismiss="modal"   aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="row">
              <div class="col-12 col-md-4 subject">
                <a href="#" target="_blank">
                    <div class="title-subject">Відділення "Авіаційна та ракетно-космічна техніка і Металургія"</div>
                </a>
              </div>   

              <div class="col-12 col-md-4 subject">
                <a href="#" target="_blank">
                  <div class="title-subject">Відділення "Галузеве машинобудування і Прикладна механіка"</div>
                </a>
              </div>  
              
              <div class="col-12 col-md-4 subject">
                <a href="#" target="_blank">
                  <div class="title-subject">Відділення "Комп'ютерні науки, Комп’ютерна інженерія та Економіка"</div>
                </a>
              </div> 

              <div class="col-12 col-md-4 subject">
                <a href="#" target="_blank">
                  <div class="title-subject">Навчально-методичний кабінет</div>
                </a>
              </div> 
            </div>
        
        </div>
    </div>
  </div>
</div>


<div class="publicInfo">
  <div class="modal fade" id="bulling" tabindex="-1"   aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="btn-close" data-bs-dismiss="modal"   aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="row">
              <div class="col-12 col-md-4 subject">
                <a href="https://drive.google.com/file/d/1kYQPhx7L2a9rWrSYKv3F2WtPX7JwNWVz/view?usp=sharing" target="_blank">
                    <div class="title-subject">Порядок реагування на доведені випадки булінгу</div>
                </a>
              </div>   

              <div class="col-12 col-md-4 subject">
                <a href="https://drive.google.com/file/d/1eEmoRKWTzEI6JRDyWHGobZas65C7KBup/view?usp=sharing" target="_blank">
                    <div class="title-subject">Порядок подання та розгляду заяв про випадки булінгу</div>
                </a>
              </div>  
              
              <div class="col-12 col-md-4 subject big">
                <a href="https://drive.google.com/file/d/14Ocn7do7k6VHsg3SATw4ZalNVJBC-Tmi/view?usp=sharing" target="_blank">
                    <div class="title-subject">План заходів спрямованих на запобігання та протидію булінгу</div>
                </a>
              </div> 
            </div>
        
        </div>
    </div>
  </div>
</div>

<div class="publicInfo">
  <div class="modal fade" id="publicInfo" tabindex="-1"   aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="btn-close" data-bs-dismiss="modal"   aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="row">
              <div class="col-12 col-md-4 subject">
                <a href="#" target="_blank">
                    <div class="title-subject">Статут</div>
                </a>
              </div>   

              <div class="col-12 col-md-4 subject very-big">
                <a href="#" target="_blank">
                    <div class="title-subject">Ліцензії на <br> провадження освітньої діяльності</div>
                </a>
              </div>  
              
              <div class="col-12 col-md-4 subject very-big">
                <a href="#" target="_blank">
                    <div class="title-subject">Сертифікати про акредитацію освітніх програм</div>
                </a>
              </div> 

              <div class="col-12 col-md-4 subject big">
                <a href="#" target="_blank">
                    <div class="title-subject">Стратегія розвитку закладу освіти</div>
                </a>
              </div> 

              <div class="col-12 col-md-4 subject">
                <a href="#" target="_blank">
                    <div class="title-subject">Колективний договір</div>
                </a>
              </div> 

              <div class="col-12 col-md-4 subject big">
                <a href="#" target="_blank">
                    <div class="title-subject">Правила внутрішнього розпорядку</div>
                </a>
              </div> 

              <div class="col-12 col-md-4 subject big">
                <a href="/material-and-technical-support" target="_blank">
                    <div class="title-subject">Матеріальне технічне забезпечення</div>
                </a>
              </div> 

              <div class="col-12 col-md-4 subject">
                <a href="#" target="_blank">
                    <div class="title-subject">Звітність</div>
                </a>
              </div> 

              <div class="col-12 col-md-4 subject ">
                <a href="#" target="_blank">
                    <div class="title-subject">Запобігання корупції</div>
                </a>
              </div> 
            </div>
        
        </div>
    </div>
  </div>
</div>

    <header>
        <div class="container">
            <div class="top__header">
                <div class="row d-flex">
                    <div class="col-6 d-flex align-items-center novision">
                        <img src="/img/icon/eye.svg" alt="">
                        <a href="#" class="d-none d-md-block">Версия для слабовидящих</a>
                    </div>
                    <div class="col-6 lang d-flex justify-content-end align-items-center">
                        <a href="tel:+380612122152" class="d-flex align-items-center"><i class="fas fa-phone-alt header__phone-btn"></i><span class="tel d-none d-md-block"> (061)212-21-52</span></a>
                        
                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                          UKR
                        </a>

                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuLink">
                          <li><a class="dropdown-item" href="#">RU</a></li>
                          <li><a class="dropdown-item" href="#">EN</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="nav">
        <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-transparent">
          <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="/img/logo.png" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Переключатель навигации">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
              <ul class="navbar-nav text-center mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" aria-current="page" href="/">Головна</a>
                </li>
                <li class="nav-item dropdown d-none d-lg-block">
                    <a class="nav-link" href="#" id="navbarDropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                      Коледж
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                      <li><a class="dropdown-item" href="#">Історія коледжу</a></li>
                      <li class="btn-group dropend">
                        <a class="dropdown-toggle dropdown-item" href="#" data-bs-toggle="dropdown" aria-expanded="false">Структура та органи управління</a>
                        <ul class="dropdown-menu">
                            <li><a href="#" class="dropdown-item">Керівництво</a></li>
                            <li><a href="#" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#structura">Структура</a></li>
                        </ul>
                      </li>
                      <li class="btn-group dropend">
                        <a class="dropdown-toggle dropdown-item" href="#" data-bs-toggle="dropdown" aria-expanded="false">Кадровий склад</a>

                        <ul class="dropdown-menu">
                            <li><a href="#" class="dropdown-item">Забезпечення освітнього процесу</a></li>
                            <li><a href="#" class="dropdown-item">Циклові комісії</a></li>
                        </ul>
                      </li>
                      <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#publicInfo">Публічна інформація</a></li> 
                      <li><a class="dropdown-item" href="#" >Внутрішня система забезпечення якості освіти</a></li> 
                    </ul>
                </li>

                <li class="nav-item dropdown d-block d-lg-none">
                    <a class="nav-link" href="#" id="navbarDropdownMenuLink" data-bs-toggle="modal" data-bs-target="#linkolleg">
                      Коледж
                    </a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link" href="#" id="navbarDropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                      Освітній процес
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                      <li class="btn-group dropend">
                          <a class="dropdown-toggle dropdown-item" data-bs-toggle="dropdown" aria-expanded="false">
                            Мова освітнього процесу
                          </a>
                          <ul class="dropdown-menu">
                            <li><a href="#" class="dropdown-item">Українська</a></li>
                          </ul>
                      </li>
                      <li><a class="dropdown-item" href="#">Педагогічная рада</a></li>
                      <li class="btn-group dropend">
                          <a class="dropdown-toggle dropdown-item" data-bs-toggle="dropdown" aria-expanded="false">
                            Навчальна робота
                          </a>
                          <ul class="dropdown-menu">
                            <li><a href="#" class="dropdown-item">Нормативне забезпечення</a></li>
                            <li><a href="#" class="dropdown-item">Положення</a></li>
                            <li><a href="#" class="dropdown-item">Графік освітнього процесу</a></li>
                            <li><a href="#" class="dropdown-item">Освітні програми профільної середньої освіти</a></li>
                            <li><a href="#" class="dropdown-item">Освітньо-професійні програми</a></li>
                            <li><a href="#" class="dropdown-item">Навчальні плани</a></li>

                          </ul>
                      </li>

                      <li class="btn-group dropend">
                          <a class="dropdown-toggle dropdown-item" data-bs-toggle="dropdown" aria-expanded="false">
                            Навчально-виробнича робота
                          </a>
                          <ul class="dropdown-menu">
                            <li><a href="#" class="dropdown-item">Практика</a></li>
                            <li><a href="#" class="dropdown-item">Працевлаштування</a></li>
                          </ul>
                      </li>
                      <li><a class="dropdown-item" href="#">Навчально-методична робота</a></li>
                      <li class="btn-group dropend">
                          <a class="dropdown-toggle dropdown-item" data-bs-toggle="dropdown" aria-expanded="false">
                            Виховна робота
                          </a>
                          <ul class="dropdown-menu">
                            <li><a href="https://drive.google.com/file/d/1u1exWD6WG8AEaIYzK6hXwDAWdfxFKGkF/view?usp=sharing" class="dropdown-item" target="_blank">Планування</a></li>
                            <li><a href="https://drive.google.com/file/d/1FrJ473ZSIkj4NTck248o_30YZZEORrtq/view?usp=sharing" class="dropdown-item" target="_blank">Правила поведінки здобувачів освіти</a></li>
                            <li><a href="#" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#bulling">Заходи щодо запобігання та протидії булінгу</a></li>
                            <li><a href="#" class="dropdown-item">Гуртки та спортивні секції</a></li>
                            <li><a href="/team-teachers" class="dropdown-item">Керівнику группи</a></li>
                            <li><a href="https://drive.google.com/file/d/1lCSNwX8tnaKCC6_LyAtIe5gaJrWlOH3d/view?usp=sharing" class="dropdown-item" target="_blank">Профілактика правопорушень</a></li>
                            <li><a href="/studkom" class="dropdown-item">Студентське самоврядування</a></li>
                            <li><a href="/educational-events" class="dropdown-item">Виховні свята, події, зустрічі</a></li>
                          </ul>
                      </li>

                      <li><a class="dropdown-item" href="#">Психологічна служба</a></li>
                    </ul>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="/prospective-student">Абітурієнту</a>
                </li>

                <li class="nav-item dropdown">
                  <a class="nav-link" href="#" id="navbarDropdownMenuLin1k" data-bs-toggle="dropdown" aria-expanded="false">Студенту</a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLin1k">
                      
                      <li class="btn-group dropend">
                          <a class="dropdown-toggle dropdown-item" data-bs-toggle="dropdown" aria-expanded="false">
                            Стипендіальне забезпечення
                          </a>
                          <ul class="dropdown-menu">
                            <li><a href="/rating" class="dropdown-item">Рейтинги студентів</a></li>
                            <li><a href="/academic-scholarship" class="dropdown-item">Академічна стипендія</a></li>
                            <li><a href="/social-scholarship" class="dropdown-item">Соціальна стипендія</a></li>
                          </ul>
                      </li>

                      <li><a class="dropdown-item" href="/dorm">Поселення в гуртожиток</a></li>
                  </ul>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="#">Викладачам</a>
                </li>

                <li class="nav-item">
                  <a class="nav-link {{ request()->is('contacts') ? 'active' : '' }}" href="/contacts">Контакти</a>
                </li>

                <li class="nav-item">
                  <a class="nav-link {{ request()->is('library') ? 'active' : '' }}" href="/library">Бібліотека</a>
                </li>
              </ul>
            </div>

            
          </div>
        </nav>

        </div>
    </div>
    
    @yield('content')


    <footer>
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-4 col-lg-3 ">
                    <h4>Корисні посилання</h4>
                    <ul class="footer__menu-list">
                        <li><a href="#">Президент України</a></li>
                        <li><a href="#">ВР України</a></li>
                        <li><a href="#">МОН України</a></li>
                        <li><a href="#">КМДА</a></li>
                        <li><a href="#">УЦОЯО</a></li>
                        <li><a href="#">ПТО</a></li>
                        <li><a href="#">ДОН ВОКМР</a></li>
                        <li><a href="#">ІМЗО</a></li>
                    </ul>
                </div>

                <div class="col-12 col-md-4 col-lg-3 mt-5 mt-md-0">
                <h4>Електронні ресурси</h4>
                    <ul class="footer__menu-list">
                        <li><a href="#">Електронний кабінет</a></li>
                        <li><a href="#">Бібліотека</a></li>
                        <li><a href="#">Електронний журнал та щоденник</a></li>
                        <li><a href="#">Вхід</a></li>
                        <li><a href="#">Мапа</a></li>
                    </ul>
                </div>

                <div class="col-12 col-md-3 d-none d-lg-block">
                    
                </div>

                <div class="col-12 col-md-4 col-lg-3 footer__contacts mt-5 mt-md-0">
                    <ul>
                        <li>
                          <div class="footer__phone">
                            <i class="fas fa-phone-alt footer__phone-btn"></i>
                            <span>Приймальня директора</span>
                          </div>
                            
                            <a href="tel:+380617205526">(061)720-55-26</a>
                        </li>

                        <li>
                          <div class="footer__phone">
                            <i class="fas fa-phone-alt footer__phone-btn"></i>
                            <span>Приймальна комісія</span>
                          </div>
                            <a href="tel:+380612122152">(061)212-21-52</a>
                        </li>
                    </ul>

                    <p class="footer__icons-title">Соц.сети</p>
                    <div class="footer__icons">
                      <a href="#"><i data-feather="facebook"></i></a>
                      <a href="#"><i data-feather="instagram"></i></a>
                    </div>

                </div>
            </div>

            <p class="copy text-center">&copy; 2021 Запорізький авіаційний фаховий коледж ім. О. Г. Івченка</p>
        </div>
    </footer>
    <script src="https://kit.fontawesome.com/68535aca91.js" crossorigin="anonymous"></script>
    <!-- choose one -->
    <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
    <script src="/js/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="/js/slick.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/script.js"></script>
    <script>
      feather.replace()
    </script>
</body>
</html>