<body data-spy="scroll" data-target=".navbar-default">

  	<!-- begin:navbar -->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand visible-xs" href="#home"><?php echo $title ?></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#home">Home</a></li>
          	<li><a href="#about">About</a></li>
          	<!--li><a href="#ceremony">Ceremony</a></li-->
          	<li><a href="#photos">Photos</a></li>
          	<li><a href="#story">Story</a></li>          	
          </ul>
        </div><!-- /.navbar-collapse -->
      </div>
    </nav>
    <!-- end:navbar -->

<!--     <li> -->
          		<!-- The jPlayer div must not be hidden. Keep it at the root of the body element to avoid any such problems. -->
				
<!-- 				<div id="jquery_jplayer_1" class="cp-jplayer"></div> -->
			
				<!-- The container for the interface can go where you want to display it. Show and hide it as you need. -->
			
<!-- 				<div id="cp_container_1" class="cp-container">		 -->
					
<!-- 					<ul class="cp-controls"> -->
<!-- 						<li><a class="cp-play" tabindex="1">play</a></li> -->
						<li><a class="cp-pause" style="display:none;" tabindex="1">pause</a></li> <!-- Needs the inline style here, or jQuery.show() uses display:inline instead of display:block -->
<!-- 					</ul> -->
<!-- 				</div> -->
				
