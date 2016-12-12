
<main>
 <div id="assTask">
   <form action="database.php" method="post">
     <div class="form-group">
     <label for="new_task">Input Task</label>
     <input type="text" name="new_task" id="new_task" />
     <label for="due_date">Task Due Date</label>
     <input type="date" name="due_date" id="due_date" />
   </div>
   <input type="submit" name="submit" />
   </form>
 </div>

  <div id="task">
  <?php include("inc/database.php"); ?>
  </div>
