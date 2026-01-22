<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About - Slugworks Summer of Code</title>

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">

    <!-- Phosphor Icons -->
    <script src="https://unpkg.com/@phosphor-icons/web"></script>

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Roboto', 'sans-serif'],
                    },
                    colors: {
                        'gsoc-blue': '#4285F4',
                        'gsoc-red': '#EA4335',
                        'gsoc-yellow': '#FBBC04',
                        'gsoc-green': '#34A853',
                        'gsoc-bg': '#F8F9FA',
                    }
                }
            }
        }
    </script>

    <style>
        html {
            scroll-behavior: smooth;
            scroll-padding-top: 140px;
        }

        @media (min-width: 1024px) {
            html {
                scroll-padding-top: 100px;
            }
        }

        .sidebar-sticky {
            position: -webkit-sticky;
            position: sticky;
            top: 6rem;
            max-height: calc(100vh - 6rem);
            overflow-y: auto;
        }

        /* About Page specific styling (Blue Theme) */
        .sidebar-link:hover {
            color: #4285F4;
            /* Blue for About distinction */
            border-left-color: #4285F4;
            background-color: #eff6ff;
            /* Blue-50 */
        }

        .prose h2 {
            font-size: 1.5rem;
            font-weight: 700;
            color: #1f2937;
            margin-top: 2rem;
            margin-bottom: 1.5rem;
            padding-bottom: 0.5rem;
            border-bottom: 2px solid #e5e7eb;
            display: flex;
            align-items: center;
        }

        .prose h3 {
            font-size: 1.25rem;
            font-weight: 600;
            color: #111827;
            margin-bottom: 0.75rem;
            margin-top: 1.5rem;
        }

        .prose p {
            color: #4b5563;
            line-height: 1.75;
            margin-bottom: 1.25rem;
        }

        .prose ul {
            list-style-type: disc;
            padding-left: 1.5rem;
            margin-bottom: 1.5rem;
            color: #4b5563;
        }

        .prose a {
            color: #4285F4;
            /* Blue links */
            text-decoration: underline;
        }

        .prose a:hover {
            color: #1e40af;
        }

        .stat-card {
            background-color: #f8fafc;
            border-radius: 0.5rem;
            padding: 1.5rem;
            text-align: center;
            border: 1px solid #e2e8f0;
        }
    </style>
</head>

<body class="font-sans text-gray-700 bg-gsoc-bg overflow-x-hidden flex flex-col min-h-screen">

    <!-- Navigation -->
    <nav class="bg-white shadow-sm fixed w-full z-50 h-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <!-- Logo Area -->
                <div class="flex items-center">
                    <a href="../index.php" class="flex-shrink-0 flex items-center gap-2 cursor-pointer group">
                        <div
                            class="w-10 h-10 bg-gsoc-blue rounded-full flex items-center justify-center text-white group-hover:bg-blue-600 transition">
                            <i class="ph ph-arrow-left text-xl"></i>
                        </div>
                        <span class="font-medium text-xl text-gray-800 tracking-tight">Back to <span
                                class="font-bold text-gsoc-blue">Home</span></span>
                    </a>
                </div>

                <!-- Right Side Actions -->
                <div class="flex items-center space-x-4">
                    <span class="hidden md:block text-sm text-gray-500">Contact Us at <a
                            href="mailto:contact@slugworks.org"
                            class="text-gsoc-blue hover:underline">contact@slugworks.org</a></span>
                </div>
            </div>
        </div>
    </nav>

    <!-- Mobile Table of Contents -->
    <div class="lg:hidden bg-white border-b border-gray-200 sticky top-16 z-40 transition-shadow"
        id="mobile-toc-container">
        <button id="mobile-toc-btn"
            class="w-full flex items-center justify-between px-4 py-3 text-sm font-medium text-gray-700 bg-gray-50 hover:bg-gray-100 focus:outline-none transition-colors">
            <span class="flex items-center text-gsoc-blue font-bold"><i class="ph ph-list mr-2 text-lg"></i> In this
                section</span>
            <div class="flex items-center text-gray-400">
                <span id="current-section-label" class="mr-2 font-normal text-gray-500">Mission</span>
                <i class="ph ph-caret-down transition-transform duration-200" id="mobile-toc-icon"></i>
            </div>
        </button>
        <div id="mobile-toc-menu"
            class="hidden bg-white border-t border-gray-100 shadow-xl max-h-[60vh] overflow-y-auto absolute w-full left-0 z-50">
            <nav class="p-2 space-y-1">
                <a href="#mission"
                    class="mobile-toc-link block px-3 py-3 rounded-md text-sm font-medium text-gray-700 hover:bg-blue-50 hover:text-gsoc-blue border-l-4 border-transparent">Mission</a>
                <a href="#history"
                    class="mobile-toc-link block px-3 py-3 rounded-md text-sm font-medium text-gray-700 hover:bg-blue-50 hover:text-gsoc-blue border-l-4 border-transparent">History</a>
                <a href="#impact"
                    class="mobile-toc-link block px-3 py-3 rounded-md text-sm font-medium text-gray-700 hover:bg-blue-50 hover:text-gsoc-blue border-l-4 border-transparent">Impact</a>
                <a href="#team"
                    class="mobile-toc-link block px-3 py-3 rounded-md text-sm font-medium text-gray-700 hover:bg-blue-50 hover:text-gsoc-blue border-l-4 border-transparent">The
                    Team</a>
            </nav>
        </div>
    </div>

    <!-- Header -->
    <div class="bg-white border-b border-gray-200 pt-24 pb-8 lg:pt-24 lg:pb-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center md:text-left">
                <div class="flex items-center justify-center md:justify-start gap-2 text-sm text-gray-500 mb-4">
                    <a href="../index.html" class="hover:text-gsoc-blue">Home</a>
                    <i class="ph ph-caret-right text-xs"></i>
                    <span class="text-gray-900 font-medium">About</span>
                </div>
                <h1 class="text-3xl font-extrabold text-gray-900 tracking-tight sm:text-5xl mb-4">
                    About the Program
                </h1>
                <p class="text-lg sm:text-xl text-gray-500 max-w-3xl mx-auto md:mx-0">
                    Learn about the mission, history, and the people behind Slugworks Summer of Code.
                </p>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8 lg:py-12">
        <div class="lg:grid lg:grid-cols-12 lg:gap-8">

            <!-- Sidebar (Desktop) -->
            <aside class="hidden lg:block lg:col-span-3">
                <nav class="sidebar-sticky space-y-1" aria-label="Sidebar">
                    <a href="#mission"
                        class="sidebar-link group flex items-center px-3 py-2 text-sm font-medium text-gsoc-blue border-l-4 border-gsoc-blue bg-blue-50">
                        <span class="truncate">Mission</span>
                    </a>
                    <a href="#history"
                        class="sidebar-link group flex items-center px-3 py-2 text-sm font-medium text-gray-600 border-l-4 border-transparent hover:bg-blue-50 hover:text-gray-900">
                        <span class="truncate">History</span>
                    </a>
                    <a href="#impact"
                        class="sidebar-link group flex items-center px-3 py-2 text-sm font-medium text-gray-600 border-l-4 border-transparent hover:bg-blue-50 hover:text-gray-900">
                        <span class="truncate">Impact</span>
                    </a>
                    <a href="#team"
                        class="sidebar-link group flex items-center px-3 py-2 text-sm font-medium text-gray-600 border-l-4 border-transparent hover:bg-blue-50 hover:text-gray-900">
                        <span class="truncate">The Team</span>
                    </a>
                </nav>
            </aside>

            <!-- Content -->
            <main
                class="lg:col-span-9 prose max-w-none bg-white p-6 sm:p-8 rounded-xl shadow-sm border border-gray-100">

                <!-- Mission Section -->
                <section id="mission" class="scroll-mt-32 lg:scroll-mt-24">
                    <h2><i class="ph ph-target mr-3 text-gsoc-blue"></i> Mission</h2>
                    <p>
                        The mission of Slugworks Summer of Code is to inspire young developers to begin participating in
                        open source development. We provide a structured environment where students can work on
                        real-world software development projects under the guidance of experienced mentors.
                    </p>
                    <p>
                        We believe that open source is not just about code—it's about community. By connecting students
                        with organizations, we hope to foster long-term relationships that benefit the entire ecosystem.
                    </p>
                </section>

                <!-- History Section -->
                <section id="history" class="scroll-mt-32 lg:scroll-mt-24">
                    <h2><i class="ph ph-clock-counter-clockwise mr-3 text-gsoc-blue"></i> History</h2>
                    <p>
                        Slugworks Summer of Code began in 2005 with a simple idea: get students coding and get open
                        source projects more code. What started as a small experiment has grown into a global
                        phenomenon.
                    </p>
                    <ul class="space-y-2">
                        <li><strong>2005:</strong> The first pilot program launches with 40 organizations.</li>
                        <li><strong>2010:</strong> The program expands globally, reaching students in over 50 countries.
                        </li>
                        <li><strong>2020:</strong> We adapted to a fully remote world, increasing stipends and support
                            for digital mentorship.</li>
                        <li><strong>2025:</strong> Celebrating 20 years of open source innovation!</li>
                    </ul>
                </section>

                <!------ Impact Section 
                <section id="impact" class="scroll-mt-32 lg:scroll-mt-24">
                    <h2><i class="ph ph-chart-bar mr-3 text-gsoc-blue"></i> Impact</h2>
                    <p>Over the years, our students have written millions of lines of code that power the software we
                        use every day.</p>

                    <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 not-prose my-8">
                        <div class="stat-card">
                            <div class="text-3xl font-bold text-gsoc-blue">40M+</div>
                            <div class="text-sm text-gray-500 mt-1">Lines of Code</div>
                        </div>
                        <div class="stat-card">
                            <div class="text-3xl font-bold text-gsoc-red">110+</div>
                            <div class="text-sm text-gray-500 mt-1">Countries</div>
                        </div>
                        <div class="stat-card">
                            <div class="text-3xl font-bold text-gsoc-green">800+</div>
                            <div class="text-sm text-gray-500 mt-1">Organizations</div>
                        </div>
                    </div>
                </section> -->

                <!-- Team Section -->
                <section id="team" class="scroll-mt-32 lg:scroll-mt-24">
                    <h2><i class="ph ph-users mr-3 text-gsoc-blue"></i> The Team</h2>
                    <p>
                        Slugworks Summer of Code is managed by the Slugworks Open Source Program Office. We are a
                        dedicated team of program managers, engineers, and community specialists who are passionate
                        about open source.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-6 mt-6 not-prose">
                        <div class="flex items-center gap-4 p-4 border border-gray-100 rounded-lg bg-gray-50 flex-1">
                            <div
                                class="w-12 h-12 bg-gray-200 rounded-full flex items-center justify-center text-gray-400">
                                <i class="ph ph-user text-2xl"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-900">Program Admins</h4>
                                <p class="text-sm text-gray-500">Managing logistics & stipends</p>
                            </div>
                        </div>
                        <div class="flex items-center gap-4 p-4 border border-gray-100 rounded-lg bg-gray-50 flex-1">
                            <div
                                class="w-12 h-12 bg-gray-200 rounded-full flex items-center justify-center text-gray-400">
                                <i class="ph ph-code text-2xl"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-900">Engineering</h4>
                                <p class="text-sm text-gray-500">Maintaining the platform</p>
                            </div>
                        </div>
                    </div>
                </section>

            </main>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-white border-t border-gray-200 mt-auto py-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <div class="flex items-center justify-center gap-2 mb-4 text-gray-600">
                <i class="ph ph-code text-xl"></i>
                <span class="font-bold">Slugworks Open Source</span>
            </div>
            <p class="text-sm text-gray-500">&copy; Slugworks 2025-2026</p>
        </div>
    </footer>

    <!-- Interactive Script -->
    <script>
        // --- Mobile Menu Toggle Logic ---
        const mobileTocBtn = document.getElementById('mobile-toc-btn');
        const mobileTocMenu = document.getElementById('mobile-toc-menu');
        const mobileTocIcon = document.getElementById('mobile-toc-icon');
        const currentSectionLabel = document.getElementById('current-section-label');
        const mobileLinks = document.querySelectorAll('.mobile-toc-link');

        function toggleMobileMenu() {
            mobileTocMenu.classList.toggle('hidden');
            if (mobileTocMenu.classList.contains('hidden')) {
                mobileTocIcon.style.transform = 'rotate(0deg)';
            } else {
                mobileTocIcon.style.transform = 'rotate(180deg)';
            }
        }

        mobileTocBtn.addEventListener('click', (e) => {
            e.stopPropagation();
            toggleMobileMenu();
        });

        document.addEventListener('click', (e) => {
            if (!mobileTocMenu.contains(e.target) && !mobileTocBtn.contains(e.target)) {
                if (!mobileTocMenu.classList.contains('hidden')) {
                    toggleMobileMenu();
                }
            }
        });

        // --- Active Section Highlighting ---
        const sections = document.querySelectorAll('section');
        const desktopLinks = document.querySelectorAll('.sidebar-link');

        function updateActiveLink() {
            let current = '';

            sections.forEach(section => {
                const sectionTop = section.offsetTop;
                if (window.scrollY >= (sectionTop - 250)) {
                    current = section.getAttribute('id');
                }
            });

            if (window.scrollY < 200) current = 'mission';

            desktopLinks.forEach(link => {
                link.classList.remove('text-gsoc-blue', 'border-l-4', 'border-gsoc-blue', 'bg-blue-50');
                link.classList.add('text-gray-600', 'border-transparent');

                if (link.getAttribute('href').includes(current)) {
                    link.classList.add('text-gsoc-blue', 'border-l-4', 'border-gsoc-blue', 'bg-blue-50');
                    link.classList.remove('text-gray-600', 'border-transparent');
                }
            });

            mobileLinks.forEach(link => {
                link.classList.remove('bg-blue-50', 'text-gsoc-blue', 'border-gsoc-blue');
                link.classList.add('text-gray-700', 'border-transparent');

                if (link.getAttribute('href').includes(current)) {
                    link.classList.add('bg-blue-50', 'text-gsoc-blue', 'border-gsoc-blue');
                    link.classList.remove('text-gray-700', 'border-transparent');
                    currentSectionLabel.textContent = link.textContent;
                }
            });
        }

        window.addEventListener('scroll', updateActiveLink);

        mobileLinks.forEach(link => {
            link.addEventListener('click', () => {
                if (!mobileTocMenu.classList.contains('hidden')) {
                    toggleMobileMenu();
                }
            });
        });

        updateActiveLink();
    </script>
</body>

</html><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contributor Guide - Summer of Code</title>

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">

    <!-- Phosphor Icons -->
    <script src="https://unpkg.com/@phosphor-icons/web"></script>

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Roboto', 'sans-serif'],
                    },
                    colors: {
                        'gsoc-blue': '#4285F4',
                        'gsoc-red': '#EA4335',
                        'gsoc-yellow': '#FBBC04',
                        'gsoc-green': '#34A853',
                        'gsoc-bg': '#F8F9FA',
                    }
                }
            }
        }
    </script>

    <style>
        html {
            scroll-behavior: smooth;
            scroll-padding-top: 140px;
            /* Increased offset for mobile headers */
        }

        @media (min-width: 1024px) {
            html {
                scroll-padding-top: 100px;
                /* Standard offset for desktop */
            }
        }

        /* Sticky Sidebar logic */
        .sidebar-sticky {
            position: -webkit-sticky;
            position: sticky;
            top: 6rem;
            /* Height of navbar + gap */
            max-height: calc(100vh - 6rem);
            overflow-y: auto;
        }

        /* Active link styling for sidebar */
        .sidebar-link:hover {
            color: #4285F4;
            border-left-color: #4285F4;
            background-color: #eff6ff;
        }

        /* Typography for documentation content */
        .prose h2 {
            font-size: 1.5rem;
            font-weight: 700;
            color: #1f2937;
            margin-top: 2rem;
            margin-bottom: 1rem;
            padding-bottom: 0.5rem;
            border-bottom: 1px solid #e5e7eb;
        }

        @media (min-width: 768px) {
            .prose h2 {
                font-size: 1.875rem;
                margin-top: 2.5rem;
            }
        }

        .prose h3 {
            font-size: 1.25rem;
            font-weight: 600;
            color: #374151;
            margin-top: 1.5rem;
            margin-bottom: 0.75rem;
        }

        @media (min-width: 768px) {
            .prose h3 {
                font-size: 1.5rem;
                margin-top: 2rem;
            }
        }

        .prose p {
            margin-bottom: 1.25rem;
            line-height: 1.75;
            color: #4b5563;
        }

        .prose ul {
            list-style-type: disc;
            padding-left: 1.5rem;
            margin-bottom: 1.25rem;
            color: #4b5563;
        }

        .prose li {
            margin-bottom: 0.5rem;
        }

        .prose a {
            color: #4285F4;
            text-decoration: underline;
        }

        .prose a:hover {
            color: #1d4ed8;
        }
    </style>
</head>

