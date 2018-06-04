<?php
/**
 * // Template Name: Submit Quote Template
 *
 * @package QOD_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		
		<?php

			if(is_user_logged_in()){

		 ?>
	
		<form name="quoteForm" id="quote-submission-form">
	        <div>
	            <label for="quote-author">Author of Quote</label></br>
	            <input type="text" name="quote_author" id="quote-author" required aria-required="true">
	        </div>
	        <div>
	            <label for="quote-content">Quote</label>
	            <textarea rows="3" cols="20" name="quote_content" id="quote-content" required aria-required=true></textarea>
	        </div>
	        <div>
	            <label for="quote-source">Where did you find this quote? (e.g. book name)</label><br>
	            <input type="text" name="quote_source" id="quote-source">
	        </div>
	        <div>
	            <label for="quote-source-url">Provide the URL of teh quote source, if available.</label><br>
	            <input type="url" name="quote_source_url" id="quote-source-url">
	        </div>

	        <input type="submit" value="Submit Quote">
	    </form>

		<div class="submit-success-message"></div>			
	
	<?php
	}else{ 

	?>
		<div class="user-log-in">
		<h2>Submit a Quote</h2>
		<p>Sorry you must be log in to submit a quote!</p>

			<a href="../wp-login.php" title="Login" rel="login"> Click here to log in</a>

		</div>
			
	<?php
	}
 
	?>


		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>