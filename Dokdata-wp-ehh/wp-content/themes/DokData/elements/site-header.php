
<nav id="mobile-nav">
        <ul class="hidden">
            <li><a href="#" class="active">Titulinis</a></li>
            <li><a href="/archyvas/">Archyvas</a></li>
            <li><a href="/apie/">Apie Mus</a></li>
            <li><a href="/informacija/">Informacija</a></li>
            <li><a href="/kontaktai/">Kontaktai</a></li>
        </ul>
    </nav>
<nav id="global-nav" class="global-nav">
        <div class="global-nav-inner">
            <div class="logo"></div>
            <nav class="mobile-nav">
                <div class="burger-container">
                    <span></span>
                </div>
            </nav>
            <nav class="lang-nav">
               <?php wp_nav_menu (array('theme_location' => 'lang-navigation', 
                                        'container' => '<ul></ul>'));?>
                
                
                <!--
                <ul>
                    <li><a href="#" class="active">Lt</a></li>
                    <li><a href="#" >En</a></li>
                    <li><a href="#" >Ru</a></li>
                </ul>
-->
            </nav>
            <nav class="main-nav">
                <?php wp_nav_menu (array(
                        'theme_location' => 'primary-navigation',
                        'container' => '<ul></ul>'
                        ))
                ;?>   
    <!--
                <ul>
                    <li><a href="#" class="active">Titulinis</a></li>
                    <li><a href="/archyvas/">Archyvas</a></li>
                    <li><a href="/apie/">Apie Mus</a></li>
                    <li><a href="/informacija/">Informacija</a></li>
                    <li><a href="/kontaktai/">Kontaktai</a></li>
                </ul>
-->
            </nav>
        </div>
    </nav>
<header id="landing-page">
    <section class="landing-page-inner">
        <section class="landing-page-cont">
            <h1><?php echo get_field('l_p_header');?><span><?php echo get_field('l_geltonas_headeris');?></span></h1>
            <div class="linija"></div>
            <p><?php echo get_field('land_trumpas_aprasymas');?></p>
            <?php
               
                $m_b_text = get_field('main_b_link_text');
                $m_b_link = get_field('main_button_link');
            ?>
            <a href="<?php echo $m_b_link; ?>" class="button-land"><?php echo $m_b_text;?></a>
            <div class="vert-linija"></div>
        </section>
    </section>
</header>