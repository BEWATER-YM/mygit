<?php
class Person {
    public $name;
    private $age;
    protected  $height;
    /*
     * 构造方法
     *构造方法是类中的一个特殊方法。当使用 new 操作符创建一个类的实例时，构造方法将会自动调用，其名称必须是 __construct()
     * 在一个类中只能声明一个构造方法，而是只有在每次创建对象的时候都会去调用一次构造方法，不能主动的调用这个方法，所以通常用它执行一些有用的初始化任务。该方法无返回值。
     * PHP不会在本类的构造方法中再自动的调用父类的构造方法。要执行父类的构造方法，需要在子类的构造方法中调用 parent::__construct() 。
     * */
    function __construct( $name, $age, $height ) {
        $this->name = $name;
        $this->age = $age;
        $this->height = $height;
    }

    function say() {
        echo "我的名字叫：".$this->name."<br />";
        echo "我的年龄是：".$this->age."<br />";
        echo "我的身高是：".$this->height;
    }
}

$p1 = new Person("张三", 20,175);
$p1->say();