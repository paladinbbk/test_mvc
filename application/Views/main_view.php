{% extends "layout.php" %}

{% block content %}
<div class="container">

      <div class="row row-offcanvas row-offcanvas-right">

        <div class="col-12 col-md-9">
          <div class="jumbotron">
            <h1>Hello, world!</h1>
            <p>This is an example to show the potential of an offcanvas layout pattern in Bootstrap. Try some responsive-range viewport sizes to see it in action.</p>
			<a class="btn btn-primary" href="{{url.generate('news')}}" role="button">Blog &raquo;</a>
          </div>
        </div><!--/span-->


      </div><!--/row-->
{% endblock %}