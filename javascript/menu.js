let menu = document.querySelector('.menu');
let menutoggle = document.querySelector('.BoutonMenu');
menutoggle.onclick = function(){
    menutoggle.classList.toggle('active')
    menu.classList.toggle('active')
}

let contenu = document.querySelector('.contenue')
let header = document.querySelector('header')
let BlackMode = document.querySelector('.BlackMode');
let ancrage = document.querySelector('.ancrage');
BlackMode.onclick = function(){
    contenu.classList.toggle('Bactive')
    header.classList.toggle('Bactive')
    BlackMode.classList.toggle('Bactive')
    menutoggle.classList.toggle('Bactive')
    menu.classList.toggle('Bactive')
    ancrage.classList.toggle('Bactive')
}