<section class="section-shell section-shell--warm section-spacing" id="news-monitoring">
    <div class="container">
        <div class="section-head section-head--etude-b" data-reveal="up">
            <div class="etude-b__leading">
                <div class="etude-b__icon-badge">
                    <i class="ph ph-broadcast"></i>
                </div>
                <h2>رصد اخبار</h2>
                <p class="section-summary">پایش مستمر منابع خبری و کشف روایت‌های نوظهور</p>
            </div>
            <div class="etude-b__actions flex items-center gap-2">
                <!-- تب‌های دسکتاپ/تبلت -->
                <div class="tabs hidden sm:flex" role="tablist" aria-label="دسته‌بندی اخبار">
                    <button class="tab-button is-active" type="button" role="tab" aria-selected="true" data-news-tab="all">همه</button>
                    <button class="tab-button" type="button" role="tab" aria-selected="false" data-news-tab="politics">سیاست</button>
                    <button class="tab-button" type="button" role="tab" aria-selected="false" data-news-tab="economy">اقتصاد</button>
                    <button class="tab-button" type="button" role="tab" aria-selected="false" data-news-tab="security">امنیت</button>
                </div>

                <!-- منوی کشویی دسته‌بندی در موبایل (جلوگیری از به‌هم‌ریختگی) -->
                <div class="sm:hidden relative inline-block">
                    <select id="news-tab-select" class="bg-surface border border-border text-text text-xs rounded-full px-3 py-1.5 pe-7 appearance-none font-bold cursor-pointer focus:outline-none focus:border-accent">
                        <option value="all">همه دسته‌ها</option>
                        <option value="politics">سیاست</option>
                        <option value="economy">اقتصاد</option>
                        <option value="security">امنیت</option>
                    </select>
                    <i class="ph ph-caret-down absolute left-2.5 top-1/2 -translate-y-1/2 text-xs text-text-muted pointer-events-none"></i>
                </div>

                <a href="archive.php?category=news-monitoring" class="section-link">
                    <span>آرشیو</span>
                    <i class="ph ph-arrow-left"></i>
                </a>
            </div>
        </div>

        <div class="news-layout layout-gap-lg">
            <div class="news-panels">

                <!-- ── تب همه ─────────────────────────────────── -->
                <div class="news-panel is-active" data-news-panel="all">
                    <div class="swiper news-swiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <article class="news-card">
                                    <img src="assets/images/posts images/جنگ+ایران+آمریکا+مذاکرات+پاکستان.webp" alt="خبر ویژه سیاست خارجی" loading="lazy">
                                    <div class="news-card__overlay">
                                        <div class="news-card__meta">
                                            <span class="chip">سیاست خارجی</span>
                                            <span class="source-badge">خبرگزاری ایرنا</span>
                                        </div>
                                        <h3><a href="single.php" class="hover:text-primary transition-colors">بازگشت بازیگران به میزهای چندمرحله‌ای؛ دیپلماسی زیر فشار زمان</a></h3>
                                    </div>
                                </article>
                            </div>
                            <div class="swiper-slide">
                                <article class="news-card">
                                    <img src="assets/images/posts images/اقتصادایران-ak1549-ak3280-1200x800-1024x683.webp" alt="خبر اقتصادی" loading="lazy">
                                    <div class="news-card__overlay">
                                        <div class="news-card__meta">
                                            <span class="chip">اقتصاد سیاسی</span>
                                            <span class="source-badge">دنیای اقتصاد</span>
                                        </div>
                                        <h3><a href="single.php" class="hover:text-primary transition-colors">بازارها در انتظار بسته جدید تصمیم‌سازی مالی</a></h3>
                                    </div>
                                </article>
                            </div>
                            <div class="swiper-slide">
                                <article class="news-card">
                                    <img src="assets/images/posts images/27738882_1_0_799_449_1920x0_80_0_0_5c1b2e4e4887372d25d2ddaca10d8bb0.jpg.webp" alt="خبر امنیتی" loading="lazy">
                                    <div class="news-card__overlay">
                                        <div class="news-card__meta">
                                            <span class="chip">امنیت</span>
                                            <span class="source-badge">تسنیم</span>
                                        </div>
                                        <h3><a href="single.php" class="hover:text-primary transition-colors">رصد تحرکات مرزی و پیامدهای رسانه‌ای آن در افکار عمومی</a></h3>
                                    </div>
                                </article>
                            </div>
                            <div class="swiper-slide">
                                <article class="news-card">
                                    <img src="assets/images/posts images/images (3).jpeg" alt="خبر فرهنگی" loading="lazy">
                                    <div class="news-card__overlay">
                                        <div class="news-card__meta">
                                            <span class="chip">جامعه</span>
                                            <span class="source-badge">ایسنا</span>
                                        </div>
                                        <h3><a href="single.php" class="hover:text-primary transition-colors">تغییر الگوهای مصرف رسانه‌ای در بین نسل جدید</a></h3>
                                    </div>
                                </article>
                            </div>
                            <div class="swiper-slide">
                                <article class="news-card">
                                    <img src="assets/images/posts images/219-os5jc-1-ak32467-800x534.webp" alt="خبر بین‌الملل" loading="lazy">
                                    <div class="news-card__overlay">
                                        <div class="news-card__meta">
                                            <span class="chip">بین‌الملل</span>
                                            <span class="source-badge">فارس</span>
                                        </div>
                                        <h3><a href="single.php" class="hover:text-primary transition-colors">تحولات جدید در شرق اروپا و اثر آن بر امنیت انرژی</a></h3>
                                    </div>
                                </article>
                            </div>
                            <div class="swiper-slide">
                                <article class="news-card">
                                    <img src="assets/images/posts images/images (5).jpeg" alt="خبر تکنولوژی" loading="lazy">
                                    <div class="news-card__overlay">
                                        <div class="news-card__meta">
                                            <span class="chip">فناوری</span>
                                            <span class="source-badge">مهر</span>
                                        </div>
                                        <h3><a href="single.php" class="hover:text-primary transition-colors">هوش مصنوعی و چالش‌های بازشناسی روایت‌های جعلی</a></h3>
                                    </div>
                                </article>
                            </div>
                            <div class="swiper-slide">
                                <article class="news-card">
                                    <img src="assets/images/posts images/images (2) 2.jpeg" alt="خبر سیاسی" loading="lazy">
                                    <div class="news-card__overlay">
                                        <div class="news-card__meta">
                                            <span class="chip">سیاست داخلی</span>
                                            <span class="source-badge">اعتماد</span>
                                        </div>
                                        <h3><a href="single.php" class="hover:text-primary transition-colors">آرایش جدید جناح‌های سیاسی در آستانه تصمیمات مهم</a></h3>
                                    </div>
                                </article>
                            </div>
                            <div class="swiper-slide">
                                <article class="news-card">
                                    <img src="assets/images/posts images/muCE4NJA7dFf.jpg" alt="خبر دیپلماسی" loading="lazy">
                                    <div class="news-card__overlay">
                                        <div class="news-card__meta">
                                            <span class="chip">دیپلماسی</span>
                                            <span class="source-badge">ایرنا</span>
                                        </div>
                                        <h3><a href="single.php" class="hover:text-primary transition-colors">نقش ورزش در بهبود روابط دیپلماتیک منطقه‌ای</a></h3>
                                    </div>
                                </article>
                            </div>
                            <div class="swiper-slide">
                                <article class="news-card">
                                    <img src="assets/images/posts images/اقتصاد-ایران-ak3539-1024x683.webp" alt="خبر محیط زیست" loading="lazy">
                                    <div class="news-card__overlay">
                                        <div class="news-card__meta">
                                            <span class="chip">محیط زیست</span>
                                            <span class="source-badge">ایلنا</span>
                                        </div>
                                        <h3><a href="single.php" class="hover:text-primary transition-colors">بحران آب و ضرورت بازنگری در سیاست‌های کلان توسعه</a></h3>
                                    </div>
                                </article>
                            </div>
                        </div>
                        <!-- ناوبری Swiper -->
                        <button type="button" class="swiper-button-prev news-swiper-prev" aria-label="قبلی">
                            <i class="ph-bold ph-caret-right"></i>
                        </button>
                        <button type="button" class="swiper-button-next news-swiper-next" aria-label="بعدی">
                            <i class="ph-bold ph-caret-left"></i>
                        </button>
                        <div class="swiper-pagination news-swiper-pagination"></div>
                    </div>
                </div>

                <!-- ── تب سیاست ───────────────────────────────── -->
                <div class="news-panel" data-news-panel="politics" hidden>
                    <div class="swiper news-swiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <article class="news-card">
                                    <img src="assets/images/posts images/2279480_168.jpg" alt="سیاست داخلی" loading="lazy">
                                    <div class="news-card__overlay">
                                        <div class="news-card__meta">
                                            <span class="chip">سیاست داخلی</span>
                                            <span class="source-badge">اعتماد</span>
                                        </div>
                                        <h3><a href="single.php" class="hover:text-primary transition-colors">بازآرایی بلوک‌های سیاسی پیش از فصل تصمیم‌های بزرگ</a></h3>
                                    </div>
                                </article>
                            </div>
                            <div class="swiper-slide">
                                <article class="news-card">
                                    <img src="assets/images/posts images/جنگ+ایران+آمریکا+مذاکرات+پاکستان.webp" alt="سیاست خارجی" loading="lazy">
                                    <div class="news-card__overlay">
                                        <div class="news-card__meta">
                                            <span class="chip">سیاست خارجی</span>
                                            <span class="source-badge">ایرنا</span>
                                        </div>
                                        <h3><a href="single.php" class="hover:text-primary transition-colors">مذاکرات فشرده، واژه‌های محافظه‌کار و پیام‌های چندلایه</a></h3>
                                    </div>
                                </article>
                            </div>
                            <div class="swiper-slide">
                                <article class="news-card">
                                    <img src="assets/images/posts images/27738882_1_0_799_449_1920x0_80_0_0_5c1b2e4e4887372d25d2ddaca10d8bb0.jpg.webp" alt="تحلیل سریع" loading="lazy">
                                    <div class="news-card__overlay">
                                        <div class="news-card__meta">
                                            <span class="chip">تحلیل سریع</span>
                                            <span class="source-badge">روایت ایران</span>
                                        </div>
                                        <h3><a href="single.php" class="hover:text-primary transition-colors">واکنش افکار عمومی به لحن تازه مقام‌ها در قبال پرونده منطقه</a></h3>
                                    </div>
                                </article>
                            </div>
                        </div>
                        <button type="button" class="swiper-button-prev news-swiper-prev" aria-label="قبلی">
                            <i class="ph-bold ph-caret-right"></i>
                        </button>
                        <button type="button" class="swiper-button-next news-swiper-next" aria-label="بعدی">
                            <i class="ph-bold ph-caret-left"></i>
                        </button>
                        <div class="swiper-pagination news-swiper-pagination"></div>
                    </div>
                </div>

                <!-- ── تب اقتصاد ───────────────────────────────── -->
                <div class="news-panel" data-news-panel="economy" hidden>
                    <div class="swiper news-swiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <article class="news-card">
                                    <img src="assets/images/posts images/اقتصادایران-ak1549-ak3280-1200x800-1024x683.webp" alt="اقتصاد" loading="lazy">
                                    <div class="news-card__overlay">
                                        <div class="news-card__meta">
                                            <span class="chip">اقتصاد</span>
                                            <span class="source-badge">دنیای اقتصاد</span>
                                        </div>
                                        <h3><a href="single.php" class="hover:text-primary transition-colors">سناریوهای بازار ارز پس از بسته تازه بانک مرکزی</a></h3>
                                    </div>
                                </article>
                            </div>
                            <div class="swiper-slide">
                                <article class="news-card">
                                    <img src="assets/images/posts images/اقتصاد-ایران-ak3539-1024x683.webp" alt="بودجه" loading="lazy">
                                    <div class="news-card__overlay">
                                        <div class="news-card__meta">
                                            <span class="chip">بودجه</span>
                                            <span class="source-badge">فارس</span>
                                        </div>
                                        <h3><a href="single.php" class="hover:text-primary transition-colors">بودجه انقباضی یا بازتوزیع خاموش؟</a></h3>
                                    </div>
                                </article>
                            </div>
                            <div class="swiper-slide">
                                <article class="news-card">
                                    <img src="assets/images/posts images/شاخص-بورس-ak5259-ak4687-1200x800-1024x683.webp" alt="بازار سرمایه" loading="lazy">
                                    <div class="news-card__overlay">
                                        <div class="news-card__meta">
                                            <span class="chip">بازار سرمایه</span>
                                            <span class="source-badge">ایسنا</span>
                                        </div>
                                        <h3><a href="single.php" class="hover:text-primary transition-colors">سرمایه‌گذار خسته؛ چه چیزی هنوز به بازار سیگنال می‌دهد؟</a></h3>
                                    </div>
                                </article>
                            </div>
                        </div>
                        <button type="button" class="swiper-button-prev news-swiper-prev" aria-label="قبلی">
                            <i class="ph-bold ph-caret-right"></i>
                        </button>
                        <button type="button" class="swiper-button-next news-swiper-next" aria-label="بعدی">
                            <i class="ph-bold ph-caret-left"></i>
                        </button>
                        <div class="swiper-pagination news-swiper-pagination"></div>
                    </div>
                </div>

                <!-- ── تب امنیت ───────────────────────────────── -->
                <div class="news-panel" data-news-panel="security" hidden>
                    <div class="swiper news-swiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <article class="news-card">
                                    <img src="assets/images/posts images/27738882_1_0_799_449_1920x0_80_0_0_5c1b2e4e4887372d25d2ddaca10d8bb0.jpg.webp" alt="امنیت" loading="lazy">
                                    <div class="news-card__overlay">
                                        <div class="news-card__meta">
                                            <span class="chip">امنیت</span>
                                            <span class="source-badge">تسنیم</span>
                                        </div>
                                        <h3><a href="single.php" class="hover:text-primary transition-colors">امنیت مرز فقط مسئله میدان نیست، مسئله روایت هم هست</a></h3>
                                    </div>
                                </article>
                            </div>
                            <div class="swiper-slide">
                                <article class="news-card">
                                    <img src="assets/images/posts images/troja.jpeg" alt="دفاعی" loading="lazy">
                                    <div class="news-card__overlay">
                                        <div class="news-card__meta">
                                            <span class="chip">دفاعی</span>
                                            <span class="source-badge">مهر</span>
                                        </div>
                                        <h3><a href="single.php" class="hover:text-primary transition-colors">چرا برخی رزمایش‌ها بیشتر از آنکه نظامی باشند رسانه‌ای‌اند؟</a></h3>
                                    </div>
                                </article>
                            </div>
                            <div class="swiper-slide">
                                <article class="news-card">
                                    <img src="assets/images/posts images/images (3).jpeg" alt="هشدار" loading="lazy">
                                    <div class="news-card__overlay">
                                        <div class="news-card__meta">
                                            <span class="chip">هشدار</span>
                                            <span class="source-badge">ایرنا</span>
                                        </div>
                                        <h3><a href="single.php" class="hover:text-primary transition-colors">ریسک خطای برداشت در روایت‌های سریع درباره تهدید</a></h3>
                                    </div>
                                </article>
                            </div>
                        </div>
                        <button type="button" class="swiper-button-prev news-swiper-prev" aria-label="قبلی">
                            <i class="ph-bold ph-caret-right"></i>
                        </button>
                        <button type="button" class="swiper-button-next news-swiper-next" aria-label="بعدی">
                            <i class="ph-bold ph-caret-left"></i>
                        </button>
                        <div class="swiper-pagination news-swiper-pagination"></div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

