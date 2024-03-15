//-----confirm---popup-----//

var PopUp = document.querySelector(".friends-right-pop-up");

function launchPopUp(){
    PopUp.classList.toggle("friends-right-pop-up-click");
}

function cancel(){
    PopUp.classList.remove("friends-right-pop-up-click")
}
//---end-----//


//---------mobile---top--option---//

var mobileTopOptions = document.querySelector(".mobile-top-options");
var off = document.querySelector(".mobile-top-options .off");


function openTopOption(){
    mobileTopOptions.classList.toggle("mobile-top-options-close");
    off.style.display = "none";
}

function closeTopOption(){
    mobileTopOptions.classList.toggle("mobile-top-options-close");
    off.style.display = "block";
}
//--------end---//




// -----Noitification----Start---------//

 var notification = document.querySelector(".notifications"); 

function notification_toggle(){
    notification.classList.toggle("notifications-hide");
}

function notification_close(){
    notification.classList.remove("notifications-hide");
}
// ----------end---------//


// -------profile---more----//
$(document).ready(function(){ 
    $(".profile-more").click(function(){
      $(".profile-more-main").toggle();
    });
  });
// ----end------//



  //----mobile--menue--start------------//
    $(document).ready(function(){
var mobileMenu = document.querySelector(".mobile-menu");
var mobileMenuBtn = document.querySelector(".mobile-menu-open");
var mobileMenuCloseBtn = document.querySelector(".mobile-menu-close-btn");

mobileMenuBtn.onclick = ()=>{
    mobileMenu.classList.toggle("mobile-menu-height");
}

mobileMenuCloseBtn.onclick = ()=>{
    mobileMenu.classList.remove("mobile-menu-height");
}
});  

   //------------end------------//




//----create--post--start------------//

    $(document).ready(function(){
        $(".input-btn").click(function(){ 
   $(".flex").css({"display":"block"});
});
   
     $(".input-btn-close").click(function(){ 
   $(".flex").css({"display":"none"});
});

        });



$(document).ready(function(){
        $(".mbl-popup").click(function(){ 
   $(".flex").css({"display":"block"});
});
   
     $(".input-btn-close").click(function(){ 
   $(".flex").css({"display":"none"});
});

    });    

//----end------------//



// -----setting menue--start---//

var settings_menu = document.querySelector(".settings-menu");

// For the Create Post Pop-up for Desktop
var clickInput = document.querySelector(".input-btn");
var inputFocus = document.querySelector(".new-post-input textarea");
var flex = document.querySelector(".flex");
var closes = document.querySelector(".close-function");




function settings_menu_toggle(){
    settings_menu.classList.toggle("settings-menu-height")
}

clickInput.onclick = ()=>{
    flex.style.display = "block";
    inputFocus.focus();
}

closes.onclick = ()=>{
    flex.style.display = "none";
}

// -----------end---------//


//-------edit---profile--poppup------//



function editPopUp(){
   var editPop = document.querySelector(".user-profile-edit-pop-up-bg");
    editPop.style.display = "block";
} 

function closeEditPopUp(){
  var editPop = document.querySelector(".user-profile-edit-pop-up-bg");
    editPop.style.display = "none";
}

// ------end------//







function openProfileAction(){ 
   var openProfile = document.querySelector(".user-profile-page-action");
    openProfile.classList.toggle("user-profile-page-action-click");
}

function closeProfile(){
  var openProfile = document.querySelector(".user-profile-page-action");
    openProfile.classList.remove("user-profile-page-action-click");
}





