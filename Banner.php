<?php
// Add Banner
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
            'Authorization: ••••••',
            'Cookie: PHPSESSID=7d26gjk40hn2nus2fd39ehgnpr'
        ),
    ));

    $response = curl_exec($curl);

    curl_close($curl);
    echo $response;
}

// Edit Banner
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
            'Authorization: ••••••',
            'Cookie: PHPSESSID=7d26gjk40hn2nus2fd39ehgnpr'
        ),
    ));

    $response = curl_exec($curl);

    curl_close($curl);
    echo $response;
}

// Delete Banner
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
            'Authorization: ••••••',
            'Cookie: PHPSESSID=7d26gjk40hn2nus2fd39ehgnpr'
        ),
    ));

    $response = curl_exec($curl);

    curl_close($curl);
    echo $response;
}

// Get single banner
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
            'Authorization: ••••••',
            'Cookie: PHPSESSID=7d26gjk40hn2nus2fd39ehgnpr'
        ),
    ));

    $response = curl_exec($curl);

    curl_close($curl);
    echo $response;
}

// Get all banners
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
            'Authorization: ••••••',
            'Cookie: PHPSESSID=7d26gjk40hn2nus2fd39ehgnpr'
        ),
    ));

    $response = curl_exec($curl);
}

// Set limitation
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
            'Authorization: ••••••',
            'Cookie: PHPSESSID=7d26gjk40hn2nus2fd39ehgnpr'
        ),
    ));

    $response = curl_exec($curl);

    curl_close($curl);
    echo $response;
}

// Get limitation
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
            'Authorization: ••••••',
            'Cookie: PHPSESSID=7d26gjk40hn2nus2fd39ehgnpr'
        ),
    ));

    $response = curl_exec($curl);

    curl_close($curl);
    echo $response;
}

// Delete all limitations
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
            'Authorization: ••••••',
            'Cookie: PHPSESSID=7d26gjk40hn2nus2fd39ehgnpr'
        ),
    ));

    $response = curl_exec($curl);

    curl_close($curl);
    echo $response;
}
