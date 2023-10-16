<?php
class Calendar {
    public function generateCalendar($year, $month) {
        if (!is_numeric($year) || !is_numeric($month) || $year < 0 || $year > 3999 ) {
            return "Invalid input. Please provide a valid month and year.";
        }
    
        $html = '<table class="calendar">';
        $html .= '<caption>' . date('F Y', mktime(0, 0, 0, $month, 1, $year)) . '</caption>';
        $html .= '<tr><th>Sun</th><th>Mon</th><th>Tue</th><th>Wed</th><th>Thu</th><th>Fri</th><th>Sat</th></tr>';
    
        $firstDay = date('w', mktime(0, 0, 0, $month, 1, $year));
        $daysInMonth = date('t', mktime(0, 0, 0, $month, 1, $year));
        $currentDay = 1;
    
        for ($i = 0; $i < 6; $i++) {
            $html .= '<tr>';
            for ($j = 0; $j < 7; $j++) {
                if (($i === 0 && $j < $firstDay) || $currentDay > $daysInMonth) {
                    $html .= '<td></td>';
                } else {
                    $html .= '<td>' . $currentDay . '</td>';
                    $currentDay++;
                }
            }
            $html .= '</tr>';
            if ($currentDay > $daysInMonth) {
                break;
            }
        }
    
        $html .= '</table>';
        return $html;
    }
    
}
?>
