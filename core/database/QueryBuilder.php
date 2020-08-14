<?php

namespace App\Core\Database;

use PDO;


class QueryBuilder
{
   
    protected $pdo;

   
    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function selectAll()  //method for selections all data
    {
        
        $statement = $this->pdo->prepare("SELECT * FROM {$this->table}");

        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_CLASS);
    }

    public function find($id) //method for selections data by ID
    {
        $statement = $this->pdo->prepare("SELECT * FROM {$this->table} WHERE id={$id}");

        $statement->execute();

        return $statement->fetchObject();
    }

  
    public function insert($parameters)
    {
            $columns='(';
            $values='(';

            foreach($parameters as $key=>$v){
                 $last_value =end($parameters); reset($parameters);
                    if($v == $last_value){
                       $columns.=$key.')';
                       $values.="'$v'".')';
                   }else{
                       $columns.=$key.',';
                       $values.="'$v'".',';
            }
        }
        $sql="INSERT INTO {$this->table} ".$columns." VALUES ".$values;
       
        try {
            $statement = $this->pdo->prepare($sql);

            $statement->execute($parameters);
        } catch (Exception $e) {
            
        }
    }

    public function SelectWhere($params)  //method for selections data with the help of clause WHERE 
    {
        $wheres='';
        foreach($params as $key=>$value){
            if($wheres != ''){
                $wheres.=' AND';
            }
            $wheres.=' '.$key.'='."'$value'";
        }
    $sql="SELECT * FROM {$this->table} WHERE {$wheres}";
    $stmt=$this->pdo->prepare($sql);
    $stmt->execute($params);
    return $stmt->fetchAll(PDO::FETCH_CLASS);

    }

    public function addFile($field,$folder='files')
    {
        $uploaddir = $folder.'/';
        $uploadfile = $uploaddir . time() . basename($_FILES[$field]['name']);

        if (move_uploaded_file($_FILES[$field]['tmp_name'], $uploadfile)) {
            return $uploadfile;
        } else {
            echo "";
        }
    }

    public function updates($parametes,$by,$value){
       
        $update='SET';
        foreach ($parametes as $key => $v){
            $update.=' '.$key.'='."'$v',";
        }
        $update=substr_replace($update,'',-1);
        $sql="UPDATE {$this->table} {$update} WHERE {$by}='$value'";
        $stmt=$this->pdo->prepare($sql);
        $stmt->execute($parametes);

    }

    public function delete(array $parameters){ 
        $delet="";

        foreach($parameters as $key => $value){
            $delet.= ' '.$key.'='."'$value'";
        }
        $sql= "DELETE FROM {$this->table} WHERE {$delet}";
        $stmt=$this->pdo->prepare($sql);
        $stmt->execute($parameters);
        return true;

    }
}
