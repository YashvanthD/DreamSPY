<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Dream11</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Dark.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<link rel="stylesheet" href="../../../maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<link rel="stylesheet" href="../dream11.css">

<body>
<div class="container">
        <nav class="navbar navbar-light navbar-expand-md bg-white">
            <a class="navbar-brand " href="dream11-match-prediction-cricket.php"><img src="img/dream11prediction-logo.png" /></a>
            <div class="container-fluid">

                </a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navcol-1">
                    <ul class="nav navbar-nav">
                        <li class="nav-item" role="presentation"><a class="nav-link active" href="leagues.php">Leagues</a></li>
                    </ul>
                    <ul class="nav navbar-nav">
                        <li class="nav-item" role="presentation"><a class="nav-link active" href="wallet.php">Wallet</a></li>
                    </ul>
                    <ul class="nav navbar-nav">
                        <li class="nav-item" role="presentation"><a class="nav-link active" href="user_match_history.php">Your Match history</a></li>
                    </ul>
                    <ul class="nav navbar-nav">
                        <li class="nav-item" role="presentation"><a class="nav-link active" href="scorecard.php">Scorecard</a></li>
                    </ul>
                    <ul class="nav navbar-nav">
                        <li class="nav-item" role="presentation"><a class="nav-link active" href="./logout.php">Sign out</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <div style="margin-top: 80px;">
        <h1 class="text-center">Current balance is your wallet: Rs <?php
        session_start();
        echo $_SESSION['balance']; ?></h1>
        <div class="row">
            <div class="col col-md-3 col-lg-3"></div>
            <div class="col">
                <div class="p-5 bg-white mt-4">
                    <form style="margin-top: 30px;" action="addcash.php" method="post"> 
                        <div class="form-group"><input class="form-control" type="number" name="add_balance" placeholder="Enter Amount"></div>
                        <div class="form-group"><button type="submit"  class="btn btn-primary btn-block" type="button">Add Money</button></div>
                    </form>
                </div>
            </div>
            <div class="col col-md-3 col-lg-3"></div>
        </div>
    </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>