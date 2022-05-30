<!DOCTYPE html>
<html>
   <head>
      <!-- Metadata -->
      <meta charset="utf-8">
      <meta name="description" content="Do/While Loops, with PHP">
      <meta name="keywords" content="immaculata, ics2o">
      <meta name="author" content="Marcus Wehbi">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!-- Link for favicon -->
      <link rel="apple-touch-icon" sizes="180x180" href="./favicon/apple-touch-icon.png">
      <link rel="icon" type="image/png" sizes="32x32" href="./favicon/favicon-32x32.png">
      <link rel="icon" type="image/png" sizes="16x16" href="./favicon/favicon-16x16.png">
      <link rel="manifest" href="./favicon/site.webmanifest">
      <!-- Link for stylesheet -->
      <link rel="stylesheet" href="./css/style.css">
      <!-- Webpage title -->
      <title>Factorials Display</title>
   </head>
   <body>
      <!-- Webpage headers -->
      <h1>Factorials Display, in PHP</h1>
      <h3>This program will display the factorial of a positive integer.</h3>
      <!-- Table to format page (form, image, etc.) -->
      <table>
         <tr align = "center">
            <td valign="top" align="right">
               <!-- Form to retrieve information (Users positive integer of choice) -->
               <form action="./display.php" method="post" target="result">
                  <label for="pos-int">Number 1:</label>
                  <input type="number" step="1" min="0" name="pos-int" id="pos-int"><br><br>
                  <br><br>
                  <input type="submit" value="Display Factorial">
               </form>
            </td>
            <!-- Image (factorial) -->
            <td valign="top" align="left">
               <img src="./images/zero-factorial.webp" alt="Factorial" width="40%">
            </td>
         </tr>
      </table>
      <!-- Iframe for results -->
      <iframe id="result" name="result">
      </iframe>
   </body>
</html>