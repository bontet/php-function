<?php
namespace common\components;

use yii\base\Behavior;
use yii\db\ActiveRecord;
use yii\helpers\Html;
use yii\helpers\Url;

trait ArrayList
{
    public static function getArrayList($status=null) {
        $list= $status? static::findAll(['status'=>$status]) : static::find()->orderBy(['name'=>'SORT_DESC'])->all();
        return \yii\helpers\ArrayHelper::map($list,'id','name');
    }

   	public static function getListName($id) {
   		$list = static::getArrayList();
   		return $list[$id];
   	}

}