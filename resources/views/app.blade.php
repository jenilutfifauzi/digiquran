<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>

    <!-- navbar  -->
    <div class="relative">
        <div class="fixed top-0 left-0 right-0">
            <div class="navbar rounded-lg shadow-lg bg-white">
                <div class="flex-1 ">
                    <a class="btn btn-ghost normal-case text-xl ">digitalQur'an</a>
                </div>
                <div class="flex-none gap-2">
                    <div class="form-control">
                        <input type="text" placeholder="Search" class="input input-bordered" />
                    </div>
                    <div class="dropdown dropdown-end">
                        <label tabindex="0" class="btn btn-ghost btn-circle avatar">
                            <div class="w-10 rounded-full">
                                <img src="https://placeimg.com/80/80/people" />
                            </div>
                        </label>
                        <ul tabindex="0"
                            class="mt-3 p-2 shadow menu menu-compact dropdown-content bg-base-100 rounded-box w-52">
                            <li>
                                <a class="justify-between">
                                    Profile
                                    <span class="badge">New</span>
                                </a>
                            </li>
                            <li><a>Settings</a></li>
                            <li><a>Logout</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- akhir navbar  -->
    <!-- judul -->
    <div class="container mx-auto px-10">
        <div class="flex space-x-3">
            <div class="w-8/12 py-20 mt-6 mx-auto text-align-center">
                <div class="h-64 ">
                    <div class="max-w-md">
                        <h3 class="text-5xl font-bold">Hai👋 Selamat datang </h3>
                        <h2 class="text-3xl font-bold mt-4">di Digital Al-Qur'an</h2>
                        <p class="py-6">Baca lah walaupun hanya satu ayat. </p>
                        <button class="btn btn-primary ">Get Started</button>
                    </div>

                    <div>
                        <h1 class="text-2xl font-semibold text-center mt-4">Surah</h1>
                    </div>

                        @foreach ($data['surah'] as $daftar_surah)
                            <button class=" btn  btn-outline  btn-accent "> {{ $daftar_surah['nama'] }}</button>
                        @endforeach


                </div>
            </div>
            <div>
            </div>

</body>

</html>
