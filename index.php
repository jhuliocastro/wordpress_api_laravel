<?php
require 'vendor/autoload.php';

use jhuliocastro\wordpress\Menu;

$menu = new Menu('https://lojalacodemenina.com.br/');
echo '<pre>';
var_dump($menu->getMenus());