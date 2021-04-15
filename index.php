<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTf-8">
    </head>
    <body>
    <?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://api.tomticket.com/criar_acesso_cliente/a4b0698d6c9cd15d23d576d760957cb0',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS => array('identificador' => 'ricardo.emiliano@crd.med.br','tipo_identificacao' => '1'),
  CURLOPT_HTTPHEADER => array(
    'Cookie: __cfduid=d27ed10dc4b605ca1270b696b0ef39aeb1618424191'
  ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;
?>
    </body>
</html>