$(document).ready(function () {
    $('#gold').click(function () {
      $.ajax({
          url: "gold.php",
          case: false,
          success: function (result) {
            $('#gold_price').html(result);
            $('#name_gold').text('965 GOLD PRICE UPDATE');
          }
        });
    });
    $('#gold_bar').click(function () {
      $.ajax({
        url: "gold_bar.php", 
        case: false, 
        success: function (result) {
          $('#gold_price').html(result);
          $('#name_gold').text('965 GOLD BAR PRICE UPDATE');
        }
      });
    });

    $('#gold_m').click(function () {
      $.ajax({
          url: "gold.php",
          case: false,
          success: function (result) {
            $('#gold_price_m').html(result);
            $('#name_gold_m').text('965 GOLD PRICE UPDATE');
          }
        });
    });
    $('#gold_bar_m').click(function () {
      $.ajax({
        url: "gold_bar.php", 
        case: false, 
        success: function (result) {
          $('#gold_price_m').html(result);
          $('#name_gold_m').text('965 GOLD BAR PRICE UPDATE');
        }
      });
    });

  });

