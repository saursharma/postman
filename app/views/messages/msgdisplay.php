<md-content>
    <!-- <md-card>Welcome to {{title}}</md-card> -->
    <br/>
   <md-card>
   <table class="table table-hover">
      <thead>
        <tr>
           <th> <md-checkbox> </md-checkbox></th> 
           <th>Sl No.</th>
           <th>Sender</th>
		   <th>Message</th>
		   <th>URL</th>
        </tr>
      </thead>
      <tbody>
	  
	    <?php 
	    $sl_no=1;
		foreach($data as $i=>$j)
		{
		 ?> 
		
        <tr>
          <td> <md-checkbox> </md-checkbox></td>
          <td> <?php echo $sl_no; ?> </td>
          <td> <?php echo $j['sender']; ?> </td>
		  <td> <?php echo $j['msg']; ?> </td>
		  <td> <?php echo $j['url']; ?> </td>
        </tr> 
        <?php 
        $sl_no++;
        } ?>
      </tbody>
   </table>
   </md-card>
 </md-content>
 
    
      <!-- Floating button at bottom right corner -->
  <md-button id="addPopUp" class="md-fab md-raised" ng-click="showDialog1($event)" aria-label="Add anything.. :)">
    <md-tooltip> Add New Messages here </md-tooltip>
    <md-icon icon="<?=\helpers\url::template_path()?>img/ic_add_24px.svg" style="width: 24px; height: 24px;"></md-icon>
  </md-button>
