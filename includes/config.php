<?php
// Site configuration
$siteConfig = [
    'site_name' => 'Omotoyosi Elitefield Educational Foundation',
    'site_url' => 'https://omotoyosifoundation.com.ng',
    'site_description' => 'Providing underprivileged children with access to quality education',
    'contact_email' => 'info@omotoyosifoundation.com.ng',
    'contact_phone' => '08081173996',
    'contact_whatsapp' => '<a href="https://wa.me/2348081173996" class="text-green-600 hover:text-green-800 transition-colors duration-300">08081173996</a>',
    'contact_address' => '23 Alabata Road, Abeokuta, Ogun State, Nigeria',
    'social_media' => [
        'twitter' => 'https://twitter.com/Elitefield_edu',
        'instagram' => 'https://www.instagram.com/omotoyosi_elitefieldfoundation',
        'linkedin' => 'https://www.linkedin.com/company/omotoyosi-elitefield-educational-foundation/'
    ]
];

// Function to get active class for navigation
function isActive($pageName, $currentPage)
{
    return $pageName === $currentPage ? 'active' : '';
}

// Function to load blog posts from JSON
function loadBlogPosts()
{
    $jsonFile = __DIR__ . '/../blog-posts.json';
    if (file_exists($jsonFile)) {
        $jsonData = file_get_contents($jsonFile);
        return json_decode($jsonData, true);
    }
    return null;
}

// Function to get blog post by slug
function getBlogPostBySlug($slug)
{
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
function getRecentBlogPosts($limit = 3)
{
    $posts = loadBlogPosts();
    if ($posts && isset($posts['posts'])) {
        return array_slice($posts['posts'], 0, $limit);
    }
    return [];
}

// Base URL function to handle subdirectories
function baseUrl($path = '')
{
    $basePath = '';
    return $basePath . $path;
}

// Team members data
$teamMembers = [
    [
        'name' => 'Oladeji Omotoyosi',
        'position' => 'Executive Director',
        'image' => './resources/Executive Director.jpeg',
        'alt' => 'Executive Director',
        'social_media' => [
            ['platform' => 'instagram', 'url' => 'https://www.instagram.com/omotoyosi_oladeji', 'icon' => 'fab fa-instagram'],
            ['platform' => 'linkedin', 'url' => 'https://www.linkedin.com/in/oladeji-omotoyosi', 'icon' => 'fab fa-linkedin'],
            ['platform' => 'twitter', 'url' => 'https://x.com/OmotoyosiOlade1', 'icon' => 'ri-twitter-x-fill']
        ]
    ],
    [
        'name' => 'Habila Samuel',
        'position' => 'Head of Operations',
        'image' => './resources/Head of operations.jpeg',
        'alt' => 'Head of Operations',
        'social_media' => [
            ['platform' => 'instagram', 'url' => 'https://www.instagram.com/samuelhabilah', 'icon' => 'fab fa-instagram'],
            ['platform' => 'linkedin', 'url' => 'https://www.linkedin.com/in/habila-d-908060111', 'icon' => 'fab fa-linkedin']
        ]
    ],
    [
        'name' => 'Adeyomoye Michael Oluwatosin',
        'position' => 'Programmes Officer',
        'image' => './resources/Programmes-Officer.jpeg',
        'alt' => 'Programmes Officer',
        'social_media' => [
            ['platform' => 'instagram', 'url' => 'https://www.instagram.com/michaeloluwatosin681', 'icon' => 'fab fa-instagram'],
            ['platform' => 'linkedin', 'url' => 'https://www.linkedin.com/in/michael-oluwatosin-040748288', 'icon' => 'fab fa-linkedin']
        ]
    ],
    [
        'name' => 'Dosumu Fisayo Florish',
        'position' => 'Communications Associate',
        'image' => './resources/Communications-Associate.jpg',
        'alt' => 'Communications Associate',
        'social_media' => []
    ],
    [
        'name' => 'Ogan Desire',
        'position' => 'Programmes Associate',
        'image' => './resources/Programmes-Associate.jpg',
        'alt' => 'Programmes Associate',
        'social_media' => []
    ],
    [
        'name' => 'AFOLABI GOD\'SGLORY',
        'position' => 'Volunteers Coordinator',
        'image' => './resources/Volunteers-Coordinator.jpg',
        'alt' => 'Volunteers Coordinator',
        'social_media' => []
    ]
];
