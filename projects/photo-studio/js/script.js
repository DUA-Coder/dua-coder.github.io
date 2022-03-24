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