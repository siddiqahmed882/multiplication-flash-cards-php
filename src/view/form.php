<main class="main-entry">
  <h2 id="enterNumber">Enter Number</h2>
  <form action="<?php $_SERVER['PHP_SELF'] ?>" method="GET" class="main-entry__form">
    <input 
      class="main-entry__input"
      id="num"
      name="num"
      type="text"
      aria-labelledby="entryNumber"
      maxlength="2"
      autofocus
      required
    >
    <button class="main-entry__button">GO!</button>
  </form>
</main>