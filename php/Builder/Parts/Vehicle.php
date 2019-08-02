<?php

namespace dp\php\Builder\Parts;

abstract class Vehicle
{
        private $date = [];

        public function setPart($key, $value)
        {
                $this->data[$key] = $value;
        }
}
