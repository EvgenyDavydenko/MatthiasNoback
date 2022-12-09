<?php

namespace ocp\Encoders;

class YamlEncoder implements EncoderInterface
{

    public function encode($data): string
    {
        // TODO: Implement encode() method.
        return (string)($data);
    }
}