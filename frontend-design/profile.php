<?php include('include/header.php'); ?>  
 

<!--------------------=====================User Profile Page For Mobile------------------=====================-->
<div class="user-profile-page">
    <div class="user-profile-head">
        <a href="index.php">
          <i class="fa-solid fa-arrow-left-long"></i></a>
        <div>
            <h1>Loosy</h1>
        </div>
    </div>

    <div class="user-profile-profile-top">
        <div class="user-profile-profile-top-photo">
            <img src="images/feed-5.jpg" alt="">
        </div>
        <div class="user-profile-profile-top-details">
            <div class="user-profile-profile-top-details-top">
                <div class="user-profile-profile-top-details-photo">
                    <img src="images/profile-3.jpg" alt="">
                </div>
                <div class="user-profile-profile-top-details-photo-icons">
                    <i class="fa-solid fa-ellipsis" onclick="openProfileAction()"></i>
                    <a href='#'><button type="button" class="profile-btn" style="display: flex; align-items: center; 
                    justify-content: center;" onclick="editPopUp()">Edit <i class="fa-solid fa-pen" style="font-size: 1rem; margin-left: 0.5rem;color: #1e293b;"></i></button></a>
                    

                </div>
            </div>

            <div class="user-profile-profile-top-details-texts">
                <div class="user-name">
                    <h1>Loosy</h1>
                    <small>--Music Artist</small>
                </div>
          <div class="profile-count-mobile">
             <div class="rating-m">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-regular fa-star"></i>
               <p> 4.0 of 20 reviews</p>
             </div>
             <div class="activities-m">
                <h1>1001</h1>
                <p>No of Activities</p>
             </div>
             <div class="follower-m">
                <h1>500+</h1>
                <p>Followers</p>
             </div>
         </div>
                <div class="user-bio">
                   <p>Music star @ FM Music and Brands, Orange 94.5 and UK Movie star | A Christain | A Single Mother </p>
                </div>
                <div class="user-followers-info">
                    <!-- <div>
                        <small><b>500+</b> followers</small>
                    </div> -->
                    <div>
                        <div class="info-flex">
                            <div class="occupation">
                               <i class="fa-solid fa-briefcase"></i>
                               <small>--Music Artist</small>
                            </div>
                            <div class="location">
                                <i class="fa-solid fa-location-dot"></i>
                                <small>Ondo State, Nigeria</small>
                            </div>
                            <div class="status">
                                <i class="fa-regular fa-heart"></i>
                                <small>Single</small>
                            </div>
                            <div class="mutual">
                                <i class="fa-solid fa-users"></i>
                                <small>5 mutual friends</small>
                            </div>
                            <div class="mutual">
                                <i class="fa-solid fa-user-group"></i>
                                <small>Friends</small>
                            </div>
                        </div>
                    </div>
                </div>

             <div class="recovery-title mt-2">
                <h2>Recovery Services</h2>
             </div>
             <div class="recovery-services-m mb-3">
                <div class="recovery-badge">
                   <i class="fa-solid fa-bus"></i>
                   <small>Bus</small>
                </div>
                <div class="recovery-badge">
                  <i class="fa-solid fa-truck-moving"></i>
                   <small>Lorry</small>
                </div>
                <div class="recovery-badge">
                   <i class="fa-solid fa-truck-front"></i>
                   <small>Truck</small>
                </div>
                <div class="recovery-badge">
                   <i class="fa-solid fa-car"></i>
                   <small>Car</small>
                </div>
                <div class="recovery-badge">
                   <i class="fa-solid fa-motorcycle"></i>
                   <small>Two-Wheeler</small>
                </div>
             </div>

                <button class="create-service">
                     <a href="#">View Business</a>
                </button>
                <button class="profile-msg-btn" type="button">Message</button>
            </div>
            <!-- <p><b>Loosy</b> Activities</p> -->

        </div>
    </div>


    <div class="feed">
        <div class="feed-head">
            <a href="#"><div class="feed-user">
                <div class="rounded-photo">
                    <img src="images/profile-3.jpg" alt="">
                </div>
                <div class="feed-user-name">
                    <p>Loosy</p>
                    <small>1 minute ago</small>
                </div>
            </div></a>
            <a href="#"><i class="fa-solid fa-ellipsis"></i></a>
        </div>
        <div class="feed-text">
            <p>Nice time with friends today</p>
        </div>
        <div class="feed-img">
            <img src="images/f-1.jpg" alt="">
        </div>
        <div class="feed-actions">
            <div class="feed-action">
                <a href="#"><div class="feed-span" onclick="reaction_actions()">
                    <i class="fa-regular fa-heart"></i>
                    <p>2</p>
                </div></a>
                <a href="#"><div class="feed-span">
                    <i class="fa-solid fa-comment-medical"></i>
                    <p>10</p>
                </div></a>
                <a href="#">
                <div class="feed-span">
                    <i class="fa-solid fa-share-nodes"></i>
                    <p>6</p>
                </div></a>
            </div>
            <a href="#"><i class="fa-solid fa-bookmark"></i></a>
        </div>
        <div class="liked-by">
            <img src="images/profile-3.jpg" alt="">
            <p>Liked by <b><a href="#">Carl Mike</a></b> and 1 other people</p>
        </div>
        <a href="#" style="color: #cbcbcb;"><small>View all 10 comments</small></a>
    </div>
    <div class="feed">
                <div class="feed-head">
                    <a href="#"><div class="feed-user">
                        <div class="rounded-photo">
                            <img src="images/profile-3.jpg" alt="">
                        </div>
                        <div class="feed-user-name">
                            <p>Loosy</p>
                            <small>1 minute ago</small>
                        </div>
                    </div></a>
                    <a href="#"><i class="fa-solid fa-ellipsis"></i></a>
                </div>
                <div class="feed-text">
                    <p>Nice time with friends today</p>
                </div>
                <div class="feed-img">
                    <img src="images/pfl-p-1.jpg" alt="">
                </div>
                <div class="feed-actions">
                    <div class="feed-action">
                        <a href="#"><div class="feed-span" onclick="reaction_actions()">
                            <i class="fa-regular fa-heart"></i>
                            <p>2</p>
                        </div></a>
                        <a href="#"><div class="feed-span">
                            <i class="fa-solid fa-comment-medical"></i>
                            <p>10</p>
                        </div></a>
                        <a href="#">
                        <div class="feed-span">
                            <i class="fa-solid fa-share-nodes"></i>
                            <p>6</p>
                        </div></a>
                    </div>
                    <a href="#"><i class="fa-solid fa-bookmark"></i></a>
                </div>
                <div class="liked-by">
                    <img src="images/profile-3.jpg" alt="">
                    <p>Liked by <b><a href="#">Carl Mike</a></b> and 1 other people</p>
                </div>
                <a href="#"><small>View all 10 comments</small></a>
            </div>

    </div>  
