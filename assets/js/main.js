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

    // ─── DAILY NARRATIVE INTERACTIVE INFO PANEL ────────────
    const infoPanelInner = document.querySelector(".info-panel__inner");
    const infoPanelTag = document.getElementById("info-panel-tag");
    const infoPanelTitle = document.getElementById("info-panel-title");
    const infoPanelExcerpt = document.getElementById("info-panel-excerpt");
    const infoPanelAvatar = document.getElementById("info-panel-avatar");
    const infoPanelAuthor = document.getElementById("info-panel-author");
    const infoPanelDate = document.getElementById("info-panel-date");
    const infoPanelLink = document.getElementById("info-panel-link");
    const interactiveThumbItems = document.querySelectorAll(".interactive-thumb-item");

    if (infoPanelInner && interactiveThumbItems.length) {
        let currentIndex = 0;
        let autoplayInterval;

        const updateInfoPanel = (thumb, index) => {
            if (index !== undefined) {
                currentIndex = index;
            } else {
                // Find index if not provided
                currentIndex = Array.from(interactiveThumbItems).indexOf(thumb);
            }

            interactiveThumbItems.forEach(item => item.classList.remove("is-active"));
            thumb.classList.add("is-active");

            infoPanelInner.classList.add("is-updating");

            setTimeout(() => {
                const tag = thumb.getAttribute("data-tag");
                const avatar = thumb.getAttribute("data-avatar");
                const author = thumb.getAttribute("data-author");
                const date = thumb.getAttribute("data-date");
                const title = thumb.getAttribute("data-title");
                const excerpt = thumb.getAttribute("data-excerpt");
                const link = thumb.getAttribute("data-link");

                if (infoPanelTag) infoPanelTag.textContent = tag;
                if (infoPanelAvatar) infoPanelAvatar.src = avatar;
                if (infoPanelAuthor) infoPanelAuthor.textContent = author;
                if (infoPanelDate) infoPanelDate.textContent = date;
                if (infoPanelTitle) infoPanelTitle.textContent = title;
                if (infoPanelExcerpt) infoPanelExcerpt.textContent = excerpt;
                if (infoPanelLink) infoPanelLink.href = link;

                infoPanelInner.classList.remove("is-updating");
            }, 180);
        };

        const startAutoplay = () => {
            autoplayInterval = setInterval(() => {
                const nextIndex = (currentIndex + 1) % interactiveThumbItems.length;
                updateInfoPanel(interactiveThumbItems[nextIndex], nextIndex);
            }, 4000); // 4 ثانیه تاخیر برای هر اسلاید
        };

        const stopAutoplay = () => {
            clearInterval(autoplayInterval);
        };

        interactiveThumbItems.forEach((thumb, index) => {
            thumb.addEventListener("mouseenter", () => {
                updateInfoPanel(thumb, index);
                stopAutoplay();
            });
            thumb.addEventListener("mouseleave", startAutoplay);
            thumb.addEventListener("click", () => updateInfoPanel(thumb, index));
        });

        // توقف پخش خودکار هنگام هاور روی پنل اطلاعات
        infoPanelInner.addEventListener("mouseenter", stopAutoplay);
        infoPanelInner.addEventListener("mouseleave", startAutoplay);

        // شروع پخش خودکار
        startAutoplay();
    }
});


