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
    const updateClock = () => {
        if (!topBarTime) return;
        const now = new Date();
        const h = String(now.getHours()).padStart(2, "0");
        const m = String(now.getMinutes()).padStart(2, "0");
        topBarTime.textContent = `${h}:${m}`;
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
});
