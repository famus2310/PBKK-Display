<?php

return array(
  'post' => [
          'namespace' => 'Module\Post',
          'webControllerNamespace' => 'Module\Post\Presentation\Web\Controller',
          'apiControllerNamespace' => '',
          'className' => 'Module\Post\Module',
          'path' => APP_PATH . '/modules/post/Module.php',
          'defaultRouting' => false,
          'defaultController' => 'index',
          'defaultAction' => 'index'
      ]
);
