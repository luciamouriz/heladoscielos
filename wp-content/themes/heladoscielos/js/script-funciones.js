
let elementMenu01 = document.getElementById("menu-item-31");
let elementMenu02 = document.getElementById("menu-item-30");
let elementMenu03 = document.getElementById("menu-item-29");
let elementMenu04 = document.getElementById("menu-item-106");
let elementImg01 = document.getElementById("imagen01");
let elementImg02 = document.getElementById("imagen02");
let elementImg03 = document.getElementById("imagen03");
let elementImg04 = document.getElementById("imagen04");
let array = [elementMenu01, elementMenu02, elementMenu03,elementMenu04];
let arrayImg = [elementImg01 , elementImg02, elementImg03,elementImg04]

for (let i = 0; i < array.length; ++i) {
        
    array[i].addEventListener('mouseover', function() {
    arrayImg[i].style.transform = "translateY(6em)";
    arrayImg[i].style.transition = " all 500ms ease-in-out";
    
    });

    array[i].addEventListener('mouseout', function() {
    arrayImg[i].style.transform = "translateY(0em)";
    });
        
}


const toggleButton = document.getElementById('menu-boton-mobile')
const navWrapper = document.getElementById('nav')


toggleButton.addEventListener('click',() => {
  toggleButton.classList.toggle('close')
  navWrapper.classList.toggle('show')
})
navWrapper.addEventListener('click',e => {
    if(e.target.id === 'nav'){
      navWrapper.classList.remove('show')
      toggleButton.classList.remove('close')
    }
  })

  function logoScroll(){
    const logo = document.querySelector('.custom-logo')

    //Cantidad de scroll que hemos bajado
    let scrollTop = document.documentElement.scrollTop;
    if(scrollTop>logo.scrollTop){
      logo.style.width="15%"
      logo.style.height="15%"
    }else{
      logo.style.width="25%"
      logo.style.height="25%"
    }
    
  }

  window.addEventListener('scroll',logoScroll)
