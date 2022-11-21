<?php 
class AdminDB{
	
 function ExecSQL22($sqlstr,$conn){
$sqltype=strtolower(substr(trim($sqlstr),0,6));
$rs=$conn->prepare($sqlstr);                 //准备查询语句
$rs->execute();                              //执行查询语句，并返回结果集
if($sqltype=="select"){
$array=$rs->fetchAll(PDO::FETCH_ASSOC); //获取结果集中的所有数据
if(count($array)==0 || $rs==false)
return false;                      //返回结果
else
return $array;                     //返回数组结果集
}elseif ($sqltype=="update" || $sqltype=="insert" || $sqltype=="delete"){
//如果是此类语句
if($rs)
return true; //执行成功则返回true
else
return false; //否则返回false
}
}
	
	
  /*
* @ 方法说明
*  执行SQL语句
*
* @ 参数说明：
*  $sql：所要执行的SQL语句
*  $conn：数据库连接ID
*/
function ExecSQL($sqlstr,$conn){
$sqltype=strtolower(substr(trim($sqlstr),0,6));
$rs=$conn->prepare($sqlstr);                 //准备查询语句
  $rs->execute();                              //执行查询语句，并返回结果集
if($sqltype=="select"){
$array=$rs->fetchAll(PDO::FETCH_ASSOC); //获取结果集中的所有数据
             if(count($array)==0 || $rs==false)
                  return false;                      //返回结果
             else
                  return $array;                     //返回数组结果集
        }elseif ($sqltype=="update" || $sqltype=="insert" || $sqltype=="delete"){
                                                     //如果是此类语句
             if($rs)
                  return true;                       //执行成功则返回true
             else
                  return false;                      //否则返回false
        }
    }
    
    
 function querySQL($sqlstr,$conn){
        $sqltype=strtolower(substr(trim($sqlstr),0,6));
        $rs=$conn->prepare($sqlstr);                 //准备查询语句
        $rs->execute();                              //执行查询语句，并返回结果集
        if($sqltype=="select"){
             $array=$rs->fetchAll(); //获取结果集中的所有数据
             if(count($array)==0 || $rs==false)
                  return false;                      //返回结果
             else
                  return $array;                     //返回数组结果集
        }elseif ($sqltype=="update" || $sqltype=="insert" || $sqltype=="delete"){
                                                     //如果是此类语句
             if($rs)
                  return true;                       //执行成功则返回true
             else
                  return false;                      //否则返回false
        }
    }
    
    
 function querySQL2($sqlstr,$conn){
        $sqltype=strtolower(substr(trim($sqlstr),0,6));
        $rs=$conn->prepare($sqlstr);                 //准备查询语句
        $rs->execute();                              //执行查询语句，并返回结果集
        if($sqltype=="select"){
             $array=$rs->fetch(); //获取结果集中的所有数据
             if(count($array)==0 || $rs==false)
                  return false;                      //返回结果
             else
                  return $array;                     //返回数组结果集
        }elseif ($sqltype=="update" || $sqltype=="insert" || $sqltype=="delete"){
                                                     //如果是此类语句
             if($rs)
                  return true;                       //执行成功则返回true
             else
                  return false;                      //否则返回false
        }
    }
    
function executeSQL ($sql, $conn){
      $sqlType = strtolower(substr(trim($sql), 0, 6));  //提取SQL语句的类型
      $rs = $conn->exec($sql);
     // print_r($rs);
    //  die;                     //执行SQL语句
      if ($sqlType == 'select') {                       //如果是select查询
        $arrayData = $rs->GetRows();                    //返回查询记录集
        if (count($arrayData) == 0 || $rs == false) {   //如果没查询到或发生错误
          return false;                                 //返回false} else
        } else {                                        //否则
           return $arrayData;                           //返回记录集
        }
       } elseif ($sqlType == 'insert' || $sqlType == 'update' || $sqlType == 'delete')
       {     
       	 //$rs = $conn->execute($sql);         
       	//如果执行插入、更新或删除语句
         return $rs;                 //返回语句执行状态，即成功返回true，失败返回false
       } else {
          return false;              //如果不是上述查询，则返回false
       }
    }
    
    
    
    
}
?>
