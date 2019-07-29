	
		function myclick(a){

			myform.display.value += a;
		}

		function equalto(){
			myform.display.value=eval(myform.display.value);
		}

		function ac(){
			myform.display.value="";
		}

		function del(){
			var prevalue =myform.display.value;
			myform.display.value=prevalue.substr(0,prevalue.length-1);
		}

		function fnsin(){
			myform.display.value=Math.sin(myform.display.value);
		}

		function fncos(){
			myform.display.value=Math.cos(myform.display.value);
		}

		function fntan(){
			myform.display.value=Math.tan(myform.display.value);
		}

		function fnsqr(){
			myform.display.value=Math.pow(myform.display.value,2);	
		}
		function fnsqrt(){
			myform.display.value=Math.pow(myform.display.value,1/2);
		}
		function fncbrt(){
			myform.display.value=Math.pow(myform.display.value, 1/3);
		}
		function fncub(){
			myform.display.value=Math.pow(myform.display.value, 3);
		}

		function fnpi(){
					myform.display.value=Math.PI;
		}

		function fnpow(){
			var y =getElementById("myform");			
			x.value += "pow(";
		}

		function fnacos(){
			myform.display.value=Math.acos(myform.display.value)
		}


	function fnatan(){
			myform.display.value=Math.atan(myform.display.value)
	}		

	function fnasin(){
			myform.display.value=Math.asin(myform.display.value)
	}		

	function fnEXP(){
			myform.display.value=Math.exp(myform.display.value)
	}

	function fnlog(){
			myform.display.value=Math.log(myform.display.value)
	}

