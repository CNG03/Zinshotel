<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Results – Hoteller | Winter & Ski Resort WordPress Theme</title>
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        />
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="{{asset('assets')}}/fonts/stylesheet.css" />
        <link rel="stylesheet" href="{{asset('assets')}}/css/Search.css" /> 
</head>
<body>
    <div class="main">
        <div class="page_content-wapper">
            <div class="wapper">
                <div class="page-title-content">
                    <h1>Search results</h1>
                </div>
                <div class="sidebar_widget">
                    <div class="sidebar_widget-2 ">
                        <div class="widget-currency">
                            <select name="switcher" id="switcher1">
                                <option value="USD" selected="selected">United States (US) dollar ($)</option>
                                <option value="EUR">Euro (€)</option>
                                <option value="HKD">Hong Kong dollar ($)</option>
                                <option value="GBP">Pound sterling (£)</option>
                                <option value="AUD">Australian dollar ($)</option>
                                <option value="INR">Indian rupee (₹)</option>
                                <option value="CAD">Canadian dollar ($)</option>
                            </select>
                        </div>
                        <div class="widget2">
                            <div class="widget_search_form">
                                <p class="text">
                                    <small>
                                    Required fields are followed by 
                                    <abbr title="">*</abbr> 
                                    </small>
                                </p>
                                <p class="widget_search_check-in-date">
                                    <label for="">
                                        Check-in:
                                        <abbr title="">*</abbr>
                                    </label>
                                    <br>
                                    <input id="mphb_check_in_date" data-datepick-group="65f414f1cf076" value="" placeholder="Check-in Date" required="required" type="text" inputmode="none" name="mphb_check_in_date" class="mphb-datepick mphb_datepicker is-datepick" autocomplete="">
                                </p>
                                <p class="widget_search_check-out-date">
                                    <label for="">
                                        Check-out:
                                        <abbr title="">*</abbr>
                                    </label>
                                    <br>
                                    <input id="mphb_check_out_date" data-datepick-group="65f414f1cf076" value="" placeholder="Check-out Date" required="required" type="text" inputmode="none" name="mphb_check_in_date" class="mphb-datepick mphb_datepicker is-datepick" autocomplete="">
                                </p>
                                <div class="widget_search-adults-children">
                                    <p class="widget_search-adults">
                                        <label for="">Adults:</label>
                                        <br>
                                        <select name="" id="adults">
                                            <option value="1" selected="selected">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10</option>
                                            <option value="11">11</option>
                                            <option value="12">12</option>
                                            <option value="13">13</option>
                                            <option value="14">14</option>
                                            <option value="15">15</option>
                                            <option value="16">16</option>
                                            <option value="17">17</option>
                                            <option value="18">18</option>
                                            <option value="19">19</option>
                                            <option value="20">20</option>
                                            <option value="21">21</option>
                                            <option value="22">22</option>
                                            <option value="23">23</option>
                                            <option value="24">24</option>
                                            <option value="25">25</option>
                                            <option value="26">26</option>
                                            <option value="27">27</option>
                                            <option value="28">28</option>
                                            <option value="29">29</option>
                                            <option value="30">30</option>
                                        </select>
                                    </p>
                                    <p class="widget_search-children">
                                        <label for="">Children:</label>
                                        <br>
                                        <select name="" id="children">
                                        <option value="1" selected="selected">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10</option>
                                        </select>
                                    </p>    
                                </div>    
                                <p class="widget_search-submit">
                                    <input type="submit" class="button" value="Search">
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="sidebar_content left">
                        <div class="search_results-wapper">
                            <p class="search_results-info">6 accommodations found from April 15, 2024 - till April 16, 2024</p>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
    </div>
</body>
</html>