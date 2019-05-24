<?php
/**
 * @var $schedule array
 * @var $scheduleItems \app\models\ScheduleItem[]
 */

use app\modules\dekanat\controllers\ScheduleItemController;

?>

<div class="row">
    <div class="col-md-4">
        <div class="box">
            <div class="box-header with-border text-center">
                <h3 class="box-title">Dushanba</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <table class="table table-bordered">
                    <tbody>
                    <tr>
                        <th style="width: 1%">#</th>
                        <th>Fanlar</th>
                        <th>O'qituvchi</th>
                        <th style="width: 40px">Xona</th>
                    </tr>

                    <?php
                    foreach ($schedule["1-kun"] as $item):?>
                        <tr>
                            <td style="width: 1%"><?= $item->pair ?></td>
                            <td><?= $item->subject->name . '' . ' (' . ScheduleItemController::findLessonType($item->subject_type) . ')' ?></td>
                            <td><?= $item->teacher->fio ?></td>
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
                <table class="table table-bordered">
                    <tbody>
                    <tr>
                        <th style="width: 1%">#</th>
                        <th>Fanlar</th>
                        <th>O'qituvchi</th>
                        <th style="width: 40px">Xona</th>
                    </tr>

                    <?php
                    foreach ($schedule["2-kun"] as $item):?>
                        <tr>
                            <td style="width: 1%"><?= $item->pair ?></td>
                            <td><?= $item->subject->name . '' . ' (' . ScheduleItemController::findLessonType($item->subject_type) . ')' ?></td>
                            <td><?= $item->teacher->fio ?></td>
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
                <table class="table table-bordered">
                    <tbody>
                    <tr>
                        <th style="width: 1%">#</th>
                        <th>Fanlar</th>
                        <th>O'qituvchi</th>
                        <th style="width: 40px">Xona</th>
                    </tr>

                    <?php
                    foreach ($schedule["3-kun"] as $item):?>
                        <tr>
                            <td style="width: 1%"><?= $item->pair ?></td>
                            <td><?= $item->subject->name . '' . ' (' . ScheduleItemController::findLessonType($item->subject_type) . ')' ?></td>
                            <td><?= $item->teacher->fio ?></td>
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
                <table class="table table-bordered">
                    <tbody>
                    <tr>
                        <th style="width: 1%">#</th>
                        <th>Fanlar</th>
                        <th>O'qituvchi</th>
                        <th style="width: 40px">Xona</th>
                    </tr>

                    <?php
                    foreach ($schedule["4-kun"] as $item):?>
                        <tr>
                            <td style="width: 1%"><?= $item->pair ?></td>
                            <td><?= $item->subject->name . '' . ' (' . ScheduleItemController::findLessonType($item->subject_type) . ')' ?></td>
                            <td><?= $item->teacher->fio ?></td>
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
                <table class="table table-bordered">
                    <tbody>
                    <tr>
                        <th style="width: 1%">#</th>
                        <th>Fanlar</th>
                        <th>O'qituvchi</th>
                        <th style="width: 40px">Xona</th>
                    </tr>

                    <?php
                    foreach ($schedule["5-kun"] as $item):?>
                        <tr>
                            <td style="width: 1%"><?= $item->pair ?></td>
                            <td><?= $item->subject->name . '' . ' (' . ScheduleItemController::findLessonType($item->subject_type) . ')' ?></td>
                            <td><?= $item->teacher->fio ?></td>
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
                <table class="table table-bordered">
                    <tbody>
                    <tr>
                        <th style="width: 1%">#</th>
                        <th>Fanlar</th>
                        <th>O'qituvchi</th>
                        <th style="width: 40px">Xona</th>
                    </tr>

                    <?php
                    foreach ($schedule["3-kun"] as $item):?>
                        <tr>
                            <td style="width: 1%"><?= $item->pair ?></td>
                            <td><?= $item->subject->name . '' . ' (' . ScheduleItemController::findLessonType($item->subject_type) . ')' ?></td>
                            <td><?= $item->teacher->fio ?></td>
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