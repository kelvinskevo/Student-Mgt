<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>ReportForm</title>
</head>

<body>
    <div class="container">
        <div class="row p-3">
            <div class="col-6 ">
                <img src="{{ asset('images/school_logo-removebg-preview.png') }}" alt="logo" class="img-fluid"
                    style="max-width: 100px;">
            </div>
            <div class="col-6 text-end">
                <p class="mb-0">Matunda</p>
                <p class="mb-0">0722479353</p>
                <p class="mb-0">matundasa@gmail.com</p>
            </div>
        </div>
        <div class="container bg-dark text-light text-center p-2">
            ACADEMIC REPORT FORM -FORM 1 - END YEAR COMBINED - (2023 TERM 3)
        </div>
        <div class="row">
            <div class="col-6">
                <div class="row">
                    <div class="col d-flex justify-content-center align-items-center">
                        <img src="{{ asset('images/pp-removebg-preview.png') }}" alt="picture" class="img-fluid "
                            style="max-width: 130px;">
                    </div>
                    <div class="col mt-3">
                        <p>NAME: Jane Doe</p>
                        <p>ADMNO: 2030</p>
                        <p>FORM: 1 Central</p>
                        <p>KCPE:</p>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <canvas id="myChart" width="400" height="150"></canvas>

            </div>
            <div class="row p-3 bg-primary">
                <div class="col border-end text-center">
                    Mean
                </div>
                <div class="col border-end text-center">
                    Mean
                </div>
                <div class="col border-end text-center">
                    Mean
                </div>
                <div class="col border-end text-center">
                    Mean
                </div>
                <div class="col text-center">
                    Mean
                </div>
            </div>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th rowspan="2">SUBJECT</th>
                        <th rowspan="2">CAT 1 </br> x/40</th>
                        <th rowspan="2">MID TERM </br> x/20</th>
                        <th rowspan="2">END YEAR </br> x/40</th>
                        <th colspan="3">END YEAR COMBINED</th>
                        <th rowspan="2">RANK</th>
                        <th rowspan="2">COMMENT</th>
                        <th rowspan="2">TEACHER</th>
                    </tr>
                    <tr>
                        <th>MARKS</th>
                        <th>DEV.</th>
                        <th>GR.</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>English</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Kiswahili</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Mathematics</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Biology</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Phyics</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Chemistry</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>History & Government</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Geography</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>C.R.E</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Agriculture</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Business Studies</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
            <div class="row">
                <div class="col">
                    <div>
                        graph on performance over time
                    </div>
                    <div>
                        school dates
                    </div>
                </div>
                <div class="col">
                    <div class="row">
                        <div class="col-10">
                            Remarks
                            <div class="container">
                                <h6>Eric Siachi - Class Teacher</h6>
                                <p>You are capable of doing better than this.Put in more effort in your work.</p>
                            </div>
                            <div class="container">
                                <h6>Mrs Luvanda Mary - Principal Teacher</h6>
                                <p>You can do much better than this you have the capability.Work on your weak areas
                                    especially
                                    Mathematics.</p>
                            </div>
                        </div>
                        <div class="col-2">
                            Signature
                        </div>
                    </div>
                </div>

            </div>

</body>

</html>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
    var ctx = document.getElementById('myChart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: ['Engl', 'Kis', 'Mat', 'Bio', 'Phy', 'Chem', 'His', 'Geo', 'CRE', 'Agr', 'BST'],
            datasets: [{
                label: 'Subject Performance - Student vs Class',
                data: [55, 54, 25, 37, 41, 62, 52, 35, 45, 38, 55],
                borderColor: 'rgb(75, 192, 192)',
                borderWidth: 1,
                fill: false
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true,
                    ticks: {
                        stepSize: 25,
                        max: 100,
                        min: 0
                    }
                }
            }
        }
    });
</script>
