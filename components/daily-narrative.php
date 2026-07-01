<section class="max-w-7xl mx-auto px-4 lg:px-8 py-12">
    <!-- هدر بخش (همسو با سایر سکشن‌ها) -->
    <div class="flex items-center gap-4 mb-8">
        <h2 class="text-navy text-h1 whitespace-nowrap flex items-center gap-2">
            <i class="ph-duotone ph-sun text-gold"></i> روایت <span class="text-gold">روز</span>
        </h2>
        <div class="h-px bg-gold/30 flex-grow"></div>
        <a href="#" class="text-gold text-sm font-bold flex items-center gap-1 hover:text-navy transition-colors">
            نمایش همه <i class="ph ph-arrow-left"></i>
        </a>
    </div>

    <!-- Bento Grid Layout -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        
        <!-- کارت بزرگ اصلی (Featured Dynamic Card) - دو برابر ارتفاع معمولی در دسکتاپ -->
        <div class="lg:row-span-2 group relative overflow-hidden rounded-sm border border-border/60 dark:border-white/5 bg-navy flex flex-col justify-end min-h-[500px] p-6 shadow-md transition-all duration-500 hover:shadow-xl hover:-translate-y-1">
            <!-- تصویر پس‌زمینه با افکت تیره کننده -->
            <div class="absolute inset-0 z-0">
                <img src="assets/images/daily-narrative__________.jpg" alt="سیاست‌های یارانه‌ای" class="w-full h-full object-cover opacity-40 group-hover:scale-105 transition-transform duration-1000">
                <div class="absolute inset-0 bg-gradient-to-t from-navy via-navy/60 to-transparent"></div>
            </div>

            <!-- محتوای کارت (بر روی تصویر) -->
            <div class="relative z-10">
                <span class="inline-flex items-center gap-1.5 bg-gold/90 text-navy font-bold text-[10px] px-2.5 py-1 rounded-sm mb-4">
                    <i class="ph-fill ph-flashlight"></i> تحلیل برگزیده هفته
                </span>
                
                <h3 class="text-white text-2xl font-extrabold leading-snug mb-3 hover:text-gold cursor-pointer transition-colors duration-300">
                    کالبدشکافی سیاست‌های یارانه‌ای پنهان؛ چه کسی هزینه تورم را می‌پردازد؟
                </h3>
                
                <p class="text-gray-300 text-sm leading-relaxed mb-6 line-clamp-3">
                    در حالی که آمارهای رسمی خبر از مهار نسبی تورم می‌دهند، بررسی بودجه عمومی و تخصیص منابع نشان‌دهنده جریان پنهان یارانه‌هایی است که نه تنها به دست دهک‌های پایین نمی‌رسد، بلکه موجب کسری بودجه مزمن در ساختار اقتصاد کلان کشور شده است...
                </p>

                <!-- فوتر کارت: نویسنده با تمرکز ویژه بر روی آواتار -->
                <div class="flex items-center justify-between pt-4 border-t border-white/10">
                    <div class="flex items-center gap-4">
                        <img src="assets/images/daily-narrative__________________.jpg" alt="دکتر علیرضا محمدی" class="w-16 h-16 rounded-full object-cover border-2 border-gold shadow-lg ring-2 ring-gold/20 transform group-hover:scale-105 transition-transform duration-300">
                        <div>
                            <h5 class="text-white font-extrabold text-base leading-snug">دکتر علیرضا محمدی</h5>
                            <span class="text-xs text-gray-300 block mt-0.5">عضو هیئت علمی دانشگاه تهران</span>
                        </div>
                    </div>
                    
                    <div class="flex items-center gap-1 bg-white/10 backdrop-blur-md border border-white/10 px-2 py-1 rounded-sm">
                        <i class="ph-fill ph-star text-gold text-xs"></i>
                        <span class="font-bold text-white text-xs num-inter">۴.۸</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- کارت متوسط اول (Medium Card A) -->
        <div class="group bg-surface-offset dark:bg-navy/35 border border-border/50 dark:border-white/5 rounded-sm p-6 flex flex-col justify-between transition-all duration-300 hover:shadow-lg hover:border-gold/30 hover:-translate-y-1">
            <div>
                <div class="flex items-center justify-between mb-4">
                    <span class="text-xs font-bold text-gold bg-gold/10 px-2 py-1 rounded-sm">جامعه شناسی سیاسی</span>
                    <span class="text-xs text-muted flex items-center gap-1"><i class="ph ph-calendar"></i> ۲۴ مهر ۱۴۰۲</span>
                </div>
                
                <h4 class="text-main dark:text-white font-bold text-lg leading-relaxed mb-3 group-hover:text-navy dark:group-hover:text-gold transition-colors duration-300">
                    نقش شبکه‌های اجتماعی در شکل‌دهی به افکار عمومی و انتخابات پیش‌رو
                </h4>
                
                <p class="text-muted dark:text-gray-400 text-xs leading-relaxed line-clamp-2">
                    بررسی رفتار کاربران در پلتفرم‌های اجتماعی نشان می‌دهد که جریان‌سازی‌های مجازی تا چه میزان قادر است بر انتخاب‌های سیاسی جامعه اثر بگذارد...
                </p>
            </div>

            <!-- فوتر کارت با عکس نویسنده بزرگتر -->
            <div class="flex items-center justify-between mt-6 pt-4 border-t border-border/30 dark:border-white/5">
                <div class="flex items-center gap-3.5">
                    <img src="https://images.unsplash.com/photo-1526304640581-d334cdbbf45e?auto=format&fit=crop&w=1200&q=80" alt="سید علی حسینی" class="w-12 h-12 rounded-full object-cover border-2 border-gold/40 shadow-md ring-2 ring-gold/10 transform group-hover:scale-105 transition-transform duration-300">
                    <div>
                        <span class="text-sm font-extrabold text-main dark:text-white block hover:text-gold transition-colors">سید علی حسینی</span>
                        <span class="text-[11px] text-muted dark:text-gray-400 block mt-0.5">پژوهشگر رسانه</span>
                    </div>
                </div>
                <div class="flex items-center gap-1">
                    <i class="ph-fill ph-star text-gold text-xs"></i>
                    <span class="font-bold text-navy dark:text-white text-xs num-inter">۴.۷</span>
                </div>
            </div>
        </div>

        <!-- کارت متوسط دوم (Medium Card B) -->
        <div class="group bg-surface-offset dark:bg-navy/35 border border-border/50 dark:border-white/5 rounded-sm p-6 flex flex-col justify-between transition-all duration-300 hover:shadow-lg hover:border-gold/30 hover:-translate-y-1">
            <div>
                <div class="flex items-center justify-between mb-4">
                    <span class="text-xs font-bold text-gold bg-gold/10 px-2 py-1 rounded-sm">محیط زیست و توسعه</span>
                    <span class="text-xs text-muted flex items-center gap-1"><i class="ph ph-calendar"></i> ۲۲ مهر ۱۴۰۲</span>
                </div>
                
                <h4 class="text-main dark:text-white font-bold text-lg leading-relaxed mb-3 group-hover:text-navy dark:group-hover:text-gold transition-colors duration-300">
                    بررسی تحلیلی بحران آب در فلات مرکزی و پیامدهای اجتماعی آن
                </h4>
                
                <p class="text-muted dark:text-gray-400 text-xs leading-relaxed line-clamp-2">
                    کاهش ذخایر استراتژیک زیرزمینی و سیاست‌های انتقال آب با چالش‌های اجتماعی و منطقه‌ای فزاینده‌ای همراه شده است...
                </p>
            </div>

            <!-- فوتر کارت با عکس نویسنده بزرگتر -->
            <div class="flex items-center justify-between mt-6 pt-4 border-t border-border/30 dark:border-white/5">
                <div class="flex items-center gap-3.5">
                    <img src="assets/images/daily-narrative___________.jpg" alt="مریم صادقی" class="w-12 h-12 rounded-full object-cover border-2 border-gold/40 shadow-md ring-2 ring-gold/10 transform group-hover:scale-105 transition-transform duration-300">
                    <div>
                        <span class="text-sm font-extrabold text-main dark:text-white block hover:text-gold transition-colors">مریم صادقی</span>
                        <span class="text-[11px] text-muted dark:text-gray-400 block mt-0.5">تحلیلگر توسعه پایدار</span>
                    </div>
                </div>
                <div class="flex items-center gap-1">
                    <i class="ph-fill ph-star text-gold text-xs"></i>
                    <span class="font-bold text-navy dark:text-white text-xs num-inter">۴.۵</span>
                </div>
            </div>
        </div>

        <!-- کارت متوسط سوم (Medium Card C) -->
        <div class="group bg-surface-offset dark:bg-navy/35 border border-border/50 dark:border-white/5 rounded-sm p-6 flex flex-col justify-between transition-all duration-300 hover:shadow-lg hover:border-gold/30 hover:-translate-y-1">
            <div>
                <div class="flex items-center justify-between mb-4">
                    <span class="text-xs font-bold text-gold bg-gold/10 px-2 py-1 rounded-sm">اقتصاد و دیپلماسی</span>
                    <span class="text-xs text-muted flex items-center gap-1"><i class="ph ph-calendar"></i> ۲۰ مهر ۱۴۰۲</span>
                </div>
                
                <h4 class="text-main dark:text-white font-bold text-lg leading-relaxed mb-3 group-hover:text-navy dark:group-hover:text-gold transition-colors duration-300">
                    چشم‌انداز روابط تجاری با کشورهای همسایه در سایه تحریم‌های جدید
                </h4>
                
                <p class="text-muted dark:text-gray-400 text-xs leading-relaxed line-clamp-2">
                    بررسی فرصت‌های ترانزیتی و معاهدات دوجانبه بانکی به عنوان راهکارهای میان‌بر در کاهش اثرات تحریمی بر اقتصاد ایران...
                </p>
            </div>

            <!-- فوتر کارت با عکس نویسنده بزرگتر -->
            <div class="flex items-center justify-between mt-6 pt-4 border-t border-border/30 dark:border-white/5">
                <div class="flex items-center gap-3.5">
                    <img src="assets/images/daily-narrative____________.jpg" alt="احسان طاهری" class="w-12 h-12 rounded-full object-cover border-2 border-gold/40 shadow-md ring-2 ring-gold/10 transform group-hover:scale-105 transition-transform duration-300">
                    <div>
                        <span class="text-sm font-extrabold text-main dark:text-white block hover:text-gold transition-colors">احسان طاهری</span>
                        <span class="text-[11px] text-muted dark:text-gray-400 block mt-0.5">کارشناس اقتصاد سیاسی</span>
                    </div>
                </div>
                <div class="flex items-center gap-1">
                    <i class="ph-fill ph-star text-gold text-xs"></i>
                    <span class="font-bold text-navy dark:text-white text-xs num-inter">۴.۴</span>
                </div>
            </div>
        </div>

        <!-- کارت متوسط چهارم (Medium Card D) -->
        <div class="group bg-surface-offset dark:bg-navy/35 border border-border/50 dark:border-white/5 rounded-sm p-6 flex flex-col justify-between transition-all duration-300 hover:shadow-lg hover:border-gold/30 hover:-translate-y-1">
            <div>
                <div class="flex items-center justify-between mb-4">
                    <span class="text-xs font-bold text-gold bg-gold/10 px-2 py-1 rounded-sm">توسعه و آموزش</span>
                    <span class="text-xs text-muted flex items-center gap-1"><i class="ph ph-calendar"></i> ۱۸ مهر ۱۴۰۲</span>
                </div>
                
                <h4 class="text-main dark:text-white font-bold text-lg leading-relaxed mb-3 group-hover:text-navy dark:group-hover:text-gold transition-colors duration-300">
                    تحول در ساختار آموزشی کشور؛ الزام یا انتخاب؟
                </h4>
                
                <p class="text-muted dark:text-gray-400 text-xs leading-relaxed line-clamp-2">
                    چرا الگوهای تدریس نوین و مهارت‌محور در مدارس ما نهادینه نمی‌شوند و چه گام‌های تحولی برای خروج از بحران مدرک‌گرایی لازم است؟
                </p>
            </div>

            <!-- فوتر کارت با عکس نویسنده بزرگتر -->
            <div class="flex items-center justify-between mt-6 pt-4 border-t border-border/30 dark:border-white/5">
                <div class="flex items-center gap-3.5">
                    <img src="assets/images/daily-narrative__________.jpg" alt="رضا کمالی" class="w-12 h-12 rounded-full object-cover border-2 border-gold/40 shadow-md ring-2 ring-gold/10 transform group-hover:scale-105 transition-transform duration-300">
                    <div>
                        <span class="text-sm font-extrabold text-main dark:text-white block hover:text-gold transition-colors">رضا کمالی</span>
                        <span class="text-[11px] text-muted dark:text-gray-400 block mt-0.5">پژوهشگر حوزه آموزش</span>
                    </div>
                </div>
                <div class="flex items-center gap-1">
                    <i class="ph-fill ph-star text-gold text-xs"></i>
                    <span class="font-bold text-navy dark:text-white text-xs num-inter">۴.۲</span>
                </div>
            </div>
        </div>

    </div>
</section>
