<?php
/**
 * Created by PhpStorm.
 * User: jarvis
 * Date: 2017/1/6
 * Time: 20:16
 */
namespace  Admin\Model;
use Think\Model;
class FormModel extends Model{
    protected $_validate = array(
        array('title','require', '标题必须'),
    );
    protected $_auto = array(
        array('crete_time', 'time', 1, 'function'),
    );
}