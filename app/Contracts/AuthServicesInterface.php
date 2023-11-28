<?php

namespace App\Contracts;
interface AuthServicesInterface {
    /**
     * Attempt to authenticate the request's credentials.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function authenticate(): void;

    /**
     * Ensure the authentication request is not rate limited.
     */
    public function ensureIsNotRateLimited(): void;

    /**
     * Get the authentication rate limiting throttle key.
     */
    public function throttleKey(): string;
}
