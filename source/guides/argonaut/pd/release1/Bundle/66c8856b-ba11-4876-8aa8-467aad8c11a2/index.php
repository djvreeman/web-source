<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'json') !== false)
  Redirect('http://fhir.org/guides/argonaut/pd/release1/Bundle-66c8856b-ba11-4876-8aa8-467aad8c11a2.json');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://fhir.org/guides/argonaut/pd/release1/Bundle-66c8856b-ba11-4876-8aa8-467aad8c11a2.html');
else 
  Redirect('http://fhir.org/guides/argonaut/pd/release1/Bundle-66c8856b-ba11-4876-8aa8-467aad8c11a2.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
