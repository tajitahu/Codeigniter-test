<?php include('include/header.php'); ?>



<div class="friends">

<?php include('include/left.php'); ?>
   


    <div class="friends-right">
        
        <div class="friends-right-head">
            <h1>Your Connections</h1>
        </div>
        <div class="friends-right-all-cards">
            <div class="friends-right-cards">
                <div class="friends-right-cards-wall-photo">
                    <img src="images/feed-5.jpg" alt="">
                </div>
                <center>
                    <div class="friends-right-cards-profile-photo">
                        <img src="images/profile-5.jpg" alt="">
                    </div>
                    <div class="friends-right-cards-texts">
                        <h1>Loosy</h1>
                        <p>6 mutual friends</p>
                        <button type="button" class="friends-card-btn" onclick="launchPopUp()">Unfollow</button>
                        <button type="button" class="msg-btn">Message</button>
                        
                    </div>
                </center>
            </div>
            <div class="friends-right-cards">
                <div class="friends-right-cards-wall-photo">
                    <img src="images/feed-5.jpg" alt="">
                </div>
                <center>
                    <div class="friends-right-cards-profile-photo">
                        <img src="images/profile-5.jpg" alt="">
                    </div>
                    <div class="friends-right-cards-texts">
                        <h1>Loosy</h1>
                        <p>6 mutual friends</p>
                        <button type="button" class="friends-card-btn" onclick="launchPopUp()">Unfollow</button>
                        <button type="button" class="msg-btn">Message</button>
                        
                    </div>
                </center>
            </div>
            <div class="friends-right-cards">
                <div class="friends-right-cards-wall-photo">
                    <img src="images/feed-5.jpg" alt="">
                </div>
                <center>
                    <div class="friends-right-cards-profile-photo">
                        <img src="images/profile-1.jpg" alt="">
                    </div>
                    <div class="friends-right-cards-texts">
                        <h1>Loosy</h1>
                        <p>6 mutual friends</p>
                        <button type="button" class="friends-card-btn" onclick="launchPopUp()">Unfollow</button>
                        <button type="button" class="msg-btn">Message</button>
                        
                    </div>
                </center>
            </div>
            <div class="friends-right-cards">
                <div class="friends-right-cards-wall-photo">
                    <img src="images/feed-5.jpg" alt="">
                </div>
                <center>
                    <div class="friends-right-cards-profile-photo">
                        <img src="images/profile-1.jpg" alt="">
                    </div>
                    <div class="friends-right-cards-texts">
                        <h1>Loosy</h1>
                        <p>6 mutual friends</p>
                        <button type="button" class="friends-card-btn" onclick="launchPopUp()">Unfollow</button>
                        <button type="button" class="msg-btn">Message</button>
                        
                    </div>
                </center>
            </div>
        </div>
    </div>

    <div class="friends-right-pop-up">
        <div class="friends-right-confirm-pop-up">
            <h1>Confirm Unfollow</h1>
            <div class="buttons">
                <button type="button" class="confirm-btn">Confirm</button>
                <button type="button" class="confirm-btn color-danger" onclick="cancel()">Cancel</button>
            </div>
        </div>
    </div>
</div>



<?php include('include/footer.php'); ?>