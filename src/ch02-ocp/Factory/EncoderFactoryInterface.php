<?php

namespace ocp\Factory;

use ocp\Encoders\EncoderInterface;

interface EncoderFactoryInterface
{
    public function createForFormat(string $format): EncoderInterface;
}