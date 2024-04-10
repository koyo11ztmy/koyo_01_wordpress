<?php get_header(); ?>
  <div class="p-sub-hero">
    <div class="p-sub-hero__inner">
      <h2 class="c-heading-primary c-heading-primary--white">works<span class="c-heading-primary__sub">制作実績</span>
      </h2>
    </div>
  </div>

  <div class="p-breadcrumb">
    <div class="l-inner">
      <ol itemscope itemtype="https://schema.org/BreadcrumbList" class="p-breadcrumb__list">
        <!-- 1つめ -->
        <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem" class="p-breadcrumb__item">
          <a itemprop="item" href="." class="p-breadcrumb__link">
            <span itemprop="name">HOME</span>
          </a>
          <meta itemprop="position" content="1" />
        </li>
        <!-- 2つめ -->
        <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem" class="p-breadcrumb__item">
          <span itemprop="item" href="works.html">
            <span itemprop="name">works</span>
          </span>
          <meta itemprop="position" content="2" />
        </li>
      </ol>
    </div>
  </div>

  <main class="l-contents">

    <section class="p-works-list-wrapper l-section">
      <div class="l-inner">

        <div class="p-works-list c-card-wrapper c-card-wrapper--col3">
          <div class="c-card">
            <a href="#" class="c-card__link">
              <div class="c-card__img-wrapper">
                <img class="c-card__img" src="<?php echo get_template_directory_uri(); ?>/img/works/smoothiesta.jpg" alt="">
              </div>
              <div class="c-card__body">
                <div class="c-card__caption">Smoothiesta 様</div>
              </div>
            </a>
          </div>

          <div class="c-card">
            <a href="#" class="c-card__link">
              <div class="c-card__img-wrapper">
                <img class="c-card__img" src="<?php echo get_template_directory_uri(); ?>/img/works/web-conference.jpg" alt="">
              </div>
              <div class="c-card__body">
                <div class="c-card__caption">Web Conference 様</div>
              </div>
            </a>
          </div>

          <div class="c-card">
            <a href="#" class="c-card__link">
              <div class="c-card__img-wrapper">
                <img class="c-card__img" src="<?php echo get_template_directory_uri(); ?>/img/works/lamina.jpg" alt="">
              </div>
              <div class="c-card__body">
                <div class="c-card__caption">LAMINA 様</div>
              </div>
            </a>
          </div>

          <div class="c-card">
            <a href="#" class="c-card__link">
              <div class="c-card__img-wrapper">
                <img class="c-card__img" src="<?php echo get_template_directory_uri(); ?>/img/works/citylab.jpg" alt="">
              </div>
              <div class="c-card__body">
                <div class="c-card__caption">CITYLab 様</div>
              </div>
            </a>
          </div>

          <div class="c-card">
            <a href="#" class="c-card__link">
              <div class="c-card__img-wrapper">
                <img class="c-card__img" src="<?php echo get_template_directory_uri(); ?>/img/works/tabilog.jpg" alt="">
              </div>
              <div class="c-card__body">
                <div class="c-card__caption">TABILOG 様</div>
              </div>
            </a>
          </div>

        </div>
      </div>
    </section>


    <section class="p-contact">
      <div class="l-inner">
        <div class="p-contact__heading">
          <h2 class="c-heading-primary">
            contact<span class="c-heading-primary__sub">お問い合わせ</span>
          </h2>
        </div>
        <div class="p-contact__body">
          <div class="p-contact__text">
            <p>Webサイトの制作のご依頼やお見積りなど、<br class="u-sp-only">お気軽にご相談ください。</p>
          </div>
        </div>
        <div class="p-contact__link">
          <a class='c-btn' href='/contact'>more</a>
        </div>
      </div>
    </section>

  </main>
<?php get_footer(); ?>