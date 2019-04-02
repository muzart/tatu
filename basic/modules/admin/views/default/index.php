<div class="admin-default-index">

    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-blue">
            <div class="inner">
                <h3>Dekanat</h3>

                <p>Module</p>
            </div>
            <div class="icon">
                <i class="fa fa-retweet"></i>
            </div>
            <a href="<?= \yii\helpers\Url::to('/dekanat') ?>" class="small-box-footer">
                Kirish <i class="fa fa-arrow-circle-right"></i>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-maroon-active">
            <div class="inner">
                <h3>Kafedra</h3>

                <p>Module</p>
            </div>
            <div class="icon">
                <i class="fa fa-retweet"></i>
            </div>
            <a href="<?= \yii\helpers\Url::toRoute('/department') ?>" class="small-box-footer">
                Kirish <i class="fa fa-arrow-circle-right"></i>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-purple-gradient">
            <div class="inner">
                <h3>TTJ</h3>
                <p>Module</p>
            </div>
            <div class="icon">
                <i class="fa fa-retweet"></i>
            </div>
            <a href="<?= \yii\helpers\Url::to('dormitory') ?>" class="small-box-footer">
                Kirish <i class="fa fa-arrow-circle-right"></i>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-olive">
            <div class="inner">
                <h3>Universitet</h3>

                <p>Module</p>
            </div>
            <div class="icon">
                <i class="fa fa-retweet"></i>
            </div>
            <a href="<?= \yii\helpers\Url::to('university') ?>" class="small-box-footer">
                Kirish <i class="fa fa-arrow-circle-right"></i>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-green-active">
            <div class="inner">
                <h3>Sozlamalar</h3>

                <p>Module</p>
            </div>
            <div class="icon">
                <i class="fa fa-retweet"></i>
            </div>
            <a href="<?= \yii\helpers\Url::to('current-term/index') ?>" class="small-box-footer">
                Kirish <i class="fa fa-arrow-circle-right"></i>
            </a>
        </div>
    </div>
    <br>
    <br>
    <br>
    <br><br>
    <br>
    <br>
    <br><br>
    <br>
    <br>
    <br><br>
    <br>
    <!---Start event management block--->
    <div class="box box-info box-solid">
        <div class="box-header with-border">
            <h3 class="box-title"><i class="ion ion-calendar"></i> <?php echo Yii::t('app', 'Manage Event Schedule') ?>
            </h3>
        </div>
        <div class="box-body">
            <?php
            $AEurl = \yii\helpers\Url::to(["events/add-event"]);
            $UEurl = \yii\helpers\Url::to(["events/update-event"]);
            $AddEvent = Yii::t('app', 'Add Event');
            $JSEvent = <<<EOF
	function(start, end, allDay) {
		var start = moment(start).unix();
	   	var end = moment(end).unix();
		$.ajax({
		   url: "{$AEurl}",
		   data: { start_date : start, end_date : end, return_admin : 1 },
		   type: "GET",
		   success: function(data) {
			   $(".modal-body").addClass("row");
			   $(".modal-header").html('<button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button><h3>{$AddEvent}</h3>');
			   $('.modal-body').html(data);
			   $('#eventModal').modal();
		   }
	   	});
			}
EOF;
            $updateEvent = Yii::t('app', 'Update Event');
            $JSEventClick = <<<EOF
	function(calEvent, jsEvent, view) {
	    var eventId = calEvent.id;
		$.ajax({
		   url: "{$UEurl}",
		   data: { event_id : eventId, return_admin : 1 },
		   type: "GET",
		   success: function(data) {
			   $(".modal-body").addClass("row");
			   $(".modal-header").html('<button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button><h3> {$updateEvent} </h3>');
			   $('.modal-body').html(data);
			   $('#eventModal').modal();
		   }
	   	});
		$(this).css('border-color', 'red');
	}
EOF;
            $eDetail = Yii::t('app', 'Event Detail');
            $eType = Yii::t('app', 'Event Type');
            $eStart = Yii::t('app', 'Start Time');
            $eEnd = Yii::t('app', 'End Time');
            $JsF = <<<JS
            function (event, element) {
                var start_time = moment(event.start).format("DD-MM-YYYY, h:mm:ss a");
                var end_time = moment(event.end).format("DD-MM-YYYY, h:mm:ss a");
    
                element.popover({
                    title: event.title,
                    placement: 'top',
                    html: true,
                    global_close: true,
                    container: 'body',
                    trigger: 'hover',
                    delay: {"show": 500},
                        content: "<table class='table'><tr><th> {$eDetail} : </th><td>" + event.description + " </td></tr><tr><th> {$eType} : </th><td>" + event.event_type + "</td></tr><tr><th> {$eStart} : </t><td>" + start_time + "</td></tr><tr><th> {$eEnd} : </th><td>" + end_time + "</td></tr></table>"
                    });
               }
JS;

            ?>

            <div class="row">
                <div class="col-sm-12 col-xs-12">
                    <?= \yii2fullcalendar\yii2fullcalendar::widget([
                        'options' => ['language' => 'en'],
                        'clientOptions' => [
                            'fixedWeekCount' => false,
                            'weekNumbers' => true,
                            'editable' => true,
                            'selectable' => true,
                            'eventLimit' => true,
                            'eventLimitText' => 'more Events',
                            'selectHelper' => true,
                            'header' => [
                                'left' => 'today prev,next',
                                'center' => 'title',
                                'right' => 'month,agendaWeek,agendaDay'
                            ],
                            'select' => new \yii\web\JsExpression($JSEvent),
                            'eventClick' => new \yii\web\JsExpression($JSEventClick),
                            'eventRender' => new \yii\web\JsExpression($JsF),
                            'aspectRatio' => 2,
                            'timeFormat' => 'hh(:mm) A'
                        ],
                        'ajaxEvents' => \yii\helpers\Url::toRoute(['events/view-events'])
                    ]); ?>
                </div>
            </div> <!-- /.End ROW -->
            <div class="row">
                <div class="col-sm-12 col-xs-12">
                    <ul class="legend">
                        <li><span class="holiday"></span> <?php echo Yii::t('app', 'Holiday') ?></li>
                        <li><span class="importantnotice"></span> <?php echo Yii::t('app', 'Important Notice') ?></li>
                        <li><span class="meeting"></span> <?php echo Yii::t('app', 'Meeting') ?></li>
                        <li><span class="messages"></span> <?php echo Yii::t('app', 'Messages') ?></li>
                    </ul>
                </div>
            </div>

        </div><!-- /.box-body -->
    </div>
    <!---End Event manager block--->

    <?php
    yii\bootstrap\Modal::begin([
        'id' => 'eventModal',
        'header' => "<h3>" . Yii::t('app', 'Add Event') . "</h3>",
    ]);

    yii\bootstrap\Modal::end();
    ?>
