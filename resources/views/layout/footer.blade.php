<!-- filepath: c:\Users\pradip bhatt\Desktop\Laravel-11-CRUD-system\resources\views\layout\footer.blade.php -->
<footer class="bg-gray-900 text-gray-400 py-8">
    <div class="container mx-auto px-6 flex flex-col md:flex-row justify-between items-center">
        <!-- Left Section -->
        <div class="text-center md:text-left mb-6 md:mb-0">
            <h2 class="text-lg font-semibold text-white">Laravel CRUD System</h2>
            <p class="text-sm">© {{ date('Y') }} All rights reserved.</p>
        </div>

        <!-- Navigation Links -->
        <div class="flex flex-col md:flex-row space-y-4 md:space-y-0 md:space-x-6 text-center">
            <a href="/" class="text-gray-400 hover:text-white transition">Home</a>
            <a href="/movies" class="text-gray-400 hover:text-white transition">Movies</a>
            <a href="/users" class="text-gray-400 hover:text-white transition">Users</a>
        </div>

        <!-- Social Media Links -->
        <div class="flex space-x-4 mt-6 md:mt-0">
            <a href="#" class="text-gray-400 hover:text-white transition">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M22.675 0h-21.35c-.733 0-1.325.592-1.325 1.325v21.351c0 .733.592 1.324 1.325 1.324h11.495v-9.294h-3.125v-3.622h3.125v-2.672c0-3.1 1.893-4.788 4.659-4.788 1.325 0 2.463.099 2.794.143v3.24l-1.918.001c-1.504 0-1.794.715-1.794 1.763v2.313h3.587l-.467 3.622h-3.12v9.294h6.116c.733 0 1.325-.591 1.325-1.324v-21.35c0-.733-.592-1.325-1.325-1.325z"/>
                </svg>
            </a>
            <a href="#" class="text-gray-400 hover:text-white transition">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M12 2.163c-5.468 0-9.837 4.369-9.837 9.837 0 4.355 2.813 8.065 6.688 9.387.488.09.667-.213.667-.474 0-.234-.008-.855-.013-1.678-2.722.591-3.293-1.311-3.293-1.311-.444-1.127-1.084-1.428-1.084-1.428-.886-.606.067-.594.067-.594 1.003.07 1.531 1.031 1.531 1.031.87 1.491 2.283 1.06 2.841.811.089-.631.341-1.06.621-1.304-2.173-.247-4.455-1.086-4.455-4.834 0-1.068.381-1.941 1.008-2.623-.101-.247-.437-1.243.096-2.591 0 0 .82-.263 2.688 1.003a9.373 9.373 0 0 1 2.448-.329c.83.004 1.667.112 2.448.329 1.868-1.266 2.688-1.003 2.688-1.003.533 1.348.197 2.344.096 2.591.627.682 1.008 1.555 1.008 2.623 0 3.758-2.287 4.583-4.465 4.824.351.303.664.901.664 1.815 0 1.311-.012 2.369-.012 2.693 0 .263.177.567.672.471 3.875-1.322 6.688-5.032 6.688-9.387 0-5.468-4.369-9.837-9.837-9.837z"/>
                </svg>
            </a>
            <a href="#" class="text-gray-400 hover:text-white transition">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.723-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-2.717 0-4.917 2.2-4.917 4.917 0 .386.044.762.127 1.124-4.083-.205-7.702-2.16-10.126-5.134-.423.725-.666 1.562-.666 2.457 0 1.694.863 3.188 2.175 4.065-.802-.026-1.555-.246-2.213-.616v.062c0 2.366 1.683 4.342 3.918 4.788-.41.111-.843.171-1.287.171-.314 0-.615-.03-.916-.086.631 1.953 2.445 3.377 4.604 3.417-1.68 1.318-3.809 2.104-6.102 2.104-.396 0-.788-.023-1.175-.067 2.179 1.397 4.768 2.212 7.548 2.212 9.054 0 14.002-7.496 14.002-13.986 0-.213-.005-.425-.014-.636.961-.695 1.8-1.562 2.462-2.549z"/>
                </svg>
            </a>
        </div>
    </div>
</footer>