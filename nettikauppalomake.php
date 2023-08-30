<!DOCTYPE html>
<html lang="fi-FI">
    <head>
      <?php include "header.php"; ?>
        <title>Nettikaupan Rekisteröitymislomake</title>
        <link rel="stylesheet" href="nettikauppalomake.css">
    </head>

    <body>
      <?php include "navbar.php"; ?>
        <div id="title">
            <h1>Nettikaupan Rekisteröitymislomake</h1>
        </div>

        <div class="w3-container">
          <form action="" method="post">
            
            <div>
              <fieldset>
                <legend>Yhteystiedot</legend>
                <label for="name">Nimi:</label>
                <input type="text" id="name" name="name" placeholder="Etunimi Sukunimi"><br><br>
                <label for="address">Katuosoite:</label>
                <input type="text" id="address" name="address"><br><br>
                <label for="zip">Postinumero:</label>
                <input type="text" id="zip" name="zip"><br><br>
                <label for="city">Postitoimipaikka:</label>
                <input type="text" id="city" name="city"><br><br>
                <label for="phone">Puhelinnumero:</label>
                <input type="text" id="phone" name="phone" placeholder="358XX1234567"><br><br>
                <label for="email">Sähköpostiosoite:</label>
                <input type="email" id="email" name="email" placeholder="etunimi.sukunimi@yritys.fi"><br><br>
              </fieldset>
            </div>

            <div>
            <fieldset>
            <label for="password">Salasana:</label>
            <input type="password" id="password" name="password"><br><br>
            </fieldset>
            </div>

            <div>
            <label>Mistä osastoista olet kiinnostunut?</label><br>
            <input type="checkbox" id="fashion" name="interest" value="Muoti">
            <label for="fashion">Muoti</label><br>
            <input type="checkbox" id="sports" name="interest" value="Urheilu">
            <label for="sports">Urheilu</label><br>
            <input type="checkbox" id="decor" name="interest" value="Sisustaminen">
            <label for="decor">Sisustaminen</label><br>
            <input type="checkbox" id="games" name="interest" value="Pelit">
            <label for="games">Pelit</label><br>
            <input type="checkbox" id="movies" name="interest" value="Elokuvat">
            <label for="movies">Elokuvat</label><br><br>
            </div>

            <div>
            <label for="payment">Maksutapa:</label>
            <select id="payment" name="payment">
              <option value="sampo">Sampo</option>
              <option value="nordea">Nordea</option>
              <option value="osuuspankki">Osuuspankki</option>
              <option value="aktia">Aktia</option>
            </select><br><br>
            </div>

            <div>
            <label for="feedback">Anna palautetta:</label><br>
            <textarea id="feedback" name="feedback" rows="4" cols="50"></textarea><br><br>
            </div>

            <div>
            <label>Olen lukenut ja hyväksyn tuotteiden toimitusehdot:</label><br>
            <input type="radio" id="yes" name="terms" value="yes">
            <label for="yes">Kyllä</label><br>
            <input type="radio" id="no" name="terms" value="no">
            <label for="no">Ei</label><br><br>
            </div>

            <input id="submit" type="submit" value="Lähetä">

          </form>
        </form> 
        </div>
        <?php include "footer.html" ; ?>
    </body>
</html>