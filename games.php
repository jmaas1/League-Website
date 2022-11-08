<?php
require_once('database.php');

// Get champion data
$queryGames = 'SELECT * FROM performances
				ORDER BY PLAYER_USERNAME';
$statement1 = $db->prepare($queryGames);
$statement1->execute();
$Gamelist = $statement1->fetchAll();
$PlayerName = $Gamelist['PLAYER_USERNAME'];
$PlayerKills = $Gamelist['PLAYER_KILLS'];
$PlayerDeaths = $Gamelist['PLAYER_DEATHS'];
$PlayerAssists = $Gamelist['PLAYER_ASSISTS'];
$PlayerGold = $Gamelist['PLAYER_GOLD'];
$PlayerLevel = $Gamelist['PLAYER_LEVEL'];
$PlayerRole = $Gamelist['PLAYER_ROLE'];
$PlayerChamp = $Gamelist['CHAMP_NAME'];
$PlayerRune = $Gamelist['RUNE_NAME'];
$statement1->closeCursor();

?>
<!DOCTYPE html>
<html>
<head>
<title>Games</title>
<link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
<div class = "PageTop">
<img src = "LeagueLogo.png" alt = "LOL Logo" height = "200" width = "550" style = "margin-top: 30px; margin-bottom:20px;">
</div>
<div class = "nav">
<ul>
<li><strong><a href ="index.html">Home</a></li>
<li><a href ="champions.php">Champions</a></li>
<li><a href ="players.php">Pro Players</a></li>
<li><a href ="games.php">Games</a></li>
<li><a href ="tournaments.php">Tournaments</a></li>
<li><a href ="stats.php">Stats</a></strong></li>
</ul>
</div>
<div class ="maincontent">
  <div class="side2">
  </div>
  <div class="incolumn">
  <h1 style = "margin-top: 0px; text-shadow: 2px 2px #000000;">Player(s) Statistics</h1>
  <div>
  <table>
            <tr style = "border-bottom: 6px solid #000; color: #13D8F6; text-shadow: 2px 2px #000000;">
                <th style = "float:left; font-size: 24px;">PLAYER</th>
                <th style = "font-size: 26px; padding-right: 20px; padding-left:0px;">KILLS</th>
				<th style = "font-size: 26px; padding-right: 20px; padding-left: 0px;">DEATHS</th>
				<th style = "font-size: 26px; padding-right: 20px; padding-left: 0px;">ASSISTS</th>
				<th style = "font-size: 26px; padding-right: 20px; padding-left: 0px;">GOLD</th>
				<th style = "font-size: 26px; padding-right: 20px; padding-left: 0px;">LEVEL</th>
				<th style = "font-size: 26px; padding-right: 20px; padding-left: 0px;">ROLE</th>
				<th style = "font-size: 26px; padding-right: 20px; padding-left: 0px;">CHAMP</th>
				<th style = "font-size: 26px; padding-right: 20px; padding-left: 0px;">RUNE</th>
            </tr>
            <?php foreach ($Gamelist as $games) : ?>
            <tr style = "border-bottom: 2px solid #000;">
                <td  style = "font-size: 20px;" id = "nonlink"><?php echo $games['PLAYER_USERNAME']; ?></td>
                <td style = "font-size: 20px;" id = "nonlink"><?php echo $games['PLAYER_KILLS']; ?></td>
				 <td style = "font-size: 20px;" id = "nonlink"><?php echo $games['PLAYER_DEATHS']; ?></td>
                <td style = "font-size: 20px;" id = "nonlink"><?php echo $games['PLAYER_ASSISTS']; ?></td>
				 <td style = "font-size: 20px;" id = "nonlink"><?php echo number_format($games['PLAYER_GOLD']); ?></td>
                <td style = "font-size: 20px;" id = "nonlink"><?php echo $games['PLAYER_LEVEL']; ?></td>
				 <td style = "font-size: 20px;" id = "nonlink"><?php echo $games['PLAYER_ROLE']; ?></td>
                <td style = "font-size: 20px;" id = "nonlink"><?php echo $games['CHAMP_NAME']; ?></td>
				<td style = "font-size: 20px;" id = "nonlink"><?php echo $games['RUNE_NAME']; ?></center></td>
            </tr>
            <?php endforeach; ?>
        </table>
  </div>
  </div>
  <div class="side2">
  </div>
</div>
<footer>
<center> &copyCopyright 2022 Jeremy Maas</center>
</footer>
</body>
</html>
