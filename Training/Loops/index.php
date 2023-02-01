<html>
    <body>
        <form name="form" action="loops.php" method="post">
            <h3> For performing all loops please enter value minimum 4</h3> <br>
            <label for="">Enter a number</label>
            <input type="number" value="num1" name="num1">

            <select name="select">
                <option value="" disabled selected>select type of loop</option> 
                <option value="while">While Loop</option>
                <option value="do-while">Do While Loop</option>
                <option value="for">For Loop</option>
                <option value="for-each">For Each Loop</option>
                <option value="break">Break Method inside Loop</option>
                <option value="continue">Continue Method inside Loop</option>
            </select>

            <input type="submit" value="submit">
        </form>
    </body>
</html>