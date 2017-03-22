<?php 
$section1= get_field('front_section_1');

$post_data = get_post(42);

global=$post_data;

setup_postdata($post);?>

?>

<section id="archyvas">
        <div class="archyvas-inner">
            <div class="archyvas-bg"></div>
            <section class="col-half left">
                <img src="<?php the_post_thumbnail();?>">
            </section>
            <section class="col-half right">
                <h2>Dokdata archyvas</h2>
                <?php echo content
                <a href="/archyvas/" class="button">Skaityti daugiau</a>
            </section>
        </div>
    </section>
    
    ?>