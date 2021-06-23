<h2 style="color:red;"> Page 1 [Home]</h2>
<h2 style="color:red;"> Convertion SIte</h2> 
            <h3><a href="">1.Home</a>
            <a href="">2. Conersion Rate</a>
            <a href="">3. History</a></h3><br><br>
			
			<h2 style="color:red;"> Converter:</h2> 
			
			
			<h1> feet to inch </h1>
			

	
		
	
	<label>Feet</label>
  <input id="inputFeett" type="number" placeholder="Feet" oninput="Converter(this.value)" onchange="(this.value)">

<p>Result :<span id="outputMeter"></span></p>

<script>
function Converter(val) {
  document.getElementById("outputMeter").innerHTML=val*12;
}
</script>
