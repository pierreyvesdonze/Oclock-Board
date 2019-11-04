//////////////////////////////////////////////////// SWAPCSS
// Fonctions permettant de modifier le css
var app = {

    init: function () {

        console.log('app : init');

        var blueButton = document.querySelector('#blueStyle');
        blueButton.addEventListener('click', app.swapBlueLogo);
        blueButton.addEventListener('click', app.swapBlueButton);
        var orangeButton = document.querySelector('#orangeStyle');
        orangeButton.addEventListener('click', app.swapOrangeLogo);
        orangeButton.addEventListener('click', app.swapOrangeButton);

    },

    swapBlueLogo: function () {

        var cssSheet = '../css/style.css';
        document.getElementById('cssFile').setAttribute('href', cssSheet)

        var logo = document.querySelector('#logo-img');
        logo.src = "../images/logo_oclock.png";
    },

    swapOrangeLogo: function () {
        var cssSheet = '../css/style_2.css';
        document.getElementById('cssFile').setAttribute('href', cssSheet)

        var logo = document.querySelector('#logo-img');
        logo.src = "../images/logo_oclock_3.png";
    },

    swapBlueButton: function (){
        var blue = document.querySelector('#blueStyle');
        blue.style.backgroundColor  = '#01c3a8';
        var orange = document.querySelector('#orangeStyle');
        orange.style.backgroundColor  = '#000';
    },

    swapOrangeButton: function (){
        var orange = document.querySelector('#orangeStyle');
        orange.style.backgroundColor  = '#ff7b00';
        var blue = document.querySelector('#blueStyle');
        blue.style.backgroundColor  = '#000';
    },

};

document.addEventListener('DOMContentLoaded', app.init);