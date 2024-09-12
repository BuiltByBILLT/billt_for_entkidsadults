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
                        <p>Dr. Brad Gamble, and Dr. Michael Kubala of Otolaryngology Specialists of North Texas (OSNT), practice ear, nose, throat, and sinus medical and surgical care for children and adults. Dr. Gamble is a board certified Otolaryngology (ENT)-Head and Neck surgeon with offices in Plano and Dallas, Texas.</p>
                    </div>
                    <div class="mid-col col">
                        <h3>Our Goal</h3>
                        <p>Otolaryngology Specialists of North Texas will provide the highest quality ear, nose, and throat, medical and surgical care to both children and adults. We are committed to outstanding service to our patients and referring physicians. Our practice goal is to improve the health and well-being of our patients and the communities we serve.</p>
                        <h3>Our Mission</h3>
                        <p>Otolaryngology Specialists of North Texas will provide the highest quality ear, nose, and throat, medical and surgical care to both children and adults. We are committed to outstanding service to our patients and referring physicians. Our practice goal is to improve the health and well-being of our patients and the communities we serve.</p>
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
                        <p>Each October, D Magazine publishes a comprehensive list of the best doctors that are chosen by their peers. The list of Best Doctors and Pediatric Specialists begins with a peer voting process. D Magazine mail out a letter to the local doctors from our online directory, inviting them to vote using an online ballot. They could vote for up to three doctors in each category. The nomination form asked them to cast a vote keeping in mind the following question: which Dallas doctors would you trust with the care of a loved one?  The panel and D Magazine staff reviewed the tallied results and decided the finalists based on the number of votes in each category. Once the list was finalized, D confirmed each doctor’s Texas medical license status and board certification and investigated his or her disciplinary status.</p>
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
                    <a href="us/bradford-gamble-md" class="card">
                        <div class="card-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/dr-gamble.png" alt="Dr Bradford A. Gamble" class="">
                        </div>
                        <div class="content">
                            <div class="row">

                                <h3>Dr. Brad Gamble</h3>
                                <span>(certified Ontolaryngolgy ENT)</span>
                            </div>
                            <p>Dr. Brad Gamble, and Dr. Michael Kubala of Otolaryngology Specialists of North Texas (OSNT), practice ear, nose, throat, and sinus medical and surgical care for children and adults. Dr. Gamble is a board certified Otolaryngology (ENT)-Head and Neck surgeon with offices in Plano and Dallas, Texas.</p>
                        </div>
                        <div class="buttons">
                            <button class="primary-button">
                                Learn More >
                            </button>
                        </div>
                    </a>
                    <a href="/us/michael-e-kubala-md/" class="card">
                        <div class="card-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/dr-kubala.png" alt="Dr Michael E. Kubala" class="">
                        </div>
                        <div class="content">
                            <div class="row">

                                <h3>Michael E. Kubala</h3>
                                <span>(certified Ontolaryngolgy ENT)</span>
                            </div>
                            <p>Dr. Kubala sees patients at both the Plano and Dallas offices. Dr. Kubala performs surgeries at Children’s Medical Center Legacy, Cooks Pediatric Surgery Center Prosper, Texas Health Center for Diagnostics and Surgery, Texas Health Presbyterian Hospital Dallas, Texas Health Presbyterian Hospital Plano, and Texas Institute for Surgery.  Dr. Kubala is Board Certified in Otolaryngology-Head and Neck Surgery....</p>
                        </div>
                        <div class="buttons">
                            <button class="primary-button">
                                Learn More >
                            </button>
                        </div>
                    </a>
                    <a href="maria-s-chapman-rn-bsn-cpn/" class="card">
                        <div class="card-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/maria-chapman.png" alt="Doctor examining patient" class="">
                        </div>
                        <div class="content">
                            <div class="row">

                                <h3>Maria S. Chapman</h3>
                                <span>(Registered Nurse, Certified Pediatric Nurse)</span>
                            </div>
                            <p>Maria Chapman grew up in Michigan where she began her education and desire to become a nurse.  She then moved to Abilene, TX to complete her nursing studies at Hardin-Simmons University, receiving her Bachelor of Science in Nursing in 1988.  In the 25 years of nursing, Maria has worked at Cook Children’s Medical Center and Texas Health Plano.  During the last 10 years, Maria’s focus has been in Management, with her goal to provide an excellent standard of care that is evidenced based and patient focused....</p>
                        </div>
                        <div class="buttons">
                            <button class="primary-button">
                                Learn More >
                            </button>
                        </div>
                    </a>
                </div>
            </section>
            <?php
            get_template_part('/template-parts/contact-row');
            ?>
        </div>
    </div>
</main>

<?php get_footer(); ?>