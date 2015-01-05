<?php

namespace frontend\models;

use yii\db\ActiveRecord;

class ProductTemplate extends ActiveRecord
{

  public function getProducts()
  {
    return $this->hasMany(Product::className(), ['product_template_id' => 'id']);
  }

}