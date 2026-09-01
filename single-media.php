<?php
require_once __DIR__ . '/components/header.php';
$mediaType = isset($_GET['type']) ? $_GET['type'] : 'video';
?>

<main class="bg-gray-50/50 dark:bg-black/20 min-h-screen pt-8 md:pt-12 pb-16">
    <div class="container">
        
        <!-- ═══ بخش هدر رسانه (Immersive Media Hero) ═══ -->
        <div class="w-full relative mb-12 group transition-all duration-700 ease-[cubic-bezier(0.16,1,0.3,1)]" id="media-hero-container">
            <?php if ($mediaType === 'audio'): ?>
                <!-- پلیر صوتی پیشرفته -->
                <div class="w-full aspect-auto md:aspect-[21/9] min-h-[400px] flex flex-col md:flex-row items-center justify-center gap-12 p-8 md:p-16 bg-gradient-to-br from-gray-900 to-black rounded-[32px] relative overflow-hidden border border-white/10 shadow-2xl">
                    <div class="absolute inset-0 opacity-30 bg-[url('assets/images/posts images/1404041822335791233405404.jpg')] bg-cover bg-center blur-3xl"></div>
                    
                    <div class="relative z-10 shrink-0">
                        <img src="assets/images/posts images/1404041822335791233405404.jpg" class="w-48 h-48 md:w-64 md:h-64 rounded-2xl object-cover border-4 border-white/20 shadow-[0_0_40px_rgba(0,0,0,0.5)]" alt="پادکست">

                    
                    <div class="relative z-10 w-full max-w-xl flex flex-col items-center md:items-start text-center md:text-right">
                        <span class="px-3 py-1 bg-primary/20 text-primary text-xs font-bold rounded-full mb-4">پادکست اختصاصی</span>
                        <h2 class="text-2xl md:text-3xl font-extrabold text-white mb-8 leading-tight text-balance">کریدورهای ژئوپلیتیک نوین؛ بازآرایی زنجیره تامین انرژی</h2>
                        <audio autoplay muted playsinline controls class="w-full h-14 rounded-full shadow-lg bg-white/10 backdrop-blur-md [&::-webkit-media-controls-panel]:bg-white/90">
                            <source src="#" type="audio/mpeg">
                            مرورگر شما از پخش صوتی پشتیبانی نمی‌کند.
                        </audio>
                    </div>
                </div>

            <?php elseif ($mediaType === 'gallery'): ?>
                <!-- گالری هوشمند (Bento/Collage) -->
                <div class="w-full aspect-auto md:aspect-[21/9] min-h-[450px] flex flex-col md:flex-row gap-3 rounded-[32px] overflow-hidden">
                    <div class="flex-1 relative group/main cursor-pointer overflow-hidden">
                        <img src="assets/images/posts images/219-os5jc-1-ak32467-800x534.webp" alt="گالری" class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover/main:scale-105">
                        <div class="absolute inset-0 flex items-center justify-center bg-black/40 opacity-0 group-hover/main:opacity-100 transition-all duration-300 backdrop-blur-[2px]">
                            <div class="w-16 h-16 rounded-full bg-white/20 flex items-center justify-center backdrop-blur-md border border-white/30 transform scale-75 group-hover/main:scale-100 transition-transform duration-300">
                                <i class="ph ph-magnifying-glass-plus text-3xl text-white"></i>
                            </div>
                        </div>
                    </div>
                    <div class="w-full md:w-[25%] flex flex-row md:flex-col gap-3 shrink-0">
                        <div class="flex-1 relative rounded-2xl overflow-hidden cursor-pointer opacity-80 hover:opacity-100 transition-all group/item">
                            <img src="assets/images/posts images/2279480_168.jpg" class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover/item:scale-110">
                        </div>
                        <div class="flex-1 relative rounded-2xl overflow-hidden cursor-pointer opacity-80 hover:opacity-100 transition-all group/item">
                            <img src="assets/images/posts images/images (1).jpeg" class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover/item:scale-110">
                        </div>
                        <div class="flex-1 relative rounded-2xl overflow-hidden cursor-pointer bg-gray-900 group/more">
                            <img src="assets/images/posts images/images (2).jpeg" class="absolute inset-0 w-full h-full object-cover opacity-40 group-hover/more:opacity-20 transition-opacity">
                            <div class="absolute inset-0 flex items-center justify-center text-white text-xl font-extrabold">+۵ عکس</div>
                        </div>
                    </div>
                </div>

            <?php else: // default to video ?>
                <!-- ویدیو فول اسکرین با حالت سینما (Theater Mode) -->
                <div class="w-full aspect-[16/9] md:aspect-[21/9] min-h-[400px] relative rounded-[32px] overflow-hidden bg-black shadow-2xl border border-black/5 dark:border-white/10 transition-all duration-700 ease-[cubic-bezier(0.16,1,0.3,1)] z-30" id="video-player-wrapper">
                    <video autoplay muted playsinline controls class="absolute inset-0 w-full h-full object-cover transition-all duration-700" poster="assets/images/posts images/2279480_168.jpg">
                        <source src="https://www.w3schools.com/html/mov_bbb.mp4" type="video/mp4">
                        مرورگر شما از پخش ویدیو پشتیبانی نمی‌کند.
                    </video>
                    
                    <!-- دکمه حالت سینما (Theater Mode) -->
                    <button id="theater-mode-btn" class="absolute top-6 left-6 w-12 h-12 rounded-full bg-black/40 hover:bg-primary text-white backdrop-blur-md border border-white/20 flex items-center justify-center transition-all duration-300 opacity-100 md:opacity-0 md:group-hover:opacity-100 z-40 tooltip" aria-label="حالت سینما">
                        <i class="ph ph-corners-out text-xl" id="theater-mode-icon"></i>
                    </button>
                </div>
            <?php endif; ?>
        </div>

        <!-- پس‌زمینه تیره برای حالت سینما -->
        <div id="theater-backdrop" class="fixed inset-0 bg-black/95 z-[60] opacity-0 pointer-events-none transition-opacity duration-700"></div>

        <!-- ═══ بخش اطلاعات و محتوا (Title & Text) ═══ -->
        <div class="bg-white dark:bg-[#1a1c23] rounded-[24px] border border-[var(--border)] shadow-sm mb-10 p-6 md:p-10 lg:p-14 relative z-10 overflow-hidden">
            <!-- بردکرامپ -->
            <div class="mb-6 flex justify-between items-start">
                <nav class="flex text-sm text-gray-500 font-medium" aria-label="Breadcrumb">
                    <ol class="inline-flex items-center space-x-1 space-x-reverse md:space-x-2">
                        <li class="inline-flex items-center">
                            <a href="/" class="hover:text-primary transition-colors">خانه</a>
                        </li>
                        <li>
                            <div class="flex items-center">
                                <i class="ph ph-caret-left text-xs mx-1"></i>
                                <a href="archive.php?category=daily-narrative" class="hover:text-primary transition-colors">روایت روز</a>
                            </div>
                        </li>
                    </ol>
                </nav>
                <div class="flex items-center gap-4 text-xs text-gray-500 font-medium">
                    <span class="flex items-center gap-1.5"><i class="ph ph-calendar-blank text-base"></i> ۱۲ تیر ۱۴۰۵</span>
                </div>
            </div>
            
            <!-- تیتر اصلی -->
            <h1 class="text-2xl md:text-3xl lg:text-[40px] font-extrabold text-gray-900 dark:text-white leading-[1.5] mb-8 tracking-tight text-balance">
                کریدورهای ژئوپلیتیک نوین؛ بازآرایی زنجیره تامین انرژی و موازنه قدرت منطقه‌ای
            </h1>
            
            <!-- لید (خلاصه) -->
            <p class="text-[19px] md:text-xl text-gray-600 dark:text-gray-300 leading-[1.8] mb-10 border-r-4 border-primary/50 pr-5 font-medium max-w-4xl">
                این تحلیل راهبردی، به بررسی دگرگونی مسیرهای ترانزیت و جایگاه متغیر ژئوپلیتیک ایران در شبکه انتقال انرژی پرداخته و الزامات دیپلماسی اقتصادی نوین را تبیین می‌نماید.
            </p>
            
            <!-- متادیتا و نویسنده -->
            <div class="flex flex-wrap items-center justify-between gap-4 pt-8 border-t border-[var(--border)]">
                <div class="flex items-center gap-4">
                    <img src="assets/images/user Avatar/8fc8b30f66b4489aaeb92b686a386cdc.png" alt="نویسنده" class="w-14 h-14 rounded-2xl object-cover border border-[var(--border)] p-0.5 bg-white dark:bg-transparent shadow-sm">
                    <div class="flex flex-col">
                        <span class="text-base font-bold text-gray-900 dark:text-white">دکتر مسعود فرهادی</span>
                        <span class="text-sm text-gray-500 mt-0.5">استراتژیست مطالعات منطقه‌ای</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- ═══ گرید اصلی (محتوا + سایدبار ابزارها) ═══ -->
        <div class="flex flex-col lg:flex-row gap-10 relative">
            
            <!-- ستون محتوای متنی (راست - ۷۰٪) -->
            <div class="flex-1 min-w-0 order-2 lg:order-1">
                <div class="bg-white dark:bg-[#1a1c23] rounded-2xl border border-[var(--border)] shadow-sm p-6 md:p-8 lg:p-12 mb-10">
                    
                    <!-- بدنه محتوا (Typography) -->
                    <div class="text-gray-900 dark:text-white leading-[2.2] text-[16px] md:text-[17px] space-y-7 font-normal">
                        <p>
                            در دهه‌ی گذشته، ساختار توزیع و ترانزیت انرژی در سطح جهانی دستخوش تغییرات بنیادین شده است. پیدایش مسیرهای جدید و رقابت قدرت‌های نوظهور برای کنترل گلوگاه‌های حیاتی، منطقه‌ی خاورمیانه را بار دیگر در مرکز یک «بازی بزرگ» قرار داده است.
                        </p>
                        
                        <blockquote class="border-r-4 border-primary bg-primary/5 p-5 md:p-6 rounded-l-2xl text-lg font-medium text-gray-800 dark:text-gray-200 shadow-inner">
                            آنچه امروز به عنوان کریدورهای ژئوپلیتیک می‌شناسیم، صرفاً مسیرهای عبور کالا نیستند، بلکه شریان‌هایی هستند که معماری امنیتی و اقتصادی دهه‌های آینده را شکل می‌دهند.
                        </blockquote>
                        
                        <p>
                            ایران با توجه به موقعیت بی‌نظیر جغرافیایی خود، دارای ظرفیت‌های بالقوه فراوانی برای تبدیل شدن به نقطه ثقل این کریدورها است. اما بالفعل کردن این ظرفیت‌ها نیازمند یک استراتژی منسجم، سرمایه‌گذاری هدفمند و دیپلماسی چندوجهی است.
                        </p>
                    </div>

                    <!-- برچسب‌ها (Tags) -->
                    <div class="pt-6 border-t border-[var(--border)] flex flex-wrap items-center gap-2">
                        <span class="text-sm font-bold text-gray-900 dark:text-white ml-2"><i class="ph ph-tag text-lg align-middle"></i> برچسب‌ها:</span>
                        <a href="#" class="px-3 py-1.5 bg-gray-100 dark:bg-white/5 hover:bg-gray-200 dark:hover:bg-white/10 rounded-lg text-xs font-medium text-gray-600 dark:text-gray-400 transition-colors">ژئوپلیتیک</a>
                        <a href="#" class="px-3 py-1.5 bg-gray-100 dark:bg-white/5 hover:bg-gray-200 dark:hover:bg-white/10 rounded-lg text-xs font-medium text-gray-600 dark:text-gray-400 transition-colors">امنیت انرژی</a>
                        <a href="#" class="px-3 py-1.5 bg-gray-100 dark:bg-white/5 hover:bg-gray-200 dark:hover:bg-white/10 rounded-lg text-xs font-medium text-gray-600 dark:text-gray-400 transition-colors">دیپلماسی اقتصادی</a>
                        <a href="#" class="px-3 py-1.5 bg-gray-100 dark:bg-white/5 hover:bg-gray-200 dark:hover:bg-white/10 rounded-lg text-xs font-medium text-gray-600 dark:text-gray-400 transition-colors">خاورمیانه</a>
                    </div>
                </div>

                <!-- ═══ بخش نظرات (کامپکت) ═══ -->
                <div class="bg-white dark:bg-[#1a1c23] rounded-2xl border border-[var(--border)] p-6 md:p-8 shadow-sm">
                    <h2 class="text-xl font-extrabold text-gray-900 dark:text-white mb-6 flex items-center gap-2">
                        <i class="ph ph-chat-circle-dots text-primary text-2xl"></i>
                        نظرات و دیدگاه‌ها <span class="text-sm font-medium text-gray-400 dark:text-gray-500">(۳ نظر)</span>
                    </h2>
                    
                    <!-- فرم ارسال نظر -->
                    <div class="flex gap-4 mb-10 pb-8 border-b border-[var(--border)]">
                        <div class="w-12 h-12 rounded-xl bg-gray-100 dark:bg-white/5 flex items-center justify-center shrink-0 border border-[var(--border)]">
                            <i class="ph ph-user text-xl text-gray-400"></i>
                        </div>
                        <div class="flex-1">
                            <textarea rows="3" placeholder="دیدگاه خود را درباره این تحلیل بنویسید..." class="w-full bg-gray-50 dark:bg-black/20 border border-[var(--border)] rounded-xl p-4 text-sm text-gray-800 dark:text-gray-200 focus:outline-none focus:border-primary/50 transition-colors resize-none mb-3"></textarea>
                            <div class="flex justify-end">
                                <button class="px-6 py-2.5 bg-primary text-white text-sm font-bold rounded-lg hover:bg-primary-dark transition-colors shadow-sm flex items-center gap-2">
                                    ارسال دیدگاه <i class="ph ph-paper-plane-right"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    
                    <!-- لیست نظرات -->
                    <div class="space-y-6">
                        <!-- نظر اول -->
                        <div class="flex gap-4">
                            <div class="w-10 h-10 rounded-xl bg-gray-100 dark:bg-white/5 overflow-hidden shrink-0 border border-[var(--border)]">
                                <img src="assets/images/user Avatar/8fc8b30f66b4489aaeb92b686a386cdc.png" alt="کاربر" class="w-full h-full object-cover">
                            </div>
                            <div class="flex-1">
                                <div class="bg-gray-50 dark:bg-white/5 rounded-2xl rounded-tr-none p-4 border border-[var(--border)]">
                                    <div class="flex justify-between items-center mb-2">
                                        <strong class="text-sm text-gray-900 dark:text-white">امیرحسین رضایی</strong>
                                        <span class="text-[11px] text-gray-500">۲ ساعت پیش</span>
                                    </div>
                                    <p class="text-sm text-gray-700 dark:text-gray-300 leading-relaxed">
                                        تحلیل بسیار جامع و دقیقی بود. به ویژه بخش مربوط به دیپلماسی ترانزیت جای تفکر زیادی دارد. آیا در این خصوص نقش کشورهای حاشیه خلیج فارس هم در نظر گرفته شده است؟
                                    </p>
                                </div>
                                <div class="mt-2 ml-2">
                                    <button class="text-[11px] font-bold text-gray-500 hover:text-primary transition-colors flex items-center gap-1">
                                        <i class="ph ph-arrow-u-down-left text-sm"></i> پاسخ دادن
                                    </button>
                                </div>
                                
                                <!-- پاسخ به نظر -->
                                <div class="flex gap-4 mt-4">
                                    <div class="w-8 h-8 rounded-lg bg-primary/10 overflow-hidden shrink-0 border border-primary/20">
                                        <img src="assets/images/user Avatar/8fc8b30f66b4489aaeb92b686a386cdc.png" alt="نویسنده" class="w-full h-full object-cover">
                                    </div>
                                    <div class="flex-1">
                                        <div class="bg-primary/5 dark:bg-primary/10 rounded-2xl rounded-tr-none p-4 border border-primary/20">
                                            <div class="flex justify-between items-center mb-2">
                                                <div class="flex items-center gap-2">
                                                    <strong class="text-sm text-primary">دکتر مسعود فرهادی</strong>
                                                    <span class="px-1.5 py-0.5 bg-primary/20 text-primary text-[10px] rounded font-bold">نویسنده</span>
                                                </div>
                                                <span class="text-[11px] text-gray-500">۱ ساعت پیش</span>
                                            </div>
                                            <p class="text-sm text-gray-700 dark:text-gray-300 leading-relaxed">
                                                ممنون از توجه شما. بله، در واقع کشورهای حاشیه خلیج فارس در حال رقابت شدیدی برای تصاحب این هاب‌های ترانزیتی هستند.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- ═══ سایدبار ابزارها و ویجت‌ها (چپ - ۳۰٪) ═══ -->
            <aside class="w-full lg:w-[320px] shrink-0 space-y-5 lg:sticky lg:top-28 self-start order-1 lg:order-2">
                
                <?php if ($mediaType === 'video' || $mediaType === 'audio'): ?>
                <!-- ویجت دانلود رسانه -->
                <div class="bg-white dark:bg-[#1a1c23] rounded-[24px] border border-[var(--border)] shadow-sm overflow-hidden">
                    <div class="p-5 flex items-center justify-between border-b border-[var(--border)] bg-gray-50/50 dark:bg-white/5">
                        <h3 class="text-[15px] font-extrabold text-gray-900 dark:text-white flex items-center gap-2">
                            <i class="ph ph-download-simple text-primary text-xl"></i> دریافت فایل رسانه
                        </h3>
                    </div>
                    <div class="flex flex-col">
                        <?php if ($mediaType === 'video'): ?>
                        <a href="#" class="flex items-center justify-between p-4 hover:bg-gray-50 dark:hover:bg-white/5 border-b border-[var(--border)] transition-colors group">
                            <div class="flex items-center gap-4">
                                <div class="w-11 h-11 rounded-full bg-red-500/10 flex items-center justify-center text-red-500">
                                    <i class="ph-fill ph-video-camera text-xl"></i>
                                </div>
                                <div class="flex flex-col gap-0.5">
                                    <span class="text-[14px] font-bold text-gray-800 dark:text-gray-200 group-hover:text-primary transition-colors">کیفیت 1080p</span>
                                    <span class="text-[11px] text-gray-500 font-medium tracking-wide">MP4 - 45MB</span>
                                </div>
                            </div>
                            <div class="w-8 h-8 rounded-full border border-gray-200 dark:border-white/10 flex items-center justify-center text-gray-400 group-hover:bg-primary group-hover:border-primary group-hover:text-white transition-all">
                                <i class="ph ph-download-simple text-sm"></i>
                            </div>
                        </a>
                        <a href="#" class="flex items-center justify-between p-4 hover:bg-gray-50 dark:hover:bg-white/5 border-b border-[var(--border)] transition-colors group">
                            <div class="flex items-center gap-4">
                                <div class="w-11 h-11 rounded-full bg-orange-500/10 flex items-center justify-center text-orange-500">
                                    <i class="ph-fill ph-video-camera text-xl"></i>
                                </div>
                                <div class="flex flex-col gap-0.5">
                                    <span class="text-[14px] font-bold text-gray-800 dark:text-gray-200 group-hover:text-primary transition-colors">کیفیت 720p</span>
                                    <span class="text-[11px] text-gray-500 font-medium tracking-wide">MP4 - 24MB</span>
                                </div>
                            </div>
                            <div class="w-8 h-8 rounded-full border border-gray-200 dark:border-white/10 flex items-center justify-center text-gray-400 group-hover:bg-primary group-hover:border-primary group-hover:text-white transition-all">
                                <i class="ph ph-download-simple text-sm"></i>
                            </div>
                        </a>
                        <?php endif; ?>
                        
                        <a href="#" class="flex items-center justify-between p-4 hover:bg-gray-50 dark:hover:bg-white/5 transition-colors group">
                            <div class="flex items-center gap-4">
                                <div class="w-11 h-11 rounded-full bg-blue-500/10 flex items-center justify-center text-blue-500">
                                    <i class="ph-fill ph-headphones text-xl"></i>
                                </div>
                                <div class="flex flex-col gap-0.5">
                                    <span class="text-[14px] font-bold text-gray-800 dark:text-gray-200 group-hover:text-primary transition-colors">نسخه صوتی</span>
                                    <span class="text-[11px] text-gray-500 font-medium tracking-wide">MP3 - 8MB</span>
                                </div>
                            </div>
                            <div class="w-8 h-8 rounded-full border border-gray-200 dark:border-white/10 flex items-center justify-center text-gray-400 group-hover:bg-primary group-hover:border-primary group-hover:text-white transition-all">
                                <i class="ph ph-download-simple text-sm"></i>
                            </div>
                        </a>
                    </div>
                </div>
                <?php endif; ?>

                <!-- ویجت اشتراک‌گذاری -->
                <div class="bg-white dark:bg-[#1a1c23] rounded-2xl p-4 border border-[var(--border)] shadow-sm">
                    <h3 class="text-[14px] font-extrabold text-gray-900 dark:text-white mb-4 flex items-center gap-2 pb-3 border-b border-[var(--border)]">
                        <i class="ph ph-share-network text-primary text-xl"></i> اشتراک‌گذاری این تحلیل
                    </h3>
                    <div class="flex items-center justify-center gap-3">
                        <a href="#" class="w-9 h-9 rounded-full bg-[#0088cc]/10 text-[#0088cc] flex items-center justify-center text-lg hover:bg-[#0088cc] hover:text-white transition-colors tooltip" aria-label="تلگرام">
                            <i class="ph-fill ph-telegram-logo"></i>
                        </a>
                        <a href="#" class="w-9 h-9 rounded-full bg-black/5 dark:bg-white/10 text-black dark:text-white flex items-center justify-center text-lg hover:bg-black hover:text-white dark:hover:bg-white dark:hover:text-black transition-colors tooltip" aria-label="توییتر (ایکس)">
                            <i class="ph-fill ph-x-logo"></i>
                        </a>
                        <a href="#" class="w-9 h-9 rounded-full bg-[#25D366]/10 text-[#25D366] flex items-center justify-center text-lg hover:bg-[#25D366] hover:text-white transition-colors tooltip" aria-label="واتس‌اپ">
                            <i class="ph-fill ph-whatsapp-logo"></i>
                        </a>
                        <button class="w-9 h-9 rounded-full bg-gray-100 dark:bg-white/10 text-gray-600 dark:text-gray-300 flex items-center justify-center text-lg hover:bg-gray-200 dark:hover:bg-white/20 transition-colors tooltip" aria-label="کپی لینک">
                            <i class="ph ph-link"></i>
                        </button>
                    </div>
                </div>

                <!-- ویجت: تحلیل‌های برتر -->
                <div class="bg-white dark:bg-[#1a1c23] rounded-2xl p-4 border border-[var(--border)] shadow-sm">
                    <h3 class="text-[14px] font-extrabold text-gray-900 dark:text-white mb-4 flex items-center gap-2 pb-3 border-b border-[var(--border)]">
                        <i class="ph ph-trend-up text-primary text-xl"></i> تحلیل‌های برتر
                    </h3>
                    <div class="space-y-4">
                        <?php 
                        $top_analyses = [
                            ['img' => 'assets/images/posts images/اقتصادایران-ak1549-ak3280-1200x800-1024x683.webp', 'title' => 'چشم‌انداز تورم در بودجه سال آینده'],
                            ['img' => 'assets/images/posts images/بورس-1-ak6185-1024x683.webp', 'title' => 'ریسک‌های سیستماتیک بازار سرمایه']
                        ];
                        foreach($top_analyses as $analysis): 
                        ?>
                        <a href="#" class="group flex gap-3 items-center pb-4 border-b border-[var(--border)] last:border-0 last:pb-0">
                            <div class="w-14 h-14 rounded-lg overflow-hidden shrink-0 border border-black/5 dark:border-white/5">
                                <img src="<?php echo $analysis['img']; ?>" alt="خبر" class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-110">
                            </div>
                            <div class="flex flex-col flex-1">
                                <h4 class="text-[12px] font-bold text-gray-800 dark:text-gray-200 leading-tight mb-1 group-hover:text-primary transition-colors line-clamp-2">
                                    <?php echo $analysis['title']; ?>
                                </h4>
                            </div>
                        </a>
                        <?php endforeach; ?>
                    </div>
                </div>

                <!-- ویجت: پیشنهاد سردبیر -->
                <div class="bg-white dark:bg-[#1a1c23] rounded-2xl p-4 border border-[var(--border)] shadow-sm">
                    <h3 class="text-[14px] font-extrabold text-gray-900 dark:text-white mb-4 flex items-center gap-2 pb-3 border-b border-[var(--border)]">
                        <i class="ph ph-star text-primary text-xl"></i> پیشنهاد سردبیر
                    </h3>
                    <div class="space-y-4">
                        <?php 
                        $sidebar_imgs = [
                            'assets/images/posts images/شاخص-بورس-ak5259-ak4687-1200x800-1024x683.webp',
                            'assets/images/posts images/27738882_1_0_799_449_1920x0_80_0_0_5c1b2e4e4887372d25d2ddaca10d8bb0.jpg.webp'
                        ];
                        for($i = 0; $i < 2; $i++): 
                        ?>
                        <a href="#" class="group flex gap-3 items-center pb-4 border-b border-[var(--border)] last:border-0 last:pb-0">
                            <div class="w-14 h-14 rounded-lg overflow-hidden shrink-0 border border-black/5 dark:border-white/5">
                                <img src="<?php echo $sidebar_imgs[$i]; ?>" alt="خبر" class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-110">
                            </div>
                            <div class="flex flex-col flex-1">
                                <h4 class="text-[12px] font-bold text-gray-800 dark:text-gray-200 leading-tight mb-1 group-hover:text-primary transition-colors line-clamp-2">
                                    سناریوهای محتمل در موازنه قدرت و اقتصاد منطقه‌ای
                                </h4>
                                <span class="text-[10px] text-gray-500">۳ روز پیش</span>
                            </div>
                        </a>
                        <?php endfor; ?>
                    </div>
                </div>

                <!-- ویجت: پرونده‌های ویژه -->
                <div class="bg-white dark:bg-[#1a1c23] rounded-2xl p-4 border border-[var(--border)] shadow-sm">
                    <h3 class="text-[14px] font-extrabold text-gray-900 dark:text-white mb-4 flex items-center gap-2 pb-3 border-b border-[var(--border)]">
                        <i class="ph ph-folder-open text-primary text-xl"></i> پرونده‌های ویژه
                    </h3>
                    <div class="space-y-4">
                        <?php 
                        $dossiers = [
                            ['img' => 'assets/images/posts images/troja.jpeg', 'title' => 'پروژه نفوذ شناختی و مهندسی هراس', 'live' => true],
                            ['img' => 'assets/images/posts images/جنگ+ایران+آمریکا+مذاکرات+پاکستان.webp', 'title' => 'بررسی ابعاد مذاکرات منطقه‌ای', 'live' => false]
                        ];
                        foreach($dossiers as $dossier): 
                        ?>
                        <a href="#" class="group flex gap-3 items-center pb-4 border-b border-[var(--border)] last:border-0 last:pb-0">
                            <div class="w-14 h-14 rounded-lg overflow-hidden shrink-0 border border-black/5 dark:border-white/5 relative">
                                <img src="<?php echo $dossier['img']; ?>" alt="پرونده" class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-110">
                            </div>
                            <div class="flex flex-col flex-1">
                                <?php if($dossier['live']): ?>
                                <div class="flex items-center gap-1.5 mb-1">
                                    <span class="w-1.5 h-1.5 rounded-full bg-red-500 animate-pulse"></span>
                                    <span class="text-[10px] font-bold text-red-500 uppercase">در جریان</span>
                                </div>
                                <?php endif; ?>
                                <h4 class="text-[12px] font-bold text-gray-800 dark:text-gray-200 leading-tight group-hover:text-primary transition-colors line-clamp-2 <?php echo !$dossier['live'] ? 'mt-1' : ''; ?>">
                                    <?php echo $dossier['title']; ?>
                                </h4>
                            </div>
                        </a>
                        <?php endforeach; ?>
                    </div>
                </div>

            </aside>
            
        </div>

        <!-- ═══ بخش مطالب مرتبط (Full-Width, 3 Columns) ═══ -->
        <div class="mt-16 pt-10 border-t border-[var(--border)]">
            <div class="flex items-center gap-3 mb-8">
                <div class="w-2 h-8 bg-primary rounded-sm"></div>
                <h2 class="text-2xl font-extrabold text-gray-900 dark:text-white">مطالب مرتبط</h2>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <?php 
                $related_imgs = [
                    'assets/images/posts images/2279480_168.jpg',
                    'assets/images/posts images/جنگ+ایران+آمریکا+مذاکرات+پاکستان.webp',
                    'assets/images/posts images/بورس-1-ak6185-1024x683.webp'
                ];
                for($i = 0; $i < 3; $i++): 
                ?>
                <article class="archive-card group flex flex-col bg-white dark:bg-[#1a1c23] rounded-2xl border border-[var(--border)] overflow-hidden transition-all duration-300 hover:shadow-md hover:border-primary/30 hover:-translate-y-1">
                    <a href="#" class="relative aspect-[16/9] overflow-hidden block">
                        <img src="<?php echo $related_imgs[$i]; ?>" alt="مطلب مرتبط" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                    </a>
                    <div class="p-5 flex flex-col flex-1">
                        <h3 class="text-base font-bold text-gray-900 dark:text-white leading-[1.6] mb-3">
                            <a href="#" class="hover:text-primary transition-colors line-clamp-2">
                                تأثیر تحولات اخیر بر بازارهای نوظهور و سیاست‌گذاری‌های پولی
                            </a>
                        </h3>
                        <p class="text-[13px] text-gray-500 line-clamp-2 mb-4 leading-relaxed">این گزارش به بررسی روندهای کلان اقتصادی و تاثیر آن بر سیاست‌گذاری‌های پولی می‌پردازد...</p>
                        
                        <div class="flex items-center justify-between pt-4 border-t border-[var(--border)] mt-auto">
                            <div class="flex items-center gap-2">
                                <img src="assets/images/user Avatar/a9d7f2cbb32944f1bcd60800dda1d236.png" class="w-6 h-6 rounded-md object-cover">
                                <span class="text-[11px] font-bold text-gray-700 dark:text-gray-300">نویسنده مهمان</span>
                            </div>
                            <div class="an-text-card__score scale-90 origin-left">
                                <strong>۴.۵</strong>
                                <i class="ph ph-check"></i>
                            </div>
                        </div>
                    </div>
                </article>
                <?php endfor; ?>
            </div>
        </div>

        <!-- ═══ نوار شناور ابزارها (Floating Sticky Bar - Mobile First) ═══ -->
        <div class="fixed bottom-6 inset-x-0 z-50 flex justify-center pointer-events-none px-4 lg:hidden">
            <div class="pointer-events-auto flex items-center gap-2 p-2 bg-white/80 dark:bg-[#1a1c23]/80 backdrop-blur-xl border border-black/10 dark:border-white/10 rounded-full shadow-[0_10px_40px_rgba(0,0,0,0.12)] transition-transform duration-300 translate-y-20" id="floating-action-bar">
                <!-- Share Button -->
                <button class="w-12 h-12 rounded-full bg-gray-100/50 dark:bg-white/5 flex items-center justify-center text-gray-700 dark:text-gray-300 hover:bg-primary hover:text-white transition-colors" aria-label="اشتراک گذاری">
                    <i class="ph ph-share-network text-xl"></i>
                </button>
                
                <!-- Like Button with micro-interaction -->
                <button class="w-12 h-12 rounded-full bg-gray-100/50 dark:bg-white/5 flex items-center justify-center text-gray-700 dark:text-gray-300 hover:bg-red-500 hover:text-white transition-all active:scale-90" aria-label="پسندیدن">
                    <i class="ph ph-heart text-xl"></i>
                </button>

                <!-- Comments Shortcut -->
                <a href="#comments-section" class="w-12 h-12 rounded-full bg-gray-100/50 dark:bg-white/5 flex items-center justify-center text-gray-700 dark:text-gray-300 hover:bg-primary hover:text-white transition-colors relative">
                    <i class="ph ph-chat-circle-dots text-xl"></i>
                    <span class="absolute top-2 right-2 w-2 h-2 bg-red-500 rounded-full"></span>
                </a>
                
                <!-- divider -->
                <div class="w-px h-8 bg-black/10 dark:bg-white/10 mx-1"></div>
                
                <!-- Bookmark -->
                <button class="w-12 h-12 rounded-full bg-gray-100/50 dark:bg-white/5 flex items-center justify-center text-gray-700 dark:text-gray-300 hover:bg-gray-800 dark:hover:bg-white hover:text-white dark:hover:text-black transition-colors" aria-label="ذخیره">
                    <i class="ph ph-bookmark-simple text-xl"></i>
                </button>
            </div>
        </div>

    </div>
