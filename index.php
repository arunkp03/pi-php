<?php


$aa  = array (
  'fulfillmentText' => 'This is a text response',
  'fulfillmentMessages' => 
  array (
    0 => 
    array (
      'card' => 
      array (
        'title' => 'Speed Check',
        'subtitle' => 'Displays your current speed',
        'imageUri' => 'https://plus.google.com/_/focus/photos/private/AIbEiAIAAAAiCMr8hcvG19iDRRCwgMnm9NKVl7UBGOTlmODmyM-OlgEwAWLoSrQZkl5cE0L7ZzuftnRR-Zjd?sz=128'       
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
