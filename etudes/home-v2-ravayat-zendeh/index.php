<?php
// شبیه‌سازی سطح دسترسی کاربر برای نمایش بخش اتاق وضعیت
// سطوح: 'guest' (مهمان), 'normal' (عادی), 'medium' (متوسط), 'high' (عالی)
$user_level = 'guest'; 
?>
<!DOCTYPE html>
<html lang="fa" dir="rtl" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>روایت ایران | اتود دوم صفحه اصلی</title>
    <meta name="description" content="اتود جایگزین صفحه اصلی روایت ایران با اتمسفر گرم، پویا و معاصر">
    <meta name="robots" content="index, follow">
    <?php if ($user_level !== 'guest'): ?>
    <!-- جلوگیری از ایندکس بخش‌های حساس در صورت ورود کاربر -->
    <meta name="robots" content="noindex, nofollow">
    <?php endif; ?>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- Phosphor Icons -->
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
    
    <!-- Tailwind CSS (Required for Multimedia Section) -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        navy: '#12233d',
                        gold: '#B89053',
                        'surface-offset': '#f5f7fa',
                        'border': '#dce3ec',
                    }
                }
            }
        }
    </script>

    <link rel="stylesheet" href="./assets/css/style.css">
</head>
<body>
    <div class="page-progress" aria-hidden="true">
        <span id="page-progress-bar"></span>
    </div>

    <header class="site-header" id="site-header">
        <div class="top-strip">
            <div class="container top-strip__inner">
                <div class="top-strip__meta">
                    <span>پنج‌شنبه ۱۲ تیر ۱۴۰۵</span>
                    <span class="divider-dot"></span>
                    <span>آخرین به‌روزرسانی صفحه اصلی</span>
                </div>
                <div class="top-strip__links">
                    <a href="#situation-room">اتاق وضعیت</a>
                    <a href="#multimedia">رسانه‌نگار</a>
                    <a href="#analysts-network">شبکه تحلیلگران</a>
                </div>
            </div>
        </div>

        <div class="container header-shell">
            <div class="brand-lockup">
                <a href="#" class="brand-mark" aria-label="روایت ایران">
                    <span class="brand-mark__icon">ر</span>
                    <span class="brand-mark__text">
                        <strong>روایت ایران</strong>
                        <small>پلتفرم تحلیلی و داده‌محور</small>
                    </span>
                </a>
            </div>

            <nav class="main-nav" aria-label="ناوبری اصلی">
                <a href="#hero" class="is-active">ویترین اصلی</a>
                <a href="#daily-narrative">روایت روز</a>
                <a href="#news-monitoring">رصد اخبار</a>
                <a href="#special-dossiers">پرونده ویژه</a>
                <a href="#media-observatory">دیدبان رسانه</a>
                <a href="#analysts-network">تحلیلگران</a>
            </nav>

            <div class="header-actions">
                <button class="theme-toggle" id="theme-toggle" type="button" aria-label="تغییر حالت رنگی">
                    <span class="theme-toggle__option theme-toggle__option--light">روشن</span>
                    <span class="theme-toggle__option theme-toggle__option--dark">تیره</span>
                </button>
                <button class="icon-button" type="button" aria-label="جستجو">
                    <span class="search-icon"></span>
                </button>
                <a class="button button--ghost" href="#">ورود</a>
                <a class="button button--primary" href="#">ثبت نام</a>
                <button class="menu-toggle" id="menu-toggle" type="button" aria-expanded="false" aria-controls="mobile-menu">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
            </div>
        </div>

        <div class="mobile-menu" id="mobile-menu">
            <div class="mobile-menu__panel">
                <a href="#hero">ویترین اصلی</a>
                <a href="#daily-narrative">روایت روز</a>
                <a href="#news-monitoring">رصد اخبار</a>
                <a href="#special-dossiers">پرونده ویژه</a>
                <a href="#media-observatory">دیدبان رسانه</a>
                <a href="#situation-room">اتاق وضعیت</a>
                <a href="#multimedia">رسانه‌نگار</a>
                <a href="#analysts-network">شبکه تحلیلگران</a>
            </div>
        </div>
    </header>

    <main>
        <section class="hero-section" id="hero">
            <div class="hero-grid container">
                <div class="hero-stage" data-reveal="up">
                    <article class="hero-feature">
                        <div class="hero-feature__media">
                            <img src="../../assets/images/hero_____________.jpg" alt="خبر اصلی ویترین">
