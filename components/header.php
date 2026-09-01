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
    
    <!-- Phosphor Icons (Local) -->
    <script src="./assets/js/phosphor-icons.js"></script>

    <!-- Swiper.js -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">

    <link rel="stylesheet" href="./assets/css/style.css?v=4.1">
</head>
<body class="bg-bg text-text min-h-screen font-sans leading-relaxed transition-colors duration-300 antialiased selection:bg-accent selection:text-white">
    <div class="fixed top-0 left-0 right-0 h-[3px] z-[9999] pointer-events-none" aria-hidden="true">
        <span id="page-progress-bar" class="block h-full w-0 bg-gradient-to-r from-accent to-accent-strong shadow-[0_0_12px_rgba(var(--accent-rgb),0.5)] transition-all duration-100 ease-linear"></span>
    </div>

    <!-- Search Overlay -->
    <div class="search-overlay group fixed inset-0 z-[1000] flex flex-col items-center justify-center bg-gradient-to-b from-[#080E1A]/95 to-[#0D1626]/95 backdrop-blur-xl opacity-0 invisible transition-all duration-300 [&.is-active]:opacity-100 [&.is-active]:visible" id="search-overlay" role="dialog" aria-modal="true" aria-label="جستجو">
        <button class="absolute top-6 left-6 w-11 h-11 rounded-xl border border-white/10 bg-white/5 text-white/50 grid place-items-center cursor-pointer transition-all hover:bg-primary/15 hover:text-white/90 hover:border-primary/30" id="search-close" aria-label="بستن جستجو">
            <i class="ph ph-x text-xl"></i>
        </button>
        <div class="w-[min(calc(100%-40px),760px)] text-center translate-y-6 transition-transform duration-500 group-[.is-active]:translate-y-0">
            <p class="text-white/35 text-xs font-bold tracking-[0.12em] uppercase mb-7">جستجو در روایت ایران</p>
            <input type="text" class="w-full bg-transparent border-none border-b-2 border-primary/60 text-white text-[clamp(1.5rem,3vw,2.5rem)] font-extrabold py-4 text-center transition-colors focus:outline-none focus:border-primary placeholder:text-white/15" placeholder="چه چیزی دنبال می‌کنید؟" id="search-input" autocomplete="off">
            <div class="flex items-center justify-center gap-2 mt-5 flex-wrap">
                <span class="py-1 px-3.5 rounded-full bg-white/5 border border-white/10 text-white/50 text-xs font-semibold cursor-pointer transition-colors hover:bg-primary/15 hover:border-primary/30 hover:text-white/90">آخرین اخبار</span>
                <span class="py-1 px-3.5 rounded-full bg-white/5 border border-white/10 text-white/50 text-xs font-semibold cursor-pointer transition-colors hover:bg-primary/15 hover:border-primary/30 hover:text-white/90">تحلیل سیاسی</span>
                <span class="py-1 px-3.5 rounded-full bg-white/5 border border-white/10 text-white/50 text-xs font-semibold cursor-pointer transition-colors hover:bg-primary/15 hover:border-primary/30 hover:text-white/90">پرونده ویژه</span>
            </div>
            <p class="text-white/25 text-xs mt-7"><kbd class="inline-block py-0.5 px-2 rounded-md border border-white/15 bg-white/5 font-sans text-[11px]">Esc</kbd> برای بستن</p>
        </div>
    </div>

    <header class="relative z-50 transition-shadow duration-300 [&.is-scrolled]:shadow-none" id="site-header">
        
        <!-- Harmonic Palette-Adaptive Background Layer -->
        <div class="absolute top-0 left-0 w-full h-[82px] bg-[var(--header-backdrop)] header-backdrop-pattern -z-10 pointer-events-none transition-colors duration-300" aria-hidden="true"></div>

        <!-- Top Bar (Full-Width Harmonic Design) -->
        <div class="top-bar w-full" id="top-bar">
            <div class="container flex items-center justify-between h-[42px] px-3">

                <!-- Meta: Date + Time -->
                <div class="flex items-center gap-2 text-text-muted text-xs font-normal whitespace-nowrap shrink-0">
                    <i class="ph ph-calendar-blank text-[13px] opacity-75"></i>
                    <span id="top-bar-date">پنج‌شنبه ۱۲ تیر ۱۴۰۵</span>
                    <span class="w-[1px] h-[14px] bg-border rounded-[1px] mx-1 shrink-0"></span>
                    <i class="ph ph-clock text-[13px] opacity-75"></i>
                    <span id="top-bar-time">--:--</span>
                </div>

                <!-- Top Bar Actions (Search, Theme, Login) -->
                <div class="flex items-center gap-2 shrink-0">
                    <button class="inline-flex items-center justify-center w-8 h-8 rounded-lg border border-border bg-bg-elevated text-text-muted text-base cursor-pointer transition-all duration-200 hover:text-primary hover:border-primary hover:bg-primary/5 dark:bg-white/5 dark:border-white/15 dark:text-text-muted dark:hover:text-white" type="button" aria-label="جستجو" id="search-trigger" title="جستجو">
                        <i class="ph ph-magnifying-glass"></i>
                    </button>
                    <button class="inline-flex items-center justify-center w-8 h-8 rounded-lg border border-border bg-bg-elevated text-text-muted text-base cursor-pointer transition-all duration-200 hover:text-primary hover:border-primary hover:bg-primary/5 dark:bg-white/5 dark:border-white/15 dark:text-text-muted dark:hover:text-white" id="theme-toggle" type="button" aria-label="تغییر حالت رنگی" title="تغییر پوسته">
                        <i class="ph ph-sun dark:hidden"></i>
                        <i class="ph ph-moon hidden dark:block"></i>
                    </button>
                    <a href="auth.php?tab=login" class="inline-flex items-center justify-center w-8 h-8 rounded-lg border border-border bg-bg-elevated text-text-muted text-base cursor-pointer transition-all duration-200 hover:text-primary hover:border-primary hover:bg-primary/5 dark:bg-white/5 dark:border-white/15 dark:text-text-muted dark:hover:text-white" aria-label="ورود" title="ورود">
                        <i class="ph ph-user-circle-plus"></i>
                    </a>
                </div>

            </div>
        </div>

        <!-- Main Header Shell (Dynamic Premium Styling) -->
        <div class="container sticky top-[10px] z-[200] min-h-[76px] flex justify-between items-center gap-5 mx-auto my-[2px] mb-4 py-[3px] px-5 border border-white/20 rounded-lg bg-primary shadow-[0_12px_36px_rgba(0,0,0,0.18)] transition-all duration-300 dark:bg-primary-dark dark:border-white/10 dark:shadow-black/40" id="header-shell">

            <!-- Brand Lockup -->
            <div class="shrink-0 flex items-center">
                <a href="index.php" class="flex items-center gap-3.5 no-underline" aria-label="روایت ایران">
                    <img src="./assets/images/logo-revayat.webp" alt="لوگوی روایت ایران" class="h-[64px] w-auto object-contain shrink-0" width="auto" height="64px">
                </a>
            </div>

            <!-- Header Brand Divider -->
            <div class="w-[1px] h-8 bg-white/25 opacity-80 shrink-0" aria-hidden="true"></div>

            <!-- Main Navigation -->
            <nav class="flex-1 hidden xl:flex justify-start items-center gap-1 ms-3 text-sm font-normal font-sans" aria-label="ناوبری اصلی">
                <a href="#hero" class="relative py-1.5 px-2 text-white/90 hover:text-white transition-colors duration-300 before:absolute before:bottom-1 before:left-1/2 before:-translate-x-1/2 before:w-0 before:h-[2px] before:bg-white/80 before:transition-all before:duration-300 hover:before:w-[70%] [&.is-active]:before:w-[70%] [&.is-active]:text-white">صفحه اصلی</a>
                <span class="w-[1px] h-[10px] bg-white/25 mx-0.5 shrink-0" aria-hidden="true"></span>
                <a href="archive.php?category=daily-narrative" class="relative py-1.5 px-2 text-white/90 hover:text-white transition-colors duration-300 before:absolute before:bottom-1 before:left-1/2 before:-translate-x-1/2 before:w-0 before:h-[2px] before:bg-white/80 before:transition-all before:duration-300 hover:before:w-[70%]">روایت روز</a>
                <span class="w-[1px] h-[10px] bg-white/25 mx-0.5 shrink-0" aria-hidden="true"></span>
                <a href="archive.php?category=news-monitoring" class="relative py-1.5 px-2 text-white/90 hover:text-white transition-colors duration-300 before:absolute before:bottom-1 before:left-1/2 before:-translate-x-1/2 before:w-0 before:h-[2px] before:bg-white/80 before:transition-all before:duration-300 hover:before:w-[70%]">رصد اخبار</a>
                <span class="w-[1px] h-[10px] bg-white/25 mx-0.5 shrink-0" aria-hidden="true"></span>
                <div class="relative inline-flex items-center group">
                    <a href="archive.php?category=special-dossiers" class="inline-flex items-center gap-1.5 no-underline cursor-pointer relative py-1.5 px-2 text-white/90 hover:text-white transition-colors duration-300 before:absolute before:bottom-1 before:left-1/2 before:-translate-x-1/2 before:w-0 before:h-[2px] before:bg-white/80 before:transition-all before:duration-300 hover:before:w-[70%]">
                        <span>پرونده ویژه</span>
                        <i class="ph ph-caret-down text-[11px] opacity-75 transition-transform duration-300 group-hover:rotate-180 group-hover:text-white"></i>
                    </a>
                    <div class="absolute top-[calc(100%+12px)] right-1/2 translate-x-1/2 translate-y-2.5 bg-white border border-border rounded-xl p-2 min-w-[170px] flex flex-col gap-0.5 z-[250] opacity-0 invisible pointer-events-none transition-all duration-300 group-hover:opacity-100 group-hover:visible group-hover:pointer-events-auto group-hover:translate-y-0 shadow-xl dark:bg-[#162136]/95 dark:backdrop-blur-md dark:border-white/10 dark:shadow-black/30 before:absolute before:top-[-14px] before:left-0 before:right-0 before:h-[14px] before:bg-transparent">
                        <a href="#special-dossiers-1" class="flex items-center gap-2 py-2 px-3 text-text-soft text-[13px] font-medium no-underline rounded-lg transition-all duration-200 hover:bg-primary/10 hover:text-primary hover:-translate-x-1 rtl:hover:translate-x-1">
                            <i class="ph ph-hash text-[14px] opacity-65 transition-colors duration-200"></i>
                            <span>پرونده انتخابات</span>
                        </a>
                        <a href="#special-dossiers-2" class="flex items-center gap-2 py-2 px-3 text-text-soft text-[13px] font-medium no-underline rounded-lg transition-all duration-200 hover:bg-primary/10 hover:text-primary hover:-translate-x-1 rtl:hover:translate-x-1">
                            <i class="ph ph-hash text-[14px] opacity-65 transition-colors duration-200"></i>
                            <span>توسعه منطقه‌ای</span>
                        </a>
                        <a href="#special-dossiers-3" class="flex items-center gap-2 py-2 px-3 text-text-soft text-[13px] font-medium no-underline rounded-lg transition-all duration-200 hover:bg-primary/10 hover:text-primary hover:-translate-x-1 rtl:hover:translate-x-1">
                            <i class="ph ph-hash text-[14px] opacity-65 transition-colors duration-200"></i>
                            <span>اقتصاد داده‌محور</span>
                        </a>
                    </div>
                </div>
                <span class="w-[1px] h-[10px] bg-white/25 mx-0.5 shrink-0" aria-hidden="true"></span>
                <a href="archive.php?category=media-observatory" class="relative py-1.5 px-2 text-white/90 hover:text-white transition-colors duration-300 before:absolute before:bottom-1 before:left-1/2 before:-translate-x-1/2 before:w-0 before:h-[2px] before:bg-white/80 before:transition-all before:duration-300 hover:before:w-[70%]">دیدبان رسانه</a>
                <span class="w-[1px] h-[10px] bg-white/25 mx-0.5 shrink-0" aria-hidden="true"></span>
                <a href="#situation-room" class="relative py-1.5 px-2 text-white/90 hover:text-white transition-colors duration-300 before:absolute before:bottom-1 before:left-1/2 before:-translate-x-1/2 before:w-0 before:h-[2px] before:bg-white/80 before:transition-all before:duration-300 hover:before:w-[70%]">اتاق وضعیت</a>
                <span class="w-[1px] h-[10px] bg-white/25 mx-0.5 shrink-0" aria-hidden="true"></span>
                <a href="#analysts-network" class="relative py-1.5 px-2 text-white/90 hover:text-white transition-colors duration-300 before:absolute before:bottom-1 before:left-1/2 before:-translate-x-1/2 before:w-0 before:h-[2px] before:bg-white/80 before:transition-all before:duration-300 hover:before:w-[70%]">شبکه تحلیلگران</a>
                <span class="w-[1px] h-[10px] bg-white/25 mx-0.5 shrink-0" aria-hidden="true"></span>
                <a href="archive.php?category=editors-pick" class="relative py-1.5 px-2 text-white/90 hover:text-white transition-colors duration-300 before:absolute before:bottom-1 before:left-1/2 before:-translate-x-1/2 before:w-0 before:h-[2px] before:bg-white/80 before:transition-all before:duration-300 hover:before:w-[70%]">پیشنهاد سردبیر</a>
            </nav>

            <!-- Mobile Toggle -->
            <div class="flex items-center gap-2 xl:hidden">
                <button class="menu-toggle group flex flex-col items-center justify-center gap-[5px] w-10 h-10 rounded-lg border border-white/20 text-white cursor-pointer transition-colors duration-200 hover:bg-white/10 hover:border-white/40 [&[aria-expanded='true']_span:nth-child(1)]:translate-y-[6.5px] [&[aria-expanded='true']_span:nth-child(1)]:-rotate-45 [&[aria-expanded='true']_span:nth-child(2)]:opacity-0 [&[aria-expanded='true']_span:nth-child(2)]:w-0 [&[aria-expanded='true']_span:nth-child(3)]:-translate-y-[6.5px] [&[aria-expanded='true']_span:nth-child(3)]:rotate-45" id="menu-toggle" type="button" aria-expanded="false" aria-controls="mobile-menu" aria-label="منو">
                    <span class="block w-[18px] h-[1.5px] bg-current rounded-full transition-all duration-300 origin-center"></span>
                    <span class="block w-[18px] h-[1.5px] bg-current rounded-full transition-all duration-300 origin-center"></span>
                    <span class="block w-[18px] h-[1.5px] bg-current rounded-full transition-all duration-300 origin-center"></span>
                </button>
            </div>

        </div>

        <!-- Mobile Menu (Tailwind rewrite to keep it standard) -->
        <div class="mobile-menu hidden" id="mobile-menu" aria-hidden="true">
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
                    <a href="archive.php?category=daily-narrative" class="mobile-nav-item">
                        <span class="mobile-nav-item__icon"><i class="ph ph-newspaper"></i></span>
                        <span>روایت روز</span>
                    </a>
                    <a href="archive.php?category=news-monitoring" class="mobile-nav-item">
                        <span class="mobile-nav-item__icon"><i class="ph ph-radar"></i></span>
                        <span>رصد اخبار</span>
                    </a>
                    <a href="archive.php?category=special-dossiers" class="mobile-nav-item">
                        <span class="mobile-nav-item__icon"><i class="ph ph-folder-open"></i></span>
                        <span>پرونده ویژه</span>
                    </a>
                    <a href="archive.php?category=media-observatory" class="mobile-nav-item">
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
                    <a href="archive.php?category=editors-pick" class="mobile-nav-item">
                        <span class="mobile-nav-item__icon"><i class="ph ph-star"></i></span>
                        <span>پیشنهاد سردبیر</span>
                    </a>
                </nav>
                <div class="mobile-menu__footer">
                    <a href="auth.php?tab=login" class="mobile-cta">
                        <i class="ph ph-user-circle-plus"></i>
                        ورود / ثبت نام
                    </a>
                </div>
            </div>
        </div>

    </header>
