<section class="max-w-7xl mx-auto px-4 lg:px-8 py-12">
    <div class="bg-navy rounded-sm overflow-hidden relative">
        <!-- پس زمینه گرافیکی و خطوط طلایی -->
        <div class="absolute inset-0 opacity-10 pointer-events-none" style="background-image: repeating-linear-gradient(45deg, #B89053 0, #B89053 1px, transparent 1px, transparent 20px);"></div>
        <div class="absolute top-0 right-0 w-full h-1 bg-gradient-to-l from-gold to-transparent"></div>

        <div class="p-8 md:p-12 relative z-10">
            <div class="flex flex-col items-center justify-center mb-10 text-center">
                <div class="w-16 h-16 bg-white/5 rounded-full flex items-center justify-center border border-gold/30 mb-4">
                    <i class="ph-fill ph-lock-key text-gold text-3xl"></i>
                </div>
                <h2 class="text-white text-h1 mb-3">اتاق وضعیت</h2>
                <p class="text-white/60 text-sm max-w-lg">
                    دسترسی به بولتن‌های ویژه، گزارش‌های آماری و محتوای طبقه‌بندی شده، صرفاً برای پژوهشگران و اعضای تایید شده VIP امکان‌پذیر است.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-12">
                <!-- کارت محرمانه ۱ -->
                <div class="bg-white/5 border border-white/10 rounded-sm p-6 backdrop-blur-sm relative overflow-hidden group">
                    <div class="absolute inset-0 bg-navy/80 backdrop-blur-[2px] z-10 flex flex-col items-center justify-center opacity-100 transition-opacity">
                        <i class="ph-fill ph-lock text-white/50 text-4xl mb-3"></i>
                        <span class="text-white/70 text-xs font-bold px-3 py-1 bg-white/10 rounded-full">دسترسی محدود</span>
                    </div>
                    <!-- محتوای زیر قفل (فقط نمایشی گرافیکی) -->
                    <div class="opacity-30 blur-[2px] select-none pointer-events-none">
                        <span class="text-gold text-[10px] font-bold mb-2 block">بولتن محرمانه</span>
                        <h3 class="text-white text-lg font-bold mb-4">گزارش راهبردی پیامدهای اقتصادی تحریم‌های ثانویه</h3>
                        <div class="h-20 bg-white/10 rounded-sm w-full mb-2"></div>
                        <div class="h-4 bg-white/10 rounded-sm w-3/4"></div>
                    </div>
                </div>

                <!-- کارت محرمانه ۲ -->
                <div class="bg-white/5 border border-white/10 rounded-sm p-6 backdrop-blur-sm relative overflow-hidden group">
                    <div class="absolute inset-0 bg-navy/80 backdrop-blur-[2px] z-10 flex flex-col items-center justify-center opacity-100 transition-opacity">
                        <i class="ph-fill ph-lock text-white/50 text-4xl mb-3"></i>
                        <span class="text-white/70 text-xs font-bold px-3 py-1 bg-white/10 rounded-full">دسترسی محدود</span>
                    </div>
                    <div class="opacity-30 blur-[2px] select-none pointer-events-none">
                        <span class="text-gold text-[10px] font-bold mb-2 block">داده‌های آماری</span>
                        <h3 class="text-white text-lg font-bold mb-4">پایش افکارسنجی ماهانه پیرامون رضایت عمومی</h3>
                        <div class="h-20 bg-white/10 rounded-sm w-full mb-2 flex items-end gap-2 p-2">
                            <div class="w-1/3 h-full bg-gold/50 rounded-t-sm"></div>
                            <div class="w-1/3 h-1/2 bg-white/50 rounded-t-sm"></div>
                            <div class="w-1/3 h-3/4 bg-gold/30 rounded-t-sm"></div>
                        </div>
                    </div>
                </div>

                <!-- کارت محرمانه ۳ -->
                <div class="bg-white/5 border border-white/10 rounded-sm p-6 backdrop-blur-sm relative overflow-hidden group hidden md:block">
                    <div class="absolute inset-0 bg-navy/80 backdrop-blur-[2px] z-10 flex flex-col items-center justify-center opacity-100 transition-opacity">
                        <i class="ph-fill ph-lock text-white/50 text-4xl mb-3"></i>
                        <span class="text-white/70 text-xs font-bold px-3 py-1 bg-white/10 rounded-full">دسترسی محدود</span>
                    </div>
                    <div class="opacity-30 blur-[2px] select-none pointer-events-none">
                        <span class="text-gold text-[10px] font-bold mb-2 block">گزارش نظارتی</span>
                        <h3 class="text-white text-lg font-bold mb-4">بررسی عملکرد نهادهای نظارتی در پرونده‌های کلان</h3>
                        <div class="space-y-2">
                            <div class="h-3 bg-white/10 rounded-sm w-full"></div>
                            <div class="h-3 bg-white/10 rounded-sm w-full"></div>
                            <div class="h-3 bg-white/10 rounded-sm w-5/6"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex justify-center">
                <button class="bg-gold hover:bg-yellow-600 text-white px-8 py-3.5 rounded-sm font-bold text-sm transition-colors shadow-lg flex items-center gap-2 border border-gold/50 hover:border-white/50">
                    <i class="ph-fill ph-key"></i> درخواست دسترسی ویژه به اتاق وضعیت
                </button>
            </div>
        </div>
    </div>
</section>
