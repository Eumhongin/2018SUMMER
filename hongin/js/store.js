for(var i=0;i<12;i++)
{
  console.log('boxx'+(parseInt(i)+parseInt(1)));

  document.getElementsByClassName('boxx'+(parseInt(i)+parseInt(1)))[0].classList.add("col-4");
  document.getElementsByClassName('boxx'+(parseInt(i)+parseInt(1)))[0].classList.add("col-m-3");
  document.getElementsByClassName('boxx'+(parseInt(i)+parseInt(1)))[0].classList.add("col-s-1");
  document.getElementsByClassName('boxx'+(parseInt(i)+parseInt(1)))[0].style.padding ="3%";

  function hhh(e){
      alert($(e).text());
  }

} 
