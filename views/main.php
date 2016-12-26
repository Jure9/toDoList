

<div class="mainContainer" id="todoListWrapper">

    <h1>The jQuery To Do List</h1>

    <div id="todoList">

        <ul>
            <li class="listTitle">Monday</li>
            <li class="addItem"><input type="text" placeholder="add new item..." data-day="monday"></li>
            <?php showeChores("monday") ?>
        </ul>
        <ul>
            <li class="listTitle">Tuesday</li>
            <li class="addItem"><input type="text" placeholder="add new item..." data-day="tuesday"></li>
            <?php showeChores("tuesday") ?>
        </ul>
        <ul>
            <li class="listTitle">Wednesday</li>
            <li class="addItem"><input type="text" placeholder="add new item..." data-day="wednesday"></li>
            <?php showeChores("wednesday") ?>
        </ul>
        <ul>
            <li class="listTitle">Thursday</li>
            <li class="addItem"><input type="text" placeholder="add new item..." data-day="thursday"></li>
            <?php showeChores("thursday") ?>
        </ul>
        <ul>
            <li class="listTitle">Friday</li>
            <li class="addItem"><input type="text" placeholder="add new item..." data-day="friday"></li>
            <?php showeChores("friday") ?>
        </ul>
        <ul>
            <li class="listTitle">Saturday</li>
            <li class="addItem"><input type="text" placeholder="add new item..." data-day="saturday"></li>
            <?php showeChores("saturday") ?>
        </ul>
        <ul>
            <li class="listTitle">Sunday</li>
            <li class="addItem"><input type="text" placeholder="add new item..." data-day="sunday"></li>
            <?php showeChores("sunday") ?>
        </ul>



    </div>


</div>

<div id="trash"></div>