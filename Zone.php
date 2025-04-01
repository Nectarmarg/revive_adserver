<?php
/**
 * 
 * Sends a POST request to add a zone under a specific publisher.
 * @param int $publisher_id The ID of the publisher to which the zone will be added.
 * @return int|null The ID of the zone added, or null if not found in the response.
 */
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
    "delivery":6,
    "width": 640,
    "height": 640,
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

  $responseData = json_decode($response);

  // get zone id via the response message
  if (isset($responseData->message)) {
    preg_match("/(\d+)/", $responseData->message, $matches);
    $zone_id = $matches[1] ?? null;
  }
  return $zone_id;
}

/**
 * 
 * Sends a POST request to edit a specific zone.
 * @param int $zone_id The ID of the zone to be edited.
 * @return void Outputs the response from the API.
 */
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

/**
 * 
 * Sends a DELETE request to remove a specific zone.
 * @param int $zone_id The ID of the zone to be deleted.
 * @return void Outputs the response from the API.
 */
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

/**
 * 
 * Sends a GET request to retrieve details of a specific zone.
 * @param int $zone_id The ID of the zone to retrieve.
 * @return void Outputs the response from the API.
 */
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

/**
 * 
 * Sends a GET request to retrieve all zones under a specific affiliate.
 * @param int $affiliate_id The ID of the affiliate whose zones will be retrieved.
 * @return void Outputs the response from the API.
 */
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
