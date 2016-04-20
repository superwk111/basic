<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/4/20
 * Time: 12:04
 */
namespace app\models;

use yii;
use yii\base\Model;

class Room extends Model {
    public $floor;
    public $room_number;
    public $has_conditioner;
    public $has_tv;
    public $has_phone;
    public $available_form;
    public $price_per_day;
    public $description;

    public function attributeLabels()
    {
        return [
            'floor' => 'Floor',
            'room_number' => 'Room number',
            'has_condition' => 'Condition available',
            'has_tv' => 'TV available' ,
            'has_phone' => 'Available form',
            'available_form' => 'Available from',
            'price_per_day' =>'Price (EUR/day)',
            'description' => 'Description',
        ];
    }

    public function rules()
    {
        return[
            ['floor', 'integer', 'min' => 0],
            ['room_number', 'integer', 'min' => 0],
            [['has_conditioner', 'has_tv', 'has_phone'], 'integer', 'min' =>0],
            ['available_from', 'date', 'format' => 'php:Y-m-d'],
            ['price_per_day', 'number', 'min' => 0],
            ['description', 'string', 'max' => 500]
        ];
    }
}