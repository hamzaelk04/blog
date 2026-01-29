<!DOCTYPE html>

<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Create New Blog Post</title>
    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Newsreader:ital,opsz,wght@0,6..72,200..800;1,6..72,200..800&amp;family=Noto+Sans:ital,wght@0,100..900;1,100..900&amp;display=swap"
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
                        "sans": ["Noto Sans", "sans-serif"]
                    },
                    borderRadius: { "DEFAULT": "0.25rem", "lg": "0.5rem", "xl": "0.75rem", "full": "9999px" },
                },
            },
        }
    </script>
</head>

<body
    class="bg-background-light dark:bg-background-dark font-sans text-[#111418] dark:text-white transition-colors duration-200">
    <!-- Top Navigation Bar -->
    <div class="w-full bg-white dark:bg-background-dark border-b border-[#f0f2f4] dark:border-[#2a343f]">
        <div class="max-w-[1200px] mx-auto px-4 sm:px-10 py-3 flex items-center justify-between">
            <div class="flex items-center gap-8">
                <div class="flex items-center gap-4 text-[#111418] dark:text-white">
                    <div class="size-6 text-primary">
                        <svg fill="none" viewbox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M42.1739 20.1739L27.8261 5.82609C29.1366 7.13663 28.3989 10.1876 26.2002 13.7654C24.8538 15.9564 22.9595 18.3449 20.6522 20.6522C18.3449 22.9595 15.9564 24.8538 13.7654 26.2002C10.1876 28.3989 7.13663 29.1366 5.82609 27.8261L20.1739 42.1739C21.4845 43.4845 24.5355 42.7467 28.1133 40.548C30.3042 39.2016 32.6927 37.3073 35 35C37.3073 32.6927 39.2016 30.3042 40.548 28.1133C42.7467 24.5355 43.4845 21.4845 42.1739 20.1739Z"
                                fill="currentColor"></path>
                        </svg>
                    </div>
                    <h2 class="text-lg font-bold leading-tight tracking-[-0.015em] font-display">BlogPlatform</h2>
                </div>
                <div class="hidden md:flex items-center gap-6">
                    <a class="text-sm font-medium leading-normal hover:text-primary transition-colors"
                        href="#">Discover</a>
                    <a class="text-sm font-medium leading-normal hover:text-primary transition-colors"
                        href="#">Trending</a>
                    <a class="text-sm font-medium leading-normal hover:text-primary transition-colors" href="#">My
                        Posts</a>
                </div>
            </div>
            <div class="flex items-center gap-4">
                <label class="hidden sm:flex flex-col min-w-40 !h-10 max-w-64">
                    <div class="flex w-full flex-1 items-stretch rounded-lg h-full bg-[#f0f2f4] dark:bg-[#1c2a38]">
                        <div class="text-[#617589] flex items-center justify-center pl-4 rounded-l-lg">
                            <span class="material-symbols-outlined text-xl">search</span>
                        </div>
                        <input
                            class="form-input flex w-full min-w-0 flex-1 border-none bg-transparent focus:outline-0 focus:ring-0 h-full placeholder:text-[#617589] px-4 text-base font-normal leading-normal"
                            placeholder="Search" value="" />
                    </div>
                </label>
                <div class="bg-center bg-no-repeat aspect-square bg-cover rounded-full size-10 border border-[#dbe0e6] dark:border-[#2a343f]"
                    data-alt="User profile avatar"
                    style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCbhuWEpqJU7Y8Es1luhTE_lW6WNVNgG8K-dFspp2PYfVl83-4ZWwzHPQCITRVkEiutmjVoUWdvCwLSNX1TasxukEciOON9zOvMns2POG97nC5w7XDhff9mkdnmoI-tXtPJjtKWZ0qH7bS2Wzx5V4f5qUk5iM57OtMkOuRSTVKy0lfLsVE0CN-EiY6bgxqQRH7PZtOWMDhTWu8SWB_A820mtHF4pAAJXtZ_dR1QOVeb_duwRVBP1ErwVdFJo_y2vBMovQhxySFIBrH1");'>
                </div>
            </div>
        </div>
    </div>
    <!-- Main Content -->
    <main class="max-w-[960px] mx-auto px-4 py-8 md:py-12">
        <!-- Page Heading -->
        <div class="flex flex-col gap-3 mb-10 text-center">
            <h1
                class="text-[#111418] dark:text-white text-4xl md:text-5xl font-black leading-tight tracking-[-0.033em] font-display">
                Create New Post</h1>
            <p class="text-[#617589] dark:text-[#a0b0c0] text-lg font-normal leading-normal">Share your unique
                perspective with the world.</p>
        </div>
        <!-- Form Card -->
        <div
            class="bg-white dark:bg-[#1c2a38] rounded-xl shadow-sm border border-[#dbe0e6] dark:border-[#2a343f] overflow-hidden">
            <form class="flex flex-col" method="post" action="{{ route('posts.store') }}">
                @csrf
                <!-- Blog Title Section -->
                <div class="p-6 md:p-8 border-b border-[#f0f2f4] dark:border-[#2a343f]">
                    <h3 class="text-[#111418] dark:text-white text-xl font-bold leading-tight mb-4 font-display">Blog
                        Title</h3>
                    <input name="titre"
                        class="w-full border border-[#dbe0e6] dark:border-[#3a4a5a] bg-white dark:bg-background-dark rounded-lg h-16 px-6 text-2xl font-semibold font-display placeholder:text-[#617589] dark:placeholder:text-[#617589]/50 focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all outline-none"
                        placeholder="Enter an engaging title..." type="text" />
                </div>
                <!-- Category Section -->
                <div class="p-6 md:p-8 border-b border-[#f0f2f4] dark:border-[#2a343f]">
                    <h3 class="text-[#111418] dark:text-white text-xl font-bold leading-tight mb-4 font-display">
                        Category</h3>
                    <div class="max-w-md">
                        <select name="category_id"
                            class="w-full border border-[#dbe0e6] dark:border-[#3a4a5a] bg-white dark:bg-background-dark rounded-lg h-12 px-4 text-base focus:ring-2 focus:ring-primary/20 focus:border-primary outline-none">
                            <option disabled="" selected="" value="">Select a category</option>
                            <option value="1">Technology</option>
                            <option value="2">Lifestyle</option>
                            <option value="3">Travel</option>
                            <option value="4">Finance</option>
                            <option value="5">Health</option>
                        </select>
                    </div>
                </div>
                <!-- Editor Section (Rich Text Area) -->
                <div class="p-6 md:p-8">
                    <h3 class="text-[#111418] dark:text-white text-xl font-bold leading-tight mb-4 font-display">Content
                    </h3>
                    <!-- Editor Toolbar Mock -->
                    <div
                        class="flex flex-wrap items-center gap-1 mb-2 p-2 bg-[#f8f9fa] dark:bg-background-dark/50 rounded-t-lg border border-[#dbe0e6] dark:border-[#3a4a5a] border-b-0">
                        <button
                            class="p-2 hover:bg-[#eee] dark:hover:bg-[#3a4a5a] rounded transition-colors text-[#617589] dark:text-[#a0b0c0]"
                            type="button"><span class="material-symbols-outlined">format_bold</span></button>
                        <button
                            class="p-2 hover:bg-[#eee] dark:hover:bg-[#3a4a5a] rounded transition-colors text-[#617589] dark:text-[#a0b0c0]"
                            type="button"><span class="material-symbols-outlined">format_italic</span></button>
                        <button
                            class="p-2 hover:bg-[#eee] dark:hover:bg-[#3a4a5a] rounded transition-colors text-[#617589] dark:text-[#a0b0c0]"
                            type="button"><span class="material-symbols-outlined">format_list_bulleted</span></button>
                        <button
                            class="p-2 hover:bg-[#eee] dark:hover:bg-[#3a4a5a] rounded transition-colors text-[#617589] dark:text-[#a0b0c0]"
                            type="button"><span class="material-symbols-outlined">format_list_numbered</span></button>
                        <div class="w-px h-6 bg-[#dbe0e6] dark:bg-[#3a4a5a] mx-1"></div>
                        <button
                            class="p-2 hover:bg-[#eee] dark:hover:bg-[#3a4a5a] rounded transition-colors text-[#617589] dark:text-[#a0b0c0]"
                            type="button"><span class="material-symbols-outlined">link</span></button>
                        <button
                            class="p-2 hover:bg-[#eee] dark:hover:bg-[#3a4a5a] rounded transition-colors text-[#617589] dark:text-[#a0b0c0]"
                            type="button"><span class="material-symbols-outlined">image</span></button>
                        <button
                            class="p-2 hover:bg-[#eee] dark:hover:bg-[#3a4a5a] rounded transition-colors text-[#617589] dark:text-[#a0b0c0]"
                            type="button"><span class="material-symbols-outlined">format_quote</span></button>
                    </div>
                    <!-- Textarea -->
                    <textarea name="contenu"
                        class="w-full border border-[#dbe0e6] dark:border-[#3a4a5a] bg-white dark:bg-background-dark rounded-b-lg p-6 min-h-[400px] text-lg font-display leading-relaxed placeholder:text-[#617589] focus:ring-2 focus:ring-primary/20 focus:border-primary outline-none resize-none"
                        placeholder="Write your story here..."></textarea>
                </div>
                <!-- Action Footer -->
                <div
                    class="p-6 md:p-8 bg-[#f8f9fa] dark:bg-[#1a242f] border-t border-[#dbe0e6] dark:border-[#2a343f] flex flex-col sm:flex-row justify-end items-center gap-4">
                    <button
                        class="w-full sm:w-auto px-8 py-3 rounded-lg border border-[#dbe0e6] dark:border-[#3a4a5a] text-[#111418] dark:text-white font-semibold hover:bg-[#e9ecef] dark:hover:bg-[#3a4a5a] transition-colors"
                        type="button">
                        Save as Draft
                    </button>
                    <button
                        class="w-full sm:w-auto px-8 py-3 rounded-lg bg-primary text-white font-bold hover:bg-primary/90 transition-all shadow-md shadow-primary/20"
                        type="submit">
                        Publish Post
                    </button>
                </div>
            </form>
        </div>
        <!-- Footer Info -->
        <div class="mt-8 text-center">
            <p class="text-sm text-[#617589]">Your post will be reviewed and published according to our Community
                Guidelines.</p>
        </div>
    </main>
    <!-- Post Preview Card (Floating/Subtle Background element for aesthetics) -->
    <div class="fixed bottom-10 right-10 hidden xl:block">
        <div
            class="bg-white dark:bg-[#1c2a38] p-4 rounded-xl border border-[#dbe0e6] dark:border-[#2a343f] shadow-xl w-64">
            <div class="flex items-center gap-3 mb-3">
                <div class="size-8 rounded-full bg-primary/10 flex items-center justify-center text-primary">
                    <span class="material-symbols-outlined text-lg">tips_and_updates</span>
                </div>
                <p class="text-xs font-bold uppercase tracking-wider text-primary">Writing Tip</p>
            </div>
            <p class="text-sm text-[#617589] dark:text-[#a0b0c0] italic">"Titles with 6-12 words tend to receive the
                most engagement. Try adding a powerful verb!"</p>
        </div>
    </div>
</body>

</html>