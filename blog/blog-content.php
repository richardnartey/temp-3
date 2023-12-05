<?php 
    $page_name = "our-blog"; 
    $has_full_height = "no";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/page-modules.css">
    <link rel="stylesheet" href="../css/blog.css">
    <link rel="stylesheet" href="../fontawesome/css/all.css">
    <script src="../js/general.js" defer></script>
    <title>Our Blog | GCCC</title>
</head>

<body>
    <!-- ----------------------------------Including the page's header from 'page-header.php file------------------------------- -->
    <?php include_once "../page-parts/page-header-2.php"; ?>

    <div class="container">
        <div class="main-aside-container">
            <!-- ----------------------------------Including the page's header from 'page-header.php file------------------------------- -->
            <?php include_once "../page-parts/blog-sidebar.php"; ?>
            <main class="blog-main">
                <section class="blog-content-header">
                    <header>
                        <h1 class="heading-font black-faint-deep">
                            Blog title here, amet consectetur adipisicing elit. Tempore consequuntur qua
                        </h1>
                        <address class="blog-author-2 mt-1">
                            <img src="../images/blog-images/blog-publisher-images/profile-img-placeholder.png"
                                alt="publisher-name">
                            <div>
                                <small class="black-faint paragraph-font">Published on November 24, 2023</small>
                                <p class="black-faint">By <strong>Richard Nartey</strong></p>
                            </div>
                        </address>
                        <div class="mt-1">
                            <small class="paragraph-font black-faint" style="display: block;">SHARE THIS POST</small>
                            <ul class="blog-share-options mt-1">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fab fa-tiktok"></i></a></li>
                                <li><a href="#"><i class="fa fa-envelope"></i></a></li>
                            </ul>
                        </div>
                        <hr class="mt-1">
                    </header>
                </section>
                <section class="blog-content mt-2">
                    <div class="blog-content-section">
                        <p class="blog-paragraph black-faint">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia reprehenderit a veritatis
                            aliquid neque pariatur qui facilis minus perspiciatis dolore, magnam ab veniam, labore rem?
                            Hic facilis eaque ipsam amet, reiciendis, distinctio adipisci enim illo quo a quas,
                            necessitatibus soluta et iure praesentium earum exercitationem. Facilis eveniet nesciunt
                            minima corrupti?
                        </p>
                        <p class="blog-paragraph black-faint">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia reprehenderit a veritatis
                            aliquid neque pariatur qui facilis minus perspiciatis dolore, magnam ab veniam, labore rem?
                            Hic facilis eaque ipsam amet, reiciendis, distinctio adipisci enim illo quo a quas,
                            necessitatibus soluta et iure praesentium earum exercitationem. Facilis eveniet nesciunt
                            minima corrupti?
                        </p>
                    </div>
                    <div class="blog-content-section">
                        <h1 class="black-faint-deep heading-font">Lorem ipsum dolor sit amet consectetur adipisicing
                            elit. Eligendi, nostrum.</h1>
                        <p class="blog-paragraph black-faint">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia reprehenderit a veritatis
                            aliquid neque pariatur qui facilis minus perspiciatis dolore, magnam ab veniam, labore rem?
                            Hic facilis eaque ipsam amet, reiciendis, distinctio adipisci enim illo quo a quas,
                            necessitatibus soluta et iure praesentium earum exercitationem. Facilis eveniet nesciunt
                            minima corrupti?
                        </p>
                        <div class="blog-content-img-container">
                            <img src="../images/blog-images/blog-article-images/database-woman.jpg" alt="">
                        </div>
                        <p class="blog-paragraph black-faint">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia reprehenderit a veritatis
                            aliquid neque pariatur qui facilis minus perspiciatis dolore, magnam ab veniam, labore rem?
                            Hic facilis eaque ipsam amet, reiciendis, distinctio adipisci enim illo quo a quas,
                            necessitatibus soluta et iure praesentium earum exercitationem. Facilis eveniet nesciunt
                            minima corrupti?
                        </p>
                        <div class="blog-content-note mt-1">
                            <p class="paragraph-font font-1 black-faint">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia reprehenderit a veritatis
                                aliquid neque pariatur qui facilis minus perspiciatis dolore, magnam ab veniam, labore rem?
                                Hic facilis eaque ipsam amet, reiciendis, distinctio adipisci enim illo quo a quas,
                                necessitatibus soluta et iure praesentium earum exercitationem. Facilis eveniet nesciunt
                                minima corrupti?
                            </p>
                        </div>
                    </div>
                    <div class="mt-2">
                            <small class="paragraph-font black-faint" style="display: block;">SHARE THIS POST</small>
                            <ul class="blog-share-options mt-1">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fab fa-tiktok"></i></a></li>
                                <li><a href="#"><i class="fa fa-envelope"></i></a></li>
                            </ul>
                        </div>
                    <hr class="mt-2">
                </section>
                <!-- <section class="blog-comment-container mt-3">
                    <div class="blog-comment-form">
                        <h3 class="heading-font black-faint-deep">Leava a comment</h3>
                        <form action="" class="mt-1">
                            <div class="grid-column-3">
                                <input type="text" placeholder="Name *">
                                <input type="email" placeholder="Email *">
                                <input type="text" placeholder="Website">
                            </div>
                            <div class="mt-1">
                                <textarea name="" id="" cols="30" rows="10"></textarea>
                            </div>
                        </form>
                    </div>
                </section> -->
                <section class="related-articles mt-3">
                    <h2 class="black-faint-deep heading-font cat-title"><span><i class="fa fa-list"></i></span> Related Articles</h2>
                    <div class="grid-column-2 mt-2">
                        <div class="blog-card">
                            <a href="blog-content.php" class="blog-card-link">
                                <img src="../images/blog-images/blog-article-images/database-woman.jpg" alt=""
                                    class="blog-card-img">
                                <div class="blog-card-content">
                                    <small class="paragraph-font black-faint">November 3, 2023</small>
                                    <h2 class="black-faint-deep heading-font">
                                        Lorem ipsum dolor sit ametconse ctetur, adipisicing elit. Praesentium,
                                        molestias.
                                    </h2>
                                    <p class="font-1 black-faint paragraph-font cut-text-2">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam excepturi
                                        asperiores
                                        facilis molestias inventore corporis quam velit cumque placeat, tempore dicta
                                        eveniet,
                                        deserunt cupiditate consequuntur commodi magni assumenda. Officia, excepturi?
                                    </p>
                                </div>
                                <div class="blog-author">
                                    <img src="../images/blog-images/blog-publisher-images/profile-img-placeholder.png"
                                        alt="author name here">
                                    <div>
                                        <p class="black-faint-deep paragraph-font">Richard Nartey</p>
                                        <small class="black-faint paragraph-font">Web Development</small>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="blog-card">
                            <a href="blog-content.php" class="blog-card-link">
                                <img src="../images/blog-images/blog-article-images/database-woman.jpg" alt=""
                                    class="blog-card-img">
                                <div class="blog-card-content">
                                    <small class="paragraph-font black-faint">November 3, 2023</small>
                                    <h2 class="black-faint-deep heading-font">
                                        Lorem ipsum dolor sit ametconse ctetur, adipisicing elit. Praesentium,
                                        molestias.
                                    </h2>
                                    <p class="font-1 black-faint paragraph-font cut-text-2">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam excepturi
                                        asperiores
                                        facilis molestias inventore corporis quam velit cumque placeat, tempore dicta
                                        eveniet,
                                        deserunt cupiditate consequuntur commodi magni assumenda. Officia, excepturi?
                                    </p>
                                </div>
                                <div class="blog-author">
                                    <img src="../images/blog-images/blog-publisher-images/profile-img-placeholder.png"
                                        alt="author name here">
                                    <div>
                                        <p class="black-faint-deep paragraph-font">Richard Nartey</p>
                                        <small class="black-faint paragraph-font">Web Development</small>
                                    </div>
                                </div>
                            </a>
                        </div>

                    </div>
                </section>
            </main>
        </div>
    </div>


    <script src="../fontawesome/js/all.js"></script>
</body>

</html>