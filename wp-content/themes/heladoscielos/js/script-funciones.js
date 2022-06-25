
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

