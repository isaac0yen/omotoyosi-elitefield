<?php
// Set page specific variables
$currentPage = 'blog';
$pageTitle = 'Our Blog | Omotoyosi Elitefield Educational Foundation';
$pageDescription = 'Stay updated with the latest news, activities and stories from Omotoyosi Elitefield Educational Foundation.';
$includeBlogScripts = true;

// Include site configuration
require_once 'includes/config.php';

// Handle category, tag, or search filters
$category = isset($_GET['category']) ? htmlspecialchars($_GET['category']) : '';
$tag = isset($_GET['tag']) ? htmlspecialchars($_GET['tag']) : '';
$search = isset($_GET['search']) ? htmlspecialchars($_GET['search']) : '';

// Get all blog posts
$blogData = loadBlogPosts();
$allPosts = $blogData ? $blogData['posts'] : [];

// Filter posts based on category, tag, or search
if (!empty($category) || !empty($tag) || !empty($search)) {
    $filteredPosts = [];
    foreach ($allPosts as $post) {
        // Filter by category
        if (!empty($category) && strcasecmp($post['category'], $category) !== 0) {
            continue;
        }
        
        // Filter by tag
        if (!empty($tag) && !in_array($tag, $post['tags'], true) && 
            !array_filter($post['tags'], function($t) use ($tag) { 
                return strcasecmp($t, $tag) === 0; 
            })) {
            continue;
        }
        
        // Filter by search
        if (!empty($search)) {
            $searchLower = strtolower($search);
            $titleContains = strpos(strtolower($post['title']), $searchLower) !== false;
            $excerptContains = strpos(strtolower($post['excerpt']), $searchLower) !== false;
            $contentContains = strpos(strtolower(strip_tags($post['content'])), $searchLower) !== false;
            
            if (!$titleContains && !$excerptContains && !$contentContains) {
                continue;
            }
        }
        
        $filteredPosts[] = $post;
    }
    $posts = $filteredPosts;
} else {
    $posts = $allPosts;
}

// Pagination settings
$postsPerPage = 6;
$totalPosts = count($posts);
$totalPages = ceil($totalPosts / $postsPerPage);
$currentPageNum = isset($_GET['page']) ? max(1, intval($_GET['page'])) : 1;
$offset = ($currentPageNum - 1) * $postsPerPage;
$currentPosts = array_slice($posts, $offset, $postsPerPage);

// Get categories for sidebar with counts
$categories = [];
foreach ($allPosts as $post) {
    $category = $post['category'];
    if (!isset($categories[$category])) {
        $categories[$category] = 0;
    }
    $categories[$category]++;
}

// Get all unique tags
$allTags = [];
foreach ($allPosts as $post) {
    if (isset($post['tags']) && is_array($post['tags'])) {
        foreach ($post['tags'] as $postTag) {
            if (!in_array($postTag, $allTags)) {
                $allTags[] = $postTag;
            }
        }
    }
}

// Get recent posts for sidebar
$recentPosts = array_slice($allPosts, 0, 3);

// Function to build pagination URL
function buildPaginationUrl($pageNum) {
    global $category, $tag, $search;
    $params = [];
    
    if ($pageNum > 1) {
        $params[] = "page=" . $pageNum;
    }
    
    if (!empty($category)) {
        $params[] = "category=" . urlencode($category);
    }
    
    if (!empty($tag)) {
        $params[] = "tag=" . urlencode($tag);
    }
    
    if (!empty($search)) {
        $params[] = "search=" . urlencode($search);
    }
    
    if (empty($params)) {
        return "blog.php";
    }
    
    return "blog.php?" . implode("&", $params);
}
?>

<?php include 'includes/header.php'; ?>
<?php include 'includes/navigation.php'; ?>

