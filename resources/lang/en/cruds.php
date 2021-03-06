<?php

return [
    'userManagement' => [
        'title'          => 'User management',
        'title_singular' => 'User management',
    ],
    'permission' => [
        'title'          => 'Permissions',
        'title_singular' => 'Permission',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'title'             => 'Title',
            'title_helper'      => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'role' => [
        'title'          => 'Roles',
        'title_singular' => 'Role',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => ' ',
            'title'              => 'Title',
            'title_helper'       => ' ',
            'permissions'        => 'Permissions',
            'permissions_helper' => ' ',
            'created_at'         => 'Created at',
            'created_at_helper'  => ' ',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => ' ',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => ' ',
        ],
    ],
    'user' => [
        'title'          => 'Users',
        'title_singular' => 'User',
        'fields'         => [
            'id'                               => 'ID',
            'id_helper'                        => ' ',
            'name'                             => 'Name',
            'name_helper'                      => ' ',
            'email'                            => 'Email',
            'email_helper'                     => ' ',
            'email_verified_at'                => 'Email verified at',
            'email_verified_at_helper'         => ' ',
            'password'                         => 'Password',
            'password_helper'                  => ' ',
            'roles'                            => 'Roles',
            'roles_helper'                     => ' ',
            'remember_token'                   => 'Remember Token',
            'remember_token_helper'            => ' ',
            'locale'                           => 'Locale',
            'locale_helper'                    => ' ',
            'created_at'                       => 'Created at',
            'created_at_helper'                => ' ',
            'updated_at'                       => 'Updated at',
            'updated_at_helper'                => ' ',
            'deleted_at'                       => 'Deleted at',
            'deleted_at_helper'                => ' ',
            'state'                            => 'State',
            'state_helper'                     => ' ',
            'district'                         => 'District',
            'district_helper'                  => ' ',
            'block'                            => 'Block',
            'block_helper'                     => ' ',
            'panchayat'                        => 'Panchayat',
            'panchayat_helper'                 => ' ',
            'habitation'                       => 'Habitation',
            'habitation_helper'                => ' ',
            'legislative_assembly_name'        => 'Legislative Assembly Name',
            'legislative_assembly_name_helper' => ' ',
            'parliament_assemply'              => 'Parliament Assemply Name',
            'parliament_assemply_helper'       => ' ',
        ],
    ],
    'userAlert' => [
        'title'          => 'User Alerts',
        'title_singular' => 'User Alert',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'message'           => 'Message',
            'message_helper'    => ' ',
            'link'              => 'Link',
            'link_helper'       => ' ',
            'users'             => 'Users',
            'users_helper'      => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'setting' => [
        'title'          => 'Settings',
        'title_singular' => 'Setting',
    ],
    'state' => [
        'title'          => 'மாநிலங்கள்',
        'title_singular' => 'மாநிலங்கள்',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'state_name'        => 'மாநிலத்தின் பெயர்',
            'state_name_helper' => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'district' => [
        'title'          => 'மாவட்டங்கள்',
        'title_singular' => 'மாவட்டங்கள்',
        'fields'         => [
            'id'                   => 'ID',
            'id_helper'            => ' ',
            'district_name'        => 'மாவட்டத்தின் பெயர்',
            'district_name_helper' => ' ',
            'state'                => 'மாநிலத்தின் பெயர்',
            'state_helper'         => ' ',
            'created_at'           => 'Created at',
            'created_at_helper'    => ' ',
            'updated_at'           => 'Updated at',
            'updated_at_helper'    => ' ',
            'deleted_at'           => 'Deleted at',
            'deleted_at_helper'    => ' ',
        ],
    ],
    'union' => [
        'title'          => 'ஒன்றியங்கள்',
        'title_singular' => 'ஒன்றியங்கள்',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'block_name'        => 'ஒன்றியத்தின் பெயர்',
            'block_name_helper' => ' ',
            'district'          => 'மாவட்டத்தின் பெயர்',
            'district_helper'   => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'panchayat' => [
        'title'          => 'கிராமங்கள்',
        'title_singular' => 'கிராமங்கள்',
        'fields'         => [
            'id'                    => 'ID',
            'id_helper'             => ' ',
            'panchayat_name'        => 'கிராமத்தின் பெயர்',
            'panchayat_name_helper' => ' ',
            'block'                 => 'ஒன்றியத்தின் பெயர்',
            'block_helper'          => ' ',
            'created_at'            => 'Created at',
            'created_at_helper'     => ' ',
            'updated_at'            => 'Updated at',
            'updated_at_helper'     => ' ',
            'deleted_at'            => 'Deleted at',
            'deleted_at_helper'     => ' ',
        ],
    ],
    'habitation' => [
        'title'          => 'ஊர்கள்',
        'title_singular' => 'ஊர்கள்',
        'fields'         => [
            'id'                     => 'ID',
            'id_helper'              => ' ',
            'habitation_name'        => 'ஊரின் பெயர்',
            'habitation_name_helper' => ' ',
            'panchayat'              => 'கிராமத்தின் பெயர்',
            'panchayat_helper'       => ' ',
            'created_at'             => 'Created at',
            'created_at_helper'      => ' ',
            'updated_at'             => 'Updated at',
            'updated_at_helper'      => ' ',
            'deleted_at'             => 'Deleted at',
            'deleted_at_helper'      => ' ',
        ],
    ],
    'assembly' => [
        'title'          => 'சட்டமன்ற தொகுதிகள்',
        'title_singular' => 'சட்டமன்ற தொகுதிகள்',
        'fields'         => [
            'id'                   => 'ID',
            'id_helper'            => ' ',
            'assembly_name'        => 'சட்டமன்ற தொகுதியின் பெயர்',
            'assembly_name_helper' => ' ',
            'district'             => 'மாநிலத்தின் பெயர்',
            'district_helper'      => ' ',
            'created_at'           => 'Created at',
            'created_at_helper'    => ' ',
            'updated_at'           => 'Updated at',
            'updated_at_helper'    => ' ',
            'deleted_at'           => 'Deleted at',
            'deleted_at_helper'    => ' ',
        ],
    ],
    'parliment' => [
        'title'          => 'பாராளுமன்ற தொகுதிகள்',
        'title_singular' => 'பாராளுமன்ற தொகுதிகள்',
        'fields'         => [
            'id'                             => 'ID',
            'id_helper'                      => ' ',
            'parliment_assembly_name'        => 'பாராளுமன்ற தொகுதியின் பெயர்',
            'parliment_assembly_name_helper' => ' ',
            'district'                       => 'மாவட்டத்தின் பெயர்',
            'district_helper'                => ' ',
            'created_at'                     => 'Created at',
            'created_at_helper'              => ' ',
            'updated_at'                     => 'Updated at',
            'updated_at_helper'              => ' ',
            'deleted_at'                     => 'Deleted at',
            'deleted_at_helper'              => ' ',
        ],
    ],
    'camp' => [
        'title'          => 'முகாம்கள்',
        'title_singular' => 'முகாம்கள்',
        'fields'         => [
            'id'                          => 'ID',
            'id_helper'                   => ' ',
            'camp_name'                   => 'முகாம் பெயர்',
            'camp_name_helper'            => ' ',
            'state'                       => 'மாநிலம்',
            'state_helper'                => ' ',
            'district'                    => 'மாவட்டம்',
            'district_helper'             => ' ',
            'block_name'                  => 'வட்டம்',
            'block_name_helper'           => ' ',
            'panchayat_name'              => 'கிராமம்',
            'panchayat_name_helper'       => ' ',
            'habitation_name'             => 'ஊர் பெயர்',
            'habitation_name_helper'      => ' ',
            'legislative_assembly'        => 'சட்டமன்ற தொகுதி',
            'legislative_assembly_helper' => ' ',
            'parliament_assembly'         => 'பாராளுமன்ற தொகுதி',
            'parliament_assembly_helper'  => ' ',
            'created_at'                  => 'Created at',
            'created_at_helper'           => ' ',
            'updated_at'                  => 'Updated at',
            'updated_at_helper'           => ' ',
            'deleted_at'                  => 'Deleted at',
            'deleted_at_helper'           => ' ',
            'owner'                       => 'Owner',
            'owner_helper'                => ' ',
            'members'                     => 'உறுப்பினர்கள்',
            'members_helper'              => ' ',
        ],
    ],
    'member' => [
        'title'          => 'உறுப்பினர்கள்',
        'title_singular' => 'உறுப்பினர்கள்',
        'fields'         => [
            'id'                    => 'ID',
            'id_helper'             => ' ',
            'name'                  => 'பெயர்',
            'name_helper'           => ' ',
            'father_name'           => 'தந்தை பெயர்',
            'father_name_helper'    => ' ',
            'mobile_no'             => 'கைபேசி எண்',
            'mobile_no_helper'      => ' ',
            'address'               => 'முகவரி',
            'address_helper'        => ' ',
            'document_proof'        => 'ஆவண ஆதாரம்',
            'document_proof_helper' => ' ',
            'document_photo'        => 'ஆவண புகைப்படம்',
            'document_photo_helper' => ' ',
            'created_at'            => 'Created at',
            'created_at_helper'     => ' ',
            'updated_at'            => 'Updated at',
            'updated_at_helper'     => ' ',
            'deleted_at'            => 'Deleted at',
            'deleted_at_helper'     => ' ',
            'owner'                 => 'Owner',
            'owner_helper'          => ' ',
            'post_name'             => 'பொறுப்பு',
            'post_name_helper'      => ' ',
        ],
    ],
];
