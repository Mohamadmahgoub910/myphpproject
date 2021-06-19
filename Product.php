<?php
class Product{
    public $proname;
    public $probrand;
    public $proexpire;
    public $proexist;
    public $long;
    public function __construct(){
        $proexpire = $this->proexpire;
        $dif = date_diff(date_create($proexpire),date_create(date("Y-m-d")));
        $this->long=$dif->format('%m'.'monthes');
    }
}

