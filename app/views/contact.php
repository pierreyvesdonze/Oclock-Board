<?php
require '../functions/myFunctions.php';
require 'header.tpl.php';
require 'board.tpl.php';
?>

  <main>
      <form action="" id="contact">
        <input type="text" class="input-field" id="name" placeholder="Nom" autocomplete="off" required>
        <input type="text" class="input-field" id="firstname" placeholder="Prénom" autocomplete="off" required>
        <input type="mail" class="input-field"  id="mail" placeholder="Email" autocomplete="off" required>
        <textarea name="message" class="input-field" id="message" placeholder="Votre message" autocomplete="off" required col='20'></textarea>

        <div id="errors"></div>

        <button type="submit" id="contact-submit">Envoyer</button>
      </form>
    </main>

<?php require 'inc/footer.tpl.php';?>