<?php
namespace Menu\Items\Contents;

use \Menu\HTML;
use \Menu\Traits\Content;

class Raw extends Content
{
  public function __construct($text)
  {
    $this->text = $text;
  }
}