<?php  
namespace app\models\customer;

use yii\db\ActiveRecord;

 class CustomerRecord extends ActiveRecord
    {
        public static function tableName()
        {
            return 'customer';
        }
    }