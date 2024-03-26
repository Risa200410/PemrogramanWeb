<?php
// array asosiatif yang berisi daftar menu
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

function tampilkanMenuBertingkat(array $menu, $level = 0){
// fungsi rekursif untuk menampilkan menu secara bertingkat
    echo "<ul>";
    foreach ($menu as $item) {
        if ($level === 0) {
            echo "<li class=\"utama\">{$item['nama']}</li>";
        } else {
            echo "<li class=\"sub-{$level}\">{$item['nama']}</li>";
        }

        if (isset($item['subMenu'])) {
            tampilkanMenuBertingkat($item['subMenu'], $level + 1);
        }
    }
    echo "</ul>";
}

tampilkanMenuBertingkat($menu);
//  pemanggilan fungsi untuk memulai proses rekursif untuk menampilkan semua menu dan submenu
?>