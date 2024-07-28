<?php
declare(strict_types=1);

namespace app\MainTechServices\SessionStorageService;
use app\MainTechServices\SessionStorageService\SessionStorageInterface;


use function session_start;
use function session_status;
use const PHP_SESSION_NONE;




class NativeSessionStorage implements SessionStorageInterface
{
    private array $storage;

    public function __construct(array $options = [])
    {
        if (session_status() === PHP_SESSION_NONE) {
            if (!session_start($options)) {
                throw new \RuntimeException('Failed to start the session.');
            }
        }

        $this->storage = &$_SESSION;
    }

    public function get(string $key, $default = null)
    {
        return $this->storage[$key] ?? $default;
    }

    public function put(string $key, $value = null): void
    {
        $this->storage[$key] = $value;
    }

    public function all(): array
    {
        return $this->storage;
    }

    public function has(string $key): bool
    {
        return isset($this->storage[$key]);
    }

    public function remove(string $key): void
    {
        unset($this->storage[$key]);
    }
}


//example for use 
// use YourNamespace\Session\Storage\NativeSessionStorage;

// // Create a new session storage instance
// $sessionStorage = new NativeSessionStorage();

// // Set a value in the session
// $sessionStorage->put('username', 'JohnDoe');

// // Get a value from the session
// $username = $sessionStorage->get('username');

// // Check if a key exists in the session
// if ($sessionStorage->has('username')) {
//     echo "Welcome back, $username!";
// } else {
//     echo "Welcome, Guest!";
// }

// // Remove a value from the session
// $sessionStorage->remove('username');