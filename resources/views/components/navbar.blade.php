<nav class="bg-pink-600 text-white shadow-lg">
    <div class="max-w-6xl mx-auto px-4">
        <div class="flex justify-between items-center py-4">
            <div class="text-xl font-bold">
                📚 JADWALIN 📚
            </div>
            <div class="space-x-4">
                <a href="{{ route('dashboard') }}" class="hover:bg-pink-700 px-3 py-2 rounded">Dashboard</a>
                <a href="{{ route('pengelolaan') }}" class="hover:bg-pink-700 px-3 py-2 rounded">Jadwal</a>
                <a href="{{ route('profile') }}" class="hover:bg-pink-700 px-3 py-2 rounded">Profile</a>
                <a href="{{ route('login') }}" class="bg-pink-500 hover:bg-pink-600 px-3 py-2 rounded">Logout</a>
            </div>
        </div>
    </div>
</nav>

