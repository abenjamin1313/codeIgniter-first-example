<div>
    <div class="col-sm-12 text-center">
    </div>
</div>

<hr/>

<div class="row">
    <div class="col-sm-10 col-sm-offset-1">
    <h3>Edit Details</h3>
        <form method="post"> 
            <div class="form-group">
                <label for="house_name">Name</label>
                <input id="house_name" class="form-control" type="text" name="name" value="<?php echo $property['name'] ?>" />
            </div>
            <div class="form-group">
                <label>Description</label>
                <textarea class="form-control" rows="5" name="description"><?php echo $property['description'] ?></textarea>
            </div>    
            <button class="btn btn-primary" type="submit" value="SAVE">Save</button>
        </form>
    </div>
</div>