<?php
// شبیه‌سازی دسته بندی فعلی
$category_name = isset($_GET['category']) ? htmlspecialchars($_GET['category']) : 'آرشیو مطالب';
$category_title = 'آرشیو مطالب';

switch ($category_name) {
    case 'daily-narrative':
        $category_title = 'روایت روز';
        break;
    case 'news-monitoring':
        $category_title = 'رصد اخبار';
        break;
    case 'special-dossiers':
        $category_title = 'پرونده ویژه';
        break;
    case 'media-observatory':
        $category_title = 'دیده‌بان رسانه';
        break;
    case 'editors-pick':
        $category_title = 'پیشنهاد سردبیر';
        break;
}

require_once __DIR__ . '/components/header.php';
?>

<main class="bg-gray-50/50 dark:bg-black/20 min-h-screen pb-16">
    <section class="pt-8 md:pt-10" id="archive-content">
        <div class="container">
            

            <!-- ═══ نوار عنوان صفحه، تعداد مطالب و مرتب‌سازی (در بالاترین بخش) ═══ -->
            <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4 mb-6 pb-4 border-b border-[var(--border)]">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-xl bg-white dark:bg-white/10 border border-[var(--border)] shadow-sm text-primary flex items-center justify-center shrink-0">
                        <i class="ph ph-books text-xl"></i>
                    </div>
                    <div>
                        <h1 class="text-lg md:text-xl font-extrabold text-gray-900 dark:text-white tracking-tight"><?php echo $category_title; ?></h1>
                        <p class="text-gray-500 dark:text-gray-400 text-[11px] md:text-xs mt-0.5">نمایش ۱ تا ۶ از ۱۲۴ مطلب</p>
                    </div>
                </div>
                
                <!-- فیلد مرتب‌سازی (واکنش‌گرا برای دسکتاپ و موبایل با عرض کامل در موبایل‌های بسیار کوچک) -->
                <div class="flex items-center justify-between sm:justify-start w-full sm:w-auto gap-2 bg-white dark:bg-white/5 px-3.5 py-2 rounded-xl border border-[var(--border)] shadow-sm">
                    <span class="text-[13px] text-gray-500 shrink-0 flex items-center gap-1.5">
                        <i class="ph ph-arrows-down-up text-primary text-sm"></i>
                        مرتب‌سازی:
                    </span>
                    <select class="bg-transparent text-[13px] font-semibold text-gray-900 dark:text-white border-none outline-none cursor-pointer focus:ring-0">
                        <option>جدیدترین</option>
                        <option>محبوب‌ترین</option>
                        <option>بالاترین امتیاز</option>
                    </select>
                </div>
            </div>

            <div class="flex flex-col lg:flex-row gap-8">
                
                <!-- ═══ سایدبار (جستجو و فیلترها - اکاردیونی در موبایل زیر عنوان، همیشه باز در دسکتاپ) ═══ -->
                <aside class="w-full lg:w-[280px] shrink-0 lg:sticky lg:top-28 self-start">
                    
                    <!-- کانتینر آکاردئون موبایل -->
                    <div class="bg-white dark:bg-white/5 rounded-2xl border border-[var(--border)] shadow-sm overflow-hidden lg:border-0 lg:bg-transparent lg:dark:bg-transparent lg:shadow-none lg:rounded-none lg:overflow-visible">
                        
                        <!-- هدر آکاردئون (فقط در موبایل و تبلت نمایش داده می‌شود: max-lg) -->
                        <button type="button" 
                                id="archive-filter-toggle" 
                                class="w-full lg:hidden flex items-center justify-between p-4 bg-gray-50/80 dark:bg-white/5 hover:bg-gray-100 dark:hover:bg-white/10 transition-colors text-right cursor-pointer"
                                aria-expanded="false" 
                                aria-controls="archive-filter-body">
                            <div class="flex items-center gap-2.5">
                                <div class="w-8 h-8 rounded-lg bg-primary/10 text-primary flex items-center justify-center">
                                    <i class="ph ph-faders text-lg"></i>
                                </div>
                                <div class="text-right">
                                    <span class="text-sm font-bold text-gray-900 dark:text-white block">جستجو و فیلتر پیشرفته</span>
                                    <span class="text-[11px] text-gray-500 dark:text-gray-400 block font-normal">کلیک کنید برای فیلتر نتایج</span>
                                </div>
                            </div>
                            <div class="flex items-center gap-1 text-gray-400">
                                <i class="ph ph-caret-down text-lg transition-transform duration-300" id="archive-filter-icon"></i>
                            </div>
                        </button>

                        <!-- بدنه آکاردئون (بسته به صورت پیش‌فرض در موبایل/تبلت، همیشه باز در lg و بالاتر) -->
                        <div id="archive-filter-body" class="archive-filter-accordion-content lg:!block">
                            <div class="archive-filter-accordion-inner p-4 lg:p-0 space-y-5 lg:space-y-6">
                                
                                <!-- ویجت جستجو -->
                                <div class="bg-gray-50/60 dark:bg-white/[0.03] lg:bg-white lg:dark:bg-white/5 rounded-2xl p-4 lg:p-5 border border-[var(--border)] lg:shadow-sm">
                                    <h3 class="text-[14px] lg:text-[15px] font-bold text-gray-900 dark:text-white mb-3.5 lg:mb-4 flex items-center gap-2">
                                        <i class="ph ph-magnifying-glass text-primary"></i> جستجو در مطالب
                                    </h3>
                                    <div class="relative">
                                        <input type="text" placeholder="کلمه کلیدی..." class="w-full bg-white dark:bg-black/30 lg:bg-gray-50 lg:dark:bg-black/20 border border-[var(--border)] rounded-xl py-2.5 px-4 text-sm text-gray-800 dark:text-gray-200 focus:outline-none focus:border-primary/50 transition-colors">
                                        <button type="button" aria-label="اعمال جستجو" class="absolute left-2 top-1/2 -translate-y-1/2 w-8 h-8 flex items-center justify-center rounded-lg text-gray-400 hover:text-primary transition-colors">
                                            <i class="ph ph-arrow-left"></i>
                                        </button>
                                    </div>
                                </div>

                                <!-- ویجت فیلتر زمان -->
                                <div class="bg-gray-50/60 dark:bg-white/[0.03] lg:bg-white lg:dark:bg-white/5 rounded-2xl p-4 lg:p-5 border border-[var(--border)] lg:shadow-sm">
                                    <h3 class="text-[14px] lg:text-[15px] font-bold text-gray-900 dark:text-white mb-3.5 lg:mb-4 flex items-center gap-2">
                                        <i class="ph ph-calendar-blank text-primary"></i> زمان انتشار
                                    </h3>
                                    <ul class="space-y-3">
                                        <li>
                                            <label class="flex items-center gap-3 cursor-pointer group">
                                                <input type="radio" name="dateFilter" class="peer sr-only" checked>
                                                <div class="w-5 h-5 rounded-full border-2 border-gray-300 dark:border-gray-600 peer-checked:border-primary flex items-center justify-center transition-colors">
                                                    <div class="w-2.5 h-2.5 rounded-full bg-primary scale-0 peer-checked:scale-100 transition-transform"></div>
                                                </div>
                                                <span class="text-[13px] font-medium text-gray-600 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white transition-colors">همه زمان‌ها</span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="flex items-center gap-3 cursor-pointer group">
                                                <input type="radio" name="dateFilter" class="peer sr-only">
                                                <div class="w-5 h-5 rounded-full border-2 border-gray-300 dark:border-gray-600 peer-checked:border-primary flex items-center justify-center transition-colors">
                                                    <div class="w-2.5 h-2.5 rounded-full bg-primary scale-0 peer-checked:scale-100 transition-transform"></div>
                                                </div>
                                                <span class="text-[13px] font-medium text-gray-600 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white transition-colors">هفته گذشته</span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="flex items-center gap-3 cursor-pointer group">
                                                <input type="radio" name="dateFilter" class="peer sr-only">
                                                <div class="w-5 h-5 rounded-full border-2 border-gray-300 dark:border-gray-600 peer-checked:border-primary flex items-center justify-center transition-colors">
                                                    <div class="w-2.5 h-2.5 rounded-full bg-primary scale-0 peer-checked:scale-100 transition-transform"></div>
                                                </div>
                                                <span class="text-[13px] font-medium text-gray-600 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white transition-colors">ماه گذشته</span>
                                            </label>
                                        </li>
                                    </ul>
                                </div>

                            </div>
                        </div>

                    </div>

                </aside>

                <!-- ═══ ستون اصلی محتوا (Grid) ═══ -->
                <div class="flex-1 min-w-0">
                    
                    <!-- گرید کارت‌ها -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-10">
                        
                        <?php 
                        $images = [
                            'assets/images/posts images/اقتصادایران-ak1549-ak3280-1200x800-1024x683.webp',
                            'assets/images/posts images/2279480_168.jpg',
                            'assets/images/posts images/27738882_1_0_799_449_1920x0_80_0_0_5c1b2e4e4887372d25d2ddaca10d8bb0.jpg.webp',
                            'assets/images/posts images/جنگ+ایران+آمریکا+مذاکرات+پاکستان.webp',
                            'assets/images/posts images/شاخص-بورس-ak5259-ak4687-1200x800-1024x683.webp'
                        ];
                        for($i = 1; $i <= 6; $i++): 
                            $img = $images[$i % count($images)];
                            $score = '۴.' . rand(1, 9);
                        ?>
                        <!-- کارت حرفه‌ای آرشیو -->
                        <article class="archive-card group flex flex-col bg-white dark:bg-[#1a1c23] rounded-2xl border border-[var(--border)] overflow-hidden transition-all duration-300 hover:shadow-lg hover:border-primary/30 hover:-translate-y-1">
                            <!-- تصویر شاخص -->
                            <a href="single.php?id=<?php echo $i; ?>" class="relative aspect-video overflow-hidden block">
                                <img src="<?php echo $img; ?>" alt="تصویر مطلب" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                                <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent opacity-60"></div>
                            </a>
                            
                            <!-- محتوای کارت -->
                            <div class="p-5 flex flex-col flex-1">
                                <h3 class="text-base md:text-lg font-bold text-gray-900 dark:text-white leading-snug mb-3">
                                    <a href="single.php?id=<?php echo $i; ?>" class="hover:text-primary transition-colors line-clamp-2">
                                        عنوان تستی مطلب شماره <?php echo $i; ?> در رابطه با اتفاقات و تحلیل‌های جدید
                                    </a>
                                </h3>
                                <p class="text-[13px] text-gray-600 dark:text-gray-400 line-clamp-2 mb-4 leading-relaxed flex-1">
                                    در این مطلب به بررسی ابعاد مختلف موضوع پرداخته شده و سناریوهای متفاوتی برای آینده این رخداد پیش‌بینی می‌شود که نیازمند توجه ویژه است...
                                </p>
                                
                                <!-- فوتر کارت: متا و نویسنده -->
                                <div class="flex items-center justify-between pt-4 border-t border-[var(--border)] mt-auto">
                                    <!-- اطلاعات نویسنده و زمان -->
                                    <div class="flex items-center gap-2.5">
                                        <img src="assets/images/user Avatar/a9d7f2cbb32944f1bcd60800dda1d236.png" alt="نویسنده" class="w-8 h-8 rounded-[10px] object-cover border border-black/10 dark:border-white/10">
                                        <div class="flex flex-col">
                                            <span class="text-xs font-bold text-gray-900 dark:text-white">نام نویسنده</span>
                                            <span class="text-[11px] text-gray-500 flex items-center gap-1">
                                                ۲ روز پیش
                                                <span class="w-1 h-1 rounded-full bg-gray-300 dark:bg-gray-600"></span>
                                                ۵ دقیقه
                                            </span>
                                        </div>
                                    </div>
                                    
                                    <!-- امتیاز (Score Badge) -->
                                    <div class="an-text-card__score">
                                        <strong><?php echo $score; ?></strong>
                                        <i class="ph ph-check"></i>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <?php endfor; ?>

                    </div>

                    <!-- ═══ صفحه‌بندی مدرن (Pagination) ═══ -->
                    <div class="flex justify-center items-center gap-1.5 mt-10">
                        <a href="#" class="w-10 h-10 flex items-center justify-center rounded-xl border border-[var(--border)] bg-white dark:bg-white/5 text-gray-500 hover:text-primary hover:border-primary/50 transition-all shadow-sm">
                            <i class="ph ph-caret-right text-lg"></i>
                        </a>
                        <a href="#" class="w-10 h-10 flex items-center justify-center rounded-xl border border-primary bg-primary text-white font-bold shadow-sm shadow-primary/20 transition-all">
                            ۱
                        </a>
                        <a href="#" class="w-10 h-10 flex items-center justify-center rounded-xl border border-[var(--border)] bg-white dark:bg-white/5 text-gray-700 dark:text-gray-300 hover:text-primary hover:border-primary/50 transition-all shadow-sm">
                            ۲
                        </a>
                        <a href="#" class="w-10 h-10 flex items-center justify-center rounded-xl border border-[var(--border)] bg-white dark:bg-white/5 text-gray-700 dark:text-gray-300 hover:text-primary hover:border-primary/50 transition-all shadow-sm">
                            ۳
                        </a>
                        <span class="flex items-center justify-center w-8 text-gray-400">...</span>
                        <a href="#" class="w-10 h-10 flex items-center justify-center rounded-xl border border-[var(--border)] bg-white dark:bg-white/5 text-gray-700 dark:text-gray-300 hover:text-primary hover:border-primary/50 transition-all shadow-sm">
                            ۸
                        </a>
                        <a href="#" class="w-10 h-10 flex items-center justify-center rounded-xl border border-[var(--border)] bg-white dark:bg-white/5 text-gray-500 hover:text-primary hover:border-primary/50 transition-all shadow-sm">
                            <i class="ph ph-caret-left text-lg"></i>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </section>
</main>

<?php
require_once __DIR__ . '/components/footer.php';
?>
