<header>
    <nav class="bg-violet-500 text-white">
        <ul class="flex justify-between items-center px-5 py-2">
            <li><a href="#">Logo</a></li>
            <ul class="flex justify-between">
                <a class="px-5 py-2 hover:bg-violet-400 rounded-lg" href="/">Home</a>
                <a class="px-5 py-2 hover:bg-violet-400 rounded-lg" href="/pages/catalog">Catalog</a>
                <a class="px-5 py-2 hover:bg-violet-400 rounded-lg" href="/pages/about">About</a>
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