// JavaScript to load blog posts from JSON file
document.addEventListener('DOMContentLoaded', function() {
    // Function to load the blog posts from the JSON file
    function loadBlogPosts() {
        fetch('/blog-posts.json')
            .then(response => response.json())
            .then(data => {
                // Get the container where blog posts will be displayed
                const blogContainer = document.querySelector('.home-blog-area .row:nth-child(2)');
                
                if (blogContainer && data.posts && data.posts.length > 0) {
                    // Clear existing content
                    blogContainer.innerHTML = '';
                    
                    // Get the first two posts for the homepage
                    const postsToShow = data.posts.slice(0, 2);
                    
                    // Create HTML for each post
                    postsToShow.forEach(post => {
                        // Extract date parts
                        const dateParts = post.date.split(' ');
                        const day = dateParts[0];
                        const month = dateParts[1].substring(0, 3);
                        
                        const postHTML = `
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="home-blog-single mb-30 hover-effect">
                                    <div class="blog-img-cap">
                                        <div class="blog-img">
                                            <img src="${post.image}" alt="${post.title}" class="w-full h-64 object-cover" />
                                            <div class="blog-date text-center">
                                                <span>${day}</span>
                                                <p>${month}</p>
                                            </div>
                                        </div>
                                        <div class="blog-cap">
                                            <p class="text-blue-600 font-medium">${post.position}</p>
                                            <h3 class="mt-2">
                                                <a href="blog_details.html?slug=${post.slug}" class="text-gray-800 hover:text-blue-700 transition-colors duration-300">${post.title}</a>
                                            </h3>
                                            <p class="text-gray-600 mt-3">${post.excerpt}</p>
                                            <div class="mt-4">
                                                <a href="blog_details.html?slug=${post.slug}" class="inline-block py-2 px-4 bg-orange-500 text-white rounded hover:bg-orange-600 transition-colors duration-300">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        `;
                        
                        // Append to the container
                        blogContainer.innerHTML += postHTML;
                    });
                }
            })
            .catch(error => console.error('Error loading blog posts:', error));
    }

    // Load the blog details if on blog details page
    function loadBlogDetails() {
        if (window.location.pathname.includes('blog_details.html')) {
            // Get the slug from the URL
            const urlParams = new URLSearchParams(window.location.search);
            const slug = urlParams.get('slug');
            
            if (slug) {
                fetch('/blog-posts.json')
                    .then(response => response.json())
                    .then(data => {
                        // Find the post with matching slug
                        const post = data.posts.find(p => p.slug === slug);
                        
                        if (post) {
                            // Update page title
                            document.title = `${post.title} | Omotoyosi Elitefield Educational Foundation`;
                            
                            // Update hero section
                            const heroTitle = document.querySelector('.hero-cap h2');
                            if (heroTitle) {
                                heroTitle.textContent = post.title;
                            }
                            
                            // Update feature image
                            const featureImg = document.querySelector('.feature-img img');
                            if (featureImg) {
                                featureImg.src = post.image;
                                featureImg.alt = post.title;
                                featureImg.classList.add('w-full', 'h-auto', 'object-cover');
                            }
                            
                            // Update blog details
                            const blogTitle = document.querySelector('.blog_details h2');
                            if (blogTitle) {
                                blogTitle.textContent = post.title;
                                blogTitle.classList.add('text-3xl', 'font-bold', 'text-gray-800', 'mb-4');
                            }
                            
                            // Update blog info
                            const blogInfoList = document.querySelector('.blog-info-link');
                            if (blogInfoList) {
                                blogInfoList.innerHTML = `
                                    <li><a href="#"><i class="fa fa-user"></i> ${post.author}, ${post.position}</a></li>
                                    <li><a href="#"><i class="fa fa-calendar"></i> ${post.date}</a></li>
                                    <li><a href="#"><i class="fa fa-tag"></i> ${post.category}</a></li>
                                `;
                            }
                            
                            // Update blog content
                            const blogContent = document.querySelector('.blog_details p.excert').parentNode;
                            if (blogContent) {
                                // Remove existing paragraphs
                                const paragraphs = blogContent.querySelectorAll('p:not(.excert)');
                                paragraphs.forEach(p => p.remove());
                                
                                // Update excerpt
                                const excerpt = blogContent.querySelector('.excert');
                                if (excerpt) {
                                    excerpt.innerHTML = post.excerpt;
                                    excerpt.classList.add('text-lg', 'text-gray-700', 'mb-6', 'font-medium');
                                }
                                
                                // Add the content after the excerpt
                                const contentDiv = document.createElement('div');
                                contentDiv.classList.add('blog-content', 'mt-6');
                                contentDiv.innerHTML = post.content;
                                
                                // Style the content
                                const contentElements = contentDiv.querySelectorAll('p, h3, ul, li');
                                contentElements.forEach(el => {
                                    if (el.tagName === 'H3') {
                                        el.classList.add('text-2xl', 'font-bold', 'text-gray-800', 'mt-8', 'mb-4');
                                    } else if (el.tagName === 'P') {
                                        el.classList.add('text-gray-700', 'mb-4', 'leading-relaxed');
                                    } else if (el.tagName === 'UL') {
                                        el.classList.add('list-disc', 'pl-6', 'mb-6', 'mt-4');
                                    } else if (el.tagName === 'LI') {
                                        el.classList.add('mb-2', 'text-gray-700');
                                    }
                                });
                                
                                excerpt.after(contentDiv);
                            }
                            
                            // Update tags
                            const tagsList = document.querySelector('.tag_cloud_widget ul.list');
                            if (tagsList && post.tags) {
                                tagsList.innerHTML = '';
                                post.tags.forEach(tag => {
                                    const li = document.createElement('li');
                                    li.innerHTML = `<a href="blog.html?tag=${tag}" class="inline-block py-1 px-3 bg-gray-200 text-gray-700 rounded hover:bg-blue-500 hover:text-white transition-colors duration-300 mr-2 mb-2">${tag}</a>`;
                                    tagsList.appendChild(li);
                                });
                            }
                        }
                    })
                    .catch(error => console.error('Error loading blog post details:', error));
            }
        }
    }
    
    // Load the blog posts when the page loads
    loadBlogPosts();
    
    // Load blog details if on blog details page
    loadBlogDetails();
});
