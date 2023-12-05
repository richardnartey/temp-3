<?php 
    $page_name = "homepage"; 
    $has_full_height = 'yes';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/page-modules.css">
    <link rel="stylesheet" href="css/homepage.css">
    <link rel="stylesheet" href="fontawesome/css/all.css">
    <script src="js/general.js" defer></script>
    <title>Home | GCCC</title>
</head>

<body>
    <!-- ----------------------------------Including the page's header from 'page-header.php file------------------------------- -->
    <?php include_once "page-header.php"; ?>


    <!-- ----------------------------------Including the 'Chat with Support' from chat-support.php file------------------------------- -->
    <?php include_once "chat-support.php"; ?>


    <!-- -----------------------------------------------PAGE MODAL--------------------------------------------- -->
    <div class="modal">
        <div class="modal-backdrop modal-close"></div>
        <div class="modal-body tile-medium">
            <button class="modal-btn modal-close"><i class="fa fa-close"></i></button>
            <div class="modal-content">
                <h2 class="heading-font black-faint-deep"><span><i class="fa fa-envelope"></i></span> Subscribe to our
                    Newsletter</h2>
                <p class="paragraph-font black-faint mt-1">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis, nihil eius? Atque error molestias
                    sint consequatur impedit aspernatur labore itaque quia quisquam vero quasi repudiandae expedita
                    sequi, laudantium nobis cupiditate, placeat ratione minus eos! Animi consequatur.
                </p>
                <form action="php_includes_files/subscription_email.php" method="POST" class="mt-1">
                    <div class="modal-input-control">
                        <div>
                            <label for="subscription_email"><i class="fa fa-envelope"></i></label>
                            <input type="email" autocomplete="off" name="subscriber_email" id="subscription_email"
                                placeholder="example@gmail.com">
                        </div>
                        <button type="submit">Subscribe</button>
                    </div>
                </form>
                <hr class="mt-1">
                <div class="mt-1">
                    <p class="black-faint paragraph-font">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. <a href="#" class="link-green">Privacy
                            Policy</a>
                    </p>
                </div>
            </div>
        </div>
    </div>



    <!-- -----------------------------------------------PAGE MAIN--------------------------------------------- -->
    <main class="main">
        <div class="container">
            <!-- -----------------------------------------------COURSE PREVIEW--------------------------------------------- -->
            <div class="course-preview-container">
                <div class="grid-column-6">
                    <div class="course-preview-button">
                        <div class="preview-icon">
                            <span class="orange-icon"><i class="fa fa-database"></i></span>
                            <h3 class="heading-font black-faint-deep">Database Programming</h3>
                        </div>
                        <p class="paragraph-font black-faint cut-text-2">
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Saepe, reprehenderit.
                        </p>
                        <a href="#">Read more <span><i class="fa fa-arrow-right"></i></span></a>
                    </div>
                    <div class="course-preview-button">
                        <div class="preview-icon">
                            <span class="blue-icon"><i class="fa fa-laptop-code"></i></span>
                            <h3 class="heading-font black-faint-deep">Web Development</h3>
                        </div>
                        <p class="paragraph-font black-faint cut-text-2">
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Saepe, reprehenderit.
                        </p>
                        <a href="#">Read more <span><i class="fa fa-arrow-right"></i></span></a>
                    </div>
                    <div class="course-preview-button">
                        <div class="preview-icon">
                            <span class="red-icon"><i class="fa fa-mobile"></i></span>
                            <h3 class="heading-font black-faint-deep">Mobile App</h3>
                        </div>
                        <p class="paragraph-font black-faint cut-text-2">
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Saepe, reprehenderit.
                        </p>
                        <a href="#">Read more <span><i class="fa fa-arrow-right"></i></span></a>
                    </div>
                    <div class="course-preview-button">
                        <div class="preview-icon">
                            <span class="puple-icon"><i class="fa fa-palette"></i></span>
                            <h3 class="heading-font black-faint-deep">Graphic & UI Design</h3>
                        </div>
                        <p class="paragraph-font black-faint cut-text-2">
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Saepe, reprehenderit.
                        </p>
                        <a href="#">Read more <span><i class="fa fa-arrow-right"></i></span></a>
                    </div>
                </div>
                <div class="slider-container mt-1">
                    <div class="slider">
                        <button class="handle left-handle"><i class="fa fa-chevron-left"></i></button>
                        <div>
                            1111111111Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt laboriosam
                            consequatur voluptatem, reprehenderit dolor quia asperiores optio sint dolores? Impedit eos
                            corporis exercitationem eius provident deleniti debitis velit unde? Ipsa.
                        </div>
                        <div>
                            222222222222222222Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt
                            laboriosam consequatur voluptatem, reprehenderit dolor quia asperiores optio sint dolores?
                            Impedit eos corporis exercitationem eius provident deleniti debitis velit unde? Ipsa.
                        </div>
                        <div>
                            333333333333333333333Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt
                            laboriosam consequatur voluptatem, reprehenderit dolor quia asperiores optio sint dolores?
                            Impedit eos corporis exercitationem eius provident deleniti debitis velit unde? Ipsa.
                        </div>
                        <div>
                            4444444444444444444Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt
                            laboriosam consequatur voluptatem, reprehenderit dolor quia asperiores optio sint dolores?
                            Impedit eos corporis exercitationem eius provident deleniti debitis velit unde? Ipsa.
                        </div>
                        <button class="handle right-handle"><i class="fa fa-chevron-right"></i></button>
                    </div>
                </div>
            </div>


            <!-- -----------------------------------------------SOFTWARE PACKAGES--------------------------------------------- -->
            <div>
                <div class="heading-paragraph-group-vertical content-spacing">
                    <h1 class="heading-font black-faint-deep">Our Cool Software Packages For Everyone</h1>
                    <p class="paragraph-font black-faint font-1">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae facilis labore eligendi at
                        fuga sequi corporis quo impedit et veritatis.
                    </p>
                </div>
                <div class="grid-column-4 mt-3">
                    <div class="software-item tile">
                        <div class="software-head">
                            <span class="software-icon"><i class="fa fa-bolt-lightning"></i></span>
                            <h2 class="heading-font black-faint-deep">SM System</h2>
                        </div>
                        <p class="paragraph-font black-faint mt-1 cut-text-4">
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                        </p>
                        <hr class="mt-1">
                        <ul class="description-list mt-1 mb-1">
                            <li>
                                <span class="description-list-icon"><i class="fa fa-check"></i></span>
                                <p class="paragraph-font black-faint">Auto backup</p>
                            </li>
                            <li>
                                <span class="description-list-icon"><i class="fa fa-check"></i></span>
                                <p class="paragraph-font black-faint">Auto backup</p>
                            </li>
                            <li>
                                <span class="description-list-icon"><i class="fa fa-check"></i></span>
                                <p class="paragraph-font black-faint">Auto backup</p>
                            </li>
                        </ul>
                        <a href="software/software-detail.php" class="general-btn general-btn-green">Get started</a>
                    </div>
                    <div class="software-item tile">
                        <div class="software-head">
                            <span class="software-icon"><i class="fa fa-star"></i></span>
                            <h2 class="heading-font black-faint-deep">SM System</h2>
                        </div>
                        <p class="paragraph-font black-faint mt-1 cut-text-4">
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Accusantium eveniet impedit quos
                            laborum sequi quia expedita temporibus facilis cupiditate ratione.
                        </p>
                        <hr class="mt-1">
                        <ul class="description-list mt-1 mb-1">
                            <li>
                                <span class="description-list-icon"><i class="fa fa-check"></i></span>
                                <p class="paragraph-font black-faint">Auto backup</p>
                            </li>
                            <li>
                                <span class="description-list-icon"><i class="fa fa-check"></i></span>
                                <p class="paragraph-font black-faint">Auto backup</p>
                            </li>
                            <li>
                                <span class="description-list-icon"><i class="fa fa-check"></i></span>
                                <p class="paragraph-font black-faint">Auto backup</p>
                            </li>
                        </ul>
                        <a href="#" class="general-btn general-btn-green">Get started</a>
                    </div>
                    <div class="software-item tile">
                        <div class="software-head">
                            <span class="software-icon"><i class="fa fa-heart"></i></span>
                            <h2 class="heading-font black-faint-deep">SM System</h2>
                        </div>
                        <p class="paragraph-font black-faint mt-1 cut-text-4">
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Accusantium eveniet impedit quos
                            laborum sequi quia expedita temporibus facilis cupiditate ratione.
                        </p>
                        <hr class="mt-1">
                        <ul class="description-list mt-1 mb-1">
                            <li>
                                <span class="description-list-icon"><i class="fa fa-check"></i></span>
                                <p class="paragraph-font black-faint">Auto backup</p>
                            </li>
                            <li>
                                <span class="description-list-icon"><i class="fa fa-check"></i></span>
                                <p class="paragraph-font black-faint">Auto backup</p>
                            </li>
                            <li>
                                <span class="description-list-icon"><i class="fa fa-check"></i></span>
                                <p class="paragraph-font black-faint">Auto backup</p>
                            </li>
                        </ul>
                        <a href="#" class="general-btn general-btn-green">Get started</a>
                    </div>
                    <div class="software-item tile">
                        <div class="software-head">
                            <span class="software-icon"><i class="fa fa-chess"></i></span>
                            <h2 class="heading-font black-faint-deep">SM System</h2>
                        </div>
                        <p class="paragraph-font black-faint mt-1 cut-text-4">
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Accusantium eveniet impedit quos
                            laborum sequi quia expedita temporibus facilis cupiditate ratione.
                        </p>
                        <hr class="mt-1">
                        <ul class="description-list mt-1 mb-1">
                            <li>
                                <span class="description-list-icon"><i class="fa fa-check"></i></span>
                                <p class="paragraph-font black-faint">Auto backup</p>
                            </li>
                            <li>
                                <span class="description-list-icon"><i class="fa fa-check"></i></span>
                                <p class="paragraph-font black-faint">Auto backup</p>
                            </li>
                            <li>
                                <span class="description-list-icon"><i class="fa fa-check"></i></span>
                                <p class="paragraph-font black-faint">Auto backup</p>
                            </li>
                        </ul>
                        <a href="#" class="general-btn general-btn-green">Get started</a>
                    </div>
                </div>
            </div>

            <!-- -----------------------------------------------OUR SERVICES--------------------------------------------- -->
        </div>


        <div class="container-small">
            <div class="heading-paragraph-group-vertical content-spacing">
                <h1 class="heading-font black-faint-deep">Our Services</h1>
            </div>
            <div class="hosting-service mt-3">
                <div>1</div>
                <div>2</div>
                <div>3</div>
            </div>
        </div>

        <!-- -----------------------------------------------QA--------------------------------------------- -->
        <div class="question-answer-container mt-3">
            <div class="container">
                <!-- -----------------------------------------------TESTIMONIALS--------------------------------------------- -->
                <div class="heading-paragraph-group-vertical">
                    <h1 class="heading-font black-faint-deep">What Our Students & Clients Say</h1>
                    <p class="paragraph-font black-faint font-1">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae facilis labore eligendi at
                        fuga sequi corporis quo impedit et veritatis.
                    </p>
                </div>
                <div class="grid-column-2 mt-3">
                    <div class="testimonial-wrapper">
                        <div class="testimonial">
                            <p class="paragraph-font">
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Earum, facilis laudantium
                                dolores
                                corrupti amet ullam qui ad, ipsam harum dicta reprehenderit similique optio dolore
                                voluptatibus! Corporis in perferendis blanditiis aut esse cum earum debitis. Omnis
                                dignissimos, similique consectetur atque mollitia assumenda, ea delectus sunt in
                                voluptatum
                                officia eveniet provident nobis.
                            </p>
                            <div class="person-details mt-1">
                                <h3 class="paragraph-font black-faint-deep">Lizabeth Brook</h3>
                                <p cclass="paragraph-font black-faint">Client - Microsoft</p>
                            </div>
                        </div>
                        <div class="testimonial-img-wrapper">
                            <img src="images/general images/database-woman.jpg" alt="">
                        </div>
                    </div>
                    <div class="testimonial-wrapper">
                        <div class="testimonial">
                            <p class="paragraph-font">
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Earum, facilis laudantium
                                dolores
                                corrupti amet ullam qui ad, ipsam harum dicta reprehenderit similique optio dolore
                                voluptatibus! Corporis in perferendis blanditiis aut esse cum earum debitis. Omnis
                                dignissimos, similique consectetur atque mollitia assumenda, ea delectus sunt in
                                voluptatum
                                officia eveniet provident nobis.
                            </p>
                            <div class="person-details mt-1">
                                <h3 class="paragraph-font black-faint">Lizabeth Brook</h3>
                                <p cclass="paragraph-font black-faint">Client - FVEC</p>
                            </div>
                        </div>
                        <div class="testimonial-img-wrapper">
                            <img src="images/general images/database-woman.jpg" alt="">
                        </div>
                    </div>
                    <div class="testimonial-wrapper">
                        <div class="testimonial">
                            <p class="paragraph-font">
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Earum, facilis laudantium
                                dolores
                                corrupti amet ullam qui ad, ipsam harum dicta reprehenderit similique optio dolore
                                voluptatibus! Corporis in perferendis blanditiis aut esse cum earum debitis. Omnis
                                dignissimos, similique consectetur atque mollitia assumenda, ea delectus sunt in
                                voluptatum
                                officia eveniet provident nobis.
                            </p>
                            <div class="person-details mt-1">
                                <h3 class="paragraph-font black-faint">Lizabeth Brook</h3>
                                <p cclass="paragraph-font black-faint">Student - GCCC</p>
                            </div>
                        </div>
                        <div class="testimonial-img-wrapper">
                            <img src="images/general images/database-woman.jpg" alt="">
                        </div>
                    </div>
                    <div class="testimonial-wrapper">
                        <div class="testimonial">
                            <p class="paragraph-font black-faint font-1">
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Earum, facilis laudantium
                                dolores
                                corrupti amet ullam qui ad, ipsam harum dicta reprehenderit similique optio dolore
                                voluptatibus! Corporis in perferendis blanditiis aut esse cum earum debitis. Omnis
                                dignissimos, similique consectetur atque mollitia assumenda, ea delectus sunt in
                                voluptatum
                                officia eveniet provident nobis.
                            </p>
                            <div class="person-details mt-1">
                                <h3 class="paragraph-font black-faint">Lizabeth Brook</h3>
                                <p cclass="paragraph-font black-faint">Student - GCCC</p>
                            </div>
                        </div>
                        <div class="testimonial-img-wrapper">
                            <img src="images/general images/database-woman.jpg" alt="">
                        </div>
                    </div>
                </div>




                <h1 class="heading-font black-faint-deep">Questions & Answers</h1>
                <ul class="accordion mt-1">
                    <li>
                        <button class="accordion-button">
                            <h2 class="heading-font black-faint">
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tempora, tenetur?
                            </h2>
                            <span><i class="fa fa-chevron-down"></i></span>
                        </button>
                        <div class="accordion-content">
                            <p class="black-faint paragraph-font font-1">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam repellendus numquam
                                officia quo, aut odit voluptate dicta asperiores, quia nam recusandae neque tempore
                                fugit, consequuntur quas illo error? Quidem, similique? Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quaerat aperiam dolorem deleniti aut omnis fuga, blanditiis soluta voluptate explicabo. Numquam hic soluta exercitationem? Non, nam beatae? Vitae debitis explicabo pariatur itaque modi perspiciatis ea, magnam ut reprehenderit, accusamus sunt voluptas tenetur cumque, facilis rem nisi voluptates odio numquam provident laborum quidem nostrum. Repellat vel praesentium enim magnam dignissimos libero nobis sit nam cumque sapiente. Corrupti, nemo sunt itaque culpa ratione, illo adipisci consectetur beatae eius ipsum dolores repellat suscipit rerum perspiciatis! Omnis necessitatibus est modi doloribus aliquam, doloremque aspernatur ut eos temporibus quia dolore minima vitae enim sit itaque natus. Beatae sint odit mollitia laudantium dolore dolor nesciunt quo reprehenderit est eum ratione adipisci, tenetur nostrum necessitatibus delectus dignissimos praesentium molestias pariatur architecto quis consectetur laboriosam ex sit asperiores. Maiores, cumque? Deleniti sunt id provident hic nihil cupiditate dolores. Provident repellendus a voluptate quaerat perspiciatis, consequatur, numquam, quia quibusdam voluptates impedit nulla voluptatibus iusto aliquam ea labore sit! Tenetur ducimus illo fugit sed enim minima culpa, dolore corporis iste eum? Vitae atque quo voluptatem minima necessitatibus eligendi quos saepe laudantium ipsum quasi molestiae id, delectus, porro est mollitia officia ullam quod! Velit consectetur soluta quidem illo quisquam error est esse!
                            </p>
                        </div>
                    </li>
                    <li>
                        <button class="accordion-button">
                            <h2 class="heading-font black-faint">
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tempora, tenetur?
                            </h2>
                            <span><i class="fa fa-chevron-down"></i></span>
                        </button>
                        <div class="accordion-content">
                            <p class="black-faint paragraph-font">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam repellendus numquam
                                officia quo, aut odit voluptate dicta asperiores, quia nam recusandae neque tempore
                                fugit, consequuntur quas illo error? Quidem, similique?
                            </p>
                        </div>
                    </li>
                    <li>
                        <button class="accordion-button">
                            <h2 class="heading-font black-faint">
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tempora, tenetur?
                            </h2>
                            <span><i class="fa fa-chevron-down"></i></span>
                        </button>
                        <div class="accordion-content">
                            <p class="black-faint paragraph-font">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam repellendus numquam
                                officia quo, aut odit voluptate dicta asperiores, quia nam recusandae neque tempore
                                fugit, consequuntur quas illo error? Quidem, similique?
                            </p>
                        </div>
                    </li>
                    <li>
                        <button class="accordion-button">
                            <h2 class="heading-font black-faint">
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tempora, tenetur?
                            </h2>
                            <span><i class="fa fa-chevron-down"></i></span>
                        </button>
                        <div class="accordion-content">
                            <p class="black-faint paragraph-font">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam repellendus numquam
                                officia quo, aut odit voluptate dicta asperiores, quia nam recusandae neque tempore
                                fugit, consequuntur quas illo error? Quidem, similique?
                            </p>
                        </div>
                    </li>
                    <li>
                        <button class="accordion-button">
                            <h2 class="heading-font black-faint">
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tempora, tenetur?
                            </h2>
                            <span><i class="fa fa-chevron-down"></i></span>
                        </button>
                        <div class="accordion-content">
                            <p class="black-faint paragraph-font">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam repellendus numquam
                                officia quo, aut odit voluptate dicta asperiores, quia nam recusandae neque tempore
                                fugit, consequuntur quas illo error? Quidem, similique?
                            </p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </main>

    <!-- ----------------------------------Including the page's footer from 'page-footer.php file------------------------------- -->
    <?php include_once "page-footer.php"; ?>


    <script src="fontawesome/js/all.js"></script>
</body>

</html>