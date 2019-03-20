<?php
/**
 * @var $schedule array
 * @var $scheduleItems \app\models\ScheduleItem[]
 */
?>
<table class="table table-bordered table-striped">
    <tr>
        <th>Dushanba</th>
        <th>Seshanba</th>
        <th>Chorshanba</th>
    </tr>
    <tr>
        <td>
            <?php foreach ($schedule["1-kun"] as $scheduleItem):?>
                <?=$scheduleItem->pair?>. <?=$scheduleItem->subject->name ?> (<?=$scheduleItem->subject_type ?>), <br>
                <?=$scheduleItem->teacher->fio ?>, <?=$scheduleItem->room->name ?> <br>
            <?php endforeach;?>
        </td>
        <td>
            <?php foreach ($schedule["2-kun"] as $scheduleItem):?>
                <?=$scheduleItem->pair?>. <?=$scheduleItem->subject->name ?> (<?=$scheduleItem->subject_type ?>), <br>
                <?=$scheduleItem->teacher->fio ?>, <?=$scheduleItem->room->name ?> <br>
            <?php endforeach;?>
        </td>
        <td>
            <?php foreach ($schedule["3-kun"] as $scheduleItem):?>
                <?=$scheduleItem->pair?>. <?=$scheduleItem->subject->name ?> (<?=$scheduleItem->subject_type ?>), <br>
                <?=$scheduleItem->teacher->fio ?>, <?=$scheduleItem->room->name ?> <br>
            <?php endforeach;?>
        </td>
    </tr>
    <tr>
        <th>Payshanba</th>
        <th>Juma</th>
        <th>Shanba</th>
    </tr>
    <tr>
        <td>
            <?php foreach ($schedule["4-kun"] as $scheduleItem):?>
                <?=$scheduleItem->pair?>. <?=$scheduleItem->subject->name ?> (<?=$scheduleItem->subject_type ?>), <br>
                <?=$scheduleItem->teacher->fio ?>, <?=$scheduleItem->room->name ?> <br>
            <?php endforeach;?>
        </td>
        <td>
            <?php foreach ($schedule["5-kun"] as $scheduleItem):?>
                <?=$scheduleItem->pair?>. <?=$scheduleItem->subject->name ?> (<?=$scheduleItem->subject_type ?>), <br>
                <?=$scheduleItem->teacher->fio ?>, <?=$scheduleItem->room->name ?> <br>
            <?php endforeach;?>
        </td>
        <td>
            <?php foreach ($schedule["6-kun"] as $scheduleItem):?>
                <?=$scheduleItem->pair?>. <?=$scheduleItem->subject->name ?> (<?=$scheduleItem->subject_type ?>), <br>
                <?=$scheduleItem->teacher->fio ?>, <?=$scheduleItem->room->name ?> <br>
            <?php endforeach;?>
        </td>
    </tr>
</table>
