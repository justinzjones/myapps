
<div class="flex flex-col min-h-screen">
    <!-- The whole future lies in uncertainty: live immediately. - Seneca -->

    <!-- Layout Wrapper -->
    <x-magellan-layout>
        <!-- Hero Section -->
        <x-travel_hero :country="$country" />
                <!-- Travel Navbar -->
        <div class="z-10 w-full bg-gray-800">
            <x-travel_navbar />
        </div>

        <!-- Main Content -->
        <!-- <div class="flex-grow">
            <div class="p-6">
                <h2>Main Content Section</h2>
                <p>Here is some content above the navbar...</p>
                <div class="mt-10 bg-gray-100 h-96"></div>
                <div class="mt-10 bg-gray-200 h-96"></div>
                <div class="mt-10 bg-gray-300 h-96"></div>
            </div>
        </div> -->



        <!-- Footer -->
        <x-footer class="w-full" />
    </x-magellan-layout>
</div>

