<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="flex flex-row h-full items-center m-44">
        <div class="max-w-md w-1/3 mx-auto">
            <div class="flex flex-col mb-6">
                <h1 class="text-2xl font-bold font-sans py-5">Login</h1>
                <?php if (isset($validation)) : ?>
                    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                        <strong class="font-bold"><?= $validation->listErrors() ?></strong>
                    </div>
                <?php endif; ?>
                <form action="/login/auth" method="post" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                    <div class="mb-3">
                        <label class="block text-gray-700 text-sm font-medium mb-2" for="email">Email</label>
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="email" placeholder="Email" id="email" name="email" value="<?= set_value('email') ?>">
                    </div>
                    <div class="mb-3">
                        <label class="block text-gray-700 text-sm font-medium mb-2" for="password">Password</label>
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="password" placeholder="Password" id="password" name="password">
                    </div>
                    <div class="flex items-center justify-between mb-5">
                        <button class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 " type="submit">Login</button>
                        <a class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800" href="/register">
                            Register
                        </a>
                    </div>
                </form>
            </div>
        </div>
</div>

<?= $this->endSection(); ?>