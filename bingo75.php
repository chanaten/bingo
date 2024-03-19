<?php
require("connection.php");
$query = 'INSERT INTO `usage_log` (`pageName`) VALUES ("bingo")';
$result = mysqli_query($con, $query);
mysqli_free_result($result);
mysqli_close($con);

$i = 0;
$row1 = array();

while ($i < 5) {
  $random = rand(1,15);
  if (in_array($random, $row1)) {
    continue;
  }
  else {
    array_push($row1,$random);
    $i = $i + 1;
  }
}

$row2 = array();
while ($i < 10) {
  $random = rand(16,30);
  if (in_array($random, $row2)) {
    continue;
  }
  else {
    array_push($row2,$random);
    $i = $i + 1;
  }
}

$row3 = array();
while ($i < 15) {
  $random = rand(31,45);
  if (in_array($random, $row3)) {
    continue;
  }
  else {
    array_push($row3,$random);
    $i = $i + 1;
  }
}

$row4 = array();
while ($i < 20) {
  $random = rand(46,60);
  if (in_array($random, $row4)) {
    continue;
  }
  else {
    array_push($row4,$random);
    $i = $i + 1;
  }
}

$row5 = array();
while ($i < 25) {
  $random = rand(61,75);
  if (in_array($random, $row5)) {
    continue;
  }
  else {
    array_push($row5,$random);
    $i = $i + 1;
  }
}

$colorbucket = array('E61940','29b08b','25a3d4','256ed4','4f41a7','521b78','db499a','c73b3b','ecb200','f67e03');
$colorrandom = array_rand($colorbucket,1);
$color = $colorbucket[$colorrandom];
?>

