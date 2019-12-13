var app = {

    init: function () {

        console.log('app : init');

        app.fields = document.querySelectorAll('.input-field');
        for (
            var fieldIndex = 0;
            fieldIndex < app.fields.length;
            fieldIndex++
        ) {
            console.log('Champs dans la boucle:', app.fields[fieldIndex]);
            app.fields[fieldIndex].addEventListener('input', app.handleInput);
        }



        //var form = document.querySelector('#contact-form');
        //form.addEventListener('submit', app.handleSubmitForm);


         /////////////////// SWITCH THEME SELECTOR ///////////////////

        // Selection du thème puis stockage local du choix de l'utilisateur 
        app.toggleSwitch = document.querySelector('.theme-switch input[type="checkbox"]');
        app.currentTheme = localStorage.getItem('theme') ? localStorage.getItem('theme') : null;
        app.toggleSwitch.addEventListener('change', app.switchTheme, false);

        // Application du thème courant
        if (app.currentTheme) {
            document.documentElement.setAttribute('data-theme', app.currentTheme);
            if (app.currentTheme === 'dark') {
                app.toggleSwitch.checked = true;
            }
        }

        /////////////////// MASK URL SHOWER ON HOVER NAV ///////////////////
        var hideRightBoardOnHover = document.querySelector('nav');
        hideRightBoardOnHover.addEventListener('mouseover', app.hideRightBoard);

        var hideRightBoardOnHover = document.querySelector('nav');
        hideRightBoardOnHover.addEventListener('mouseleave', app.showRightBoard);
    },

     /////////////////// THEME SWITCHER ///////////////////

     switchTheme: function (evt) {

        console.log('Theme switched');

        if (evt.target.checked) {
            document.documentElement.setAttribute('data-theme', 'dark');
            localStorage.setItem('theme', 'dark');
        }
        else {
            document.documentElement.setAttribute('data-theme', 'light');
            localStorage.setItem('theme', 'light');
        }
    },

         /////////////////// CONTROL URL SHOWER MENU ///////////////////

    hideRightBoard: function () {
        document.querySelector('#rightBoard').style.display = 'none';
    },

    showRightBoard: function () {
        document.querySelector('#rightBoard').style.display = 'block';
    },

    
    /**
     * 
     * @param {CONTACT} evt 
     */

    handleSubmitForm: function (evt) {
        evt.preventDefault();

        // équivalent à : var form = document.querySelector('#login-form');
        var form = evt.target;

        var errorContainer = document.querySelector('#errors');

        // On réinitialise l'état d'origine de notre container d'erreurs
        errorContainer.innerHTML = '';

        // Présomption d'innocence
        var formValid = true;

        for (
            var fieldIndex = 0;
            fieldIndex < app.fields.length;
            fieldIndex++
        ) {
            // On stocke dans une variable le champs courant de la boucle
            var currentField = app.fields[fieldIndex];
            console.log('verif à la soumission');

            if (currentField.value.length < 3) {
                //Possibilté de récupération des messages d'erreurs (Non retenu)
                //console.log(app.errors[fieldIndex]);
                var error = document.createElement('p');
                error.className = 'error';
                error.textContent = currentField.placeholder + ' doit contenir au moins 3 caractères';
                errorContainer.appendChild(error);
                formValid = false;
            } 
        }

        if (formValid) {
            // Formulaire valide
            form.submit();
            console.log('Message envoyé');
        }

    },

    handleInput: function (evt) {
        //console.log(evt);
        var currentField = evt.target;
        console.log("valeur du champs courant:", currentField.value);


        // On réinitialise l'état d'origine des champs
        currentField.classList.remove('valid');
        currentField.classList.remove('invalid');

        if (currentField.value.length < 3) {
            currentField.classList.add('invalid');

        } else {
            currentField.classList.add('valid');
        }
    }

};

document.addEventListener('DOMContentLoaded', app.init);