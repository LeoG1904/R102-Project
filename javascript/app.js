var btn = document.querySelector('.button');
var nav = document.querySelector('.nav');
const header = document.querySelector('header');

btn.onclick = function(){
  nav.classList.toggle('nav_open');
}


/*
window.onscroll = function(){
  var top = window.scrollY;
  if (top >= 30){
    header.classList.add('active');
  }else{
    header.classList.remove('active');
  }
}
*/