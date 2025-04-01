<?php
/**
 * Links a banner to a zone in the ad server.
 * @param int $zone_id The ID of the zone to link the banner to.
 * @param int $banner_id The ID of the banner to link to the zone.
 * @return void Outputs the API response.
 */
function adbyzone_link($zone_id, $banner_id)
{
  $curl = curl_init();

  curl_setopt_array($curl, array(
    CURLOPT_URL => "https://adserver.brainfoodhosting.gr/api/revive_ui/adbyzone_link/$zone_id",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'POST',
    CURLOPT_POSTFIELDS => json_encode(["bannerid" => $banner_id]), // Dynamically set bannerid
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

/**
 * Links a campaign to a zone in the ad server.
 * @param int $zone_id The ID of the zone to link the campaign to.
 * @param int $campaign_id The ID of the campaign to link to the zone.
 * @return void Outputs the API response.
 */
function campaignbyzone_link($zone_id, $campaign_id)
{
  $curl = curl_init();

  curl_setopt_array($curl, array(
    CURLOPT_URL => "https://adserver.brainfoodhosting.gr/api/revive_ui/campaignbyzone_link/$zone_id",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'POST',
    CURLOPT_POSTFIELDS => json_encode(["campaignid" => $campaign_id]), // Dynamically set campaignid
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

/**
 * Links a zone to an ad in the ad server.
 * @param int $ad_id The ID of the ad to link the zone to.
 * @param int $zone_id The ID of the zone to link to the ad.
 * @return void Outputs the API response.
 */
function zonebyad_link($ad_id, $zone_id)
{
  $curl = curl_init();

  curl_setopt_array($curl, array(
    CURLOPT_URL => "https://adserver.brainfoodhosting.gr/api/revive_ui/zonebyad_link/$ad_id",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'POST',
    CURLOPT_POSTFIELDS => json_encode(["zoneid" => $zone_id]), // Dynamically set zoneid
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

/**
 * Links a zone to a campaign in the ad server.
 * @param int $campaign_id The ID of the campaign to link the zone to.
 * @param int $zone_id The ID of the zone to link to the campaign.
 * @return void Outputs the API response.
 */
function zonebycampaign_link($campaign_id, $zone_id)
{
  $curl = curl_init();

  curl_setopt_array($curl, array(
    CURLOPT_URL => "https://adserver.brainfoodhosting.gr/api/revive_ui/zonebycampaign_link/$campaign_id",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'POST',
    CURLOPT_POSTFIELDS => json_encode(["zoneid" => $zone_id]), // Dynamically set zoneid
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

/**
 * Unlinks a banner from a zone in the ad server.
 * @param int $zone_id The ID of the zone to unlink the banner from.
 * @param int $banner_id The ID of the banner to unlink from the zone.
 * @return void Outputs the API response.
 */
function adbyzone_unlink($zone_id, $banner_id)
{
  $curl = curl_init();

  curl_setopt_array($curl, array(
    CURLOPT_URL => "https://adserver.brainfoodhosting.gr/api/revive_ui/adbyzone_unlink/$zone_id",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'POST',
    CURLOPT_POSTFIELDS => json_encode(["bannerid" => $banner_id]), // Dynamically set bannerid
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

/**
 * Unlinks a zone from an ad in the ad server.
 * @param int $ad_id The ID of the ad to unlink the zone from.
 * @param int $zone_id The ID of the zone to unlink from the ad.
 * @return void Outputs the API response.
 */
function zonebyad_unlink($ad_id, $zone_id)
{
  $curl = curl_init();

  curl_setopt_array($curl, array(
    CURLOPT_URL => "https://adserver.brainfoodhosting.gr/api/revive_ui/zonebyad_unlink/$ad_id",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'POST',
    CURLOPT_POSTFIELDS => json_encode(["zoneid" => $zone_id]), // Dynamically set zoneid
    CURLOPT_HTTPHEADER => array(
      'Content-Type: application/json',
      'Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE3NDA0ODI5NTEsImV4cCI6MTc3MjAxODk1MSwic3ViIjoicm9vdCJ9.6_HPDypihtGZdweE_DN8yeP2t8sodvVCaUpAiqYrDw0',
      'Cookie: PHPSESSID=vukbm67jukqcapk2qvbt8n79us'
    ),
  ));

  $response = curl_exec($curl);

  curl_close($curl);
  echo $response;
}

/**
 * Unlinks a zone from a campaign in the ad server.
 * @param int $ad_id The ID of the campaign to unlink the zone from.
 * @param int $zone_id The ID of the zone to unlink from the campaign.
 * @return void Outputs the API response.
 */
function zonebycampaign_unlink($ad_id, $zone_id)
{
  $curl = curl_init();

  curl_setopt_array($curl, array(
    CURLOPT_URL => "https://adserver.brainfoodhosting.gr/api/revive_ui/zonebycampaign_unlink/$ad_id",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'POST',
    CURLOPT_POSTFIELDS => json_encode(["zoneid" => $zone_id]), // Dynamically set zoneid
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

/**
 * Retrieves linked banners for a specific zone.
 * @param int $zone_id The ID of the zone to retrieve linked banners for.
 * @return void Outputs the API response.
 */
function get_linked_banners($zone_id)
{
  $curl = curl_init();

  curl_setopt_array($curl, array(
    CURLOPT_URL => "https://adserver.brainfoodhosting.gr/api/revive_ui/get_linked_banners/$zone_id",
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

/**
 * Retrieves linked zones for a specific campaign.
 * @param int $campaign_id The ID of the campaign to retrieve linked zones for.
 * @return void Outputs the API response.
 */
function get_campaign_linked_zones($campaign_id)
{
  $curl = curl_init();

  curl_setopt_array($curl, array(
    CURLOPT_URL => "https://adserver.brainfoodhosting.gr/api/revive_ui/get_campaign_linked_zones/$campaign_id",
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

/**
 * Retrieves linked zones for a specific banner.
 * @param int $banner_id The ID of the banner to retrieve linked zones for.
 * @return void Outputs the API response.
 */
function get_linked_zones($banner_id)
{
  $curl = curl_init();

  curl_setopt_array($curl, array(
    CURLOPT_URL => "https://adserver.brainfoodhosting.gr/api/revive_ui/get_linked_zones/$banner_id",
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

/**
 * Retrieves linked campaigns for a specific zone.
 * @param int $zone_id The ID of the zone to retrieve linked campaigns for.
 * @return void Outputs the API response.
 */
function get_linked_campaigns($zone_id)
{
  $curl = curl_init();

  curl_setopt_array($curl, array(
    CURLOPT_URL => "https://adserver.brainfoodhosting.gr/api/revive_ui/get_linked_campaigns/$zone_id",
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
