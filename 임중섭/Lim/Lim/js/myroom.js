var mycontent = document.getElementsByClassName("mycontent");
var myreply = document.getElementsByClassName("myreply");
var sendgift = document.getElementsByClassName("sendgift");
var mycontent_text = document.getElementById("mycontent_text");
var myreply_text = document.getElementById("myreply_text");
var sendgift_text = document.getElementById("sendgift_text");

function click_mycontent() {
  mycontent_text.style.opacity = "1.0";
  myreply_text.style.opacity = "0.2";
  sendgift_text.style.opacity = "0.2";
  mycontent[0].classList.remove("hide");
  myreply[0].classList.add("hide");
  sendgift[0].classList.add("hide");
  mycontent[0].id = 'main';

  waterFall();

  myreply[0].id = 'main1';
  sendgift[0].id = 'main1';


}

function click_myreply() {
  mycontent_text.style.opacity = "0.2";
  myreply_text.style.opacity = "1";
  sendgift_text.style.opacity = "0.2";
  mycontent[0].classList.add("hide");
  myreply[0].classList.remove("hide");
  sendgift[0].classList.add("hide");
  mycontent[0].id = 'main';
  myreply[0].id = 'main';
  //flag = true;
  console.log('i am going!');
  waterFall();
  mycontent[0].id = 'main1';
  sendgift[0].id = 'main1';

}

function click_sendgift() {
  mycontent_text.style.opacity = "0.2";
  myreply_text.style.opacity = "0.2";
  sendgift_text.style.opacity = "1.0";
  mycontent[0].classList.add("hide");
  myreply[0].classList.add("hide");
  sendgift[0].classList.remove("hide");
  mycontent[0].id = 'main';
  sendgift[0].id = 'main';
  waterFall();
  mycontent[0].id = 'main1';
  myreply[0].id = 'main1';

}
