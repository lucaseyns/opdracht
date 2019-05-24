<body onload="emptyCode();">

<script type="text/javascript">
function addCode(key){
	var code = document.forms[0].code;
	if(code.value.length < 4){
		code.value = code.value + key;
                document.getElementById("message");

	}
	if(code.value.length == 4){
		document.getElementById("controle").style.display = "block";
		if(code.value == "6666"){
      		 document.getElementById("juist").style.display = "block";
		   $.post("gpio.php",{button1On:""});
		
		


		}
		else{
                         document.getElementById("fout").style.display = "block";

		}
        }    


}

function submitForm(){
	document.forms[0].submit();
}

function emptyCode(){
	document.forms[0].code.value = "";
}
function data(){

}
</script>
<style>
body {
	text-align:center; 
	background-color:#333333; 
	font-family:Verdana, Arial, Helvetica, sans-serif;
}	
#keypad {margin:auto; margin-top:20px;}

#keypad tr td {
	vertical-align:middle; 
	text-align:center; 
	border:1px solid #000000; 
	font-size:18px; 
	font-weight:bold; 
	width:40px; 
	height:30px; 
	cursor:pointer; 
	background-color:#666666; 
	color:#CCCCCC;}
#keypad tr td:hover {background-color:#999999; color:#FFFF00;}

.display {
	width:130px; 
	margin:10px auto auto auto; 
	background-color:#000000; 
	color:#00FF00; 
	font-size:18px; 
	border:1px solid #999999;
}
#controle {
	text-align:center; 
	color:#009900; 
	font-size:14px; 
	font-weight:bold; 
	display:none;
}

#juist {
        text-align:center; 
        color:#009930; 
        font-size:16px; 
        font-weight:bold; 
        display:none;
}

#fout {
        text-align:center; 
        color:#FF0000; 
        font-size:20px; 
        font-weight:bold; 
        display:none;
}


</style>

<form action="code.htm" method="get">
<table id="keypad" cellpadding="5" cellspacing="3">
	<tr>
    	<td onclick="addCode('1');">1</td>
        <td onclick="addCode('2');">2</td>
        <td onclick="addCode('3');">3</td>
    </tr>
    <tr>
    	<td onclick="addCode('4');">4</td>
        <td onclick="addCode('5');">5</td>
        <td onclick="addCode('6');">6</td>
    </tr>
    <tr>
    	<td onclick="addCode('7');">7</td>
        <td onclick="addCode('8');">8</td>
        <td onclick="addCode('9');">9</td>
    </tr>
    <tr>
    	<td onclick="addCode('*');">*</td>
        <td onclick="addCode('0');">0</td>
        <td onclick="addCode('#');">#</td>
    </tr>
</table>
<input type="text" name="code" value="" maxlength="4" class="display" readonly="readonly" />
<p id="juist">come in </p>
<p id="fout">foute code</p>
<p id="controle">uw code wordt gecontroleert</p>
</form>
</body>




