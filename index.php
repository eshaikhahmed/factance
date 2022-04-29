<?php 
$title = "Factance - a way to ease software development";
$header_data = '';
include('header.php');

?>

<section class="top-intro-section">
    <div class="container frantace-page">
        <div class="row">
            <h1 class="text-center new-h1">We're bunch of freaks and geeks ready to break into software development🔥</h1>
            <ul class="col-md-6 bullet-points">
                <li>🧲 Always respond calls/messages on time</li>
                <li>🧲 Support easy implementation </li>
            </ul>

            <ul class="col-md-6 bullet-points">
                <li>🧲 Very trust worthy</li>
                <li>🧲 Always refund incase deliveries are missed</li>
            </ul>
        </div>
    </div>
</section>
<section class="what-we-do-section">
    <div class="container frantace-page">
        <h2 class="text-center new-h1">What we do</h1>
        <div class="what-we-do">
            <h3 data-target="#website_development" data-toggle="collapse">🏷️ Website Development </h2>
            <div class="collapse" id="website_development">
                <div class="card card-body collapse-factance">
                    <p>🏝️ Smooth and easy navigation</p>
                    <p>🏝️ Manage complete lifecycle from development to making it live</p>
                    <p>🏝️ 100% support</p>
                    <p>🏝️ SEO friendly urls</p>
                    <a href="pricing.php" class="nothing">
                        <button class="btn btn-primary factance-btn-small">🏷️ Pricing</button>
                    </a>
                </div>
                
            </div>
            <h3 data-target="#android_development" data-toggle="collapse">🏷️ Android Development</h2>

            <div class="collapse" id="android_development">
                <div class="card card-body collapse-factance">
                    <p>🏝️ Support majority of version of Android </p>
                    <p>🏝️ Small and efficient apk size </p>
                    <p>🏝️ Interactive UI/UX</p>
                    <p>🏝️ Development to publishing on GPS(Google Play Store)</p>
                    <p>🏝️ 100% support</p>
                    <a href="pricing.php" class="nothing">
                        <button class="btn btn-primary factance-btn-small">🏷️ Pricing</button>
                    </a>
                </div>
                
            </div>

            <h3 data-target="#cicd_deployment" data-toggle="collapse">🏷️ CI/CD Deployment - Gitlab GitHub</h2>

            <div class="collapse" id="cicd_deployment">
                <div class="card card-body collapse-factance">
                    <p>🏝️ Migration of your jenkins pipeline to CI/CD Gitlab - WorkFlows GitHub </p>
                    <p>🏝️ Enable your project with CI/CD </p>
                    <p>🏝️ Connect AWS deployment with GitLab-GitHub CI/CD  </p>
                    <p>🏝️ Help to integrate AWS services in your awesome project </p>
                    <p>🏝️ 100% support</p>
                    <a href="pricing.php" class="nothing">
                        <button class="btn btn-primary factance-btn-small">🏷️ Pricing</button>
                    </a>
                </div>
                
            </div>

             
        </div>
    </div>
</section>

<section class="product-section">
    <div class="container frantace-page">
    <h2 class="text-center new-h1">Our expertise and experts ⚔️</h1>
        <div class="row">
           <div class="col-md-5 card-factance">
                <ul class="bullet-points">
                    <li>Arshad Shaikh - YouTuber | ReactJS Developer</li>
                    <li></li>
                    <li>
                        <p>
                            Beautiful, simple and easy design and implmenetation 
                        </p>
                    </li>
                    <li>
                        👉 Front-end with simplicity 
                    </li>
                    <li> <hr /></li>
                    <li>
                        <a href="https://www.linkedin.com/in/skarshad" target="_blank" class="social-media-icon" >
                                LinkedIn
                        </a>
                      
                        <a href="https://www.youtube.com/channel/UCvGRh9i3lfT9CgGu1TLcukw" target="_blank" class="social-media-icon" >
                                YouTube
                        </a>
                        
                    </li>
                </ul> 
            </div>

            <div class="col-md-5 card-factance">
                <ul class="bullet-points">
                    <li>Ejaz Shaikh - Founder@Factance</li>
                    <li></li>
                    <li>
                        <p>
                          He is passionate to softwares and building it. 
                          He has developed many web and mobile apps 

                        </p>
                    </li>
                    <li>
                        👉 You can expect worryless execution  
                    </li>
                    <li> <hr /></li>
                    <li>
                        <a href="https://www.linkedin.com/in/eshaikhahmed" target="_blank" class="social-media-icon" >
                                LinkedIn
                        </a>
                        <a href="https://twitter.com/eshaikhahmed" target="_blank" class="social-media-icon" >
                                Twitter
                        </a>
                      
                                            
                    </li>
                </ul> 
            </div>
        </div>
    </div>
