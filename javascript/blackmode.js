let contenu = document.querySelector('.contenue')
let header = document.querySelector('header')
let BlackMode = document.querySelector('.BlackMode');
BlackMode.onclick = function(){
    contenu.classList.toggle('Bactive')
    header.classList.toggle('Bactive')
    BlackMode.classList.toggle('Bactive')
}