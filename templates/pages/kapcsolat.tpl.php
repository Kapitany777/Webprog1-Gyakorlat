<h2>Kapcsolat</h2>

<form name="kapcsolatrogz" method="post" action="kapcsolatrogz" onsubmit="return ellenoriz();">
    <fieldset>
        <legend>Kapcsolat</legend>

        <label for="nev">Név:</label>
        <input type="text" id="nev" name="nev" size="40" maxlength="40" placeholder="A felhasználó neve">

        <label for="email">E-mail:</label>
        <input type="email" id="email" name="email" size="40" maxlength="40" placeholder="A felhasználó e-mail címe">

        <label for="uzenet">Üzenet:</label>
        <textarea id="szoveg" name="szoveg" cols="50" rows="10"></textarea>

        <input type="submit" value="Üzenet küldése">
    </fieldset>
</form>
