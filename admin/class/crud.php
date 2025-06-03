<?php

    class crud{

        protected $host='localhost';
        protected $username='root';
        protected $password='';
        protected $database='travel_management';
        protected $connect;
        public $base_url='http://localhost/travel_management/';
        public $project_name='travel_management/';


        function __construct(){
            $this->connect=new mysqli($this->host,$this->username,$this->password,$this->database);
        }

        public function common_select($table,$fields='*',$where=false,$sort='id',$sort_type='desc',$offset=false,$limit=false){
            $data=[];
            $error=0;
            $error_msg="";

            $sql="select $fields from $table";
            $sql.=" where status=1 ";
            if($where){
                $sql.=" and ";
                $i=0;
                foreach($where as $k=>$v){
                    $sql.="$k='$v'";
                    if($i<count($where)-1){
                        $sql.=" and ";
                    }
                    $i++;
                }
            }

            $sql.=" order by $sort $sort_type";

            if($limit){
                $sql.=" limit $offset $limit";
            }

            $result=$this->connect->query($sql);
            if($result){
                if($result->num_rows > 0){
                    while($r=$result->fetch_object()){
                        array_push($data,$r);
                    }
                }else{
                    $error=1;
                    $error_msg="No data available";
                }
            }else{
                $error=1;
                $error_msg=$this->connect->error;
            }
            
            return array('data'=>$data,'error'=>$error,'error_msg'=>$error_msg);

        }
        public function common_select_with_trash($table,$fields='*',$where=false,$sort='id',$sort_type='desc',$offset=false,$limit=false){
            $data=[];
            $error=0;
            $error_msg="";

            $sql="select $fields from $table";
           
            if($where){
                $sql.=" where ";
                $i=0;
                foreach($where as $k=>$v){
                    $sql.="$k='$v'";
                    if($i<count($where)-1){
                        $sql.=" and ";
                    }
                    $i++;
                }
            }

            $sql.=" order by $sort $sort_type";

            if($limit){
                $sql.=" limit $offset $limit";
            }

            $result=$this->connect->query($sql);
            if($result){
                if($result->num_rows > 0){
                    while($r=$result->fetch_object()){
                        array_push($data,$r);
                    }
                }else{
                    $error=1;
                    $error_msg="No data available";
                }
            }else{
                $error=1;
                $error_msg=$this->connect->error;
            }
            
            return array('data'=>$data,'error'=>$error,'error_msg'=>$error_msg);

        }
        // Retrive End

        // Retrive Start
        public function common_insert($table,$fields){
            $data='';
            $error=0;
            $error_msg="";

            $sql="insert into $table set ";

            foreach($fields as $name=>$value){
                $sql.="$name='$value', ";
            }
            $sql=rtrim($sql,', ');
            $result=$this->connect->query($sql);
            if($result){
                $data=$this->connect->insert_id;
            }else{
                $error=1;
                $error_msg=$this->connect->error;
            }
            
            return array('data'=>$data,'error'=>$error,'error_msg'=>$error_msg);
        }

        // Update start
        public function common_update($table,$fields,$where){
            $data='';
            $error=0;
            $error_msg="";

            $sql="update $table set ";

            foreach($fields as $name=>$value){
                $sql.="$name='$value', ";
            }
            $sql=rtrim($sql,', ');

            if($where){
                $sql.=" where ";
                $i=0;
                foreach($where as $k=>$v){
                    $sql.="$k='$v'";
                    if($i<count($where)-1){
                        $sql.=" and ";
                    }
                    $i++;
                }
            }

            $result=$this->connect->query($sql);
            if($result){
                $data=$this->connect->affected_rows;
            }else{
                $error=1;
                $error_msg=$this->connect->error;
            }
            
            return array('data'=>$data,'error'=>$error,'error_msg'=>$error_msg);
        }
        // Update End

        // Delete Start
        public function common_delete($table,$where){
            $data='';
            $error=0;
            $error_msg="";
            $sql="delete from $table";
            if($where){
                $sql.=" where ";
                $i=0;
                foreach($where as $k=>$v){
                    $sql.="$k='$v'";
                    if($i<count($where)-1){
                        $sql.=" and ";
                    }
                $i++;
                }
            }
            $result=$this->connect->query($sql);
            if($result){
                $data=$this->connect->affected_rows;
            }else{
                $error=1;
                $error_msg=$this->connect->error;
            }
            return array('data'=>$data,'error'=>$error,'error_msg'=>$error_msg);
        }
        // Delete End

        public function common_query($sql){
            $data=[];
            $error=0;
            $error_msg="";

            $result=$this->connect->query($sql);
            if($result){
                if($result->num_rows > 0){
                    while($r=$result->fetch_object()){
                        array_push($data,$r);
                    }
                }else{
                    $error=1;
                    $error_msg="No data available";
                }
            }else{
                $error=1;
                $error_msg=$this->connect->error;
            }
            
            return array('data'=>$data,'error'=>$error,'error_msg'=>$error_msg);

        }

        public function upload_file($file,$path){
            $path=$_SERVER['DOCUMENT_ROOT'].'/'.$this->project_name."admin/assets/images/".$path;
            if(!file_exists($path)){
                mkdir($path,0777,true);
            }
            $error=0;
            $error_msg="";
            $file_name="";
            $file_error="";
            $file_name=$file['name'];
            $file_error=$file['error'];
            $file_name=time().rand(1000,9999).$file_name;
            $file_path=$path.'/'.$file_name;
            if($file_error==0){
                if(move_uploaded_file($file['tmp_name'],$file_path)){
                    $error=0;
                    $error_msg="File uploaded successfully";
                }else{
                    $error=1;
                    $error_msg="File not uploaded";
                }
            }
            return array('error'=>$error,'error_msg'=>$error_msg,'file_name'=>$file_name,'file_path'=>$file_path,'file_error'=>$file_error);
        }
    }