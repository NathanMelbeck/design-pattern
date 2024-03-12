<?php

namespace App;

interface QueryBuilderInterface {

    public function select(string $fields);
    public function from(string $table);

    public function where(string $field, string $operator, string $value );

    public function getSQL() : string;


}

