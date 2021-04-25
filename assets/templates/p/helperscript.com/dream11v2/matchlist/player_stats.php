<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Dream11</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Dark.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
</head>

<body>

    <div class="container">
        <nav class="navbar navbar-light navbar-expand-md bg-white">
            <a class="navbar-brand " href="dream11-match-prediction-cricket.html"><img src="img/dream11prediction-logo.png" /></a>
            <div class="container-fluid">
                <a class="navbar-brand" href="#">

                </a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navcol-1">
                    <ul class="nav navbar-nav">
                        <li class="nav-item" role="presentation"><a class="nav-link active" href="wallet.html">Wallet</a></li>
                    </ul>
                    <ul class="nav navbar-nav">
                        <li class="nav-item" role="presentation"><a class="nav-link active" href="user_match_history.html">Your Match history</a></li>
                    </ul>
                    <ul class="nav navbar-nav">
                        <li class="nav-item" role="presentation"><a class="nav-link active" href="scorecard.html">Scorecard</a></li>
                    </ul>
                    <ul class="nav navbar-nav">
                        <li class="nav-item" role="presentation"><a class="nav-link active" href="./logout.php">Sign out</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

    <div class="mt-5">

        <div>
            <h3>Name: MS Dhoni</h3>
            <h4>Popularity: 79%</h4>
        </div>
        <div id="curve_chart" style="width: 100%; height: 500px"></div>
    </div>



    </div>

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
<script type="text/javascript">
    google.charts.load('current', {
        'packages': ['corechart']
    });
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
        var data = google.visualization.arrayToDataTable([
            ['Match', 'Sales'],
            ['20/08/2020', 90],
            ['21/08/2020', 75],
            ['22/08/2020', 12],
            ['23/08/2020', 57]
        ]);

        var options = {
            title: 'Player performance',
            curveType: 'function',
            legend: {
                position: 'bottom'
            }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

        chart.draw(data, options);
    }
</script>