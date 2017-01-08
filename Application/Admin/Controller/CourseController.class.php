<?php
/**
 * Created by PhpStorm.
 * Course: jarvis
 * Date: 2017/1/6
 * Time: 20:14
 */
namespace Admin\Controller;
use Think\Controller;
class Coursecontroller extends controller{
    public $DST_DIR = "D:\img/";
    public function index(){
        $Course  = M('Course');
        $data = $Course->select();
        if($data){
            $this->assign('data', $data);
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
        $savename = '';
        if(!empty($_FILES)){
            //上传单个图像
            $upload = new \Think\Upload();// 实例化上传类
            $upload->maxSize   =     1*1024*1024 ;// 设置附件上传大小
            $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
            $upload->rootPath  =      'D:\xampp\htdocs\bsl\Public\Uploads/'; // 设置附件上传根目录
            $upload->savePath  =      ''; // 设置附件上传（子）目录
            $upload->saveName=array('uniqid','');//上传文件的保存规则
            $upload->autoSub =     false;
            $upload->subName  = array('date','Ymd');
            // 上传单个图片
            $info   =   $upload->uploadOne($_FILES['photo']);
            $savename = $info['savename'];
        }
        $Course = D('Course');
        if($Course->create()){
            $data['title'] = I('post.title');
            $data['content'] = I('post.content');
            $data['type'] = I('post.type');
            $data['decribe'] = I('post.decribe');
            $data['url'] = 'http://tp.localhost/Public/Uploads/'.$savename;
            $result = $Course->add($data);
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