const menu=document.getElementById("menu");
const action=document.getElementById("action");
menu.addEventListener("click",()=>{
    EnzlMenu();
})
function EnzlMenu() {
    menu.classList.toggle("is-active");
    action.classList.toggle("is-active");
}
let span = document.querySelector(".up");

window.onscroll = function () {
  this.scrollY >= 100 ? span.classList.add("show") : span.classList.remove("show");
};

span.onclick = function () {
  window.scrollTo({
    top: 0,
    behavior: "smooth",
  });
};

var typed = new Typed(".auto-type",{
    strings:["", "Web Developper", "Pentester","Freelancer","Ethical Hacker"],
    typeSpeed:150,
    backspeed:150,
    loop:true
})

window.addEventListener("scroll", function(){
  var header = document.querySelector("nav");
  header.classList.toggle("sticky",window.scrollY >= 2)
})