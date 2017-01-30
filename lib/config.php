<?php
return Array(
  /*
   * Define durations with price and label, basically this is the patern :

      '<label>' => Array(
        '<price>',
        '<duration>',
        '<flags>'
      ),

   * With price as a float (Eg. 3.00),
   * duration in month (Eg. 1 => 1 Month),
   * and the flags as a single or multiple chars (Eg. 'a' or 'zab').
   * Note : Any flag will result in an execution of the script placed
   * in 'lib/flags/<flag>.php'.
   */
  'payOptions' => Array(
    'currencyCode' => 'EUR',
    '1 Mois - Premium' => Array (
      '20.00',
      '1',
      'z'
    ),
    '1 An - Normal' => Array (
      '60.00',
      '12',
      ''
    )
  ),

  /* FabManager API Key */
  'apiKey' => '<apiKey>'
);
?>
