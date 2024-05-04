// TITRES
  
// Sélectionner tous les éléments avec la classe '.titles'
const titles = document.querySelectorAll('.titles');

const observerTitle = new IntersectionObserver(entries => {
  //Pour chaque entrée...
  entries.forEach(entry => {
    //...Vérifier si le titre est dans la zone observée 
    if (entry.isIntersecting) {
      // Ajouter la classe 'title-animation' si l'élément est visible
      entry.target.classList.add('title-animation');
      return;
    }
    //Retirer la classe si l'élément n'est pas visible
    entry.target.classList.remove('title-animation');
  });
});
  
// Observer chaque élément avec IntersectionObserver
titles.forEach((element) => observerTitle.observe(element));

//NUAGES
let bigCloud = document.querySelector('.big-cloud');
let littleCloud = document.querySelector('.little-cloud');

let initialXBigCloud = 1600; 
let initialXLittleCloud = 1580;

window.addEventListener('scroll', function () {
  let placeSection = document.querySelector('#place').getBoundingClientRect();
  let windowHeight = window.innerHeight;

  // Vérifier si la section est dans la fenêtre visible
  if (placeSection.top < windowHeight && placeSection.bottom > 0) {
    let scrollPosition = window.scrollY;

    let bigCloudSpeed = 0.4;
    let littleCloudSpeed = 0.4;

    // Calcul de la position en fonction de la position initiale
    let translatedXBigCloud = initialXBigCloud - scrollPosition * bigCloudSpeed;
    let translatedXLittleCloud = initialXLittleCloud - scrollPosition * littleCloudSpeed;

    // Application du mouvement
    bigCloud.style.transform = 'translateX(' + translatedXBigCloud + 'px) translateY(-180px)';
    littleCloud.style.transform = 'translateX(' + translatedXLittleCloud + 'px) translateY(-150px)';
  }
});


//CHARACTERS
var swiper = new Swiper(".slide-content", {
  spaceBetween: 60,
  speed:1000,
  effect: "coverflow",
  grabCursor: true,
  centeredSlides: true,
  loop: true,
  slidesPerView: "auto",
  slidesPerColumn: 1,
  coverflowEffect: {
    rotate: 60,
    stretch: 0,
    depth: 100,
    modifier: 1,
    slideShadow: false,
  },
  pagination: {
    el: ".swiper-content",
  },
  autoplay: {
    delay: 2500, 
    disableOnInteraction: false,
  },
});

//MENU BURGER
//Sélection des menus+éléments
let menuBtn = document.querySelector('.menu-btn');
let menu = document.querySelector('.nav');
let menuItem = document.querySelectorAll('.nav__link');

  // Ajout écouteur d'évènements au clic
  menuBtn.addEventListener('click', function(){
  
  // Ajoute la classe active
	menuBtn.classList.toggle('active');
	menu.classList.toggle('active');
});

menuItem.forEach (function(menuItem) {
  menuItem.addEventListener('click',function(){
    menuBtn.classList.toggle('active');
    menu.classList.toggle('active');
  })
});