<?php
defined('_JEXEC') or die;
?>
<div class="big-title clearfix">
	<h3>Oportunidad laboral <i class="glyphicon glyphicon-plus" style="color:#5cb85c"></i></h3>
</div>
<div id="owl-blog" class="owl-carousel">
<?php
foreach($carrousel as $temp)
{
echo '
	<div class="item">
	<div class="blog-carousel">
                            <div class="entry">
                                <img src="'.$temp['img'].'" alt="" class="img-responsive">
                                <div class="magnifier">
                                    <div class="buttons">
                                        <a class="st" rel="bookmark" href="'.$temp['url'].'"><i class="fa fa-link"></i></a>
                                        <a class="st" rel="bookmark" href="#"><i class="fa fa-eye"></i></a>
                                    </div><!-- end buttons -->
                                </div><!-- end magnifier -->
                            </div><!-- end entry -->
                            <div class="blog-carousel-header">
                                <h3><a title="" href="'.$temp['url'].'">'.$temp['title'].'</a></h3>
                                <div class="blog-carousel-meta">
                                    <span><i class="fa fa-calendar"></i> '.$temp['date'].'</span>
                                    <span><i class="fa fa-eye"></i> <a href="#">'.$temp['views'].'</a></span>
                                </div><!-- end blog-carousel-meta -->
                            </div><!-- end blog-carousel-header -->
                            <div class="blog-carousel-desc">
                                '.$temp['text'].'
                            </div><!-- end blog-carousel-desc -->
                            <a href="'.$temp['url'].'" class="btn btn-dark btn-sm">Ver mas</a>
                        </div>
						</div>
						';
						}
?>
						
                </div>