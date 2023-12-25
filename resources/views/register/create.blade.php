<x-layouts.app>
    <div class="relative flex flex-col justify-center h-screen overflow-hidden">
        <div class="w-full p-16 m-auto rounded-md shadow-md lg:max-w-xl">
            <form action="/register" method="post" class="space-y-5">
                @csrf
                <div class="space-y-2">
                    <label for="label" class="ml-4">
                        <span class="text-base label-text">Email</span>
                    </label>
                    <input id="label" type="text" name="email" value="{{ old('email') }}"
                           class="input input-bordered w-full input-primary"/>

                    @error('email')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
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
                        <span class="text-base label-text">First Name</span>
                    </label>
                    <input id="label" type="text" name="first_name" value="{{ old('first_name') }}"
                           class="input input-bordered w-full input-primary"/>

                    @error('first_name')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="space-y-2">
                    <label for="label" class="ml-4">
                        <span class="text-base label-text">Last Name</span>
                    </label>
                    <input id="label" type="text" name="last_name" value="{{ old('last_name') }}"
                           class="input input-bordered w-full input-primary"/>

                    @error('last_name')
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
                <div class="space-y-2">
                    <label for="label" class="ml-4">
                        <span class="text-base label-text">Password confirmation</span>
                    </label>
                    <input id="label" type="password" name="password_confirmation"
                           class="input input-bordered w-full input-primary"/>

                    @error('password_confirmation')
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
