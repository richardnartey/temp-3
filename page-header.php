<!-- <link rel="stylesheet" href="css/page-header.css"> -->


<header class="page-header <?php if($has_full_height === 'yes') echo 'dynamic-header-height'; else echo ''; ?>">
    <div class="top-nav small-screen-no-display">
        <div class="container">
            <button class="theme-toggle">
                <span class="light-mode"><i class="fa fa-sun"></i></span>
                Light
            </button>
        </div>
    </div>
    <div class="main-nav">
        <div class="container">
            <nav class="desktop-top-nav">
                <!-- <a href="#" class="logo">Logo</a> -->
                <ul class="site-nav">
                    <li class="small-screen-no-display">
                        <a href="index.php" class="site-nav-link <?php if($page_name === 'homepage') echo 'active'; ?>">
                            Home
                        </a>
                    </li>
                    <li class="small-screen-no-display">
                        <a href="" class="site-nav-link">
                            Software
                            <span><i class="fa fa-chevron-down"></i></span>
                        </a>
                    </li>
                    <li class="small-screen-no-display">
                        <a href="" class="site-nav-link">
                            Developers
                        </a>
                    </li>
                    <li class="small-screen-no-display">
                        <a href="" class="site-nav-link">
                            Resources
                        </a>
                    </li>
                    <li class="has-desktop-dropdown small-screen-no-display">
                        <a href="courses/courses.php" class="site-nav-link">
                            Courses 
                            <span><i class="fa fa-chevron-down"></i></span></a>
                        <div class="desktop-dropdown flex-row">
                            <div>
                                <ul class="dropdown-nav">
                                    <li>
                                        <button class="dropdown-btn active"
                                            onclick="show_dropdown_content('web_development')">
                                            <span><i class="fas fa-laptop-code"></i></span>Web Development
                                        </button>
                                    </li>
                                    <li>
                                        <button class="dropdown-btn"
                                            onclick="show_dropdown_content('database_programming')">
                                            <span><i class="fas fa-database"></i></span>Database Programming
                                        </button>
                                    </li>
                                    <li>
                                        <button class="dropdown-btn" onclick="show_dropdown_content('mobile_app')">
                                            <span><i class="fas fa-mobile"></i></span>Mobile App
                                        </button>
                                    </li>
                                    <li>
                                        <button class="dropdown-btn"
                                            onclick="show_dropdown_content('administrative_system')">
                                            <span><i class="fas fa-cloud"></i></span>Administrative System
                                        </button>
                                    </li>
                                    <li>
                                        <button class="dropdown-btn"
                                            onclick="show_dropdown_content('graphic_ui_design')">
                                            <span><i class="fas fa-palette"></i></span>Graphic & UI Design
                                        </button>
                                    </li>
                                </ul>
                            </div>
                            <ul class="dropdown-content-container">
                                <li class="active" id="web_development">
                                    <div class="dropdown-card-contanier">
                                        <div class="dropdown-card">
                                            <div class="ribbon">Popular</div>
                                            <img src="images/general images/undraw_pair_programming_re_or4x.svg" alt=""
                                                class="dropdown-card-img">
                                            <div class="dropdown-card-content">
                                                <h3 class="heading-font black-faint-deep" style="white-space: nowrap;">
                                                    Fullstack Development</h3>
                                                <p class="black-faint cut-text-3">
                                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi
                                                    ipsa ullam voluptate consectetur
                                                </p>
                                                <a href="#" class="read-more">Read more <span><i
                                                            class="fa fa-arrow-right"></i></span></a>
                                            </div>
                                        </div>
                                        <div class="dropdown-card">
                                            <div class="ribbon">Popular</div>
                                            <img src="images/general images/undraw_pair_programming_re_or4x.svg" alt=""
                                                class="dropdown-card-img">
                                            <div class="dropdown-card-content">
                                                <h3 class="heading-font black-faint-deep" style="white-space: nowrap;">
                                                    Frontend Development</h3>
                                                <p class="black-faint cut-text-3">
                                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi
                                                    ipsa ullam voluptate consectetur
                                                </p>
                                                <a href="#" class="read-more">Read more <span><i
                                                            class="fa fa-arrow-right"></i></span></a>
                                            </div>
                                        </div>
                                        <div class="dropdown-card">
                                            <img src="images/general images/feature-banner.svg" alt=""
                                                class="dropdown-card-img">
                                            <div class="dropdown-card-content">
                                                <h3 class="heading-font black-faint-deep" style="white-space: nowrap;">
                                                    Backend Development</h3>
                                                <p class="black-faint cut-text-3">
                                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi
                                                    ipsa ullam voluptate consectetur
                                                </p>
                                                <a href="#" class="read-more">Read more <span><i
                                                            class="fa fa-arrow-right"></i></span></a>
                                            </div>
                                        </div>
                                        <div class="dropdown-card">
                                            <img src="images/general images/undraw_software_engineer_re_tnjc.svg" alt=""
                                                class="dropdown-card-img">
                                            <div class="dropdown-card-content">
                                                <h3 class="heading-font black-faint-deep" style="white-space: nowrap;">
                                                    Fullstack Web Development</h3>
                                                <p class="black-faint cut-text-3">
                                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi
                                                    ipsa ullam voluptate consectetur
                                                </p>
                                                <a href="#" class="read-more">Read more <span><i
                                                            class="fa fa-arrow-right"></i></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li id="database_programming">
                                    <div class="dropdown-card-contanier">
                                        <div class="dropdown-card">
                                            <img src="images/general images/undraw_pair_programming_re_or4x.svg" alt=""
                                                class="dropdown-card-img">
                                            <div class="dropdown-card-content">
                                                <h3 class="heading-font black-faint-deep" style="white-space: nowrap;">
                                                    Fullstack Web Development</h3>
                                                <p class="black-faint cut-text-3">
                                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi
                                                    ipsa ullam voluptate consectetur
                                                </p>
                                                <a href="#" class="read-more">Read more <span><i
                                                            class="fa fa-arrow-right"></i></span></a>
                                            </div>
                                        </div>
                                        <div class="dropdown-card">
                                            <img src="images/general images/undraw_pair_programming_re_or4x.svg" alt=""
                                                class="dropdown-card-img">
                                            <div class="dropdown-card-content">
                                                <h3 class="heading-font black-faint-deep" style="white-space: nowrap;">
                                                    Database Programming</h3>
                                                <p class="black-faint cut-text-3">
                                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi
                                                    ipsa ullam voluptate consectetur
                                                </p>
                                                <a href="#" class="read-more">Read more <span><i
                                                            class="fa fa-arrow-right"></i></span></a>
                                            </div>
                                        </div>
                                        <!-- <div class="dropdown-card">
                                            <img src="images/general images/feature-banner.svg" alt="" class="dropdown-card-img">
                                            <div class="dropdown-card-content">
                                                <h3 class="heading-font black-faint-deep" style="white-space: nowrap;">Fullstack Web Development</h3>
                                                <p class="black-faint cut-text-3">
                                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi ipsa ullam voluptate consectetur 
                                                </p>
                                                <a href="#" class="read-more">Read more <span><i class="fa fa-arrow-right"></i></span></a>
                                            </div>
                                        </div>
                                        <div class="dropdown-card">
                                            <img src="images/general images/undraw_software_engineer_re_tnjc.svg" alt="" class="dropdown-card-img">
                                            <div class="dropdown-card-content">
                                                <h3 class="heading-font black-faint-deep" style="white-space: nowrap;">Fullstack Web Development</h3>
                                                <p class="black-faint cut-text-3">
                                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi ipsa ullam voluptate consectetur 
                                                </p>
                                                <a href="#" class="read-more">Read more <span><i class="fa fa-arrow-right"></i></span></a>
                                            </div>
                                        </div> -->
                                    </div>
                                </li>
                                <li id="mobile_app">
                                    mobile
                                </li>
                                <li id="administrative_system">
                                    adm
                                </li>
                                <li id="graphic_ui_design">
                                    graphic_ui_design
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="mobile-nav-top-form-container desktop-no-display">
                        <form action="">
                            <input type="text" placeholder="Search">
                            <button><i class="fa fa-search"></i></button>
                        </form>
                    </li>
                </ul>
                <ul class="other-nav">
                    <li class="has-desktop-dropdown small-screen-no-display">
                        <a href="blog/blog.php" class="site-nav-link">
                            Our Blog 
                            <span><i class="fa fa-chevron-down"></i></span></a>
                        <div class="desktop-dropdown small-screen-no-display">
                            <h3 class="paragraph-font black-faint-deep">Our Blog</h3>
                            <ul class="page-header-blog-list">
                                <li>
                                    <a href="#" class="page-header-blog-link">
                                        <img src="images/general images/database-woman.jpg" alt=""
                                            class="page-header-blog-img">
                                        <div>
                                            <!-- <small class="category-tag">CSS</small> -->
                                            <h3 class="page-header-blog-header black-faint-deep heading-font">Container
                                                queries of CSS</h3>
                                            <p class="cut-text-2">
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa impedit
                                                veritatis tenetur. Aspernatur explicabo nihil, deleniti perferendis
                                                neque eos omnis.
                                            </p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="page-header-blog-link">
                                        <img src="images/general images/database-woman.jpg" alt=""
                                            class="page-header-blog-img">
                                        <div>
                                            <!-- <small class="category-tag">CSS</small> -->
                                            <h3 class="page-header-blog-header black-faint-deep heading-font">Container
                                                queries of CSS</h3>
                                            <p class="cut-text-2">
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa impedit
                                                veritatis tenetur. Aspernatur explicabo nihil, deleniti perferendis
                                                neque eos omnis.
                                            </p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="page-header-blog-link">
                                        <img src="images/general images/database-woman.jpg" alt=""
                                            class="page-header-blog-img">
                                        <div>
                                            <!-- <small class="category-tag">CSS</small> -->
                                            <h3 class="page-header-blog-header black-faint-deep heading-font">Container
                                                queries of CSS</h3>
                                            <p class="cut-text-2">
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa impedit
                                                veritatis tenetur. Aspernatur explicabo nihil, deleniti perferendis
                                                neque eos omnis.
                                            </p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="page-header-blog-link">
                                        <img src="images/general images/database-woman.jpg" alt=""
                                            class="page-header-blog-img">
                                        <div>
                                            <!-- <small class="category-tag">CSS</small> -->
                                            <h3 class="page-header-blog-header black-faint-deep heading-font">Container
                                                queries of CSS</h3>
                                            <p class="cut-text-2">
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa impedit
                                                veritatis tenetur. Aspernatur explicabo nihil, deleniti perferendis
                                                neque eos omnis.
                                            </p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="page-header-blog-link">
                                        <img src="images/general images/database-woman.jpg" alt=""
                                            class="page-header-blog-img">
                                        <div>
                                            <!-- <small class="category-tag">CSS</small> -->
                                            <h3 class="page-header-blog-header black-faint-deep heading-font">Container
                                                queries of CSS</h3>
                                            <p class="cut-text-2">
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa impedit
                                                veritatis tenetur. Aspernatur explicabo nihil, deleniti perferendis
                                                neque eos omnis.
                                            </p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="page-header-blog-link">
                                        <img src="images/general images/database-woman.jpg" alt=""
                                            class="page-header-blog-img">
                                        <div>
                                            <!-- <small class="category-tag">CSS</small> -->
                                            <h3 class="page-header-blog-header black-faint-deep heading-font">Container
                                                queries of CSS</h3>
                                            <p class="cut-text-2">
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa impedit
                                                veritatis tenetur. Aspernatur explicabo nihil, deleniti perferendis
                                                neque eos omnis.
                                            </p>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="small-screen-no-display">
                        <a href="#" class="general-btn general-btn-small general-btn-green">Explore courses</a>
                    </li>
                    <li class="small-screen-no-displayd">
                        <a href="#" class="general-btn general-btn-small general-btn-outline-green">Go to class</a>
                    </li>
                    <!-- <li>
                        <a href="#" class="general-btn general-btn-small general-btn-outline-green">Go to class</a>
                    </li> -->
                </ul>
            </nav>
        </div>
    </div>
    <div class="mobile-bottom-nav-container desktop-no-display">
            <div class="container">
                <nav>
                    <ul class="mobile-bottom-nav">
                        <li>
                            <a href="index.php" class="mobile-bottom-nav-link <?php if($page_name === 'homepage') echo 'active'; ?>">
                                <span class="mobile-nav-icon"><i class="fa fa-home"></i></span>
                                <span class="mobile-nav-text">Home</span>
                            </a>
                        </li>
                        <li>
                            <a href="software/software-detail.php" class="mobile-bottom-nav-link <?php if($page_name === 'software') echo 'active'; ?>">
                                <span class="mobile-nav-icon"><i class="fa fa-laptop-code"></i></span>
                                <span class="mobile-nav-text">Software</span>
                            </a>
                        </li>
                        <li>
                            <a href="developers/developers.php" class="mobile-bottom-nav-link <?php if($page_name === 'developers') echo 'active'; ?>">
                                <span class="mobile-nav-icon"><i class="fa fa-users"></i></span>
                                <span class="mobile-nav-text">Developers</span>
                            </a>
                        </li>
                        <li>
                            <a href="resources/resources.php" class="mobile-bottom-nav-link <?php if($page_name === 'resources') echo 'active'; ?>">
                                <span class="mobile-nav-icon"><i class="fa fa-recycle"></i></span>
                                <span class="mobile-nav-text">Resources</span>
                            </a>
                        </li>
                        <li>
                            <a href="courses/courses.php" class="mobile-bottom-nav-link <?php if($page_name === 'courses') echo 'active'; ?>">
                                <span class="mobile-nav-icon"><i class="fa fa-chalkboard-teacher"></i></span>
                                <span class="mobile-nav-text">Courses</span>
                            </a>
                        </li>
                        <li>
                            <a href="blog/blog.php" class="mobile-bottom-nav-link <?php if($page_name === 'our-blog') echo 'active'; ?>">
                                <span class="mobile-nav-icon"><i class="fa fa-list"></i></span>
                                <span class="mobile-nav-text">Blog</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    <!-- Dynamic hero section based on the page and it's content -->
    <?php if($page_name === 'homepage'): ?>
        <div class="hompage-hero-container container">
            <div class="page-header-hero-text">
                <h1 class="black-faint-deep heading-font">Become Elite Software Engineer At Your Own Pace And Schedules</h1>
                <h2 class="black-faint paragraph-font">
                    Build a career in the Tech industry, and become profound to potential employers.
                </h2>
                <button class="general-btn general-btn-big general-btn-green">Explore Courses</button>
            </div>
            <div class="homepage-hero-img">
                <img src="images/general-images/programmer-animate.svg" alt="a programmer" class="blur-background">
            </div>
        </div>
    <?php elseif($page_name === 'software'):?>
    <?php elseif($page_name === 'courses'):?>
    <?php elseif($page_name === 'developers'):?>
    <?php elseif($page_name === 'resources'):?>
    <?php else: ?>
    <?php endif; ?>
</header>