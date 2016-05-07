<?php
/*
Template Name: About

Above label is required. Don't remove!
*/
?>

<?php get_header(); ?>

    <div id="primary" class="content-area ">

        <!--
       ///////////////////////////////////////////
       ///////////////////////////////////////////
       TITLE
       ///////////////////////////////////////////
       ///////////////////////////////////////////
       -->
        <header class="about-section-heading">
            <?php the_title( sprintf( '<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

            <?php if ( 'post' === get_post_type() ) : ?>
                <div class="entry-meta">
                    <?php cs_outreach_theme_posted_on(); ?>
                </div><!-- .entry-meta -->
            <?php endif; ?>
        </header><!-- .entry-header -->



        <!--
       ///////////////////////////////////////////
       ///////////////////////////////////////////
       SECTION: ABOUT
       ///////////////////////////////////////////
       ///////////////////////////////////////////
       -->
        <main id="main" class="site-about" role="main">
            <div class="post">
                <div class="row">
                    <div class="col-sm-4 col-md-4 col-lg-4 about-img">
                        <img src="<?php bloginfo('stylesheet_directory'); ?>/images/LeoUreel.jpg"/>
                    </div>
                    <div class="col-sm-8 col-md-8 col-lg-8">
                        <h1>Leo C. Ureel II </h1>
                        <p>Leo C. Ureel II is a Lecturer of Computer Science at Michigan Technological University. His research interests include Computer Science Education, Software Engineering, and intelligent Learning Environments. He teaches students how to solve problems using programming languages. He can often be found coding in Java, Groovy, Javascript, Processing, Scratch, or Racket.</p>

                        <p>In his career as a software developer, Leo has worked on industrial, scientific, educational, and entertainment software. He has taught graphic design, mathematics, and computers at the high school level. He is currently involved in teaching kids in grades 6-12 to program through Copper Country Programmers and helping older adults develop computer literacy through Online@Library.</p>
                            <p>When not behind a computer, he enjoys bee keeping, camping, canoeing, hiking, and exploring nature in Michigan's Upper Peninsula.</p>
                        </p>
                    </div>
                </div>
            </div>

            <div class="post">
                <div class="row">
                    <div class="col-sm-4 col-md-4 col-lg-4 about-img">
                        <img src="<?php bloginfo('stylesheet_directory'); ?>/images/CharlesWallace.jpg"/>
                    </div>
                    <div class="col-sm-8 col-md-8 col-lg-8">
                        <h1>Dr. Charles Wallace</h1>
                            <p>Dr. Charles Wallace is an Associate Professor of Computer Science at Michigan Technological University.  His research and teaching activities lie broadly in the area of software engineering; more specifically, he is interested in how humans can better understand the software they build and use.  This has led him to a wide variety of projects: applications of formal methods to problems in programming languages and parallel computing; pattern based approaches to effective communication in software teams; software usability and accessibility issues for underrepresented user constituencies.
                            </p>
                            <p>Teaching and outreach are important complements to Dr. Wallace's research.  He was one of the founders of the successful B.S. degree program in Software Engineering at Michigan Tech, authoring the degree proposal and guiding its development ever since.  He has helped to lead a multi-institutional effort to build instruction on communication into software engineering curricula.  One outreach effort pairs Computer Science students with local elders in digital literacy tutoring sessions.  Another project brings instruction in programming to local middle and high school students.
                            </p>
                        </p>
                    </div>
                </div>
            </div>

            <div class="post">
                <div class="row">
                    <div class="col-sm-4 col-md-4 col-lg-4 about-img">
                        <img src="<?php bloginfo('stylesheet_directory'); ?>/images/LindaOtt.jpg"/>
                    </div>
                    <div class="col-sm-8 col-md-8 col-lg-8">
                        <h1>Dr. Linda M. Ott</h1>
                        <p>Dr. Linda M. Ott received her PhD in Computer Science in 1978 and has been at Michigan Tech ever since. Her early research interests were in software engineering, including software processes, software measurement, and software engineering education. Most recently she has been actively involved in encouraging high school women to pursue computing degrees and in the retention of undergraduate computing students. Ott received the Michigan Technological University Inaugural Diversity Award in 2014. She was a founding organizer of the Michigan Celebration of Women in Computing and of the NCWIT Aspirations in Computing Michigan Affiliate Award for high school women. She is the project lead for Michigan Tech’s NCWIT Pacesetters team and for Michigan Tech’s NCWIT Extension Services for Undergraduate Programs team.
                        </p>
                    </div>
                </div>
            </div>

            <div class="post">
                <div class="row">
                    <div class="col-sm-4 col-md-4 col-lg-4 about-img">
                        <img src="<?php bloginfo('stylesheet_directory'); ?>/images/RobertPastel.jpg"/>
                    </div>
                    <div class="col-sm-8 col-md-8 col-lg-8">
                        <h1>Dr. Robert Pastel</h1>
                        <p>Dr. Robert Pastel is an Associate Professor of Computer Science and Adjunct Associate Professor of

                            Applied Cognitive Science and Human Factors at Michigan Technological University. Robert&#39;s

                            interests are in computer use and software development. Robert believes that computer use will

                            become ubiquitous and that the current manifestation of ubiquitous computing is mobile and

                            Internet use. Robert&#39;s goals are to make computer use effective and the development of modern

                            software efficient. In pursuit of these goals, Robert studies the usability of mobile user interfaces,

                            the development of offline web application, and the dynamics of interdisciplinary teams developing

                            software. These studies are pursued in a larger context of the Mobile Environmental Citizen Science

                            project at Michign Technological University. </p>

                            <p>Robert has a circuitous carrier. His Ph.D. is in Physics from New Mexico University. He developed

                            lasers and new lasers use, including explosive material detection and submicron particle trapping

                            and manipulation. He later joined the Computer Science faculty at Michign Technological University

                            and assisted founding the Software Engineering Program. He developed curriculia and learning

                            environments that enables Computer Science students to work in multidisciplinary teams and

                            develop real applications for Scientist from across the continent.</p>

                            <p>When Robert is not programming, he enjoys skiing during the Winter, biking during the Summer in

                            the Michigan&#39;s Upper Peninsula, cross country backpacking in the Sierras and Rockies.</p>
                        </p>
                    </div>
                </div>
            </div>

            <div class="post">
                <div class="row">
                    <div class="col-sm-4 col-md-4 col-lg-4 about-img">
                        <img src="<?php bloginfo('stylesheet_directory'); ?>/images/NicoleYarroch.png"/>
                    </div>
                    <div class="col-sm-8 col-md-8 col-lg-8">
                        <h1>Nicole Yarroch</h1>
                        <p>Nicole recently received her bachelor’s in Computer Science from Michigan Technological University.
                            As a student, she was involved with Copper Country Coders, a group of MTU students and professors who
                            teach local middle and high school students how to code. Nicole often programs with Swift, Objective-C,
                            Java, Scratch, and Processing. When not coding, she enjoys reading, painting, and cooking spicy foods.
                        </p>
                    </div>
                </div>
            </div>

        </main><!-- #main -->
    </div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>