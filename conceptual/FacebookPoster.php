<?php

include_once 'SocialNetworkPoster.php';

class FacebookPoster extends SocialNetworkPoster
{
    private $login, $password;
    private $posts = [];
    private $likes = [];

    public function __construct(string $login, string $password)
    {
        $this->login = $login;
        $this->password = $password;
    }

    public function getSocialNetwork(): SocialNetworkConnector
    {
        return new FacebookConnector($this->login, $this->password);
    }

    public function countPosts(): int
    {
        return count($this->posts);
    }

    public function countLikes(): int
    {
        return array_sum($this->likes);
    }

    public function fetchData(): array
    {
        
        $this->posts = ['Post 1', 'Post 2', 'Post 3'];
        $this->likes = [10, 5, 8];

        return [
            'posts' => $this->posts,
            'likes' => $this->likes,
        ];
    }
}

class FacebookConnector implements SocialNetworkConnector
{
    private $login, $password;

    public function __construct(string $login, string $password)
    {
        $this->login = $login;
        $this->password = $password;
    }

    public function logIn(): void
    {
        echo "Send HTTP API request to log in user $this->login with " .
            "password $this->password\n";
    }

    public function logOut(): void
    {
        echo "Send HTTP API request to log out user $this->login\n";
    }

    public function createPost($content): void
    {
        echo "Send HTTP API requests to create a post in Facebook timeline.\n";
    }
}
