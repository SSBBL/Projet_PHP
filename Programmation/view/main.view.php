<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Gun and Co</title>
    <link rel="stylesheet" media="screen" href="mainview.css" />
  </head>
  <body>
    <h1>Gun and Co, la démocratie à petit prix</h1>

    <h2>Site d'information d'équipements militaires pour toutes armées</h2>

    <div class="">
      <?php foreach ($categories as $cat) {
        if ($cat->getRef() < 10 ) { ?>
          <a href="categories.view.php?categorie=<?= $cat->getRef() ?>" class="<?= $cat->getNom() ?>"> <img src="Design/Terre.jpeg" alt=""/> <br> <?= $cat->getNom() ?> </a> <br>
          <br>
        <?php }
      } ?>
    </div>

  </body>
</html>
