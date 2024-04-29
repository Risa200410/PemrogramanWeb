<?php
// mengatur tipe konten header sebagai JSON
header('Content-Type: application/json');

// membuat token CSRF untuk keamanan Ajax request
if (empty($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}

// mengambil header request untuk token CSRF
$headers = apache_request_headers();

// memeriksa apakah token CSRF ada dalam header
if (isset($headers['Csrf-Token'])) {
    // memeriksa kecocokan token CSRF dari header dengan token CSRF yang disimpan di session
    if ($headers['Csrf-Token'] !== $_SESSION['csrf_token']) {
        // menghasilkan notif error dalam format JSON jika token CSRF tidak cocok
        exit(json_encode(['error' => 'Wrong CSRF token']));
    }
} else {
    // menghasilkan notif error dalam format JSON jika token CSRF tidak ada dalam header
    exit(json_encode(['error' => 'No CSRF token']));
}
?>