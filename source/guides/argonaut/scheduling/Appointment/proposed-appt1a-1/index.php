<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'json') !== false)
  Redirect('http://fhir.org/guides/argonaut/scheduling/release1/Appointment-proposed-appt1a-1.json');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://fhir.org/guides/argonaut/scheduling/release1/Appointment-proposed-appt1a-1.html');
else 
  Redirect('http://fhir.org/guides/argonaut/scheduling/release1/Appointment-proposed-appt1a-1.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
