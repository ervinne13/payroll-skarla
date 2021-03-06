<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        Eloquent::unguard();

        if (App::environment() === 'development' || App::environment() === 'local') {
//            echo "\nSeeding Development Seeders\n";
//            echo "\n=================================\n\n";
            $this->developmentSeeder();
        } else if (App::environment() === 'testing') {
//            echo "\nSeeding Test Seeders\n";
//            echo "\n=================================\n\n";
            $this->testingSeeder();
        } else {
            echo "Unsupported environment: " . App::environment();
        }
    }

    public function developmentSeeder() {
        try {

            DB::beginTransaction();

            $tables = [
                //  security
                "security.user_role",
                "security.access_control_list",
                "security.access_control",
                "security.role",
                "user_account",
                // module
                "module",
                "number_series",
                //  computation tables & tax
                "payroll.tax_category",
                "payroll.monthly_tax_table",
                "payroll.annual_tax_table",
                "payroll.sss_table",
                "payroll.philhealth_table",
                //  HRIS                
                "hris.employee_payroll_item_amount",
                "hris.holiday_location",
                "hris.holiday",
                "hris.policy_payroll_item",
                "hris.policy",
                //
                "hris.position_level",
                "hris.position",
                //
                "bank",
                //
                "hris.work_schedule_shift",
                "hris.employee_shift_adjustment",
                "hris.employee_work_schedule",
                "hris.work_schedule",
                "hris.shift",
                //  payroll               
                "payroll.chrono_log",
                "payroll.chrono_log_for_correction",
                "payroll.payroll_payment_method",
                "payroll.employee_payroll_summary",
                "payroll.employee_overtime_summary",
                "payroll.payroll_entry",
                "payroll.payroll_type",
                "payroll.payroll_item",
                "payroll.payroll",
                //
                "hris.employee",
                //
                "user_location",
                "location",
                "city",
                "region",
                "cost_profit_center",
                "company",
            ];

            DB::statement('TRUNCATE TABLE ' . implode(',', $tables) . ';');

            $this->call(CompaniesSeeder::class);
            $this->call(LocationsSeeder::class);

            $this->call(ModulesSeeder::class);
            $this->call(DefaultRolesAndUsersSeeder::class);

            $this->call(ShiftsSeeder::class);
            $this->call(WorkScheduleSeeder::class);

            //  Payroll Setup
            $this->call(TaxCategorySeeder::class);
            $this->call(PayrollTypeSeeder::class);
            $this->call(PayrollItemSeeder::class);
            $this->call(PoliciesSeeder::class);
            $this->call(ComputationTablesSeeder::class);

            $this->call(PositionsSeeder::class);

            $this->call(EmployeeSeeder::class);

            $this->call(HolidaySeeder::class);

            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();
            throw $e;
        }
    }

    public function testingSeeder() {
        try {
            DB::beginTransaction();

            $tables = [
                "payroll.chrono_log"
            ];

            DB::statement('TRUNCATE TABLE ' . implode(',', $tables) . ';');

            //  Under test
            $this->call(TestAllPresentExceptHolidayChronologSeeder::class);
            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();
            throw $e;
        }
    }

}
