<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://fhir.org/guides/acme/HotBeverage/1.4.2022/Device-VertuoNext.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://fhir.org/guides/acme/HotBeverage/1.4.2022/Device-VertuoNext.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://fhir.org/guides/acme/HotBeverage/1.4.2022/Device-VertuoNext.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://fhir.org/guides/acme/HotBeverage/1.4.2022/Device-VertuoNext.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://fhir.org/guides/acme/HotBeverage/1.4.2022/Device-VertuoNext.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://fhir.org/guides/acme/HotBeverage/1.4.2022/Device-VertuoNext.html');
else 
  Redirect('http://fhir.org/guides/acme/HotBeverage/1.4.2022/Device-VertuoNext.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
