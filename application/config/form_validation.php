<?php

    defined('BASEPATH') or exit('Direct access script is not allowed');

    $config['data_mitra_tambah'] = [
        [
            'field' => 'in_nama',
            'label' => 'Nama',
            'rules' => 'required|trim|alpha_numeric_spaces|max_length[200]',
            'error' => [
                'alpha_numeric_spaces' => '%s hanya terdiri dari huruf, angka, dan spasi',
                'max_length' => '%s melebiihi batas karakter (200)'
            ]
        ],
        [
            'field' => 'in_ktp',
            'label' => 'KTP',
            'rules' => 'required|is_natural|trim|max_length[50]',
            'error' => [
                'is_natural' => '%s hanya terdiri dari angka',
                'max_length' => '%s melebihi batas karakter (50)'
            ]
        ],
        [
            'field' => 'in_alamat',
            'label' => 'Alamat',
            'rules' => 'trim',
        ],
        [
            'field' => 'in_no_mitra',
            'label' => 'Nomor Mitra',
            'rules' => 'required|trim|is_natural|max_length[50]',
            'errors' => [
                'is_natural' => '%s hanya terdiri dari angka',
                'max_length' => '%s melebihi batas karakter (50)'
            ],
        ],
        [
            'field' => 'in_no_hp',
            'label' => 'Nomor handphone',
            'rules' => 'trim|is_natural|max_length[20]',
            'errors' => [
                'is_natural' => '%s hanya terdiri dari angka',
                'max_length' => '%s melebihi batas karakter (20)'
            ],
        ],
    ];

    $config['data_mitra_edit'] = [
        [
            'field' => 'ed_nama',
            'label' => 'Nama',
            'rules' => 'required|trim|alpha_numeric_spaces|max_length[200]',
            'error' => [
                'alpha_numeric_spaces' => '%s hanya terdiri dari huruf, angka, dan spasi',
                'max_length' => '%s melebihi batas karakter (200)'
            ]
        ],
        [
            'field' => 'ed_ktp',
            'label' => 'KTP',
            'rules' => 'required|is_natural|trim|max_length[50]',
            'error' => [
                'is_natural' => '%s hanya terdiri dari angka',
                'max_length' => '%s melebihi batas karakter (50)'
            ]
        ],
        [
            'field' => 'ed_alamat',
            'label' => 'Alamat',
            'rules' => 'trim',
        ],
        [
            'field' => 'ed_no_mitra',
            'label' => 'Nomor Mitra',
            'rules' => 'required|trim|is_natural|max_length[50]',
            'errors' => [
                'is_natural' => '%s hanya terdiri dari angka',
                'max_length' => '%s melebihi batas karakter (50)'
            ],
        ],
        [
            'field' => 'ed_no_hp',
            'label' => 'Nomor handphone',
            'rules' => 'trim|is_natural|max_length[20]',
            'errors' => [
                'is_natural' => '%s hanya terdiri dari angka',
                'max_length' => '%s melebihi batas karakter (20)'
            ],
        ],
    ];

    $config['kegiatan_tambah'] = [
        [
            'field' => 'in_nama_keg',
            'label' => 'Nama Kegiatan',
            'rules' => 'required|trim|alpha_numeric_spaces|max_length[200]',
            'errors' => [
                'alpha_numeric_spaces' => '%s hanya terdiri dari huruf, angka dan spasi',
                'max_length' => '%s melebihi batas karakter (200)'
            ],
        ],
        [
            'field' => 'in_desk',
            'label' => 'Deskripsi',
            'rules' => 'trim',
        ],
    ];

    $config['kegiatan_edit'] = [
        [
            'field' => 'ed_nama_keg',
            'label' => 'Nama Kegiatan',
            'rules' => 'required|trim|alpha_numeric_spaces|max_length[200]',
            'errors' => [
                'alpha_numeric_spaces' => '%s hanya terdiri dari huruf, angka dan spasi',
                'max_length' => '%s melebihi batas karakter (200)'
            ],
        ],
        [
            'field' => 'ed_desk',
            'label' => 'Deskripsi',
            'rules' => 'trim',
        ],
    ];