<header>
    <nav class="bg-violet-500 text-white">
        <ul class="flex justify-between items-center px-5 py-2">
            <li class="items-center">
                <p class="inline-block text-xl">🍿 </p>
                <p class="inline-block bg-clip-text text-transparent bg-gradient-to-r from-red-200 to-yellow-300 text-xl font-bold" href="#">iTicket</p>
            </li>
            <ul class="flex justify-between">
                <a class="px-5 py-2 hover:bg-violet-400 rounded-lg" href="/">Home</a>
                <a class="px-5 py-2 hover:bg-violet-400 rounded-lg" href="/pages/catalog">Catalog</a>
                <a class="px-5 py-2 hover:bg-violet-400 rounded-lg" href="/pages/about">About</a>
                <a class="px-5 py-2 hover:bg-violet-400 rounded-lg" href="/movies/index">Movies</a>
                <a class="px-5 py-2 hover:bg-violet-400 rounded-lg" href="/pages/recomend">Recomend</a>
                <a class="px-5 py-2 hover:bg-violet-400 rounded-lg" href="/movies/index">Movies</a>
            </ul>
            <?php if(session()->get('logged_in')):?>
                <a href="/login/logout" class="bg-violet-700 text-white py-2 px-4 rounded-md">Logout</a>
            <?php else:?>
                <a href="/login" class="bg-violet-700 text-white py-2 px-4 rounded-md">Login</a>
            <?php endif;?>

        </ul>
    </nav>
</header>