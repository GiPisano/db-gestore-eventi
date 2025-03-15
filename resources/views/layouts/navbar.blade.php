<nav class="bg-white shadow-md p-4">
    <div class="flex justify-between items-center">
        <a href="{{ route('dashboard') }}" class="text-lg font-bold">Gestore Eventi</a>

        <div>
            @auth
                <span class="text-gray-700">{{ Auth::user()->name }}</span>
                <form method="POST" action="{{ route('logout') }}" class="inline">
                    @csrf
                    <button type="submit" class="ml-4 text-red-500">Logout</button>
                </form>
            @else
                <a href="{{ route('login') }}" class="text-blue-500">Login</a>
                <a href="{{ route('register') }}" class="ml-4 text-green-500">Registrati</a>
            @endauth
        </div>
    </div>
</nav>
