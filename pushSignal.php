<?php
require_once('vendor/autoload.php');

$client = new \GuzzleHttp\Client();

$response = $client->request('POST', 'https://onesignal.com/api/v1/notifications', [
  'body' => '{"app_id":"string","included_segments":["string"],"external_id":"string","contents":{"en":"English or Any Language Message","es":"Spanish Message"},"name":"INTERNAL_CAMPAIGN_NAME","send_after":"string","delayed_option":"string","delivery_time_of_day":"string","throttle_rate_per_minute":0}',
  'headers' => [
    'Accept' => 'application/json',
    'Authorization' => 'Basic YOUR_REST_API_KEY',
    'Content-Type' => 'application/json',
  ],
]);

echo $response->getBody();

?>