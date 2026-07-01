<section class="max-w-7xl mx-auto px-4 lg:px-8 py-12">
    
    <!-- Title & Tabs -->
    <div class="flex flex-col md:flex-row md:items-center gap-4 mb-8">
        <h2 class="text-navy text-h1 whitespace-nowrap flex items-center gap-2">
            <i class="ph-duotone ph-rss text-gold"></i> رصد اخبار
        </h2>
        
        <div class="h-px bg-border flex-grow hidden md:block"></div>
        
        <div class="flex items-center overflow-x-auto hide-scrollbar gap-4 text-sm font-medium">
            <button class="bg-navy text-white px-4 py-1.5 rounded-full whitespace-nowrap shadow-sm">همه اخبار</button>
            <button class="text-muted hover:text-navy hover:bg-surface-offset px-4 py-1.5 rounded-full transition-colors whitespace-nowrap">سیاست داخلی</button>
            <button class="text-muted hover:text-navy hover:bg-surface-offset px-4 py-1.5 rounded-full transition-colors whitespace-nowrap">سیاست خارجی</button>
            <button class="text-muted hover:text-navy hover:bg-surface-offset px-4 py-1.5 rounded-full transition-colors whitespace-nowrap">اقتصاد سیاسی</button>
        </div>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8">
        
        <!-- سایدبار پربازدیدترین اخبار (Left Sidebar in RTL = Right visually, wait, the design says: سایدبار سمت چپ. Let's make it col-span-3 on the left (which is visually left in RTL) -> order-last or just put it after in DOM) -->
        
        <!-- ستون اصلی کارت‌های خبری -->
        <div class="lg:col-span-9">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- کارت خبر ۱ (با یادداشت سردبیر) -->
                <article class="relative rounded-sm overflow-hidden group cursor-pointer aspect-[4/5]">
                    <img src="https://images.unsplash.com/photo-1574515548684-28b3353b3fbb?q=80&w=600&auto=format&fit=crop" alt="خبر ۱" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                    <div class="absolute inset-0 bg-gradient-to-t from-navy/95 via-navy/50 to-transparent"></div>
                    
                    <!-- تگ دسته بندی و یادداشت -->
                    <div class="absolute top-4 right-4 flex gap-2">
                        <span class="bg-white/20 backdrop-blur-sm text-white text-[10px] px-2 py-1 rounded-sm">سیاست خارجی</span>
                    </div>
                    <div class="absolute top-4 left-4">
                        <div class="bg-gold text-white text-xs p-1.5 rounded-full shadow-lg" title="دارای یادداشت سردبیر">
                            <i class="ph-fill ph-pencil-simple"></i>
                        </div>
                    </div>

                    <div class="absolute bottom-0 w-full p-5">
                        <h3 class="text-white text-h3 leading-snug mb-2 group-hover:text-gold transition-colors">
                            دیدار وزرای خارجه در ژنو و احتمال از سرگیری مذاکرات صلح
                        </h3>
                        <p class="text-white/70 text-xs line-clamp-2">
                            گزارش‌ها حاکی از آن است که پس از وقفه‌ای شش ماهه، دیپلمات‌های ارشد برای...
                        </p>
                    </div>
                </article>

                <!-- کارت خبر ۲ -->
                <article class="relative rounded-sm overflow-hidden group cursor-pointer aspect-[4/5]">
                    <img src="https://images.unsplash.com/photo-1526470608159-92274fcce77e?q=80&w=600&auto=format&fit=crop" alt="خبر ۲" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                    <div class="absolute inset-0 bg-gradient-to-t from-navy/95 via-navy/50 to-transparent"></div>
                    
                    <div class="absolute top-4 right-4 flex gap-2">
                        <span class="bg-white/20 backdrop-blur-sm text-white text-[10px] px-2 py-1 rounded-sm">اقتصاد سیاسی</span>
                    </div>

                    <div class="absolute bottom-0 w-full p-5">
                        <h3 class="text-white text-h3 leading-snug mb-2 group-hover:text-gold transition-colors">
                            لایحه جدید مالیاتی روی میز مجلس؛ واکنش بازار سرمایه چه خواهد بود؟
                        </h3>
                        <p class="text-white/70 text-xs line-clamp-2">
                            با ارسال لایحه جدید مالیات بر عایدی سرمایه به مجلس، گمانه‌زنی‌ها درباره خروج نقدینگی افزایش یافت.
                        </p>
                    </div>
                </article>

                <!-- کارت خبر ۳ -->
                <article class="relative rounded-sm overflow-hidden group cursor-pointer aspect-[4/5]">
                    <img src="https://images.unsplash.com/photo-1432821596592-e2c18b78144f?q=80&w=600&auto=format&fit=crop" alt="خبر ۳" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                    <div class="absolute inset-0 bg-gradient-to-t from-navy/95 via-navy/50 to-transparent"></div>
                    
                    <div class="absolute top-4 right-4 flex gap-2">
                        <span class="bg-white/20 backdrop-blur-sm text-white text-[10px] px-2 py-1 rounded-sm">سیاست داخلی</span>
                    </div>

                    <div class="absolute bottom-0 w-full p-5">
                        <h3 class="text-white text-h3 leading-snug mb-2 group-hover:text-gold transition-colors">
                            تغییرات گسترده در سطح مدیران ارشد اجرایی استان‌ها کلید خورد
                        </h3>
                        <p class="text-white/70 text-xs line-clamp-2">
                            بر اساس احکام جدید صادر شده، بیش از پنج استاندار در روزهای آینده جابجا خواهند شد.
                        </p>
                    </div>
                </article>
                
                <!-- کارت خبر ۴ -->
                <article class="relative rounded-sm overflow-hidden group cursor-pointer aspect-[4/5]">
                    <img src="https://images.unsplash.com/photo-1532187655075-89bdf11f4228?q=80&w=600&auto=format&fit=crop" alt="خبر ۴" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                    <div class="absolute inset-0 bg-gradient-to-t from-navy/95 via-navy/50 to-transparent"></div>
                    <div class="absolute top-4 right-4 flex gap-2">
                        <span class="bg-white/20 backdrop-blur-sm text-white text-[10px] px-2 py-1 rounded-sm">امنیت</span>
                    </div>
                    <div class="absolute bottom-0 w-full p-5">
                        <h3 class="text-white text-h3 leading-snug mb-2 group-hover:text-gold transition-colors">تقویت تجهیزات راداری در مناطق مرزی شرق کشور</h3>
                    </div>
                </article>

                <!-- کارت خبر ۵ -->
                <article class="relative rounded-sm overflow-hidden group cursor-pointer aspect-[4/5]">
                    <img src="https://images.unsplash.com/photo-1555848962-6e79363ec58f?q=80&w=600&auto=format&fit=crop" alt="خبر ۵" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                    <div class="absolute inset-0 bg-gradient-to-t from-navy/95 via-navy/50 to-transparent"></div>
                    <div class="absolute top-4 right-4 flex gap-2">
                        <span class="bg-white/20 backdrop-blur-sm text-white text-[10px] px-2 py-1 rounded-sm">بین‌الملل</span>
                    </div>
                    <div class="absolute bottom-0 w-full p-5">
                        <h3 class="text-white text-h3 leading-snug mb-2 group-hover:text-gold transition-colors">بحران کمبود غلات جهانی؛ هشدار سازمان ملل</h3>
                    </div>
                </article>

                <!-- کارت خبر ۶ -->
                <article class="relative rounded-sm overflow-hidden group cursor-pointer aspect-[4/5]">
                    <img src="https://images.unsplash.com/photo-1507679799987-c73779587ccf?q=80&w=600&auto=format&fit=crop" alt="خبر ۶" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                    <div class="absolute inset-0 bg-gradient-to-t from-navy/95 via-navy/50 to-transparent"></div>
                    <div class="absolute top-4 right-4 flex gap-2">
                        <span class="bg-white/20 backdrop-blur-sm text-white text-[10px] px-2 py-1 rounded-sm">اقتصاد سیاسی</span>
                    </div>
                    <div class="absolute bottom-0 w-full p-5">
                        <h3 class="text-white text-h3 leading-snug mb-2 group-hover:text-gold transition-colors">نوسانات ارزی و پیش‌بینی کارشناسان از بازار سه ماهه آینده</h3>
                    </div>
                </article>
            </div>
        </div>

        <!-- سایدبار اخبار پربازدید -->
        <div class="lg:col-span-3">
            <div class="bg-surface-offset/50 dark:bg-navy/20 p-6 rounded-md h-full border border-border/50 dark:border-white/5 relative overflow-hidden">
                <div class="absolute top-0 right-0 w-24 h-24 bg-gold/5 rounded-bl-full z-0"></div>
                <h4 class="text-navy dark:text-white font-bold text-lg mb-8 flex items-center gap-2 relative z-10 border-b-2 border-gold inline-block pb-2">
                    <i class="ph-duotone ph-push-pin text-gold"></i> اخبار پربازدید
                </h4>
                
                <div class="flex flex-col gap-6 relative z-10">
                    <article class="relative group cursor-pointer border-b border-border/40 dark:border-white/10 pb-6 last:border-0 last:pb-0">
                        <span class="absolute -right-2 top-0 text-6xl font-black text-border/40 dark:text-white/5 select-none z-0 group-hover:text-gold/20 transition-colors leading-none num-inter">۱</span>
                        <div class="relative z-10 pr-6">
                            <h5 class="text-main dark:text-gray-200 font-semibold text-sm leading-relaxed group-hover:text-navy dark:group-hover:text-gold transition-colors">جزئیات توافق‌نامه استراتژیک جدید؛ کدام بندها محرمانه ماندند؟</h5>
                            <span class="text-muted dark:text-gray-400 text-[10px] mt-2 flex items-center gap-1"><i class="ph-duotone ph-clock"></i> ۲ ساعت پیش</span>
                        </div>
                    </article>

                    <article class="relative group cursor-pointer border-b border-border/40 dark:border-white/10 pb-6 last:border-0 last:pb-0">
                        <span class="absolute -right-2 top-0 text-6xl font-black text-border/40 dark:text-white/5 select-none z-0 group-hover:text-gold/20 transition-colors leading-none num-inter">۲</span>
                        <div class="relative z-10 pr-6">
                            <h5 class="text-main dark:text-gray-200 font-semibold text-sm leading-relaxed group-hover:text-navy dark:group-hover:text-gold transition-colors">واکنش تند احزاب مخالف به طرح ساماندهی فضای مجازی</h5>
                            <span class="text-muted dark:text-gray-400 text-[10px] mt-2 flex items-center gap-1"><i class="ph-duotone ph-clock"></i> ۵ ساعت پیش</span>
                        </div>
                    </article>

                    <article class="relative group cursor-pointer border-b border-border/40 dark:border-white/10 pb-6 last:border-0 last:pb-0">
                        <span class="absolute -right-2 top-0 text-6xl font-black text-border/40 dark:text-white/5 select-none z-0 group-hover:text-gold/20 transition-colors leading-none num-inter">۳</span>
                        <div class="relative z-10 pr-6">
                            <h5 class="text-main dark:text-gray-200 font-semibold text-sm leading-relaxed group-hover:text-navy dark:group-hover:text-gold transition-colors">سقوط آزاد شاخص بورس در پی اخبار تنش‌های مرزی</h5>
                            <span class="text-muted dark:text-gray-400 text-[10px] mt-2 flex items-center gap-1"><i class="ph-duotone ph-clock"></i> دیروز</span>
                        </div>
                    </article>
                    
                    <article class="relative group cursor-pointer border-b border-border/40 dark:border-white/10 pb-6 last:border-0 last:pb-0">
                        <span class="absolute -right-2 top-0 text-6xl font-black text-border/40 dark:text-white/5 select-none z-0 group-hover:text-gold/20 transition-colors leading-none num-inter">۴</span>
                        <div class="relative z-10 pr-6">
                            <h5 class="text-main dark:text-gray-200 font-semibold text-sm leading-relaxed group-hover:text-navy dark:group-hover:text-gold transition-colors">پشت پرده استعفای ناگهانی وزیر چه بود؟</h5>
                            <span class="text-muted dark:text-gray-400 text-[10px] mt-2 flex items-center gap-1"><i class="ph-duotone ph-clock"></i> دیروز</span>
                        </div>
                    </article>
                </div>
            </div>
        </div>

    </div>
</section>
