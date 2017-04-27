<?php

use App\Models\HRIS\Holiday;
use App\Models\HRIS\HolidayLocation;
use App\Models\MasterFiles\Location;
use App\Payroll\Enum\HolidayType;
use Illuminate\Database\Seeder;

class HolidaySeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {

        $regularHolidays = [
            ["code" => "NEW_YR", "display_name" => "New Year's Day", "is_repeating" => true, "date" => "2017-01-01", "last_date_applicable" => "2016-01-01"],
            ["code" => "ANKGTNGN", "display_name" => "Araw ng Kagitignan", "is_repeating" => false, "date" => "2017-04-09", "last_date_applicable" => NULL],
            ["code" => "MAUN_TH_2017", "display_name" => "Maundy Thursday", "is_repeating" => false, "date" => "2017-04-13", "last_date_applicable" => NULL],
            ["code" => "GOOD_FRI_2017", "display_name" => "Good Friday", "is_repeating" => false, "date" => "2017-04-14", "last_date_applicable" => NULL],
            ["code" => "LABOR_DAY", "display_name" => "Labor Day", "is_repeating" => true, "date" => "2017-05-01", "last_date_applicable" => "2016-05-01"],
            ["code" => "IND_DAY", "display_name" => "Independence Day", "is_repeating" => true, "date" => "2017-06-12", "last_date_applicable" => "2016-06-12"],
            ["code" => "NH_DAY_2017", "display_name" => "National Heroes' Day", "is_repeating" => false, "date" => "2017-08-28", "last_date_applicable" => NULL],
            ["code" => "BONIF_DAY", "display_name" => "Bonifacio Day", "is_repeating" => true, "date" => "2017-11-30", "last_date_applicable" => "2016-11-30"],
            ["code" => "CHRISTMAS", "display_name" => "Christmas Day", "is_repeating" => true, "date" => "2017-12-25", "last_date_applicable" => "2016-12-25"],
            ["code" => "RIZAL_DAY", "display_name" => "Rizal Day", "is_repeating" => true, "date" => "2017-12-30", "last_date_applicable" => "2016-12-30"],
        ];

        for ($i = 0; $i < count($regularHolidays); $i ++) {
            $regularHolidays[$i]["is_active"]               = true;
            $regularHolidays[$i]["holiday_type_code"]       = HolidayType::REGULAR;
            $regularHolidays[$i]["applies_to_all_location"] = true;
        }

        $specialHolidays = [
            ["code" => "PROC_117", "display_name" => "Proclamation No. 117", "is_repeating" => false, "date" => "2017-01-02", "last_date_applicable" => NULL],
            ["code" => "CH_NY", "display_name" => "Chinese New Year", "is_repeating" => true, "date" => "2017-01-28", "last_date_applicable" => "2016-01-28"],
            ["code" => "EDSA", "display_name" => "EDSA Revolution Anniversary", "is_repeating" => true, "date" => "2017-02-25", "last_date_applicable" => "2016-02-25"],
            ["code" => "BLK_SAT", "display_name" => "Black Saturday", "is_repeating" => false, "date" => "2017-04-15", "last_date_applicable" => NULL],
            ["code" => "APEC_2017", "display_name" => "APEC Meeting", "is_repeating" => false, "date" => "2017-04-28", "last_date_applicable" => NULL],
            ["code" => "NINOY", "display_name" => "Ninoy Aquino Day", "is_repeating" => true, "date" => "2017-08-21", "last_date_applicable" => "2016-08-21"],
            ["code" => "ADD_2017", "display_name" => "Additional Special Non Working Holiday", "is_repeating" => false, "date" => "2017-10-31", "last_date_applicable" => NULL],
            ["code" => "ALL_SAINTS", "display_name" => "All Saints' Day", "is_repeating" => true, "date" => "2017-11-01", "last_date_applicable" => "2016-11-01"],
            ["code" => "LAST_DAY", "display_name" => "Last Day Of The Year", "is_repeating" => true, "date" => "2017-12-31", "last_date_applicable" => "2016-12-31"],
        ];

        for ($i = 0; $i < count($specialHolidays); $i ++) {
            $specialHolidays[$i]["is_active"]         = true;
            $specialHolidays[$i]["holiday_type_code"] = HolidayType::SPECIAL;

            //  APEC_2017 only applies to NCR
            $specialHolidays[$i]["applies_to_all_location"] = $specialHolidays[$i]["code"] != "APEC_2017";
        }

        Holiday::insert($regularHolidays);
        Holiday::insert($specialHolidays);

        $locations = Location::RegionCode("NCR")->get();
        foreach ($locations AS $location) {
            HolidayLocation::insert([
                "holiday_code"  => "APEC_2017",
                "location_code" => $location->code,
            ]);
        }
    }

}
