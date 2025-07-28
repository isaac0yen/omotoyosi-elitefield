<?php
// Set page specific variables
$currentPage = 'blog_details';
$includeBlogScripts = true;

// Include site configuration
require_once 'includes/config.php';

// Get the blog post based on slug
$slug = isset($_GET['slug']) ? htmlspecialchars($_GET['slug']) : '';
$post = getBlogPostBySlug($slug);

if (!$post) {
  // Redirect to blog page if post not found
  header('Location: blog.php');
  exit;
}

// Set the page title based on post title
$pageTitle = $post['title'] . ' | Omotoyosi Elitefield Educational Foundation';
$pageDescription = $post['excerpt'];

// The custom script to style blog content is no longer needed.
// The Tailwind Typography plugin (prose class) handles this automatically.
$pageSpecificScripts = '';

?>

<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
  <?php include 'includes/header.php'; ?>
</head>
<body class="bg-gray-100 font-sans antialiased">
  <?php include 'includes/navigation.php'; ?>

  <main class="py-12 sm:py-16">
    <div class="container mx-auto px-4">
      <article class="max-w-4xl mx-auto bg-white rounded-xl shadow-lg overflow-hidden">
        
        <div class="w-full">
            <img 
                src="<?php echo htmlspecialchars($post['image']); ?>" 
                alt="Featured image for <?php echo htmlspecialchars($post['title']); ?>" 
                class="w-full h-64 sm:h-80 md:h-96 object-cover"
            >
        </div>

        <div class="p-6 sm:p-8 lg:p-12">
            <header class="mb-8">
              <a href="blog.php?category=<?php echo urlencode($post['category']); ?>" class="text-sm font-bold uppercase text-orange-500 hover:text-orange-600"><?php echo htmlspecialchars($post['category']); ?></a>
              <h1 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-gray-900 mt-2"><?php echo htmlspecialchars($post['title']); ?></h1>
              
              <div class="mt-6 flex items-center space-x-4 text-sm text-gray-500 border-t border-b border-gray-100 py-4">
                  <div class="flex items-center">
                      <i class="fas fa-user mr-2 text-orange-500"></i>
                      <span>By <?php echo htmlspecialchars($post['author']); ?></span>
                  </div>
                  <span class="text-gray-300">|</span>
                  <div class="flex items-center">
                      <i class="fas fa-calendar-alt mr-2 text-orange-500"></i>
                      <time datetime="<?php echo date('Y-m-d', strtotime($post['date'])); ?>"><?php echo htmlspecialchars($post['date']); ?></time>
                  </div>
              </div>
            </header>

            <div class="prose prose-lg max-w-none prose-h3:text-gray-800 prose-h3:font-semibold prose-p:text-gray-700 prose-a:text-blue-600 prose-a:no-underline hover:prose-a:underline">
                <?php echo $post['content']; ?>
            </div>

            <footer class="mt-10 pt-8 border-t border-gray-200">
                <?php if (isset($post['tags']) && !empty($post['tags'])): ?>
                <div class="mb-6">
                    <h4 class="text-sm font-bold text-gray-500 uppercase mb-3">Tags</h4>
                    <div class="flex flex-wrap gap-2">
                        <?php foreach ($post['tags'] as $postTag): ?>
                            <a href="blog.php?tag=<?php echo urlencode($postTag); ?>" class="text-xs font-medium py-1.5 px-3 rounded-full transition-colors bg-gray-100 text-gray-600 hover:bg-blue-500 hover:text-white">
                                #<?php echo htmlspecialchars($postTag); ?>
                            </a>
                        <?php endforeach; ?>
                    </div>
                </div>
                <?php endif; ?>
                
                <div class="flex justify-between items-center">
                    <h4 class="text-sm font-bold text-gray-500 uppercase">Share this post</h4>
                    <div class="flex space-x-2">
                        <?php
                        // Define function to get current URL if it doesn't exist
                        function getCurrentPageUrl() {
                            $protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http";
                            return $protocol . "://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
                        }
                        $currentUrl = getCurrentPageUrl();
                        ?>
                        <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode($currentUrl); ?>" target="_blank" aria-label="Share on Facebook" class="w-10 h-10 flex items-center justify-center rounded-full bg-gray-100 text-gray-600 hover:bg-blue-600 hover:text-white transition-colors"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://twitter.com/intent/tweet?url=<?php echo urlencode($currentUrl); ?>&text=<?php echo urlencode($post['title']); ?>" target="_blank" aria-label="Share on Twitter" class="w-10 h-10 flex items-center justify-center rounded-full bg-gray-100 text-gray-600 hover:bg-sky-500 hover:text-white transition-colors"><i class="fab fa-twitter"></i></a>
                        <a href="https://www.instagram.com/" target="_blank" aria-label="Share on Instagram" class="w-10 h-10 flex items-center justify-center rounded-full bg-gray-100 text-gray-600 hover:bg-pink-500 hover:text-white transition-colors"><i class="fab fa-instagram"></i></a>
                        <a href="https://www.linkedin.com/sharing/share-offsite/?url=<?php echo urlencode($currentUrl); ?>" target="_blank" aria-label="Share on LinkedIn" class="w-10 h-10 flex items-center justify-center rounded-full bg-gray-100 text-gray-600 hover:bg-blue-700 hover:text-white transition-colors"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </footer>
        </div>
      </article>
    </div>
  </main>

  <?php include 'includes/footer.php'; ?>
  <?php include 'includes/scripts.php'; ?>
</body>
</html>