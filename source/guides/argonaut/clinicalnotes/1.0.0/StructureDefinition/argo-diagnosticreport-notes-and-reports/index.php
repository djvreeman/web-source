<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://fhir.org/guides/argonaut/clinicalnotes/1.0.0/StructureDefinition-argo-diagnosticreport-notes-and-reports.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://fhir.org/guides/argonaut/clinicalnotes/1.0.0/StructureDefinition-argo-diagnosticreport-notes-and-reports.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://fhir.org/guides/argonaut/clinicalnotes/1.0.0/StructureDefinition-argo-diagnosticreport-notes-and-reports.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://fhir.org/guides/argonaut/clinicalnotes/1.0.0/StructureDefinition-argo-diagnosticreport-notes-and-reports.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://fhir.org/guides/argonaut/clinicalnotes/1.0.0/StructureDefinition-argo-diagnosticreport-notes-and-reports.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://fhir.org/guides/argonaut/clinicalnotes/1.0.0/StructureDefinition-argo-diagnosticreport-notes-and-reports.html');
else 
  Redirect('http://fhir.org/guides/argonaut/clinicalnotes/1.0.0/StructureDefinition-argo-diagnosticreport-notes-and-reports.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