<!--           	</li> -->

    
    <!-- begin:home -->
    <section id="home" style="background: url(<?php echo theme_img('img01.jpg') ?>);">
    	<div class="container">
    		<div class="row">
    			<div class="col-md-12">
    				<h1><?php echo $title ?></h1>
					<h3><span>A gift for you</span></h3>
					<!-- <div class="line"><h3>Are getting</h3></div> -->
					<h2><i class="fa fa-heart-o"></i> Em Yeu Anh <i class="fa fa-heart-o"></i></h2>
					<h4>Wish you Happy forever ya!</h4>
					<h5><span>~ Hold your hand to end of life ~</span></h5>
    			</div>
    		</div>
    	</div>
    </section>
    <!-- end:home -->
	
	<!-- begin:about -->
	<section id="about">
		<div class="about-inner">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<h2>Le Huy Duc</h2>
						<p>Dep Trai, Ong chu, Nice Cooker, A Ex policeman, A good brother, A very nice for family</p>
						<blockquote>
							You have to try la~
							<small>Le Huy Duc </small>
						</blockquote>																		
					</div>
					<!-- break -->

					<div class="col-md-4">
						<div class="about-img-container" style="background: url(<?php echo theme_img('img05.jpg')?> center;"></div>
						<img src="<?php echo theme_img('bottom.png') ?>" class="about-img img-responsive">
					</div>
					<!-- break -->

					<div class="col-md-4">
						<h2>Tan Kok Chung</h2>
						<p>Xin Gai, Cute, Nice Man, Always smile, Nice Eater, Always take care people la~.
						</p>												
						<blockquote>
							I scare, I dont know la~
							<small>Tan Kok Chung</small>
						</blockquote>
					</div>
					<!-- break -->

				</div>
			</div>
		</div>
	</section>
	<!-- end:about -->

	<!-- begin:ceremony -->
	<!--section id="ceremony" style="background: url(<?php echo theme_img('img04.jpg') ?>);">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1>The Ceremony</h1>
					<h3><span>Will Be Held On</span></h3>
					<h2>09 - 09 - 2015</h2>
					<h5><span>~ September ~</span></h5>
					<h4>Dynasty Dragon Seafood Restaurant</h4>
				</div>
			</div>
		</div>
	</section-->
	<!-- end:ceremony -->

	<!-- begin:photos -->
	<section id="photos">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<img src="<?php echo theme_img('bottom.png') ?>" class="about-img img-responsive">
					<h2>Happyness Gallery</h2>
					<p></p>
				</div>
				<!-- break -->

				<div class="col-md-8">
					<div id="wedding-photo" class="carousel slide" data-ride="carousel">
				      <div class="carousel-inner">
				      
				      	<?php 
				      		$count = 0;
				      		$i = 0;				      		
				      		$first_active = 'active';
				      		$len = count($rs_gallery);
				      		foreach($rs_gallery as $gallery):					
							
				      		if($i == 0){
								echo '<div class="item '.$first_active.' ">';
								echo '<div class="row">';								
								$gallery_collection = '<div class="col-md-4 col-sm-4 col-xs-12 animated fadeInLeftBig">';
							}else if($i == 1){
								$gallery_collection = '<div class="col-md-4 col-sm-4 col-xs-12 animated fadeInDownBig">';
							}else if($i == 2){
								$gallery_collection = '<div class="col-md-4 col-sm-4 col-xs-12 animated fadeInRightBig">';
							}
							//here is first picture																					
							
							echo $gallery_collection;
						?>			
																			
								<a href="<?php echo base_url('/uploads/gallery/full/'.$gallery['image']) ?>" class="gallery-images">
				          			<div class="photo-gallery" style="background: url(<?php echo base_url('/uploads/gallery/full/'.$gallery['image']) ?>);"></div>
				          		</a>
				        	</div>
																		
						 	
					<?php 
							
							if($count == $len - 1)
							{
								echo '</div></div>';
								$first_active = '';
								$i = -1;
							}
							else if($i == 2)
							{
								echo '</div></div>';								
								$first_active = '';
								$i = -1;
																	
							}
							
							$i++;
							$count++;
																			
							endforeach;					
					?>		

				      </div>
				      <a class="left carousel-control" href="#wedding-photo" data-slide="prev">
				        <span class="glyphicon glyphicon-chevron-left"></span>
				      </a>
				      <a class="right carousel-control" href="#wedding-photo" data-slide="next">
				        <span class="glyphicon glyphicon-chevron-right"></span>
				      </a>
				    </div>
				</div>
			</div>
		</div>
	</section>
	<!-- end:photos -->

	<!-- begin:story -->
	<section id="story">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2>The Story</h2>
					<ul class="content">
						<li>
							<h3 class="content-avatar avatar-top">
								<div class="img-avatar" style="background: url(<?php echo base_url('uploads/gallery/full/naked_chung.jpg') ?>);"></div>
							</h3>
							<ul>
								<!-- begin:content-text -->
								<li class="content-item content-text">
									<h3>Le Huy Duc :"></h3>
									<div class="text">I meet you at the first time. I smile, and you smile back to me. It's so romantic epic :))</div>
									<time datetime=""><i class="fa fa-calendar"></i> January, 24 2015</time>
								</li>
								<!-- end:content-text -->

								<!-- begin:content-photo -->
								<li class="content-item content-photo">
									<img src="<?php echo base_url('uploads/gallery/full/first_meet.jpg') ?>" alt="Pavillion Shopping in first date">	
									<p class="caption">At the first date, we ate Hong Kong Food together. We enjoyed the shopping in Pavillion. Sitting in foodcourt until along the way back to home. Telling each other ....</p>
									<time datetime=""><i class="fa fa-calendar"></i> February, 15 2015</time>									
								</li>
								<!-- end:content-photo -->

								<!-- begin:content-photo -->
								<li class="content-item content-photo">
									<img src="<?php echo base_url('uploads/gallery/full/second_meet.jpg') ?>" alt="Cheras Central second date for watching jacky chan - Dragon Blade">
									<time datetime=""><i class="fa fa-calendar"></i> March, 9 2015</time>	
								</li>
								<!-- end:content-photo -->
								
								<!-- begin:content-photo -->
								<li class="content-item content-photo">
									<img src="<?php echo base_url('uploads/gallery/full/chappie.jpg') ?>" alt="Cheras Central second date for watching jacky chan - Dragon Blade">
									<time datetime=""><i class="fa fa-calendar"></i> March, 24 2015</time>	
								</li>
								<!-- end:content-photo -->
								
								<!-- begin:content-photo -->
								<li class="content-item content-photo">
									<img src="<?php echo base_url('uploads/gallery/full/memory_paul.jpg') ?>" alt="Cheras Central second date for watching jacky chan - Dragon Blade">									
									<p>It's been a long day without you, my friend</p>
									<p>And I'll tell you all about it when I see you again</p>
									<p>We've come a long way from where we began</p>
									<p>Oh, I'll tell you all about it when I see you again</p>
									<p>When I see you again</p>									
									<p>So let the light guide your way, yeah</p>
									<p>Hold every memory as you go</p>
									<p>And every road you take will always lead you home, home</p>
									<small>See you again - Wiz Khalifa feat. Charlie Puth</small>									
									<time datetime=""><i class="fa fa-calendar"></i> April, 4 2015</time>	
								</li>
								<!-- end:content-photo -->

								<!-- begin:content-chat -->
								<li class="content-item content-chat">
									<p class="text chat odd">A : Ong Chu..</p>
									<p class="text chat even">B : No le..</p>
									<p class="text chat odd">A : Ong Chu..</p>
									<p class="text chat even">B : Yeahh em yeu..</p>
									<p class="text chat odd">A : em cung yeu anh nhieu nhieu nhieu nhieu nhieu .. lam..</p>
									<time datetime=""><i class="fa fa-calendar"></i> Every day~ </time>
								</li>
								<!-- end:content-chat -->

								<!-- begin:content-quote -->
								<li class="content-item content-quote">
									<blockquote>
										<p>I do not promise anything, I can only promise one thing. I would still cute and funny until tomorrow... <small>Tan Kok Chung</small></p>
										<time datetime=""><i class="fa fa-calendar"></i> In Heart </time>
									</blockquote>
								</li>
								<!-- end:content-quote -->
								<!-- begin:content-photo -->
								<li class="content-item content-photo">
									<img src="<?php echo base_url('uploads/gallery/full/batu_cave.jpg') ?>" alt="Cheras Central second date for watching jacky chan - Dragon Blade">
									<time datetime=""><i class="fa fa-calendar"></i> April, 6 2015</time>	
								</li>
								<!-- end:content-photo -->
								
								<!-- end:content-quote -->
								<!-- begin:content-photo -->
								<li class="content-item content-photo">
									<img src="<?php echo base_url('uploads/gallery/full/mmexport1429633182755.jpg') ?>" alt="Cheras Central second date for watching jacky chan - Dragon Blade">
									<time datetime=""><i class="fa fa-calendar"></i> April, 15 2015</time>	
								</li>
								<!-- end:content-photo -->
								
								
								<!-- end:content-quote -->
								<!-- begin:content-photo -->
								<li class="content-item content-photo">
									<img src="<?php echo base_url('uploads/gallery/full/promise.jpg') ?>" alt="Cheras Central second date for watching jacky chan - Dragon Blade">
									<p>Promise me, baby~</p>
									<time datetime=""><i class="fa fa-calendar"></i> April, 17 2015</time>	
								</li>
								<!-- end:content-photo -->															
							</ul>
						</li>

						<li class="content-end">
							<h3 class="content-avatar avatar-end">
								<div class="img-avatar" style="background: url(<?php echo base_url('uploads/gallery/full/naked_duc.jpg') ?>);"></div>
							</h3>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</section>
	<!-- end:story -->

	<!-- begin:copyright -->
	<section id="copyright">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2>Le Huy Duc & Tan Kok Chung</h2>
					<h3>Yang sangat berbahagia</h3>
				</div>
			</div>

			<div class="row">
				<div class="col-md-12">
					<ul class="list-inline social-icon">
						<!--li><a href="#" class="icon-twitter" rel="tooltip" title="Twitter" data-placement="top"><i class="fa fa-twitter"></i></a></li-->
						<!--li><a href="https://www.facebook.com/waichoon.lee/" target="_blank" class="icon-facebook" rel="tooltip" title="Facebook" data-placement="top"><i class="fa fa-facebook-square"></i></a></li-->
						<!--li><a href="#" class="icon-google" rel="tooltip" title="Google Plus" data-placement="top"><i class="fa fa-google-plus"></i></a></li>
						<li><a href="#" class="icon-instagram" rel="tooltip" title="Instagram" data-placement="top"><i class="fa fa-instagram"></i></a></li-->
					</ul>
				</div>
			</div>

			<div class="row">
				<div class="col-md-12">
					<p>Le Huy Duc & Tan Kok Chung</p>
					<p>Copyright &copy; 2015 All Right Reserved.</p>
				</div>
			</div>
		</div>
	</section>
	<!-- end:copyright -->
