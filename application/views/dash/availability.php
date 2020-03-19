<div class="container">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="form-group col-md-12">
                <form class="form-horizontal" method="post" action="<?php echo base_url('main/searchblood');?>">
                    <div class="form-group">
                        <label class="col-sm-6">Search for donor with blood group </label>
                        <div class="col-sm-4">
                            <select name="blood_group" class="form-control">
                                <option value="O+">O+</option>
                                <option value="O-">O-</option>
                                <option value="A+">A+</option>
                                <option value="A-">A-</option>
                                <option value="B+">B+</option>
                                <option value="B-">B-</option>
                                <option value="AB+">AB+</option>
                                <option value="AB-">AB-</option>
                            </select>
                        </div>
                        <div class="col-sm-2">
                            <button class="btn btn-info btn-sm" type="submit" >Search</button>
                        </div>
                    </div>

                </form>
                <form class="form-horizontal" method="post" action="<?php echo base_url('main/searchcity');?>">
                    <div class="form-group">
                        <label class="col-sm-6">Search for donor by city </label>
                        <div class="col-sm-4">
                            <input type="text" name="city" placeholder="Search here" required="true" class="form-control"/>
                        </div>
                        <div class="col-sm-2">
                            <button class="btn btn-info btn-sm" type="submit" >Search</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
        <div class="col-md-3"></div>
    </div>
</div>
 


<div class="data">
    <div class="text-center">
      <table class="table table-striped text-dark">
        <tr>
          <th>SL</th>
          <th>Blood Type</th>
          <th>City</th>
        </tr>

        <?php 
          if (isset($search_result)) 
          {
            $count=1;
            foreach ($search_result as $data) {
        ?>      
        <tr>
          <td><?= $count; ?></td>
          <td><?=$data->b_type;?></td>
          <td><?=$data->city;?></td>
        </tr>
        <?php
              $count++;
            } 
            
          } 
        ?>
      </table>
    </div>
  </div>