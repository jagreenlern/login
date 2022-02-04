
<?php
// Función para llamar al webservice y devolver el resultado en un array
function callWebService()
{
  //$method
  $url ='https://api.weatherbit.io/v2.0/current?lat=35.7796&lon=-78.6382&key=19j1DPyTgo6GdRN9CFzeJntkSmJwJshPH6&include=minutely';
  $json = file_get_contents($url);
  $array = json_decode($json,true);
  return $array;
}

$resul = callWebService();
foreach($resul['geonames'] as $city)
{
    $cities .= '<p>'.$city['name'].'</p>';    
}
print_r ($cities);

//https://api.weatherbit.io/v2.0/current?lat=35.7796&lon=-78.6382&key=API_KEY&include=minutely

// https://api.weatherbit.io/v2.0/current?lat=35.7796&lon=-78.6382&key=19j1DPyTgo6GdRN9CFzeJntkSmJwJshPH6&include=minutely


?>