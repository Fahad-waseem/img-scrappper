<?php
// for images scrapping
$curl = curl_init();
curl_setopt_array($curl, array(
    CURLOPT_URL => 'https://www.airbnb.com/rooms/51762485?adults=1&category_tag=Tag%3A8225&children=0&infants=0&search_mode=flex_destinations_search&check_in=2023-01-08&check_out=2023-01-13&federated_search_id=8b1b1416-a154-4576-a186-6561a7390d08&source_impression_id=p3_1672838109_QLJ0zFlan2BVtt1l&modal=PHOTO_TOUR_SCROLLABLE',
    CURLOPT_RETURNTRANSFER => true
));

$result = curl_exec($curl);
curl_close($curl);
    preg_match_all('!https://a0.muscache.com/im/pictures/(.*).jpeg!', $result, $data);


$filter_arr = array_unique($data[0]);

foreach($filter_arr as $list)
{
    echo "<img src='$list'/> ";

}



?>
