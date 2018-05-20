<?php


$aa  = array (
  'fulfillmentText' => 'This is a text response',
  'fulfillmentMessages' => 
  array (
    0 => 
    array (
      'card' => 
      array (
        'title' => 'card title',
        'subtitle' => 'card text',
        'imageUri' => 'https://assistant.google.com/static/images/molecule/Molecule-Formation-stop.png',
        'buttons' => 
        array (
          0 => 
          array (
            'text' => 'button text',
            'postback' => 'https://assistant.google.com/',
          ),
        ),
      ),
    ),
  ),
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
