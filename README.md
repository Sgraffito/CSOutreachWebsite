# CSOutreach Theme for WordPress

This is a custom theme for the CSOutreach site.

## Post News
If you want to post news on the CSOutreach website:  

1. Go to [outreach.cs.mtu.edu/wp-admin](outreach.cs.mtu.edu/wp-admin) in your web-browser.
2. Log in with your credentials. 
3. In the side menu, click on *Posts*.
4. Click on the *Add New* button and fill out the post title and body information. 
5. Click on *Publish* to make the post visible. You can also save the post as a draft and publish it later by clicking on *Save Draft*.

## Edit the Site
There are two ways to edit the code for the site. The first is to download the theme, make edits, and upload the new theme. Follow the instructions outlined in *Theme Installation Instructions* to download the current theme being used for the CSOutreachsite. The second method is to edit the files in the Wordpress admin page. To do this:  
1. Go to [outreach.cs.mtu.edu/wp-admin](outreach.cs.mtu.edu/wp-admin) in your web-browser.
2. Log in with your credentials. 
3. In the side menu, click on *Appearance > Editor*. Select the file you want to edit. Make changes to the file. and then click on *Update File*.

## Theme Installation Instructions
Use CPanel to edit a theme or to upload a new theme to the site.   
1. Go to [outreach.cs.mtu.edu/cpanel](outreach.cs.mtu.edu/cpanel) in your web-browser.
2. Log in with your credentials.
3. Click on the *File Manager* button. You will see a list of files on the right hand side of the screen.
4. The theme is installed in a specific folder. Navigate to this folder by clicking on **www > wp_content > themes**. The folder named **cs_outreach_theme** has the theme files. You can download this folder, make edits, and upload the edited files. 
5. To upload a new theme, first compress the files into a *.zip* file. In the CPanel site, click on *Upload* in the top toolbar. After the file has been uploaded, unzip the file by clicking on *Extract* in the top toolbar.
6. If you are simply updating the cs_outreach_theme, the new theme will be applied automatically. However, if you are uploading a new theme, you will need to log into Wordpress admin panel and activate the new theme.

## Activate A New Theme  
1. Go to [outreach.cs.mtu.edu/wp-admin](outreach.cs.mtu.edu/wp-admin) in your web-browser.
2. Log in with your credentials. 
3. In the side menu, click on *Appearance > Themes*.
4. Your theme (that you installed using the *Theme Installation Instructions* above)should be in the list of themes available to install. If the theme is not visible, make sure that you unzipped the file after uploading to CPanel. 
5. Hover your mouse over the theme you want to use and click the *Activate* button (button will only appear when you hover your mouse over the theme name). 

## CSOutreach Files  
1. The code for the front page of the site is located in front-page.php
2. The top nav-bar is in header-default.php
3. The footer is in footer-default.php
4. The styling is done in style.css




_strap
======

**\_strap** is a starter theme for WordPress.
It has the goal of integrating Twitter's **bootstrap** (https://github.com/twitter/bootstrap) into Automattic's **\_s** (https://github.com/Automattic/_s) with the smallest possible changeset.

> \_strap works with Bootstrap :three:<br />
> the Bootstrap :two: version is [still available at its own branch](https://github.com/ptbello/_strap/tree/Bootstrap_2.3.2)

What you put
------------
* You can customize the original Bootstrap LESS files \- in particular [/bootstrap/less/variables.less](https://github.com/ptbello/_strap/blob/master/bootstrap/less/variables.less)
* You should add your custom styles at the end of [/style.less](https://github.com/ptbello/_strap/blob/master/style.less) and/or in extra .less files you should then `@import` in [/style.less](https://github.com/ptbello/_strap/blob/master/style.less)
* After changes you should [compile](http://lesscss.org/usage) [/style.less](https://github.com/ptbello/_strap/blob/master/style.less) to [/style.css](https://github.com/ptbello/_strap/blob/master/style.css)
* Of course you should edit any of the actual theme .php files as you see fit, exactly like you would do with ant other starter theme; if you alter the markup structure of the theme, i.e. create a different grid, you should use either use the orginal Bootsrap classes or the [mixins Bootstrap provides](http://getbootstrap.com/css/#grid-less) to attach the same behaviour to any element.
