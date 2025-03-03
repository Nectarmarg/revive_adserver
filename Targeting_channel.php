<?php

// Add targeting channel
function add_targeting_channel($agency_id)
{
  $curl = curl_init();

  curl_setopt_array($curl, array(
    CURLOPT_URL => "https://adserver.brainfoodhosting.gr/api/revive_ui/add_targeting_channel/$agency_id",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'POST',
    CURLOPT_POSTFIELDS => '{"affiliateid":"1",
"name":"welcome",
"description":"desc",
"comments":"cmd",
"logical":"and",
"comparison":"=~",
"type":"deliveryLimitations:Client:Os","data":"w7"}',
    CURLOPT_HTTPHEADER => array(
      'Content-Type: application/json',
      'Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE3NDA0ODI5NTEsImV4cCI6MTc3MjAxODk1MSwic3ViIjoicm9vdCJ9.6_HPDypihtGZdweE_DN8yeP2t8sodvVCaUpAiqYrDw0',
      'Cookie: PHPSESSID=ktlfqsa6peian3i1mk91ve7dar'
    ),
  ));

  $response = curl_exec($curl);

  curl_close($curl);
  echo $response;
}

// Edit targeting channel
function edit_targeting_channel($channel_id)
{
  $curl = curl_init();

  curl_setopt_array($curl, array(
    CURLOPT_URL => "https://adserver.brainfoodhosting.gr/api/revive_ui/edit_targeting_channel/$channel_id",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'POST',
    CURLOPT_POSTFIELDS => '{"affiliateid":"1",
"name":"welcome",
"description":"desc",
"comments":"cmd",
"logical":"and",
"comparison":"=~",
"type":"deliveryLimitations:Client:Os","data":"w7",
"mode":"edit"
}',
    CURLOPT_HTTPHEADER => array(
      'Content-Type: application/json',
      'Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE3NDA0ODI5NTEsImV4cCI6MTc3MjAxODk1MSwic3ViIjoicm9vdCJ9.6_HPDypihtGZdweE_DN8yeP2t8sodvVCaUpAiqYrDw0',
      'Cookie: PHPSESSID=ktlfqsa6peian3i1mk91ve7dar'
    ),
  ));

  $response = curl_exec($curl);

  curl_close($curl);
  echo $response;
}

// Delete targeting channel
function deletechannel($channel_id)
{
  $curl = curl_init();

  curl_setopt_array($curl, array(
    CURLOPT_URL => "https://adserver.brainfoodhosting.gr/api/revive_ui/deletechannel/$channel_id",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'DELETE',
    CURLOPT_HTTPHEADER => array(
      'Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE3NDA0ODI5NTEsImV4cCI6MTc3MjAxODk1MSwic3ViIjoicm9vdCJ9.6_HPDypihtGZdweE_DN8yeP2t8sodvVCaUpAiqYrDw0',
      'Cookie: PHPSESSID=ktlfqsa6peian3i1mk91ve7dar'
    ),
  ));

  $response = curl_exec($curl);

  curl_close($curl);
  echo $response;
}

// Get targeting channel
function gettargetingchannel($channel_id)
{
  $curl = curl_init();

  curl_setopt_array($curl, array(
    CURLOPT_URL => "https://adserver.brainfoodhosting.gr/api/revive_ui/gettargetingchannel/$channel_id",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'GET',
    CURLOPT_HTTPHEADER => array(
      'Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE3NDA0ODI5NTEsImV4cCI6MTc3MjAxODk1MSwic3ViIjoicm9vdCJ9.6_HPDypihtGZdweE_DN8yeP2t8sodvVCaUpAiqYrDw0',
      'Cookie: PHPSESSID=ktlfqsa6peian3i1mk91ve7dar'
    ),
  ));

  $response = curl_exec($curl);

  curl_close($curl);
  echo $response;
}
