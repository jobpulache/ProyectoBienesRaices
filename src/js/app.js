//Cuando ya este cargado tanto el js, html y css execute the function
document.addEventListener('DOMContentLoaded', function(){
    eventListeners();
});

function eventListeners(){
   const mobileMenu = document.querySelector('.mobile-menu')//Estamos tomando la clase que tenemos en el HTML.Lleva punto por que es una clase

mobileMenu.addEventListener('click', navegacionResponsive); //Cuando de click se ejecute el codifgo que le pasare

}   

function navegacionResponsive(){
const navegacion = document.querySelector('.navegacion');
        navegacion.classList.toggle('mostrar')

}