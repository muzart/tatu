<table class=" table table-bordered" style="border: 1px solid black">
    <tr>
        <td rowspan="2" style="width: 1%">Fan nomi,fakultet,guruh,guruh(talabalar soni)</td>
        <td colspan="12" style="text-align: center">O'quv ishlari turi</td>
    </tr>

    <tr>
        <td>Ma'ruza</td>
        <td>Labaratoriya mashg'uloti</td>
        <td>Amaliy(seminar) mashg'uloti</td>
        <td>Uzlashtirish nazorati(reyting)</td>
        <td>Magistrantga rahbarlik</td>
        <td>Kurs loyihasiga rahbarlik</td>
        <td>Bitiruv ishiga rahbarlik</td>
        <td>KIXI ga rahbarlik</td>
        <td>Malakaviy ishga rahbarlik</td>
        <td>DAK ishida ishtirok qilish</td>
        <td>Ma'ruza va lab.ishlar.kayta</td>
        <td>Jami(soat)</td>
    </tr>
    <tr>

        <td colspan="13" style="text-align: center">Semestr</td>
    </tr>
    <tr>
        <td rowspan="2"></td>
        <td rowspan="12"></td>
        <td rowspan="12"></td>
        <td rowspan="12"></td>
        <td rowspan="12"></td>
        <td rowspan="12"></td>
        <td rowspan="12"></td>
        <td rowspan="12"></td>
        <td rowspan="12"></td>
        <td rowspan="12"></td>
        <td rowspan="12"></td>
        <td rowspan="12"></td>
        <td rowspan="12"></td>
    </tr>
    <?php
//         var_dump(\app\models\Groups::getIdGroup());

         $S=\app\helpers\StudentNumberHelper::getStudentNumberByGroup();
         foreach ($S as $item)
         {
             echo var_dump($item),'<br>';
         }

         $rr=\app\helpers\StudentNumberHelper::getNumber();
         foreach ($rr as $gg)
         {
             echo var_dump($gg),'<br>';
         }


    ?>
</table>

