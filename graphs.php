<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Simple Maths Graficos</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/smaths.css" rel="stylesheet">

  <script type="text/javascript" charset="UTF-8"
 src="//cdnjs.cloudflare.com/ajax/libs/jsxgraph/0.99.7/jsxgraphcore.js"></script>
  <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/jsxgraph/0.99.7/jsxgraph.css" />
  <link rel="stylesheet" type="text/css" href="graphs/jsgcalc.css" />

	<script type="text/javascript" src="http://www.yerich.net/jquery.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.8.2/underscore-min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mathjs/1.3.0/math.min.js"></script>
	<script type="text/javascript" src="graphs/calc.js"></script>
	<script type="text/javascript" src="graphs/jsgcalc.js"></script>
	<script type="text/javascript" src="graphs/jsgui.js"></script>

</head>

<body id="page-top">

  <div id="wrapper" class="d-flex flex-column">
    <div id="content-wrapper" class="d-flex flex-column">   

      <div id="content">

<div id="hideSidebar"><a href="javascript:void(0)" onclick="jsgui.hideSidebar()">&raquo;</a></div>
<div id="showSidebar"><a href="javascript:void(0)" onclick="jsgui.showSidebar()">&laquo;</a></div>

<div id="toolbar">
	<div id="tool_select">
		<a href="javascript:void(0)" onclick="jsgui.setTool('pointer')" id="tool_select_pointer" class="toolbar_option toolbar_selected">
		<img src="graphs/images/pointer.png" alt="Pointer" title="Pointer"/></a>
		<a href="javascript:void(0)" onclick="jsgui.setTool('trace')" id="tool_select_trace" class="toolbar_option">
		<img src="graphs/images/trace.png" alt="Trace" title="Trace"/></a>
		<a href="javascript:void(0)" onclick="jsgui.setTool('vertex')" id="tool_select_vertex" class="toolbar_option">
		<img src="graphs/images/minmax.png" alt="Local Minima/Maxima" title="Local Minima/Maxima"/></a>
		<a href="javascript:void(0)" onclick="jsgui.setTool('root')" id="tool_select_root" class="toolbar_option">
		<img src="graphs/images/root.png" alt="Root" title="Root"/></a>
		<a href="javascript:void(0)" onclick="jsgui.setTool('intersect')" id="tool_select_intersect" class="toolbar_option">
		<img src="graphs/images/intersect.png" alt="Intersect" title="Intersect"/></a>
		<a href="javascript:void(0)" onclick="jsgui.setTool('derivative')" id="tool_select_derivative" class="toolbar_option">
		<img src="graphs/images/derivative.png" alt="Derivative" title="Derivative"/></a>
		<a href="javascript:void(0)" onclick="jsgui.setTool('zoombox')" id="tool_select_zoombox" class="toolbar_option">
		<img src="graphs/images/zoombox.png" alt="ZoomBox" title="ZoomBox"/></a>
		<a href="javascript:void(0)" onclick="jsgui.setTool('zoomin')" id="tool_select_zoomin" class="toolbar_option">
		<img src="graphs/images/zoomin.png" alt="Zoom In" title="Zoom In"/></a>
		<a href="javascript:void(0)" onclick="jsgui.setTool('zoomout')" id="tool_select_zoomout" class="toolbar_option">
		<img src="graphs/images/zoomout.png" alt="Zoom Out" title="Zoom Out"/></a>
	</div>
</div>

