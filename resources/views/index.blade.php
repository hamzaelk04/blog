<!DOCTYPE html>

<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Editorial - Modern Blog Home</title>
    <!-- Google Fonts: Newsreader -->
    <link
        href="https://fonts.googleapis.com/css2?family=Newsreader:ital,opsz,wght@0,6..72,200..800;1,6..72,200..800&amp;display=swap"
        rel="stylesheet" />
    <!-- Material Symbols -->
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#137fec",
                        "background-light": "#f6f7f8",
                        "background-dark": "#101922",
                    },
                    fontFamily: {
                        "display": ["Newsreader", "serif"],
                        "sans": ["Inter", "system-ui", "sans-serif"]
                    },
                    borderRadius: {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                },
            },
        }
    </script>
    <style>
        body {
            font-family: 'Newsreader', serif;
        }
    </style>
</head>

<body
    class="bg-background-light dark:bg-background-dark text-[#111418] dark:text-gray-100 transition-colors duration-200">
    <!-- Navigation -->
    <header class="sticky top-0 z-50 w-full bg-white dark:bg-[#111418] border-b border-[#f0f2f4] dark:border-gray-800">
        <div class="max-w-[1200px] mx-auto px-6 flex h-16 items-center justify-between">
            <div class="flex items-center gap-2">
                <div class="text-primary size-8">
                    <svg fill="currentColor" viewbox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M13.8261 30.5736C16.7203 29.8826 20.2244 29.4783 24 29.4783C27.7756 29.4783 31.2797 29.8826 34.1739 30.5736C36.9144 31.2278 39.9967 32.7669 41.3563 33.8352L24.8486 7.36089C24.4571 6.73303 23.5429 6.73303 23.1514 7.36089L6.64374 33.8352C8.00331 32.7669 11.0856 31.2278 13.8261 30.5736Z">
                        </path>
                        <path clip-rule="evenodd"
                            d="M39.998 35.764C39.9944 35.7463 39.9875 35.7155 39.9748 35.6706C39.9436 35.5601 39.8949 35.4259 39.8346 35.2825C39.8168 35.2403 39.7989 35.1993 39.7813 35.1602C38.5103 34.2887 35.9788 33.0607 33.7095 32.5189C30.9875 31.8691 27.6413 31.4783 24 31.4783C20.3587 31.4783 17.0125 31.8691 14.2905 32.5189C12.0012 33.0654 9.44505 34.3104 8.18538 35.1832C8.17384 35.2075 8.16216 35.233 8.15052 35.2592C8.09919 35.3751 8.05721 35.4886 8.02977 35.589C8.00356 35.6848 8.00039 35.7333 8.00004 35.7388C8.00004 35.739 8 35.7393 8.00004 35.7388C8.00004 35.7641 8.0104 36.0767 8.68485 36.6314C9.34546 37.1746 10.4222 37.7531 11.9291 38.2772C14.9242 39.319 19.1919 40 24 40C28.8081 40 33.0758 39.319 36.0709 38.2772C37.5778 37.7531 38.6545 37.1746 39.3151 36.6314C39.9006 36.1499 39.9857 35.8511 39.998 35.764ZM4.95178 32.7688L21.4543 6.30267C22.6288 4.4191 25.3712 4.41909 26.5457 6.30267L43.0534 32.777C43.0709 32.8052 43.0878 32.8338 43.104 32.8629L41.3563 33.8352C43.104 32.8629 43.1038 32.8626 43.104 32.8629L43.1051 32.865L43.1065 32.8675L43.1101 32.8739L43.1199 32.8918C43.1276 32.906 43.1377 32.9246 43.1497 32.9473C43.1738 32.9925 43.2062 33.0545 43.244 33.1299C43.319 33.2792 43.4196 33.489 43.5217 33.7317C43.6901 34.1321 44 34.9311 44 35.7391C44 37.4427 43.003 38.7775 41.8558 39.7209C40.6947 40.6757 39.1354 41.4464 37.385 42.0552C33.8654 43.2794 29.133 44 24 44C18.867 44 14.1346 43.2794 10.615 42.0552C8.86463 41.4464 7.30529 40.6757 6.14419 39.7209C4.99695 38.7775 3.99999 37.4427 3.99999 35.7391C3.99999 34.8725 4.29264 34.0922 4.49321 33.6393C4.60375 33.3898 4.71348 33.1804 4.79687 33.0311C4.83898 32.9556 4.87547 32.8935 4.9035 32.8471C4.91754 32.8238 4.92954 32.8043 4.93916 32.7889L4.94662 32.777L4.95178 32.7688ZM35.9868 29.004L24 9.77997L12.0131 29.004C12.4661 28.8609 12.9179 28.7342 13.3617 28.6282C16.4281 27.8961 20.0901 27.4783 24 27.4783C27.9099 27.4783 31.5719 27.8961 34.6383 28.6282C35.082 28.7342 35.5339 28.8609 35.9868 29.004Z"
                            fill-rule="evenodd"></path>
                    </svg>
                </div>
                <h2 class="text-[#111418] dark:text-white text-xl font-bold tracking-tight">Editorial.</h2>
            </div>
            <nav class="hidden md:flex items-center gap-8 font-sans">
                <a class="text-[#111418] dark:text-gray-300 text-sm font-medium hover:text-primary transition-colors"
                    href="#">Home</a>
                <a class="text-[#111418] dark:text-gray-300 text-sm font-medium hover:text-primary transition-colors"
                    href="#">Categories</a>
                <a class="text-[#111418] dark:text-gray-300 text-sm font-medium hover:text-primary transition-colors"
                    href="#">About</a>
                <a class="text-[#111418] dark:text-gray-300 text-sm font-medium hover:text-primary transition-colors"
                    href="#">Contact</a>
            </nav>
            <div class="flex items-center gap-4">
                <a id="link" href="create"
                    class="bg-primary hover:bg-primary/90 text-white text-sm font-bold h-10 px-6 rounded-lg transition-all shadow-md">
                    Add new Blog
                </a>
            </div>
        </div>
    </header>
    <main class="max-w-[1200px] mx-auto px-6 py-8">
        <!-- Hero Section -->
        <section class="mb-12">
            <div class="@container">
                <div class="relative min-h-[500px] flex flex-col justify-end p-8 md:p-16 rounded-xl overflow-hidden shadow-2xl bg-center bg-cover"
                    data-alt="Modern workspace with minimalist aesthetic laptop and coffee"
                    style='background-image: linear-gradient(rgba(0, 0, 0, 0.2) 0%, rgba(0, 0, 0, 0.7) 100%), url("https://lh3.googleusercontent.com/aida-public/AB6AXuCNgicuOw24ZHlPH-HAndbqR5AsRFEQZ5Oj-ou_Ps4_zT9LwGQejAZKcE5Z5onYzGbsfqRNPaUSCF2uGBMjJS0JSKQhiTCuwIUCG3csMk7nlk6Ire95R5GQQtqj41nfmVO_0sYOz3eXFYdpu-IcWHMeAKhQNMvQFDcPGX4_bw3CIGhEuLKM4nTkkuFWVfKGOWlhYZBMG2MWAULrZGhKTdLZQ2uocj81Y7W22aNhvMWw8LCVN37L7ml_a793xeRvnMq_YX7Dg03B9k7H");'>
                    <div class="max-w-2xl space-y-4">
                        <span
                            class="bg-primary text-white text-xs font-bold uppercase tracking-widest px-3 py-1 rounded">Featured
                            Post</span>
                        <h1 class="text-white text-4xl md:text-6xl font-black leading-[1.1] tracking-tight">
                            The Future of Web Development in 2024
                        </h1>
                        <p class="text-gray-200 text-lg md:text-xl font-normal leading-relaxed">
                            Discover the latest trends, frameworks, and technologies shaping the digital landscape this
                            year. From AI-driven code to the return of simple CSS.
                        </p>
                        <div class="pt-4">
                            <button
                                class="bg-primary hover:bg-primary/90 text-white text-base font-bold h-12 px-8 rounded-lg transition-all inline-flex items-center gap-2">
                                <span>Read Full Article</span>
                                <span class="material-symbols-outlined text-lg">arrow_forward</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Main Content Layout: Grid + Sidebar -->
        <div class="flex flex-col lg:flex-row gap-12">
            <!-- Left: Recent Posts Grid (75%) -->
            <div class="lg:w-3/4">
                <div class="flex items-center justify-between border-b border-[#f0f2f4] dark:border-gray-800 pb-4 mb-8">
                    <h2 class="text-[#111418] dark:text-white text-3xl font-black tracking-tight">Recent Posts</h2>
                    <a class="text-primary text-sm font-bold flex items-center gap-1 hover:underline" href="blog">
                        View All <span class="material-symbols-outlined text-sm">trending_flat</span>
                    </a>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <!-- Post Card 1 -->
                    <article class="group flex flex-col gap-4">
                        <div class="aspect-video w-full rounded-lg overflow-hidden relative shadow-sm">
                            <div class="absolute inset-0 bg-cover bg-center transition-transform duration-500 group-hover:scale-110"
                                data-alt="Abstract UI design layout mockup"
                                style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuALQLOJgs6iUHMt9JmImZm0VpesUDl3YPUFg2LmooafRoJQTwcSCpUP_jTXXDz8irYPcTMoO2XePRE4E_XoWzBHXW3Zj5C7abdjqyU_eXZSkOyzznrrPd_u-54PCxAhHxDiFtIAfODasOMJJnuQvCGo_uiDm2lF1YXdpuZPEEHZ3rD5qaSMcT5Hc5FtBjFWTmBSmQuaNZVJnRpJ-lKkBT0asj55N0yJNBIYGqj4wnuTe94tTSJgGxlFiQlw1YC478Zf9nkKm0uTre2_");'>
                            </div>
                        </div>
                        <div class="space-y-3">
                            <span class="text-primary text-xs font-bold uppercase tracking-wider">Design</span>
                            <h3
                                class="text-[#111418] dark:text-white text-2xl font-bold leading-tight group-hover:text-primary transition-colors cursor-pointer">
                                2024 UI Design Trends: What's Next?
                            </h3>
                            <p class="text-[#617589] dark:text-gray-400 text-base leading-relaxed line-clamp-2">
                                Exploring the shift towards spatial interfaces and the resurgence of tactile design
                                elements in modern user interfaces.
                            </p>
                            <button class="flex items-center gap-1 text-primary text-sm font-bold mt-2">
                                Read More <span class="material-symbols-outlined text-base">chevron_right</span>
                            </button>
                        </div>
                    </article>
                    <!-- Post Card 2 -->
                    <article class="group flex flex-col gap-4">
                        <div class="aspect-video w-full rounded-lg overflow-hidden relative shadow-sm">
                            <div class="absolute inset-0 bg-cover bg-center transition-transform duration-500 group-hover:scale-110"
                                data-alt="Developer coding on dual monitor setup"
                                style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuAw1VperG6qnHsLoVCQZLbe-NRD6Wrnfep7FX6ph7Nyph8EppfjLL_gSKIhixLERTTduw1RVbe_KtZ8lwcRn7O6G6SBgXlaZnOp86EZUwUqIrdDMlZRv5tF1eAGULd26z20m6EgAbY1xCvsfYZm9v1T6M4cf7AiCGZnnfYS57x-ZRuZvOXLnB3_We5GHlWbRoeTQzYOl05z6UHB1S8ThQxSh3tIZqwbFQUCIAWKybxS-RfUdqYSye3wYoj_CocivErk3FJ6LLeuHniN");'>
                            </div>
                        </div>
                        <div class="space-y-3">
                            <span class="text-primary text-xs font-bold uppercase tracking-wider">Coding</span>
                            <h3
                                class="text-[#111418] dark:text-white text-2xl font-bold leading-tight group-hover:text-primary transition-colors cursor-pointer">
                                Bootstrap 5 Pro Tips for Layouts
                            </h3>
                            <p class="text-[#617589] dark:text-gray-400 text-base leading-relaxed line-clamp-2">
                                Mastery of the utility-first approach within the world's most popular CSS framework for
                                faster delivery.
                            </p>
                            <button class="flex items-center gap-1 text-primary text-sm font-bold mt-2">
                                Read More <span class="material-symbols-outlined text-base">chevron_right</span>
                            </button>
                        </div>
                    </article>
                    <!-- Post Card 3 -->
                    <article class="group flex flex-col gap-4">
                        <div class="aspect-video w-full rounded-lg overflow-hidden relative shadow-sm">
                            <div class="absolute inset-0 bg-cover bg-center transition-transform duration-500 group-hover:scale-110"
                                data-alt="Abstract digital network connections"
                                style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBKtffp8RuHCxvdE4eEyQ6a3pG9FA_7jZjfPMOsiV4QLJX-kDfcwUowUyqpwmLkd-7pG3zO5U9rDddhZCGWGnHPTVWop2WOixW1tYTBKBw7nE4svcKKqwEHBW0zAvhJ3w50-ks7jdGa-7s72wo94Ov9PPoe1QwnH9nHizuk68nBQQ2c_owsN43T99w4JD6ScztNjMPR8w16cE-Sz8mPb9DY-2cK9roloS-1E5EPOoRh88SS3p3UXXMZcgK12CVKr1afRz_ScIbSkH2-");'>
                            </div>
                        </div>
                        <div class="space-y-3">
                            <span class="text-primary text-xs font-bold uppercase tracking-wider">AI</span>
                            <h3
                                class="text-[#111418] dark:text-white text-2xl font-bold leading-tight group-hover:text-primary transition-colors cursor-pointer">
                                The Rise of Generative AI in Code
                            </h3>
                            <p class="text-[#617589] dark:text-gray-400 text-base leading-relaxed line-clamp-2">
                                How AI is not just writing snippets but architecting entire systems and what it means
                                for junior developers.
                            </p>
                            <button class="flex items-center gap-1 text-primary text-sm font-bold mt-2">
                                Read More <span class="material-symbols-outlined text-base">chevron_right</span>
                            </button>
                        </div>
                    </article>
                    <!-- Post Card 4 -->
                    <article class="group flex flex-col gap-4">
                        <div class="aspect-video w-full rounded-lg overflow-hidden relative shadow-sm">
                            <div class="absolute inset-0 bg-cover bg-center transition-transform duration-500 group-hover:scale-110"
                                data-alt="Server racks in a modern data center"
                                style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCbDqWXyaT8hCe9AbNzMHUNBr7u2P1OmglwGKX_Yf730BnWYbkwLTwBOMyVe9iw1n7b4NGEPdiL07SsFA9LswO0b26yms67c6OdCZxPk1TXD4stZK9z03i9gVUEaZA6cyowNYFMDviaOhPsKmh_aP2yw0acDs2CqWZPXBCsNhqQONoH0wFO1_tbm_VIMvFBtWVq6gp6X1J9OrV5OrDYg_2k9BeloHVt32a8zUENPHYZJ3jHj1Ofq9qQyqLNr0sDLITbtTasf6TTkFKg");'>
                            </div>
                        </div>
                        <div class="space-y-3">
                            <span class="text-primary text-xs font-bold uppercase tracking-wider">DevOps</span>
                            <h3
                                class="text-[#111418] dark:text-white text-2xl font-bold leading-tight group-hover:text-primary transition-colors cursor-pointer">
                                Optimizing Site Performance
                            </h3>
                            <p class="text-[#617589] dark:text-gray-400 text-base leading-relaxed line-clamp-2">
                                Comprehensive guide to achieving perfect Lighthouse scores through modern caching and
                                image strategies.
                            </p>
                            <button class="flex items-center gap-1 text-primary text-sm font-bold mt-2">
                                Read More <span class="material-symbols-outlined text-base">chevron_right</span>
                            </button>
                        </div>
                    </article>
                </div>
                <!-- Pagination Placeholder -->
                <div class="mt-12 flex justify-center">
                    <button
                        class="bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700 text-[#111418] dark:text-white font-bold h-12 px-10 rounded-lg hover:bg-gray-50 dark:hover:bg-gray-700 transition-colors">
                        Load More Posts
                    </button>
                </div>
            </div>
            <!-- Right: Sidebar (25%) -->
            <aside class="lg:w-1/4 space-y-10">
                <!-- Search Widget -->
                <div class="bg-white dark:bg-[#111418] p-6 rounded-xl border border-[#f0f2f4] dark:border-gray-800">
                    <h4 class="text-lg font-bold mb-4 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">search</span> Search
                    </h4>
                    <div class="relative">
                        <input
                            class="w-full h-11 pl-4 pr-10 rounded-lg border border-gray-200 dark:border-gray-700 bg-gray-50 dark:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all font-sans text-sm"
                            placeholder="Find articles..." type="text" />
                        <span class="material-symbols-outlined absolute right-3 top-2.5 text-gray-400">search</span>
                    </div>
                </div>
                <!-- Categories Widget -->
                <div class="bg-white dark:bg-[#111418] p-6 rounded-xl border border-[#f0f2f4] dark:border-gray-800">
                    <h4 class="text-lg font-bold mb-6 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">category</span> Categories
                    </h4>
                    <ul class="space-y-4 font-sans">
                        <li class="flex items-center justify-between group cursor-pointer">
                            <span
                                class="text-gray-600 dark:text-gray-400 group-hover:text-primary transition-colors font-medium">Technology</span>
                            <span
                                class="bg-gray-100 dark:bg-gray-800 text-gray-500 text-xs px-2 py-0.5 rounded-full">24</span>
                        </li>
                        <li
                            class="flex items-center justify-between group cursor-pointer border-t border-gray-50 dark:border-gray-800 pt-3">
                            <span
                                class="text-gray-600 dark:text-gray-400 group-hover:text-primary transition-colors font-medium">UI
                                Design</span>
                            <span
                                class="bg-gray-100 dark:bg-gray-800 text-gray-500 text-xs px-2 py-0.5 rounded-full">18</span>
                        </li>
                        <li
                            class="flex items-center justify-between group cursor-pointer border-t border-gray-50 dark:border-gray-800 pt-3">
                            <span
                                class="text-gray-600 dark:text-gray-400 group-hover:text-primary transition-colors font-medium">Coding</span>
                            <span
                                class="bg-gray-100 dark:bg-gray-800 text-gray-500 text-xs px-2 py-0.5 rounded-full">32</span>
                        </li>
                        <li
                            class="flex items-center justify-between group cursor-pointer border-t border-gray-50 dark:border-gray-800 pt-3">
                            <span
                                class="text-gray-600 dark:text-gray-400 group-hover:text-primary transition-colors font-medium">Artificial
                                Intelligence</span>
                            <span
                                class="bg-gray-100 dark:bg-gray-800 text-gray-500 text-xs px-2 py-0.5 rounded-full">12</span>
                        </li>
                    </ul>
                </div>
                <!-- Newsletter Widget -->
                <div class="bg-primary p-8 rounded-xl text-white shadow-xl shadow-primary/20">
                    <div class="mb-4">
                        <span class="material-symbols-outlined text-4xl opacity-50">mail</span>
                    </div>
                    <h4 class="text-xl font-bold mb-2">Join the Newsletter</h4>
                    <p class="text-white/80 text-sm font-sans mb-6">Weekly insights on the future of design and
                        technology delivered to your inbox.</p>
                    <div class="space-y-3">
                        <input
                            class="w-full h-11 px-4 rounded-lg bg-white/10 border border-white/20 text-white placeholder:text-white/60 focus:outline-none focus:ring-2 focus:ring-white/40 font-sans text-sm"
                            placeholder="Your email address" type="email" />
                        <button
                            class="w-full h-11 bg-white text-primary font-bold rounded-lg hover:bg-gray-100 transition-colors font-sans text-sm">Subscribe
                            Now</button>
                    </div>
                </div>
            </aside>
        </div>
    </main>
    <!-- Footer -->
    <footer class="bg-white dark:bg-[#0d141b] border-t border-[#f0f2f4] dark:border-gray-800 mt-20">
        <div class="max-w-[1200px] mx-auto px-6 py-16 grid grid-cols-1 md:grid-cols-4 gap-12">
            <div class="col-span-1 md:col-span-2 space-y-6">
                <div class="flex items-center gap-2">
                    <div class="text-primary size-6">
                        <svg fill="currentColor" viewbox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M13.8261 30.5736C16.7203 29.8826 20.2244 29.4783 24 29.4783C27.7756 29.4783 31.2797 29.8826 34.1739 30.5736C36.9144 31.2278 39.9967 32.7669 41.3563 33.8352L24.8486 7.36089C24.4571 6.73303 23.5429 6.73303 23.1514 7.36089L6.64374 33.8352C8.00331 32.7669 11.0856 31.2278 13.8261 30.5736Z">
                            </path>
                            <path clip-rule="evenodd"
                                d="M39.998 35.764C39.9944 35.7463 39.9875 35.7155 39.9748 35.6706C39.9436 35.5601 39.8949 35.4259 39.8346 35.2825C39.8168 35.2403 39.7989 35.1993 39.7813 35.1602C38.5103 34.2887 35.9788 33.0607 33.7095 32.5189C30.9875 31.8691 27.6413 31.4783 24 31.4783C20.3587 31.4783 17.0125 31.8691 14.2905 32.5189C12.0012 33.0654 9.44505 34.3104 8.18538 35.1832C8.17384 35.2075 8.16216 35.233 8.15052 35.2592C8.09919 35.3751 8.05721 35.4886 8.02977 35.589C8.00356 35.6848 8.00039 35.7333 8.00004 35.7388C8.00004 35.739 8 35.7393 8.00004 35.7388C8.00004 35.7641 8.0104 36.0767 8.68485 36.6314C9.34546 37.1746 10.4222 37.7531 11.9291 38.2772C14.9242 39.319 19.1919 40 24 40C28.8081 40 33.0758 39.319 36.0709 38.2772C37.5778 37.7531 38.6545 37.1746 39.3151 36.6314C39.9006 36.1499 39.9857 35.8511 39.998 35.764ZM4.95178 32.7688L21.4543 6.30267C22.6288 4.4191 25.3712 4.41909 26.5457 6.30267L43.0534 32.777C43.0709 32.8052 43.0878 32.8338 43.104 32.8629L41.3563 33.8352C43.104 32.8629 43.1038 32.8626 43.104 32.8629L43.1051 32.865L43.1065 32.8675L43.1101 32.8739L43.1199 32.8918C43.1276 32.906 43.1377 32.9246 43.1497 32.9473C43.1738 32.9925 43.2062 33.0545 43.244 33.1299C43.319 33.2792 43.4196 33.489 43.5217 33.7317C43.6901 34.1321 44 34.9311 44 35.7391C44 37.4427 43.003 38.7775 41.8558 39.7209C40.6947 40.6757 39.1354 41.4464 37.385 42.0552C33.8654 43.2794 29.133 44 24 44C18.867 44 14.1346 43.2794 10.615 42.0552C8.86463 41.4464 7.30529 40.6757 6.14419 39.7209C4.99695 38.7775 3.99999 37.4427 3.99999 35.7391C3.99999 34.8725 4.29264 34.0922 4.49321 33.6393C4.60375 33.3898 4.71348 33.1804 4.79687 33.0311C4.83898 32.9556 4.87547 32.8935 4.9035 32.8471C4.91754 32.8238 4.92954 32.8043 4.93916 32.7889L4.94662 32.777L4.95178 32.7688ZM35.9868 29.004L24 9.77997L12.0131 29.004C12.4661 28.8609 12.9179 28.7342 13.3617 28.6282C16.4281 27.8961 20.0901 27.4783 24 27.4783C27.9099 27.4783 31.5719 27.8961 34.6383 28.6282C35.082 28.7342 35.5339 28.8609 35.9868 29.004Z">
                            </path>
                        </svg>
                    </div>
                    <h2 class="text-[#111418] dark:text-white text-xl font-bold tracking-tight">Editorial.</h2>
                </div>
                <p class="text-[#617589] dark:text-gray-400 text-sm leading-relaxed max-w-sm font-sans">
                    A modern editorial space dedicated to the evolution of digital design, web development, and the
                    human experiences that connect us all through the web.
                </p>
                <div class="flex gap-4">
                    <a class="w-10 h-10 rounded-full border border-gray-200 dark:border-gray-800 flex items-center justify-center hover:bg-primary hover:text-white transition-all text-gray-500"
                        href="#">
                        <span class="material-symbols-outlined text-xl">share</span>
                    </a>
                    <a class="w-10 h-10 rounded-full border border-gray-200 dark:border-gray-800 flex items-center justify-center hover:bg-primary hover:text-white transition-all text-gray-500"
                        href="#">
                        <span class="material-symbols-outlined text-xl">public</span>
                    </a>
                    <a class="w-10 h-10 rounded-full border border-gray-200 dark:border-gray-800 flex items-center justify-center hover:bg-primary hover:text-white transition-all text-gray-500"
                        href="#">
                        <span class="material-symbols-outlined text-xl">mail</span>
                    </a>
                </div>
            </div>
            <div class="space-y-6">
                <h5 class="text-[#111418] dark:text-white font-bold text-sm uppercase tracking-widest">Site Links</h5>
                <ul class="space-y-4 font-sans text-sm text-[#617589] dark:text-gray-400">
                    <li><a class="hover:text-primary transition-colors" href="#">Categories</a></li>
                    <li><a class="hover:text-primary transition-colors" href="#">About Editorial</a></li>
                    <li><a class="hover:text-primary transition-colors" href="#">Contact Support</a></li>
                    <li><a class="hover:text-primary transition-colors" href="#">RSS Feed</a></li>
                </ul>
            </div>
            <div class="space-y-6">
                <h5 class="text-[#111418] dark:text-white font-bold text-sm uppercase tracking-widest">Legal</h5>
                <ul class="space-y-4 font-sans text-sm text-[#617589] dark:text-gray-400">
                    <li><a class="hover:text-primary transition-colors" href="#">Privacy Policy</a></li>
                    <li><a class="hover:text-primary transition-colors" href="#">Terms of Service</a></li>
                    <li><a class="hover:text-primary transition-colors" href="#">Cookie Settings</a></li>
                    <li><a class="hover:text-primary transition-colors" href="#">Licensing</a></li>
                </ul>
            </div>
        </div>
        <div
            class="max-w-[1200px] mx-auto px-6 py-8 border-t border-gray-50 dark:border-gray-900 flex flex-col md:flex-row justify-between items-center gap-4 text-xs font-sans text-gray-400">
            <p>© 2024 Editorial Blog. Built with precision for the modern web.</p>
            <p>Designed with Newsreader &amp; Tailwind CSS</p>
        </div>
    </footer>
</body>

</html>