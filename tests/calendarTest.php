<?php

require_once __DIR__ . '/../src/calendarClass.php';

use PHPUnit\Framework\TestCase;

class CalendarTest extends TestCase {
    public function testGenerateCalendarForJanuary2023() {
        $calendar = new Calendar();
        $html = $calendar->generateCalendar(2023, 1);

        $this->assertStringContainsString('January 2023', $html);
        $this->assertStringContainsString('<td>1</td>', $html);
    }

    public function testGenerateCalendarForFebruaryNonLeapYear() {
        $calendar = new Calendar();
        $html = $calendar->generateCalendar(2022, 2);
        $this->assertStringContainsString('February 2022', $html);
        $this->assertStringContainsString('<td>1</td>', $html);
        $this->assertStringContainsString('<td>28</td>', $html);
    }

    public function testGenerateCalendarForFebruaryLeapYear() {
        $calendar = new Calendar();
        $html = $calendar->generateCalendar(2020, 2);
        $this->assertStringContainsString('February 2020', $html);
        $this->assertStringContainsString('<td>1</td>', $html);
        $this->assertStringContainsString('<td>29</td>', $html);
    }

    public function testGenerateCalendarForDecember2023() {
        $calendar = new Calendar();
        $html = $calendar->generateCalendar(2023, 12);

        $this->assertStringContainsString('December 2023', $html);
        $this->assertStringContainsString('<td>1</td>', $html);
        $this->assertStringContainsString('<td>31</td>', $html);
    }

    public function testGenerateCalendarForNegativeYear() {
        $calendar = new Calendar();
        $html = $calendar->generateCalendar(-2023, 4);
        $this->assertEquals('Invalid input. Please provide a valid month and year.', $html);
    }
}

?>