<html>
  <title>Filtros</title>
  <head></head>
  <body>
  {{ "now"|date("d M Y h:i")  }} <br/>
  {{ "now"|date("d/m/y")  }}


  <br/>
   {{ "the cow jumped over the moon"|upper  }} <br/>
  {{ "the cow jumped over the moon"|capitalize  }} <br/>
  {{ "the cow jumped over the moon"|title  }} <br/>
  {{ "The Cow jumped over the Moon"|lower  }} <br/>
  {{ "<div>I said \"<b>Go away!</b>\"</div>"|striptags  }} <br/>
   {{ "I want a red boat"|replace({"red" : "yellow", "boat" : "sports car"})  }} <br/>
     Escaped output: {{ html|escape }} <br/>
  
  Raw output: {{ html|raw }} <br/>
  {% autoescape true %}
  Escaped output: {{ html }} <br/>
  {% endautoescape %}  
  
  {% autoescape false %}
  Raw output: {{ html }} 
  {% endautoescape %}
  </body>
</html>