</div>
                        <div class="hero-feature__content">
                            <span class="chip chip--alert">خبر ویژه</span>
                            <div class="byline byline--hero">
                                <img class="byline__avatar" src="../../assets/images/daily-narrative__________________.jpg" alt="الهام شریفی">
                                <div class="byline__text">
                                    <strong>الهام شریفی</strong>
                                    <span>پژوهشگر سیاست عمومی</span>
                                </div>
                            </div>
                            <h2>تحلیل سناریوهای پیش‌رو در مذاکرات منطقه‌ای؛ آیا توازن قوا تغییر می‌کند؟</h2>
                            <p>بررسی میدانی تحولات دیپلماتیک و پیامدهای احتمالی آن بر روابط منطقه‌ای و آرایش ائتلاف‌ها.</p>
                            <div class="meta-row">
                                <span>رصد اخبار</span>
                                <span>۲ ساعت پیش</span>
                                <span>تحلیل سردبیر</span>
                            </div>
                        </div>
                    </article>

                    <div class="hero-stack">
                        <article class="hero-brief-card">
                            <img src="../../assets/images/hero______.jpg" alt="جایگاه دوم هیرو">
                            <div class="hero-brief-card__content">
                                <span class="chip">اقتصاد سیاسی</span>
                                <h3>تصمیمات تازه بانک مرکزی و اثر آن بر مهار تورم ساختاری</h3>
                                <div class="byline byline--compact">
                                    <img class="byline__avatar" src="../../assets/images/analysts-network_______.jpg" alt="مریم صادقی">
                                    <div class="byline__text">
                                        <strong>مریم صادقی</strong>
                                        <span>اقتصاددان سیاسی</span>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <article class="hero-brief-card">
                            <img src="../../assets/images/hero__________.jpg" alt="جایگاه سوم هیرو">
                            <div class="hero-brief-card__content">
                                <span class="chip">امنیت</span>
                                <h3>رزمایش مشترک و پیامدهای استراتژیک آن برای امنیت مرزها</h3>
                                <div class="byline byline--compact">
                                    <img class="byline__avatar" src="../../assets/images/daily-narrative__________________.jpg" alt="رضا کمالی">
                                    <div class="byline__text">
                                        <strong>رضا کمالی</strong>
                                        <span>تحلیلگر امنیتی</span>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <article class="hero-brief-card">
                            <img src="../../assets/images/hero____________.jpg" alt="جایگاه چهارم هیرو">
                            <div class="hero-brief-card__content">
                                <span class="chip">سیاست داخلی</span>
                                <h3>آرایش انتخاباتی احزاب در آستانه تغییرات کلان قانون‌گذاری</h3>
                                <div class="byline byline--compact">
                                    <img class="byline__avatar" src="../../assets/images/analysts-network_______.jpg" alt="نرگس احمدی">
                                    <div class="byline__text">
                                        <strong>نرگس احمدی</strong>
                                        <span>تحلیلگر سیاست داخلی</span>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <article class="hero-brief-card">
                            <img src="../../assets/images/hero_________________.jpg" alt="جایگاه پنجم هیرو">
                            <div class="hero-brief-card__content">
                                <span class="chip">بین‌الملل</span>
                                <h3>شوک انرژی در اروپا و واکنش بازارهای جهانی به بحران تازه</h3>
                                <div class="byline byline--compact">
                                    <img class="byline__avatar" src="../../assets/images/daily-narrative__________________.jpg" alt="احسان طاهری">
                                    <div class="byline__text">
                                        <strong>احسان طاهری</strong>
                                        <span>دبیر بین‌الملل</span>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-shell section-shell--offwhite" id="daily-narrative">
            <div class="container">
                <div class="section-head" data-reveal="up">
                    <div class="section-head__content">
                        <span class="section-kicker">روایت روز</span>
                        <h2>تحلیل‌های برتر نخبگان</h2>
                        <p class="section-summary">رتبه‌بندی شده توسط مخاطبان و ارزیابی سردبیری پلتفرم؛ گلچینی از عمیق‌ترین نگاه‌ها به مسائل جاری.</p>
                    </div>
                    <div class="section-head__divider"></div>
                    <a href="#" class="section-link">آرشیو کامل تحلیل‌ها</a>
                </div>

                <div class="daily-grid">
                    <!-- Right Main Content: Featured Analysis -->
                    <div class="daily-main-col" data-reveal="up">
                        <article class="featured-analysis-card">
                            <div class="analysis-card__visual">
                                <img src="https://images.unsplash.com/photo-1454165833767-027ffea9e778?auto=format&fit=crop&q=80&w=1200&h=600" alt="تحلیل برتر روز">
                                <div class="analysis-card__tags">
                                    <span class="tag-category">سیاست خارجی</span>
                                    <div class="tag-rating">
                                        <svg class="ui-icon" viewBox="0 0 24 24" style="color: #fbbf24; fill: #fbbf24;"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                                        <span>امتیاز تحلیل: ۴.۸ از ۵</span>
                                    </div>
                                </div>
                            </div>
                            <div class="analysis-card__content">
                                <div class="analysis-card__header">
                                    <div class="author-info">
                                        <img class="author-avatar" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?auto=format&fit=crop&q=80&w=150&h=150" alt="الهام شریفی">
                                        <div class="author-details">
                                            <div class="author-name-row">
                                                <span class="author-name">الهام شریفی</span>
                                                <span class="author-badge">پژوهشگر ارشد</span>
                                            </div>
                                            <span class="author-title">دکترای سیاست عمومی</span>
                                        </div>
                                    </div>
                                    <div class="publish-date">۱۲ تیر ۱۴۰۵</div>
                                </div>
                                <div class="analysis-card__body">
                                    <h2 class="analysis-title">یارانه پنهان و فرسایش اعتماد عمومی؛ اقتصاد سیاسی یک نابرابری مزمن</h2>
                                    <p class="analysis-excerpt">
                                        این تحلیل، نسبت میان تصمیم‌های بودجه‌ای، تورم فرساینده و ادراک عمومی از عدالت توزیعی را بررسی می‌کند و نشان می‌دهد چرا برخی اصلاحات بدون بازطراحی روایت عمومی شکست می‌خورند.
                                    </p>
                                </div>
                                <div class="analysis-card__footer">
                                    <div class="footer-right">
                                        <button class="approve-btn">
                                            <svg class="ui-icon" viewBox="0 0 24 24"><path d="M14 9V5a3 3 0 00-3-3l-4 9v11h11.28a2 2 0 002-1.7l1.38-9a2 2 0 00-2-2.3zM7 22H4a2 2 0 01-2-2v-7a2 2 0 012-2h3" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                            <span>تایید تحلیل (۳۴۲)</span>
                                        </button>
                                        <div class="star-rating">
                                            <svg class="ui-icon" viewBox="0 0 24 24" style="color: #fbbf24; fill: #fbbf24;"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                                            <svg class="ui-icon" viewBox="0 0 24 24" style="color: #fbbf24; fill: #fbbf24;"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                                            <svg class="ui-icon" viewBox="0 0 24 24" style="color: #fbbf24; fill: #fbbf24;"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                                            <svg class="ui-icon" viewBox="0 0 24 24" style="color: #fbbf24; fill: #fbbf24;"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                                            <svg class="ui-icon" viewBox="0 0 24 24" style="color: #fbbf24; fill: #fbbf24;"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                                        </div>
                                    </div>
                                    <div class="view-count">
                                        <svg class="ui-icon" viewBox="0 0 24 24"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z" stroke-linecap="round" stroke-linejoin="round"/><circle cx="12" cy="12" r="3" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        <span>۱,۲۴۰ بازدید</span>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>

                    <!-- Left Sidebar: Hot Analyses -->
                    <div class="daily-side-col">
                        <!-- Card 1: Top List Card -->
                        <div class="sidebar-card top-list-card" data-reveal="up">
                            <span class="kicker-purple">پربازدیدترین</span>
                            <h3 class="card-title">بیشترین مراجعات و تحلیل‌ها</h3>
                            
                            <div class="mini-list">
                                <article class="mini-item">
                                    <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?auto=format&fit=crop&q=80&w=150&h=150" alt="مریم صادقی" class="mini-avatar">
                                    <div class="mini-content">
                                        <span class="mini-author">مریم صادقی</span>
                                        <h4 class="mini-title">چرا افکار عمومی دیگر با تیترهای خطی قانع نمی‌شود؟</h4>
                                        <div class="mini-footer">
                                            <span class="mini-tag">جامعه سیاسی</span>
                                            <span class="mini-likes">
                                                <svg class="ui-icon" viewBox="0 0 24 24" style="width:14px; height:14px;"><path d="M14 9V5a3 3 0 00-3-3l-4 9v11h11.28a2 2 0 002-1.7l1.38-9a2 2 0 00-2-2.3zM7 22H4a2 2 0 01-2-2v-7a2 2 0 012-2h3" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                                ۲۴۵
                                            </span>
                                        </div>
                                    </div>
                                </article>
                                <article class="mini-item">
                                    <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&q=80&w=150&h=150" alt="رضا کمالی" class="mini-avatar">
                                    <div class="mini-content">
                                        <span class="mini-author">رضا کمالی</span>
                                        <h4 class="mini-title">آیا اتحادهای موقت منطقه‌ای به بازدارندگی پایدار تبدیل می‌شوند؟</h4>
                                        <div class="mini-footer">
                                            <span class="mini-tag">امنیت ملی</span>
                                            <span class="mini-likes">
                                                <svg class="ui-icon" viewBox="0 0 24 24" style="width:14px; height:14px;"><path d="M14 9V5a3 3 0 00-3-3l-4 9v11h11.28a2 2 0 002-1.7l1.38-9a2 2 0 00-2-2.3zM7 22H4a2 2 0 01-2-2v-7a2 2 0 012-2h3" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                                ۱۸۲
                                            </span>
                                        </div>
                                    </div>
                                </article>
                                <article class="mini-item">
                                    <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?auto=format&fit=crop&q=80&w=150&h=150" alt="احسان طاهری" class="mini-avatar">
                                    <div class="mini-content">
                                        <span class="mini-author">احسان طاهری</span>
                                        <h4 class="mini-title">تنش‌های ارزی و سناریوهای پیش‌روی بازارهای مالی در فصل جدید</h4>
                                        <div class="mini-footer">
                                            <span class="mini-tag">اقتصاد سیاسی</span>
                                            <span class="mini-likes">
                                                <svg class="ui-icon" viewBox="0 0 24 24" style="width:14px; height:14px;"><path d="M14 9V5a3 3 0 00-3-3l-4 9v11h11.28a2 2 0 002-1.7l1.38-9a2 2 0 00-2-2.3zM7 22H4a2 2 0 01-2-2v-7a2 2 0 012-2h3" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                                ۱۵۶
                                            </span>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        </div>

                        <!-- Card 2: Info Card -->
                        <div class="sidebar-card info-rules-card" data-reveal="up">
                            <div class="info-header">
                                <span class="info-icon">
                                    <svg class="ui-icon" viewBox="0 0 24 24" style="width:20px; height:20px;"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4m0-4h.01" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                </span>
                                <h3 class="info-title">قوانین تایید و رتبه‌دهی</h3>
                            </div>
                            <p class="info-text">
                                تحلیل‌های ارسالی پس از بررسی اولیه توسط تیم سردبیری، بر اساس معیارهای دقت، مستند بودن و کیفیت نگارش رتبه‌بندی می‌شوند. امتیاز نهایی ترکیبی از نظر کارشناسان و بازخورد مخاطبان است.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-shell section-shell--warm" id="news-monitoring">
            <div class="container">
                <div class="section-head" data-reveal="up">
                    <div class="section-head__content">
                        <span class="section-kicker">رصد اخبار</span>
                        <h2>پایش هوشمند جریان خبری</h2>
                        <p class="section-summary">رصد ۲۴ ساعته منابع خبری و شبکه‌های اجتماعی با رویکرد اعتبارسنجی و کشف روایت‌های نوظهور.</p>
                    </div>
                    <div class="tabs" role="tablist" aria-label="دسته‌بندی اخبار">
                        <button class="tab-button is-active" type="button" role="tab" aria-selected="true" data-news-tab="all">همه</button>
                        <button class="tab-button" type="button" role="tab" aria-selected="false" data-news-tab="politics">سیاست</button>
                        <button class="tab-button" type="button" role="tab" aria-selected="false" data-news-tab="economy">اقتصاد</button>
                        <button class="tab-button" type="button" role="tab" aria-selected="false" data-news-tab="security">امنیت</button>
                    </div>
                </div>

                <div class="news-layout">
                    <div class="news-panels">
                        <div class="news-panel is-active" data-news-panel="all">
                            <div class="news-bento">
                                <article class="news-card" data-reveal="up">
                                    <img src="../../assets/images/hero______.jpg" alt="خبر ویژه سیاست خارجی">
                                    <div class="news-card__overlay">
                                        <div class="news-card__meta">
                                            <span class="chip">سیاست خارجی</span>
                                            <span class="source-badge">خبرگزاری ایرنا</span>
                                        </div>
                                        <h3>بازگشت بازیگران به میزهای چندمرحله‌ای؛ دیپلماسی زیر فشار زمان</h3>
                                    </div>
                                </article>
                                <article class="news-card" data-reveal="up">
                                    <img src="../../assets/images/news-monitoring______.jpg" alt="خبر اقتصادی">
                                    <div class="news-card__overlay">
                                        <div class="news-card__meta">
                                            <span class="chip">اقتصاد سیاسی</span>
                                            <span class="source-badge">دنیای اقتصاد</span>
                                        </div>
                                        <h3>بازارها در انتظار بسته جدید تصمیم‌سازی مالی</h3>
                                    </div>
                                </article>
                                <article class="news-card" data-reveal="up">
                                    <img src="../../assets/images/hero____________.jpg" alt="خبر امنیتی">
                                    <div class="news-card__overlay">
                                        <div class="news-card__meta">
                                            <span class="chip">امنیت</span>
                                            <span class="source-badge">تسنیم</span>
                                        </div>
                                        <h3>رصد تحرکات مرزی و پیامدهای رسانه‌ای آن در افکار عمومی</h3>
                                    </div>
                                </article>
                                <article class="news-card" data-reveal="up">
                                    <img src="../../assets/images/hero__________.jpg" alt="خبر فرهنگی">
                                    <div class="news-card__overlay">
                                        <div class="news-card__meta">
                                            <span class="chip">جامعه</span>
                                            <span class="source-badge">ایسنا</span>
                                        </div>
                                        <h3>تغییر الگوهای مصرف رسانه‌ای در بین نسل جدید</h3>
                                    </div>
                                </article>
                                <article class="news-card" data-reveal="up">
                                    <img src="../../assets/images/hero_________________.jpg" alt="خبر بین‌الملل">
                                    <div class="news-card__overlay">
                                        <div class="news-card__meta">
                                            <span class="chip">بین‌الملل</span>
                                            <span class="source-badge">فارس</span>
                                        </div>
                                        <h3>تحولات جدید در شرق اروپا و اثر آن بر امنیت انرژی</h3>
                                    </div>
                                </article>
                                <article class="news-card" data-reveal="up">
                                    <img src="../../assets/images/news-monitoring______.jpg" alt="خبر تکنولوژی">
                                    <div class="news-card__overlay">
                                        <div class="news-card__meta">
                                            <span class="chip">فناوری</span>
                                            <span class="source-badge">مهر</span>
                                        </div>
                                        <h3>هوش مصنوعی و چالش‌های بازشناسی روایت‌های جعلی</h3>
                                    </div>
                                </article>
                                <article class="news-card" data-reveal="up">
                                    <img src="../../assets/images/hero____________.jpg" alt="خبر سیاسی">
                                    <div class="news-card__overlay">
                                        <div class="news-card__meta">
                                            <span class="chip">سیاست داخلی</span>
                                            <span class="source-badge">اعتماد</span>
                                        </div>
                                        <h3>آرایش جدید جناح‌های سیاسی در آستانه تصمیمات مهم</h3>
                                    </div>
                                </article>
                                <article class="news-card" data-reveal="up">
                                    <img src="../../assets/images/hero______.jpg" alt="خبر ورزشی">
                                    <div class="news-card__overlay">
                                        <div class="news-card__meta">
                                            <span class="chip">دیپلماسی</span>
                                            <span class="source-badge">ایرنا</span>
                                        </div>
                                        <h3>نقش ورزش در بهبود روابط دیپلماتیک منطقه‌ای</h3>
                                    </div>
                                </article>
                                <article class="news-card" data-reveal="up">
                                    <img src="../../assets/images/hero__________.jpg" alt="خبر محیط زیست">
                                    <div class="news-card__overlay">
                                        <div class="news-card__meta">
                                            <span class="chip">محیط زیست</span>
                                            <span class="source-badge">ایلنا</span>
                                        </div>
                                        <h3>بحران آب و ضرورت بازنگری در سیاست‌های کلان توسعه</h3>
                                    </div>
                                </article>
                            </div>
                        </div>

                        <div class="news-panel" data-news-panel="politics" hidden>
                            <div class="news-bento">
                                <article class="news-card" data-reveal="up">
                                    <img src="../../assets/images/hero____________.jpg" alt="سیاست داخلی">
                                    <div class="news-card__overlay">
                                        <div class="news-card__meta">
                                            <span class="chip">سیاست داخلی</span>
                                            <span class="source-badge">اعتماد</span>
                                        </div>
                                        <h3>بازآرایی بلوک‌های سیاسی پیش از فصل تصمیم‌های بزرگ</h3>
                                    </div>
                                </article>
                                <article class="news-card" data-reveal="up">
                                    <img src="../../assets/images/hero______.jpg" alt="سیاست خارجی">
                                    <div class="news-card__overlay">
                                        <div class="news-card__meta">
                                            <span class="chip">سیاست خارجی</span>
                                            <span class="source-badge">ایرنا</span>
                                        </div>
                                        <h3>مذاکرات فشرده، واژه‌های محافظه‌کار و پیام‌های چندلایه</h3>
                                    </div>
                                </article>
                                <article class="news-card" data-reveal="up">
                                    <img src="../../assets/images/news-monitoring______.jpg" alt="تحلیل سریع">
                                    <div class="news-card__overlay">
                                        <div class="news-card__meta">
                                            <span class="chip">تحلیل سریع</span>
                                            <span class="source-badge">روایت ایران</span>
                                        </div>
                                        <h3>واکنش افکار عمومی به لحن تازه مقام‌ها در قبال پرونده منطقه</h3>
                                    </div>
                                </article>
                            </div>
                        </div>

                        <div class="news-panel" data-news-panel="economy" hidden>
                            <div class="news-bento">
                                <article class="news-card" data-reveal="up">
                                    <img src="../../assets/images/news-monitoring______.jpg" alt="اقتصاد">
                                    <div class="news-card__overlay">
                                        <div class="news-card__meta">
                                            <span class="chip">اقتصاد</span>
                                            <span class="source-badge">دنیای اقتصاد</span>
                                        </div>
                                        <h3>سناریوهای بازار ارز پس از بسته تازه بانک مرکزی</h3>
                                    </div>
                                </article>
                                <article class="news-card" data-reveal="up">
                                    <img src="../../assets/images/hero__________.jpg" alt="بودجه">
                                    <div class="news-card__overlay">
                                        <div class="news-card__meta">
                                            <span class="chip">بودجه</span>
                                            <span class="source-badge">فارس</span>
                                        </div>
                                        <h3>بودجه انقباضی یا بازتوزیع خاموش؟</h3>
                                    </div>
                                </article>
                                <article class="news-card" data-reveal="up">
                                    <img src="../../assets/images/hero_________________.jpg" alt="بازار سرمایه">
                                    <div class="news-card__overlay">
                                        <div class="news-card__meta">
                                            <span class="chip">بازار سرمایه</span>
                                            <span class="source-badge">ایسنا</span>
                                        </div>
                                        <h3>سرمایه‌گذار خسته؛ چه چیزی هنوز به بازار سیگنال می‌دهد؟</h3>
                                    </div>
                                </article>
                            </div>
                        </div>

                        <div class="news-panel" data-news-panel="security" hidden>
                            <div class="news-bento">
                                <article class="news-card" data-reveal="up">
                                    <img src="../../assets/images/hero____________.jpg" alt="امنیت">
                                    <div class="news-card__overlay">
                                        <div class="news-card__meta">
                                            <span class="chip">امنیت</span>
                                            <span class="source-badge">تسنیم</span>
                                        </div>
                                        <h3>امنیت مرز فقط مسئله میدان نیست، مسئله روایت هم هست</h3>
                                    </div>
                                </article>
                                <article class="news-card" data-reveal="up">
                                    <img src="../../assets/images/hero______.jpg" alt="دفاعی">
                                    <div class="news-card__overlay">
                                        <div class="news-card__meta">
                                            <span class="chip">دفاعی</span>
                                            <span class="source-badge">مهر</span>
                                        </div>
                                        <h3>چرا برخی رزمایش‌ها بیشتر از آنکه نظامی باشند رسانه‌ای‌اند؟</h3>
                                    </div>
                                </article>
                                <article class="news-card" data-reveal="up">
                                    <img src="../../assets/images/news-monitoring______.jpg" alt="هشدار">
                                    <div class="news-card__overlay">
                                        <div class="news-card__meta">
                                            <span class="chip">هشدار</span>
                                            <span class="source-badge">ایرنا</span>
                                        </div>
                                        <h3>ریسک خطای برداشت در روایت‌های سریع درباره تهدید</h3>
                                    </div>
                                </article>
                            </div>
                        </div>
                    </div>

                    <aside class="trending-column panel-card" data-reveal="left">
                        <div class="trending-column__head">
                            <h3>پربازدیدهای اخبار رصد شده</h3>
                        </div>
                        <ol class="trending-list">
                            <li>
                                <span>۱</span>
                                <div class="trending-item__content">
                                    <a href="#" class="trending-item__title">چرا تغییر لحن رسانه‌ای دولت از تغییر سیاست مهم‌تر دیده شد؟</a>
                                    <span class="trending-item__source">خبرگزاری ایرنا</span>
                                </div>
                            </li>
                            <li>
                                <span>۲</span>
                                <div class="trending-item__content">
                                    <a href="#" class="trending-item__title">پشت‌صحنه آرامش بازار؛ مهار واقعی یا تاخیر در شوک؟</a>
                                    <span class="trending-item__source">روزنامه دنیای اقتصاد</span>
                                </div>
                            </li>
                            <li>
                                <span>۳</span>
                                <div class="trending-item__content">
                                    <a href="#" class="trending-item__title">سه روایت رقیب درباره رخداد مرزی اخیر چگونه ساخته شدند؟</a>
                                    <span class="trending-item__source">خبرگزاری تسنیم</span>
                                </div>
                            </li>
                            <li>
                                <span>۴</span>
                                <div class="trending-item__content">
                                    <a href="#" class="trending-item__title">پرونده ویژه جدید چگونه در کمتر از ۲۴ ساعت ترند شد؟</a>
                                    <span class="trending-item__source">روایت ایران</span>
                                </div>
                            </li>
                            <li>
                                <span>۵</span>
                                <div class="trending-item__content">
                                    <a href="#" class="trending-item__title">تحلیل آماری از نوسانات اخیر بازار سرمایه و پیش‌بینی روندها</a>
                                    <span class="trending-item__source">خبرگزاری فارس</span>
                                </div>
                            </li>
                            <li>
                                <span>۶</span>
                                <div class="trending-item__content">
                                    <a href="#" class="trending-item__title">نقش شبکه‌های اجتماعی در شکل‌گیری روایت‌های اقتصادی نوظهور</a>
                                    <span class="trending-item__source">ایسنا</span>
                                </div>
                            </li>
                        </ol>

                        <div class="cta-social-box">
                            <h4>دنبال کردن در شبکه‌های اجتماعی</h4>
                            <div class="social-links">
                                <a href="#" class="social-link social-link--telegram">
                                    <svg viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm4.64 6.8c-.15 1.58-.8 5.42-1.13 7.19-.14.75-.42 1-.68 1.03-.58.05-1.02-.38-1.58-.75-.88-.58-1.38-.94-2.23-1.5-.99-.65-.35-1.01.22-1.59.15-.15 2.71-2.48 2.76-2.69.01-.03.01-.14-.07-.2-.08-.06-.19-.04-.27-.02-.11.02-1.93 1.23-5.46 3.62-.51.35-.98.52-1.4.51-.46-.01-1.35-.26-2.01-.48-.81-.27-1.45-.42-1.39-.89.03-.24.36-.49.99-.75 3.88-1.69 6.47-2.8 7.76-3.34 3.69-1.54 4.45-1.81 4.95-1.82.11 0 .35.03.5.16.13.1.17.24.18.33.01.06.02.19.01.26z"/></svg>
                                    <span>تلگرام</span>
                                </a>
                                <a href="#" class="social-link social-link--bale">
                                    <svg viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 15h-2v-2h2v2zm0-4h-2V7h2v6z"/></svg>
                                    <span>بله</span>
                                </a>
                                <a href="#" class="social-link social-link--eitaa">
                                    <svg viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm4.5 13h-9v-1.5l2-2v-4h5v4l2 2V15z"/></svg>
                                    <span>ایتا</span>
                                </a>
                                <a href="#" class="social-link social-link--twitter">
                                    <svg viewBox="0 0 24 24"><path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.84 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/></svg>
                                    <span>توییتر</span>
                                </a>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </section>

        <section class="section-shell" id="special-dossiers">
            <div class="container">
                <div class="section-head" data-reveal="up">
                    <div class="section-head__content">
                        <span class="section-kicker">پرونده ویژه</span>
                        <h2>واکاوی موضوعات راهبردی</h2>
                        <p class="section-summary">پرونده‌های تحلیلی چندبعدی با تمرکز بر ریشه‌ها، روندها و پیامدهای رویدادهای کلان ایران و جهان.</p>
                    </div>
                    <div class="section-head__divider"></div>
                    <a href="#" class="section-link">آرشیو پرونده‌ها</a>
                </div>

                <div class="dossier-redesign" data-reveal="up">
                    <div class="dossier-main-card">
                        <div class="dossier-visual">
                            <img src="https://images.unsplash.com/photo-1504711434969-e33886168f5c?auto=format&fit=crop&q=80&w=1200&h=800" alt="پروژه نفوذ شناختی">
                            <div class="dossier-visual__overlay">
                                <span class="chip chip--active">پرونده جاری</span>
                            </div>
                        </div>
                        <div class="dossier-content">
                            <div class="dossier-content__header">
                                <span class="dossier-category">تحلیل راهبردی</span>
                                <div class="dossier-badge-row">
                                    <span class="live-indicator">
                                        <span class="live-indicator__dot"></span>
                                        انتشار تدریجی
                                    </span>
                                </div>
                                <h3>پروژه نفوذ شناختی؛ از بازتولید واژه‌ها تا مهندسی هراس عمومی</h3>
                            </div>
                            <p class="dossier-excerpt">
                                این پرونده به‌صورت مرحله‌ای ابعاد جنگ شناختی در بستر رسانه‌های اجتماعی را باز می‌کند؛ از هسته‌های تولید پیام تا سازوکار تقویت، بازنشر و نرمال‌سازی گزاره‌ها در شبکه عمومی.
                            </p>
                            
                            <div class="dossier-features-grid">
                                <div class="dossier-feature-item">
                                    <div class="feature-icon">
                                        <svg class="ui-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                                    </div>
                                    <div class="feature-text">
                                        <strong>اسناد و داده‌ها</strong>
                                        <span>۱۲ فایل پی‌دی‌اف پیوست</span>
                                    </div>
                                </div>
                                <div class="dossier-feature-item">
                                    <div class="feature-icon">
                                        <svg class="ui-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><circle cx="8.5" cy="8.5" r="1.5"></circle><polyline points="21 15 16 10 5 21"></polyline></svg>
                                    </div>
                                    <div class="feature-text">
                                        <strong>گالری تصاویر</strong>
                                        <span>۴۵ تصویر مستند</span>
                                    </div>
                                </div>
                                <div class="dossier-feature-item">
                                    <div class="feature-icon">
                                        <svg class="ui-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path></svg>
                                    </div>
                                    <div class="feature-text">
                                        <strong>تحلیل نخبگان</strong>
                                        <span>۸ یادداشت تحلیلی</span>
                                    </div>
                                </div>
                            </div>

                            <div class="dossier-footer">
                                <a href="#" class="button button--primary button--large">
                                    <span>مشاهده صفحه کامل پرونده</span>
                                    <svg class="ui-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M19 12H5M12 19l-7-7 7-7"/></svg>
                                </a>
                                <div class="dossier-stats">
                                    <span class="stat-item">آخرین به‌روزرسانی: ۲ ساعت پیش</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-shell section-shell--gradient" id="media-observatory">
            <div class="container">
                <div class="section-head" data-reveal="up">
                    <div class="section-head__content">
                        <span class="section-kicker">دیدبان رسانه</span>
                        <h2>تحلیل هوشمند فضای رسانه‌ای</h2>
                        <p class="section-summary">استخراج الگوهای فریم‌بندی و جهت‌گیری‌های رسانه‌های داخلی و بین‌المللی در قبال تحولات جاری.</p>
                    </div>
                    <div class="section-head__divider"></div>
                    <a href="#" class="section-link">همه گزارش‌ها</a>
                </div>

                <div class="observatory-grid">
                    <article class="data-stage panel-card" data-reveal="up">
                        <div class="data-stage__header">
                            <div>
                                <strong>نقشه شدت روایت</strong>
                                <span>مقایسه ۴ جریان رسانه‌ای در یک موضوع مشترک</span>
                            </div>
                            <span class="chip chip--solid">زنده</span>
                        </div>
                        <div class="data-bars">
                            <div class="data-bar">
                                <span>رسانه الف</span>
                                <i style="--bar-size: 82%"></i>
                            </div>
                            <div class="data-bar">
                                <span>رسانه ب</span>
                                <i style="--bar-size: 68%"></i>
                            </div>
                            <div class="data-bar">
                                <span>رسانه ج</span>
                                <i style="--bar-size: 59%"></i>
                            </div>
                            <div class="data-bar">
                                <span>رسانه د</span>
                                <i style="--bar-size: 74%"></i>
                            </div>
                        </div>
                    </article>

                    <div class="observatory-list">
                        <article class="observatory-item panel-card" data-reveal="up">
                            <span class="chip">تحلیل گفتمان</span>
                            <h3>چطور واژه «ثبات» در چهار رسانه، چهار معنای متفاوت پیدا کرد؟</h3>
                        </article>
                        <article class="observatory-item panel-card" data-reveal="up">
                            <span class="chip">مقایسه روایت</span>
                            <h3>دو تیتر، دو جهان؛ مقایسه صورت‌بندی یک رویداد واحد</h3>
                        </article>
                        <article class="observatory-item panel-card" data-reveal="up">
                            <span class="chip">کمپین</span>
                            <h3>موتیف‌های تکرارشونده در کمپین رسانه‌ای هفته گذشته</h3>
                        </article>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-shell section-shell--dark" id="situation-room">
            <div class="container">
                <div class="section-head section-head--dark" data-reveal="up">
                    <div class="section-head__content">
                        <span class="section-kicker">اتاق وضعیت</span>
                        <h2>گزارش‌های راهبردی و تحلیلی</h2>
                        <p class="section-summary">فضایی اختصاصی برای تحلیل‌های عمیق، بولتن‌های محرمانه و برآورد سناریوها ویژه اعضای تایید شده.</p>
                    </div>
                    <?php if ($user_level !== 'guest'): ?>
                    <div class="section-head__divider"></div>
                    <a href="#" class="section-link section-link--light">مشاهده همه گزارش‌ها</a>
                    <?php endif; ?>
                </div>

                <?php if ($user_level === 'guest'): ?>
                <!-- نمای کاربر مهمان: پیام عدم دسترسی -->
                <div class="situation-lock-card" data-reveal="up">
                    <div class="lock-card__icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                            <rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect>
                            <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                        </svg>
                    </div>
                    <div class="lock-card__content">
                        <h3>دسترسی به اتاق وضعیت محدود است</h3>
                        <p>محتوای این بخش شامل بولتن‌های آماری، گزارش‌های PDF و تحلیل‌های راهبردی است که تنها برای کاربران احراز هویت شده نمایش داده می‌شود.</p>
                        <div class="lock-card__benefits">
                            <div class="benefit-item">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                <span>دسترسی به بولتن‌های داده آماری</span>
                            </div>
                            <div class="benefit-item">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                <span>دریافت گزارش‌های PDF اختصاصی</span>
                            </div>
                            <div class="benefit-item">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                <span>تحلیل سناریوهای راهبردی</span>
                            </div>
                        </div>
                        <div class="lock-card__actions">
                            <a href="#" class="button button--primary">ثبت‌نام و احراز هویت</a>
                            <a href="#" class="button button--ghost-light">ورود به حساب کاربری</a>
                        </div>
                    </div>
                </div>
                <?php else: ?>
                <!-- نمای کاربر عضو: نمایش محتوا بر اساس سطح -->
                <div class="situation-grid">
                    <!-- گزارش ۱: متنی + PDF (قابل دسترسی برای همه اعضا) -->
                    <article class="situation-item panel-card--dark" data-reveal="up">
                        <div class="item-header">
                            <span class="chip chip--solid">بولتن داده</span>
                            <span class="item-date">۱۲ تیر ۱۴۰۵</span>
                        </div>
                        <div class="item-body">
                            <h3>پایش شاخص‌های حساس در بازارهای موازی</h3>
                            <p>تحلیل تغییرات معنادار در الگوهای رفتاری بازیگران کلیدی و پیش‌بینی گام‌های بعدی در حوزه اقتصاد سیاسی.</p>
                            
                            <!-- بخش فایل‌های ضمیمه -->
                            <div class="attachments-list">
                                <div class="attachment-file">
                                    <div class="file-info">
                                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                                        <span>گزارش آماری خرداد.pdf</span>
                                    </div>
                                    <a href="#" class="download-link" title="دانلود فایل">
                                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="7 10 12 15 17 10"></polyline><line x1="12" y1="15" x2="12" y2="3"></line></svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </article>

                    <!-- گزارش ۲: متنی + گالری (دسترسی سطح متوسط و عالی) -->
                    <article class="situation-item panel-card--dark <?php echo ($user_level === 'normal') ? 'item--locked' : ''; ?>" data-reveal="up">
                        <div class="item-header">
                            <span class="chip chip--solid">گزارش تصویری</span>
                            <span class="item-date">۱۰ تیر ۱۴۰۵</span>
                        </div>
                        <div class="item-body">
                            <h3>رصد میدانی تحرکات در مرزهای شرقی</h3>
                            <?php if ($user_level === 'normal'): ?>
                            <div class="item-upgrade-msg">
                                <p>این گزارش برای کاربران سطح متوسط و عالی در دسترس است.</p>
                                <a href="#" class="link-btn">ارتقای سطح دسترسی</a>
                            </div>
                            <?php else: ?>
                            <p>مستندات تصویری از تغییر آرایش نیروها و زیرساخت‌های جدید در مناطق مرزی.</p>
                            <div class="item-gallery">
                                <div class="gallery-thumb"><img src="https://images.unsplash.com/photo-1506466010722-395aa2bef877?auto=format&fit=crop&q=80&w=150&h=100" alt="تصویر مستند ۱"></div>
                                <div class="gallery-thumb"><img src="https://images.unsplash.com/photo-1444703686981-a3abbc4d4fe3?auto=format&fit=crop&q=80&w=150&h=100" alt="تصویر مستند ۲"></div>
                                <div class="gallery-thumb"><img src="https://images.unsplash.com/photo-1446776811953-b23d57bd21aa?auto=format&fit=crop&q=80&w=150&h=100" alt="تصویر مستند ۳"></div>
                                <div class="gallery-more">+۵</div>
                            </div>
                            <?php endif; ?>
                        </div>
                    </article>

                    <!-- گزارش ۳: گزارش راهبردی (فقط سطح عالی) -->
                    <article class="situation-item panel-card--dark <?php echo ($user_level !== 'high') ? 'item--locked' : ''; ?>" data-reveal="up">
                        <div class="item-header">
                            <span class="chip chip--solid chip--danger">فوق محرمانه</span>
                            <span class="item-date">۸ تیر ۱۴۰۵</span>
                        </div>
                        <div class="item-body">
                            <h3>برآورد سناریوهای تقابل در حوزه امنیت انرژی</h3>
                            <?php if ($user_level !== 'high'): ?>
                            <div class="item-upgrade-msg">
                                <p>مشاهده این گزارش نیازمند احراز هویت سطح عالی (ارسال مدارک) است.</p>
                                <a href="#" class="link-btn">ارسال مدارک و ارتقا</a>
                            </div>
                            <?php else: ?>
                            <p>تحلیل عمیق از نقاط آسیب‌پذیر در شبکه توزیع و سناریوهای پدافندی پیشنهادی.</p>
                            <div class="attachments-list">
                                <div class="attachment-file">
                                    <div class="file-info">
                                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                                        <span>سند راهبردی شماره ۴.pdf</span>
                                    </div>
                                    <span class="no-download" title="فقط مشاهده (دانلود غیرفعال)">
                                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="7 10 12 15 17 10"></polyline><line x1="12" y1="15" x2="12" y2="3"></line><line x1="3" y1="3" x2="21" y2="21"></line></svg>
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

        <section class="section-shell" id="multimedia">
            <div class="container">
                <!-- هدر بخش -->
                <div class="section-head mb-12">
                    <div class="section-head__content">
                        <div class="section-kicker">چندرسانه‌ای تحلیلی</div>
                        <h2 class="flex items-center gap-3">
                            <i class="ph-fill ph-play-circle" style="color: var(--accent);"></i>
                            رسانه<span style="color: var(--accent);">‌نگار</span>
                        </h2>
                        <p class="section-summary">ویدئوکست‌ها، مصاحبه‌های میدانی و تحلیل‌های پادکستی شنیداری نخبگان و کارشناسان روایت ایران</p>
                    </div>
                    <div class="section-head__divider"></div>
                    <a href="#" class="section-link">آرشیو چندرسانه‌ای</a>
                </div>

                <!-- چیدمان اصلی (گرید دو ستونه نامتقارن) -->
                <div class="grid grid-cols-12 gap-8 items-stretch">
                    
                    <!-- ستون راست: کارت ویدیوی ویژه (Main Featured Card) -->
                    <div class="col-span-12 lg:col-span-7 xl:col-span-8">
                        <article class="media-card-featured bg-navy rounded-3xl overflow-hidden h-full flex flex-col group cursor-pointer shadow-2xl shadow-navy/20" style="background-color: var(--surface-dark);">
                            <!-- بخش پلیر ویدیو (بالا) -->
                            <div class="relative aspect-video overflow-hidden">
                                <img src="https://images.unsplash.com/photo-1553034190-c965c85b37d7?auto=format&fit=crop&w=1200&q=80" alt="بندر گوادر" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                                
                                <!-- تگ مستند تصویری -->
                                <div class="absolute top-6 right-6 bg-navy/60 backdrop-blur-md px-4 py-2 rounded-full flex items-center gap-2 border border-white/10" style="background-color: rgba(13, 27, 45, 0.6);">
                                    <i class="ph ph-video-camera text-gold text-lg" style="color: var(--accent);"></i>
                                    <span class="text-white text-xs font-bold">مستند تصویری اختصاصی</span>
                                </div>

                                <!-- کنترلرهای ویدیو (Overlay) -->
                                <div class="absolute inset-0 bg-gradient-to-t from-navy/90 via-transparent to-transparent flex flex-col justify-end p-6" style="background-image: linear-gradient(to top, rgba(13, 27, 45, 0.9), transparent);">
                                    <!-- نوار پیشرفت -->
                                    <div class="w-full h-1 bg-white/20 rounded-full mb-4 overflow-hidden relative">
                                        <div class="video-progress-fill absolute top-0 right-0 h-full bg-gold" style="background-color: var(--accent);"></div>
                                    </div>
                                    
                                    <div class="flex items-center justify-between">
                                        <div class="flex items-center gap-4">
                                            <button class="w-10 h-10 rounded-full bg-gold text-navy flex items-center justify-center hover:bg-white transition-colors" style="background-color: var(--accent); color: var(--white);">
                                                <i class="ph-fill ph-play text-xl"></i>
                                            </button>
                                            <span class="text-white/80 text-xs font-inter num-inter">0:00 / 10:45</span>
                                        </div>
                                        <div class="flex items-center gap-3 text-white/80">
                                            <button class="hover:text-gold transition-colors"><i class="ph ph-speaker-high text-xl"></i></button>
                                            <button class="hover:text-gold transition-colors"><i class="ph ph-gear text-xl"></i></button>
                                            <button class="hover:text-gold transition-colors"><i class="ph ph-corners-out text-xl"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- بخش محتوا (پایین) -->
                            <div class="p-8 flex-grow flex flex-col justify-between">
                                <div>
                                    <div class="flex items-center justify-between mb-6">
                                        <span class="text-white/40 text-xs font-bold">راوی: دکتر محمد صدرا صدر</span>
                                        <span class="text-white/40 text-xs font-bold num-inter">۱۰ تیر ۱۴۰۵</span>
                                    </div>
                                    <h3 class="text-white text-2xl lg:text-3xl font-black mb-4 leading-tight group-hover:text-gold transition-colors" style="color: var(--white);">
                                        مستند تصویری: بندر گوادر؛ گلوگاه ژئوپلیتیک و رقابت‌های قدرت در دریای عمان
                                    </h3>
                                    <p class="text-white/60 text-base leading-relaxed line-clamp-2" style="color: rgba(255, 255, 255, 0.6);">
                                        بررسی ابعاد راهبردی توسعه بندر گوادر در پاکستان و تأثیر آن بر موازنه قدرت بین هند، چین و ایران در منطقه استراتژیک جنوب آسیا.
                                    </p>
                                </div>
                            </div>
                        </article>
                    </div>

                    <!-- ستون چپ: لیست پادکست‌ها (Sidebar List) -->
                    <div class="col-span-12 lg:col-span-5 xl:col-span-4 flex flex-col gap-4 h-full">
                        
                        <!-- پادکست ۱ -->
                        <article class="media-card-podcast bg-navy rounded-2xl p-3 flex gap-4 group cursor-pointer border border-white/5 hover:bg-navy/80 transition-all" style="background-color: var(--surface-dark);">
                            <div class="relative w-24 h-24 flex-shrink-0 rounded-xl overflow-hidden">
                                <img src="https://images.unsplash.com/photo-1590602847861-f357a9332bbc?auto=format&fit=crop&w=300&q=80" alt="پادکست ۱" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                                <!-- آیکون پلی مرکزی -->
                                <div class="absolute inset-0 flex items-center justify-center">
                                    <div class="w-10 h-10 rounded-full bg-white/20 backdrop-blur-md flex items-center justify-center text-white group-hover:bg-gold group-hover:text-navy transition-all duration-300" style="background-color: rgba(255, 255, 255, 0.2);">
                                        <i class="ph-fill ph-play text-lg"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-col justify-between py-1 flex-grow">
                                <div>
                                    <span class="text-gold/80 text-[10px] font-bold uppercase tracking-wider block mb-1" style="color: var(--accent-alt);">دکتر مسعود جهان آرا</span>
                                    <h4 class="text-white text-sm font-bold leading-snug line-clamp-2 group-hover:text-gold transition-colors" style="color: var(--white);">
                                        تحلیل سناریوهای اقتصادی منطقه در پساکرونا؛ فرصت‌ها و تهدیدهای جدید
                                    </h4>
                                </div>
                                <div class="flex items-center gap-3 text-white/40 text-[10px] font-bold">
                                    <div class="flex items-center gap-1">
                                        <i class="ph ph-headphones text-xs"></i>
                                        <span class="num-inter">۱۲۴۰ شنونده</span>
                                    </div>
                                    <span class="w-1 h-1 bg-white/20 rounded-full"></span>
                                    <div class="flex items-center gap-1">
                                        <i class="ph ph-clock text-xs"></i>
                                        <span class="num-inter">۲۴:۱۵</span>
                                    </div>
                                </div>
                            </div>
                        </article>

                        <!-- پادکست ۲ -->
                        <article class="media-card-podcast bg-navy rounded-2xl p-3 flex gap-4 group cursor-pointer border border-white/5 hover:bg-navy/80 transition-all" style="background-color: var(--surface-dark);">
                            <div class="relative w-24 h-24 flex-shrink-0 rounded-xl overflow-hidden">
                                <img src="https://images.unsplash.com/photo-1478737270239-2f02b77fc618?auto=format&fit=crop&w=300&q=80" alt="پادکست ۲" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                                <!-- آیکون پلی مرکزی -->
                                <div class="absolute inset-0 flex items-center justify-center">
                                    <div class="w-10 h-10 rounded-full bg-white/20 backdrop-blur-md flex items-center justify-center text-white group-hover:bg-gold group-hover:text-navy transition-all duration-300">
                                        <i class="ph-fill ph-play text-lg"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-col justify-between py-1 flex-grow">
                                <div>
                                    <span class="text-gold/80 text-[10px] font-bold uppercase tracking-wider block mb-1" style="color: var(--accent-alt);">کارگروه اقتصاد سیاسی</span>
                                    <h4 class="text-white text-sm font-bold leading-snug line-clamp-2 group-hover:text-gold transition-colors" style="color: var(--white);">
                                        دیپلماسی انرژی و نقش ایران در تأمین امنیت سوخت بازارهای جهانی
                                    </h4>
                                </div>
                                <div class="flex items-center gap-3 text-white/40 text-[10px] font-bold">
                                    <div class="flex items-center gap-1">
                                        <i class="ph ph-headphones text-xs"></i>
                                        <span class="num-inter">۸۵۰ شنونده</span>
                                    </div>
                                    <span class="w-1 h-1 bg-white/20 rounded-full"></span>
                                    <div class="flex items-center gap-1">
                                        <i class="ph ph-clock text-xs"></i>
                                        <span class="num-inter">۱۸:۴۰</span>
                                    </div>
                                </div>
                            </div>
                        </article>

                        <!-- پادکست ۳ -->
                        <article class="media-card-podcast bg-navy rounded-2xl p-3 flex gap-4 group cursor-pointer border border-white/5 hover:bg-navy/80 transition-all" style="background-color: var(--surface-dark);">
                            <div class="relative w-24 h-24 flex-shrink-0 rounded-xl overflow-hidden">
                                <img src="https://images.unsplash.com/photo-1559523161-0fc0d8b38a7a?auto=format&fit=crop&w=300&q=80" alt="پادکست ۳" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                                <!-- آیکون پلی مرکزی -->
                                <div class="absolute inset-0 flex items-center justify-center">
                                    <div class="w-10 h-10 rounded-full bg-white/20 backdrop-blur-md flex items-center justify-center text-white group-hover:bg-gold group-hover:text-navy transition-all duration-300">
                                        <i class="ph-fill ph-play text-lg"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-col justify-between py-1 flex-grow">
                                <div>
                                    <span class="text-gold/80 text-[10px] font-bold uppercase tracking-wider block mb-1" style="color: var(--accent-alt);">تحلیل گفتمان</span>
                                    <h4 class="text-white text-sm font-bold leading-snug line-clamp-2 group-hover:text-gold transition-colors" style="color: var(--white);">
                                        بررسی روایت‌های رسانه‌ای از تقابل قدرت‌های بزرگ در آسیای مرکزی
                                    </h4>
                                </div>
                                <div class="flex items-center gap-3 text-white/40 text-[10px] font-bold">
                                    <div class="flex items-center gap-1">
                                        <i class="ph ph-headphones text-xs"></i>
                                        <span class="num-inter">۲۱۰۰ شنونده</span>
                                    </div>
                                    <span class="w-1 h-1 bg-white/20 rounded-full"></span>
                                    <div class="flex items-center gap-1">
                                        <i class="ph ph-clock text-xs"></i>
                                        <span class="num-inter">۳۲:۱۰</span>
                                    </div>
                                </div>
                            </div>
                        </article>

                        <!-- پادکست ۴ -->
                        <article class="media-card-podcast bg-navy rounded-2xl p-3 flex gap-4 group cursor-pointer border border-white/5 hover:bg-navy/80 transition-all" style="background-color: var(--surface-dark);">
                            <div class="relative w-24 h-24 flex-shrink-0 rounded-xl overflow-hidden">
                                <img src="https://images.unsplash.com/photo-1508700115892-45ecd05ae2ad?auto=format&fit=crop&w=300&q=80" alt="پادکست ۴" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                                <!-- آیکون پلی مرکزی -->
                                <div class="absolute inset-0 flex items-center justify-center">
                                    <div class="w-10 h-10 rounded-full bg-white/20 backdrop-blur-md flex items-center justify-center text-white group-hover:bg-gold group-hover:text-navy transition-all duration-300">
                                        <i class="ph-fill ph-play text-lg"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-col justify-between py-1 flex-grow">
                                <div>
                                    <span class="text-gold/80 text-[10px] font-bold uppercase tracking-wider block mb-1" style="color: var(--accent-alt);">امنیت مرزی</span>
                                    <h4 class="text-white text-sm font-bold leading-snug line-clamp-2 group-hover:text-gold transition-colors" style="color: var(--white);">
                                        هوشمندسازی پایش مرزها؛ دستاوردها و چالش‌های تکنولوژیک در شرق کشور
                                    </h4>
                                </div>
                                <div class="flex items-center gap-3 text-white/40 text-[10px] font-bold">
                                    <div class="flex items-center gap-1">
                                        <i class="ph ph-headphones text-xs"></i>
                                        <span class="num-inter">۱۵۶۰ شنونده</span>
                                    </div>
                                    <span class="w-1 h-1 bg-white/20 rounded-full"></span>
                                    <div class="flex items-center gap-1">
                                        <i class="ph ph-clock text-xs"></i>
                                        <span class="num-inter">۴۵:۲۰</span>
                                    </div>
                                </div>
                            </div>
                        </article>

                        <!-- پادکست ۵ -->
                        <article class="media-card-podcast bg-navy rounded-2xl p-3 flex gap-4 group cursor-pointer border border-white/5 hover:bg-navy/80 transition-all" style="background-color: var(--surface-dark);">
                            <div class="relative w-24 h-24 flex-shrink-0 rounded-xl overflow-hidden">
                                <img src="https://images.unsplash.com/photo-1511671782779-c97d3d27a1d4?auto=format&fit=crop&w=300&q=80" alt="پادکست ۵" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                                <!-- آیکون پلی مرکزی -->
                                <div class="absolute inset-0 flex items-center justify-center">
                                    <div class="w-10 h-10 rounded-full bg-white/20 backdrop-blur-md flex items-center justify-center text-white group-hover:bg-gold group-hover:text-navy transition-all duration-300">
                                        <i class="ph-fill ph-play text-lg"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-col justify-between py-1 flex-grow">
                                <div>
                                    <span class="text-gold/80 text-[10px] font-bold uppercase tracking-wider block mb-1" style="color: var(--accent-alt);">فرهنگ و رسانه</span>
                                    <h4 class="text-white text-sm font-bold leading-snug line-clamp-2 group-hover:text-gold transition-colors" style="color: var(--white);">
                                        تأثیر پلتفرم‌های اجتماعی بر شکل‌گیری افکار عمومی در بزنگاه‌های سیاسی
                                    </h4>
                                </div>
                                <div class="flex items-center gap-3 text-white/40 text-[10px] font-bold">
                                    <div class="flex items-center gap-1">
                                        <i class="ph ph-headphones text-xs"></i>
                                        <span class="num-inter">۳۴۰۰ شنونده</span>
                                    </div>
                                    <span class="w-1 h-1 bg-white/20 rounded-full"></span>
                                    <div class="flex items-center gap-1">
                                        <i class="ph ph-clock text-xs"></i>
                                        <span class="num-inter">۵۸:۱۵</span>
                                    </div>
                                </div>
                            </div>
                        </article>

                    </div>

                </div>
            </div>
        </section>

        <section class="section-shell section-shell--warm" id="analysts-network">
            <div class="container">
                <div class="section-head" data-reveal="up">
                    <div class="section-head__content">
                        <span class="section-kicker">شبکه تحلیلگران</span>
                        <h2>مجمع نخبگان و پژوهشگران</h2>
                        <p class="section-summary">شبکه‌ای از متخصصان حوزه‌های مختلف با هدف تولید دانش، نقد سازنده و ارتقای سطح تحلیل در فضای عمومی.</p>
                    </div>
                    <div class="section-head__divider"></div>
                    <a href="#" class="section-link">پیوستن به شبکه</a>
                </div>

                <div class="analysts-grid">
                    <article class="analyst-spotlight panel-card" data-reveal="up">
                        <img src="../../assets/images/analysts-network_______.jpg" alt="تحلیلگر منتخب">
                        <div class="analyst-spotlight__body">
                            <span class="chip chip--soft">تحلیلگر منتخب هفته</span>
                            <h3>نرگس احمدی</h3>
                            <p>حوزه تخصص: سیاست منطقه‌ای، داده و افکار عمومی</p>
                            <div class="article-meta">
                                <span>۱۲ تحلیل تایید شده</span>
                                <span>امتیاز ۹۶</span>
                            </div>
                        </div>
                    </article>

                    <div class="ranking-table panel-card" data-reveal="left">
                        <div class="ranking-row">
                            <span>۱</span>
                            <strong>نرگس احمدی</strong>
                            <small>۹۶</small>
                        </div>
                        <div class="ranking-row">
                            <span>۲</span>
                            <strong>احسان طاهری</strong>
                            <small>۹۱</small>
                        </div>
                        <div class="ranking-row">
                            <span>۳</span>
                            <strong>الهام شریفی</strong>
                            <small>۸۸</small>
                        </div>
                        <div class="ranking-row">
                            <span>۴</span>
                            <strong>رضا کمالی</strong>
                            <small>۸۴</small>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer class="site-footer">
        <div class="container footer-grid">
            <div class="footer-brand">
                <strong>روایت ایران</strong>
                <p>
                    رسانه‌ای تحلیلی، زنده و داده‌محور برای هدایت هوشمند مخاطب؛ با پیوند میان خبر، تحلیل، پرونده و شبکه تحلیلگران.
                </p>
            </div>
            <div>
                <h3>سرویس‌ها</h3>
                <a href="#daily-narrative">روایت روز</a>
                <a href="#news-monitoring">رصد اخبار</a>
                <a href="#special-dossiers">پرونده ویژه</a>
                <a href="#media-observatory">دیدبان رسانه</a>
            </div>
            <div>
                <h3>دسترسی</h3>
                <a href="#">درباره ما</a>
                <a href="#">حریم خصوصی</a>
                <a href="#">منشور اخلاقی</a>
                <a href="#">تماس با ما</a>
            </div>
            <div>
                <h3>ارتباط</h3>
                <a href="mailto:info@revayatiran.ir">info@revayatiran.ir</a>
                <a href="tel:+982188888888">۰۲۱-۸۸۸۸۸۸۸۸</a>
                <p>تهران، خیابان انقلاب، ساختمان اندیشکده روایت</p>
            </div>
        </div>
    </footer>

    <script src="./assets/js/main.js"></script>
</body>
</html>