</main>

<style>
/* Theater Mode Styles */
body.theater-active {
    overflow: hidden;
}
body.theater-active #video-player-wrapper {
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 90vw !important;
    height: 85vh !important;
    max-width: 1400px;
    z-index: 70;
    border-radius: 24px;
}
body.theater-active #theater-backdrop {
    opacity: 1;
    pointer-events: auto;
}
</style>

<script>
document.addEventListener("DOMContentLoaded", () => {
    // 1. Theater Mode Toggle
    const theaterBtn = document.getElementById("theater-mode-btn");
    const videoWrapper = document.getElementById("video-player-wrapper");
    const theaterBackdrop = document.getElementById("theater-backdrop");
    const theaterIcon = document.getElementById("theater-mode-icon");
    let isTheater = false;

    if (theaterBtn && videoWrapper) {
        theaterBtn.addEventListener("click", () => {
            isTheater = !isTheater;
            if (isTheater) {
                // Activate Theater
                document.body.classList.add("theater-active");
                theaterIcon.classList.replace("ph-corners-out", "ph-corners-in");
            } else {
                // Deactivate Theater
                document.body.classList.remove("theater-active");
                theaterIcon.classList.replace("ph-corners-in", "ph-corners-out");
            }
        });
        
        // Close theater on backdrop click
        theaterBackdrop?.addEventListener("click", () => {
            if (isTheater) theaterBtn.click();
        });
    }

    // 2. Floating Sticky Bar Reveal on Scroll
    const floatingBar = document.getElementById("floating-action-bar");
    if (floatingBar) {
        window.addEventListener("scroll", () => {
            if (window.scrollY > 400) {
                floatingBar.classList.remove("translate-y-20");
            } else {
                floatingBar.classList.add("translate-y-20");
            }
        });
    }
});
</script>

<?php
require_once __DIR__ . '/components/footer.php';
?>
