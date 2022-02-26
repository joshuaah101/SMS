require('./bootstrap');
// require('alpinejs');



// const menu_btn = document.querySelector('.mobile-menu-button')
// const menu_list = document.querySelector('.mobile-menu')

// menu_btn.addEventListener('click', function(){
//     menu_list.classList.toggle('hidden')
// })

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
    
}

setInterval(showSlider, 5000)

showSlider()

//navbar

let navbar = document.getElementById('navbar')
let navLogo = document.getElementById('nav-logo')

window.addEventListener('scroll', () => {
    if(document.documentElement.scrollTop > 30){
        // navbar.classList.remove("py-2", "md:py-2")
        navbar.classList.add('bg-blue-800')
        navLogo.classList.add('absolute')
    }else{
        // navbar.classList.add('py-2', 'md:py-2')
        navbar.classList.remove('bg-blue-800')
        navLogo.classList.remove('absolute')

    }
})