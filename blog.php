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
    $cat = $post['category'];
    if (!isset($categories[$cat])) {
        $categories[$cat] = 0;
    }
    $categories[$cat]++;
}

// Get all unique tags
$allTags = [];
foreach ($allPosts as $post) {
    if (isset($post['tags']) && is_array($post['tags'])) {
        foreach ($post['tags'] as $postTag) {
            if (!in_array($postTag, $allTags, true)) {
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
    
    // Only add page if it's not the first page, for cleaner URLs
    if ($pageNum > 1) {
        $params['page'] = $pageNum;
    }
    
    if (!empty($category)) {
        $params['category'] = $category;
    }
    
    if (!empty($tag)) {
        $params['tag'] = $tag;
    }
    
    if (!empty($search)) {
        $params['search'] = $search;
    }
    
    if (empty($params)) {
        return "blog.php";
    }
    
    return "blog.php?" . http_build_query($params);
}
?>

<?php include 'includes/header.php'; ?>
<?php include 'includes/navigation.php'; ?>

<main>
  <section class="bg-gray-50 py-16 sm:py-24">
    <div class="container mx-auto px-4">
      <div class="flex flex-wrap lg:flex-nowrap -mx-4">
        
        <div class="w-full lg:w-2/3 px-4">
          <?php if (!empty($category) || !empty($tag) || !empty($search)): ?>
            <div class="mb-8 p-4 bg-blue-50 border border-blue-200 rounded-lg flex justify-between items-center">
              <p class="text-gray-700">
                <?php if (!empty($category)): ?>
                  Showing posts in category: <strong class="font-semibold text-gray-900"><?php echo htmlspecialchars($category); ?></strong>
                <?php elseif (!empty($tag)): ?>
                  Showing posts with tag: <strong class="font-semibold text-gray-900"><?php echo htmlspecialchars($tag); ?></strong>
                <?php elseif (!empty($search)): ?>
                  Search results for: <strong class="font-semibold text-gray-900"><?php echo htmlspecialchars($search); ?></strong>
                <?php endif; ?>
              </p>
              <a href="blog.php" class="text-sm text-blue-600 hover:text-blue-800 font-semibold flex items-center">
                <i class="fas fa-times-circle mr-1"></i> Clear
              </a>
            </div>
          <?php endif; ?>
          
          <div>
            <?php if (empty($currentPosts)): ?>
              <div class="text-center p-12 bg-white rounded-lg shadow-md">
                <h4 class="text-2xl font-bold text-gray-800 mb-2">No Posts Found</h4>
                <p class="text-gray-600">No blog posts match your criteria. Please try again or browse all posts.</p>
                <a href="blog.php" class="mt-6 inline-block bg-orange-500 text-white font-bold py-2 px-5 rounded-lg hover:bg-orange-600 transition-colors">
                  View All Posts
                </a>
              </div>
            <?php else: ?>
              <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <?php foreach ($currentPosts as $post): 
                  // Safely parse date
                  $dateObj = DateTime::createFromFormat('d F Y', $post['date']);
                  $day = $dateObj ? $dateObj->format('d') : '';
                  $month = $dateObj ? $dateObj->format('M') : '';
                ?>
                <article class="bg-white rounded-lg shadow-md overflow-hidden flex flex-col h-full group">
                  <div class="relative">
                    <img class="w-full h-56 object-cover" src="<?php echo htmlspecialchars($post['image']); ?>" alt="<?php echo htmlspecialchars($post['title']); ?>">
                    <a href="blog_details.php?slug=<?php echo htmlspecialchars($post['slug']); ?>" class="absolute bottom-0 left-4 bg-orange-500 text-white text-center p-2 rounded-t-lg transition-transform duration-300 group-hover:-translate-y-2">
                      <h3 class="font-bold text-2xl"><?php echo $day; ?></h3>
                      <p class="text-sm uppercase"><?php echo $month; ?></p>
                    </a>
                  </div>
                  <div class="p-6 flex-grow flex flex-col">
                    <a class="block mb-2" href="blog_details.php?slug=<?php echo htmlspecialchars($post['slug']); ?>">
                      <h2 class="text-xl font-bold text-gray-900 group-hover:text-blue-600 transition-colors"><?php echo htmlspecialchars($post['title']); ?></h2>
                    </a>
                    <p class="text-gray-600 mb-4 flex-grow"><?php echo htmlspecialchars($post['excerpt']); ?></p>
                    <div class="pt-4 border-t border-gray-100 mt-auto">
                        <div class="flex items-center space-x-4 text-sm text-gray-500 mb-4">
                            <span><i class="fa fa-user mr-1 text-orange-500"></i> <?php echo htmlspecialchars($post['author']); ?></span>
                            <a href="blog.php?category=<?php echo urlencode($post['category']); ?>" class="hover:text-blue-600"><i class="fa fa-tag mr-1 text-orange-500"></i> <?php echo htmlspecialchars($post['category']); ?></a>
                        </div>
                        <?php if (isset($post['tags']) && !empty($post['tags'])): ?>
                          <div class="flex flex-wrap gap-2 mb-4">
                            <?php foreach ($post['tags'] as $postTag): ?>
                              <a href="blog.php?tag=<?php echo urlencode($postTag); ?>" class="text-xs bg-gray-100 text-gray-600 px-2 py-1 rounded-full hover:bg-blue-500 hover:text-white transition-colors">#<?php echo htmlspecialchars($postTag); ?></a>
                            <?php endforeach; ?>
                          </div>
                        <?php endif; ?>
                        <a href="blog_details.php?slug=<?php echo htmlspecialchars($post['slug']); ?>" class="font-semibold text-orange-500 hover:text-orange-600 transition-colors">
                            Read More <i class="fas fa-long-arrow-alt-right ml-1"></i>
                        </a>
                    </div>
                  </div>
                </article>
                <?php endforeach; ?>
              </div>
            <?php endif; ?>
            
            <?php if ($totalPages > 1): ?>
            <nav class="mt-12" aria-label="Pagination">
              <ul class="flex justify-center items-center space-x-1 sm:space-x-2">
                <?php if ($currentPageNum > 1): ?>
                <li>
                  <a href="<?php echo buildPaginationUrl($currentPageNum - 1); ?>" class="flex items-center justify-center w-10 h-10 text-gray-600 bg-white border border-gray-300 rounded-lg hover:bg-gray-100 transition-colors">
                    <span class="sr-only">Previous</span>
                    <i class="fas fa-chevron-left text-xs"></i>
                  </a>
                </li>
                <?php endif; ?>
                
                <?php 
                $startPage = max(1, $currentPageNum - 2);
                $endPage = min($totalPages, $startPage + 4);
                if ($endPage === $totalPages) {
                    $startPage = max(1, $endPage - 4);
                }
                
                for ($i = $startPage; $i <= $endPage; $i++): 
                  $isCurrent = $i === $currentPageNum;
                ?>
                <li>
                  <a href="<?php echo buildPaginationUrl($i); ?>" class="flex items-center justify-center w-10 h-10 border rounded-lg transition-colors <?php echo $isCurrent ? 'bg-orange-500 border-orange-500 text-white cursor-default' : 'bg-white border-gray-300 text-gray-600 hover:bg-gray-100'; ?>">
                    <?php echo $i; ?>
                  </a>
                </li>
                <?php endfor; ?>
                
                <?php if ($currentPageNum < $totalPages): ?>
                <li>
                  <a href="<?php echo buildPaginationUrl($currentPageNum + 1); ?>" class="flex items-center justify-center w-10 h-10 text-gray-600 bg-white border border-gray-300 rounded-lg hover:bg-gray-100 transition-colors">
                    <span class="sr-only">Next</span>
                    <i class="fas fa-chevron-right text-xs"></i>
                  </a>
                </li>
                <?php endif; ?>
              </ul>
            </nav>
            <?php endif; ?>
          </div>
        </div>
        
        <div class="w-full lg:w-1/3 px-4 mt-12 lg:mt-0">
          <div class="space-y-8 sticky top-8">
            <aside class="bg-white p-6 rounded-lg shadow-md">
              <h4 class="text-xl font-bold text-gray-900 mb-4 pb-3 border-b border-gray-200">Search</h4>
              <form action="blog.php" method="get">
                <div class="relative">
                  <input type="text" name="search" class="w-full rounded-lg py-2.5 pl-4 pr-12 text-gray-700 bg-gray-100 border-gray-200 focus:outline-none focus:ring-2 focus:ring-orange-500" placeholder="Search..." value="<?php echo htmlspecialchars($search); ?>">
                  <button class="absolute inset-y-0 right-0 flex items-center justify-center w-12 bg-orange-500 text-white rounded-r-lg hover:bg-orange-600 transition-colors" type="submit">
                    <i class="fa fa-search"></i>
                  </button>
                </div>
              </form>
            </aside>

            <aside class="bg-white p-6 rounded-lg shadow-md">
              <h4 class="text-xl font-bold text-gray-900 mb-4 pb-3 border-b border-gray-200">Categories</h4>
              <ul class="space-y-1">
                <?php foreach ($categories as $categoryName => $count): 
                  $isCurrentCategory = ($category === $categoryName);
                ?>
                <li>
                  <a href="blog.php?category=<?php echo urlencode($categoryName); ?>" class="flex justify-between items-center py-2 px-3 rounded-lg transition-colors <?php echo $isCurrentCategory ? 'bg-orange-50 text-orange-600 font-semibold' : 'text-gray-700 hover:bg-gray-100'; ?>">
                    <span><?php echo htmlspecialchars($categoryName); ?></span>
                    <span class="text-sm font-mono px-2 py-0.5 rounded-full <?php echo $isCurrentCategory ? 'bg-orange-200 text-orange-700' : 'bg-gray-200 text-gray-600'; ?>"><?php echo $count; ?></span>
                  </a>
                </li>
                <?php endforeach; ?>
              </ul>
            </aside>

            <aside class="bg-white p-6 rounded-lg shadow-md">
              <h4 class="text-xl font-bold text-gray-900 mb-4 pb-3 border-b border-gray-200">Recent Posts</h4>
              <div class="space-y-4">
                <?php foreach ($recentPosts as $recentPost): ?>
                <div class="flex items-start group">
                  <img src="<?php echo htmlspecialchars($recentPost['image']); ?>" alt="<?php echo htmlspecialchars($recentPost['title']); ?>" class="w-20 h-20 object-cover rounded-lg mr-4">
                  <div>
                    <a href="blog_details.php?slug=<?php echo htmlspecialchars($recentPost['slug']); ?>">
                      <h3 class="font-semibold text-gray-800 group-hover:text-blue-600 transition-colors"><?php echo htmlspecialchars($recentPost['title']); ?></h3>
                    </a>
                    <p class="text-sm text-gray-500 mt-1"><?php echo htmlspecialchars($recentPost['date']); ?></p>
                  </div>
                </div>
                <?php endforeach; ?>
              </div>
            </aside>

            <aside class="bg-white p-6 rounded-lg shadow-md">
              <h4 class="text-xl font-bold text-gray-900 mb-4 pb-3 border-b border-gray-200">Tags</h4>
              <div class="flex flex-wrap gap-2">
                <?php foreach ($allTags as $tagName): 
                  $isCurrentTag = ($tag === $tagName);
                ?>
                  <a href="blog.php?tag=<?php echo urlencode($tagName); ?>" class="text-sm font-medium py-1 px-3 rounded-full transition-colors <?php echo $isCurrentTag ? 'bg-blue-500 text-white' : 'bg-gray-100 text-gray-600 hover:bg-blue-500 hover:text-white'; ?>">
                    <?php echo htmlspecialchars($tagName); ?>
                  </a>
                <?php endforeach; ?>
              </div>
            </aside>
          </div>
        </div>
      </div>
    </div>
  </section>
  </main>

<?php include 'includes/footer.php'; ?>
<?php include 'includes/scripts.php'; ?>

</body>
</html>