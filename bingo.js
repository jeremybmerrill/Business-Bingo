$(document).ready(function() {
  $('#a1').click(function(){
    $('#a1').toggleClass("bingoed");
    hazBingo();
  });
  $('#a2').click(function(){
    $('#a2').toggleClass("bingoed");
    hazBingo();
  });
  $('#a3').click(function(){
    $('#a3').toggleClass("bingoed");
    hazBingo();
  });
  $('#a4').click(function(){$('#a4').toggleClass('bingoed'); hazBingo();});
  $('#a5').click(function(){$('#a5').toggleClass('bingoed'); hazBingo();});
  $('#a6').click(function(){$('#a6').toggleClass('bingoed'); hazBingo();});
  $('#a7').click(function(){$('#a7').toggleClass('bingoed'); hazBingo();});
  $('#a8').click(function(){$('#a8').toggleClass('bingoed'); hazBingo();});
  $('#a9').click(function(){$('#a9').toggleClass('bingoed'); hazBingo();});
  $('#a10').click(function(){$('#a10').toggleClass('bingoed'); hazBingo();});
  $('#a11').click(function(){$('#a11').toggleClass('bingoed'); hazBingo();});
  $('#a12').click(function(){$('#a12').toggleClass('bingoed'); hazBingo();});
  $('#a13').click(function(){$('#a13').toggleClass('bingoed'); hazBingo();});
  $('#a14').click(function(){$('#a14').toggleClass('bingoed'); hazBingo();});
  $('#a15').click(function(){$('#a15').toggleClass('bingoed'); hazBingo();});
  $('#a16').click(function(){$('#a16').toggleClass('bingoed'); hazBingo();});
  $('#a17').click(function(){$('#a17').toggleClass('bingoed'); hazBingo();});
  $('#a18').click(function(){$('#a18').toggleClass('bingoed'); hazBingo();});
  $('#a19').click(function(){$('#a19').toggleClass('bingoed'); hazBingo();});
  $('#a20').click(function(){$('#a20').toggleClass('bingoed'); hazBingo();});
  $('#a21').click(function(){$('#a21').toggleClass('bingoed'); hazBingo();});
  $('#a22').click(function(){$('#a22').toggleClass('bingoed'); hazBingo();});
  $('#a23').click(function(){$('#a23').toggleClass('bingoed'); hazBingo();});
  $('#a24').click(function(){$('#a24').toggleClass('bingoed'); hazBingo();});
  $('#a25').click(function(){$('#a25').toggleClass('bingoed'); hazBingo();});
  $('#a26').click(function(){$('#a26').toggleClass('bingoed'); hazBingo();});
  $('#a27').click(function(){$('#a27').toggleClass('bingoed'); hazBingo();});
  $('#a28').click(function(){$('#a28').toggleClass('bingoed'); hazBingo();});
  $('#a29').click(function(){$('#a29').toggleClass('bingoed'); hazBingo();});
  $('#a0').click(function(){$('#a0').toggleClass('bingoed'); hazBingo();});


  /* if you get bingo */
  function hazBingo(){
    if ( $('#a0').hasClass('bingoed') && $('#a1').hasClass('bingoed') && $('#a2').hasClass('bingoed') && $('#a3').hasClass('bingoed') && $('#a4').hasClass('bingoed') ){
      window.location = "yougotbingo.php";
    }
    if ($('#a5').hasClass('bingoed') && $('#a6').hasClass('bingoed') && $('#a7').hasClass('bingoed') && $('#a8').hasClass('bingoed') && $('#a9').hasClass('bingoed')){
      window.location = "yougotbingo.php";
    }
    if ($('#a10').hasClass('bingoed') && $('#a11').hasClass('bingoed') && $('#a12').hasClass('bingoed') && $('#a13').hasClass('bingoed') && $('#a14').hasClass('bingoed')){
      window.location = "yougotbingo.php";
    }
    if ($('#a15').hasClass('bingoed') && $('#a16').hasClass('bingoed') && $('#a17').hasClass('bingoed') && $('#a18').hasClass('bingoed') && $('#a19').hasClass('bingoed')){
      window.location = "yougotbingo.php";
    }
    if ($('#a20').hasClass('bingoed') && $('#a21').hasClass('bingoed') && $('#a22').hasClass('bingoed') && $('#230').hasClass('bingoed') && $('#a24').hasClass('bingoed')){
      window.location = "yougotbingo.php";
    }
    if ($('#a0').hasClass('bingoed') && $('#a5').hasClass('bingoed') && $('#a10').hasClass('bingoed') && $('#a15').hasClass('bingoed') && $('#a20').hasClass('bingoed')){
      window.location = "yougotbingo.php";
    }
    if ($('#a1').hasClass('bingoed') && $('#a6').hasClass('bingoed') && $('#a11').hasClass('bingoed') && $('#a16').hasClass('bingoed') && $('#a21').hasClass('bingoed')){
      window.location = "yougotbingo.php";
    }
    if ($('#a2').hasClass('bingoed') && $('#a7').hasClass('bingoed') && $('#a12').hasClass('bingoed') && $('#a17').hasClass('bingoed') && $('#a22').hasClass('bingoed')){
      window.location = "yougotbingo.php";
    }
    if ($('#a3').hasClass('bingoed') && $('#a8').hasClass('bingoed') && $('#a13').hasClass('bingoed') && $('#a18').hasClass('bingoed') && $('#a22').hasClass('bingoed')){
      window.location = "yougotbingo.php";
    }
    if ($('#a4').hasClass('bingoed') && $('#a9').hasClass('bingoed') && $('#a14').hasClass('bingoed') && $('#a19').hasClass('bingoed') && $('#a23').hasClass('bingoed')){
      window.location = "yougotbingo.php";
    }
    if ($('#a0').hasClass('bingoed') && $('#a6').hasClass('bingoed') && $('#a12').hasClass('bingoed') && $('#a18').hasClass('bingoed') && $('#a24').hasClass('bingoed')){
      window.location = "yougotbingo.php";
    }
    if ($('#a4').hasClass('bingoed') && $('#a8').hasClass('bingoed') && $('#a12').hasClass('bingoed') && $('#a16').hasClass('bingoed') && $('#a20').hasClass('bingoed')){
      window.location = "yougotbingo.php";
    }
  }

  function getifyWords(){
    var getstring = "?words=";
    var bingoed = $('.bingoed');
    for (elem in bingoed){
      var my_text = $(elem).text();
      my_text = my_text.replace(" ", "+");
      if(my_text != ""){
        getstring = getstring + my_text + ";";
      }
    }
    return getstring;
  }
});




