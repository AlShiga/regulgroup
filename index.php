<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package RegulGroup
 */
?>

<?php
get_header();
?>

  <main class="main">
    <div class="container">
      <div class="blue-block"></div>
      <div class="img-dog"></div>
      <div class="main__inner">
        <h1 class="subtitle-site">Кинологический центр Регул групп</h1>
        <p class="title-site">Полный спектр<br> кинологических услуг</p>
        <div class="advantage row">
          <div class="advantage__item col-12 col-md-4">
            <div class="advantage__img" style="background-image:url(<?php echo get_template_directory_uri();
 ?>/img/adv1.png);"></div>
            <div class="">
              <h3 class="advantage__title">Качество</h3>
              <p class="advantage__text">Все наши собаки сертифицированы по поиску взрывчатых веществ
                Экспертно-консультационным Советом </p>
            </div>
          </div>
          <div class="advantage__item col-12 col-md-4">
            <div class="advantage__img" style="background-image:url(<?php echo get_template_directory_uri();
 ?>/img/adv2.png);"></div>
            <div class="">
              <h3 class="advantage__title">Квалификация</h3>
              <p class="advantage__text">Квалификация, многократно подтвержденная на сертификатных состязаниях,
                выставках по безопасности, оперативных выездах</p>
            </div>
          </div>
          <div class="advantage__item col-12 col-md-4">
            <div class="advantage__img" style="background-image:url(<?php echo get_template_directory_uri();
 ?>/img/adv3.png);"></div>
            <div class="">
              <h3 class="advantage__title">Выгода</h3>
              <p class="advantage__text">КЦ «РЕГУЛ ГРУПП», может входить
                в состав служб безопасности, что позволит повысить эффективность работы и качество услуг</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  <section class="mytarget">
    <div class="white-block"></div>
    <div class="container">
      <div class="mytarget__inner">
        <div class="row">
          <div class="col-12 col-md-7 order-12 order-md-1">
            <p class="mytarget__text ">
              Наша компания создана в 2017 году с целью предоставления всего спектра кинологических услуг.
              <br><br>
              Наша основная деятельность — поиск взрывчатых веществ, взрывоопасных предметов, взрывных устройств и
              наркотических средств при досмотре:
            </p>
            <div class="location row">
              <div class="location__item col-6 col-md-5">
                <div class="location__img" style="background-image:url(<?php echo get_template_directory_uri();
 ?>/img/loc1.jpg);"></div>
                <p class="location__title">Зданий, в том числе учреждений образования
                  и медицинского обслуживания</p>
              </div>
              <div class="location__item col-6 col-md-5">
                <div class="location__img" style="background-image:url(<?php echo get_template_directory_uri();
 ?>/img/loc2.jpg);"></div>
                <p class="location__title">Участков местности</p>
              </div>
              <div class="location__item col-6 col-md-5">
                <div class="location__img" style="background-image:url(<?php echo get_template_directory_uri();
 ?>/img/loc3.jpg);"></div>
                <p class="location__title">Грузов</p>
              </div>
              <div class="location__item col-6 col-md-5">
                <div class="location__img" style="background-image:url(<?php echo get_template_directory_uri();
 ?>/img/loc4.jpg);"></div>
                <p class="location__title">Транспортных средств (автотранспорт, железнодорожный транспорт,
                  авиатранспорт)</p>
              </div>
              <div class="location__item col-12 col-md-10">
                <div class="location__img" style="background-image:url(<?php echo get_template_directory_uri();
 ?>/img/loc5.jpg);"></div>
                <p class="location__title">Багажа</p>
              </div>
            </div>


          </div>
          <div class="col-12 col-md-5 order-1 order-md-12">
            <h2 class="title-site title-site_mytarget">Наша задача —
              ваша безопасность</h2>

            <div class="video">
              <svg class="video__title" viewBox="0 0 70 70" width="100%">
                <defs>
                  <path d="M35,35m-23,0a23,23 0 1,1 46,0a23,23 0 1,1 -46,0" fill="lightpink" id="tophalf"/>
                </defs>
                <text style="font: Oswald;">
                  <textPath xlink:href="#tophalf" startOffset="0%" style="font-size: 4px; fill:#004b9a; font-weight:600;">
                    Смотреть видео о нашей работе</textPath>
                </text>
              </svg>
              <div class="video__bg"></div>
              <div class="video__button"><i class="fab fa-youtube"></i></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="services">
    <div class="container">
      <div class="services__inner">
        <div class="services__title">Услуги</div>
        <div class="row">
          <div class="col-12 col-md-4">
            <div class="service" style="background-image:url(<?php echo get_template_directory_uri();
 ?>/img/ser1.jpg);">
              <p class="service__title">Обнаружение взрывчатых веществ и устройств</p>
            </div>
          </div>
          <div class="col-12 col-md-4">
            <div class="service" style="background-image:url(<?php echo get_template_directory_uri();
 ?>/img/ser2.jpg);">
              <p class="service__title">Обнаружение наркотических средств и психотропных веществ</p>
            </div>
          </div>
          <div class="col-12 col-md-4">
            <div class="service" style="background-image:url(<?php echo get_template_directory_uri();
 ?>/img/ser3.jpg);">
              <p class="service__title">Караульная служба по охране объектов</p>
            </div>
          </div>
          <div class="col-12 col-md-4">
            <div class="service" style="background-image:url(<?php echo get_template_directory_uri();
 ?>/img/ser4.jpg);">
              <p class="service__title">Обеспечение безопасности
                при проведении массовых
                мероприятий</p>
            </div>
          </div>
          <div class="col-12 col-md-4">
            <div class="service" style="background-image:url(<?php echo get_template_directory_uri();
 ?>/img/ser5.jpg);">
              <p class="service__title">Использование собак для личной охраны VIP лиц</p>
            </div>
          </div>
          <div class="col-12 col-md-4">
            <div class="service" style="background-image:url(<?php echo get_template_directory_uri();
 ?>/img/ser6.jpg);">
              <p class="service__title">Дрессировка собак и продажа щенков</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="company">
    <div class="container">
      <div class="company__inner">
        <h2 class="title-site">Нам доверяют</h2>
      </div>
    </div>
    <div class="company__carousel-wrap">
      <div class="company__carousel container">
        <div class="company__item"> <img src="<?php echo get_template_directory_uri();
 ?>/img/comp1.png" alt="" class="company__img"> </div>
        <div class="company__item"> <img src="<?php echo get_template_directory_uri();
 ?>/img/comp2.png" alt="" class="company__img"> </div>
        <div class="company__item"> <img src="<?php echo get_template_directory_uri();
 ?>/img/comp3.png" alt="" class="company__img"> </div>
        <div class="company__item"> <img src="<?php echo get_template_directory_uri();
 ?>/img/comp4.png" alt="" class="company__img"> </div>
        <div class="company__item"> <img src="<?php echo get_template_directory_uri();
 ?>/img/comp1.png" alt="" class="company__img"> </div>
        <div class="company__item"> <img src="<?php echo get_template_directory_uri();
 ?>/img/comp2.png" alt="" class="company__img"> </div>
      </div>
    </div>
  </section>
<?php
get_footer();
