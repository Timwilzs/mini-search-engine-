<!DOCTYPE html>
<html>
<body>
<p>Click the button to display a command</p>

<button onclick="myFunction()">Try it</button>

<p id="demo"></p>

<script>
function myFunction() {
  var person = prompt("Please enter your name", "Mr. Timwilzs");
  if (person != null) {
    document.getElementById("demo").innerHTML =
    "Hello " + person + "! How are you today?";
 gt }
}
</script>

</body>
</html>