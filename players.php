<?php
require_once('database.php');

// Get champion data
$queryPro = 'SELECT * FROM PRO_PLAYERS
				ORDER BY PRO_ID';
$statement1 = $db->prepare($queryPro);
$statement1->execute();
$Prolist = $statement1->fetchAll();
$ProName = $Prolist['PRO_NAME'];
$ProRole = $Prolist['POSITION'];
$ProID = $Prolist['PLAYER_ID'];
$statement1->closeCursor();

?>
<!DOCTYPE html>
<html>
<head>
<title>Players</title>
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
  <h1 style = "margin-top: 0px;">Pro Players</h1>
  <div>
  <table>
            <tr style = "border-bottom: 6px solid #000; color: #13D8F6; text-shadow: 2px 2px #000000;">
                <th style = "float:left;">NAME</th>
                <th>POSITION</th>
				<th>PAGE</th>
            </tr>
            <?php foreach ($Prolist as $pros) : ?>
            <tr style = "border-bottom: 2px solid #000;">
                <td id = "nonlink"><?php echo $pros['PRO_NAME']; ?></td>
                <td id = "nonlink"><center><?php echo $pros['POSITION']; ?></center></td>
				<td id = "link" style = "float: right; margin-right: 10px;"><a href = "https://lol.fandom.com/wiki/<?php echo $pros['PRO_NAME'];?>"><?php echo $pros['PRO_NAME'];?></a></td>
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
