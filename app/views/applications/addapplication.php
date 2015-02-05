<md-dialog aria-label="Dialog Header" style="width: 60%">
 <md-content>
    <md-subheader class="md-sticky-no-effect"> </md-subheader>
    <p> Add New Application </p>

    <md-text-float label="Application Name" ng-model="value" class="long"> </md-text-float>
    <md-text-float label="Package Name" ng-model="value" class="long"> </md-text-float>
    <md-text-float label="Public Key" ng-model="value" class="long"> </md-text-float>

  </md-content>
  <div class="md-actions" layout="row">
    <span flex></span>
    <md-button ng-href="" class="md-raised md-primary">
      Save
    </md-button>
    <md-button ng-href="applications" class="md-raised md-warn">
      Close
    </md-button>
  </div>
</md-dialog>
