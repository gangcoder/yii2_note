<?php 
/**
 * 自定义行为，用于行为功能的演示
 */

namespace app\components;

use yii\base\Behavior;

/**
* 行为 演示
*/
class MyBehavior extends Behavior
{
    public $prop1;

    private $_prop2;

    public function getProp2()
    {
        return $this->_prop2;
    }

    public function setProp2($value)
    {
        $this->_prop2 = $value;
    }

    public function foo()
    {
        // ...
    }
}