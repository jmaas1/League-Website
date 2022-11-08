<?php
require_once('database.php');

// Get champion data
$queryBest = 'SELECT PLAYER_USERNAME, KDA FROM TenBestKDAs
				ORDER BY KDA DESC';
$statement1 = $db->prepare($queryBest);
$statement1->execute();
$bestKDA = $statement1->fetchAll();
$Name = $bestKDA['PLAYER_USERNAME'];
$KDA = $bestKDA['KDA'];
$statement1->closeCursor();

// Get champion data
$queryWorst = 'SELECT PLAYER_USERNAME, KDA FROM TenWorstKDAs
				ORDER BY KDA ASC';
$statement2 = $db->prepare($queryWorst);
$statement2->execute();
$worstKDA = $statement2->fetchAll();
$Name = $worstKDA['PLAYER_USERNAME'];
$KDA = $worstKDA['KDA'];
$statement2->closeCursor();

?>
<!DOCTYPE html>
<html>
<head>
<title>Statistics</title>
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
  <div class="side">
  </div>
  <div class="incolumn">
  <h1 style = "margin-top: 0px; text-shadow: 2px 2px #000000;"> Best vs Worst KDAs</h1>
  <div>
  <table style = " float:left;">
            <tr style = "border-bottom: 6px solid #000; color: #13D8F6; text-shadow: 2px 2px #000000;">
                <th style = "float:left; font-size: 20px;">USERNAME</th>
                <th  style = "font-size: 20px;">KDA<th>
            </tr>
            <?php foreach ($bestKDA as $bKDA) : ?>
            <tr style = "border-bottom: 2px solid #000;">
                <td style = "font-size: 20px;" id = "nonlink"><?php echo $bKDA['PLAYER_USERNAME']; ?></td>
                <td style = "font-size: 20px;" id = "nonlink"><center><?php echo $bKDA['KDA']; ?></center></td>
            </tr>
            <?php endforeach; ?>
        </table>
		<table>
            <tr style = "border-bottom: 6px solid #000; color: #13D8F6; text-shadow: 2px 2px #000000;">
                <th style = "float:left; font-size: 20px;">USERNAME</th>
                <th  style = "font-size: 20px;">KDA<th>
            </tr>
            <?php foreach ($worstKDA as $wKDA) : ?>
            <tr style = "border-bottom: 2px solid #000;">
                <td style = "font-size: 20px;" id = "nonlink"><?php echo $wKDA['PLAYER_USERNAME']; ?></td>
                <td style = "font-size: 20px;" id = "nonlink"><center><?php echo $wKDA['KDA']; ?></center></td>
            </tr>
            <?php endforeach; ?>
        </table>
  </div>
  </div>
  <div class="side">
  </div>
</div>
<footer>
<center> &copyCopyright 2022 Jeremy Maas</center>
</footer>
</body>
</html>
