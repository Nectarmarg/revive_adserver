<?php

/**
 * Adds banner inside the Campaign
 * @param int $campaign_id
 * @return int The id of the banner added
 */

function add_banner($campaign_id)
{


    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => "https://adserver.brainfoodhosting.gr/api/revive_ui/add_banner/$campaign_id",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => '{
"storagetype":"html",
"description":"inline-video",
"vast_video_duration":"30",
"vast_video_type":"video/x-mp4",
"vast_video_outgoing_filename":"https://demo.reviveadservermod.com/advanced_vast/Projector.mp4",
"vast_video_clickthrough_url":"http://www.dreamajax.com",
"vast_companion_banner_id":"21",
"vast_thirdparty_impression":"https://www.viki.com",
"comments":"comments test",
"keyword":"",
"append":"test",
"prepend":"test",
"weight":"1"
}

',
        CURLOPT_HTTPHEADER => array(
            'Content-Type: application/json',
            'Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE3NDA0ODI5NTEsImV4cCI6MTc3MjAxODk1MSwic3ViIjoicm9vdCJ9.6_HPDypihtGZdweE_DN8yeP2t8sodvVCaUpAiqYrDw0',
            'Cookie: PHPSESSID=7d26gjk40hn2nus2fd39ehgnpr'
        ),
    ));

    $response = curl_exec($curl);

    curl_close($curl);

    $responseData = json_decode($response);

    if (isset($responseData->message)) {
        preg_match("/(\d+)/", $responseData->message, $matches);
        $response_id = $matches[1] ?? null;
    }
    return $response_id;
}

/**
 * Edits an existing banner
 * @param int $banner_id The id of the banner to edit
 */
function edit_banner($banner_id)
{


    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => "https://adserver.brainfoodhosting.gr/api/revive_ui/edit_banner/$banner_id",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => '{
        "description":"web",
        "contenttype":"gif",
        "storagetype":"web",
        "imageurl":"https://www.channel4fm.com/wpcontent/uploads/2019/08/bk.jpg",
        "width":"640",
        "height":"60",
        "weight":"300",
        "url":"",
        "target":"",
        "alt":"alt",
        "statustext":"status",
        "bannertext":"banner text",
        "comments":"test comment",
        "updated":"28-7-201600:00:00",
        "keyword":"kwd",
        "append":"append",
        "prepend":"prepend"
        }
        ',
        CURLOPT_HTTPHEADER => array(
            'Content-Type: application/json',
            'Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE3NDA0ODI5NTEsImV4cCI6MTc3MjAxODk1MSwic3ViIjoicm9vdCJ9.6_HPDypihtGZdweE_DN8yeP2t8sodvVCaUpAiqYrDw0',
            'Cookie: PHPSESSID=7d26gjk40hn2nus2fd39ehgnpr'
        ),
    ));

    $response = curl_exec($curl);

    curl_close($curl);
    echo $response;
}

/**
 * Deletes a banner
 * @param int $banner_id The id of the banner to delete
 */
function delete_banner($banner_id)
{


    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => "https://adserver.brainfoodhosting.gr/api/revive_ui/delete_banner/$banner_id",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'DELETE',
        CURLOPT_POSTFIELDS => '{
        "description":"web",
        "contenttype":"gif",
        "storagetype":"web",
        "imageurl":"https://www.channel4fm.com/wpcontent/uploads/2019/08/bk.jpg",
        "width":"250",
        "height":"100",
        "weight":"100",
        "url":"",
        "target":"",
        "alt":"alt",
        "statustext":"status",
        "bannertext":"banner text",
        "comments":"test comment",
        "updated":"28-7-201600:00:00",
        "keyword":"kwd",
        "append":"append",
        "prepend":"prepend",
        "mode":"edit"
        }
        ',
        CURLOPT_HTTPHEADER => array(
            'Content-Type: application/json',
            'Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE3NDA0ODI5NTEsImV4cCI6MTc3MjAxODk1MSwic3ViIjoicm9vdCJ9.6_HPDypihtGZdweE_DN8yeP2t8sodvVCaUpAiqYrDw0',
            'Cookie: PHPSESSID=7d26gjk40hn2nus2fd39ehgnpr'
        ),
    ));

    $response = curl_exec($curl);

    curl_close($curl);
    echo $response;
}

/**
 * Retrieves a single banner
 * @param int $banner_id The id of the banner to retrieve
 */
