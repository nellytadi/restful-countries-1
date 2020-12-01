
@extends("layouts.home-layout")
@section("title","Documentation")
@section("page-description")
    See our api documentation
@endsection
@section("page-style")
    <link rel="stylesheet" type="text/css" href="{!! asset("storage/css/pretty-print-json.css") !!}" />
@endsection
@section("page-content")

    <!-- Start home -->
    <section class="bg-half page-next-level" style="background-image: url('{!! asset('storage/images/docs.jpg') !!}');">
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="text-center text-white">
                        <h4 class="text-uppercase title mb-4">Docs Version {!! $version !!}</h4>
                        <ul class="page-next d-inline-block mb-0">
                            <div class="home-form-position">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="home-registration-form p-4 mb-3">
                                            <form class="registration-form">
                                                <div class="row">

                                                    <div class="col-lg-12 col-md-6">
                                                        <div class="registration-form-box">
                                                            <i class="fa fa-book"></i>
                                                            <select  id="select-country" name="version" class="demo-default">
                                                                @for($version = 1; $version <= env('APP_VERSION'); $version++)
                                                                    <option value="{!! $version !!}">Version {!! $version !!}</option>
                                                                @endfor
                                                            </select>
                                                        </div>
                                                    </div>

                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <span class="text-uppercase text-white font-weight-bold">Read our documentation for easy api consumption.</span>
                            </div>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end home -->

    <!-- BLOG LIST START -->
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12 order-1 order-md-1 mt-4 mt-sm-0 pt-2 pt-sm-0">
                    <div class="sidebar mt-sm-30 p-4 rounded shadow">

                        <div class="widget mb-4 pb-2">
                            <h4 class="widget-title">Endpoints</h4>
                            <ul class="list-unstyled mt-4 mb-0 catagories">
                                <li><a href="#base-url">Base Url</a> <span class="float-right"></span></li>
                                <li><a href="#all-countries">All Countries</a> <span class="float-right"></span></li>
                                <li><a href="#country-by-name">Country by name</a> <span class="float-right"></span></li>
                                <li><a href="#country-by-continent">Country by continent</a> <span class="float-right"></span></li>
                                <li><a href="#country-by-code">Country by code</a> <span class="float-right"></span></li>
                                <li><a href="#country-by-population">Country by population range</a> <span class="float-right"></span></li>
                                <li><a href="#country-by-size">Country by Size range</a> <span class="float-right"></span></li>
                                <li><a href="#country-by-iso2">Country by ISO2</a> <span class="float-right"></span></li>
                                <li><a href="#country-by-iso3">Country by ISO3</a> <span class="float-right"></span></li>
                                <li><a href="#country-by-code">Country by code</a> <span class="float-right"></span></li>
                                <li><a href="#presidents-by-country">Presidents by country</a> <span class="float-right"></span></li>
                                <li><a href="#president-by-country">Presidents by country and name</a> <span class="float-right"></span></li>
                                <li><a href="#covid19">Covid 19 cases only</a> <span class="float-right"></span></li>
                                <li><a href="#covid19-by-deaths">Covid 19 by deaths</a> <span class="float-right"></span></li>
                                <li><a href="#covid19-by-total">Covid 19 by total case</a> <span class="float-right"></span></li>
                                <li><a href="#state-by-country">States by country name</a> <span class="float-right"></span></li>
                                <li><a href="#state-by-country-state">State by country name and state name</a> <span class="float-right"></span></li>
                                <li><a href="#references">References</a> <span class="float-right"></span></li>
                            </ul>
                        </div>

                    </div>
                </div><!--end col-->

                <div class="col-lg-8 col-md-6 order-2 order-md-2">
                    <br/>
                    <div class="row" id="base-url">
                        <div class="col-lg-12 mb-12 pb-12">
                            <div class="blog position-relative overflow-hidden shadow rounded">
                                <div class="position-relative overflow-hidden">
                                    <div class="overlay rounded-top bg-dark"></div>
                                    <div class="likes">
                                        <ul class="list-unstyled mb-0">
                                            <li class="list-inline-item mr-2"><a href="javascript:void(0)" class="text-white like"><i class="mdi mdi-heart-outline mr-1"></i>33</a></li>
                                            <li class="list-inline-item"><a href="javascript:void(0)" class="text-white comments"><i class="mdi mdi-comment-outline mr-1"></i>08</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="content p-4">
                                    <h4><a href="javascript:void(0)" class="title text-dark">Base Url</a></h4>
                                    <a href="https://restfulcountries.com/api/v1" target="_blank">https://restfulcountries.com/api/v1</a>                                </div>

                            </div>
                        </div><!--end col-->
                    </div>
                    <br/>
                    <div class="row" id="all-countries">
                        <div class="col-lg-12 mb-12 pb-12">
                            <div class="blog position-relative overflow-hidden shadow rounded">
                                <div class="position-relative overflow-hidden">
                                    <div class="overlay rounded-top bg-dark"></div>
                                    <div class="likes">
                                        <ul class="list-unstyled mb-0">
                                            <li class="list-inline-item mr-2"><a href="javascript:void(0)" class="text-white like"><i class="mdi mdi-heart-outline mr-1"></i>33</a></li>
                                            <li class="list-inline-item"><a href="javascript:void(0)" class="text-white comments"><i class="mdi mdi-comment-outline mr-1"></i>08</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="content p-4">
                                    <h4><a href="javascript:void(0)" class="title text-dark">All Countries - <span class="text-success">GET</span></a></h4>
                                    <p class="text-muted"><a href="#">https://restfulcountries.com/api/v1</a></p>
                                    <p>Or</p>
                                    <p class="text-muted"><a href="#">https://restfulcountries.com/api/v1/countries</a></p>
                                    <p>Returns a paginated result of all countries available</p>
                                    <pre id="countries-response"></pre>

                                </div>

                            </div>
                        </div><!--end col-->
                    </div>
                    <br/>
                    <div class="row" id="country-by-name">
                        <div class="col-lg-12 mb-12 pb-12">
                            <div class="blog position-relative overflow-hidden shadow rounded">
                                <div class="position-relative overflow-hidden">
                                    <div class="overlay rounded-top bg-dark"></div>
                                    <div class="likes">
                                        <ul class="list-unstyled mb-0">
                                            <li class="list-inline-item mr-2"><a href="javascript:void(0)" class="text-white like"><i class="mdi mdi-heart-outline mr-1"></i>33</a></li>
                                            <li class="list-inline-item"><a href="javascript:void(0)" class="text-white comments"><i class="mdi mdi-comment-outline mr-1"></i>08</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="content p-4">
                                    <h4><a href="javascript:void(0)" class="title text-dark">Country by name - <span class="text-success">GET</span></a></h4>

                                    <p class="text-muted">https://restfulcountries.com/api/v1/countries/{country}</p>

                                    <p class="text-muted"><a href="#">https://restfulcountries.com/api/v1/countries/Nigeria</a></p>
                                </div>

                            </div>
                        </div><!--end col-->
                    </div>
                    <br/>
                    <div class="row" id="country-by-continent">
                        <div class="col-lg-12 mb-12 pb-12">
                            <div class="blog position-relative overflow-hidden shadow rounded">
                                <div class="position-relative overflow-hidden">
                                    <div class="overlay rounded-top bg-dark"></div>
                                    <div class="likes">
                                        <ul class="list-unstyled mb-0">
                                            <li class="list-inline-item mr-2"><a href="javascript:void(0)" class="text-white like"><i class="mdi mdi-heart-outline mr-1"></i>33</a></li>
                                            <li class="list-inline-item"><a href="javascript:void(0)" class="text-white comments"><i class="mdi mdi-comment-outline mr-1"></i>08</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="content p-4">
                                    <h4><a href="javascript:void(0)" class="title text-dark">Countries by continent - <span class="text-success">GET</span></a></h4>

                                    <p class="text-muted">https://restfulcountries.com/api/v1/countries?continent={continent}</p>

                                    <p class="text-muted"><a href="#">https://restfulcountries.com/api/v1/countries?continent=africa</a></p>
                                </div>

                            </div>
                        </div><!--end col-->
                    </div>
                    <br/>

                    <div class="row" id="country-by-code">
                        <div class="col-lg-12 mb-12 pb-12">
                            <div class="blog position-relative overflow-hidden shadow rounded">
                                <div class="position-relative overflow-hidden">
                                    <div class="overlay rounded-top bg-dark"></div>
                                    <div class="likes">
                                        <ul class="list-unstyled mb-0">
                                            <li class="list-inline-item mr-2"><a href="javascript:void(0)" class="text-white like"><i class="mdi mdi-heart-outline mr-1"></i>33</a></li>
                                            <li class="list-inline-item"><a href="javascript:void(0)" class="text-white comments"><i class="mdi mdi-comment-outline mr-1"></i>08</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="content p-4">
                                    <h4><a href="javascript:void(0)" class="title text-dark">Country by code - <span class="text-success">GET</span></a></h4>

                                    <p class="text-muted">https://restfulcountries.com/api/v1/countries?code={code}</p>

                                    <p class="text-muted"><a href="#">https://restfulcountries.com/api/v1/countries?code=+234</a></p>
                                </div>

                            </div>
                        </div><!--end col-->
                    </div>
                    <br/>

                    <div class="row" id="country-by-population">
                        <div class="col-lg-12 mb-12 pb-12">
                            <div class="blog position-relative overflow-hidden shadow rounded">
                                <div class="position-relative overflow-hidden">
                                    <div class="overlay rounded-top bg-dark"></div>
                                    <div class="likes">
                                        <ul class="list-unstyled mb-0">
                                            <li class="list-inline-item mr-2"><a href="javascript:void(0)" class="text-white like"><i class="mdi mdi-heart-outline mr-1"></i>33</a></li>
                                            <li class="list-inline-item"><a href="javascript:void(0)" class="text-white comments"><i class="mdi mdi-comment-outline mr-1"></i>08</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="content p-4">
                                    <h4><a href="javascript:void(0)" class="title text-dark">Country by Population - <span class="text-success">GET</span></a></h4>
                                    <p>Get a paginated list of countries by Population range </p>

                                    <p class="text-muted">https://restfulcountries.com/api/v1/countries?population_from={min_population}&population_to={max_population}</p>

                                    <p class="text-muted"><a href="#">https://restfulcountries.com/api/v1/countries?population_from=100&population_to=5000</a></p>
                                </div>

                            </div>
                        </div><!--end col-->
                    </div>
                    <br/>

                    <div class="row" id="country-by-size">
                        <div class="col-lg-12 mb-12 pb-12">
                            <div class="blog position-relative overflow-hidden shadow rounded">
                                <div class="position-relative overflow-hidden">
                                    <div class="overlay rounded-top bg-dark"></div>
                                    <div class="likes">
                                        <ul class="list-unstyled mb-0">
                                            <li class="list-inline-item mr-2"><a href="javascript:void(0)" class="text-white like"><i class="mdi mdi-heart-outline mr-1"></i>33</a></li>
                                            <li class="list-inline-item"><a href="javascript:void(0)" class="text-white comments"><i class="mdi mdi-comment-outline mr-1"></i>08</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="content p-4">
                                    <h4><a href="javascript:void(0)" class="title text-dark">Country by Size - <span class="text-success">GET</span></a></h4>

                                    <p>Get a paginated list of countries by size (km²) range </p>
                                    <p class="text-muted">https://restfulcountries.com/api/v1/countries?size_from={min_size}&size_to={max_size}</p>

                                    <p class="text-muted"><a href="#">https://restfulcountries.com/api/v1/countries?size_from=1000&size_to=60000</a></p>
                                </div>

                            </div>
                        </div><!--end col-->
                    </div>
                    <br/>

                    <div class="row" id="country-by-iso2">
                        <div class="col-lg-12 mb-12 pb-12">
                            <div class="blog position-relative overflow-hidden shadow rounded">
                                <div class="position-relative overflow-hidden">
                                    <div class="overlay rounded-top bg-dark"></div>
                                    <div class="likes">
                                        <ul class="list-unstyled mb-0">
                                            <li class="list-inline-item mr-2"><a href="javascript:void(0)" class="text-white like"><i class="mdi mdi-heart-outline mr-1"></i>33</a></li>
                                            <li class="list-inline-item"><a href="javascript:void(0)" class="text-white comments"><i class="mdi mdi-comment-outline mr-1"></i>08</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="content p-4">
                                    <h4><a href="javascript:void(0)" class="title text-dark">Country by ISO2 - <span class="text-success">GET</span></a></h4>

                                    <p class="text-muted">https://restfulcountries.com/api/v1/countries?iso2={iso2}</p>

                                    <p class="text-muted"><a href="#">https://restfulcountries.com/api/v1/countries?iso2=AO</a></p>
                                </div>

                            </div>
                        </div><!--end col-->
                    </div>
                    <br/>

                    <div class="row" id="country-by-iso3">
                        <div class="col-lg-12 mb-12 pb-12">
                            <div class="blog position-relative overflow-hidden shadow rounded">
                                <div class="position-relative overflow-hidden">
                                    <div class="overlay rounded-top bg-dark"></div>
                                    <div class="likes">
                                        <ul class="list-unstyled mb-0">
                                            <li class="list-inline-item mr-2"><a href="javascript:void(0)" class="text-white like"><i class="mdi mdi-heart-outline mr-1"></i>33</a></li>
                                            <li class="list-inline-item"><a href="javascript:void(0)" class="text-white comments"><i class="mdi mdi-comment-outline mr-1"></i>08</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="content p-4">
                                    <h4><a href="javascript:void(0)" class="title text-dark">Country by ISO3 - <span class="text-success">GET</span></a></h4>

                                    <p class="text-muted">https://restfulcountries.com/api/v1/countries?iso3={iso3}</p>

                                    <p class="text-muted"><a href="#">https://restfulcountries.com/api/v1/countries?iso2=AGO</a></p>
                                </div>

                            </div>
                        </div><!--end col-->
                    </div>
                    <br/>

                    <div class="row" id="presidents-by-country">
                        <div class="col-lg-12 mb-12 pb-12">
                            <div class="blog position-relative overflow-hidden shadow rounded">
                                <div class="position-relative overflow-hidden">
                                    <div class="overlay rounded-top bg-dark"></div>
                                    <div class="likes">
                                        <ul class="list-unstyled mb-0">
                                            <li class="list-inline-item mr-2"><a href="javascript:void(0)" class="text-white like"><i class="mdi mdi-heart-outline mr-1"></i>33</a></li>
                                            <li class="list-inline-item"><a href="javascript:void(0)" class="text-white comments"><i class="mdi mdi-comment-outline mr-1"></i>08</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="content p-4">
                                    <h4><a href="javascript:void(0)" class="title text-dark">Presidents by country - <span class="text-success">GET</span></a></h4>

                                    <p class="text-muted">https://restfulcountries.com/api/v1/countries/{country}/presidents</p>

                                    <p class="text-muted"><a href="#">https://restfulcountries.com/api/v1/countries/India/presidents</a></p>
                                   <p>Returns a list of country presidents available.</p>
                                    <pre id="presidents-response"></pre>
                                </div>

                            </div>
                        </div><!--end col-->
                    </div>
                    <br/>

                    <div class="row" id="president-by-country">
                        <div class="col-lg-12 mb-12 pb-12">
                            <div class="blog position-relative overflow-hidden shadow rounded">
                                <div class="position-relative overflow-hidden">
                                    <div class="overlay rounded-top bg-dark"></div>
                                    <div class="likes">
                                        <ul class="list-unstyled mb-0">
                                            <li class="list-inline-item mr-2"><a href="javascript:void(0)" class="text-white like"><i class="mdi mdi-heart-outline mr-1"></i>33</a></li>
                                            <li class="list-inline-item"><a href="javascript:void(0)" class="text-white comments"><i class="mdi mdi-comment-outline mr-1"></i>08</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="content p-4">
                                    <h4><a href="javascript:void(0)" class="title text-dark">President by country and name - <span class="text-success">GET</span></a></h4>

                                    <p class="text-muted">https://restfulcountries.com/api/v1/countries/{country}/presidents/{president}</p>

                                    <p class="text-muted"><a href="#">https://restfulcountries.com/api/v1/countries/India/presidents/Ram-Nath-Kovind</a></p>

                                </div>

                            </div>
                        </div><!--end col-->
                    </div>
                    <br/>

                    <div class="row" id="covid19">
                        <div class="col-lg-12 mb-12 pb-12">
                            <div class="blog position-relative overflow-hidden shadow rounded">
                                <div class="position-relative overflow-hidden">
                                    <div class="overlay rounded-top bg-dark"></div>
                                    <div class="likes">
                                        <ul class="list-unstyled mb-0">
                                            <li class="list-inline-item mr-2"><a href="javascript:void(0)" class="text-white like"><i class="mdi mdi-heart-outline mr-1"></i>33</a></li>
                                            <li class="list-inline-item"><a href="javascript:void(0)" class="text-white comments"><i class="mdi mdi-comment-outline mr-1"></i>08</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="content p-4">
                                    <h4><a href="javascript:void(0)" class="title text-dark">Covid 19 cases only - <span class="text-success">GET</span></a></h4>

                                    <p class="text-muted"><a href="#">https://restfulcountries.com/api/v1/covid19</a></p>
                                    <p>Returns a paginated result of all countries covid 19 case</p>

                                    <pre id="covid19-response"></pre>
                                </div>

                            </div>
                        </div><!--end col-->
                    </div>
                    <br/>

                    <div class="row" id="covid19-by-deaths">
                        <div class="col-lg-12 mb-12 pb-12">
                            <div class="blog position-relative overflow-hidden shadow rounded">
                                <div class="position-relative overflow-hidden">
                                    <div class="overlay rounded-top bg-dark"></div>
                                    <div class="likes">
                                        <ul class="list-unstyled mb-0">
                                            <li class="list-inline-item mr-2"><a href="javascript:void(0)" class="text-white like"><i class="mdi mdi-heart-outline mr-1"></i>33</a></li>
                                            <li class="list-inline-item"><a href="javascript:void(0)" class="text-white comments"><i class="mdi mdi-comment-outline mr-1"></i>08</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="content p-4">
                                    <h4><a href="javascript:void(0)" class="title text-dark">Covid 19 cases by death range only - <span class="text-success">GET</span></a></h4>
                                    <p class="text-muted">https://restfulcountries.com/api/v1/covid19?death_from={minimum_death}&death_to={maximum-deaths}</p>

                                    <p class="text-muted"><a href="#">https://restfulcountries.com/api/v1/covid19?death_from=50&death_to=200000</a></p>
                                    <p>Returns a list of covid 19 confirmed cases</p>
                                </div>

                            </div>
                        </div><!--end col-->
                    </div>
                    <br/>

                    <div class="row" id="covid19-by-total">
                        <div class="col-lg-12 mb-12 pb-12">
                            <div class="blog position-relative overflow-hidden shadow rounded">
                                <div class="position-relative overflow-hidden">
                                    <div class="overlay rounded-top bg-dark"></div>
                                    <div class="likes">
                                        <ul class="list-unstyled mb-0">
                                            <li class="list-inline-item mr-2"><a href="javascript:void(0)" class="text-white like"><i class="mdi mdi-heart-outline mr-1"></i>33</a></li>
                                            <li class="list-inline-item"><a href="javascript:void(0)" class="text-white comments"><i class="mdi mdi-comment-outline mr-1"></i>08</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="content p-4">
                                    <h4><a href="javascript:void(0)" class="title text-dark">Covid 19 cases by total confirmed range only - <span class="text-success">GET</span></a></h4>
                                    <p class="text-muted">https://restfulcountries.com/api/v1/covid19?total_from={minimum_total}&death_to={maximum-total}</p>

                                    <p class="text-muted"><a href="#">https://restfulcountries.com/api/v1/covid19?total_from=3000&total_to=500000</a></p>
                                     <p>Returns a list of covid 19 confirmed cases</p>
                                </div>

                            </div>
                        </div><!--end col-->
                    </div>
                    <br/>


                    <div class="row" id="state-by-country">
                        <div class="col-lg-12 mb-12 pb-12">
                            <div class="blog position-relative overflow-hidden shadow rounded">
                                <div class="position-relative overflow-hidden">
                                    <div class="overlay rounded-top bg-dark"></div>
                                    <div class="likes">
                                        <ul class="list-unstyled mb-0">
                                            <li class="list-inline-item mr-2"><a href="javascript:void(0)" class="text-white like"><i class="mdi mdi-heart-outline mr-1"></i>33</a></li>
                                            <li class="list-inline-item"><a href="javascript:void(0)" class="text-white comments"><i class="mdi mdi-comment-outline mr-1"></i>08</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="content p-4">
                                    <h4><a href="javascript:void(0)" class="title text-dark">States by country name - <span class="text-success">GET</span></a></h4>

                                    <p class="text-muted">https://restfulcountries.com/api/v1/countries/{country}/states</p>
                                    <p class="text-muted"><a href="#">https://restfulcountries.com/api/v1/countries/Nigeria/states</a></p>
