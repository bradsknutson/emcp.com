<?php
require '../vendor/autoload.php';

use CSD\Marketo\Client as MarketoClient;
use Guzzle\Http\Client as GuzzleClient;

/**
 * @return CSD\Marketo\Client
 */
function make_client () {
  require '../includes/server.php';

  return MarketoClient::factory(
    array(
      'client_id' => $marketoClientId,
      'client_secret' => $marketoClientSecret,
      'munchkin_id' => $marketoMunchkinId
    )
  );
}

/**
 * Maybe registers a lead to Marketo.
 * Returns the lead id if created.
 *
 * @param firstName string
 * @param lastName string
 * @param email string
 *
 * @return int|null|false
 */
function register_lead ($firstName, $lastName, $email) {
  $client = make_client();

  $response = $client->getLeadsByFilterType("email", $email);

  if ($response->isSuccess()) {
    $leads = $response->getLeads();

    if (count($leads) === 0) {
      // Lead does not exist.
      $lead = [
        "email" => $email,
        "firstName" => $firstName,
        "lastName" => $lastName
      ];

      $res = $client->createLeads([$lead], "email");

      return $res->getId();
    } elseif (!empty($leads)) {
      for ($i=0; $i<count($leads); $i++) {
        $leads[$i]['firstName'] = $firstName;
        $leads[$i]['lastName'] = $lastName;
      }
      $client->updateLeads($leads, "id");

      return $leads[0]['id'];
    }
  }

  return null;
}

/**
 * @param leadId int
 * @param campaignId string
 */
function register_lead_to_campaign ($leadId, $campaignId) {
  $client = make_client();

  return $client->requestCampaign($campaignId, [$leadId]);
}

function register_lead_to_bookshelf ($firstName, $lastName, $email, $campaignId) {
  require '../includes/server.php';

  $client = new GuzzleClient();
  try{
    $request = $client->get(
  sprintf(
    "%s%s",
    "https://apps.emcp.com/api/bookshelf/",
      sprintf(
        "?fname=%s&lname=%s&email=%s&campaign_id=%s",
        urlencode($firstName),
        urlencode($lastName),
        urlencode($email),
        urlencode($campaignId)
      )
    )
  )->send();}
  catch(\Exception $e) {

  }
  return true;
}