function get_banner($banner_id)
{


    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => "https://adserver.brainfoodhosting.gr/api/revive_ui/get_banner/$banner_id",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'GET',
        CURLOPT_POSTFIELDS => '{
        "description":"web",
        "contenttype":"gif",
        "storagetype":"web",
        "imageurl":"https://www.channel4fm.com/wpcontent/uploads/2019/08/bk.jpg",
        "width":"250",
        "height":"100",
        "weight":"100",
        "url":"",
        "target":"",
        "alt":"alt",
        "statustext":"status",
        "bannertext":"banner text",
        "comments":"test comment",
        "updated":"28-7-201600:00:00",
        "keyword":"kwd",
        "append":"append",
        "prepend":"prepend",
        "mode":"edit"
        }
        ',
        CURLOPT_HTTPHEADER => array(
            'Content-Type: application/json',
            'Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE3NDA0ODI5NTEsImV4cCI6MTc3MjAxODk1MSwic3ViIjoicm9vdCJ9.6_HPDypihtGZdweE_DN8yeP2t8sodvVCaUpAiqYrDw0',
            'Cookie: PHPSESSID=7d26gjk40hn2nus2fd39ehgnpr'
        ),
    ));

    $response = curl_exec($curl);

    curl_close($curl);
    echo $response;
}

/**
 * Retrieves all banners for a campaign
 * @param int $campaign_id The id of the campaign to retrieve banners for
 */
function get_all_banner($campaign_id)
{
    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => "https://adserver.brainfoodhosting.gr/api/revive_ui/get_all_banner/$campaign_id",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'GET',
        CURLOPT_POSTFIELDS => '{
        "description":"web",
        "contenttype":"gif",
        "storagetype":"web",
        "imageurl":"https://www.channel4fm.com/wpcontent/uploads/2019/08/bk.jpg",
        "width":"250",
        "height":"100",
        "weight":"100",
        "url":"",
        "target":"",
        "alt":"alt",
        "statustext":"status",
        "bannertext":"banner text",
        "comments":"test comment",
        "updated":"28-7-201600:00:00",
        "keyword":"kwd",
        "append":"append",
        "prepend":"prepend",
        "mode":"edit"
        }
        ',
        CURLOPT_HTTPHEADER => array(
            'Content-Type: application/json',
            'Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE3NDA0ODI5NTEsImV4cCI6MTc3MjAxODk1MSwic3ViIjoicm9vdCJ9.6_HPDypihtGZdweE_DN8yeP2t8sodvVCaUpAiqYrDw0',
            'Cookie: PHPSESSID=7d26gjk40hn2nus2fd39ehgnpr'
        ),
    ));

    $response = curl_exec($curl);
}

/**
 * Sets limitations for a banner
 * @param int $banner_id The id of the banner to set limitations for
 */
function set_limitation($banner_id)
{
    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => "https://adserver.brainfoodhosting.gr/api/revive_ui/set_limitation/$banner_id",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => '[{"logical":"and","type":"deliveryLimitations:Client:Os","comparison":"=~","data":"w7,xp"}]
',
        CURLOPT_HTTPHEADER => array(
            'Content-Type: application/json',
            'Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE3NDA0ODI5NTEsImV4cCI6MTc3MjAxODk1MSwic3ViIjoicm9vdCJ9.6_HPDypihtGZdweE_DN8yeP2t8sodvVCaUpAiqYrDw0',
            'Cookie: PHPSESSID=7d26gjk40hn2nus2fd39ehgnpr'
        ),
    ));

    $response = curl_exec($curl);

    curl_close($curl);
    echo $response;
}

/**
 * Retrieves limitations for a banner
 * @param int $banner_id The id of the banner to retrieve limitations for
 */
function get_limitation($banner_id)
{
    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => "https://adserver.brainfoodhosting.gr/api/revive_ui/get_limitation/$banner_id",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'GET',
        CURLOPT_POSTFIELDS => '[{"logical":"and","type":"deliveryLimitations:Client:Os","comparison":"=~","data":"w7,xp"}]
',
        CURLOPT_HTTPHEADER => array(
            'Content-Type: application/json',
            'Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE3NDA0ODI5NTEsImV4cCI6MTc3MjAxODk1MSwic3ViIjoicm9vdCJ9.6_HPDypihtGZdweE_DN8yeP2t8sodvVCaUpAiqYrDw0',
            'Cookie: PHPSESSID=7d26gjk40hn2nus2fd39ehgnpr'
        ),
    ));

    $response = curl_exec($curl);

    curl_close($curl);
    echo $response;
}

/**
 * Deletes all limitations for a banner
 * @param int $banner_id The id of the banner to delete all limitations for
 */
function deletebanner_all_limitation($banner_id)
{
    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => "https://adserver.brainfoodhosting.gr/api/revive_ui/deletebanner_all_limitation/$banner_id",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'DELETE',
        CURLOPT_POSTFIELDS => '[{"logical":"and","type":"deliveryLimitations:Client:Os","comparison":"=~","data":"w7,xp"}]
',
        CURLOPT_HTTPHEADER => array(
            'Content-Type: application/json',
            'Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE3NDA0ODI5NTEsImV4cCI6MTc3MjAxODk1MSwic3ViIjoicm9vdCJ9.6_HPDypihtGZdweE_DN8yeP2t8sodvVCaUpAiqYrDw0',
            'Cookie: PHPSESSID=7d26gjk40hn2nus2fd39ehgnpr'
        ),
    ));

    $response = curl_exec($curl);

    curl_close($curl);
    echo $response;
}
