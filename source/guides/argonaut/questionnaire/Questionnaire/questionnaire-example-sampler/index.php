<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://fhir.org/guides/argonaut/questionnaire/1.0.0/Questionnaire-questionnaire-example-sampler.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://fhir.org/guides/argonaut/questionnaire/1.0.0/Questionnaire-questionnaire-example-sampler.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://fhir.org/guides/argonaut/questionnaire/1.0.0/Questionnaire-questionnaire-example-sampler.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://fhir.org/guides/argonaut/questionnaire/1.0.0/Questionnaire-questionnaire-example-sampler.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://fhir.org/guides/argonaut/questionnaire/1.0.0/Questionnaire-questionnaire-example-sampler.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://fhir.org/guides/argonaut/questionnaire/1.0.0/Questionnaire-questionnaire-example-sampler.html');
else 
  Redirect('http://fhir.org/guides/argonaut/questionnaire/1.0.0/Questionnaire-questionnaire-example-sampler.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
