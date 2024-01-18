<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<style>
body {font-family: Arial, Helvetica, sans-serif;}
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
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
<body>
    <h2>Contact & Route</h2>
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
</body>
</html>