<?php
namespace app\controllers;

// yii 框架基础辅助类, 包含框架级的属性和方法
use Yii;

/**
 * 手动创建controller
 */
class NoteController extends \yii\web\Controller
{
    /**
     * 控制器中可以被直接访问的方法需要以 action 为前缀
     *
     * 访问链接 http://yiint.local.com/index.php?r=note 页面将会显示当前文件名
     */
    public function actionIndex()
    {
        echo __FILE__;
    }

    /**
     * 增加一个action
     * 控制器中可以被直接访问的方法需要以 action 为前缀
     * 
     * @param  string $name name
     */
    public function actionHello($name = 'yii')
    {
        // render 方法用于渲染 hello 页面
        return $this->render('hello', ['name' => $name]);
    }
}
