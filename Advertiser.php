<?php

// Add advertiser
function advertiser_add($agency_id)
{


    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => "https://adserver.brainfoodhosting.gr/api/revive_ui/advertiser_add/$agency_id",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => '{
        "clientname":"Example_Advertiser",
        "contact":"3534533",
        "email":"admin@gmail.com",
        "report":"t",
        "reportinterval":"7",
        "reportdeactivate":"t",
        "comments":"comments till ",
        "advertiser_limitation":"1"
        }',
        CURLOPT_HTTPHEADER => array(
            'Content-Type: application/json',
            'Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE3NDA0ODI5NTEsImV4cCI6MTc3MjAxODk1MSwic3ViIjoicm9vdCJ9.6_HPDypihtGZdweE_DN8yeP2t8sodvVCaUpAiqYrDw0',
            'Cookie: PHPSESSID=umf5s4cvrqsi5rkla5vb5nphnt'
        ),
    ));

    $response = curl_exec($curl);

    curl_close($curl);
    $responseData = json_decode($response);

    // Extract id using regex
    if (isset($responseData->message)) {
        preg_match("/(\d+)/", $responseData->message, $matches);
        $advertiser_id = $matches[1] ?? null;
    }
    echo $response;
    return $advertiser_id;
}

// Edit advertiser
function advertiser_edit($advertiser_id)
{

    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => "https://adserver.brainfoodhosting.gr/api/revive_ui/advertiser_edit/$advertiser_id",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => '{"clientname":"advertiser_edit",
        "contact":"3534533",
        "email":"admin@gmail.com",
        "report":"t",
        "reportinterval":"7",
        "reportdeactivate":"t",
        "comments":"comments till revive",
        "advertiser_limitation":"1",
        "mode":"edit"
        }
        ',
        CURLOPT_HTTPHEADER => array(
            'Content-Type: application/json',
            'Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE3NDA0ODI5NTEsImV4cCI6MTc3MjAxODk1MSwic3ViIjoicm9vdCJ9.6_HPDypihtGZdweE_DN8yeP2t8sodvVCaUpAiqYrDw0',
            'Cookie: PHPSESSID=hpggolastnffma0s9hru28iq62'
        ),
    ));

    $response = curl_exec($curl);

    curl_close($curl);
    echo $response;
}

// Delete advertiser
function advertiser_delete($advertiser_id)
{

    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => "https://adserver.brainfoodhosting.gr/api/revive_ui/advertiser_delete/$advertiser_id",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'DELETE',
        CURLOPT_HTTPHEADER => array(
            'Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE3NDA0ODI5NTEsImV4cCI6MTc3MjAxODk1MSwic3ViIjoicm9vdCJ9.6_HPDypihtGZdweE_DN8yeP2t8sodvVCaUpAiqYrDw0',
            'Cookie: PHPSESSID=umf5s4cvrqsi5rkla5vb5nphnt'
        ),
    ));

    $response = curl_exec($curl);

    curl_close($curl);
    echo $response;
}

// Get single advertiser
function get_advertiser($advertiser_id)
{

    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => "https://adserver.brainfoodhosting.gr/api/revive_ui/get_advertiser/$advertiser_id",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'GET',
        CURLOPT_HTTPHEADER => array(
            'Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE3NDA0ODI5NTEsImV4cCI6MTc3MjAxODk1MSwic3ViIjoicm9vdCJ9.6_HPDypihtGZdweE_DN8yeP2t8sodvVCaUpAiqYrDw0',
            'Cookie: PHPSESSID=umf5s4cvrqsi5rkla5vb5nphnt'
        ),
    ));

    $response = curl_exec($curl);

    curl_close($curl);
    echo $response;
}

// Get all advertisers
function get_all_advertiser($agency_id)
{


    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => "https://adserver.brainfoodhosting.gr/api/revive_ui/get_all_advertiser/$agency_id",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'GET',
        CURLOPT_HTTPHEADER => array(
            'Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE3NDA0ODI5NTEsImV4cCI6MTc3MjAxODk1MSwic3ViIjoicm9vdCJ9.6_HPDypihtGZdweE_DN8yeP2t8sodvVCaUpAiqYrDw0',
            'Cookie: PHPSESSID=umf5s4cvrqsi5rkla5vb5nphnt'
        ),
    ));

    $response = curl_exec($curl);

    curl_close($curl);
    echo $response;
}
