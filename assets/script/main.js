"use strict";

//btn animation :

let btn = document.querySelector(".button");

btn.addEventListener("click", (e) => {
    e.preventDefault();
    btn.classList.add("animate");

    setTimeout(() => {
        btn.classList.remove("animate");
    }, 600) //1s = 1000ms
}); 