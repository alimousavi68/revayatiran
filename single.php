<?php
require_once __DIR__ . '/components/header.php';
?>

<main class="bg-gray-50/50 dark:bg-black/20 min-h-screen pt-8 md:pt-12 pb-16">
    <div class="container">
        
        <!-- ═══ بخش هدر دوتکه (Split Hero) ═══ -->
        <article class="bg-white dark:bg-[#1a1c23] rounded-2xl border border-[var(--border)] shadow-sm mb-10 p-[15px]">
            <div class="flex flex-col md:flex-row h-full">
                
                <!-- سمت راست: اطلاعات پست -->
                <div class="flex-1 p-6 md:p-8 lg:p-12 flex flex-col justify-center order-2 md:order-1 bg-gradient-to-bl from-transparent to-gray-50 dark:to-white/5 rounded-r-2xl">
                    <!-- بردکرامپ -->
                    <div class="mb-6">
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
                    </div>
                    
                    <!-- تیتر اصلی -->
                    <h1 class="text-3xl md:text-4xl lg:text-[40px] font-extrabold text-gray-900 dark:text-white leading-[1.6] mb-8 tracking-tight">
                        کریدورهای ژئوپلیتیک نوین؛ بازآرایی زنجیره تامین انرژی و موازنه قدرت منطقه‌ای
                    </h1>
                    
                    <!-- لید (خلاصه) -->
                    <p class="text-lg text-gray-600 dark:text-gray-300 leading-relaxed mb-10 border-r-4 border-primary/50 pr-4 font-medium">
                        این تحلیل راهبردی، به بررسی دگرگونی مسیرهای ترانزیت و جایگاه متغیر ژئوپلیتیک ایران در شبکه انتقال انرژی پرداخته و الزامات دیپلماسی اقتصادی نوین را تبیین می‌نماید.
                    </p>
                    
                    <!-- متادیتا و نویسنده -->
                    <div class="flex flex-wrap items-center justify-between gap-4 pt-6 border-t border-[var(--border)] mt-auto">
                        <div class="flex items-center gap-3">
                            <img src="assets/images/user Avatar/8fc8b30f66b4489aaeb92b686a386cdc.png" alt="نویسنده" class="w-12 h-12 rounded-xl object-cover border border-[var(--border)] p-0.5 bg-white dark:bg-transparent">
                            <div class="flex flex-col">
                                <span class="text-sm font-bold text-gray-900 dark:text-white">دکتر مسعود فرهادی</span>
                                <span class="text-xs text-gray-500">استراتژیست مطالعات منطقه‌ای</span>
                            </div>
                        </div>
                        
                        <div class="flex items-center gap-4 text-xs text-gray-500 font-medium">
                            <span class="flex items-center gap-1.5"><i class="ph ph-calendar-blank text-base"></i> ۱۲ تیر ۱۴۰۵</span>
                        </div>
                    </div>
                </div>

                <!-- سمت چپ: تصویر شاخص -->
                <div class="w-full md:w-[45%] lg:w-[50%] relative min-h-[300px] md:min-h-full order-1 md:order-2">
                    <img src="assets/images/posts images/219-os5jc-1-ak32467-800x534.webp" alt="تصویر شاخص" class="absolute inset-0 w-full h-full object-cover rounded-2xl">
                </div>

            </div>
        </article>

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
                        
                        <h3 id="paradigm-shift" class="text-xl md:text-2xl font-bold text-gray-900 dark:text-white mt-12 mb-6 flex items-center gap-2 before:content-[''] before:block before:w-2 before:h-8 before:bg-primary before:rounded-sm">
                            تغییر پارادایم در دیپلماسی ترانزیت
                        </h3>
                        
                        <blockquote class="border-r-4 border-primary bg-primary/5 p-5 md:p-6 rounded-l-2xl text-lg font-medium text-gray-800 dark:text-gray-200 shadow-inner">
                            آنچه امروز به عنوان کریدورهای ژئوپلیتیک می‌شناسیم، صرفاً مسیرهای عبور کالا نیستند، بلکه شریان‌هایی هستند که معماری امنیتی و اقتصادی دهه‌های آینده را شکل می‌دهند.
                        </blockquote>

                        <p>
                            کشورهایی که نتوانند خود را در این شبکه‌های جدید جانمایی کنند، به مرور به حاشیه اقتصاد جهانی رانده خواهند شد.
                        </p>
                        
                        <figure class="my-10">
                            <img src="assets/images/posts images/اقتصادایران-ak1549-ak3280-1200x800-1024x683.webp" alt="تصویر درون متن" class="w-full rounded-2xl border border-[var(--border)] shadow-sm">
                            <figcaption class="text-center text-sm text-gray-500 mt-3">نقشه توزیع شریان‌های انرژی در خاورمیانه (منبع: موسسه مطالعات استراتژیک)</figcaption>
                        </figure>
                        
                        <p>
                            ایران با توجه به موقعیت بی‌نظیر جغرافیایی خود، دارای ظرفیت‌های بالقوه فراوانی برای تبدیل شدن به نقطه ثقل این کریدورها است. اما بالفعل کردن این ظرفیت‌ها نیازمند یک استراتژی منسجم، سرمایه‌گذاری هدفمند و دیپلماسی چندوجهی است.
                        </p>
                        
                        <h3 id="future-outlook" class="text-xl md:text-2xl font-bold text-gray-900 dark:text-white mt-12 mb-6 flex items-center gap-2 before:content-[''] before:block before:w-2 before:h-8 before:bg-primary before:rounded-sm">
                            چشم‌انداز و سناریوهای پیش‌رو
                        </h3>
                        <p>
                            با توجه به سرعت تغییرات، سه سناریوی کلان برای آینده موازنه قدرت متصور است. در سناریوی اول، ائتلاف‌های منطقه‌ای شکل جدیدی به خود می‌گیرند...
                        </p>
                    </div>

                    <!-- سیستم امتیازدهی (Rating) -->
                    <div class="mt-12 mb-8">
                        <div class="flex flex-col sm:flex-row items-center justify-between gap-4 p-6 bg-gray-50 dark:bg-white/5 rounded-2xl border border-[var(--border)]">
                            <div class="flex items-center gap-4">
                                <div class="w-12 h-12 rounded-2xl bg-primary/10 flex items-center justify-center text-primary text-2xl shadow-sm">
                                    <i class="ph-bold ph-check"></i>
                                </div>
                                <div>
                                    <strong class="block text-sm md:text-base font-bold text-gray-900 dark:text-white mb-1">ارزیابی شما از این تحلیل چیست؟</strong>
                                    <span class="text-xs text-gray-500 font-medium">میانگین فعلی: ۴.۹ از ۵ (۲۴ رأی)</span>
                                </div>
                            </div>
                            <div class="flex items-center gap-2 flex-row-reverse" dir="ltr">
                                <!-- Numbered check buttons (CSS peer logic) -->
                                <?php for($j=5; $j>=1; $j--): ?>
                                <button class="peer group w-10 h-10 rounded-full bg-white dark:bg-black/30 border border-gray-200 dark:border-white/10 text-gray-400 hover:bg-primary hover:text-white hover:border-primary peer-hover:bg-primary peer-hover:text-white peer-hover:border-primary transition-all flex items-center justify-center shadow-sm" aria-label="<?php echo $j; ?> امتیاز">
                                    <span class="group-hover:hidden font-bold"><?php echo $j; ?></span>
                                    <i class="ph-bold ph-check hidden group-hover:block text-lg"></i>
                                </button>
                                <?php endfor; ?>
                            </div>
                        </div>
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
                
                <!-- ویجت فهرست مطالب (TOC) -->
                <div class="bg-gray-50 dark:bg-white/5 rounded-2xl p-4 border border-[var(--border)] shadow-sm">
                    <h3 class="text-[15px] font-extrabold text-gray-900 dark:text-white mb-4 flex items-center gap-2 pb-3 border-b border-gray-200 dark:border-white/10">
                        <i class="ph ph-list-dashes text-primary text-xl"></i> فهرست مطالب
                    </h3>
                    <ul class="space-y-3 text-sm font-medium">
                        <li>
                            <a href="#paradigm-shift" class="text-primary flex items-center gap-2 hover:translate-x-[-4px] transition-transform">
                                <span class="w-1.5 h-1.5 rounded-full bg-primary shrink-0"></span>
                                تغییر پارادایم در دیپلماسی ترانزیت
                            </a>
                        </li>
                        <li>
                            <a href="#future-outlook" class="text-gray-600 dark:text-gray-400 flex items-center gap-2 hover:text-primary hover:translate-x-[-4px] transition-all">
                                <span class="w-1.5 h-1.5 rounded-full bg-gray-300 dark:bg-gray-600 shrink-0"></span>
                                چشم‌انداز و سناریوهای پیش‌رو
                            </a>
                        </li>
                    </ul>
                </div>
                
                <!-- ویجت امتیاز دهی سایدبار -->
                <div class="bg-white dark:bg-[#1a1c23] rounded-2xl p-4 border border-[var(--border)] shadow-sm text-center">
                    <span class="block text-[13px] font-bold text-gray-900 dark:text-white mb-3">ارزیابی شما از تحلیل</span>
                    <div class="flex items-center justify-center gap-1.5 flex-row-reverse" dir="ltr">
                        <?php for($j=5; $j>=1; $j--): ?>
                        <button class="peer group w-8 h-8 rounded-full bg-gray-50 dark:bg-white/5 border border-gray-200 dark:border-white/10 text-gray-400 hover:bg-primary hover:text-white hover:border-primary peer-hover:bg-primary peer-hover:text-white peer-hover:border-primary transition-all flex items-center justify-center shadow-sm" aria-label="<?php echo $j; ?> امتیاز">
                            <span class="group-hover:hidden font-bold text-xs"><?php echo $j; ?></span>
                            <i class="ph-bold ph-check hidden group-hover:block text-sm"></i>
                        </button>
                        <?php endfor; ?>
                    </div>
                </div>

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

    </div>
</main>

<?php
require_once __DIR__ . '/components/footer.php';
?>
