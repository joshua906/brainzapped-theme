<?php 
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Brainzapped
 * @since 1.0
 * @version 1.0
 */
get_header(); ?>


<div class="terms-of-use">
    <div class="container">
        <div class="row">
            <div class="col-md-12">

            <?php while ( have_posts() ) : the_post(); 

                $heading = get_field('heading_one');

            ?>

                <h2><?php echo $heading; ?></h2>

                <p>Please read the following Terms and Conditions of Use carefully before using this web site. Your use of this web site is expressly conditioned on your acceptance of these terms and conditions without any modifications. Your use of this web site constitutes your acceptance of all the terms and conditions set forth herein. If you do not agree with any part of the following terms and conditions, you should not use this web site.</p>

                <h3>Definitions</h3>
                <p>Any use herein of the terms "Brain Zapped! web site" or just "web site" refers to all publicly accessible web pages that are identified with and under the control of Brain Zapped!</p>

                <h3>Terms</h3>
                <p>"Brain Zapped!" "us," "our," "we," and any variation thereof refer to Brain Zapped! and may include independent contractors who operate portions of Brain Zapped! web site on Brain Zapped's behalf.</p>

                <h3>Ownership Notice</h3>
                <p>Unless otherwise noted, this web site and all of the materials contained herein, including the source code, HTML code and any other code used to generate any portion of this web site, are the copyrighted property of Brain Zapped! or of third parties who have licensed Brain Zapped! to use their property. None of the data or content found on this web site may be reproduced, republished, transferred, distributed, sold or modified without the express written permission of Brain Zapped! In addition, the trademarks, logos, and service marks displayed on this web site (collectively the "Trademarks") are registered and common law trademarks of Brain Zapped! and/or third party service providers. Nothing contained on this web site should be construed as granting, by implication, Estoppel, or otherwise, any license or right to use any of the Trademarks without the written permission of Brain Zapped! and/or the appropriate third party service providers.<p>

                <h3>No Unlawful or Prohibited Use</h3>
                <p>As a condition of your use of the Brain Zapped! Web Site, you warrant to Brain Zapped! that you will not use the Brain Zapped! Web Site for any purpose that is unlawful or prohibited by these terms, conditions, and notices. You may not use the Brain Zapped! Web Site in any manner which could damage, disable, overburden, or impair the Brain Zapped! Web Site or interfere with any other party’s use and enjoyment of the Brain Zapped! Web Site. You may not obtain or attempt to obtain any materials or information through any means not intentionally made available or provided for through the Brain Zapped! Web Sites.</p>

                <h3>Personal and Non-Commercial Use Limitation</h3>
                <p>This web site is strictly for your personal and non-commercial use. In the absence of Brain Zapped! express prior written consent, you may not modify, copy, transmit, reproduce, distribute, display, or publish this web site or any part thereof for any purpose other than your own personal and non-commercial use.</p>

                <h3>Children</h3>
                <p>Brain Zapped! believes that it is extremely important to protect children's personal information. As a result, no one under the age of 16 is allowed to use any features of this web site that result in our actively collecting personal information.</p>

                <h3>Links to Third Party website's</h3>
                <p>The Brain Zapped! Web Site may contain links to other Web Sites (“Linked Sites”). The Linked Sites are not under the control of Brain Zapped! and Brain Zapped! is not responsible for the contents of any Linked Site, including without limitation any link contained in a Linked Site, or any changes or updates to a Linked Site. Brain Zapped! is not responsible for webcasting or any other form of transmission received from any Linked Site. Brain Zapped! is providing these links to you only as a convenience, and the inclusion of any link does not imply endorsement by Brain Zapped! of the site or any association with its operators. Any questions that you have about one of the Linked web site's should be directed to the individuals and/or organizations responsible for that web site. Although we attempt to verify all links on a regular basis, there is a possibility that the particular server that you are attempting to link to is not currently operational. Please e-mail the website administrator and let us know about a broken hyperlink.</p>

                <h3>Bookmarking and Linking to our web site</h3>
                <p>Individuals may, for personal, non-commercial use only, bookmark or point to any page within the Brain Zapped! web site.</p>

                <h3>Other users/web site's may: </h3>
                <p>1) include a link to Brain Zapped! web site by pointing to the web site's home page at http://www.BrainZapped.com and (2) link to the Brain Zapped! major subcategory pages (e.g. Behind the Scenes, EGG Entertainment, etc.), provided that it is made clear that the information is being provided by Brain Zapped!.</p>
                <p>Other users/web site's may not without the Brain Zapped! express written consent: 
