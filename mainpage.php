<html>
<head>
<meta charset="UTF-8">
<script>
function combatantsPicked (selectObject) {
    var value = selectObject.value;
    var i = 0;
    document.getElementById('combatantDiv').innerHTML = '';
        while (i < value) {
            i++;
            var div = '<div class="combatant" id="player'+i+'"><table><tr><td><b>Player Name</b><br/><input type ="text" id="Player'+i+'name" name="Player'+i+'Name"><br/><br/></td><td><b>Account Link</b><br/><input type ="text" id="Player'+i+'link" name="Player'+i+'Link"></div><br/><br/></td></tr></table>';
            document.getElementById('combatantDiv').innerHTML += div;
        }
    }
</script>
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

.submission {
float: left;
width: 49%;

}
.logs {
float: left;
width: 49%;
}

#logid {
  display: block;
  height: 200px;
  width: 250px;
  overflow-y: auto;
  overflow-x: hidden;

}
</style>

</head>
<body>

  <div id="wrapper">
    <div class="submission">
      <br />
    <form action="modtool.php" method="post">
      <table>
        <tr>
          <td><b>Thread Name</b><br /></td>
          <td><input type="text" name="ThreadName"></input><br /></td>
        </tr>
        <tr>
          <td><b>Thread URL</b><br /></td>
          <td><input type="url" name="ThreadURL"></input><br /><br /></td>
        </tr>
        <tr>
          <td><b>Mod Account name</b><br /></td>
          <td><input type="text" name="ModName"></input><br /></td>
        </tr>
        <tr>
          <td><b>Mod Account Link</b><br /></td>
          <td><input type="url" name="ModURL"></input><br /><br /></td>
        </tr>
        <tr>
          <td><b>Number of combatants</b> </td>
          <td><select id="PlayerCount" onfocus="this.selectedIndex=0;" onchange="combatantsPicked(this);">
            <option id="PC0">0</option>
            <option id="PC1">1</option>
            <option id="PC2">2</option>
            <option id="PC3">3</option>
            <option id="PC4">4</option>
            <option id="PC5">5</option>
            <option id="PC6">6</option>
            <option id="PC7">7</option>
            <option id="PC8">8</option>
            <option id="PC9">9</option>
            <option id="PC10">10</option>
          </select></td>
        </tr>
      </table>
      <br /><br /><br />
  <!--combatantDiv changes according to the combatantsPicked script at the top -->
      <div id="combatantDiv"></div>
      <br /><br />
      <input type="submit" name="SubmitMod"></input>
    </form>
  </div>
    <table>
      <tbody id="logid">
        <div class="logs">
          <tr>
              <td>Logged Mod #1</td>
          </tr>
          <tr>
              <td>Logged Mod #2</td>
          </tr>
          <tr>
              <td>Logged Mod #3</td>
          </tr>
          <tr>
              <td>Logged Mod #4</td>
          </tr>
          <tr>
              <td>Logged Mod #5</td>
          </tr>
          <tr>
              <td>Logged Mod #6</td>
          </tr>
          <tr>
              <td>Logged Mod #7</td>
          </tr>
          <tr>
              <td>Logged Mod #8</td>
          </tr>
          <tr>
              <td>Logged Mod #9</td>
          </tr>
          <tr>
              <td>Logged Mod #10</td>
          </tr>
          <tr>
              <td>Logged Mod #11</td>
          </tr>
          <tr>
              <td>Logged Mod #12</td>
          </tr>
          <tr>
              <td>Logged Mod #13</td>
          </tr>
          <tr>
              <td>Logged Mod #14</td>
          </tr>
          <tr>
              <td>Logged Mod #15</td>
          </tr>
          <tr>
              <td>Logged Mod #16</td>
          </tr>
          <tr>
              <td>Logged Mod #17</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>

</body>
</html>
