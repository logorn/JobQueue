<?php // this is an autogenerated file - do not edit (created 2010-09-14 08:27:58)
spl_autoload_register(
   function($class) {
      static $classes = array(
         'spriebsch\\jobqueue\\exception' => 'Exception.php',
         'spriebsch\\jobqueue\\queuestub' => 'QueueStub.php',
         'spriebsch\\jobqueue\\queue' => 'Queue.php'
      );
      $cn = strtolower($class);
      if (isset($classes[$cn])) {
         require __DIR__ . '/' .  $classes[$cn];
      }
   }
);
?>
