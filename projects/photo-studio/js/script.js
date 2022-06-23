const menuToggler = document.querySelector(".header__menu_toggle"),
      headerMenuRight = document.querySelector(".header__menu_right"),
      headerMenu = document.querySelector(".header__menu nav");

menuToggler.addEventListener("click",()=>{
    headerMenu.classList.toggle("show-flex");
    headerMenuRight.classList.toggle("show-flex");

    if(headerMenu.classList.contains('show-flex' )){
        headerMenu.classList.add('animate__animated', 'animate__fadeInDown');
        headerMenuRight.classList.add('animate__animated', 'animate__fadeInUp');
    }else{
        headerMenu.classList.remove('animate__animated', 'animate__fadeInDown');         
        headerMenuRight.classList.remove('animate__animated', 'animate__fadeInUp');
    }
})

console.log(headerMenuRight.classList.contains("show-flex"));


// const tabContentHumansImg = document.querySelectorAll(".professional__tabcontent_human img"),
//       tabContentRightPreview = document.querySelectorAll(".tabcontent__right_img"),
//       tabContent = document.querySelectorAll(".tabContent");
// let tabContents = Array.prototype.slice.call(tabContent);
// console.log(tabContents)

// function hideAllPhotos(selector){
//     const elem = document.querySelectorAll(selector);
//     elem.forEach(item=>{
//         item.classList.remove('show');
//         item.classList.add('hide');
//     });
// }

// function showPhoto(i = 0, selector){
//     const elem = document.querySelectorAll(selector);
//     elem[i].classList.remove('hide');
//     elem[i].classList.add('show');
// };

// tabContentHumansImg.forEach((item,i)=>{
//     item.addEventListener('click',()=>{
//         hideAllPhotos(".tabcontent__right_img");
//         showPhoto(i, '.tabcontent__right_img');
//     });
// });

// hideAllPhotos(".tabcontent__right_img");
// showPhoto(0, ".tabcontent__right_img");
// console.log(tabContent)
// function showSlides(rightArrow){
    
//     rightArrow.addEventListener("click",()=>{
        
//         tabContents.forEach((item,i)=>{
//             item.classList.remove('hide');
//             item.classList.add('show');
//             console.log(i)
//         });
//     });
    
// }

// const arrowRight = document.querySelector("#arrow_right")

// showSlides(arrowRight);


// if(document.body.offsetWidth<576){
//     hideAllPhotos('.tabContent');
//     showPhoto(0,".tabContent")
// }



// Reviews Slider

$('.reviews__slider').slick({
    dots: true,
    infinite: true,
    speed: 300,
    slidesToShow: 3,
    slidesToScroll: 1,
    arrows: false,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 2,
          slidesToScroll:1,
          infinite: true,
          dots: true
        }
      },
      {
        breakpoint: 550,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
    ]
  });