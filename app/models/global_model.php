<?php
class global_model extends Model
{
    public function __construct(){
        parent::__construct();
    }
    public function findAll($table){
        $sql = 'SELECT * FROM '.$table;
        $statement = $this->conn->prepare($sql);
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    } 
      
    public function findById($table,$id){
        $sql = 'SELECT * FROM '.$table.' WHERE id = :id';
        $statement = $this->conn->prepare($sql);
        $statement->execute([':id' => $id]);
        return $statement->fetch();
    }

    public function countById($table,$id){
        $sql = 'SELECT * FROM '.$table.' WHERE id = :id';
        $statement = $this->conn->prepare($sql);
        $statement->execute([':id' => $id]);
        return $statement->rowCount();
    }

    public function countall($table){
        $sql = 'SELECT * FROM '.$table;
        $statement = $this->conn->prepare($sql);
        $statement->execute();
        return $statement->rowCount();
    }
 
    public function lastInsertId(){
        return $this->conn->lastInsertId();
    }
    
    public function insert($table,$data){
        if(!empty($data) && is_array($data)){
            // if(!array_key_exists('date_added',$data)){
            //     $data['date_added'] = date("Y-m-d H:i:s");
            // }
            // if(!array_key_exists('user_id',$data)){
            //     $data['user_id'] = null;
            // }          
            $columnString   = implode(',', array_keys($data));
            $valueString    = ":".implode(',:', array_keys($data));

            $sql = "INSERT INTO ".$table." (".$columnString.") VALUES (".$valueString.")";

            $query = $this->conn->prepare($sql);
            $this->conn->exec("set names utf8");
            foreach($data as $key => $val){
                $query->bindValue(':'.$key, $val);
            }
    
            $insert = $query->execute();
            return $insert?$this->conn->lastInsertId():false;
        }else{
            return false;
        }
    }
    
    public function update($table,$data,$conditions){

        try{

            if(!empty($data) && is_array($data)){
                $colvalSet = '';$colvalSet2 = '';
                $whereSql = '';
                $i = 0;$x = 0;
                 
                // if(!array_key_exists('modified',$data)){
                //     $data['date_modified'] = date("Y-m-d H:i:s");
                // }

                foreach($data as $key=>$val){
                    $pre = ($i > 0)?', ':'';
                    $colvalSet .= $pre.$key." = :".$key."";
                    $i++;
                }
                foreach($data as $key=>$val){
                    $pre = ($x > 0)?', ':'';
                    $colvalSet2 .= $pre."'".$val."'";
                    $x++;
                }

                if(!empty($conditions)&& is_array($conditions)){
                    $whereSql .= ' WHERE ';
                    $i = 0;
                    foreach($conditions as $key => $value){
                        $pre = ($i > 0)?' AND ':'';
                        $whereSql .= $pre.$key." = '".$value."'";
                        $i++;
                    }
                }

                $sql = "UPDATE ".$table." SET ".$colvalSet.$whereSql;
                $query = $this->conn->prepare($sql);

                foreach($data as $key=>$val){
                    $query->bindValue(':'.$key, $val);
                }
    
                $update = $query->execute();
                return $update?true:false;

            }else{
                return false;
            }

         }catch(PDOException $e){
                die($e->getMessage());
        }
    } 

    public function delete($table,$conditions){
        $whereSql = '';
        if(!empty($conditions)&& is_array($conditions)){
            $whereSql .= ' WHERE ';
            $i = 0;
            foreach($conditions as $key => $value){
                $pre = ($i > 0)?' AND ':'';
                $whereSql .= $pre.$key." = '".$value."'";
                $i++;
            }
        }
        $sql = "DELETE FROM ".$table.$whereSql;
        $delete = $this->conn->exec($sql);
        return $delete?$delete:false;
    }

}






