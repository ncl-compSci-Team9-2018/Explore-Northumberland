// var x = 1;
//
// function quoteManager() {
//   if (window.x = 0) {
//     showQuote();
//   }
//   else if (window.x = 1) {
//     hideQuote();
//   }
// };
//
// function hideQuote() {
//   document.getElementById('quote').style.display = "none";
//   window.x = 0;
// }
//
// function showQuote() {
//   document.getElementById('quote').style.display = "initial";
//   window.x = 1;
// }

function toggle(id){
  $(".tile").hide();
  if(id == "restaurantSpan") {
    $("#restaurantTile").show();
    document.getElementById('features').style.backgroundColor = '#e04233';
    document.getElementById('features').style["transition"] = "2s";
    document.getElementById('download').style.backgroundImage = 'linear-gradient(0deg, #f9b17c, #e04233)';
  }
  else if(id == "activitySpan") {
    $("#activityTile").show();
    document.getElementById('features').style.backgroundColor = '#38b747';
    document.getElementById('features').style["transition"] = "2s";
    document.getElementById('download').style.backgroundImage = 'linear-gradient(0deg, #f9b17c, #38b747)';
    // document.getElementById('download').style.transition = '500ms';
  }
  else if(id == "heritageSpan") {
    $("#heritageTile").show();
    document.getElementById('features').style.backgroundColor = '#b7a245';
    document.getElementById('features').style["transition"] = "2s";
    document.getElementById('download').style.backgroundImage = 'linear-gradient(0deg, #f9b17c, #b7a245)';
    // document.getElementById('download').style.transition = '500ms';
  }
  else if(id == "navigationSpan") {
    $("#navigationTile").show();
    document.getElementById('features').style.backgroundColor = '#3f7faf';
    document.getElementById('features').style["transition"] = "2s";
    document.getElementById('download').style.backgroundImage = 'linear-gradient(0deg, #f9b17c, #3f7faf)';
    // document.getElementById('download').style.transition = '500ms';

  }
  else if(id == "interfaceSpan") {
    $("#interfaceTile").show();
    document.getElementById('features').style.backgroundColor = '#ff9c3a';
    document.getElementById('features').style["transition"] = "2s";
    document.getElementById('download').style.backgroundImage = 'linear-gradient(0deg, #f9b17c, #ff9c3a)';
    // document.getElementById('download').style.transition = '500ms';
  }
};

function hide(id){
  if(id == "restaurantSpan") {
    $("#restaurantTile").hide();
  }
  else if(id == "activitySpan") {
    $("#activityTile").hide();
  }
  else if(id == "heritageSpan") {
    $("#heritageTile").hide();
  }
  else if(id == "navigationSpan") {
    $("#navigationTile").hide();
  }
  else if(id == "interfaceSpan") {
    $("#interfaceTile").hide();
  }
  document.getElementById('features').style.backgroundColor = '#8bbfac';
  document.getElementById('download').style.backgroundImage = 'linear-gradient(0deg, #f9b17c, #8bbfac)';
};

$(document).ready(function() {
  $(".tile").hide();

  var stickyNavTop = $('.topNavbarFeatures').offset().top;

  var stickyNav = function(){
    var scrollTop = $(window).scrollTop();
    if (scrollTop > stickyNavTop) {
      $('.topNavbarFeatures').addClass('sticky');
    } else {
      $('.topNavbarFeatures').removeClass('sticky');
    }
};

stickyNav();

$(window).scroll(function() {
  stickyNav();
});
});
