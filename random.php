<!DOCTYPE html>
<html style="background-color:#dbdbdb">
  <head>
    <title>Randomizer</title>
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
      <p style="font-size:2rem; text-align:center; font-weight:800;">Randomizer</p>
      <p style="font-size:1rem; text-align:center; font-weight:300;">Fill in minimum and maximum number, then press random!</p>
      <div class="columns is-mobile is-gapless" style="background-color:#dbdbdb; padding-top:2rem;">
        <div class="column is-5"><input class="input is-medium" type="text" placeholder="min" id="min" style="text-align:center;"></div>
        <div class="column is-2" style="text-align:center; font-size:2rem;">-</div>
        <div class="column is-5"><input class="input is-medium" type="text" placeholder="max" id="max" style="text-align:center;"></div>
      </div>
      <div style="text-align:center;"><br><button id="roll" class="button is-dark" onclick="getRandomInt()" style="font-family: 'Kanit', sans-serif; font-weight: 400; font-size: 1rem;">Random!</button></div><br>
      <div style="text-align:center;" id="rolllist"></div>
    </div>

    <div class="container" style="padding: 1rem; margin-top:5%; max-width:450px;">
      <div style="text-align:center;"><br><button id="reset" class="button is-danger" onclick="resetrolls()" style="font-family: 'Kanit', sans-serif; font-weight: 400; font-size: 1rem;">Reset</button></div>
    </div>
    <div class="container" style="padding: 1rem; max-width:450px; text-align:center;">
      <script type='text/javascript' src='https://storage.ko-fi.com/cdn/widget/Widget_2.js'></script><script type='text/javascript'>kofiwidget2.init('Support Me on Ko-fi', '#29abe0', 'R6R4EXE0X');kofiwidget2.draw();</script> 
    </div>

  </body>
</html>

<script>

  var rolls = []

  function getRandomInt(min, max) {
    var min = document.getElementById("min").value
    var max = document.getElementById("max").value
    min = Math.ceil(min)
    max = Math.floor(max)
    var random = Math.floor(Math.random() * (max - min + 1)) + min
    if (rolls.includes(random) == true) {
      if (rolls.length >= max - min + 1) {
        alert("Every numbers have been called.")
      }
      else {
        getRandomInt()
      }
    }
    else {
      rolls.unshift(random)
      document.getElementById("rolllist").innerHTML = rolls.join("<br>")
    }
  }
  
  function resetrolls() {
    rolls = []
    document.getElementById("rolllist").innerHTML = rolls
    // document.getElementById("min").value = ""
    // document.getElementById("max").value = ""
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