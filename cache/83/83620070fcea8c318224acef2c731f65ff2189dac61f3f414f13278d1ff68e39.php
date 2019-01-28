<?php

/* home\index.html.twig */
class __TwigTemplate_6bdee4e9bd957ddb962d2c895ee0dde5e6a878dabf937a6afb377070b4f7f5e8 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">


    <title>HotelHeaven.gr - Welcome</title>

    <!-- Bootstrap core CSS -->
    <link href=\"resources/bootstrap-3.3.7-dist/css/bootstrap.min.css\" rel=\"stylesheet\">


    <!-- Custom styles for this template -->
    <link type=\"text/css\" href=\"resources/css/welcome_page.css\" rel=\"stylesheet\">

</head>

<body>

<nav class=\"navbar navbar-default\">

    <div class=\"navbar-header\">
        <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
            <span class=\"sr-only\">Toggle navigation</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
        </button>
    </div>
    <div id=\"navbar\" class=\"navbar-collapse collapse\">
        <ul class=\"nav navbar-nav navbar-right\">

            <li class=\"borderlist\"><a href=\"\">EUR</a></li>
            <li class=\"dropdown\">
                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">
                    ";
        // line 38
        echo ($context["name"] ?? null);
        echo "
                    <span class=\"caret\"></span></a>
                <ul class=\"dropdown-menu\">

                    ";
        // line 42
        if ((($context["logged_in"] ?? null) == true)) {
            // line 43
            echo "                        <li><a href=\"./profile.php\"><span class=\"glyphicon glyphicon-user\"></span>&nbsp;&nbsp;&nbsp;Προφίλ</a></li>
                        <li role=\"separator\" class=\"divider\"></li>
                        <li><a href=\"./logout.php\"><span class=\"glyphicon glyphicon-off\"></span>&nbsp;&nbsp;&nbsp;Αποσύνδεση</a></li>
                    ";
        } else {
            // line 47
            echo "                    <li><a href=\"auth\">Σύνδεση</a></li>
                    <li role=\"separator\" class=\"divider\"></li>
                    <li><a href=\"auth/signup\">Εγγραφή</a></li>
                    ";
        }
        // line 51
        echo "                </ul>
            </li>
        </ul>
    </div>

</nav>

<section id=\"showcase\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-xs-12 col-xs-push-1 col-sm-offset-1 col-sm-3  col-md-offset-1 col-md-3\">
                <div class=\"showcase-left\">
                    <img src=\"resources/images/logo.png\">
                </div>
            </div>
            <div class=\"catchphrase col-xs-12 col-xs-push-1 col-sm-7  col-md-7\">
                <div class=\"showcase-right\">
                    <h1 class=\"text-center\">Βρες το ξενοδοχείο που σου ταιριάζει στην καλύτερη τιμή</h1>
                </div>
            </div>
        </div>
    </div>
</section>



<section id=\"searchbox\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-8 col-md-offset-2 center\">

                <div class=\"input-group\">
                    <div class=\"input-group-addon\">
                        <span class=\"glyphicon glyphicon-search\"></span>
                    </div>
                    <input type=\"text\" class=\"form-control\" placeholder=\"π.χ Λευκάδα\">
                    <span class=\"input-group-btn\">
                            <button class=\"btn btn-default\" type=\"button\">Αναζήτηση</button>
                        </span>

                </div>
            </div>
        </div>
    </div>
</section>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src=\"resources/jquery-3.2.1/jquery-3.2.1.min.js\"></script>
<script src=\"resources/bootstrap-3.3.7-dist/js/bootstrap.min.js\"></script>
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "home\\index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 51,  77 => 47,  71 => 43,  69 => 42,  62 => 38,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "home\\index.html.twig", "C:\\xampp\\htdocs\\clonesite\\views\\home\\index.html.twig");
    }
}
