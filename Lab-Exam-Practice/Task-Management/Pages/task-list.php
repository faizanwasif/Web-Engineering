<!DOCTYPE html>
<html lang="en">
<head>
    <title>Task List</title>
    <link rel="stylesheet" href="../Styling/style.css">
</head>
<body>
    <section id="nav-sec">
            <nav>
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="create-task.html">Create Task</a></li>
                    <li><a href="settings.html">Settings</a></li>
                </ul>        
            </nav>
    </section>

    <section id="task-form">
        <form action="../Scripts/add-task.php" method="post">
            <label for="name">Task Name</label>
            <input type="text" name="name">
            <!-- </br> -->

            <label for="desc">Task Description</label>
            <textarea name="desc" rows="5" cols="25"></textarea>

            <label for="due">Due Date</label>
            <input type="date" name="due">
            <br>
            <br>
            <input type="submit" value="Create">
        </form>
    </section>

    <section id="task-list">
        <table>
            <tr>
                <th>Name</th>
                <th>Description</th>
                <th>Due Date</th>
                <th>Status</th>
            </tr>
            <?php
                include "../db.php";
                $sql = "SELECT * FROM tasks";
                $result = $conn->query($sql);

                if($result->num_rows > 0){
                    
                    while($row = $result->fetch_assoc()){
                        echo "<tr>";
                        echo "<td class='name'>".$row["name"]."</td>";
                        echo "<td class='desc'>".$row["description"]."</td>";
                        echo "<td class='name'>".$row["due_date"]."</td>";
                        echo "<td class='desc'>".$row["status"]."</td>";
                    }
                }else{
                    echo "<tr><td colspan='4'>No Data found</td></tr>";
                }
                $conn->close();
            ?>
            
        </table>
    </section>
</body>
</html>