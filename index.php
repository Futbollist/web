<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="refresh" content="3">
</head>
<body>
    <?php
        $index = ["name", "id", "password", "city", "sex"]; //Массив ключей массива $people
        $number = 0; //Число строк, выведенных в таблицу

        $people = [
            [
                "name" => ["Имя", "90", "LightBlue"], 
                "id" => ["ID", "5", "SkyBlue"],
                "password" => ["Пароль", "90", "DeepSkyBlue"],
                "city" => ["Город", "100", "blue"],
                "sex" => ["Пол", "35", "DarkBlue"]
            ],
        ];

        registration("Максим", 2, 2113, "Kirov", "male");
        registration("Вася", 3, 213, "Moscow", "male");
        registration("Ваня", 4, 123, "Kiev", "male");
        registration("Кирилл", 5, 1231, "Minsk", "male");
        registration("Вова", 6, 2512, "Kaluga", "male");
        registration("Максим", 7, 212, "Piter", "male");
        registration("Алексей", 8, 245, "Sergi", "male");
        registration("Сергей", 9, 235, "Tagil", "male");
        registration("Герман", 10, 372, "Saratov", "male");

        //Подключаем шаблоны
        $page = $_GET['page'];
        if (!isset($page)) {
            require('main.php');
            drawArray($people);
        }elseif ($page == 'persons'){
            $name = $_GET['name'];
            $person = [];
            foreach ($people as $man){
                if ($man['name'] == $name){
                    $person = $man;
                    break;
                }
            }
            require('person.php');
            drawArray($people);
        }

        function registration($name, $id, $password, $city, $sex)
        {
            global $people, $index;
            $people[] = array(
                $index[0] => $name, 
                $index[1] => $id, 
                $index[2] => $password, 
                $index[3] => $city, 
                $index[4] => $sex
                );
        }

        function drawArray($arr)
        {   
            foreach ($arr[0] as $key => $cfg){
                $width = $cfg[1].'px';
                $boderColor = $cfg[2];
                echo "<style type=\"text/css\">
                .$key{ 
                     width: $width; 
                     border: 1px solid $boderColor;
                     text-align: center;
                }
                </style>";
            }
        }
    ?>
</body>
</html>