<?php
// auth.php - صفحه ورود و ثبت نام یکپارچه
?>
<!DOCTYPE html>
<html lang="fa" dir="rtl" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ورود به شبکه تحلیلگران | روایت ایران</title>
    
    <!-- Phosphor Icons -->
    <script src="./assets/js/phosphor-icons.js"></script>

    <!-- Main Styles -->
    <link rel="stylesheet" href="./assets/css/style.css?v=4.1">
</head>
<body class="bg-gray-50 dark:bg-bg text-text min-h-screen font-sans antialiased overflow-x-hidden selection:bg-accent selection:text-white">

    <div class="min-h-screen grid grid-cols-1 lg:grid-cols-2">
        
        <!-- ==========================================
             بخش فرم (راست در حالت موبایل / چپ در دسکتاپ بر اساس LTR/RTL)
             چون dir="rtl" است، فرم به طور پیش‌فرض سمت راست قرار می‌گیرد و عکس سمت چپ.
             ========================================== -->
        <div class="flex flex-col justify-center px-6 sm:px-12 md:px-20 xl:px-32 bg-white dark:bg-[#1a1c23] relative z-10 shadow-2xl">
            
            <!-- بازگشت به خانه (برای موبایل و دسکتاپ) -->
            <a href="index.php" class="absolute top-6 right-6 lg:top-10 lg:right-10 flex items-center gap-2 text-sm font-medium text-gray-500 hover:text-primary transition-colors">
                <i class="ph-bold ph-arrow-right"></i> بازگشت به سایت
            </a>
            
            <div class="w-full max-w-md mx-auto pt-16 lg:pt-0">
                <!-- لوگو در حالت موبایل -->
                <div class="lg:hidden flex justify-center mb-8">
                    <img src="./assets/images/logo-revayat.webp" alt="لوگوی سایت" class="h-16 w-auto object-contain drop-shadow-md">
                </div>

                <div class="mb-10 text-center lg:text-right">
                    <h1 class="text-3xl font-extrabold text-gray-900 dark:text-white mb-3">خوش آمدید!</h1>
                    <p class="text-sm text-gray-500 dark:text-gray-400 font-medium leading-relaxed">
                        برای دسترسی به تحلیل‌های ویژه و مشارکت در شبکه تحلیلگران، وارد حساب کاربری خود شوید.
                    </p>
                </div>

                <!-- تب‌های سوئیچ بین ورود و ثبت نام -->
                <div class="relative flex p-1 mb-8 bg-gray-100 dark:bg-black/20 rounded-xl border border-gray-200 dark:border-white/5">
                    <div id="tab-indicator" class="absolute top-1 bottom-1 right-1 w-[calc(50%-4px)] bg-white dark:bg-white/10 rounded-lg shadow-sm border border-gray-200/50 dark:border-white/5 transition-all duration-300 ease-out z-0"></div>
                    <button type="button" class="flex-1 py-3 text-sm font-bold text-gray-900 dark:text-white text-center z-10 transition-colors" id="btn-login" onclick="switchTab('login')">ورود</button>
                    <button type="button" class="flex-1 py-3 text-sm font-bold text-gray-500 dark:text-gray-400 text-center z-10 transition-colors hover:text-gray-900 dark:hover:text-white" id="btn-register" onclick="switchTab('register')">ثبت‌نام</button>
                </div>

                <!-- فرم ورود -->
                <form id="form-login" class="space-y-5 transition-all duration-300">
                    <div class="space-y-1">
                        <label for="login-phone" class="block text-sm font-bold text-gray-700 dark:text-gray-300">شماره موبایل یا ایمیل</label>
                        <div class="relative group">
                            <i class="ph ph-user absolute right-4 top-1/2 -translate-y-1/2 text-xl text-gray-400 group-focus-within:text-primary transition-colors"></i>
                            <input type="text" id="login-phone" class="w-full h-14 bg-gray-50 dark:bg-black/30 border border-gray-200 dark:border-white/10 rounded-xl px-12 text-sm text-gray-900 dark:text-white focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary transition-all placeholder:text-gray-400" placeholder="0912... یا email@domain.com" dir="ltr">
                        </div>
                    </div>
                    
                    <div class="space-y-1">
                        <div class="flex items-center justify-between">
                            <label for="login-password" class="block text-sm font-bold text-gray-700 dark:text-gray-300">رمز عبور</label>
                            <a href="#" class="text-xs font-bold text-primary hover:text-primary-dark transition-colors">رمز عبور را فراموش کردید؟</a>
                        </div>
                        <div class="relative group">
                            <i class="ph ph-lock-key absolute right-4 top-1/2 -translate-y-1/2 text-xl text-gray-400 group-focus-within:text-primary transition-colors"></i>
                            <input type="password" id="login-password" class="w-full h-14 bg-gray-50 dark:bg-black/30 border border-gray-200 dark:border-white/10 rounded-xl px-12 text-sm text-gray-900 dark:text-white focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary transition-all placeholder:text-gray-400" placeholder="••••••••" dir="ltr">
                            <button type="button" class="absolute left-4 top-1/2 -translate-y-1/2 text-gray-400 hover:text-gray-600 dark:hover:text-gray-200 transition-colors" onclick="togglePassword('login-password', this)">
                                <i class="ph ph-eye text-xl"></i>
                            </button>
                        </div>
                    </div>

                    <button type="submit" class="w-full h-14 bg-primary text-white font-extrabold rounded-xl shadow-lg shadow-primary/30 hover:bg-primary-dark hover:-translate-y-0.5 transition-all flex items-center justify-center gap-2">
                        ورود به حساب <i class="ph-bold ph-sign-in"></i>
                    </button>
                </form>

                <!-- فرم ثبت‌نام -->
                <form id="form-register" class="space-y-5 hidden transition-all duration-300">
                    <div class="space-y-1">
                        <label for="reg-name" class="block text-sm font-bold text-gray-700 dark:text-gray-300">نام و نام خانوادگی</label>
                        <div class="relative group">
                            <i class="ph ph-identification-card absolute right-4 top-1/2 -translate-y-1/2 text-xl text-gray-400 group-focus-within:text-primary transition-colors"></i>
                            <input type="text" id="reg-name" class="w-full h-14 bg-gray-50 dark:bg-black/30 border border-gray-200 dark:border-white/10 rounded-xl px-12 text-sm text-gray-900 dark:text-white focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary transition-all placeholder:text-gray-400" placeholder="امیرحسین رضایی">
                        </div>
                    </div>

                    <div class="space-y-1">
                        <label for="reg-phone" class="block text-sm font-bold text-gray-700 dark:text-gray-300">شماره موبایل</label>
                        <div class="relative group">
                            <i class="ph ph-device-mobile absolute right-4 top-1/2 -translate-y-1/2 text-xl text-gray-400 group-focus-within:text-primary transition-colors"></i>
                            <input type="tel" id="reg-phone" class="w-full h-14 bg-gray-50 dark:bg-black/30 border border-gray-200 dark:border-white/10 rounded-xl px-12 text-sm text-gray-900 dark:text-white focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary transition-all placeholder:text-gray-400" placeholder="09123456789" dir="ltr">
                        </div>
                    </div>
                    
                    <div class="space-y-1">
                        <label for="reg-password" class="block text-sm font-bold text-gray-700 dark:text-gray-300">رمز عبور</label>
                        <div class="relative group">
                            <i class="ph ph-lock-key absolute right-4 top-1/2 -translate-y-1/2 text-xl text-gray-400 group-focus-within:text-primary transition-colors"></i>
                            <input type="password" id="reg-password" class="w-full h-14 bg-gray-50 dark:bg-black/30 border border-gray-200 dark:border-white/10 rounded-xl px-12 text-sm text-gray-900 dark:text-white focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary transition-all placeholder:text-gray-400" placeholder="••••••••" dir="ltr">
                            <button type="button" class="absolute left-4 top-1/2 -translate-y-1/2 text-gray-400 hover:text-gray-600 dark:hover:text-gray-200 transition-colors" onclick="togglePassword('reg-password', this)">
                                <i class="ph ph-eye text-xl"></i>
                            </button>
                        </div>
                    </div>

                    <button type="submit" class="w-full h-14 bg-gray-900 dark:bg-white text-white dark:text-gray-900 font-extrabold rounded-xl shadow-lg hover:bg-black dark:hover:bg-gray-100 hover:-translate-y-0.5 transition-all flex items-center justify-center gap-2">
                        ایجاد حساب کاربری <i class="ph-bold ph-user-plus"></i>
                    </button>
                </form>

                <!-- جداکننده -->
                <div class="relative flex items-center py-8">
                    <div class="flex-grow border-t border-gray-200 dark:border-white/10"></div>
                    <span class="flex-shrink-0 mx-4 text-xs font-medium text-gray-400 dark:text-gray-500">یا ورود با</span>
                    <div class="flex-grow border-t border-gray-200 dark:border-white/10"></div>
                </div>

                <!-- ورود با گوگل (Social Login) -->
                <button type="button" class="w-full h-14 bg-white dark:bg-black/20 border border-gray-200 dark:border-white/10 text-gray-700 dark:text-gray-300 font-bold rounded-xl hover:bg-gray-50 dark:hover:bg-white/5 transition-all flex items-center justify-center gap-3">
                    <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M22.56 12.25C22.56 11.47 22.49 10.72 22.36 10H12V14.26H17.92C17.67 15.63 16.86 16.79 15.7 17.57V20.34H19.26C21.34 18.42 22.56 15.6 22.56 12.25Z" fill="#4285F4"/>
                        <path d="M12 23C14.97 23 17.46 22.02 19.26 20.34L15.7 17.57C14.73 18.22 13.47 18.63 12 18.63C9.16 18.63 6.75 16.71 5.88 14.12H2.21V16.97C4.01 20.55 7.69 23 12 23Z" fill="#34A853"/>
                        <path d="M5.88 14.12C5.66 13.47 5.53 12.76 5.53 12C5.53 11.24 5.66 10.53 5.88 9.88V7.03H2.21C1.47 8.5 1 10.2 1 12C1 13.8 1.47 15.5 2.21 16.97L5.88 14.12Z" fill="#FBBC05"/>
                        <path d="M12 5.38C13.62 5.38 15.06 5.94 16.2 7.02L19.34 3.88C17.45 2.12 14.96 1 12 1C7.69 1 4.01 3.45 2.21 7.03L5.88 9.88C6.75 7.29 9.16 5.38 12 5.38Z" fill="#EA4335"/>
                    </svg>
                    ورود با گوگل
                </button>

            </div>
        </div>

        <!-- ==========================================
             بخش پس‌زمینه و تصویر (چپ در دسکتاپ بر اساس LTR/RTL)
             ========================================== -->
        <div class="hidden lg:flex flex-col justify-between relative overflow-hidden bg-[#0D1626]">
            
            <!-- تصویر پس‌زمینه -->
            <img src="./assets/images/posts images/2279480_168.jpg" alt="روایت ایران" class="absolute inset-0 w-full h-full object-cover opacity-40 mix-blend-overlay">
            
            <!-- گرادیانت تیره کننده روی عکس (Vignette) -->
            <div class="absolute inset-0 bg-gradient-to-t from-[#0D1626] via-[#0D1626]/60 to-[#0D1626]/20"></div>
            
            <!-- افکت‌های نوری (Glow Orbs) -->
            <div class="absolute top-1/4 -right-20 w-96 h-96 bg-primary/40 rounded-full blur-[120px] mix-blend-screen pointer-events-none"></div>
            <div class="absolute bottom-1/4 -left-20 w-80 h-80 bg-blue-500/30 rounded-full blur-[100px] mix-blend-screen pointer-events-none"></div>

            <div class="relative z-10 p-16 flex-1 flex flex-col">
                <!-- لوگو -->
                <div>
                    <a href="index.php" class="inline-block hover:scale-105 transition-transform">
                        <img src="./assets/images/logo-revayat.webp" alt="لوگوی سایت" class="h-24 w-auto object-contain drop-shadow-[0_4px_12px_rgba(0,0,0,0.5)]">
                    </a>
                </div>

                <!-- متن‌های انگیزشی میانی -->
                <div class="mt-auto mb-16 max-w-lg">
                    <h2 class="text-4xl lg:text-5xl font-black text-white leading-tight mb-6">
                        روایتِ دقیق،<br>تحلیلِ عمیق.
                    </h2>
                    <p class="text-lg text-white/70 font-medium leading-relaxed border-r-4 border-primary pr-4">
                        با عضویت در پلتفرم روایت ایران، به جامع‌ترین پایگاه رصد اخبار، پرونده‌های ویژه و تحلیل‌های کلان استراتژیک دسترسی پیدا کنید و با برترین تحلیلگران در ارتباط باشید.
                    </p>
                </div>

                <!-- مینی-ویجت پایینی -->
                <div class="bg-white/10 backdrop-blur-md border border-white/20 rounded-2xl p-6 flex items-center gap-5 w-fit">
                    <div class="flex -space-x-3 space-x-reverse">
                        <img src="assets/images/user Avatar/8fc8b30f66b4489aaeb92b686a386cdc.png" class="w-12 h-12 rounded-full border-2 border-[#0D1626] object-cover">
                        <img src="assets/images/user Avatar/a9d7f2cbb32944f1bcd60800dda1d236.png" class="w-12 h-12 rounded-full border-2 border-[#0D1626] object-cover">
                        <div class="w-12 h-12 rounded-full border-2 border-[#0D1626] bg-primary flex items-center justify-center text-white text-xs font-bold shrink-0">
                            +۱۲K
                        </div>
                    </div>
                    <div>
                        <strong class="block text-white font-bold text-sm">جامعه نخبگانی ایران</strong>
                        <span class="text-xs text-white/60">بیش از ۱۲,۰۰۰ عضو فعال در شبکه</span>
                    </div>
                </div>
            </div>
            
        </div>

    </div>

    <script>
        // Tab Switch Logic
        function switchTab(tab) {
            const loginForm = document.getElementById('form-login');
            const registerForm = document.getElementById('form-register');
            const btnLogin = document.getElementById('btn-login');
            const btnRegister = document.getElementById('btn-register');
            const indicator = document.getElementById('tab-indicator');

            if (tab === 'login') {
                // Hide register instantly to prevent height jump
                registerForm.classList.add('hidden');
                registerForm.style.opacity = '0';
                registerForm.style.transform = 'translateY(10px)';
                
                // Show login
                loginForm.classList.remove('hidden');
                // Use a tiny timeout to allow display:block to apply before animating opacity
                setTimeout(() => {
                    loginForm.style.opacity = '1';
                    loginForm.style.transform = 'translateY(0)';
                }, 10);

                indicator.style.right = '4px'; // ~ right-1
                btnLogin.classList.replace('text-gray-500', 'text-gray-900');
                btnLogin.classList.replace('dark:text-gray-400', 'dark:text-white');
                btnRegister.classList.replace('text-gray-900', 'text-gray-500');
                btnRegister.classList.replace('dark:text-white', 'dark:text-gray-400');
            } else {
                // Hide login instantly
                loginForm.classList.add('hidden');
                loginForm.style.opacity = '0';
                loginForm.style.transform = 'translateY(10px)';

                // Show register
                registerForm.classList.remove('hidden');
                setTimeout(() => {
                    registerForm.style.opacity = '1';
                    registerForm.style.transform = 'translateY(0)';
                }, 10);

                indicator.style.right = 'calc(50% + 4px)'; // Move to left tab in RTL
                btnRegister.classList.replace('text-gray-500', 'text-gray-900');
                btnRegister.classList.replace('dark:text-gray-400', 'dark:text-white');
                btnLogin.classList.replace('text-gray-900', 'text-gray-500');
                btnLogin.classList.replace('dark:text-white', 'dark:text-gray-400');
            }
        }

        // Initialize state for animations and handle URL param
        document.addEventListener('DOMContentLoaded', () => {
            const urlParams = new URLSearchParams(window.location.search);
            const tab = urlParams.get('tab');
            
            if (tab === 'register') {
                switchTab('register');
            } else {
                switchTab('login'); // default
            }
        });

        // Toggle Password Logic
        function togglePassword(inputId, btnElement) {
            const input = document.getElementById(inputId);
            const icon = btnElement.querySelector('i');
            
            if (input.type === 'password') {
                input.type = 'text';
                icon.classList.replace('ph-eye', 'ph-eye-slash');
            } else {
                input.type = 'password';
                icon.classList.replace('ph-eye-slash', 'ph-eye');
            }
        }
    </script>
</body>
</html>
