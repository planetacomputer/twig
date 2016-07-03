<html>
  <head>
    <link rel="stylesheet" type="text/css" href="main.css" />
  </head>
  <body>
    <div id="page">
      <div id="header">
      {% include 'templating/primary.tpl' %}
      </div>

      <div id="left">
        {% include 'templating/secondary.tpl' %}
      </div>
    
      <div id="right">
      This is the main page content. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
      </div>
    
      <div id="footer">
        {% include 'templating/footer.tpl' %}
      </div>
    </div>  
  </body>
</html>