<p>Returns result of country states without pagination</p>
                                    <pre id="states-response"></pre>
                                </div>
                            </div>
                        </div><!--end col-->
                    </div>
                    <br/>
                    <div class="row" id="state-by-country-state">
                        <div class="col-lg-12 mb-12 pb-12">
                            <div class="blog position-relative overflow-hidden shadow rounded">
                                <div class="position-relative overflow-hidden">
                                    <div class="overlay rounded-top bg-dark"></div>
                                    <div class="likes">
                                        <ul class="list-unstyled mb-0">
                                            <li class="list-inline-item mr-2"><a href="javascript:void(0)" class="text-white like"><i class="mdi mdi-heart-outline mr-1"></i>33</a></li>
                                            <li class="list-inline-item"><a href="javascript:void(0)" class="text-white comments"><i class="mdi mdi-comment-outline mr-1"></i>08</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="content p-4">
                                    <h4><a href="javascript:void(0)" class="title text-dark">State by country name and state name - <span class="text-success">GET</span></a></h4>

                                    <p class="text-muted">https://restfulcountries.com/api/v1/countries/{country}/states/{state}</p>
                                    <p class="text-muted"><a href="#">https://restfulcountries.com/api/v1/countries/United States/states/Alaska</a></p>
                                </div>

                            </div>
                        </div><!--end col-->
                    </div>
                    <br/>
                    <div class="row" id="references">
                        <div class="col-lg-12 mb-12 pb-12">
                            <div class="blog position-relative overflow-hidden shadow rounded">
                                <div class="position-relative overflow-hidden">
                                    <div class="overlay rounded-top bg-dark"></div>
                                    <div class="likes">
                                        <ul class="list-unstyled mb-0">
                                            <li class="list-inline-item mr-2"><a href="javascript:void(0)" class="text-white like"><i class="mdi mdi-heart-outline mr-1"></i>33</a></li>
                                            <li class="list-inline-item"><a href="javascript:void(0)" class="text-white comments"><i class="mdi mdi-comment-outline mr-1"></i>08</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="content p-4">
                                    <h4><a href="javascript:void(0)" class="title text-dark">References </a></h4>

                                    <ul>
                                        <li><a href="https://en.wikipedia.org/" target="_blank">https://en.wikipedia.org/</a> </li>
                                        <li><a href="https://www.worldometers.info/world-population" target="_blank">https://www.worldometers.info/world-population</a> </li>
                                        <li><a href="https://covid19.who.int/" target="_blank">https://covid19.who.int</a> </li>
                                    </ul>
                                </div>

                            </div>
                        </div><!--end col-->
                    </div>
                    <br/>
                </div>
            </div>
        </div>
    </section>
    <!-- BLOG LIST END -->


