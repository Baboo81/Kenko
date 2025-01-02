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
        case '../assets/src/views/kenko-ho.html':
            navBar.style.color = '#f1efe9';
            break;
        case '../assets/src/views/kenko-web.html':
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
    }, 600) //1s = 1000ms
}); 

//Footer; map :

    //Create map:
const centroid = [50.71036, 4.36889];
const map = L.map('mapid').setView(centroid, 16.4);

    //Add tiles & marker:
L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png').addTo(map);
L.marker([50.71036, 4.36889]).addTo(map);
