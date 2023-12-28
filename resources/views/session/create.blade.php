<x-layouts.app>
    <div class="relative flex flex-col justify-center h-screen overflow-hidden">
        <div class="w-full p-16 m-auto rounded-md shadow-md lg:max-w-xl">
            <form action="/session" method="post" class="space-y-5">
                @csrf
                <x-layouts.user-create name="username" type="text" />
                <x-layouts.user-create name="password" type="password"/>
                <div>
                    <input type="submit" class="input input-bordered w-full input-primary"/>
                </div>
            </form>
            <div class="mt-4">
                <button class="btn">
                    <a href="/register/create">Don't have an account? Sign out!</a>
                </button>
            </div>
        </div>
    </div>
</x-layouts.app>
