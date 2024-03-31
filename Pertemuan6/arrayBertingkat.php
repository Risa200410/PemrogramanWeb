<?php
$menu=[
    [
        "nama"=>"Beranda"
    ],
    [
        "nama"=>"Berita",
        "subMenu"=>[
            [
                "nama"=>"Wisata",
                "subMenu"=>[
                    [
                        "nama"=>"Pantai"
                    ],
                    [
                        "nama"=>"Gunung"
                    ]
                ]
            ],
            [
                "nama"=>"Kuliner"
            ],
            [
                "nama"=>"Hiburan"
            ] 
        ]
    ],
    [
        "nama"=>"Tentang"
    ],
    [
        "nama"=>"Kontak"
    ]
];

// menerima array menu sebagai argumen dan menampilkan menu tersebut secara rekursif dengan menyesuaikan level kedalaman submenu
function tampilkanMenuBertingkat(array $menu, $level = 0)
{
    echo "<ul>";
    // daftar tak terurut/unordered list dalam HTML
    foreach ($menu as $item) {
        if ($level === 0) {
            echo "<li class=\"utama\">{$item['nama']}</li>";
            // untuk menampilkan item menu utama
        } else {
            echo "<li class=\"sub-{$level}\">{$item['nama']}</li>";
            // untuk menampilkan item submenu
        }

        if (isset($item['subMenu'])) {
            tampilkanMenuBertingkat($item['subMenu'], $level + 1);
        }
        // memeriksa apakah item menu saat ini memiliki submenu. jika true, maka tampilkanMenuBertingkat akan dipanggil secara rekursif untuk menampilkan submenu tersebut
    }
    echo "</ul>";
}

tampilkanMenuBertingkat($menu);
?>
<!-- kode pada class ini akan menghasilkan tampilan menu bertingkat sesuai dengan struktur yang dibuat dalam array $menu -->