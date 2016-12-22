<?php
/**
 * 过滤器使用演示
 *
 * http://yiint.local.com/index.php?r=filter
 */

namespace app\controllers;

class FilterController extends \yii\web\Controller
{
    /**
     * 通过覆盖 behaviors 来声明过滤器
     * @return array
     */
    public function behaviors()
    {
        return [
            [
                'class' => 'app\components\ActionTimeFilter',
                'only'  => ['index'],
            ],
        ];
    }

    /**
     * 根据behaviors::only 属性，会执行过滤器
     * @return [type] [description]
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    /**
     * 不会使用过滤器
     */
    public function actionView()
    {
        return $this->render('index');
    }
}
