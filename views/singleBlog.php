<?php 
    $this->load->view('includes/header');
?>

<meta name="title" content="<?php echo $blog[0]->meta_title ?>">
<meta name="description" content="<?php echo $blog[0]->meta_description ?>">
<section class="pager-section blog-version is-featured-image"
    style="background:url(<?php echo base_url('upload/blog/'.$blog[0]->images)  ?>); padding: 5rem 0 0;">
    <div class="pager-content">
        <ul class="breadcrumbs has-link-effect">
            <li><a href="http://localhost/edukxn.com/" itemprop="url">Home</a></li>
            <li><a href="http://localhost/edukxn.com/blog/" itemprop="url">Blog</a></li>
            <li><span><?php echo $blog[0]->title  ?></span></li>
        </ul>
        <h1><?php echo $blog[0]->heading  ?></h1>
        <div class="blog-category">
            <!-- <a href="#">English</a> <a href="https://shelly.merku.love/category/teachers/">Teachers</a> -->
        </div>
    </div>
</section>

<section class="page-content p80">
    <div class="page-container">
        <div class="row">
            <div class="col-md-9">
                <article
                    class="blog-post single clearfix post-592 post type-post status-publish format-standard has-post-thumbnail hentry category-english category-teachers tag-school tag-teachers">
                    <div class="blog-meta">
                        <?php
                            $newDate = date('M d,Y', strtotime($blog[0]->create_at));
                            ?>
                        <ul>
                            <li class="blog-meta--date">
                                <a href="#"><?php echo $newDate ?></a>
                            </li>
                        </ul>
                    </div>
                    <?php echo $blog[0]->description ?>
                </article>
            </div>

            <!-- <div class="col-md-3">
                <div class="sidebar sidebar-right">
                    <div id="search-2" class="widget widget_search">
                        <form role="search" method="get" class="search-form" action="https://shelly.merku.love/">
                            <input type="search" id="search-form-63ec43d137e8d" class="search-field"
                                placeholder="Search..." value="" name="s" />
                            <button type="submit"><img
                                    src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E"
                                    alt="icon4"
                                    data-lazy-src="https://shelly.merku.love/wp-content/themes/shelly/assets/img/icon4.png"><noscript><img
                                        src="https://shelly.merku.love/wp-content/themes/shelly/assets/img/icon4.png"
                                        alt="icon4"></noscript></button>
                        </form>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
</section>
<?php 

$this->load->view('includes/footer');

?>