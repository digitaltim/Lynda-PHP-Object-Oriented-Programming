<?php

class Bicycle {

    var $brand;
    var $model;
    var $year;
    var $description;
    var $weight_kg;

    function name() {
        return $this->year . " " . $this->brand . " " . $this->model;
    }

    function weight_lbs() {
        return $this->weight_kg * 2.2046226218;
    }

    function set_weight_lbs($lbs) {
        return $this->weight_kg = $lbs / 2.2046226218;
    }

}

$bike1 = new Bicycle;
$bike1->brand = 'Huffy';
$bike1->model = 'Ricardo';
$bike1->year = '1985';
$bike1->description = 'Sweet sweet bike';
$bike1->set_weight_lbs(20);

$bike2 = new Bicycle;
$bike2->brand = 'Haro';
$bike2->model = 'Mertz';
$bike2->year = '1987';
$bike2->description = 'Sweet slick bike';
$bike2->set_weight_lbs(22);

echo $bike1->name() . "<br />";
echo $bike2->name() . "<br />";

echo $bike1->weight_lbs() . "<br />";
echo $bike2->weight_lbs() . "<br />";

$class_methods = get_class_methods('Bicycle');
echo "Class methods: " . implode(', ', $class_methods) . "<br />";

if (method_exists('Bicycle', 'name')) {
    echo "Method name exists in Bicycle class.<br />";
} else {
    echo "Method name does not exist in Bicycle class.<br />";
}

?>