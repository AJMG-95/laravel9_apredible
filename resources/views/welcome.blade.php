<x-layouts.app title="Home" meta-description="Home meta description">
    <h1 class="my-4 font-serif text-3xl text-center text-sky-600 dark:text-sky-500">Home</h1>

    @auth
        Authenticated User Name: <div>{{ Auth::user()->name }}</div>
        Authenticated User Email:<div>{{ Auth::user()->email }}</div>
    @endauth

</x-layouts.app>
