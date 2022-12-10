<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'json') !== false)
  Redirect('http://fhir.org/guides/argonaut/scheduling/release1/Schedule-2017-08-28-derm.json');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://fhir.org/guides/argonaut/scheduling/release1/Schedule-2017-08-28-derm.html');
else 
  Redirect('http://fhir.org/guides/argonaut/scheduling/release1/Schedule-2017-08-28-derm.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
