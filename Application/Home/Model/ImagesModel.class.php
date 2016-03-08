<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/3/8/0008
 * Time: 10:32
 */

namespace Home\Model;

class ImagesModel extends BaseModel{

    protected $_table = 'images';

    public function getList($ajax=false,$pageIndex=1,$pageSize=8,$where=['type_id'=>4,'status'=>1],$order='time desc'){
        $list = M($this->_table)->where($where)
                                ->order($order)
                                ->page($pageIndex,$pageSize)
                                ->select();
        if($ajax){
            return json_encode($list);
        }
        return $list;
    }
}