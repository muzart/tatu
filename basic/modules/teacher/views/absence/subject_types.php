<?php
$id=$_GET['id'];


foreach ($subject_types as $subject_type):?>


    <a href="<?= \yii\helpers\Url::to(['/teacher/absence/groups', 'id'=>$id,'name' => $subject_type->subject_type]) ?>"
       class="w3-btn w3-jumbo">
        <?php echo $subject_type->subject_type;?>

    </a>

<?php
endforeach;
?>
