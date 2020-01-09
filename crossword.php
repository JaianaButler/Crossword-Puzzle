<?php session_start();
  $_SESSION["startTime"] = time();
?>

<!-- FILE CONTAINS CROSSWORD. STARTS TIMER IMMEDIATELY. NAVIGATES TO PROCESS.PHP AFTER SUBMIT BUTTON -->
<html>
<head>
  <title>Tangled Web -- Crossword Puzzle</title>
  <link rel="stylesheet" type="text/css" href="./css/style.css">
</head>

<body>
  <input type="checkbox" name="checkvalid" id="checkvalid" />
  <label for="checkvalid">Check valid letters</label>

<div class="container">
  <div class="crossword-grid">
    <!-- ROW 1 -->
    <input id="item1-1" class="crossword-box" type="text" minlength="1" maxlength="1" pattern="^[fF]{1}$" required="required" value="" />
    <input id="item1-2" class="crossword-box" type="text" minlength="1" maxlength="1" pattern="^[eE]{1}$" required="required" value="" />
    <input id="item1-3" class="crossword-box" type="text" minlength="1" maxlength="1" pattern="^[uU]{1}$" required="required" value="" />
    <input id="item1-4" class="crossword-box" type="text" minlength="1" maxlength="1" pattern="^[dD]{1}$" required="required" value="" />
    <input id="item1-5" class="crossword-box" type="text" minlength="1" maxlength="1" pattern="^[aA]{1}$" required="required" value="" />
    <input id="item1-6" class="crossword-box" type="text" minlength="1" maxlength="1" pattern="^[lL]{1}$" required="required" value="" />

    <!-- ROW 2 -->
    <input id="item2-1" class="crossword-box" type="text" minlength="1" maxlength="1" pattern="^[rR]{1}$" required="required" value="" />
    <span class="crossword-box-blank" id="item2-2"></span>
    <span class="crossword-box-blank" id="item2-3"></span>
    <input id="item2-4" class="crossword-box" type="text" minlength="1" maxlength="1" pattern="^[aA]{1}$" required="required" value="" />
    <span class="crossword-box-blank" id="item2-5"></span>
    <input id="item2-6" class="crossword-box" type="text" minlength="1" maxlength="1" pattern="^[oO]{1}$" required="required" value="" />

    <!-- ROW 3 -->
    <input id="item3-1" class="crossword-box" type="text" minlength="1" maxlength="1" pattern="^[iI]{1}$" required="required" value="" />
    <span class="crossword-box-blank" id="item3-2"></span>
    <input id="item3-3" class="crossword-box" type="text" minlength="1" maxlength="1" pattern="^[eE]{1}$" required="required" value="" />
    <input id="item3-4" class="crossword-box" type="text" minlength="1" maxlength="1" pattern="^[rR]{1}$" required="required" value="" />
    <input id="item3-5" class="crossword-box" type="text" minlength="1" maxlength="1" pattern="^[gG]{1}$" required="required" value="" />
    <input id="item3-6" class="crossword-box" type="text" minlength="1" maxlength="1" pattern="^[oO]{1}$" required="required" value="" />

    <!-- ROW 4 -->
    <input id="item4-1" class="crossword-box" type="text" minlength="1" maxlength="1" pattern="^[vV]{1}$" required="required" value="" />
    <input id="item4-2" class="crossword-box" type="text" minlength="1" maxlength="1" pattern="^[iI]{1}$" required="required" value="" />
    <input id="item4-3" class="crossword-box" type="text" minlength="1" maxlength="1" pattern="^[cC]{1}$" required="required" value="" />
    <input id="item4-4" class="crossword-box" type="text" minlength="1" maxlength="1" pattern="^[tT]{1}$" required="required" value="" />
    <input id="item4-5" class="crossword-box" type="text" minlength="1" maxlength="1" pattern="^[iI]{1}$" required="required" value="" />
    <input id="item4-6" class="crossword-box" type="text" minlength="1" maxlength="1" pattern="^[mM]{1}$" required="required" value="" />

    <!-- ROW 5 -->
    <input id="item5-1" class="crossword-box" type="text" minlength="1" maxlength="1" pattern="^[oO]{1}$" required="required" value="" />
    <span class="crossword-box-blank" id="item5-2"></span>
    <input id="item5-3" class="crossword-box" type="text" minlength="1" maxlength="1" pattern="^[rR]{1}$" required="required" value="" />
    <input id="item5-4" class="crossword-box" type="text" minlength="1" maxlength="1" pattern="^[eE]{1}$" required="required" value="" />
    <input id="item5-5" class="crossword-box" type="text" minlength="1" maxlength="1" pattern="^[fF]{1}$" required="required" value="" />
    <span class="crossword-box-blank" id="item5-6"></span>

    <!-- ROW 6 -->
    <input id="item6-1" class="crossword-box" type="text" minlength="1" maxlength="1" pattern="^[lL]{1}$" required="required" value="" />
    <input id="item6-2" class="crossword-box" type="text" minlength="1" maxlength="1" pattern="^[aA]{1}$" required="required" value="" />
    <input id="item6-3" class="crossword-box" type="text" minlength="1" maxlength="1" pattern="^[uU]{1}$" required="required" value="" />
    <input id="item6-4" class="crossword-box" type="text" minlength="1" maxlength="1" pattern="^[dD]{1}$" required="required" value="" />
    <span class="crossword-box-blank" id="item6-5"></span>
    <span class="crossword-box-blank" id="item6-6"></span>
    
    <!-- LABELS -->
    <div class="crossword-grid crossword-labels">
      <span class="box-label label1"><span class="box-label-text">1</span></span>
      <span class="box-label label2"><span class="box-label-text">2</span></span>
      <span class="box-label label3"><span class="box-label-text">3</span></span>
      <span class="box-label label4"><span class="box-label-text">4</span></span>
      <span class="box-label label5"><span class="box-label-text">5</span></span>
      <span class="box-label label6"><span class="box-label-text">6</span></span>
      <span class="box-label label7"><span class="box-label-text">7</span></span>
      <span class="box-label label8"><span class="box-label-text">8</span></span>
    </div>
  </div>
</div>

<!-- CLUES -->
<div class="crossword-clues">
  <!-- ACROSS -->
  <dl class="clues-list">
    <dt class="clues-list-title">Across</dt>
    <dd class="clue-text">1. Of or relating to the Middle Ages (6)</dd> <!--Feudal-->
    <dd class="clue-text">4. Therefore (4)</dd> <!--Ergo-->
    <dd class="clue-text">6. One that is injured, destroyed, or sacrificed under any of various conditions (6)</dd> <!--Victim-->
    <dd class="clue-text">7. A judge having functions fixed by the rules of a game or sport (3)</dd> <!--Ref-->
    <dd class="clue-text">8. To praise (4)</dd> <!--Laud-->
  </dl>

  <dl class="clues-list">
     <!-- DOWN -->
     <dt class="clues-list-title">Down</dt>
     <dd class="clue-text">1. To behave with lack of seriousness or sense; trifle (6)</dd> <!--Frivol-->
     <dd class="clue-text">2. Moved swiftly (6)</dd> <!--Darted-->
     <dd class="clue-text">3. The art or the process of weaving (4)</dd> <!--Loom-->
     <dd class="clue-text">4. Very light brown in color (4)</dd> <!--Ecru-->
     <dd class="clue-text">5. A computer file format (3)</dd> <!--GIF-->
  </dl>
</div>

<form action="./process.php">
  <div id='button'>
    <?php echo "<input type='submit' value='Record time!'>"; ?>
  </div>
</form>
</body>
</html>