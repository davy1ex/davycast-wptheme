<?php wp_head()?> 
<?php get_header(); ?>
<div class="first_block site_section" data-aos="fade-up">
        <h2>Main Event 2020</h2>

        <div class="big_text">Interview with top hackers </div>
        <div class="big_text">Conference 2020</div>

        <h2>September 6th-7th, Minnesota, United States</h2>

        <div data-aos="fade-up" class="button_buy_ticket">
            buy tickets
        </div>		
</div>

<div data-aos="fade-up" class="speakers site_section" >
    <div class="title">
        Speakers
        <div class="line"></div>
    </div>

    <div class="speaker odd">
        <div data-aos="zoom-in" data-aos-duration="1000" class="photo"><img src="img/speakers/heckerman.jpg" alt=""></div>
        <div data-aos="fade-right" class="text">
            <div class="name">Heckerman</div>
            <div class="desc">                    
                "The Pentagon hacked in a foreign language lesson from boredom" - these are the first words of this dude as soon as we met him live. Hacks in the morning for lunch and in the evening everything that moves
            </div>
        </div>
    </div>

    <div class="speaker even">
        <div data-aos="zoom-in" data-aos-duration="1000" class="photo"><img src="img/speakers/hacker2.jpg" alt=""></div>
        <div data-aos="fade-right" class="text">
            <div class="name">Hacker</div>
            <div class="desc">                    
                This guy's motto is "People are stupid, so hackers always win." Simple and concise.
            </div>
        </div>
    </div>

    <div class="speaker odd">
        <div data-aos="zoom-in" data-aos-duration="1000" class="photo"><img src="img/speakers/hacker3.jpg" alt=""></div>
        <div data-aos="fade-right" class="text">
            <div class="name">Hacer</div>
            <div class="desc">                    
                This guy is not as simple as it seems. Hacks everything: from toasters to your mothers. Hacknet and you, if ordered as a black hacker
            </div>
        </div>
    </div>        
</div>

<div data-aos="fade-up" class="site_section">
    <div class="title">
        Programs
        <div class="line"></div>
    </div>

    <div class="programs_list">
        <div data-aos="fade-up" data-aos-duration="2000" class="list_item">
            <div class="time">8:00 <span class="ampm">am</span></div>
            <div class="list_desc">
                <div class="title">How to hack someone else’s neighbor</div>
                <div class="author">Hacker</div>
            </div>
        </div>

        <!-- <hr> -->

        <div data-aos="fade-up" data-aos-duration="2000" class="list_item">
            <div class="time">12:00 <span class="ampm">am</span></div>
            <div class="list_desc">
                <div class="title">Hack
                    Hack that shit
                    Hack give it to me</div>
                <div class="author">Heckerman</div>
            </div>
        </div>

        <!-- <hr> -->

        <div data-aos="fade-up" data-aos-duration="2000" class="list_item">
            <div class="time">18:00 <span class="ampm">pm</span></div>
            <div class="list_desc">
                <div class="title">How hac anybody?</div>
                <div class="author">Hacer</div>
            </div>
        </div>
    </div>
</div>

<div data-aos="fade-up" class="site_section">
    <div class="title">
        Sponsors
        <div class="line"></div>
    </div>
    
    <div class="sponsors_list">
        <div data-aos="fade-zoom-in"
        data-aos-easing="ease-in-back"
        data-aos-delay="300"
        data-aos-offset="0" class="sponsor">
            <img src="img/sponsors/logo_2.png" alt="">
        </div>

        <div data-aos="fade-zoom-in"
        data-aos-easing="ease-in-back"
        data-aos-delay="300"
        data-aos-offset="0" class="sponsor">
            <img src="img/sponsors/logo_5.png" alt="">
        </div>
    </div>

    <div data-aos="fade-up" class="be_a_sponsor">
        <a href="#">Be a Sponsor</a>
    </div>

</div>

<!-- стили будут потом -->
<div id="secondary">
    <?php get_sidebar(); ?>

</div>
<?php get_footer(); ?>