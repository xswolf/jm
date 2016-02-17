<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/2/14
 * Time: 11:20
 */

namespace Admin\Logic;


class Base
{

    static $instance = null;

    public function lists($table , $offset = "" , $length=10){
        $m = M($table)->where('status=1');
        if ($offset != ''){
            $m->limit($offset , $length);
        }
        return $m->select();
    }

    public function add($data , $table){
        return M($table)->add($data);
    }

    public function edit($data, $table){
        return M($table)->where([ 'id' => $data['id'] ])->save($data);
    }

    public function get($id , $table){
        return M($table)->where(['id' => $id])->find();
    }

    public function del( $id , $table){
        return M($table)->where([ 'id' => $id ])->save(['status' => 0]);
    }
    /**
     * @return $this
     */
    public static function instance(){
        $class = get_called_class();

        if ( isset(self::$instance[$class]) ){
            return self::$instance[$class];
        }
        $cla = new $class;

        return $cla;
    }
}