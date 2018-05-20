<?php


$aa  =array (
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
              'textToSpeech' => 'this is a simple response',
            ),
          ),
        ),
      ),
    ),
    'facebook' => 
    array (
      'text' => 'Hello, Facebook!',
    ),
    'slack' => 
    array (
      'text' => 'This is a text response for Slack.',
    ),
  ),
  'outputContexts' => 
  array (
    0 => 
    array (
      'name' => 'projects/${PROJECT_ID}/agent/sessions/${SESSION_ID}/contexts/context name',
      'lifespanCount' => 5,
      'parameters' => 
      array (
        'param' => 'param value',
      ),
    ),
  ),
  'followupEventInput' => 
  array (
    'name' => 'event name',
    'languageCode' => 'en-US',
    'parameters' => 
    array (
      'param' => 'param value',
    ),
  ),
);
echo json_encode($aa);
?>
