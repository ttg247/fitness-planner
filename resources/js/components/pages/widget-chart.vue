<template>
    <div class="main-content">
                    <div class="container-fluid">
                        <div class="page-header">
                            <div class="row align-items-end">
                                <div class="col-lg-8">
                                    <div class="page-header-title">
                                        <i class="ik ik-menu bg-blue"></i>
                                        <div class="d-inline">
                                            <h5>Widget Chart</h5>
                                            <span>lorem ipsum dolor sit amet, consectetur adipisicing elit</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <nav class="breadcrumb-container" aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item">
                                                <a href="../index.html"><i class="ik ik-home"></i></a>
                                            </li>
                                            <li class="breadcrumb-item">
                                                <a href="#">Widgets</a>
                                            </li>
                                            <li class="breadcrumb-item active" aria-current="page">Chart</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <!-- Round Chart statustc card start -->
                            <div class="col-xl-3 col-md-6">
                                <div class="card card-red st-cir-card text-white">
                                    <div class="card-block">
                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                                <div id="status-round-1" class="chart-shadow st-cir-chart" style="width:80px;height:80px">
                                                    <h5>42%</h5>
                                                </div>
                                            </div>
                                            <div class="col text-center">
                                                <h3 class=" fw-700 mb-5">144</h3>
                                                <h6 class="mb-0 ">Leads</h6>
                                            </div>
                                        </div>
                                        <span class="st-bt-lbl">42</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card card-blue st-cir-card text-white">
                                    <div class="card-block">
                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                                <div id="status-round-2" class="chart-shadow st-cir-chart" style="width:80px;height:80px">
                                                    <h5>56%</h5>
                                                </div>
                                            </div>
                                            <div class="col text-center">
                                                <h3 class="fw-700 mb-5">102</h3>
                                                <h6 class="mb-0">Goals</h6>
                                            </div>
                                        </div>
                                        <span class="st-bt-lbl">56</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card card-green st-cir-card text-white">
                                    <div class="card-block">
                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                                <div id="status-round-3" class="chart-shadow st-cir-chart" style="width:80px;height:80px">
                                                    <h5>83%</h5>
                                                </div>
                                            </div>
                                            <div class="col text-center">
                                                <h3 class="fw-700 mb-5">124</h3>
                                                <h6 class="mb-0">Contacts</h6>
                                            </div>
                                        </div>
                                        <span class="st-bt-lbl">83</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card card-yellow st-cir-card text-white">
                                    <div class="card-block">
                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                                <div id="status-round-4" class="chart-shadow st-cir-chart" style="width:80px;height:80px">
                                                    <h5>42%</h5>
                                                </div>
                                            </div>
                                            <div class="col text-center">
                                                <h3 class="fw-700 mb-5">84</h3>
                                                <h6 class="mb-0">Accounts</h6>
                                            </div>
                                        </div>
                                        <span class="st-bt-lbl">42</span>
                                    </div>
                                </div>
                            </div>
                            <!-- Round Chart statustc card end -->

                            <!-- product bar chart start -->
                            <div class="col-xl-3 col-md-6">
                                <div class="card prod-bar-card">
                                    <div class="card-header">
                                        <h3>Order Received</h3>
                                    </div>
                                    <div class="card-block">
                                        <p>June - July</p>
                                        <div class="row text-center">
                                            <div class="col-6">
                                                <div id="pbc-1" class="pbc-chart" style="height:50px"></div>
                                                <h6>$ 56,480<i class="fas fa-caret-up ml-10 text-green"></i></h6>
                                            </div>
                                            <div class="col-6">
                                                <div id="pbc-2" class="pbc-chart" style="height:50px"></div>
                                                <h6>$ 32,432<i class="fas fa-caret-down ml-10 text-red"></i></h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card prod-bar-card">
                                    <div class="card-header">
                                        <h3>Total Sales</h3>
                                    </div>
                                    <div class="card-block">
                                        <p>June - July</p>
                                        <div class="row text-center">
                                            <div class="col-6">
                                                <div id="pbc-3" class="pbc-chart" style="height:50px"></div>
                                                <h6>$ 56,480<i class="fas fa-caret-up ml-10 text-green"></i></h6>
                                            </div>
                                            <div class="col-6">
                                                <div id="pbc-4" class="pbc-chart" style="height:50px"></div>
                                                <h6>$ 32,432<i class="fas fa-caret-down ml-10 text-red"></i></h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card prod-bar-card">
                                    <div class="card-header">
                                        <h3>Total Profit</h3>
                                    </div>
                                    <div class="card-block">
                                        <p>June - July</p>
                                        <div class="row text-center">
                                            <div class="col-6">
                                                <div id="pbc-5" class="pbc-chart" style="height:50px"></div>
                                                <h6>$ 56,480<i class="fas fa-caret-up ml-10 text-green"></i></h6>
                                            </div>
                                            <div class="col-6">
                                                <div data-label="60%" class="radial-bar radial-bar-60 radial-bar-sm radial-bar-warning mb-5"></div>
                                                <h6>$2.6k<i class="fas fa-caret-down ml-10 text-red"></i></h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card prod-bar-card">
                                    <div class="card-header">
                                        <h3>Total Profit</h3>
                                    </div>
                                    <div class="card-block">
                                        <p>June - July</p>
                                        <div class="row text-center">
                                            <div class="col-6">
                                                <div id="pbc-6" class="pbc-chart" style="height:50px"></div>
                                                <h6>$ 56,480<i class="fas fa-caret-up ml-10 text-green"></i></h6>
                                            </div>
                                            <div class="col-6">
                                                <div data-label="60%" class="radial-bar radial-bar-60 radial-bar-sm radial-bar-warning mb-5"></div>
                                                <h6>$2.6k<i class="fas fa-caret-down ml-10 text-red"></i></h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- product bar chart end -->

                            <!-- sale card start -->
                            <div class="col-xl-3 col-md-6">
                                <div class="card sale-card" style="min-height: 301px;">
                                    <div class="card-header">
                                        <h3>Order Overview</h3>
                                    </div>
                                    <div class="card-block text-center">
                                        <div class="s-chart">
                                            <input type="text" class="dial" value="35" data-width="130" data-height="130" data-fgColor="#42a5f5" data-angleOffset="-125" data-angleArc="250" data-thickness=".1">
                                            <div class="bottom-line"></div>
                                        </div>
                                        <h6>Congratulation!</h6>
                                        <p class="mb-0">You have +75 orders compared to last month</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card sale-card ">
                                    <div class="card-header">
                                        <h3>Unique Visitors</h3>
                                    </div>
                                    <div class="card-block text-center">
                                        <div data-label="40%" class="radial-bar radial-bar-40 radial-bar-lg radial-bar-danger">
                                            <img src="../img/users/2.jpg" alt="User-Image">
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="s-caption bg-default"></div>
                                                <div class="s-cont d-inline-block">
                                                    <h5 class="fw-700 mb-0">1,507</h5>
                                                    <p class="mb-0">Female</p>
                                                </div>
                                            </div>
                                            <div class="col-6 border-left">
                                                <div class="s-caption bg-red"></div>
                                                <div class="s-cont d-inline-block">
                                                    <h5 class="fw-700 mb-0">1,264</h5>
                                                    <p class="mb-0">male</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card sale-card">
                                    <div class="card-header">
                                        <h3>Sales Statistics</h3>
                                    </div>
                                    <div class="card-block text-center">
                                        <div data-label="40%" class="radial-bar radial-bar-40 radial-bar-lg radial-bar-danger">
                                            <img src="../img/users/3.jpg" alt="User-Image">
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <h5 class="fw-700 mb-0">5,632</h5>
                                                <p class="mb-0">Weekly</p>
                                            </div>
                                            <div class="col-6 border-left">
                                                <h5 class="fw-700 mb-0">23,131</h5>
                                                <p class="mb-0">Monthly</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card sale-card" style="min-height: 301px;">
                                    <div class="card-header">
                                        <h3>Summary</h3>
                                    </div>
                                    <div class="card-block text-center">
                                        <input type="text" class="dial" value="35" data-width="60" data-height="60" data-fgColor="#42a5f5" data-angleOffset="-125" data-angleArc="250" data-thickness=".25" data-displayInput="false">
                                        <p class="mb-10 text-left">House <span class="float-right">90%</span></p>
                                        <div class="progress mb-20">
                                            <div class="progress-bar bg-c-blue" style="width:90%"></div>
                                        </div>
                                        <p class="mb-10 text-left">Food <span class="float-right">30%</span></p>
                                        <div class="progress mb-20">
                                            <div class="progress-bar bg-c-blue" style="width:30%"></div>
                                        </div>
                                        <div class="text-center">
                                            <a href="#!" class="text-mute"><i class="fas fa-bars mr-10"></i>View More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- sale card end -->

                            <!-- sale 2 card start -->
                            <div class="col-md-6 col-xl-4">
                                <div class="card sale-card">
                                    <div class="card-header">
                                        <h3>Realtime Profit</h3>
                                    </div>
                                    <div class="card-block text-center">
                                        <div id="realtime-profit" style="height:150px"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-4">
                                <div class="card sale-card">
                                    <div class="card-header">
                                        <h3>Sales Difference</h3>
                                    </div>
                                    <div class="card-block text-center">
                                        <div id="sale-diff" class="chart-shadow" style="height:150px"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 col-xl-4">
                                <div class="card card-green text-white">
                                    <div class="card-block pb-0">
                                        <div class="row mb-50">
                                            <div class="col">
                                                <h6 class="mb-5">Sales In July</h6>
                                                <h5 class="mb-0  fw-700">$2665.00</h5>
                                            </div>
                                            <div class="col-auto text-center">
                                                <p class="mb-5">Direct Sale</p>
                                                <h6 class="mb-0">$1768</h6>
                                            </div>

                                            <div class="col-auto text-center">
                                                <p class="mb-5">Referal</p>
                                                <h6 class="mb-0">$897</h6>
                                            </div>
                                        </div>
                                        <div id="sec-ecommerce-chart-line" class="chart-shadow" style="height:30px"></div>
                                        <div id="sec-ecommerce-chart-bar" style="height:100px"></div>
                                    </div>
                                </div>
                            </div>
                            <!-- sale 2 card end -->

                            <!-- sale revenue card start -->
                            <div class="col-md-12 col-xl-8">
                                <div class="card sale-card">
                                    <div class="card-header">
                                        <h3>Deals Analytics</h3>
                                    </div>
                                    <div class="card-block">
                                        <div id="deal-analytic-chart" class="chart-shadow" style="height:300px"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 col-xl-4">
                                <div class="card sale-card">
                                    <div class="card-header">
                                        <h3>Total Revenue</h3>
                                    </div>
                                    <div class="card-block text-center">
                                        <div id="tot-rev-chart" class="tot-rev-chart chart-shadow st-cir-chart" style="width:100px;height:100px">
                                            <h3>120</h3>
                                        </div>
                                        <h6 class="mt-40">Today’s Total Sales</h6>
                                        <h3 class="fw-700 mb-40">100</h3>
                                        <div class="row">
                                            <div class="col-4">
                                                <p class="mb-5">Target</p>
                                                <h3 class="fw-700 text-yellow">$1253</h3>
                                            </div>
                                            <div class="col-4">
                                                <p class="mb-5">Last Week</p>
                                                <h3 class="fw-700 text-yellow">$795</h3>
                                            </div>
                                            <div class="col-4">
                                                <p class="mb-5">Last Month</p>
                                                <h3 class="fw-700 text-yellow">$978</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- sale revenue card end -->

                            <!-- map card start -->
                            <div class="col-md-12">
                                <div class="card sale-card">
                                    <div class="card-header">
                                        <h3>Deals Analytics</h3>
                                    </div>
                                    <div class="card-block">
                                        <div class="row">
                                            <div class="col-sm-8">
                                                <div id="allocation-map" class="chart-shadow" style="height:250px"></div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div id="allocation-chart" class="chart-shadow" style="height:250px"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- map card end -->
                            <!-- income start -->
                            <div class="col-xl-4 col-md-6">
                                <div class="card o-hidden">
                                    <div class="card-header">
                                        <h3>Sale Income</h3>
                                    </div>
                                    <div class="card-block">
                                        <div class="row">
                                            <div class="col-4">
                                                <p class="text-muted mb-5">Overall</p>
                                                <h6>68.52%</h6>
                                            </div>
                                            <div class="col-4">
                                                <p class="text-muted mb-5">Monthly</p>
                                                <h6>28.90%</h6>
                                            </div>
                                            <div class="col-4">
                                                <p class="text-muted mb-5">Day</p>
                                                <h6>13.50%</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="sal-income" style="height:100px"></div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6">
                                <div class="card o-hidden">
                                    <div class="card-header">
                                        <h3>Rent Income</h3>
                                    </div>
                                    <div class="card-block">
                                        <div class="row">
                                            <div class="col-4">
                                                <p class="text-muted mb-5">Overall</p>
                                                <h6>68.52%</h6>
                                            </div>
                                            <div class="col-4">
                                                <p class="text-muted mb-5">Monthly</p>
                                                <h6>28.90%</h6>
                                            </div>
                                            <div class="col-4">
                                                <p class="text-muted mb-5">Day</p>
                                                <h6>13.50%</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="rent-income" style="height:100px"></div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-12">
                                <div class="card o-hidden">
                                    <div class="card-header">
                                        <h3>Income Analysis</h3>
                                    </div>
                                    <div class="card-block">
                                        <div class="row">
                                            <div class="col-4">
                                                <p class="text-muted mb-5">Overall</p>
                                                <h6>68.52%</h6>
                                            </div>
                                            <div class="col-4">
                                                <p class="text-muted mb-5">Monthly</p>
                                                <h6>28.90%</h6>
                                            </div>
                                            <div class="col-4">
                                                <p class="text-muted mb-5">Day</p>
                                                <h6>13.50%</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="income-analysis" style="height:100px"></div>
                                </div>
                            </div>
                            <!-- income end -->

                        </div>

                    </div>
                </div>
</template>