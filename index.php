<?php


$aa  = array (
  'fulfillmentText' => 'It feels great to help you. Wake me up if you need my help again.',
  'source' => 'example.com',
  'payload' => 
  array (
    'google' => 
    array (
      'expectUserResponse' => true,
      'richResponse' => 
      array (
        'items' => 
        array (
          0 => 
          array (
            'simpleResponse' => 
            array (
              'textToSpeech' => 'It feels great to help you. Wake me up if you need my help again.',
            ),
          ),
        ),
      ),
    ),
  ),
);

echo json_encode($aa);
?>
