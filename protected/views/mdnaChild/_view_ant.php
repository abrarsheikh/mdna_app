<?php
$dataProvider = $anthropometry->search();
$criteria = $dataProvider->getCriteria();
$criteria->params = array(':id_a' => $model->taluk_code);

$dataProvider->setCriteria($criteria);
$this->widget('zii.widgets.grid.CGridView', array(
    'id' => 'mdna-child-a-mdl-grid',
    'dataProvider' => $dataProvider,
    'columns' => array(
        'weight',
        'height',
        'muac',
        'date',
    ),
));
?>

<div class="row-fluid">
    <?php
    $this->beginWidget('zii.widgets.CPortlet', array(
        'title' => '<span class="icon-th-large"></span>Anthropometry Chart',
        'titleCssClass' => ''
    ));
    ?>

    <div class="weight-chart" style="height: 230px;width:100%;margin-top:15px; margin-bottom:15px;"></div>
    <div class="height-chart" style="height: 230px;width:100%;margin-top:15px; margin-bottom:15px;"></div>
    <div class="muac-chart" style="height: 230px;width:100%;margin-top:15px; margin-bottom:15px;"></div>

    <?php $this->endWidget(); ?>
</div><!--/row-->

<script type="text/javascript">
    //------------- Visitor chart -------------//

    if ($('div').hasClass('weight-chart')) {
        $(function() {
            //some data
            //var d1 = [[1, 3+randNum()], [2, 6+randNum()], [3, 9+randNum()], [4, 12+randNum()],[5, 15+randNum()],[6, 18+randNum()],[7, 21+randNum()],[8, 15+randNum()],[9, 18+randNum()],[10, 21+randNum()],[11, 24+randNum()],[12, 27+randNum()],[13, 30+randNum()],[14, 33+randNum()],[15, 24+randNum()],[16, 27+randNum()],[17, 30+randNum()],[18, 33+randNum()],[19, 36+randNum()],[20, 39+randNum()],[21, 42+randNum()],[22, 45+randNum()],[23, 36+randNum()],[24, 39+randNum()],[25, 42+randNum()],[26, 45+randNum()],[27,38+randNum()],[28, 51+randNum()],[29, 55+randNum()], [30, 60+randNum()]];
<?php
$dataProvider = $anthropometry->search();
$criteria = $dataProvider->getCriteria();
$criteria->params = array(':id_a' => $model->id);

$dataProvider->setCriteria($criteria);
$datas = $dataProvider->getData();
usort($datas, "fixin");

function fixin($a, $b) {
    if (strtotime($a['date']) == strtotime($b['date']))
        return 0;
    else
        return strtotime($a['date']) < strtotime($b['date']) ? -1 : 1;
}

$counterW = 1;
$counterH = 1;
$counterM = 1;

$varStrW = '';
$varStrH = '';
$varStrM = '';
foreach ($datas as $data) {
    $w = $data['weight'];
    $h = $data['height'];
    $m = $data['muac'];

    if ($w != null || $w != 0) {
        $varStrW = $varStrW . "[$counterW, $w], ";
        $counterW++;
    }

    if ($h != null || $h != 0) {
        $varStrH = $varStrH . "[$counterH, $h], ";
        $counterH++;
    }

    if ($m != null || $m != 0) {
        $varStrM = $varStrM . "[$counterM, $m], ";
        $counterM++;
    }
}
echo "\n var weights = [$varStrW]";
echo "\n var heights = [$varStrH]";
echo "\n var muac = [$varStrM]";

if ($counterW <= 2) {
    ?>
                $(".weight-chart").hide();
    <?php
}
if ($counterH <= 2) {
    ?>
                $(".heights-chart").hide();
    <?php
}
if ($counterM <= 2) {
    ?>
                $(".muac-chart").hide();
    <?php
}
?>
            //var d2 = [[1, randNum()-5], [2, randNum()-4], [3, randNum()-4], [4, randNum()],[5, 4+randNum()],[6, 4+randNum()],[7, 5+randNum()],[8, 5+randNum()],[9, 6+randNum()],[10, 6+randNum()],[11, 6+randNum()],[12, 2+randNum()],[13, 3+randNum()],[14, 4+randNum()],[15, 4+randNum()],[16, 4+randNum()],[17, 5+randNum()],[18, 5+randNum()],[19, 2+randNum()],[20, 2+randNum()],[21, 3+randNum()],[22, 3+randNum()],[23, 3+randNum()],[24, 2+randNum()],[25, 4+randNum()],[26, 4+randNum()],[27,5+randNum()],[28, 2+randNum()],[29, 2+randNum()], [30, 3+randNum()]];
            //define placeholder class
            var placeholderweight = $(".weight-chart");
            var placeholderheight = $(".height-chart");
            var placeholdermuac = $(".muac-chart");
            //graph options
            var options = {
                grid: {
                    show: true,
                    aboveData: true,
                    color: "#3f3f3f",
                    labelMargin: 5,
                    axisMargin: 0,
                    borderWidth: 0,
                    borderColor: null,
                    minBorderMargin: 5,
                    clickable: true,
                    hoverable: true,
                    autoHighlight: true,
                    mouseActiveRadius: 20
                },
                series: {
                    grow: {
                        active: false,
                        stepMode: "linear",
                        steps: 50,
                        stepDelay: true
                    },
                    lines: {
                        show: true,
                        fill: true,
                        lineWidth: 4,
                        steps: false
                    },
                    points: {
                        show: true,
                        radius: 5,
                        symbol: "circle",
                        fill: true,
                        borderColor: "#fff"
                    }
                },
                legend: {
                    position: "ne",
                    margin: [0, -25],
                    noColumns: 0,
                    labelBoxBorderColor: null,
                    labelFormatter: function(label, series) {
                        // just add some space to labes
                        return label + '&nbsp;&nbsp;';
                    }
                },
                yaxis: {min: 0},
                xaxis: {ticks: 11, tickDecimals: 0},
                colors: chartColours,
                shadowSize: 1,
                tooltip: true, //activate tooltip
                tooltipOpts: {
                    content: "Abrar",
                    shifts: {
                        x: -30,
                        y: -50
                    }
                }
            };
<?php
if ($counterW > 2) {
    ?>
                $.plot(placeholderweight, [
                    {
                        label: "Weights ",
                        data: weights,
                        lines: {fillColor: "#f2f7f9"},
                        points: {fillColor: "#88bbc8"}
                    }

                ], options);

    <?php
}
?>
<?php
if ($counterH > 2) {
    ?>
                $.plot(placeholderheight, [
                    {
                        label: "Heights",
                        data: heights,
                        lines: {fillColor: "#f2f7f9"},
                        points: {fillColor: "#88bbc8"}
                    }

                ], options);
    <?php
}
?>

<?php
if ($counterM > 2) {
    ?>
                $.plot(placeholdermuac, [
                    {
                        label: "mauc",
                        data: muac,
                        lines: {fillColor: "#f2f7f9"},
                        points: {fillColor: "#88bbc8"}
                    }

                ], options);
    <?php
}
?>
        });
    }//end if
</script>


<div id="detail-section"></div>