<div class="user-profile-page-action">
        <div class="user-profile-action-icons">
            <i class="fa-solid fa-user-plus"></i>
            <p>Follow</p>
        </div>
        <div class="user-profile-action-icons">
            <i class="fa-regular fa-copy"></i>
            <p>Copy link to profile</p>
        </div>
        <div class="user-profile-action-icons">
            <i class="fa-solid fa-message"></i>
            <p>Message</p>
        </div>
        <div class="user-profile-action-icons">
            <i class="fa-solid fa-user-minus"></i>
            <p>Block <b style="color: #fbbf23;">Loosy..</b></p>
        </div>
        <div class="user-profile-action-icons">
            <button type="button" class="action-btn" onclick="closeProfile()"><i class="fa-regular fa-circle-xmark"></i></button>
        </div>
    </div>

</div>
<!-- ---end -->

<!--------------------=====================User Profile Desktop------------------=====================-->
<div class="container desktop-user-profile-page">  
    <div class="row desktop-user-profile-page-head">
       <div class="col-md-12 col-12">
        <div class="desktop-user-profile-page-head-photo">
            <img src="images/feed-5.jpg" alt="">
        </div>
        <div class="desktop-user-profile-container">
            <div class="desktop-user-profile-page-head-info">
                <div class="desktop-user-profile-page-head-user-info">
                    <div class="desktop-user-profile-page-head-info-profile-pic">
                        <img src="images/profile-3.jpg" alt="">
                    </div>
                    <div class="desktop-user-profile-user-info-details">
                        <h1>Loosy</h1>
                        <p>Music Artist</p>
                    </div>
                </div>
                    <div class="profile-more-main">
                        <div class="user-profile-action-icons">
                            <i class="fa-solid fa-user-plus"></i>
                            <p>Follow</p>
                        </div>
                        <div class="user-profile-action-icons">
                            <i class="fa-regular fa-copy"></i>
                            <p>Copy link to profile</p>
                        </div>
                        <div class="user-profile-action-icons">
                            <i class="fa-solid fa-message"></i>
                            <p>Message</p>
                        </div>
                        <div class="user-profile-action-icons">
                             <i class="fa-solid fa-user-minus"></i>
                            <p>Block <b style="color: #fbbf23;">Loosy..</b></p>
                        </div>
                    </div>
                <div class="desktop-user-profile-page-head-info-profile-icon">

                    <i class="fa-solid fa-ellipsis profile-more"></i>
                    

                    <button type="button" class="profile-btn" style="display: flex; align-items: center; cursor: pointer; justify-content: center;" onclick="editPopUp()">
                        Edit <span></span> 
                        <i class="fa-solid fa-pen" style="font-size: 1rem; margin-left: 0.5rem;color: #1e293b;"></i>
                    </button>
                </div>
            </div>
        </div>
       </div>
    </div>
    <div class="row desktop-user-profile-container-flex">
        <div class="col-md-4 col-12 desktop-user-profile-container-flex-left">
         
          <div class="profile-count-main">
             <div class="rating">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-regular fa-star"></i>
               <p> 4.0 of 20 reviews</p>
             </div>
             <div class="activities">
                <h1>1001</h1>
                <p>No of Activities</p>
             </div>
             <div class="follower">
                <h1>500+</h1>
                <p>Followers</p>
             </div>
         </div>

            <div class="desktop-user-profile-container-flex-left-about">
                <h1>About Loosy</h1>
            </div>
            <div class="user-followers-info">
                <div class="info-flex">
                    <div class="occupation">
                        <i class="fa-solid fa-briefcase"></i>
                        <small>Music Artist</small>
                    </div>
                    <div class="location">
                        <i class="fa-solid fa-location-dot"></i>
                        <small>Ondo State, Nigeria</small>
                    </div>
                    <div class="status">
                        <i class="fa-regular fa-heart"></i>
                        <small>Single</small>
                    </div>
                    <div class="mutual">
                        <i class="fa-solid fa-users"></i>
                        <small>5 mutual friends</small>
                    </div>
                    <div class="mutual">
                        <i class="fa-solid fa-user-group"></i>
                        <small>Friends</small>
                    </div>
                    <!-- <div class="mutual">
                        <i class="fa-solid fa-wifi"></i>
                        <small><b>500+</b> followers</small>
                    </div> -->
                </div>
            </div>


             <div class="recovery-title mt-2">
                <h2>Recovery Services</h2>
             </div>
             <div class="recovery-services-m mb-3">
                <div class="recovery-badge">
                   <i class="fa-solid fa-bus"></i>
                   <small>Bus</small>
                </div>
                <div class="recovery-badge">
                  <i class="fa-solid fa-truck-moving"></i>
                   <small>Lorry</small>
                </div>
                <div class="recovery-badge">
                   <i class="fa-solid fa-truck-front"></i>
                   <small>Truck</small>
                </div>
                <div class="recovery-badge">
                   <i class="fa-solid fa-car"></i>
                   <small>Car</small>
                </div>
                <div class="recovery-badge">
                   <i class="fa-solid fa-motorcycle"></i>
                   <small>Two-Wheeler</small>
                </div>
             </div>


            <button class="create-service">
                <a href="#">View Business</a>
            </button>
            <p>Music star @ FM Music and Brands, Orange 94.5 and UK Movie star | A Christain | A Single Mother </p>           
            <button class="profile-msg-btn" type="button" style="display: flex; align-items: center; justify-content: center;"><i class="fa-solid fa-message" style="margin-right: 6px;"></i> Message</button>

        </div>
        <div class="col-md-8 col-12 desktop-user-profile-container-flex-right">
            <div class="feed">
                <div class="feed-head">
                    <a href="#"><div class="feed-user">
                        <div class="rounded-photo">
                            <img src="images/profile-3.jpg" alt="">
                        </div>
                        <div class="feed-user-name">
                            <p>Loosy</p>
                            <small>1 minute ago</small>
                        </div>
                    </div></a>
                    <a href="#"><i class="fa-solid fa-ellipsis"></i></a>
                </div>
                <div class="feed-text">
                    <p>Nice time with friends today</p>
                </div>
                <div class="feed-img">
                    <img src="images/f-1.jpg" alt="">
                </div>
                <div class="feed-actions">
                    <div class="feed-action">
                        <a href="#"><div class="feed-span" onclick="reaction_actions()">
                            <i class="fa-regular fa-heart"></i>
                            <p>2</p>
                        </div></a>
                        <a href="#"><div class="feed-span">
                            <i class="fa-solid fa-comment-medical"></i>
                            <p>10</p>
                        </div></a>
                        <a href="#">
                        <div class="feed-span">
                            <i class="fa-solid fa-share-nodes"></i>
                            <p>6</p>
                        </div></a>
                    </div>
                    <a href="#"><i class="fa-solid fa-bookmark"></i></a>
                </div>
                <div class="liked-by">
                    <img src="images/profile-3.jpg" alt="">
                    <p>Liked by <b><a href="#">Carl Mike</a></b> and 1 other people</p>
                </div>
                <a href="#"><small>View all 10 comments</small></a>
            </div>
            <div class="feed">
                <div class="feed-head">
                    <a href="#"><div class="feed-user">
                        <div class="rounded-photo">
                            <img src="images/profile-3.jpg" alt="">
                        </div>
                        <div class="feed-user-name">
                            <p>Loosy</p>
                            <small>1 minute ago</small>
                        </div>
                    </div></a>
                    <a href="#"><i class="fa-solid fa-ellipsis"></i></a>
                </div>
                <div class="feed-text">
                    <p>Nice time with friends today</p>
                </div>
                <div class="feed-img">
                    <img src="images/pfl-p-1.jpg" alt="">
                </div>
                <div class="feed-actions">
                    <div class="feed-action">
                        <a href="#"><div class="feed-span" onclick="reaction_actions()">
                            <i class="fa-regular fa-heart"></i>
                            <p>2</p>
                        </div></a>
                        <a href="#"><div class="feed-span">
                            <i class="fa-solid fa-comment-medical"></i>
                            <p>10</p>
                        </div></a>
                        <a href="#">
                        <div class="feed-span">
                            <i class="fa-solid fa-share-nodes"></i>
                            <p>6</p>
                        </div></a>
                    </div>
                    <a href="#"><i class="fa-solid fa-bookmark"></i></a>
                </div>
                <div class="liked-by">
                    <img src="images/profile-3.jpg" alt="">
                    <p>Liked by <b><a href="#">Carl Mike</a></b> and 1 other people</p>
                </div>
                <a href="#"><small>View all 10 comments</small></a>
            </div>
           
           
        </div>
    </div>
    
