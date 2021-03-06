<?php
/*
	template name: 友链
 */

get_header();

?>

    <section class="main-hero template-links">

        <style type="text/css" id="responsive-header-img-css" class="responsive-header-img-css">
            .responsive-header-img {
                background-image: url('https://pic.yqqy.top/blog/20200223195612.jpg?imageslim');
            }

            @media (max-width: 1000px) {
                .responsive-header-img {
                    background-image: url('https://pic.yqqy.top/blog/20200223195612.jpg?imageslim');
                    background-image: -webkit-image-set(url('https://pic.yqqy.top/blog/20200223195612.jpg?imageslim') 1x,
                    url('https://pic.yqqy.top/blog/20200223195612.jpg?imageslim') 2x);
                    background-image: image-set(url('https://pic.yqqy.top/blog/20200223195612.jpg?imageslim') 1x,
                    url('https://pic.yqqy.top/blog/20200223195612.jpg?imageslim') 2x);
                }
            }

            @media (max-width: 600px) {
                .responsive-header-img {
                    background-image: url('https://pic.yqqy.top/blog/20200223195612.jpg?imageslim');
                    background-image: -webkit-image-set(url('https://pic.yqqy.top/blog/20200223195612.jpg?imageslim') 1x,
                    url('https://pic.yqqy.top/blog/20200223195612.jpg?imageslim') 2x);
                    background-image: image-set(url('https://pic.yqqy.top/blog/20200223195612.jpg?imageslim') 1x,
                    url('https://pic.yqqy.top/blog/20200223195612.jpg?imageslim') 2x);
                }
            }
        </style>
        <div class="main-hero-bg responsive-header-img"></div>
        <div class="d-flex flex-column align-content-center justify-content-center main-hero-content">
            <div class="text-center main-hero-content-title">友情链接</div>
        </div>
        <div class="main-hero-header header-left"></div>
    </section>
    <main class="main-content">
        <div class="container-sm">
            <div class="row">
                <article class="post page borderbox post-content custom-links-template">
                    <p>您好，我的朋友！ </p>
                    <hr>
                    <!--kg-card-begin: markdown-->
                    <ul>
                        <?php $items = getTheLinkItems();
                        foreach ($items as $v) : ?>
                            <li><?php echo $v['link_name'] ?>|<a
                                        href="<?php echo $v['link_url'] ?>"><?php echo $v['link_url'] ?></a>|<?php echo $v['link_image'] ?>
                                |<?php echo $v['link_description'] ?>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                    <!--kg-card-end: markdown-->
                </article>
            </div>
        </div>
    </main>


<?php get_footer(); ?>