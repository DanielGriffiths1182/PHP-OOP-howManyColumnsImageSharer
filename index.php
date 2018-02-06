<!DOCTYPE html>

<html>
  <head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="css.css" />
  </head>
    <body>
      <?php
        require_once 'Gallery.php';

        $gallery = new Gallery('potentialDirectory', 3);
        $gallery->getDirectory();
      ?>
      <div class="gallery">
      <?php
          $gallery->createHTML();
      ?>
      </div>
      <div class="name">
        <?php
          require_once('Person.php');
          // This should take user input
          $users_name = new Person('Daniel');
          echo 'Hello, my name is '.$users_name->name;
        ?>
      </div>
    </body>
</html>
