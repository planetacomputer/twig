    <!-- begin: primary.tmpl -->
    <table>
      <tr>
        {% for item in nav.primary %}
        <td><a href="{{ item.url }}">{{ item.name|upper }}</a></td>
        {% endfor %}
      </tr> 
    </table>
    <!-- end: primary.tmpl -->