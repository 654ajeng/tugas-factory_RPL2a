<?php

include_once 'FacebookPoster.php';
include_once 'LinkedInPoster.php';

function clientCode(SocialNetworkPoster $creator)
{
    $creator->post("Hello world!");
    $creator->post("I had a large hamburger this morning!");

    echo "Number of posts: " . $creator->countPosts() . "\n";
    echo "Number of likes: " . $creator->countLikes() . "\n";

    $data = $creator->fetchData();
    echo "Posts: " . implode(', ', $data['posts']) . "\n";
    echo "Likes: " . implode(', ', $data['likes']) . "\n";
}

echo "Testing ConcreteCreator1:\n";
clientCode(new FacebookPoster("john_smith", "******"));
echo "\n\n";

echo "Testing ConcreteCreator2:\n";
clientCode(new LinkedInPoster("john_smith@example.com", "******"));
