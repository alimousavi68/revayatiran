document.addEventListener("DOMContentLoaded", () => {
    const root = document.documentElement;
    const header = document.getElementById("site-header");
    const progressBar = document.getElementById("page-progress-bar");
    const themeToggle = document.getElementById("theme-toggle");
    const storedTheme = localStorage.getItem("revayat-theme");
    const menuToggle = document.getElementById("menu-toggle");
    const mobileMenu = document.getElementById("mobile-menu");
    const mobileClose = document.getElementById("mobile-close");
    const mediaRail = document.getElementById("media-rail");
    const mediaPrev = document.getElementById("media-prev");
    const mediaNext = document.getElementById("media-next");
    const topBarTime = document.getElementById("top-bar-time");

    const syncThemeToggle = (theme) => {
        if (!themeToggle) {
            return;
        }

        const nextTheme = theme === "dark" ? "روشن" : "تیره";
        themeToggle.setAttribute("aria-label", `تغییر حالت رنگی به ${nextTheme}`);
        themeToggle.setAttribute("title", `تغییر حالت رنگی به ${nextTheme}`);
    };

    const applyTheme = (theme) => {
        root.setAttribute("data-theme", theme);
        localStorage.setItem("revayat-theme", theme);
        syncThemeToggle(theme);
    };

    applyTheme(storedTheme || "light");

    if (themeToggle) {
        themeToggle.addEventListener("click", () => {
            const nextTheme = root.getAttribute("data-theme") === "dark" ? "light" : "dark";
            applyTheme(nextTheme);
        });
    }

    // ═══════════════════════════════════════════════════════════
    // PALETTES & HEADER BACKDROP SYSTEM (Independent Controls)
    // ═══════════════════════════════════════════════════════════
    const storedPalette = localStorage.getItem("revayat-palette") || "bbc-red";
    const storedBackdrop = localStorage.getItem("revayat-header-backdrop") || "gainsboro";

    const applyPalette = (paletteName) => {
        root.setAttribute("data-palette", paletteName);
        localStorage.setItem("revayat-palette", paletteName);
        
        document.querySelectorAll("[data-palette-btn]").forEach(btn => {
            const isActive = btn.getAttribute("data-palette-btn") === paletteName;
            btn.classList.toggle("is-active", isActive);
            btn.setAttribute("aria-pressed", isActive ? "true" : "false");
        });
    };

    const applyHeaderBackdrop = (backdropName) => {
        root.setAttribute("data-header-backdrop", backdropName);
        localStorage.setItem("revayat-header-backdrop", backdropName);

        document.querySelectorAll("[data-backdrop-btn]").forEach(btn => {
            const isActive = btn.getAttribute("data-backdrop-btn") === backdropName;
            btn.classList.toggle("is-active", isActive);
            btn.setAttribute("aria-pressed", isActive ? "true" : "false");
        });
    };

    window.setSitePalette = applyPalette;
    window.getSitePalette = () => root.getAttribute("data-palette") || "bbc-red";

    window.setHeaderBackdrop = applyHeaderBackdrop;
    window.getHeaderBackdrop = () => root.getAttribute("data-header-backdrop") || "gainsboro";

    applyPalette(storedPalette);
    applyHeaderBackdrop(storedBackdrop);

    // Floating Customization Switcher FAB (Positioned above Social FAB)
    const initPaletteSwitcher = () => {
        if (document.getElementById("palette-fab")) return;

        const palettes = [
            { id: "bbc-red", name: "قرمز بی‌بی‌سی", color: "#B80000" },
            { id: "navy", name: "لاجوردی", color: "#1e5f74" },
            { id: "petro", name: "آبی نفتی", color: "#0c4a6e" },
            { id: "rust", name: "آجری گرم", color: "#c2410c" },
            { id: "slate", name: "سربی", color: "#334155" },
        ];

        const backdrops = [
            { id: "gainsboro", name: "گینزبورو", color: "#dcdcdc" },
            { id: "transparent", name: "هم‌رنگ بوم", color: "#ffffff", border: true },
            { id: "slate", name: "نقره‌ای", color: "#e2e8f0" },
            { id: "sand", name: "ماسه گرم", color: "#eae5dc" },
            { id: "smoke", name: "دودی", color: "#cfd6df" },
            { id: "adaptive", name: "هماهنگ پالت", gradient: "linear-gradient(135deg, #dcdcdc 35%, var(--primary) 100%)" },
        ];

        const container = document.createElement("aside");
        container.id = "palette-fab";
        container.className = "palette-fab";
        container.setAttribute("dir", "rtl");
        container.innerHTML = `
            <button type="button" class="palette-fab__trigger" id="palette-fab-trigger" aria-label="تنظیمات پالت و پس‌زمینه" title="شخصی‌سازی رنگ و پس‌زمینه">
                <i class="ph ph-paint-brush-broad"></i>
            </button>
            <div class="palette-fab__panel" id="palette-fab-panel" role="dialog" aria-label="تنظیمات رنگ و پس‌زمینه">
                <div class="palette-fab__header">
                    <span class="palette-fab__title">
                        <i class="ph ph-swatches text-primary text-sm"></i>
                        شخصی‌سازی رنگ و لایه‌ها
                    </span>
                    <button type="button" class="palette-fab__close" id="palette-fab-close" aria-label="بستن">
                        <i class="ph ph-x"></i>
                    </button>
                </div>
                
                <!-- Section 1: Main Theme Palette -->
                <div class="palette-fab__section">
                    <span class="palette-fab__subtitle">
                        <i class="ph ph-palette"></i>
                        رنگ قالب اصلی سایت
                    </span>
                    <div class="palette-fab__grid">
                        ${palettes.map(p => `
                            <button type="button" 
                                    data-palette-btn="${p.id}" 
                                    class="palette-fab__btn ${storedPalette === p.id ? 'is-active' : ''}" 
                                    title="${p.name}">
                                <span class="palette-fab__swatch" style="background-color: ${p.color};"></span>
                                <span class="palette-fab__label">${p.name}</span>
                            </button>
                        `).join('')}
                    </div>
                </div>

                <div class="palette-fab__divider"></div>

                <!-- Section 2: Header Backdrop Layer -->
                <div class="palette-fab__section">
                    <span class="palette-fab__subtitle">
                        <i class="ph ph-paint-bucket"></i>
                        پس‌زمینه لایه بالای هدر
                    </span>
                    <div class="palette-fab__grid">
                        ${backdrops.map(b => `
                            <button type="button" 
                                    data-backdrop-btn="${b.id}" 
                                    class="palette-fab__btn ${storedBackdrop === b.id ? 'is-active' : ''}" 
                                    title="${b.name}">
                                <span class="palette-fab__swatch ${b.border ? 'palette-fab__swatch--bordered' : ''}" 
                                      style="${b.gradient ? `background: ${b.gradient};` : `background-color: ${b.color};`}"></span>
                                <span class="palette-fab__label">${b.name}</span>
                            </button>
                        `).join('')}
                    </div>
                </div>
            </div>
        `;

        document.body.appendChild(container);

        const trigger = container.querySelector("#palette-fab-trigger");
        const closeBtn = container.querySelector("#palette-fab-close");

        const togglePanel = (open) => {
            const shouldOpen = open !== undefined ? open : !container.classList.contains("is-open");
            container.classList.toggle("is-open", shouldOpen);
        };

        if (trigger) {
            trigger.addEventListener("click", (e) => {
                e.stopPropagation();
                togglePanel();
            });
        }

        if (closeBtn) {
            closeBtn.addEventListener("click", (e) => {
                e.stopPropagation();
                togglePanel(false);
            });
        }

        container.addEventListener("click", (e) => {
            const paletteBtn = e.target.closest("[data-palette-btn]");
            if (paletteBtn) {
                const targetId = paletteBtn.getAttribute("data-palette-btn");
                applyPalette(targetId);
                return;
            }

            const backdropBtn = e.target.closest("[data-backdrop-btn]");
            if (backdropBtn) {
                const targetId = backdropBtn.getAttribute("data-backdrop-btn");
                applyHeaderBackdrop(targetId);
                return;
            }
        });

        // Close on outside click
        document.addEventListener("click", (e) => {
            if (!container.contains(e.target)) {
                togglePanel(false);
            }
        });
    };

    initPaletteSwitcher();

    const toggleHeaderState = () => {
        if (progressBar) {
            const scrollableHeight = document.documentElement.scrollHeight - window.innerHeight;
            const progress = scrollableHeight > 0 ? (window.scrollY / scrollableHeight) * 100 : 0;
            progressBar.style.width = `${Math.min(progress, 100)}%`;
        }
        // Add scrolled class for glassmorphism effect
        if (header) {
            header.classList.toggle("is-scrolled", window.scrollY > 20);
        }
    };

    toggleHeaderState();
    window.addEventListener("scroll", toggleHeaderState, { passive: true });

    // Top bar live clock
    const toPersianDigits = (str) => {
        const persianDigits = ["۰", "۱", "۲", "۳", "۴", "۵", "۶", "۷", "۸", "۹"];
        return String(str).replace(/[0-9]/g, (w) => persianDigits[parseInt(w, 10)]);
    };

    const updateClock = () => {
        if (!topBarTime) return;
        const now = new Date();
        const h = String(now.getHours()).padStart(2, "0");
        const m = String(now.getMinutes()).padStart(2, "0");
        topBarTime.textContent = toPersianDigits(`${h}:${m}`);
    };
    updateClock();
    setInterval(updateClock, 30000);

    if (menuToggle && mobileMenu) {
        const setMenuState = (isOpen) => {
            mobileMenu.classList.toggle("is-open", isOpen);
            menuToggle.setAttribute("aria-expanded", String(isOpen));
            mobileMenu.setAttribute("aria-hidden", String(!isOpen));
            document.body.style.overflow = isOpen ? "hidden" : "";
        };

        menuToggle.addEventListener("click", () => {
            const isOpen = menuToggle.getAttribute("aria-expanded") === "true";
            setMenuState(!isOpen);
        });

        // Close via backdrop click
        mobileMenu.addEventListener("click", (event) => {
            if (event.target === mobileMenu) {
                setMenuState(false);
            }
        });

        // Close via X button inside panel
        if (mobileClose) {
            mobileClose.addEventListener("click", () => setMenuState(false));
        }

        // Close when nav link is clicked
        mobileMenu.querySelectorAll("a").forEach(link => {
            link.addEventListener("click", () => setMenuState(false));
        });

        // Close on Escape
        document.addEventListener("keydown", (e) => {
            if (e.key === "Escape" && menuToggle.getAttribute("aria-expanded") === "true") {
                setMenuState(false);
            }
        });
    }

    const revealItems = document.querySelectorAll("[data-reveal]");

    if ("IntersectionObserver" in window && revealItems.length) {
        const revealObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    entry.target.classList.add("is-visible");
                    observer.unobserve(entry.target);
                }
            });
        }, {
            threshold: 0.14,
            rootMargin: "0px 0px -40px 0px"
        });

        revealItems.forEach((item) => revealObserver.observe(item));
    } else {
        revealItems.forEach((item) => item.classList.add("is-visible"));
    }

    const counters = document.querySelectorAll("[data-count]");

    if ("IntersectionObserver" in window && counters.length) {
        const counterObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach((entry) => {
                if (!entry.isIntersecting) {
                    return;
                }

                const counter = entry.target;
                const targetValue = Number(counter.getAttribute("data-count")) || 0;
                const duration = 1100;
                const startTime = performance.now();

                const tick = (now) => {
                    const progress = Math.min((now - startTime) / duration, 1);
                    const eased = 1 - Math.pow(1 - progress, 3);
                    counter.textContent = Math.floor(eased * targetValue).toLocaleString("fa-IR");

                    if (progress < 1) {
                        requestAnimationFrame(tick);
                    } else {
                        counter.textContent = targetValue.toLocaleString("fa-IR");
                    }
                };

                requestAnimationFrame(tick);
                observer.unobserve(counter);
            });
        }, {
            threshold: 0.5
        });

        counters.forEach((counter) => counterObserver.observe(counter));
    } else {
        counters.forEach((counter) => {
            const value = Number(counter.getAttribute("data-count")) || 0;
            counter.textContent = value.toLocaleString("fa-IR");
        });
    }

    const tabButtons = document.querySelectorAll("[data-news-tab]");
    const tabPanels = document.querySelectorAll("[data-news-panel]");

    if (tabButtons.length && tabPanels.length) {
        tabButtons.forEach((button) => {
            button.addEventListener("click", () => {
                const target = button.getAttribute("data-news-tab");

                tabButtons.forEach((item) => {
                    const isActive = item === button;
                    item.classList.toggle("is-active", isActive);
                    item.setAttribute("aria-selected", String(isActive));
                });

                tabPanels.forEach((panel) => {
                    const shouldShow = panel.getAttribute("data-news-panel") === target;
                    panel.hidden = !shouldShow;

                    if (shouldShow) {
                        requestAnimationFrame(() => {
                            panel.querySelectorAll("[data-reveal]").forEach((item) => item.classList.add("is-visible"));
                        });
                    }
                });
            });
        });
    }

    if (mediaRail && mediaPrev && mediaNext) {
        const step = () => {
            const firstCard = mediaRail.querySelector(".media-card");
            return firstCard ? firstCard.getBoundingClientRect().width + 18 : 320;
        };

        mediaPrev.setAttribute("aria-label", "اسلاید قبلی");
        mediaNext.setAttribute("aria-label", "اسلاید بعدی");

        mediaPrev.addEventListener("click", () => {
            mediaRail.scrollBy({ left: step(), behavior: "smooth" });
        });

        mediaNext.addEventListener("click", () => {
            mediaRail.scrollBy({ left: -step(), behavior: "smooth" });
        });
    }

    // Search Overlay Logic
    const searchTrigger = document.getElementById('search-trigger');
    const searchClose = document.getElementById('search-close');
    const searchOverlay = document.getElementById('search-overlay');
    const searchInput = document.getElementById('search-input');

    const openSearch = () => {
        if (!searchOverlay) return;
        searchOverlay.classList.add('is-active');
        document.body.style.overflow = 'hidden';
        if (searchInput) setTimeout(() => searchInput.focus(), 120);
    };

    const closeSearch = () => {
        if (!searchOverlay) return;
        searchOverlay.classList.remove('is-active');
        document.body.style.overflow = '';
    };

    if (searchTrigger) searchTrigger.addEventListener('click', openSearch);
    if (searchClose) searchClose.addEventListener('click', closeSearch);

    if (searchOverlay) {
        searchOverlay.addEventListener('click', (e) => {
            if (e.target === searchOverlay) closeSearch();
        });
    }

    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape') closeSearch();
    });

    // Leaderboard Tabs logic
    const leaderboardTabs = document.querySelectorAll('.leaderboard-tabs .tab-item');
    if (leaderboardTabs.length) {
        leaderboardTabs.forEach(tab => {
            tab.addEventListener('click', () => {
                leaderboardTabs.forEach(t => t.classList.remove('active'));
                tab.classList.add('active');
                // In a real app, you would filter or fetch data here
            });
        });
    }

    // Back to Top functionality
    const backToTopBtn = document.getElementById("back-to-top");
    const progressCircle = document.querySelector(".back-to-top__circle-progress");
    const circleCircumference = 132; // 2 * PI * 21

    if (backToTopBtn && progressCircle) {
        const updateScrollProgress = () => {
            const scrollHeight = document.documentElement.scrollHeight - window.innerHeight;
            const scrolled = window.scrollY;

            // Show or hide button
            if (scrolled > 300) {
                backToTopBtn.classList.add("is-visible");
            } else {
                backToTopBtn.classList.remove("is-visible");
            }

            // Calculate progress and update circle path length
            const progress = scrollHeight > 0 ? scrolled / scrollHeight : 0;
            const offset = circleCircumference - (progress * circleCircumference);
            progressCircle.style.strokeDashoffset = Math.max(0, Math.min(offset, circleCircumference));
        };

        // Scroll to top smoothly
        backToTopBtn.addEventListener("click", () => {
            window.scrollTo({
                top: 0,
                behavior: "smooth"
            });
        });

        // Initialize and bind events
        updateScrollProgress();
        window.addEventListener("scroll", updateScrollProgress, { passive: true });
    }

    // ─── STORY SLIDE REEL & MODAL VIEWER LOGIC ───────────────
    const storyRail = document.getElementById("story-rail");
    const storyRailPrev = document.getElementById("story-rail-prev");
    const storyRailNext = document.getElementById("story-rail-next");
    const storyCards = document.querySelectorAll(".story-card");
    const storyModal = document.getElementById("story-modal-viewer");
    const storyModalBackdrop = document.getElementById("story-modal-backdrop");
    const storyModalClose = document.getElementById("story-modal-close");
    const storyModalAvatar = document.getElementById("story-modal-avatar");
    const storyModalAuthor = document.getElementById("story-modal-author");
    const storyModalCategory = document.getElementById("story-modal-category");
    const storyModalImg = document.getElementById("story-modal-img");
    const storyModalTitle = document.getElementById("story-modal-title");
    const storyModalDuration = document.getElementById("story-modal-duration");
    const storyModalPrev = document.getElementById("story-modal-prev");
    const storyModalNext = document.getElementById("story-modal-next");
    const storyProgressBar = document.getElementById("story-progress-bar");
    const storyPlayOverlay = document.getElementById("story-modal-play-overlay");
    const storyPlayIcon = document.getElementById("story-modal-play-icon");

    let currentStoryIndex = 0;
    let storyTimer = null;
    let storyProgressInterval = null;
    const STORY_DURATION_MS = 6000; // 6 seconds per story
    let isStoryPlaying = false;

    // Story Rail Scroll buttons & Auto-play Carousel
    let autoPlayInterval = null;

    if (storyRail) {
        const startAutoPlay = () => {
            stopAutoPlay();
            autoPlayInterval = setInterval(() => {
                const cardWidth = 260;
                const currentScroll = Math.abs(storyRail.scrollLeft);
                const maxScroll = storyRail.scrollWidth - storyRail.clientWidth;

                if (currentScroll >= maxScroll - 20) {
                    storyRail.scrollTo({ left: 0, behavior: "smooth" });
                } else {
                    storyRail.scrollBy({ left: -cardWidth, behavior: "smooth" });
                }
            }, 3000);
        };

        const stopAutoPlay = () => {
            if (autoPlayInterval) clearInterval(autoPlayInterval);
        };

        startAutoPlay();

        // Pause auto-play on mouse enter or touch
        storyRail.addEventListener("mouseenter", stopAutoPlay);
        storyRail.addEventListener("mouseleave", startAutoPlay);
        storyRail.addEventListener("touchstart", stopAutoPlay, { passive: true });
        storyRail.addEventListener("touchend", startAutoPlay, { passive: true });

        if (storyRailPrev && storyRailNext) {
            storyRailPrev.addEventListener("click", () => {
                stopAutoPlay();
                storyRail.scrollBy({ left: 260, behavior: "smooth" });
                startAutoPlay();
            });
            storyRailNext.addEventListener("click", () => {
                stopAutoPlay();
                storyRail.scrollBy({ left: -260, behavior: "smooth" });
                startAutoPlay();
            });
        }
    }

    // Story Modal Logic
    if (storyCards.length && storyModal) {
        const buildProgressBars = () => {
            if (!storyProgressBar) return;
            storyProgressBar.innerHTML = "";
            storyCards.forEach((_, idx) => {
                const step = document.createElement("div");
                step.className = "story-progress-step";
                if (idx < currentStoryIndex) {
                    step.classList.add("is-completed");
                }
                const inner = document.createElement("div");
                inner.className = "story-progress-step-inner";
                step.appendChild(inner);
                storyProgressBar.appendChild(step);
            });
        };

        const startStoryProgress = () => {
            clearInterval(storyProgressInterval);
            if (!storyProgressBar) return;
            const steps = storyProgressBar.querySelectorAll(".story-progress-step");
            steps.forEach((step, idx) => {
                const inner = step.querySelector(".story-progress-step-inner");
                if (!inner) return;
                if (idx < currentStoryIndex) {
                    step.classList.add("is-completed");
                    inner.style.width = "100%";
                } else if (idx > currentStoryIndex) {
                    step.classList.remove("is-completed");
                    inner.style.width = "0%";
                } else {
                    step.classList.remove("is-completed");
                    inner.style.width = "0%";
                    let startTime = performance.now();
                    storyProgressInterval = setInterval(() => {
                        let elapsed = performance.now() - startTime;
                        let pct = Math.min((elapsed / STORY_DURATION_MS) * 100, 100);
                        inner.style.width = `${pct}%`;
                        if (pct >= 100) {
                            clearInterval(storyProgressInterval);
                            step.classList.add("is-completed");
                            nextStory();
                        }
                    }, 50);
                }
            });
        };

        const loadStory = (index) => {
            if (index < 0 || index >= storyCards.length) return;
            currentStoryIndex = index;
            const card = storyCards[index];

            const author = card.getAttribute("data-author") || "";
            const category = card.getAttribute("data-category") || "";
            const img = card.getAttribute("data-img") || "";
            const title = card.getAttribute("data-title") || "";
            const duration = card.getAttribute("data-duration") || "";
            const type = card.getAttribute("data-type") || "video";

            if (storyModalAuthor) storyModalAuthor.textContent = author;
            if (storyModalCategory) storyModalCategory.textContent = category;
            if (storyModalImg) storyModalImg.src = img;
            if (storyModalTitle) storyModalTitle.textContent = title;
            if (storyModalDuration) storyModalDuration.innerHTML = `<i class="ph ph-clock"></i> ${duration}`;

            if (storyPlayIcon) {
                if (type === "audio") {
                    storyPlayIcon.className = "ph-fill ph-headphones";
                } else if (type === "gallery") {
                    storyPlayIcon.className = "ph-fill ph-images";
                } else {
                    storyPlayIcon.className = "ph-fill ph-play";
                }
            }

            isStoryPlaying = true;
            buildProgressBars();
            startStoryProgress();
        };

        const openStoryModal = (index) => {
            storyModal.classList.add("is-active");
            storyModal.setAttribute("aria-hidden", "false");
            document.body.style.overflow = "hidden";
            loadStory(index);
        };

        const closeStoryModal = () => {
            storyModal.classList.remove("is-active");
            storyModal.setAttribute("aria-hidden", "true");
            document.body.style.overflow = "";
            clearInterval(storyProgressInterval);
            isStoryPlaying = false;
        };

        const nextStory = () => {
            if (currentStoryIndex < storyCards.length - 1) {
                loadStory(currentStoryIndex + 1);
            } else {
                closeStoryModal();
            }
        };

        const prevStory = () => {
            if (currentStoryIndex > 0) {
                loadStory(currentStoryIndex - 1);
            } else {
                loadStory(0);
            }
        };

        storyCards.forEach((card, idx) => {
            card.addEventListener("click", () => openStoryModal(idx));
        });

        if (storyModalClose) storyModalClose.addEventListener("click", closeStoryModal);
        if (storyModalBackdrop) storyModalBackdrop.addEventListener("click", closeStoryModal);
        if (storyModalNext) storyModalNext.addEventListener("click", nextStory);
        if (storyModalPrev) storyModalPrev.addEventListener("click", prevStory);

        document.addEventListener("keydown", (e) => {
            if (!storyModal.classList.contains("is-active")) return;
            if (e.key === "Escape") closeStoryModal();
            if (e.key === "ArrowLeft") prevStory(); // RTL reverse
            if (e.key === "ArrowRight") nextStory();
        });
    }

    // ═══════════════════════════════════════════════════════════
    // DAILY NARRATIVE INTERACTIVE THUMBNAILS (Removed based on new design)
    // ═══════════════════════════════════════════════════════════

});

