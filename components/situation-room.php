<section class="section-shell py-24" id="situation-room">
    <div class="container">
        <!-- هدر بخش -->
        <div class="section-head section-head--etude-b" data-reveal="up">
            <div class="etude-b__leading">
                <div class="etude-b__icon-badge">
                    <i class="ph ph-shield-warning"></i>
                </div>
                <h2>اتاق وضعیت</h2>
                <p class="section-summary">برآوردهای راهبردی و تحلیل‌های پدافندی</p>
            </div>
            <div class="etude-b__actions">
                <?php if ($user_level !== 'guest'): ?>
                    <div class="user-status-badge">
                        <i class="ph-fill ph-shield-check"></i>
                        <span>صلاحیت تایید شده: <?php 
                            if ($user_level === 'high') echo 'سطح ۱ (عالی)';
                            else if ($user_level === 'normal') echo 'سطح ۳ (پایه)';
                            else echo 'سطح ۲ (متوسط)';
                        ?></span>
                    </div>
                <?php endif; ?>
            </div>
        </div>

        <div class="situation-main">
            <?php if ($user_level === 'guest'): ?>
            <!-- نمای مهمان: لیست گیت‌شده Soft Paywall -->
            <div class="sr-gated-wrapper" data-reveal="up">

                <!-- لیست آیتم‌های قفل‌شده -->
                <ol class="sr-gated-list">

                    <li class="sr-gated-item">
                        <div class="sr-gated-item__lock">
                            <i class="ph-fill ph-lock"></i>
                        </div>
                        <div class="sr-gated-item__body">
                            <h4 class="sr-gated-item__title">پایش شاخص‌های حساس در بازارهای موازی</h4>
                            <p class="sr-gated-item__excerpt sr-gated-item__excerpt--blurred">تحلیل تغییرات معنادار در الگوهای رفتاری بازیگران کلیدی و پیش‌بینی گام‌های بعدی در حوزه اقتصاد سیاسی و اثرگذاری آن بر معادلات قدرت داخلی.</p>
                        </div>
                    </li>

                    <li class="sr-gated-item">
                        <div class="sr-gated-item__lock">
                            <i class="ph-fill ph-lock"></i>
                        </div>
                        <div class="sr-gated-item__body">
                            <h4 class="sr-gated-item__title">رصد میدانی تحرکات در مرزهای شرقی</h4>
                            <p class="sr-gated-item__excerpt sr-gated-item__excerpt--blurred">تصاویر ماهواره‌ای و رصد مستمر زیرساخت‌های جدید پایش مرزی به همراه جدول ثبت ترددها و تحلیل الگوهای جابه‌جایی نیروها.</p>
                        </div>
                    </li>

                    <li class="sr-gated-item">
                        <div class="sr-gated-item__lock">
                            <i class="ph-fill ph-lock"></i>
                        </div>
                        <div class="sr-gated-item__body">
                            <h4 class="sr-gated-item__title">برآورد سناریوهای تقابل در امنیت انرژی</h4>
                            <p class="sr-gated-item__excerpt sr-gated-item__excerpt--blurred">تحلیل نقاط کلیدی آسیب‌پذیر در زیرساخت‌های توزیع سوخت به همراه پیوست‌های ایمن‌سازی شبکه‌های ابری و سناریوهای احتمالی تقابل.</p>
                        </div>
                    </li>

                    <li class="sr-gated-item">
                        <div class="sr-gated-item__lock">
                            <i class="ph-fill ph-lock"></i>
                        </div>
                        <div class="sr-gated-item__body">
                            <h4 class="sr-gated-item__title">تحلیل ابعاد ژئوپلیتیک بحران آب منطقه‌ای</h4>
                            <p class="sr-gated-item__excerpt sr-gated-item__excerpt--blurred">بررسی اثر تنش‌های آبی بر معادلات سیاسی همسایگان و سناریوهای بلندمدت امنیت منابع حیاتی در فلات ایران.</p>
                        </div>
                    </li>

                </ol>

                <!-- Gradient curtain + CTA -->
                <div class="sr-gated-curtain">
                    <ol class="sr-gated-list sr-gated-list--faded">

                        <li class="sr-gated-item">
                            <div class="sr-gated-item__lock">
                                <i class="ph-fill ph-lock"></i>
                            </div>
                            <div class="sr-gated-item__body">
                                <h4 class="sr-gated-item__title">ارزیابی ریسک زنجیره تأمین صنایع حساس</h4>
                                <p class="sr-gated-item__excerpt sr-gated-item__excerpt--blurred">پایش وابستگی‌های کلیدی صنایع دفاعی و انرژی به واردات و سناریوهای جایگزین تأمین داخلی.</p>
                            </div>
                        </li>

                        <li class="sr-gated-item">
                            <div class="sr-gated-item__lock">
                                <i class="ph-fill ph-lock"></i>
                            </div>
                            <div class="sr-gated-item__body">
                                <h4 class="sr-gated-item__title">رصد تحولات فضای سایبری و زیرساخت‌های حیاتی</h4>
                                <p class="sr-gated-item__excerpt sr-gated-item__excerpt--blurred">تهدیدسنجی و پایش حملات به شبکه‌های حساس ملی و ارزیابی سطح آمادگی پدافند غیرعامل.</p>
                            </div>
                        </li>

                    </ol>

                    <!-- CTA overlay -->
                    <div class="sr-gated-cta">
                        <div class="sr-gated-cta__inner">
                            <i class="ph-fill ph-lock-key sr-gated-cta__icon"></i>
                            <p class="sr-gated-cta__text">برای مشاهده محتوای اتاق وضعیت، عضویت و احراز هویت الزامی است.</p>
                            <div class="sr-gated-cta__actions">
                                <a href="#" class="button--compact button--primary button--glow" id="sr-cta-register">
                                    <i class="ph-fill ph-user-plus"></i>
                                    <span>ثبت‌نام رایگان</span>
                                </a>
                                <a href="#" class="button--compact button--soft" id="sr-cta-login">
                                    <i class="ph-fill ph-sign-in"></i>
                                    <span>ورود به حساب</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <?php else: ?>
            <!-- نمای کاربر عضو: نمایش شبکه کارت‌های تاکتیکال -->
            <div class="situation-grid gap-8">
                
                <!-- گزارش ۱: متنی + PDF (قابل دسترسی برای همه اعضا) -->
                <article class="situation-item panel-card--dark p-6" data-reveal="up">
                    <div class="card-status-bar">
                        <div class="terminal-dots">
                            <span></span><span></span><span></span>
                        </div>
                    </div>
                    <div class="item-header">
                        <span class="chip chip--tactical">بولتن آماری</span>
                    </div>
                    <div class="item-body">
                        <h3>پایش شاخص‌های حساس در بازارهای موازی</h3>
                        <p class="tactical-desc">تحلیل تغییرات معنادار در الگوهای رفتاری بازیگران کلیدی و پیش‌بینی گام‌های بعدی در حوزه اقتصاد سیاسی.</p>
                        
                        <!-- بخش فایل‌های ضمیمه -->
                        <div class="attachments-list">
                            <div class="attachment-file file-downloadable">
                                <div class="file-info">
                                    <div class="file-icon pdf-type">
                                        <i class="ph-fill ph-file-pdf"></i>
                                    </div>
                                    <div class="file-text">
                                        <span class="file-name">گزارش آماری خردادماه</span>
                                        <span class="file-size">PDF | ۴.۲ مگابایت</span>
                                    </div>
                                </div>
                                <a href="#" class="download-btn-modern" title="دانلود مستقیم سند">
                                    <i class="ph-bold ph-download-simple"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </article>

                <!-- گزارش ۲: متنی + گالری (دسترسی سطح متوسط و عالی) -->
                <article class="situation-item panel-card--dark p-6 <?php echo ($user_level === 'normal') ? 'item--locked' : ''; ?>" data-reveal="up">
                    <div class="card-status-bar">
                        <?php if ($user_level === 'normal'): ?>
                            <span class="lock-indicator"><i class="ph-fill ph-lock"></i> محدود شده</span>
                        <?php else: ?>
                            <span class="lock-indicator unlock"><i class="ph-fill ph-lock-key-open"></i> تایید شده</span>
                        <?php endif; ?>
                    </div>
                    <div class="item-header">
                        <span class="chip chip--tactical">مستند تصویری</span>
                    </div>
                    <div class="item-body">
                        <h3>رصد میدانی تحرکات در مرزهای شرقی</h3>
                        
                        <?php if ($user_level === 'normal'): ?>
                        <!-- حالت قفل شده گزارش ۲ -->
                        <div class="tactical-lock-block">
                            <p class="lock-msg">این گزارش تنها برای کاربران با سطح دسترسی بالاتر قابل مشاهده است.</p>
                            <a href="#" class="upgrade-action-btn">
                                <i class="ph ph-arrows-clockwise"></i>
                                <span>درخواست ارتقای سطح دسترسی</span>
                            </a>
                        </div>
                        <?php else: ?>
                        <!-- حالت باز شده گزارش ۲ -->
                        <p class="tactical-desc">تصاویر ماهواره‌ای و رصد مستمر زیرساخت‌های جدید پایش مرزی به همراه جدول ثبت ترددها.</p>
                        
                        <div class="tactical-gallery">
                            <div class="gallery-wrapper">
                                <div class="gallery-item-tactical">
                                    <img src="assets/images/user Avatar/56d604c11de44ed4b583e8f8b81626b3.png" alt="تصویر ماهواره‌ای ۱">
                                    <span class="img-sensor">SENSOR: 01A</span>
                                </div>
                                <div class="gallery-item-tactical">
                                    <img src="assets/images/user Avatar/0f1b74871a3e46e7ae950c05c65e6d2d.png" alt="رصد حرارتی ۲">
                                    <span class="img-sensor">THERMAL</span>
                                </div>
                                <div class="gallery-item-tactical">
                                    <img src="assets/images/user Avatar/رضانصری.webp" alt="تصویر میدانی ۳">
                                    <span class="img-sensor">FIELD_3</span>
                                </div>
                                <div class="gallery-more-tactical">
                                    <span class="more-number">+۵</span>
                                    <span class="more-label">تصویر دیگر</span>
                                </div>
                            </div>
                        </div>
                        <?php endif; ?>
                    </div>
                </article>

                <!-- گزارش ۳: گزارش راهبردی (فقط سطح عالی) -->
                <article class="situation-item panel-card--dark p-6 <?php echo ($user_level !== 'high') ? 'item--locked' : ''; ?>" data-reveal="up">
                    <div class="card-status-bar">
                        <?php if ($user_level !== 'high'): ?>
                            <span class="lock-indicator alert-lock"><i class="ph-fill ph-shield-warning"></i> غیرمجاز</span>
                        <?php else: ?>
                            <span class="lock-indicator unlock"><i class="ph-fill ph-lock-key-open"></i> تایید شده</span>
                        <?php endif; ?>
                    </div>
                    <div class="item-header">
                        <span class="chip chip--tactical chip--danger">ویژه سطح عالی</span>
                    </div>
                    <div class="item-body">
                        <h3>برآورد سناریوهای تقابل در امنیت انرژی</h3>
                        
                        <?php if ($user_level !== 'high'): ?>
                        <!-- حالت قفل شده گزارش ۳ -->
                        <div class="tactical-lock-block level-1-lock">
                            <p class="lock-msg">دسترسی به اسناد راهبردی پدافند انرژی تنها با احراز هویت سطح بالا امکان‌پذیر است.</p>
                            <a href="#" class="upgrade-action-btn danger-upgrade">
                                <i class="ph ph-fingerprint"></i>
                                <span>تایید هویت دو مرحله‌ای و ارتقا</span>
                            </a>
                        </div>
                        <?php else: ?>
                        <!-- حالت باز شده گزارش ۳ -->
                        <p class="tactical-desc">تحلیل نقاط کلیدی آسیب‌پذیر در زیرساخت‌های توزیع سوخت به همراه پیوست‌های ایمن‌سازی شبکه‌های ابری.</p>
                        
                        <div class="attachments-list">
                            <div class="attachment-file file-view-only">
                                <div class="file-info">
                                    <div class="file-icon warning-type">
                                        <i class="ph-fill ph-shield-alert"></i>
                                    </div>
                                    <div class="file-text">
                                        <span class="file-name">سند راهبردی امنیت توزیع.pdf</span>
                                        <span class="file-security-note">فقط مشاهده برخط (واترمارک شده)</span>
                                    </div>
                                </div>
                                <span class="view-only-badge" title="دانلود به دلایل امنیتی غیرفعال است">
                                    <i class="ph-bold ph-eye"></i>
                                </span>
                            </div>
                        </div>
                        <?php endif; ?>
                    </div>
                </article>
                
            </div>
            <?php endif; ?>
        </div>
    </div>
</section>
