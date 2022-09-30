
 $("#burger").click(function (e) {
    e.preventDefault();

      if($("#burger-menu").css("width")=="0px"){
         document.getElementById("burger-menu").style.width="150px";
         document.getElementById("menu-container").style.width="100vw";
      } else{
         document.getElementById("burger-menu").style.width="0";
         document.getElementById("menu-container").style.width="0";
      }

     return;
 });

$(document).ready(function(){
   const activePage = window.location.pathname;
   const navLinks = document.querySelectorAll("#nav_container ul a").forEach(item=>{
      if(item.href.includes(activePage)){
         console.log(item)
         var link = item.firstElementChild
         link.classList.add('active')
      }
   })

})

