<?php
class HomeController{
    public function __construct(){

    }
    public function index(){
      $data = Order::recentOrders();
       view("dashboard",$data);
    }
    public function manager(){
       view("dashboard");
    }

    
}

?>