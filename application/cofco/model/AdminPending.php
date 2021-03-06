<?php
// +----------------------------------------------------------------------
// | HisiPHP框架[基于ThinkPHP5开发]
// +----------------------------------------------------------------------
// | Copyright (c) 2016-2018 http://www.hisiphp.com
// +----------------------------------------------------------------------
// | HisiPHP承诺基础框架永久免费开源，您可用于学习和商用，但必须保留软件版权信息。
// +----------------------------------------------------------------------
// | Author: 橘子俊 <364666827@qq.com>，开发者QQ群：50304283
// +----------------------------------------------------------------------
namespace app\cofco\model;

use think\Model;
use app\system\model\SystemUser;

class AdminPending extends AdminBase
{
    // 定义时间戳字段名
    protected $name = 'admin_content';
    protected $createTime = 'ctime';
    protected $updateTime = false;
    // 自动写入时间戳
    protected $autoWriteTimestamp = true;

    public static function strFilter($str){
        //特殊字符的过滤方法
        $str = str_replace('`', '', $str);
        $str = str_replace('·', '', $str);
        $str = str_replace('~', '', $str);
        $str = str_replace('!', '', $str);
        $str = str_replace('！', '', $str);
        $str = str_replace('@', '', $str);
        $str = str_replace('#', '', $str);
        $str = str_replace('$', '', $str);
        $str = str_replace('￥', '', $str);
        $str = str_replace('%', '', $str);
        $str = str_replace('^', '', $str);
        $str = str_replace('……', '', $str);
        $str = str_replace('&', '', $str);
        $str = str_replace('*', '', $str);
        $str = str_replace('(', '', $str);
        $str = str_replace(')', '', $str);
        $str = str_replace('（', '', $str);
        $str = str_replace('）', '', $str);
        $str = str_replace('-', '', $str);
        $str = str_replace('_', '', $str);
        $str = str_replace('——', '', $str);
        $str = str_replace('+', '', $str);
        $str = str_replace('=', '', $str);
        $str = str_replace('|', '', $str);
        $str = str_replace('\\', '', $str);
        $str = str_replace('[', '', $str);
        $str = str_replace(']', '', $str);
        $str = str_replace('【', '', $str);
        $str = str_replace('】', '', $str);
        $str = str_replace('{', '', $str);
        $str = str_replace('}', '', $str);
        $str = str_replace(';', '', $str);
        $str = str_replace('；', '', $str);
        $str = str_replace(':', '', $str);
        $str = str_replace('：', '', $str);
        $str = str_replace('\'', '', $str);
        $str = str_replace('"', '', $str);
        $str = str_replace('“', '', $str);
        $str = str_replace('”', '', $str);
        //$str = str_replace(',', '', $str);
        //$str = str_replace('，', '', $str);
        $str = str_replace('<', '', $str);
        $str = str_replace('>', '', $str);
        $str = str_replace('《', '', $str);
        $str = str_replace('》', '', $str);
        $str = str_replace('.', '', $str);
        $str = str_replace('。', '', $str);
        $str = str_replace('/', '', $str);
        $str = str_replace('、', '', $str);
        $str = str_replace('?', '', $str);
        $str = str_replace('？', '', $str);
        //防sql防注入代码的过滤方法
        $str = str_replace('and','',$str);
        $str = str_replace('execute','',$str);
        $str = str_replace('update','',$str);
        $str = str_replace('count','',$str);
        $str = str_replace('chr','',$str);
        $str = str_replace('mid','',$str);
        $str = str_replace('master','',$str);
        $str = str_replace('truncate','',$str);
        $str = str_replace('char','',$str);
        $str = str_replace('declare','',$str);
        $str = str_replace('select','',$str);
        $str = str_replace('create','',$str);
        $str = str_replace('delete','',$str);
        $str = str_replace('insert','',$str);
        $str = str_replace('or','',$str);
        return trim($str);
    }
    public static function strFilter1($str){
        //特殊字符的过滤方法
        $str = str_replace('`', '', $str);

        $str = str_replace('[', '', $str);
        $str = str_replace(']', '', $str);
        $str = str_replace('【', '', $str);
        $str = str_replace('】', '', $str);
        $str = str_replace('{', '', $str);
        $str = str_replace('}', '', $str);
        $str = str_replace("'", '', $str);
        return trim($str);
    }

    public function getCreaterNameAttr($value, $data){
        $aa = SystemUser::get(['id'=>$data['creater']])->toArray();
        return $aa['nick'];
    }

    public function getKwnameAttr($value, $data){
        $aa = SystemUser::get(['id'=>$data['creater']])->toArray();
        return $aa;
    }

    // 自动查询爬虫关键词
    public function spiderKw(){
        return $this->hasOne('AdminKw','id','kw_id');
    }

    public function createUser(){
        return $this->hasOne('app\system\model\SystemUser','id','creater');

    }

    public function label(){
        return $this->hasMany('AdminArticleLabel','art_id','art_id');
    }


}