// ─── NEWS SWIPER INITIALIZATION ────────────────────────────────────────────
// خارج از DOMContentLoaded چون Swiper باید پس از لود کامل DOM و کتابخانه اجرا شود

(function initNewsSwipers() {
    if (typeof Swiper === "undefined") return;

    const swiperInstances = new Map();

    const createSwiper = (container) => {
        if (swiperInstances.has(container)) {
            swiperInstances.get(container).destroy(true, true);
        }

        const instance = new Swiper(container, {
            slidesPerView: 1.2,
            spaceBetween: 14,
            centeredSlides: false,
            grabCursor: true,
            speed: 600,
            autoplay: {
                delay: 3500,
                disableOnInteraction: false,
                pauseOnMouseEnter: true,
            },
            // RTL — جهت‌دهی صحیح برای فارسی
            dir: "rtl",
            navigation: {
                nextEl: container.querySelector(".news-swiper-next"),
                prevEl: container.querySelector(".news-swiper-prev"),
            },
            pagination: {
                el: container.querySelector(".news-swiper-pagination"),
                clickable: true,
                dynamicBullets: true,
            },
            breakpoints: {
                480: { slidesPerView: 1.6, spaceBetween: 14 },
                640: { slidesPerView: 2.3, spaceBetween: 16 },
                768: { slidesPerView: 3, spaceBetween: 18 },
                1024: { slidesPerView: 3.8, spaceBetween: 20 },
                1280: { slidesPerView: 4.2, spaceBetween: 22 },
                1440: { slidesPerView: 4.5, spaceBetween: 24 },
            },
        });

        swiperInstances.set(container, instance);
        return instance;
    };

    // تابع مقداردهی اولیه برای پنل فعال
    const initActivePanel = () => {
        const activePanel = document.querySelector(".news-panel.is-active");
        if (!activePanel) return;

        const swiperEl = activePanel.querySelector(".news-swiper");
        if (swiperEl) createSwiper(swiperEl);
    };

    // راه‌اندازی اولیه
    document.addEventListener("DOMContentLoaded", initActivePanel);
    // اگر DOM قبلاً لود شده
    if (document.readyState !== "loading") initActivePanel();

    // هنگام تغییر تب، Swiper پنل جدید را راه‌اندازی کن
    document.addEventListener("click", (e) => {
        const tab = e.target.closest("[data-news-tab]");
        if (!tab) return;

        setTimeout(() => {
            const targetPanel = document.getElementById("news-panel-" + tab.dataset.newsTab)
                || document.querySelector(`[data-news-panel="${tab.dataset.newsTab}"]`);
            if (!targetPanel) return;

            const swiperEl = targetPanel.querySelector(".news-swiper");
            if (swiperEl) createSwiper(swiperEl);
        }, 50); // تاخیر کوچک برای اطمینان از نمایش پنل
    });
})();

