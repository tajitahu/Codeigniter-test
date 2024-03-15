<!DOCTYPE html>
<html>
<head>
	<title>Joseph - Codeigniter</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
    
    <!-- StyleSheet -->
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/responsive.css">  
    
   
</head>
<body>
<nav class="desktop">
    <div class="container-fluid full-container">
        <div class="nav-left">
            <div class="rounded-photo logo">
                <!-- <img src="images/newBaeLogo.png" alt=""> -->
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512z"/></svg>
            </div>
            <form class="ml-2 rounded position-relative" style="margin-left:1rem;">
                 
                 <input class="form-control ps-5 bg-light rounded-pill" type="search" placeholder="Search..." aria-label="Search">
                 <button class="btn bg-transparent px-2 py-0 position-absolute top-50 start-0 translate-middle-y" type="submit">
                    <i class="fa fa-search"></i>
                 </button>
           </form> 
        </div>
        <div class="nav-center">
            <ul>
                <li><a href='index.php'>
                    <i class="fa-solid fa-house"></i>
                </a></li>
                <li><a href="index-f.php">
                    <i class="fa-solid fa-users"></i>
                </a></li>
                <li><a href="#">
                    <i class="fa-solid fa-message"></i>
                </a></li>
            </ul>
        </div>
        <div class="nav-right">
            <a href="profile.php">
                <div class="nav-user-profile">
                <div class="rounded-photo online">
                    <img src="images/profile-3.jpg" alt="">
                </div>
                <div class="profile-name">
                    <h1>Loosy</h1>
                </div>
            </div>
        </a>
            <ul class="pl-0">
                <li onclick="notification_toggle()">
                    <i class="fa-solid fa-bell "></i>
                </li>
                <li class="drop-arrow" onclick="settings_menu_toggle()">
                    <i class="fa-solid fa-caret-down"></i>
                </li>
            </ul>
        </div>

        <!-------------------------Setting Menu------------------------->
        <div class="settings-menu">
            <div class="settings-menu-inner">
                <div class="aside-user-profile">
                    <div class="rounded-photo online">
                        <img src="images/profile-3.jpg" alt="">
                    </div>
                    <div class="profile-name">
                        <h2>Loosy</h2>
                        <a href="#"><small>See your profile </small></a>
                    </div>
                </div>
                <hr>
                <a href="#"><div class="aside-user-profile">
                    <div class="icons-menu">
                        <i class="fa-solid fa-circle-exclamation"></i>
                    </div>
                    <div class="profile-name">
                        <h2>Give Feedback</h2>
                        <a href="#"><small>Help us to improve on our design</small></a>
                    </div>
                </div></a>
                <hr>
                <a href="#"><div class="setting-links">
                    <i class="fa-solid fa-gear"></i>
                    <div class="links-text">
                        <div>
                            <h2>Settings & Privacy</h2>
                        </div>
                        <div>
                            <i class="fa-solid fa-chevron-right"></i>
                        </div>
                    </div>
                </div></a>
                <a href="#"><div class="setting-links">
                    <i class="fa-solid fa-circle-question"></i>
                    <div class="links-text">
                        <h2>Help & Support</h2>
                        <i class="fa-solid fa-chevron-right"></i>
                    </div>
                </div></a>
                
                <a href="#"><div class="setting-links">
                    <i class="fa-solid fa-right-from-bracket"></i>
                    <div class="links-text">
                        <h2>Logout</h2>
                        <i class="fa-solid fa-chevron-right"></i>
                    </div>
                </div></a>
            </div>
        </div>
    </div>
</nav>











<!-----------------------------Nav For Mobile----------------------------->
    <div class="mobile-container">
        <div class="mobile">
                <div><a href="index.php">
                    <i class="fa-solid fa-house"></i>
                </a></div>
                <div><a href="index-f.php">
                    <i class="fa-solid fa-users"></i>
                </a></div>
                <div><a href="#">
                    <i class="fa-solid fa-circle-plus mbl-popup"></i>
                </a></div>
                <div onclick="notification_toggle()"><a href="#">
                    <i class="fa-solid fa-bell"></i>
                </a></div>
                <div><a href="#">
                    <i class="fa-solid fa-bars mobile-menu-open"></i>
                    </a>
                </div>                    
        </div>
    </div>

<!------------------------------For Mobile Page Header------------------------------>
<div class="mobile-page-header">
    <div class="mobile-page-header-img">
        <a href="profile.php"><img src="images/profile-3.jpg" alt=""></a>
    </div>
    <form class="ml-2 rounded position-relative" style="margin-left:1rem;">
                 <input class="form-control ps-5 bg-light rounded-pill" type="search" placeholder="Search..." aria-label="Search">
                 <button class="btn bg-transparent px-2 py-0 position-absolute top-50 start-0 translate-middle-y" type="submit">
                    <i class="fa fa-search"></i>
                 </button>
           </form>
    <a href="#"><i class="fa-solid fa-message"></i></a>
</div>



