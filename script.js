document.addEventListener("DOMContentLoaded", () => {
  // スライダー機能
  // const sliderImages = document.querySelectorAll(".slider-image");
  // const prevButton = document.querySelector(".prev-button");
  // const nextButton = document.querySelector(".next-button");
  // let currentIndex = 0;

  // function showImage(index) {
  //   sliderImages.forEach((img, i) => {
  //     img.classList.remove("active");
  //     if (i === index) {
  //       img.classList.add("active");
  //     }
  //   });
  // }

  // function nextImage() {
  //   currentIndex = (currentIndex + 1) % sliderImages.length;
  //   showImage(currentIndex);
  // }

  // function prevImage() {
  //   currentIndex =
  //     (currentIndex - 1 + sliderImages.length) % sliderImages.length;
  //   showImage(currentIndex);
  // }

  // // 初期表示
  // showImage(currentIndex);

  // // ボタンにイベントリスナーを設定
  // nextButton.addEventListener("click", nextImage);
  // prevButton.addEventListener("click", prevImage);

  // // 自動スライドショー（任意）
  // let slideInterval = setInterval(nextImage, 5000); // 5秒ごとにスライド

  // // ユーザーが操作したときに自動スライドをリセット
  // prevButton.addEventListener("click", () => {
  //   clearInterval(slideInterval);
  //   slideInterval = setInterval(nextImage, 5000);
  // });
  // nextButton.addEventListener("click", () => {
  //   clearInterval(slideInterval);
  //   slideInterval = setInterval(nextImage, 5000);
  // });

  window.addEventListener("load", () => {
    setTimeout(() => {
      const body = document.querySelector("body");
      body.classList.add("loaded");
    }, 4000);
  });

  const swiper = new Swiper(".swiper", {
    // スライドの枚数
    slidesPerView: 1.5,
    // ループ再生
    loop: true,
    // 中央にスライドを表示
    centeredSlides: true,
    // 自動再生
    autoplay: {
      // 自動再生
      delay: 5000, // 1秒後に次のスライド（初期値：3000）
      disableOnInteraction: false, // 矢印をクリックしても自動再生を止めない
    },
    // 矢印の表示
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });

  // スクロール時のヘッダーの色の変化（任意）
  const header = document.querySelector("header");
  window.addEventListener("scroll", () => {
    if (window.scrollY > 50) {
      header.style.backgroundColor = "#113a25"; /* スクロール後の少し濃い色 */
      header.style.boxShadow = "0 4px 8px rgba(0,0,0,0.3)";
    } else {
      header.style.backgroundColor = "#1a4d2e"; /* 元の色 */
      header.style.boxShadow = "0 2px 5px rgba(0,0,0,0.2)";
    }
  });

  // スムーズスクロール
  document.querySelectorAll("nav a").forEach((anchor) => {
    anchor.addEventListener("click", function (e) {
      e.preventDefault();

      const targetId = this.getAttribute("href");
      const targetElement = document.querySelector(targetId);

      window.scrollTo({
        top: targetElement.offsetTop - header.offsetHeight, // ヘッダーの高さを考慮
        behavior: "smooth",
      });
    });
  });
});
