<?php

namespace app\modules\teacher\controllers;

use app\helpers\GetUserId;
use app\models\Absence;
use app\models\ScheduleItem;
use app\models\search\AbsenceSearch;
use app\models\Student;
use app\models\Subject;
use app\models\Teacher;
use Yii;
use yii\filters\VerbFilter;
use yii\web\Controller;
use yii\web\NotFoundHttpException;

/**
 * AbsenceController implements the CRUD actions for Absence model.
 */
class AbsenceController extends Controller
{

    /**
     * {@inheritdoc}
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
     * Lists all Absence models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new AbsenceSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Absence model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Finds the Absence model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Absence the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Absence::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException(Yii::t('app', 'The requested page does not exist.'));
    }

    /**
     * Creates a new Absence model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Absence();

        if ($model->load(Yii::$app->request->post())) {


            $model->save();
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Absence model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Absence model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    public function actionSubjects()
    {
        $user_id = GetUserId::getId();
        $teacher_id = Teacher::findOne(['user_id' => $user_id])->id;
        $SubjectsByTeacherId = ScheduleItem::find()->where(['teacher_id' => $teacher_id])->all();
        return $this->render('subjects', [
            'subjects' => $SubjectsByTeacherId
        ]);
    }

    public function actionSubject_types($id)
    {
        $user_id = GetUserId::getId();
        $teacher_id = Teacher::findOne(['user_id' => $user_id])->id;
        $types = ScheduleItem::find()->where(['subject_id' => $id, 'teacher_id' => $teacher_id])->all();
        return $this->render('subject_types', [
            'subject_types' => $types
        ]);
    }

    public function actionGroups($name)
    {
        $user_id = GetUserId::getId();
        $teacher_id = Teacher::findOne(['user_id' => $user_id])->id;

        $groups = ScheduleItem::find()->where(['teacher_id' => $teacher_id, 'subject_type' => $name])->all();
        return $this->render('groups', [
            'groups' => $groups
        ]);
    }

    public function actionAbsence($id, $name, $group_id, $student_ids = [])
    {
        $user_id = GetUserId::getId();
        $teacher_id = Teacher::findOne(['user_id' => $user_id])->id;
        $subject = Subject::findOne($id);
        $teacher = Teacher::findOne($teacher_id);
        $dates = Absence::getDatesBySubjectAndType($id,$name);
        $students = Student::find()->where(['group_id' => $group_id])->all();
        $absence = new Absence();
        if ($absence->load(Yii::$app->request->post())) {
            //var_dump($_POST['Absence']['student_id']);exit();
            $models = $_POST['Absence']['student_id'];

            foreach ($models as $student_id) {
                if ($student_id == 0) continue;
                $absence_model = new Absence();

                $absence_model->day = date('y/m/d');
                $absence_model->subject_id = $_GET['id'];
                $absence_model->subject_type_id = $_GET['name'];
                $absence_model->teacher_id = $teacher_id;
                $absence_model->student_id = $student_id;
                //echo "<pre>";
                //print_r($absence_model);
                //die();
                $absence_model->save(false);

            }
            return $this->refresh();
        }
        return $this->render('absence', [
            'subject' => $subject,
            'subject_type' => $name,
            'teacher' => $teacher,
            'dates' => $dates,
            'students' => $students,
            'absence' => $absence
        ]);
    }

    public static function getStudent()
    {

        $student_absence_bydate = Absence::find()->where(['subject_id'=>$_GET['id'],'subject_type_id'=>$_GET['name']])->orderBy(['day' => 'SORT_DESC'])->all();
        $massive = [];
        foreach ($student_absence_bydate as $student) {
            $massive[] = $student->student_id;
        }
        return $massive;
    }
    public static function getStudents()
    {
        $massive=[];
        $student = Student::find()->all();
        foreach ($student as $item) {
            $massive[]=$item->id;

        }
        return $massive;
    }

    public static function getAbsenseStudents()
    {
        $a=self::getStudents();
        $b=self::getStudent();
       foreach ($a as $value)
       {
           if ($value==$b)
           {
               return "y";
           }
           else return ' r';
       }

    }


}