<body class="font-sans text-gray-700 bg-gsoc-bg overflow-x-hidden flex flex-col min-h-screen">

    <!-- Navigation (Fixed) -->
    <nav class="bg-white shadow-sm fixed w-full z-50 h-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <!-- Logo Area -->
                <div class="flex items-center">
                    <a href="../index.php" class="flex-shrink-0 flex items-center gap-2 cursor-pointer group">
                        <div
                            class="w-10 h-10 bg-gsoc-blue rounded-full flex items-center justify-center text-white group-hover:bg-blue-600 transition">
                            <i class="ph ph-arrow-left text-xl"></i>
                        </div>
                        <span class="font-medium text-xl text-gray-800 tracking-tight">Back to <span
                                class="font-bold text-gsoc-blue">Home</span></span>
                    </a>
                </div>

                <!-- Right Side Actions -->
                <div class="flex items-center space-x-4">
                    <span class="hidden md:block text-sm text-gray-500">Need help? <a href="#"
                            class="text-gsoc-blue hover:underline">Contact Support</a></span>
                </div>
            </div>
        </div>
    </nav>

    <!-- Mobile Table of Contents (Sticky just below Nav) -->
    <div class="lg:hidden bg-white border-b border-gray-200 sticky top-16 z-40 transition-shadow"
        id="mobile-toc-container">
        <button id="mobile-toc-btn"
            class="w-full flex items-center justify-between px-4 py-3 text-sm font-medium text-gray-700 bg-gray-50 hover:bg-gray-100 focus:outline-none transition-colors">
            <span class="flex items-center text-gsoc-blue font-bold"><i class="ph ph-list mr-2 text-lg"></i> Jump to
                Section</span>
            <div class="flex items-center text-gray-400">
                <span id="current-section-label" class="mr-2 font-normal text-gray-500">Introduction</span>
                <i class="ph ph-caret-down transition-transform duration-200" id="mobile-toc-icon"></i>
            </div>
        </button>
        <!-- Dropdown Menu -->
        <div id="mobile-toc-menu"
            class="hidden bg-white border-t border-gray-100 shadow-xl max-h-[60vh] overflow-y-auto absolute w-full left-0 z-50">
            <nav class="p-2 space-y-1">
                <a href="#introduction"
                    class="mobile-toc-link block px-3 py-3 rounded-md text-sm font-medium text-gray-700 hover:bg-blue-50 hover:text-gsoc-blue border-l-4 border-transparent">Introduction</a>
                <a href="#eligibility"
                    class="mobile-toc-link block px-3 py-3 rounded-md text-sm font-medium text-gray-700 hover:bg-blue-50 hover:text-gsoc-blue border-l-4 border-transparent">Eligibility</a>
                <a href="#getting-started"
                    class="mobile-toc-link block px-3 py-3 rounded-md text-sm font-medium text-gray-700 hover:bg-blue-50 hover:text-gsoc-blue border-l-4 border-transparent">Getting
                    Started</a>
                <a href="#proposal-guide"
                    class="mobile-toc-link block px-3 py-3 rounded-md text-sm font-medium text-gray-700 hover:bg-blue-50 hover:text-gsoc-blue border-l-4 border-transparent">Writing
                    a Proposal</a>
                <a href="#evaluation"
                    class="mobile-toc-link block px-3 py-3 rounded-md text-sm font-medium text-gray-700 hover:bg-blue-50 hover:text-gsoc-blue border-l-4 border-transparent">Evaluations</a>
                <a href="#code-of-conduct"
                    class="mobile-toc-link block px-3 py-3 rounded-md text-sm font-medium text-gray-700 hover:bg-blue-50 hover:text-gsoc-blue border-l-4 border-transparent">Code
                    of Conduct</a>
            </nav>
        </div>
    </div>

    <!-- Header / Breadcrumb Area -->
    <div class="bg-white border-b border-gray-200 pt-24 pb-8 lg:pt-24 lg:pb-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center md:text-left">
                <div class="flex items-center justify-center md:justify-start gap-2 text-sm text-gray-500 mb-4">
                    <a href="../index.php" class="hover:text-gsoc-blue">Home</a>
                    <i class="ph ph-caret-right text-xs"></i>
                    <span class="text-gray-900 font-medium">Contributor Guide</span>
                </div>
                <h1 class="text-3xl font-extrabold text-gray-900 tracking-tight sm:text-5xl mb-4">
                    Contributor Guide
                </h1>
                <p class="text-lg sm:text-xl text-gray-500 max-w-3xl mx-auto md:mx-0">
                    Everything you need to know about applying, coding, and succeeding in the program.
                </p>
            </div>
        </div>
    </div>

    <!-- Main Content Area -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8 lg:py-12">
        <div class="lg:grid lg:grid-cols-12 lg:gap-8">

            <!-- Sidebar Navigation (Desktop Only) -->
            <aside class="hidden lg:block lg:col-span-3">
                <nav class="sidebar-sticky space-y-1" aria-label="Sidebar">
                    <a href="#introduction"
                        class="sidebar-link group flex items-center px-3 py-2 text-sm font-medium text-gsoc-blue border-l-4 border-gsoc-blue bg-blue-50">
                        <span class="truncate">Introduction</span>
                    </a>
                    <a href="#eligibility"
                        class="sidebar-link group flex items-center px-3 py-2 text-sm font-medium text-gray-600 border-l-4 border-transparent hover:bg-gray-50 hover:text-gray-900">
                        <span class="truncate">Eligibility</span>
                    </a>
                    <a href="#getting-started"
                        class="sidebar-link group flex items-center px-3 py-2 text-sm font-medium text-gray-600 border-l-4 border-transparent hover:bg-gray-50 hover:text-gray-900">
                        <span class="truncate">Getting Started</span>
                    </a>
                    <a href="#proposal-guide"
                        class="sidebar-link group flex items-center px-3 py-2 text-sm font-medium text-gray-600 border-l-4 border-transparent hover:bg-gray-50 hover:text-gray-900">
                        <span class="truncate">Writing a Proposal</span>
                    </a>
                    <a href="#evaluation"
                        class="sidebar-link group flex items-center px-3 py-2 text-sm font-medium text-gray-600 border-l-4 border-transparent hover:bg-gray-50 hover:text-gray-900">
                        <span class="truncate">Evaluations</span>
                    </a>
                    <a href="#code-of-conduct"
                        class="sidebar-link group flex items-center px-3 py-2 text-sm font-medium text-gray-600 border-l-4 border-transparent hover:bg-gray-50 hover:text-gray-900">
                        <span class="truncate">Code of Conduct</span>
                    </a>
                </nav>
            </aside>

            <!-- Content Column -->
            <main
                class="lg:col-span-9 prose max-w-none bg-white p-6 sm:p-8 rounded-xl shadow-sm border border-gray-100">

                <!-- Introduction -->
                <section id="introduction" class="scroll-mt-32 lg:scroll-mt-24">
                    <div class="flex flex-col sm:flex-row sm:items-center gap-3 mb-6">
                        <div
                            class="w-12 h-12 flex items-center justify-center bg-blue-100 rounded-lg text-gsoc-blue flex-shrink-0">
                            <i class="ph ph-hand-waving text-2xl"></i>
                        </div>
                        <h2 class="!mt-0 !mb-0 !border-0 text-2xl sm:text-3xl">Welcome Future Contributors</h2>
                    </div>
                    <p>
                        Welcome to the official Contributor Guide! This document is your roadmap to participating in the
                        program. Whether you are a seasoned open-source developer or making your first commit, this
                        guide will help you navigate the process from application to final submission.
                    </p>
                    <div class="bg-blue-50 border-l-4 border-gsoc-blue p-4 my-6 rounded-r-md">
                        <div class="flex">
                            <div class="flex-shrink-0">
                                <i class="ph ph-info text-gsoc-blue text-xl"></i>
                            </div>
                            <div class="ml-3">
                                <p class="text-sm text-blue-700 font-medium !mb-0">
                                    <strong>Note:</strong> Applications open on [Date Placeholder]. Please ensure you
                                    have read this entire guide before asking questions in the community channels.
                                </p>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Eligibility -->
                <section id="eligibility" class="scroll-mt-32 lg:scroll-mt-24">
                    <h2>Eligibility Requirements</h2>
                    <p>To participate in this year's program, you must meet the following criteria:</p>
                    <ul class="space-y-2">
                        <li><i class="ph ph-check-circle text-gsoc-green mr-2"></i> Be at least 18 years of age upon
                            registration.</li>
                        <li><i class="ph ph-check-circle text-gsoc-green mr-2"></i> Be a student enrolled in or accepted
                            into an accredited institution.</li>
                        <li><i class="ph ph-check-circle text-gsoc-green mr-2"></i> Be eligible to work in your country
                            of residence during the program duration.</li>
                        <li><i class="ph ph-check-circle text-gsoc-green mr-2"></i> Not be a resident of a US embargoed
                            country.</li>
                    </ul>
                </section>

                <!-- Getting Started -->
                <section id="getting-started" class="scroll-mt-32 lg:scroll-mt-24">
                    <h2>Getting Started</h2>
                    <p>
                        Finding the right project is the most critical step. Don't wait until the application period
                        opens!
                    </p>
                    <h3>1. Choose an Organization</h3>
                    <p>Browse the list of <a href="#">participating organizations</a>. Look for technologies you are
                        familiar with or want to learn (e.g., Python, React, Machine Learning).</p>

                    <h3>2. Introduce Yourself</h3>
                    <p>Join the organization's communication channel (Slack, Discord, Mailing List). Be polite,
                        introduce yourself, and mention you are interested in GSoC.</p>

                    <h3>3. Make a Contribution</h3>
                    <p>Fix a bug, update documentation, or solve a "good first issue." This shows mentors that you are
                        serious and capable.</p>
                </section>

                <!-- Proposal Guide -->
                <section id="proposal-guide" class="scroll-mt-32 lg:scroll-mt-24">
                    <h2>Writing a Winning Proposal</h2>
                    <p>Your proposal is the most important part of your application. It should be detailed, realistic,
                        and well-structured.</p>

                    <div class="grid md:grid-cols-2 gap-6 my-6 not-prose">
                        <div class="bg-gray-50 p-5 rounded-lg border border-gray-200">
                            <h4 class="font-bold text-gray-900 mb-2">Do's</h4>
                            <ul class="space-y-2 text-sm text-gray-600">
                                <li class="flex items-start"><i class="ph ph-check text-gsoc-green mr-2 mt-0.5"></i>
                                    Discuss your idea with mentors first.</li>
                                <li class="flex items-start"><i class="ph ph-check text-gsoc-green mr-2 mt-0.5"></i>
                                    Include a detailed weekly timeline.</li>
                                <li class="flex items-start"><i class="ph ph-check text-gsoc-green mr-2 mt-0.5"></i>
                                    Mention your previous contributions.</li>
                            </ul>
                        </div>
                        <div class="bg-gray-50 p-5 rounded-lg border border-gray-200">
                            <h4 class="font-bold text-gray-900 mb-2">Don'ts</h4>
                            <ul class="space-y-2 text-sm text-gray-600">
                                <li class="flex items-start"><i class="ph ph-x text-gsoc-red mr-2 mt-0.5"></i> Leave it
                                    until the last minute.</li>
                                <li class="flex items-start"><i class="ph ph-x text-gsoc-red mr-2 mt-0.5"></i>
                                    Copy-paste generic proposals.</li>
                                <li class="flex items-start"><i class="ph ph-x text-gsoc-red mr-2 mt-0.5"></i> Ghost
                                    your mentors after submitting.</li>
                            </ul>
                        </div>
                    </div>

                    <h3>Standard Proposal Structure</h3>
                    <ul>
                        <li><strong>Project Title:</strong> Clear and concise.</li>
                        <li><strong>Abstract:</strong> A short summary of what you will achieve.</li>
                        <li><strong>Technical Details:</strong> Implementation plan, architecture, and tools.</li>
                        <li><strong>Timeline:</strong> Week-by-week breakdown of deliverables.</li>
                        <li><strong>About Me:</strong> Your background and why you are the right person.</li>
                    </ul>
                    <a href="#" class="inline-flex items-center text-gsoc-blue font-medium hover:underline mt-2">
                        <i class="ph ph-download-simple mr-2"></i> Download Proposal Template (PDF)
                    </a>
                </section>

                <!-- Evaluations -->
                <section id="evaluation" class="scroll-mt-32 lg:scroll-mt-24">
                    <h2>Evaluations</h2>
                    <p>There are two major evaluations during the program. Passing these is required to receive the
                        stipend.</p>
                    <div class="relative pl-8 border-l-2 border-gray-200 space-y-8 my-8">
                        <div class="relative">
                            <span
                                class="absolute -left-[41px] top-0 bg-gsoc-yellow text-white w-8 h-8 rounded-full flex items-center justify-center font-bold text-sm">1</span>
                            <h4 class="text-lg font-bold text-gray-900">Midterm Evaluation</h4>
                            <p class="text-sm text-gray-500 mt-1">Occurs after the first 6 weeks. Mentors assess your
                                progress against your timeline.</p>
                        </div>
                        <div class="relative">
                            <span
                                class="absolute -left-[41px] top-0 bg-gsoc-green text-white w-8 h-8 rounded-full flex items-center justify-center font-bold text-sm">2</span>
                            <h4 class="text-lg font-bold text-gray-900">Final Evaluation</h4>
                            <p class="text-sm text-gray-500 mt-1">Occurs at the end of the program. You must submit your
                                code and a final report.</p>
                        </div>
                    </div>
                </section>

                <!-- Code of Conduct -->
                <section id="code-of-conduct" class="scroll-mt-32 lg:scroll-mt-24">
                    <h2>Code of Conduct</h2>
                    <p>We are dedicated to providing a harassment-free experience for everyone. We do not tolerate
                        harassment of participants in any form.</p>
                    <p>
                        Please read our full <a href="#">Code of Conduct</a>. By participating, you agree to abide by
                        these rules.
                    </p>
                </section>

            </main>
        </div>
    </div>

    <!-- Footer (Simplified) -->
    <footer class="bg-white border-t border-gray-200 mt-auto py-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <p class="text-sm text-gray-500">&copy; Slugworks 2025-2026</p>
        </div>
    </footer>

    <!-- Interactive Script -->
    <script>
        // --- Mobile Menu Toggle Logic ---
        const mobileTocBtn = document.getElementById('mobile-toc-btn');
        const mobileTocMenu = document.getElementById('mobile-toc-menu');
        const mobileTocIcon = document.getElementById('mobile-toc-icon');
        const currentSectionLabel = document.getElementById('current-section-label');
        const mobileLinks = document.querySelectorAll('.mobile-toc-link');

        function toggleMobileMenu() {
            mobileTocMenu.classList.toggle('hidden');
            // Rotate icon
            if (mobileTocMenu.classList.contains('hidden')) {
                mobileTocIcon.style.transform = 'rotate(0deg)';
            } else {
                mobileTocIcon.style.transform = 'rotate(180deg)';
            }
        }

        mobileTocBtn.addEventListener('click', (e) => {
            e.stopPropagation();
            toggleMobileMenu();
        });

        // Close menu when clicking outside
        document.addEventListener('click', (e) => {
            if (!mobileTocMenu.contains(e.target) && !mobileTocBtn.contains(e.target)) {
                if (!mobileTocMenu.classList.contains('hidden')) {
                    toggleMobileMenu();
                }
            }
        });

        // --- Active Section Highlighting (Desktop & Mobile) ---
        const sections = document.querySelectorAll('section');
        const desktopLinks = document.querySelectorAll('.sidebar-link');

        function updateActiveLink() {
            let current = '';

            // Determine which section is currently active
            sections.forEach(section => {
                const sectionTop = section.offsetTop;
                // Offset calculation to account for sticky headers
                if (window.scrollY >= (sectionTop - 250)) {
                    current = section.getAttribute('id');
                }
            });

            // If we are at the very top, default to first section
            if (window.scrollY < 200) current = 'introduction';

            // Update Desktop Sidebar
            desktopLinks.forEach(link => {
                link.classList.remove('text-gsoc-blue', 'border-l-4', 'border-gsoc-blue', 'bg-blue-50');
                link.classList.add('text-gray-600', 'border-transparent');
                if (link.getAttribute('href').includes(current)) {
                    link.classList.add('text-gsoc-blue', 'border-l-4', 'border-gsoc-blue', 'bg-blue-50');
                    link.classList.remove('text-gray-600', 'border-transparent');
                }
            });

            // Update Mobile Menu Styles & Label
            mobileLinks.forEach(link => {
                // Reset styles
                link.classList.remove('bg-blue-50', 'text-gsoc-blue', 'border-gsoc-blue');
                link.classList.add('text-gray-700', 'border-transparent');

                if (link.getAttribute('href').includes(current)) {
                    link.classList.add('bg-blue-50', 'text-gsoc-blue', 'border-gsoc-blue');
                    link.classList.remove('text-gray-700', 'border-transparent');

                    // Update the label in the closed mobile bar
                    currentSectionLabel.textContent = link.textContent;
                }
            });
        }

        window.addEventListener('scroll', updateActiveLink);

        // Mobile Link Click Handler (Closes menu)
        mobileLinks.forEach(link => {
            link.addEventListener('click', () => {
                if (!mobileTocMenu.classList.contains('hidden')) {
                    toggleMobileMenu();
                }
            });
        });

        // Run once on load
        updateActiveLink();
    </script>
</body>

</html><?php

$db_server = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "soc";
$conn = " ";

try{
$conn = mysqli_connect($db_server, 
                        $db_user, 
                        $db_pass,
                        $db_name);

}
catch(mysqli_sql_exception){
    echo " could not";
}



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQ - Summer of Code</title>

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">

    <!-- Phosphor Icons -->
    <script src="https://unpkg.com/@phosphor-icons/web"></script>

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Roboto', 'sans-serif'],
                    },
                    colors: {
                        'gsoc-blue': '#4285F4',
                        'gsoc-red': '#EA4335',
                        'gsoc-yellow': '#FBBC04',
                        'gsoc-green': '#34A853',
                        'gsoc-bg': '#F8F9FA',
                    }
                }
            }
        }
    </script>

    <style>
        html {
            scroll-behavior: smooth;
            scroll-padding-top: 140px;
        }

        @media (min-width: 1024px) {
            html {
                scroll-padding-top: 100px;
            }
        }

        .sidebar-sticky {
            position: -webkit-sticky;
            position: sticky;
            top: 6rem;
            max-height: calc(100vh - 6rem);
            overflow-y: auto;
        }

        /* FAQ specific styling */
        .sidebar-link:hover {
            color: #FBBC04;
            /* Yellow for FAQ distinction */
            border-left-color: #FBBC04;
            background-color: #fffbeb;
            /* Yellow-50 */
        }

        .faq-item {
            margin-bottom: 2rem;
            padding-bottom: 2rem;
            border-bottom: 1px solid #f3f4f6;
        }

        .faq-item:last-child {
            border-bottom: none;
        }

        .prose h2 {
            font-size: 1.5rem;
            font-weight: 700;
            color: #1f2937;
            margin-top: 2rem;
            margin-bottom: 1.5rem;
            padding-bottom: 0.5rem;
            border-bottom: 2px solid #e5e7eb;
            display: flex;
            align-items: center;
        }

        .prose h3 {
            font-size: 1.15rem;
            font-weight: 600;
            color: #111827;
            margin-bottom: 0.5rem;
        }

        .prose p {
            color: #4b5563;
            line-height: 1.6;
        }

        .prose a {
            color: #FBBC04;
            /* Yellow links */
            text-decoration: underline;
        }

        .prose a:hover {
            color: #d97706;
        }
    </style>
</head>

