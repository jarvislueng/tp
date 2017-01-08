<?php
/**
 * Created by PhpStorm.
 * User: jarvis
 * Date: 2017/1/5
 * Time: 20:13
 */
namespace  Admin\Controller;

use Think\Controller;
class FormController extends Controller{
    public function add(){
        $this->display();//显示页面，一定要
    }


    public function see(){
        $this->display();
    }
    public function upload(){
        $upload = new \Think\Upload();// 实例化上传类
        $upload->maxSize   =     3145728 ;// 设置附件上传大小
        $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
        $upload->rootPath  =     'D:/img/'; // 设置附件上传根目录
        $upload->savePath  =     ''; // 设置附件上传（子）目录
        // 上传文件
        $info   =   $upload->upload();
        if(!$info) {// 上传错误提示错误信息
            $this->error($upload->getError());
        }else{// 上传成功
            $this->success('上传成功！');
        }
    }
    public function insert(){//插入操作
        $Form = D('Form');//创建一个类，这个类是FormModel.class.php的一个示例
        if($Form -> create()){//用create函数才能创建类，他会自动和前端表单的属性相关联
            $result = $Form ->add();//tp封装的增加
            if($result){
                $this->success('数据添加成功');
            }else{
                $this->error('数据添加错误');
            }
        }else{
            $this->error($Form->getError());
        }
    }
    public function read($title = null){//读取
        $Form =  M('Form');//同上D('Form')，不过这个副本不需要一个class
        if(empty($title)){
            $data = $Form->select();
        }else {
            $data = $Form->where('title="'.$title.'"')->select();
        }
        //查询，返回的是一个数组类型
        if($data){
                $this->assign('data', $data);
        }else{
            $this->error('数据错误');
        }
        $this->display();
    }
    public function edit($id = 0){
        $Form = M('Form');
        $this->assign('vo',$Form->find($id));//和模板关联
        $this->display();
    }
    public function update (){//改
        $Form  = M('Form');
        if($Form->create()) {
            $result =   $Form->save();//所有数据会自动关联，亦可
            if($result) {
                $this->success('操作成功！');
            }else{
                $this->error('写入错误！');
            }
        }else{
            $this->error($Form->getError());
        }
    }
    public function del($title = 0){
        $Form = M('Form');
        $Form->where('title="'.$title.'"')->delete();
    }
}