<main>
 
  <!--? Blog Area Start -->
  <section class="blog_area section-padding">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mb-5 mb-lg-0">
          <?php if (!empty($category) || !empty($tag) || !empty($search)): ?>
            <div class="filter-notice p-3 bg-light rounded mb-4">
              <p class="mb-0">
                <?php if (!empty($category)): ?>
                  Showing posts in category: <strong><?php echo $category; ?></strong>
                <?php elseif (!empty($tag)): ?>
                  Showing posts with tag: <strong><?php echo $tag; ?></strong>
                <?php elseif (!empty($search)): ?>
                  Search results for: <strong><?php echo $search; ?></strong>
                <?php endif; ?>
                <a href="blog.php" class="ml-2 text-custom-blue"><i class="fas fa-times-circle"></i> Clear filters</a>
              </p>
            </div>
          <?php endif; ?>
          
          <div class="blog_left_sidebar">
            <?php if (empty($currentPosts)): ?>
              <div class="alert alert-info p-4 rounded">
                <h4 class="text-xl font-bold mb-2">No posts found</h4>
                <p>No blog posts match your search criteria. Please try a different search or browse all posts.</p>
                <a href="blog.php" class="btn mt-3">View All Posts</a>
              </div>
            <?php else: ?>
              <div class="row">
                <?php foreach ($currentPosts as $post): 
                  $dateParts = explode(' ', $post['date']);
                  $day = $dateParts[0] ?? '';
                  $month = isset($dateParts[1]) ? substr($dateParts[1], 0, 3) : '';
                ?>
                <div class="col-lg-6 col-md-6">
                  <article class="blog_item bg-white rounded-lg shadow-sm overflow-hidden mb-5">
                    <div class="blog_item_img relative">
                      <img class="card-img-top w-full h-64 object-cover" src="<?php echo $post['image']; ?>" alt="<?php echo $post['title']; ?>">
                      <a href="blog_details.php?slug=<?php echo $post['slug']; ?>" class="blog_item_date bg-custom-orange text-center">
                        <h3 class="text-white"><?php echo $day; ?></h3>
                        <p class="text-white"><?php echo $month; ?></p>
                      </a>
                    </div>
                    <div class="blog_details p-4">
                      <a class="d-inline-block" href="blog_details.php?slug=<?php echo $post['slug']; ?>">
                        <h2 class="text-xl font-semibold text-gray-800 hover:text-custom-blue transition-colors duration-300"><?php echo $post['title']; ?></h2>
                      </a>
                      <p class="text-gray-600 my-3"><?php echo $post['excerpt']; ?></p>
                      <ul class="blog-info-link mt-4 mb-4 border-t border-gray-100 pt-3">
                        <li><i class="fa fa-user"></i> <?php echo $post['author']; ?></li>
                        <li>
                          <a href="blog.php?category=<?php echo urlencode($post['category']); ?>">
                            <i class="fa fa-tag"></i> <?php echo $post['category']; ?>
                          </a>
                        </li>
                      </ul>
                      <?php if (isset($post['tags']) && !empty($post['tags'])): ?>
                      <div class="post-tags mb-3">
                        <?php foreach ($post['tags'] as $postTag): ?>
                          <a href="blog.php?tag=<?php echo urlencode($postTag); ?>" class="inline-block text-xs bg-gray-200 text-gray-700 px-2 py-1 rounded mr-1 mb-1 hover:bg-gray-300">
                            #<?php echo $postTag; ?>
                          </a>
                        <?php endforeach; ?>
                      </div>
                      <?php endif; ?>
                      <a href="blog_details.php?slug=<?php echo $post['slug']; ?>" class="inline-block py-2 px-4 bg-gray-200 text-gray-700 rounded hover:bg-custom-orange hover:text-white transition-colors duration-300 font-medium mt-2">
                        Read More <i class="fas fa-long-arrow-alt-right ml-1"></i>
                      </a>
                    </div>
                  </article>
                </div>
                <?php endforeach; ?>
              </div>
            <?php endif; ?>
            
            <!-- Pagination -->
            <?php if ($totalPages > 1): ?>
            <nav class="blog-pagination justify-content-center d-flex mt-5">
              <ul class="pagination">
                <?php if ($currentPageNum > 1): ?>
                <li class="page-item">
                  <a href="<?php echo buildPaginationUrl($currentPageNum - 1); ?>" class="page-link rounded-l border border-gray-300 px-4 py-2 bg-white text-gray-700 hover:bg-gray-100" aria-label="Previous">
                    <i class="fas fa-chevron-left"></i>
                  </a>
                </li>
                <?php endif; ?>
                
                <?php 
                // Determine range of page numbers to show
                $startPage = max(1, $currentPageNum - 2);
                $endPage = min($totalPages, $startPage + 4);
                
                // Adjust start page if end page is at max
                if ($endPage == $totalPages) {
                    $startPage = max(1, $endPage - 4);
                }
                
                for ($i = $startPage; $i <= $endPage; $i++): 
                ?>
                <li class="page-item <?php echo $i === $currentPageNum ? 'active' : ''; ?>">
                  <a href="<?php echo buildPaginationUrl($i); ?>" class="page-link border border-gray-300 px-4 py-2 <?php echo $i === $currentPageNum ? 'bg-custom-orange text-white' : 'bg-white text-gray-700 hover:bg-gray-100'; ?>">
                    <?php echo $i; ?>
                  </a>
                </li>
                <?php endfor; ?>
                
                <?php if ($currentPageNum < $totalPages): ?>
                <li class="page-item">
                  <a href="<?php echo buildPaginationUrl($currentPageNum + 1); ?>" class="page-link rounded-r border border-gray-300 px-4 py-2 bg-white text-gray-700 hover:bg-gray-100" aria-label="Next">
                    <i class="fas fa-chevron-right"></i>
                  </a>
                </li>
                <?php endif; ?>
              </ul>
            </nav>
            <?php endif; ?>
          </div>
        </div>
        
        <!-- Sidebar -->
        <div class="col-lg-4 w-full lg:w-1/4 px-4">
          <div class="blog_right_sidebar space-y-6">
            <!-- Search Widget -->
            <aside class="single_sidebar_widget search_widget bg-white shadow-md rounded-lg p-6">
              <form action="blog.php" method="get" class="relative">
                <div class="form-group">
                  <div class="input-group mb-3">
                    <input type="text" name="search" class="form-control w-full rounded-l-lg py-3 px-4 bg-gray-100 border-0 focus:outline-none focus:ring-2 focus:ring-custom-blue" placeholder="Search Keywords" value="<?php echo $search; ?>">
                    <div class="input-group-append">
                      <button class="btn rounded-r-lg py-3 px-4 bg-custom-orange text-white hover:bg-orange-600 transition-colors" type="submit">
                        <i class="fa fa-search"></i>
                      </button>
                    </div>
                  </div>
                </div>
                <button class="btn w-full rounded-lg py-3 bg-custom-orange text-white hover:bg-orange-600 transition-colors" type="submit">Search</button>
              </form>
            </aside>

            <!-- Categories Widget -->
            <aside class="single_sidebar_widget post_category_widget bg-white shadow-md rounded-lg p-6">
              <h4 class="widget_title text-xl font-bold text-gray-800 mb-4 pb-2 border-b border-gray-200">Categories</h4>
              <ul class="list-none space-y-2">
                <?php foreach ($categories as $categoryName => $count): ?>
                <li>
                  <a href="blog.php?category=<?php echo urlencode($categoryName); ?>" class="flex items-center justify-between py-2 px-3 hover:bg-gray-100 rounded transition-colors duration-300 <?php echo ($category === $categoryName) ? 'bg-gray-100 font-medium' : ''; ?>">
                    <p class="text-gray-700"><?php echo $categoryName; ?></p>
                    <p class="text-gray-500"><?php echo $count; ?></p>
                  </a>
                </li>
                <?php endforeach; ?>
              </ul>
            </aside>

            <!-- Recent Posts Widget -->
            <aside class="single_sidebar_widget popular_post_widget bg-white shadow-md rounded-lg p-6">
              <h4 class="widget_title text-xl font-bold text-gray-800 mb-4 pb-2 border-b border-gray-200">Recent Posts</h4>
              <div class="recent-posts space-y-4">
                <?php foreach ($recentPosts as $recentPost): 
                  $dateParts = explode(' ', $recentPost['date']);
                  $day = $dateParts[0] ?? '';
                  $month = isset($dateParts[1]) ? substr($dateParts[1], 0, 3) : '';
                  $year = $dateParts[2] ?? '';
                ?>
                <div class="media post_item flex items-start border-b border-gray-100 pb-4">
                  <img src="<?php echo $recentPost['image']; ?>" alt="<?php echo $recentPost['title']; ?>" class="w-16 h-16 object-cover rounded-lg mr-3">
                  <div class="media-body">
                    <a href="blog_details.php?slug=<?php echo $recentPost['slug']; ?>" class="text-gray-800 hover:text-custom-blue transition-colors duration-300">
                      <h3 class="text-base font-medium"><?php echo $recentPost['title']; ?></h3>
                    </a>
                    <p class="text-sm text-gray-500 mt-1"><?php echo $day; ?> <?php echo $month; ?><?php echo !empty($year) ? ', ' . $year : ''; ?></p>
                  </div>
                </div>
                <?php endforeach; ?>
              </div>
            </aside>

            <!-- Tags Widget -->
            <aside class="single_sidebar_widget tag_cloud_widget bg-white shadow-md rounded-lg p-6">
              <h4 class="widget_title text-xl font-bold text-gray-800 mb-4 pb-2 border-b border-gray-200">Tags</h4>
              <ul class="flex flex-wrap gap-2">
                <?php foreach ($allTags as $tagName): ?>
                <li>
                  <a href="blog.php?tag=<?php echo urlencode($tagName); ?>" 
                     class="inline-block py-1 px-3 bg-gray-200 text-gray-700 rounded-lg hover:bg-blue-500 hover:text-white transition-colors duration-300 <?php echo ($tag === $tagName) ? 'bg-blue-500 text-white' : ''; ?>">
                    <?php echo $tagName; ?>
                  </a>
                </li>
                <?php endforeach; ?>
              </ul>
            </aside>

            <!-- Newsletter Widget -->
            <aside class="single_sidebar_widget newsletter_widget bg-gray-50 rounded-lg p-6 shadow-md">
              <h4 class="widget_title text-xl font-bold text-gray-800 mb-4">Newsletter</h4>
              <form action="#" method="post">
                <div class="form-group mb-4">
                  <input type="email" class="form-control w-full p-3 rounded-lg bg-white border border-gray-200 focus:outline-none focus:ring-2 focus:ring-custom-blue" placeholder="Enter email" required>
                </div>
                <button class="w-full py-3 px-6 rounded-lg bg-custom-orange text-white hover:bg-orange-600 transition-colors duration-300" type="submit">Subscribe</button>
              </form>
            </aside>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Blog Area End --></main>

<?php include 'includes/footer.php'; ?>
<?php include 'includes/scripts.php'; ?>

</body>
</html>
