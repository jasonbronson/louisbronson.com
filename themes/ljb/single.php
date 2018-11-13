<?php get_header(); ?>

<?php
$content = apply_filters('the_content',$post->post_content);
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
                <h4 class="title ">Electrical Services</h4>
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

<?php get_footer(); ?>
