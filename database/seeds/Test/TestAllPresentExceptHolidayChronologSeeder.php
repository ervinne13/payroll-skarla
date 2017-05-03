<?php

use App\Models\Timekeeping\Chronolog;
use Illuminate\Database\Seeder;

class TestAllPresentExceptHolidayChronologSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {

        //  May 1 = holiday
        $jesusChronoLog = [
            ["employee_code" => '20170120001', "entry_date" => '2017-04-26', "time_in" => '08:00:00', "time_out" => '17:00:00'],
            ["employee_code" => '20170120001', "entry_date" => '2017-04-27', "time_in" => '08:00:00', "time_out" => '17:00:00'],
            ["employee_code" => '20170120001', "entry_date" => '2017-04-28', "time_in" => '08:00:00', "time_out" => '17:00:00'],
            ["employee_code" => '20170120001', "entry_date" => '2017-04-29', "time_in" => '08:00:00', "time_out" => '17:00:00'],
            //
            ["employee_code" => '20170120001', "entry_date" => '2017-05-02', "time_in" => '08:00:00', "time_out" => '17:00:00'],
            ["employee_code" => '20170120001', "entry_date" => '2017-05-03', "time_in" => '08:00:00', "time_out" => '17:00:00'],
            ["employee_code" => '20170120001', "entry_date" => '2017-05-04', "time_in" => '08:00:00', "time_out" => '17:00:00'],
            ["employee_code" => '20170120001', "entry_date" => '2017-05-05', "time_in" => '08:00:00', "time_out" => '17:00:00'],
            ["employee_code" => '20170120001', "entry_date" => '2017-05-08', "time_in" => '08:00:00', "time_out" => '17:00:00'],
            ["employee_code" => '20170120001', "entry_date" => '2017-05-09', "time_in" => '08:00:00', "time_out" => '17:00:00'],
            ["employee_code" => '20170120001', "entry_date" => '2017-05-10', "time_in" => '08:00:00', "time_out" => '17:00:00'],
        ];

        Chronolog::insert($jesusChronoLog);
    }

}
