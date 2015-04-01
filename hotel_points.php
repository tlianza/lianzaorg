<?php
$nav=2;
require('_header.php');
?>

<h1>Hotel Points Calculator</h1>
<form class="form-inline">
    <div class="form-group">
        <label for="baseRate">Cash Rate for Hotel:</label>
        <div class="input-group">
            <div class="input-group-addon">$</div>
            <input type="text" class="form-control" id="baseRate" placeholder="100.00">
        </div>
    </div>
</form>
<h3>-OR-</h3>

<form class="form-inline">
    <div class="input-group">
        <input type="number" class="form-control" id="points0" placeholder="100">
        <div class="input-group-addon">points</div>
    </div>
    +
    <div class="input-group">
        <div class="input-group-addon">$</div>
        <input type="number" class="form-control" id="dollars0" placeholder="100.00">
    </div>
    =
    <div class="input-group">
        <p class="form-control-static" id="output0"></p>
    </div>
</form>

<form class="form-inline">
    <div class="input-group">
        <input type="number" class="form-control" id="points1" placeholder="100">
        <div class="input-group-addon">points</div>
    </div>
    +
    <div class="input-group">
        <div class="input-group-addon">$</div>
        <input type="number" class="form-control" id="dollars1" placeholder="100.00">
    </div>
    =
    <div class="input-group">
        <p class="form-control-static" id="output1"></p>
    </div>
</form>

<form class="form-inline">
    <div class="input-group">
        <input type="number" class="form-control" id="points2" placeholder="100">
        <div class="input-group-addon">points</div>
    </div>
    +
    <div class="input-group">
        <div class="input-group-addon">$</div>
        <input type="number" class="form-control" id="dollars2" placeholder="100.00">
    </div>
    =
    <div class="input-group">
        <p class="form-control-static" id="output2"></p>
    </div>
</form>


<?php require('_footer.php'); ?>

<script type="text/javascript">
    $(function() {

        $(".form-control").change(function(){
            var baseRate = $('#baseRate').val();
            console.log(baseRate);
            for(i=0; i<3; i++) {
                var dollars = $('#dollars'+i).val();
                var points = $('#points'+i).val();

                var value = (baseRate - dollars) / points;
                console.log('Value: '+value);

                if(value > 0 && isFinite(value)) {
                    $('#output' + i).html('Points are valued at: $'+value);
                }
                else {
                    $('#output' + i).html('');
                }
            }
        });
    });

</script>