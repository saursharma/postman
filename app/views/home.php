<!-- Grid for Dash board -->
  <md-content>
    <div layout="row" class="dashboard-grid">
     <div flex>
        <md-card class="grid-child">
          <div class="grid-child-1">
            <div id="box1" data-theme="default" class="odometer">00</div>
          </div>
          <div class="grid-text"> Users </div>
        </md-card>
      </div>
      <div flex>
        <md-card class="grid-child">
          <div class="grid-child-2">
            <div id="box2" data-theme="default" class="odometer">000000 </div>
          </div>
          <div class="grid-text"> Apps 
		  </div>
		  
        </md-card>
      </div>
      <div flex>
        <md-card class="grid-child">
          <div class="grid-child-3">
            <div id="box3" data-theme="default" class="odometer">0000</div>
          </div>
          <div class="grid-text"> Message sent </div>
        </md-card>
      </div>
    </div>
  </md-content>
  
  <script>
	setTimeout(function(){
	  document.getElementById('box1').innerHTML = 
		<?php echo $data['user_count']; ?> ;
	}, 1000);
	
	setTimeout(function(){
	  document.getElementById('box2').innerHTML = 
		<?php echo $data['app_count']; ?> ;
	}, 1000);
	
	setTimeout(function(){
	  document.getElementById('box3').innerHTML = 
		<?php echo $data['msg_count']; ?> ;
	}, 1000);
  </script>
