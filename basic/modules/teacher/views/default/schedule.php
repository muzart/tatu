<?php
/**
 * Created by PhpStorm.
 * User: apple
 * Date: 16.03.2019
 * Time: 4:44
 */
/* @var  $first_day  app\modules\teacher\controllers\DefaultController */
/* @var  $second_day  app\modules\teacher\controllers\DefaultController */
/* @var  $third_day  app\modules\teacher\controllers\DefaultController */
/* @var  $forth_day  app\modules\teacher\controllers\DefaultController */
/* @var  $fifth_day  app\modules\teacher\controllers\DefaultController */

/* @var  $sixth_day  app\modules\teacher\controllers\DefaultController */

use app\modules\dekanat\controllers\ScheduleItemController;

?>
<div class="well">
<div class="row">
    <div class="col-md-4">
        <div class="box">
            <div class="box-header with-border text-center">
                <h3 class="box-title">Dushanba</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <table class="table table-bordered text-center">
                    <tbody>
                    <tr>
                        <th style="width: 1%">#</th>
                        <th>Fanlar</th>
                        <th>Guruh</th>
                        <th style="width: 40px">Xona</th>
                    </tr>

                    <?php
                    foreach ($first_day as $item):?>
                        <tr>
                            <td><?= $item->pair ?></td>
                            <td><?= $item->subject->name . '' . ' (' . ScheduleItemController::findLessonType($item->subject_type) . ')' ?></td>
                            <td><?= $item->group->name ?></td>
                            <td><?= $item->room->name ?></td>
                        </tr>
                    <?php
                    endforeach;
                    ?>


                    </tbody>
                </table>
            </div>

        </div>
        <!-- /.box -->

    </div>
    <div class="col-md-4">
        <div class="box">
            <div class="box-header with-border text-center">
                <h3 class="box-title">Seshanba</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <table class="table table-bordered text-center">
                    <tbody>
                    <tr>
                        <th style="width: 1%">#</th>
                        <th>Fanlar</th>
                        <th>Guruh</th>
                        <th style="width: 40px">Xona</th>
                    </tr>

                    <?php
                    foreach ($second_day as $item):?>
                        <tr>
                            <td><?= $item->pair ?></td>
                            <td><?= $item->subject->name . '' . ' (' . ScheduleItemController::findLessonType($item->subject_type) . ')' ?></td>
                            <td><?= $item->group->name ?></td>
                            <td><?= $item->room->name ?></td>
                        </tr>
                    <?php
                    endforeach;
                    ?>


                    </tbody>
                </table>
            </div>

        </div>
        <!-- /.box -->

    </div>
    <div class="col-md-4">
        <div class="box">
            <div class="box-header with-border text-center">
                <h3 class="box-title">Chorshanba</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <table class="table table-bordered text-center">
                    <tbody>
                    <tr>
                        <th style="width: 1%">#</th>
                        <th>Fanlar</th>
                        <th>Guruh</th>
                        <th style="width: 40px">Xona</th>
                    </tr>

                    <?php
                    foreach ($third_day as $item):?>
                        <tr>
                            <td><?= $item->pair ?></td>
                            <td><?= $item->subject->name . '' . ' (' . ScheduleItemController::findLessonType($item->subject_type) . ')' ?></td>

                            <td><?= $item->room->name ?></td>
                        </tr>
                    <?php
                    endforeach;
                    ?>
                    </tbody>
                </table>
            </div>

        </div>
        <!-- /.box -->

    </div>
</div>
<div class="row">
    <div class="col-md-4">
        <div class="box">
            <div class="box-header with-border text-center">
                <h3 class="box-title">Payshanba</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <table class="table table-bordered text-center">
                    <tbody>
                    <tr>
                        <th style="width: 1%">#</th>
                        <th>Fanlar</th>
                        <th>Guruh</th>
                        <th style="width: 40px">Xona</th>
                    </tr>

                    <?php
                    foreach ($forth_day as $item):?>
                        <tr>
                            <td><?= $item->pair ?></td>
                            <td><?= $item->subject->name . '' . ' (' . ScheduleItemController::findLessonType($item->subject_type) . ')' ?></td>
                            <td><?= $item->group->name ?></td>
                            <td><?= $item->room->name ?></td>
                        </tr>
                    <?php
                    endforeach;
                    ?>
                    </tbody>
                </table>
            </div>

        </div>
        <!-- /.box -->

    </div>
    <div class="col-md-4">
        <div class="box">
            <div class="box-header with-border text-center">
                <h3 class="box-title">Juma</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <table class="table table-bordered text-center">
                    <tbody>
                    <tr>
                        <th style="width: 1%">#</th>
                        <th>Fanlar</th>
                        <th>Guruh</th>
                        <th style="width: 40px">Xona</th>
                    </tr>

                    <?php
                    foreach ($fifth_day as $item):?>
                        <tr>
                            <td><?= $item->pair ?></td>
                            <td><?= $item->subject->name . '' . ' (' . ScheduleItemController::findLessonType($item->subject_type) . ')' ?></td>
                            <td><?= $item->group->name ?></td>
                            <td><?= $item->room->name ?></td>
                        </tr>
                    <?php
                    endforeach;
                    ?>
                    </tbody>
                </table>
            </div>

        </div>
        <!-- /.box -->

    </div>
    <div class="col-md-4">
        <div class="box">
            <div class="box-header with-border text-center">
                <h3 class="box-title">Shanba</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <table class="table table-bordered text-center">
                    <tbody>
                    <tr>
                        <th style="width: 1%">#</th>
                        <th>Fanlar</th>
                        <th>Guruh</th>
                        <th style="width: 40px">Xona</th>
                    </tr>

                    <?php
                    foreach ($sixth_day as $item):?>
                        <tr>
                            <td><?= $item->pair ?></td>
                            <td><?= $item->subject->name . '' . ' (' . ScheduleItemController::findLessonType($item->subject_type) . ')' ?></td>
                            <td><?= $item->group->name ?></td>
                            <td><?= $item->room->name ?></td>
                        </tr>
                    <?php
                    endforeach;
                    ?>
                    </tbody>
                </table>
            </div>

        </div>
        <!-- /.box -->

    </div>

</div>
</div>