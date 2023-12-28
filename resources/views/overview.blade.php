<x-layouts.app>
    <div class="hero min-h-screen bg-base-200">
        <div class="hero-content text-center">
            <div class="max-w-md">
                <h1 class="text-5xl font-bold">Balanorka Shop</h1>
                <p class="py-6">This is a test text is needed to interpreting</p>
                <div class="space-y-5">
                    @guest()
                        <form action="/register/create" method="get">
                            <button class="btn btn-primary">Register Now!</button>
                        </form>
                        <p>or</p>
                        <form action="/session/create" method="get">
                            <button class="btn btn-primary">Sign In!</button>
                        </form>
                    @endguest

                    @auth()
                        <form action="/session/logout" method="post">
                            <button class="btn btn-primary">Log Out!</button>
                        </form>
                    @endauth
                </div>
            </div>
        </div>
    </div>
</x-layouts.app>
