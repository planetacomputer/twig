<!-- begin: secondary.tmpl -->
    <ul>
      {% for item in nav.secondary %}
      <li><a href="{{ item.url }}">{{ item.name }}</a></li>
      {% endfor %}
    </ul> 
    <!-- end: secondary.tmpl -->