<div class="row">
  <br/><br />
  <div class="col-sm-12">
    <h2 class="text-center">Welcome, <?php echo $user_name; ?></h2>
  </div>
  <div class="col-sm-10 col-sm-offset-1">
  <select>
        <?php foreach($status_group as $status){ ?>
          <option><?php echo $status; ?></option>
          <?php } ?>
    </select>
    <br/>
      <h3>Properties details</h3>
      <table class="table table-striped table-hover">
        <tr>
          <td>IMAGE</td>
          <td>NAME</td>
          <td>LOCATION</td>
          <td>STATUS</td>  
          <td>ACTION</td>  
        </tr>
        <tr>
          <td><img src="http://localhost/CodeIgniter/codeigniter/assets/images/ThinkstockPhotos-145054512.jpg" width="150" /></td>  
          <td>4 Bedroom 2 Story House </td>
          <td>Greeley, CO </td>
          <td>Available</td>
          <td>
            <a type="button" class="btn btn-success">View Details</a>
          </td>  
        </tr>

        <tr>
          <td><img src="http://localhost/CodeIgniter/codeigniter/assets/images/ThinkstockPhotos-160415922.jpg" width="150" /></td>  
          <td>Spacious Classic Home</td>
          <td>Loveland, CO </td>
          <td>Available</td>
          <td>
            <a type="button" class="btn btn-success">View Details</a>
          </td>  
        </tr>

        <tr>
          <td><img src="http://localhost/CodeIgniter/codeigniter/assets/images/ThinkstockPhotos-179240420.jpg" width="150" /></td>  
          <td>3 Bedroom Condo</td>
          <td>Platteville, CO</td>
          <td>Available</td>
          <td>
            <a type="button" class="btn btn-success">View Details</a>
          </td>  
        </tr>
      </table>
      <br/>
  </div>
</div>

