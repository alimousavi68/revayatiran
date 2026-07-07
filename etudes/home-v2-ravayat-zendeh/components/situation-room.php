<section class="section-shell section-shell--dark" id="situation-room">
    <div class="container">
        <!-- هدر بخش -->
        <div class="section-head section-head--dark" data-reveal="up">
            <div class="section-head__content">
                <h2>اتاق وضعیت</h2>
            </div>
        </div>

        <?php if ($user_level === 'guest'): ?>
        <!-- نمای مهمان (کارت شیشه‌ای قفل شده با رادار اسکنر) -->
        <div class="situation-lock-overlay" data-reveal="up">
            <div class="situation-lock-card">
                <div class="radar-container">
                    <div class="radar-circle circle-1"></div>
                    <div class="radar-circle circle-2"></div>
                    <div class="radar-circle circle-3"></div>
                    <div class="radar-scanner"></div>
                    <div class="lock-card__icon">
                        <i class="ph-fill ph-lock-key"></i>
                    </div>
                </div>
                
                <div class="lock-card__content">
                    <div class="secure-badge">
                        <i class="ph-fill ph-shield-warning"></i>
                        <span>ارتباط رمزگذاری شده (AES-256)</span>
                    </div>
                    <h3>محتوای قفل شده؛ ویژه اعضای تایید صلاحیت شده</h3>
                    <p>
                        اتاق وضعیت حاوی اسناد محرمانه و برآوردهای آنلاین از مسائل کلان و راهبردی کشور است. دسترسی به این بخش تنها پس از عضویت در شبکه تحلیلگران و تایید سطح صلاحیت امکان‌پذیر است.
                    </p>
                    
                    <div class="lock-card__benefits">
                        <div class="benefit-item">
                            <i class="ph-fill ph-file-text"></i>
                            <div class="benefit-info">
                                <strong>بولتن‌های داده‌محور</strong>
                                <span>گزارش‌های دوره‌ای اقتصادی و سیاسی</span>
                            </div>
                        </div>
                        <div class="benefit-item">
                            <i class="ph-fill ph-eye-closed"></i>
                            <div class="benefit-info">
                                <strong>برآوردهای محرمانه</strong>
                                <span>پیش‌بینی رویدادها و سناریوهای پدافندی</span>
                            </div>
                        </div>
                        <div class="benefit-item">
                            <i class="ph-fill ph-chart-bar"></i>
                            <div class="benefit-info">
                                <strong>تحلیل‌های چند لایه</strong>
                                <span>رصد میدانی مرزها و زیرساخت‌های حساس</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="lock-card__actions">
                        <a href="#" class="button button--primary button--glow">
                            <i class="ph-fill ph-user-plus"></i>
                            <span>ثبت‌نام و احراز هویت اعضا</span>
                        </a>
                        <a href="#" class="button button--ghost-light">
                            <i class="ph-fill ph-sign-in"></i>
                            <span>ورود به حساب کاربری</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <?php else: ?>
        <!-- نمای کاربر عضو: نمایش شبکه کارت‌های تاکتیکال -->
        <div class="situation-grid">
            
            <!-- گزارش ۱: متنی + PDF (قابل دسترسی برای همه اعضا) -->
            <article class="situation-item panel-card--dark" data-reveal="up">
                <div class="card-status-bar">
                    <span class="security-tag tag-level-3">سطح ۳</span>
                    <div class="terminal-dots">
                        <span></span><span></span><span></span>
                    </div>
                </div>
                <div class="item-header">
                    <span class="chip chip--tactical">بولتن آماری</span>
                    <span class="item-date">
                        <i class="ph ph-calendar-blank"></i>
                        <span>۱۲ تیر ۱۴۰۵</span>
                    </span>
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
            <article class="situation-item panel-card--dark <?php echo ($user_level === 'normal') ? 'item--locked' : ''; ?>" data-reveal="up">
                <div class="card-status-bar">
                    <span class="security-tag tag-level-2">سطح ۲</span>
                    <?php if ($user_level === 'normal'): ?>
                        <span class="lock-indicator"><i class="ph-fill ph-lock"></i> محدود شده</span>
                    <?php else: ?>
                        <span class="lock-indicator unlock"><i class="ph-fill ph-lock-key-open"></i> تایید شده</span>
                    <?php endif; ?>
                </div>
                <div class="item-header">
                    <span class="chip chip--tactical">مستند تصویری</span>
                    <span class="item-date">
                        <i class="ph ph-calendar-blank"></i>
                        <span>۱۰ تیر ۱۴۰۵</span>
                    </span>
                </div>
                <div class="item-body">
                    <h3>رصد میدانی تحرکات در مرزهای شرقی</h3>
                    
                    <?php if ($user_level === 'normal'): ?>
                    <!-- حالت قفل شده گزارش ۲ -->
                    <div class="tactical-lock-block">
                        <p class="lock-msg">این گزارش تصویری رادار تنها برای کاربران سطح ۲ (متوسط) و بالاتر قابل دسترسی است.</p>
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
            <article class="situation-item panel-card--dark <?php echo ($user_level !== 'high') ? 'item--locked' : ''; ?>" data-reveal="up">
                <div class="card-status-bar">
                    <span class="security-tag tag-level-1">سطح ۱</span>
                    <?php if ($user_level !== 'high'): ?>
                        <span class="lock-indicator alert-lock"><i class="ph-fill ph-shield-warning"></i> غیرمجاز</span>
                    <?php else: ?>
                        <span class="lock-indicator unlock"><i class="ph-fill ph-lock-key-open"></i> تایید شده</span>
                    <?php endif; ?>
                </div>
                <div class="item-header">
                    <span class="chip chip--tactical chip--danger">فوق محرمانه</span>
                    <span class="item-date">
                        <i class="ph ph-calendar-blank"></i>
                        <span>۰۸ تیر ۱۴۰۵</span>
                    </span>
                </div>
                <div class="item-body">
                    <h3>برآورد سناریوهای تقابل در امنیت انرژی</h3>
                    
                    <?php if ($user_level !== 'high'): ?>
                    <!-- حالت قفل شده گزارش ۳ -->
                    <div class="tactical-lock-block level-1-lock">
                        <p class="lock-msg">دسترسی به اسناد فوق‌محرمانه پدافند انرژی تنها با گواهینامه احراز هویت سطح ۱ امکان‌پذیر است.</p>
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
</section>
