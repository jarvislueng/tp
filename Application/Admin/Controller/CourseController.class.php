<?php
/**
 * Created by PhpStorm.
 * User: jarvis
 * Date: 2017/1/6
 * Time: 20:14
 */
namespace Admin\Controller;
use Think\Controller;
class Coursecontroller extends controller{
    public function index(){
        $Course  = M('Course');
        $data = $Course->select();
        if($data){
            $this->assign('data', $data);
        }else{
            $this->error('数据错误');
        }
        $this->display();
    }
    public function edit($id = null){
        if(!empty($id)){
            $Course  = M('Course');
            $data = $Course->find($id);
            if($data){
                $this->assign('data', $data);
            }else{
                $this->error('数据错误');
            }
        }
        $this->display();
    }
    public function insert(){
        $Course = D('Course');
//        echo $Course->create();
        if($Course->create()){
            $result = $Course->add();
            if($result){
                $this->success('数据添加成功','/admin/course');
            }else{
                $this->error('数据添加错误');
            }
        }
    }
    public function save(){
        $Course   =   D('Course');
        if($Course->create()) {
            $result =   $Course->save();
            if($result) {
                $this->success('数据写入成功','/admin/course');
            }else{
                $this->error('写入错误！');
            }
        }else{
            $this->error($Course->getError());
        }
    }
    public function del($id = null){
        $Course = M('Course');
        $result = $Course->where('id="'.$id.'"')->delete();//Admin/Settings/Index/index
        if($result){
            $this->success('数据删除成功','/admin/course');
        }else {
            $this->error('删除错误');
        }
    }
}