<div id="toolboxes">
	<div class="toolbox" id="toolbox_zoombox">
		<div class="toolbox_header">
			<div class="toolbox_close"><a href="javascript: void(0)">close</a></div>
			Window Options
		</div>
		
		<div class="toolbox_main">
			<table>
				<tr>
					<td></td>
					<td align="center">y-max: <input id="toolbox_zoombox_ymax" class="jsgcalc_ymax" type="text" size="4" /></td>
					<td></td>
				</tr>
				<tr>
					<td>x-min:<br /><input id="toolbox_zoombox_xmin" class="jsgcalc_xmin" type="text" size="4" /></td>
					<td align="center"><img src="graph.png" style="width: 70px;"/></td>
					<td>x-max:<br /><input id="toolbox_zoombox_xmax" class="jsgcalc_xmax" type="text" size="4" /></td>
				</tr>
				<tr>
					<td></td>
					<td align="center">y-min: <input id="toolbox_zoombox_ymin" class="jsgcalc_ymin" type="text" size="4" /></td>
					<td></td>
				</tr>
			</table>
			
			<a class="fancybutton" href="javascript: void(0)" 
				onclick="jsgcalc.setWindow($('#toolbox_zoombox_xmin').val(), $('#toolbox_zoombox_xmax').val(), $('#toolbox_zoombox_ymin').val(), $('#toolbox_zoombox_ymax').val())">
					Apply</a>
			<br /><br />
			<a href="javascript: void(0);" onclick="jsgcalc.resetZoom()">Reset View</a>
		</div>
	</div>
	
	<div class="toolbox" id="toolbox_trace">
		<div class="toolbox_header">
			<div class="toolbox_close"><a href="javascript: void(0)">close</a></div>
			Trace
		</div>
		
		<div class="toolbox_main">
			x: <input id="toolbox_trace_input" class="jsgcalc_trace_input" type="text" size="20" style="width: 95%" /><br />
			y: <input id="toolbox_trace_output" class="jsgcalc_trace_output" type="text" size="20" style="width: 95%" /><br /><br />
			
			<a class="fancybutton" href="javascript: void(0)" onclick="jsgui.doTrace($('#toolbox_trace_input').val())">Trace</a><br />
		</div>
	</div>
</div>

</div>

<div id="sidewrapper">
	<div id="graph_sidebar">
		<a class="" href="index.php"><h1 style="font-family: Lato, Arial, sans-serif; font-size: 24pt; color: #EE040a; text-shadow: 1px 1px #FFF ">Simple<sup style="font-family: Lato, Arial, sans-serif;  font-size: 22pt; color:#11B269; text-shadow: 1px 1px #FFF "> Maths</sup> </h1></a>
		<span style="font-size: 90%; position: relative; bottom: 4px;"></span><br /><br />

		<div id="graph_inputs">
			
		</div>
		<br />
		<div id="buttonbar">
			<a class="fancybutton" href="javascript:void(0)" onclick="jsgui.evaluate()">Evaluar</a>
			<a class="fancybutton" href="javascript:void(0)" onclick="jsgui.addInput()">Agregar al eje Y</a>
			
			<a class="fancybutton greybutton" href="javascript:void(0)" id="settings_button" onclick="$('#settings').toggle(400)"><img src='graphs/images/settings.png' alt='Settings' /></a>
			<a class="fancybutton" href="calcu.php">Calculadora</a><br /><br />
		</div>

		<div id="settings">
			<div id="angle_select" class="options_list">
				<a href="javascript:void(0)" onclick="jsgui.setAngles('degrees')" id="angle_select_degrees" class="option">DEG</a>
				<a href="javascript:void(0)" onclick="jsgui.setAngles('radians')" id="angle_select_radians" class="option option_selected">RAD</a>
				<a href="javascript:void(0)" onclick="jsgui.setAngles('gradians')" id="angle_select_gradians" class="option">GRAD</a>
			</div>
	
			<div id="gridlines_select" class="options_list">
				Gridlines:
				<a href="javascript:void(0)" onclick="jsgui.setGridlines('normal')" id="gridlines_select_normal" class="option option_selected">NORMAL</a>
				<a href="javascript:void(0)" onclick="jsgui.setGridlines('less')" id="gridlines_select_less" class="option">LESS</a>
				<a href="javascript:void(0)" onclick="jsgui.setGridlines('off')" id="gridlines_select_off" class="option">OFF</a>
			</div>
	
			<div id="quality_select" class="options_list">
				Precision:
				<a href="javascript:void(0)" onclick="jsgui.setQuality(0.1)" id="quality_select_01" class="option">LOW</a>
				<a href="javascript:void(0)" onclick="jsgui.setQuality(0.5)" id="quality_select_05" class="option">MED</a>
				<a href="javascript:void(0)" onclick="jsgui.setQuality(1)" id="quality_select_1" class="option option_selected">HIGH</a>
				<a href="javascript:void(0)" onclick="jsgui.setQuality(5)" id="quality_select_5" class="option">ULTRA</a>
			</div>
		</div>
		
		
	</div>
</div>

<div id="graph_wrapper">
	<canvas id="graph">Sorry, your browser does not support this application. The following browsers are supported:<br /><br />
	<a href="http://www.google.com/chrome/">Google Chrome</a><br /><a href="http://www.mozilla.com/firefox/">Mozilla Firefox</a><br />
	<a href="http://www.opera.com/">Opera</a></canvas>
</div>

</div>

      <?php include("footer.php"); ?>
    </div>
    
  </div>


  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>



  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>
  <script src="js/demo/chart-bar-demo.js"></script>


</body>

</html>
