<!DOCTYPE html>
<html lang="fi-FI">
    <head>
        <meta charset="UTF-8">
        <title>Profiili</title>
        <link rel="stylesheet" href="profiili.css">
    </head>

    <body>
        <div id="title">
            <h1>Oma profiilini</h1>
        </div>
        <div class="row">
            <div class="column">
                <img id="profile-picture" src="prof_pic.jpg" alt="Hymyilevä nainen hatussa, huivissa ja takissa talvimaisema taustalla">
            </div>
            <div class="column">
                <h2>Perustiedot</h2>
                    <p><b>Nimi:</b> Edina Petroczki<br>  
                    <b>Sukupuoli:</b> Nainen<br>
                    <b>Syntymävuosi:</b> 1991<br>
                    <b>Asuinpaikka:</b> Helsinki</p>
            </div>
            <div class="column">
                <h2>Yhteistiedot</h2>
                    <p><b>Email:</b> petroczki.edina@gmail.com<br>
                    <b>Puhelin:</b> +358 44 2371492</p>
            </div>
        </div>
        <div id="main-text">
            <h2>Oma kuvaus</h2>
                <p>
                    Olen vastavalmistunut ohjelmistokehittäjä, jolla on utelias mieli ja erinomaiset ongelmanratkaisutaidot. Harjoittelijana <a href="https://www.nokia.com/" target="_blank">Nokia</a>lla kokeilin ohjelmistokehityksen alaa ja sain vahvistuksen soveltuvuudestani ammattiin.
                </p>
                <p>
                    Intohimoni ohjelmointiin ja teknologiaan löysin kielitieteen opintojeni aikana. Meillä oli ollut laskennallisen lingvistiikan ja ohjelmoinnin johdantokurssi. Kurssin aikana pääsimme kokeilemaan koodausta Pythonilla. Yksinkertaisen ohjelman kirjoittaminen, josta tulostettiin "Hello World!" antoi minulle sellaisen tyytyväisyyden tunteen, kuin mikään muu ei olisi voinut ennen.
                </p>
                <p>
                    Vaikka olen syntynyt ja kasvanut Unkarissa, pidän Suomea kotinani. Täyttää minut suurella ylpeydellä, että saan asua täällä.
                </p>
        </div>
        <div>
            <h2>Harrastukset</h2>
            <ul>
                <li>Piano</li>
                <li>Koodaaminen</li>
                <li>Lukeminen</li>
                <li>Vapaaehtoistyö <a href="https://www.hesy.fi/" target="_blank">HESY</a>:ssä</li>
            </ul>
        </div>
        <div>
            <h2 id="työkokemus-title">Työkokemus</h2>
            <table>
                <tr>
                    <th>Jakso</th>
                    <th>Tehtävänimike</th>
                    <th>Työnantaja</th>
                </tr>
                <tr>
                    <td>03/10/2022-31/07/2023</td>
                    <td>Harjoittelija</td>
                    <td>Nokia Solutions and Netwroks Oy</td>
                </tr>
            </table>
        </div>
        <div>
            <form>
                <fieldset>
                <legend>Yhteydenotto</legend>
                <label>Nimi</label><br>
                <input type="text" name=”nimi” class="text"><br>
                <label>Email</label><br>
                <input type="text" name=”email” class="text"><br>
                <label>Sukupuoli</label><br>
                <input type="radio" name=”sukupuoli” value=”mies” class="radio"> Mies
                <input type="radio" name=”sukupuoli” value=”nainen” class="radio"> Nainen
                <input type="radio" name=”sukupuoli” value=”en-haluasanoa” class="radio"> En halua sanoa<br>
                <label>Yhteydenoton syy</label><br>
                <select name=”syy” id="selector">
                    <option disabled selected>...</option>
                    <option>Työtarjous</option>
                    <option>Muu</option>
                </select><br>
                <label>Viesti</label><br>
                <textarea name=”viesti” id="textarea"></textarea><br>
                <input type="submit" value="Lähetä" id="submit">
                </fieldset>
                </form>                
        </div>
        <?php include "footer.html" ; ?>
    </body>
</html>