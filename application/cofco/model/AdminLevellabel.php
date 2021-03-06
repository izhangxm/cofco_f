<?php
namespace app\cofco\model;
use app\cofco\model\AdminPending as PendingModel;
use think\Model;
use app\cofco\model\AdminLevellabel as LevellabelModel;
class AdminLevellabel extends AdminBase
{
    // 定义时间戳字段名
    protected $createTime = 'ctime';
    protected $updateTime = false;
    // 自动写入时间戳
    protected $autoWriteTimestamp = true;
    public static function getAll()
    {
        return self::column('id,value');
    }

    public static function getOption($id = 0)
    {
        $rows = self::column('id,value');
        $str = '';
        foreach ($rows as $k => $v) {
            if ($id == $k) {
                $str .= '<option value="'.$k.'" selected>'.$v.'</option>';
            } else {
                $str .= '<option value="'.$k.'">'.$v.'</option>';
            }
        }
        return $rows;
    }

    public static function getAllChild($cid = 0, $status = 1, $field = 'id,cid,value,score,status', $level = 0, $data = [])
    {
        $trees = [];
        if (empty($trees)) {
            if (empty($data)) {
                $map = [];
                //$map['uid'] = 0;
                if ($status == 1) {
                    $map['status'] = 1;
                }
                $data = self::where($map)->order('score asc')->column($field);
                $data = array_values($data);
            }

            foreach ($data as $k => $v) {
                if ($v['cid'] == $cid) {
                    // 过滤没访问权限的节点
                    if ($v['status']!=1) {
                        unset($data[$k]);
                        continue;
                    }
                    $v['childs'] = self::getAllChild($v['id'], $status, $field, $level+1, $data);
                    $trees[] = $v;
                }
            }

        }

        return $trees;
    }
    public static function getAllC($cid = 0, $status = 1, $field = 'id,cid,value,score,status', $level = 0, $data = [])
    {
        $trees1 = [];
        if (empty($trees1)) {
            if (empty($data)) {
                $map = [];
                //$map['uid'] = 0;
                if ($status == 1) {
                    $map['status'] = 1;
                }
                $data = self::where($map)->order('score asc')->column($field);
                $data = array_values($data);
            }

            foreach ($data as $k => $v) {
                if ($v['cid'] == $cid) {
//                    // 过滤没访问权限的节点
//                    if ($v['status']!=1) {
//                        unset($data[$k]);
//                        continue;
//                    }
                    $v['childs'] = self::getAllC($v['id'], $status, $field, $level+1, $data);
                    $trees1[] = $v;
                }
            }

        }

        return $trees1;
    }


    public static function getAllChildtj1($cid = 0, $status = 1, $field = 'id,cid,value,score,status', $level = 0, $data = [])
    {
        $trees2 = [];
        if (empty($trees2)) {
            if (empty($data)) {
                $map = [];
                //$map['uid'] = 0;
                if ($status == 1) {
                    $map['status'] = 1;
                }
                $data = self::where($map)->order('score asc')->column($field);
                $data = array_values($data);
            }

            foreach ($data as $k => $v) {
                if ($v['cid'] == $cid) {
                    // 过滤没访问权限的节点
                    if ($v['id']==2 || $v['id']==3) {
                        unset($data[$k]);
                        continue;
                    }
                    $v['childs'] = self::getAllChildtj1($v['id'], $status, $field, $level+1, $data);
                    $trees2[] = $v;
                }
            }

        }

        return $trees2;
    }

    public static function getAllChildtj2($cid = 0, $status = 1, $field = 'id,cid,value,score,status', $level = 0, $data = [])
    {
        $trees3 = [];
        if (empty($trees3)) {
            if (empty($data)) {
                $map = [];
                //$map['uid'] = 0;
                if ($status == 1) {
                    $map['status'] = 1;
                }
                $data = self::where($map)->order('score asc')->column($field);
                $data = array_values($data);
            }

            foreach ($data as $k => $v) {
                if ($v['cid'] == $cid) {
                    // 过滤没访问权限的节点
                    if ($v['id']==2 || $v['id']==4) {
                        unset($data[$k]);
                        continue;
                    }
                    $v['childs'] = self::getAllChildtj2($v['id'], $status, $field, $level+1, $data);
                    $trees3[] = $v;
                }
            }

        }
        return $trees3;
    }



    public function del($id = 0)
    {
        if (is_array($id)) {
            $error = '';
            foreach ($id as $k => $v) {
                if ($v <= 1) {
                    $error .= '参数传递错误['.$v.']！<br>';
                    continue;
                }
                // 判断是否有标签绑定此分组
                if (LevellabelModel::where('cid', $v)->find()) {
                    //$T=LevellabelModel::where('cid', $v)->field('value')->find()->toArray();
                    $error .= '删除失败，已有标签绑定此标签['.$v.']！<br>';
                    continue;
                }
                $map = [];
                $map['id'] = $v;
                self::where($map)->delete();
            }

            if ($error) {
                $this->error = $error;
                return false;
            }
        } else {
            $id = (int)$id;
            if ($id <= 1) {
                $this->error = '参数传递错误！';
                return false;
            }

            // 判断是否有标签绑定此分组
            if (LevellabelModel::where('cid', $id)->find()) {
                $this->error = '删除失败，已有标签绑定此标签ID！<br>';
                return false;
            }

            $map = [];
            $map['id'] = $id;
            self::where($map)->delete();
        }

        return true;
    }


}