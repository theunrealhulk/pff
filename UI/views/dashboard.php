<?php
require_once "UI/header.php";
require_once "include/router.php";

         
$overDue=0;
$overDue = CountDateWithTodayOnCollection($stats["projects"],"DueDate","<");
$thisDay=0;
$thisDay = CountDateWithTodayOnCollection($stats["projects"],"DueDate","==");
$thisWeek=0;
$thisWeek = CountDatesInThisWeekOnCollection($stats["projects"],"DueDate");
$users = json_decode($users,true);
?>
  <nav class="purple darken-4">
    <div class="nav-wrapper">
      <a href="#" class="brand-logo">Dashboard</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
          <li><a><span class="white-text badge blue">5*/<?=count($stats["projects"])?> Projects</span></a></li>
          <li><a><span class="white-text badge orange">15*/<?=count($stats["assignments"])?> Assignments</span></a></li>
          <li> Hey <?=$user["Username"]?>!</li>
        <li><a href="/logout">logout?</a></li>
      </ul>
    </div>
  </nav>
<div class="container">


    <h3>Hight Priority Assignments</h3>
    <div class="row">
        <div class="col s4">
            <i class="small red-text material-icons">assignment</i> Over Due <a href=""><span class="counter">0*</span></a>
        </div>
        <div class="col s4">
            <i class="small yellow-text material-icons">assignment</i> Due Today <a href=""><span class="counter">0*</span></a>
        </div>
        <div class="col s4">
            <i class="small blue-text material-icons">assignment</i> Due This Week <a href=""><span class="counter">0*</span></a>
        </div>
    </div>
    <h3>Hight Priority Projects</h3>
    <div class="row">
        <div class="col s4">
            <i class="small red-text material-icons">create_new_folder</i> Over Due <a href=""><span class="counter"><?=$overDue?></span></a>
        </div>
        <div class="col s4">
            <i class="small yellow-text material-icons">create_new_folder</i> Due Today <a href=""><span class="counter"><?=$thisDay?></span></a>
        </div>
        <div class="col s4">
            <i class="small blue-text material-icons">create_new_folder</i> Due This Week <a href=""><span class="counter"><?=$thisWeek?></span></a>
        </div>
    </div>
    <h3>My Active Projects</h3>

    <ul class="collapsible popout">

        <?php foreach($UserData["projects"] as $project):?>
            <li>
            <div class="collapsible-header">
                <ul class="detail-items">
                    <li>
                        <i class="material-icons">create_new_folder</i>
                    </li>
                    <li>
                        <?=$project["Name"]?>
                    </li>
                    <li>
                        <?=logDate($project["DueDate"])?>
                    </li>
                </ul>
                <ul class="detail-items left">
                    <li>
                        <span  class="waves-effect waves-light  modal-trigger" href="#modal1"><i class="material-icons purple-text darken-4">edit</i></span>
                    </li>
                    <li>
                    <span  class="waves-effect waves-light  modal-trigger" href="#modal2"><i class="material-icons purple-text darken-4">assignment</i></span>
                    </li>
                </ul>
            </div>
        <div class="collapsible-body"><span>Projects Assignments if Any*</span></div>
        </li>
        <?php endforeach?>
        
    </ul>
    <!-- Modal Trigger -->
    <a class="waves-effect waves-light  btn modal-trigger" href="#modal1"><i class="material-icons">create_new_folder</i></a>
    <h3>My Active Assignments</h3>

    <ul class="collection unfinished">
      <li class="collection-item">nigga 1</li>
      <li class="collection-item">nigga 2</li>
      <li class="collection-item">nigga 3</li>
      <li class="collection-item">nigga 4</li>
    </ul>

</div>
    <!-- New Project -->
    <div id="modal1" class="modal">
    <div class="modal-content">
        <h4>Add New Project</h4>
        <form action="/addProject" method="post">
            <div class="form-group">
                <label for="exampleInputEmail1">Name</label>
                <input name="Name" type="text" class="form-control" id="name" aria-describedby="NameHelp" placeholder="Enter Project Name" required>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Due Date</label>
                <input name="DueDate" type="date" class="form-control" id="name" aria-describedby="NameHelp" placeholder="Enter Project Name" required>
            </div>
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-info"><i class="material-icons">add_circle_outline</i></button>
        </div>
    </form>
    </div>

        <!-- New Assignment -->
    <div id="modal2" class="modal" style="height:100%">
        <div class="modal-content">
            <h4>Add New Assignment</h4>
            <form action="/addProject" method="post">
                <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input name="Name" type="text" class="form-control" id="name" aria-describedby="NameHelp" placeholder="Enter Assignment Name" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Due Date</label>
                    <input name="DueDate" type="date" class="form-control" id="dueDate" aria-describedby="NameHelp" placeholder="Enter Project Name" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Description</label>
                    <textarea name="Description" type="date" class="form-control materialize-textarea" id="dueDate" aria-describedby="NameHelp" placeholder="Assignment Description"></textarea>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Assignee</label>
                    <div class="input-field col s12">
                        <select name="UserId">
                            <option value="" disabled selected>Choose your Assignee</option>
                            <?php foreach ($users as $u): ?>
                                <option value="<?=$u["id"]?>"><?=$u["Username"]?></option>
                            <?php endforeach?>
                            
                        </select>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="submit" class="btn btn-info"><i class="material-icons">add_circle_outline</i></button>
                </div>
            </form>
    </div>