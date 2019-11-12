var app = {

    init: function () {

        console.log('app : init');

        var theme = document.querySelector('#theme-switcher');
        theme.addEventListener('change', app.handleChangeTheme);



        app.fields = document.querySelectorAll('.input-field');
        for (
            var fieldIndex = 0;
            fieldIndex < app.fields.length;
            fieldIndex++
        ) {
            console.log('Champs dans la boucle:', app.fields[fieldIndex]);
            app.fields[fieldIndex].addEventListener('input', app.handleInput);
        }



        var form = document.querySelector('#contact');
        form.addEventListener('submit', app.handleSubmitForm);

    },

    // THEME SWITCHER
    handleChangeTheme: function (evt) {
        evt.target.form.submit();
    },


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