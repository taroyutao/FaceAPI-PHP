<?php

use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Client;

require_once 'vendor\autoload.php';

$client = new Client();

$headers = ['Content-Type' => 'application/json','Ocp-Apim-Subscription-Key' => '4fe95dd8ec4247a69cb2a001efda06c6'];

$body = '{"url":"https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1494416315487&di=5e05a310f8c7b3fec011901ff3d13f93&imgtype=0&src=http%3A%2F%2Fimgsrc.baidu.com%2Fbaike%2Fpic%2Fitem%2F4034970a304e251ff1e3819aa486c9177f3e53bf.jpg"}';

$request = new Request('POST','https://api.cognitive.azure.cn/face/v1.0/detect?returnFaceId=true&returnFaceLandmarks=false&returnFaceAttributes=age', $headers , $body);

$response = $client->send($request);

echo $response->getBody();

?>