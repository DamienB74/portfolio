<!-- Contenu de la Div compétences pour la page "aboutme" -->
<div id="contenuCompetences"> <!-- encadré -->
	<h1 style="text-align: center; ">Mes compétences</h1>
	<div class="row">
		<div class="pie col-lg-3 col-md-3 col-sm-6 col-xs-6">				
			<span class="min-chart" id="chart-php" data-percent="50"><span class="percent"></span></span>
			<h5><span class="badge green">PHP et Symfony</span></h5>
		</div>
		<div class="pie col-lg-3 col-md-3 col-sm-6 col-xs-6">
			<span class="min-chart" id="chart-php" data-percent="60"><span class="percent"></span></span>
			<h5><span class="badge green">HTML / CSS</span></h5>
		</div>
		<div class="pie col-lg-3 col-md-3 col-sm-6 col-xs-6">
			<span class="min-chart" id="chart-php" data-percent="45"><span class="percent"></span></span>
			<h5><span class="badge green">MySQL</span></h5>
		</div>
		<div class="pie col-lg-3 col-md-3 col-sm-6 col-xs-6">
			<span class="min-chart" id="chart-php" data-percent="45"><span class="percent"></span></span>
			<h5><span class="badge green">Javascript (JQuery)</span></h5>
		</div>
	</div>
	<div class="row">
		<div class="pie col-lg-3 col-md-3 col-sm-6 col-xs-6">				
			<span class="min-chart" id="chart-php" data-percent="40"><span class="percent"></span></span>
			<h5><span class="badge green">ASP .NET / C#</span></h5>
		</div>
		<div class="pie col-lg-3 col-md-3 col-sm-6 col-xs-6">
			<span class="min-chart" id="chart-php" data-percent="35"><span class="percent"></span></span>
			<h5><span class="badge green">Bootstrap</span></h5>
		</div>
		<div class="pie col-lg-3 col-md-3 col-sm-6 col-xs-6">
			<span class="min-chart" id="chart-php" data-percent="25"><span class="percent"></span></span>
			<h5><span class="badge green">CMS (Wordpress, Joomla)</span></h5>
		</div>
		<div class="pie col-lg-3 col-md-3 col-sm-6 col-xs-6">
			<span class="min-chart" id="chart-php" data-percent="65"><span class="percent"></span></span>
			<h5><span class="badge green">Anglais</span></h5>
		</div>
	</div>
</div>

<script> //script pour les graphiques
$(function () {
		    $('.min-chart#chart-php').easyPieChart({
		        barColor: "#000",
		        trackColor: "#AEAEAE",
		        lineWidth: 10,
		        animate: 1200,
		        scaleColor: false,
		        lineCap: "square", //forme du bout de la bar
		        onStep: function (from, to, percent) {
		            $(this.el).find('.percent').text(Math.round(percent));
		        }
		    });
		});
</script>
		
