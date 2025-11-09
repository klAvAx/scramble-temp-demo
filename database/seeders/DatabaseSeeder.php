<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table("someData")
            ->insert([
                [
                    "someString" => "Foo",
                    "someNumber" => 42
                ],
                [
                    "someString" => "Bar",
                    "someNumber" => 69
                ]
            ]);
    }
}