<body class="font-sans text-gray-700 bg-gsoc-bg overflow-x-hidden flex flex-col min-h-screen">

    <!-- Navigation -->
    <nav class="bg-white shadow-sm fixed w-full z-50 h-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <!-- Logo Area -->
                <div class="flex items-center">
                    <a href="../index.php" class="flex-shrink-0 flex items-center gap-2 cursor-pointer group">
                        <div
                            class="w-10 h-10 bg-gsoc-yellow rounded-full flex items-center justify-center text-white group-hover:bg-yellow-500 transition">
                            <i class="ph ph-arrow-left text-xl"></i>
                        </div>
                        <span class="font-medium text-xl text-gray-800 tracking-tight">Back to <span
                                class="font-bold text-gsoc-yellow">Home</span></span>
                    </a>
                </div>

                <!-- Right Side Actions -->
                <div class="flex items-center space-x-4">
                    <span class="hidden md:block text-sm text-gray-500">Have more questions? <a href="#"
                            class="text-gsoc-yellow hover:underline">Contact Us</a></span>
                </div>
            </div>
        </div>
    </nav>

    <!-- Mobile Table of Contents -->
    <div class="lg:hidden bg-white border-b border-gray-200 sticky top-16 z-40 transition-shadow"
        id="mobile-toc-container">
        <button id="mobile-toc-btn"
            class="w-full flex items-center justify-between px-4 py-3 text-sm font-medium text-gray-700 bg-gray-50 hover:bg-gray-100 focus:outline-none transition-colors">
            <span class="flex items-center text-gsoc-yellow font-bold"><i class="ph ph-list mr-2 text-lg"></i> FAQ
                Categories</span>
            <div class="flex items-center text-gray-400">
                <span id="current-section-label" class="mr-2 font-normal text-gray-500">General</span>
                <i class="ph ph-caret-down transition-transform duration-200" id="mobile-toc-icon"></i>
            </div>
        </button>
        <div id="mobile-toc-menu"
            class="hidden bg-white border-t border-gray-100 shadow-xl max-h-[60vh] overflow-y-auto absolute w-full left-0 z-50">
            <nav class="p-2 space-y-1">
                <a href="#general"
                    class="mobile-toc-link block px-3 py-3 rounded-md text-sm font-medium text-gray-700 hover:bg-yellow-50 hover:text-gsoc-yellow border-l-4 border-transparent">General</a>
                <a href="#students"
                    class="mobile-toc-link block px-3 py-3 rounded-md text-sm font-medium text-gray-700 hover:bg-yellow-50 hover:text-gsoc-yellow border-l-4 border-transparent">For
                    Students</a>
                <a href="#mentors"
                    class="mobile-toc-link block px-3 py-3 rounded-md text-sm font-medium text-gray-700 hover:bg-yellow-50 hover:text-gsoc-yellow border-l-4 border-transparent">For
                    Mentors</a>
                <a href="#technical"
                    class="mobile-toc-link block px-3 py-3 rounded-md text-sm font-medium text-gray-700 hover:bg-yellow-50 hover:text-gsoc-yellow border-l-4 border-transparent">Technical</a>
            </nav>
        </div>
    </div>

    <!-- Header -->
    <div class="bg-white border-b border-gray-200 pt-24 pb-8 lg:pt-24 lg:pb-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center md:text-left">
                <div class="flex items-center justify-center md:justify-start gap-2 text-sm text-gray-500 mb-4">
                    <a href="../index.html" class="hover:text-gsoc-yellow">Home</a>
                    <i class="ph ph-caret-right text-xs"></i>
                    <span class="text-gray-900 font-medium">FAQ</span>
                </div>
                <h1 class="text-3xl font-extrabold text-gray-900 tracking-tight sm:text-5xl mb-4">
                    Frequently Asked Questions
                </h1>
                <p class="text-lg sm:text-xl text-gray-500 max-w-3xl mx-auto md:mx-0">
                    Common questions about eligibility, application processes, and program details.
                </p>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8 lg:py-12">
        <div class="lg:grid lg:grid-cols-12 lg:gap-8">

            <!-- Sidebar (Desktop) -->
            <aside class="hidden lg:block lg:col-span-3">
                <nav class="sidebar-sticky space-y-1" aria-label="Sidebar">
                    <a href="#general"
                        class="sidebar-link group flex items-center px-3 py-2 text-sm font-medium text-gsoc-yellow border-l-4 border-gsoc-yellow bg-yellow-50">
                        <span class="truncate">General</span>
                    </a>
                    <a href="#students"
                        class="sidebar-link group flex items-center px-3 py-2 text-sm font-medium text-gray-600 border-l-4 border-transparent hover:bg-yellow-50 hover:text-gray-900">
                        <span class="truncate">For Students</span>
                    </a>
                    <a href="#mentors"
                        class="sidebar-link group flex items-center px-3 py-2 text-sm font-medium text-gray-600 border-l-4 border-transparent hover:bg-yellow-50 hover:text-gray-900">
                        <span class="truncate">For Mentors</span>
                    </a>
                    <a href="#technical"
                        class="sidebar-link group flex items-center px-3 py-2 text-sm font-medium text-gray-600 border-l-4 border-transparent hover:bg-yellow-50 hover:text-gray-900">
                        <span class="truncate">Technical</span>
                    </a>
                </nav>
            </aside>

            <!-- Content -->
            <main
                class="lg:col-span-9 prose max-w-none bg-white p-6 sm:p-8 rounded-xl shadow-sm border border-gray-100">

                <!-- General Section -->
                <section id="general" class="scroll-mt-32 lg:scroll-mt-24">
                    <h2><i class="ph ph-info mr-3 text-gsoc-yellow"></i> General</h2>

                    <div class="faq-item">
                        <h3>What is this program?</h3>
                        <p>This is a global program focused on bringing more student developers into open source
                            software development. Students work with an open source organization on a 3-month
                            programming project during their break from school.</p>
                    </div>

                    <div class="faq-item">
                        <h3>When does the program start?</h3>
                        <p>The program timeline varies slightly each year, but generally, applications open in
                            March/April, and the coding period runs from May/June through August.</p>
                    </div>

                    <div class="faq-item">
                        <h3>Is this a job or internship?</h3>
                        <p>No. This is an activity that you participate in as an independent developer. You are not an
                            employee of Google or the mentor organization.</p>
                    </div>
                </section>

                <!-- Students Section -->
                <section id="students" class="scroll-mt-32 lg:scroll-mt-24">
                    <h2><i class="ph ph-student mr-3 text-gsoc-yellow"></i> For Students</h2>

                    <div class="faq-item">
                        <h3>Do I need to be a Computer Science major?</h3>
                        <p>No! We encourage students from all academic backgrounds to apply. As long as you can code and
                            meet the eligibility requirements, you are welcome.</p>
                    </div>

                    <div class="faq-item">
                        <h3>Can I submit more than one proposal?</h3>
                        <p>Yes, you can submit up to 3 proposals to different organizations or the same organization.
                            However, you can only be accepted for <strong>one</strong> project.</p>
                    </div>

                    <div class="faq-item">
                        <h3>How do I get paid?</h3>
                        <p>Stipends are paid in two installments: one after passing the midterm evaluation and one after
                            passing the final evaluation. Payments are facilitated through our payment processor,
                            Payoneer.</p>
                    </div>
                </section>

                <!-- Mentors Section -->
                <section id="mentors" class="scroll-mt-32 lg:scroll-mt-24">
                    <h2><i class="ph ph-chalkboard-teacher mr-3 text-gsoc-yellow"></i> For Mentors</h2>

                    <div class="faq-item">
                        <h3>Do mentors get paid?</h3>
                        <p>No. Mentoring is a volunteer activity. Mentors receive a small token of appreciation (like a
                            t-shirt or certificate) and the satisfaction of helping a student grow.</p>
                    </div>

                    <div class="faq-item">
                        <h3>How much time does it take?</h3>
                        <p>We estimate that mentoring takes about 4–5 hours per week per student. This includes code
                            reviews, meetings, and email communication.</p>
                    </div>
                </section>

                <!-- Technical Section -->
                <section id="technical" class="scroll-mt-32 lg:scroll-mt-24">
                    <h2><i class="ph ph-code mr-3 text-gsoc-yellow"></i> Technical</h2>

                    <div class="faq-item">
                        <h3>What programming languages are used?</h3>
                        <p>It depends entirely on the organization you choose. Participating projects use everything
                            from Python, C++, and Java to React, Rust, and Go. Check the organization list to find one
                            that matches your skills.</p>
                    </div>

                    <div class="faq-item">
                        <h3>Can I use my own project?</h3>
                        <p>No. You must work on a project belonging to an accepted mentoring organization. However, you
                            can propose a new feature for that organization if they are open to it.</p>
                    </div>
                </section>

            </main>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-white border-t border-gray-200 mt-auto py-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <p class="text-sm text-gray-500">&copy; Slugworks 2025-2026</p>
        </div>
    </footer>

    <!-- Interactive Script -->
    <script>
        // --- Mobile Menu Toggle Logic (Same as other pages) ---
        const mobileTocBtn = document.getElementById('mobile-toc-btn');
        const mobileTocMenu = document.getElementById('mobile-toc-menu');
        const mobileTocIcon = document.getElementById('mobile-toc-icon');
        const currentSectionLabel = document.getElementById('current-section-label');
        const mobileLinks = document.querySelectorAll('.mobile-toc-link');

        function toggleMobileMenu() {
            mobileTocMenu.classList.toggle('hidden');
            if (mobileTocMenu.classList.contains('hidden')) {
                mobileTocIcon.style.transform = 'rotate(0deg)';
            } else {
                mobileTocIcon.style.transform = 'rotate(180deg)';
            }
        }

        mobileTocBtn.addEventListener('click', (e) => {
            e.stopPropagation();
            toggleMobileMenu();
        });

        document.addEventListener('click', (e) => {
            if (!mobileTocMenu.contains(e.target) && !mobileTocBtn.contains(e.target)) {
                if (!mobileTocMenu.classList.contains('hidden')) {
                    toggleMobileMenu();
                }
            }
        });

        // --- Active Section Highlighting ---
        const sections = document.querySelectorAll('section');
        const desktopLinks = document.querySelectorAll('.sidebar-link');

        function updateActiveLink() {
            let current = '';

            sections.forEach(section => {
                const sectionTop = section.offsetTop;
                if (window.scrollY >= (sectionTop - 250)) {
                    current = section.getAttribute('id');
                }
            });

            if (window.scrollY < 200) current = 'general';

            desktopLinks.forEach(link => {
                link.classList.remove('text-gsoc-yellow', 'border-l-4', 'border-gsoc-yellow', 'bg-yellow-50');
                link.classList.add('text-gray-600', 'border-transparent');

                if (link.getAttribute('href').includes(current)) {
                    link.classList.add('text-gsoc-yellow', 'border-l-4', 'border-gsoc-yellow', 'bg-yellow-50');
                    link.classList.remove('text-gray-600', 'border-transparent');
                }
            });

            mobileLinks.forEach(link => {
                link.classList.remove('bg-yellow-50', 'text-gsoc-yellow', 'border-gsoc-yellow');
                link.classList.add('text-gray-700', 'border-transparent');

                if (link.getAttribute('href').includes(current)) {
                    link.classList.add('bg-yellow-50', 'text-gsoc-yellow', 'border-gsoc-yellow');
                    link.classList.remove('text-gray-700', 'border-transparent');
                    currentSectionLabel.textContent = link.textContent;
                }
            });
        }

        window.addEventListener('scroll', updateActiveLink);

        mobileLinks.forEach(link => {
            link.addEventListener('click', () => {
                if (!mobileTocMenu.classList.contains('hidden')) {
                    toggleMobileMenu();
                }
            });
        });

        updateActiveLink();
    </script>
</body>

</html><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Slugworks Summer of Code</title>

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">

    <!-- Phosphor Icons -->
    <script src="https://unpkg.com/@phosphor-icons/web"></script>

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Roboto', 'sans-serif'],
                    },
                    colors: {
                        'gsoc-blue': '#4285F4',
                        'gsoc-red': '#EA4335',
                        'gsoc-yellow': '#FBBC04',
                        'gsoc-green': '#34A853',
                        'gsoc-bg': '#F8F9FA',
                    }
                }
            }
        }
    </script>

    <style>
        .contact-card {
            transition: all 0.3s ease;
        }

        .contact-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
            border-color: #4285F4;
        }
    </style>
</head>

<body class="font-sans text-gray-700 bg-gsoc-bg flex flex-col min-h-screen">

    <!-- Navigation -->
    <nav class="bg-white shadow-sm fixed w-full z-50 h-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <!-- Logo Area -->
                <div class="flex items-center">
                    <a href="../index.php" class="flex-shrink-0 flex items-center gap-2 cursor-pointer group">
                        <div
                            class="w-10 h-10 bg-gsoc-blue rounded-full flex items-center justify-center text-white group-hover:bg-blue-600 transition">
                            <i class="ph ph-arrow-left text-xl"></i>
                        </div>
                        <span class="font-medium text-xl text-gray-800 tracking-tight">Back to <span
                                class="font-bold text-gsoc-blue">Home</span></span>
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Header -->
    <div class="bg-white border-b border-gray-200 pt-24 pb-8 lg:pt-32 lg:pb-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-4xl font-extrabold text-gray-900 tracking-tight sm:text-5xl mb-4">
                Get in Touch
            </h1>
            <p class="text-lg sm:text-xl text-gray-500 max-w-2xl mx-auto">
                Have questions about the program? We're here to help. Choose the best channel for your inquiry below.
            </p>
        </div>
    </div>

    <!-- Main Content -->
    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 flex-grow">

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-4xl mx-auto">

            <!-- Email Support Card -->
            <div
                class="contact-card bg-white p-8 rounded-xl border border-gray-100 flex flex-col items-center text-center">
                <div class="w-16 h-16 bg-blue-100 text-gsoc-blue rounded-full flex items-center justify-center mb-6">
                    <i class="ph ph-envelope-simple text-3xl"></i>
                </div>
                <h2 class="text-2xl font-bold text-gray-900 mb-2">Program Support</h2>
                <p class="text-gray-500 mb-6 flex-grow">
                    For specific questions about your application, stipend issues, or account access.
                </p>
                <a href="mailto:support@slugworks.org" class="text-lg font-medium text-gsoc-blue hover:underline">
                    support@slugworks.org
                </a>
            </div>

            <!-- Community Discord Card -->
            <div
                class="contact-card bg-white p-8 rounded-xl border border-gray-100 flex flex-col items-center text-center">
                <div class="w-16 h-16 bg-purple-100 text-purple-600 rounded-full flex items-center justify-center mb-6">
                    <i class="ph ph-discord-logo text-3xl"></i>
                </div>
                <h2 class="text-2xl font-bold text-gray-900 mb-2">Community Discord</h2>
                <p class="text-gray-500 mb-6 flex-grow">
                    The fastest way to get help from mentors and fellow students. Great for general questions.
                </p>
                <a href="#"
                    class="inline-flex items-center justify-center px-6 py-2 border border-transparent text-base font-medium rounded-md text-white bg-purple-600 hover:bg-purple-700 transition">
                    Join Server
                </a>
            </div>

            <!-- Org Inquiries Card -->
            <div
                class="contact-card bg-white p-8 rounded-xl border border-gray-100 flex flex-col items-center text-center">
                <div
                    class="w-16 h-16 bg-yellow-100 text-gsoc-yellow rounded-full flex items-center justify-center mb-6">
                    <i class="ph ph-buildings text-3xl"></i>
                </div>
                <h2 class="text-2xl font-bold text-gray-900 mb-2">Organization Inquiries</h2>
                <p class="text-gray-500 mb-6 flex-grow">
                    Represent an open source project? Contact us about becoming a mentor organization.
                </p>
                <a href="mailto:partners@slugworks.org" class="text-lg font-medium text-gsoc-yellow hover:underline">
                    partners@slugworks.org
                </a>
            </div>

            <!-- Press & Media Card -->
            <div
                class="contact-card bg-white p-8 rounded-xl border border-gray-100 flex flex-col items-center text-center">
                <div class="w-16 h-16 bg-red-100 text-gsoc-red rounded-full flex items-center justify-center mb-6">
                    <i class="ph ph-newspaper text-3xl"></i>
                </div>
                <h2 class="text-2xl font-bold text-gray-900 mb-2">Press & Media</h2>
                <p class="text-gray-500 mb-6 flex-grow">
                    For press kits, logo usage, and official statements regarding the program.
                </p>
                <a href="mailto:press@slugworks.org" class="text-lg font-medium text-gsoc-red hover:underline">
                    press@slugworks.org
                </a>
            </div>

        </div>

        <!-- IRC / Legacy Info -->
        <div class="max-w-2xl mx-auto mt-12 text-center">
            <p class="text-sm text-gray-400">
                Prefer IRC? You can find us at <span class="font-mono text-gray-600">#slugworks-soc</span> on
                Libera.Chat.
            </p>
        </div>

    </main>

    <!-- Footer -->
    <footer class="bg-white border-t border-gray-200 mt-auto py-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <div class="flex items-center justify-center gap-2 mb-4 text-gray-600">
                <i class="ph ph-code text-xl"></i>
                <span class="font-bold">Slugworks Open Source</span>
            </div>
            <p class="text-sm text-gray-500">&copy; Slugworks 2025-2026</p>
        </div>
    </footer>

</body>

</html><?php
// 1. FORCE SESSION VISIBILITY
session_set_cookie_params(0, '/');
session_start();

include("database.php");

$message = "";
$msg_type = "";
$active_view = "login"; // Default view

// ==========================================
//  STUDENT LOGIC
// ==========================================

