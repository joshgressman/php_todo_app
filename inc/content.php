
<main>
 <div id="addTask">
   <form action="inc/post.php" method="post">
     <div class="row">
       <div class="col-md-5">
         <label for="new_task">Input Task</label>
         <input type="text" name="new_task" id="new_task" />
      </div>
      <div class="col-md-4">
        <label for="due_date">Task Due Date</label>
        <input type="date" name="due_date" id="due_date" />
      </div>
      <div class="col-md-1">
         <input type="submit" name="submit" />
    </div>
     </div>
   </form>
</div>
  <div id="task">
  <?php
  include("inc/get.php");
  ?>
  </div>
