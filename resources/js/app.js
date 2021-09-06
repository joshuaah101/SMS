require('./bootstrap');

// require('alpinejs');

const menu_btn = document.querySelector('.mobile-menu-button')
const menu_list = document.querySelector('.mobile-menu')

menu_btn.addEventListener('click', function(){
    menu_list.classList.toggle('hidden')
})