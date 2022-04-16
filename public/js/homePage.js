const swiper = new Swiper('.swiper', {
    // Optional parameters
    // direction: 'vertical',
    loop: true,
  
    // If we need pagination
    pagination: {
      el: '.swiper-pagination',
    },
  
    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  
    // And if we need scrollbar
    scrollbar: {
      el: '.swiper-scrollbar',
    },
  });

setInterval(() => {
    document.querySelector(".swiper-button-next").click();
}, 3000);



let hamburger=document.querySelector(".hamburger");
let bottomNav=document.querySelector(".bottomNav");
let isClicked=true;
hamburger.addEventListener('click',()=>{

    if(isClicked){
      hamburger.innerHTML="close";
      bottomNav.style.display="flex";
      isClicked=false;
    }
    else{
      hamburger.innerHTML="dehaze";
      bottomNav.style.display="none";
      isClicked=true;


    }
});


gsap.from(".navBar", {duration: 1,opacity:1, y: -400,ease:"power1"});
gsap.from(".swiper", {duration: 2, opacity:0.1,ease:"power1"});
gsap.from(".feature", {duration: 0.8,opacity:0.1,stagger:1});
gsap.from(".extraFeatures", {duration: 1, opacity:0.1});
