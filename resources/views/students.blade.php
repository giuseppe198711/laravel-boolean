<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <table>
      <thead>
        <tr>
          <th>nome</th>
          <th>cognome</th>
          <th>data_di_nascita</th>
          <th>sesso</th>
        </tr>
      </thead>
           @foreach ($students as $student)
             <tr>
               <td>{{$student->nome}}</td>
               <td>{{$student->cognome}}</td>
               <td>{{$student->data_di_nascita}}</td>
               <td>{{$student->sesso}}</td>
             </tr>
           @endforeach





    </table>

  </body>
</html>
