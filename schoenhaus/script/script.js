//open burger menue

function openLinks(){
    let burger = document.querySelector('.line1');
    let dropDown = document.querySelector('.nav-links-mobile');
    burger.addEventListener("click", ()=>{
      dropDown.style.display ="block";
    });
}

//close burger menue
function closeLinks(){
    let burger = document.querySelector('.close-btn');
    let dropDown = document.querySelector('.nav-links-mobile');
    burger.addEventListener("click", ()=>{
      dropDown.style.display ="none";
    });
}

//Dropdown mobile onclick display : Block;
function mobileDropDown(){
  let leistungen = document.querySelector('.dropdown-mobile');
  let content = document.querySelector('.dropdown-content-mobile');
  leistungen.addEventListener("click", ()=>{
    content.style.display="block";
  });
}