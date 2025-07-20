<div class="group relative overflow-hidden bg-gradient-to-br from-gray-900 to-gray-950 p-6 rounded-2xl border border-gray-800 hover:border-gray-600 transition-all duration-300 hover:shadow-lg hover:shadow-gray-900/30">
    <!-- Glow effect on hover -->
    <div class="absolute inset-0 bg-gradient-to-br from-blue-900/10 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>

    <div class="relative z-10 flex flex-col gap-4 h-full">
        <!-- Header section -->
        <div class="flex justify-between items-start">
            <div>
                <span class="text-xs font-semibold tracking-wider text-blue-400/90 uppercase">Tech Company Inc</span>
                <h1 class="text-2xl font-bold text-white mt-2 bg-gradient-to-r from-white to-gray-300 bg-clip-text text-transparent">Senior Frontend Developer</h1>
            </div>
            <div class="flex-shrink-0">
                <div class="w-14 h-14 rounded-lg overflow-hidden border-2 border-gray-700 group-hover:border-blue-500 transition-colors duration-300">
                    <img src="https://placehold.co/400" alt="Company logo" class="w-full h-full object-cover">
                </div>
            </div>
        </div>

        <!-- Details section -->
        <div class="flex flex-col gap-3">
            <div class="flex items-center gap-3 text-sm">
                <span class="flex items-center gap-1.5 text-gray-300">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                    </svg>
                    Full-time
                </span>
                <span class="flex items-center gap-1.5 text-gray-300">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z" />
                    </svg>
                    $90,000
                </span>
{{--                <span class="flex items-center gap-1.5 text-gray-300">--}}
{{--                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">--}}
{{--                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />--}}
{{--                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />--}}
{{--                    </svg>--}}
{{--                    Remote--}}
{{--                </span>--}}
            </div>

{{--            <p class="text-gray-400 text-sm leading-relaxed">We're looking for an experienced frontend developer to lead our React initiatives and help build our design system.</p>--}}
        </div>

        <!-- Tags section -->
        <div class="mt-auto flex flex-wrap gap-2">
            <x-tag tag="React"/>
        </div>

        <!-- Footer CTA -->
        <div class="mt-4 flex justify-between items-center">
            <span class="text-xs text-gray-500">Posted 2 days ago</span>
            <button class="text-sm font-medium px-4 py-2 rounded-lg bg-gray-800 text-white hover:bg-gray-700 transition-colors duration-200 group-hover:bg-blue-600 group-hover:text-white pointer-cursor">
                Apply Now
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 inline ml-1 -mr-1 group-hover:translate-x-1 transition-transform duration-200" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                </svg>
            </button>
        </div>
    </div>
</div>
