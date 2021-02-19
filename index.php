<!-- Apply your understanding of handling HTML forms in PHP to create a calculator. -->

<html>
  <body>
<!--Your code goes here-->
    <h2>Addition</h2>
    <form action="addition.php" method="get">
      First number: <input type="number" name="add_first"><br>
      Second number: <input type="number" name="add_second"><br>
      <button type="submit">ADD</button>
    </form>
    
    <h2>Dividion</h2>
    <form action="division.php" method="get">
      First number: <input type="number" name="div_first"><br>
      Second number: <input type="number" name="div_second"><br>
      <button type="submit">DIVIDE</button>
    </form>

    <a href="index.php">Reset</a>
  </body>
</html>