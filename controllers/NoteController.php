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
}
