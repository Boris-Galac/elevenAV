if (!window.location.href.includes("radovi")) {
  let txt = `profesionalna video produkcija za vas`;
  let speed = 50; // Speed of typing in milliseconds
  let i = 0;

  function typeWriter() {
    if (i < txt.length) {
      document.querySelector(".hero__headline").innerHTML += txt.charAt(i);
      i++;
      setTimeout(typeWriter, speed);
    }
  }
  typeWriter();

  // swiper

  var swiper = new Swiper(".mySwiper", {
    slidesPerView: 1,
    spaceBetween: 10,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    breakpoints: {
      640: {
        slidesPerView: 2,
        spaceBetween: 20,
      },
      800: {
        slidesPerView: 3,
        spaceBetween: 60,
      },
      900: {
        slidesPerView: 3,
        spaceBetween: 40,
      },
    },
  });
}

if (window.location.href.includes("radovi")) {
  const radoviHeader = document.querySelector(".header-radovi").scrollHeight;
  console.log(radoviHeader);
  document.querySelector(".main-radovi").style = `
    padding-top: ${radoviHeader + 50}px;
  `;
}
