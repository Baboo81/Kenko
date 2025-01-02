"use strict";

//navBar; color's switch:

document.addEventListener('DOMContentLoaded', function() {
    let navBar = document.querySelector('nav');

    //Pour obtenir la page actuelle:
    let currentPage = window.location.pathname;

    //Définition de la couleur de typo en fct de la page :
    switch (currentPage) {
        case 'index.html':
            navBar.style.color = '#282828';
            break;
        case 'kenko-ho.html':
            navBar.style.color = '#f1efe9';
            break;
        case 'kenko-web.html':
            navBar.style.color = '#f1efe9';
            break;
    }
});

//btn animation :

let btn = document.querySelector(".button");

btn.addEventListener("click", (e) => {
    e.preventDefault();
    btn.classList.add("animate");

    setTimeout(() => {
        btn.classList.remove("animate");
        console.log("Je suis ici :)))");
    }, 600) //1s = 1000ms
}); 