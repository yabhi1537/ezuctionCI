<?php 

$this->load->view('includes/header');

?>
<section class="pager-section">
    <div class="pager-content">
        <ul class="breadcrumbs has-link-effect">
            <li><a href="<?php echo base_url() ?>" itemprop="url">Home</a></li>
            <li><span><a href="<?php echo base_url('blog') ?>" style="font-weight: 800;">Blogs</a></span></li>
        </ul>

    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none" class="shelly-shape">
        <path class="shelly-shape--fill" d="M790.5,93.1c-59.3-5.3-116.8-18-192.6-50c-29.6-12.7-76.9-31-100.5-35.9c-23.6-4.9-52.6-7.8-75.5-5.3
        c-10.2,1.1-22.6,1.4-50.1,7.4c-27.2,6.3-58.2,16.6-79.4,24.7c-41.3,15.9-94.9,21.9-134,22.6C72,58.2,0,25.8,0,25.8V100h1000V65.3
        c0,0-51.5,19.4-106.2,25.7C839.5,97,814.1,95.2,790.5,93.1z"></path>
    </svg>
</section>

<section class="bolg mb-5">
    <h2 class="text-center my-5">BLOGS</h2>
    <div class="container">
        <div class="row">

        <?php
            foreach($blogs as $key => $value){
                $newDate = date('M d,Y', strtotime($value->create_at));
                ?>

               
            <div class="col-lg-4 mb-5">
                <article
                    class="blog-post video-post post-34 post type-post status-publish format-video has-post-thumbnail hentry category-lessons category-shelly tag-class tag-teachers post_format-post-format-video">
                    <div class="blog-thumbnail">
                        <a href="<?php echo base_url('blog/details/'.$value->id); ?>">
                            <img width="400" height="400" alt=""
                               
                                src="<?php echo base_url('upload/blog/').$value->images?>"
                                data-ll-status="loaded" style="height: 211px;" /></a>
                    </div>
                    <div class="blog-info py-2 px-3">
                        <h6 class="blog-title"><a href="<?php echo base_url('blog/details/'.$value->id); ?>"><?php echo $value->title  ?>
                            </a></h6>
                        <div class="blog-meta">
                            
                            <ul>
                                <li class="blog-meta--date">
                                    <a href="<?php echo base_url('blog/details/'.$value->id); ?>"><?php echo $newDate ?></a>
                                </li>
                                <li class="blog-meta--tags">
                                    <a href="<?php echo base_url('blog/details/'.$value->id); ?>" rel="tag">Class</a>, <a href="#" rel="tag">Teachers</a>
                                </li>
                            </ul>
                        </div>
                        <div class="post-excerpt">
                            <!-- wp:paragraph -->
                            <p><?php echo $value->heading ?>
                            </p>
                        </div>
                    </div>
                    <div class="blog-footer mb-0 pt-3 pb-2">
                        <a href="<?php echo base_url('blog/details/'.$value->id); ?>" class="blog-footer--read-more">Read more <i class="fa fa-long-arrow-alt-right"></i>
                        </a>
                    </div>
                </article>
            </div>
            <?php
            }
        ?>
        </div>
    </div>
</section>


<?php 

$this->load->view('includes/footer');

?>