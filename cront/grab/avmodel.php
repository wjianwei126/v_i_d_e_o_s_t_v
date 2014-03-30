<?php
class avmodel{
 public $db;
 
 public function __construct(){
  $this->db = new DB_MYSQL();
 }
 public function checkVideoByTitle($title){
  $title = trim($title);
  if( !$title){
    return 0;
  }
  $fields='`vid`';
  $where = array('`title`='=>$title);
  $sql = $this->db->select_string('`av_video_head`',$fields,$where,$order='',$limit='1');
  $row = $this->db->row_array($sql);
  return isset($row['vid'])?$row['vid']:0;
 }
 public function addVideoByData($data){
  if(!$data['title']){
   return 0;
  }
  $data_head = $this->copy_array($data,array('title'));
  $sql = $this->db->insert_string('`av_video_head`',$data_head);
  $this->db->query($sql);
  $vid = $this->db->insert_id();
  $data_body = $this->copy_array($data,array('intro','playmode','playurl','ourl','download'));
  $data_body['vid'] = $vid;
  $sql = $this->db->insert_string('`av_video_body`',$data_body);
  $this->db->query($sql);
  return $vid;
 }
 public function copy_array($arr,$field){
  $return = array();
  foreach($field as $v){
   if(isset($arr[$v])){
    $return[$v] = $arr[$v];
   }
  }
  return $return;
 }
}
?>