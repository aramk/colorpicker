<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
    <head>
        <title>jqcp</title>
		<!-- jQuery/jQueryUI (hosted) -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.16/jquery-ui.js"></script>
		<script src="http://jqueryui.com/themeroller/themeswitchertool/"></script>
		<link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.16/themes/ui-lightness/jquery-ui.css" rel="stylesheet" type="text/css"/>
		<!--link href="aristo/Aristo.css" rel="stylesheet" type="text/css"/-->
        <style>
			body {
				font-family:	'Segoe UI', Verdana, Arial, Helvetica, sans-serif;
				font-size:		62.5%;
			}		
			
			#switcher {
				float: 			right;
				display: 		inline-block;
			}	
        </style>
		<script src="jquery.colorpicker.js"></script>        
		<link href="jquery.colorpicker.css" rel="stylesheet" type="text/css"/>        
        <script>
           	$( function() {			
				// For the documentation
				$('#switcher').themeswitcher();
                
                $('#cp1').colorpicker({
					onClose: function(hex, rgba, inst) {
								
							},
					onSelect: function(hex, rgba, inst) {
								//console.log(hex);
								//console.log(rgba);
								//console.log(inst);
							},
					showOn: 'both',
					buttonColorize: true,
					altField: '.cp1-alt'
				});
				
                $('#cp2').colorpicker({alpha: true});
            });
        </script>
    </head>
    <body>
        <div id="switcher"></div>
		
        Color: <input type="color" id="cp1" value="ff9900"/>
		<div class="cp1-alt" style="border: 1px inset; width: 200px; height: 40px;">asdf</div>
		
		<hr/>
		
		Inline:<div id="cp2"></div>	
    </body>
</html>