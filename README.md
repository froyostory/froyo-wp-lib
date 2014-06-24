FWTL: Froyo Wordpress Theme Library (0.1)
=========================================

FWTL is a library for Wordpress theme development mantained by Froyo Story Developer Team. We created it based on our daily work for developing client's website. Writing many functions or pasting many snippet codes in `functions.php` is a usual circumstance that many theme developer faced. We also do that. Therefore we created FWTL to solve that problem and make the code convenient to reuse in every project.

##Installation
Download or clone this repository to your Wordpress theme folder, then write this line below to `functions.php`:
    
    require_once "froyo-wp-lib/loader.php";
Load the necessary class at the first time:
    
    Froyo_Load::loadClass('Front_Editor');
    Froyo_Load::loadClass('Base');
    Froyo_Load::loadClass('Admin_Option');

##Usage
Call the static method after you load the class in `functions.php`, wherever you need. For example:

__Get link of the page from its title__

In `functions.php`:

    Froyo_Load::loadClass('Base');

In `header.php`:
    
    <ul>
      <li><a href="<?php echo Base::pageLinkByTitle('My Awesome Page'); ?>">My Awesome Page</a></li>
      <li><a href="<?php echo Base::pageLinkByTitle('Contact Us'); ?>">Contact Us</a></li>
    </ul>

__Create Post Type__

In `functions.php`:

    Froyo_Load::loadClass('Admin_Option'); // just load the class only in one time

    $pt_arg = array(array('public' => true, 'label'  => 'Books'), array('public' => true, 'label'  => 'Gallery'));
    Admin_Option::registerPostType($pt_arg);

For any other methods you can look at the code. There are documentations above every method. We will create documentation later in the wiki.

##Contributing
We'd love to have your help in making FWTL better. If you run into problems, please open an issue, or better yet fork and send us pull request.

##License
FWTL is releasing under MIT license.    