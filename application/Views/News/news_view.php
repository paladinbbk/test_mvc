{% extends "layout.php" %}

{% block title %}
Новости
{% endblock %}

{% block content %}
<div class="row row-offcanvas row-offcanvas-right">

	<div class="col-12 col-md-9">
		<div class="row">

			{% for article in news %}
            <div class="col-6 col-lg-4">
				<h2>{{article.title}}</h2>
				<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
				<p><a class="btn btn-secondary" href="{{url.generate('article',{slug: article.slug})}}" role="button">View details &raquo;</a></p>
				<p><a class="btn btn-secondary" href="{{url.generate('edit_news',{id: article.id})}}" role="button">Edit &raquo;</a></p>
            </div><!--/span-->
			{% endfor %}
		</div><!--/row-->
	</div><!--/span-->

</div><!--/row-->

{% endblock %}