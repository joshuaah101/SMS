require('./bootstrap');
// require('alpinejs');



// const menu_btn = document.querySelector('.mobile-menu-button')
// const menu_list = document.querySelector('.mobile-menu')

// menu_btn.addEventListener('click', function(){
//     menu_list.classList.toggle('hidden')
// })

let menuBtn = document.getElementById('menu-btn')

let mobileMenu = document.getElementById('overlay')
let closeMenu = document.getElementById('close-menu')

menuBtn.addEventListener('click',() => {
    mobileMenu.style.height = "100%"
})

closeMenu.addEventListener('click', () => {
    mobileMenu.style.height = "0"
})



const time = document.querySelector('#dashboard-time')
var date = new Date()

var hour = date.getHours()
var minute = date.getMinutes()
var second = date.getSeconds()


if(hour < 10)
hour = '0'+hour
else if(minute < 10)
minute = '0'+minute

const showTime = () => {
    time.innerHTML =  hour + ' : ' + minute + ' : ' + second
}

// setInterval(() => {
//     showTime()
// }, 1000);


//simple banner slideshow
let sliderIndex = 0

let slider = document.getElementsByClassName("mySlider")

const showSlider = () => {
    for(let i = 0; i < slider.length; i++){
        slider[i].style.display = 'none'
    }
    
    sliderIndex++
    
    if(sliderIndex > slider.length){
        sliderIndex = 1
    }
    
    slider[sliderIndex-1].style.display = 'block'
    setTimeout(showSlider, 9000)
    
}

// showSlider()
window.addEventListener('load', showSlider)

//###############################################################################

//navbar

let navbar = document.getElementById('navbar')
let navLogo = document.getElementById('nav-logo')

window.addEventListener('scroll', () => {
    if(document.documentElement.scrollTop > 30){
        // navbar.classList.remove("py-2", "md:py-2")
        navbar.classList.add('bg-blue-800')
        navbar.classList.remove('py-2', 'md:py-2')
        navLogo.classList.add('absolute')
    }else{
        // navbar.classList.add('py-2', 'md:py-2')
        navbar.classList.remove('bg-blue-800')
        navLogo.classList.remove('absolute')
        navbar.classList.add('py-2', 'md:py-2')
    }
})

