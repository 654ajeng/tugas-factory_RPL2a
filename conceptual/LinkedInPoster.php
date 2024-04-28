<?php

include_once 'SocialNetworkPoster.php';

class LinkedInPoster extends SocialNetworkPoster
{
    private $email, $password;
    private $posts = [];
    private $likes = [];

    public function __construct(string $email, string $password)
    {
        $this->email = $email;
        $this->password = $password;
    }

    public function getSocialNetwork(): SocialNetworkConnector
    {
        return new LinkedInConnector($this->email, $this->password);
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
        // Simulate fetching data from LinkedIn API
        $this->posts = ['Post A', 'Post B', 'Post C'];
        $this->likes = [15, 7, 12];

        return [
            'posts' => $this->posts,
            'likes' => $this->likes,
        ];
    }
}

class LinkedInConnector implements SocialNetworkConnector
{
    private $email, $password;

    public function __construct(string $email, string $password)
    {
        $this->email = $email;
        $this->password = $password;
    }

    public function logIn(): void
    {
        echo "Send HTTP API request to log in user $this->email with " .
            "password $this->password\n";
    }

    public function logOut(): void
    {
        echo "Send HTTP API request to log out user $this->email\n";
    }

    public function createPost($content): void
    {
        echo "Send HTTP API requests to create a post in LinkedIn timeline.\n";
    }
}
