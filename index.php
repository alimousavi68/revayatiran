<?php
// شبیه‌سازی سطح دسترسی کاربر برای نمایش بخش اتاق وضعیت
// سطوح: 'guest' (مهمان), 'normal' (عادی), 'medium' (متوسط), 'high' (عالی)
$user_level = 'guest'; 

require_once __DIR__ . '/components/header.php';
?>

<main>
    <?php
    require_once __DIR__ . '/components/hero.php';
    require_once __DIR__ . '/components/daily-narrative.php';
    require_once __DIR__ . '/components/situation-room.php';
    require_once __DIR__ . '/components/news-monitoring.php';
    require_once __DIR__ . '/components/special-dossiers.php';
    require_once __DIR__ . '/components/media-observatory.php';
    require_once __DIR__ . '/components/multimedia.php';
    // require_once __DIR__ . '/components/analysts-network.php';
    ?>
</main>

<?php
require_once __DIR__ . '/components/footer.php';
?>
