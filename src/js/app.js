//Cuando ya este cargado tanto el js, html y css execute the function
document.addEventListener('DOMContentLoaded', function(){
    eventListeners();
    darkMode();
});
function darkMode(){
    const prefiereDarkMode = window.matchMedia('(prefers-color-scheme: dark)');
   

     if(!prefiereDarkMode.matches){
         document.body.classList.add('dark-mode')//Af
         console.log('Prefiere dark mode matches');
     }else{
         document.body.classList.remove('dark-mode')
     }

     //Cmbue en automatico, dependiendo de las preferencias o configuraciones que tenga el usuario en su navegador.
    prefiereDarkMode.addEventListener('change',function(){
        if(prefiereDarkMode.matches){
            document.body.classList.add('dark-mode')//Af
            console.log('Prefiere dark mode matches');
        }else{
            document.body.classList.remove('dark-mode')
        }
    })

    const botonDarkMode= document.querySelector('.dark-mode-boton');
    botonDarkMode.addEventListener('click', function(){
        document.body.classList.toggle('dark-mode')
    })
}

function eventListeners(){
   const mobileMenu = document.querySelector('.mobile-menu')//Estamos tomando la clase que tenemos en el HTML.Lleva punto por que es una clase

mobileMenu.addEventListener('click', navegacionResponsive); //Cuando de click se ejecute el codifgo que le pasare

}   

function navegacionResponsive(){
const navegacion = document.querySelector('.navegacion');
        navegacion.classList.toggle('mostrar')

}
