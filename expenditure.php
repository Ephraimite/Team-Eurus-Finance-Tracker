<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eurus Wallet | Welcome</title>
    <link rel="stylesheet" href="assets/css/app.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800&display=swap" rel="stylesheet">
    <link rel="favicon" href="./assets/logo.svg">
    <link rel="apple-touch-icon" href="./assets/favicon.svg">
    <link href="./assets/favicon.svg" rel="icon">
    <link rel="apple-touch-icon" href="./assets/favicon.svg">
    <link rel="apple-touch-icon" sizes="152x152" href="./assets/favicon.svg">
    <link rel="apple-touch-icon" sizes="180x180" href="./assets/favicon.svg">
    <link rel="apple-touch-icon" sizes="167x167" href="./assets/favicon.svg">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400&display=swap" rel="stylesheet">
<body>
<!--Preloader-->
<div id="introLoader" class="introloader">
    <div class="loader-container">
        <div class="spinner">
            <img src="assets/logo.svg" alt="">
        </div>
    </div>
</div>
<div id="particles-js" class="uk-position-fixed" hidden></div>
<section class="uk-flex">
    <a href="#" class="menu-toggle" uk-icon="icon: menu; ratio: 2" uk-toggle="target: #sidebar"></a>
    <div class="sidebar">
        <div>
            <div class="logo">
                <img src="./assets/logo.svg" alt="">
            </div>
            <div class="links">
               <div class="active">
                    <a href="dashboard">Dashboard</a>
                </div>
                <!--  <div>
                    <a href="/Team-Eurus-Finance-Tracker/expenditure.html">Expenditure</a>
                </div>
                <div>
                    <a href="/Team-Eurus-Finance-Tracker/categories.html">Categories</a>
                </div>
                <div>
                    <a href="">Settings</a>
                </div> --->
            </div>
        </div>
        <div>
           
            <div class="links logout">
                <div>
                    <a href="logout">Logout</a>
                </div>
            </div>
        </div>
    </div>
    
    <!--Code for signup-->    <div class="ui uk-padding-small">
        <div class="ui_main">
            <div class="section-tours" id="section-tours">
                <div class="uk-width-1-1@s uk-flex uk-flex-between uk-flex-bottom titles">
                    <h4 class="uk-margin-remove">
                        &nbsp;
                    </h4>
                    <h2 class="uk-text-bold uk-margin-remove ">
                        Expenditure
                    </h2>
                </div>
                <div class="uk-height-1-1 dash-content">
                    <div class="uk-width-1-1@s uk-overflow-auto">
                        <table class="uk-table uk-table-hover uk-table-middle uk-table-divider">
                            <thead>
                            <tr>
                                <th class="uk-width-small">S/N</th>
                                <th>Name</th>
                                <th>Category</th>
                                <th>Description</th>
                                <th>Amount</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td>Carrots</td>
                                <td>Foodstuff</td>
                                <td>I eat it as a healthy remedy</td>
                                <td>₦1,500.00</td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Carrots</td>
                                <td>Foodstuff</td>
                                <td>I eat it as a healthy remedy</td>
                                <td>₦1,500.00</td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Carrots</td>
                                <td>Foodstuff</td>
                                <td>I eat it as a healthy remedy</td>
                                <td>₦1,500.00</td>
                            </tr>
                            </tbody>
                        </table>
    
                        <div class="uk-margin">
                            <button class="uk-button uk-button-theme" uk-toggle="target: #expend">Add Expenditure</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="expend" class="uk-flex-top" uk-modal>
        <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical">
    
            <button class="uk-modal-close-default" type="button" uk-close></button>
    
            <form class="uk-form-stacked uk-width-1-1@s uk-child-width-1-1@l">
                <div class="uk-margin">
                    <label class="uk-form-label" for="euname">ITEM</label>
                    <div class="uk-form-controls">
                        <input class="uk-input" style="color: black;" id="euname" type="text" placeholder="Add item">
                    </div>
                </div>
                <div class="uk-margin">
                    <label class="uk-form-label" for="euname">AMOUNT</label>
                    <div class="uk-form-controls">
                        <input class="uk-input"  style="color: black;" id="euname" type="text" placeholder="Add amount">
                    </div>
                </div>
    
                <div class="uk-margin">
                    <label class="uk-form-label" for="password">DESCRIPTION</label>
                    <div class="uk-form-controls">
                        <input class="uk-input" style="color: black;" id="password" type="password" placeholder="Add item description">
                    </div>
                </div>
               
                <div class="uk-margin">
                    <button class="uk-button uk-button-theme uk-width-1-1@s">Add Expenditure</button>
                </div>
            </form>
        </div>
    </div>
    <div id="sidebar" uk-offcanvas="mode: reveal; overlay: true">
        <div class="uk-offcanvas-bar dashboard">

            <button class="uk-offcanvas-close" type="button" uk-close></button>
            <div class="canvas">
                <div>
                    <div class="logo">
                        <img src="./assets/logo.svg" alt="">
                    </div>
                    <div class="links">
                        <div class="active">
                            <a href="">Summary</a>
                        </div>
                        <div>
                            <a href="">Expenditure</a>
                        </div>
                        <div>
                            <a href="">Categories</a>
                        </div>
                        <div>
                            <a href="">Settings</a>
                        </div>
                    </div>
                </div>
                <div>
                   
                    <div class="links logout">
                        <div>
                            <a href="logout">Logout</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="assets/js/app.js"></script>
</body>
</html>
