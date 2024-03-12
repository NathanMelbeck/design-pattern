<?php

require('../vendor/autoload.php');

$builder = new App\MySQLQueryBuilder();

$builder->select('name, email')->from('users')->where('age', '30', '>');

$query = $builder->getSQL();

echo $query;
