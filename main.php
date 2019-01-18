<a href="/">Главная</a>
<table>
<?php
    foreach ($people as $person) {
        //Выведение названий столбцов
        if($number == 0){
            echo "<tr><th></th>";
            //Обращаемся к массиву, в котором находятся параметры
            foreach ($person as $key => $value){
                echo "<th class='$key'>$value[0]</th>";
            }
            echo '</tr>';
            ++$number;
            continue;
        }
        echo "<tr><th class='sex'>".$number++."</th>"; //Выведение номера строки
        foreach ($person as $keyPerson => $value)
            if ($keyPerson == 'name'){
                echo "<td class='$keyPerson'><a href=\"index.php?page=persons&name=$value\">$value</a></td>";
            }                        
            else{
                echo "<td class='$keyPerson'>$value</td>";
            }
        echo '</tr>';
    }
?>
</table>