</section>

<section class="product-section" id="product_section">
    <div class="container frantace-page">
    <h2 class="text-center new-h1">Our Products 👇</h2>
        <div class="flex-fractance">
           
            <a href="https://factance.com/codefactory" class="nothing"> 
                <div class="code-generator">
                    <h3>CodeFactory</h3>
                    <p>🏝️ Build Spring Boot <br />REST APIs within 2 mins </p> 
                </div>
            </a>

            <a href="https://factance.com/writein" class="nothing"> 
                <div class="writein">
                    <h3>WriteIn</h3>
                    <p>🏝️  Write amazing LinkedIn <br> posts with emojis</p> 
                </div>
            </a>
        </div>
    </div>
</section>
<?php 
include('config/config.php');
include('common.php');

$query="SELECT blogid,blog_title,blog_shortdetails,blog_technology ,blog_image,blog_author,published_date
				FROM blogs ORDER BY published_date DESC LIMIT 0,2";
$values=null;
$content='';
$database=new DatabaseManager();
$rows=$database->safeRetrieve($query,$values);
$total_rows=count($rows);

$actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]";

?>

<section class="blog-section" id="blog_section">
    <div class="container frantace-page">
        <h2 class="text-center new-h1">Our Latest Blogs 🛡️</h2>
        <div class="blog-container">
        <?php 
			for($k=0;$k<$total_rows;$k++)
			{
				$blogid=$rows[$k]['blogid'];
				$blog_title=getDotsAfter($rows[$k]['blog_title'],30);
				$title_show=$rows[$k]['blog_title'];
				$blog_shortdetails=getDotsAfter($rows[$k]['blog_shortdetails'],110);
				$blog_technology=strtolower($rows[$k]['blog_technology']);
				$blog_image=($rows[$k]['blog_image']);
				$blog_author=($rows[$k]['blog_author']);
				$publish_date=($rows[$k]['published_date']);
				$publish_date = date("d M Y", strtotime($publish_date));
				// $publish_date = strtoupper($publish_date);
				$url = strtolower(replace_spaces($rows[$k]['blog_title']));
			    // $publish_date = strtoupper($publish_date);
			
				$image_link = $actual_link. "/data-center/data?src=".$blog_image;
			?>
				<div class="post" title="<?= $blog_title?>">
					<div class="image-section">
						<a href="blog/article/<?=$blog_technology?>/<?= $url?>/<?=$blogid?>">
							<img class="img-responsive" src="<?= $image_link?> " alt="<?=$rows[$k]['blog_title']?>">
						</a>
					</div>
					<div class="title-section">
						<a href="blog/article/<?=$blog_technology?>/<?= $url?>/<?=$blogid?>">
							<h2 class="new-index-h2"> <?= $blog_title ?></h2>
							<p >
								<?= $blog_shortdetails ?>
							</p>
						</a>
					</div>
					<div class="author-section">
						Ejaz Shaikh | <?=$publish_date?>
					</div>
				</div>
			<?php } ?>
            <div class="post">
					<div class="view-more">
						<a href="blog">
                            <h3>View More</h3></a>
					</div>
				</div>

        </div>
    </div>
</section>


<section class="top-intro-section" id="about-section">
    <div class="container frantace-page">
        <h1 class="text-center new-h1">We are geeks 🔥</h1>
        <div class="row">
           
            <ul class="col-md-6 bullet-points">
                <li>🧲 Always respond calls/messages on time</li>
                <li>🧲 Support easy implementation </li>
            </ul>

            <ul class="col-md-6 bullet-points">
                <li>🧲 Very trust worthy</li>
                <li>🧲 Always refund incase deliveries are missed</li>
            </ul>
        </div>
        <div class="notice-bar">
            <h3>Say hi...</h3>
            <p>Hit us on to grab any plan 
                <a href='mailto:sales@factance.com'><strong>sales@factance.com</strong></a>
            </p>
        </div>
    </div>
</section>

<?php 
include("footer.php");
?>