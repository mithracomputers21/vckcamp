<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            [
                'id'    => 1,
                'title' => 'auth_profile_edit',
            ],
            [
                'id'    => 2,
                'title' => 'user_management_access',
            ],
            [
                'id'    => 3,
                'title' => 'permission_create',
            ],
            [
                'id'    => 4,
                'title' => 'permission_edit',
            ],
            [
                'id'    => 5,
                'title' => 'permission_show',
            ],
            [
                'id'    => 6,
                'title' => 'permission_delete',
            ],
            [
                'id'    => 7,
                'title' => 'permission_access',
            ],
            [
                'id'    => 8,
                'title' => 'role_create',
            ],
            [
                'id'    => 9,
                'title' => 'role_edit',
            ],
            [
                'id'    => 10,
                'title' => 'role_show',
            ],
            [
                'id'    => 11,
                'title' => 'role_delete',
            ],
            [
                'id'    => 12,
                'title' => 'role_access',
            ],
            [
                'id'    => 13,
                'title' => 'user_create',
            ],
            [
                'id'    => 14,
                'title' => 'user_edit',
            ],
            [
                'id'    => 15,
                'title' => 'user_show',
            ],
            [
                'id'    => 16,
                'title' => 'user_delete',
            ],
            [
                'id'    => 17,
                'title' => 'user_access',
            ],
            [
                'id'    => 18,
                'title' => 'user_alert_create',
            ],
            [
                'id'    => 19,
                'title' => 'user_alert_edit',
            ],
            [
                'id'    => 20,
                'title' => 'user_alert_show',
            ],
            [
                'id'    => 21,
                'title' => 'user_alert_delete',
            ],
            [
                'id'    => 22,
                'title' => 'user_alert_access',
            ],
            [
                'id'    => 23,
                'title' => 'setting_access',
            ],
            [
                'id'    => 24,
                'title' => 'state_create',
            ],
            [
                'id'    => 25,
                'title' => 'state_edit',
            ],
            [
                'id'    => 26,
                'title' => 'state_show',
            ],
            [
                'id'    => 27,
                'title' => 'state_delete',
            ],
            [
                'id'    => 28,
                'title' => 'state_access',
            ],
            [
                'id'    => 29,
                'title' => 'district_create',
            ],
            [
                'id'    => 30,
                'title' => 'district_edit',
            ],
            [
                'id'    => 31,
                'title' => 'district_show',
            ],
            [
                'id'    => 32,
                'title' => 'district_delete',
            ],
            [
                'id'    => 33,
                'title' => 'district_access',
            ],
            [
                'id'    => 34,
                'title' => 'union_create',
            ],
            [
                'id'    => 35,
                'title' => 'union_edit',
            ],
            [
                'id'    => 36,
                'title' => 'union_show',
            ],
            [
                'id'    => 37,
                'title' => 'union_delete',
            ],
            [
                'id'    => 38,
                'title' => 'union_access',
            ],
            [
                'id'    => 39,
                'title' => 'panchayat_create',
            ],
            [
                'id'    => 40,
                'title' => 'panchayat_edit',
            ],
            [
                'id'    => 41,
                'title' => 'panchayat_show',
            ],
            [
                'id'    => 42,
                'title' => 'panchayat_delete',
            ],
            [
                'id'    => 43,
                'title' => 'panchayat_access',
            ],
            [
                'id'    => 44,
                'title' => 'habitation_create',
            ],
            [
                'id'    => 45,
                'title' => 'habitation_edit',
            ],
            [
                'id'    => 46,
                'title' => 'habitation_show',
            ],
            [
                'id'    => 47,
                'title' => 'habitation_delete',
            ],
            [
                'id'    => 48,
                'title' => 'habitation_access',
            ],
            [
                'id'    => 49,
                'title' => 'assembly_create',
            ],
            [
                'id'    => 50,
                'title' => 'assembly_edit',
            ],
            [
                'id'    => 51,
                'title' => 'assembly_show',
            ],
            [
                'id'    => 52,
                'title' => 'assembly_delete',
            ],
            [
                'id'    => 53,
                'title' => 'assembly_access',
            ],
            [
                'id'    => 54,
                'title' => 'parliment_create',
            ],
            [
                'id'    => 55,
                'title' => 'parliment_edit',
            ],
            [
                'id'    => 56,
                'title' => 'parliment_show',
            ],
            [
                'id'    => 57,
                'title' => 'parliment_delete',
            ],
            [
                'id'    => 58,
                'title' => 'parliment_access',
            ],
            [
                'id'    => 59,
                'title' => 'camp_create',
            ],
            [
                'id'    => 60,
                'title' => 'camp_edit',
            ],
            [
                'id'    => 61,
                'title' => 'camp_show',
            ],
            [
                'id'    => 62,
                'title' => 'camp_delete',
            ],
            [
                'id'    => 63,
                'title' => 'camp_access',
            ],
            [
                'id'    => 64,
                'title' => 'member_create',
            ],
            [
                'id'    => 65,
                'title' => 'member_edit',
            ],
            [
                'id'    => 66,
                'title' => 'member_show',
            ],
            [
                'id'    => 67,
                'title' => 'member_delete',
            ],
            [
                'id'    => 68,
                'title' => 'member_access',
            ],
        ];

        Permission::insert($permissions);
    }
}
