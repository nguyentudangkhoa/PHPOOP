<?php
include 'firstclass.php';
class secondclass extends firstclass{
    public static $ex ='this is a static property';
    public static function test(){
        echo parent::EXAMPLE.'<br/>';//gọi biến trong class dc extend
        echo self::$ex; /* khác với các biến thông thường phải dùng this-> khi gọi trong
                        class OOp còn static dùng seft:: khi trong class còn 
                        dùng trong các instant khác thì gọi ra bằng cách 
                        classname::*/
    }
}
$b = secondclass::test();
echo $b;
