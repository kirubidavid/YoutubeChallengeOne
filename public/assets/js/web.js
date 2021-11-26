const navMenu = document.getElementById('nav-menu'),
        navToggle =  document.getElementById('nav-toggle')
        navClose =  document.getElementById('nav-close');

if(navToggle){
    navToggle.addEventListener('click',() =>{
        navMenu.classList.add('show-menu')
    })
}

if(navClose){
    navClose.addEventListener('click',()=>{
        navMenu.classList.remove('show-menu')
    })
}

/*-------- Remove Mobile Menu ---------*/
const navLink = document.querySelectorAll('.nav_link');

function linkAction(){
    const navMenu = document.getElementById('nav-menu');
    navMenu.classList.remove('show-menu');
}

navLink.forEach(n => n.addEventListener('click', linkAction));

/*-------- Change background header ---------*/
function scrollHeader(){
    const header = document.getElementById('header')
    //When  scroll is greater than 200 viewport height, add  the scroll header class to the header tag
    if(this.scrollY >= 100)
        header.classList.add('scroll_header');
        else header.classList.remove('scroll_header')

} 
window.addEventListener('scroll', scrollHeader);