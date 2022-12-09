<?php

namespace ocp\Factory;

use ocp\Encoders\EncoderInterface;

class EncoderFactory implements EncoderFactoryInterface
{
    private $factories = [];

    public function addEncoderFactory(string $format, callable $factory): void
    {
        $this->factories[$format] = $factory;
    }

    public function createForFormat(string $format): EncoderInterface
    {
        // TODO: Implement createForFormat() method.

        $factory = $this->factories[$format];
        $encoder = $factory();

        return $encoder;
    }
}