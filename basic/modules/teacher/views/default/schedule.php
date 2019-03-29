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
                                              <th>Xona</th>
                    </tr>
                    <?php
                    foreach ($first_day as $item):?>
                        <tr>
                            <th><?= $item->pair ?></th>
                            <th><?= $item->subject->name . '' . ' (' .ScheduleItemController::findLessonType($item->subject_type) . ')' ?></th>
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

                        <th>Xona</th>
                    </tr>
                    <?php
                    foreach ($second_day as $item):?>
                        <tr>
                            <th><?= $item->pair ?></th>
                        <th><?= $item->subject->name . '' . ' (' . ScheduleItemController::findLessonType($item->subject_type) . ')' ?></th>

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

                        <th>Xona</th>
                    </tr>
                    <?php
                    foreach ($third_day as $item):?>
                        <tr>
                            <th><?= $item->pair ?></th>
                            <th><?= $item->subject->name . '' . ' (' . ScheduleItemController::findLessonType($item->subject_type) . ')' ?></th>

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

                        <th>Xona</th>
                    </tr>
                    <?php
                    foreach ($forth_day as $item):?>
                        <tr>
                            <th><?= $item->pair ?></th>
                            <th><?= $item->subject->name . '' . ' (' . ScheduleItemController::findLessonType($item->subject_type) . ')' ?></th>

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

                        <th>Xona</th>
                    </tr>
                    <?php
                    foreach ($fifth_day as $item):?>
                        <tr>
                            <th><?= $item->pair ?></th>
                            <th><?= $item->subject->name . '' . ' (' . ScheduleItemController::findLessonType($item->subject_type) . ')' ?></th>

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

                        <th>Xona</th>
                    </tr>
                    <?php
                    foreach ($sixth_day as $item):?>
                        <tr>
                            <th><?= $item->pair ?></th>
                            <th><?= $item->subject->name . '' . ' (' . ScheduleItemController::findLessonType($item->subject_type) . ')' ?></th>

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