// 1. STUDENT REGISTRATION
if (isset($_POST['student_register'])) {
    $active_view = "register";
    $name = filter_input(INPUT_POST, "name", FILTER_SANITIZE_SPECIAL_CHARS);
    $reg_number = filter_input(INPUT_POST, "reg-number", FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
    $password = $_POST['password'];

    if (empty($name) || empty($reg_number) || empty($email) || empty($password)) {
        $message = "Please fill in all fields.";
        $msg_type = "error";
    } else {
        $check = $conn->prepare("SELECT * FROM users WHERE email = ? OR reg_number = ?");
        $check->bind_param("ss", $email, $reg_number);
        $check->execute();
        
        if ($check->get_result()->num_rows > 0) {
            $message = "Student account already exists.";
            $msg_type = "error";
        } else {
            $hash = password_hash($password, PASSWORD_DEFAULT);
            $stmt = $conn->prepare("INSERT INTO users (reg_number, name, email, password) VALUES (?, ?, ?, ?)");
            $stmt->bind_param("ssss", $reg_number, $name, $email, $hash);

            if ($stmt->execute()) {
                $_SESSION['user_id'] = $stmt->insert_id;
                $_SESSION['user_name'] = $name;
                $_SESSION['role'] = 'student';
                echo "<script>setTimeout(function(){ window.location.href = '../index.php'; }, 1500);</script>";
                $message = "Registration Successful!"; $msg_type = "success";
            } else {
                $message = "Error: " . $conn->error; $msg_type = "error";
            }
        }
    }
}

// 2. STUDENT LOGIN
if (isset($_POST['login'])) {
    $active_view = "login";
    $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($row = $result->fetch_assoc()) {
        if (password_verify($password, $row['password'])) {
            $_SESSION['user_id'] = $row['id'];
            $_SESSION['user_name'] = $row['name'];
            $_SESSION['role'] = 'student';
            echo "<script>setTimeout(function(){ window.location.href = '../index.php'; }, 1000);</script>";
            $message = "Login Successful!"; $msg_type = "success";
        } else {
            $message = "Invalid Password."; $msg_type = "error";
        }
    } else {
        $message = "User not found."; $msg_type = "error";
    }
}

// ==========================================
//  MENTOR LOGIC (This is what you asked for)
// ==========================================

// 3. MENTOR REGISTRATION
if (isset($_POST['mentor_register'])) {
    $active_view = "mentor-register";
    $m_name = filter_input(INPUT_POST, "mentor-name", FILTER_SANITIZE_SPECIAL_CHARS);
    $m_email = filter_input(INPUT_POST, "mentor-email", FILTER_SANITIZE_EMAIL);
    $m_pass = $_POST['mentor-password'];

    if (empty($m_name) || empty($m_email) || empty($m_pass)) {
        $message = "Please fill in all fields."; $msg_type = "error";
    } else {
        // Check if mentor exists
        $check = $conn->prepare("SELECT * FROM mentorlogs WHERE memail = ?");
        $check->bind_param("s", $m_email);
        $check->execute();

        if ($check->get_result()->num_rows > 0) {
            $message = "Mentor email already exists."; $msg_type = "error";
        } else {
            $hash = password_hash($m_pass, PASSWORD_DEFAULT);
            $stmt = $conn->prepare("INSERT INTO mentorlogs (mname, memail, mpass) VALUES (?, ?, ?)");
            $stmt->bind_param("sss", $m_name, $m_email, $hash);

            if ($stmt->execute()) {
                $_SESSION['mentor_id'] = $stmt->insert_id;
                $_SESSION['mentor_name'] = $m_name;
                $_SESSION['role'] = 'mentor';
                echo "<script>setTimeout(function(){ window.location.href = '../index.php'; }, 1500);</script>";
                $message = "Mentor Registered Successfully!"; $msg_type = "success";
            } else {
                $message = "Error: " . $conn->error; $msg_type = "error";
            }
        }
    }
}

// 4. MENTOR SIGN IN (Logic Verified)
if (isset($_POST['mentor_login'])) {
    $active_view = "mentor"; // Keeps the mentor form open on error
    
    $email = filter_input(INPUT_POST, "mentor-email", FILTER_SANITIZE_EMAIL);
    $password = $_POST['mentor-password'];
    
    // Check Database
    $stmt = $conn->prepare("SELECT * FROM mentorlogs WHERE memail = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($row = $result->fetch_assoc()) {
        // Verify Password
        if (password_verify($password, $row['mpass'])) {
            // SUCCESS: Set Session
            $_SESSION['mentor_id'] = $row['id'];
            $_SESSION['mentor_name'] = $row['mname'];
            $_SESSION['role'] = 'mentor';
            
            // Redirect
            echo "<script>window.location.href = '../index.php';</script>";
            exit(); 
        } else {
            // ERROR: Wrong Password
            $message = "Invalid Password."; 
            $msg_type = "error";
        }
    } else {
        // ERROR: Email not found
        $message = "Mentor account not found."; 
        $msg_type = "error";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In - Slugworks</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: { sans: ['Roboto', 'sans-serif'] },
                    colors: { 'gsoc-blue': '#4285F4', 'gsoc-red': '#EA4335', 'gsoc-yellow': '#FBBC04', 'gsoc-green': '#34A853', }
                }
            }
        }
    </script>
    <style>
        .form-container { transition: opacity 0.3s ease-in-out, transform 0.3s ease-in-out; }
        .hidden-form { display: none; opacity: 0; transform: translateX(20px); }
        .shape-blob { position: absolute; filter: blur(50px); z-index: 0; opacity: 0.6; animation: float 10s infinite ease-in-out; }
        @keyframes float { 0% { transform: translate(0, 0); } 50% { transform: translate(20px, 20px); } 100% { transform: translate(0, 0); } }
    </style>
</head>
<body class="font-sans text-gray-700 bg-white h-screen overflow-hidden flex">

    <?php if(!empty($message)): ?>
    <div class="fixed top-5 right-5 z-50 px-6 py-4 rounded-lg shadow-xl text-white <?php echo $msg_type == 'success' ? 'bg-gsoc-green' : 'bg-gsoc-red'; ?> animate-bounce">
        <?php echo $message; ?>
    </div>
    <?php endif; ?>

    <div class="hidden lg:flex lg:w-1/2 relative bg-gray-50 items-center justify-center overflow-hidden">
        <div class="shape-blob bg-blue-200 w-64 h-64 rounded-full top-20 left-20 mix-blend-multiply"></div>
        <div class="shape-blob bg-yellow-200 w-64 h-64 rounded-full bottom-20 right-20 mix-blend-multiply animation-delay-2000"></div>
        <div class="relative z-10 text-center px-12">
            <h2 class="text-4xl font-bold text-gray-900 mb-4">Slugworks <br> SOE Summer of Code</h2>
            <p class="text-lg text-gray-500">Join the community of student developers and open source mentors.</p>
        </div>
    </div>

    <div class="w-full lg:w-1/2 flex flex-col justify-center px-8 sm:px-12 md:px-24 overflow-y-auto">
        <div class="absolute top-8 right-8">
            <a href="../index.php" class="text-sm font-medium text-gray-500 hover:text-gray-900 flex items-center gap-1">Back to Home <i class="ph ph-arrow-right"></i></a>
        </div>

        <div class="max-w-md w-full mx-auto py-10">

            <div id="login-view" class="form-container <?php echo ($active_view != 'login') ? 'hidden-form' : ''; ?>">
                <div class="mb-8"><span class="px-2 py-1 text-xs font-semibold text-gsoc-blue bg-blue-50 rounded-md">Student Portal</span><h1 class="text-3xl font-extrabold text-gray-900">Student Sign In</h1></div>
                <form method="POST" class="space-y-6">
                    <input type="email" name="email" placeholder="Email" required class="w-full p-3 border rounded-lg">
                    <input type="password" name="password" placeholder="Password" required class="w-full p-3 border rounded-lg">
                    <button type="submit" name="login" class="w-full py-3 bg-gsoc-blue text-white rounded-lg font-bold hover:bg-blue-600">Log In</button>
                </form>
                <p class="mt-8 text-center text-sm">Don't have an account? <button onclick="toggleView('register')" class="text-gsoc-blue font-bold">Register</button></p>
                <div class="mt-6 text-center text-sm">
                    <button onclick="toggleView('mentor')" class="text-gray-500 hover:text-gsoc-green">Mentor Sign In</button>
                </div>
            </div>

            <div id="register-view" class="form-container <?php echo ($active_view != 'register') ? 'hidden-form' : ''; ?>">
                <div class="mb-6"><span class="px-2 py-1 text-xs font-semibold text-gsoc-blue bg-blue-50 rounded-md">Registration</span><h1 class="text-3xl font-extrabold text-gray-900">Create Account</h1></div>
                <form method="POST" class="space-y-4">
                    <input type="text" name="name" placeholder="Full Name" required class="w-full p-3 border rounded-lg">
                    <input type="text" name="reg-number" placeholder="Register Number" required class="w-full p-3 border rounded-lg">
                    <input type="email" name="email" placeholder="Email" required class="w-full p-3 border rounded-lg">
                    <input type="password" name="password" placeholder="Password" required class="w-full p-3 border rounded-lg">
                    <button type="submit" name="student_register" class="w-full py-3 bg-gsoc-green text-white rounded-lg font-bold hover:bg-green-600">Register</button>
                </form>
                <p class="mt-8 text-center text-sm">Already have an account? <button onclick="toggleView('login')" class="text-gsoc-blue font-bold">Sign In</button></p>
            </div>

            <div id="mentor-view" class="form-container <?php echo ($active_view != 'mentor') ? 'hidden-form' : ''; ?>">
                <div class="mb-8"><span class="px-2 py-1 text-xs font-semibold text-gsoc-green bg-green-50 rounded-md">Mentor Portal</span><h1 class="text-3xl font-extrabold text-gray-900">Mentor Sign In</h1></div>
                <form method="POST" class="space-y-6">
                    <input type="email" name="mentor-email" placeholder="Mentor Email" required class="w-full p-3 border rounded-lg focus:ring-gsoc-green">
                    <input type="password" name="mentor-password" placeholder="Password" required class="w-full p-3 border rounded-lg">
                    <button type="submit" name="mentor_login" class="w-full py-3 bg-gsoc-green text-white rounded-lg font-bold hover:bg-green-600">Mentor Sign In</button>
                </form>
                <p class="mt-6 text-center text-sm">
                    New Mentor? <button onclick="toggleView('mentor-register')" class="text-gsoc-green font-bold">Create Account</button>
                </p>
                <p class="mt-2 text-center text-sm"><button onclick="toggleView('login')" class="text-gsoc-blue font-bold">Back to Student Login</button></p>
            </div>

            <div id="mentor-register-view" class="form-container <?php echo ($active_view != 'mentor-register') ? 'hidden-form' : ''; ?>">
                <div class="mb-8"><span class="px-2 py-1 text-xs font-semibold text-gsoc-green bg-green-50 rounded-md">Mentor Portal</span><h1 class="text-3xl font-extrabold text-gray-900">Mentor Registration</h1></div>
                <form method="POST" class="space-y-6">
                    <input type="text" name="mentor-name" placeholder="Full Name" required class="w-full p-3 border rounded-lg focus:ring-gsoc-green">
                    <input type="email" name="mentor-email" placeholder="Mentor Email" required class="w-full p-3 border rounded-lg focus:ring-gsoc-green">
                    <input type="password" name="mentor-password" placeholder="Password" required class="w-full p-3 border rounded-lg">
                    <button type="submit" name="mentor_register" class="w-full py-3 bg-gsoc-green text-white rounded-lg font-bold hover:bg-green-600">Register as Mentor</button>
                </form>
                <p class="mt-6 text-center text-sm">
                    Already registered? <button onclick="toggleView('mentor')" class="text-gsoc-green font-bold">Sign In</button>
                </p>
            </div>

        </div>
    </div>

    <script>
        function toggleView(viewId) {
            // Hide all views first
            ['login-view', 'register-view', 'mentor-view', 'mentor-register-view'].forEach(id => {
                const el = document.getElementById(id);
                if(el) {
                    el.classList.add('hidden-form');
                    el.style.display = 'none';
                }
            });
            // Show target view
            const target = document.getElementById(viewId + '-view');
            if(target) {
                target.style.display = 'block';
                setTimeout(() => { target.classList.remove('hidden-form'); }, 50);
            }
        }
        
        document.addEventListener("DOMContentLoaded", () => {
             const active = "<?php echo $active_view; ?>";
             toggleView(active);
        });
    </script>
</body>
</html><?php
session_set_cookie_params(0, '/');
session_start();


$_SESSION = array();

session_destroy();

header("Location: ../index.php");
exit();
?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mentor Guide - Summer of Code</title>

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">

    <!-- Phosphor Icons -->
    <script src="https://unpkg.com/@phosphor-icons/web"></script>

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Roboto', 'sans-serif'],
                    },
                    colors: {
                        'gsoc-blue': '#4285F4',
                        'gsoc-red': '#EA4335',
                        'gsoc-yellow': '#FBBC04',
                        'gsoc-green': '#34A853',
                        'gsoc-bg': '#F8F9FA',
                    }
                }
            }
        }
    </script>

    <style>
        html {
            scroll-behavior: smooth;
            scroll-padding-top: 140px;
            /* Increased offset for mobile headers */
        }

        @media (min-width: 1024px) {
            html {
                scroll-padding-top: 100px;
                /* Standard offset for desktop */
            }
        }

        /* Sticky Sidebar logic */
        .sidebar-sticky {
            position: -webkit-sticky;
            position: sticky;
            top: 6rem;
            /* Height of navbar + gap */
            max-height: calc(100vh - 6rem);
            overflow-y: auto;
        }

        /* Active link styling for sidebar */
        .sidebar-link:hover {
            color: #34A853;
            /* Changed to Green for Mentor distinction */
            border-left-color: #34A853;
            background-color: #f0fdf4;
            /* Green-50 */
        }

        /* Typography for documentation content */
        .prose h2 {
            font-size: 1.5rem;
            font-weight: 700;
            color: #1f2937;
            margin-top: 2rem;
            margin-bottom: 1rem;
            padding-bottom: 0.5rem;
            border-bottom: 1px solid #e5e7eb;
        }

        @media (min-width: 768px) {
            .prose h2 {
                font-size: 1.875rem;
                margin-top: 2.5rem;
            }
        }

        .prose h3 {
            font-size: 1.25rem;
            font-weight: 600;
            color: #374151;
            margin-top: 1.5rem;
            margin-bottom: 0.75rem;
        }

        @media (min-width: 768px) {
            .prose h3 {
                font-size: 1.5rem;
                margin-top: 2rem;
            }
        }

        .prose p {
            margin-bottom: 1.25rem;
            line-height: 1.75;
            color: #4b5563;
        }

        .prose ul {
            list-style-type: disc;
            padding-left: 1.5rem;
            margin-bottom: 1.25rem;
            color: #4b5563;
        }

        .prose li {
            margin-bottom: 0.5rem;
        }

        .prose a {
            color: #34A853;
            /* Green links for Mentor guide */
            text-decoration: underline;
        }

        .prose a:hover {
            color: #15803d;
        }
    </style>
</head>

