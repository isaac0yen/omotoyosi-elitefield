<?php
// Site configuration
$siteConfig = [
    'site_name' => 'Omotoyosi Elitefield Educational Foundation',
    'site_url' => 'https://elitefield.org',
    'site_description' => 'Providing underprivileged children with access to quality education',
    'contact_email' => 'info@elitefield.org',
    'contact_phone' => '+234 808 117 3996',
    'contact_address' => '23 Alabata Road, Abeokuta, Ogun State, Nigeria',
    'social_media' => [
        'twitter' => '#',
        'instagram' => '#',
        'facebook' => '#',
        'linkedin' => '#'
    ]
];

// Function to get active class for navigation
function isActive($pageName, $currentPage) {
    return $pageName === $currentPage ? 'active' : '';
}

// Function to load blog posts from JSON
function loadBlogPosts() {
    $jsonFile = __DIR__ . '/../blog-posts.json';
    if (file_exists($jsonFile)) {
        $jsonData = file_get_contents($jsonFile);
        return json_decode($jsonData, true);
    }
    return null;
}

// Function to get blog post by slug
function getBlogPostBySlug($slug) {
    $posts = loadBlogPosts();
    if ($posts && isset($posts['posts'])) {
        foreach ($posts['posts'] as $post) {
            if ($post['slug'] === $slug) {
                return $post;
            }
        }
    }
    return null;
}

// Function to get recent blog posts
function getRecentBlogPosts($limit = 3) {
    $posts = loadBlogPosts();
    if ($posts && isset($posts['posts'])) {
        return array_slice($posts['posts'], 0, $limit);
    }
    return [];
}

// Base URL function to handle subdirectories
function baseUrl($path = '') {
    $basePath = '';
    return $basePath . $path;
}
?>
