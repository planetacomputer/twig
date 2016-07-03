<html>
  <head></head>
  <body>   
    <h3>Unordered list</h3>
    <ul>
    {% block list %}
      <li>one</li>
      <li>two</li>
      <li>three</li>
    {% endblock list %}
    </ul>
  </body>
</html>