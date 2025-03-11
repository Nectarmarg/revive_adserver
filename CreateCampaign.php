<?php
require_once 'Agency.php';
require_once 'Advertiser.php';
require_once 'Campaign.php';
require_once 'Banner.php';
require_once 'Publisher.php';
require_once 'Zone.php';
require_once 'Link.php';
require_once 'Invoke.php';




// 1) Add advertiser inside the Agency
$advertiser_id = advertiser_add(1);

// 2) Add campaign inside Advertiser
$campaign_id = campaign_add($advertiser_id);

// 3) Add banner inside Campaign
$banner_id = add_banner($campaign_id);

// 4) Add publisher/website inside the Agency
$publisher_id = add_publisher(1);

// 5) Add Zone inside publisher/website
$zone_id = add_zone($publisher_id);

// 6) Link banner and zone via adbyzone link ($zone_id, $banner_id)
adbyzone_link($zone_id, $banner_id);

// 7)Echo the invocation code
invoke_javascript($zone_id);
