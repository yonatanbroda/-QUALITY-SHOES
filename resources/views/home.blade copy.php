{{-- NOTA KARLA:
    EXTENDS SON DIRECTIVAS DE BLADE --}}
@extends('adminlte::page')

@section('title', 'Quality-Store')
@section('content_header')


    <h1>

        <center>Menu de Inicio</center>
    </h1>

@stop

{{-- NOTA KARLA:
    CONTENT ES EL NOMBRE QUE SE DEFINIO EN --}}
@section('content') {{-- se especifica a que section se esta haciendo referencia --}}

    @can('Gestionar Productos')
        <p>
            <center>Bienvenido al panel de administrador.

                grafica
        </p>





        <nav class="navbar">
            <a class="navbar-brand" href="#">
                <div class="icon-container">
                    <img class="icon hexagon" />
                </div>
                <span class="name">Financial CRM</span>
            </a>
            <ul class="navbar-nav">
                <li>
                    <a class="active"><img class="icon home" /><span>Home</span></a>
                </li>
                <li>
                    <a><img class="icon statistics" /><span>Statistics</span></a>
                </li>
                <li>
                    <a><img class="icon mail" /><span>Messages</span></a>
                </li>
                <li>
                    <a><img class="icon user" /><span>Profile</span></a>
                </li>
                <li>
                    <a><img class="icon file" /><span>Documents</span></a>
                </li>
            </ul>
            <div class="navbar-footer">
                <img class="image-documents" src="https://ozcanzaferayan.github.io/financial-crm/img/documents.svg"
                    alt="documents" />
                <div class="container">
                    <h2>PDF Report</h2>
                    <span>Annual detailed report</span>
                    <a href="#" download>Download</a>
                </div>
            </div>
        </nav>


        <main>

            <div class="charts-wrapper">
                <section role="credit-card">
                    <div class="top">
                        <img src="https://ozcanzaferayan.github.io/financial-crm/img/mastercard.svg" />
                        <img src="https://ozcanzaferayan.github.io/financial-crm/img/apple_pay.svg" class="apple_pay" />
                    </div>
                    <div class="ccNumber">
                        <span>˙˙˙˙ ˙˙˙˙ ˙˙˙˙ 5610</span>
                    </div>
                    <div class="ccBottom">
                        <div class="ccValidThru">
                            <label>VALID THRU</label>
                            <span>05/21</span>
                        </div>
                        <div class="ccCardHolder">
                            <label>CARD HOLDER</label>
                            <span>Robert</span>
                        </div>
                    </div>
                </section>

                <section role="chart" class="exchange-rates">
                    <h3 class="title">Exchange rates</h3>
                    <div id="chart_div"></div>
                    <canvas id="exchangeRates"></canvas>
                </section>
                <section role="chart" class="last-costs">
                    Last Costs
                    <div id="chart_div"></div>



                </section>
                <section role="chart" class="efficiency">
                    <h3 class="title">Efficiency</h3>
                    <div id="chart_div"></div>
                    <canvas id="efficiency"></canvas>

                </section>
            </div>
        </main>



        <script>
            /*EXCHANGE RATES*/
            var data = {
                labels: ["Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov"],
                datasets: [{
                    backgroundColor: "rgba(0,0,0,0)",
                    borderColor: "rgba(91,37,245, 1)",
                    borderWidth: 4.5,
                    data: [10.2, 10, 13, 12, 15, 13, 14.5, 11, 13.5, 13, 11],
                }]
            };

            var options = {
                maintainAspectRatio: false,
                legend: {
                    display: false
                },
                scales: {
                    yAxes: [{
                        stacked: true,
                        gridLines: {
                            display: true,
                            color: "rgba(91,37,245, 0.03)"
                        },
                        ticks: {
                            maxTicksLimit: 5,
                            min: 9,
                            max: 16
                        }
                    }],
                    xAxes: [{
                        gridLines: {
                            display: false
                        }
                    }]
                },
                elements: {
                    point: {
                        radius: 0
                    }
                }
            };


            var ctx = document.getElementById('exchangeRates').getContext('2d');
            var myLineChart = new Chart(ctx, {
                type: 'line',
                data: data,
                options: options
            });

            /*LAST COSTS*/
            var data = {
                labels: ["Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov"],
                datasets: [{
                    label: 'Spending',
                    backgroundColor: "rgba(91,37,245, 0.2)",
                    data: [500, 300, 800, 150, 200, 150, 800, 200, 800, 100],
                }, {
                    label: 'Arrival',
                    backgroundColor: "rgba(91,37,245, 1)",
                    data: [1000, 800, 1800, 1100, 1000, 800, 1800, 1600, 1800, 1200],
                }, ]
            };

            var options = {
                cornerRadius: 0,
                maintainAspectRatio: false,
                legend: {
                    position: 'bottom',
                    labels: {
                        fontColor: "rgba(0,0,0, 0.5)",
                        boxWidth: 20,
                        padding: 10
                    }
                },
                scales: {
                    yAxes: [{
                        gridLines: {
                            display: true,
                            color: "rgba(91,37,245, 0.03)"
                        },
                        ticks: {
                            maxTicksLimit: 5,
                        }
                    }],
                    xAxes: [{}]
                }
            };


            var ctx = document.getElementById('last_costs').getContext('2d');
            var myLineChart = new Chart(ctx, {
                type: 'bar',
                data: data,
                options: options
            });

            /*EFFICIENCY CHART*/

            var data = {
                labels: ["Spend", "Earned"],
                datasets: [{
                    label: "Population (millions)",
                    backgroundColor: ["rgba(91,37,245, 1)", "#dad7e9"],
                    data: [65, 35]
                }]
            };

            var options = {
                maintainAspectRatio: false,
                legend: {
                    position: 'bottom',
                    labels: {
                        fontColor: "rgba(0,0,0, 0.5)",
                        boxWidth: 20,
                        padding: 10
                    }
                },
            };


            var ctx = document.getElementById('efficiency').getContext('2d');
            var myLineChart = new Chart(ctx, {
                type: 'doughnut',
                data: data,
                options: options
            });
        </script>


        <style>
            /*NAVBAR*/
            :root {
                --primary-color: #5B25F5;
                --secondary-color: #9792c7;
                --secondary-color-with-opacity: #bab4e21f;
                --background-color: #F5F5FD;
                --background-color-hover: #e5e5ec;
                --text: #9792c7;
                --white: #fff;
                --black: #000;
            }


            .navbar-brand {
                padding: 2.188em 0em 2em 1em;
                text-decoration: none;
                color: var(--secondary-color);
            }

            .navbar-brand .icon-container {
                width: 2em;
                height: 2em;
                border-radius: 0.8em;
                margin-bottom: .5em;
                padding: 0.5em;
                background-color: var(--primary-color);
                display: flex;
                flex-direction: column;
                justify-content: center;
            }

            .navbar-brand .icon {
                width: 2em;
                height: 2em;
                background-color: #fff;
            }

            .navbar-brand .icon.hexagon {
                -webkit-mask: url(https://ozcanzaferayan.github.io/financial-crm/icon/hexagon.svg) no-repeat center;
                mask: url(https://ozcanzaferayan.github.io/financial-crm/icon/hexagon.svg) no-repeat center;
            }

            .navbar-brand .name {
                padding-top: 0.5em;
            }

            ul.navbar-nav {
                list-style: none;
                padding: 0;
                margin: 0;
            }

            .navbar-nav a {
                display: flex;
                color: var(--secondary-color);
                padding: 1em;
                text-decoration: none;
                align-items: center;
                cursor: pointer;
            }

            .navbar-nav a.active {
                color: var(--primary-color)
            }

            .navbar-nav a:not(.active):hover {
                background-color: var(--background-color-hover);
            }

            .navbar-nav .active .icon {
                background-color: var(--primary-color);
                width: 2em;
                height: 2em;
            }

            .icon {
                background-color: var(--secondary-color);
                width: 2em;
                height: 2em;
            }

            .navbar-nav img {
                margin-right: .5em;
            }


            /* Bottombar icons */

            .navbar-nav .icon.home {
                -webkit-mask: url(https://ozcanzaferayan.github.io/financial-crm/icon/home.svg) no-repeat center;
                mask: url(https://ozcanzaferayan.github.io/financial-crm/icon/home.svg) no-repeat center;
            }

            .navbar-nav .icon.statistics {
                -webkit-mask: url(https://ozcanzaferayan.github.io/financial-crm/icon/bar-chart-2.svg) no-repeat center;
                mask: url(https://ozcanzaferayan.github.io/financial-crm/icon/bar-chart-2.svg) no-repeat center;
            }

            .navbar-nav .icon.mail {
                -webkit-mask: url(https://ozcanzaferayan.github.io/financial-crm/icon/mail.svg) no-repeat center;
                mask: url(https://ozcanzaferayan.github.io/financial-crm/icon/mail.svg) no-repeat center;
            }

            .navbar-nav .icon.user {
                -webkit-mask: url(https://ozcanzaferayan.github.io/financial-crm/icon/user.svg) no-repeat center;
                mask: url(https://ozcanzaferayan.github.io/financial-crm/icon/user.svg) no-repeat center;
            }

            .navbar-nav .icon.file {
                -webkit-mask: url(https://ozcanzaferayan.github.io/financial-crm/icon/file.svg) no-repeat center;
                mask: url(https://ozcanzaferayan.github.io/financial-crm/icon/file.svg) no-repeat center;
            }

            .navbar-footer .image-documents {
                width: 100%;
                margin-bottom: -8em;
                position: relative;
                z-index: 1
            }

            .navbar-footer .container {
                background-color: var(--background-color);
                margin: .5em;
                padding: 1.688em;
                padding-top: 6em;
                display: flex;
                flex-direction: column;
                font-weight: normal;
                border-radius: 1.3em;
                position: relative;
                bottom: 0;
                box-sizing: border-box;
            }

            .navbar-footer h2 {
                margin-bottom: 0.25em;
                color: var(--black);
            }

            .navbar-footer span {
                color: var(--text);
                font-size: .8em;
            }

            .navbar-footer a {
                color: var(--white);
                background-color: var(--primary-color);
                text-decoration: none;
                text-align: center;
                padding: 1em;
                border-radius: 1.3em;
                margin-top: 1em;
            }

            @media screen and (max-width: 768px) {

                /* Tablet (768px) */
                .navbar {
                    bottom: 0;
                    width: 100%;
                    height: auto;
                    padding: 0.1em;
                    position: fixed;
                    margin: 0;
                    border-top: 1px solid var(--background-color);
                }

                .navbar-brand {
                    display: none;
                }

                .navbar-nav {
                    display: flex;
                    width: 100%;
                    height: auto;
                    justify-content: space-around;
                }

                .navbar-nav a {
                    float: left;
                    font-size: 0.8em;
                    padding: 1em 0.5em;
                }

                .navbar-nav .icon {
                    width: 2em;
                    height: 2em;
                }

                .navbar-nav img {
                    margin-right: .5em;
                }

                .navbar-footer {
                    display: none;
                }
            }

            @media screen and (max-width: 500px) {

                /* Phone (Large)*/
                .navbar-nav {
                    position: relative;
                    bottom: 0;
                    display: flex;
                    justify-content: space-around;
                }

                .navbar-nav a {
                    flex-direction: column;
                    align-items: center;
                }
            }

            @media screen and (max-width: 320px) {

                /* Phone (Small) */
                .navbar-nav span {
                    display: none;
                }
            }

            /*HEADER*/
            main {
                margin-top: 1em;
                margin-right: 1em;
                border-radius: 2.5em;
                margin-left: 18.75em;
                width: 100%;
                height: 100%;
                background-color: var(--background-color);
                padding: 2.3em;
            }

            main header {
                display: flex;
                justify-content: space-between;
                align-items: center;
            }

            main header .icon.search {
                -webkit-mask: url(https://ozcanzaferayan.github.io/financial-crm/icon/search.svg) no-repeat center;
                mask: url(https://ozcanzaferayan.github.io/financial-crm/icon/search.svg) no-repeat center;
            }

            main header .form-inline {
                display: flex;
                width: 100%;
            }

            main header input[type="search"] {
                border: none;
                background: none;
                margin-left: 0.5em;
                outline: none;
                font-size: 0.9rem;
                font-weight: 500;
                width: 100%;
                -webkit-appearance: none;
            }

            main header button {
                display: flex;
                align-items: center;
                background: none;
                border: 2px solid;
                border-color: var(--secondary-color-with-opacity);
                outline: none;
                border-radius: 0.8em;
                padding: .8em 1.2em;
                color: var(--text);
                font-weight: 600;
            }

            main header button.change-view {
                margin-right: 1.2em;
            }

            main header button.notification {
                border: none;
            }

            main header button.menu {
                border: none;
            }

            main header .change-view .icon {
                margin-right: 0.5em;
            }

            main header .icon.search {
                -webkit-mask: url(https://ozcanzaferayan.github.io/financial-crm/icon/search.svg) no-repeat center;
                mask: url(https://ozcanzaferayan.github.io/financial-crm/icon/search.svg) no-repeat center;
            }

            main header section[role="application"] {
                display: flex;
            }

            main header .icon.layout {
                -webkit-mask: url(https://ozcanzaferayan.github.io/financial-crm/icon/layout.svg) no-repeat center;
                mask: url(https://ozcanzaferayan.github.io/financial-crm/icon/layout.svg) no-repeat center;
            }

            main header .icon.notification {
                -webkit-mask: url(https://ozcanzaferayan.github.io/financial-crm/icon/bell.svg) no-repeat center;
                mask: url(https://ozcanzaferayan.github.io/financial-crm/icon/bell.svg) no-repeat center;
            }

            main header .icon.menu {
                -webkit-mask: url(https://ozcanzaferayan.github.io/financial-crm/icon/menu.svg) no-repeat center;
                mask: url(https://ozcanzaferayan.github.io/financial-crm/icon/menu.svg) no-repeat center;
            }

            main h1 {
                font-size: 3em;
                color: var(--black);
                margin-top: 0;
            }

            @media screen and (max-width: 768px) {

                /* Tablet (768px) */
                main {
                    margin-left: 0;
                    border-radius: 0;
                    margin: 0;
                    padding: 0em;
                }

                main header {
                    margin-bottom: 0em;
                    padding: 1em;
                }

                main header button.change-view {
                    display: none;
                }

                main h1 {
                    display: none;
                }
            }

            @media screen and (max-width: 500px) {
                /* Phone (Large)*/
            }

            @media screen and (max-width: 320px) {

                /* Phone (Small) */
                main header button {
                    padding: 0em 1.2em;
                }

                main header {
                    padding: 0.5em 0.7em;
                }
            }

            /*CHARTS*/
            .charts-wrapper {
                display: flex;
                align-items: center;
                flex-wrap: wrap;
            }

            main section[role="credit-card"] {
                width: 310px;
                height: 210px;
                background-color: var(--primary-color);
                border-radius: 2em;
                position: relative;
                margin-left: -4em;
                margin-bottom: 1em;
                padding: 2em;
                box-sizing: border-box;
                -webkit-box-shadow: 10px 10px 46px -6px rgba(104, 87, 150, 1);
                -moz-box-shadow: 10px 10px 46px -6px rgba(104, 87, 150, 1);
                box-shadow: 10px 10px 46px -6px rgba(104, 87, 150, 1);
            }

            main section[role="credit-card"] img {
                width: 4em;
                height: 100%;
            }

            main section[role="credit-card"] img.apple_pay {
                width: 3em;
            }

            main section[role="credit-card"] .top {
                display: flex;
                justify-content: space-between;
            }

            main section[role="credit-card"] .ccNumber {
                margin-top: 1.3em;
                display: flex;
                justify-content: space-between;
                color: var(--white);
                font-family: monospace;
                font-size: 1.2rem;
            }

            .ccBottom {
                margin-top: 1.2em;
                display: flex;
                justify-content: space-between;
                color: var(--white);
            }

            .ccValidThru,
            .ccCardHolder {
                display: flex;
                flex-direction: column;
            }

            .ccCardHolder {
                margin-right: 1em;
            }

            .ccBottom label {
                opacity: .5;
                font-size: .7em;
            }

            main section[role="chart"] {
                width: 100%;
                margin-left: 1em;
                height: 18em;
                background-color: var(--white);
                border-radius: 2em;
                margin-bottom: 1em;
                padding: 2em;
                padding-bottom: 5em;
                box-sizing: border-box;
            }

            section[role="chart"] .title {
                color: var(--black);
                font-weight: 700;
                margin-top: 0;
            }

            main section[role="chart"].exchange-rates {
                width: calc(100% - 270px);
            }

            main section[role="chart"].last-costs {
                width: calc(100% - 350px);
            }

            main section[role="chart"].efficiency {
                width: 310px;
            }

            @media screen and (max-width: 1024px) {

                /* Laptop (1024px) */
                main section[role="chart"].efficiency {
                    width: 170px;
                }

                main section[role="chart"].last-costs {
                    width: calc(100% - 210px);
                }
            }

            @media screen and (max-width: 768px) {

                /* Tablet (768px) */
                main section[role="credit-card"] {
                    margin-left: 0;
                }

                .charts-wrapper {
                    flex-direction: column;
                }

                main section[role="chart"].exchange-rates,
                main section[role="chart"].last-costs,
                main section[role="chart"].efficiency {
                    margin-left: 0;
                    width: 100%;
                    padding: 2em;
                    border-radius: 0;
                    padding-bottom: 5em;
                }
            }

            @media screen and (max-width: 500px) {

                main section[role="chart"].exchange-rates,
                main section[role="chart"].last-costs,
                main section[role="chart"].efficiency {
                    padding: 0.5em;
                    padding-bottom: 3em;
                }

                main section[role="chart"].efficiency {
                    margin-bottom: 5em;
                }
            }

            @media screen and (max-width: 320px) {

                /* Phone (Small) */
                main section[role="credit-card"] {
                    width: 100%;
                    padding: 0.75em;
                    margin-bottom: 0.75em;
                    border-radius: 0;
                    height: initial;
                    -webkit-box-shadow: none;
                    -moz-box-shadow: none;
                    box-shadow: none;
                }

                main section[role="credit-card"] img {
                    width: 2em;
                }

                main section[role="credit-card"] img.apple_pay {
                    width: 2em;
                }

                main section[role="credit-card"] .ccNumber {
                    margin-top: 0.7em;
                }

                .ccBottom {
                    margin-top: 0.7em;
                }

                section[role="chart"] .title {
                    margin-bottom: 0.2em;
                }

                main section[role="chart"].exchange-rates,
                main section[role="chart"].last-costs,
                main section[role="chart"].efficiency {
                    height: 12em;
                }
            }

        </style>















        <!--Load the AJAX API-->
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>



        <script type="text/javascript">
            // Load the Visualization API and the corechart package.
            google.charts.load('current', {
                'packages': ['corechart']
            });

            // Set a callback to run when the Google Visualization API is loaded.
            google.charts.setOnLoadCallback(drawChart);

            // Callback that creates and populates a data table,
            // instantiates the pie chart, passes in the data and
            // draws it.
            function drawChart() {

                // Create the data table.
                var data = new google.visualization.DataTable();
                data.addColumn('string', 'Topping');
                data.addColumn('number', 'Slices');
                data.addRows([
                    ['Mushrooms', 3],
                    ['Onions', 1],
                    ['Olives', 1],
                    ['Zucchini', 1],
                    ['Pepperoni', 2]
                ]);

                // Set chart options
                var options = {
                    'title': 'How Much Pizza I Ate Last Night',
                    'width': 400,
                    'height': 300
                };

                // Instantiate and draw our chart, passing in some options.
                var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
                chart.draw(data, options);
            }
        </script>


        <div id="chart_div" style="background: transparent;color:red;width: 900px; height: 500px;"></div>



        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <script type="text/javascript">
            google.charts.load('current', {
                'packages': ['bar']
            });
            google.charts.setOnLoadCallback(drawChart);

            function drawChart() {
                var data = google.visualization.arrayToDataTable([
                    ['Year', 'Sales', 'Expenses', 'Profit'],
                    ['2014', 1000, 400, 200],
                    ['2015', 1170, 460, 250],
                    ['2016', 660, 1120, 300],
                    ['2017', 1030, 540, 350]
                ]);

                var options = {
                    chart: {
                        title: 'Company Performance',
                        subtitle: 'Sales, Expenses, and Profit: 2014-2017',
                    }
                };

                var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

                chart.draw(data, google.charts.Bar.convertOptions(options));
            }
        </script>

        <body>
            <div id="columnchart_material" style="width: 500px; height: 500px;"></div>
        </body>


        </center>





    @endcan



@stop

@section('css')
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
@stop

@section('js')
    <script src="asset('js/app.js')"></script>
    <script src="asset('js/grafica.js')"></script>
@stop
