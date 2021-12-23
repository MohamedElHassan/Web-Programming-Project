// Whatsapp Button Logic
const whatsappBtn = document.querySelector('.whatsapp-btn');
let isStarted = false;
window.onscroll = function(){
    if(window.scrollY > 500){
        if(!isStarted){
            whatsappBtn.classList.add('show');
        }
        // isStarted = true;
    }else {
        whatsappBtn.classList.remove('show');
    }
}

// Creating Tabs Login

let Tabs = Array.from(document.querySelectorAll('.menu-btns li'));
let contents = Array.from(document.querySelectorAll('.content'))

Tabs.forEach(tab => {
    tab.addEventListener('click',function(){
        let tabSelected = tab.dataset.clickedtab;
        contents.forEach(content=>{
            content.classList.remove('active');  
        })
        Tabs.forEach(tab=>{
            tab.classList.remove('active')
        })
        tab.classList.add('active');
        contents.forEach(content=>{
            if(content.dataset.contentnum === tabSelected){
                content.classList.add('active')
            }
        })
    });
});