 <?php

    //  Add Campaign
    function campaign_add($advertiser_id)
    {


        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://adserver.brainfoodhosting.gr/api/revive_ui/campaign_add/$advertiser_id",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => '{
        "campaignname":"sss",
        "views":"5",
        "clicks":"5",
        "conversions":"5" ,
        "weight":"5",
        "target_impression":"5" ,
        "target_click":"5" ,
        "target_conversion":"5" ,
        "anonymous":"t",
        "companion":"1",
        "comments":"test" ,
        "revenue":"2.0000",
        "revenue_type":"1",
        "priority":"0",
        "block":"5334",
        "capping":"5" ,
        "session_capping":"5" ,
        "status":"0" ,
        "hosted_views":"0",
        "hosted_clicks":"5",
        "min_impressions":"5" ,
        "start_date":"2017-02-1918:30:00",
        "end_date":"2017-12-2918:30:00",
        "show_capped_no_cookie":"0"
        
        }',
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/json',
                'Authorization: ••••••',
                'Cookie: PHPSESSID=umf5s4cvrqsi5rkla5vb5nphnt'
            ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        echo $response;
    }

    // Edit Campaign
    function campaign_edit($campaign_id)
    {

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://adserver.brainfoodhosting.gr/api/revive_ui/campaign_edit/$campaign_id",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => '{"campaignname":"campaign-edit_2",
            "views":-1,
            "clicks":-1,
            "conversions":-1 ,
            "weight":1,
            "target_impression":0 ,
            "target_click":0 ,
            "target_conversion":0 ,
            "anonymous":"t",
            "companion":0,
            "comments":"test" ,
            "revenue":20000,
            "revenue_type":1,
            "priority":-1,
            "block":0,
            "capping":0 ,
            "session_capping":0 ,
            "status":0 ,
            "hosted_views":0,
            "hosted_clicks":0,
            "min_impressions":5 ,
            "start_date":"2021-02-28 18:30:00",
            "end_date":"2023-06-06 18:30:00",
            "show_capped_no_cookie":0,
            "mode": "edit"
            }
            ',
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/json',
                'Authorization: ••••••',
                'Cookie: PHPSESSID=hpggolastnffma0s9hru28iq62'
            ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        echo $response;
    }

    // Delete Campaign
    function campaign_delete($campaign_id)
    {

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://adserver.brainfoodhosting.gr/api/revive_ui/campaign_delete/$campaign_id",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'DELETE',
            CURLOPT_POSTFIELDS => '{"campaignname":"campaign-edit",
            "views":-1,
            "clicks":-1,
            "conversions":-1 ,
            "weight":1,
            "target_impression":0 ,
            "target_click":0 ,
            "target_conversion":0 ,
            "anonymous":"t",
            "companion":0,
            "comments":"test" ,
            "revenue":20000,
            "revenue_type":1,
            "priority":-1,
            "block":0,
            "capping":0 ,
            "session_capping":0 ,
            "status":0 ,
            "hosted_views":0,
            "hosted_clicks":0,
            "min_impressions":5 ,
            "start_date":"2021-02-28 18:30:00",
            "end_date":"2023-06-06 18:30:00",
            "show_capped_no_cookie":0,
            "mode": "edit"
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

    // Get single Campaign
    function get_campaign($campaign_id)
    {


        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://adserver.brainfoodhosting.gr/api/revive_ui/get_campaign/$campaign_id",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_POSTFIELDS => '{"campaignname":"campaign-edit",
            "views":-1,
            "clicks":-1,
            "conversions":-1 ,
            "weight":1,
            "target_impression":0 ,
            "target_click":0 ,
            "target_conversion":0 ,
            "anonymous":"t",
            "companion":0,
            "comments":"test" ,
            "revenue":20000,
            "revenue_type":1,
            "priority":-1,
            "block":0,
            "capping":0 ,
            "session_capping":0 ,
            "status":0 ,
            "hosted_views":0,
            "hosted_clicks":0,
            "min_impressions":5 ,
            "start_date":"2021-02-28 18:30:00",
            "end_date":"2023-06-06 18:30:00",
            "show_capped_no_cookie":0,
            "mode": "edit"
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

    // Get all Campaigns(From a specific Advertiser)
    function get_all_campaigns($advertiser_id)
    {


        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://adserver.brainfoodhosting.gr/api/revive_ui/get_all_campaigns/$advertiser_id",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_POSTFIELDS => '{"campaignname":"campaign-edit",
            "views":-1,
            "clicks":-1,
            "conversions":-1 ,
            "weight":1,
            "target_impression":0 ,
            "target_click":0 ,
            "target_conversion":0 ,
            "anonymous":"t",
            "companion":0,
            "comments":"test" ,
            "revenue":20000,
            "revenue_type":1,
            "priority":-1,
            "block":0,
            "capping":0 ,
            "session_capping":0 ,
            "status":0 ,
            "hosted_views":0,
            "hosted_clicks":0,
            "min_impressions":5 ,
            "start_date":"2021-02-28 18:30:00",
            "end_date":"2023-06-06 18:30:00",
            "show_capped_no_cookie":0,
            "mode": "edit"
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
