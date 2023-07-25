<table>
  <tr>
    <td>Filter Name</td>
    <td>Filter ID</td>
  </tr>
  <?php
  $number = "123";

  if (filter_var($number, FILTER_VALIDATE_INT)) {
      echo "El número es un entero válido.";
  } else {
      echo "El número no es un entero válido.";
  }  
  ?>
</table>