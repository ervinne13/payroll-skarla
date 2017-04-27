<?php

namespace Tests\Feature;

use App\Models\HRIS\Holiday;
use DateTime;
use Tests\TestCase;

class HolidaysTest extends TestCase {

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testApplicableHolidays() {
        $from = new DateTime("2017-04-26");
        $to   = new DateTime("2017-05-10");

        $holidays = Holiday::ApplicableOnRange($from, $to)->get();

        $actualHolidays = ["LABOR_DAY", "APEC_2017"];

        $this->assertEquals(count($actualHolidays), count($holidays));

        foreach ($holidays AS $holiday) {
            $this->assertTrue(in_array($holiday->code, $actualHolidays));
        }
    }

}
