<?
$percent = 0.1;                 //процентная ставка
$res = $_POST["summ"];          //начальное значение
$date = $_POST["date"];         //начальная дата
if ($_POST["addition"] == "true") {                                                                             //проверка на дополнение
    for ($i = 0, $count = 12 * intval(substr($_POST["time"], 0, 1)); $i < $count; $i++) {
        $res += intval($_POST["summAddition"]) + $res*getDaysInMonth($date)*($percent/getDaysInYear($date));    //формула с дополнением
        $date = addMonth($date);
    }
    setlocale(LC_MONETARY, 'ru_RU.UTF-8');
    echo money_format('%i', $res) . "\n";
}
else {
    for ($i = 0, $count = 12 * intval(substr($_POST["time"], 0, 1)); $i < $count; $i++) {
        $res += $res*getDaysInMonth($date)*($percent/getDaysInYear($date));                                     //формула без дополнения
        $date = addMonth($date);
    }
    setlocale(LC_MONETARY, 'ru_RU.UTF-8');
    echo money_format('%i', $res) . "\n";
    //echo getDaysInMonth($_POST["date"]);
}

function getDaysInYear($str) {                                                                                  //возвращает количество дней в году
    $temp = strtotime($str);
    if ((date('Y', $temp) % 4 == 0 && (date('Y', $temp) % 100 != 0 || date('Y', $temp) % 400 == 0 ))) {
        return 366;
    } else {
        return 365;
    }
}
function getDaysInMonth($str) {                                                                                 //возвращает количество дней в месяце
    $temp = strtotime($str);
    return cal_days_in_month(CAL_GREGORIAN, date("m", $temp), date("Y", $temp));
}

function addMonth($time, $num=1) {                                                                              //прибавляет к текущей дате 1 месяц
    $temp = strtotime($time);
    $d=date('d',$temp);  
    $m=date('m',$temp);  
    $y=date('Y',$temp);  
    $m+=$num;
    if ($m>12) {
        $y+=1;
        $m=1;
    }
    while(true) {
        if (checkdate($m,$d,$y)){
            break;
        }
        $d--;
    }
    return date("m/d/Y", mktime(0,0,0,$m,$d,$y));
}
?>