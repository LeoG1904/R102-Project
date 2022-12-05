let menu = document.querySelector('.menu');
let contenue = document.querySelector('.contenue');
let menutoggle = document.querySelector('.toggle');
menutoggle.onclick = function(){
    menutoggle.classList.toggle('active')
    menu.classList.toggle('active')
    contenue.classList.toggle('active')
}