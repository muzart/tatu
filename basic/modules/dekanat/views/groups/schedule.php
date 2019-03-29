<?php
/**
 * @var $schedule array
 * @var $scheduleItems \app\models\ScheduleItem[]
 */
use app\modules\dekanat\controllers\ScheduleItemController;
?>
<ul class="nav  nav-pills">
    <li class="active"><a data-toggle="tab" href="#1-kun">Dushanba</a></li>
    <li><a data-toggle="tab" href="#2-kun">Seshanba</a></li>
    <li><a data-toggle="tab" href="#3-kun">Chorshanba</a></li>
    <li><a data-toggle="tab" href="#4-kun">Payshanba</a></li>
    <li><a data-toggle="tab" href="#5-kun">Juma</a></li>
    <li><a data-toggle="tab" href="#6-kun">Shanba</a></li>
</ul>
<div class="tab-content">
    <div id="1-kun" class="tab-pane fade active in">
        <div class="container">
            <div class="row">
                <table class="w3-table-all w3-card-4 w3-hoverable">
                    <tr class="w3-green">
                        <th>Juftlik</th>
                        <th>Fanlar</th>
                        <th>O'qituvchi</th>
                        <th>Xona</th>
                    </tr>
                    <?php
                    foreach ($schedule["1-kun"] as $item):?>
                        <tr>
                            <th><?= $item->pair ?></th>
                            <th><?= $item->subject->name . '' . ' (' . ScheduleItemController::findLessonType($item->subject_type) . ')' ?></th>
                            <th><?= $item->teacher->fio ?></th>
                            <th><?= $item->room->name ?></th>
                        </tr>
                    <?php
                    endforeach;
                    ?>
                </table>
            </div>
        </div>
    </div>
    <div id="2-kun" class="tab-pane fade ">
        <div class="container">
            <div class="row">
                <table class="w3-table-all w3-card-3">
                    <tr class="w3-green">
                        <th>Juftlik</th>
                        <th>Fanlar</th>
                        <th>O'qituvchi</th>
                        <th>Xona</th>
                    </tr>
                    <?php
                    foreach ($schedule["2-kun"] as $item):?>
                        <tr>
                            <th><?= $item->pair ?></th>
                            <th><?= $item->subject->name . '' . ' (' . ScheduleItemController::findLessonType( $item->subject_type) . ')' ?></th>
                            <th><?= $item->teacher->fio ?></th>
                            <th><?= $item->room->name ?></th>
                        </tr>
                    <?php
                    endforeach;
                    ?>
                </table>
            </div>
        </div>
    </div>
    <div id="3-kun" class="tab-pane fade ">
        <div class="container">
            <div class="row">
                <table class="w3-table-all w3-card-3">
                    <tr class="w3-green">
                        <th>Juftlik</th>
                        <th>Fanlar</th>
                        <th>O'qituvchi</th>
                        <th>Xona</th>
                    </tr>
                    <?php
                    foreach ($schedule["3-kun"] as $item):?>
                        <tr>
                            <th><?= $item->pair ?></th>
                            <th><?= $item->subject->name . '' . ' (' . ScheduleItemController::findLessonType( $item->subject_type) . ')' ?></th>
                            <th><?= $item->teacher->fio ?></th>
                            <th><?= $item->room->name ?></th>
                        </tr>
                    <?php
                    endforeach;
                    ?>
                </table>
            </div>
        </div>
    </div>
    <div id="4-kun" class="tab-pane fade ">
        <div class="container">
            <div class="row">
                <table class="w3-table-all w3-card-3">
                    <tr class="w3-green">
                        <th>Juftlik</th>
                        <th>Fanlar</th>
                        <th>O'qituvchi</th>
                        <th>Xona</th>
                    </tr>
                    <?php
                    foreach ($schedule["4-kun"] as $item):?>
                        <tr>
                            <th><?= $item->pair ?></th>
                            <th><?= $item->subject->name . '' . ' (' . ScheduleItemController::findLessonType( $item->subject_type) . ')' ?></th>
                            <th><?= $item->teacher->fio ?></th>
                            <th><?= $item->room->name ?></th>
                        </tr>
                    <?php
                    endforeach;
                    ?>
                </table>
            </div>
        </div>

    </div>
    <div id="5-kun" class="tab-pane fade ">
        <div class="container">
            <div class="row">
                <table class="w3-table-all w3-card-3">
                    <tr class="w3-green">
                        <th>Juftlik</th>
                        <th>Fanlar</th>
                        <th>O'qituvchi</th>
                        <th>Xona</th>
                    </tr>
                    <?php
                    foreach ($schedule["5-kun"] as $item):?>
                        <tr>
                            <th><?= $item->pair ?></th>
                            <th><?= $item->subject->name . '' . ' (' . ScheduleItemController::findLessonType( $item->subject_type) . ')' ?></th>
                            <th><?= $item->teacher->fio ?></th>
                            <th><?= $item->room->name ?></th>
                        </tr>
                    <?php
                    endforeach;
                    ?>
                </table>
            </div>
        </div>
    </div>

    <div id="6-kun" class="tab-pane fade ">
        <div class="container">
            <div class="row">
                <table class="w3-table-all w3-card-3">
                    <tr class="w3-green">
                        <th>Juftlik</th>
                        <th>Fanlar</th>
                        <th>O'qituvchi</th>
                        <th>Xona</th>
                    </tr>
                    <?php
                    foreach ($schedule["6-kun"] as $item):?>
                        <tr>
                            <th><?= $item->pair ?></th>
                            <th><?= $item->subject->name . '' . ' (' . ScheduleItemController::findLessonType( $item->subject_type) . ')' ?></th>
                            <th><?= $item->teacher->fio ?></th>
                            <th><?= $item->room->name ?></th>
                        </tr>
                    <?php
                    endforeach;
                    ?>
                </table>
            </div>
        </div>
    </div>

</div>

