<?php ob_start(); ?>
    <form id="contact" action="/WEBR4/" method="POST">
        <label>Adresse mail:
            <input type="text" name="mail" size="20">
        </label><br>
        <label>Votre pseudo:
            <input type="nom" name="login"/>
        </label><br>
        <label>Votre nom:
            <input type="nom" name="nom"/>
        </label><br>
        <label>Votre prénom:
            <input type="nom" name="prenom"/>
        </label><br>
        <label>Raison du contact
            <select name="Raison du contact">
                <option>probleme d affichage</option>
                <option>probleme de lien</option>
                <option>jeux manquant</option>
                <option>modifier une commande</option>
                <option>autre</option>
            </select>
        </label><br>
        <label>formulez votre demande<br>
            <textarea name="comment" id="input7" class="inputTextArea" rows="8" cols="50"></textarea>
        </label><br>
        <input type="submit"/><br>
    </form>
<?php $content = ob_get_clean(); ?>
<?php require "template.php"; ?>