// ─── FLOATING SOCIAL FAB CONTROLLER ─────────────────────────────────────────
(function initSocialFab() {
    const fab = document.getElementById("social-fab");
    if (!fab) return;

    const toggleBtn = document.getElementById("social-fab-toggle");
    const panel = document.getElementById("social-fab-panel");
    const closeBtn = document.getElementById("social-fab-close");

    if (!toggleBtn || !panel) return;

    const openFab = () => {
        fab.classList.add("is-open");
        toggleBtn.setAttribute("aria-expanded", "true");
        panel.setAttribute("aria-hidden", "false");
        try {
            localStorage.setItem("revayat_social_seen", "true");
        } catch (e) { }
    };

    const closeFab = () => {
        fab.classList.remove("is-open");
        toggleBtn.setAttribute("aria-expanded", "false");
        panel.setAttribute("aria-hidden", "true");
    };

    const toggleFab = () => {
        if (fab.classList.contains("is-open")) {
            closeFab();
        } else {
            openFab();
        }
    };

    toggleBtn.addEventListener("click", (e) => {
        e.stopPropagation();
        toggleFab();
    });

    if (closeBtn) {
        closeBtn.addEventListener("click", (e) => {
            e.stopPropagation();
            closeFab();
        });
    }

    // Close on click outside
    document.addEventListener("click", (e) => {
        if (fab.classList.contains("is-open") && !fab.contains(e.target)) {
            closeFab();
        }
    });

    // Close on Escape key
    document.addEventListener("keydown", (e) => {
        if (e.key === "Escape" && fab.classList.contains("is-open")) {
            closeFab();
            toggleBtn.focus();
        }
    });
})();
