@extends('layouts.app')

@section('main')
    <div class="container-fluid">
        <div id="ui-view">
            <div>
                <link href="vendors/@coreui/chartjs/css/coreui-chartjs.css" rel="stylesheet">


                <div class="fade-in">
                    <div class="row">
                        <div class="col-sm-6 col-lg-3">
                            <div class="card text-white bg-gradient-primary">
                                <div class="card-body card-body pb-0 d-flex justify-content-between align-items-start">
                                    <div>
                                        <div class="text-value-lg">9.823</div>
                                        <div>Members online</div>
                                    </div>
                                    <div class="btn-group">
                                        <button class="btn btn-transparent dropdown-toggle p-0" type="button"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <svg class="c-icon">
                                                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-settings"></use>
                                            </svg>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item"
                                                                                          href="#">Action</a><a
                                                class="dropdown-item" href="#">Another action</a><a
                                                class="dropdown-item" href="#">Something else here</a></div>
                                    </div>
                                </div>
                                <div class="c-chart-wrapper mt-3 mx-3" style="height:70px;">
                                    <div class="chartjs-size-monitor">
                                        <div class="chartjs-size-monitor-expand">
                                            <div class=""></div>
                                        </div>
                                        <div class="chartjs-size-monitor-shrink">
                                            <div class=""></div>
                                        </div>
                                    </div>
                                    <canvas class="chart chartjs-render-monitor" id="card-chart1" height="70"
                                            width="222" style="display: block;"></canvas>
                                    <div id="card-chart1-tooltip" class="c-chartjs-tooltip top"
                                         style="opacity: 0; left: 88.2422px; top: 113.173px;">
                                        <div class="c-tooltip-header">
                                            <div class="c-tooltip-header-item">January</div>
                                        </div>
                                        <div class="c-tooltip-body">
                                            <div class="c-tooltip-body-item"><span class="c-tooltip-body-item-color"
                                                                                   style="background-color: rgb(50, 31, 219);"></span><span
                                                    class="c-tooltip-body-item-label">My First dataset</span><span
                                                    class="c-tooltip-body-item-value">65</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-3">
                            <div class="card text-white bg-gradient-info">
                                <div class="card-body card-body pb-0 d-flex justify-content-between align-items-start">
                                    <div>
                                        <div class="text-value-lg">9.823</div>
                                        <div>Members online</div>
                                    </div>
                                    <div class="btn-group">
                                        <button class="btn btn-transparent dropdown-toggle p-0" type="button"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <svg class="c-icon">
                                                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-settings"></use>
                                            </svg>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item"
                                                                                          href="#">Action</a><a
                                                class="dropdown-item" href="#">Another action</a><a
                                                class="dropdown-item" href="#">Something else here</a></div>
                                    </div>
                                </div>
                                <div class="c-chart-wrapper mt-3 mx-3" style="height:70px;">
                                    <div class="chartjs-size-monitor">
                                        <div class="chartjs-size-monitor-expand">
                                            <div class=""></div>
                                        </div>
                                        <div class="chartjs-size-monitor-shrink">
                                            <div class=""></div>
                                        </div>
                                    </div>
                                    <canvas class="chart chartjs-render-monitor" id="card-chart2" height="70"
                                            width="222" style="display: block;"></canvas>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-3">
                            <div class="card text-white bg-gradient-warning">
                                <div class="card-body card-body pb-0 d-flex justify-content-between align-items-start">
                                    <div>
                                        <div class="text-value-lg">9.823</div>
                                        <div>Members online</div>
                                    </div>
                                    <div class="btn-group">
                                        <button class="btn btn-transparent dropdown-toggle p-0" type="button"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <svg class="c-icon">
                                                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-settings"></use>
                                            </svg>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item"
                                                                                          href="#">Action</a><a
                                                class="dropdown-item" href="#">Another action</a><a
                                                class="dropdown-item" href="#">Something else here</a></div>
                                    </div>
                                </div>
                                <div class="c-chart-wrapper mt-3" style="height:70px;">
                                    <div class="chartjs-size-monitor">
                                        <div class="chartjs-size-monitor-expand">
                                            <div class=""></div>
                                        </div>
                                        <div class="chartjs-size-monitor-shrink">
                                            <div class=""></div>
                                        </div>
                                    </div>
                                    <canvas class="chart chartjs-render-monitor" id="card-chart3" height="70"
                                            width="254" style="display: block;"></canvas>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-3">
                            <div class="card text-white bg-gradient-danger">
                                <div class="card-body card-body pb-0 d-flex justify-content-between align-items-start">
                                    <div>
                                        <div class="text-value-lg">9.823</div>
                                        <div>Members online</div>
                                    </div>
                                    <div class="btn-group">
                                        <button class="btn btn-transparent dropdown-toggle p-0" type="button"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <svg class="c-icon">
                                                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-settings"></use>
                                            </svg>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item"
                                                                                          href="#">Action</a><a
                                                class="dropdown-item" href="#">Another action</a><a
                                                class="dropdown-item" href="#">Something else here</a></div>
                                    </div>
                                </div>
                                <div class="c-chart-wrapper mt-3 mx-3" style="height:70px;">
                                    <div class="chartjs-size-monitor">
                                        <div class="chartjs-size-monitor-expand">
                                            <div class=""></div>
                                        </div>
                                        <div class="chartjs-size-monitor-shrink">
                                            <div class=""></div>
                                        </div>
                                    </div>
                                    <canvas class="chart chartjs-render-monitor" id="card-chart4" height="70"
                                            width="222" style="display: block;"></canvas>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-sm-6 col-lg-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="text-value-lg">89.9%</div>
                                    <div>Widget title</div>
                                    <div class="progress progress-xs my-2">
                                        <div class="progress-bar bg-gradient-success" role="progressbar"
                                             style="width: 25%" aria-valuenow="25" aria-valuemin="0"
                                             aria-valuemax="100"></div>
                                    </div>
                                    <small class="text-muted">Widget helper text</small>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="text-value-lg">12.124</div>
                                    <div>Widget title</div>
                                    <div class="progress progress-xs my-2">
                                        <div class="progress-bar bg-gradient-info" role="progressbar" style="width: 25%"
                                             aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <small class="text-muted">Widget helper text</small>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="text-value-lg">$98.111,00</div>
                                    <div>Widget title</div>
                                    <div class="progress progress-xs my-2">
                                        <div class="progress-bar bg-gradient-warning" role="progressbar"
                                             style="width: 25%" aria-valuenow="25" aria-valuemin="0"
                                             aria-valuemax="100"></div>
                                    </div>
                                    <small class="text-muted">Widget helper text</small>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="text-value-lg">2 TB</div>
                                    <div>Widget title</div>
                                    <div class="progress progress-xs my-2">
                                        <div class="progress-bar bg-gradient-danger" role="progressbar"
                                             style="width: 25%" aria-valuenow="25" aria-valuemin="0"
                                             aria-valuemax="100"></div>
                                    </div>
                                    <small class="text-muted">Widget helper text</small>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-sm-6 col-lg-3">
                            <div class="card text-white bg-gradient-primary">
                                <div class="card-body">
                                    <div class="text-value-lg">89.9%</div>
                                    <div>Widget title</div>
                                    <div class="progress progress-white progress-xs my-2">
                                        <div class="progress-bar" role="progressbar" style="width: 25%"
                                             aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <small class="text-muted">Widget helper text</small>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-3">
                            <div class="card text-white bg-gradient-warning">
                                <div class="card-body">
                                    <div class="text-value-lg">12.124</div>
                                    <div>Widget title</div>
                                    <div class="progress progress-white progress-xs my-2">
                                        <div class="progress-bar" role="progressbar" style="width: 25%"
                                             aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <small class="text-muted">Widget helper text</small>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-3">
                            <div class="card text-white bg-gradient-danger">
                                <div class="card-body">
                                    <div class="text-value-lg">$98.111,00</div>
                                    <div>Widget title</div>
                                    <div class="progress progress-white progress-xs my-2">
                                        <div class="progress-bar" role="progressbar" style="width: 25%"
                                             aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <small class="text-muted">Widget helper text</small>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-3">
                            <div class="card text-white bg-gradient-info">
                                <div class="card-body">
                                    <div class="text-value-lg">2 TB</div>
                                    <div>Widget title</div>
                                    <div class="progress progress-white progress-xs my-2">
                                        <div class="progress-bar" role="progressbar" style="width: 25%"
                                             aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <small class="text-muted">Widget helper text</small>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-md-2 col-sm-4">
                            <div class="card">
                                <div class="card-body text-center">
                                    <div class="text-muted small text-uppercase font-weight-bold">Title</div>
                                    <div class="text-value-xl py-3">1,123</div>
                                    <div class="c-chart-wrapper mx-auto" style="height:40px;width:80px">
                                        <div class="chartjs-size-monitor">
                                            <div class="chartjs-size-monitor-expand">
                                                <div class=""></div>
                                            </div>
                                            <div class="chartjs-size-monitor-shrink">
                                                <div class=""></div>
                                            </div>
                                        </div>
                                        <canvas class="chart chart-bar chartjs-render-monitor" id="sparkline-chart-1"
                                                height="40" width="80" style="display: block;"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-2 col-sm-4">
                            <div class="card">
                                <div class="card-body text-center">
                                    <div class="text-muted small text-uppercase font-weight-bold">Title</div>
                                    <div class="text-value-xl py-3">1,123</div>
                                    <div class="c-chart-wrapper mx-auto" style="height:40px;width:80px">
                                        <div class="chartjs-size-monitor">
                                            <div class="chartjs-size-monitor-expand">
                                                <div class=""></div>
                                            </div>
                                            <div class="chartjs-size-monitor-shrink">
                                                <div class=""></div>
                                            </div>
                                        </div>
                                        <canvas class="chart chart-bar chartjs-render-monitor" id="sparkline-chart-2"
                                                height="40" width="80" style="display: block;"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-2 col-sm-4">
                            <div class="card">
                                <div class="card-body text-center">
                                    <div class="text-muted small text-uppercase font-weight-bold">Title</div>
                                    <div class="text-value-xl py-3">1,123</div>
                                    <div class="c-chart-wrapper mx-auto" style="height:40px;width:80px">
                                        <div class="chartjs-size-monitor">
                                            <div class="chartjs-size-monitor-expand">
                                                <div class=""></div>
                                            </div>
                                            <div class="chartjs-size-monitor-shrink">
                                                <div class=""></div>
                                            </div>
                                        </div>
                                        <canvas class="chart chart-bar chartjs-render-monitor" id="sparkline-chart-3"
                                                height="40" width="80" style="display: block;"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-2 col-sm-4">
                            <div class="card">
                                <div class="card-body text-center">
                                    <div class="text-muted small text-uppercase font-weight-bold">Title</div>
                                    <div class="text-value-xl py-3">1,123</div>
                                    <div class="c-chart-wrapper mx-auto" style="height:40px;width:80px">
                                        <div class="chartjs-size-monitor">
                                            <div class="chartjs-size-monitor-expand">
                                                <div class=""></div>
                                            </div>
                                            <div class="chartjs-size-monitor-shrink">
                                                <div class=""></div>
                                            </div>
                                        </div>
                                        <canvas class="chart chart-line chartjs-render-monitor" id="sparkline-chart-4"
                                                height="40" width="80"
                                                style="display: block; width: 80px; height: 40px;"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-2 col-sm-4">
                            <div class="card">
                                <div class="card-body text-center">
                                    <div class="text-muted small text-uppercase font-weight-bold">Title</div>
                                    <div class="text-value-xl py-3">1,123</div>
                                    <div class="c-chart-wrapper mx-auto" style="height:40px;width:80px">
                                        <div class="chartjs-size-monitor">
                                            <div class="chartjs-size-monitor-expand">
                                                <div class=""></div>
                                            </div>
                                            <div class="chartjs-size-monitor-shrink">
                                                <div class=""></div>
                                            </div>
                                        </div>
                                        <canvas class="chart chart-line chartjs-render-monitor" id="sparkline-chart-5"
                                                height="40" width="80"
                                                style="display: block; width: 80px; height: 40px;"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-2 col-sm-4">
                            <div class="card">
                                <div class="card-body text-center">
                                    <div class="text-muted small text-uppercase font-weight-bold">Title</div>
                                    <div class="text-value-xl py-3">1,123</div>
                                    <div class="c-chart-wrapper mx-auto" style="height:40px;width:80px">
                                        <div class="chartjs-size-monitor">
                                            <div class="chartjs-size-monitor-expand">
                                                <div class=""></div>
                                            </div>
                                            <div class="chartjs-size-monitor-shrink">
                                                <div class=""></div>
                                            </div>
                                        </div>
                                        <canvas class="chart chart-line chartjs-render-monitor" id="sparkline-chart-6"
                                                height="40" width="80"
                                                style="display: block; width: 80px; height: 40px;"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-6 col-lg-3">
                            <div class="card">
                                <div class="card-body p-3 d-flex align-items-center">
                                    <div class="bg-gradient-primary p-3 mfe-3">
                                        <svg class="c-icon c-icon-xl">
                                            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-settings"></use>
                                        </svg>
                                    </div>
                                    <div>
                                        <div class="text-value text-primary">$1.999,50</div>
                                        <div class="text-muted text-uppercase font-weight-bold small">Widget title</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-lg-3">
                            <div class="card">
                                <div class="card-body p-3 d-flex align-items-center">
                                    <div class="bg-gradient-info p-3 mfe-3">
                                        <svg class="c-icon c-icon-xl">
                                            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-laptop"></use>
                                        </svg>
                                    </div>
                                    <div>
                                        <div class="text-value text-info">$1.999,50</div>
                                        <div class="text-muted text-uppercase font-weight-bold small">Widget title</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-lg-3">
                            <div class="card">
                                <div class="card-body p-3 d-flex align-items-center">
                                    <div class="bg-gradient-warning p-3 mfe-3">
                                        <svg class="c-icon c-icon-xl">
                                            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-moon"></use>
                                        </svg>
                                    </div>
                                    <div>
                                        <div class="text-value text-warning">$1.999,50</div>
                                        <div class="text-muted text-uppercase font-weight-bold small">Widget title</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-lg-3">
                            <div class="card">
                                <div class="card-body p-3 d-flex align-items-center">
                                    <div class="bg-gradient-danger p-3 mfe-3">
                                        <svg class="c-icon c-icon-xl">
                                            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-bell"></use>
                                        </svg>
                                    </div>
                                    <div>
                                        <div class="text-value text-danger">$1.999,50</div>
                                        <div class="text-muted text-uppercase font-weight-bold small">Widget title</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-lg-3">
                            <div class="card">
                                <div class="card-body p-3 d-flex align-items-center">
                                    <div class="bg-gradient-primary p-3 mfe-3">
                                        <svg class="c-icon c-icon-xl">
                                            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-settings"></use>
                                        </svg>
                                    </div>
                                    <div>
                                        <div class="text-value text-primary">$1.999,50</div>
                                        <div class="text-muted text-uppercase font-weight-bold small">Widget title</div>
                                    </div>
                                </div>
                                <div class="card-footer px-3 py-2"><a
                                        class="btn-block text-muted d-flex justify-content-between align-items-center"
                                        href="#"><span class="small font-weight-bold">View More</span>
                                        <svg class="c-icon">
                                            <use
                                                xlink:href="vendors/@coreui/icons/svg/free.svg#cil-chevron-right"></use>
                                        </svg>
                                    </a></div>
                            </div>
                        </div>

                        <div class="col-6 col-lg-3">
                            <div class="card">
                                <div class="card-body p-3 d-flex align-items-center">
                                    <div class="bg-gradient-info p-3 mfe-3">
                                        <svg class="c-icon c-icon-xl">
                                            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-laptop"></use>
                                        </svg>
                                    </div>
                                    <div>
                                        <div class="text-value text-info">$1.999,50</div>
                                        <div class="text-muted text-uppercase font-weight-bold small">Widget title</div>
                                    </div>
                                </div>
                                <div class="card-footer px-3 py-2"><a
                                        class="btn-block text-muted d-flex justify-content-between align-items-center"
                                        href="#"><span class="small font-weight-bold">View More</span>
                                        <svg class="c-icon">
                                            <use
                                                xlink:href="vendors/@coreui/icons/svg/free.svg#cil-chevron-right"></use>
                                        </svg>
                                    </a></div>
                            </div>
                        </div>

                        <div class="col-6 col-lg-3">
                            <div class="card">
                                <div class="card-body p-3 d-flex align-items-center">
                                    <div class="bg-gradient-warning p-3 mfe-3">
                                        <svg class="c-icon c-icon-xl">
                                            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-moon"></use>
                                        </svg>
                                    </div>
                                    <div>
                                        <div class="text-value text-warning">$1.999,50</div>
                                        <div class="text-muted text-uppercase font-weight-bold small">Widget title</div>
                                    </div>
                                </div>
                                <div class="card-footer px-3 py-2"><a
                                        class="btn-block text-muted d-flex justify-content-between align-items-center"
                                        href="#"><span class="small font-weight-bold">View More</span>
                                        <svg class="c-icon">
                                            <use
                                                xlink:href="vendors/@coreui/icons/svg/free.svg#cil-chevron-right"></use>
                                        </svg>
                                    </a></div>
                            </div>
                        </div>

                        <div class="col-6 col-lg-3">
                            <div class="card">
                                <div class="card-body p-3 d-flex align-items-center">
                                    <div class="bg-gradient-danger p-3 mfe-3">
                                        <svg class="c-icon c-icon-xl">
                                            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-bell"></use>
                                        </svg>
                                    </div>
                                    <div>
                                        <div class="text-value text-danger">$1.999,50</div>
                                        <div class="text-muted text-uppercase font-weight-bold small">Widget title</div>
                                    </div>
                                </div>
                                <div class="card-footer px-3 py-2"><a
                                        class="btn-block text-muted d-flex justify-content-between align-items-center"
                                        href="#"><span class="small font-weight-bold">View More</span>
                                        <svg class="c-icon">
                                            <use
                                                xlink:href="vendors/@coreui/icons/svg/free.svg#cil-chevron-right"></use>
                                        </svg>
                                    </a></div>
                            </div>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-6 col-lg-3">
                            <div class="card overflow-hidden">
                                <div class="card-body p-0 d-flex align-items-center">
                                    <div class="bg-gradient-primary p-4 mfe-3">
                                        <svg class="c-icon c-icon-xl">
                                            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-settings"></use>
                                        </svg>
                                    </div>
                                    <div>
                                        <div class="text-value text-primary">$1.999,50</div>
                                        <div class="text-muted text-uppercase font-weight-bold small">Widget title</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-lg-3">
                            <div class="card overflow-hidden">
                                <div class="card-body p-0 d-flex align-items-center">
                                    <div class="bg-gradient-info p-4 mfe-3">
                                        <svg class="c-icon c-icon-xl">
                                            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-laptop"></use>
                                        </svg>
                                    </div>
                                    <div>
                                        <div class="text-value text-info">$1.999,50</div>
                                        <div class="text-muted text-uppercase font-weight-bold small">Widget title</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-lg-3">
                            <div class="card overflow-hidden">
                                <div class="card-body p-0 d-flex align-items-center">
                                    <div class="bg-gradient-warning p-4 mfe-3">
                                        <svg class="c-icon c-icon-xl">
                                            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-moon"></use>
                                        </svg>
                                    </div>
                                    <div>
                                        <div class="text-value text-warning">$1.999,50</div>
                                        <div class="text-muted text-uppercase font-weight-bold small">Widget title</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-lg-3">
                            <div class="card overflow-hidden">
                                <div class="card-body p-0 d-flex align-items-center">
                                    <div class="bg-gradient-danger p-4 mfe-3">
                                        <svg class="c-icon c-icon-xl">
                                            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-bell"></use>
                                        </svg>
                                    </div>
                                    <div>
                                        <div class="text-value text-danger">$1.999,50</div>
                                        <div class="text-muted text-uppercase font-weight-bold small">Widget title</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-lg-3">
                            <div class="card overflow-hidden">
                                <div class="card-body p-0 d-flex align-items-center">
                                    <div class="bg-gradient-primary py-4 px-5 mfe-3">
                                        <svg class="c-icon c-icon-xl">
                                            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-settings"></use>
                                        </svg>
                                    </div>
                                    <div>
                                        <div class="text-value text-primary">$1.999,50</div>
                                        <div class="text-muted text-uppercase font-weight-bold small">Widget title</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-lg-3">
                            <div class="card overflow-hidden">
                                <div class="card-body p-0 d-flex align-items-center">
                                    <div class="bg-gradient-info py-4 px-5 mfe-3">
                                        <svg class="c-icon c-icon-xl">
                                            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-laptop"></use>
                                        </svg>
                                    </div>
                                    <div>
                                        <div class="text-value text-info">$1.999,50</div>
                                        <div class="text-muted text-uppercase font-weight-bold small">Widget title</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-lg-3">
                            <div class="card overflow-hidden">
                                <div class="card-body p-0 d-flex align-items-center">
                                    <div class="bg-gradient-warning py-4 px-5 mfe-3">
                                        <svg class="c-icon c-icon-xl">
                                            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-moon"></use>
                                        </svg>
                                    </div>
                                    <div>
                                        <div class="text-value text-warning">$1.999,50</div>
                                        <div class="text-muted text-uppercase font-weight-bold small">Widget title</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-lg-3">
                            <div class="card overflow-hidden">
                                <div class="card-body p-0 d-flex align-items-center">
                                    <div class="bg-gradient-danger py-4 px-5 mfe-3">
                                        <svg class="c-icon c-icon-xl">
                                            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-bell"></use>
                                        </svg>
                                    </div>
                                    <div>
                                        <div class="text-value text-danger">$1.999,50</div>
                                        <div class="text-muted text-uppercase font-weight-bold small">Widget title</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-sm-6 col-lg-4">
                            <div class="card">
                                <div class="card-header bg-facebook content-center">
                                    <svg class="c-icon c-icon-3xl text-white my-4">
                                        <use xlink:href="#cib-facebook-f"></use>
                                    </svg>
                                    <div class="c-chart-wrapper">
                                        <div class="chartjs-size-monitor">
                                            <div class="chartjs-size-monitor-expand">
                                                <div class=""></div>
                                            </div>
                                            <div class="chartjs-size-monitor-shrink">
                                                <div class=""></div>
                                            </div>
                                        </div>
                                        <canvas id="social-box-chart-1" height="96" width="349"
                                                class="chartjs-render-monitor"
                                                style="display: block; width: 349px; height: 96px;"></canvas>
                                    </div>
                                </div>
                                <div class="card-body row text-center">
                                    <div class="col">
                                        <div class="text-value-xl">89k</div>
                                        <div class="text-uppercase text-muted small">friends</div>
                                    </div>
                                    <div class="c-vr"></div>
                                    <div class="col">
                                        <div class="text-value-xl">459</div>
                                        <div class="text-uppercase text-muted small">feeds</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-4">
                            <div class="card">
                                <div class="card-header bg-twitter content-center">
                                    <svg class="c-icon c-icon-3xl text-white my-4">
                                        <use xlink:href="#cib-twitter"></use>
                                    </svg>
                                    <div class="c-chart-wrapper">
                                        <div class="chartjs-size-monitor">
                                            <div class="chartjs-size-monitor-expand">
                                                <div class=""></div>
                                            </div>
                                            <div class="chartjs-size-monitor-shrink">
                                                <div class=""></div>
                                            </div>
                                        </div>
                                        <canvas id="social-box-chart-2" height="96" width="349"
                                                class="chartjs-render-monitor"
                                                style="display: block; width: 349px; height: 96px;"></canvas>
                                    </div>
                                </div>
                                <div class="card-body row text-center">
                                    <div class="col">
                                        <div class="text-value-xl">973k</div>
                                        <div class="text-uppercase text-muted small">followers</div>
                                    </div>
                                    <div class="c-vr"></div>
                                    <div class="col">
                                        <div class="text-value-xl">1.792</div>
                                        <div class="text-uppercase text-muted small">tweets</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-4">
                            <div class="card">
                                <div class="card-header bg-linkedin content-center">
                                    <svg class="c-icon c-icon-3xl text-white my-4">
                                        <use xlink:href="#cib-linkedin"></use>
                                    </svg>
                                    <div class="c-chart-wrapper">
                                        <div class="chartjs-size-monitor">
                                            <div class="chartjs-size-monitor-expand">
                                                <div class=""></div>
                                            </div>
                                            <div class="chartjs-size-monitor-shrink">
                                                <div class=""></div>
                                            </div>
                                        </div>
                                        <canvas id="social-box-chart-3" height="96" width="349"
                                                class="chartjs-render-monitor"
                                                style="display: block; width: 349px; height: 96px;"></canvas>
                                    </div>
                                </div>
                                <div class="card-body row text-center">
                                    <div class="col">
                                        <div class="text-value-xl">500+</div>
                                        <div class="text-uppercase text-muted small">contacts</div>
                                    </div>
                                    <div class="c-vr"></div>
                                    <div class="col">
                                        <div class="text-value-xl">292</div>
                                        <div class="text-uppercase text-muted small">feeds</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="card-group mb-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="text-muted text-right mb-4">
                                    <svg class="c-icon c-icon-2xl">
                                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-people"></use>
                                    </svg>
                                </div>
                                <div class="text-value-lg">87.500</div>
                                <small class="text-muted text-uppercase font-weight-bold">Visitors</small>
                                <div class="progress progress-xs mt-3 mb-0">
                                    <div class="progress-bar bg-gradient-info" role="progressbar" style="width: 25%"
                                         aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <div class="text-muted text-right mb-4">
                                    <svg class="c-icon c-icon-2xl">
                                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-user-follow"></use>
                                    </svg>
                                </div>
                                <div class="text-value-lg">385</div>
                                <small class="text-muted text-uppercase font-weight-bold">New Clients</small>
                                <div class="progress progress-xs mt-3 mb-0">
                                    <div class="progress-bar bg-gradient-success" role="progressbar" style="width: 25%"
                                         aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <div class="text-muted text-right mb-4">
                                    <svg class="c-icon c-icon-2xl">
                                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-basket"></use>
                                    </svg>
                                </div>
                                <div class="text-value-lg">1238</div>
                                <small class="text-muted text-uppercase font-weight-bold">Products sold</small>
                                <div class="progress progress-xs mt-3 mb-0">
                                    <div class="progress-bar bg-gradient-warning" role="progressbar" style="width: 25%"
                                         aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <div class="text-muted text-right mb-4">
                                    <svg class="c-icon c-icon-2xl">
                                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-chart-pie"></use>
                                    </svg>
                                </div>
                                <div class="text-value-lg">28%</div>
                                <small class="text-muted text-uppercase font-weight-bold">Returning Visitors</small>
                                <div class="progress progress-xs mt-3 mb-0">
                                    <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25"
                                         aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <div class="text-muted text-right mb-4">
                                    <svg class="c-icon c-icon-2xl">
                                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-speedometer"></use>
                                    </svg>
                                </div>
                                <div class="text-value-lg">5:34:11</div>
                                <small class="text-muted text-uppercase font-weight-bold">Avg. Time</small>
                                <div class="progress progress-xs mt-3 mb-0">
                                    <div class="progress-bar bg-gradient-danger" role="progressbar" style="width: 25%"
                                         aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-md-2">
                            <div class="card">
                                <div class="card-body">
                                    <div class="text-muted text-right mb-4">
                                        <svg class="c-icon c-icon-2xl">
                                            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-people"></use>
                                        </svg>
                                    </div>
                                    <div class="text-value-lg">87.500</div>
                                    <small class="text-muted text-uppercase font-weight-bold">Visitors</small>
                                    <div class="progress progress-xs mt-3 mb-0">
                                        <div class="progress-bar bg-gradient-info" role="progressbar" style="width: 25%"
                                             aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-2">
                            <div class="card">
                                <div class="card-body">
                                    <div class="text-muted text-right mb-4">
                                        <svg class="c-icon c-icon-2xl">
                                            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-user-follow"></use>
                                        </svg>
                                    </div>
                                    <div class="text-value-lg">385</div>
                                    <small class="text-muted text-uppercase font-weight-bold">New Clients</small>
                                    <div class="progress progress-xs mt-3 mb-0">
                                        <div class="progress-bar bg-gradient-success" role="progressbar"
                                             style="width: 25%" aria-valuenow="25" aria-valuemin="0"
                                             aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-2">
                            <div class="card">
                                <div class="card-body">
                                    <div class="text-muted text-right mb-4">
                                        <svg class="c-icon c-icon-2xl">
                                            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-basket"></use>
                                        </svg>
                                    </div>
                                    <div class="text-value-lg">1238</div>
                                    <small class="text-muted text-uppercase font-weight-bold">Products sold</small>
                                    <div class="progress progress-xs mt-3 mb-0">
                                        <div class="progress-bar bg-gradient-warning" role="progressbar"
                                             style="width: 25%" aria-valuenow="25" aria-valuemin="0"
                                             aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-2">
                            <div class="card">
                                <div class="card-body">
                                    <div class="text-muted text-right mb-4">
                                        <svg class="c-icon c-icon-2xl">
                                            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-chart-pie"></use>
                                        </svg>
                                    </div>
                                    <div class="text-value-lg">28%</div>
                                    <small class="text-muted text-uppercase font-weight-bold">Returning Visitors</small>
                                    <div class="progress progress-xs mt-3 mb-0">
                                        <div class="progress-bar" role="progressbar" style="width: 25%"
                                             aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-2">
                            <div class="card">
                                <div class="card-body">
                                    <div class="text-muted text-right mb-4">
                                        <svg class="c-icon c-icon-2xl">
                                            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-speedometer"></use>
                                        </svg>
                                    </div>
                                    <div class="text-value-lg">5:34:11</div>
                                    <small class="text-muted text-uppercase font-weight-bold">Avg. Time</small>
                                    <div class="progress progress-xs mt-3 mb-0">
                                        <div class="progress-bar bg-gradient-danger" role="progressbar"
                                             style="width: 25%" aria-valuenow="25" aria-valuemin="0"
                                             aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-2">
                            <div class="card">
                                <div class="card-body">
                                    <div class="text-muted text-right mb-4">
                                        <svg class="c-icon c-icon-2xl">
                                            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-speech"></use>
                                        </svg>
                                    </div>
                                    <div class="text-value-lg">972</div>
                                    <small class="text-muted text-uppercase font-weight-bold">Comments</small>
                                    <div class="progress progress-xs mt-3 mb-0">
                                        <div class="progress-bar bg-gradient-info" role="progressbar" style="width: 25%"
                                             aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-sm-6 col-md-2">
                            <div class="card text-white bg-gradient-info">
                                <div class="card-body">
                                    <div class="text-muted text-right mb-4">
                                        <svg class="c-icon c-icon-2xl">
                                            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-people"></use>
                                        </svg>
                                    </div>
                                    <div class="text-value-lg">87.500</div>
                                    <small class="text-muted text-uppercase font-weight-bold">Visitors</small>
                                    <div class="progress progress-white progress-xs mt-3">
                                        <div class="progress-bar" role="progressbar" style="width: 25%"
                                             aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-2">
                            <div class="card text-white bg-gradient-success">
                                <div class="card-body">
                                    <div class="text-muted text-right mb-4">
                                        <svg class="c-icon c-icon-2xl">
                                            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-user-follow"></use>
                                        </svg>
                                    </div>
                                    <div class="text-value-lg">385</div>
                                    <small class="text-muted text-uppercase font-weight-bold">New Clients</small>
                                    <div class="progress progress-white progress-xs mt-3">
                                        <div class="progress-bar" role="progressbar" style="width: 25%"
                                             aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-2">
                            <div class="card text-white bg-gradient-warning">
                                <div class="card-body">
                                    <div class="text-muted text-right mb-4">
                                        <svg class="c-icon c-icon-2xl">
                                            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-basket"></use>
                                        </svg>
                                    </div>
                                    <div class="text-value-lg">1238</div>
                                    <small class="text-muted text-uppercase font-weight-bold">Products sold</small>
                                    <div class="progress progress-white progress-xs mt-3">
                                        <div class="progress-bar" role="progressbar" style="width: 25%"
                                             aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-2">
                            <div class="card text-white bg-gradient-primary">
                                <div class="card-body">
                                    <div class="text-muted text-right mb-4">
                                        <svg class="c-icon c-icon-2xl">
                                            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-chart-pie"></use>
                                        </svg>
                                    </div>
                                    <div class="text-value-lg">28%</div>
                                    <small class="text-muted text-uppercase font-weight-bold">Returning Visitors</small>
                                    <div class="progress progress-white progress-xs mt-3">
                                        <div class="progress-bar" role="progressbar" style="width: 25%"
                                             aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-2">
                            <div class="card text-white bg-gradient-danger">
                                <div class="card-body">
                                    <div class="text-muted text-right mb-4">
                                        <svg class="c-icon c-icon-2xl">
                                            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-speedometer"></use>
                                        </svg>
                                    </div>
                                    <div class="text-value-lg">5:34:11</div>
                                    <small class="text-muted text-uppercase font-weight-bold">Avg. Time</small>
                                    <div class="progress progress-white progress-xs mt-3">
                                        <div class="progress-bar" role="progressbar" style="width: 25%"
                                             aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-2">
                            <div class="card text-white bg-gradient-info">
                                <div class="card-body">
                                    <div class="text-muted text-right mb-4">
                                        <svg class="c-icon c-icon-2xl">
                                            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-speech"></use>
                                        </svg>
                                    </div>
                                    <div class="text-value-lg">972</div>
                                    <small class="text-muted text-uppercase font-weight-bold">Comments</small>
                                    <div class="progress progress-white progress-xs mt-3">
                                        <div class="progress-bar" role="progressbar" style="width: 25%"
                                             aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
