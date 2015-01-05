<?php
namespace frontend\models;

use yii\db\ActiveRecord;

class Product extends ActiveRecord
{
  
  public function getCompany()
  {
    return $this->hasOne(Company::className(), ['id' => 'company_id']);
  }
  
  public function getTemplate()
  {
    return $this->hasOne(ProductTemplate::className(), ['id' => 'product_template_id']);
  }
  
}