<?php
/* 
Template Name: Our Team Page
*/
?>

<?php get_header(); ?>

<main id="content" role="main">
    <div id="container" class="container">
        <div class="our-team-page">
            <div class="title">
                <h5>Our Story</h5>
                <h1>Who We Are And What Drives Us</h1>
            </div>
            <section class="mission">
                <div class="row">
                    <div class="left-col col">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/stock-1.png" alt="Doctor examining patient" class="img-top">
                        <p>Dr. Brad Gamble, and Dr. Michael Kubala of Otolaryngology Specialists of North Texas (OSNT), practice ear, nose, throat, and sinus medical and surgical care for children and adults.</p>
                    </div>
                    <div class="mid-col col">
                        <h3>Our Goal</h3>
                        <p>Our practice goal is to improve the health and well-being of our patients and the communities we serve.</p>
                        <h3>Our Mission</h3>
                        <p>Otolaryngology Specialists of North Texas are committed to providing outstanding service to our patients and referring physicians.</p>
                        <blockquote>
                            “Our passion is ensuring clear breaths, sounds, and health for all ages.”
                        </blockquote>
                    </div>
                    <div class="right-col col">
                    </div>
                </div>
            </section>
            <section class="d-mag">
                <div class="row">
                    <div class="col d-img-col">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/d-magazine-gamble.png" alt="D Magazine Doctor Gamble" class="img-top">
                    </div>
                    <div class="col">
                        <h2>How are D Magazine Best Doctors Selected?</h2>
                        <p>Each October, D Magazine publishes a comprehensive list of the best doctors that are chosen by their peers. The list of Best Doctors and Pediatric Specialists begins with a peer voting process. D Magazine mail out a letter to the local doctors from our online directory, inviting them to vote using an online ballot.
                        </p>
                        <p>The nomination form asked them to cast a vote keeping in mind the following question: <span>which Dallas doctors would you trust with the care of a loved one?</span> The panel and D Magazine staff reviewed the tallied results and decided the finalists based on the number of votes in each category.</p>
                    </div>
                </div>
            </section>
            <section class="awards">
                <h3>AWARDS - Bradford Gamble, MD</h3>
                <strong>Best Doctors in Collin County</strong>
                <p>2024, 2023, 2022, 2021, 2020, 2017, 2016</p>
                <strong>Best Doctors Dallas</strong>
                <p>2023, 2022, 2021, 2020, 2019, 2018, 2017, 2016, 2015, 2014, 2013, 2012, 2011, 2010, 2009, 2008, 2007, 2006, 2005, 2004, 2003, 2002, 2001</p>
                <a href="https://directory.dmagazine.com/doctors/bradford-gamble-md/">See All Awards</a>

            </section>
            <section class="meet">
                <h5>Meet the team</h5>
                <h2>Meet our Specialists</h2>
                <div class="cards">
                    <div class="card">
                        <div class="card-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/dr-gamble.png" alt="Dr Bradford A. Gamble" class="">
                        </div>
                        <div class="content">
                            <div class="row title-row">
                                <h3>Dr. Brad Gamble</h3>
                                <p>Certified Ontolaryngolgy ENT</p>
                            </div>
                            <p>Bradford Gamble, MD was raised in Plano, Texas. He attended Plano Senior High School, graduating with honors in 1985. He then attended Baylor University in Waco, Texas, where he received his BS in Biology. Following college...</p>
                        </div>
                        <div class="buttons">
                            <a href="/us/bradford-gamble-md">
                                <button class="primary-button">
                                    Learn More >
                                </button>
                            </a>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/dr-kubala.png" alt="Dr Michael E. Kubala" class="">
                        </div>
                        <div class="content">
                            <div class="row title-row">
                                <h3>Michael E. Kubala</h3>
                                <p>Certified Ontolaryngolgy ENT</p>
                            </div>
                            <p>Michael E. Kubala, MD was born in Tulsa, OK and spent the majority of his childhood growing up in Katy, TX, graduating from Taylor High School in 2006. He then attended the University of Oklahoma, where he graduated summa cum laude...</p>
                        </div>
                        <div class="buttons">
                            <a href="/us/michael-e-kubala-md/">
                                <button class="primary-button">
                                    Learn More >
                                </button>
                            </a>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/maria-chapman.png" alt="Doctor examining patient" class="">
                        </div>
                        <div class="content">
                            <div class="row title-row">
                                <h3>Maria S. Chapman</h3>
                                <p>Registered Nurse, Certified <br>Pediatric Nurse</p>
                            </div>
                            <p>Maria Chapman grew up in Michigan where she began her education and desire to become a nurse. She then moved to Abilene, TX to complete her nursing studies at Hardin-Simmons University, receiving her Bachelor of Science in Nursing...</p>
                        </div>
                        <div class="buttons">
                            <a href="/us/maria-s-chapman-rn-bsn-cpn/">
                                <button class="primary-button">
                                    Learn More >
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </section>
            <?php
            get_template_part('/template-parts/contact-row');
            ?>
        </div>
    </div>
</main>

<?php get_footer(); ?>