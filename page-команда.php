<?php
get_header();
while (have_posts()) {
  the_post(); ?>

  <section class="section-white">
    <div class="section-white__breadcrumb breadcrumb">
      <div class="container-lower">
        <ul class="breadcrumb__list">
          <?php
          $theParent = wp_get_post_parent_id(get_the_ID());
          if ($theParent) { ?>
            <li class="breadcrumb__item"><a href="<?php echo get_permalink($theParent); ?>"><?php echo get_the_title($theParent); ?></a> /</li>
            <li class="breadcrumb__item active"><a href="">
                <?php the_title(); ?>
              </a></li>
          <?php }
          ?>
        </ul>
      </div>
    </div>
    <div class="section-white__who-we-are sovet-direktorov">
      <div class="who-we-are__col">
        <div class="who-we-are__about-us-label about-us-label">
          Команда
        </div>
        <div class="who-we-are__who-we-are-label who-we-are-label sovet-direktorov-label">
          Совет директоров
        </div>
        <div class="sovet-direktorov__direktor-wrapper">
          <?php
          $loop = CFS()->get('ceo_card');
          foreach ($loop as $row) { ?>
            <div class="sovet-direktorov__item">
              <div class="sovet-direktorov-item__inner">
                <div class="sovet-direktorov-item__name">
                  <p>
                    <?= $row['ceo_fullname'] ?>
                  </p>
                </div>
                <div class="sovet-direktorov-item__title">
                  <p>
                    <?= $row['ceo_title'] ?>
                  </p>
                </div>
                <div class="sovet-direktorov-item__btn-wrapper">
                  <div class="slider-item__btn-6 btn-6">
                    <span>Читать далее</span>
                    <div class="btn-3__arrow-long arrow-long">
                      <i class="fa-solid fa-arrow-right-long"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          <?php }
          ?>
        </div>
      </div>
    </div>
  </section>
  <div class="section-blue">
    <div class="section-blue__governing governing">
      <div class="container-lower">
        <div class="governing__outer">
          <div class="governing__inner">
            <div class="governing__about-us-label about-us-label">Команда</div>
            <div class="governing__who-we-are-label who-we-are-label">
              Правление
            </div>
            <div class="governing__governing-grid governing-grid">
              <?php
              $loop = CFS()->get('pravlenie_card');
              foreach ($loop as $row) { ?>
                <div class="governing-slider__card-white card-blue">
                  <figure class="card-blue__photo">
                    <img width="100%" src="<?= $row['pravlenie_img'] ?>" alt="./assets/images/governing-1.png" />
                  </figure>
                  <div class="card-blue__inner">
                    <div class="card-blue__title">
                      <p>
                        <?= $row['pravlenie_fullname'] ?>
                      </p>
                    </div>
                    <div class="card-blue__subtitle">
                      <p>
                        <?= $row['pravlenie_title'] ?>
                      </p>
                    </div>
                    <div class="card-blue__btn-wrapper">
                      <div class="card-blue__btn-4 btn-4">
                        <span>Подробнее</span>
                        <div class="btn-3__arrow-long arrow-long">
                          <i class="fa-solid fa-arrow-right-long"></i>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              <?php }
              ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="section-white">
    <div class="team section-white__team">
      <div class="container-lower">
        <div class="team__outer">
          <div class="team__inner">
            <div class="team__about-us-label about-us-label">Команда</div>
            <div class="team__who-we-are-label who-we-are-label">
              Наша Команда
            </div>
            <div class="team__team-grid team-grid">
              <?php
              $loop = CFS()->get('team_card');
              foreach ($loop as $row) { ?>
                <div class="team-slider__card-white card-white">
                  <figure class="card-white__photo">
                    <img width="100%" src="<?= $row['team_photo'] ?>" alt="./assets/images/team-1.png" />
                  </figure>
                  <div class="card-white__inner">
                    <div class="card-white__title">
                      <p>
                        <?= $row['team_fullname'] ?>
                      </p>
                    </div>
                    <div class="card-white__subtitle">
                      <p>
                        <?= $row['team_title'] ?>
                      </p>
                    </div>
                    <div class="card-white__btn-wrapper">
                      <div class="card-white__btn-4 btn-4">
                        <span>Подробнее</span>
                        <div class="btn-3__arrow-long arrow-long">
                          <i class="fa-solid fa-arrow-right-long"></i>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              <?php }
              ?>
            </div>

          </div>
        </div>
      </div>
    </div>
    <div class="news">
      <div class="news__tab-wrapper tab-wrapper">
        <div class="container-lower">
          <ul class="tab-wrapper__tabs">
            <li><a href="#newsfeed" class="tab">Новости компании</a></li>
            <li><a href="#notify" class="tab">Уведомления для клиентов</a></li>
          </ul>
          <div class="tab_content_wrapper">
            <section class="tab-content" id="newsfeed">
              <div class="news__outer">
                <div class="news__inner">
                  <div class="news__top">
                    <div class="news__top-col">
                      <div class="news__about-us-label about-us-label">
                        <?= CFS()->get('news_banner_subtitle'); ?>
                      </div>
                      <div class="news__who-we-are-label who-we-are-label">
                        <?= CFS()->get('news_banner_title'); ?>
                      </div>
                    </div>
                  </div>
                  <div class="news-grid-wrapper">
                    <div class="news">
                      <div class="news-grid-wrapper">
                        <ul class="news__grid-news grid-news">
                          <?php
                          $loop = CFS()->get('news_item');
                          foreach ($loop as $row) { ?>
                            <li class="grid-news__item">
                              <img class="news-img" width="100%" src="<?= $row['news_item_img'] ?>"
                                alt="./assets/images/gied-news-img-main.png">
                              <!-- <div class="grid-news__news-date news-date">
                                                            <p>20.02.2023</p>
                                                          </div>
                                                          <div class="grid-news__news-watcher news-watcher">
                                                            <div class="news-watcher__total-watches-num total-watches-num">
                                                              <span>43</span>
                                                            </div>
                                                            <div class="news-watcher__eye-icon eye-icon">
                                                              <img src="./assets/images/icons/eye-icon.svg" alt="./assets/images/icons/eye-icon.svg" />
                                                            </div>
                                                          </div> -->
                              <div class="grid-news__news-title news-title">
                                <p>
                                  <?= $row['news_item_title'] ?>
                                </p>
                              </div>
                            </li>
                          <?php }
                          ?>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
            <section class="tab-content" id="notify">
              <div class="news__outer">
                <div class="news__inner">
                  <div class="news__top">
                    <div class="news__top-col">
                      <div class="news__about-us-label about-us-label">
                        <?= CFS()->get('notification_banner_subtitle'); ?>
                      </div>
                      <div class="news__who-we-are-label who-we-are-label">
                        <?= CFS()->get('notification_banner_title'); ?>
                      </div>
                    </div>
                  </div>
                  <div class="news-grid-wrapper">
                    <div class="news">
                      <div class="news-grid-wrapper">
                        <ul class="news__grid-news grid-news">
                          <?php
                          $loop = CFS()->get('notification_item');
                          foreach ($loop as $row) { ?>
                            <li class="grid-news__item">
                              <img class="news-img" width="100%" src="<?= $row['notification_img'] ?>"
                                alt="./assets/images/gied-news-img-main.png">
                              <!-- <div class="grid-news__news-date news-date">
                                                <p>20.02.2023</p>
                                              </div>
                                              <div class="grid-news__news-watcher news-watcher">
                                                <div class="news-watcher__total-watches-num total-watches-num">
                                                  <span>43</span>
                                                </div>
                                                <div class="news-watcher__eye-icon eye-icon">
                                                  <img src="./assets/images/icons/eye-icon.svg" alt="./assets/images/icons/eye-icon.svg" />
                                                </div>
                                              </div> -->
                              <div class="grid-news__news-title news-title">
                                <p>
                                  <?= $row['notification_title'] ?>
                                </p>
                              </div>
                            </li>
                          <?php }
                          ?>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
          </div>
        </div>
      </div>
    </div>
    <div class="subscribe">
      <div class="subscribe__inner">
        <div class="subscribe__inner-wrapper">
          <div class="subscribe__title">
            <p>Подпишитесь на рассылку</p>
          </div>
          <div class="subscribe__subtitle">
            <p>Хотите получать качественные аналитические обзоры и самые актуальные новости финансового рынка?!
              Подпишитесь и Вам не придется долго ждать интересных новостей!</p>
          </div>
          <form action="" class="subscribe__form subscribe-form">
            <div class="subscribe-form__col">
              <div class="subscribe-form__label">
                <span>Ваше имя</span>
              </div>
              <div class="subscribe-form__input-wrapper">
                <input class="subscribe-form__input" type="text" name="subscribe-name" id="subscribe-name"
                  placeholder="Ваше имя" />
              </div>
            </div>
            <div class="subscribe-form__col">
              <div class="subscribe-form__label">
                <span>Ваше email</span>
              </div>
              <div class="subscribe-form__input-wrapper">
                <input class="subscribe-form__input" type="email" name="subscribe-email" id="subscribe-email"
                  placeholder="Ваш email" />
              </div>
            </div>
            <div class="subscribe-form__col">
              <div class="subscribe-form__label">
                <span> </span>
              </div>
              <div class="subscribe-form__input-wrapper">
                <button class="btn-5">Отправить</button>
              </div>
            </div>
          </form>
        </div>
        <figure class="subscribe__woman">
          <img class="subscribe-img" src="<?php echo get_theme_file_uri('/assets/images/subscribe-woman.svg'); ?>"
            alt="./assets/images/subscribe-woman.svg" />
        </figure>
      </div>
    </div>
  </div>





<?php }
get_footer();
?>