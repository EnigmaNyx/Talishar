<head>
<style>
body {
  font-family: Garamond, serif;
  margin:0px;
  color:rgb(240, 240, 240);
}

h1 {
  text-align:center;
  width:100%;
}

h2 {
  text-align:center;
  width:100%;
}
</style>
</head>


<?php

  include "HostFiles/Redirector.php";
  include "Libraries/HTTPLibraries.php";

  $gameName=$_GET["gameName"];
  if(!IsGameNameValid($gameName)) { echo("Invalid game name."); exit; }
  $playerID=$_GET["playerID"];

?>

<div style="width:100%; height:100%; background-image: url('Images/lord-of-wind.jpg'); background-size:cover; z-index=0;">

<div style="position:absolute; z-index:1; top:25%; left:2%; width:25%; height:50%; background-color:rgba(59, 59, 38, 0.7);">
<h1>Game Lobby</h1>
<?php
  echo("<form action='" . $redirectPath . "/JoinGameInput.php'>");
  echo("<input type='hidden' id='gameName' name='gameName' value='$gameName'>");
  echo("<input type='hidden' id='playerID' name='playerID' value='$playerID'>");
?>

  Decks to Try:
  <select name="decksToTry" id="decksToTry">
    <option value="1">Arsenal Pass Rhinar CC</option>
    <option value="2">Boltyn #1 Road to Nationals CC</option>
    <option value="3">Ice Lexi Canadian Nationals CC</option>
  </select>
  <br><br>
  <label for="fabdb">FaB DB Link</label>
  <input type="text" id="fabdb" name="fabdb">
  <br><br>
  <div style='width:100%; text-align:center;'><input type="submit" value="Submit"></div>
</form>

  <h2>Instructions</h2>
  <ul>
  <li>Once you choose a deck and submit, you will be taken to the game lobby.</li>
  <li>Once in the game lobby, the first player will be able to start the game.</li>
  </ul>

</div>
</div>

<div style="height:20px; bottom:30px; left:5%; width: 90%; position:absolute; color:white;">FaB Online is in no way affiliated with Legend Story Studios. Legend Story Studios®, Flesh and Blood™, and set names are trademarks of Legend Story Studios. Flesh and Blood characters, cards, logos, and art are property of Legend Story Studios.</div>
