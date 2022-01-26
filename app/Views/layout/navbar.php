<header>
    <nav class="bg-violet-500 text-white print:hidden">
        <ul class="flex justify-between items-center px-5 py-2">
            <li class="items-center">
                <p class="inline-block text-xl">🍿 </p>
                <p class="inline-block bg-clip-text text-transparent bg-gradient-to-r from-red-200 to-yellow-300 text-xl font-bold" href="#">iTicket</p>
            </li>
            <ul class="flex justify-between">
                <a class="px-5 py-2 hover:bg-violet-400 rounded-lg" href="/">Home</a>
                <a class="px-5 py-2 hover:bg-violet-400 rounded-lg" href="/movies/index">Catalog</a>
                <a class="px-5 py-2 hover:bg-violet-400 rounded-lg" href="/pages/recomend">Recomend</a>
            </ul>
            <div class="flex">
                <?php if(session()->get('logged_in')):?>
                    <p class="px-5 py-2 rounded-lg" >Halo, <?= session()->get('user_name') ;?></p>
                    <a href="/login/logout" class="bg-violet-700 text-white py-2 px-4 rounded-md">Logout</a>
                <?php else:?>
                    <a href="/login" class="bg-violet-700 text-white py-2 px-4 rounded-md">Login</a>
                <?php endif;?>
            </div>

        </ul>
    </nav>
</header>