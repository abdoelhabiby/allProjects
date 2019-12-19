<?php


function lang($paras){

  static $lang = array('HOME ADMIN'   => 'home',
			           'CATAG'        => 'Catag',
			           'ITEMS'        => 'Items',
			           'MEMBERS'      => 'Members',
			           'STATIC'       => 'Static',
			            'LOGS'        => 'Logs');

  return $lang[$paras];

}


?>
