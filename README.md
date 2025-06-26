Title: Growmodo Project – Development Documentation

1. Overview
- Custom child theme built based on Figma design: https://www.figma.com/community/file/1314076616839640516
- Includes:
  a. Home page,
  b. About page (in progress),
  c. Properties page (an archive for all properties)
  d. Blog page
  e. Contact page
  f. Single page for each property, FAQs page and Testimonials

2. Theme Structure
- Template files used: header.php, footer.php, single.php, front-page.php, 404.php and archive pages, template parts for reusable sections.
- Custom sections: homepage hero, 3-column layout, contact form

3. Tools & Plugins
- Font Awesome 5 (CDN)
- Google Fonts: Urbanist
- Plugins used: Contact Form 7, ACF, Updraft for backup 

4. Development Notes
- A fully responsive layout that works on multiple devices (mobile, tablet, desktop)
- CSS Grid, flexbox rem/em used for responsiveness
- Hamburger menu with JavaScript toggle logic
- Template parts used for reusable sections
- Custom fields used for dynamic section so that client can easily update
- WordPress Loop for custom post types
- Optimize for performance

5. Setup Instructions
- Download a fresh install of WordPress to local machine
- Upload the theme folder to wp-content/themes
- Activate in Appearance > Themes
- Copy the provided plugins, and uploads into wp-content
- Create a new database.
- Import the provided database zip into the new database.
- Run on local server
- Zip folders for all the above: https://drive.google.com/drive/folders/1BjOjgikU8s4N4mEsyQLxFahJKlUQXAiU?usp=sharing