<!-----------------------------Mobile Menu----------------------------->
    <div class="mobile-menu">
        <a href="#" class="mobile-menu-profile">
            <div class="mobile-menu-profile-photo">
                <img src="images/profile-3.jpg" alt="">
            </div>
            <div class="mobile-menu-profile-name">
                <p>Loosy</p>
            </div>
        </a>

        <div class="mobile-m">
            <a href="#">
               <i class="fa-solid fa-user-group"></i>
               <p>Friends</p>
            </a>
       </div>

        <div class="mobile-m"><a href="#">
            <i class="fa-solid fa-users"></i>
            <p>Groups</p>
        </a></div>

        <div class="mobile-m"><a href="#">
            <i class="fa-solid fa-store"></i>
            <p>Marketplace</p>
        </a></div>

        <div class="mobile-m"><a href="#">
            <i class="fa-solid fa-message"></i>
            <p>Messenger</p>
        </a></div>

        <div class="mobile-m"><a href="#">
            <i class="fa-solid fa-bell"></i>
            <p>Notification</p>
        </a></div>

        <div class="mobile-m"><a href="#">
            <i class="fa-solid fa-gear"></i>
            <p>Settings & Privacy</p>
        </a></div>


        <div class="mobile-m">
            <a href="#">
              <i class="fa-solid fa-circle-question"></i>
              <p>Help & Support</p>
           </a>
        </div>
        <div class="mobile-menu-close-btn">
            <!-- <i class="fa-solid fa-xmark "></i> -->
            <i class="fa-regular fa-circle-xmark mobile-menu-close-btn"></i>
        </div>
    </div>

<!------------------------End of Mobile Navigation------------------------>



<!----------------------POP For Desktop Notifications---------------------->
    <div class="notifications">
        <div class="notification-head">
            <i class="fa-regular fa-circle-xmark notifications-close-btn" onclick="notification_close()"></i>
        </div>
        <h1>Latest</h1>
        <a href="#" class="notification-profile">
            <div class="notification-details">
                <div class="notification-profile-photo">
                    <img src="images/profile-1.jpg" alt="">
                </div>
                <div class="notification-profile-name">
                    <h1>Mary Peace</h1>
                    <p>Commented on your post</p>
                    <small>Just now</small>
                </div>
            </div>
            <div class="active-shape">
                <i class="fa-solid fa-circle"></i>
            </div>
        </a>

        <h1>Others</h1>
        <a href="#" class="notification-profile">
            <div class="notification-details">
                <div class="notification-profile-photo">
                    <img src="images/profile-1.jpg" alt="">
                </div>
                <div class="notification-profile-name">
                    <h1>Mary Peace</h1>
                    <p>Commented on your post</p>
                    <small>Just now</small>
                </div>
            </div>
            <div class="active-shape">
                <i class="fa-solid fa-circle read"></i>
            </div>
        </a>
        <a href="#" class="notification-profile">
            <div class="notification-details">
                <div class="notification-profile-photo">
                    <img src="images/profile-2.jpg" alt="">
                </div>
                <div class="notification-profile-name">
                    <h1>Mary Peace</h1>
                    <p>Commented on your post</p>
                    <small>Just now</small>
                </div>
            </div>
            <div class="active-shape">
                <i class="fa-solid fa-circle read"></i>
            </div>
        </a>
        <a href="#" class="notification-profile">
            <div class="notification-details">
                <div class="notification-profile-photo">
                    <img src="images/profile-3.jpg" alt="">
                </div>
                <div class="notification-profile-name">
                    <h1>Mary Peace</h1>
                    <p>Commented on your post</p>
                    <small>Just now</small>
                </div>
            </div>
            <div class="active-shape">
                <i class="fa-solid fa-circle read"></i>
            </div>
        </a>
        <a href="#" class="notification-profile">
            <div class="notification-details">
                <div class="notification-profile-photo">
                    <img src="images/profile-3.jpg" alt="">
                </div>
                <div class="notification-profile-name">
                    <h1>Mary Peace</h1>
                    <p>Commented on your post</p>
                    <small>Just now</small>
                </div>
            </div>
            <div class="active-shape">
                <i class="fa-solid fa-circle read"></i>
            </div>
        </a>
        <a href="#" class="notification-profile">
            <div class="notification-details">
                <div class="notification-profile-photo">
                    <img src="images/profile-5.jpg" alt="">
                </div>
                <div class="notification-profile-name">
                    <h1>Mary Peace</h1>
                    <p>Commented on your post</p>
                    <small>Just now</small>
                </div>
            </div>
            <div class="active-shape">
                <i class="fa-solid fa-circle read"></i>
            </div>
        </a>
        
    </div>
    <!----------------------end---------------------->



    <!-- ================Create Post Form================ -->
    <div class="flex" style="display: none;">
        <div class="newpost">
                <div class="new-post-head desktop-class">
                    <h1>Create Post</h1>
                    
                    <i class="fa-regular fa-circle-xmark input-btn-close"></i>
                </div>
                <hr>
        <form action="#" method="POST">
                <div class="feed-head">
                    <a href="#"><div class="feed-user">
                        <div class="rounded-photo newpost-img">
                            <img src="images/profile-5.jpg" alt="">
                        </div>
                        <div class="feed-user-name">
                            <p>Loosy</p>
                            <select name="" id="">
                                <option value="Public">Public</option>
                                <option value="Friends">Friends</option>
                                <option value="Only me">Only me</option>
                            </select>
                        </div>
                    </div></a>
                </div>
                <div class="new-post-input">
                    <textarea name="" id="" placeholder="What's on your mind Mike?"></textarea>
                </div>
                <div class="new-post-add">
                    <div class="new-post-add-text">
                        <h1>Add to your post</h1>
                    </div>
                    <div class="new-post-span">
                        <a href="#">
                            <i class="fa-solid fa-images"></i>
                        </a>
                        <a href="#">
                            <i class="fa-brands fa-youtube"></i>
                        </a>
                        <a href="#">
                            <i class="fa-solid fa-user-plus"></i>
                        </a>
                    </div>
                </div>
                <button type="submit" class="post-btn">Post</button>
        </form>
        </div>
    </div>

    <!----------end------- -->
