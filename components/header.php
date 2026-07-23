<?php
// شبیه‌سازی سطح دسترسی کاربر برای نمایش بخش اتاق وضعیت
// سطوح: 'guest' (مهمان), 'normal' (عادی), 'medium' (متوسط), 'high' (عالی)
$user_level = 'guest'; 
?>
<!DOCTYPE html>
<html lang="fa" dir="rtl" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>روایت ایران | آژانس تحلیلی روایت ایران </title>
    <meta name="description" content="">
    <meta name="robots" content="index, follow">
    <?php if ($user_level !== 'guest'): ?>
    <!-- جلوگیری از ایندکس بخش‌های حساس در صورت ورود کاربر -->
    <meta name="robots" content="noindex, nofollow">
    <?php endif; ?>
    
    <!-- Phosphor Icons -->
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
    
    <link rel="stylesheet" href="./assets/css/style.css?v=1.2">
</head>
<body>
    <div class="page-progress" aria-hidden="true">
        <span id="page-progress-bar"></span>
    </div>

    <!-- Search Overlay -->
    <div class="search-overlay" id="search-overlay" role="dialog" aria-modal="true" aria-label="جستجو">
        <button class="search-overlay__close" id="search-close" aria-label="بستن جستجو">
            <i class="ph ph-x"></i>
        </button>
        <div class="search-form">
            <p class="search-eyebrow">جستجو در روایت ایران</p>
            <input type="text" class="search-input" placeholder="چه چیزی دنبال می‌کنید؟" id="search-input" autocomplete="off">
            <div class="search-hints">
                <span class="search-hint-tag">آخرین اخبار</span>
                <span class="search-hint-tag">تحلیل سیاسی</span>
                <span class="search-hint-tag">پرونده ویژه</span>
            </div>
            <p class="search-esc-hint"><kbd>Esc</kbd> برای بستن</p>
        </div>
    </div>

    <header class="site-header" id="site-header">

        <!-- Top Bar (White Clean Design) -->
        <div class="top-bar" id="top-bar">
            <div class="container top-bar__inner">

                <!-- Live Pulse + Date -->
                <div class="top-bar__meta">
                    <i class="ph ph-calendar-blank" style="font-size:13px;opacity:.7;"></i>
                    <span id="top-bar-date">پنج‌شنبه ۱۲ تیر ۱۴۰۵</span>
                    <span class="top-bar__divider"></span>
                    <i class="ph ph-clock" style="font-size:13px;opacity:.7;"></i>
                    <span id="top-bar-time">--:--</span>
                </div>

                <!-- Top Bar Actions (Search, Theme, Login) -->
                <div class="top-bar__actions">
                    <button class="top-bar__icon-btn search-trigger" type="button" aria-label="جستجو" id="search-trigger" title="جستجو">
                        <i class="ph ph-magnifying-glass"></i>
                    </button>
                    <button class="top-bar__icon-btn theme-toggle" id="theme-toggle" type="button" aria-label="تغییر حالت رنگی" title="تغییر پوسته">
                        <i class="ph ph-sun theme-icon-light"></i>
                        <i class="ph ph-moon theme-icon-dark"></i>
                    </button>
                    <span class="top-bar__divider"></span>
                    <a href="#" class="top-bar__cta" aria-label="ورود">
                        <i class="ph ph-user-circle-plus"></i>
                        <span>ورود</span>
                    </a>
                </div>

            </div>
        </div>

        <!-- Main Header Shell (Red Premium Styling) -->
        <div class="container header-shell" id="header-shell">

            <!-- Brand Lockup -->
            <div class="brand-lockup">
                <a href="#" class="brand-mark" aria-label="روایت ایران">
                    <img src="./assets/images/logo-revayat.webp" alt="لوگوی روایت ایران" class="brand-mark__logo" width="auto" height="63px">
                </a>
            </div>

            <!-- Header Brand Divider -->
            <div class="header-brand-divider" aria-hidden="true"></div>

            <!-- Main Navigation -->
            <nav class="main-nav" aria-label="ناوبری اصلی">
                <a href="#hero" class="is-active">صفحه اصلی</a>
                <span class="nav-divider" aria-hidden="true"></span>
                <a href="#daily-narrative">روایت روز</a>
                <span class="nav-divider" aria-hidden="true"></span>
                <a href="#news-monitoring">رصد اخبار</a>
                <span class="nav-divider" aria-hidden="true"></span>
                <div class="nav-item-dropdown">
                    <a href="#special-dossiers" class="dropdown-trigger">
                        <span>پرونده ویژه</span>
                        <i class="ph ph-caret-down dropdown-caret"></i>
                    </a>
                    <div class="dropdown-menu">
                        <a href="#special-dossiers-1" class="dropdown-item">
                            <i class="ph ph-hash dropdown-item-icon"></i>
                            <span>پرونده انتخابات</span>
                        </a>
                        <a href="#special-dossiers-2" class="dropdown-item">
                            <i class="ph ph-hash dropdown-item-icon"></i>
                            <span>توسعه منطقه‌ای</span>
                        </a>
                        <a href="#special-dossiers-3" class="dropdown-item">
                            <i class="ph ph-hash dropdown-item-icon"></i>
                            <span>اقتصاد داده‌محور</span>
                        </a>
                    </div>
                </div>
                <span class="nav-divider" aria-hidden="true"></span>
                <a href="#media-observatory">دیدبان رسانه</a>
                <span class="nav-divider" aria-hidden="true"></span>
                <a href="#situation-room">اتاق وضعیت</a>
                <span class="nav-divider" aria-hidden="true"></span>
                <a href="#analysts-network">شبکه تحلیلگران</a>
            </nav>

            <!-- Mobile Toggle -->
            <div class="header-actions">
                <button class="menu-toggle" id="menu-toggle" type="button" aria-expanded="false" aria-controls="mobile-menu" aria-label="منو">
                    <span class="menu-toggle__line"></span>
                    <span class="menu-toggle__line"></span>
                    <span class="menu-toggle__line"></span>
                </button>
            </div>

        </div>

        <!-- Mobile Menu -->
        <div class="mobile-menu" id="mobile-menu" aria-hidden="true">
            <div class="mobile-menu__panel">
                <div class="mobile-menu__header">
                    <span class="mobile-menu__title">منو</span>
                    <button class="mobile-menu__close" id="mobile-close" aria-label="بستن منو">
                        <i class="ph ph-x"></i>
                    </button>
                </div>
                <nav class="mobile-menu__nav">
                    <a href="#hero" class="mobile-nav-item">
                        <span class="mobile-nav-item__icon"><i class="ph ph-house"></i></span>
                        <span>صفحه اصلی</span>
                    </a>
                    <a href="#daily-narrative" class="mobile-nav-item">
                        <span class="mobile-nav-item__icon"><i class="ph ph-newspaper"></i></span>
                        <span>روایت روز</span>
                    </a>
                    <a href="#news-monitoring" class="mobile-nav-item">
                        <span class="mobile-nav-item__icon"><i class="ph ph-radar"></i></span>
                        <span>رصد اخبار</span>
                    </a>
                    <a href="#special-dossiers" class="mobile-nav-item">
                        <span class="mobile-nav-item__icon"><i class="ph ph-folder-open"></i></span>
                        <span>پرونده ویژه</span>
                    </a>
                    <a href="#media-observatory" class="mobile-nav-item">
                        <span class="mobile-nav-item__icon"><i class="ph ph-eye"></i></span>
                        <span>دیدبان رسانه</span>
                    </a>
                    <a href="#situation-room" class="mobile-nav-item">
                        <span class="mobile-nav-item__icon"><i class="ph ph-shield-check"></i></span>
                        <span>اتاق وضعیت</span>
                    </a>
                    <a href="#multimedia" class="mobile-nav-item">
                        <span class="mobile-nav-item__icon"><i class="ph ph-play-circle"></i></span>
                        <span>رسانه‌نگار</span>
                    </a>
                    <a href="#analysts-network" class="mobile-nav-item">
                        <span class="mobile-nav-item__icon"><i class="ph ph-users-three"></i></span>
                        <span>شبکه تحلیلگران</span>
                    </a>
                </nav>
                <div class="mobile-menu__footer">
                    <a href="#" class="mobile-cta">
                        <i class="ph ph-user-circle-plus"></i>
                        ورود / ثبت نام
                    </a>
                </div>
            </div>
        </div>

    </header>
