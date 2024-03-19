<?php

namespace Database\Seeders\Organization;

use App\Models\User\OrgType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrgTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        OrgType::insert([
            [
                'title' => "sromik kollan",
                'description' => "sromik kollan is an organization"
            ],
            [
                'title' => "engineers forum",
                'description' => "engineers forum is an organization"
            ],
            [
                'title' => "doctors forum",
                'description' => "doctors forum is an organization"
            ],
        ]);
    }
}
