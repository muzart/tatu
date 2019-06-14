<?php
$subject_id=$_GET['id'];
$subject_type=$_GET['name'];

foreach ($groups as $group):?>

    <a href="<?= \yii\helpers\Url::to(['/teacher/absence/absence','id'=>$subject_id,'name'=>$subject_type,'group_id'=>$group->group->id]) ?>"
       class="w3-btn w3-jumbo">
        <?php echo $group->group->name;?>

    </a>


<?php
endforeach;