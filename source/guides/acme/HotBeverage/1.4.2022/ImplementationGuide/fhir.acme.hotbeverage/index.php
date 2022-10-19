<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://fhir.org/guides/acme/HotBeverage/1.4.2022/ImplementationGuide-fhir.acme.hotbeverage.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://fhir.org/guides/acme/HotBeverage/1.4.2022/ImplementationGuide-fhir.acme.hotbeverage.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://fhir.org/guides/acme/HotBeverage/1.4.2022/ImplementationGuide-fhir.acme.hotbeverage.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://fhir.org/guides/acme/HotBeverage/1.4.2022/ImplementationGuide-fhir.acme.hotbeverage.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://fhir.org/guides/acme/HotBeverage/1.4.2022/ImplementationGuide-fhir.acme.hotbeverage.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://fhir.org/guides/acme/HotBeverage/1.4.2022/ImplementationGuide-fhir.acme.hotbeverage.html');
else 
  Redirect('http://fhir.org/guides/acme/HotBeverage/1.4.2022/ImplementationGuide-fhir.acme.hotbeverage.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