<body class="font-sans text-gray-700 bg-gsoc-bg overflow-x-hidden flex flex-col min-h-screen">

    <!-- Navigation (Fixed) -->
    <nav class="bg-white shadow-sm fixed w-full z-50 h-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <!-- Logo Area -->
                <div class="flex items-center">
                    <a href="../index.php" class="flex-shrink-0 flex items-center gap-2 cursor-pointer group">
                        <div
                            class="w-10 h-10 bg-gsoc-green rounded-full flex items-center justify-center text-white group-hover:bg-green-600 transition">
                            <i class="ph ph-arrow-left text-xl"></i>
                        </div>
                        <span class="font-medium text-xl text-gray-800 tracking-tight">Back to <span
                                class="font-bold text-gsoc-green">Home</span></span>
                    </a>
                </div>

                <!-- Right Side Actions -->
                <div class="flex items-center space-x-4">
                    <span class="hidden md:block text-sm text-gray-500">Mentoring help? <a href="#"
                            class="text-gsoc-green hover:underline">Contact Admins</a></span>
                </div>
            </div>
        </div>
    </nav>

    <!-- Mobile Table of Contents (Sticky just below Nav) -->
    <div class="lg:hidden bg-white border-b border-gray-200 sticky top-16 z-40 transition-shadow"
        id="mobile-toc-container">
        <button id="mobile-toc-btn"
            class="w-full flex items-center justify-between px-4 py-3 text-sm font-medium text-gray-700 bg-gray-50 hover:bg-gray-100 focus:outline-none transition-colors">
            <span class="flex items-center text-gsoc-green font-bold"><i class="ph ph-list mr-2 text-lg"></i> Jump to
                Section</span>
            <div class="flex items-center text-gray-400">
                <span id="current-section-label" class="mr-2 font-normal text-gray-500">Introduction</span>
                <i class="ph ph-caret-down transition-transform duration-200" id="mobile-toc-icon"></i>
            </div>
        </button>
        <!-- Dropdown Menu -->
        <div id="mobile-toc-menu"
            class="hidden bg-white border-t border-gray-100 shadow-xl max-h-[60vh] overflow-y-auto absolute w-full left-0 z-50">
            <nav class="p-2 space-y-1">
                <a href="#introduction"
                    class="mobile-toc-link block px-3 py-3 rounded-md text-sm font-medium text-gray-700 hover:bg-green-50 hover:text-gsoc-green border-l-4 border-transparent">Introduction</a>
                <a href="#eligibility"
                    class="mobile-toc-link block px-3 py-3 rounded-md text-sm font-medium text-gray-700 hover:bg-green-50 hover:text-gsoc-green border-l-4 border-transparent">Eligibility</a>
                <a href="#joining-org"
                    class="mobile-toc-link block px-3 py-3 rounded-md text-sm font-medium text-gray-700 hover:bg-green-50 hover:text-gsoc-green border-l-4 border-transparent">Joining
                    an Org</a>
                <a href="#responsibilities"
                    class="mobile-toc-link block px-3 py-3 rounded-md text-sm font-medium text-gray-700 hover:bg-green-50 hover:text-gsoc-green border-l-4 border-transparent">Responsibilities</a>
                <a href="#grading"
                    class="mobile-toc-link block px-3 py-3 rounded-md text-sm font-medium text-gray-700 hover:bg-green-50 hover:text-gsoc-green border-l-4 border-transparent">Grading
                    Students</a>
                <a href="#code-of-conduct"
                    class="mobile-toc-link block px-3 py-3 rounded-md text-sm font-medium text-gray-700 hover:bg-green-50 hover:text-gsoc-green border-l-4 border-transparent">Code
                    of Conduct</a>
            </nav>
        </div>
    </div>

    <!-- Header / Breadcrumb Area -->
    <div class="bg-white border-b border-gray-200 pt-24 pb-8 lg:pt-24 lg:pb-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center md:text-left">
                <div class="flex items-center justify-center md:justify-start gap-2 text-sm text-gray-500 mb-4">
                    <a href="../index.html" class="hover:text-gsoc-green">Home</a>
                    <i class="ph ph-caret-right text-xs"></i>
                    <span class="text-gray-900 font-medium">Mentor Guide</span>
                </div>
                <h1 class="text-3xl font-extrabold text-gray-900 tracking-tight sm:text-5xl mb-4">
                    Mentor Guide
                </h1>
                <p class="text-lg sm:text-xl text-gray-500 max-w-3xl mx-auto md:mx-0">
                    A comprehensive guide for mentors: onboarding, student communication, and evaluation criteria.
                </p>
            </div>
        </div>
    </div>

    <!-- Main Content Area -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8 lg:py-12">
        <div class="lg:grid lg:grid-cols-12 lg:gap-8">

            <!-- Sidebar Navigation (Desktop Only) -->
            <aside class="hidden lg:block lg:col-span-3">
                <nav class="sidebar-sticky space-y-1" aria-label="Sidebar">
                    <a href="#introduction"
                        class="sidebar-link group flex items-center px-3 py-2 text-sm font-medium text-gsoc-green border-l-4 border-gsoc-green bg-green-50">
                        <span class="truncate">Introduction</span>
                    </a>
                    <a href="#eligibility"
                        class="sidebar-link group flex items-center px-3 py-2 text-sm font-medium text-gray-600 border-l-4 border-transparent hover:bg-green-50 hover:text-gray-900">
                        <span class="truncate">Eligibility</span>
                    </a>
                    <a href="#joining-org"
                        class="sidebar-link group flex items-center px-3 py-2 text-sm font-medium text-gray-600 border-l-4 border-transparent hover:bg-green-50 hover:text-gray-900">
                        <span class="truncate">Joining an Org</span>
                    </a>
                    <a href="#responsibilities"
                        class="sidebar-link group flex items-center px-3 py-2 text-sm font-medium text-gray-600 border-l-4 border-transparent hover:bg-green-50 hover:text-gray-900">
                        <span class="truncate">Responsibilities</span>
                    </a>
                    <a href="#grading"
                        class="sidebar-link group flex items-center px-3 py-2 text-sm font-medium text-gray-600 border-l-4 border-transparent hover:bg-green-50 hover:text-gray-900">
                        <span class="truncate">Grading Students</span>
                    </a>
                    <a href="#code-of-conduct"
                        class="sidebar-link group flex items-center px-3 py-2 text-sm font-medium text-gray-600 border-l-4 border-transparent hover:bg-green-50 hover:text-gray-900">
                        <span class="truncate">Code of Conduct</span>
                    </a>
                </nav>
            </aside>

            <!-- Content Column -->
            <main
                class="lg:col-span-9 prose max-w-none bg-white p-6 sm:p-8 rounded-xl shadow-sm border border-gray-100">

                <!-- Introduction -->
                <section id="introduction" class="scroll-mt-32 lg:scroll-mt-24">
                    <div class="flex flex-col sm:flex-row sm:items-center gap-3 mb-6">
                        <div
                            class="w-12 h-12 flex items-center justify-center bg-green-100 rounded-lg text-gsoc-green flex-shrink-0">
                            <i class="ph ph-chalkboard-teacher text-2xl"></i>
                        </div>
                        <h2 class="!mt-0 !mb-0 !border-0 text-2xl sm:text-3xl">Welcome Mentors</h2>
                    </div>
                    <p>
                        Thank you for your interest in mentoring! Mentors are the heart of this program. You will guide
                        students, review their code, and welcome them into the open-source community. This guide covers
                        what you need to know to be effective and successful.
                    </p>
                    <div class="bg-green-50 border-l-4 border-gsoc-green p-4 my-6 rounded-r-md">
                        <div class="flex">
                            <div class="flex-shrink-0">
                                <i class="ph ph-info text-gsoc-green text-xl"></i>
                            </div>
                            <div class="ml-3">
                                <p class="text-sm text-green-700 font-medium !mb-0">
                                    <strong>Tip:</strong> Mentoring takes about 4-5 hours per week per student. Please
                                    ensure you have availability before committing.
                                </p>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Eligibility -->
                <section id="eligibility" class="scroll-mt-32 lg:scroll-mt-24">
                    <h2>Mentor Eligibility</h2>
                    <p>To participate as a mentor, you generally must:</p>
                    <ul class="space-y-2">
                        <li><i class="ph ph-check-circle text-gsoc-green mr-2"></i> Be at least 18 years of age.</li>
                        <li><i class="ph ph-check-circle text-gsoc-green mr-2"></i> Be an active contributor to the open
                            source project you wish to mentor for.</li>
                        <li><i class="ph ph-check-circle text-gsoc-green mr-2"></i> Not be a student participant in the
                            current program year.</li>
                        <li><i class="ph ph-check-circle text-gsoc-green mr-2"></i> Have authorization from the
                            Organization Administrator to be a mentor.</li>
                    </ul>
                </section>

                <!-- Joining an Org -->
                <section id="joining-org" class="scroll-mt-32 lg:scroll-mt-24">
                    <h2>Joining an Organization</h2>
                    <p>
                        Mentors must be invited by an accepted Organization.
                    </p>
                    <h3>If you are already part of a project:</h3>
                    <p>Reach out to your Organization Administrator (Org Admin) and ask them to send you an invite email
                        via the program dashboard.</p>

                    <h3>If you want to mentor a new project:</h3>
                    <p>You cannot mentor "independently." You must find an organization that is applying to the program
                        and ask to join their mentor team during the application phase.</p>
                </section>

                <!-- Responsibilities -->
                <section id="responsibilities" class="scroll-mt-32 lg:scroll-mt-24">
                    <h2>Mentor Responsibilities</h2>
                    <p>Your goal is to help the student succeed, not to do the work for them.</p>

                    <div class="grid md:grid-cols-2 gap-6 my-6 not-prose">
                        <div class="bg-gray-50 p-5 rounded-lg border border-gray-200">
                            <h4 class="font-bold text-gray-900 mb-2">Key Tasks</h4>
                            <ul class="space-y-2 text-sm text-gray-600">
                                <li class="flex items-start"><i class="ph ph-check text-gsoc-green mr-2 mt-0.5"></i>
                                    Review student proposals.</li>
                                <li class="flex items-start"><i class="ph ph-check text-gsoc-green mr-2 mt-0.5"></i>
                                    Conduct code reviews regularly.</li>
                                <li class="flex items-start"><i class="ph ph-check text-gsoc-green mr-2 mt-0.5"></i>
                                    Answer questions about the codebase.</li>
                                <li class="flex items-start"><i class="ph ph-check text-gsoc-green mr-2 mt-0.5"></i>
                                    Complete evaluations on time.</li>
                            </ul>
                        </div>
                        <div class="bg-gray-50 p-5 rounded-lg border border-gray-200">
                            <h4 class="font-bold text-gray-900 mb-2">What to Avoid</h4>
                            <ul class="space-y-2 text-sm text-gray-600">
                                <li class="flex items-start"><i class="ph ph-x text-gsoc-red mr-2 mt-0.5"></i> Writing
                                    code for the student.</li>
                                <li class="flex items-start"><i class="ph ph-x text-gsoc-red mr-2 mt-0.5"></i>
                                    Disappearing for weeks at a time.</li>
                                <li class="flex items-start"><i class="ph ph-x text-gsoc-red mr-2 mt-0.5"></i> Being
                                    harsh in code reviews.</li>
                            </ul>
                        </div>
                    </div>

                    <h3>Communication</h3>
                    <p>Establish a communication schedule early (e.g., weekly video check-ins). Ensure the student feels
                        comfortable asking "stupid" questions.</p>
                </section>

                <!-- Grading -->
                <section id="grading" class="scroll-mt-32 lg:scroll-mt-24">
                    <h2>Grading Students</h2>
                    <p>You will complete two formal evaluations. These determine if the student gets paid.</p>
                    <div class="relative pl-8 border-l-2 border-gray-200 space-y-8 my-8">
                        <div class="relative">
                            <span
                                class="absolute -left-[41px] top-0 bg-gsoc-yellow text-white w-8 h-8 rounded-full flex items-center justify-center font-bold text-sm">1</span>
                            <h4 class="text-lg font-bold text-gray-900">Midterm Evaluation</h4>
                            <p class="text-sm text-gray-500 mt-1">Is the student communicating? Are they making steady
                                progress? If they are failing, have you given them clear feedback?</p>
                        </div>
                        <div class="relative">
                            <span
                                class="absolute -left-[41px] top-0 bg-gsoc-green text-white w-8 h-8 rounded-full flex items-center justify-center font-bold text-sm">2</span>
                            <h4 class="text-lg font-bold text-gray-900">Final Evaluation</h4>
                            <p class="text-sm text-gray-500 mt-1">Did they complete the major goals of their proposal?
                                Is the code merged or merge-ready? Did they leave the project better than they found it?
                            </p>
                        </div>
                    </div>
                </section>

                <!-- Code of Conduct -->
                <section id="code-of-conduct" class="scroll-mt-32 lg:scroll-mt-24">
                    <h2>Code of Conduct</h2>
                    <p>Mentors are held to a high standard. You are representing your organization and the open source
                        community.</p>
                    <p>
                        Please read our full <a href="#">Code of Conduct</a>. Harassment or exclusion of any kind will
                        result in immediate removal from the program.
                    </p>
                </section>

            </main>
        </div>
    </div>

    <!-- Footer (Simplified) -->
    <footer class="bg-white border-t border-gray-200 mt-auto py-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <p class="text-sm text-gray-500">&copy; Slugworks 2025-2026</p>
        </div>
    </footer>

    <!-- Interactive Script -->
    <script>
        // --- Mobile Menu Toggle Logic ---
        const mobileTocBtn = document.getElementById('mobile-toc-btn');
        const mobileTocMenu = document.getElementById('mobile-toc-menu');
        const mobileTocIcon = document.getElementById('mobile-toc-icon');
        const currentSectionLabel = document.getElementById('current-section-label');
        const mobileLinks = document.querySelectorAll('.mobile-toc-link');

        function toggleMobileMenu() {
            mobileTocMenu.classList.toggle('hidden');
            // Rotate icon
            if (mobileTocMenu.classList.contains('hidden')) {
                mobileTocIcon.style.transform = 'rotate(0deg)';
            } else {
                mobileTocIcon.style.transform = 'rotate(180deg)';
            }
        }

        mobileTocBtn.addEventListener('click', (e) => {
            e.stopPropagation();
            toggleMobileMenu();
        });

        // Close menu when clicking outside
        document.addEventListener('click', (e) => {
            if (!mobileTocMenu.contains(e.target) && !mobileTocBtn.contains(e.target)) {
                if (!mobileTocMenu.classList.contains('hidden')) {
                    toggleMobileMenu();
                }
            }
        });

        // --- Active Section Highlighting (Desktop & Mobile) ---
        const sections = document.querySelectorAll('section');
        const desktopLinks = document.querySelectorAll('.sidebar-link');

        function updateActiveLink() {
            let current = '';

            // Determine which section is currently active
            sections.forEach(section => {
                const sectionTop = section.offsetTop;
                // Offset calculation to account for sticky headers
                if (window.scrollY >= (sectionTop - 250)) {
                    current = section.getAttribute('id');
                }
            });

            // If we are at the very top, default to first section
            if (window.scrollY < 200) current = 'introduction';

            // Update Desktop Sidebar
            desktopLinks.forEach(link => {
                // Remove active styles (using green for mentors)
                link.classList.remove('text-gsoc-green', 'border-l-4', 'border-gsoc-green', 'bg-green-50');
                link.classList.add('text-gray-600', 'border-transparent');

                if (link.getAttribute('href').includes(current)) {
                    link.classList.add('text-gsoc-green', 'border-l-4', 'border-gsoc-green', 'bg-green-50');
                    link.classList.remove('text-gray-600', 'border-transparent');
                }
            });

            // Update Mobile Menu Styles & Label
            mobileLinks.forEach(link => {
                // Reset styles
                link.classList.remove('bg-green-50', 'text-gsoc-green', 'border-gsoc-green');
                link.classList.add('text-gray-700', 'border-transparent');

                if (link.getAttribute('href').includes(current)) {
                    link.classList.add('bg-green-50', 'text-gsoc-green', 'border-gsoc-green');
                    link.classList.remove('text-gray-700', 'border-transparent');

                    // Update the label in the closed mobile bar
                    currentSectionLabel.textContent = link.textContent;
                }
            });
        }

        window.addEventListener('scroll', updateActiveLink);

        // Mobile Link Click Handler (Closes menu)
        mobileLinks.forEach(link => {
            link.addEventListener('click', () => {
                if (!mobileTocMenu.classList.contains('hidden')) {
                    toggleMobileMenu();
                }
            });
        });

        // Run once on load
        updateActiveLink();
    </script>
</body>

</html><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Privacy & Terms - Slugworks Summer of Code</title>

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">

    <!-- Phosphor Icons -->
    <script src="https://unpkg.com/@phosphor-icons/web"></script>

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Roboto', 'sans-serif'],
                    },
                    colors: {
                        'gsoc-blue': '#4285F4',
                        'gsoc-red': '#EA4335',
                        'gsoc-yellow': '#FBBC04',
                        'gsoc-green': '#34A853',
                        'gsoc-bg': '#F8F9FA',
                    }
                }
            }
        }
    </script>

    <style>
        html {
            scroll-behavior: smooth;
            scroll-padding-top: 140px;
        }

        @media (min-width: 1024px) {
            html {
                scroll-padding-top: 100px;
            }
        }

        .sidebar-sticky {
            position: -webkit-sticky;
            position: sticky;
            top: 6rem;
            max-height: calc(100vh - 6rem);
            overflow-y: auto;
        }

        /* Legal Page specific styling (Neutral Theme) */
        .sidebar-link:hover {
            color: #1f2937;
            /* Dark Gray */
            border-left-color: #1f2937;
            background-color: #f3f4f6;
            /* Gray-100 */
        }

        .prose h2 {
            font-size: 1.5rem;
            font-weight: 700;
            color: #1f2937;
            margin-top: 2.5rem;
            margin-bottom: 1rem;
            padding-bottom: 0.5rem;
            border-bottom: 1px solid #e5e7eb;
        }

        .prose h3 {
            font-size: 1.15rem;
            font-weight: 600;
            color: #374151;
            margin-top: 1.5rem;
            margin-bottom: 0.75rem;
        }

        .prose p {
            color: #4b5563;
            line-height: 1.75;
            margin-bottom: 1.25rem;
            font-size: 0.95rem;
        }

        .prose ul {
            list-style-type: disc;
            padding-left: 1.5rem;
            margin-bottom: 1.5rem;
            color: #4b5563;
        }

        .section-divider {
            border-top: 4px solid #f3f4f6;
            margin: 4rem 0;
        }
    </style>
</head>

