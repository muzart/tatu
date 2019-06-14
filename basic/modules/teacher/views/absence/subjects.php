<?php

foreach ($subjects as $subject):?>

    <a href="<?= \yii\helpers\Url::to(['absence/subject_types','id'=> $subject->subject_id]) ?>" class="w3-btn w3-jumbo">
        <?php echo $subject->subject->name;?>
    </a>


<?php endforeach; ?>