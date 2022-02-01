<?php


require_once 'Application.php' ;
require_once 'MysqlDb.php' ;
require_once 'MongoDb.php' ;



$app = new Application(
   // new MysqlDb()
   new MongoDb()
) ;


$app->db->createOrder([]) ;
$app->db->deleteOrder(1) ;
$app->db->getOrders() ;
$app->db->getOrderById(1) ;
$app->db->updateOrder(1 , []) ;

