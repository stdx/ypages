<?php

namespace frontend\models;

use yii\db\ActiveRecord;

class Company extends ActiveRecord
{
  
  public function getProducts()
  {
    return $this->hasMany(Product::className(), ['company_id' => 'id']);
  }
  
}