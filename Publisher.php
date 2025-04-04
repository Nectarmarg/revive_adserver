<?php

/**
 * Add Publisher inside the Agency
 * Sends a POST request to add a publisher under a specific agency.
 * 
 * @param int $agency_id The ID of the agency to which the publisher will be added.
 * @return int|null The ID of the publisher added, or null if not found in the response.
 */
function add_publisher($agency_id)
{


    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => "https://adserver.brainfoodhosting.gr/api/revive_ui/add_publisher/$agency_id",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => '{
    "ad_type":"3",
    "name":"Example_publisher",
    "contact":"4242344",
    "email":"publisher.s@gmail.com",
    "website":"http://www.testgoogle.com"
}
',
        CURLOPT_HTTPHEADER => array(
            'Content-Type: application/json',
            'Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE3NDA0ODI5NTEsImV4cCI6MTc3MjAxODk1MSwic3ViIjoicm9vdCJ9.6_HPDypihtGZdweE_DN8yeP2t8sodvVCaUpAiqYrDw0',
            'Cookie: PHPSESSID=vvmqfagrip9mqfnqnccfs7lpgv'
        ),
    ));

    $response = curl_exec($curl);

    curl_close($curl);
    $responseData = json_decode($response);

    // retrieve the id using regex
    if (isset($responseData->message)) {
        preg_match("/(\d+)/", $responseData->message, $matches);
        $publisher_id = $matches[1] ?? null;
    }
    return $publisher_id;
}

/**
 * Edit Publisher
 * Sends a POST request to edit the details of an existing publisher.
 * 
 * @param int $publisher_id The ID of the publisher to be edited.
 * @return void Outputs the API response.
 */
function edit_publisher($publisher_id)
{
    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => "https://adserver.brainfoodhosting.gr/api/revive_ui/edit_publisher/$publisher_id",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => '{
    "ad_type":"3",
    "name":"publisher",
    "contact":"4242344",
    "email":"publisher.s@gmail.com",
    "website":"http://www.testgoogle.com",
    "mode":"edit"

}',
        CURLOPT_HTTPHEADER => array(
            'Content-Type: application/json',
            'Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE3NDA0ODI5NTEsImV4cCI6MTc3MjAxODk1MSwic3ViIjoicm9vdCJ9.6_HPDypihtGZdweE_DN8yeP2t8sodvVCaUpAiqYrDw0',
            'Cookie: PHPSESSID=vvmqfagrip9mqfnqnccfs7lpgv'
        ),
    ));

    $response = curl_exec($curl);

    curl_close($curl);
    echo $response;
}

/**
 * Delete Publisher
 * Sends a DELETE request to remove a publisher by ID.
 * 
 * @param int $publisher_id The ID of the publisher to be deleted.
 * @return void Outputs the API response.
 */
function delete_publisher($publisher_id)
{
    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => "https://adserver.brainfoodhosting.gr/api/revive_ui/delete_publisher/$publisher_id",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'DELETE',
        CURLOPT_POSTFIELDS => '{
    "name":"publisher",
    "contact":"4242344",
    "email":"publisher.s@gmail.com",
    "website":"http://www.testgoogle.com"
}',
        CURLOPT_HTTPHEADER => array(
            'Content-Type: application/json',
            'Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE3NDA0ODI5NTEsImV4cCI6MTc3MjAxODk1MSwic3ViIjoicm9vdCJ9.6_HPDypihtGZdweE_DN8yeP2t8sodvVCaUpAiqYrDw0',
            'Cookie: PHPSESSID=vvmqfagrip9mqfnqnccfs7lpgv'
        ),
    ));

    $response = curl_exec($curl);

    curl_close($curl);
    echo $response;
}

/**
 * Get Publisher Details
 * Sends a GET request to retrieve details of a specific publisher.
 * 
 * @param int $publisher_id The ID of the publisher whose details are to be fetched.
 * @return void Outputs the API response.
 */
function getpublisherdetails($publisher_id)
{
    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => "https://adserver.brainfoodhosting.gr/api/revive_ui/getpublisherdetails/$publisher_id",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'GET',
        CURLOPT_POSTFIELDS => '{
    "name":"publisher",
    "contact":"4242344",
    "email":"publisher.s@gmail.com",
    "website":"http://www.testgoogle.com"
}',
        CURLOPT_HTTPHEADER => array(
            'Content-Type: application/json',
            'Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE3NDA0ODI5NTEsImV4cCI6MTc3MjAxODk1MSwic3ViIjoicm9vdCJ9.6_HPDypihtGZdweE_DN8yeP2t8sodvVCaUpAiqYrDw0',
            'Cookie: PHPSESSID=rtssam93d0u4ejjbhv9qc24s9p'
        ),
    ));

    $response = curl_exec($curl);

    curl_close($curl);
    echo $response;
}

/**
 * Get All Publishers
 * Sends a GET request to retrieve all publishers under a specific agency.
 * 
 * @param int $agency_id The ID of the agency whose publishers are to be fetched.
 * @return void Outputs the API response.
 */
function getallpublisher($agency_id)
{
    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => "https://adserver.brainfoodhosting.gr/api/revive_ui/getallpublisher/$agency_id",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'GET',
        CURLOPT_POSTFIELDS => '{
    "name":"publisher",
    "contact":"4242344",
    "email":"publisher.s@gmail.com",
    "website":"http://www.testgoogle.com"
}',
        CURLOPT_HTTPHEADER => array(
            'Content-Type: application/json',
            'Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE3NDA0ODI5NTEsImV4cCI6MTc3MjAxODk1MSwic3ViIjoicm9vdCJ9.6_HPDypihtGZdweE_DN8yeP2t8sodvVCaUpAiqYrDw0',
            'Cookie: PHPSESSID=rtssam93d0u4ejjbhv9qc24s9p'
        ),
    ));

    $response = curl_exec($curl);

    curl_close($curl);
    echo $response;
}
