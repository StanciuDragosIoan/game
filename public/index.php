<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php include '../game.php'; ?>

<h1>Hero Game</h1>

<p> <?php echo $Beast->__get('health'); ?> </p>

<section class="stadium">
    <section class="enemy"></section>
    <section class="hero"></section>
  </section>
  
  
  <ul class="attack-list"></ul>
    
</body>
</html>