<?php

namespace App\Core;
use App\Core\Database\QueryBuilder;
use App\Core\Database\Connection;

class Model extends QueryBuilder {  

    public $table;
    public function __construct(){

        $pdo=Connection::make(App::get('config')['database']);
        parent::__construct($pdo);
   }


 


}
