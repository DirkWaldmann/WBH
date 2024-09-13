<?php
setUrl('https://wbhdbi15-f1db.restdb.io/rest/test-001');
$request->setMethod(HTTP_METH_GET);

$request->setHeaders(array(
  'cache-control' => 'no-cache',
  'x-apikey' => '9a5654028784702a87bc8c3d05602cf429886',
  'content-type' => 'application/json'
));

try {
  $response = $request->send();

  echo $response->getBody();
} catch (HttpException $ex) {
  echo $ex;
}
?>