</div>


<!--------------------========User Profile Edit for Desktop----------------==========-->
<div class="user-profile-edit-pop-up-bg">

    <div class="user-profile-edit-pop-up">
        <div class="user-profile-edit-pop-up-head">
            <div>
                <i class="fa-regular fa-circle-xmark" onclick="closeEditPopUp()"></i>
            </div>
            <div class="user-profile-edit-pop-up-head-texts-h1">
                <h1>Edit Your Profile</h1>
            </div>
        </div>
        <!-- Background Photo -->
        <div class="user-profile-edit-pop-up-head-btn">
            <p>Background Photo</p>
            <button type="button" class="edit-btn">Edit<span class="material-icons-sharp">edit</span></button>
        </div>
        <div class="user-profile-edit-pop-up-bg-photo">
            <img src="images/feed-5.jpg" alt="">
        </div>

        <!-- Profile Photo -->
        <div class="user-profile-edit-pop-up-head-btn">
            <p>Profile Photo</p>
            <button type="button" class="edit-btn">Edit<span class="material-icons-sharp">edit</span></button>
        </div>
        <center>
            <div class="user-profile-edit-pop-up-bg-profile-photo">
                <img src="images/profile-3.jpg" alt="">
            </div>
        </center>

        <!-- Bio -->
        <div class="user-profile-edit-pop-up-head-btn">
            <p>Bio</p>
            <button type="button" class="edit-btn">Edit<span class="material-icons-sharp">edit</span></button>
        </div>
        <div class="user-bio">
            <p>Music star @ FM Music and Brands, Orange 94.5 and UK Movie star | A Christain | A Single Mother </p>
         </div>

        <!-- Marital Status -->
        <div class="user-profile-edit-pop-up-head-btn">
            <p>Status</p>
            <button type="button" class="edit-btn">Edit<span class="material-icons-sharp">edit</span></button>
        </div>
        <div class="user-bio-status">
            <p>Single</p>
         </div>

        <!-- Profession -->
        <div class="user-profile-edit-pop-up-head-btn">
            <p>Profession</p>
            <button type="button" class="edit-btn">Edit<span class="material-icons-sharp">edit</span></button>
        </div>
        <div class="user-bio-status">
            <p>Music Artist</p>
         </div>
    </div>

</div>



<?php include('include/footer.php'); ?>
 
</body>
</html>