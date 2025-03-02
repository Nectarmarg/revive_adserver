<?php
// Add zone
function add_zone($publisher_id)
{
  $curl = curl_init();

  curl_setopt_array($curl, array(
    CURLOPT_URL => "https://adserver.brainfoodhosting.gr/api/revive_ui/add_zone/$publisher_id",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'POST',
    CURLOPT_POSTFIELDS => '{
    "zonename": "zone 1",
    "description": "html banner",
    "delivery":1,
    "width": 300,
    "height": 250,
    "comments": "test",
    "category":"category_name"
}
',
    CURLOPT_HTTPHEADER => array(
      'Content-Type: application/json',
      'Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE3NDA0ODI5NTEsImV4cCI6MTc3MjAxODk1MSwic3ViIjoicm9vdCJ9.6_HPDypihtGZdweE_DN8yeP2t8sodvVCaUpAiqYrDw0',
      'Cookie: PHPSESSID=flrtpbe7anrehs3j6o7no3bhqi'
    ),
  ));

  $response = curl_exec($curl);

  curl_close($curl);
  echo $response;
}

// Edit zone
function edit_zone($zone_id)
{
  $curl = curl_init();

  curl_setopt_array($curl, array(
    CURLOPT_URL => "https://adserver.brainfoodhosting.gr/api/revive_ui/edit_zone/$zone_id",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'POST',
    CURLOPT_POSTFIELDS => '{
  "zonename": "zone 1",
  "description": "html banner",
  "delivery":1,
  "width": 300,
  "height": 250,
  "comments": "test",
  "category":"category_name",
  "mode":"edit"
  }
',
    CURLOPT_HTTPHEADER => array(
      'Content-Type: application/json',
      'Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE3NDA0ODI5NTEsImV4cCI6MTc3MjAxODk1MSwic3ViIjoicm9vdCJ9.6_HPDypihtGZdweE_DN8yeP2t8sodvVCaUpAiqYrDw0',
      'Cookie: PHPSESSID=flrtpbe7anrehs3j6o7no3bhqi'
    ),
  ));

  $response = curl_exec($curl);

  curl_close($curl);
  echo $response;
}

// Delete zone
function delete_zone($zone_id)
{
  $curl = curl_init();

  curl_setopt_array($curl, array(
    CURLOPT_URL => "https://adserver.brainfoodhosting.gr/api/revive_ui/delete_zone/$zone_id",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'DELETE',
    CURLOPT_POSTFIELDS => '{
  "zonename": "zone 1",
  "description": "html banner",
  "delivery":1,
  "width": 300,
  "height": 250,
  "comments": "test",
  "category":"category_name",
  "mode":"edit"
  }
  ',
    CURLOPT_HTTPHEADER => array(
      'Content-Type: application/json',
      'Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE3NDA0ODI5NTEsImV4cCI6MTc3MjAxODk1MSwic3ViIjoicm9vdCJ9.6_HPDypihtGZdweE_DN8yeP2t8sodvVCaUpAiqYrDw0',
      'Cookie: PHPSESSID=flrtpbe7anrehs3j6o7no3bhqi'
    ),
  ));

  $response = curl_exec($curl);

  curl_close($curl);
  echo $response;
}

// Get zone
function get_zone($zone_id)
{
  $curl = curl_init();

  curl_setopt_array($curl, array(
    CURLOPT_URL => "https://adserver.brainfoodhosting.gr/api/revive_ui/get_zone/$zone_id",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'GET',
    CURLOPT_HTTPHEADER => array(
      'Content-Type: application/json',
      'Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE3NDA0ODI5NTEsImV4cCI6MTc3MjAxODk1MSwic3ViIjoicm9vdCJ9.6_HPDypihtGZdweE_DN8yeP2t8sodvVCaUpAiqYrDw0',
      'Cookie: PHPSESSID=flrtpbe7anrehs3j6o7no3bhqi'
    ),
  ));

  $response = curl_exec($curl);

  curl_close($curl);
  echo $response;
}

// Get all zones
function get_all_zone($affiliate_id)
{
  $curl = curl_init();

  curl_setopt_array($curl, array(
    CURLOPT_URL => "https://adserver.brainfoodhosting.gr/api/revive_ui/get_all_zone/$affiliate_id",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'GET',
    CURLOPT_POSTFIELDS => '{
  "zonename": "zone 1",
  "description": "html banner",
  "delivery":1,
  "width": 300,
  "height": 250,
  "comments": "test",
  "category":"category_name",
  "mode":"edit"
  }
  ',
    CURLOPT_HTTPHEADER => array(
      'Content-Type: application/json',
      'Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE3NDA0ODI5NTEsImV4cCI6MTc3MjAxODk1MSwic3ViIjoicm9vdCJ9.6_HPDypihtGZdweE_DN8yeP2t8sodvVCaUpAiqYrDw0',
      'Cookie: PHPSESSID=uklueou20th8ae6meesm7prl73'
    ),
  ));

  $response = curl_exec($curl);

  curl_close($curl);
  echo $response;
}