<body class="font-sans text-gray-700 bg-gsoc-bg overflow-x-hidden flex flex-col min-h-screen">

    <!-- Navigation -->
    <nav class="bg-white shadow-sm fixed w-full z-50 h-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <!-- Logo Area -->
                <div class="flex items-center">
                    <a href="../index.php" class="flex-shrink-0 flex items-center gap-2 cursor-pointer group">
                        <div
                            class="w-10 h-10 bg-gray-600 rounded-full flex items-center justify-center text-white group-hover:bg-gray-800 transition">
                            <i class="ph ph-arrow-left text-xl"></i>
                        </div>
                        <span class="font-medium text-xl text-gray-800 tracking-tight">Back to <span
                                class="font-bold text-gray-600">Home</span></span>
                    </a>
                </div>

                <!-- Right Side Actions -->
                <div class="flex items-center space-x-4">
                    <span class="hidden md:block text-sm text-gray-500">Last Updated: January 15, 2025</span>
                </div>
            </div>
        </div>
    </nav>

    <!-- Mobile Table of Contents -->
    <div class="lg:hidden bg-white border-b border-gray-200 sticky top-16 z-40 transition-shadow"
        id="mobile-toc-container">
        <button id="mobile-toc-btn"
            class="w-full flex items-center justify-between px-4 py-3 text-sm font-medium text-gray-700 bg-gray-50 hover:bg-gray-100 focus:outline-none transition-colors">
            <span class="flex items-center text-gray-800 font-bold"><i class="ph ph-list mr-2 text-lg"></i> Jump to
                Section</span>
            <div class="flex items-center text-gray-400">
                <span id="current-section-label" class="mr-2 font-normal text-gray-500">Privacy Policy</span>
                <i class="ph ph-caret-down transition-transform duration-200" id="mobile-toc-icon"></i>
            </div>
        </button>
        <div id="mobile-toc-menu"
            class="hidden bg-white border-t border-gray-100 shadow-xl max-h-[60vh] overflow-y-auto absolute w-full left-0 z-50">
            <nav class="p-2 space-y-1">
                <div class="px-3 py-2 text-xs font-semibold text-gray-400 uppercase tracking-wider">Privacy Policy</div>
                <a href="#privacy-intro"
                    class="mobile-toc-link block px-3 py-2 rounded-md text-sm font-medium text-gray-700 hover:bg-gray-100 border-l-4 border-transparent">Introduction</a>
                <a href="#data-collection"
                    class="mobile-toc-link block px-3 py-2 rounded-md text-sm font-medium text-gray-700 hover:bg-gray-100 border-l-4 border-transparent">Data
                    We Collect</a>
                <a href="#data-usage"
                    class="mobile-toc-link block px-3 py-2 rounded-md text-sm font-medium text-gray-700 hover:bg-gray-100 border-l-4 border-transparent">How
                    We Use Data</a>

                <div class="px-3 py-2 mt-2 text-xs font-semibold text-gray-400 uppercase tracking-wider">Terms of
                    Service</div>
                <a href="#terms-intro"
                    class="mobile-toc-link block px-3 py-2 rounded-md text-sm font-medium text-gray-700 hover:bg-gray-100 border-l-4 border-transparent">Acceptance</a>
                <a href="#user-conduct"
                    class="mobile-toc-link block px-3 py-2 rounded-md text-sm font-medium text-gray-700 hover:bg-gray-100 border-l-4 border-transparent">User
                    Conduct</a>
                <a href="#ip-rights"
                    class="mobile-toc-link block px-3 py-2 rounded-md text-sm font-medium text-gray-700 hover:bg-gray-100 border-l-4 border-transparent">Intellectual
                    Property</a>
            </nav>
        </div>
    </div>

    <!-- Header -->
    <div class="bg-white border-b border-gray-200 pt-24 pb-8 lg:pt-24 lg:pb-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center md:text-left">
                <div class="flex items-center justify-center md:justify-start gap-2 text-sm text-gray-500 mb-4">
                    <a href="../index.php" class="hover:text-gray-900">Home</a>
                    <i class="ph ph-caret-right text-xs"></i>
                    <span class="text-gray-900 font-medium">Privacy & Terms</span>
                </div>
                <h1 class="text-3xl font-extrabold text-gray-900 tracking-tight sm:text-5xl mb-4">
                    Legal Information
                </h1>
                <p class="text-lg sm:text-xl text-gray-500 max-w-3xl mx-auto md:mx-0">
                    Our commitment to your privacy and the rules for participating in our program.
                </p>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8 lg:py-12">
        <div class="lg:grid lg:grid-cols-12 lg:gap-8">

            <!-- Sidebar (Desktop) -->
            <aside class="hidden lg:block lg:col-span-3">
                <nav class="sidebar-sticky space-y-1" aria-label="Sidebar">
                    <div class="px-3 mb-2 text-xs font-semibold text-gray-400 uppercase tracking-wider">Privacy Policy
                    </div>
                    <a href="#privacy-intro"
                        class="sidebar-link group flex items-center px-3 py-2 text-sm font-medium text-gray-900 border-l-4 border-gray-900 bg-gray-100">
                        <span class="truncate">Introduction</span>
                    </a>
                    <a href="#data-collection"
                        class="sidebar-link group flex items-center px-3 py-2 text-sm font-medium text-gray-600 border-l-4 border-transparent hover:bg-gray-50 hover:text-gray-900">
                        <span class="truncate">Data We Collect</span>
                    </a>
                    <a href="#data-usage"
                        class="sidebar-link group flex items-center px-3 py-2 text-sm font-medium text-gray-600 border-l-4 border-transparent hover:bg-gray-50 hover:text-gray-900">
                        <span class="truncate">How We Use Data</span>
                    </a>

                    <div class="px-3 mt-6 mb-2 text-xs font-semibold text-gray-400 uppercase tracking-wider">Terms of
                        Service</div>
                    <a href="#terms-intro"
                        class="sidebar-link group flex items-center px-3 py-2 text-sm font-medium text-gray-600 border-l-4 border-transparent hover:bg-gray-50 hover:text-gray-900">
                        <span class="truncate">Acceptance</span>
                    </a>
                    <a href="#user-conduct"
                        class="sidebar-link group flex items-center px-3 py-2 text-sm font-medium text-gray-600 border-l-4 border-transparent hover:bg-gray-50 hover:text-gray-900">
                        <span class="truncate">User Conduct</span>
                    </a>
                    <a href="#ip-rights"
                        class="sidebar-link group flex items-center px-3 py-2 text-sm font-medium text-gray-600 border-l-4 border-transparent hover:bg-gray-50 hover:text-gray-900">
                        <span class="truncate">Intellectual Property</span>
                    </a>
                </nav>
            </aside>

            <!-- Content -->
            <main class="lg:col-span-9 prose max-w-none bg-white p-8 rounded-xl shadow-sm border border-gray-100">

                <!-- PRIVACY POLICY -->
                <div class="mb-8">
                    <span
                        class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800 mb-4">
                        Privacy Policy
                    </span>
                    <h1 class="text-3xl font-bold text-gray-900 mb-6 border-none pt-0 mt-0">Slugworks Privacy Policy
                    </h1>
                </div>

                <section id="privacy-intro" class="scroll-mt-32 lg:scroll-mt-24">
                    <p>
                        At Slugworks, we respect your privacy and are committed to protecting the personal information
                        you share with us. This Privacy Policy outlines our practices regarding the collection, use, and
                        disclosure of your information through the Summer of Code program.
                    </p>
                </section>

                <section id="data-collection" class="scroll-mt-32 lg:scroll-mt-24">
                    <h2>Data We Collect</h2>
                    <p>We collect information that you voluntarily provide to us when you register for an account,
                        submit a proposal, or communicate with us.</p>
                    <ul>
                        <li><strong>Personal Identity:</strong> Name, email address, physical address, and phone number.
                        </li>
                        <li><strong>Academic Information:</strong> Proof of enrollment, university name, and graduation
                            date.</li>
                        <li><strong>Technical Profile:</strong> GitHub/GitLab username, coding samples, and project
                            proposals.</li>
                        <li><strong>Payment Data:</strong> Tax identification numbers and banking details (processed
                            securely via Payoneer).</li>
                    </ul>
                </section>

                <section id="data-usage" class="scroll-mt-32 lg:scroll-mt-24">
                    <h2>How We Use Data</h2>
                    <p>Your data is used solely for the administration of the Summer of Code program. Specifically, we
                        use it to:</p>
                    <ul>
                        <li>Verify your eligibility to participate in the program.</li>
                        <li>Facilitate communication between students, mentors, and organization administrators.</li>
                        <li>Process stipend payments and tax forms.</li>
                        <li>Analyze program demographics to improve future iterations (data is anonymized where
                            possible).</li>
                    </ul>
                </section>

                <!-- DIVIDER -->
                <div class="section-divider"></div>

                <!-- TERMS OF SERVICE -->
                <div class="mb-8">
                    <span
                        class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-gray-100 text-gray-800 mb-4">
                        Terms of Service
                    </span>
                    <h1 class="text-3xl font-bold text-gray-900 mb-6 border-none pt-0 mt-0">Slugworks Terms of Service
                    </h1>
                </div>

                <section id="terms-intro" class="scroll-mt-32 lg:scroll-mt-24">
                    <h2>Acceptance of Terms</h2>
                    <p>
                        By accessing or using the Slugworks Summer of Code platform, you agree to be bound by these
                        Terms of Service and all applicable laws and regulations. If you do not agree with any of these
                        terms, you are prohibited from using or accessing this site.
                    </p>
                </section>

                <section id="user-conduct" class="scroll-mt-32 lg:scroll-mt-24">
                    <h2>User Conduct</h2>
                    <p>Participants in the program are expected to maintain a professional and respectful demeanor. You
                        agree not to:</p>
                    <ul>
                        <li>Harass, threaten, or discriminate against other participants.</li>
                        <li>Submit code that contains malicious software, viruses, or harmful scripts.</li>
                        <li>Attempt to gain unauthorized access to the platform or other user accounts.</li>
                        <li>Falsify identity documents or academic records.</li>
                    </ul>
                </section>

                <section id="ip-rights" class="scroll-mt-32 lg:scroll-mt-24">
                    <h2>Intellectual Property</h2>
                    <p>
                        <strong>Code Ownership:</strong> Code written by students during the program is generally owned
                        by the student or the mentor organization, depending on the specific open source license used by
                        the project (e.g., MIT, Apache 2.0, GPL). Slugworks claims no ownership over the code produced.
                    </p>
                    <p>
                        <strong>Trademarks:</strong> "Slugworks" and the Slugworks logo are trademarks of Slugworks Inc.
                        You may use them only to identify your participation in the program.
                    </p>
                </section>

            </main>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-white border-t border-gray-200 mt-auto py-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <div class="flex items-center justify-center gap-2 mb-4 text-gray-600">
                <i class="ph ph-code text-xl"></i>
                <span class="font-bold">Slugworks Open Source</span>
            </div>
            <p class="text-sm text-gray-500">&copy; Slugworks 2025-2026</p>
        </div>
    </footer>

    <!-- Interactive Script -->
    <script>
        // --- Mobile Menu Toggle Logic ---
        const mobileTocBtn = document.getElementById('mobile-toc-btn');
        const mobileTocMenu = document.getElementById('mobile-toc-menu');
        const mobileTocIcon = document.getElementById('mobile-toc-icon');
        const currentSectionLabel = document.getElementById('current-section-label');
        const mobileLinks = document.querySelectorAll('.mobile-toc-link');

        function toggleMobileMenu() {
            mobileTocMenu.classList.toggle('hidden');
            if (mobileTocMenu.classList.contains('hidden')) {
                mobileTocIcon.style.transform = 'rotate(0deg)';
            } else {
                mobileTocIcon.style.transform = 'rotate(180deg)';
            }
        }

        mobileTocBtn.addEventListener('click', (e) => {
            e.stopPropagation();
            toggleMobileMenu();
        });

        document.addEventListener('click', (e) => {
            if (!mobileTocMenu.contains(e.target) && !mobileTocBtn.contains(e.target)) {
                if (!mobileTocMenu.classList.contains('hidden')) {
                    toggleMobileMenu();
                }
            }
        });

        // --- Active Section Highlighting ---
        const sections = document.querySelectorAll('section');
        const desktopLinks = document.querySelectorAll('.sidebar-link');

        function updateActiveLink() {
            let current = '';

            sections.forEach(section => {
                const sectionTop = section.offsetTop;
                if (window.scrollY >= (sectionTop - 250)) {
                    current = section.getAttribute('id');
                }
            });

            if (window.scrollY < 200) current = 'privacy-intro';

            desktopLinks.forEach(link => {
                link.classList.remove('text-gray-900', 'border-l-4', 'border-gray-900', 'bg-gray-100');
                link.classList.add('text-gray-600', 'border-transparent');

                if (link.getAttribute('href').includes(current)) {
                    link.classList.add('text-gray-900', 'border-l-4', 'border-gray-900', 'bg-gray-100');
                    link.classList.remove('text-gray-600', 'border-transparent');
                }
            });

            mobileLinks.forEach(link => {
                link.classList.remove('bg-gray-100', 'text-gray-900', 'border-gray-900');
                link.classList.add('text-gray-700', 'border-transparent');

                if (link.getAttribute('href').includes(current)) {
                    link.classList.add('bg-gray-100', 'text-gray-900', 'border-gray-900');
                    link.classList.remove('text-gray-700', 'border-transparent');
                    currentSectionLabel.textContent = link.textContent;
                }
            });
        }

        window.addEventListener('scroll', updateActiveLink);

        mobileLinks.forEach(link => {
            link.addEventListener('click', () => {
                if (!mobileTocMenu.classList.contains('hidden')) {
                    toggleMobileMenu();
                }
            });
        });

        updateActiveLink();
    </script>
</body>

</html><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projects - Slugworks Summer of Code</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">

    <script src="https://unpkg.com/@phosphor-icons/web"></script>

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Roboto', 'sans-serif'],
                    },
                    colors: {
                        'gsoc-blue': '#4285F4',
                        'gsoc-red': '#EA4335',
                        'gsoc-yellow': '#FBBC04',
                        'gsoc-green': '#34A853',
                        'gsoc-bg': '#F8F9FA',
                    },
                    keyframes: {
                        'fade-in-up': {
                            '0%': { opacity: '0', transform: 'translateY(10px)' },
                            '100%': { opacity: '1', transform: 'translateY(0)' },
                        },
                        'slide-in-right': {
                            '0%': { transform: 'translateX(100%)', opacity: '0' },
                            '100%': { transform: 'translateX(0)', opacity: '1' },
                        }
                    },
                    animation: {
                        'fade-in-up': 'fade-in-up 0.3s ease-out',
                        'slide-in-right': 'slide-in-right 0.3s ease-out'
                    }
                }
            }
        }
    </script>

    <style>
        .project-card {
            transition: all 0.3s ease;
        }
        .project-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
            border-color: #34A853;
        }
        .scrollbar-hide::-webkit-scrollbar {
            display: none;
        }
        .scrollbar-hide {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }
    </style>
</head>

<body class="font-sans text-gray-700 bg-gsoc-bg flex flex-col min-h-screen">

    <nav class="bg-white shadow-sm fixed w-full z-50 h-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex items-center">
                    <a href="../index.php" class="flex-shrink-0 flex items-center gap-2 cursor-pointer group">
                        <div class="w-10 h-10 bg-gsoc-green rounded-full flex items-center justify-center text-white group-hover:bg-green-600 transition">
                            <i class="ph ph-arrow-left text-xl"></i>
                        </div>
                        <span class="font-medium text-xl text-gray-800 tracking-tight">Back to <span class="font-bold text-gsoc-green">Home</span></span>
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <div class="bg-white border-b border-gray-200 pt-24 pb-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row md:items-end justify-between gap-6">
                <div>
                    <div class="flex items-center gap-3 mb-2">
                        <h1 class="text-3xl font-extrabold text-gray-900 tracking-tight sm:text-4xl">
                            Approved Projects
                        </h1>
                        <span id="demo-badge" class="hidden bg-gray-100 text-gray-600 text-xs font-bold px-2.5 py-0.5 rounded border border-gray-200">LOCAL DEMO</span>
                    </div>
                    <p class="text-lg text-gray-500">
                        Discover the incredible work done by students this summer.
                    </p>
                </div>

                <div class="flex flex-col gap-3 w-full md:w-auto items-end">
                    <div class="relative rounded-md shadow-sm w-full md:w-80">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <i class="ph ph-magnifying-glass text-gray-400"></i>
                        </div>
                        <input type="text" id="search-input"
                            class="focus:ring-gsoc-green focus:border-gsoc-green block w-full pl-10 sm:text-sm border-gray-300 rounded-md py-2 border"
                            placeholder="Search projects or organizations...">
                    </div>
                </div>
            </div>

            <div id="filter-container" class="flex gap-4 mt-6 overflow-x-auto pb-2 text-sm font-medium text-gray-500 border-b border-gray-100 scrollbar-hide">
                </div>
        </div>
    </div>

    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 flex-grow w-full">
        <div id="empty-state" class="hidden text-center py-20 bg-white rounded-lg border border-dashed border-gray-300">
            <div class="mx-auto h-12 w-12 text-gray-300">
                <i class="ph ph-folder-dashed text-5xl"></i>
            </div>
            <h3 class="mt-2 text-sm font-medium text-gray-900">No projects found</h3>
            <p class="mt-1 text-sm text-gray-500">
                Try adjusting your search or filters.
            </p>
        </div>

        <div id="projects-grid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            </div>
    </main>

    <footer class="bg-white border-t border-gray-200 mt-auto py-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <div class="flex items-center justify-center gap-2 mb-4 text-gray-600">
                <i class="ph ph-code text-xl"></i>
                <span class="font-bold">Slugworks Open Source</span>
            </div>
            <p class="text-sm text-gray-500">&copy; Slugworks 2025-2026</p>
        </div>
    </footer>

    <div id="toast-container" class="fixed bottom-4 right-4 z-[70] flex flex-col gap-2"></div>

    <div id="modal-apply" class="hidden fixed inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto h-full w-full z-[60] flex items-center justify-center p-4">
        <div class="relative bg-white rounded-xl shadow-2xl max-w-lg w-full m-auto animate-fade-in-up">
            <div class="flex items-center justify-between p-5 border-b border-gray-100">
                <div>
                    <h3 class="text-xl font-bold text-gray-900">Apply for Project</h3>
                    <p id="apply-project-title" class="text-sm text-gsoc-green font-medium">Project Name</p>
                </div>
                <button onclick="closeModal('modal-apply')" class="text-gray-400 hover:text-gray-600">
                    <i class="ph ph-x text-2xl"></i>
                </button>
            </div>
            <form id="form-apply" class="p-6 space-y-4">
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">First Name</label>
                        <input name="firstName" required type="text" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-gsoc-green">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Last Name</label>
                        <input name="lastName" required type="text" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-gsoc-green">
                    </div>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Email Address</label>
                    <input name="email" required type="email" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-gsoc-green">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Why are you a good fit?</label>
                    <textarea name="pitch" required rows="3" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-gsoc-green" placeholder="Briefly describe your relevant skills..."></textarea>
                </div>
                <div class="pt-4 flex justify-end gap-3">
                    <button type="button" onclick="closeModal('modal-apply')" class="px-4 py-2 bg-white text-gray-700 border border-gray-300 rounded-md hover:bg-gray-50 font-medium">Cancel</button>
                    <button type="submit" id="btn-submit-apply" class="px-4 py-2 bg-gsoc-green text-white rounded-md hover:bg-green-600 font-medium flex items-center gap-2">Submit Application</button>
                </div>
            </form>
        </div>
    </div>

    <script type="module">
        // Import Firebase
        import { initializeApp } from 'https://www.gstatic.com/firebasejs/11.6.1/firebase-app.js';
        import { getAuth, signInAnonymously, signInWithCustomToken } from 'https://www.gstatic.com/firebasejs/11.6.1/firebase-auth.js';
        import { getFirestore, collection, addDoc, onSnapshot, serverTimestamp, doc, updateDoc } from 'https://www.gstatic.com/firebasejs/11.6.1/firebase-firestore.js';

        // -------------------------------------------------------------
        // MOCK DATABASE (For Local PHP Support)
        // -------------------------------------------------------------
        class MockService {
            constructor() {
                this.userId = 'student-' + Math.floor(Math.random() * 1000);
                if(!localStorage.getItem('slugworks_projects')) {
                    const seeds = [
                        {id: '1', title: 'Physics Engine 2.0', organization: 'Game Dev Alliance', description: 'Overhauling collision detection for mobile.', tags: ['C++', 'GameDev'], createdAt: Date.now()},
                        {id: '2', title: 'Accessible UI Kit', organization: 'Open Design Lib', description: 'React components compliant with WCAG 2.1.', tags: ['React', 'a11y'], createdAt: Date.now() - 10000}
                    ];
                    localStorage.setItem('slugworks_projects', JSON.stringify(seeds));
                }
            }

            getCurrentUser() { return { uid: this.userId, isAnonymous: true }; }

            subscribeProjects(callback) {
                const load = () => {
                    const data = JSON.parse(localStorage.getItem('slugworks_projects') || '[]');
                    data.sort((a,b) => b.createdAt - a.createdAt);
                    callback(data);
                };
                load();
                window.addEventListener('storage', load);
            }

            // Global applications subscription for counts
            subscribeAllApplications(callback) {
                const load = () => {
                    const apps = JSON.parse(localStorage.getItem('slugworks_applications') || '[]');
                    callback(apps);
                };
                load();
                window.addEventListener('storage', (e) => {
                    if (e.key === 'slugworks_applications') load();
                });
            }

            async addApplication(data) {
                await new Promise(r => setTimeout(r, 800));
                const apps = JSON.parse(localStorage.getItem('slugworks_applications') || '[]');
                apps.push({ ...data, id: 'app_' + Date.now(), submittedAt: Date.now(), status: 'Pending' });
                localStorage.setItem('slugworks_applications', JSON.stringify(apps));
                // Trigger event for same-window updates
                window.dispatchEvent(new Event('storage'));
            }
        }

        // -------------------------------------------------------------
        // UI HELPERS (Global Scope)
        // -------------------------------------------------------------
        let projects = [];
        let allApplications = []; // Global cache for counts
        let dataService = null;
        let activeFilter = 'All';
        let searchTerm = '';
        
        window.showToast = (message, type = 'success') => {
            const container = document.getElementById('toast-container');
            const toast = document.createElement('div');
            const bgColor = type === 'success' ? 'bg-gray-900' : 'bg-red-600';
            const icon = type === 'success' ? 'ph-check-circle' : 'ph-warning-circle';
            toast.className = `${bgColor} text-white px-4 py-3 rounded-lg shadow-lg flex items-center gap-3 animate-slide-in-right min-w-[300px]`;
            toast.innerHTML = `<i class="ph-bold ${icon} text-xl text-green-400"></i><span class="font-medium text-sm">${message}</span>`;
            container.appendChild(toast);
            setTimeout(() => {
                toast.style.opacity = '0';
                toast.style.transform = 'translateY(10px)';
                setTimeout(() => toast.remove(), 300);
            }, 3000);
        };

        const getProjectStats = (projectId) => {
            const projectApps = allApplications.filter(a => a.projectId === projectId);
            const accepted = projectApps.filter(a => a.status === 'Accepted').length;
            return {
                total: projectApps.length,
                accepted: accepted
            };
        };

        const renderProjects = () => {
            const grid = document.getElementById('projects-grid');
            const emptyState = document.getElementById('empty-state');
            
            const filtered = projects.filter(p => {
                const matchesSearch = (p.title || '').toLowerCase().includes(searchTerm) || (p.organization || '').toLowerCase().includes(searchTerm);
                const matchesFilter = activeFilter === 'All' || (p.tags && p.tags.some(tag => tag.toLowerCase().includes(activeFilter.toLowerCase())));
                return matchesSearch && matchesFilter;
            });

            if (filtered.length === 0) {
                grid.innerHTML = '';
                emptyState.classList.remove('hidden');
                return;
            }
            emptyState.classList.add('hidden');
            
            grid.innerHTML = filtered.map(project => {
                const t = (project.title || '').toLowerCase();
                let icon = 'ph-code', bg = 'bg-gray-100', text = 'text-gray-600';
                if (t.includes('game') || t.includes('physics')) { icon = 'ph-game-controller'; bg = 'bg-purple-100'; text = 'text-purple-600'; }
                else if (t.includes('data') || t.includes('etl')) { icon = 'ph-chart-line-up'; bg = 'bg-red-100'; text = 'text-red-600'; }
                else if (t.includes('ui') || t.includes('accessible')) { icon = 'ph-robot'; bg = 'bg-yellow-100'; text = 'text-yellow-600'; }
                else if (t.includes('cloud')) { icon = 'ph-brackets-angle'; bg = 'bg-blue-100'; text = 'text-blue-600'; }

                const tagsHtml = (project.tags || []).map(tag => `<span class="bg-gray-100 text-gray-600 text-xs px-2 py-1 rounded-full font-medium">${tag}</span>`).join('');
                
                // Stats Logic
                const stats = getProjectStats(project.id);
                const statsHtml = `<div class="flex items-center gap-3 text-xs text-gray-500 font-medium mt-3 pt-3 border-t border-gray-100 w-full">
                    <span class="flex items-center gap-1"><i class="ph-bold ph-users"></i> ${stats.total} Applied</span>
                    <span class="flex items-center gap-1 text-gsoc-green"><i class="ph-bold ph-check-circle"></i> ${stats.accepted} Joined</span>
                </div>`;
                
                return `
                <div class="project-card bg-white rounded-lg p-6 flex flex-col h-full border border-gray-200 hover:border-gsoc-green">
                    <div class="flex items-start justify-between mb-4">
                        <div class="w-10 h-10 rounded ${bg} flex items-center justify-center ${text}"><i class="ph ${icon} text-xl"></i></div>
                        <span class="inline-flex items-center px-2 py-0.5 rounded text-xs font-medium bg-green-100 text-green-800">Open</span>
                    </div>
                    <h3 class="text-lg font-bold text-gray-900 mb-1 line-clamp-1">${project.title}</h3>
                    <p class="text-sm text-gsoc-green font-medium mb-3">${project.organization}</p>
                    <p class="text-gray-500 text-sm mb-4 flex-grow line-clamp-3">${project.description}</p>
                    <div class="flex flex-wrap gap-2 mb-2">${tagsHtml}</div>
                    
                    ${statsHtml}

                    <div class="mt-4">
                         <button onclick="openApplyModal('${project.id}', '${(project.title || '').replace(/'/g, "\\'")}')" class="w-full bg-gsoc-green hover:bg-green-600 text-white text-sm font-medium px-4 py-2 rounded-md transition-colors flex items-center justify-center gap-2">Apply Now <i class="ph ph-arrow-right"></i></button>
                    </div>
                </div>`;
            }).join('');
        };

        window.openApplyModal = (id, title) => {
            window.applyProjectId = id;
            window.applyProjectTitle = title;
            document.getElementById('apply-project-title').innerText = title;
            document.getElementById('modal-apply').classList.remove('hidden');
        };
        
        window.closeModal = (id) => {
            document.getElementById(id).classList.add('hidden');
        };

        // Filters & Search
        const categories = ['All', 'Web', 'AI', 'Cloud', 'Mobile', 'GameDev'];
        document.getElementById('filter-container').innerHTML = categories.map(cat => `<button onclick="setFilter('${cat}')" class="pb-2 whitespace-nowrap transition-colors ${activeFilter === cat ? 'text-gsoc-green border-b-2 border-gsoc-green' : 'hover:text-gray-700 border-b-2 border-transparent hover:border-gray-200'}">${cat === 'All' ? 'All Projects' : cat}</button>`).join('');
        window.setFilter = (cat) => { activeFilter = cat; document.getElementById('filter-container').innerHTML = categories.map(c => `<button onclick="setFilter('${c}')" class="pb-2 whitespace-nowrap transition-colors ${activeFilter === c ? 'text-gsoc-green border-b-2 border-gsoc-green' : 'hover:text-gray-700 border-b-2 border-transparent hover:border-gray-200'}">${c === 'All' ? 'All Projects' : c}</button>`).join(''); renderProjects(); };
        document.getElementById('search-input').addEventListener('input', (e) => { searchTerm = e.target.value.toLowerCase(); renderProjects(); });

        // -------------------------------------------------------------
        // INIT (Decision Logic)
        // -------------------------------------------------------------
        async function initApp() {
            let useFirebase = false;

            // Check if environment config exists
            if (typeof __firebase_config !== 'undefined') {
                try {
                    const config = JSON.parse(__firebase_config);
                    const app = initializeApp(config);
                    const auth = getAuth(app);
                    const db = getFirestore(app);
                    const appId = typeof __app_id !== 'undefined' ? __app_id : 'default-app-id';

                    // Authenticate
                    if (typeof __initial_auth_token !== 'undefined' && __initial_auth_token) {
                        await signInWithCustomToken(auth, __initial_auth_token);
                    } else {
                        await signInAnonymously(auth);
                    }
                    
                    // Create wrapper for consistent API
                    dataService = {
                        getCurrentUser: () => auth.currentUser,
                        subscribeProjects: (cb) => {
                            onSnapshot(collection(db, 'artifacts', appId, 'public', 'data', 'projects'), (snap) => {
                                const data = snap.docs.map(d => ({id: d.id, ...d.data()}));
                                data.sort((a,b) => (b.createdAt?.toMillis() || 0) - (a.createdAt?.toMillis() || 0));
                                cb(data);
                            });
                        },
                        subscribeAllApplications: (cb) => {
                            onSnapshot(collection(db, 'artifacts', appId, 'public', 'data', 'applications'), (snap) => {
                                const data = snap.docs.map(d => ({id: d.id, ...d.data()}));
                                cb(data);
                            });
                        },
                        addApplication: async (data) => {
                            // Default status for new applications
                            await addDoc(collection(db, 'artifacts', appId, 'public', 'data', 'applications'), { ...data, status: 'Pending', submittedAt: serverTimestamp() });
                        }
                    };
                    useFirebase = true;
                } catch(e) { console.warn("Firebase Init Error:", e); }
            }

            if (!useFirebase) {
                // Fallback to Mock Service (Local Storage)
                console.log("Initializing Mock Service for PHP/Local Environment");
                dataService = new MockService();
                document.getElementById('demo-badge').classList.remove('hidden');
                window.showToast("Demo Mode: Data saved to browser storage", "success");
            }

            // Start Listening for Data
            dataService.subscribeProjects((data) => {
                projects = data;
                renderProjects();
            });

            // Start Listening for Counts
            dataService.subscribeAllApplications((apps) => {
                allApplications = apps;
                renderProjects();
            });
        }

        // -------------------------------------------------------------
        // FORM SUBMISSIONS
        // -------------------------------------------------------------
        document.getElementById('form-apply').addEventListener('submit', async (e) => {
            e.preventDefault();
            const btn = document.getElementById('btn-submit-apply');
            btn.innerText = 'Submitting...'; btn.disabled = true;
            const formData = new FormData(e.target);
            const currentUser = dataService.getCurrentUser();

            try {
                await dataService.addApplication({
                    projectId: window.applyProjectId,
                    projectTitle: window.applyProjectTitle,
                    applicantName: `${formData.get('firstName')} ${formData.get('lastName')}`,
                    applicantEmail: formData.get('email'),
                    pitch: formData.get('pitch'),
                    applicantId: currentUser ? currentUser.uid : 'anon'
                });
                window.closeModal('modal-apply');
                e.target.reset();
                window.showToast(`Application sent!`);
            } catch (err) {
                console.error(err);
                window.showToast('Error submitting application', 'error');
            } finally {
                btn.innerText = 'Submit Application'; btn.disabled = false;
            }
        });

        // Run
        initApp();

    </script>
