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
		   <th>Package Name</th>
		   <th>Public Key</th>
        </tr>
      </thead>
      <!-- <tbody>
	  
	    <?php 
	    echo "vcvnhcjvh";
		foreach($data as $i=>$j)
		{
		 ?> 
		
        <tr>
          <td> <md-checkbox> </md-checkbox></td>
          <td> <?php echo $j['sl_no']; ?> </td>
          <td> <?php echo $j['app_name']; ?> </td>
		  <td> <?php echo $j['package_name']; ?> </td>
		  <td> <?php echo $j['public_key']; ?> </td>
        </tr> 
        <?php } ?>
      </tbody> -->
   </table>
   </md-card>
 </md-content>
 
    
      <!-- Floating button at bottom right corner -->
  <md-button id="addPopUp" class="md-fab md-raised" ng-click="showDialog($event)" aria-label="Add anything.. :)">
    <md-tooltip> Add New Applications here </md-tooltip>
    <md-icon icon="<?=\helpers\url::template_path()?>img/ic_add_24px.svg" style="width: 24px; height: 24px;"></md-icon>
  </md-button>
