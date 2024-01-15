<x-layouts.app>
    <div class="relative flex flex-col justify-center h-screen overflow-hidden">
        <div class="w-full p-16 m-auto rounded-md shadow-md lg:max-w-xl">
            <form action="/session" method="post" class="space-y-5">
                @csrf
                <x-layouts.user-create name="username" type="text" />
                <x-layouts.user-create name="password" type="password"/>
                <div>
                    <input type="submit" value="Sign In" class="input input-bordered w-full input-primary"/>
                </div>
            </form>
            <x-button href="/register/create" text="Don't have an account? Sign out!"/>
        </div>
    </div>
</x-layouts.app>