<!DOCTYPE html>
<html style="background-color:#dbdbdb">
  <head>
    <title>Bingo</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <!-- bulma -->
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.2/css/bulma.min.css"> -->
    <link rel="stylesheet" href="styles.css">
    <!-- font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  </head>

  <body>
    <div class="container" style="padding: 1rem; margin-top:5%; max-width:450px;">
      <p style="font-size:2rem; text-align:center; font-weight:800; color:#<?php echo $color; ?>; margin-bottom: 1rem;">BINGO</p>
      <div class="columns is-mobile is-gapless" style="background-color:#dbdbdb;">
        <div class="column is-one-fifth" style="text-align:center; font-size:.8rem;">1-15</div>
        <div class="column is-one-fifth" style="text-align:center; font-size:.8rem;">16-30</div>
        <div class="column is-one-fifth" style="text-align:center; font-size:.8rem;">31-45</div>
        <div class="column is-one-fifth" style="text-align:center; font-size:.8rem;">46-60</div>
        <div class="column is-one-fifth" style="text-align:center; font-size:.8rem;">61-75</div>
      </div>

      <div class="columns is-mobile is-gapless" style="background-color:#fdc407;">
        <div class="column is-one-fifth"><button id="a1" class="button is-light is-medium is-fullwidth" onclick="changeColor(this)"><?php echo $row1[0] ?></button></div>
        <div class="column is-one-fifth"><button id="b1" class="button is-light is-medium is-fullwidth" onclick="changeColor(this)"><?php echo $row2[0] ?></button></div>
        <div class="column is-one-fifth"><button id="c1" class="button is-light is-medium is-fullwidth" onclick="changeColor(this)"><?php echo $row3[0] ?></button></div>
        <div class="column is-one-fifth"><button id="d1" class="button is-light is-medium is-fullwidth" onclick="changeColor(this)"><?php echo $row4[0] ?></button></div>
        <div class="column is-one-fifth"><button id="e1" class="button is-light is-medium is-fullwidth" onclick="changeColor(this)"><?php echo $row5[0] ?></button></div>
      </div>

      <div class="columns is-mobile is-gapless" style="background-color:#fdc407;">
        <div class="column is-one-fifth"><button id="a2" class="button is-light is-medium is-fullwidth" onclick="changeColor(this)"><?php echo $row1[1] ?></button></div>
        <div class="column is-one-fifth"><button id="b2" class="button is-light is-medium is-fullwidth" onclick="changeColor(this)"><?php echo $row2[1] ?></button></div>
        <div class="column is-one-fifth"><button id="c2" class="button is-light is-medium is-fullwidth" onclick="changeColor(this)"><?php echo $row3[1] ?></button></div>
        <div class="column is-one-fifth"><button id="d2" class="button is-light is-medium is-fullwidth" onclick="changeColor(this)"><?php echo $row4[1] ?></button></div>
        <div class="column is-one-fifth"><button id="e2" class="button is-light is-medium is-fullwidth" onclick="changeColor(this)"><?php echo $row5[1] ?></button></div>
      </div>

      <div class="columns is-mobile is-gapless" style="background-color:#fdc407;">
        <div class="column is-one-fifth"><button id="a3" class="button is-light is-medium is-fullwidth" onclick="changeColor(this)"><?php echo $row1[2] ?></button></div>
        <div class="column is-one-fifth"><button id="b3" class="button is-light is-medium is-fullwidth" onclick="changeColor(this)"><?php echo $row2[2] ?></button></div>
        <div class="column is-one-fifth"><button id="c3" class="button is-light is-medium is-fullwidth" style="background-color:#<?php echo $color; ?>; color:white;">X</button></div>
        <div class="column is-one-fifth"><button id="d3" class="button is-light is-medium is-fullwidth" onclick="changeColor(this)"><?php echo $row4[2] ?></button></div>
        <div class="column is-one-fifth"><button id="e3" class="button is-light is-medium is-fullwidth" onclick="changeColor(this)"><?php echo $row5[2] ?></button></div>
      </div>

      <div class="columns is-mobile is-gapless" style="background-color:#fdc407;">
        <div class="column is-one-fifth"><button id="a4" class="button is-light is-medium is-fullwidth" onclick="changeColor(this)"><?php echo $row1[3] ?></button></div>
        <div class="column is-one-fifth"><button id="b4" class="button is-light is-medium is-fullwidth" onclick="changeColor(this)"><?php echo $row2[3] ?></button></div>
        <div class="column is-one-fifth"><button id="c4" class="button is-light is-medium is-fullwidth" onclick="changeColor(this)"><?php echo $row3[3] ?></button></div>
        <div class="column is-one-fifth"><button id="d4" class="button is-light is-medium is-fullwidth" onclick="changeColor(this)"><?php echo $row4[3] ?></button></div>
        <div class="column is-one-fifth"><button id="e4" class="button is-light is-medium is-fullwidth" onclick="changeColor(this)"><?php echo $row5[3] ?></button></div>
      </div>

      <div class="columns is-mobile is-gapless" style="background-color:#fdc407;">
        <div class="column is-one-fifth"><button id="a5" class="button is-light is-medium is-fullwidth" onclick="changeColor(this)"><?php echo $row1[4] ?></button></div>
        <div class="column is-one-fifth"><button id="b5" class="button is-light is-medium is-fullwidth" onclick="changeColor(this)"><?php echo $row2[4] ?></button></div>
        <div class="column is-one-fifth"><button id="c5" class="button is-light is-medium is-fullwidth" onclick="changeColor(this)"><?php echo $row3[4] ?></button></div>
        <div class="column is-one-fifth"><button id="d5" class="button is-light is-medium is-fullwidth" onclick="changeColor(this)"><?php echo $row4[4] ?></button></div>
        <div class="column is-one-fifth"><button id="e5" class="button is-light is-medium is-fullwidth" onclick="changeColor(this)"><?php echo $row5[4] ?></button></div>
      </div>

      <div style="text-align:center;"><br>Press <strong><a style="color:#333333;" onClick="window.location.reload();">here</a></strong> or refresh to regenerate a new card</div>
    </div>

    <div class="container" style="padding: 1rem; margin-top:5%; max-width:450px; text-align:center;">
      <script type='text/javascript' src='https://storage.ko-fi.com/cdn/widget/Widget_2.js'></script><script type='text/javascript'>kofiwidget2.init('Support Me on Ko-fi', '#29abe0', 'R6R4EXE0X');kofiwidget2.draw();</script> 
    </div>
  </body>
</html>


<script>
  function changeColor(e) {
    if (e.style.color != "white") {
      e.style.color = "white";
      e.style.background = "#<?php echo $color; ?>";
    }
    else {
      e.style.color = "black";
      e.style.background = "whitesmoke";
    }
  }
</script>



<style>
html,body {font-family: 'Kanit', sans-serif; font-weight: 400; font-size: 18px; overflow-x:hidden; touch-action: manipulation;}
.cloumn {padding-left: 1%; padding-right: 1%;}
#stuff {padding-left: 1%; padding-right: 1%;}

.is-horizontal-center {
  justify-content: center;
}

input {
    font-family: 'Kanit', sans-serif; font-weight: 200; font-size: 18px;
}

::placeholder {
  color: #fff;
  opacity: 1;
}

.button.is-light{
  font-size:1.5rem;
  border-radius:0px;
  border-color: black;
}
</style>