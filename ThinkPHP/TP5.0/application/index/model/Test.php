<?php
namespace app\index\model;
use think\Model;

class Test extends Model
{
    public function setTimeAttr($value){
        return strtotime($value);
    }
    
    // public function getNameAttr($value,$data){
    //     return 'my name is'.$value.' complete message '.$data['id'].$data['name'].$data['status'];
    // }
    // public function setNameAttr($value){
    //     return strtoupper($value.'ASD');
    // }
    // public function getSexAttr($value){
    //     return 'my sex is '.$value;
    // }
    // public function setSexAttr($value){
    //     switch($value){
    //         case 1 : return 'male';
    //         case 0 : return 'female';
    //     }
    // }
    // protected $type = array(
    //     'time' => 'timestamp:Y/m/d'
    // );
    // protected $auto = array(
    //     'sex' => 1
    // );
    // public function setSexAttr($value,$data){
    //     if($data['status'] == 1){
    //         $value = 123;
    //     }else{
    //         $value = 456;
    //     }
    //     return $value;
    // }
    // protected function scopeName($query){
    //     $query->where('name','asd');
    // }
    protected function scopeName($query,$a)
    {
        $query->where('name',$a);
    }  
    // 设置数据表（不含前缀）
    //protected $name = 'admin';
    // 设置完整的数据表（包含前缀）
    //protected $table = 'tp_account_log';    
    // protected static function base($query){
    //     $query->where('id',65);
    // }
}