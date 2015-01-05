<?php

namespace frontend\controllers;

use yii\rest\ActiveController;
use frontend\models\Company;
use frontend\models\Product;

class ProductController extends ActiveController {
  
  /**
   * Default response format
   * either 'json' or 'xml'
   */
  private $format = 'json';
  
  public $modelClass = 'frontend\models\Product';
  
  public function actionIndexCompany($id) {
    $company = Company::findOne($id);
    return $company->products;
  }
  
  public function actionAttachCompany($id) {
    $template_id = $_POST['template_id'];
    if(! $id || !$template_id){
      return;
    }
    
    $product = new Product();
    $product->company_id = $id;
    $product->template_id = $template_id;
    $product->save();
    
    return $product;
  }
  
  protected function verbs(){
    $verbs = parent::verbs();
    $verbs['index-company'] = ['GET', 'HEAD'];
    return $verbs;
  }
  
  public function checkAccess($action, $model = null, $params = [])
  {
  }
}