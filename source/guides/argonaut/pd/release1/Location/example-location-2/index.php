<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'json') !== false)
  Redirect('http://fhir.org/guides/argonaut/pd/release1/Location-example-location-2.json');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://fhir.org/guides/argonaut/pd/release1/Location-example-location-2.html');
else 
  Redirect('http://fhir.org/guides/argonaut/pd/release1/Location-example-location-2.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
