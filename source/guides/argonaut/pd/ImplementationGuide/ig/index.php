<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'json') !== false)
  Redirect('http://fhir.org/guides/argonaut/pd/release1/ImplementationGuide-ig.json');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://fhir.org/guides/argonaut/pd/release1/ImplementationGuide-ig.html');
else 
  Redirect('http://fhir.org/guides/argonaut/pd/release1/ImplementationGuide-ig.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
