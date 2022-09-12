<html>
    <head></head>
    <body style="text-align: center">
<div id="main-content">
<h2 style="background:blue;color:white">ADD NEW RECORD</h2>
    <form class="post-form" action="save.php" method="post">
        <div class="form-group">
            <label>Name</label>
            <input type="text" name="name" />
            <br><br>
        </div>
        <div class="form-group">
            <label>Description</label>
            <input type="text" name="description" />
            <br><br>
        </div>
        <div class="form-group">
            <label>Quantity</label>
            <input type="number" name="quantity" />
            <br><br>
        </div>
        <div class="form-group">
            <label>Price</label>
            <input type="float" name="price" />
            <br><br>
        </div>
        <div class="form-group">
            <label>Expire Date</label>
            <input type="date" name="expire_date" />
            <br><br>
        </div>
        <input style="background:green" class="submit" type="submit" value="Save"  />
    </form>
</div>
</div>
</body>
</html>
