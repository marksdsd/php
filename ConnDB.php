<?php
class ConnDB{
    var $dbtype;
    var $host;
   var $user;
   var $pwd;
   var $dbname;
  /*
     * @ 方法说明：
     *  构造方法，类的初始化
     *
     * @ 参数说明：
     *  $dbtype：连接数据库的类型
     *  $host：数据库服务器主机名或IP地址
     *  $user：用户名
     *  $pwd：密码
     *  $dbname：数据库名称
     */
    function ConnDB($dbtype,$host,$user,$pwd,$dbname){
        $this->dbtype=$dbtype;
        $this->host=$host;
        $this->user=$user;
        $this->pwd=$pwd;
        $this->dbname=$dbname;
    }
   /*
     * @ 方法说明：
     *  获取数据库连接ID
      */
    function GetConnId(){
         if($this->dbtype=="mysql" || $this->dbtype=="mssql"){
                                            //判断数据库的类型，根据类型定义DSN的值
            $dsn="$this->dbtype:host=$this->host;dbname=$this->dbname";
         }else{
            $dsn="$this->dbtype:dbname=$this->dbname";
         }
         try {
            $conn = new PDO($dsn, $this->user, $this->pwd);
                                            //初始化PDO对象，创建数据库连接对象
            $conn->query("set names utf8"); //设置编码格式
            return $conn;                   //返回数据库连接标识
         } catch (PDOException $e) {
            die ("Error!: " . $e->getMessage() . "<br/>");
         }
    }
}
?>
header.php源码如下:
<?php 
require_once '/admin/SepPage.php';
error_reporting(0);
require_once '/inc/ConnDB.php';
require_once '/inc/AdminDB.php';
$connobj=new ConnDB("mysql","localhost","root","admin123","db_com"); 
$conn=$connobj->GetConnId();                       //执行连接操作，返回连接标识
$admindb=new AdminDB();
$info=$admindb->ExecSQL("select * from config",$conn);
//print_r($info);
//die;
?>
