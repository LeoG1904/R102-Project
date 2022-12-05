let menu = document.querySelector('.menu')
      let menutoggle = document.querySelector('.toggle');
      menutoggle.onclick = function(){
        menutoggle.classList.toggle('active')
        menu.classList.toggle('active')
      }