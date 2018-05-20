<div class="container">
  <div class="row">
    <br/><br />
    <div class="col-sm-12">
      <h2 class="text-center">Welcome, <?php echo $user_name; ?></h2>
    </div>
    <div class="col-sm-12">
      <?php if(empty($selected_filter)) { ?>
      <form method="get" action="<?php echo site_url('properties/set_filter'); ?>">
        <select class="btn btn-default dropdown-toggle" name="filter">
            <?php foreach($status_group as $status){ ?>
              <option><?php echo $status; ?></option>
              <?php } ?>
        </select>
        <input class="btn btn-warning" type="submit" value="Select" />
      </form>
            <?php } else { ?>
              <h4>Showing filter for: <?php echo $selected_filter ?></h4>
            <?php } ?>
      <br/>
        <h3>Properties details</h3>
        <table class="table table-striped table-hover">
          <tr>
            <td>IMAGE</td>
            <td>NAME</td>
            <td>LOCATION</td>
            <td>STATUS</td>
            <td>View</td>
            <td>Edit</td> 
          </tr>
          <?php foreach($properties as $property) { ?>
          <tr>
            <td><img src="<?php echo base_url("assets/images/{$property['image']}"); ?>" width="150" /></td>  
            <td><?php echo $property['name'] ?></td>
            <td><?php echo $property['city'] ?>, <?php echo $property['state'] ?></td>
            <td><?php echo $property['status_id'] ?></td>
            <td>
              <a href="<?php echo site_url('properties/show/' . $property['id']); ?>" type="button" class="btn btn-success">View Details</a>
            </td>
            <td>
            <a href="<?php echo site_url('properties/edit/' . $property['id']); ?>" type="button" class="btn btn-info">Edit Details</a>
          </td>
          </tr>
          <?php } ?>
        </table>
        <br/>
    </div>
  </div>
</div>