@endsection
@section("page-script")
    <script type="text/javascript">
        $("#select-country").on("change",function(){
            version = $("select[name='version']").val();
            window.location.href='http://restfulcountries.com/api-documentation/version/'+version;
        });
    </script>
    <script src="{!! asset("storage/js/pretty-print-json.js") !!}"></script>
    <script>
        const countriesResponse =

            { "data":
                    [
                        {
                            "name": "Nigeria",
                            "full_name": "Federal Republic of Nigeria",
                            "capital": "Abuja",
                            "iso2": "NG",
                            "iso3": "NGA",
                            "covid19": {
                                "total_case": "67,412",
                                "total_deaths": "1,173",
                                "last_updated": "2020-11-30T19:36:49.000000Z"
                            },
                            "current_president": {
                                "name": "Muhammadu Buhari",
                                "gender": "Male",
                                "appointment_start_date": "2015-05-29",
                                "appointment_end_date": null,
                                "href": {
                                    "self": "https://restfulcountries.com/api/v1/countries/Nigeria/presidents/Muhammadu-Buhari",
                                    "country": "https://restfulcountries.com/api/v1/countries/Nigeria",
                                    "picture": "https://restfulcountries.com/storage/images/presidents/muhammadu-buharipxpjw98lcj.jpg"
                                }
                            },
                            "currency": "NGN",
                            "phone_code": "234",
                            "continent": "Africa",
                            "description": "Nigeria is the most populous country in Africa and the seventh most populous country in the world, with an estimated 206 million inhabitants as of late 2019.  The name Nigeria was taken from the Niger River running through the country.",
                            "size": "923,768 km²",
                            "independence_date": "1960-10-01",
                            "population": "208,355,710",
                            "href": {
                                "self": "https://restfulcountries.com/api/v1/countries/Nigeria",
                                "states": "https://restfulcountries.com/api/v1/countries/Nigeria/states",
                                "presidents": "https://restfulcountries.com/api/v1/countries/Nigeria/presidents",
                                "flag": "https://restfulcountries.com/storage/images/flags/Nigeria.png"
                            }
                        }
                    ] ,

                "links": {
                    "first": "https://restfulcountries.com/api/v1/countries?page=1",
                    "last": "https://restfulcountries.com/api/v1/countries?page=1",
                    "prev": null,
                    "next": null
                },
                "meta": {
                    "current_page": 1,
                    "from": 1,
                    "last_page": 1,
                    "path": "https://restfulcountries.com/api/v1/countries",
                    "per_page": 241,
                    "to": 241,
                    "total": 241
                }
            };

        const covid19Response =
            {
                "data": [
                    {
                        "country_name": "Afghanistan",
                        "total_case": 500,
                        "total_deaths": 23,
                        "last_updated": "2020-11-28T04:46:01.000000Z",
                        "href": {
                            "country": "https://restfulcountries.com/api/v1/countries/Afghanistan"
                        }
                    },
                ],
                "links": {
                    "first": "https://restfulcountries.com/api/v1/covid19?page=1",
                    "last": "https://restfulcountries.com/api/v1/covid19?page=1",
                    "prev": null,
                    "next": null
                },
                "meta": {
                    "current_page": 1,
                    "from": 1,
                    "last_page": 1,
                    "path": "https://restfulcountries.com/api/v1/covid19",
                    "per_page": 1,
                    "to": 1,
                    "total": 1
                }
            };

        const statesResponse = {
            "data": [
                {
                    "name": "Jigawa",
                    "iso2": "JI",
                    "fips_code": "39",
                    "slogan": null,
                    "population": null,
                    "size": null,
                    "official_language": null,
                    "region": null,
                    "href": {
                        "self": "https://restfulcountries.com/api/v1/countries/Nigeria/states/Jigawa",
                        "country": "https://restfulcountries.com/api/v1/countries/Nigeria"
                    }
                },
                {
                    "name": "Enugu",
                    "iso2": "EN",
                    "fips_code": "47",
                    "slogan": null,
                    "population": null,
                    "size": null,
                    "official_language": null,
                    "region": null,
                    "href": {
                        "self": "https://restfulcountries.com/api/v1/countries/Nigeria/states/Enugu",
                        "country": "https://restfulcountries.com/api/v1/countries/Nigeria"
                    }
                },
            ]
        };

        const presidentsResponse =
            {
                "data": [
                    {
                        "name": "Ram Nath Kovind",
                        "gender": "Male",
                        "appointment_start_date": "2017-07-20",
                        "appointment_end_date": null,
                        "picture": "https://restfulcountries.com/storage/images/presidents/ram-nath-kovindfy6d2usmhy.jpg",
                        "href": {
                            "self": "https://restfulcountries.com/api/v1/countries/India/presidents/Ram-Nath-Kovind",
                            "country": "https://restfulcountries.com/api/v1/countries/India"
                        }
                    }
                ]
            };

        $('#countries-response').html(prettyPrintJson.toHtml(countriesResponse));
        $('#covid19-response').html(prettyPrintJson.toHtml(covid19Response));
        $('#states-response').html(prettyPrintJson.toHtml(statesResponse));
        $('#presidents-response').html(prettyPrintJson.toHtml(presidentsResponse));
    </script>
@endsection
