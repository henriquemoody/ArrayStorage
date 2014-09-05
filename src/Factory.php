<?php

namespace PHPFluent\ArrayStorage;

class Factory
{
    public function collection($collection = null)
    {
        if (! $collection instanceof Collection) {
            $collection = new Collection($this);
        }

        return $collection;
    }

    public function record($record = null)
    {
        if (! $record instanceof Record) {
            $data = (array) $record;
            $record = new Record($data);
        }

        return $record;
    }
}