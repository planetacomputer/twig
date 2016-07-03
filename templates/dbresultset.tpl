<html>
  <head>
    <style type="text/css">
      table {
        border-collapse: collapse;
      }        
      tr.heading {      
        font-weight: bolder;
      }        
      td {
        border: 1px solid black;
        padding: 0 0.5em;
      }    
    </style>  
  </head>
  <body>
    <h2>Alimentos</h2>
    <table>
      <tr class="heading">
        <td>Id</td>
        <td>Nombre</td>
        <td>Energia</td>
        <td>Proteina</td>
      </tr> 
      {% for d in data %}
      <tr>
        <td>{{ d.id|escape }}</td>
        <td>{{ d.nombre|escape }}</td>
        <td>{{ d.energia|escape }}</td>
        <td>{{ d.proteina|escape }}</td>
      </tr> 
      {% endfor %}
    </table>
  </body>
</html>