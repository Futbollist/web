<a href="/">Главная<br></a>
<table>
<?php
	//Вывод шапки таблицы
    echo "<tr><th></th>";
    foreach ($people[0] as $key => $cfg){
        echo "<th class='$key'>$cfg[0]</th>";
	}
    echo '</tr>';

    //Вывод строки данных пользователя
    echo "<tr><th class='sex'>1</th>";
    
    foreach ($person as $key => $p){
        echo "<td class='$key'>$p</td>";
    }
    echo '</tr>';
?>
</table>