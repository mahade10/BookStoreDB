<!DOCTYPE html>
<html>
    <body>
        <h3>For deleting touple, give book id: </h3>
        <form action="delete.php" method="get">
            <input type="text" name="id">
            <input type="submit" value="submit" onClick="javascript:return confirm('are you sure delete this?');">
        </form>
    </body>
</html>