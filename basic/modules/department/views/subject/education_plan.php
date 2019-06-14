<?php
$summa = 0;
if (count($model)): ?>
<div class="well">
    <table class="w3-table" border="1px solid black">
        <tr>
            <td rowspan="8" style="width: 30%">T/R</td>
            <td rowspan="8" style="width: 30%">O'quv fanlari,bloklar va faoliyat turlarining nomlari</td>
            <td colspan="9">Talabalarning o'quv yuklamasi (soatlarda)</td>
            <td colspan="8">Soatlarning kurs,semestr va xaftalar bo'yicha taksimoti</td>
        </tr>
        <tr>
            <td colspan="2" rowspan="6">Umumiy yuklamaning hajmi</td>
            <td colspan="6">Auditoriya mashg'ulotlari (soatlarda)</td>
            <td rowspan="7">Mustaqil ta'lim</td>
            <td colspan="2">1-kurs</td>
            <td colspan="2">2-kurs</td>
            <td colspan="2">3-kurs</td>
            <td colspan="2">4-kurs</td>
        </tr>
        <tr>
            <td rowspan="6">Jami</td>
            <td rowspan="6">Maruza</td>
            <td rowspan="6">Amaliy</td>
            <td rowspan="6">Laboratoriya</td>
            <td rowspan="6">Seminar</td>
            <td rowspan="6">Kurs loyihasi</td>
            <td colspan="8">Kurslardagi haftalar soni</td>
        </tr>
        <tr>
            <td colspan="2">42</td>
            <td colspan="2">44</td>
            <td colspan="2">44</td>
            <td colspan="2">42</td>
        </tr>
        <tr>
            <td colspan="8">Semestrlar</td>
        </tr>
        <tr>
            <td>1</td>
            <td>2</td>
            <td>3</td>
            <td>4</td>
            <td>5</td>
            <td>6</td>
            <td>7</td>
            <td>8</td>
        </tr>
        <tr>
            <td colspan="8">Semestrdagi auditoriya mashg'ulotlari haftalarining soni</td>
        </tr>
        <tr>
            <td>soat</td>
            <td>%</td>
            <td>18</td>
            <td>18</td>
            <td>18</td>
            <td>18</td>
            <td>18</td>
            <td>18</td>
            <td>16</td>
            <td>8</td>
        </tr>
        <tr>
            <td>1</td>
            <td>2</td>
            <td>3</td>
            <td>4</td>
            <td>5</td>
            <td>6</td>
            <td>7</td>
            <td>8</td>
            <td>9</td>
            <td>10</td>
            <td>11</td>
            <td>12</td>
            <td>13</td>
            <td>14</td>
            <td>15</td>
            <td>16</td>
            <td>17</td>
            <td>18</td>
            <td>19</td>
        </tr>

        <?php
        $total = 0;

        (double)$i = 0;
        foreach ($model as $item):$i++; ?>
            <tr>
                <td><?=$i++?></td>
                <td><?= $item->name ?></td>
                <td><?= \app\models\PlanSubjectType::getTotalHour($item->id) ?></td>
                <td></td>
                <td><?= \app\models\PlanSubjectType::getTotalHour($item->id) - \app\models\PlanSubjectType::getHour($item->id, 9) ?></td>
                <td><?= \app\models\PlanSubjectType::getHour($item->id, 1) ?></td>
                <td><?= \app\models\PlanSubjectType::getHour($item->id, 4) ?></td>
                <td><?= \app\models\PlanSubjectType::getHour($item->id, 2) ?></td>
                <td><?= \app\models\PlanSubjectType::getHour($item->id, 10) ?></td>
                <td></td>
                <td><?= \app\models\PlanSubjectType::getHour($item->id, 9) ?></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>

            </tr>
        <?php endforeach; ?>
    </table>
    <?php endif; ?>
</div>
