<?php
use yii\helpers\Html;
$summa=0;
if (count($model)):?>
<table class="table table-bordered" style="border: 1px solid black">
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
    <tr>
        <td>1.00</td>
        <td>Gumanitar va ijtimoiy-iqtisodiy fanlar</td>
        <td><?=$summa?></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
<?php (double)$i=0; foreach ($model as $item):$i++;?>
    <tr>
        <td>1.0<?=$i;?></td>
        <td><?=$item->name?></td>
        <td><?=$summa=$item->lecture_hour+$item->practice_hour+$item->practice_hour+$item->lab_hour+$item->seminar+$item->independent_hour?></td>
        <td></td>
        <td><?=$item->lecture_hour+$item->practice_hour+$item->practice_hour+$item->lab_hour+$item->seminar?></td>
        <td><?=$item->lecture_hour?></td>
        <td><?=$item->practice_hour?></td>
        <td><?=$item->lab_hour?></td>
        <td><?=$item->seminar?></td>
        <td></td>
        <td><?=$item->independent_hour?></td>
        <td><?=$item->s1?></td>
        <td><?=$item->s2?></td>
        <td><?=$item->s3?></td>
        <td><?=$item->s4?></td>
        <td><?=$item->s5?></td>
        <td><?=$item->s6?></td>
        <td><?=$item->s7?></td>
        <td><?=$item->s8?></td>

    </tr>
    <?php endforeach;?>
    </table>
<?php endif;?>