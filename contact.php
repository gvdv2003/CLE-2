<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<style>
* {box-sizing: border-box;}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid black;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #202959;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #151959;
}

.container {
  border-radius: 1px;
  background-color: #A1A1A1;
  padding: 20px;
}
</style>
<body>
    <h2>Contact & Route</h2>
    <section>
    <h3>Contact</h3>
      <div class="container">
        <form action="contact.php">

          <label for="fname">Voornaam</label>
          <input type="text" id="fname" name="voornaam" placeholder="Schrijf hier uw voornaam..">

          <label for="lname">Achternaam</label>
          <input type="text" id="lname" name="achternaam" placeholder="Schrijf hier uw achternaam..">

          <label for="email">Email</label>
          <input type="text" id="email" name="email" placeholder="Schrijf hier uw email..">

          <label for="onderwerp">Onderwerp</label>
          <select id="onderwerp" name="onderwerp">
            <option value="vraag over boulderen">Vraag over boulderen</option>
            <option value="feedback">Feedback geven</option>
            <option value="klacht">Klacht indienen</option>
            <option value="anders">Anders</option>
          </select>

          <label for="subject">Onderwerp</label>
          <textarea id="subject" name="subject" placeholder="Hier kunt u schrijven.." style="height:200px"></textarea>

          <input type="submit" value="Submit">

        </form>
      </div>
    </section>
    <hr>
    <section>
      <h3>Routebeschrijving met de auto:</h3>
      <p>Uit de richting Apeldoorn: Rij via de A1 en de A35 naar Enschede. Neem afrit 25, "Enschede zuid". Bovenaan de afslag, bij de stoplichten links. Ga bij de tweede stoplichten rechtsaf de Varviksingel op. Volg de "Singel" tot de Jumbo supermarkt en sla hier linksaf de Hoge Bothofstraat in. Draai  ter hoogte van de dwarsstraat Hoog en droog het parkeerdek op.</p>
      <p>Overige richtingen: Volg in Enschede de "Singel" tot de Oliemolensingel en sla bij de Jumbo Supermarkt af de Hoge Bothofstraat in. Draai  ter hoogte van de dwarsstraat Hoog en droog het parkeerdek op.</p>
      <p>Via het trappenhuis aan de westzijde van het gebouw kunt u naar beneden lopen. Cube bevind zich op de beganegrond, direct rechts. </p>

      <h3>Routebeschrijving met het openbaar vervoer:</h3>
      <p>Vanuit Enschede CS loopt u in 10 minuten naar Cube Bouldergym. Verlaat het station aan de oostzijde, en loop paralel aan het spoor alsmaar rechtdoor via het stationsplein, langs het intercity hotel, Poppodium attak en het muziekkwartier. Aan het eind van de "van Wenninkgaarde" linksaf de "van Lochemstraat"in. Aan het eind van de straat ziet u het oude polaroid complex reeds aan de overkant van de Oldenzaalsestraat. Steek de strat over en loop via de Hoge Bothofstraat om het complex heen tot de u de ingang met de portiersloge bereikt. Cube Bouldergym bevind zich in gebouw "oost", direct tegenover de portiersloge. </p>

      <h3>Parkeren:</h3>
      <p>Vooraan op het terrein kunt u uw fiets stallen in de tijdelijke fietsenstalling.</p>
      <p>Door de inrichting van het buitenterrein is er geen parkeergelegenheid voor auto's meer voor ons gebouw. Da's jammer maar er is voldoende (gratis) parkeergelegenheid in de buurt.</p>
      <p>Parkeerdek € 2,00</p>
      <p>De makkelijkste optie is parkeren op het parkeerdek van gebouw oost. Voor € 2.00 koop je bij de bar een uitrijkaart. Binnen 20 minuten kun je trouwens weer gratis uitrijden. De ingang van het parkeerdek bevind zich aan de Hoge Bothofstraat voor gebouw oost. Via het trappenhuis  kunt u naar beneden lopen en dan komt u buiten voor de ingang van Cube Bouldergym uit. het parkeerdek is 24/7 geopend.</p>
      <p>Parkeerterrein in de wijk</p>
      <p>Parkeren in de omliggende wijken kan ook maar let dan wel even goed op. Direct in de buurt zijn bepaalde zone's alleen voor vergunninghouders en op de overige plaatsen moet je overdag en op andere momenten betaald parkeren tegen €2.80 per uur. Tijdens de uren dat het betaald parkeren is kun je altijd goedkoper op het parkeerdek gaan staan.</p>
      <p>Tarief: € 2,80 per uur.</p>
      <p>Tijden:</p>
      <p>> Maandag t/m Zaterdag van 9.00 uur tot 19.00 uur;</p>
      <p>> Koopavonden (donderdag) tot 21.00 uur;</p>
      <p>> Koopzondagen en feestdagen van 12.00 tot 19.00 uur.</p>
      <h3>Gratis parkeren?</h3>
      <p>U kunt op de straten nabij Cube gratis parkeren buiten bovengenoemde tijden. Komt u binnen deze tijden en wilt u persé gratis parkeren dan zult u een stukje moeten lopen. Het betaald parkeren geld ook voor de gehele Hoge Bothofstraat en de direct omliggende straten, maar de straten daarachter is het parkeren gratis. De eerste gratis parkeerplaatsen zijn op nog geen 3 minuten lopen. Een overzicht van de betaald parkeren zone's vind u op het onderstaande plaatje en via op deze <a href="https://www.prettigparkeren.nl/kaart/#!Enschede//">link</a></p>
    </section>
  </body>
</html>