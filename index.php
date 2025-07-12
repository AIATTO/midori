
<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>旬幸旬美深登吏 - Futoriki</title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@400;700&family=Shippori+Mincho:wght@400;700&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
    />
  </head>
  <body>
    <header>
      <div class="header-content">
        <h1>旬幸旬美 深登吏</h1>
        <nav>
          <ul>
            <li><a href="#home">ホーム</a></li>
            <li><a href="#about">深登吏について</a></li>
            <li><a href="#menu">お品書き</a></li>
            <li><a href="#master">大将紹介</a></li>
            <li><a href="#access">アクセス</a></li>
            <li><a href="#contact">お問い合わせ</a></li>
          </ul>
        </nav>
      </div>
    </header>

    <main>
      <section id="home">
        <div class="swiper">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <img
                src="<?php echo get_template_directory_uri(); ?>/images/slider1.jpeg"
                alt="店舗イメージ1"
                class="slider-image"
              />
              <div class="hero-text">
                <h2>「出会い、それは縁やで」</h2>
                <p>この一期一会の巡り合わせを心から大切</p>
              </div>
            </div>
            <div class="swiper-slide">
              <img
                src="<?php echo get_template_directory_uri(); ?>/images/slider2.jpeg"
                alt="店舗イメージ2"
                class="slider-image"
              />
            </div>
            <div class="swiper-slide">
              <img
                src="<?php echo get_template_directory_uri(); ?>/images/slider3.jpeg"
                alt="店舗イメージ3"
                class="slider-image"
              />
            </div>
            <div class="swiper-slide">
              <img
                src="<?php echo get_template_directory_uri(); ?>/images/slider1.jpeg"
                alt="店舗イメージ1"
                class="slider-image"
              />
              <div class="hero-text">
                <h2>「出会い、それは縁やで」</h2>
                <p>この一期一会の巡り合わせを心から大切</p>
              </div>
            </div>
            <div class="swiper-slide">
              <img
                src="<?php echo get_template_directory_uri(); ?>/images/slider2.jpeg"
                alt="店舗イメージ2"
                class="slider-image"
              />
            </div>
            <div class="swiper-slide">
              <img
                src="<?php echo get_template_directory_uri(); ?>/images/slider3.jpeg"
                alt="店舗イメージ3"
                class="slider-image"
              />
            </div>
          </div>
          <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div>
        </div>
        <!-- <div class="slider-nav">
          <button class="prev-button">‹</button>
          <button class="next-button">›</button>
        </div> -->
      </section>

      <section id="about" class="section-padding">
        <div class="container">
          <h2>旬幸旬美 深登吏（みどり）について</h2>
          <div class="about-content">
            <p>当店の暖簾をくぐれば、そこは日本の四季が織りなす「旬」の恵みに満ちた空間。</p>

             <p>料理人の確かな腕と心で、素材が持つ本来の「美」しさを最大限に引き出し、</p><p>目にも舌にも鮮やかな一皿一皿をお届けいたします。</p>

<p>この場所で味わうすべてが、お客様にとってかけがえのない「幸」となりますように。</p>

<p>美味しい料理とお酒を囲み、語らい、笑い合うひととき。</p>

<p>「出会い、それは縁やで」――。私たちは、この一期一会の巡り合わせを心から大切にしています。</p>

<p>店名に冠した「深登吏（みどり）」は、私たちを温かく見守ってくれた祖母の名前から。</p>

<p>祖母が教えてくれた、人と人との繋がり、そして真心を込めたおもてなしの精神を、私たちはこの店で深く、そして丁寧に受け継いでいます。</p>

<p>「旬幸旬美 深登吏」は、ただ食事をするだけの場所ではありません。</p>

<p>旬の恵みがもたらす喜び、日本の美意識が息づく空間、そして心温まる出会いが紡ぐ、人生の「幸」を分かち合う場所でありたいと願っています。</p>

            </p>
          </div>
        </div>
      </section>

      <section id="menu" class="section-padding section-alt-bg">
        <div class="container">
          <h2>お品書き</h2>
          <div class="menu-grid">
            <div class="menu-item">
              <h3>旬のおすすめ</h3>
              <p>
                季節ごとに変わる、その時期一番美味しい素材を使った限定メニューです。
              </p>
            </div>
            <div class="menu-item">
              <h3>一品料理</h3>
              <p>
                定番から創作まで、お酒と共に楽しめるこだわりの逸品を取り揃えております。
              </p>
            </div>
            <div class="menu-item">
              <h3>〆の一品</h3>
              <p>
                お食事の締めくくりにぴったりの、心温まるご飯ものや麺類をご用意。
              </p>
            </div>
            <div class="menu-item">
              <h3>厳選日本酒・焼酎</h3>
              <p>
                全国各地から取り寄せた、店主こだわりの日本酒と焼酎をご堪能ください。
              </p>
            </div>
          </div>
          <p class="menu-note">※詳細なメニューは店舗にてご確認ください。</p>
        </div>
      </section>

      <section id="master" class="section-padding">
        <div class="container">
          <h2>深登吏の大将</h2>
          <div class="master-profile">
            <img src="<?php echo get_template_directory_uri(); ?>/images/kouiti.png" class="master-image" />
            <div class="master-info">
              <p>
                20代で寿司屋で修業し、30代に入り「深登吏」を開店。素材本来の味を最大限に引き出すことを信条とし、お客様に最高の料理と空間を提供できるよう日々精進しております。
              </p>
              <p>皆様のお越しを心よりお待ちしております。</p>
              <div class="social-links">
                <a
                  href="https://www.instagram.com/chan.midori.142/"
                  target="_blank"
                  aria-label="深登吏のInstagram"
                  ><i class="fab fa-instagram"></i> 深登吏のInstagram</a
                >
              </div>
            </div>
          </div>
        </div>
      </section>

      <section id="access" class="section-padding section-alt-bg">
        <div class="container">
          <h2>アクセス</h2>
          <p class="access-info">〒581-0016 大阪府八尾市八尾木北4丁目79</p>
          <div class="map-container">
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13134.763047127888!2d135.60506806373917!3d34.61198040008579!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60012742e68baaab%3A0x61e6c8f558f4438!2z5pes5bm45pes576OIOa3seeZu-WQjw!5e0!3m2!1sja!2sjp!4v1750470555334!5m2!1sja!2sjp"
              width="600"
              height="450"
              style="border: 0"
              allowfullscreen=""
              loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"
            ></iframe>
          </div>
        </div>
      </section>

      <section id="contact" class="section-padding">
        <div class="container">
          <h2>お問い合わせ</h2>
          <p>ご予約・お問い合わせはお電話にて承っております。</p>
          <p class="phone-number">
            <a href="tel:072-925-4567">072-925-4567</a>
          </p>
          <p>
            営業時間：火〜日 （ランチタイム）11:45～14:00　17:30〜23:00 (L.O.
            22:30)
          </p>
          <p>定休日：月曜日</p>
        </div>
      </section>
    </main>

    <footer>
      <div class="container">
        <p>&copy; 2025 深登吏. All rights reserved.</p>
      </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/script.js"></script>
  </body>
</html>