(1) point or link from a web site directly to content within the Brain Zapped! web site other than by pointing or linking to http://www.BrainZapped.com or one of the major sub-category pages as provided above,; (2) copy, modify, or display the Brain Zapped! name, logo, text, or graphic images in any way; or (3) redeliver any of the pages/text/images/content of the Brain Zapped! web site using "framing" technology.</p>

                <h3>Disclaimer of Warranty and Limitation of Liability</h3>
                <p>Brain Zapped! makes no representations about the suitability, reliability, availability, timeliness, lack of viruses or other harmful components, and accuracy of the information, products, services, related graphics, and all other content found on this web site. All such information, products, services, related graphics, and all other content found on this web site are provided "as is" without any kind of warranty. Brain Zapped! hereby disclaims all warranties and conditions with regard to such information, products, services, related graphics, and all other content found on this web site, including all implied warranties and conditions of merchantability, fitness for a particular purpose, title, and non-infringement.</p>
                <p>In no event shall Brain Zapped! be liable for any direct, indirect, punitive, incidental, special, consequential, or any other type of damages arising out of or in any way related to the use or performance of the Brain Zapped! web site, the provision of or failure to provide services, or for any information, products, services, related graphics, and other materials obtained through the Brain Zapped! web site, or otherwise arising out of the use of the Brain Zapped! web site, whether based on contract, tort, negligence, strict liability, or otherwise, even if Brain Zapped! has been advised of the possibility of such damages.</p>
                <p>Please note that because some states/jurisdictions do not allow the disclaimer of certain warranties and/or the exclusion or limitation of liability for certain types of damages, some of the preceding disclaimer, exclusion, and limitation may not apply to you. In such event, please see the section below entitled "Restriction on Use Based on Location."</p>

                <h3>Amendments to These Terms and Conditions of Use</h3>
                <p>From time to time, it may be necessary for Brain Zapped! to amend these Terms and Conditions of Use. You are responsible for regularly reviewing these Terms and Conditions of Use so that you will be aware of any changes. Please note that your continued use of this web site means that you accept the amendments to these Terms and Conditions of Use.</p>

                <h3>Governing Law</h3>
                <p>This agreement and its performance are governed by the laws of the State of Texas and the United States of America without regard to any conflicts of law provisions. You agree to submit to the exclusive jurisdiction of the state and federal courts located in the City & County of Dallas, State of Texas, United States of America, for all disputes and issues regarding your use of this web site and your compliance with these Terms and Conditions of Use.</p>

                <h3>Restriction on Use Based on Location</h3>
                <p>Use of this web site is unauthorized in any jurisdiction that does not give effect to all provisions of these Terms and Conditions of Use.</p>

                <h3>Accessing the web site in Countries Other Than the United States</h3>
                <p>Brain Zapped! makes no claims regarding the legality of viewing or downloading the content of this web site in any country other than the United States. Anyone who accesses this web site in a country other than the United States does so at his or her own risk.</p>

                <h3>Violation of These Terms and Conditions of Use</h3>
                <p>If Brain Zapped! determines that you have violated any provision of these Terms and Conditions of Use, Brain Zapped! has the right, in its sole discretion, to pursue any and all of its legal remedies.</p>

                <h3>Indemnification</h3>
                <p>You agree to defend, indemnify, and hold harmless Brain Zapped! and its officers, directors, employees, and agents from and against any and all claims arising from your use of the web site.</p>

                <h3>Severability</h3>
                <p>If any provision of these Terms and Conditions of Use is held to be invalid or unenforceable, the validity and enforceability of the other provisions of these Terms and Conditions of Use will remain unaffected.</p>

                <h3>Headings</h3>
                <p>The headings in these Terms and Conditions of Use are included solely for convenience and will not limit or otherwise affect these Terms and Conditions of Use.</p>

                <h3>Entire Agreement</h3>
                <p>These Terms and Conditions of Use and any other policies and/or guidelines referred to herein constitute the entire agreement between you and Brain Zapped! regarding this web site, and supersede all other prior or concurrent oral or written letters, agreements, or understandings related to this web site.</p>

                <h3>COPYRIGHT AND TRADEMARK NOTICES:</h3>
                <p>All contents of the Brain Zapped! Web Site are: Copyright ©Brain Zapped! and/or its suppliers. All rights reserved.</p>







                    <?php endwhile; ?>



            </div>
        </div>
    </div>    
</div>


<?php get_footer(); ?>