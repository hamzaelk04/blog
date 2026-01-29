<!DOCTYPE html>

<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>All Blogs Archive | BlogHub</title>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Newsreader:opsz,wght@6..72,200..800&amp;family=Noto+Sans:wght@400;500;700&amp;display=swap"
        rel="stylesheet" />
    <!-- Material Symbols -->
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
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
                        "sans": ["Noto Sans", "sans-serif"]
                    },
                    borderRadius: { "DEFAULT": "0.25rem", "lg": "0.5rem", "xl": "0.75rem", "full": "9999px" },
                },
            },
        }
    </script>
    <style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }

        body {
            font-family: 'Noto Sans', sans-serif;
        }

        h1,
        h2,
        h3,
        h4,
        .font-display {
            font-family: 'Newsreader', serif;
        }
    </style>
</head>

<body
    class="bg-background-light dark:bg-background-dark text-[#111418] dark:text-gray-100 transition-colors duration-200">
    <!-- Top Navigation Bar -->
    <div class="layout-container flex h-full grow flex-col">
        <header
            class="flex items-center justify-between whitespace-nowrap border-b border-solid border-gray-200 dark:border-gray-800 bg-white dark:bg-background-dark px-6 md:px-10 lg:px-40 py-4 sticky top-0 z-50">
            <div class="flex items-center gap-4 text-primary">
                <div class="size-8">
                    <svg fill="none" viewbox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M42.1739 20.1739L27.8261 5.82609C29.1366 7.13663 28.3989 10.1876 26.2002 13.7654C24.8538 15.9564 22.9595 18.3449 20.6522 20.6522C18.3449 22.9595 15.9564 24.8538 13.7654 26.2002C10.1876 28.3989 7.13663 29.1366 5.82609 27.8261L20.1739 42.1739C21.4845 43.4845 24.5355 42.7467 28.1133 40.548C30.3042 39.2016 32.6927 37.3073 35 35C37.3073 32.6927 39.2016 30.3042 40.548 28.1133C42.7467 24.5355 43.4845 21.4845 42.1739 20.1739Z"
                            fill="currentColor"></path>
                    </svg>
                </div>
                <h2 class="text-[#111418] dark:text-white text-xl font-display font-bold leading-tight tracking-tight">
                    BlogHub</h2>
            </div>
            <nav class="hidden md:flex flex-1 justify-end gap-8">
                <div class="flex items-center gap-8">
                    <a class="text-[#111418] dark:text-gray-300 text-sm font-medium hover:text-primary transition-colors"
                        href="#">All Posts</a>
                    <a class="text-[#111418] dark:text-gray-300 text-sm font-medium hover:text-primary transition-colors"
                        href="#">About</a>
                    <a class="text-[#111418] dark:text-gray-300 text-sm font-medium hover:text-primary transition-colors"
                        href="#">Newsletter</a>
                    <a class="text-[#111418] dark:text-gray-300 text-sm font-medium hover:text-primary transition-colors"
                        href="#">Contact</a>
                </div>
            </nav>
        </header>
        <main class="flex flex-1 justify-center py-10 px-4 md:px-10 lg:px-40">
            <div class="layout-content-container flex flex-col max-w-[1200px] flex-1">
                <!-- Page Heading -->
                <div class="flex flex-col gap-4 mb-8">
                    <h1 class="text-[#111418] dark:text-white text-5xl font-black leading-tight tracking-tight">
                        Archive &amp; Insights
                    </h1>
                    <p class="text-[#617589] dark:text-gray-400 text-lg font-normal max-w-2xl leading-relaxed">
                        Explore our full collection of stories, expert perspectives, and editorial guides. Use the
                        filters below to narrow your discovery.
                    </p>
                </div>
                <!-- Search Bar -->
                <div class="mb-6">
                    <label class="flex flex-col w-full">
                        <div
                            class="flex w-full items-stretch rounded-xl h-14 bg-white dark:bg-gray-900 border border-gray-200 dark:border-gray-800 shadow-sm focus-within:ring-2 focus-within:ring-primary/20 transition-all">
                            <div class="flex items-center justify-center pl-5 text-gray-400">
                                <span class="material-symbols-outlined">search</span>
                            </div>
                            <input
                                class="form-input flex w-full border-none bg-transparent focus:outline-0 focus:ring-0 text-[#111418] dark:text-white placeholder:text-[#617589] px-4 text-base font-normal leading-normal"
                                placeholder="Search for topics, keywords, or titles..." value="" />
                        </div>
                    </label>
                </div>
                <!-- Category Chips -->
                <div class="flex gap-3 pb-8 flex-wrap">
                    <button
                        class="flex h-10 shrink-0 items-center justify-center gap-x-2 rounded-full bg-primary text-white px-6 font-medium text-sm transition-all hover:opacity-90">
                        All Topics
                    </button>
                    <button
                        class="flex h-10 shrink-0 items-center justify-center gap-x-2 rounded-full bg-white dark:bg-gray-800 text-[#111418] dark:text-gray-200 border border-gray-200 dark:border-gray-700 px-6 font-medium text-sm hover:bg-gray-50 dark:hover:bg-gray-700 transition-all">
                        Technology
                    </button>
                    <button
                        class="flex h-10 shrink-0 items-center justify-center gap-x-2 rounded-full bg-white dark:bg-gray-800 text-[#111418] dark:text-gray-200 border border-gray-200 dark:border-gray-700 px-6 font-medium text-sm hover:bg-gray-50 dark:hover:bg-gray-700 transition-all">
                        Lifestyle
                    </button>
                    <button
                        class="flex h-10 shrink-0 items-center justify-center gap-x-2 rounded-full bg-white dark:bg-gray-800 text-[#111418] dark:text-gray-200 border border-gray-200 dark:border-gray-700 px-6 font-medium text-sm hover:bg-gray-50 dark:hover:bg-gray-700 transition-all">
                        Health
                    </button>
                    <button
                        class="flex h-10 shrink-0 items-center justify-center gap-x-2 rounded-full bg-white dark:bg-gray-800 text-[#111418] dark:text-gray-200 border border-gray-200 dark:border-gray-700 px-6 font-medium text-sm hover:bg-gray-50 dark:hover:bg-gray-700 transition-all">
                        Design
                    </button>
                    <button
                        class="flex h-10 shrink-0 items-center justify-center gap-x-2 rounded-full bg-white dark:bg-gray-800 text-[#111418] dark:text-gray-200 border border-gray-200 dark:border-gray-700 px-6 font-medium text-sm hover:bg-gray-50 dark:hover:bg-gray-700 transition-all">
                        Business
                    </button>
                    <button
                        class="flex h-10 shrink-0 items-center justify-center gap-x-2 rounded-full bg-white dark:bg-gray-800 text-[#111418] dark:text-gray-200 border border-gray-200 dark:border-gray-700 px-6 font-medium text-sm hover:bg-gray-50 dark:hover:bg-gray-700 transition-all">
                        Productivity
                    </button>
                </div>
                <!-- Blog Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 py-4">
                    <!-- Post 1 -->
                    <article class="flex flex-col gap-4 group cursor-pointer">
                        <div class="w-full bg-center bg-no-repeat aspect-[16/10] bg-cover rounded-xl shadow-sm group-hover:shadow-md transition-shadow overflow-hidden"
                            data-alt="Minimalist living space with clean lines and neutral colors"
                            style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuAVWaVnGpJsmkUz5l5qImng61hZpig3UjQQuRxXryPhbfs146feYWcD5A17pUco_kf5FPAWik3xNphBA-SZB-ShjhlzmM2H43fMM8L6snnkp4SK8DfE0YgkaiNK104Kka1Ir7haFpVEtaO63Ax3KmNF_f99MYxutTb1tK-X9XyHl9RjG67TYky_RxSwG3lwEXmjXV4LL-fyIS698sBGYcoKBmCgORm2c1CLAQfNWX0zwsammj9kA0un1J5l916F9OOiptdHCBrMeM6w");'>
                        </div>
                        <div class="flex flex-col gap-2">
                            <div class="flex items-center gap-2">
                                <span class="text-primary text-xs font-bold uppercase tracking-wider">Design</span>
                                <span class="text-[#617589] text-xs">•</span>
                                <time class="text-[#617589] text-xs font-normal">Oct 24, 2023</time>
                            </div>
                            <h3
                                class="text-[#111418] dark:text-white text-2xl font-bold leading-snug group-hover:text-primary transition-colors">
                                The Future of Minimalist Design in the Digital Age
                            </h3>
                            <p
                                class="text-[#617589] dark:text-gray-400 text-sm font-normal leading-relaxed line-clamp-3">
                                Explore how less is more in the world of modern interfaces and architecture. We dive
                                deep into why simplicity is the ultimate sophistication...
                            </p>
                            <div class="flex items-center gap-2 mt-2">
                                <div class="size-6 rounded-full bg-gray-200 dark:bg-gray-700"
                                    data-alt="Portrait of Alex Reed"
                                    style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuBbAr2BYwBCH5V7_MTAjP7r866oD_N4IZXkmPgdyKWK21SuNMuOe4YYB-otU-pCCaSwTa33uKFVliNU_ndU8qT4GAMTH5s1ul3kMjqqR4r0ru5E9IKS8SjW89LkdLpBOO_ehqfLesdT_qdAm996XDi45VmzfWbj-xWSaNn6OeSax2HQAXU5b4CJbc3tIKf8gfCHk-CGy3MJCeV7u8DT13Yi53p-i20_geuewSpbtonJvpNezL1195d9S5-93KGcVYqtiQsj_Kt5jqqK'); background-size: cover;">
                                </div>
                                <span class="text-[#111418] dark:text-gray-300 text-xs font-medium">Alex Reed</span>
                            </div>
                        </div>
                    </article>
                    <!-- Post 2 -->
                    <article class="flex flex-col gap-4 group cursor-pointer">
                        <div class="w-full bg-center bg-no-repeat aspect-[16/10] bg-cover rounded-xl shadow-sm group-hover:shadow-md transition-shadow overflow-hidden"
                            data-alt="Productivity setup with laptop and organized desk"
                            style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDLfHAwTDmHxUD8cudf5Kui25XmzOhVUpE29v3LtT1St6D2fzc7VMrRw3-Wpx18dsWvymiJ_Z3rW4TvlbPG85ahm6ZvdwHnlwkJ4w8J6XWDOtDJ7FqrDzSYlXjtbLs-EOPvFb6ByC-g7aYSbL20kZzv8wfKDiQi_zVsTFQly8WlFy7Fxdc-wGbyc8N2jQIXjlx06a_l10WqguxQX8FWB7rCq1GZ_J6-TG36XVrLiZQkGbtuXA8iFQ_coKX4xsx5WPoyo0JKxMp9DbEb");'>
                        </div>
                        <div class="flex flex-col gap-2">
                            <div class="flex items-center gap-2">
                                <span
                                    class="text-primary text-xs font-bold uppercase tracking-wider">Productivity</span>
                                <span class="text-[#617589] text-xs">•</span>
                                <time class="text-[#617589] text-xs font-normal">Oct 22, 2023</time>
                            </div>
                            <h3
                                class="text-[#111418] dark:text-white text-2xl font-bold leading-snug group-hover:text-primary transition-colors">
                                10 Ways to Improve Your Daily Output
                            </h3>
                            <p
                                class="text-[#617589] dark:text-gray-400 text-sm font-normal leading-relaxed line-clamp-3">
                                Simple habits you can adopt today to reclaim your time and focus. From deep work
                                sessions to digital detoxing, discover what works.
                            </p>
                            <div class="flex items-center gap-2 mt-2">
                                <div class="size-6 rounded-full bg-gray-200 dark:bg-gray-700"
                                    data-alt="Portrait of Sarah Chen"
                                    style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuAsiUWbyvISvOsDK10N1a47_PESG1FsEXfcIShJ29LPvOQs2LzfEbRji-dE-s6NabVgDsQ5_6Gq3VhvMFrpdZMBfUOSfe64Aoh9U0-P6q6l7qc4mu3YrQMH7kIcx271KvURkaMLxpAlN15sRhAd4zKhW1nioTyDln4dZNuZ0WqsZf8jQldl3Tkw3fQ3VIXC2lxSsSw1uZmHWALn9-2-SY0CsElE3Bn2EM1YXQB0bkAfgWr4NxvxgtFOH-J3n5tmtIMBAhbcwJH2voUv'); background-size: cover;">
                                </div>
                                <span class="text-[#111418] dark:text-gray-300 text-xs font-medium">Sarah Chen</span>
                            </div>
                        </div>
                    </article>
                    <!-- Post 3 -->
                    <article class="flex flex-col gap-4 group cursor-pointer">
                        <div class="w-full bg-center bg-no-repeat aspect-[16/10] bg-cover rounded-xl shadow-sm group-hover:shadow-md transition-shadow overflow-hidden"
                            data-alt="Futuristic smartwatch showing health metrics"
                            style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuD8p7oMs0HnbjRiJlEq106R9IkfFqRTqcu3wcKJb0gmmt5FO3OEKzDXQQgcfFh2LypWRNNJy_xnTqUZlXA-2BJCZKhFMKFmCwAEnbtQFd5PC95XBdf1E4wpGuJ716cTVzhw95BgwBeYSYNlTO_jqR5PkEFXgdo79RGc4hsbcOIfS94w_LmlCaGv0qvCtgBXKjZhcPO21RY12h6dn0HQnKdbZYCb9vVY2sEC2M6uVik0xg2HHWuKf0axz5w57VKTDvBPlMK-MqQT_0EN");'>
                        </div>
                        <div class="flex flex-col gap-2">
                            <div class="flex items-center gap-2">
                                <span class="text-primary text-xs font-bold uppercase tracking-wider">Health</span>
                                <span class="text-[#617589] text-xs">•</span>
                                <time class="text-[#617589] text-xs font-normal">Oct 20, 2023</time>
                            </div>
                            <h3
                                class="text-[#111418] dark:text-white text-2xl font-bold leading-snug group-hover:text-primary transition-colors">
                                The Intersection of Tech and Modern Health
                            </h3>
                            <p
                                class="text-[#617589] dark:text-gray-400 text-sm font-normal leading-relaxed line-clamp-3">
                                How wearable technology is changing the way we monitor our physical health and the
                                ethics of personal data tracking in medicine.
                            </p>
                            <div class="flex items-center gap-2 mt-2">
                                <div class="size-6 rounded-full bg-gray-200 dark:bg-gray-700"
                                    data-alt="Portrait of Jordan Smith"
                                    style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuDRHRa8TgyLuiziQ7Fr6cFxb7LcvZc0QUuXMo-6TjB7pdO3ZiwFH73z7U_bEjp5sJc4vBT4g5nphNQ6QsOG1pmuRGIwNMNp9Z5XneDqeWlYryZq7jilOdY9YFyDwNBcdciJdOB6V_78UHxXMMc5-aGQUJDPKEaaMtwm9TsYEa_blg60iNqgBm54yqZNHm28AfgHrq3auyFpASz5MpIGeV0YGZausfBMbRWlOI39HZOp_dIQ0okOApFC6QiiJJ7r9EFDfRNrs1xPBL7H'); background-size: cover;">
                                </div>
                                <span class="text-[#111418] dark:text-gray-300 text-xs font-medium">Jordan Smith</span>
                            </div>
                        </div>
                    </article>
                    <!-- Post 4 -->
                    <article class="flex flex-col gap-4 group cursor-pointer">
                        <div class="w-full bg-center bg-no-repeat aspect-[16/10] bg-cover rounded-xl shadow-sm group-hover:shadow-md transition-shadow overflow-hidden"
                            data-alt="Person meditating by a lake at sunrise"
                            style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuAHN5etESlul5Cscw_sVp2V8IEQIxjWhBhLn56o5kPfdnoekMxq34I8XbhIG3QdGgeXbmgcNvVxdgh-MWIlhMdFe-wEQDSTl1SU7VU-8Gh_BOTW03NiiIorIF0uM6invzsSlzNVD9VmXuU_TJ2mFAnWId5UZJq91UqNOs-wt3SEqOyhlnf9EATHspifKNNPdJzDjMdk0hq5lxXfdTQSdjzobfL8dYoKwxfepgaXIrW-tlNRcLQkkQgmyxyFJDB9T7H8rhD3vgj3XENl");'>
                        </div>
                        <div class="flex flex-col gap-2">
                            <div class="flex items-center gap-2">
                                <span class="text-primary text-xs font-bold uppercase tracking-wider">Lifestyle</span>
                                <span class="text-[#617589] text-xs">•</span>
                                <time class="text-[#617589] text-xs font-normal">Oct 18, 2023</time>
                            </div>
                            <h3
                                class="text-[#111418] dark:text-white text-2xl font-bold leading-snug group-hover:text-primary transition-colors">
                                Modern Lifestyle and Mental Wellness
                            </h3>
                            <p
                                class="text-[#617589] dark:text-gray-400 text-sm font-normal leading-relaxed line-clamp-3">
                                Balancing a fast-paced career with mindful living. We talk to psychologists about the
                                importance of daily meditation and slow living.
                            </p>
                            <div class="flex items-center gap-2 mt-2">
                                <div class="size-6 rounded-full bg-gray-200 dark:bg-gray-700"
                                    data-alt="Portrait of Dr. Lisa Wong"
                                    style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuDCAu5MfMfrIshgKhlKX64KEyLyAzv-dgnbV2kawmfErbp4VXrinTYPqFTHMh7APxItgYBGJkfk2dzSdNLE2n9-BQReQ9bju6WX8156F3EWNAlwK9E-ql-rRnqsa8cG3uD7YV6KOVu1EjBuO1TjIb9u7pzDKfjqXPX38ftAmSyX9cXWZDUdEd4JTfaTuhM0XCBvgaE30SGnyGKJTsj00BngOls2S3bMLpAsYvnTMsPAn2WcsQZTrSVTJp1AyBkheClZkWIPVZ9vcvzy'); background-size: cover;">
                                </div>
                                <span class="text-[#111418] dark:text-gray-300 text-xs font-medium">Dr. Lisa Wong</span>
                            </div>
                        </div>
                    </article>
                    <!-- Post 5 -->
                    <article class="flex flex-col gap-4 group cursor-pointer">
                        <div class="w-full bg-center bg-no-repeat aspect-[16/10] bg-cover rounded-xl shadow-sm group-hover:shadow-md transition-shadow overflow-hidden"
                            data-alt="Skyline of a modern financial district"
                            style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCHfLc_KOH1uUqvOEs7A5dlBAXaZKnzM4ToyGluHTJB5PDRt23Kyu7-Lot8NnQxHy_gZDtwAoBV9u0592rk02OmHjxCj7FvaOFfBji39AmC1wdvUV7u1aInjZKKzGUs4hOqsHSDDOU36ZEx51sWHHYqN79wgTdEvneh8ND_KqFhj2MaFNBNrPXocfG9xb5FsRLQldto8RlqWrUmHu7GsqUsAHEljYYdGWMFQ5CX1FC11Jq8dTQNIGRW49XjPItFI7Qc9yLUewDVPMRS");'>
                        </div>
                        <div class="flex flex-col gap-2">
                            <div class="flex items-center gap-2">
                                <span class="text-primary text-xs font-bold uppercase tracking-wider">Business</span>
                                <span class="text-[#617589] text-xs">•</span>
                                <time class="text-[#617589] text-xs font-normal">Oct 15, 2023</time>
                            </div>
                            <h3
                                class="text-[#111418] dark:text-white text-2xl font-bold leading-snug group-hover:text-primary transition-colors">
                                Scaling Your Startup in a Competitive Market
                            </h3>
                            <p
                                class="text-[#617589] dark:text-gray-400 text-sm font-normal leading-relaxed line-clamp-3">
                                Key insights from industry leaders on navigating the complex landscape of 2024 business
                                growth and sustainable scaling strategies.
                            </p>
                            <div class="flex items-center gap-2 mt-2">
                                <div class="size-6 rounded-full bg-gray-200 dark:bg-gray-700"
                                    data-alt="Portrait of Michael Doe"
                                    style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuDAk7_LCZ9-8q9YQeNI01Xpjv1DByxHovQuHePYH6L3mYX4culXYCGBGp6DniTIJnhqvC0VuL6EM461jdMrVs41uKc_phuNtcT48QC6dKmVT3QPrOGTFea3BHAGYKrf_qKtAmr-TyxsUsKO4m0-YB35eTafgf-e-uoDg9V_TqJtOVpN56b6kX7hWx5_ZNiUlcIf_u_vXwocnPT9_mH9T7HwlGJujbY9t5l7M6KWxcEmXC_U7hF1VIiQenBg2bZYOI6SO04WIFGZLY4D'); background-size: cover;">
                                </div>
                                <span class="text-[#111418] dark:text-gray-300 text-xs font-medium">Michael Doe</span>
                            </div>
                        </div>
                    </article>
                    <!-- Post 6 -->
                    <article class="flex flex-col gap-4 group cursor-pointer">
                        <div class="w-full bg-center bg-no-repeat aspect-[16/10] bg-cover rounded-xl shadow-sm group-hover:shadow-md transition-shadow overflow-hidden"
                            data-alt="Solar panels on a modern green building"
                            style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuAFuz_k1ceHURttWlNUtF9vkwqWpPUU0Z9DouiMkPhHoKpKGOQi2xuC68HXdO79gXUE2nqu2a3pHTp-mK9mLDgkRCTHmtD0JvdoX6F-YnYD0NWbwANChuzWP6K7LDk4Lc1CVOuhuRzFDKrhqJd0ACxxs6dUL4tQ0wClXFL_i-EN6QJQuH-9iSGWpVLlEUtHcaSqaJrd8V-OoyT1XOUUuH2KlBVTzk2NvnjHF1diKxAzACMzzwu7ov3mH0lMyBfi6nWHJKD-MqOPH-K4");'>
                        </div>
                        <div class="flex flex-col gap-2">
                            <div class="flex items-center gap-2">
                                <span class="text-primary text-xs font-bold uppercase tracking-wider">Design</span>
                                <span class="text-[#617589] text-xs">•</span>
                                <time class="text-[#617589] text-xs font-normal">Oct 12, 2023</time>
                            </div>
                            <h3
                                class="text-[#111418] dark:text-white text-2xl font-bold leading-snug group-hover:text-primary transition-colors">
                                Sustainable Practices for Modern Architects
                            </h3>
                            <p
                                class="text-[#617589] dark:text-gray-400 text-sm font-normal leading-relaxed line-clamp-3">
                                Building for the future with eco-friendly materials and energy-efficient systems. Why
                                green design is no longer an option but a requirement.
                            </p>
                            <div class="flex items-center gap-2 mt-2">
                                <div class="size-6 rounded-full bg-gray-200 dark:bg-gray-700"
                                    data-alt="Portrait of Emma Vance"
                                    style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuCfayCsEIvFeSRB0ELyAOcLuLofoEMsQu_A17Sp_Jq7nG2T5_EWlSuKBf6CpbceNq7WTLoWr3mV5V0mh55DOIb4btBm7CLDOJi6w4dwF5ITay-0luYcnQDVhHdFH_SiQLcfvGaaslGazvbzHotkQeoFij-RzLu2U52XrABt2XTQVpFOK-eHaVddz1aWjaQ_Fg6AtbspQfyBk1eCLlz33yJtouUFhqq97DXCw6iDM3pgBd2drIZ5vBgcAUzmFDPxA86VGB5TnZWBXHOM'); background-size: cover;">
                                </div>
                                <span class="text-[#111418] dark:text-gray-300 text-xs font-medium">Emma Vance</span>
                            </div>
                        </div>
                    </article>
                </div>
                <!-- Load More Button -->
                <div class="flex justify-center py-12">
                    <button
                        class="px-10 py-4 bg-white dark:bg-gray-900 text-primary border-2 border-primary rounded-xl font-bold hover:bg-primary hover:text-white transition-all duration-300">
                        View More Articles
                    </button>
                </div>
            </div>
        </main>
        <!-- Footer -->
        <footer
            class="bg-white dark:bg-background-dark border-t border-gray-200 dark:border-gray-800 py-12 px-6 md:px-10 lg:px-40">
            <div class="max-w-[1200px] mx-auto flex flex-col md:flex-row justify-between items-center gap-6">
                <div class="flex items-center gap-4 text-primary">
                    <div class="size-6">
                        <svg fill="none" viewbox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M42.1739 20.1739L27.8261 5.82609C29.1366 7.13663 28.3989 10.1876 26.2002 13.7654C24.8538 15.9564 22.9595 18.3449 20.6522 20.6522C18.3449 22.9595 15.9564 24.8538 13.7654 26.2002C10.1876 28.3989 7.13663 29.1366 5.82609 27.8261L20.1739 42.1739C21.4845 43.4845 24.5355 42.7467 28.1133 40.548C30.3042 39.2016 32.6927 37.3073 35 35C37.3073 32.6927 39.2016 30.3042 40.548 28.1133C42.7467 24.5355 43.4845 21.4845 42.1739 20.1739Z"
                                fill="currentColor"></path>
                        </svg>
                    </div>
                    <h2 class="text-[#111418] dark:text-white text-lg font-display font-bold">BlogHub</h2>
                </div>
                <p class="text-[#617589] dark:text-gray-400 text-sm">
                    © 2023 BlogHub Editorial. All rights reserved.
                </p>
                <div class="flex gap-6">
                    <a class="text-[#617589] dark:text-gray-400 hover:text-primary transition-colors"
                        href="#">Twitter</a>
                    <a class="text-[#617589] dark:text-gray-400 hover:text-primary transition-colors"
                        href="#">LinkedIn</a>
                    <a class="text-[#617589] dark:text-gray-400 hover:text-primary transition-colors" href="#">RSS</a>
                </div>
            </div>
        </footer>
    </div>
</body>

</html>