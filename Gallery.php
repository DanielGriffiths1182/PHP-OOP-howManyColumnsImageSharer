<?php

class Gallery {

  private $component;
  private $column;
  private $files = array();

  public function __construct($component, $column) {
    $this->column = $column;
    $this->component = $component;
  }

  public function getDirectory(){
    $component = dir($this->component);

    while ($item = $component->read()) {
      if (strpos($item, '_thumb')) {
        $this->files[] = $item;
      }
    }
    $component->close();
  }

  public function createHTML() {
    echo('<table id="galerie"><tr>');
    $counter = 0;
    foreach ($this->files as $file)
    {
      $path = $this->component . '/' . $file;
      $picture = $this->component . '/' . str_replace('_thumb', '', $file);
      echo ('<td><a href="' .  htmlspecialchars($picture) . '"><img src="' .  htmlspecialchars($path) . '" alt="" ></a></td>');
      $counter++;
      if ($counter >= $this->column) {
        echo ('</tr><tr>');
        $counter = 0;

      }
    }
    echo ('</tr></table>');
  }

}
