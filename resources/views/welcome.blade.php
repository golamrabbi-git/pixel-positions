<x-layout>
    <section>
        <section class="text-center">
            <h1 class="font-bold text-4xl">Search for Jobs</h1>
            <form action="" class="mt-6">
                <input type="text" name="search" id="search" placeholder="Search for job " class="p-4 bg-white/25 border-white/10 px-5 py-4 w-full max-w-xl rounded-2xl ">
            </form>
        </section>
        <div class="py-6">
            <x-heading heading="Top Jobs"/>
        </div>
            <div class="grid lg:grid-cols-3 gap-4">
                <x-JobCard/>
                <x-JobCard/>
                <x-JobCard/>
            </div>
        <div class="py-6">
            <x-heading heading="Tags"/>
        </div>
        <div class="flex gap-x-2">
            <x-tag size="base">Base Badge</x-tag>
            <x-tag size="base">Base Badge</x-tag>
            <x-tag size="base">Base Badge</x-tag>
            <x-tag size="base">Base Badge</x-tag>
            <x-tag size="base">Base Badge</x-tag>
            <x-tag size="base">Base Badge</x-tag>
            <x-tag size="base">Base Badge</x-tag>

        </div>
        <div class="py-6">
            <x-heading heading="Recent Jobs"/>
        </div>
        <div class="flex flex-col gap-y-4">
            <x-RecentJobCard/>
            <x-RecentJobCard/>
            <x-RecentJobCard/>
            <x-RecentJobCard/>
        </div>
    </section>
</x-layout>
