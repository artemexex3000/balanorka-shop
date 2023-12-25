<x-layouts.app>
    <div class="relative flex flex-col justify-center h-screen overflow-hidden">
        <div class="w-full p-16 m-auto rounded-md shadow-md lg:max-w-xl">
            <form action="/session" method="post" class="space-y-5">
                @csrf
                <div class="space-y-2">
                    <label for="label" class="ml-4">
                        <span class="text-base label-text">Username</span>
                    </label>
                    <input id="label" type="text" name="username" value="{{ old('username') }}"
                           class="input input-bordered w-full input-primary"/>

                    @error('username')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="space-y-2">
                    <label for="label" class="ml-4">
                        <span class="text-base label-text">Password</span>
                    </label>
                    <input id="label" type="password" name="password"
                           class="input input-bordered w-full input-primary"/>

                    @error('password')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <input type="submit" class="input input-bordered w-full input-primary"/>
                </div>
            </form>
        </div>
    </div>
</x-layouts.app>
