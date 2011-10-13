$(document).ready(function() {
  $('.bingotile').each(function(index){
    $(this).click(function(){$(this).toggleClass('bingoed'); hazBingo();})
  });

  jQuery.fn.compare = function(t) { /*via http://stackoverflow.com/questions/1773069/using-jquery-to-compare-two-arrays */
      if (this.length != t.length) { return false; }
      var a = this.sort(),
          b = t.sort();
      for (var i = 0; t[i]; i++) {
          if (a[i] !== b[i]) { 
                  return false;
          }
      }
      return true;
  };

  function hazBingo(){
    if ( $('.bingoed.row1').compare($('.row1')) || $('.bingoed.row2').compare($('.row2')) || $('.bingoed.row3').compare($('.row3')) || $('.bingoed.row4').compare($('.row4')) || $('.bingoed.row0').compare($('.row0')) ){
      goToNext();
    }
    if ($('.bingoed.col1').compare($('.col1')) || $('.bingoed.col2').compare($('.col2')) || $('.bingoed.col3').compare($('.col3')) || $('.bingoed.col4').compare($('.col4')) || $('.bingoed.col0').compare($('.col0')) ){
      goToNext();
    }
    if ($('#tile0').hasClass('bingoed') && $('#tile6').hasClass('bingoed') && $('#tile12').hasClass('bingoed') && $('#tile18').hasClass('bingoed') && $('#tile24').hasClass('bingoed')){ //diagonal
      goToNext();
    }
    if ($('#tile4').hasClass('bingoed') && $('#tile8').hasClass('bingoed') && $('#tile12').hasClass('bingoed') && $('#tile16').hasClass('bingoed') && $('#tile20').hasClass('bingoed')){ //diagonal
      goToNext();
    }
  }

  function goToNext(){
      window.location = "yougotbingo.php" + getifyWords();
  }

  function getifyWords(){
    var getstring = "?words=";
    $('.bingoed').each(function(){
      var my_text = $(this).text();
      my_text = my_text.replace(" ", "+");
      if(my_text != ""){
        getstring = getstring + my_text + ";";
      }
    });
    return getstring;
  }
});




