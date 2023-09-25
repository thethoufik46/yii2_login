<?php


namespace app\controllers;

use app\models\UserForm;
use Yii;
use yii\web\Controller;
use yii\data\Pagination;
use app\models\Country;
use yii\base\ActionFilter;





// class ActionTimeFilter extends ActionFilter
// {
//     private $_startTime;

//     /**
//      * Summary of beforeAction
//      * @param mixed $action
//      * @return bool
//      */
//     public function beforeAction($action)
//     {
//         $this->_startTime = microtime(true);
//         return parent::beforeAction($action);
//     }

//     /**
//      * Summary of afterAction
//      * @param mixed $action
//      * @param mixed $result
//      * @return mixed
//      */
//     public function afterAction($action, $result)
//     {
//         $time = microtime(true) - $this->_startTime;
//         Yii::debug("Action '{$action->uniqueId}' spent $time second.");
//         return parent::afterAction($action, $result);
//     }
// }


class CountryController extends Controller
{
    /**
     * Summary of actionCountry
     * @return void
    //  */
    // public function actionIndex()
    // {
    //     return $this->render('index');
    // }




    public function actionCountry()
    {
        $model = new Country();
        $model->insertTable();  
     
    }


    // public function actionIndexx()
    // {
    //     $query = Country::find()->asArray()->all();

    //     echo "<pre>";print_r($query);die;
    // }


    public function actionHome()
    {
        return $this->render('home');

    }
}
?>