</body>
</html><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Program Rules - Slugworks Summer of Code</title>

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">

    <!-- Phosphor Icons -->
    <script src="https://unpkg.com/@phosphor-icons/web"></script>

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Roboto', 'sans-serif'],
                    },
                    colors: {
                        'gsoc-blue': '#4285F4',
                        'gsoc-red': '#EA4335',
                        'gsoc-yellow': '#FBBC04',
                        'gsoc-green': '#34A853',
                        'gsoc-bg': '#F8F9FA',
                    }
                }
            }
        }
    </script>

    <style>
        html {
            scroll-behavior: smooth;
            scroll-padding-top: 140px;
        }

        @media (min-width: 1024px) {
            html {
                scroll-padding-top: 100px;
            }
        }

        .sidebar-sticky {
            position: -webkit-sticky;
            position: sticky;
            top: 6rem;
            max-height: calc(100vh - 6rem);
            overflow-y: auto;
        }

        /* Program Rules specific styling (Red Theme) */
        .sidebar-link:hover {
            color: #EA4335;
            /* Red for Rules distinction */
            border-left-color: #EA4335;
            background-color: #fef2f2;
            /* Red-50 */
        }

        .rule-item {
            margin-bottom: 2rem;
            padding-bottom: 2rem;
            border-bottom: 1px solid #f3f4f6;
        }

        .rule-item:last-child {
            border-bottom: none;
        }

        .prose h2 {
            font-size: 1.5rem;
            font-weight: 700;
            color: #1f2937;
            margin-top: 2rem;
            margin-bottom: 1.5rem;
            padding-bottom: 0.5rem;
            border-bottom: 2px solid #e5e7eb;
            display: flex;
            align-items: center;
        }

        .prose h3 {
            font-size: 1.15rem;
            font-weight: 600;
            color: #111827;
            margin-bottom: 0.5rem;
        }

        .prose p {
            color: #4b5563;
            line-height: 1.6;
            margin-bottom: 1rem;
        }

        .prose ul {
            list-style-type: none;
            padding-left: 0;
            margin-bottom: 1.5rem;
        }

        .prose li {
            position: relative;
            padding-left: 1.5rem;
            margin-bottom: 0.5rem;
            color: #4b5563;
        }

        .prose li::before {
            content: "\2022";
            color: #EA4335;
            font-weight: bold;
            position: absolute;
            left: 0;
            width: 1rem;
        }

        .prose a {
            color: #EA4335;
            /* Red links */
            text-decoration: underline;
        }

        .prose a:hover {
            color: #b91c1c;
        }

        /* Alert Box */
        .alert-box {
            background-color: #fef2f2;
            border-left: 4px solid #EA4335;
            padding: 1rem;
            border-radius: 0.375rem;
            margin-bottom: 1.5rem;
        }
    </style>
</head>

<body class="font-sans text-gray-700 bg-gsoc-bg overflow-x-hidden flex flex-col min-h-screen">

    <!-- Navigation -->
    <nav class="bg-white shadow-sm fixed w-full z-50 h-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <!-- Logo Area -->
                <div class="flex items-center">
                    <a href="../index.php" class="flex-shrink-0 flex items-center gap-2 cursor-pointer group">
                        <div
                            class="w-10 h-10 bg-gsoc-red rounded-full flex items-center justify-center text-white group-hover:bg-red-600 transition">
                            <i class="ph ph-arrow-left text-xl"></i>
                        </div>
                        <span class="font-medium text-xl text-gray-800 tracking-tight">Back to <span
                                class="font-bold text-gsoc-red">Home</span></span>
                    </a>
                </div>

                <!-- Right Side Actions -->
                <div class="flex items-center space-x-4">
                    <span class="hidden md:block text-sm text-gray-500">Slugworks Legal Team <a href="#"
                            class="text-gsoc-red hover:underline">Contact</a></span>
                </div>
            </div>
        </div>
    </nav>

    <!-- Mobile Table of Contents -->
    <div class="lg:hidden bg-white border-b border-gray-200 sticky top-16 z-40 transition-shadow"
        id="mobile-toc-container">
        <button id="mobile-toc-btn"
            class="w-full flex items-center justify-between px-4 py-3 text-sm font-medium text-gray-700 bg-gray-50 hover:bg-gray-100 focus:outline-none transition-colors">
            <span class="flex items-center text-gsoc-red font-bold"><i class="ph ph-list mr-2 text-lg"></i> Rule
                Sections</span>
            <div class="flex items-center text-gray-400">
                <span id="current-section-label" class="mr-2 font-normal text-gray-500">Eligibility</span>
                <i class="ph ph-caret-down transition-transform duration-200" id="mobile-toc-icon"></i>
            </div>
        </button>
        <div id="mobile-toc-menu"
            class="hidden bg-white border-t border-gray-100 shadow-xl max-h-[60vh] overflow-y-auto absolute w-full left-0 z-50">
            <nav class="p-2 space-y-1">
                <a href="#eligibility"
                    class="mobile-toc-link block px-3 py-3 rounded-md text-sm font-medium text-gray-700 hover:bg-red-50 hover:text-gsoc-red border-l-4 border-transparent">Eligibility</a>
                <a href="#participation"
                    class="mobile-toc-link block px-3 py-3 rounded-md text-sm font-medium text-gray-700 hover:bg-red-50 hover:text-gsoc-red border-l-4 border-transparent">Participation</a>
                <a href="#prohibited"
                    class="mobile-toc-link block px-3 py-3 rounded-md text-sm font-medium text-gray-700 hover:bg-red-50 hover:text-gsoc-red border-l-4 border-transparent">Prohibited
                    Actions</a>
                <a href="#tax"
                    class="mobile-toc-link block px-3 py-3 rounded-md text-sm font-medium text-gray-700 hover:bg-red-50 hover:text-gsoc-red border-l-4 border-transparent">Tax
                    & Legal</a>
            </nav>
        </div>
    </div>

    <!-- Header -->
    <div class="bg-white border-b border-gray-200 pt-24 pb-8 lg:pt-24 lg:pb-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center md:text-left">
                <div class="flex items-center justify-center md:justify-start gap-2 text-sm text-gray-500 mb-4">
                    <a href="../index.html" class="hover:text-gsoc-red">Home</a>
                    <i class="ph ph-caret-right text-xs"></i>
                    <span class="text-gray-900 font-medium">Program Rules</span>
                </div>
                <h1 class="text-3xl font-extrabold text-gray-900 tracking-tight sm:text-5xl mb-4">
                    Program Rules
                </h1>
                <p class="text-lg sm:text-xl text-gray-500 max-w-3xl mx-auto md:mx-0">
                    The official rules and regulations governing the Slugworks Summer of Code.
                </p>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8 lg:py-12">
        <div class="lg:grid lg:grid-cols-12 lg:gap-8">

            <!-- Sidebar (Desktop) -->
            <aside class="hidden lg:block lg:col-span-3">
                <nav class="sidebar-sticky space-y-1" aria-label="Sidebar">
                    <a href="#eligibility"
                        class="sidebar-link group flex items-center px-3 py-2 text-sm font-medium text-gsoc-red border-l-4 border-gsoc-red bg-red-50">
                        <span class="truncate">Eligibility</span>
                    </a>
                    <a href="#participation"
                        class="sidebar-link group flex items-center px-3 py-2 text-sm font-medium text-gray-600 border-l-4 border-transparent hover:bg-red-50 hover:text-gray-900">
                        <span class="truncate">Participation</span>
                    </a>
                    <a href="#prohibited"
                        class="sidebar-link group flex items-center px-3 py-2 text-sm font-medium text-gray-600 border-l-4 border-transparent hover:bg-red-50 hover:text-gray-900">
                        <span class="truncate">Prohibited Actions</span>
                    </a>
                    <a href="#tax"
                        class="sidebar-link group flex items-center px-3 py-2 text-sm font-medium text-gray-600 border-l-4 border-transparent hover:bg-red-50 hover:text-gray-900">
                        <span class="truncate">Tax & Legal</span>
                    </a>
                </nav>
            </aside>

            <!-- Content -->
            <main
                class="lg:col-span-9 prose max-w-none bg-white p-6 sm:p-8 rounded-xl shadow-sm border border-gray-100">

                <!-- Eligibility Section -->
                <section id="eligibility" class="scroll-mt-32 lg:scroll-mt-24">
                    <h2><i class="ph ph-check-square mr-3 text-gsoc-red"></i> Eligibility</h2>

                    <p>To participate in Slugworks Summer of Code, all participants must meet the following general
                        requirements:</p>

                    <div class="rule-item">
                        <h3>1. Age Requirement</h3>
                        <p>You must be at least 18 years of age at the time of registration. No exceptions will be made
                            for minors, even with parental consent.</p>
                    </div>

                    <div class="rule-item">
                        <h3>2. Student Status</h3>
                        <p>You must be enrolled in or accepted into an accredited post-secondary educational institution
                            (including colleges, universities, community colleges, and trade schools) as of the program
                            acceptance date.</p>
                    </div>

                    <div class="rule-item">
                        <h3>3. Residency</h3>
                        <p>You must be eligible to work in the country where you reside during the program. Residents of
                            US-embargoed countries are prohibited from participating due to US export laws.</p>
                    </div>
                </section>

                <!-- Participation Section -->
                <section id="participation" class="scroll-mt-32 lg:scroll-mt-24">
                    <h2><i class="ph ph-handshake mr-3 text-gsoc-red"></i> Participation</h2>

                    <div class="alert-box text-sm">
                        <strong>Note:</strong> Failure to adhere to these participation rules may result in immediate
                        dismissal from the program and forfeiture of any stipends.
                    </div>

                    <div class="rule-item">
                        <h3>4. One Project Rule</h3>
                        <p>While you may submit up to 3 proposals, you may only be accepted for <strong>one</strong>
                            project. If multiple organizations select you, you must choose one.</p>
                    </div>

                    <div class="rule-item">
                        <h3>5. Time Commitment</h3>
                        <p>This program requires a significant time commitment. Full-time projects require approximately
                            30-40 hours per week, while medium-sized projects require 15-20 hours per week.</p>
                    </div>
                </section>

                <!-- Prohibited Actions Section -->
                <section id="prohibited" class="scroll-mt-32 lg:scroll-mt-24">
                    <h2><i class="ph ph-prohibit mr-3 text-gsoc-red"></i> Prohibited Actions</h2>

                    <div class="rule-item">
                        <h3>6. No Double Dipping</h3>
                        <p>You may not participate in Slugworks Summer of Code if you are also participating in other
                            concurrent stipend-based coding programs (such as Outreachy) during the same timeline.</p>
                    </div>

                    <div class="rule-item">
                        <h3>7. Academic Integrity</h3>
                        <p>Plagiarism, falsifying data, or submitting code written by others (including AI generation
                            without attribution/verification) as your own is strictly prohibited.</p>
                    </div>
                </section>

                <!-- Tax Section -->
                <section id="tax" class="scroll-mt-32 lg:scroll-mt-24">
                    <h2><i class="ph ph-file-text mr-3 text-gsoc-red"></i> Tax & Legal</h2>

                    <div class="rule-item">
                        <h3>8. Tax Responsibility</h3>
                        <p>Slugworks does not withhold taxes from your stipend. You are responsible for paying any
                            applicable taxes in your country of residence.</p>
                    </div>

                    <div class="rule-item">
                        <h3>9. Relationship</h3>
                        <p>Your participation does not create an employment, agency, or partnership relationship between
                            you and Slugworks or the mentoring organization.</p>
                    </div>
                </section>

            </main>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-white border-t border-gray-200 mt-auto py-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <div class="flex items-center justify-center gap-2 mb-4 text-gray-600">
                <i class="ph ph-code text-xl"></i>
                <span class="font-bold">Slugworks Open Source</span>
            </div>
            <p class="text-sm text-gray-500">&copy; Slugworks 2025-2026</p>
        </div>
    </footer>

    <!-- Interactive Script -->
    <script>
        // --- Mobile Menu Toggle Logic ---
        const mobileTocBtn = document.getElementById('mobile-toc-btn');
        const mobileTocMenu = document.getElementById('mobile-toc-menu');
        const mobileTocIcon = document.getElementById('mobile-toc-icon');
        const currentSectionLabel = document.getElementById('current-section-label');
        const mobileLinks = document.querySelectorAll('.mobile-toc-link');

        function toggleMobileMenu() {
            mobileTocMenu.classList.toggle('hidden');
            if (mobileTocMenu.classList.contains('hidden')) {
                mobileTocIcon.style.transform = 'rotate(0deg)';
            } else {
                mobileTocIcon.style.transform = 'rotate(180deg)';
            }
        }

        mobileTocBtn.addEventListener('click', (e) => {
            e.stopPropagation();
            toggleMobileMenu();
        });

        document.addEventListener('click', (e) => {
            if (!mobileTocMenu.contains(e.target) && !mobileTocBtn.contains(e.target)) {
                if (!mobileTocMenu.classList.contains('hidden')) {
                    toggleMobileMenu();
                }
            }
        });

        // --- Active Section Highlighting ---
        const sections = document.querySelectorAll('section');
        const desktopLinks = document.querySelectorAll('.sidebar-link');

        function updateActiveLink() {
            let current = '';

            sections.forEach(section => {
                const sectionTop = section.offsetTop;
                if (window.scrollY >= (sectionTop - 250)) {
                    current = section.getAttribute('id');
                }
            });

            if (window.scrollY < 200) current = 'eligibility';

            desktopLinks.forEach(link => {
                link.classList.remove('text-gsoc-red', 'border-l-4', 'border-gsoc-red', 'bg-red-50');
                link.classList.add('text-gray-600', 'border-transparent');

                if (link.getAttribute('href').includes(current)) {
                    link.classList.add('text-gsoc-red', 'border-l-4', 'border-gsoc-red', 'bg-red-50');
                    link.classList.remove('text-gray-600', 'border-transparent');
                }
            });

            mobileLinks.forEach(link => {
                link.classList.remove('bg-red-50', 'text-gsoc-red', 'border-gsoc-red');
                link.classList.add('text-gray-700', 'border-transparent');

                if (link.getAttribute('href').includes(current)) {
                    link.classList.add('bg-red-50', 'text-gsoc-red', 'border-gsoc-red');
                    link.classList.remove('text-gray-700', 'border-transparent');
                    currentSectionLabel.textContent = link.textContent;
                }
            });
        }

        window.addEventListener('scroll', updateActiveLink);

        mobileLinks.forEach(link => {
            link.addEventListener('click', () => {
                if (!mobileTocMenu.classList.contains('hidden')) {
                    toggleMobileMenu();
                }
            });
        });

        updateActiveLink();
    </script>
