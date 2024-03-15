


<?php include('include/header.php'); ?>   
 


<section>
    <div class="container-fluid">
        <div class="row">
           <div class="col-md-3 col-12">
           <div class="left-side">
            <ul>
                <li><a href="#">
                    <div class="aside-user-profile">
                        <div class="rounded-photo online">
                            <img src="images/profile-3.jpg" alt="">
                        </div>
                        <div class="profile-name">
                            <h2>Loosy</h2>
                        </div>
                    </div>
                </a></li>
                <li><a href="index-f.php">
                    <i class="fa-solid fa-user-group"></i>
                    <h2>Friends</h2>
                </a></li>
                <li><a href="#">
                    <i class="fa-solid fa-users"></i>
                    <h2>Groups</h2>
                </a></li>
                <li><a href="#">
                    <i class="fa-solid fa-store"></i>
                    <h2>Marketplace</h2>
                </a></li>
                <li><a href="#">
                    <i class="fa-solid fa-message"></i>
                    <h2>Messenger</h2>
                </a></li>
            <hr>
                <li><a href="#">
                    <i class="fa-solid fa-bell"></i>
                    <h2>Notification</h2>
                </a></li>
                <li><a href="#">
                    <i class="fa-solid fa-gear"></i>
                    <h2>Settings</h2>
                </a></li>
                <li>
                    <a href="#">
                        <div class="a">
                            <i class="fa-solid fa-right-from-bracket"></i>
                            <h2>Logout</h2>
                        </div>
                    </a>
                </li>
            </ul>
           </div>
         </div>




           <div class="col-md-6 col-12">
            <!------MIDDLE===================================-->
        <div class="middle">
            <div class="post">
                <div class="create-post">
                    <a href="#"><div class="rounded-photo online">
                        <img src="images/profile-3.jpg" alt="">
                    </div></a>
                    <div class="input-btn">
                        <input type="text" placeholder="What's on your mind?" class="popup">
                        <button type="button" class="btn">Post</button>
                    </div>
                </div>
            </div>


             

            <!------------------------------------FEEDS------------------------------------>
            <a href="#" style="text-decoration: none;">
                <button style="width: 10rem; height: 2rem; margin-top: 1rem; border-radius: 20px; margin-right: 1rem; background: #fbbf23; color: #1e293b;">Register</button>
            </a>
            <a href="#" style="text-decoration: none;">
                <button style="width: 10rem; height: 2rem; margin-top: 1rem; border-radius: 20px; background: #fbbf23; color: #1e293b;">Sign in</button>
            </a>


            <div class="feeds">
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
                    <a href="#"><div class="feed-img">
                        <img src="images/f-1.jpg" alt="">
                    </div></a>
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
                        <a href="#">
                            <i class="fa-solid fa-bookmark"></i>
                        </a>
                    </div>
                    <div class="liked-by">
                        <img src="images/profile-5.jpg" alt="">
                        <p>Liked by <b><a href="#">Beatriz Schalka</a></b> and 1 other people</p>
                    </div>
                    <a href="#" style="color: #cbcbcb;"><small>View all 10 comments</small></a>
                </div>
               
               
            </div>
        </div>


           </div>


              <div class="col-md-3 col-12">
                   
                   <!--====================================Right==================================== -->
        <div class="right">
            <div class="nofications">
                <div class="right-heading">
                    <div>
                        <h1>Notification</h1>
                    </div>
                    <div>
                        <i class="fa-solid fa-bell not-icon"></i>
                    </div>
                </div>
                <div class="all-notification">
                    <a href="#">
                        <div class="right-notication">
                            <div class="notification-photo">
                                <img src="images/profile-5.jpg" alt="">
                            </div>
                            <div class="notification-details">
                                <h2>Beatriz Schalka</h2>
                                <p>Has a new post</p>
                                <small>1 minutes ago</small>
                            </div>
                        </div>
                    </a>
                    <a href="#">
                        <div class="right-notication">
                            <div class="notification-photo">
                                <img src="images/profile-1.jpg" alt="">
                            </div>
                            <div class="notification-details">
                                <h2>Loosy Mike</h2>
                                <p>Commented on your post</p>
                                <small>2 minutes ago</small>
                            </div>
                        </div>
                    </a>
                    
                </div>
            </div>
            <div class="contacts">
                <div class="right-heading">
                    <h1>Active Contacts</h1>
                </div>

                <div class="active-contacts">
                    <div class="active-users">
                        <a href="#">
                            <div class="aside-user-profile">
                                <div class="rounded-photo online">
                                    <img src="images/profile-3.jpg" alt="">
                                </div>
                                <div class="profile-name">
                                    <h2>Loosy Jack</h2>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="active-users">
                        <a href="#">
                            <div class="aside-user-profile">
                                <div class="rounded-photo online">
                                    <img src="images/profile-3.jpg" alt="">
                                </div>
                                <div class="profile-name">
                                    <h2>Loosy Jack</h2>
                                </div>
                            </div>
                        </a>
                    </div>
                    
                    <div class="active-users">
                        <a href="#">
                            <div class="aside-user-profile">
                                <div class="rounded-photo online">
                                    <img src="images/profile-3.jpg" alt="">
                                </div>
                                <div class="profile-name">
                                    <h2>Loosy Jack</h2>
                                </div>
                            </div>
                        </a>
                    </div>
            </div>
        </div>
    </div>

              </div>



        </div>
    </div>
</section>


<?php include('include/footer.php'); ?>



</body>

</html>