<?php

namespace ocp\Encoders;

use ocp\Factory\EncoderFactoryInterface;

class GenericEncoder
{
    private $encoderFactory;

    public function __construct(EncoderFactoryInterface $encoderFactory)
    {
        $this->encoderFactory = $encoderFactory;
    }

    public function encodeToFormat($data, string $format): string
    {
        $encoder = $this->encoderFactory->createForFormat($format);

        return $encoder->encode($data);
    }
}