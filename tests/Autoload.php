<?php // this is an autogenerated file - do not edit (created Mon, 30 Aug 2010 23:06:59 +0200)
spl_autoload_register(
   function($class) {
      static $classes = array(
         'spriebsch\\jobqueue\\object' => '/_testdata/Object.php',
         'spriebsch\\jobqueue\\queuestubtest' => '/QueueStubTest.php',
         'spriebsch\\jobqueue\\stubqueuetest' => '/StubQueueTest.php',
         'spriebsch\\jobqueue\\queuetest' => '/QueueTest.php'
      );
      $cn = strtolower($class);
      if (isset($classes[$cn])) {
         require __DIR__ . $classes[$cn];
      }
   }
);
