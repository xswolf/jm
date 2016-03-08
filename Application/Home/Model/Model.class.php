<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/3/8/0008
 * Time: 10:19
 */
namespace Home\Model;
use Think\Model as ThinkModel;

class Model extends ThinkModel{

    protected $_table = '';

    /**
     * 保证每个类只有一个实例
     * @param $args
     * @return mixed|static
     */
    public static function instance($args = null)
    {
        $class = get_called_class();
        static $instance;
        if (isset($instance[$class])) {
            return $instance[$class];
        }

        $obj = new $class($args);
        $instance[$class] = $obj;
        return $instance[$class];
    }


    public function insert($data)
    {
        $m = D($this->_table);
        if ($r = $m->create($data)){
            return $m->add();
        }else{
            return $m->getError();
        }

    }

    public function del($id)
    {
        if ( intval($id) <=0 ) return false;
        $m = M($this->_table);
        return $m->where("id=".$id)->delete();
    }

    public function edit($data, $where = [])
    {
        $m = D($this->_table);

        if($dataProcess = $m->create($data)){
            $where = empty($where) ? array('id'=>$data['id']) : $where;
            return $m->where($where)->save($dataProcess);
        }else{
            return $m->getError();
        }

    }

    public function findById($id){
        $m = M($this->_table);
        return $m->where(array("id"=>$id))->find();
    }
}