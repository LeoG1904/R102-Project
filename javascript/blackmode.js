let contenu = document.querySelector('.contenue')
let header = document.querySelector('header')
let BlackMode = document.querySelector('.BlackMode');
let ancrage = document.querySelector('.ancrage');
let menu = document.querySelector('.menu');
let BontouMenu = document.querySelector('.BoutonMenu');
BlackMode.onclick = function(){
    contenu.classList.toggle('Bactive')
    header.classList.toggle('Bactive')
    BlackMode.classList.toggle('Bactive')
    BontouMenu.classList.toggle('Bactive')
    menu.classList.toggle('Bactive')
    ancrage.classList.toggle('Bactive')
}