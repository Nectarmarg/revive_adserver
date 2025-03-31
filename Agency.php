<?php

/**  
 * Add Agency and echo the response
 * @return void
 */

function add_agency()
{

    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://adserver.brainfoodhosting.gr/api/revive_ui/agency_add',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => '
        {
            "name":"5",
            "contact":"adsfs",
            "email":"agency@dreamajax.com",
            "status":"0"
        }',
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


/**  
 * Update Agency and echo the response
 * @param int $agency_id The ID of the agency to be updated.
 * @return void
 */

function agency_edit($agency_id)
{

    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => "https://adserver.brainfoodhosting.gr/api/revive_ui/agency_edit/$agency_id",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => '{
        "name":"4",
        "contact":"1245",
        "email":"adserver@dreamajax.com",
        "status":"-0",
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

/**  
 * Delete Agency and echo the response
 * @param int $agency_id The ID of the agency to be deleted.
 * @return void
 */

function agency_delete($agency_id)
{
    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => "https://adserver.brainfoodhosting.gr/api/revive_ui/agency_delete/$agency_id",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'DELETE',
        CURLOPT_HTTPHEADER => array(
            'Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE3NDA0ODI5NTEsImV4cCI6MTc3MjAxODk1MSwic3ViIjoicm9vdCJ9.6_HPDypihtGZdweE_DN8yeP2t8sodvVCaUpAiqYrDw0',
            'Cookie: PHPSESSID=hpggolastnffma0s9hru28iq62'
        ),
    ));

    $response = curl_exec($curl);

    curl_close($curl);
    echo $response;
}

/**  
 * Get Agency and echo the response
 * @param int $agency_id The ID of the agency to be echoed.
 * @return void
 */

function get_agency($agency_id)
{


    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => "https://adserver.brainfoodhosting.gr/api/revive_ui/get_agency/$agency_id",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'GET',
        CURLOPT_HTTPHEADER => array(
            'Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE3NDA0ODI5NTEsImV4cCI6MTc3MjAxODk1MSwic3ViIjoicm9vdCJ9.6_HPDypihtGZdweE_DN8yeP2t8sodvVCaUpAiqYrDw0',
            'Cookie: PHPSESSID=hpggolastnffma0s9hru28iq62'
        ),
    ));

    $response = curl_exec($curl);

    curl_close($curl);
    echo $response;
}

/** 
 * Get all agencies and echo the response
 * 
 * NOTE: The id is always 1.
 * 
 * NOTE: If the id is not 1 an error will be returned.*/

function get_all_agency()
{

    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://adserver.brainfoodhosting.gr/api/revive_ui/get_all_agency/1',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'GET',
        CURLOPT_HTTPHEADER => array(
            'Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE3NDA0ODI5NTEsImV4cCI6MTc3MjAxODk1MSwic3ViIjoicm9vdCJ9.6_HPDypihtGZdweE_DN8yeP2t8sodvVCaUpAiqYrDw0',
            'Cookie: PHPSESSID=hpggolastnffma0s9hru28iq62'
        ),
    ));

    $response = curl_exec($curl);

    curl_close($curl);
    echo $response;
}
