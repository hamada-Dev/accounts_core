<?php
namespace Common\Handler;

trait ColumsDatabase{

   private $columns = [

            'r1'        => 'name',
            'r2'        => 'description',
            'r3'        => 'added_by',
            'r4'        => 'created_at',
            'r5'        => 'updated_at',
       ];

   private $arrayMap = array();

        public  function  getEncrypt($value){
            foreach ($value as $val){
                $key  = array_search($val, $this->columns);
                if($key){
                    $this->arrayMap[$key] = $val;
                    unset($this->columns[$key]); // i not need to search on it again
                    $key  = null;
                }
            }
            return $this->arrayMap;

        }

        public  function  getDecrypt($keys){
            foreach ($keys as $key){
                $value  = $this->columns[$key];
                if($value){
                    $this->arrayMap[$key] = $value;
                    unset($this->columns[$key]); // i not need to search on it again
                    $value = null;
                }
            }
            return $this->arrayMap;

        }

}

