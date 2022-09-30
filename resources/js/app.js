import './bootstrap';

import '../sass/app.scss';

//configuration of the spinner

$(window).on("load", function () {
    setTimeout(removeLoader, 500);
   })
   function removeLoader(){
    $( "#loading" ).fadeOut(1000, function() {
      // fadeOut complete. Remove the loading div
      $( "#loading" ).remove(); //makes page more lightweight
  });
}

$("#burger").click(function (e) {
    e.preventDefault();

      if($("#burger-menu").css("width")=="0px"){
        document.querySelectorAll("#nav_container ul a li i").forEach(item=>{
            item.style.visibility ="visible";
         })
         document.getElementById("burger-menu").style.width="150px";
         document.getElementById("menu-container").style.width="100vw";
      } else{
        document.querySelectorAll("#nav_container ul a li i").forEach(item=>{
            item.style.visibility ="hidden";
         })
         document.getElementById("burger-menu").style.width="0";
         document.getElementById("menu-container").style.width="0";
      }

     return;
 });

$(document).ready(function(){
    const activePage = window.location;
       const navLinks = document.querySelectorAll("#nav_container ul a").forEach(item=>{
          if(item.href == activePage.href){
             var link = item.firstElementChild
             link.classList.add('active')
          }
       })
})

// Wrap every letter in a span
var textWrapper = document.querySelector('.ml2');

if(textWrapper!=null){
   textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

   anime.timeline({loop: true})
     .add({
       targets: '.ml2 .letter',
       scale: [4,1],
       opacity: [0,1],
       translateZ: 0,
       easing: "easeOutExpo",
       duration: 950,
       delay: (el, i) => 70*i
     }).add({
       targets: '.ml2',
       opacity: 0,
       duration: 1000,
       easing: "easeOutExpo",
       delay: 1000
   });
}



function reveal() {
   var reveals = document.querySelectorAll(".reveal");

   for (var i = 0; i < reveals.length; i++) {
     var windowHeight = window.innerHeight;
     var elementTop = reveals[i].getBoundingClientRect().top;
     var elementVisible = 100;

     if (elementTop < windowHeight - elementVisible) {
       reveals[i].classList.add("active");
     } else {
       reveals[i].classList.remove("active");
     }
   }
}

window.addEventListener("scroll", reveal);

   var body = document.getElementById('contact');
   if(body!=null){
    body.style.backgroundColor = '#594683';

    // trigger this function every time the user scrolls
    window.onscroll = function (event) {
        var scroll = window.pageYOffset;
        if (scroll > 500) {
            // green
            body.style.backgroundColor = '#01124A';
        }else{
          body.style.backgroundColor = '#594683';
        }
    }
}


