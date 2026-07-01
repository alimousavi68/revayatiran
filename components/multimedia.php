<section class="max-w-7xl mx-auto px-4 lg:px-8 py-12">
    
    <div class="flex items-center gap-4 mb-8">
        <h2 class="text-navy dark:text-white text-h1 whitespace-nowrap flex items-center gap-2">
            <i class="ph-duotone ph-video-camera text-gold"></i> رسانه‌نگار
        </h2>
        <div class="h-px bg-border dark:bg-white/10 flex-grow"></div>
        <a href="#" class="text-muted dark:text-gray-400 text-sm hover:text-navy dark:hover:text-gold transition-colors">آرشیو چندرسانه‌ای</a>
    </div>

    <!-- Cinematic Player Layout -->
    <div class="bg-navy dark:bg-[#0f172a] rounded-xl p-4 md:p-6 shadow-2xl border border-navy-light dark:border-white/5">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-6">
            
            <!-- نمایشگر اصلی (Right Side in RTL) -->
            <div class="lg:col-span-8 flex flex-col">
                <div class="relative w-full aspect-video rounded-lg overflow-hidden bg-black group shadow-lg">
                    <img src="https://images.unsplash.com/photo-1516259762381-22954d7d3ad2?q=80&w=1200&auto=format&fit=crop" alt="ویدئوی اصلی" class="w-full h-full object-cover opacity-80 transition-transform duration-700 group-hover:scale-105">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent"></div>
                    
                    <!-- Play Button Overlay -->
                    <div class="absolute inset-0 flex items-center justify-center cursor-pointer">
                        <div class="w-16 h-16 bg-gold/90 backdrop-blur-md rounded-full flex items-center justify-center group-hover:bg-white group-hover:text-gold transition-colors shadow-[0_0_30px_rgba(184,144,83,0.3)]">
                            <i class="ph-fill ph-play text-white group-hover:text-gold text-3xl ml-1"></i>
                        </div>
                    </div>
                    
                    <!-- Top Badges -->
                    <div class="absolute top-4 right-4 flex gap-2">
                        <span class="bg-alert-red text-white text-xs px-2.5 py-1 rounded-md font-bold shadow-sm">مستند ویژه</span>
                    </div>

                    <!-- Bottom Info -->
                    <div class="absolute bottom-0 inset-x-0 p-6">
                        <h3 class="text-white text-2xl md:text-3xl font-bold leading-tight mb-2">
                            پشت صحنه مذاکرات؛ روایتی ناگفته از دیپلماسی پنهان
                        </h3>
                        <div class="flex items-center gap-4 text-white/70 text-sm">
                            <span class="flex items-center gap-1"><i class="ph-duotone ph-clock"></i> ۱۲:۴۵</span>
                            <span class="flex items-center gap-1"><i class="ph-duotone ph-eye"></i> ۱۲,۴۰۰ بازدید</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- لیست پخش (Left Side in RTL) -->
            <div class="lg:col-span-4 flex flex-col h-full max-h-[300px] lg:max-h-none">
                <h4 class="text-white font-bold text-lg mb-4 flex items-center gap-2 px-2">
                    <i class="ph-duotone ph-list-video text-gold"></i> در ادامه ببینید
                </h4>
                
                <div class="flex flex-col gap-3 overflow-y-auto hide-scrollbar pr-2 pl-1 flex-grow">
                    
                    <!-- Playlist Item 1 (Active) -->
                    <a href="#" class="flex gap-3 items-center p-2 rounded-lg bg-white/10 border border-white/10 group">
                        <div class="relative w-24 aspect-video rounded-md overflow-hidden flex-shrink-0">
                            <img src="https://images.unsplash.com/photo-1516259762381-22954d7d3ad2?q=80&w=300&auto=format&fit=crop" alt="thumb" class="w-full h-full object-cover">
                            <div class="absolute inset-0 bg-black/40 flex items-center justify-center">
                                <span class="text-white text-[10px] bg-gold px-1 rounded-sm">در حال پخش</span>
                            </div>
                        </div>
                        <div class="flex-grow">
                            <h5 class="text-gold font-bold text-xs line-clamp-2 leading-relaxed">پشت صحنه مذاکرات؛ روایتی ناگفته از دیپلماسی پنهان</h5>
                        </div>
                    </a>

                    <!-- Playlist Item 2 -->
                    <a href="#" class="flex gap-3 items-center p-2 rounded-lg hover:bg-white/5 border border-transparent hover:border-white/5 transition-all group">
                        <div class="relative w-24 aspect-video rounded-md overflow-hidden flex-shrink-0">
                            <img src="https://images.unsplash.com/photo-1478737270239-2f02b77fc618?q=80&w=300&auto=format&fit=crop" alt="thumb" class="w-full h-full object-cover group-hover:scale-105 transition-transform">
                            <div class="absolute bottom-1 right-1 bg-black/80 text-white text-[9px] px-1 rounded-sm num-inter">۴۵:۲۰</div>
                        </div>
                        <div class="flex-grow">
                            <h5 class="text-white/80 group-hover:text-white font-medium text-xs line-clamp-2 leading-relaxed transition-colors">پادکست «میدان»: بررسی بحران انرژی و تاثیر آن بر توسعه صنعتی</h5>
                        </div>
                    </a>

                    <!-- Playlist Item 3 -->
                    <a href="#" class="flex gap-3 items-center p-2 rounded-lg hover:bg-white/5 border border-transparent hover:border-white/5 transition-all group">
                        <div class="relative w-24 aspect-video rounded-md overflow-hidden flex-shrink-0">
                            <img src="https://images.unsplash.com/photo-1557804506-669a67965ba0?q=80&w=300&auto=format&fit=crop" alt="thumb" class="w-full h-full object-cover group-hover:scale-105 transition-transform">
                            <div class="absolute bottom-1 right-1 bg-black/80 text-white text-[9px] px-1 rounded-sm num-inter">۲۸:۱۰</div>
                        </div>
                        <div class="flex-grow">
                            <h5 class="text-white/80 group-hover:text-white font-medium text-xs line-clamp-2 leading-relaxed transition-colors">مصاحبه اختصاصی با سفیر سابق پیرامون تغییرات ژئوپلیتیک مرزهای شرقی</h5>
                        </div>
                    </a>

                    <!-- Playlist Item 4 -->
                    <a href="#" class="flex gap-3 items-center p-2 rounded-lg hover:bg-white/5 border border-transparent hover:border-white/5 transition-all group">
                        <div class="relative w-24 aspect-video rounded-md overflow-hidden flex-shrink-0">
                            <img src="https://images.unsplash.com/photo-1611162617474-5b21e879e113?q=80&w=300&auto=format&fit=crop" alt="thumb" class="w-full h-full object-cover group-hover:scale-105 transition-transform">
                            <div class="absolute bottom-1 right-1 bg-black/80 text-white text-[9px] px-1 rounded-sm num-inter">۰۳:۱۵</div>
                        </div>
                        <div class="flex-grow">
                            <h5 class="text-white/80 group-hover:text-white font-medium text-xs line-clamp-2 leading-relaxed transition-colors">برش ویدئویی: واکنش نمایندگان مجلس به طرح صیانت</h5>
                        </div>
                    </a>

                    <!-- Playlist Item 5 -->
                    <a href="#" class="flex gap-3 items-center p-2 rounded-lg hover:bg-white/5 border border-transparent hover:border-white/5 transition-all group">
                        <div class="relative w-24 aspect-video rounded-md overflow-hidden flex-shrink-0">
                            <img src="https://images.unsplash.com/photo-1498804103079-a6351b050096?q=80&w=300&auto=format&fit=crop" alt="thumb" class="w-full h-full object-cover group-hover:scale-105 transition-transform">
                            <div class="absolute bottom-1 right-1 bg-black/80 text-white text-[9px] px-1 rounded-sm num-inter">۵۵:۰۰</div>
                        </div>
                        <div class="flex-grow">
                            <h5 class="text-white/80 group-hover:text-white font-medium text-xs line-clamp-2 leading-relaxed transition-colors">مستند «خون شریک»؛ روایتی از اقتصاد زیرزمینی در مناطق مرزی</h5>
                        </div>
                    </a>

                </div>
            </div>

        </div>
    </div>
</section>
