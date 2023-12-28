<x-layouts.app>
    <div class="relative flex flex-col justify-center h-screen overflow-hidden">
        <div class="w-full p-16 m-auto rounded-md shadow-md lg:max-w-xl">
            <form action="/register" method="post" class="space-y-5">
                @csrf
                <x-layouts.user-create name="email" type="text" required="*"/>
                <x-layouts.user-create name="username" type="text" required="*"/>
                <x-layouts.user-create name="first_name" type="text"/>
                <x-layouts.user-create name="last_name" type="text"/>
                <x-layouts.user-create name="password" type="password" required="*"/>
                <x-layouts.user-create name="password_confirmation" type="password" required="*"/>
                <div>
                    <input type="submit" value="Sign Up" class="input input-bordered w-full input-primary"/>
                </div>
            </form>
            <div class="mt-4">
                <button class="btn">
                    <a href="/session/create">Already have account? Sign in!</a>
                </button>
            </div>
        </div>
    </div>
</x-layouts.app>
