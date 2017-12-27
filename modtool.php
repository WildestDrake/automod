<html>
<head>
<meta charset="UTF-8">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<style>
* {
	font-family: Helvetica, Arial, sans-serif;
	}
#wrapper {
	max-width:98%;
	width:auto;
	margin:auto;
	background-color: #fff;
}
#Prompt {
	border-style: groove;
	height: 400px;
	max-width:98%;
	width:auto;
	position:relative;
	overflow-y: auto;
	overflow-x: hidden;
}
#Buttons {
	display: inline-block;
}

#saveRound {
	float: right;
	display: inline-block;
	position:relative;
}
</style>
<script>
function rollDie(sides) {
    if(!sides) sides = 6;
    return 1 + Math.floor(Math.random() * sides);
}

function rollDice(number, sides) {
    var total = [];
    while(number-- > 0) total.push(rollDie(sides));
    return total;
}
</script>
</head>

<body>
  <div id="wrapper">
		<input type="button" value="Save Round" id="saveRound">
    <div id="Prompt">
			<?php echo $_POST["ThreadName"]; ?>
    </div>
    <br />
    <div="Buttons">
      <form id="modtool" method="POST" action="">
        <table>
          <tr>
            <td>
              <td><b>USER</b> </td>
              <td>
                <select name="user" id="User">
                  <option id="PC00">0</option>
                  <option id="PC01">1</option>
                  <option id="PC02">2</option>
                  <option id="PC03">3</option>
                  <option id="PC04">4</option>
                  <option id="PC05">5</option>
                  <option id="PC06">6</option>
                  <option id="PC07">7</option>
                  <option id="PC08">8</option>
                  <option id="PC09">9</option>
                  <option id="PC010">10</option>
                </select>
              </td>
            </td>
            <td>
              <td><b>ACTION TAKEN</b> </td>
              <td>
                <input type="text" name="actionTaken"></input>
              </td>
              <td>
                <td><b>TARGET</b> </td>
                <td>
                  <select name="target" id="target">
                    <option id="PC00">0</option>
                    <option id="PC01">1</option>
                    <option id="PC02">2</option>
                    <option id="PC03">3</option>
                    <option id="PC04">4</option>
                    <option id="PC05">5</option>
                    <option id="PC06">6</option>
                    <option id="PC07">7</option>
                    <option id="PC08">8</option>
                    <option id="PC09">9</option>
                    <option id="PC010">10</option>
                  </select>
                </td>
              </td>
          </tr>
          <tr>
            <td>
              <td><b>DICE SIDES</b> </td>
              <td>
                <select name="typeOfDice" id="typeOfDice">
                  <option id="D20">20</option>
                  <option id="D100">100</option>
									<option id="D2">2</option>
									<option id="D3">3</option>
									<option id="D4">4</option>
									<option id="D5">5</option>
									<option id="D6">6</option>
									<option id="D7">7</option>
									<option id="D8">8</option>
									<option id="D9">9</option>
									<option id="D10">10</option>
                </select>
              </td>
            </td>
            <td>
              <td><b>AMOUNT OF DICE</b>
                <td>
                  <select name="amountOfDice" id="amountOfDice">
                    <option id="1Dice">1</option>
                    <option id="2Dice">2</option>
                    <option id="3Dice">3</option>
                    <option id="4Dice">4</option>
                    <option id="5Dice">5</option>
                    <option id="6Dice">6</option>
                    <option id="7Dice">7</option>
                    <option id="8Dice">8</option>
                    <option id="9Dice">9</option>
                    <option id="10Dice">10</option>
                  </select>
                </td>
              </td>
              <td>
                <td><b>MODIFIER</b> </td>
                <td>
                  <select name="bonus" id="bonus">
                    <option id="plus0">0</option>
                    <option id="plus1">+1</option>
                    <option id="plus2">+2</option>
                    <option id="plus3">+3</option>
                    <option id="plus4">+4</option>
                    <option id="plus5">+5</option>
                    <option id="plus6">+6</option>
                    <option id="plus7">+7</option>
                    <option id="plus8">+8</option>
                    <option id="plus9">+9</option>
                    <option id="plus10">+10</option>
                    <option id="Minus1">-1</option>
                    <option id="Minus2">-2</option>
                    <option id="Minus3">-3</option>
                    <option id="Minus4">-4</option>
                    <option id="Minus5">-5</option>
                    <option id="Minus6">-6</option>
                    <option id="Minus7">-7</option>
                    <option id="Minus8">-8</option>
                    <option id="Minus9">-9</option>
                    <option id="Minus10">-10</option>
                  </select>
                </td>
              </td>
          </tr>
          <tr>
            <td>
            </td>
            <td>
              <input type="submit" name="submitRound" id="submit"></input>
            </td>
  <!--          <td>
            </td>
						<td>
            </td>
						<td>
							<b>Special roll</b>
						<input type="checkbox" name="specialRoll" id="specialRoll"></input>
            </td>
						<td>
						</td>-->
          </tr>
        </table>
      </form>
		</div>
	</div>
<script>
$( "#modTool" ).submit(function( event ) {
	event.preventDefault();
	console.log($(this).serialize());

	var a = document.getElementById("modTool").elements.namedItem("user").value;
	var b = document.getElementById("modTool").elements.namedItem("actionTaken").value;
	var c = document.getElementById("modTool").elements.namedItem("target").value;
	var amount = document.getElementById("modTool").elements.namedItem("amountOfDice").value;
	var sides = document.getElementById("modTool").elements.namedItem("typeOfDice").value;
	var d = document.getElementById("modTool").elements.namedItem("bonus").value;

	var diceRoll = rollDice(amount, sides);

	var display=document.getElementById("Prompt");
	display.innerHTML += "&gt; " + a + " uses " + b + " at " + c + "<br />" + "&gt; " + "Result: " + diceRoll + " Modifier: " + d + "<br /><br />";
	});
</script>
<script>
/*
document.getElementById('PC01').innerHTML =
  <?php // echo $_POST["Player1name"]; ?>;

var player2 document.getElementById("PC02").innerHTML =
var player3 document.getElementById("PC03").innerHTML =
var player4 document.getElementById("PC04").innerHTML =
var player5 document.getElementById("PC05").innerHTML =
var player6 document.getElementById("PC06").innerHTML =
var player7 document.getElementById("PC07").innerHTML =
var player8 document.getElementById("PC08").innerHTML =
var player9 document.getElementById("PC09").innerHTML =
var player10 document.getElementById("PC010").innerHTML =
*/
</script>
	</body>
</html>
