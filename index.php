<?php


    include "logic.php";


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

    <!--- Google Fonts --->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Thambi+2:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Font Awesone Library -->
    <script src="https://kit.fontawesome.com/fb0cd692ab.js" crossorigin="anonymous"></script>

    <!-- My Stylesheet -->
    <link rel="stylesheet" href="covid.css">

    <title>Covid-19 Tracker</title>
</head>
<body>
    
    <div class="container-fluid bg-light p-5 text-center my-3">
        <h1>Covid-19 Tracker</h1>
        <h5 class="text-muted">An opensource project to keep track of all the <b>COVID-19</b> cases around the World.</h5>
    </div>

    <div class="container my-5">
        <div class="row text-center">
        
        <div class="clo-4 text-warning">
            <h5>Confiremed</h5>
            <?php echo $total_confirmed; ?>
        </div><br/>

        <div class="clo-4 text-success">
            <h5>Recovered</h5>
            <?php echo $total_recovered; ?>
        </div><br/>

        <div class="clo-4 text-danger">
            <h5>Deaths</h5>
            <?php echo $total_deaths; ?>
        </div><br/>
        
        </div>
    </div>

    <div class="container text-center my-3 p-4 bg-light">
        <h4 class="text-info"><b>"Prevention Is Better Than Cure"</b></h4>
        <p class="text-muted"><b><u>Stay Home, Stay Safe</b></u></p>
    </div>

    <div class="container-fluid">

        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Countries</th>
                    <th scope="col">Confirmed Cases</th>
                    <th scope="col">Recovered</th>
                    <th scope="col">Deaths</th>
                </tr>
            </thead>

            <tbody>
                <?php

                    foreach($data as $key => $value){
                        $increase = $value[$days_count]['confirmed'] - $value[$days_count_prev]['confirmed']

                ?>

                        <tr>
                            <th><?php echo $key; ?></th>
                            <td>
                                <?php echo $value[$days_count]['confirmed']; ?>
                                <?php if($increase != 0 ){ ?>
                                <small class="text-danger pl-3 my-4"><i class="fas fa-chevron-up"></i><?php echo $increase; ?></small>
                                <?php } ?>
                            </td>

                            <td>
                                <?php echo $value[$days_count]['recovered']; ?>
                            </td>

                            <td>
                                <?php echo $value[$days_count]['deaths']; ?>
                            </td>
                        </tr>


                <?php

                    }

                ?>

            </tbody>

        </table>

    </div>

    <footer class="footer mt-auto py-3 text-center bg-light">
                    <div class="container">
                        <span class="text-muted">Copyright @Mayank Chanabhatti</span>
                    </div>
    </footer>

</body>
</html>