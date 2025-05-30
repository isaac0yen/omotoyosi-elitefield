<?php
// Set page specific variables
$currentPage = 'blog_details';
$includeBlogScripts = true;

// Include site configuration
require_once 'includes/config.php';

// Get the blog post based on slug
$slug = isset($_GET['slug']) ? $_GET['slug'] : '';
$post = getBlogPostBySlug($slug);

if (!$post) {
  // Redirect to blog page if post not found
  header('Location: blog.php');
  exit;
}

// Set the page title based on post title
$pageTitle = $post['title'] . ' | ' . $siteConfig['site_name'];
$pageDescription = $post['excerpt'];

// Additional scripts for blog content styling
$pageSpecificScripts = <<<EOT
<script>
document.addEventListener('DOMContentLoaded', function() {
  const blogContent = document.querySelector('.blog-content');
  if (blogContent) {
    blogContent.querySelectorAll('h3').forEach(heading => {
      heading.classList.add('text-2xl', 'font-semibold', 'text-gray-900', 'mb-4', 'mt-6');
    });
      
    blogContent.querySelectorAll('p').forEach(paragraph => {
      paragraph.classList.add('text-gray-700', 'leading-relaxed', 'mb-4');
    });
      
    blogContent.querySelectorAll('ul').forEach(list => {
      list.classList.add('list-disc', 'pl-6', 'space-y-2', 'text-gray-700', 'mb-4');
    });
  }
});
</script>
EOT;

// Get recent posts for sidebar
$recentPosts = getRecentBlogPosts(3);
?>

<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
  <?php include 'includes/header.php'; ?>
</head>
<body class="bg-gray-50 font-sans antialiased">
  <?php include 'includes/navigation.php'; ?>

  <main class="container mx-auto px-4 py-8">
      <div class="max-w-4xl mx-auto bg-white shadow-lg rounded-xl overflow-hidden">
          <!-- Hero Section -->
          <div class="relative h-64 bg-gradient-to-r from-blue-500 to-purple-600 flex items-center justify-center">
              <h1 class="text-4xl font-bold text-white text-center px-6"><?php echo $post['title']; ?></h1>
          </div>

          <!-- Blog Content -->
          <div class="p-8">
              <!-- Post Meta Information -->
              <div class="flex items-center justify-between mb-6 pb-4 border-b border-gray-200">
                  <div class="flex items-center space-x-4">
                      <span class="text-gray-600 text-sm">
                          <i class="fas fa-user mr-2"></i><?php echo $post['author']; ?>
                      </span>
                      <span class="text-gray-600 text-sm">
                          <i class="fas fa-calendar mr-2"></i><?php echo $post['date']; ?>
                      </span>
                      <span class="text-gray-600 text-sm">
                          <i class="fas fa-tag mr-2"></i><?php echo $post['category']; ?>
                      </span>
                  </div>
              </div>

              <!-- Featured Image -->
              <div class="mb-8">
                  <img 
                      src="<?php echo $post['image']; ?>" 
                      alt="<?php echo $post['title']; ?>" 
                      class="w-full h-96 object-cover rounded-lg shadow-md"
                  >
              </div>

              <!-- Blog Content -->
              <div class="blog-content prose prose-lg max-w-full">
                  <?php echo $post['content']; ?>
              </div>

              <!-- Social Share -->
              <div class="mt-8 pt-6 border-t border-gray-200 flex justify-between items-center">
                  <div class="flex space-x-4">
                      <a href="#" class="text-blue-500 hover:text-blue-700"><i class="fab fa-facebook-f"></i></a>
                      <a href="#" class="text-blue-400 hover:text-blue-600"><i class="fab fa-twitter"></i></a>
                      <a href="#" class="text-pink-500 hover:text-pink-700"><i class="fab fa-instagram"></i></a>
                  </div>
              </div>
          </div>
      </div>
  </main>

  <?php include 'includes/footer.php'; ?>
  <?php include 'includes/scripts.php'; ?>
</body>
</html>
