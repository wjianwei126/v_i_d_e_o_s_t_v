<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require_once 'avbase.php';
class Maindex extends Avbase {
  public function __construct(){
    parent::__construct();
    //check is spilder
    $spider = check_is_spider();
    if(!isset($_COOKIE['isadult']) || !$spider){
      header('Location: /warning/index');
    }
//    $this->load->model('indexmodel');
//var_dump($this->viewData);exit;
  }
  public function index(){

  }
  public function lists($cid,$order=0,$page=1){
   $cid = intval($cid);
   $order = intval($order);
   $page = intval($page);
   
  }
}
