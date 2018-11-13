<?php
/* Template Name: Home Page */
get_header();
?>
<div class="container-fluid">

<?php get_template_part( 'layouts/home_hero' ); ?>

<?php
$page = get_page_by_path( 'licensed-plumbing-services-glens-falls-ny', OBJECT, 'post' );
$content = apply_filters('the_content', get_post_field('post_content', $page->ID));
?>

<div class="section">
    <div class="container p-5">
        <div class="row">
                <div class="col-md-12 h-100 "> 
                    <h4 class="title"><?php echo get_the_title(); ?></h4>
                        <div class="row">
                            <div class="col-md-12">
                                <?php echo $content;?>
                            </div>
                        </div>
                    </div>
                 
            </div>
            
                
        </div>
</div>

<div class="section services">
    <div class="container p-5">
        <div class="row">
                <div class="col-md-6 h-100 "> 
                    <h4 class="title ">Plumbing Services</h4>
                    <div class="row">
                        <div class="col-md-6"><i class="fas fa-check"> Hot Water Heaters Installation & Repair</i></div>
                        <div class="col-md-6"> <i class="fas fa-check"> Hot Tub Installation & Repair</i></div>
                    </div>
                    <div class="row">
                        <div class="col-md-6"><i class="fas fa-check"> Sink Installation & Repair</i></div>
                        <div class="col-md-6"> <i class="fas fa-check"> Dishwasher Installation</i></div>
                    </div>
                    <div class="row">
                        <div class="col-md-6"><i class="fas fa-check"> Water Softener Installation</i></div>
                        <div class="col-md-6"> <i class="fas fa-check"> Garbage Disposal Installation & Repair </i></div>
                    </div>
                    <div class="row">
                        <div class="col-md-6"><i class="fas fa-check"> New Bathroom Remodels</i></div>
                        <div class="col-md-6"> <i class="fas fa-check"> New Sewer Installations</i></div>
                    </div>
                    <div class="row">
                        <div class="col-md-6"><i class="fas fa-check"> New Kitchen Plumbing</i></div>
                        <div class="col-md-6"> <i class="fas fa-check"> Leaky Faucets, Toliet Repairs</i></div>
                    </div>
                 
                </div>
                <div class="col-md-6 h-100 "> 
                    <h4 class="title "> </h4>
                    <div class="row">
                            <div class="col-md-6"><i class="fas fa-check"> 200 AMP Panel Installations</i></div>
                            <div class="col-md-6"> <i class="fas fa-check"> New Wiring </i></div>
                    </div>
                    <div class="row">
                            <div class="col-md-6"><i class="fas fa-check"> Sub Panel Electrical</i></div>
                            <div class="col-md-6"> <i class="fas fa-check"> Barn Electrical Installations </i></div>
                    </div>
                    <div class="row">
                            <div class="col-md-6"><i class="fas fa-check"> Electrical Commercial Services </i></div>
                            <div class="col-md-6"> <i class="fas fa-check"> Electrical Residential Services</i></div>
                    </div>
                    <div class="row">
                            <div class="col-md-6"><i class="fas fa-check"> Wiring Problems </i></div>
                            <div class="col-md-6"> <i class="fas fa-check"> New Wiring Installs</i></div>
                    </div>
                    <div class="row">
                            <div class="col-md-6"><i class="fas fa-check"> Electrical Remodels </i></div>
                            <div class="col-md-6"> <i class="fas fa-check"> Garage Power Service</i></div>
                    </div>
            </div>
                
        </div>
    </div>
</div>

