<?php

namespace App;

class MySQLQueryBuilder implements QueryBuilderInterface {

    private $query = '';

    public function __construct() {
        $this->query = '';
    }

    public function select(string $fields) {
        $this->query = "SELECT " . $fields;
        return $this;
    }

    public function from(string $table) {
        $this->query .= " FROM " . $table;
        return $this;

    }

    public function where(string $field, string $value, string $operator) {
        $this->query .= " WHERE " . $field . " " . $operator . " " . $value;
        return $this;

    }

    public function getSQL(): string {
        return $this->query . ";";
    }
}
