<?php


$periodo = $_GET['periodo'];
$dispensa = $_GET['folgas'];
$dispensa = explode(',', $dispensa);
$mes = $_GET['mes'];
$ano = date('Y');

$dias = cal_days_in_month(CAL_GREGORIAN, $mes, $ano);
$date = date('d-m-y');



function diasUteis($dias, $date, $dispensa, $periodo,$mes)
{
        
    for ($i = 1; $i <= $dias; $i++) {
        $date = date($i . '-m-Y');

        //finais de semana
        if (isWeekend2($date)>= 6) {
            echo "<tr>";
            echo "<td>";
                
            echo $i;
            
            $escolha = rand(1, 2);
          
            if ($escolha == 1) {
                $hora = $manha = [
                    'entrada' => '08:0' . rand(0, 4),
                    'saida' => '14:0' . rand(0, 4),
                ];
            } else {
                $hora = $manhaExtra = [
                    'entrada' => '07:5' . rand(6, 9),
                    'saida' => '14:0' . rand(0, 5),
                ];
            }
        
            echo "<td>";
            if(isWeekend2($date)== 6){
                echo 'SABADO';
            }elseif(isWeekend2($date)==7){
                echo 'DOMINGO';
            }
            echo ' ';
            echo "</td>";
            echo "<td>";
            echo "</td>";
            echo "<td>";
            echo "</td>";
            echo "<td>";
            if(isWeekend2($date)== 6){
                echo 'SABADO';
            }elseif(isWeekend2($date)==7){
                echo 'DOMINGO';
            }
            echo "</td>";
            echo "</td>";
            echo "</tr>";
        }

        // dias da semana
        if (!isWeekend($date)) {
            echo "<tr>";
            echo "<td>";
            switch($mes){
                case 1: array_push($dispensa, "1"); //janeiro
                        $dispensa;
                        break;
                case 2:$dispensa;break; // fevereiro
                case 3: $dispensa;break; //março
                case 4: array_push($dispensa, "21");// abril
                $dispensa;break;
                case 5: array_push($dispensa, "1");//maio
                $dispensa;;break;
                case 6: array_push($dispensa, "8");//junho
                $dispensa;;break;
                case 7: array_push($dispensa, "1");//julho
                $dispensa;;break;
                case 8: array_push($dispensa, "1");//agosto
                $dispensa;;break;
                case 9: array_push($dispensa, "7");//setembro
                $dispensa;;break;
                case 10: array_push($dispensa, "12");//outubro
                $dispensa;;break;
                case 11: array_push($dispensa, "2", "15");//novembro
                $dispensa;;break;
                case 12: array_push($dispensa, "1");//dezembro
                $dispensa;;break;
            }
            if (in_array($i, $dispensa)) { 
                echo $i;
                echo "<br>";
                echo "<td>";
                echo ' ';
                echo "</td>";
                echo "<td>";
                echo "</td>";
                echo "<td>";
                echo "</td>";
                echo "<td>";
                echo ' ';
                echo "</td>";
                echo "</td>";
                echo "</tr>";
            }else{
                echo $i;
                echo "<br>";
                $escolha = rand(1, 2);
                if($periodo == 'manha'){
                    if ($escolha == 1) {
                        $hora = $manha = [
                            'entrada' => '08:0' . rand(0, 4),
                            'saida' => '14:0' . rand(0, 4),
                        ];
                    } else {
                        $hora = $manhaExtra = [
                            'entrada' => '07:5' . rand(6, 9),
                            'saida' => '14:0' . rand(0, 5),
                        ];
                    }
                }else if($periodo == 'tarde'){
                    if ($escolha == 1) {
                        $hora = $manha = [
                            'entrada' => '11:0' . rand(0, 4),
                            'saida' => '17:0' . rand(0, 4),
                        ];
                    } else {
                        $hora = $manhaExtra = [
                            'entrada' => '10:5' . rand(6, 9),
                            'saida' => '17:0' . rand(0, 5),
                        ];
                    }
                }
                echo "<td>";
                echo $hora['entrada'];
                echo "</td>";
                echo "<td>";
                echo "</td>";
                echo "<td>";
                echo "</td>";
                echo "<td>";
                echo $hora['saida'];
                echo "</td>";
                echo "</td>";
                echo "</tr>";
            }

        }
    }
}

function getDateAsDateTime($date)
{
    return is_string($date) ? new DateTime($date) : $date;
}
function isWeekend($date)
{
    $inputDate = getDateAsDateTime($date);
    return $inputDate->format('N') >= 6;
}

function isWeekend2($date)
{
    $inputDate = getDateAsDateTime($date);
    return $inputDate->format('N');
}