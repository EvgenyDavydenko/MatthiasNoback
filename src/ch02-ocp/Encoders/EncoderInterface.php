<?php

namespace ocp\Encoders;

interface EncoderInterface
{
    public function encode($data): string;
}