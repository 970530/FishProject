<?php
/*
 * 基础化类 
 * author yuanjiang @2.16.2013
*/
if(!defined('IN_T'))
{
  die('hacking attempt');
}

class Base
{
    private $db_name = '';
    private $prefix  = '';

    /**
     * 构造函数
     *
     * @access  public
     * @param   string      $ver        版本号
     *
     * @return  void
     */
    function Base($db_name, $prefix)
    {
        $this->db_name = $db_name;
        $this->prefix  = $prefix;
    }

    /**
     * 将指定的表名加上前缀后返回
     *
     * @access  public
     * @param   string      $str        表名
     *
     * @return  string
     */
    function table($str)
    {
        return '`' . $this->db_name . '`.`' . $this->prefix . $str . '`';
    }
}
?>