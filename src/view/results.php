<main class="main-results" aria-label="flash card cotainer">
  <?php
    $cards = null;
    for($i = 1; $i <= 12; $i++){
      $result = $number * $i;
      $card = "<div class='card' tabindex='0' 
                aria-label='$number mutliplied by $i equals $result'>
                <div class='card-front'> $number x $i </div>
                <div class='card-back' aria-label='$number mutliplied by $i equals $result'>
                  $result
                </div>
              </div>";
      $cards .= $card;
    }
    echo $cards
  ?>
</main>