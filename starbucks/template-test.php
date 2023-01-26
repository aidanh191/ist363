<?php
/*Template name: CSS Test*/
?>

<?php get_header();?>

<div class="container">
    <h1>CSS Flex vs. Grid</h1>
    <section class="winner">
        <h2>Flex Articles</h2>
        <div class="test-flex">
            <article class="item">
                <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</h3>
            </article>
            <article class="item">
                <h3>Convallis posuere morbi leo urna molestie. Aliquam ut porttitor leo a diam. Pharetra pharetra massa massa ultricies mi. Facilisi etiam dignissim diam quis enim lobortis. </h3>
            </article>
            <article class="item">
                <h3>Vel facilisis volutpat est velit egestas dui. </h3>
            </article>
            <article class="item">
                <h3>Purus viverra accumsan in nisl nisi.</h3>
            </article>
            <article class="item">
                <h3>Sollicitudin nibh sit amet commodo nulla facilisi nullam. Tincidunt id aliquet risus.</h3>
            </article>
        </div><!--/test flex-->
    </section>
    <section class="winner">
        <h2>Grid Articles</h2>
        <div class="test-grid">
        <article class="item">
                <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</h3>
            </article>
            <article class="item">
                <h3>Convallis posuere morbi leo urna molestie. Aliquam ut porttitor leo a diam. Pharetra pharetra massa massa ultricies mi. Facilisi etiam dignissim diam quis enim lobortis. </h3>
            </article>
            <article class="item">
                <h3>Vel facilisis volutpat est velit egestas dui. </h3>
            </article>
            <article class="item">
                <h3>Purus viverra accumsan in nisl nisi.</h3>
            </article>
            <article class="item">
                <h3>Sollicitudin nibh sit amet commodo nulla facilisi nullam. Tincidunt id aliquet risus.</h3>
            </article>
        </div><!--/test flex-->
    </section>
    <section>
        <h2>Flex: Navigation</h2>
        <nav class="nav-test">
            <ul class="nav-test-flex">
                <li>
                    <a href="">Home</a>
                </li>
                <li>
                    <a href="">Ball</a>
                </li>
                <li>
                    <a href="">Wongy</a>
                </li>
                <li>
                    <a href="">Ermmmmm WTS</a>
                </li>
                <li>
                    <a href="">Squiggles</a>
                </li>
            </ul>
        </nav>
    </section>
    <section>
        <h2>Grid: Navigation</h2>
        <nav class="nav-test">
            <ul class="nav-test-grid">
                <li>
                    <a href="">Home</a>
                </li>
                <li>
                    <a href="">Ball</a>
                </li>
                <li>
                    <a href="">Wongy</a>
                </li>
                <li>
                    <a href="">Ermmmmm WTS</a>
                </li>
                <li>
                    <a href="">Squiggles</a>
                </li>
            </ul>
        </nav>
    </section>
    <section>
        <h2>flex: cards</h2>
        <div class="test-cards-flex">
        <article class="test-card">
            <img src="<?php bloginfo('template_directory'); ?>/img/showcase.jpg" alt="two mugs of coffee" class="responsive-img">
            <h3>title goes here</h3>
            <p>the article excerpt goes here</p>
            <p><a href="">read more</a></p>
        </article>
        <article class="test-card">
            <img src="<?php bloginfo('template_directory'); ?>/img/showcase.jpg" alt="two mugs of coffee" class="responsive-img">
            <h3>title goes here</h3>
            <p>the article excerpt goes here</p>
            <p><a href="">read more</a></p>
        </article>
        <article class="test-card">
            <img src="<?php bloginfo('template_directory'); ?>/img/showcase.jpg" alt="two mugs of coffee" class="responsive-img">
            <h3>title goes here</h3>
            <p>the article excerpt goes here</p>
            <p><a href="">read more</a></p>
        </article>
        <article class="test-card">
            <img src="<?php bloginfo('template_directory'); ?>/img/showcase.jpg" alt="two mugs of coffee" class="responsive-img">
            <h3>title goes here</h3>
            <p>the article excerpt goes here</p>
            <p><a href="">read more</a></p>
        </article>
        <article class="test-card">
            <img src="<?php bloginfo('template_directory'); ?>/img/showcase.jpg" alt="two mugs of coffee" class="responsive-img">
            <h3>title goes here</h3>
            <p>the article excerpt goes here</p>
            <p><a href="">read more</a></p>
        </article>
        </div><!--/.test-cards-flex-->
    </section>
    <section>
        <h2>flex: grids</h2>
        <div class="test-cards-grid">
        <article class="test-card">
            <img src="<?php bloginfo('template_directory'); ?>/img/showcase.jpg" alt="two mugs of coffee" class="responsive-img">
            <h3>title goes here</h3>
            <p>the article excerpt goes here</p>
            <p><a href="">read more</a></p>
        </article>
        <article class="test-card">
            <img src="<?php bloginfo('template_directory'); ?>/img/showcase.jpg" alt="two mugs of coffee" class="responsive-img">
            <h3>title goes here</h3>
            <p>the article excerpt goes here</p>
            <p><a href="">read more</a></p>
        </article>
        <article class="test-card">
            <img src="<?php bloginfo('template_directory'); ?>/img/showcase.jpg" alt="two mugs of coffee" class="responsive-img">
            <h3>title goes here</h3>
            <p>the article excerpt goes here</p>
            <p><a href="">read more</a></p>
        </article>
        <article class="test-card">
            <img src="<?php bloginfo('template_directory'); ?>/img/showcase.jpg" alt="two mugs of coffee" class="responsive-img">
            <h3>title goes here</h3>
            <p>the article excerpt goes here</p>
            <p><a href="">read more</a></p>
        </article>
        <article class="test-card">
            <img src="<?php bloginfo('template_directory'); ?>/img/showcase.jpg" alt="two mugs of coffee" class="responsive-img">
            <h3>title goes here</h3>
            <p>the article excerpt goes here</p>
            <p><a href="">read more</a></p>
        </article>
        </div><!--/.test-cards-flex-->
    </section>
    <section>
        <h2>Flex: Background Images</h2>
        <div class="test-bgimages-flex">
            <article class="item" style="background-image: url('<?php bloginfo('template_directory'); ?>/img/showcase.jpg');">
                <div class="item-content">
                    <h3>Title Goes Here</h3>
                    <p>Excerpt Goes Here</p>
                    <p><a href="">Read More</a></p>
                </div><!--/item-content-->
            </article>
            <article class="item" style="background-image: url('<?php bloginfo('template_directory'); ?>/img/showcase.jpg');">
                <div class="item-content">
                    <h3>Title Goes Here</h3>
                    <p>Excerpt Goes Here</p>
                    <p><a href="">Read More</a></p>
                </div><!--/item-content-->
            </article>
            <article class="item" style="background-image: url('<?php bloginfo('template_directory'); ?>/img/showcase.jpg');">
                <div class="item-content">
                    <h3>Title Goes Here</h3>
                    <p>Excerpt Goes Here</p>
                    <p><a href="">Read More</a></p>
                </div><!--/item-content-->
            </article>
            <article class="item" style="background-image: url('<?php bloginfo('template_directory'); ?>/img/showcase.jpg');">
                <div class="item-content">
                    <h3>Title Goes Here</h3>
                    <p>Excerpt Goes Here</p>
                    <p><a href="">Read More</a></p>
                </div><!--/item-content-->
            </article>
            <article class="item" style="background-image: url('<?php bloginfo('template_directory'); ?>/img/showcase.jpg');">
                <div class="item-content">
                    <h3>Title Goes Here</h3>
                    <p>Excerpt Goes Here</p>
                    <p><a href="">Read More</a></p>
                </div><!--/item-content-->
            </article>
            
        </div><!--/.test-bgimages-flex-->
    </section>
    <section>
        <h2>Grid: Background Images</h2>
        <div class="test-bgimages-grid">
            <article class="item" style="background-image: url('<?php bloginfo('template_directory'); ?>/img/showcase.jpg');">
                <div class="item-content">
                    <h3>Title Goes Here</h3>
                    <p>Excerpt Goes Here</p>
                    <p><a href="">Read More</a></p>
                </div><!--/item-content-->
            </article>
            <article class="item" style="background-image: url('<?php bloginfo('template_directory'); ?>/img/showcase.jpg');">
                <div class="item-content">
                    <h3>Title Goes Here</h3>
                    <p>Excerpt Goes Here</p>
                    <p><a href="">Read More</a></p>
                </div><!--/item-content-->
            </article>
            <article class="item" style="background-image: url('<?php bloginfo('template_directory'); ?>/img/showcase.jpg');">
                <div class="item-content">
                    <h3>Title Goes Here</h3>
                    <p>Excerpt Goes Here</p>
                    <p><a href="">Read More</a></p>
                </div><!--/item-content-->
            </article>
            <article class="item" style="background-image: url('<?php bloginfo('template_directory'); ?>/img/showcase.jpg');">
                <div class="item-content">
                    <h3>Title Goes Here</h3>
                    <p>Excerpt Goes Here</p>
                    <p><a href="">Read More</a></p>
                </div><!--/item-content-->
            </article>
            <article class="item" style="background-image: url('<?php bloginfo('template_directory'); ?>/img/showcase.jpg');">
                <div class="item-content">
                    <h3>Title Goes Here</h3>
                    <p>Excerpt Goes Here</p>
                    <p><a href="">Read More</a></p>
                </div><!--/item-content-->
            </article>
            
        </div><!--/.test-bgimages-flex-->
    </section>
</div><!--/.container-->

<?php get_footer();?>

