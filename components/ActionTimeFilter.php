<?php
/**
 * 过滤器使用
 */

namespace app\components;

use Yii;
use yii\base\ActionFilter;

/**
 * filter 使用示例
 */
class ActionTimeFilter extends ActionFilter
{
    /**
     * 程序执行时间
     * @var [type]
     */
    private $_start_time;

    /**
     * 预过滤器
     * @param  object $action 将要执行的控制器方法
     * @return bool 是否可以执行控制器方法
     */
    public function beforeAction($action)
    {
        $this->_start_time = microtime(true);
        return parent::beforeAction($action);
    }

    /**
     * 后过滤器
     * @param  object $action 执行的控制器方法
     * @param  mixed $result 执行结果
     * @return mixed 执行结果
     */
    public function afterAction($action, $result)
    {
        $time = microtime(true) - $this->_start_time;
        Yii::trace("Action '{$action->uniqueId}' spent $time second.");
        return parent::afterAction($action, $result);
    }
}
