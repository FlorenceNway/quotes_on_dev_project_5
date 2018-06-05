# Quotes on Dev Starter

A WordPress starter theme for the Quotes on Dev project, forked from Underscores.

## Installation

### 1. Download theme from github

Then add me to your `wp-content/themes` directory.

### 2. Rename the `quotesondev-starter-master` directory

Make sure that the theme directory name is project appropriate! Do you need `starter` or `master` in the directory name?

### 3. Install the dev dependencies

Next you'll need to run `npm install` **inside your theme directory** to install the npm packages you'll need for Gulp, etc.

### 4. Update the proxy in `gulpfile.js`

Lastly, be sure to update your `gulpfile.js` with the appropriate URL for the Browsersync proxy (so change `localhost[:port-here]/[your-dir-name-here]` to the appropriate localhost URL).

### 4. Developing

-Be built using WordPress as CMS
-Contain a About page, an Archives page, and Submit a Quote page
-Contain a blog post index page and a single view for blog posts
-Contain a search results page and 404 page
-Fetch an initial random post on the front page
-Fetch additional random posts on the front page using the WP API
-Display one item per page for the blog index and author archives, five items per page for category an  tag archives, and ten items per page for search results
-Accept new quote submissions from the front-end of the site using WP API (for logged in users only), 	 and set those submissions to pending by default
-Show a message to unauthenticated users on the “Submit a Quote” page that informs them they must log in to submit a new quote
