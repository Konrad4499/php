<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
        <table>
                 <tr>
                     <th>imię</th>
                     <th>nazwisko</th>
                 </tr> 
        </table>
 <?php
      //odczytanie i wyswietlanie miejsc z tabeli 
      while ($row - mysql_fetch_row() <= 10) {
          
      }
      if($link = mysqli_connect("localhost","root","","testowa")):
         //udało sie połaczyć z bazą 
          {
               echo ("nie udało sie połaczyć")
           }
        $query = 'SELECT * FROM  "testowa"';
        if($result = mysql_query($link ,$query)):
            //udało się wykonać zapytanie 

           

            exit;
            mysql_close($link)


    

?>
</body>
</html>