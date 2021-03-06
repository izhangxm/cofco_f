<?php
// +----------------------------------------------------------------------
// | HisiPHP框架[基于ThinkPHP5.1开发]
// +----------------------------------------------------------------------
// | Copyright (c) 2016-2021 http://www.hisiphp.com
// +----------------------------------------------------------------------
// | HisiPHP承诺基础框架永久免费开源，您可用于学习和商用，但必须保留软件版权信息。
// +----------------------------------------------------------------------
// | Author: 橘子俊 <364666827@qq.com>，开发者QQ群：50304283
// +----------------------------------------------------------------------

namespace app\cms\model;

/**
 * 友情链接模型
 * @package app\cms\model
 */
class CmsLink extends Base
{

    protected $insert = ['lang' => HISI_LANG]; 

    // 定义全局的查询范围
    protected function base($query)
    {
        $query->where('lang', HISI_LANG);
    }

}