<div class="section services">
    <div class="container">
        <div class="row">
            <div class="col-md-6"><img class="img-fluid" src='<?php echo get_template_directory_uri(); ?>/img/plumber-guy.jpg'> </div>
            <div class="col-md-6 services-wording">
                <h2>Plumbing Services</h2>
                <p>Louis Bronson has been handling plumbing services for about 48 years now. His motto is "Do it right or don't do it at all". We work around Glens Falls, NY, Saratoga Springs, NY, Ballston Spa, NY, Lake George, NY and surrounding areas. </p>
                <p>All our work done as a plumber is the highest quality plumbing jobs we've done. We have A+ Ratings with BBB, Angies List, Porch.com. We're also fully insured but have never in 48 years needed to use it. We stand behind our work and will make sure you're happy with the job done.</p>
                <br>
                <h1></h1>
                <p></p>
            </div>
        </div>
    </div>
</div>


<div class="section services bk-blue align-middle">
    <div class="container text-center">
        <h2>Plumbing Services Glens Falls, Saratoga Springs, Lake George</h2>
        <h5>Affordable, Dependable, Professional, Old School Values, Amazing are what comes to mind from our customers. </h5>
        <p>Make sure to get a Free Quote from us. We love our customers and they love us. It's a long term relationship not a one time call.</p>
        <button class="btn btn-primary btn-lg">
                  <a href="tel:(518) 796-2516"  onclick="gtag_report_conversion()">Call Or Text Now <i class="fa fa-phone" aria-hidden="true"></i> (518) 796-2516</a>
                </button>
    </div>
</div>

<div class="section services">
    <div class="container p-5">
        <div class="row">
                <div class="col-md-6 h-100 "> 
                <h4 class="title ">What Can We Service</h4>
                    <div class="row">
                        <div class="col-md-6"><i class="fas fa-check"> Tankless Hot Water Heaters</i></div>
                        <div class="col-md-6"> <i class="fas fa-check"> Water Softeners</i></div>
                    </div>
                    <div class="row">
                        <div class="col-md-6"><i class="fas fa-check"> Sinks Repair</i></div>
                        <div class="col-md-6"> <i class="fas fa-check"> Faucets and Fixtures</i></div>
                    </div>
                    <div class="row">
                        <div class="col-md-6"><i class="fas fa-check"> Pipes, Valves Water Mains </i></div>
                        <div class="col-md-6"> <i class="fas fa-check"> Drains and Sewers</i></div>
                    </div>
                    <div class="row">
                        <div class="col-md-6"><i class="fas fa-check"> Showers</i></div>
                        <div class="col-md-6"> <i class="fas fa-check"> Toliets</i></div>
                    </div>
                    <div class="row">
                        <div class="col-md-6"><i class="fas fa-check">Garbage Disposal</i></div>
                        <div class="col-md-6"> <i class="fas fa-check"> And More...</i></div>
                    </div>
                 
            </div>
            <div class="col-md-6 h-100 "> 
                <h4 class="title "> &nbsp; </h4>
                <div class="row">
                        <div class="col-md-6"><i class="fas fa-check"> Receptacle Repair</i></div>
                        <div class="col-md-6"> <i class="fas fa-check"> Flickering Light Issues </i></div>
                </div>
                <div class="row">
                        <div class="col-md-6"><i class="fas fa-check"> Sub Panel Electrical</i></div>
                        <div class="col-md-6"> <i class="fas fa-check"> Barn Electrical Installations </i></div>
                </div>
                <div class="row">
                        <div class="col-md-6"><i class="fas fa-check"> Electrical Commercial Services </i></div>
                        <div class="col-md-6"> <i class="fas fa-check"> Electrical Residential Services</i></div>
                </div>
                <div class="row">
                        <div class="col-md-6"><i class="fas fa-check"> Wiring Problems </i></div>
                        <div class="col-md-6"> <i class="fas fa-check"> New Wiring Installs</i></div>
                </div>
                <div class="row">
                        <div class="col-md-6"><i class="fas fa-check"> Electrical Remodels </i></div>
                        <div class="col-md-6"> <i class="fas fa-check"> Garage Power Service</i></div>
                </div>
                
            
            </div>
                
        </div>
    </div>
</div>



</div>
<?php get_footer(); ?>
