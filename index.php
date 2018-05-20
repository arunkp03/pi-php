<?php


$aa  = array (
  'fulfillmentText' => 'You are very near to the next car.',
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
              'textToSpeech' => 'You are very near to the next car.',
            ),
          ),
        ),
      ),
    ),
  ),
);

echo json_encode($aa);
?>
