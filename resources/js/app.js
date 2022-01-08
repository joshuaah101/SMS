require('./bootstrap');
// require('alpinejs');



const menu_btn = document.querySelector('.mobile-menu-button')
const menu_list = document.querySelector('.mobile-menu')

menu_btn.addEventListener('click', function(){
    menu_list.classList.toggle('hidden')
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

setInterval(() => {
    showTime()
}, 1000);


//banner slider
$(document).ready(function(){
    var cont=0;
    function loopSlider(){
      var xx= setInterval(function(){
            switch(cont)
            {
            case 0:{
                $("#slider-1").fadeOut(400);
                $("#slider-2").delay(400).fadeIn(400);
                $("#sButton1").removeClass("bg-pink-800");
                $("#sButton2").addClass("bg-pink-800");
            cont=1;
            
            break;
            }
            case 1:
            {
            
                $("#slider-2").fadeOut(400);
                $("#slider-1").delay(400).fadeIn(400);
                $("#sButton2").removeClass("bg-pink-800");
                $("#sButton1").addClass("bg-pink-800");
               
            cont=0;
            
            break;
            }
            
            
            }},8000);
    
    }
    
    function reinitLoop(time){
    clearInterval(xx);
    setTimeout(loopSlider(),time);
    }
    
    
    
    function sliderButton1(){
        $("#slider-2").fadeOut(400);
        $("#slider-1").delay(400).fadeIn(400);
        $("#sButton2").removeClass("bg-pink-800");
        $("#sButton1").addClass("bg-pink-800");
        reinitLoop(4000);
        cont=0
        
        }
        
        function sliderButton2(){
        $("#slider-1").fadeOut(400);
        $("#slider-2").delay(400).fadeIn(400);
        $("#sButton1").removeClass("bg-pink-800");
        $("#sButton2").addClass("bg-pink-800");
        reinitLoop(4000);
        cont=1
        
        }
    
        $(window).ready(function(){
            $("#slider-2").hide();
            $("#sButton1").addClass("bg-pink-800");
            
            loopSlider();
        });
    
      
})