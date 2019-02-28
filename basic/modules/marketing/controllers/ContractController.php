<?php
/**
 * Created by PhpStorm.
 * User: apple
 * Date: 28.02.2019
 * Time: 13:43
 */

namespace app\modules\marketing\controllers;


use Yii;
use yii\helpers\Json;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use app\modules\marketing\models\ContractPayment;
use app\modules\marketing\models\ContractTwo;
use app\modules\marketing\models\Contract;
use app\modules\marketing\models\ContractSearch;

class ContractController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Contract models.
     * @return mixed
     */
    public function actionIndex()
    {


        $searchModel = new ContractSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        if (Yii::$app->request->post('hasEditable')) {
            $contractID = Yii::$app->request->post('editableKey');
            $contract = Contract::findOne($contractID);

            $out = Json::encode(['output' => '', 'message' => '']);
            $post = [];
            $posted = current($_POST['Contract']);
            $post['Contract'] = $posted;
            if ($contract->load($post)) {
                $contract->save();
                $output = '';
                $out = Json::encode(['output' => $output, 'message' => '']);
            }
            echo $out;
            return;
        }

        return $this->render('index', [

            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,


        ]);

    }

    /**
     * Displays a single Contract model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        $first_half_year = ContractTwo::find()->where(['contract_id' => $id, 'month_id' => [2, 3, 4]])->all();
        $second_half_year = ContractTwo::find()->where(['contract_id' => $id, 'month_id' => [1, 5, 6, 7]])->all();
        $new_term_year = ContractTwo::find()->where(['contract_id' => $id, 'month_id' => [8, 9]])->all();

        $contracttwo = new ContractTwo();
        $contracttwo->contract_id = $id;

        if ($contracttwo->load(Yii::$app->request->post()) && $contracttwo->save())
            return $this->refresh();
        return $this->render('view', [
            'model' => $this->findModel($id),
            'contracttwo' => $contracttwo,
            'first_half_year' => $first_half_year,
            'second_half_year' => $second_half_year,
            'new_term_year' => $new_term_year,

        ]);
//         echo $id; exit();
    }

    /**
     * Creates a new Contract model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Contract();

        if ($model->load(Yii::$app->request->post())) {
            $contrqcttwo = ContractTwo::findOne(['contract_id'=>$model->id])->sum;
            $model->total_plan;

            $rr= $model->save();
           if($rr){
               $model->total_plan = $model->total_plan + $contrqcttwo;
           }


            //return $totals;

            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Contract model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Contract model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Contract model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Contract the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Contract::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }


}