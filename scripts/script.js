const whatsappBtn = document.querySelector('.whatsapp-btn');
let isStarted = false;
window.onscroll = function(){
    if(window.scrollY > 500){
        if(!isStarted){
            whatsappBtn.classList.toggle('show');
        }
        isStarted = true;
    }
}