<?php defined('SYSPATH') or die('No direct script access');

Route::set('admin(/<controller>(/<action>(/<id>)))')
  ->defaults(array(
    'directory'  => 'admin',
    'controller' => 'welcome',
    'action'     => 'index'
  ));

Route::set('(<controller>(/<action>(/<id>)))')
  ->defaults(array(
    'directory'  => 'public',
    'controller' => 'welcome',
    'action'     => 'index'
  ));
