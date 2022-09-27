<?php
  class Bicycle {
    public $brand;
    public $model;
    public $year;
    public $category;
    public $color;
    public $description;
    public $gender;
    public $price;
    protected $weight_kg;
    protected $condition_id;
    public const CATEGORIES = ['Road', 'Mountain', 'Hybrid', 'Cruiser', 'City', 'BMX'];
    public const GENDERS = ['Mens', 'Womens', 'Unisex'];
    protected const CONDITION_OPTIONS = [
      1 => 'Beat up',
      2 => 'Decent',
      3 => 'Good',
      4 => 'Great',
      5 => 'Like New'
    ];


    public function __construct($argms=[]) {
      $this->brand = $argms['brand'] ?? '';
      $this->model = $argms['model'] ?? '';
      $this->year = $argms['year'] ?? '';
      $this->category = $argms['category'] ?? '';
      $this->color = $argms['color'] ?? '';
      $this->description = $argms['description'] ?? '';
      $this->gender = $argms['gender'] ?? '';
      $this->price = $argms['price'] ?? 0;
      $this->weight_kg = $argms['weight_kg'] ?? 0.0;
      $this->condition_id = $argms['condition_id'] ?? 3;
    }
    
    public function weight_kg() {
      return number_format($this->weight_kg, 2) . ' kg';
    }
  
    public function set_weight_kg($value) {
      $this->weight_kg = floatval($value);
    }
  
    public function weight_lbs() {
      $weight_lbs = floatval($this->weight_kg) * 2.2046226218;
      return number_format($weight_lbs, 2) . ' lbs';
    }
  
    public function set_weight_lbs($value) {
      $this->weight_kg = floatval($value) / 2.2046226218;
    }
  
    public function condition() {
      if($this->condition_id > 0) {
        return self::CONDITION_OPTIONS[$this->condition_id];
      } else {
        return "Unknown";
      }
    }
  }

?>