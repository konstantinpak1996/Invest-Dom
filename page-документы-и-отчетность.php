<?php
get_header();
while (have_posts()) {
  the_post(); ?>

  <div class="section-white">
    <div class="news">
      <div class="news__tab-wrapper tab-wrapper">
        <div class="container-lower">
          <ul class="tab-wrapper__tabs">
            <li><a href="#newsfeed" class="tab">Финансовая отчетность</a></li>
            <li><a href="#notify" class="tab">Документы</a></li>
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
                    <div class="news-feed">
                      <div class="container-lower">
                        <div class="news-feed__outer">
                          <div class="news-feed__inner">
                            <div class="news-feed__about-us-label about-us-label">
                              <?= CFS()->get('doc_subtitle'); ?>
                            </div>
                            <div class="news-feed__who-we-are-label who-we-are-label">
                              <?= CFS()->get('doc_title'); ?>
                            </div>
                            <div class="news-feed__grid-news-feed grid-news-feed">
                              <?php
                              $loop = CFS()->get('doc_item');
                              foreach ($loop as $row) { ?>
                                <div class="ceo-slider__card-white card-white">
                                  <figure class="card-white__photo">
                                    <img width="100%" src="<?= $row['doc_img'] ?>" alt="./assets/images/news-feed-1.png" />
                                  </figure>
                                  <div class="card-white__inner">
                                    <div class="card-white__title">
                                      <p>
                                        <?= $row['doc_title'] ?>
                                      </p>
                                    </div>
                                    <div class="card-white__subtitle">
                                      <p>
                                        <?= $row['doc_desc'] ?>
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
                  </div>
                </div>
              </div>
            </section>
            <section class="tab-content" id="notify">
              <div class="news__outer">
                <div class="news__inner">

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

    <div class="news-feed">
      <div class="container-lower">
        <div class="news-feed__outer">
          <div class="news-feed__inner">
            <div class="news-feed__about-us-label about-us-label">
              <?= CFS()->get('news-feed_subtitle'); ?>
            </div>
            <div class="news-feed__who-we-are-label who-we-are-label">
              <?= CFS()->get('news-feed_title'); ?>
            </div>
            <div class="news-feed__grid-news-feed grid-news-feed">
              <?php
              $loop = CFS()->get('news_card');
              foreach ($loop as $row) { ?>
                <div class="ceo-slider__card-white card-white">
                  <figure class="card-white__photo">
                    <img width="100%" src="<?= $row['news_card_img'] ?>" alt="./assets/images/news-feed-1.png" />
                  </figure>
                  <div class="card-white__inner">
                    <div class="card-white__title">
                      <p>
                        <?= $row['news_card_title'] ?>
                      </p>
                    </div>
                    <div class="card-white__subtitle">
                      <p>
                        <?= $row['news_card_desc'] ?>
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
  </div>





<?php }
get_footer();
?>