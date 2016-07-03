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
<h3>Ordered list</h3>
<ol>
{{ block('list') }}
</ol>
</body>
</html>