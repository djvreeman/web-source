<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://fhir.org/guides/argonaut/questionnaire/1.0.0/SearchParameter-patient-birthdate.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://fhir.org/guides/argonaut/questionnaire/1.0.0/SearchParameter-patient-birthdate.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://fhir.org/guides/argonaut/questionnaire/1.0.0/SearchParameter-patient-birthdate.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://fhir.org/guides/argonaut/questionnaire/1.0.0/SearchParameter-patient-birthdate.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://fhir.org/guides/argonaut/questionnaire/1.0.0/SearchParameter-patient-birthdate.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://fhir.org/guides/argonaut/questionnaire/1.0.0/SearchParameter-patient-birthdate.html');
else 
  Redirect('http://fhir.org/guides/argonaut/questionnaire/1.0.0/SearchParameter-patient-birthdate.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
