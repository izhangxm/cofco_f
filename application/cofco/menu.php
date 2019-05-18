<?php
return [
  [
    'title' => '数据分析',
    'icon' => 'aicon ai-shezhi',
    'module' => 'cofco',
    'url' => 'cofco',
    'param' => '',
    'target' => '_self',
    'debug' => 0,
    'system' => 0,
    'nav' => 1,
    'sort' => 200,
    'childs' => [
      [
        'title' => '文章管理相关',
        'icon' => '',
        'module' => 'cofco',
        'url' => 'cofco/article/index',
        'param' => '',
        'target' => '_self',
        'debug' => 0,
        'system' => 0,
        'nav' => 0,
        'sort' => 4,
        'childs' => [
          [
            'title' => '文章搜索',
            'icon' => '',
            'module' => 'cofco',
            'url' => 'cofco/article/search',
            'param' => '',
            'target' => '_self',
            'debug' => 0,
            'system' => 0,
            'nav' => 0,
            'sort' => 0,
          ],
          [
            'title' => '文章删除',
            'icon' => '',
            'module' => 'cofco',
            'url' => 'cofco/article/del',
            'param' => '',
            'target' => '_self',
            'debug' => 0,
            'system' => 0,
            'nav' => 0,
            'sort' => 0,
          ],
          [
            'title' => '文章状态设置',
            'icon' => '',
            'module' => 'cofco',
            'url' => 'cofco/article/setstatus',
            'param' => '',
            'target' => '_self',
            'debug' => 0,
            'system' => 0,
            'nav' => 0,
            'sort' => 0,
          ],
          [
            'title' => '文章编辑',
            'icon' => '',
            'module' => 'cofco',
            'url' => 'cofco/article/edit',
            'param' => '',
            'target' => '_self',
            'debug' => 0,
            'system' => 0,
            'nav' => 0,
            'sort' => 0,
          ],
          [
            'title' => '文章查看',
            'icon' => '',
            'module' => 'cofco',
            'url' => 'cofco/article/view',
            'param' => '',
            'target' => '_self',
            'debug' => 0,
            'system' => 0,
            'nav' => 0,
            'sort' => 0,
          ],
        ],
      ],
      [
        'title' => '文献管理',
        'icon' => 'aicon ai-caidan',
        'module' => 'cofco',
        'url' => 'cofco/wenxian',
        'param' => '',
        'target' => '_self',
        'debug' => 0,
        'system' => 1,
        'nav' => 1,
        'sort' => 5,
        'childs' => [
          [
            'title' => '文献上传',
            'icon' => 'aicon ai-caidan',
            'module' => 'cofco',
            'url' => 'cofco/labeldata/task_list1',
            'param' => '',
            'target' => '_self',
            'debug' => 0,
            'system' => 1,
            'nav' => 0,
            'sort' => 0,
          ],
          [
            'title' => '标签选择',
            'icon' => '',
            'module' => 'cofco',
            'url' => 'cofco/labeldata/levelpop',
            'param' => '',
            'target' => '_self',
            'debug' => 0,
            'system' => 1,
            'nav' => 0,
            'sort' => 0,
          ],
          [
            'title' => '爬虫关键词',
            'icon' => 'aicon ai-icon-test',
            'module' => 'cofco',
            'url' => 'cofco/keyword/index',
            'param' => '',
            'target' => '_self',
            'debug' => 0,
            'system' => 1,
            'nav' => 1,
            'sort' => 5,
            'childs' => [
              [
                'title' => '状态设置',
                'icon' => 'typcn typcn-adjust-contrast',
                'module' => 'cofco',
                'url' => 'cofco/keyword/setstatus',
                'param' => '',
                'target' => '_self',
                'debug' => 0,
                'system' => 1,
                'nav' => 0,
                'sort' => 0,
              ],
              [
                'title' => '关键词添加',
                'icon' => 'aicon ai-tianjia',
                'module' => 'cofco',
                'url' => 'cofco/spider/keywords_add',
                'param' => '',
                'target' => '_self',
                'debug' => 0,
                'system' => 1,
                'nav' => 0,
                'sort' => 0,
              ],
              [
                'title' => '关键词修改',
                'icon' => 'aicon ai-success',
                'module' => 'cofco',
                'url' => 'cofco/spider/keywords_edit',
                'param' => '',
                'target' => '_self',
                'debug' => 0,
                'system' => 0,
                'nav' => 1,
                'sort' => 0,
              ],
              [
                'title' => '关键词删除',
                'icon' => 'aicon ai-cha',
                'module' => 'cofco',
                'url' => 'cofco/keyword/kwdel',
                'param' => '',
                'target' => '_self',
                'debug' => 0,
                'system' => 1,
                'nav' => 0,
                'sort' => 0,
              ],
              [
                'title' => '【弹框】关键词选择',
                'icon' => 'aicon ai-quanping',
                'module' => 'cofco',
                'url' => 'cofco/labeldata/keywords_pop',
                'param' => '',
                'target' => '_self',
                'debug' => 0,
                'system' => 0,
                'nav' => 1,
                'sort' => 0,
              ],
              [
                'title' => '添加Pubmed关键词',
                'icon' => 'aicon ai-systemmenu',
                'module' => 'cofco',
                'url' => 'cofco/keyword/addpubmedkw',
                'param' => '',
                'target' => '_self',
                'debug' => 0,
                'system' => 0,
                'nav' => 1,
                'sort' => 0,
              ],
              [
                'title' => '添加Science关键词',
                'icon' => 'aicon ai-xitonggongneng',
                'module' => 'cofco',
                'url' => 'cofco/keyword/addsciencekw',
                'param' => '',
                'target' => '_self',
                'debug' => 0,
                'system' => 0,
                'nav' => 1,
                'sort' => 0,
              ],
              [
                'title' => '关键词列表',
                'icon' => '',
                'module' => 'cofco',
                'url' => 'cofco/keyword/data',
                'param' => '',
                'target' => '_self',
                'debug' => 0,
                'system' => 0,
                'nav' => 0,
                'sort' => 0,
              ],
            ],
          ],
          [
            'title' => '标签列表',
            'icon' => 'aicon ai-caidan',
            'module' => 'cofco',
            'url' => 'cofco/labeldata/levellabel',
            'param' => '',
            'target' => '_self',
            'debug' => 0,
            'system' => 1,
            'nav' => 1,
            'sort' => 6,
            'childs' => [
              [
                'title' => '标签添加',
                'icon' => 'aicon ai-tianjia',
                'module' => 'cofco',
                'url' => 'cofco/labeldata/levellabel_add',
                'param' => '',
                'target' => '_self',
                'debug' => 0,
                'system' => 0,
                'nav' => 1,
                'sort' => 0,
              ],
              [
                'title' => '标签状态',
                'icon' => 'aicon ai-systemmenu',
                'module' => 'cofco',
                'url' => 'cofco/labeldata/status',
                'param' => '',
                'target' => '_self',
                'debug' => 0,
                'system' => 0,
                'nav' => 0,
                'sort' => 0,
              ],
              [
                'title' => '标签修改',
                'icon' => 'aicon ai-qiyong',
                'module' => 'cofco',
                'url' => 'cofco/labeldata/levellabel_edit',
                'param' => '',
                'target' => '_self',
                'debug' => 0,
                'system' => 0,
                'nav' => 1,
                'sort' => 0,
              ],
              [
                'title' => '标签删除',
                'icon' => 'aicon ai-cha',
                'module' => 'cofco',
                'url' => 'cofco/labeldata/levellabel_del',
                'param' => '',
                'target' => '_self',
                'debug' => 0,
                'system' => 0,
                'nav' => 1,
                'sort' => 0,
              ],
              [
                'title' => '【弹框】打标签',
                'icon' => 'aicon ai-caidan',
                'module' => 'cofco',
                'url' => 'cofco/labeldata/levelpop',
                'param' => '',
                'target' => '_self',
                'debug' => 0,
                'system' => 0,
                'nav' => 0,
                'sort' => 0,
              ],
            ],
          ],
          [
            'title' => '文献上传',
            'icon' => 'aicon ai-huiyuanliebiao',
            'module' => 'cofco',
            'url' => 'cofco/upload/assist',
            'param' => '',
            'target' => '_self',
            'debug' => 0,
            'system' => 1,
            'nav' => 1,
            'sort' => 20,
            'childs' => [
              [
                'title' => '辅助添加',
                'icon' => 'aicon ai-tianjia',
                'module' => 'cofco',
                'url' => 'cofco/upload/assist',
                'param' => '',
                'target' => '_self',
                'debug' => 0,
                'system' => 0,
                'nav' => 0,
                'sort' => 0,
              ],
              [
                'title' => '人工输入',
                'icon' => '',
                'module' => 'cofco',
                'url' => 'cofco/upload/manual',
                'param' => '',
                'target' => '_self',
                'debug' => 0,
                'system' => 0,
                'nav' => 1,
                'sort' => 0,
              ],
              [
                'title' => '爬虫输入',
                'icon' => 'aicon ai-qiyong',
                'module' => 'cofco',
                'url' => 'cofco/upload/spider',
                'param' => '',
                'target' => '_self',
                'debug' => 0,
                'system' => 0,
                'nav' => 1,
                'sort' => 0,
              ],
              [
                'title' => '新建爬虫',
                'icon' => '',
                'module' => 'cofco',
                'url' => 'cofco/upload/add',
                'param' => '',
                'target' => '_self',
                'debug' => 0,
                'system' => 0,
                'nav' => 1,
                'sort' => 0,
              ],
              [
                'title' => '爬虫日志',
                'icon' => '',
                'module' => 'cofco',
                'url' => 'cofco/upload/viewlog',
                'param' => '',
                'target' => '_self',
                'debug' => 0,
                'system' => 1,
                'nav' => 0,
                'sort' => 0,
              ],
            ],
          ],
          [
            'title' => '文献初审',
            'icon' => 'aicon ai-systemmenu',
            'module' => 'cofco',
            'url' => 'cofco/spiderdata/index',
            'param' => '',
            'target' => '_self',
            'debug' => 0,
            'system' => 1,
            'nav' => 1,
            'sort' => 25,
            'childs' => [
              [
                'title' => '数据API',
                'icon' => '',
                'module' => 'cofco',
                'url' => 'cofco/spiderdata/data',
                'param' => '',
                'target' => '_self',
                'debug' => 0,
                'system' => 0,
                'nav' => 1,
                'sort' => 0,
              ],
              [
                'title' => '删除',
                'icon' => '',
                'module' => 'cofco',
                'url' => 'cofco/spiderdata/del',
                'param' => '',
                'target' => '_self',
                'debug' => 0,
                'system' => 0,
                'nav' => 1,
                'sort' => 0,
              ],
              [
                'title' => '根据条件获得所有ID',
                'icon' => '',
                'module' => 'cofco',
                'url' => 'cofco/spiderdata/getAllIdByCondition',
                'param' => '',
                'target' => '_self',
                'debug' => 0,
                'system' => 0,
                'nav' => 1,
                'sort' => 0,
              ],
              [
                'title' => '审核数据',
                'icon' => '',
                'module' => 'cofco',
                'url' => 'cofco/spiderdata/passData',
                'param' => '',
                'target' => '_self',
                'debug' => 0,
                'system' => 0,
                'nav' => 1,
                'sort' => 0,
              ],
            ],
          ],
          [
            'title' => '文献标注',
            'icon' => 'aicon ai-clear',
            'module' => 'cofco',
            'url' => 'cofco/pending/index',
            'param' => '',
            'target' => '_self',
            'debug' => 0,
            'system' => 1,
            'nav' => 1,
            'sort' => 30,
            'childs' => [
              [
                'title' => '列表删除',
                'icon' => 'aicon ai-cha',
                'module' => 'cofco',
                'url' => 'cofco/pending/del',
                'param' => '',
                'target' => '_self',
                'debug' => 0,
                'system' => 0,
                'nav' => 1,
                'sort' => 0,
              ],
              [
                'title' => '列表添加',
                'icon' => 'aicon ai-tianjia',
                'module' => 'cofco',
                'url' => 'cofco/pending/add',
                'param' => '',
                'target' => '_self',
                'debug' => 0,
                'system' => 0,
                'nav' => 0,
                'sort' => 0,
              ],
              [
                'title' => '列表批注',
                'icon' => 'aicon ai-gou',
                'module' => 'cofco',
                'url' => 'cofco/labeldata/pending_edit',
                'param' => '',
                'target' => '_self',
                'debug' => 0,
                'system' => 0,
                'nav' => 1,
                'sort' => 0,
              ],
              [
                'title' => '【弹框】待审详情页',
                'icon' => 'typcn typcn-arrow-move',
                'module' => 'cofco',
                'url' => 'cofco/labeldata/pop',
                'param' => '',
                'target' => '_self',
                'debug' => 0,
                'system' => 0,
                'nav' => 1,
                'sort' => 0,
              ],
              [
                'title' => '浏览',
                'icon' => 'typcn typcn-news',
                'module' => 'cofco',
                'url' => 'cofco/labeldata/pending_browse',
                'param' => '',
                'target' => '_self',
                'debug' => 0,
                'system' => 0,
                'nav' => 0,
                'sort' => 0,
              ],
              [
                'title' => '同爬虫关键词文献列表',
                'icon' => 'typcn typcn-clipboard',
                'module' => 'cofco',
                'url' => 'cofco/labeldata/pending_find',
                'param' => '',
                'target' => '_self',
                'debug' => 0,
                'system' => 0,
                'nav' => 0,
                'sort' => 0,
              ],
              [
                'title' => '数据API',
                'icon' => '',
                'module' => 'cofco',
                'url' => 'cofco/pending/data',
                'param' => '',
                'target' => '_self',
                'debug' => 0,
                'system' => 0,
                'nav' => 1,
                'sort' => 0,
              ],
              [
                'title' => '根据条件获取所有ID',
                'icon' => 'aicon ai-chu',
                'module' => 'cofco',
                'url' => 'cofco/pending/getAllIdByCondition',
                'param' => '',
                'target' => '_self',
                'debug' => 0,
                'system' => 0,
                'nav' => 1,
                'sort' => 0,
              ],
              [
                'title' => '列表编辑',
                'icon' => '',
                'module' => 'cofco',
                'url' => 'cofco/pending/edit',
                'param' => '',
                'target' => '_self',
                'debug' => 0,
                'system' => 0,
                'nav' => 1,
                'sort' => 0,
              ],
              [
                'title' => '基本表单',
                'icon' => '',
                'module' => 'cofco',
                'url' => 'cofco/pending/baseform',
                'param' => '',
                'target' => '_self',
                'debug' => 0,
                'system' => 0,
                'nav' => 1,
                'sort' => 0,
              ],
            ],
          ],
          [
            'title' => '文献终审',
            'icon' => 'aicon ai-caidan',
            'module' => 'cofco',
            'url' => 'cofco/finaly/index',
            'param' => '',
            'target' => '_self',
            'debug' => 0,
            'system' => 1,
            'nav' => 1,
            'sort' => 35,
            'childs' => [
              [
                'title' => '最终列表修改',
                'icon' => 'aicon ai-qiyong',
                'module' => 'cofco',
                'url' => 'cofco/finaly/edit',
                'param' => '',
                'target' => '_self',
                'debug' => 0,
                'system' => 0,
                'nav' => 0,
                'sort' => 0,
              ],
              [
                'title' => '原网址',
                'icon' => 'aicon ai-xitongrizhi-tiaoshi',
                'module' => 'cofco',
                'url' => 'cofco/labeldata/finaly_url',
                'param' => '',
                'target' => '_self',
                'debug' => 0,
                'system' => 0,
                'nav' => 0,
                'sort' => 0,
              ],
              [
                'title' => '最终列表删除',
                'icon' => 'aicon ai-jinyong',
                'module' => 'cofco',
                'url' => 'cofco/finaly/del',
                'param' => '',
                'target' => '_self',
                'debug' => 0,
                'system' => 0,
                'nav' => 1,
                'sort' => 0,
              ],
              [
                'title' => '浏览',
                'icon' => 'typcn typcn-news',
                'module' => 'cofco',
                'url' => 'cofco/labeldata/finaly_browse',
                'param' => '',
                'target' => '_self',
                'debug' => 0,
                'system' => 0,
                'nav' => 0,
                'sort' => 0,
              ],
              [
                'title' => '同爬虫关键词文献列表',
                'icon' => 'typcn typcn-clipboard',
                'module' => 'cofco',
                'url' => 'cofco/labeldata/finaly_find',
                'param' => '',
                'target' => '_self',
                'debug' => 0,
                'system' => 0,
                'nav' => 0,
                'sort' => 0,
              ],
              [
                'title' => '数据API',
                'icon' => '',
                'module' => 'cofco',
                'url' => 'cofco/finaly/data',
                'param' => '',
                'target' => '_self',
                'debug' => 0,
                'system' => 0,
                'nav' => 1,
                'sort' => 0,
              ],
              [
                'title' => '审核通过【到输出页面】',
                'icon' => '',
                'module' => 'cofco',
                'url' => 'cofco/finaly/passData',
                'param' => '',
                'target' => '_self',
                'debug' => 0,
                'system' => 0,
                'nav' => 1,
                'sort' => 0,
              ],
            ],
          ],
          [
            'title' => '文献输出',
            'icon' => 'aicon ai-systemmenu',
            'module' => 'cofco',
            'url' => 'cofco/output/index',
            'param' => '',
            'target' => '_self',
            'debug' => 0,
            'system' => 1,
            'nav' => 1,
            'sort' => 40,
            'childs' => [
              [
                'title' => '数据API',
                'icon' => '',
                'module' => 'cofco',
                'url' => 'cofco/output/data',
                'param' => '',
                'target' => '_self',
                'debug' => 0,
                'system' => 0,
                'nav' => 1,
                'sort' => 0,
              ],
              [
                'title' => '编辑',
                'icon' => '',
                'module' => 'cofco',
                'url' => 'cofco/output/edit',
                'param' => '',
                'target' => '_self',
                'debug' => 0,
                'system' => 0,
                'nav' => 1,
                'sort' => 0,
              ],
              [
                'title' => '列表删除',
                'icon' => '',
                'module' => 'cofco',
                'url' => 'cofco/output/del',
                'param' => '',
                'target' => '_self',
                'debug' => 0,
                'system' => 0,
                'nav' => 1,
                'sort' => 0,
              ],
            ],
          ],
        ],
      ],
      [
        'title' => '爬虫管理',
        'icon' => 'aicon ai-chajianguanli',
        'module' => 'cofco',
        'url' => 'cofco/spider/index',
        'param' => '',
        'target' => '_self',
        'debug' => 0,
        'system' => 1,
        'nav' => 1,
        'sort' => 10,
        'childs' => [
          [
            'title' => '爬虫控制台',
            'icon' => 'aicon ai-error',
            'module' => 'cofco',
            'url' => 'cofco/spider/control',
            'param' => '',
            'target' => '_self',
            'debug' => 0,
            'system' => 1,
            'nav' => 1,
            'sort' => 0,
          ],
        ],
      ],
      [
        'title' => '证据分析',
        'icon' => 'aicon ai-systemmenu',
        'module' => 'cofco',
        'url' => 'cofco/zhengju',
        'param' => '',
        'target' => '_self',
        'debug' => 0,
        'system' => 1,
        'nav' => 1,
        'sort' => 15,
        'childs' => [
          [
            'title' => '权重法',
            'icon' => 'typcn typcn-calculator',
            'module' => 'cofco',
            'url' => 'cofco/statistic/count',
            'param' => '',
            'target' => '_self',
            'debug' => 0,
            'system' => 1,
            'nav' => 1,
            'sort' => 0,
          ],
          [
            'title' => '选择数据（原料）',
            'icon' => '',
            'module' => 'cofco',
            'url' => 'cofco/statistic/levelpop1',
            'param' => '',
            'target' => '_self',
            'debug' => 0,
            'system' => 0,
            'nav' => 0,
            'sort' => 0,
          ],
          [
            'title' => '数据选择（健康）',
            'icon' => '',
            'module' => 'cofco',
            'url' => 'cofco/statistic/levelpop2',
            'param' => '',
            'target' => '_self',
            'debug' => 0,
            'system' => 0,
            'nav' => 0,
            'sort' => 0,
          ],
        ],
      ],
      [
        'title' => '数据筛选',
        'icon' => 'aicon ai-shujukuguanli',
        'module' => 'cofco',
        'url' => 'cofco/labeldata',
        'param' => '',
        'target' => '_self',
        'debug' => 0,
        'system' => 1,
        'nav' => 1,
        'sort' => 20,
        'childs' => [
          [
            'title' => '使用必读',
            'icon' => 'aicon ai-error',
            'module' => 'cofco',
            'url' => 'cofco/labeldata/index',
            'param' => '',
            'target' => '_self',
            'debug' => 0,
            'system' => 1,
            'nav' => 1,
            'sort' => 0,
          ],
          [
            'title' => '标签分组',
            'icon' => 'aicon ai-xitongrizhi-tiaoshi',
            'module' => 'cofco',
            'url' => 'cofco/labeldata/label_list',
            'param' => '',
            'target' => '_self',
            'debug' => 0,
            'system' => 0,
            'nav' => 0,
            'sort' => 2,
            'childs' => [
              [
                'title' => '分组添加',
                'icon' => 'aicon ai-tianjia',
                'module' => 'cofco',
                'url' => 'cofco/labeldata/label_add',
                'param' => '',
                'target' => '_self',
                'debug' => 0,
                'system' => 1,
                'nav' => 1,
                'sort' => 0,
              ],
              [
                'title' => '分组删除',
                'icon' => 'aicon ai-cha',
                'module' => 'cofco',
                'url' => 'cofco/labeldata/label_del',
                'param' => '',
                'target' => '_self',
                'debug' => 0,
                'system' => 1,
                'nav' => 1,
                'sort' => 0,
              ],
              [
                'title' => '分组修改',
                'icon' => 'aicon ai-gou',
                'module' => 'cofco',
                'url' => 'cofco/labeldata/label_edit',
                'param' => '',
                'target' => '_self',
                'debug' => 0,
                'system' => 1,
                'nav' => 1,
                'sort' => 0,
              ],
              [
                'title' => '分组状态',
                'icon' => 'aicon ai-icon01',
                'module' => 'cofco',
                'url' => 'cofco/labeldata/status',
                'param' => '',
                'target' => '_self',
                'debug' => 0,
                'system' => 1,
                'nav' => 1,
                'sort' => 0,
              ],
            ],
          ],
          [
            'title' => '标签列表',
            'icon' => 'typcn typcn-beer',
            'module' => 'cofco',
            'url' => 'cofco/labeldata/tag_list',
            'param' => '',
            'target' => '_self',
            'debug' => 0,
            'system' => 0,
            'nav' => 0,
            'sort' => 5,
            'childs' => [
              [
                'title' => '标签添加',
                'icon' => 'aicon ai-tianjia',
                'module' => 'cofco',
                'url' => 'cofco/labeldata/tag_add',
                'param' => '',
                'target' => '_self',
                'debug' => 0,
                'system' => 1,
                'nav' => 0,
                'sort' => 0,
              ],
              [
                'title' => '标签删除',
                'icon' => 'aicon ai-jinyong',
                'module' => 'cofco',
                'url' => 'cofco/labeldata/tag_del',
                'param' => '',
                'target' => '_self',
                'debug' => 0,
                'system' => 1,
                'nav' => 0,
                'sort' => 0,
              ],
              [
                'title' => '标签修改',
                'icon' => 'aicon ai-qiyong',
                'module' => 'cofco',
                'url' => 'cofco/labeldata/tag_edit',
                'param' => '',
                'target' => '_self',
                'debug' => 0,
                'system' => 0,
                'nav' => 1,
                'sort' => 0,
              ],
              [
                'title' => '标签状态',
                'icon' => 'aicon ai-systemmenu',
                'module' => 'cofco',
                'url' => 'cofco/labeldata/status',
                'param' => '',
                'target' => '_self',
                'debug' => 0,
                'system' => 0,
                'nav' => 0,
                'sort' => 0,
              ],
            ],
          ],
        ],
      ],
      [
        'title' => '数据分析',
        'icon' => 'typcn typcn-flow-switch',
        'module' => 'cofco',
        'url' => 'cofco/statistic',
        'param' => '',
        'target' => '_self',
        'debug' => 0,
        'system' => 1,
        'nav' => 1,
        'sort' => 25,
        'childs' => [
          [
            'title' => '使用必读',
            'icon' => 'aicon ai-error',
            'module' => 'cofco',
            'url' => 'cofco/statistic/index',
            'param' => '',
            'target' => '_self',
            'debug' => 0,
            'system' => 1,
            'nav' => 1,
            'sort' => 0,
          ],
        ],
      ],
    ],
  ],
];
