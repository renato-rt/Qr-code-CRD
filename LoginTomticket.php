<?php
$i = $_GET["name"];
//isset($_GET['name']
//https://countriesnow.space/api/v0.1/countries/population/cities

switch ($i) {
    case 1:
header("Location: https://www.systutorials.com/{}",TRUE,303);
exit;
        break;
    case 2:
        echo "i equals 2";
        break;
    case 3:
        makeAcess("ricardo.emiliano@crd.med.br");
        break;
    default:
    header("Location: https:\/\/chamadoscrd.tomticket.com\/",FALSE,303);
break;
}

function makeAcess($user) {
    $curl = curl_init();
    //Retirado código do 1nsomnia, retirado parte do coockie

    curl_setopt_array($curl, [
    CURLOPT_URL => "https://api.tomticket.com/criar_acesso_cliente/a4b0698d6c9cd15d23d576d760957cb0",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_POSTFIELDS => "-----011000010111000001101001\r\nContent-Disposition: form-data; name=\"identificador\"\r\n\r\n{$user}\r\n-----011000010111000001101001\r\nContent-Disposition: form-data; name=\"tipo_identificacao\"\r\n\r\n1\r\n-----011000010111000001101001--\r\n",
    CURLOPT_HTTPHEADER => [
        "Content-Type: multipart/form-data; boundary=---011000010111000001101001"
    ],
    ]);

    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);

    if ($err) {
    echo "cURL Error #:" . $err;
    } else {
        $array = json_decode($response, true);
        //echo $array['token_acesso'];
        header("Location: https:\/\/chamadoscrd.tomticket.com\/helpdesk?lr={$array['token_acesso']}",FALSE,303);
    }
}
?>