=== Plugin Name ===
Contributors: lavluda, rajuru
Donate link: http://www.ekushey.org/
Tags: keyboard, bangla, comment
Requires at least: 2.5
Tested up to: 3.0.3
Stable tag: 3.2.5

Bangla Typing Scripts for wordpress. This Java Script based add-ons will let your visitors type in Bangla without using any 3rd party tool or keyboard manager along with in your "new post page" you will get option to write post in bangla.

== Description ==

Bangla Typing Scripts for wordpress. This Java Script based add-ons will let your visitors type in Bangla without using any 3rd party tool or keyboard manager along with in your "new post page" you will get option to write post in bangla. These add-ons are very flexible and easy to install to any site and 100% workable with Mozilla FireFox (1.0 or higher), Apple Safari, Microsoft Internet Explorer (5 or higher) and any Gecko engine based web browser.

for live example: visit http://www.lavluda.com

Supported Layout: Phonetic, Probhat

== Installation ==
1. download the zip file

2. After extracting the wp-banglakb.zip file you'll find a folder called banglakb. Upload the banglakb folder to your WordPress' /wp-content/plugins/ folder. Again double check that you have bangla.plugin.php, phoneticunicode.js, probhatunicode.js & unijoy.js files inside /wp-content/plugins/banglakb folder. Else this plugin won't work.

3. Log-in to your WordPress Control Panel.

4. Go to Plugins option, You'll see BanglKB plugin name there (as given on the above image). Click on Activate link under the Action column. When the plugin gets activated the whole row gets Green.

5. Now go to Users link from options column. Under Users option, click on Your Profile and make sure the Use the visual editor when writing option is unchecked.

6. Now go to Write, You can see 3 new buttons in the formatting bar. They are: Phonetic, Probhat & Toggle. Same Buttons in comment area will also be shown!

7. Click on any of this button to activate the layout. to back to english click english.

If you want to activate bangla input system in any textbox / textarea, you can call this JS method
banglakb(input_box_id, driver);

example:
banglakb('custom_box',phonetic);

Note: do not put quotes around driver parameter!

Some theme may not automatically show the buttons in Comment section. In that case, please add the following code in the expected area of your comment file (usually comments.php);

<?php if(function_exists('wp_banglakb_comments')) wp_banglakb_comments(); ?>

== Frequently Asked Questions ==

== Screenshots ==

== Changelog ==
= 3.2.4 = 
* Fixing empty parameter issue in footer hook
= 3.2.3 =
* Removed redundant JS and hook call

= 3.0 =
* Added new jQuery based input parser and driver from Ekushey.org
* Almost full rewrite of coding
* Removal of Unijoy layout as it is bullshit!
* JS methods are simplified so that you can add bangla input support in custom input box / textareas.
* No template edits are required to show buttons in comment area. 

= 2.1.5 =
* short tage removed

= 2.1.4 =
* wordpress 2.9.1 compatible 
* a bug fixed, showing error in xampp (windows)


= 2.1.3 =
* phonetic keyboard fix in writepanel

= 2.0 =
* keyboard js are updated for bug fixes.
* probhat layout added.

= 1.5 =
* now this plugin will also work in comment form

= 1.0 =
* first release, unijoy, phonetic and english layout are working on post writepanel.

