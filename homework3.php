<?php
$month;
$month = (int)readline("Введите порядковый номер месяца: ");
if ($month < 1 || $month > 12) {
    echo "Некорректный номер месяца. Пожалуйста, введите число от 1 до 12.";
}else if($month===1 || $month===3 || $month===5 || $month===7 || $month===8 || $month===10 || $month===12)
{
    echo "в этом месяце 31 день";
}else if ($month===2){
echo "в этом месяце 28 дней";
}else if ($month===4 || $month===6 || $month===9 || $month===11){
    echo "в этом месяце 30 дней";
}
