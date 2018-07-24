<?php

namespace Submtd\Summarizable;

trait Summarizable
{
    public function scopeSums($query, $fields)
    {
        $select = [];
        foreach ((array) $fields as $field) {
            $select[] = "SUM($field) as $field";
        }
        return $query->selectRaw(implode(', ', $select));
    }

    public function scopeAverages($query, $fields)
    {
        $select = [];
        foreach ((array) $fields as $field) {
            $select[] = "AVG($field) as $field";
        }
        return $query->selectRaw(implode(', ', $select));
    }
}
