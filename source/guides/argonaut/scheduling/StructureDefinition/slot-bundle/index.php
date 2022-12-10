<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'json') !== false)
  Redirect('http://fhir.org/guides/argonaut/scheduling/release1/StructureDefinition-slot-bundle.json');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://fhir.org/guides/argonaut/scheduling/release1/StructureDefinition-slot-bundle.html');
else 
  Redirect('http://fhir.org/guides/argonaut/scheduling/release1/StructureDefinition-slot-bundle.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