</body>

</html><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Timeline - Slugworks Summer of Code</title>

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">

    <!-- Phosphor Icons -->
    <script src="https://unpkg.com/@phosphor-icons/web"></script>

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Roboto', 'sans-serif'],
                    },
                    colors: {
                        'gsoc-blue': '#4285F4',
                        'gsoc-red': '#EA4335',
                        'gsoc-yellow': '#FBBC04',
                        'gsoc-green': '#34A853',
                        'gsoc-bg': '#F8F9FA',
                    }
                }
            }
        }
    </script>

    <style>
        html {
            scroll-behavior: smooth;
            scroll-padding-top: 140px;
        }

        @media (min-width: 1024px) {
            html {
                scroll-padding-top: 100px;
            }
        }

        .sidebar-sticky {
            position: -webkit-sticky;
            position: sticky;
            top: 6rem;
            max-height: calc(100vh - 6rem);
            overflow-y: auto;
        }

        /* Timeline Page specific styling (Blue Theme) */
        .sidebar-link:hover {
            color: #4285F4;
            border-left-color: #4285F4;
            background-color: #eff6ff;
            /* Blue-50 */
        }

        .prose h2 {
            font-size: 1.5rem;
            font-weight: 700;
            color: #1f2937;
            margin-top: 2rem;
            margin-bottom: 1.5rem;
            padding-bottom: 0.5rem;
            border-bottom: 2px solid #e5e7eb;
            display: flex;
            align-items: center;
        }

        .prose h3 {
            font-size: 1.25rem;
            font-weight: 600;
            color: #111827;
            margin-bottom: 0.75rem;
            margin-top: 1.5rem;
        }

        .prose p {
            color: #4b5563;
            line-height: 1.75;
            margin-bottom: 1.25rem;
        }

        /* Timeline Event Item */
        .timeline-item {
            position: relative;
            padding-left: 2rem;
            margin-bottom: 2rem;
            border-left: 2px solid #e5e7eb;
        }

        .timeline-item::before {
            content: '';
            position: absolute;
            left: -9px;
            /* Center on the 2px border */
            top: 6px;
            width: 16px;
            height: 16px;
            border-radius: 50%;
            background-color: #fff;
            border: 4px solid #4285F4;
            /* Default blue */
        }

        .timeline-item.red::before {
            border-color: #EA4335;
        }

        .timeline-item.yellow::before {
            border-color: #FBBC04;
        }

        .timeline-item.green::before {
            border-color: #34A853;
        }

        .date-badge {
            display: inline-block;
            padding: 0.25rem 0.75rem;
            background-color: #f3f4f6;
            color: #374151;
            font-weight: 600;
            font-size: 0.875rem;
            border-radius: 9999px;
            margin-bottom: 0.5rem;
        }
    </style>
</head>

<body class="font-sans text-gray-700 bg-gsoc-bg overflow-x-hidden flex flex-col min-h-screen">

    <!-- Navigation -->
    <nav class="bg-white shadow-sm fixed w-full z-50 h-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <!-- Logo Area -->
                <div class="flex items-center">
                    <a href="../index.php" class="flex-shrink-0 flex items-center gap-2 cursor-pointer group">
                        <div
                            class="w-10 h-10 bg-gsoc-blue rounded-full flex items-center justify-center text-white group-hover:bg-blue-600 transition">
                            <i class="ph ph-arrow-left text-xl"></i>
                        </div>
                        <span class="font-medium text-xl text-gray-800 tracking-tight">Back to <span
                                class="font-bold text-gsoc-blue">Home</span></span>
                    </a>
                </div>

                <!-- Right Side Actions -->
                <div class="flex items-center space-x-4">
                    <span class="hidden md:block text-sm text-gray-500">Add dates to <a href="#"
                            class="text-gsoc-blue hover:underline">Google Calendar</a></span>
                </div>
            </div>
        </div>
    </nav>

    <!-- Mobile Table of Contents -->
    <div class="lg:hidden bg-white border-b border-gray-200 sticky top-16 z-40 transition-shadow"
        id="mobile-toc-container">
        <button id="mobile-toc-btn"
            class="w-full flex items-center justify-between px-4 py-3 text-sm font-medium text-gray-700 bg-gray-50 hover:bg-gray-100 focus:outline-none transition-colors">
            <span class="flex items-center text-gsoc-blue font-bold"><i class="ph ph-list mr-2 text-lg"></i> Jump to
                Phase</span>
            <div class="flex items-center text-gray-400">
                <span id="current-section-label" class="mr-2 font-normal text-gray-500">Program Announcement</span>
                <i class="ph ph-caret-down transition-transform duration-200" id="mobile-toc-icon"></i>
            </div>
        </button>
        <div id="mobile-toc-menu"
            class="hidden bg-white border-t border-gray-100 shadow-xl max-h-[60vh] overflow-y-auto absolute w-full left-0 z-50">
            <nav class="p-2 space-y-1">
                <a href="#announcement"
                    class="mobile-toc-link block px-3 py-3 rounded-md text-sm font-medium text-gray-700 hover:bg-blue-50 hover:text-gsoc-blue border-l-4 border-transparent">Program
                    Announcement</a>
                <a href="#application"
                    class="mobile-toc-link block px-3 py-3 rounded-md text-sm font-medium text-gray-700 hover:bg-blue-50 hover:text-gsoc-blue border-l-4 border-transparent">Application
                    Period</a>
                <a href="#bonding"
                    class="mobile-toc-link block px-3 py-3 rounded-md text-sm font-medium text-gray-700 hover:bg-blue-50 hover:text-gsoc-blue border-l-4 border-transparent">Community
                    Bonding</a>
                <a href="#coding"
                    class="mobile-toc-link block px-3 py-3 rounded-md text-sm font-medium text-gray-700 hover:bg-blue-50 hover:text-gsoc-blue border-l-4 border-transparent">Coding
                    Period</a>
                <a href="#results"
                    class="mobile-toc-link block px-3 py-3 rounded-md text-sm font-medium text-gray-700 hover:bg-blue-50 hover:text-gsoc-blue border-l-4 border-transparent">Results</a>
            </nav>
        </div>
    </div>

    <!-- Header -->
    <div class="bg-white border-b border-gray-200 pt-24 pb-8 lg:pt-24 lg:pb-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center md:text-left">
                <div class="flex items-center justify-center md:justify-start gap-2 text-sm text-gray-500 mb-4">
                    <a href="../index.html" class="hover:text-gsoc-blue">Home</a>
                    <i class="ph ph-caret-right text-xs"></i>
                    <span class="text-gray-900 font-medium">Timeline</span>
                </div>
                <h1 class="text-3xl font-extrabold text-gray-900 tracking-tight sm:text-5xl mb-4">
                    Program Timeline
                </h1>
                <p class="text-lg sm:text-xl text-gray-500 max-w-3xl mx-auto md:mx-0">
                    Key dates and deadlines for students and organizations in 2025.
                </p>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8 lg:py-12">
        <div class="lg:grid lg:grid-cols-12 lg:gap-8">

            <!-- Sidebar (Desktop) -->
            <aside class="hidden lg:block lg:col-span-3">
                <nav class="sidebar-sticky space-y-1" aria-label="Sidebar">
                    <a href="#announcement"
                        class="sidebar-link group flex items-center px-3 py-2 text-sm font-medium text-gsoc-blue border-l-4 border-gsoc-blue bg-blue-50">
                        <span class="truncate">Program Announcement</span>
                    </a>
                    <a href="#application"
                        class="sidebar-link group flex items-center px-3 py-2 text-sm font-medium text-gray-600 border-l-4 border-transparent hover:bg-blue-50 hover:text-gray-900">
                        <span class="truncate">Application Period</span>
                    </a>
                    <a href="#bonding"
                        class="sidebar-link group flex items-center px-3 py-2 text-sm font-medium text-gray-600 border-l-4 border-transparent hover:bg-blue-50 hover:text-gray-900">
                        <span class="truncate">Community Bonding</span>
                    </a>
                    <a href="#coding"
                        class="sidebar-link group flex items-center px-3 py-2 text-sm font-medium text-gray-600 border-l-4 border-transparent hover:bg-blue-50 hover:text-gray-900">
                        <span class="truncate">Coding Period</span>
                    </a>
                    <a href="#results"
                        class="sidebar-link group flex items-center px-3 py-2 text-sm font-medium text-gray-600 border-l-4 border-transparent hover:bg-blue-50 hover:text-gray-900">
                        <span class="truncate">Results</span>
                    </a>
                </nav>
            </aside>

            <!-- Content -->
            <main
                class="lg:col-span-9 prose max-w-none bg-white p-6 sm:p-8 rounded-xl shadow-sm border border-gray-100">

                <!-- Announcement Section -->
                <section id="announcement" class="scroll-mt-32 lg:scroll-mt-24">
                    <h2><i class="ph ph-megaphone mr-3 text-gsoc-blue"></i> Program Announcement</h2>

                    <div class="timeline-item">
                        <span class="date-badge">January 20, 2025</span>
                        <h3 class="!mt-1">Organizations Apply</h3>
                        <p>Open source organizations submit their applications to be mentor organizations for the
                            upcoming year.</p>
                    </div>

                    <div class="timeline-item">
                        <span class="date-badge">February 20, 2025</span>
                        <h3 class="!mt-1">List of Accepted Organizations Announced</h3>
                        <p>Slugworks publishes the list of accepted mentoring organizations. Students should begin
                            researching projects and discussing ideas with mentors.</p>
                    </div>
                </section>

                <!-- Application Section -->
                <section id="application" class="scroll-mt-32 lg:scroll-mt-24">
                    <h2><i class="ph ph-pencil-simple mr-3 text-gsoc-red"></i> Application Period</h2>

                    <div class="timeline-item red">
                        <span class="date-badge">March 18, 2025</span>
                        <h3 class="!mt-1">Student Application Period Opens</h3>
                        <p>Students can register on the program site and begin submitting proposals to mentor
                            organizations.</p>
                    </div>

                    <div class="timeline-item red">
                        <span class="date-badge">April 2, 2025</span>
                        <h3 class="!mt-1">Student Application Deadline</h3>
                        <p>All proposals must be submitted by 18:00 UTC. No extensions will be given.</p>
                    </div>
                </section>

                <!-- Community Bonding Section -->
                <section id="bonding" class="scroll-mt-32 lg:scroll-mt-24">
                    <h2><i class="ph ph-users-three mr-3 text-gsoc-yellow"></i> Community Bonding</h2>

                    <div class="timeline-item yellow">
                        <span class="date-badge">May 1, 2025</span>
                        <h3 class="!mt-1">Accepted Students Announced</h3>
                        <p>Accepted students are paired with mentors and begin the Community Bonding period. This is the
                            time to get to know your community, refine your project plan, and set up your development
                            environment.</p>
                    </div>
                </section>

                <!-- Coding Section -->
                <section id="coding" class="scroll-mt-32 lg:scroll-mt-24">
                    <h2><i class="ph ph-code mr-3 text-gsoc-green"></i> Coding Period</h2>

                    <div class="timeline-item green">
                        <span class="date-badge">May 27, 2025</span>
                        <h3 class="!mt-1">Coding Officially Begins</h3>
                        <p>Students begin working on their projects full-time (or part-time if applicable).</p>
                    </div>

                    <div class="timeline-item green">
                        <span class="date-badge">July 8, 2025</span>
                        <h3 class="!mt-1">Midterm Evaluations</h3>
                        <p>Mentors evaluate student progress. Students must pass this evaluation to continue in the
                            program and receive the first stipend installment.</p>
                    </div>

                    <div class="timeline-item green">
                        <span class="date-badge">August 26, 2025</span>
                        <h3 class="!mt-1">Final Submission Deadline</h3>
                        <p>Students submit their final code, project URL, and a final work product submission.</p>
                    </div>
                </section>

                <!-- Results Section -->
                <section id="results" class="scroll-mt-32 lg:scroll-mt-24">
                    <h2><i class="ph ph-medal mr-3 text-gsoc-blue"></i> Results</h2>

                    <div class="timeline-item">
                        <span class="date-badge">September 3, 2025</span>
                        <h3 class="!mt-1">Mentor Final Evaluations</h3>
                        <p>Mentors review the final student submissions.</p>
                    </div>

                    <div class="timeline-item">
                        <span class="date-badge">September 10, 2025</span>
                        <h3 class="!mt-1">Results Announced</h3>
                        <p>Successful student projects are announced, and students who pass receive their final stipend
                            and certificate of completion.</p>
                    </div>
                </section>

            </main>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-white border-t border-gray-200 mt-auto py-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <div class="flex items-center justify-center gap-2 mb-4 text-gray-600">
                <i class="ph ph-code text-xl"></i>
                <span class="font-bold">Slugworks Open Source</span>
            </div>
            <p class="text-sm text-gray-500">&copy; Slugworks 2025-2026</p>
        </div>
    </footer>

    <!-- Interactive Script -->
    <script>
        // --- Mobile Menu Toggle Logic ---
        const mobileTocBtn = document.getElementById('mobile-toc-btn');
        const mobileTocMenu = document.getElementById('mobile-toc-menu');
        const mobileTocIcon = document.getElementById('mobile-toc-icon');
        const currentSectionLabel = document.getElementById('current-section-label');
        const mobileLinks = document.querySelectorAll('.mobile-toc-link');

        function toggleMobileMenu() {
            mobileTocMenu.classList.toggle('hidden');
            if (mobileTocMenu.classList.contains('hidden')) {
                mobileTocIcon.style.transform = 'rotate(0deg)';
            } else {
                mobileTocIcon.style.transform = 'rotate(180deg)';
            }
        }

        mobileTocBtn.addEventListener('click', (e) => {
            e.stopPropagation();
            toggleMobileMenu();
        });

        document.addEventListener('click', (e) => {
            if (!mobileTocMenu.contains(e.target) && !mobileTocBtn.contains(e.target)) {
                if (!mobileTocMenu.classList.contains('hidden')) {
                    toggleMobileMenu();
                }
            }
        });

        // --- Active Section Highlighting ---
        const sections = document.querySelectorAll('section');
        const desktopLinks = document.querySelectorAll('.sidebar-link');

        function updateActiveLink() {
            let current = '';

            sections.forEach(section => {
                const sectionTop = section.offsetTop;
                if (window.scrollY >= (sectionTop - 250)) {
                    current = section.getAttribute('id');
                }
            });

            if (window.scrollY < 200) current = 'announcement';

            desktopLinks.forEach(link => {
                link.classList.remove('text-gsoc-blue', 'border-l-4', 'border-gsoc-blue', 'bg-blue-50');
                link.classList.add('text-gray-600', 'border-transparent');

                if (link.getAttribute('href').includes(current)) {
                    link.classList.add('text-gsoc-blue', 'border-l-4', 'border-gsoc-blue', 'bg-blue-50');
                    link.classList.remove('text-gray-600', 'border-transparent');
                }
            });

            mobileLinks.forEach(link => {
                link.classList.remove('bg-blue-50', 'text-gsoc-blue', 'border-gsoc-blue');
                link.classList.add('text-gray-700', 'border-transparent');

                if (link.getAttribute('href').includes(current)) {
                    link.classList.add('bg-blue-50', 'text-gsoc-blue', 'border-gsoc-blue');
                    link.classList.remove('text-gray-700', 'border-transparent');
                    currentSectionLabel.textContent = link.textContent;
                }
            });
        }

        window.addEventListener('scroll', updateActiveLink);

        mobileLinks.forEach(link => {
            link.addEventListener('click', () => {
                if (!mobileTocMenu.classList.contains('hidden')) {
                    toggleMobileMenu();
                }
            });
        });

        updateActiveLink();
    </script>
</body>

</html>