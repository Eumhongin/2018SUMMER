var worry = document.getElementsByClassName("worry");
var story = document.getElementsByClassName("story");
var worry_text = document.getElementsByClassName("concern");
var story_text = document.getElementsByClassName("joke");

function click_worry(){
  story_text[0].style.color = "#626262";
  worry_text[0].style.color = "black";

  worry[0].classList.remove("hide");
  story[0].classList.add("hide");

  worry[0].id = 'main';

  waterFall();

  story[0].id = 'main1';


}

function click_story(){
  story_text[0].style.color = "black";
  worry_text[0].style.color = "#626262";

  worry[0].classList.add("hide");
  story[0].classList.remove("hide");

  story[0].id = 'main';

  waterFall();

  worry[0].id = 'main1';

}
