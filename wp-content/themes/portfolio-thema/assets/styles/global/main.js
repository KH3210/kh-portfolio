// ===============================
// IntersectionObserver（フェードイン）
// ===============================
const fadeItems = document.querySelectorAll('.c-fade-in');

const fadeObserver = new IntersectionObserver((entries, observer) => {
  entries.forEach(entry => {
    if (!entry.isIntersecting) return;  //条件NGなら即終了//
    entry.target.classList.add('is-visible');
    observer.unobserve(entry.target); // 1回だけ実行
  });
});

fadeItems.forEach(el => fadeObserver.observe(el));

// ===============================
// 横スクロール
// ===============================
const container = document.querySelector('.p-works__list');
const cards = document.querySelectorAll('.p-works__item');
const dots = document.querySelectorAll('.dot');
const prevBtn = document.querySelector('.prev');
const nextBtn = document.querySelector('.next');

if (container && cards.length && dots.length && prevBtn && nextBtn) {

  // カード幅取得（gap込み）
  function getScrollAmount() {
    const gap = 80;
    return cards[0].offsetWidth + gap;
  }

  // ドット更新
  function updateDots(index) {
    dots.forEach(dot => dot.classList.remove('is-active'));
    dots[index].classList.add('is-active');
  }

  // スクロール位置から現在index取得
  function getCurrentIndex() {
    const scrollLeft = container.scrollLeft;
    const scrollAmount = getScrollAmount();
    return Math.round(scrollLeft / scrollAmount);
  }

  // ドットクリックで移動
  dots.forEach((dot, index) => {
    dot.addEventListener('click', () => {
      container.scrollTo({
        left: getScrollAmount() * index,
        behavior: 'smooth',
      });
      updateDots(index);
    });
  });

  // スクロール時にドット更新
  container.addEventListener('scroll', () => {
    const index = getCurrentIndex();
    updateDots(getCurrentIndex());
  });


  // 次へ
  nextBtn.addEventListener('click', () => {
    container.scrollBy({
      left: getScrollAmount(),
      behavior: 'smooth',
    });
  });

  // 前へ
  prevBtn.addEventListener('click', () => {
    container.scrollBy({
      left: -getScrollAmount(),
      behavior: 'smooth',
    });
  });
}


// ===============================
// contact メールアドレスエラー
// ===============================
const email = document.querySelector('#email');

if (email) {
  email.addEventListener('blur', () => {
    const field = email.closest('.p-contact__field');

    if (!email.validity.valid) {
      field.classList.add('is-error');
    } else {
      field.classList.remove('is-error');
    }
  });
}


// ===============================
// SPハンバーガーメニュー
// ===============================
const hamburger = document.querySelector('.js-hamburger');
const drawer = document.querySelector('.js-drawer');
const navLinks = document.querySelectorAll('.js-drawer a');

if (hamburger && drawer) {

  const toggleMenu = () => {
    hamburger.classList.toggle('is-active');
    drawer.classList.toggle('is-open');
  };

  const closeMenu = () => {
    hamburger.classList.remove('is-active');
    drawer.classList.remove('is-open');
  };

  // ハンバーガークリック
  hamburger.addEventListener('click', toggleMenu);

  // ナビリンククリック
  navLinks.forEach(link => {
    link.addEventListener('click', closeMenu);
  });
}
