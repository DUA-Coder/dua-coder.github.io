// $('.services').slick({
//     dots: true,
//     infinite: true,
//     speed: 300,
//     autoplay: true,
//     slidesToShow: 3,
//     slidesToScroll: 1,
//     responsive: [
//       {
//         breakpoint: 992,
//         settings: {
//           slidesToShow: 2,
//           slidesToScroll: 1
//         }
//       },
//       {
//         breakpoint: 580,
//         settings: {
//           slidesToShow: 1,
//           slidesToScroll: 1
//         }
//       }
//       // You can unslick at a given breakpoint now by adding:
//       // settings: "unslick"
//       // instead of a settings object
//     ]
//   });
          

const menu = document.querySelector(".header__top nav"),
      toggler = document.querySelector(".header__top_toggler");

toggler.addEventListener('click', ()=>{
  menu.classList.toggle('show-flex');
});
 

const serviceButton = document.querySelectorAll(".service button"),
      modal = document.querySelectorAll(".modal"),
      body = document.querySelector('body'),
      close = document.querySelectorAll(".close");

function showModal(selector){
  for(let i = 0; i<modal.length;i++){
    if(selector == modal[i].id){
      modal[i].classList.add('show');
      body.style.overflow="hidden";
    }
    close[i].addEventListener("click",()=>{
      modal[i].classList.remove("show");
      body.style.overflow="";
    });

    document.addEventListener("keydown",(e)=>{
      if (e.code === 'Escape') {
        modal[i].classList.remove("show");
        body.style.overflow="";
      }
    });
  }
}


for(let i = 0; i<serviceButton.length; i++){
  serviceButton[i].addEventListener("click",()=>{
    btnAttribute = serviceButton[i].getAttribute("data-modal");
    showModal(btnAttribute);
  });
};