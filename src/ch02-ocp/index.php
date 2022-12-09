<?php

require __DIR__.'/../../vendor/autoload.php';

$encoderFactory = new \ocp\Factory\EncoderFactory();
$encoderFactory->addEncoderFactory('xml',
    function(){ return new \ocp\Encoders\XmlEncoder();});
$encoderFactory->addEncoderFactory('json',
    function(){ return new \ocp\Encoders\JsonEncoder();});

$genericEncoder = new \ocp\Encoders\GenericEncoder($encoderFactory);

$data = 'Natsu Lucy Gray Erza Happy';

$jsonEncodeData = $genericEncoder->encodeToFormat($data, 'json');
//$xmlEncodeData = $genericEncoder->encodeToFormat($data, 'xml');

echo $jsonEncodeData;
echo "\n";
// echo $xmlEncodeData;
// echo "\n";