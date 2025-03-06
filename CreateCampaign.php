<?php
require_once 'Agency.php';
require_once 'Advertiser.php';
require_once 'Campaign.php';
require_once 'Banner.php';
require_once 'Publisher.php';
require_once 'Zone.php';




// 1) Add advertiser inside the Agency
$advertiser_id = advertiser_add(1);

// 2) Add campaign inside Advertiser
$campaign_id = campaign_add($advertiser_id);

// 3) Add banner inside Campaign
add_banner($campaign_id);

// 4) Add publisher/website inside the Agency
$publisher_id = add_publisher(1);

// 5)Add Zone inside publisher/website
add_zone($publisher_id);
