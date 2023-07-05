<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?php bloginfo('template_directory');?>/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php bloginfo('template_directory');?>/css/main.css">
  <title><?php bloginfo('name');?></title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Almarai:wght@300;400;700;800&display=swap" rel="stylesheet">

  <?php wp_head();?>
</head>




<body <?php body_class();?>>

<?php 

$logo = get_field('logo', 'options'); 

?>

<!-------HEADER------->
<header class="d-none d-xl-block">
    <div class="containerfluid bg-topmenu">
      <div class="container position-relative">
        <div class="logo">
          <a href="<?php echo home_url() ?>">
            <img src="<?php echo $logo ?>" alt="Logo Agadir"></a>
        </div>
        <div class="row topmenucontainer">
          <div class="col-6">
            <ul class="topmenu">
              <li><a href="">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" width="20" height="20" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                      d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                  </svg>
                </a></li>
              <li><a href="">التواصل</a></li>
              <li><a href="">الزيارات الافتراضية</a></li>
              <li><a href="">أخبار الجماعة</a></li>
              <li><a href="">أخبار </a></li>
              <li><a href="" style="color:rgb(239, 239, 239);">خدمات الكترونية</a></li>
            </ul>
          </div>
          <div class="col-5">
            <ul class="langmenu">
              <li><a href="">English</a></li>
              <li><a href="">Français</a></li>
              <li><a href="">ⵜⴰⵎⴰⵣⵉⵖⵜ</a></li>
              <li><a href="">العربية</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="containerfluid bg-main">
      <div class="container">
        <div class="row mainmenucontainer">
          <div class="col-11">
            <ul class="mainmenu">
              <li><a href="">الجماعة الترابية</a></li>
              <li><a href="">مدينة اكادير</a></li>
              <li><a href="">اكادير مدينة مستدامة</a></li>
              <li><a href="">الإجراءات الإدارية</a></li>
              <li><a href="">برنامج عمل الجماعة</a></li>
              <li><a href="">برنامج التنمية الحضرية</a></li>
              <li><a href="">منشوراتنا</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!----------------------->
  <!-- HEADER FOR MOBILE -->
  <header class="d-xl-none">

    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasExampleLabel"></h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <div class="mobile_container">
          <ul class="mobile_mainmenu">
            <li><a href="">الجماعة الترابية</a></li>
            <li><a href="">مدينة اكادير</a></li>
            <li><a href="">اكادير مدينة مستدامة</a></li>
            <li><a href="">الإجراءات الإدارية</a></li>
            <li><a href="">برنامج عمل الجماعة</a></li>
            <li><a href="">برنامج التنمية الحضرية</a></li>
            <li><a href="">منشوراتنا</a></li>
          </ul>

          <ul class="mobile_mainmenu my-5">
            <li><a href="">English</a></li>
            <li><a href="">Français</a></li>
            <li><a href="">ⵜⴰⵎⴰⵣⵉⵖⵜ</a></li>
            <li><a href="">العربية</a></li>
          </ul>

          <ul class="mobile_mainmenu">
            <li><a href="">بحث</a></li>
            <li><a href="">التواصل</a></li>
            <li><a href="">الزيارات الافتراضية</a></li>
            <li><a href="">أخبار الجماعة</a></li>
            <li><a href="">أخبار </a></li>
            <li><a href="">خدمات الكترونية</a></li>
          </ul>
        </div>
      </div>
    </div>

    <div class="containerfluid bg-topmenu">
      <div class="container position-relative">
        <div class="logo">
          <a href=""><img src="img/logo.svg" alt="Logo Agadir"></a>
        </div>

        <div class="row">
          <div class="col-6">
            <div class="bg-hamburger">
              <a data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                  stroke="white" class="hamburgericon">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25H12" />
                </svg>
              </a>
            </div>
          </div>
        </div>


      </div>
    </div>
  </header>