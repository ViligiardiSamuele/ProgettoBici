<?php

class DBObject implements JsonSerializable
{

    protected string $table;

    public function __construct($table)
    {
        $this->table = $table;
    }

    function getTable(): string
    {
        return $this->table;
    }

    function jsonSerialize()
    {
        $attr = [];
        foreach (get_class_vars(get_class($this)) as $key => $value)
            $attr[$key] = $this->{$key};
        return $attr;
    }
}
