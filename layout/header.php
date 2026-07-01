<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>روایت ایران | پلتفرم تحلیلی، خبری و داده‌محور</title>
    
    <!-- Google Fonts (Inter for numbers) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Phosphor Icons -->
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
    
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <!-- Tailwind CSS (CDN for mockup) -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        surface: '#FFFFFF',
                        'surface-offset': '#F5F7FA',
                        navy: '#172542',
                        gold: '#B89053',
                        'alert-red': '#D32F2F',
                        main: '#18181B',
                        muted: '#52525B',
                        border: '#E4E4E7'
                    },
                    fontFamily: {
                        sans: ['Peyda', 'sans-serif'],
                        inter: ['Inter', 'sans-serif']
                    },
                    maxWidth: {
                        '7xl': '1280px'
                    }
                }
            }
        }
    </script>

    <!-- Custom CSS -->
    <link rel="stylesheet" href="./assets/css/style.css">
</head>
<body class="bg-surface text-main antialiased selection:bg-gold selection:text-white">

    <!-- Header & Navigation -->
    <header class="sticky top-0 z-50 bg-white/90 dark:bg-navy/90 backdrop-blur-md hairline-b dark:border-white/10">
        <div class="max-w-7xl mx-auto px-4 lg:px-8">
            <div class="flex items-center justify-between h-20">
                
                <!-- لوگو (Right) -->
                <div class="flex-shrink-0 flex items-center gap-2">
                    <div class="w-10 h-10 bg-navy dark:bg-gold text-white rounded-sm flex items-center justify-center">
                        <i class="ph-duotone ph-book-open-text text-2xl"></i>
                    </div>
                    <div class="flex flex-col">
                        <span class="text-navy dark:text-white font-extrabold text-xl leading-tight">روایت ایران</span>
                        <span class="text-gold text-[10px] font-bold tracking-widest uppercase">اندیشکده دیجیتال</span>
                    </div>
                </div>

                <!-- منوی سرویس‌ها (Center) -->
                <nav class="hidden lg:flex items-center gap-6 text-sm">
                    <a href="#" class="text-main dark:text-gray-300 hover:text-gold dark:hover:text-gold font-medium transition-colors">صفحه اصلی</a>
                    <div class="h-4 w-px bg-border"></div>
                    <a href="#" class="text-main dark:text-gray-300 hover:text-gold dark:hover:text-gold font-medium transition-colors">روایت روز</a>
                    <div class="h-4 w-px bg-border"></div>
                    <a href="#" class="text-main dark:text-gray-300 hover:text-gold dark:hover:text-gold font-medium transition-colors">رصد اخبار</a>
                    <div class="h-4 w-px bg-border"></div>
                    
                    <!-- Dropdown Item -->
                    <div class="relative group">
                        <button class="text-main dark:text-gray-300 hover:text-gold dark:hover:text-gold font-medium transition-colors flex items-center gap-1">
                            پرونده ویژه <i class="ph ph-caret-down text-xs"></i>
                        </button>
                        <!-- Dropdown Menu -->
                        <div class="absolute right-0 top-full mt-2 w-48 bg-white/95 dark:bg-navy/95 backdrop-blur-md rounded-md shadow-lg border border-border/50 dark:border-white/10 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 translate-y-2 group-hover:translate-y-0 z-50">
                            <div class="p-2 flex flex-col gap-1">
                                <a href="#" class="block px-4 py-2 text-sm text-main dark:text-gray-300 hover:bg-surface-offset dark:hover:bg-white/5 rounded-sm transition-colors">جنگ شناختی در فضای مجازی</a>
                                <a href="#" class="block px-4 py-2 text-sm text-main dark:text-gray-300 hover:bg-surface-offset dark:hover:bg-white/5 rounded-sm transition-colors">اقتصاد سیاسی بودجه</a>
                                <a href="#" class="block px-4 py-2 text-sm text-main dark:text-gray-300 hover:bg-surface-offset dark:hover:bg-white/5 rounded-sm transition-colors">تحولات استراتژیک منطقه</a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="h-4 w-px bg-border"></div>
                    <a href="#" class="text-main dark:text-gray-300 hover:text-gold dark:hover:text-gold font-medium transition-colors">دیدبان رسانه</a>
                    <div class="h-4 w-px bg-border"></div>
                    <a href="#" class="text-main dark:text-gray-300 hover:text-gold dark:hover:text-gold font-medium transition-colors">شبکه تحلیلگران</a>
                </nav>

                <!-- دکمه‌های سمت چپ (Left) -->
                <div class="flex items-center gap-2 bg-surface-offset dark:bg-navy/50 p-1.5 rounded-full border border-border/50 dark:border-white/10 shadow-inner">
                    <button id="theme-toggle" class="w-8 h-8 rounded-full flex items-center justify-center text-navy dark:text-gold hover:bg-white dark:hover:bg-navy transition-all" title="تغییر تم">
                        <i class="ph-duotone ph-moon text-lg dark:hidden"></i>
                        <i class="ph-duotone ph-sun text-lg hidden dark:block"></i>
                    </button>
                    <div class="h-4 w-px bg-border dark:bg-white/10 mx-1"></div>
                    <button class="hidden lg:flex items-center justify-center w-8 h-8 rounded-full text-navy dark:text-white hover:bg-white dark:hover:bg-navy transition-all" title="ورود به حساب">
                        <i class="ph-duotone ph-user text-lg"></i>
                    </button>
                    <button class="bg-navy dark:bg-gold hover:bg-navy/90 dark:hover:bg-gold/90 text-white dark:text-navy px-4 py-1.5 rounded-full font-bold text-xs transition-colors shadow-sm ml-1">
                        ثبت‌نام
                    </button>
                </div>

                <!-- Mobile Menu Button -->
                <button class="lg:hidden text-navy dark:text-white p-2">
                    <i class="ph ph-list text-2xl"></i>
                </button>
            </div>
        </div>
    </header>

    <!-- Main Content Wrapper -->
    <main class="min-h-screen">
