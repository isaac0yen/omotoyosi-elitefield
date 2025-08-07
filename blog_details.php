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

// Set the page title and SEO meta data
$pageTitle = $post['title'] . ' | Omotoyosi Elitefield Educational Foundation';
$pageDescription = $post['excerpt'];
$pageAuthor = $post['author'];
$pageImage = $post['image'];
$pageKeywords = implode(', ', $post['tags'] ?? []) . ', education, Nigeria, foundation';
$ogType = 'article';
$publishedTime = date('c', strtotime($post['date']));
$articleSection = $post['category'] ?? 'Education';
$articleTags = $post['tags'] ?? [];
$canonicalUrl = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

// JSON-LD structured data for SEO
$structuredData = json_encode([
  "@context" => "https://schema.org",
  "@type" => "Article",
  "headline" => $post['title'],
  "image" => $post['image'],
  "author" => [
    "@type" => "Person",
    "name" => $post['author']
  ],
  "publisher" => [
    "@type" => "Organization",
    "name" => "Omotoyosi Elitefield Educational Foundation",
    "logo" => [
      "@type" => "ImageObject",
      "url" => (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . '/resources/logo_white.jpg'
    ]
  ],
  "datePublished" => date('c', strtotime($post['date'])),
  "dateModified" => date('c', strtotime($post['date'])),
  "description" => $post['excerpt'],
  "mainEntityOfPage" => [
    "@type" => "WebPage",
    "@id" => $canonicalUrl
  ]
], JSON_UNESCAPED_SLASHES);

?>

<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
  <?php include 'includes/header.php'; ?>
</head>

<body class="bg-gray-50 font-sans antialiased">
  <?php include 'includes/navigation.php'; ?>

  <!-- Hero Section -->
  <section class="relative bg-gradient-to-r from-gray-900 via-gray-800 to-gray-900 py-20 lg:py-32 overflow-hidden">
    <!-- Background Image -->
    <div class="absolute inset-0">
      <img
        src="<?php echo htmlspecialchars($post['image']); ?>"
        alt="Featured image for <?php echo htmlspecialchars($post['title']); ?>"
        class="w-full h-full object-cover">
    </div>
    
    <!-- Multi-layer overlay for maximum text readability -->
    <div class="absolute inset-0 bg-black opacity-50"></div>
    <div class="absolute inset-0 bg-gradient-to-t from-black via-black/40 to-black/60"></div>
    <div class="absolute inset-0 bg-gradient-to-r from-black/30 via-transparent to-black/30"></div>
    
    <!-- Additional text background for critical areas -->
    <div class="absolute inset-0 flex items-center justify-center">
      <div class="w-full max-w-4xl mx-auto px-4 py-16 bg-black/20 backdrop-blur-sm rounded-3xl"></div>
    </div>
    <div class="relative container mx-auto px-4 z-20">
      <div class="max-w-4xl mx-auto text-center text-white">
        <div class="mb-6">
          <a href="blog.php?category=<?php echo urlencode($post['category'] ?? 'Education'); ?>" class="inline-block px-4 py-2 bg-orange-500 text-white text-sm font-bold uppercase rounded-full hover:bg-orange-600 transition-colors duration-300 shadow-lg">
            <?php echo htmlspecialchars($post['category'] ?? 'Education'); ?>
          </a>
        </div>
        <h1 class="text-4xl sm:text-5xl lg:text-6xl font-black leading-tight mb-6 text-white drop-shadow-2xl" style="text-shadow: 2px 2px 4px rgba(0,0,0,0.8), 0px 0px 8px rgba(0,0,0,0.6);">
          <?php echo htmlspecialchars($post['title']); ?>
        </h1>
        <div class="bg-black/30 backdrop-blur-sm rounded-2xl p-6 mb-8 border border-white/10">
          <p class="text-xl sm:text-2xl text-gray-100 leading-relaxed max-w-3xl mx-auto drop-shadow-lg" style="text-shadow: 1px 1px 3px rgba(0,0,0,0.8);">
            <?php echo htmlspecialchars($post['excerpt']); ?>
          </p>
        </div>
        <div class="flex flex-wrap justify-center items-center gap-6 text-sm">
          <div class="flex items-center bg-black/30 backdrop-blur-sm px-4 py-3">
            <div class="w-10 h-10 bg-orange-500 rounded-full flex items-center justify-center mr-3 shadow-lg">
              <i class="fas fa-user text-white"></i>
            </div>
            <div class="text-left">
              <p class="font-semibold text-white drop-shadow-md" style="text-shadow: 1px 1px 2px rgba(0,0,0,0.8);"><?php echo htmlspecialchars($post['author']); ?></p>
              <p class="text-gray-200 drop-shadow-md" style="text-shadow: 1px 1px 2px rgba(0,0,0,0.8);"><?php echo htmlspecialchars($post['position'] ?? 'Author'); ?></p>
            </div>
          </div>
          <div class="flex items-center bg-black/30 backdrop-blur-sm rounded-full px-4 py-3 border border-white/20">
            <i class="fas fa-calendar-alt mr-2 text-orange-400"></i>
            <time datetime="<?php echo date('Y-m-d', strtotime($post['date'])); ?>" class="text-white drop-shadow-md" style="text-shadow: 1px 1px 2px rgba(0,0,0,0.8);">
              <?php echo date('F j, Y', strtotime($post['date'])); ?>
            </time>
          </div>
          <div class="flex items-center bg-black/30 backdrop-blur-sm rounded-full px-4 py-3 border border-white/20">
            <i class="fas fa-clock mr-2 text-orange-400"></i>
            <span class="text-white drop-shadow-md" style="text-shadow: 1px 1px 2px rgba(0,0,0,0.8);"><?php echo ceil(str_word_count(strip_tags($post['content'])) / 200); ?> min read</span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <main class="py-16 lg:py-24">
    <div class="container mx-auto px-4">
      <article class="max-w-4xl mx-auto">

        <!-- Breadcrumb -->
        <nav class="mb-8" aria-label="Breadcrumb">
          <ol class="flex items-center space-x-2 text-sm text-black-600">
            <li><a href="index.php" class="hover:text-black transition-colors">Home</a></li>
            <li><i class="fas fa-chevron-right text-xs"></i></li>
            <li><a href="blog.php" class="hover:text-black transition-colors">Blog</a></li>
            <li><i class="fas fa-chevron-right text-xs"></i></li>
            <li class="text-black font-medium"><?php echo htmlspecialchars($post['title']); ?></li>
          </ol>
        </nav>

        <!-- Main Content -->
        <div class="bg-white rounded-2xl shadow-xl overflow-hidden">
          <div class="p-8 sm:p-12 lg:p-16">
            <!-- Article Content -->
            <div class="prose prose-xl max-w-none prose-headings:text-gray-900 prose-headings:font-bold prose-h1:text-4xl prose-h1:mb-8 prose-h2:text-3xl prose-h2:mt-12 prose-h2:mb-6 prose-h3:text-2xl prose-h3:mt-8 prose-h3:mb-4 prose-p:text-gray-700 prose-p:leading-relaxed prose-p:mb-6 prose-a:text-orange-500 prose-a:font-semibold prose-a:no-underline hover:prose-a:underline prose-strong:text-gray-900 prose-strong:font-bold prose-blockquote:border-l-4 prose-blockquote:border-orange-500 prose-blockquote:bg-orange-50 prose-blockquote:p-6 prose-blockquote:rounded-r-lg prose-blockquote:italic prose-ul:space-y-2 prose-ol:space-y-2 prose-li:text-gray-700">
              <?php echo $post['content']; ?>
            </div>

            <!-- Tags Section -->
            <?php if (isset($post['tags']) && !empty($post['tags'])): ?>
              <div class="mt-12 pt-8 border-t border-gray-200">
                <h4 class="text-lg font-bold text-gray-900 mb-4">Related Topics</h4>
                <div class="flex flex-wrap gap-3">
                  <?php foreach ($post['tags'] as $postTag): ?>
                    <a href="blog.php?tag=<?php echo urlencode($postTag); ?>" class="inline-flex items-center px-4 py-2 bg-orange-50 text-orange-600 font-medium rounded-full text-sm hover:bg-orange-100 transition-colors duration-300">
                      <i class="fas fa-tag mr-2 text-xs"></i>
                      <?php echo htmlspecialchars($postTag); ?>
                    </a>
                  <?php endforeach; ?>
                </div>
              </div>
            <?php endif; ?>

            <!-- Share Section -->
            <div class="mt-12 pt-8 border-t border-gray-200">
              <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-6">
                <div>
                  <h4 class="text-lg font-bold text-gray-900 mb-2">Share this article</h4>
                  <p class="text-gray-600">Help us spread the word about quality education</p>
                </div>
                <div class="flex space-x-3">
                  <?php
                  $currentUrl = $canonicalUrl;
                  $shareTitle = htmlspecialchars($post['title']);
                  $shareText = htmlspecialchars($post['excerpt']);
                  ?>
                  <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode($currentUrl); ?>" target="_blank" rel="noopener noreferrer" aria-label="Share on Facebook" class="group w-12 h-12 flex items-center justify-center rounded-full bg-blue-600 text-white hover:bg-blue-700 transform hover:scale-105 transition-all duration-300 shadow-lg hover:shadow-xl">
                    <i class="fab fa-facebook-f group-hover:scale-110 transition-transform duration-300"></i>
                  </a>
                  <a href="https://twitter.com/intent/tweet?url=<?php echo urlencode($currentUrl); ?>&text=<?php echo urlencode($shareTitle . ' - ' . $shareText); ?>&via=Elitefield_edu" target="_blank" rel="noopener noreferrer" aria-label="Share on Twitter" class="group w-12 h-12 flex items-center justify-center rounded-full bg-sky-500 text-white hover:bg-sky-600 transform hover:scale-105 transition-all duration-300 shadow-lg hover:shadow-xl">
                    <i class="fab fa-twitter group-hover:scale-110 transition-transform duration-300"></i>
                  </a>
                  <a href="https://wa.me/?text=<?php echo urlencode($shareTitle . ' - ' . $shareText . ' ' . $currentUrl); ?>" target="_blank" rel="noopener noreferrer" aria-label="Share on WhatsApp" class="group w-12 h-12 flex items-center justify-center rounded-full bg-green-500 text-white hover:bg-green-600 transform hover:scale-105 transition-all duration-300 shadow-lg hover:shadow-xl">
                    <i class="fab fa-whatsapp group-hover:scale-110 transition-transform duration-300"></i>
                  </a>
                  <a href="https://www.linkedin.com/sharing/share-offsite/?url=<?php echo urlencode($currentUrl); ?>" target="_blank" rel="noopener noreferrer" aria-label="Share on LinkedIn" class="group w-12 h-12 flex items-center justify-center rounded-full bg-blue-700 text-white hover:bg-blue-800 transform hover:scale-105 transition-all duration-300 shadow-lg hover:shadow-xl">
                    <i class="fab fa-linkedin-in group-hover:scale-110 transition-transform duration-300"></i>
                  </a>
                  <button onclick="copyToClipboard('<?php echo $currentUrl; ?>')" aria-label="Copy link" class="group w-12 h-12 flex items-center justify-center rounded-full bg-gray-600 text-white hover:bg-gray-700 transform hover:scale-105 transition-all duration-300 shadow-lg hover:shadow-xl">
                    <i class="fas fa-copy group-hover:scale-110 transition-transform duration-300"></i>
                  </button>
                </div>
              </div>
            </div>

            <!-- Author Bio Section -->
            <div class="mt-12 pt-8 border-t border-gray-200">
              <div class="flex items-start space-x-4">
                <div class="w-16 h-16 bg-gradient-to-r from-orange-400 to-orange-600 rounded-full flex items-center justify-center text-white font-bold text-xl">
                  <?php echo strtoupper(substr($post['author'], 0, 1)); ?>
                </div>
                <div class="flex-1">
                  <h4 class="text-lg font-bold text-gray-900"><?php echo htmlspecialchars($post['author']); ?></h4>
                  <p class="text-orange-600 font-medium mb-2"><?php echo htmlspecialchars($post['position'] ?? 'Author'); ?></p>
                  <p class="text-gray-600 leading-relaxed">
                    A dedicated member of the Omotoyosi Elitefield Educational Foundation team, passionate about transforming lives through quality education and community outreach.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Navigation to other posts -->
        <div class="mt-12 flex flex-col sm:flex-row gap-4">
          <a href="blog.php" class="flex-1 group bg-white rounded-xl shadow-lg p-6 hover:shadow-xl transition-all duration-300 border border-gray-200 hover:border-orange-200">
            <div class="flex items-center">
              <i class="fas fa-arrow-left text-orange-500 mr-3 group-hover:transform group-hover:-translate-x-1 transition-transform duration-300"></i>
              <div>
                <p class="text-sm text-gray-500 font-medium">Back to</p>
                <p class="text-gray-900 font-bold">All Articles</p>
              </div>
            </div>
          </a>
          <a href="contact.php" class="flex-1 group bg-gradient-to-r from-orange-500 to-orange-600 rounded-xl shadow-lg p-6 hover:shadow-xl transition-all duration-300 text-white hover:from-orange-600 hover:to-orange-700">
            <div class="flex items-center justify-end">
              <div class="text-right">
                <p class="text-orange-100 font-medium">Get Involved</p>
                <p class="text-white font-bold">Support Our Mission</p>
              </div>
              <i class="fas fa-arrow-right ml-3 group-hover:transform group-hover:translate-x-1 transition-transform duration-300"></i>
            </div>
          </a>
        </div>
      </article>
    </div>
  </main>

  <!-- JavaScript for copy to clipboard -->
  <script>
    function copyToClipboard(text) {
      navigator.clipboard.writeText(text).then(function() {
        // Create a temporary notification
        const notification = document.createElement('div');
        notification.textContent = 'Link copied to clipboard!';
        notification.className = 'fixed top-4 right-4 bg-green-500 text-white px-4 py-2 rounded-lg shadow-lg z-50 transform transition-all duration-300';
        document.body.appendChild(notification);

        // Remove notification after 3 seconds
        setTimeout(() => {
          notification.style.transform = 'translateX(100%)';
          setTimeout(() => {
            document.body.removeChild(notification);
          }, 300);
        }, 3000);
      }).catch(function(err) {
        console.error('Could not copy text: ', err);
      });
    }
  </script>

  <?php include 'includes/footer.php'; ?>
  <?php include 'includes/scripts.php'; ?>
</body>

</html>