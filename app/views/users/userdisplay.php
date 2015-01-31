<md-content>
    <!-- <md-card>Welcome to {{title}}</md-card> -->
    <br/>
   <md-card>
   <table class="table table-hover">
      <thead>
        <tr>
           <th> <md-checkbox> </md-checkbox></th> 
           <th>Sl No.</th>
           <th>Application Name</th>
		   <th>No. of Users</th>
        </tr>
      </thead>
      <tbody>
	  
	    <?php 
	    $slno=1;
		foreach($data as $i=>$j)
		{
		 ?> 
        <tr>
          <td> <md-checkbox> </md-checkbox></td>
          <td> <?php echo $slno; ?> </td>
          <td> <?php echo $j['app_name']; ?> </td>
		  <td> <?php echo $j['total_users']; ?> </td>
        </tr> 
        <?php 
        $slno++;
        } ?>
      </tbody>
   </table>
   </md-card>
  </md-content>
