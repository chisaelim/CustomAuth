<template>
  <Navigation />
  <Header />
  <main class="nxl-container">
    <div class="nxl-content">
      <div class="page-header">
        <div class="page-header-left d-flex align-items-center">
          <div class="page-header-title">
            <h5 class="m-b-10">Dashboard</h5>
          </div>
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item">Dashboard</li>
          </ul>
        </div>
        <div class="page-header-right ms-auto">
          <div class="page-header-right-items">
            <div class="d-flex d-md-none">
              <a href="javascript:void(0)" class="page-header-right-close-toggle">
                <i class="feather-arrow-left me-2"></i>
                <span>Back</span>
              </a>
            </div>
            <div class="d-flex align-items-center gap-2 page-header-right-items-wrapper">
              <div id="reportrange" class="reportrange-picker d-flex align-items-center">
                <span class="reportrange-picker-field">Feb 8, 26 - Mar 9, 26</span>
              </div>
              <div class="dropdown filter-dropdown">
                <a
                  class="btn btn-md btn-light-brand"
                  data-bs-toggle="dropdown"
                  data-bs-offset="0, 10"
                  data-bs-auto-close="outside"
                >
                  <i class="feather-filter me-2"></i>
                  <span>Filter</span>
                </a>
                <div class="dropdown-menu dropdown-menu-end">
                  <div class="dropdown-item">
                    <div class="custom-control custom-checkbox">
                      <input
                        type="checkbox"
                        class="custom-control-input"
                        id="Role"
                        checked
                      />
                      <label class="custom-control-label c-pointer" for="Role"
                        >Role</label
                      >
                    </div>
                  </div>
                  <div class="dropdown-item">
                    <div class="custom-control custom-checkbox">
                      <input
                        type="checkbox"
                        class="custom-control-input"
                        id="Team"
                        checked
                      />
                      <label class="custom-control-label c-pointer" for="Team"
                        >Team</label
                      >
                    </div>
                  </div>
                  <div class="dropdown-item">
                    <div class="custom-control custom-checkbox">
                      <input
                        type="checkbox"
                        class="custom-control-input"
                        id="Email"
                        checked
                      />
                      <label class="custom-control-label c-pointer" for="Email"
                        >Email</label
                      >
                    </div>
                  </div>
                  <div class="dropdown-item">
                    <div class="custom-control custom-checkbox">
                      <input
                        type="checkbox"
                        class="custom-control-input"
                        id="Member"
                        checked
                      />
                      <label class="custom-control-label c-pointer" for="Member"
                        >Member</label
                      >
                    </div>
                  </div>
                  <div class="dropdown-item">
                    <div class="custom-control custom-checkbox">
                      <input
                        type="checkbox"
                        class="custom-control-input"
                        id="Recommendation"
                        checked
                      />
                      <label class="custom-control-label c-pointer" for="Recommendation"
                        >Recommendation</label
                      >
                    </div>
                  </div>
                  <div class="dropdown-divider"></div>
                  <a href="javascript:void(0);" class="dropdown-item">
                    <i class="feather-plus me-3"></i>
                    <span>Create New</span>
                  </a>
                  <a href="javascript:void(0);" class="dropdown-item">
                    <i class="feather-filter me-3"></i>
                    <span>Manage Filter</span>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="d-md-none d-flex align-items-center">
            <a href="javascript:void(0)" class="page-header-right-open-toggle">
              <i class="feather-align-right fs-20"></i>
            </a>
          </div>
        </div>
      </div>
      <div class="main-content">
        <div class="row">
          <div class="col-xxl-3 col-md-6">
            <div class="card stretch stretch-full">
              <div class="card-body">
                <div class="d-flex align-items-start justify-content-between mb-4">
                  <div class="d-flex gap-4 align-items-center">
                    <div class="avatar-text avatar-lg bg-gray-200">
                      <i class="feather-dollar-sign"></i>
                    </div>
                    <div>
                      <div class="fs-4 fw-bold text-dark">
                        <span class="counter">45</span>/<span class="counter">76</span>
                      </div>
                      <h3 class="fs-13 fw-semibold text-truncate-1-line">
                        Invoices Awaiting Payment
                      </h3>
                    </div>
                  </div>
                  <a href="javascript:void(0);" class="">
                    <i class="feather-more-vertical"></i>
                  </a>
                </div>
                <div class="pt-4">
                  <div class="d-flex align-items-center justify-content-between">
                    <a
                      href="javascript:void(0);"
                      class="fs-12 fw-medium text-muted text-truncate-1-line"
                      >Invoices Awaiting
                    </a>
                    <div class="w-100 text-end">
                      <span class="fs-12 text-dark">$5,569</span>
                      <span class="fs-11 text-muted">(56%)</span>
                    </div>
                  </div>
                  <div class="progress mt-2 ht-3">
                    <div
                      class="progress-bar bg-primary"
                      role="progressbar"
                      style="width: 56%"
                    ></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- [Invoices Awaiting Payment] end -->
          <!-- [Converted Leads] start -->
          <div class="col-xxl-3 col-md-6">
            <div class="card stretch stretch-full">
              <div class="card-body">
                <div class="d-flex align-items-start justify-content-between mb-4">
                  <div class="d-flex gap-4 align-items-center">
                    <div class="avatar-text avatar-lg bg-gray-200">
                      <i class="feather-cast"></i>
                    </div>
                    <div>
                      <div class="fs-4 fw-bold text-dark">
                        <span class="counter">48</span>/<span class="counter">86</span>
                      </div>
                      <h3 class="fs-13 fw-semibold text-truncate-1-line">
                        Converted Leads
                      </h3>
                    </div>
                  </div>
                  <a href="javascript:void(0);" class="">
                    <i class="feather-more-vertical"></i>
                  </a>
                </div>
                <div class="pt-4">
                  <div class="d-flex align-items-center justify-content-between">
                    <a
                      href="javascript:void(0);"
                      class="fs-12 fw-medium text-muted text-truncate-1-line"
                      >Converted Leads
                    </a>
                    <div class="w-100 text-end">
                      <span class="fs-12 text-dark">52 Completed</span>
                      <span class="fs-11 text-muted">(63%)</span>
                    </div>
                  </div>
                  <div class="progress mt-2 ht-3">
                    <div
                      class="progress-bar bg-warning"
                      role="progressbar"
                      style="width: 63%"
                    ></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- [Converted Leads] end -->
          <!-- [Projects In Progress] start -->
          <div class="col-xxl-3 col-md-6">
            <div class="card stretch stretch-full">
              <div class="card-body">
                <div class="d-flex align-items-start justify-content-between mb-4">
                  <div class="d-flex gap-4 align-items-center">
                    <div class="avatar-text avatar-lg bg-gray-200">
                      <i class="feather-briefcase"></i>
                    </div>
                    <div>
                      <div class="fs-4 fw-bold text-dark">
                        <span class="counter">16</span>/<span class="counter">20</span>
                      </div>
                      <h3 class="fs-13 fw-semibold text-truncate-1-line">
                        Projects In Progress
                      </h3>
                    </div>
                  </div>
                  <a href="javascript:void(0);" class="">
                    <i class="feather-more-vertical"></i>
                  </a>
                </div>
                <div class="pt-4">
                  <div class="d-flex align-items-center justify-content-between">
                    <a
                      href="javascript:void(0);"
                      class="fs-12 fw-medium text-muted text-truncate-1-line"
                      >Projects In Progress
                    </a>
                    <div class="w-100 text-end">
                      <span class="fs-12 text-dark">16 Completed</span>
                      <span class="fs-11 text-muted">(78%)</span>
                    </div>
                  </div>
                  <div class="progress mt-2 ht-3">
                    <div
                      class="progress-bar bg-success"
                      role="progressbar"
                      style="width: 78%"
                    ></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- [Projects In Progress] end -->
          <!-- [Conversion Rate] start -->
          <div class="col-xxl-3 col-md-6">
            <div class="card stretch stretch-full">
              <div class="card-body">
                <div class="d-flex align-items-start justify-content-between mb-4">
                  <div class="d-flex gap-4 align-items-center">
                    <div class="avatar-text avatar-lg bg-gray-200">
                      <i class="feather-activity"></i>
                    </div>
                    <div>
                      <div class="fs-4 fw-bold text-dark">
                        <span class="counter">46.59</span>%
                      </div>
                      <h3 class="fs-13 fw-semibold text-truncate-1-line">
                        Conversion Rate
                      </h3>
                    </div>
                  </div>
                  <a href="javascript:void(0);" class="">
                    <i class="feather-more-vertical"></i>
                  </a>
                </div>
                <div class="pt-4">
                  <div class="d-flex align-items-center justify-content-between">
                    <a
                      href="javascript:void(0);"
                      class="fs-12 fw-medium text-muted text-truncate-1-line"
                    >
                      Conversion Rate
                    </a>
                    <div class="w-100 text-end">
                      <span class="fs-12 text-dark">$2,254</span>
                      <span class="fs-11 text-muted">(46%)</span>
                    </div>
                  </div>
                  <div class="progress mt-2 ht-3">
                    <div
                      class="progress-bar bg-danger"
                      role="progressbar"
                      style="width: 46%"
                    ></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- [Conversion Rate] end -->
          <!-- [Payment Records] start -->
          <div class="col-xxl-8">
            <div class="card stretch stretch-full">
              <div class="card-header">
                <h5 class="card-title">Payment Record</h5>
                <div class="card-header-action">
                  <div class="card-header-btn">
                    <div
                      data-bs-toggle="tooltip"
                      title=""
                      data-bs-original-title="Delete"
                    >
                      <a
                        href="javascript:void(0);"
                        class="avatar-text avatar-xs bg-danger"
                        data-bs-toggle="remove"
                      >
                      </a>
                    </div>
                    <div
                      data-bs-toggle="tooltip"
                      title=""
                      data-bs-original-title="Refresh"
                    >
                      <a
                        href="javascript:void(0);"
                        class="avatar-text avatar-xs bg-warning"
                        data-bs-toggle="refresh"
                      >
                      </a>
                    </div>
                    <div
                      data-bs-toggle="tooltip"
                      title=""
                      data-bs-original-title="Maximize/Minimize"
                    >
                      <a
                        href="javascript:void(0);"
                        class="avatar-text avatar-xs bg-success"
                        data-bs-toggle="expand"
                      >
                      </a>
                    </div>
                  </div>
                  <div class="dropdown">
                    <a
                      href="javascript:void(0);"
                      class="avatar-text avatar-sm"
                      data-bs-toggle="dropdown"
                      data-bs-offset="25, 25"
                    >
                      <div
                        data-bs-toggle="tooltip"
                        title=""
                        data-bs-original-title="Options"
                      >
                        <i class="feather-more-vertical"></i>
                      </div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end">
                      <a href="javascript:void(0);" class="dropdown-item"
                        ><i class="feather-at-sign"></i>New</a
                      >
                      <a href="javascript:void(0);" class="dropdown-item"
                        ><i class="feather-calendar"></i>Event</a
                      >
                      <a href="javascript:void(0);" class="dropdown-item"
                        ><i class="feather-bell"></i>Snoozed</a
                      >
                      <a href="javascript:void(0);" class="dropdown-item"
                        ><i class="feather-trash-2"></i>Deleted</a
                      >
                      <div class="dropdown-divider"></div>
                      <a href="javascript:void(0);" class="dropdown-item"
                        ><i class="feather-settings"></i>Settings</a
                      >
                      <a href="javascript:void(0);" class="dropdown-item"
                        ><i class="feather-life-buoy"></i>Tips &amp; Tricks</a
                      >
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-body custom-card-action p-0" style="position: relative">
                <div id="payment-records-chart" style="min-height: 395px">
                  <div
                    id="apexchartshxsx638w"
                    class="apexcharts-canvas apexchartshxsx638w light"
                    style="width: 1195px; height: 380px"
                  >
                    <svg
                      id="SvgjsSvg1362"
                      width="1195"
                      height="380"
                      xmlns="http://www.w3.org/2000/svg"
                      version="1.1"
                      xmlns:xlink="http://www.w3.org/1999/xlink"
                      xmlns:svgjs="http://svgjs.com/svgjs"
                      class="apexcharts-svg"
                      xmlns:data="ApexChartsNS"
                      transform="translate(0, 0)"
                      style="background: transparent"
                    >
                      <g
                        id="SvgjsG1364"
                        class="apexcharts-inner apexcharts-graphical"
                        transform="translate(57.2353515625, 30)"
                      >
                        <defs id="SvgjsDefs1363">
                          <clipPath id="gridRectMaskhxsx638w">
                            <rect
                              id="SvgjsRect1369"
                              width="1130.7646484375"
                              height="315.202"
                              x="-1.5"
                              y="-1.5"
                              rx="0"
                              ry="0"
                              fill="#ffffff"
                              opacity="1"
                              stroke-width="0"
                              stroke="none"
                              stroke-dasharray="0"
                            ></rect>
                          </clipPath>
                          <clipPath id="gridRectMarkerMaskhxsx638w">
                            <rect
                              id="SvgjsRect1370"
                              width="1129.7646484375"
                              height="314.202"
                              x="-1"
                              y="-1"
                              rx="0"
                              ry="0"
                              fill="#ffffff"
                              opacity="1"
                              stroke-width="0"
                              stroke="none"
                              stroke-dasharray="0"
                            ></rect>
                          </clipPath>
                        </defs>
                        <line
                          id="SvgjsLine1368"
                          x1="0"
                          y1="0"
                          x2="0"
                          y2="312.202"
                          stroke="#b6b6b6"
                          stroke-dasharray="3"
                          class="apexcharts-xcrosshairs"
                          x="0"
                          y="0"
                          width="1"
                          height="312.202"
                          fill="#b1b9c4"
                          filter="none"
                          fill-opacity="0.9"
                          stroke-width="1"
                        ></line>
                        <g
                          id="SvgjsG1406"
                          class="apexcharts-xaxis"
                          transform="translate(0, 0)"
                        >
                          <g
                            id="SvgjsG1407"
                            class="apexcharts-xaxis-texts-g"
                            transform="translate(0, -4)"
                          >
                            <text
                              id="SvgjsText1408"
                              font-family="Helvetica, Arial, sans-serif"
                              x="46.990193684895836"
                              y="341.202"
                              text-anchor="middle"
                              dominant-baseline="auto"
                              font-size="10px"
                              fill="#a0acbb"
                              class="apexcharts-xaxis-label"
                              style="font-family: Helvetica, Arial, sans-serif"
                            >
                              <tspan
                                id="SvgjsTspan1409"
                                style="font-family: Helvetica, Arial, sans-serif"
                              >
                                JAN/23
                              </tspan>
                              <title>JAN/23</title>
                            </text>
                            <text
                              id="SvgjsText1410"
                              font-family="Helvetica, Arial, sans-serif"
                              x="140.9705810546875"
                              y="341.202"
                              text-anchor="middle"
                              dominant-baseline="auto"
                              font-size="10px"
                              fill="#a0acbb"
                              class="apexcharts-xaxis-label"
                              style="font-family: Helvetica, Arial, sans-serif"
                            >
                              <tspan
                                id="SvgjsTspan1411"
                                style="font-family: Helvetica, Arial, sans-serif"
                              >
                                FEB/23
                              </tspan>
                              <title>FEB/23</title>
                            </text>
                            <text
                              id="SvgjsText1412"
                              font-family="Helvetica, Arial, sans-serif"
                              x="234.95096842447916"
                              y="341.202"
                              text-anchor="middle"
                              dominant-baseline="auto"
                              font-size="10px"
                              fill="#a0acbb"
                              class="apexcharts-xaxis-label"
                              style="font-family: Helvetica, Arial, sans-serif"
                            >
                              <tspan
                                id="SvgjsTspan1413"
                                style="font-family: Helvetica, Arial, sans-serif"
                              >
                                MAR/23
                              </tspan>
                              <title>MAR/23</title>
                            </text>
                            <text
                              id="SvgjsText1414"
                              font-family="Helvetica, Arial, sans-serif"
                              x="328.93135579427087"
                              y="341.202"
                              text-anchor="middle"
                              dominant-baseline="auto"
                              font-size="10px"
                              fill="#a0acbb"
                              class="apexcharts-xaxis-label"
                              style="font-family: Helvetica, Arial, sans-serif"
                            >
                              <tspan
                                id="SvgjsTspan1415"
                                style="font-family: Helvetica, Arial, sans-serif"
                              >
                                APR/23
                              </tspan>
                              <title>APR/23</title>
                            </text>
                            <text
                              id="SvgjsText1416"
                              font-family="Helvetica, Arial, sans-serif"
                              x="422.91174316406256"
                              y="341.202"
                              text-anchor="middle"
                              dominant-baseline="auto"
                              font-size="10px"
                              fill="#a0acbb"
                              class="apexcharts-xaxis-label"
                              style="font-family: Helvetica, Arial, sans-serif"
                            >
                              <tspan
                                id="SvgjsTspan1417"
                                style="font-family: Helvetica, Arial, sans-serif"
                              >
                                MAY/23
                              </tspan>
                              <title>MAY/23</title>
                            </text>
                            <text
                              id="SvgjsText1418"
                              font-family="Helvetica, Arial, sans-serif"
                              x="516.8921305338541"
                              y="341.202"
                              text-anchor="middle"
                              dominant-baseline="auto"
                              font-size="10px"
                              fill="#a0acbb"
                              class="apexcharts-xaxis-label"
                              style="font-family: Helvetica, Arial, sans-serif"
                            >
                              <tspan
                                id="SvgjsTspan1419"
                                style="font-family: Helvetica, Arial, sans-serif"
                              >
                                JUN/23
                              </tspan>
                              <title>JUN/23</title>
                            </text>
                            <text
                              id="SvgjsText1420"
                              font-family="Helvetica, Arial, sans-serif"
                              x="610.8725179036458"
                              y="341.202"
                              text-anchor="middle"
                              dominant-baseline="auto"
                              font-size="10px"
                              fill="#a0acbb"
                              class="apexcharts-xaxis-label"
                              style="font-family: Helvetica, Arial, sans-serif"
                            >
                              <tspan
                                id="SvgjsTspan1421"
                                style="font-family: Helvetica, Arial, sans-serif"
                              >
                                JUL/23
                              </tspan>
                              <title>JUL/23</title>
                            </text>
                            <text
                              id="SvgjsText1422"
                              font-family="Helvetica, Arial, sans-serif"
                              x="704.8529052734374"
                              y="341.202"
                              text-anchor="middle"
                              dominant-baseline="auto"
                              font-size="10px"
                              fill="#a0acbb"
                              class="apexcharts-xaxis-label"
                              style="font-family: Helvetica, Arial, sans-serif"
                            >
                              <tspan
                                id="SvgjsTspan1423"
                                style="font-family: Helvetica, Arial, sans-serif"
                              >
                                AUG/23
                              </tspan>
                              <title>AUG/23</title>
                            </text>
                            <text
                              id="SvgjsText1424"
                              font-family="Helvetica, Arial, sans-serif"
                              x="798.833292643229"
                              y="341.202"
                              text-anchor="middle"
                              dominant-baseline="auto"
                              font-size="10px"
                              fill="#a0acbb"
                              class="apexcharts-xaxis-label"
                              style="font-family: Helvetica, Arial, sans-serif"
                            >
                              <tspan
                                id="SvgjsTspan1425"
                                style="font-family: Helvetica, Arial, sans-serif"
                              >
                                SEP/23
                              </tspan>
                              <title>SEP/23</title>
                            </text>
                            <text
                              id="SvgjsText1426"
                              font-family="Helvetica, Arial, sans-serif"
                              x="892.8136800130206"
                              y="341.202"
                              text-anchor="middle"
                              dominant-baseline="auto"
                              font-size="10px"
                              fill="#a0acbb"
                              class="apexcharts-xaxis-label"
                              style="font-family: Helvetica, Arial, sans-serif"
                            >
                              <tspan
                                id="SvgjsTspan1427"
                                style="font-family: Helvetica, Arial, sans-serif"
                              >
                                OCT/23
                              </tspan>
                              <title>OCT/23</title>
                            </text>
                            <text
                              id="SvgjsText1428"
                              font-family="Helvetica, Arial, sans-serif"
                              x="986.7940673828124"
                              y="341.202"
                              text-anchor="middle"
                              dominant-baseline="auto"
                              font-size="10px"
                              fill="#a0acbb"
                              class="apexcharts-xaxis-label"
                              style="font-family: Helvetica, Arial, sans-serif"
                            >
                              <tspan
                                id="SvgjsTspan1429"
                                style="font-family: Helvetica, Arial, sans-serif"
                              >
                                NOV/23
                              </tspan>
                              <title>NOV/23</title>
                            </text>
                            <text
                              id="SvgjsText1430"
                              font-family="Helvetica, Arial, sans-serif"
                              x="1080.7744547526042"
                              y="341.202"
                              text-anchor="middle"
                              dominant-baseline="auto"
                              font-size="10px"
                              fill="#a0acbb"
                              class="apexcharts-xaxis-label"
                              style="font-family: Helvetica, Arial, sans-serif"
                            >
                              <tspan
                                id="SvgjsTspan1431"
                                style="font-family: Helvetica, Arial, sans-serif"
                              >
                                DEC/23
                              </tspan>
                              <title>DEC/23</title>
                            </text>
                          </g>
                        </g>
                        <g id="SvgjsG1442" class="apexcharts-grid">
                          <g id="SvgjsG1443" class="apexcharts-gridlines-horizontal"></g>
                          <g id="SvgjsG1444" class="apexcharts-gridlines-vertical"></g>
                          <line
                            id="SvgjsLine1446"
                            x1="0"
                            y1="312.202"
                            x2="1127.7646484375"
                            y2="312.202"
                            stroke="transparent"
                            stroke-dasharray="0"
                          ></line>
                          <line
                            id="SvgjsLine1445"
                            x1="0"
                            y1="1"
                            x2="0"
                            y2="312.202"
                            stroke="transparent"
                            stroke-dasharray="0"
                          ></line>
                        </g>
                        <g
                          id="SvgjsG1372"
                          class="apexcharts-bar-series apexcharts-plot-series"
                        >
                          <g
                            id="SvgjsG1373"
                            class="apexcharts-series"
                            rel="1"
                            seriesName="PaymentxRejected"
                            data:realIndex="0"
                          >
                            <path
                              id="undefined-0"
                              d="M 32.89313557942708 312.202L 32.89313557942708 212.64560738351003Q 39.441664632161455 206.59707833077564 45.99019368489583 212.64560738351003L 45.99019368489583 312.202L 32.39313557942708 312.202"
                              fill="rgba(52,84,209,0.85)"
                              fill-opacity="1"
                              stroke="#3454d1"
                              stroke-opacity="1"
                              stroke-linecap="round"
                              stroke-width="1"
                              stroke-dasharray="0"
                              class="apexcharts-bar-area"
                              index="0"
                              clip-path="url(#gridRectMaskhxsx638w)"
                              pathTo="M 32.89313557942708 312.202L 32.89313557942708 212.64560738351003Q 39.441664632161455 206.59707833077564 45.99019368489583 212.64560738351003L 45.99019368489583 312.202L 32.39313557942708 312.202"
                              pathFrom="M 32.89313557942708 312.202L 32.89313557942708 312.202L 45.99019368489583 312.202L 45.99019368489583 312.202L 32.39313557942708 312.202"
                              cy="209.62134285714285"
                              cx="126.37352294921875"
                              j="0"
                              val="23"
                              barHeight="102.58065714285715"
                              barWidth="14.09705810546875"
                            ></path>
                            <path
                              id="undefined-0"
                              d="M 126.87352294921875 312.202L 126.87352294921875 266.1659502406529Q 133.42205200195312 260.1174211879185 139.9705810546875 266.1659502406529L 139.9705810546875 312.202L 126.37352294921875 312.202"
                              fill="rgba(52,84,209,0.85)"
                              fill-opacity="1"
                              stroke="#3454d1"
                              stroke-opacity="1"
                              stroke-linecap="round"
                              stroke-width="1"
                              stroke-dasharray="0"
                              class="apexcharts-bar-area"
                              index="0"
                              clip-path="url(#gridRectMaskhxsx638w)"
                              pathTo="M 126.87352294921875 312.202L 126.87352294921875 266.1659502406529Q 133.42205200195312 260.1174211879185 139.9705810546875 266.1659502406529L 139.9705810546875 312.202L 126.37352294921875 312.202"
                              pathFrom="M 126.87352294921875 312.202L 126.87352294921875 312.202L 139.9705810546875 312.202L 139.9705810546875 312.202L 126.37352294921875 312.202"
                              cy="263.1416857142857"
                              cx="220.35391031901042"
                              j="1"
                              val="11"
                              barHeight="49.060314285714284"
                              barWidth="14.09705810546875"
                            ></path>
                            <path
                              id="undefined-0"
                              d="M 220.85391031901042 312.202L 220.85391031901042 217.1056359549386Q 227.4024393717448 211.05710690220423 233.95096842447919 217.1056359549386L 233.95096842447919 312.202L 220.35391031901042 312.202"
                              fill="rgba(52,84,209,0.85)"
                              fill-opacity="1"
                              stroke="#3454d1"
                              stroke-opacity="1"
                              stroke-linecap="round"
                              stroke-width="1"
                              stroke-dasharray="0"
                              class="apexcharts-bar-area"
                              index="0"
                              clip-path="url(#gridRectMaskhxsx638w)"
                              pathTo="M 220.85391031901042 312.202L 220.85391031901042 217.1056359549386Q 227.4024393717448 211.05710690220423 233.95096842447919 217.1056359549386L 233.95096842447919 312.202L 220.35391031901042 312.202"
                              pathFrom="M 220.85391031901042 312.202L 220.85391031901042 312.202L 233.95096842447919 312.202L 233.95096842447919 312.202L 220.35391031901042 312.202"
                              cy="214.08137142857143"
                              cx="314.3342976888021"
                              j="2"
                              val="22"
                              barHeight="98.12062857142857"
                              barWidth="14.09705810546875"
                            ></path>
                            <path
                              id="undefined-0"
                              d="M 314.8342976888021 312.202L 314.8342976888021 194.80549309779576Q 321.38282674153646 188.75696404506138 327.93135579427087 194.80549309779576L 327.93135579427087 312.202L 314.3342976888021 312.202"
                              fill="rgba(52,84,209,0.85)"
                              fill-opacity="1"
                              stroke="#3454d1"
                              stroke-opacity="1"
                              stroke-linecap="round"
                              stroke-width="1"
                              stroke-dasharray="0"
                              class="apexcharts-bar-area"
                              index="0"
                              clip-path="url(#gridRectMaskhxsx638w)"
                              pathTo="M 314.8342976888021 312.202L 314.8342976888021 194.80549309779576Q 321.38282674153646 188.75696404506138 327.93135579427087 194.80549309779576L 327.93135579427087 312.202L 314.3342976888021 312.202"
                              pathFrom="M 314.8342976888021 312.202L 314.8342976888021 312.202L 327.93135579427087 312.202L 327.93135579427087 312.202L 314.3342976888021 312.202"
                              cy="191.78122857142858"
                              cx="408.3146850585938"
                              j="3"
                              val="27"
                              barHeight="120.42077142857143"
                              barWidth="14.09705810546875"
                            ></path>
                            <path
                              id="undefined-0"
                              d="M 408.8146850585938 312.202L 408.8146850585938 257.2458930977958Q 415.36321411132815 251.1973640450614 421.91174316406256 257.2458930977958L 421.91174316406256 312.202L 408.3146850585938 312.202"
                              fill="rgba(52,84,209,0.85)"
                              fill-opacity="1"
                              stroke="#3454d1"
                              stroke-opacity="1"
                              stroke-linecap="round"
                              stroke-width="1"
                              stroke-dasharray="0"
                              class="apexcharts-bar-area"
                              index="0"
                              clip-path="url(#gridRectMaskhxsx638w)"
                              pathTo="M 408.8146850585938 312.202L 408.8146850585938 257.2458930977958Q 415.36321411132815 251.1973640450614 421.91174316406256 257.2458930977958L 421.91174316406256 312.202L 408.3146850585938 312.202"
                              pathFrom="M 408.8146850585938 312.202L 408.8146850585938 312.202L 421.91174316406256 312.202L 421.91174316406256 312.202L 408.3146850585938 312.202"
                              cy="254.22162857142857"
                              cx="502.2950724283855"
                              j="4"
                              val="13"
                              barHeight="57.98037142857143"
                              barWidth="14.09705810546875"
                            ></path>
                            <path
                              id="undefined-0"
                              d="M 502.7950724283855 312.202L 502.7950724283855 217.1056359549386Q 509.34360148111983 211.05710690220423 515.8921305338542 217.1056359549386L 515.8921305338542 312.202L 502.2950724283855 312.202"
                              fill="rgba(52,84,209,0.85)"
                              fill-opacity="1"
                              stroke="#3454d1"
                              stroke-opacity="1"
                              stroke-linecap="round"
                              stroke-width="1"
                              stroke-dasharray="0"
                              class="apexcharts-bar-area"
                              index="0"
                              clip-path="url(#gridRectMaskhxsx638w)"
                              pathTo="M 502.7950724283855 312.202L 502.7950724283855 217.1056359549386Q 509.34360148111983 211.05710690220423 515.8921305338542 217.1056359549386L 515.8921305338542 312.202L 502.2950724283855 312.202"
                              pathFrom="M 502.7950724283855 312.202L 502.7950724283855 312.202L 515.8921305338542 312.202L 515.8921305338542 312.202L 502.2950724283855 312.202"
                              cy="214.08137142857143"
                              cx="596.2754597981772"
                              j="5"
                              val="22"
                              barHeight="98.12062857142857"
                              barWidth="14.09705810546875"
                            ></path>
                            <path
                              id="undefined-0"
                              d="M 596.7754597981772 312.202L 596.7754597981772 150.20520738351001Q 603.3239888509115 144.15667833077563 609.8725179036459 150.20520738351001L 609.8725179036459 312.202L 596.2754597981772 312.202"
                              fill="rgba(52,84,209,0.85)"
                              fill-opacity="1"
                              stroke="#3454d1"
                              stroke-opacity="1"
                              stroke-linecap="round"
                              stroke-width="1"
                              stroke-dasharray="0"
                              class="apexcharts-bar-area"
                              index="0"
                              clip-path="url(#gridRectMaskhxsx638w)"
                              pathTo="M 596.7754597981772 312.202L 596.7754597981772 150.20520738351001Q 603.3239888509115 144.15667833077563 609.8725179036459 150.20520738351001L 609.8725179036459 312.202L 596.2754597981772 312.202"
                              pathFrom="M 596.7754597981772 312.202L 596.7754597981772 312.202L 609.8725179036459 312.202L 609.8725179036459 312.202L 596.2754597981772 312.202"
                              cy="147.18094285714284"
                              cx="690.2558471679688"
                              j="6"
                              val="37"
                              barHeight="165.02105714285716"
                              barWidth="14.09705810546875"
                            ></path>
                            <path
                              id="undefined-0"
                              d="M 690.7558471679688 312.202L 690.7558471679688 221.5656645263672Q 697.3043762207031 215.5171354736328 703.8529052734375 221.5656645263672L 703.8529052734375 312.202L 690.2558471679688 312.202"
                              fill="rgba(52,84,209,0.85)"
                              fill-opacity="1"
                              stroke="#3454d1"
                              stroke-opacity="1"
                              stroke-linecap="round"
                              stroke-width="1"
                              stroke-dasharray="0"
                              class="apexcharts-bar-area"
                              index="0"
                              clip-path="url(#gridRectMaskhxsx638w)"
                              pathTo="M 690.7558471679688 312.202L 690.7558471679688 221.5656645263672Q 697.3043762207031 215.5171354736328 703.8529052734375 221.5656645263672L 703.8529052734375 312.202L 690.2558471679688 312.202"
                              pathFrom="M 690.7558471679688 312.202L 690.7558471679688 312.202L 703.8529052734375 312.202L 703.8529052734375 312.202L 690.2558471679688 312.202"
                              cy="218.5414"
                              cx="784.2362345377604"
                              j="7"
                              val="21"
                              barHeight="93.6606"
                              barWidth="14.09705810546875"
                            ></path>
                            <path
                              id="undefined-0"
                              d="M 784.7362345377604 312.202L 784.7362345377604 118.98500738351005Q 791.2847635904948 112.93647833077567 797.8332926432291 118.98500738351005L 797.8332926432291 312.202L 784.2362345377604 312.202"
                              fill="rgba(52,84,209,0.85)"
                              fill-opacity="1"
                              stroke="#3454d1"
                              stroke-opacity="1"
                              stroke-linecap="round"
                              stroke-width="1"
                              stroke-dasharray="0"
                              class="apexcharts-bar-area"
                              index="0"
                              clip-path="url(#gridRectMaskhxsx638w)"
                              pathTo="M 784.7362345377604 312.202L 784.7362345377604 118.98500738351005Q 791.2847635904948 112.93647833077567 797.8332926432291 118.98500738351005L 797.8332926432291 312.202L 784.2362345377604 312.202"
                              pathFrom="M 784.7362345377604 312.202L 784.7362345377604 312.202L 797.8332926432291 312.202L 797.8332926432291 312.202L 784.2362345377604 312.202"
                              cy="115.96074285714286"
                              cx="878.216621907552"
                              j="8"
                              val="44"
                              barHeight="196.24125714285714"
                              barWidth="14.09705810546875"
                            ></path>
                            <path
                              id="undefined-0"
                              d="M 878.716621907552 312.202L 878.716621907552 217.1056359549386Q 885.2651509602864 211.05710690220423 891.8136800130208 217.1056359549386L 891.8136800130208 312.202L 878.216621907552 312.202"
                              fill="rgba(52,84,209,0.85)"
                              fill-opacity="1"
                              stroke="#3454d1"
                              stroke-opacity="1"
                              stroke-linecap="round"
                              stroke-width="1"
                              stroke-dasharray="0"
                              class="apexcharts-bar-area"
                              index="0"
                              clip-path="url(#gridRectMaskhxsx638w)"
                              pathTo="M 878.716621907552 312.202L 878.716621907552 217.1056359549386Q 885.2651509602864 211.05710690220423 891.8136800130208 217.1056359549386L 891.8136800130208 312.202L 878.216621907552 312.202"
                              pathFrom="M 878.716621907552 312.202L 878.716621907552 312.202L 891.8136800130208 312.202L 891.8136800130208 312.202L 878.216621907552 312.202"
                              cy="214.08137142857143"
                              cx="972.1970092773437"
                              j="9"
                              val="22"
                              barHeight="98.12062857142857"
                              barWidth="14.09705810546875"
                            ></path>
                            <path
                              id="undefined-0"
                              d="M 972.6970092773437 312.202L 972.6970092773437 181.42540738351002Q 979.245538330078 175.37687833077564 985.7940673828124 181.42540738351002L 985.7940673828124 312.202L 972.1970092773437 312.202"
                              fill="rgba(52,84,209,0.85)"
                              fill-opacity="1"
                              stroke="#3454d1"
                              stroke-opacity="1"
                              stroke-linecap="round"
                              stroke-width="1"
                              stroke-dasharray="0"
                              class="apexcharts-bar-area"
                              index="0"
                              clip-path="url(#gridRectMaskhxsx638w)"
                              pathTo="M 972.6970092773437 312.202L 972.6970092773437 181.42540738351002Q 979.245538330078 175.37687833077564 985.7940673828124 181.42540738351002L 985.7940673828124 312.202L 972.1970092773437 312.202"
                              pathFrom="M 972.6970092773437 312.202L 972.6970092773437 312.202L 985.7940673828124 312.202L 985.7940673828124 312.202L 972.1970092773437 312.202"
                              cy="178.40114285714284"
                              cx="1066.1773966471353"
                              j="10"
                              val="30"
                              barHeight="133.80085714285715"
                              barWidth="14.09705810546875"
                            ></path>
                            <path
                              id="undefined-0"
                              d="M 1066.6773966471353 312.202L 1066.6773966471353 221.5656645263672Q 1073.2259256998698 215.5171354736328 1079.774454752604 221.5656645263672L 1079.774454752604 312.202L 1066.1773966471353 312.202"
                              fill="rgba(52,84,209,0.85)"
                              fill-opacity="1"
                              stroke="#3454d1"
                              stroke-opacity="1"
                              stroke-linecap="round"
                              stroke-width="1"
                              stroke-dasharray="0"
                              class="apexcharts-bar-area"
                              index="0"
                              clip-path="url(#gridRectMaskhxsx638w)"
                              pathTo="M 1066.6773966471353 312.202L 1066.6773966471353 221.5656645263672Q 1073.2259256998698 215.5171354736328 1079.774454752604 221.5656645263672L 1079.774454752604 312.202L 1066.1773966471353 312.202"
                              pathFrom="M 1066.6773966471353 312.202L 1066.6773966471353 312.202L 1079.774454752604 312.202L 1079.774454752604 312.202L 1066.1773966471353 312.202"
                              cy="218.5414"
                              cx="1160.157784016927"
                              j="11"
                              val="21"
                              barHeight="93.6606"
                              barWidth="14.09705810546875"
                            ></path>
                            <g id="SvgjsG1374" class="apexcharts-datalabels"></g>
                          </g>
                          <g
                            id="SvgjsG1387"
                            class="apexcharts-series"
                            rel="2"
                            seriesName="AwaitingxPayment"
                            data:realIndex="2"
                          >
                            <path
                              id="undefined-1"
                              d="M 46.99019368489583 312.202L 46.99019368489583 117.98500738351005Q 52.5387227376302 113.93647833077567 58.087251790364576 117.98500738351005L 58.087251790364576 312.202L 45.49019368489583 312.202"
                              fill="rgba(225,227,234,1)"
                              fill-opacity="1"
                              stroke="#e1e3ea"
                              stroke-opacity="1"
                              stroke-linecap="round"
                              stroke-width="3"
                              stroke-dasharray="0"
                              class="apexcharts-bar-area"
                              index="2"
                              clip-path="url(#gridRectMaskhxsx638w)"
                              pathTo="M 46.99019368489583 312.202L 46.99019368489583 117.98500738351005Q 52.5387227376302 113.93647833077567 58.087251790364576 117.98500738351005L 58.087251790364576 312.202L 45.49019368489583 312.202"
                              pathFrom="M 46.99019368489583 312.202L 46.99019368489583 312.202L 58.087251790364576 312.202L 58.087251790364576 312.202L 45.49019368489583 312.202"
                              cy="115.96074285714286"
                              cx="139.4705810546875"
                              j="0"
                              val="44"
                              barHeight="196.24125714285714"
                              barWidth="14.09705810546875"
                            ></path>
                            <path
                              id="undefined-1"
                              d="M 140.9705810546875 312.202L 140.9705810546875 68.92469309779575Q 146.51911010742188 64.87616404506137 152.06763916015626 68.92469309779575L 152.06763916015626 312.202L 139.4705810546875 312.202"
                              fill="rgba(225,227,234,1)"
                              fill-opacity="1"
                              stroke="#e1e3ea"
                              stroke-opacity="1"
                              stroke-linecap="round"
                              stroke-width="3"
                              stroke-dasharray="0"
                              class="apexcharts-bar-area"
                              index="2"
                              clip-path="url(#gridRectMaskhxsx638w)"
                              pathTo="M 140.9705810546875 312.202L 140.9705810546875 68.92469309779575Q 146.51911010742188 64.87616404506137 152.06763916015626 68.92469309779575L 152.06763916015626 312.202L 139.4705810546875 312.202"
                              pathFrom="M 140.9705810546875 312.202L 140.9705810546875 312.202L 152.06763916015626 312.202L 152.06763916015626 312.202L 139.4705810546875 312.202"
                              cy="66.90042857142856"
                              cx="233.45096842447919"
                              j="1"
                              val="55"
                              barHeight="245.30157142857144"
                              barWidth="14.09705810546875"
                            ></path>
                            <path
                              id="undefined-1"
                              d="M 234.95096842447919 312.202L 234.95096842447919 131.36509309779575Q 240.49949747721357 127.31656404506137 246.04802652994795 131.36509309779575L 246.04802652994795 312.202L 233.45096842447919 312.202"
                              fill="rgba(225,227,234,1)"
                              fill-opacity="1"
                              stroke="#e1e3ea"
                              stroke-opacity="1"
                              stroke-linecap="round"
                              stroke-width="3"
                              stroke-dasharray="0"
                              class="apexcharts-bar-area"
                              index="2"
                              clip-path="url(#gridRectMaskhxsx638w)"
                              pathTo="M 234.95096842447919 312.202L 234.95096842447919 131.36509309779575Q 240.49949747721357 127.31656404506137 246.04802652994795 131.36509309779575L 246.04802652994795 312.202L 233.45096842447919 312.202"
                              pathFrom="M 234.95096842447919 312.202L 234.95096842447919 312.202L 246.04802652994795 312.202L 246.04802652994795 312.202L 233.45096842447919 312.202"
                              cy="129.34082857142857"
                              cx="327.43135579427087"
                              j="2"
                              val="41"
                              barHeight="182.86117142857142"
                              barWidth="14.09705810546875"
                            ></path>
                            <path
                              id="undefined-1"
                              d="M 328.93135579427087 312.202L 328.93135579427087 15.4043502406529Q 334.4798848470052 11.355821187918524 340.02841389973963 15.4043502406529L 340.02841389973963 312.202L 327.43135579427087 312.202"
                              fill="rgba(225,227,234,1)"
                              fill-opacity="1"
                              stroke="#e1e3ea"
                              stroke-opacity="1"
                              stroke-linecap="round"
                              stroke-width="3"
                              stroke-dasharray="0"
                              class="apexcharts-bar-area"
                              index="2"
                              clip-path="url(#gridRectMaskhxsx638w)"
                              pathTo="M 328.93135579427087 312.202L 328.93135579427087 15.4043502406529Q 334.4798848470052 11.355821187918524 340.02841389973963 15.4043502406529L 340.02841389973963 312.202L 327.43135579427087 312.202"
                              pathFrom="M 328.93135579427087 312.202L 328.93135579427087 312.202L 340.02841389973963 312.202L 340.02841389973963 312.202L 327.43135579427087 312.202"
                              cy="13.380085714285713"
                              cx="421.41174316406256"
                              j="3"
                              val="67"
                              barHeight="298.8219142857143"
                              barWidth="14.09705810546875"
                            ></path>
                            <path
                              id="undefined-1"
                              d="M 422.91174316406256 312.202L 422.91174316406256 216.1056359549386Q 428.4602722167969 212.05710690220423 434.0088012695313 216.1056359549386L 434.0088012695313 312.202L 421.41174316406256 312.202"
                              fill="rgba(225,227,234,1)"
                              fill-opacity="1"
                              stroke="#e1e3ea"
                              stroke-opacity="1"
                              stroke-linecap="round"
                              stroke-width="3"
                              stroke-dasharray="0"
                              class="apexcharts-bar-area"
                              index="2"
                              clip-path="url(#gridRectMaskhxsx638w)"
                              pathTo="M 422.91174316406256 312.202L 422.91174316406256 216.1056359549386Q 428.4602722167969 212.05710690220423 434.0088012695313 216.1056359549386L 434.0088012695313 312.202L 421.41174316406256 312.202"
                              pathFrom="M 422.91174316406256 312.202L 422.91174316406256 312.202L 434.0088012695313 312.202L 434.0088012695313 312.202L 421.41174316406256 312.202"
                              cy="214.08137142857143"
                              cx="515.3921305338542"
                              j="4"
                              val="22"
                              barHeight="98.12062857142857"
                              barWidth="14.09705810546875"
                            ></path>
                            <path
                              id="undefined-1"
                              d="M 516.8921305338542 312.202L 516.8921305338542 122.4450359549386Q 522.4406595865886 118.39650690220422 527.989188639323 122.4450359549386L 527.989188639323 312.202L 515.3921305338542 312.202"
                              fill="rgba(225,227,234,1)"
                              fill-opacity="1"
                              stroke="#e1e3ea"
                              stroke-opacity="1"
                              stroke-linecap="round"
                              stroke-width="3"
                              stroke-dasharray="0"
                              class="apexcharts-bar-area"
                              index="2"
                              clip-path="url(#gridRectMaskhxsx638w)"
                              pathTo="M 516.8921305338542 312.202L 516.8921305338542 122.4450359549386Q 522.4406595865886 118.39650690220422 527.989188639323 122.4450359549386L 527.989188639323 312.202L 515.3921305338542 312.202"
                              pathFrom="M 516.8921305338542 312.202L 516.8921305338542 312.202L 527.989188639323 312.202L 527.989188639323 312.202L 515.3921305338542 312.202"
                              cy="120.42077142857141"
                              cx="609.3725179036459"
                              j="5"
                              val="43"
                              barHeight="191.78122857142858"
                              barWidth="14.09705810546875"
                            ></path>
                            <path
                              id="undefined-1"
                              d="M 610.8725179036459 312.202L 610.8725179036459 220.5656645263672Q 616.4210469563802 216.5171354736328 621.9695760091146 220.5656645263672L 621.9695760091146 312.202L 609.3725179036459 312.202"
                              fill="rgba(225,227,234,1)"
                              fill-opacity="1"
                              stroke="#e1e3ea"
                              stroke-opacity="1"
                              stroke-linecap="round"
                              stroke-width="3"
                              stroke-dasharray="0"
                              class="apexcharts-bar-area"
                              index="2"
                              clip-path="url(#gridRectMaskhxsx638w)"
                              pathTo="M 610.8725179036459 312.202L 610.8725179036459 220.5656645263672Q 616.4210469563802 216.5171354736328 621.9695760091146 220.5656645263672L 621.9695760091146 312.202L 609.3725179036459 312.202"
                              pathFrom="M 610.8725179036459 312.202L 610.8725179036459 312.202L 621.9695760091146 312.202L 621.9695760091146 312.202L 609.3725179036459 312.202"
                              cy="218.5414"
                              cx="703.3529052734375"
                              j="6"
                              val="21"
                              barHeight="93.6606"
                              barWidth="14.09705810546875"
                            ></path>
                            <path
                              id="undefined-1"
                              d="M 704.8529052734375 312.202L 704.8529052734375 131.36509309779575Q 710.4014343261719 127.31656404506137 715.9499633789062 131.36509309779575L 715.9499633789062 312.202L 703.3529052734375 312.202"
                              fill="rgba(225,227,234,1)"
                              fill-opacity="1"
                              stroke="#e1e3ea"
                              stroke-opacity="1"
                              stroke-linecap="round"
                              stroke-width="3"
                              stroke-dasharray="0"
                              class="apexcharts-bar-area"
                              index="2"
                              clip-path="url(#gridRectMaskhxsx638w)"
                              pathTo="M 704.8529052734375 312.202L 704.8529052734375 131.36509309779575Q 710.4014343261719 127.31656404506137 715.9499633789062 131.36509309779575L 715.9499633789062 312.202L 703.3529052734375 312.202"
                              pathFrom="M 704.8529052734375 312.202L 704.8529052734375 312.202L 715.9499633789062 312.202L 715.9499633789062 312.202L 703.3529052734375 312.202"
                              cy="129.34082857142857"
                              cx="797.3332926432291"
                              j="7"
                              val="41"
                              barHeight="182.86117142857142"
                              barWidth="14.09705810546875"
                            ></path>
                            <path
                              id="undefined-1"
                              d="M 798.8332926432291 312.202L 798.8332926432291 64.46466452636717Q 804.3818216959635 60.4161354736328 809.9303507486978 64.46466452636717L 809.9303507486978 312.202L 797.3332926432291 312.202"
                              fill="rgba(225,227,234,1)"
                              fill-opacity="1"
                              stroke="#e1e3ea"
                              stroke-opacity="1"
                              stroke-linecap="round"
                              stroke-width="3"
                              stroke-dasharray="0"
                              class="apexcharts-bar-area"
                              index="2"
                              clip-path="url(#gridRectMaskhxsx638w)"
                              pathTo="M 798.8332926432291 312.202L 798.8332926432291 64.46466452636717Q 804.3818216959635 60.4161354736328 809.9303507486978 64.46466452636717L 809.9303507486978 312.202L 797.3332926432291 312.202"
                              pathFrom="M 798.8332926432291 312.202L 798.8332926432291 312.202L 809.9303507486978 312.202L 809.9303507486978 312.202L 797.3332926432291 312.202"
                              cy="62.44039999999998"
                              cx="891.3136800130208"
                              j="8"
                              val="56"
                              barHeight="249.76160000000002"
                              barWidth="14.09705810546875"
                            ></path>
                            <path
                              id="undefined-1"
                              d="M 892.8136800130208 312.202L 892.8136800130208 193.80549309779576Q 898.3622090657551 189.75696404506138 903.9107381184895 193.80549309779576L 903.9107381184895 312.202L 891.3136800130208 312.202"
                              fill="rgba(225,227,234,1)"
                              fill-opacity="1"
                              stroke="#e1e3ea"
                              stroke-opacity="1"
                              stroke-linecap="round"
                              stroke-width="3"
                              stroke-dasharray="0"
                              class="apexcharts-bar-area"
                              index="2"
                              clip-path="url(#gridRectMaskhxsx638w)"
                              pathTo="M 892.8136800130208 312.202L 892.8136800130208 193.80549309779576Q 898.3622090657551 189.75696404506138 903.9107381184895 193.80549309779576L 903.9107381184895 312.202L 891.3136800130208 312.202"
                              pathFrom="M 892.8136800130208 312.202L 892.8136800130208 312.202L 903.9107381184895 312.202L 903.9107381184895 312.202L 891.3136800130208 312.202"
                              cy="191.78122857142858"
                              cx="985.2940673828124"
                              j="9"
                              val="27"
                              barHeight="120.42077142857143"
                              barWidth="14.09705810546875"
                            ></path>
                            <path
                              id="undefined-1"
                              d="M 986.7940673828124 312.202L 986.7940673828124 122.4450359549386Q 992.3425964355467 118.39650690220422 997.8911254882811 122.4450359549386L 997.8911254882811 312.202L 985.2940673828124 312.202"
                              fill="rgba(225,227,234,1)"
                              fill-opacity="1"
                              stroke="#e1e3ea"
                              stroke-opacity="1"
                              stroke-linecap="round"
                              stroke-width="3"
                              stroke-dasharray="0"
                              class="apexcharts-bar-area"
                              index="2"
                              clip-path="url(#gridRectMaskhxsx638w)"
                              pathTo="M 986.7940673828124 312.202L 986.7940673828124 122.4450359549386Q 992.3425964355467 118.39650690220422 997.8911254882811 122.4450359549386L 997.8911254882811 312.202L 985.2940673828124 312.202"
                              pathFrom="M 986.7940673828124 312.202L 986.7940673828124 312.202L 997.8911254882811 312.202L 997.8911254882811 312.202L 985.2940673828124 312.202"
                              cy="120.42077142857141"
                              cx="1079.274454752604"
                              j="10"
                              val="43"
                              barHeight="191.78122857142858"
                              barWidth="14.09705810546875"
                            ></path>
                            <path
                              id="undefined-1"
                              d="M 1080.774454752604 312.202L 1080.774454752604 64.46466452636717Q 1086.3229838053385 60.4161354736328 1091.8715128580727 64.46466452636717L 1091.8715128580727 312.202L 1079.274454752604 312.202"
                              fill="rgba(225,227,234,1)"
                              fill-opacity="1"
                              stroke="#e1e3ea"
                              stroke-opacity="1"
                              stroke-linecap="round"
                              stroke-width="3"
                              stroke-dasharray="0"
                              class="apexcharts-bar-area"
                              index="2"
                              clip-path="url(#gridRectMaskhxsx638w)"
                              pathTo="M 1080.774454752604 312.202L 1080.774454752604 64.46466452636717Q 1086.3229838053385 60.4161354736328 1091.8715128580727 64.46466452636717L 1091.8715128580727 312.202L 1079.274454752604 312.202"
                              pathFrom="M 1080.774454752604 312.202L 1080.774454752604 312.202L 1091.8715128580727 312.202L 1091.8715128580727 312.202L 1079.274454752604 312.202"
                              cy="62.44039999999998"
                              cx="1173.2548421223958"
                              j="11"
                              val="56"
                              barHeight="249.76160000000002"
                              barWidth="14.09705810546875"
                            ></path>
                            <g id="SvgjsG1388" class="apexcharts-datalabels"></g>
                          </g>
                        </g>
                        <g
                          id="SvgjsG1401"
                          class="apexcharts-line-series apexcharts-plot-series"
                        >
                          <g
                            id="SvgjsG1402"
                            class="apexcharts-series"
                            seriesName="PaymentxCompleted"
                            data:longestSeries="true"
                            rel="1"
                            data:realIndex="1"
                          >
                            <path
                              id="undefined-0"
                              d="M 46.990193684895836 115.96074285714286C 79.88332926432292 115.96074285714286 108.07744547526042 66.90042857142856 140.9705810546875 66.90042857142856C 173.86371663411458 66.90042857142856 202.0578328450521 129.34082857142857 234.95096842447919 129.34082857142857C 267.8441040039063 129.34082857142857 296.03822021484376 13.380085714285713 328.93135579427087 13.380085714285713C 361.824491373698 13.380085714285713 390.01860758463545 214.08137142857143 422.91174316406256 214.08137142857143C 455.80487874348967 214.08137142857143 483.99899495442713 120.42077142857141 516.8921305338542 120.42077142857141C 549.7852661132813 120.42077142857141 577.9793823242188 218.5414 610.8725179036459 218.5414C 643.7656534830729 218.5414 671.9597696940104 129.34082857142857 704.8529052734375 129.34082857142857C 737.7460408528646 129.34082857142857 765.9401570638021 62.44039999999998 798.8332926432291 62.44039999999998C 831.7264282226562 62.44039999999998 859.9205444335937 191.78122857142858 892.8136800130208 191.78122857142858C 925.7068155924478 191.78122857142858 953.9009318033853 120.42077142857141 986.7940673828124 120.42077142857141C 1019.6872029622394 120.42077142857141 1047.881319173177 129.34082857142857 1080.774454752604 129.34082857142857"
                              fill="none"
                              fill-opacity="1"
                              stroke="rgba(162,172,199,0.25)"
                              stroke-opacity="1"
                              stroke-linecap="round"
                              stroke-width="2"
                              stroke-dasharray="0"
                              class="apexcharts-line"
                              index="1"
                              clip-path="url(#gridRectMaskhxsx638w)"
                              pathTo="M 46.990193684895836 115.96074285714286C 79.88332926432292 115.96074285714286 108.07744547526042 66.90042857142856 140.9705810546875 66.90042857142856C 173.86371663411458 66.90042857142856 202.0578328450521 129.34082857142857 234.95096842447919 129.34082857142857C 267.8441040039063 129.34082857142857 296.03822021484376 13.380085714285713 328.93135579427087 13.380085714285713C 361.824491373698 13.380085714285713 390.01860758463545 214.08137142857143 422.91174316406256 214.08137142857143C 455.80487874348967 214.08137142857143 483.99899495442713 120.42077142857141 516.8921305338542 120.42077142857141C 549.7852661132813 120.42077142857141 577.9793823242188 218.5414 610.8725179036459 218.5414C 643.7656534830729 218.5414 671.9597696940104 129.34082857142857 704.8529052734375 129.34082857142857C 737.7460408528646 129.34082857142857 765.9401570638021 62.44039999999998 798.8332926432291 62.44039999999998C 831.7264282226562 62.44039999999998 859.9205444335937 191.78122857142858 892.8136800130208 191.78122857142858C 925.7068155924478 191.78122857142858 953.9009318033853 120.42077142857141 986.7940673828124 120.42077142857141C 1019.6872029622394 120.42077142857141 1047.881319173177 129.34082857142857 1080.774454752604 129.34082857142857"
                              pathFrom="M -1 312.202L -1 312.202L 140.9705810546875 312.202L 234.95096842447919 312.202L 328.93135579427087 312.202L 422.91174316406256 312.202L 516.8921305338542 312.202L 610.8725179036459 312.202L 704.8529052734375 312.202L 798.8332926432291 312.202L 892.8136800130208 312.202L 986.7940673828124 312.202L 1080.774454752604 312.202"
                            ></path>
                            <g id="SvgjsG1403" class="apexcharts-series-markers-wrap">
                              <g class="apexcharts-series-markers">
                                <circle
                                  id="SvgjsCircle1452"
                                  r="0"
                                  cx="0"
                                  cy="0"
                                  class="apexcharts-marker wj5bzm58q"
                                  stroke="#ffffff"
                                  fill="#a2acc7"
                                  fill-opacity="1"
                                  stroke-width="2"
                                  stroke-opacity="0.9"
                                  default-marker-size="0"
                                ></circle>
                              </g>
                            </g>
                            <g id="SvgjsG1404" class="apexcharts-datalabels"></g>
                          </g>
                        </g>
                        <line
                          id="SvgjsLine1447"
                          x1="0"
                          y1="0"
                          x2="1127.7646484375"
                          y2="0"
                          stroke="#b6b6b6"
                          stroke-dasharray="0"
                          stroke-width="1"
                          class="apexcharts-ycrosshairs"
                        ></line>
                        <line
                          id="SvgjsLine1448"
                          x1="0"
                          y1="0"
                          x2="1127.7646484375"
                          y2="0"
                          stroke-dasharray="0"
                          stroke-width="0"
                          class="apexcharts-ycrosshairs-hidden"
                        ></line>
                        <g id="SvgjsG1449" class="apexcharts-yaxis-annotations"></g>
                        <g id="SvgjsG1450" class="apexcharts-xaxis-annotations"></g>
                        <g id="SvgjsG1451" class="apexcharts-point-annotations"></g>
                      </g>
                      <rect
                        id="SvgjsRect1367"
                        width="0"
                        height="0"
                        x="0"
                        y="0"
                        rx="0"
                        ry="0"
                        fill="#fefefe"
                        opacity="1"
                        stroke-width="0"
                        stroke="none"
                        stroke-dasharray="0"
                      ></rect>
                      <g
                        id="SvgjsG1432"
                        class="apexcharts-yaxis"
                        rel="0"
                        transform="translate(19.2353515625, 0)"
                      >
                        <g id="SvgjsG1433" class="apexcharts-yaxis-texts-g">
                          <text
                            id="SvgjsText1434"
                            font-family="Helvetica, Arial, sans-serif"
                            x="20"
                            y="31.7"
                            text-anchor="end"
                            dominant-baseline="auto"
                            font-size="11px"
                            fill="#a0acbb"
                            class="apexcharts-yaxis-label"
                            style="font-family: Helvetica, Arial, sans-serif"
                          >
                            70K
                          </text>
                          <text
                            id="SvgjsText1435"
                            font-family="Helvetica, Arial, sans-serif"
                            x="20"
                            y="76.40028571428572"
                            text-anchor="end"
                            dominant-baseline="auto"
                            font-size="11px"
                            fill="#a0acbb"
                            class="apexcharts-yaxis-label"
                            style="font-family: Helvetica, Arial, sans-serif"
                          >
                            60K
                          </text>
                          <text
                            id="SvgjsText1436"
                            font-family="Helvetica, Arial, sans-serif"
                            x="20"
                            y="121.10057142857143"
                            text-anchor="end"
                            dominant-baseline="auto"
                            font-size="11px"
                            fill="#a0acbb"
                            class="apexcharts-yaxis-label"
                            style="font-family: Helvetica, Arial, sans-serif"
                          >
                            50K
                          </text>
                          <text
                            id="SvgjsText1437"
                            font-family="Helvetica, Arial, sans-serif"
                            x="20"
                            y="165.80085714285713"
                            text-anchor="end"
                            dominant-baseline="auto"
                            font-size="11px"
                            fill="#a0acbb"
                            class="apexcharts-yaxis-label"
                            style="font-family: Helvetica, Arial, sans-serif"
                          >
                            40K
                          </text>
                          <text
                            id="SvgjsText1438"
                            font-family="Helvetica, Arial, sans-serif"
                            x="20"
                            y="210.50114285714284"
                            text-anchor="end"
                            dominant-baseline="auto"
                            font-size="11px"
                            fill="#a0acbb"
                            class="apexcharts-yaxis-label"
                            style="font-family: Helvetica, Arial, sans-serif"
                          >
                            30K
                          </text>
                          <text
                            id="SvgjsText1439"
                            font-family="Helvetica, Arial, sans-serif"
                            x="20"
                            y="255.20142857142855"
                            text-anchor="end"
                            dominant-baseline="auto"
                            font-size="11px"
                            fill="#a0acbb"
                            class="apexcharts-yaxis-label"
                            style="font-family: Helvetica, Arial, sans-serif"
                          >
                            20K
                          </text>
                          <text
                            id="SvgjsText1440"
                            font-family="Helvetica, Arial, sans-serif"
                            x="20"
                            y="299.90171428571426"
                            text-anchor="end"
                            dominant-baseline="auto"
                            font-size="11px"
                            fill="#a0acbb"
                            class="apexcharts-yaxis-label"
                            style="font-family: Helvetica, Arial, sans-serif"
                          >
                            10K
                          </text>
                          <text
                            id="SvgjsText1441"
                            font-family="Helvetica, Arial, sans-serif"
                            x="20"
                            y="344.602"
                            text-anchor="end"
                            dominant-baseline="auto"
                            font-size="11px"
                            fill="#a0acbb"
                            class="apexcharts-yaxis-label"
                            style="font-family: Helvetica, Arial, sans-serif"
                          >
                            0K
                          </text>
                        </g>
                      </g>
                    </svg>
                    <div class="apexcharts-legend"></div>
                    <div class="apexcharts-tooltip light">
                      <div
                        class="apexcharts-tooltip-title"
                        style="font-family: Inter; font-size: 12px"
                      ></div>
                      <div class="apexcharts-tooltip-series-group">
                        <span
                          class="apexcharts-tooltip-marker"
                          style="background-color: rgb(52, 84, 209)"
                        ></span>
                        <div
                          class="apexcharts-tooltip-text"
                          style="font-family: Inter; font-size: 12px"
                        >
                          <div class="apexcharts-tooltip-y-group">
                            <span class="apexcharts-tooltip-text-label"></span
                            ><span class="apexcharts-tooltip-text-value"></span>
                          </div>
                          <div class="apexcharts-tooltip-z-group">
                            <span class="apexcharts-tooltip-text-z-label"></span
                            ><span class="apexcharts-tooltip-text-z-value"></span>
                          </div>
                        </div>
                      </div>
                      <div class="apexcharts-tooltip-series-group">
                        <span
                          class="apexcharts-tooltip-marker"
                          style="background-color: rgb(162, 172, 199)"
                        ></span>
                        <div
                          class="apexcharts-tooltip-text"
                          style="font-family: Inter; font-size: 12px"
                        >
                          <div class="apexcharts-tooltip-y-group">
                            <span class="apexcharts-tooltip-text-label"></span
                            ><span class="apexcharts-tooltip-text-value"></span>
                          </div>
                          <div class="apexcharts-tooltip-z-group">
                            <span class="apexcharts-tooltip-text-z-label"></span
                            ><span class="apexcharts-tooltip-text-z-value"></span>
                          </div>
                        </div>
                      </div>
                      <div class="apexcharts-tooltip-series-group">
                        <span
                          class="apexcharts-tooltip-marker"
                          style="background-color: rgb(225, 227, 234)"
                        ></span>
                        <div
                          class="apexcharts-tooltip-text"
                          style="font-family: Inter; font-size: 12px"
                        >
                          <div class="apexcharts-tooltip-y-group">
                            <span class="apexcharts-tooltip-text-label"></span
                            ><span class="apexcharts-tooltip-text-value"></span>
                          </div>
                          <div class="apexcharts-tooltip-z-group">
                            <span class="apexcharts-tooltip-text-z-label"></span
                            ><span class="apexcharts-tooltip-text-z-value"></span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div
                      class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom light"
                    >
                      <div
                        class="apexcharts-xaxistooltip-text"
                        style="font-family: Helvetica, Arial, sans-serif; font-size: 12px"
                      ></div>
                    </div>
                  </div>
                </div>
                <div class="resize-triggers">
                  <div class="expand-trigger">
                    <div style="width: 1196px; height: 396px"></div>
                  </div>
                  <div class="contract-trigger"></div>
                </div>
              </div>
              <div class="card-footer">
                <div class="row g-4">
                  <div class="col-lg-3">
                    <div class="p-3 border border-dashed rounded">
                      <div class="fs-12 text-muted mb-1">Awaiting</div>
                      <h6 class="fw-bold text-dark">$5,486</h6>
                      <div class="progress mt-2 ht-3">
                        <div
                          class="progress-bar bg-primary"
                          role="progressbar"
                          style="width: 81%"
                        ></div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3">
                    <div class="p-3 border border-dashed rounded">
                      <div class="fs-12 text-muted mb-1">Completed</div>
                      <h6 class="fw-bold text-dark">$9,275</h6>
                      <div class="progress mt-2 ht-3">
                        <div
                          class="progress-bar bg-success"
                          role="progressbar"
                          style="width: 82%"
                        ></div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3">
                    <div class="p-3 border border-dashed rounded">
                      <div class="fs-12 text-muted mb-1">Rejected</div>
                      <h6 class="fw-bold text-dark">$3,868</h6>
                      <div class="progress mt-2 ht-3">
                        <div
                          class="progress-bar bg-danger"
                          role="progressbar"
                          style="width: 68%"
                        ></div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3">
                    <div class="p-3 border border-dashed rounded">
                      <div class="fs-12 text-muted mb-1">Revenue</div>
                      <h6 class="fw-bold text-dark">$50,668</h6>
                      <div class="progress mt-2 ht-3">
                        <div
                          class="progress-bar bg-dark"
                          role="progressbar"
                          style="width: 75%"
                        ></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- [Payment Records] end -->
          <!-- [Total Sales] start -->
          <div class="col-xxl-4">
            <div class="card stretch stretch-full overflow-hidden">
              <div class="bg-primary text-white" style="position: relative">
                <div class="p-4">
                  <span class="badge bg-light text-primary text-dark float-end">12%</span>
                  <div class="text-start">
                    <h4 class="text-reset">30,569</h4>
                    <p class="text-reset m-0">Total Sales</p>
                  </div>
                </div>
                <div id="total-sales-color-graph" style="min-height: 150px">
                  <div
                    id="apexchartsubrbs6c7"
                    class="apexcharts-canvas apexchartsubrbs6c7 light"
                    style="width: 1195px; height: 150px"
                  >
                    <svg
                      id="SvgjsSvg1456"
                      width="1195"
                      height="150"
                      xmlns="http://www.w3.org/2000/svg"
                      version="1.1"
                      xmlns:xlink="http://www.w3.org/1999/xlink"
                      xmlns:svgjs="http://svgjs.com/svgjs"
                      class="apexcharts-svg"
                      xmlns:data="ApexChartsNS"
                      transform="translate(0, 0)"
                      style="background: transparent"
                    >
                      <g
                        id="SvgjsG1458"
                        class="apexcharts-inner apexcharts-graphical"
                        transform="translate(0, 0)"
                      >
                        <defs id="SvgjsDefs1457">
                          <clipPath id="gridRectMaskubrbs6c7">
                            <rect
                              id="SvgjsRect1462"
                              width="1198"
                              height="153"
                              x="-1.5"
                              y="-1.5"
                              rx="0"
                              ry="0"
                              fill="#ffffff"
                              opacity="1"
                              stroke-width="0"
                              stroke="none"
                              stroke-dasharray="0"
                            ></rect>
                          </clipPath>
                          <clipPath id="gridRectMarkerMaskubrbs6c7">
                            <rect
                              id="SvgjsRect1463"
                              width="1197"
                              height="152"
                              x="-1"
                              y="-1"
                              rx="0"
                              ry="0"
                              fill="#ffffff"
                              opacity="1"
                              stroke-width="0"
                              stroke="none"
                              stroke-dasharray="0"
                            ></rect>
                          </clipPath>
                        </defs>
                        <line
                          id="SvgjsLine1461"
                          x1="0"
                          y1="0"
                          x2="0"
                          y2="150"
                          stroke="#b6b6b6"
                          stroke-dasharray="3"
                          class="apexcharts-xcrosshairs"
                          x="0"
                          y="0"
                          width="1"
                          height="150"
                          fill="#b1b9c4"
                          filter="none"
                          fill-opacity="0.9"
                          stroke-width="1"
                        ></line>
                        <g
                          id="SvgjsG1471"
                          class="apexcharts-xaxis"
                          transform="translate(0, 0)"
                        >
                          <g
                            id="SvgjsG1472"
                            class="apexcharts-xaxis-texts-g"
                            transform="translate(0, -4)"
                          ></g>
                        </g>
                        <g id="SvgjsG1475" class="apexcharts-grid">
                          <line
                            id="SvgjsLine1477"
                            x1="0"
                            y1="150"
                            x2="1195"
                            y2="150"
                            stroke="transparent"
                            stroke-dasharray="0"
                          ></line>
                          <line
                            id="SvgjsLine1476"
                            x1="0"
                            y1="1"
                            x2="0"
                            y2="150"
                            stroke="transparent"
                            stroke-dasharray="0"
                          ></line>
                        </g>
                        <g
                          id="SvgjsG1465"
                          class="apexcharts-area-series apexcharts-plot-series"
                        >
                          <g
                            id="SvgjsG1466"
                            class="apexcharts-series"
                            seriesName="TotalxSales"
                            data:longestSeries="true"
                            rel="1"
                            data:realIndex="0"
                          >
                            <path
                              id="undefined-0"
                              d="M 0 150L 0 50C 69.70833333333333 50 129.45833333333331 100 199.16666666666666 100C 268.875 100 328.625 60 398.3333333333333 60C 468.04166666666663 60 527.7916666666666 90 597.5 90C 667.2083333333333 90 726.9583333333333 25 796.6666666666666 25C 866.375 25 926.125 100 995.8333333333334 100C 1065.5416666666667 100 1125.2916666666667 50 1195 50C 1195 50 1195 50 1195 150M 1195 50z"
                              fill="rgba(147,169,255,0.4)"
                              fill-opacity="1"
                              stroke-opacity="1"
                              stroke-linecap="butt"
                              stroke-width="0"
                              stroke-dasharray="0"
                              class="apexcharts-area"
                              index="0"
                              clip-path="url(#gridRectMaskubrbs6c7)"
                              pathTo="M 0 150L 0 50C 69.70833333333333 50 129.45833333333331 100 199.16666666666666 100C 268.875 100 328.625 60 398.3333333333333 60C 468.04166666666663 60 527.7916666666666 90 597.5 90C 667.2083333333333 90 726.9583333333333 25 796.6666666666666 25C 866.375 25 926.125 100 995.8333333333334 100C 1065.5416666666667 100 1125.2916666666667 50 1195 50C 1195 50 1195 50 1195 150M 1195 50z"
                              pathFrom="M -1 150L -1 150L 199.16666666666666 150L 398.3333333333333 150L 597.5 150L 796.6666666666666 150L 995.8333333333334 150L 1195 150"
                            ></path>
                            <path
                              id="undefined-0"
                              d="M 0 50C 69.70833333333333 50 129.45833333333331 100 199.16666666666666 100C 268.875 100 328.625 60 398.3333333333333 60C 468.04166666666663 60 527.7916666666666 90 597.5 90C 667.2083333333333 90 726.9583333333333 25 796.6666666666666 25C 866.375 25 926.125 100 995.8333333333334 100C 1065.5416666666667 100 1125.2916666666667 50 1195 50"
                              fill="none"
                              fill-opacity="1"
                              stroke="#93a9ff"
                              stroke-opacity="1"
                              stroke-linecap="butt"
                              stroke-width="3"
                              stroke-dasharray="0"
                              class="apexcharts-area"
                              index="0"
                              clip-path="url(#gridRectMaskubrbs6c7)"
                              pathTo="M 0 50C 69.70833333333333 50 129.45833333333331 100 199.16666666666666 100C 268.875 100 328.625 60 398.3333333333333 60C 468.04166666666663 60 527.7916666666666 90 597.5 90C 667.2083333333333 90 726.9583333333333 25 796.6666666666666 25C 866.375 25 926.125 100 995.8333333333334 100C 1065.5416666666667 100 1125.2916666666667 50 1195 50"
                              pathFrom="M -1 150L -1 150L 199.16666666666666 150L 398.3333333333333 150L 597.5 150L 796.6666666666666 150L 995.8333333333334 150L 1195 150"
                            ></path>
                            <g id="SvgjsG1467" class="apexcharts-series-markers-wrap">
                              <g class="apexcharts-series-markers">
                                <circle
                                  id="SvgjsCircle1483"
                                  r="0"
                                  cx="0"
                                  cy="0"
                                  class="apexcharts-marker wlty275ao no-pointer-events"
                                  stroke="#ffffff"
                                  fill="#93a9ff"
                                  fill-opacity="1"
                                  stroke-width="2"
                                  stroke-opacity="0.9"
                                  default-marker-size="0"
                                ></circle>
                              </g>
                            </g>
                            <g id="SvgjsG1468" class="apexcharts-datalabels"></g>
                          </g>
                        </g>
                        <line
                          id="SvgjsLine1478"
                          x1="0"
                          y1="0"
                          x2="1195"
                          y2="0"
                          stroke="#b6b6b6"
                          stroke-dasharray="0"
                          stroke-width="1"
                          class="apexcharts-ycrosshairs"
                        ></line>
                        <line
                          id="SvgjsLine1479"
                          x1="0"
                          y1="0"
                          x2="1195"
                          y2="0"
                          stroke-dasharray="0"
                          stroke-width="0"
                          class="apexcharts-ycrosshairs-hidden"
                        ></line>
                        <g id="SvgjsG1480" class="apexcharts-yaxis-annotations"></g>
                        <g id="SvgjsG1481" class="apexcharts-xaxis-annotations"></g>
                        <g id="SvgjsG1482" class="apexcharts-point-annotations"></g>
                      </g>
                      <rect
                        id="SvgjsRect1460"
                        width="0"
                        height="0"
                        x="0"
                        y="0"
                        rx="0"
                        ry="0"
                        fill="#fefefe"
                        opacity="1"
                        stroke-width="0"
                        stroke="none"
                        stroke-dasharray="0"
                      ></rect>
                      <g
                        id="SvgjsG1473"
                        class="apexcharts-yaxis"
                        rel="0"
                        transform="translate(-21, 0)"
                      >
                        <g id="SvgjsG1474" class="apexcharts-yaxis-texts-g"></g>
                      </g>
                    </svg>
                    <div class="apexcharts-legend"></div>
                    <div class="apexcharts-tooltip dark">
                      <div
                        class="apexcharts-tooltip-title"
                        style="font-family: Inter; font-size: 12px"
                      ></div>
                      <div class="apexcharts-tooltip-series-group">
                        <span
                          class="apexcharts-tooltip-marker"
                          style="background-color: rgb(147, 169, 255)"
                        ></span>
                        <div
                          class="apexcharts-tooltip-text"
                          style="font-family: Inter; font-size: 12px"
                        >
                          <div class="apexcharts-tooltip-y-group">
                            <span class="apexcharts-tooltip-text-label"></span
                            ><span class="apexcharts-tooltip-text-value"></span>
                          </div>
                          <div class="apexcharts-tooltip-z-group">
                            <span class="apexcharts-tooltip-text-z-label"></span
                            ><span class="apexcharts-tooltip-text-z-value"></span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="resize-triggers">
                  <div class="expand-trigger">
                    <div style="width: 1196px; height: 253px"></div>
                  </div>
                  <div class="contract-trigger"></div>
                </div>
              </div>
              <div class="card-body">
                <div class="d-flex align-items-center justify-content-between">
                  <div class="hstack gap-3">
                    <div class="avatar-image avatar-lg p-2 rounded">
                      <img
                        class="img-fluid"
                        src="assets/images/brand/shopify.png"
                        alt=""
                      />
                    </div>
                    <div>
                      <a href="javascript:void(0);" class="d-block"
                        >Shopify eCommerce Store</a
                      >
                      <span class="fs-12 text-muted">Development</span>
                    </div>
                  </div>
                  <div>
                    <div class="fw-bold text-dark">$1200</div>
                    <div class="fs-12 text-end">6 Projects</div>
                  </div>
                </div>
                <hr class="border-dashed my-3" />
                <div class="d-flex align-items-center justify-content-between">
                  <div class="hstack gap-3">
                    <div class="avatar-image avatar-lg p-2 rounded">
                      <img
                        class="img-fluid"
                        src="assets/images/brand/app-store.png"
                        alt=""
                      />
                    </div>
                    <div>
                      <a href="javascript:void(0);" class="d-block"
                        >iOS Apps Development</a
                      >
                      <span class="fs-12 text-muted">Development</span>
                    </div>
                  </div>
                  <div>
                    <div class="fw-bold text-dark">$1450</div>
                    <div class="fs-12 text-end">3 Projects</div>
                  </div>
                </div>
                <hr class="border-dashed my-3" />
                <div class="d-flex align-items-center justify-content-between">
                  <div class="hstack gap-3">
                    <div class="avatar-image avatar-lg p-2 rounded">
                      <img class="img-fluid" src="assets/images/brand/figma.png" alt="" />
                    </div>
                    <div>
                      <a href="javascript:void(0);" class="d-block"
                        >Figma Dashboard Design</a
                      >
                      <span class="fs-12 text-muted">UI/UX Design</span>
                    </div>
                  </div>
                  <div>
                    <div class="fw-bold text-dark">$1250</div>
                    <div class="fs-12 text-end">5 Projects</div>
                  </div>
                </div>
              </div>
              <a
                href="javascript:void(0);"
                class="card-footer fs-11 fw-bold text-uppercase text-center py-4"
                >Full Details</a
              >
            </div>
          </div>
          <!-- [Total Sales] end !-->
          <!-- [Mini] start -->
          <div class="col-lg-4">
            <div class="card mb-4 stretch stretch-full">
              <div class="card-header d-flex align-items-center justify-content-between">
                <div class="d-flex gap-3 align-items-center">
                  <div class="avatar-text">
                    <i class="feather feather-star"></i>
                  </div>
                  <div>
                    <div class="fw-semibold text-dark">Tasks Completed</div>
                    <div class="fs-12 text-muted">22/35 completed</div>
                  </div>
                </div>
                <div class="fs-4 fw-bold text-dark">22/35</div>
              </div>
              <div
                class="card-body d-flex align-items-center justify-content-between gap-4"
                style="position: relative"
              >
                <div id="task-completed-area-chart" style="min-height: 100px">
                  <div
                    id="apexcharts7wx6zm3c"
                    class="apexcharts-canvas apexcharts7wx6zm3c light"
                    style="width: 228px; height: 100px"
                  >
                    <svg
                      id="SvgjsSvg1257"
                      width="228"
                      height="100"
                      xmlns="http://www.w3.org/2000/svg"
                      version="1.1"
                      xmlns:xlink="http://www.w3.org/1999/xlink"
                      xmlns:svgjs="http://svgjs.com/svgjs"
                      class="apexcharts-svg"
                      xmlns:data="ApexChartsNS"
                      transform="translate(0, 0)"
                      style="background: transparent"
                    >
                      <g
                        id="SvgjsG1259"
                        class="apexcharts-inner apexcharts-graphical"
                        transform="translate(0, 0)"
                      >
                        <defs id="SvgjsDefs1258">
                          <clipPath id="gridRectMask7wx6zm3c">
                            <rect
                              id="SvgjsRect1263"
                              width="230"
                              height="102"
                              x="-1"
                              y="-1"
                              rx="0"
                              ry="0"
                              fill="#ffffff"
                              opacity="1"
                              stroke-width="0"
                              stroke="none"
                              stroke-dasharray="0"
                            ></rect>
                          </clipPath>
                          <clipPath id="gridRectMarkerMask7wx6zm3c">
                            <rect
                              id="SvgjsRect1264"
                              width="230"
                              height="102"
                              x="-1"
                              y="-1"
                              rx="0"
                              ry="0"
                              fill="#ffffff"
                              opacity="1"
                              stroke-width="0"
                              stroke="none"
                              stroke-dasharray="0"
                            ></rect>
                          </clipPath>
                          <linearGradient
                            id="SvgjsLinearGradient1270"
                            x1="0"
                            y1="0"
                            x2="0"
                            y2="1"
                          >
                            <stop
                              id="SvgjsStop1271"
                              stop-opacity="0.2"
                              stop-color="rgba(52,84,209,0.2)"
                              offset="0"
                            ></stop>
                            <stop
                              id="SvgjsStop1272"
                              stop-opacity="0.75"
                              stop-color="rgba(255,255,255,0.75)"
                              offset="0.9"
                            ></stop>
                            <stop
                              id="SvgjsStop1273"
                              stop-opacity="0.75"
                              stop-color="rgba(255,255,255,0.75)"
                              offset="1"
                            ></stop>
                          </linearGradient>
                        </defs>
                        <line
                          id="SvgjsLine1262"
                          x1="0"
                          y1="0"
                          x2="0"
                          y2="100"
                          stroke="#b6b6b6"
                          stroke-dasharray="3"
                          class="apexcharts-xcrosshairs"
                          x="0"
                          y="0"
                          width="1"
                          height="100"
                          fill="#b1b9c4"
                          filter="none"
                          fill-opacity="0.9"
                          stroke-width="1"
                        ></line>
                        <g
                          id="SvgjsG1276"
                          class="apexcharts-xaxis"
                          transform="translate(0, 0)"
                        >
                          <g
                            id="SvgjsG1277"
                            class="apexcharts-xaxis-texts-g"
                            transform="translate(0, -4)"
                          ></g>
                        </g>
                        <g id="SvgjsG1280" class="apexcharts-grid">
                          <line
                            id="SvgjsLine1282"
                            x1="0"
                            y1="100"
                            x2="228"
                            y2="100"
                            stroke="transparent"
                            stroke-dasharray="0"
                          ></line>
                          <line
                            id="SvgjsLine1281"
                            x1="0"
                            y1="1"
                            x2="0"
                            y2="100"
                            stroke="transparent"
                            stroke-dasharray="0"
                          ></line>
                        </g>
                        <g
                          id="SvgjsG1266"
                          class="apexcharts-area-series apexcharts-plot-series"
                        >
                          <g
                            id="SvgjsG1267"
                            class="apexcharts-series"
                            seriesName="TaskxCompleted"
                            data:longestSeries="true"
                            rel="1"
                            data:realIndex="0"
                          >
                            <path
                              id="undefined-0"
                              d="M 0 100L 0 77.77777777777777C 13.299999999999999 77.77777777777777 24.700000000000003 47.22222222222223 38 47.22222222222223C 51.3 47.22222222222223 62.7 86.1111111111111 76 86.1111111111111C 89.3 86.1111111111111 100.7 33.333333333333314 114 33.333333333333314C 127.3 33.333333333333314 138.7 55.55555555555554 152 55.55555555555554C 165.3 55.55555555555554 176.7 16.666666666666657 190 16.666666666666657C 203.3 16.666666666666657 214.7 58.333333333333314 228 58.333333333333314C 228 58.333333333333314 228 58.333333333333314 228 100M 228 58.333333333333314z"
                              fill="url(#SvgjsLinearGradient1270)"
                              fill-opacity="1"
                              stroke-opacity="1"
                              stroke-linecap="butt"
                              stroke-width="0"
                              stroke-dasharray="0"
                              class="apexcharts-area"
                              index="0"
                              clip-path="url(#gridRectMask7wx6zm3c)"
                              pathTo="M 0 100L 0 77.77777777777777C 13.299999999999999 77.77777777777777 24.700000000000003 47.22222222222223 38 47.22222222222223C 51.3 47.22222222222223 62.7 86.1111111111111 76 86.1111111111111C 89.3 86.1111111111111 100.7 33.333333333333314 114 33.333333333333314C 127.3 33.333333333333314 138.7 55.55555555555554 152 55.55555555555554C 165.3 55.55555555555554 176.7 16.666666666666657 190 16.666666666666657C 203.3 16.666666666666657 214.7 58.333333333333314 228 58.333333333333314C 228 58.333333333333314 228 58.333333333333314 228 100M 228 58.333333333333314z"
                              pathFrom="M -1 200L -1 200L 38 200L 76 200L 114 200L 152 200L 190 200L 228 200"
                            ></path>
                            <path
                              id="undefined-0"
                              d="M 0 77.77777777777777C 13.299999999999999 77.77777777777777 24.700000000000003 47.22222222222223 38 47.22222222222223C 51.3 47.22222222222223 62.7 86.1111111111111 76 86.1111111111111C 89.3 86.1111111111111 100.7 33.333333333333314 114 33.333333333333314C 127.3 33.333333333333314 138.7 55.55555555555554 152 55.55555555555554C 165.3 55.55555555555554 176.7 16.666666666666657 190 16.666666666666657C 203.3 16.666666666666657 214.7 58.333333333333314 228 58.333333333333314"
                              fill="none"
                              fill-opacity="1"
                              stroke="#3454d1"
                              stroke-opacity="1"
                              stroke-linecap="butt"
                              stroke-width="2"
                              stroke-dasharray="0"
                              class="apexcharts-area"
                              index="0"
                              clip-path="url(#gridRectMask7wx6zm3c)"
                              pathTo="M 0 77.77777777777777C 13.299999999999999 77.77777777777777 24.700000000000003 47.22222222222223 38 47.22222222222223C 51.3 47.22222222222223 62.7 86.1111111111111 76 86.1111111111111C 89.3 86.1111111111111 100.7 33.333333333333314 114 33.333333333333314C 127.3 33.333333333333314 138.7 55.55555555555554 152 55.55555555555554C 165.3 55.55555555555554 176.7 16.666666666666657 190 16.666666666666657C 203.3 16.666666666666657 214.7 58.333333333333314 228 58.333333333333314"
                              pathFrom="M -1 200L -1 200L 38 200L 76 200L 114 200L 152 200L 190 200L 228 200"
                            ></path>
                            <g id="SvgjsG1268" class="apexcharts-series-markers-wrap">
                              <g class="apexcharts-series-markers">
                                <circle
                                  id="SvgjsCircle1288"
                                  r="0"
                                  cx="0"
                                  cy="0"
                                  class="apexcharts-marker weyn58d5k no-pointer-events"
                                  stroke="#ffffff"
                                  fill="#3454d1"
                                  fill-opacity="1"
                                  stroke-width="2"
                                  stroke-opacity="0.9"
                                  default-marker-size="0"
                                ></circle>
                              </g>
                            </g>
                            <g id="SvgjsG1269" class="apexcharts-datalabels"></g>
                          </g>
                        </g>
                        <line
                          id="SvgjsLine1283"
                          x1="0"
                          y1="0"
                          x2="228"
                          y2="0"
                          stroke="#b6b6b6"
                          stroke-dasharray="0"
                          stroke-width="1"
                          class="apexcharts-ycrosshairs"
                        ></line>
                        <line
                          id="SvgjsLine1284"
                          x1="0"
                          y1="0"
                          x2="228"
                          y2="0"
                          stroke-dasharray="0"
                          stroke-width="0"
                          class="apexcharts-ycrosshairs-hidden"
                        ></line>
                        <g id="SvgjsG1285" class="apexcharts-yaxis-annotations"></g>
                        <g id="SvgjsG1286" class="apexcharts-xaxis-annotations"></g>
                        <g id="SvgjsG1287" class="apexcharts-point-annotations"></g>
                      </g>
                      <rect
                        id="SvgjsRect1261"
                        width="0"
                        height="0"
                        x="0"
                        y="0"
                        rx="0"
                        ry="0"
                        fill="#fefefe"
                        opacity="1"
                        stroke-width="0"
                        stroke="none"
                        stroke-dasharray="0"
                      ></rect>
                      <g
                        id="SvgjsG1278"
                        class="apexcharts-yaxis"
                        rel="0"
                        transform="translate(-21, 0)"
                      >
                        <g id="SvgjsG1279" class="apexcharts-yaxis-texts-g"></g>
                      </g>
                    </svg>
                    <div class="apexcharts-legend"></div>
                    <div class="apexcharts-tooltip light">
                      <div
                        class="apexcharts-tooltip-title"
                        style="font-family: Inter; font-size: 12px"
                      ></div>
                      <div class="apexcharts-tooltip-series-group">
                        <span
                          class="apexcharts-tooltip-marker"
                          style="background-color: rgb(52, 84, 209)"
                        ></span>
                        <div
                          class="apexcharts-tooltip-text"
                          style="font-family: Inter; font-size: 12px"
                        >
                          <div class="apexcharts-tooltip-y-group">
                            <span class="apexcharts-tooltip-text-label"></span
                            ><span class="apexcharts-tooltip-text-value"></span>
                          </div>
                          <div class="apexcharts-tooltip-z-group">
                            <span class="apexcharts-tooltip-text-z-label"></span
                            ><span class="apexcharts-tooltip-text-z-value"></span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="fs-12 text-muted text-nowrap">
                  <span class="fw-semibold text-primary">28% more</span><br />
                  <span>from last week</span>
                </div>
                <div class="resize-triggers">
                  <div class="expand-trigger">
                    <div style="width: 382px; height: 151px"></div>
                  </div>
                  <div class="contract-trigger"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card mb-4 stretch stretch-full">
              <div class="card-header d-flex align-items-center justify-content-between">
                <div class="d-flex gap-3 align-items-center">
                  <div class="avatar-text">
                    <i class="feather feather-file-text"></i>
                  </div>
                  <div>
                    <div class="fw-semibold text-dark">New Tasks</div>
                    <div class="fs-12 text-muted">0/20 tasks</div>
                  </div>
                </div>
                <div class="fs-4 fw-bold text-dark">5/20</div>
              </div>
              <div
                class="card-body d-flex align-items-center justify-content-between gap-4"
                style="position: relative"
              >
                <div id="new-tasks-area-chart" style="min-height: 100px">
                  <div
                    id="apexchartslhs2xl6o"
                    class="apexcharts-canvas apexchartslhs2xl6o light"
                    style="width: 228px; height: 100px"
                  >
                    <svg
                      id="SvgjsSvg1292"
                      width="228"
                      height="100"
                      xmlns="http://www.w3.org/2000/svg"
                      version="1.1"
                      xmlns:xlink="http://www.w3.org/1999/xlink"
                      xmlns:svgjs="http://svgjs.com/svgjs"
                      class="apexcharts-svg"
                      xmlns:data="ApexChartsNS"
                      transform="translate(0, 0)"
                      style="background: transparent"
                    >
                      <g
                        id="SvgjsG1294"
                        class="apexcharts-inner apexcharts-graphical"
                        transform="translate(0, 0)"
                      >
                        <defs id="SvgjsDefs1293">
                          <clipPath id="gridRectMasklhs2xl6o">
                            <rect
                              id="SvgjsRect1298"
                              width="230"
                              height="102"
                              x="-1"
                              y="-1"
                              rx="0"
                              ry="0"
                              fill="#ffffff"
                              opacity="1"
                              stroke-width="0"
                              stroke="none"
                              stroke-dasharray="0"
                            ></rect>
                          </clipPath>
                          <clipPath id="gridRectMarkerMasklhs2xl6o">
                            <rect
                              id="SvgjsRect1299"
                              width="230"
                              height="102"
                              x="-1"
                              y="-1"
                              rx="0"
                              ry="0"
                              fill="#ffffff"
                              opacity="1"
                              stroke-width="0"
                              stroke="none"
                              stroke-dasharray="0"
                            ></rect>
                          </clipPath>
                          <linearGradient
                            id="SvgjsLinearGradient1305"
                            x1="0"
                            y1="0"
                            x2="0"
                            y2="1"
                          >
                            <stop
                              id="SvgjsStop1306"
                              stop-opacity="0.2"
                              stop-color="rgba(37,184,101,0.2)"
                              offset="0"
                            ></stop>
                            <stop
                              id="SvgjsStop1307"
                              stop-opacity="0.75"
                              stop-color="rgba(255,255,255,0.75)"
                              offset="0.9"
                            ></stop>
                            <stop
                              id="SvgjsStop1308"
                              stop-opacity="0.75"
                              stop-color="rgba(255,255,255,0.75)"
                              offset="1"
                            ></stop>
                          </linearGradient>
                        </defs>
                        <line
                          id="SvgjsLine1297"
                          x1="0"
                          y1="0"
                          x2="0"
                          y2="100"
                          stroke="#b6b6b6"
                          stroke-dasharray="3"
                          class="apexcharts-xcrosshairs"
                          x="0"
                          y="0"
                          width="1"
                          height="100"
                          fill="#b1b9c4"
                          filter="none"
                          fill-opacity="0.9"
                          stroke-width="1"
                        ></line>
                        <g
                          id="SvgjsG1311"
                          class="apexcharts-xaxis"
                          transform="translate(0, 0)"
                        >
                          <g
                            id="SvgjsG1312"
                            class="apexcharts-xaxis-texts-g"
                            transform="translate(0, -4)"
                          ></g>
                        </g>
                        <g id="SvgjsG1315" class="apexcharts-grid">
                          <line
                            id="SvgjsLine1317"
                            x1="0"
                            y1="100"
                            x2="228"
                            y2="100"
                            stroke="transparent"
                            stroke-dasharray="0"
                          ></line>
                          <line
                            id="SvgjsLine1316"
                            x1="0"
                            y1="1"
                            x2="0"
                            y2="100"
                            stroke="transparent"
                            stroke-dasharray="0"
                          ></line>
                        </g>
                        <g
                          id="SvgjsG1301"
                          class="apexcharts-area-series apexcharts-plot-series"
                        >
                          <g
                            id="SvgjsG1302"
                            class="apexcharts-series"
                            seriesName="NewxTasks"
                            data:longestSeries="true"
                            rel="1"
                            data:realIndex="0"
                          >
                            <path
                              id="undefined-0"
                              d="M 0 100L 0 77.77777777777777C 13.299999999999999 77.77777777777777 24.700000000000003 47.22222222222223 38 47.22222222222223C 51.3 47.22222222222223 62.7 86.1111111111111 76 86.1111111111111C 89.3 86.1111111111111 100.7 33.333333333333314 114 33.333333333333314C 127.3 33.333333333333314 138.7 55.55555555555554 152 55.55555555555554C 165.3 55.55555555555554 176.7 16.666666666666657 190 16.666666666666657C 203.3 16.666666666666657 214.7 58.333333333333314 228 58.333333333333314C 228 58.333333333333314 228 58.333333333333314 228 100M 228 58.333333333333314z"
                              fill="url(#SvgjsLinearGradient1305)"
                              fill-opacity="1"
                              stroke-opacity="1"
                              stroke-linecap="butt"
                              stroke-width="0"
                              stroke-dasharray="0"
                              class="apexcharts-area"
                              index="0"
                              clip-path="url(#gridRectMasklhs2xl6o)"
                              pathTo="M 0 100L 0 77.77777777777777C 13.299999999999999 77.77777777777777 24.700000000000003 47.22222222222223 38 47.22222222222223C 51.3 47.22222222222223 62.7 86.1111111111111 76 86.1111111111111C 89.3 86.1111111111111 100.7 33.333333333333314 114 33.333333333333314C 127.3 33.333333333333314 138.7 55.55555555555554 152 55.55555555555554C 165.3 55.55555555555554 176.7 16.666666666666657 190 16.666666666666657C 203.3 16.666666666666657 214.7 58.333333333333314 228 58.333333333333314C 228 58.333333333333314 228 58.333333333333314 228 100M 228 58.333333333333314z"
                              pathFrom="M -1 200L -1 200L 38 200L 76 200L 114 200L 152 200L 190 200L 228 200"
                            ></path>
                            <path
                              id="undefined-0"
                              d="M 0 77.77777777777777C 13.299999999999999 77.77777777777777 24.700000000000003 47.22222222222223 38 47.22222222222223C 51.3 47.22222222222223 62.7 86.1111111111111 76 86.1111111111111C 89.3 86.1111111111111 100.7 33.333333333333314 114 33.333333333333314C 127.3 33.333333333333314 138.7 55.55555555555554 152 55.55555555555554C 165.3 55.55555555555554 176.7 16.666666666666657 190 16.666666666666657C 203.3 16.666666666666657 214.7 58.333333333333314 228 58.333333333333314"
                              fill="none"
                              fill-opacity="1"
                              stroke="#25b865"
                              stroke-opacity="1"
                              stroke-linecap="butt"
                              stroke-width="2"
                              stroke-dasharray="0"
                              class="apexcharts-area"
                              index="0"
                              clip-path="url(#gridRectMasklhs2xl6o)"
                              pathTo="M 0 77.77777777777777C 13.299999999999999 77.77777777777777 24.700000000000003 47.22222222222223 38 47.22222222222223C 51.3 47.22222222222223 62.7 86.1111111111111 76 86.1111111111111C 89.3 86.1111111111111 100.7 33.333333333333314 114 33.333333333333314C 127.3 33.333333333333314 138.7 55.55555555555554 152 55.55555555555554C 165.3 55.55555555555554 176.7 16.666666666666657 190 16.666666666666657C 203.3 16.666666666666657 214.7 58.333333333333314 228 58.333333333333314"
                              pathFrom="M -1 200L -1 200L 38 200L 76 200L 114 200L 152 200L 190 200L 228 200"
                            ></path>
                            <g id="SvgjsG1303" class="apexcharts-series-markers-wrap">
                              <g class="apexcharts-series-markers">
                                <circle
                                  id="SvgjsCircle1323"
                                  r="0"
                                  cx="0"
                                  cy="0"
                                  class="apexcharts-marker wbgbv8p0j no-pointer-events"
                                  stroke="#ffffff"
                                  fill="#25b865"
                                  fill-opacity="1"
                                  stroke-width="2"
                                  stroke-opacity="0.9"
                                  default-marker-size="0"
                                ></circle>
                              </g>
                            </g>
                            <g id="SvgjsG1304" class="apexcharts-datalabels"></g>
                          </g>
                        </g>
                        <line
                          id="SvgjsLine1318"
                          x1="0"
                          y1="0"
                          x2="228"
                          y2="0"
                          stroke="#b6b6b6"
                          stroke-dasharray="0"
                          stroke-width="1"
                          class="apexcharts-ycrosshairs"
                        ></line>
                        <line
                          id="SvgjsLine1319"
                          x1="0"
                          y1="0"
                          x2="228"
                          y2="0"
                          stroke-dasharray="0"
                          stroke-width="0"
                          class="apexcharts-ycrosshairs-hidden"
                        ></line>
                        <g id="SvgjsG1320" class="apexcharts-yaxis-annotations"></g>
                        <g id="SvgjsG1321" class="apexcharts-xaxis-annotations"></g>
                        <g id="SvgjsG1322" class="apexcharts-point-annotations"></g>
                      </g>
                      <rect
                        id="SvgjsRect1296"
                        width="0"
                        height="0"
                        x="0"
                        y="0"
                        rx="0"
                        ry="0"
                        fill="#fefefe"
                        opacity="1"
                        stroke-width="0"
                        stroke="none"
                        stroke-dasharray="0"
                      ></rect>
                      <g
                        id="SvgjsG1313"
                        class="apexcharts-yaxis"
                        rel="0"
                        transform="translate(-21, 0)"
                      >
                        <g id="SvgjsG1314" class="apexcharts-yaxis-texts-g"></g>
                      </g>
                    </svg>
                    <div class="apexcharts-legend"></div>
                    <div class="apexcharts-tooltip light">
                      <div
                        class="apexcharts-tooltip-title"
                        style="font-family: Inter; font-size: 12px"
                      ></div>
                      <div class="apexcharts-tooltip-series-group">
                        <span
                          class="apexcharts-tooltip-marker"
                          style="background-color: rgb(37, 184, 101)"
                        ></span>
                        <div
                          class="apexcharts-tooltip-text"
                          style="font-family: Inter; font-size: 12px"
                        >
                          <div class="apexcharts-tooltip-y-group">
                            <span class="apexcharts-tooltip-text-label"></span
                            ><span class="apexcharts-tooltip-text-value"></span>
                          </div>
                          <div class="apexcharts-tooltip-z-group">
                            <span class="apexcharts-tooltip-text-z-label"></span
                            ><span class="apexcharts-tooltip-text-z-value"></span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="fs-12 text-muted text-nowrap">
                  <span class="fw-semibold text-success">34% more</span><br />
                  <span>from last week</span>
                </div>
                <div class="resize-triggers">
                  <div class="expand-trigger">
                    <div style="width: 382px; height: 151px"></div>
                  </div>
                  <div class="contract-trigger"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card mb-4 stretch stretch-full">
              <div class="card-header d-flex align-items-center justify-content-between">
                <div class="d-flex gap-3 align-items-center">
                  <div class="avatar-text">
                    <i class="feather feather-airplay"></i>
                  </div>
                  <div>
                    <div class="fw-semibold text-dark">Project Done</div>
                    <div class="fs-12 text-muted">20/30 project</div>
                  </div>
                </div>
                <div class="fs-4 fw-bold text-dark">20/30</div>
              </div>
              <div
                class="card-body d-flex align-items-center justify-content-between gap-4"
                style="position: relative"
              >
                <div id="project-done-area-chart" style="min-height: 100px">
                  <div
                    id="apexchartsn0ald7vt"
                    class="apexcharts-canvas apexchartsn0ald7vt light"
                    style="width: 228px; height: 100px"
                  >
                    <svg
                      id="SvgjsSvg1327"
                      width="228"
                      height="100"
                      xmlns="http://www.w3.org/2000/svg"
                      version="1.1"
                      xmlns:xlink="http://www.w3.org/1999/xlink"
                      xmlns:svgjs="http://svgjs.com/svgjs"
                      class="apexcharts-svg"
                      xmlns:data="ApexChartsNS"
                      transform="translate(0, 0)"
                      style="background: transparent"
                    >
                      <g
                        id="SvgjsG1329"
                        class="apexcharts-inner apexcharts-graphical"
                        transform="translate(0, 0)"
                      >
                        <defs id="SvgjsDefs1328">
                          <clipPath id="gridRectMaskn0ald7vt">
                            <rect
                              id="SvgjsRect1333"
                              width="230"
                              height="102"
                              x="-1"
                              y="-1"
                              rx="0"
                              ry="0"
                              fill="#ffffff"
                              opacity="1"
                              stroke-width="0"
                              stroke="none"
                              stroke-dasharray="0"
                            ></rect>
                          </clipPath>
                          <clipPath id="gridRectMarkerMaskn0ald7vt">
                            <rect
                              id="SvgjsRect1334"
                              width="230"
                              height="102"
                              x="-1"
                              y="-1"
                              rx="0"
                              ry="0"
                              fill="#ffffff"
                              opacity="1"
                              stroke-width="0"
                              stroke="none"
                              stroke-dasharray="0"
                            ></rect>
                          </clipPath>
                          <linearGradient
                            id="SvgjsLinearGradient1340"
                            x1="0"
                            y1="0"
                            x2="0"
                            y2="1"
                          >
                            <stop
                              id="SvgjsStop1341"
                              stop-opacity="0.2"
                              stop-color="rgba(209,59,76,0.2)"
                              offset="0"
                            ></stop>
                            <stop
                              id="SvgjsStop1342"
                              stop-opacity="0.75"
                              stop-color="rgba(255,255,255,0.75)"
                              offset="0.9"
                            ></stop>
                            <stop
                              id="SvgjsStop1343"
                              stop-opacity="0.75"
                              stop-color="rgba(255,255,255,0.75)"
                              offset="1"
                            ></stop>
                          </linearGradient>
                        </defs>
                        <line
                          id="SvgjsLine1332"
                          x1="0"
                          y1="0"
                          x2="0"
                          y2="100"
                          stroke="#b6b6b6"
                          stroke-dasharray="3"
                          class="apexcharts-xcrosshairs"
                          x="0"
                          y="0"
                          width="1"
                          height="100"
                          fill="#b1b9c4"
                          filter="none"
                          fill-opacity="0.9"
                          stroke-width="1"
                        ></line>
                        <g
                          id="SvgjsG1346"
                          class="apexcharts-xaxis"
                          transform="translate(0, 0)"
                        >
                          <g
                            id="SvgjsG1347"
                            class="apexcharts-xaxis-texts-g"
                            transform="translate(0, -4)"
                          ></g>
                        </g>
                        <g id="SvgjsG1350" class="apexcharts-grid">
                          <line
                            id="SvgjsLine1352"
                            x1="0"
                            y1="100"
                            x2="228"
                            y2="100"
                            stroke="transparent"
                            stroke-dasharray="0"
                          ></line>
                          <line
                            id="SvgjsLine1351"
                            x1="0"
                            y1="1"
                            x2="0"
                            y2="100"
                            stroke="transparent"
                            stroke-dasharray="0"
                          ></line>
                        </g>
                        <g
                          id="SvgjsG1336"
                          class="apexcharts-area-series apexcharts-plot-series"
                        >
                          <g
                            id="SvgjsG1337"
                            class="apexcharts-series"
                            seriesName="ProjectxDone"
                            data:longestSeries="true"
                            rel="1"
                            data:realIndex="0"
                          >
                            <path
                              id="undefined-0"
                              d="M 0 100L 0 77.77777777777777C 13.299999999999999 77.77777777777777 24.700000000000003 47.22222222222223 38 47.22222222222223C 51.3 47.22222222222223 62.7 86.1111111111111 76 86.1111111111111C 89.3 86.1111111111111 100.7 33.333333333333314 114 33.333333333333314C 127.3 33.333333333333314 138.7 55.55555555555554 152 55.55555555555554C 165.3 55.55555555555554 176.7 16.666666666666657 190 16.666666666666657C 203.3 16.666666666666657 214.7 58.333333333333314 228 58.333333333333314C 228 58.333333333333314 228 58.333333333333314 228 100M 228 58.333333333333314z"
                              fill="url(#SvgjsLinearGradient1340)"
                              fill-opacity="1"
                              stroke-opacity="1"
                              stroke-linecap="butt"
                              stroke-width="0"
                              stroke-dasharray="0"
                              class="apexcharts-area"
                              index="0"
                              clip-path="url(#gridRectMaskn0ald7vt)"
                              pathTo="M 0 100L 0 77.77777777777777C 13.299999999999999 77.77777777777777 24.700000000000003 47.22222222222223 38 47.22222222222223C 51.3 47.22222222222223 62.7 86.1111111111111 76 86.1111111111111C 89.3 86.1111111111111 100.7 33.333333333333314 114 33.333333333333314C 127.3 33.333333333333314 138.7 55.55555555555554 152 55.55555555555554C 165.3 55.55555555555554 176.7 16.666666666666657 190 16.666666666666657C 203.3 16.666666666666657 214.7 58.333333333333314 228 58.333333333333314C 228 58.333333333333314 228 58.333333333333314 228 100M 228 58.333333333333314z"
                              pathFrom="M -1 200L -1 200L 38 200L 76 200L 114 200L 152 200L 190 200L 228 200"
                            ></path>
                            <path
                              id="undefined-0"
                              d="M 0 77.77777777777777C 13.299999999999999 77.77777777777777 24.700000000000003 47.22222222222223 38 47.22222222222223C 51.3 47.22222222222223 62.7 86.1111111111111 76 86.1111111111111C 89.3 86.1111111111111 100.7 33.333333333333314 114 33.333333333333314C 127.3 33.333333333333314 138.7 55.55555555555554 152 55.55555555555554C 165.3 55.55555555555554 176.7 16.666666666666657 190 16.666666666666657C 203.3 16.666666666666657 214.7 58.333333333333314 228 58.333333333333314"
                              fill="none"
                              fill-opacity="1"
                              stroke="#d13b4c"
                              stroke-opacity="1"
                              stroke-linecap="butt"
                              stroke-width="2"
                              stroke-dasharray="0"
                              class="apexcharts-area"
                              index="0"
                              clip-path="url(#gridRectMaskn0ald7vt)"
                              pathTo="M 0 77.77777777777777C 13.299999999999999 77.77777777777777 24.700000000000003 47.22222222222223 38 47.22222222222223C 51.3 47.22222222222223 62.7 86.1111111111111 76 86.1111111111111C 89.3 86.1111111111111 100.7 33.333333333333314 114 33.333333333333314C 127.3 33.333333333333314 138.7 55.55555555555554 152 55.55555555555554C 165.3 55.55555555555554 176.7 16.666666666666657 190 16.666666666666657C 203.3 16.666666666666657 214.7 58.333333333333314 228 58.333333333333314"
                              pathFrom="M -1 200L -1 200L 38 200L 76 200L 114 200L 152 200L 190 200L 228 200"
                            ></path>
                            <g id="SvgjsG1338" class="apexcharts-series-markers-wrap">
                              <g class="apexcharts-series-markers">
                                <circle
                                  id="SvgjsCircle1358"
                                  r="0"
                                  cx="0"
                                  cy="0"
                                  class="apexcharts-marker wz7xvhzq3 no-pointer-events"
                                  stroke="#ffffff"
                                  fill="#d13b4c"
                                  fill-opacity="1"
                                  stroke-width="2"
                                  stroke-opacity="0.9"
                                  default-marker-size="0"
                                ></circle>
                              </g>
                            </g>
                            <g id="SvgjsG1339" class="apexcharts-datalabels"></g>
                          </g>
                        </g>
                        <line
                          id="SvgjsLine1353"
                          x1="0"
                          y1="0"
                          x2="228"
                          y2="0"
                          stroke="#b6b6b6"
                          stroke-dasharray="0"
                          stroke-width="1"
                          class="apexcharts-ycrosshairs"
                        ></line>
                        <line
                          id="SvgjsLine1354"
                          x1="0"
                          y1="0"
                          x2="228"
                          y2="0"
                          stroke-dasharray="0"
                          stroke-width="0"
                          class="apexcharts-ycrosshairs-hidden"
                        ></line>
                        <g id="SvgjsG1355" class="apexcharts-yaxis-annotations"></g>
                        <g id="SvgjsG1356" class="apexcharts-xaxis-annotations"></g>
                        <g id="SvgjsG1357" class="apexcharts-point-annotations"></g>
                      </g>
                      <rect
                        id="SvgjsRect1331"
                        width="0"
                        height="0"
                        x="0"
                        y="0"
                        rx="0"
                        ry="0"
                        fill="#fefefe"
                        opacity="1"
                        stroke-width="0"
                        stroke="none"
                        stroke-dasharray="0"
                      ></rect>
                      <g
                        id="SvgjsG1348"
                        class="apexcharts-yaxis"
                        rel="0"
                        transform="translate(-21, 0)"
                      >
                        <g id="SvgjsG1349" class="apexcharts-yaxis-texts-g"></g>
                      </g>
                    </svg>
                    <div class="apexcharts-legend"></div>
                    <div class="apexcharts-tooltip light">
                      <div
                        class="apexcharts-tooltip-title"
                        style="font-family: Inter; font-size: 12px"
                      ></div>
                      <div class="apexcharts-tooltip-series-group">
                        <span
                          class="apexcharts-tooltip-marker"
                          style="background-color: rgb(209, 59, 76)"
                        ></span>
                        <div
                          class="apexcharts-tooltip-text"
                          style="font-family: Inter; font-size: 12px"
                        >
                          <div class="apexcharts-tooltip-y-group">
                            <span class="apexcharts-tooltip-text-label"></span
                            ><span class="apexcharts-tooltip-text-value"></span>
                          </div>
                          <div class="apexcharts-tooltip-z-group">
                            <span class="apexcharts-tooltip-text-z-label"></span
                            ><span class="apexcharts-tooltip-text-z-value"></span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="fs-12 text-muted text-nowrap">
                  <span class="fw-semibold text-danger">42% more</span><br />
                  <span>from last week</span>
                </div>
                <div class="resize-triggers">
                  <div class="expand-trigger">
                    <div style="width: 382px; height: 151px"></div>
                  </div>
                  <div class="contract-trigger"></div>
                </div>
              </div>
            </div>
          </div>
          <!-- [Mini] end !-->
          <!-- [Leads Overview] start -->
          <div class="col-xxl-4">
            <div class="card stretch stretch-full">
              <div class="card-header">
                <h5 class="card-title">Leads Overview</h5>
                <div class="card-header-action">
                  <div class="card-header-btn">
                    <div
                      data-bs-toggle="tooltip"
                      title=""
                      data-bs-original-title="Delete"
                    >
                      <a
                        href="javascript:void(0);"
                        class="avatar-text avatar-xs bg-danger"
                        data-bs-toggle="remove"
                      >
                      </a>
                    </div>
                    <div
                      data-bs-toggle="tooltip"
                      title=""
                      data-bs-original-title="Refresh"
                    >
                      <a
                        href="javascript:void(0);"
                        class="avatar-text avatar-xs bg-warning"
                        data-bs-toggle="refresh"
                      >
                      </a>
                    </div>
                    <div
                      data-bs-toggle="tooltip"
                      title=""
                      data-bs-original-title="Maximize/Minimize"
                    >
                      <a
                        href="javascript:void(0);"
                        class="avatar-text avatar-xs bg-success"
                        data-bs-toggle="expand"
                      >
                      </a>
                    </div>
                  </div>
                  <div class="dropdown">
                    <a
                      href="javascript:void(0);"
                      class="avatar-text avatar-sm"
                      data-bs-toggle="dropdown"
                      data-bs-offset="25, 25"
                    >
                      <div
                        data-bs-toggle="tooltip"
                        title=""
                        data-bs-original-title="Options"
                      >
                        <i class="feather-more-vertical"></i>
                      </div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end">
                      <a href="javascript:void(0);" class="dropdown-item"
                        ><i class="feather-at-sign"></i>New</a
                      >
                      <a href="javascript:void(0);" class="dropdown-item"
                        ><i class="feather-calendar"></i>Event</a
                      >
                      <a href="javascript:void(0);" class="dropdown-item"
                        ><i class="feather-bell"></i>Snoozed</a
                      >
                      <a href="javascript:void(0);" class="dropdown-item"
                        ><i class="feather-trash-2"></i>Deleted</a
                      >
                      <div class="dropdown-divider"></div>
                      <a href="javascript:void(0);" class="dropdown-item"
                        ><i class="feather-settings"></i>Settings</a
                      >
                      <a href="javascript:void(0);" class="dropdown-item"
                        ><i class="feather-life-buoy"></i>Tips &amp; Tricks</a
                      >
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-body custom-card-action" style="position: relative">
                <div id="leads-overview-donut" style="min-height: 286.39px">
                  <div
                    id="apexchartszdztsiiuf"
                    class="apexcharts-canvas apexchartszdztsiiuf light"
                    style="width: 328px; height: 286.39px"
                  >
                    <svg
                      id="SvgjsSvg1486"
                      width="328"
                      height="286.39024390243907"
                      xmlns="http://www.w3.org/2000/svg"
                      version="1.1"
                      xmlns:xlink="http://www.w3.org/1999/xlink"
                      xmlns:svgjs="http://svgjs.com/svgjs"
                      class="apexcharts-svg"
                      xmlns:data="ApexChartsNS"
                      transform="translate(0, 0)"
                      style="background: transparent"
                    >
                      <g
                        id="SvgjsG1488"
                        class="apexcharts-inner apexcharts-graphical"
                        transform="translate(29.5, 0)"
                      >
                        <defs id="SvgjsDefs1487">
                          <clipPath id="gridRectMaskzdztsiiuf">
                            <rect
                              id="SvgjsRect1489"
                              width="271"
                              height="293"
                              x="0"
                              y="0"
                              rx="0"
                              ry="0"
                              fill="#ffffff"
                              opacity="1"
                              stroke-width="0"
                              stroke="none"
                              stroke-dasharray="0"
                            ></rect>
                          </clipPath>
                          <clipPath id="gridRectMarkerMaskzdztsiiuf">
                            <rect
                              id="SvgjsRect1490"
                              width="273"
                              height="295"
                              x="-1"
                              y="-1"
                              rx="0"
                              ry="0"
                              fill="#ffffff"
                              opacity="1"
                              stroke-width="0"
                              stroke="none"
                              stroke-dasharray="0"
                            ></rect>
                          </clipPath>
                        </defs>
                        <g
                          id="SvgjsG1492"
                          class="apexcharts-pie"
                          data:innerTranslateX="0"
                          data:innerTranslateY="-25"
                        >
                          <g id="SvgjsG1493" transform="translate(0, -5) scale(1)">
                            <circle
                              id="SvgjsCircle1494"
                              r="108.9658536585366"
                              cx="135.5"
                              cy="135.5"
                              fill="transparent"
                            ></circle>
                            <g id="SvgjsG1495" class="apexcharts-slices">
                              <g
                                id="SvgjsG1496"
                                class="apexcharts-series apexcharts-pie-series"
                                seriesName="New"
                                rel="1"
                                data:realIndex="0"
                              >
                                <path
                                  id="SvgjsPath1497"
                                  d="M 135.5 7.304878048780466 A 128.19512195121953 128.19512195121953 0 0 1 242.09034834785803 64.27860622558464 L 226.1017960956793 74.96181529174694 A 108.9658536585366 108.9658536585366 0 0 0 135.5 26.534146341463398 L 135.5 7.304878048780466 z"
                                  fill="rgba(52,84,209,1)"
                                  fill-opacity="1"
                                  stroke-opacity="1"
                                  stroke-linecap="round"
                                  stroke-width="0"
                                  stroke-dasharray="0"
                                  class="apexcharts-pie-area apexcharts-donut-slice-0"
                                  index="0"
                                  j="0"
                                  data:angle="56.25"
                                  data:startAngle="0"
                                  data:strokeWidth="0"
                                  data:value="20"
                                  data:pathOrig="M 135.5 7.304878048780466 A 128.19512195121953 128.19512195121953 0 0 1 242.09034834785803 64.27860622558464 L 226.1017960956793 74.96181529174694 A 108.9658536585366 108.9658536585366 0 0 0 135.5 26.534146341463398 L 135.5 7.304878048780466 z"
                                ></path>
                              </g>
                              <g
                                id="SvgjsG1498"
                                class="apexcharts-series apexcharts-pie-series"
                                seriesName="Contacted"
                                rel="2"
                                data:realIndex="1"
                              >
                                <path
                                  id="SvgjsPath1499"
                                  d="M 242.09034834785803 64.27860622558464 A 128.19512195121953 128.19512195121953 0 0 1 262.30760332621685 154.3101310667654 L 243.2864628272843 151.48861140675058 A 108.9658536585366 108.9658536585366 0 0 0 226.1017960956793 74.96181529174694 L 242.09034834785803 64.27860622558464 z"
                                  fill="rgba(21,101,192,1)"
                                  fill-opacity="1"
                                  stroke-opacity="1"
                                  stroke-linecap="round"
                                  stroke-width="0"
                                  stroke-dasharray="0"
                                  class="apexcharts-pie-area apexcharts-donut-slice-1"
                                  index="0"
                                  j="1"
                                  data:angle="42.1875"
                                  data:startAngle="56.25"
                                  data:strokeWidth="0"
                                  data:value="15"
                                  data:pathOrig="M 242.09034834785803 64.27860622558464 A 128.19512195121953 128.19512195121953 0 0 1 262.30760332621685 154.3101310667654 L 243.2864628272843 151.48861140675058 A 108.9658536585366 108.9658536585366 0 0 0 226.1017960956793 74.96181529174694 L 242.09034834785803 64.27860622558464 z"
                                ></path>
                              </g>
                              <g
                                id="SvgjsG1500"
                                class="apexcharts-series apexcharts-pie-series"
                                seriesName="Qualified"
                                rel="3"
                                data:realIndex="2"
                              >
                                <path
                                  id="SvgjsPath1501"
                                  d="M 262.30760332621685 154.3101310667654 A 128.19512195121953 128.19512195121953 0 0 1 238.4672874502993 211.86574498566415 L 223.0221943327544 200.41088323781452 A 108.9658536585366 108.9658536585366 0 0 0 243.2864628272843 151.48861140675058 L 262.30760332621685 154.3101310667654 z"
                                  fill="rgba(25,118,210,1)"
                                  fill-opacity="1"
                                  stroke-opacity="1"
                                  stroke-linecap="round"
                                  stroke-width="0"
                                  stroke-dasharray="0"
                                  class="apexcharts-pie-area apexcharts-donut-slice-2"
                                  index="0"
                                  j="2"
                                  data:angle="28.125"
                                  data:startAngle="98.4375"
                                  data:strokeWidth="0"
                                  data:value="10"
                                  data:pathOrig="M 262.30760332621685 154.3101310667654 A 128.19512195121953 128.19512195121953 0 0 1 238.4672874502993 211.86574498566415 L 223.0221943327544 200.41088323781452 A 108.9658536585366 108.9658536585366 0 0 0 243.2864628272843 151.48861140675058 L 262.30760332621685 154.3101310667654 z"
                                ></path>
                              </g>
                              <g
                                id="SvgjsG1502"
                                class="apexcharts-series apexcharts-pie-series"
                                seriesName="Working"
                                rel="4"
                                data:realIndex="3"
                              >
                                <path
                                  id="SvgjsPath1503"
                                  d="M 238.4672874502993 211.86574498566415 A 128.19512195121953 128.19512195121953 0 0 1 141.79023649426608 263.54070531254604 L 140.84670102012618 244.33459951566414 A 108.9658536585366 108.9658536585366 0 0 0 223.0221943327544 200.41088323781452 L 238.4672874502993 211.86574498566415 z"
                                  fill="rgba(30,136,229,1)"
                                  fill-opacity="1"
                                  stroke-opacity="1"
                                  stroke-linecap="round"
                                  stroke-width="0"
                                  stroke-dasharray="0"
                                  class="apexcharts-pie-area apexcharts-donut-slice-3"
                                  index="0"
                                  j="3"
                                  data:angle="50.625"
                                  data:startAngle="126.5625"
                                  data:strokeWidth="0"
                                  data:value="18"
                                  data:pathOrig="M 238.4672874502993 211.86574498566415 A 128.19512195121953 128.19512195121953 0 0 1 141.79023649426608 263.54070531254604 L 140.84670102012618 244.33459951566414 A 108.9658536585366 108.9658536585366 0 0 0 223.0221943327544 200.41088323781452 L 238.4672874502993 211.86574498566415 z"
                                ></path>
                              </g>
                              <g
                                id="SvgjsG1504"
                                class="apexcharts-series apexcharts-pie-series"
                                seriesName="Customer"
                                rel="5"
                                data:realIndex="4"
                              >
                                <path
                                  id="SvgjsPath1505"
                                  d="M 141.79023649426608 263.54070531254604 A 128.19512195121953 128.19512195121953 0 0 1 80.6895226568399 251.38701767455655 L 88.91109425831392 234.00396502337307 A 108.9658536585366 108.9658536585366 0 0 0 140.84670102012618 244.33459951566414 L 141.79023649426608 263.54070531254604 z"
                                  fill="rgba(33,150,243,1)"
                                  fill-opacity="1"
                                  stroke-opacity="1"
                                  stroke-linecap="round"
                                  stroke-width="0"
                                  stroke-dasharray="0"
                                  class="apexcharts-pie-area apexcharts-donut-slice-4"
                                  index="0"
                                  j="4"
                                  data:angle="28.125"
                                  data:startAngle="177.1875"
                                  data:strokeWidth="0"
                                  data:value="10"
                                  data:pathOrig="M 141.79023649426608 263.54070531254604 A 128.19512195121953 128.19512195121953 0 0 1 80.6895226568399 251.38701767455655 L 88.91109425831392 234.00396502337307 A 108.9658536585366 108.9658536585366 0 0 0 140.84670102012618 244.33459951566414 L 141.79023649426608 263.54070531254604 z"
                                ></path>
                              </g>
                              <g
                                id="SvgjsG1506"
                                class="apexcharts-series apexcharts-pie-series"
                                seriesName="Proposal"
                                rel="6"
                                data:realIndex="5"
                              >
                                <path
                                  id="SvgjsPath1507"
                                  d="M 80.6895226568399 251.38701767455655 A 128.19512195121953 128.19512195121953 0 0 1 17.06315066147991 184.55814928075398 L 34.82867806225792 177.19942688864086 A 108.9658536585366 108.9658536585366 0 0 0 88.91109425831392 234.00396502337307 L 80.6895226568399 251.38701767455655 z"
                                  fill="rgba(66,165,245,1)"
                                  fill-opacity="1"
                                  stroke-opacity="1"
                                  stroke-linecap="round"
                                  stroke-width="0"
                                  stroke-dasharray="0"
                                  class="apexcharts-pie-area apexcharts-donut-slice-5"
                                  index="0"
                                  j="5"
                                  data:angle="42.1875"
                                  data:startAngle="205.3125"
                                  data:strokeWidth="0"
                                  data:value="15"
                                  data:pathOrig="M 80.6895226568399 251.38701767455655 A 128.19512195121953 128.19512195121953 0 0 1 17.06315066147991 184.55814928075398 L 34.82867806225792 177.19942688864086 A 108.9658536585366 108.9658536585366 0 0 0 88.91109425831392 234.00396502337307 L 80.6895226568399 251.38701767455655 z"
                                ></path>
                              </g>
                              <g
                                id="SvgjsG1508"
                                class="apexcharts-series apexcharts-pie-series"
                                seriesName="Leads"
                                rel="7"
                                data:realIndex="6"
                              >
                                <path
                                  id="SvgjsPath1509"
                                  d="M 17.06315066147991 184.55814928075398 A 128.19512195121953 128.19512195121953 0 0 1 17.06315066147988 86.4418507192461 L 34.82867806225789 93.8005731113592 A 108.9658536585366 108.9658536585366 0 0 0 34.82867806225792 177.19942688864086 L 17.06315066147991 184.55814928075398 z"
                                  fill="rgba(100,181,246,1)"
                                  fill-opacity="1"
                                  stroke-opacity="1"
                                  stroke-linecap="round"
                                  stroke-width="0"
                                  stroke-dasharray="0"
                                  class="apexcharts-pie-area apexcharts-donut-slice-6"
                                  index="0"
                                  j="6"
                                  data:angle="45"
                                  data:startAngle="247.5"
                                  data:strokeWidth="0"
                                  data:value="16"
                                  data:pathOrig="M 17.06315066147991 184.55814928075398 A 128.19512195121953 128.19512195121953 0 0 1 17.06315066147988 86.4418507192461 L 34.82867806225789 93.8005731113592 A 108.9658536585366 108.9658536585366 0 0 0 34.82867806225792 177.19942688864086 L 17.06315066147991 184.55814928075398 z"
                                ></path>
                              </g>
                              <g
                                id="SvgjsG1510"
                                class="apexcharts-series apexcharts-pie-series"
                                seriesName="Prograss"
                                rel="8"
                                data:realIndex="7"
                              >
                                <path
                                  id="SvgjsPath1511"
                                  d="M 17.06315066147988 86.4418507192461 A 128.19512195121953 128.19512195121953 0 0 1 75.06923783518425 22.441995965488914 L 84.13385215990662 39.40069657066559 A 108.9658536585366 108.9658536585366 0 0 0 34.82867806225789 93.8005731113592 L 17.06315066147988 86.4418507192461 z"
                                  fill="rgba(144,202,249,1)"
                                  fill-opacity="1"
                                  stroke-opacity="1"
                                  stroke-linecap="round"
                                  stroke-width="0"
                                  stroke-dasharray="0"
                                  class="apexcharts-pie-area apexcharts-donut-slice-7"
                                  index="0"
                                  j="7"
                                  data:angle="39.375"
                                  data:startAngle="292.5"
                                  data:strokeWidth="0"
                                  data:value="14"
                                  data:pathOrig="M 17.06315066147988 86.4418507192461 A 128.19512195121953 128.19512195121953 0 0 1 75.06923783518425 22.441995965488914 L 84.13385215990662 39.40069657066559 A 108.9658536585366 108.9658536585366 0 0 0 34.82867806225789 93.8005731113592 L 17.06315066147988 86.4418507192461 z"
                                ></path>
                              </g>
                              <g
                                id="SvgjsG1512"
                                class="apexcharts-series apexcharts-pie-series"
                                seriesName="Others"
                                rel="9"
                                data:realIndex="8"
                              >
                                <path
                                  id="SvgjsPath1513"
                                  d="M 75.06923783518425 22.441995965488914 A 128.19512195121953 128.19512195121953 0 0 1 135.47762573048314 7.304880001303815 L 135.48098187091065 26.53414800110825 A 108.9658536585366 108.9658536585366 0 0 0 84.13385215990662 39.40069657066559 L 75.06923783518425 22.441995965488914 z"
                                  fill="rgba(170,214,250,1)"
                                  fill-opacity="1"
                                  stroke-opacity="1"
                                  stroke-linecap="round"
                                  stroke-width="0"
                                  stroke-dasharray="0"
                                  class="apexcharts-pie-area apexcharts-donut-slice-8"
                                  index="0"
                                  j="8"
                                  data:angle="28.125"
                                  data:startAngle="331.875"
                                  data:strokeWidth="0"
                                  data:value="10"
                                  data:pathOrig="M 75.06923783518425 22.441995965488914 A 128.19512195121953 128.19512195121953 0 0 1 135.47762573048314 7.304880001303815 L 135.48098187091065 26.53414800110825 A 108.9658536585366 108.9658536585366 0 0 0 84.13385215990662 39.40069657066559 L 75.06923783518425 22.441995965488914 z"
                                ></path>
                              </g>
                            </g>
                          </g>
                        </g>
                        <line
                          id="SvgjsLine1514"
                          x1="0"
                          y1="0"
                          x2="271"
                          y2="0"
                          stroke="#b6b6b6"
                          stroke-dasharray="0"
                          stroke-width="1"
                          class="apexcharts-ycrosshairs"
                        ></line>
                        <line
                          id="SvgjsLine1515"
                          x1="0"
                          y1="0"
                          x2="271"
                          y2="0"
                          stroke-dasharray="0"
                          stroke-width="0"
                          class="apexcharts-ycrosshairs-hidden"
                        ></line>
                      </g>
                    </svg>
                    <div class="apexcharts-legend"></div>
                    <div class="apexcharts-tooltip dark">
                      <div class="apexcharts-tooltip-series-group">
                        <span
                          class="apexcharts-tooltip-marker"
                          style="background-color: rgb(52, 84, 209)"
                        ></span>
                        <div
                          class="apexcharts-tooltip-text"
                          style="font-family: Inter; font-size: 12px"
                        >
                          <div class="apexcharts-tooltip-y-group">
                            <span class="apexcharts-tooltip-text-label"></span
                            ><span class="apexcharts-tooltip-text-value"></span>
                          </div>
                          <div class="apexcharts-tooltip-z-group">
                            <span class="apexcharts-tooltip-text-z-label"></span
                            ><span class="apexcharts-tooltip-text-z-value"></span>
                          </div>
                        </div>
                      </div>
                      <div class="apexcharts-tooltip-series-group">
                        <span
                          class="apexcharts-tooltip-marker"
                          style="background-color: rgb(21, 101, 192)"
                        ></span>
                        <div
                          class="apexcharts-tooltip-text"
                          style="font-family: Inter; font-size: 12px"
                        >
                          <div class="apexcharts-tooltip-y-group">
                            <span class="apexcharts-tooltip-text-label"></span
                            ><span class="apexcharts-tooltip-text-value"></span>
                          </div>
                          <div class="apexcharts-tooltip-z-group">
                            <span class="apexcharts-tooltip-text-z-label"></span
                            ><span class="apexcharts-tooltip-text-z-value"></span>
                          </div>
                        </div>
                      </div>
                      <div class="apexcharts-tooltip-series-group">
                        <span
                          class="apexcharts-tooltip-marker"
                          style="background-color: rgb(25, 118, 210)"
                        ></span>
                        <div
                          class="apexcharts-tooltip-text"
                          style="font-family: Inter; font-size: 12px"
                        >
                          <div class="apexcharts-tooltip-y-group">
                            <span class="apexcharts-tooltip-text-label"></span
                            ><span class="apexcharts-tooltip-text-value"></span>
                          </div>
                          <div class="apexcharts-tooltip-z-group">
                            <span class="apexcharts-tooltip-text-z-label"></span
                            ><span class="apexcharts-tooltip-text-z-value"></span>
                          </div>
                        </div>
                      </div>
                      <div class="apexcharts-tooltip-series-group">
                        <span
                          class="apexcharts-tooltip-marker"
                          style="background-color: rgb(30, 136, 229)"
                        ></span>
                        <div
                          class="apexcharts-tooltip-text"
                          style="font-family: Inter; font-size: 12px"
                        >
                          <div class="apexcharts-tooltip-y-group">
                            <span class="apexcharts-tooltip-text-label"></span
                            ><span class="apexcharts-tooltip-text-value"></span>
                          </div>
                          <div class="apexcharts-tooltip-z-group">
                            <span class="apexcharts-tooltip-text-z-label"></span
                            ><span class="apexcharts-tooltip-text-z-value"></span>
                          </div>
                        </div>
                      </div>
                      <div class="apexcharts-tooltip-series-group">
                        <span
                          class="apexcharts-tooltip-marker"
                          style="background-color: rgb(33, 150, 243)"
                        ></span>
                        <div
                          class="apexcharts-tooltip-text"
                          style="font-family: Inter; font-size: 12px"
                        >
                          <div class="apexcharts-tooltip-y-group">
                            <span class="apexcharts-tooltip-text-label"></span
                            ><span class="apexcharts-tooltip-text-value"></span>
                          </div>
                          <div class="apexcharts-tooltip-z-group">
                            <span class="apexcharts-tooltip-text-z-label"></span
                            ><span class="apexcharts-tooltip-text-z-value"></span>
                          </div>
                        </div>
                      </div>
                      <div class="apexcharts-tooltip-series-group">
                        <span
                          class="apexcharts-tooltip-marker"
                          style="background-color: rgb(66, 165, 245)"
                        ></span>
                        <div
                          class="apexcharts-tooltip-text"
                          style="font-family: Inter; font-size: 12px"
                        >
                          <div class="apexcharts-tooltip-y-group">
                            <span class="apexcharts-tooltip-text-label"></span
                            ><span class="apexcharts-tooltip-text-value"></span>
                          </div>
                          <div class="apexcharts-tooltip-z-group">
                            <span class="apexcharts-tooltip-text-z-label"></span
                            ><span class="apexcharts-tooltip-text-z-value"></span>
                          </div>
                        </div>
                      </div>
                      <div class="apexcharts-tooltip-series-group">
                        <span
                          class="apexcharts-tooltip-marker"
                          style="background-color: rgb(100, 181, 246)"
                        ></span>
                        <div
                          class="apexcharts-tooltip-text"
                          style="font-family: Inter; font-size: 12px"
                        >
                          <div class="apexcharts-tooltip-y-group">
                            <span class="apexcharts-tooltip-text-label"></span
                            ><span class="apexcharts-tooltip-text-value"></span>
                          </div>
                          <div class="apexcharts-tooltip-z-group">
                            <span class="apexcharts-tooltip-text-z-label"></span
                            ><span class="apexcharts-tooltip-text-z-value"></span>
                          </div>
                        </div>
                      </div>
                      <div class="apexcharts-tooltip-series-group">
                        <span
                          class="apexcharts-tooltip-marker"
                          style="background-color: rgb(144, 202, 249)"
                        ></span>
                        <div
                          class="apexcharts-tooltip-text"
                          style="font-family: Inter; font-size: 12px"
                        >
                          <div class="apexcharts-tooltip-y-group">
                            <span class="apexcharts-tooltip-text-label"></span
                            ><span class="apexcharts-tooltip-text-value"></span>
                          </div>
                          <div class="apexcharts-tooltip-z-group">
                            <span class="apexcharts-tooltip-text-z-label"></span
                            ><span class="apexcharts-tooltip-text-z-value"></span>
                          </div>
                        </div>
                      </div>
                      <div class="apexcharts-tooltip-series-group">
                        <span
                          class="apexcharts-tooltip-marker"
                          style="background-color: rgb(170, 214, 250)"
                        ></span>
                        <div
                          class="apexcharts-tooltip-text"
                          style="font-family: Inter; font-size: 12px"
                        >
                          <div class="apexcharts-tooltip-y-group">
                            <span class="apexcharts-tooltip-text-label"></span
                            ><span class="apexcharts-tooltip-text-value"></span>
                          </div>
                          <div class="apexcharts-tooltip-z-group">
                            <span class="apexcharts-tooltip-text-z-label"></span
                            ><span class="apexcharts-tooltip-text-z-value"></span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row g-2">
                  <div class="col-4">
                    <a
                      href="javascript:void(0);"
                      class="p-2 hstack gap-2 rounded border border-dashed border-gray-5"
                    >
                      <span
                        class="wd-7 ht-7 rounded-circle d-inline-block"
                        style="background-color: #3454d1"
                      ></span>
                      <span>New<span class="fs-10 text-muted ms-1">(20K)</span></span>
                    </a>
                  </div>
                  <div class="col-4">
                    <a
                      href="javascript:void(0);"
                      class="p-2 hstack gap-2 rounded border border-dashed border-gray-5"
                    >
                      <span
                        class="wd-7 ht-7 rounded-circle d-inline-block"
                        style="background-color: #0d519e"
                      ></span>
                      <span
                        >Contacted<span class="fs-10 text-muted ms-1">(15K)</span></span
                      >
                    </a>
                  </div>
                  <div class="col-4">
                    <a
                      href="javascript:void(0);"
                      class="p-2 hstack gap-2 rounded border border-dashed border-gray-5"
                    >
                      <span
                        class="wd-7 ht-7 rounded-circle d-inline-block"
                        style="background-color: #1976d2"
                      ></span>
                      <span
                        >Qualified<span class="fs-10 text-muted ms-1">(10K)</span></span
                      >
                    </a>
                  </div>
                  <div class="col-4">
                    <a
                      href="javascript:void(0);"
                      class="p-2 hstack gap-2 rounded border border-dashed border-gray-5"
                    >
                      <span
                        class="wd-7 ht-7 rounded-circle d-inline-block"
                        style="background-color: #1e88e5"
                      ></span>
                      <span>Working<span class="fs-10 text-muted ms-1">(18K)</span></span>
                    </a>
                  </div>
                  <div class="col-4">
                    <a
                      href="javascript:void(0);"
                      class="p-2 hstack gap-2 rounded border border-dashed border-gray-5"
                    >
                      <span
                        class="wd-7 ht-7 rounded-circle d-inline-block"
                        style="background-color: #2196f3"
                      ></span>
                      <span
                        >Customer<span class="fs-10 text-muted ms-1">(10K)</span></span
                      >
                    </a>
                  </div>
                  <div class="col-4">
                    <a
                      href="javascript:void(0);"
                      class="p-2 hstack gap-2 rounded border border-dashed border-gray-5"
                    >
                      <span
                        class="wd-7 ht-7 rounded-circle d-inline-block"
                        style="background-color: #42a5f5"
                      ></span>
                      <span
                        >Proposal<span class="fs-10 text-muted ms-1">(15K)</span></span
                      >
                    </a>
                  </div>
                  <div class="col-4">
                    <a
                      href="javascript:void(0);"
                      class="p-2 hstack gap-2 rounded border border-dashed border-gray-5"
                    >
                      <span
                        class="wd-7 ht-7 rounded-circle d-inline-block"
                        style="background-color: #64b5f6"
                      ></span>
                      <span>Leads<span class="fs-10 text-muted ms-1">(16K)</span></span>
                    </a>
                  </div>
                  <div class="col-4">
                    <a
                      href="javascript:void(0);"
                      class="p-2 hstack gap-2 rounded border border-dashed border-gray-5"
                    >
                      <span
                        class="wd-7 ht-7 rounded-circle d-inline-block"
                        style="background-color: #90caf9"
                      ></span>
                      <span
                        >Progress<span class="fs-10 text-muted ms-1">(14K)</span></span
                      >
                    </a>
                  </div>
                  <div class="col-4">
                    <a
                      href="javascript:void(0);"
                      class="p-2 hstack gap-2 rounded border border-dashed border-gray-5"
                    >
                      <span
                        class="wd-7 ht-7 rounded-circle d-inline-block"
                        style="background-color: #aad6fa"
                      ></span>
                      <span>Others<span class="fs-10 text-muted ms-1">(10K)</span></span>
                    </a>
                  </div>
                </div>
                <div class="resize-triggers">
                  <div class="expand-trigger">
                    <div style="width: 1196px; height: 472px"></div>
                  </div>
                  <div class="contract-trigger"></div>
                </div>
              </div>
            </div>
          </div>
          <!-- [Leads Overview] end -->
          <!-- [Latest Leads] start -->
          <div class="col-xxl-8">
            <div class="card stretch stretch-full">
              <div class="card-header">
                <h5 class="card-title">Latest Leads</h5>
                <div class="card-header-action">
                  <div class="card-header-btn">
                    <div
                      data-bs-toggle="tooltip"
                      title=""
                      data-bs-original-title="Delete"
                    >
                      <a
                        href="javascript:void(0);"
                        class="avatar-text avatar-xs bg-danger"
                        data-bs-toggle="remove"
                      >
                      </a>
                    </div>
                    <div
                      data-bs-toggle="tooltip"
                      title=""
                      data-bs-original-title="Refresh"
                    >
                      <a
                        href="javascript:void(0);"
                        class="avatar-text avatar-xs bg-warning"
                        data-bs-toggle="refresh"
                      >
                      </a>
                    </div>
                    <div
                      data-bs-toggle="tooltip"
                      title=""
                      data-bs-original-title="Maximize/Minimize"
                    >
                      <a
                        href="javascript:void(0);"
                        class="avatar-text avatar-xs bg-success"
                        data-bs-toggle="expand"
                      >
                      </a>
                    </div>
                  </div>
                  <div class="dropdown">
                    <a
                      href="javascript:void(0);"
                      class="avatar-text avatar-sm"
                      data-bs-toggle="dropdown"
                      data-bs-offset="25, 25"
                    >
                      <div
                        data-bs-toggle="tooltip"
                        title=""
                        data-bs-original-title="Options"
                      >
                        <i class="feather-more-vertical"></i>
                      </div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end">
                      <a href="javascript:void(0);" class="dropdown-item"
                        ><i class="feather-at-sign"></i>New</a
                      >
                      <a href="javascript:void(0);" class="dropdown-item"
                        ><i class="feather-calendar"></i>Event</a
                      >
                      <a href="javascript:void(0);" class="dropdown-item"
                        ><i class="feather-bell"></i>Snoozed</a
                      >
                      <a href="javascript:void(0);" class="dropdown-item"
                        ><i class="feather-trash-2"></i>Deleted</a
                      >
                      <div class="dropdown-divider"></div>
                      <a href="javascript:void(0);" class="dropdown-item"
                        ><i class="feather-settings"></i>Settings</a
                      >
                      <a href="javascript:void(0);" class="dropdown-item"
                        ><i class="feather-life-buoy"></i>Tips &amp; Tricks</a
                      >
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-body custom-card-action p-0">
                <div class="table-responsive">
                  <table class="table table-hover mb-0">
                    <thead>
                      <tr class="border-b">
                        <th scope="row">Users</th>
                        <th>Proposal</th>
                        <th>Date</th>
                        <th>Status</th>
                        <th class="text-end">Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                          <div class="d-flex align-items-center gap-3">
                            <div class="avatar-image">
                              <img
                                src="assets/images/avatar/2.png"
                                alt=""
                                class="img-fluid"
                              />
                            </div>
                            <a href="javascript:void(0);">
                              <span class="d-block">Archie Cantones</span>
                              <span class="fs-12 d-block fw-normal text-muted"
                                >arcie.tones@gmail.com</span
                              >
                            </a>
                          </div>
                        </td>
                        <td>
                          <span class="badge bg-gray-200 text-dark">Sent</span>
                        </td>
                        <td>11/06/2023 10:53</td>
                        <td>
                          <span class="badge bg-soft-success text-success"
                            >Completed</span
                          >
                        </td>
                        <td class="text-end">
                          <a href="javascript:void(0);"
                            ><i class="feather-more-vertical"></i
                          ></a>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="d-flex align-items-center gap-3">
                            <div class="avatar-image">
                              <img
                                src="assets/images/avatar/3.png"
                                alt=""
                                class="img-fluid"
                              />
                            </div>
                            <a href="javascript:void(0);">
                              <span class="d-block">Holmes Cherryman</span>
                              <span class="fs-12 d-block fw-normal text-muted"
                                >golms.chan@gmail.com</span
                              >
                            </a>
                          </div>
                        </td>
                        <td>
                          <span class="badge bg-gray-200 text-dark">New</span>
                        </td>
                        <td>11/06/2023 10:53</td>
                        <td>
                          <span class="badge bg-soft-primary text-primary"
                            >In Progress
                          </span>
                        </td>
                        <td class="text-end">
                          <a href="javascript:void(0);"
                            ><i class="feather-more-vertical"></i
                          ></a>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="d-flex align-items-center gap-3">
                            <div class="avatar-image">
                              <img
                                src="assets/images/avatar/4.png"
                                alt=""
                                class="img-fluid"
                              />
                            </div>
                            <a href="javascript:void(0);">
                              <span class="d-block">Malanie Hanvey</span>
                              <span class="fs-12 d-block fw-normal text-muted"
                                >lanie.nveyn@gmail.com</span
                              >
                            </a>
                          </div>
                        </td>
                        <td>
                          <span class="badge bg-gray-200 text-dark">Sent</span>
                        </td>
                        <td>11/06/2023 10:53</td>
                        <td>
                          <span class="badge bg-soft-success text-success"
                            >Completed</span
                          >
                        </td>
                        <td class="text-end">
                          <a href="javascript:void(0);"
                            ><i class="feather-more-vertical"></i
                          ></a>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="d-flex align-items-center gap-3">
                            <div class="avatar-image">
                              <img
                                src="assets/images/avatar/5.png"
                                alt=""
                                class="img-fluid"
                              />
                            </div>
                            <a href="javascript:void(0);">
                              <span class="d-block">Kenneth Hune</span>
                              <span class="fs-12 d-block fw-normal text-muted"
                                >nneth.une@gmail.com</span
                              >
                            </a>
                          </div>
                        </td>
                        <td>
                          <span class="badge bg-gray-200 text-dark">Returning</span>
                        </td>
                        <td>11/06/2023 10:53</td>
                        <td>
                          <span class="badge bg-soft-warning text-warning"
                            >Not Interested</span
                          >
                        </td>
                        <td class="text-end">
                          <a href="javascript:void(0);"
                            ><i class="feather-more-vertical"></i
                          ></a>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="d-flex align-items-center gap-3">
                            <div class="avatar-image">
                              <img
                                src="assets/images/avatar/6.png"
                                alt=""
                                class="img-fluid"
                              />
                            </div>
                            <a href="javascript:void(0);">
                              <span class="d-block">Valentine Maton</span>
                              <span class="fs-12 d-block fw-normal text-muted"
                                >alenine.aton@gmail.com</span
                              >
                            </a>
                          </div>
                        </td>
                        <td>
                          <span class="badge bg-gray-200 text-dark">Sent</span>
                        </td>
                        <td>11/06/2023 10:53</td>
                        <td>
                          <span class="badge bg-soft-success text-success"
                            >Completed</span
                          >
                        </td>
                        <td class="text-end">
                          <a href="javascript:void(0);"
                            ><i class="feather-more-vertical"></i
                          ></a>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              <div class="card-footer">
                <ul
                  class="list-unstyled d-flex align-items-center gap-2 mb-0 pagination-common-style"
                >
                  <li>
                    <a href="javascript:void(0);"><i class="bi bi-arrow-left"></i></a>
                  </li>
                  <li><a href="javascript:void(0);" class="active">1</a></li>
                  <li><a href="javascript:void(0);">2</a></li>
                  <li>
                    <a href="javascript:void(0);"><i class="bi bi-dot"></i></a>
                  </li>
                  <li><a href="javascript:void(0);">8</a></li>
                  <li><a href="javascript:void(0);">9</a></li>
                  <li>
                    <a href="javascript:void(0);"><i class="bi bi-arrow-right"></i></a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <!-- [Latest Leads] end -->
          <!--! BEGIN: [Upcoming Schedule] !-->
          <div class="col-xxl-4">
            <div class="card stretch stretch-full">
              <div class="card-header">
                <h5 class="card-title">Upcoming Schedule</h5>
                <div class="card-header-action">
                  <div class="card-header-btn">
                    <div
                      data-bs-toggle="tooltip"
                      title=""
                      data-bs-original-title="Delete"
                    >
                      <a
                        href="javascript:void(0);"
                        class="avatar-text avatar-xs bg-danger"
                        data-bs-toggle="remove"
                      >
                      </a>
                    </div>
                    <div
                      data-bs-toggle="tooltip"
                      title=""
                      data-bs-original-title="Refresh"
                    >
                      <a
                        href="javascript:void(0);"
                        class="avatar-text avatar-xs bg-warning"
                        data-bs-toggle="refresh"
                      >
                      </a>
                    </div>
                    <div
                      data-bs-toggle="tooltip"
                      title=""
                      data-bs-original-title="Maximize/Minimize"
                    >
                      <a
                        href="javascript:void(0);"
                        class="avatar-text avatar-xs bg-success"
                        data-bs-toggle="expand"
                      >
                      </a>
                    </div>
                  </div>
                  <div class="dropdown">
                    <a
                      href="javascript:void(0);"
                      class="avatar-text avatar-sm"
                      data-bs-toggle="dropdown"
                      data-bs-offset="25, 25"
                    >
                      <div
                        data-bs-toggle="tooltip"
                        title=""
                        data-bs-original-title="Options"
                      >
                        <i class="feather-more-vertical"></i>
                      </div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end">
                      <a href="javascript:void(0);" class="dropdown-item"
                        ><i class="feather-at-sign"></i>New</a
                      >
                      <a href="javascript:void(0);" class="dropdown-item"
                        ><i class="feather-calendar"></i>Event</a
                      >
                      <a href="javascript:void(0);" class="dropdown-item"
                        ><i class="feather-bell"></i>Snoozed</a
                      >
                      <a href="javascript:void(0);" class="dropdown-item"
                        ><i class="feather-trash-2"></i>Deleted</a
                      >
                      <div class="dropdown-divider"></div>
                      <a href="javascript:void(0);" class="dropdown-item"
                        ><i class="feather-settings"></i>Settings</a
                      >
                      <a href="javascript:void(0);" class="dropdown-item"
                        ><i class="feather-life-buoy"></i>Tips &amp; Tricks</a
                      >
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-body">
                <!--! BEGIN: [Events] !-->
                <div class="p-3 border border-dashed rounded-3 mb-3">
                  <div class="d-flex justify-content-between">
                    <div class="d-flex align-items-center gap-3">
                      <div
                        class="wd-50 ht-50 bg-soft-primary text-primary lh-1 d-flex align-items-center justify-content-center flex-column rounded-2 schedule-date"
                      >
                        <span class="fs-18 fw-bold mb-1 d-block">20</span>
                        <span class="fs-10 fw-semibold text-uppercase d-block">Dec</span>
                      </div>
                      <div class="text-dark">
                        <a
                          href="javascript:void(0);"
                          class="fw-bold mb-2 text-truncate-1-line"
                          >React Dashboard Design</a
                        >
                        <span class="fs-11 fw-normal text-muted text-truncate-1-line"
                          >11:30am - 12:30pm</span
                        >
                      </div>
                    </div>
                    <div
                      class="img-group lh-0 ms-3 justify-content-start d-none d-sm-flex"
                    >
                      <a
                        href="javascript:void(0)"
                        class="avatar-image avatar-md"
                        data-bs-toggle="tooltip"
                        data-bs-trigger="hover"
                        title=""
                        data-bs-original-title="Janette Dalton"
                      >
                        <img
                          src="assets/images/avatar/2.png"
                          class="img-fluid"
                          alt="image"
                        />
                      </a>
                      <a
                        href="javascript:void(0)"
                        class="avatar-image avatar-md"
                        data-bs-toggle="tooltip"
                        data-bs-trigger="hover"
                        title=""
                        data-bs-original-title="Michael Ksen"
                      >
                        <img
                          src="assets/images/avatar/3.png"
                          class="img-fluid"
                          alt="image"
                        />
                      </a>
                      <a
                        href="javascript:void(0)"
                        class="avatar-image avatar-md"
                        data-bs-toggle="tooltip"
                        data-bs-trigger="hover"
                        title=""
                        data-bs-original-title="Socrates Itumay"
                      >
                        <img
                          src="assets/images/avatar/4.png"
                          class="img-fluid"
                          alt="image"
                        />
                      </a>
                      <a
                        href="javascript:void(0)"
                        class="avatar-image avatar-md"
                        data-bs-toggle="tooltip"
                        data-bs-trigger="hover"
                        title=""
                        data-bs-original-title="Marianne Audrey"
                      >
                        <img
                          src="assets/images/avatar/6.png"
                          class="img-fluid"
                          alt="image"
                        />
                      </a>
                      <a
                        href="javascript:void(0)"
                        class="avatar-text avatar-md"
                        data-bs-toggle="tooltip"
                        data-bs-trigger="hover"
                        title=""
                        data-bs-original-title="Explorer More"
                      >
                        <i class="feather-more-horizontal"></i>
                      </a>
                    </div>
                  </div>
                </div>
                <!--! BEGIN: [Events] !-->
                <div class="p-3 border border-dashed rounded-3 mb-3">
                  <div class="d-flex justify-content-between">
                    <div class="d-flex align-items-center gap-3">
                      <div
                        class="wd-50 ht-50 bg-soft-warning text-warning lh-1 d-flex align-items-center justify-content-center flex-column rounded-2 schedule-date"
                      >
                        <span class="fs-18 fw-bold mb-1 d-block">30</span>
                        <span class="fs-10 fw-semibold text-uppercase d-block">Dec</span>
                      </div>
                      <div class="text-dark">
                        <a
                          href="javascript:void(0);"
                          class="fw-bold mb-2 text-truncate-1-line"
                          >Admin Design Concept</a
                        >
                        <span class="fs-11 fw-normal text-muted text-truncate-1-line"
                          >10:00am - 12:00pm</span
                        >
                      </div>
                    </div>
                    <div
                      class="img-group lh-0 ms-3 justify-content-start d-none d-sm-flex"
                    >
                      <a
                        href="javascript:void(0)"
                        class="avatar-image avatar-md"
                        data-bs-toggle="tooltip"
                        data-bs-trigger="hover"
                        title=""
                        data-bs-original-title="Janette Dalton"
                      >
                        <img
                          src="assets/images/avatar/2.png"
                          class="img-fluid"
                          alt="image"
                        />
                      </a>
                      <a
                        href="javascript:void(0)"
                        class="avatar-image avatar-md"
                        data-bs-toggle="tooltip"
                        data-bs-trigger="hover"
                        title=""
                        data-bs-original-title="Michael Ksen"
                      >
                        <img
                          src="assets/images/avatar/3.png"
                          class="img-fluid"
                          alt="image"
                        />
                      </a>
                      <a
                        href="javascript:void(0)"
                        class="avatar-image avatar-md"
                        data-bs-toggle="tooltip"
                        data-bs-trigger="hover"
                        title=""
                        data-bs-original-title="Marianne Audrey"
                      >
                        <img
                          src="assets/images/avatar/5.png"
                          class="img-fluid"
                          alt="image"
                        />
                      </a>
                      <a
                        href="javascript:void(0)"
                        class="avatar-image avatar-md"
                        data-bs-toggle="tooltip"
                        data-bs-trigger="hover"
                        title=""
                        data-bs-original-title="Marianne Audrey"
                      >
                        <img
                          src="assets/images/avatar/6.png"
                          class="img-fluid"
                          alt="image"
                        />
                      </a>
                      <a
                        href="javascript:void(0)"
                        class="avatar-text avatar-md"
                        data-bs-toggle="tooltip"
                        data-bs-trigger="hover"
                        title=""
                        data-bs-original-title="Explorer More"
                      >
                        <i class="feather-more-horizontal"></i>
                      </a>
                    </div>
                  </div>
                </div>
                <!--! BEGIN: [Events] !-->
                <div class="p-3 border border-dashed rounded-3 mb-3">
                  <div class="d-flex justify-content-between">
                    <div class="d-flex align-items-center gap-3">
                      <div
                        class="wd-50 ht-50 bg-soft-success text-success lh-1 d-flex align-items-center justify-content-center flex-column rounded-2 schedule-date"
                      >
                        <span class="fs-18 fw-bold mb-1 d-block">17</span>
                        <span class="fs-10 fw-semibold text-uppercase d-block">Dec</span>
                      </div>
                      <div class="text-dark">
                        <a
                          href="javascript:void(0);"
                          class="fw-bold mb-2 text-truncate-1-line"
                          >Standup Team Meeting</a
                        >
                        <span class="fs-11 fw-normal text-muted text-truncate-1-line"
                          >8:00am - 9:00am</span
                        >
                      </div>
                    </div>
                    <div
                      class="img-group lh-0 ms-3 justify-content-start d-none d-sm-flex"
                    >
                      <a
                        href="javascript:void(0)"
                        class="avatar-image avatar-md"
                        data-bs-toggle="tooltip"
                        data-bs-trigger="hover"
                        title=""
                        data-bs-original-title="Janette Dalton"
                      >
                        <img
                          src="assets/images/avatar/2.png"
                          class="img-fluid"
                          alt="image"
                        />
                      </a>
                      <a
                        href="javascript:void(0)"
                        class="avatar-image avatar-md"
                        data-bs-toggle="tooltip"
                        data-bs-trigger="hover"
                        title=""
                        data-bs-original-title="Michael Ksen"
                      >
                        <img
                          src="assets/images/avatar/3.png"
                          class="img-fluid"
                          alt="image"
                        />
                      </a>
                      <a
                        href="javascript:void(0)"
                        class="avatar-image avatar-md"
                        data-bs-toggle="tooltip"
                        data-bs-trigger="hover"
                        title=""
                        data-bs-original-title="Socrates Itumay"
                      >
                        <img
                          src="assets/images/avatar/4.png"
                          class="img-fluid"
                          alt="image"
                        />
                      </a>
                      <a
                        href="javascript:void(0)"
                        class="avatar-image avatar-md"
                        data-bs-toggle="tooltip"
                        data-bs-trigger="hover"
                        title=""
                        data-bs-original-title="Marianne Audrey"
                      >
                        <img
                          src="assets/images/avatar/5.png"
                          class="img-fluid"
                          alt="image"
                        />
                      </a>
                      <a
                        href="javascript:void(0)"
                        class="avatar-text avatar-md"
                        data-bs-toggle="tooltip"
                        data-bs-trigger="hover"
                        title=""
                        data-bs-original-title="Explorer More"
                      >
                        <i class="feather-more-horizontal"></i>
                      </a>
                    </div>
                  </div>
                </div>
                <!--! BEGIN: [Events] !-->
                <div class="p-3 border border-dashed rounded-3 mb-2">
                  <div class="d-flex justify-content-between">
                    <div class="d-flex align-items-center gap-3">
                      <div
                        class="wd-50 ht-50 bg-soft-danger text-danger lh-1 d-flex align-items-center justify-content-center flex-column rounded-2 schedule-date"
                      >
                        <span class="fs-18 fw-bold mb-1 d-block">25</span>
                        <span class="fs-10 fw-semibold text-uppercase d-block">Dec</span>
                      </div>
                      <div class="text-dark">
                        <a
                          href="javascript:void(0);"
                          class="fw-bold mb-2 text-truncate-1-line"
                          >Zoom Team Meeting</a
                        >
                        <span class="fs-11 fw-normal text-muted text-truncate-1-line"
                          >03:30pm - 05:30pm</span
                        >
                      </div>
                    </div>
                    <div
                      class="img-group lh-0 ms-3 justify-content-start d-none d-sm-flex"
                    >
                      <a
                        href="javascript:void(0)"
                        class="avatar-image avatar-md"
                        data-bs-toggle="tooltip"
                        data-bs-trigger="hover"
                        title=""
                        data-bs-original-title="Janette Dalton"
                      >
                        <img
                          src="assets/images/avatar/2.png"
                          class="img-fluid"
                          alt="image"
                        />
                      </a>
                      <a
                        href="javascript:void(0)"
                        class="avatar-image avatar-md"
                        data-bs-toggle="tooltip"
                        data-bs-trigger="hover"
                        title=""
                        data-bs-original-title="Socrates Itumay"
                      >
                        <img
                          src="assets/images/avatar/4.png"
                          class="img-fluid"
                          alt="image"
                        />
                      </a>
                      <a
                        href="javascript:void(0)"
                        class="avatar-image avatar-md"
                        data-bs-toggle="tooltip"
                        data-bs-trigger="hover"
                        title=""
                        data-bs-original-title="Marianne Audrey"
                      >
                        <img
                          src="assets/images/avatar/5.png"
                          class="img-fluid"
                          alt="image"
                        />
                      </a>
                      <a
                        href="javascript:void(0)"
                        class="avatar-image avatar-md"
                        data-bs-toggle="tooltip"
                        data-bs-trigger="hover"
                        title=""
                        data-bs-original-title="Marianne Audrey"
                      >
                        <img
                          src="assets/images/avatar/6.png"
                          class="img-fluid"
                          alt="image"
                        />
                      </a>
                      <a
                        href="javascript:void(0)"
                        class="avatar-text avatar-md"
                        data-bs-toggle="tooltip"
                        data-bs-trigger="hover"
                        title=""
                        data-bs-original-title="Explorer More"
                      >
                        <i class="feather-more-horizontal"></i>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <a
                href="javascript:void(0);"
                class="card-footer fs-11 fw-bold text-uppercase text-center py-4"
                >Upcomming Schedule</a
              >
            </div>
          </div>
          <!--! END: [Upcoming Schedule] !-->
          <!--! BEGIN: [Project Status] !-->
          <div class="col-xxl-4">
            <div class="card stretch stretch-full">
              <div class="card-header">
                <h5 class="card-title">Project Status</h5>
                <div class="card-header-action">
                  <div class="card-header-btn">
                    <div
                      data-bs-toggle="tooltip"
                      title=""
                      data-bs-original-title="Delete"
                    >
                      <a
                        href="javascript:void(0);"
                        class="avatar-text avatar-xs bg-danger"
                        data-bs-toggle="remove"
                      >
                      </a>
                    </div>
                    <div
                      data-bs-toggle="tooltip"
                      title=""
                      data-bs-original-title="Refresh"
                    >
                      <a
                        href="javascript:void(0);"
                        class="avatar-text avatar-xs bg-warning"
                        data-bs-toggle="refresh"
                      >
                      </a>
                    </div>
                    <div
                      data-bs-toggle="tooltip"
                      title=""
                      data-bs-original-title="Maximize/Minimize"
                    >
                      <a
                        href="javascript:void(0);"
                        class="avatar-text avatar-xs bg-success"
                        data-bs-toggle="expand"
                      >
                      </a>
                    </div>
                  </div>
                  <div class="dropdown">
                    <a
                      href="javascript:void(0);"
                      class="avatar-text avatar-sm"
                      data-bs-toggle="dropdown"
                      data-bs-offset="25, 25"
                    >
                      <div
                        data-bs-toggle="tooltip"
                        title=""
                        data-bs-original-title="Options"
                      >
                        <i class="feather-more-vertical"></i>
                      </div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end">
                      <a href="javascript:void(0);" class="dropdown-item"
                        ><i class="feather-at-sign"></i>New</a
                      >
                      <a href="javascript:void(0);" class="dropdown-item"
                        ><i class="feather-calendar"></i>Event</a
                      >
                      <a href="javascript:void(0);" class="dropdown-item"
                        ><i class="feather-bell"></i>Snoozed</a
                      >
                      <a href="javascript:void(0);" class="dropdown-item"
                        ><i class="feather-trash-2"></i>Deleted</a
                      >
                      <div class="dropdown-divider"></div>
                      <a href="javascript:void(0);" class="dropdown-item"
                        ><i class="feather-settings"></i>Settings</a
                      >
                      <a href="javascript:void(0);" class="dropdown-item"
                        ><i class="feather-life-buoy"></i>Tips &amp; Tricks</a
                      >
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-body custom-card-action">
                <div class="mb-3">
                  <div class="mb-4 pb-1 d-flex">
                    <div class="d-flex w-50 align-items-center me-3">
                      <img
                        src="assets/images/brand/app-store.png"
                        alt="laravel-logo"
                        class="me-3"
                        width="35"
                      />
                      <div>
                        <a href="javascript:void(0);" class="text-truncate-1-line"
                          >Apps Development</a
                        >
                        <div class="fs-11 text-muted">Applications</div>
                      </div>
                    </div>
                    <div class="d-flex flex-grow-1 align-items-center">
                      <div class="progress w-100 me-3 ht-5">
                        <div
                          class="progress-bar bg-danger"
                          role="progressbar"
                          style="width: 54%"
                          aria-valuenow="54"
                          aria-valuemin="0"
                          aria-valuemax="100"
                        ></div>
                      </div>
                      <span class="text-muted">54%</span>
                    </div>
                  </div>
                  <hr class="border-dashed my-3" />
                  <div class="mb-4 pb-1 d-flex">
                    <div class="d-flex w-50 align-items-center me-3">
                      <img
                        src="assets/images/brand/figma.png"
                        alt="figma-logo"
                        class="me-3"
                        width="35"
                      />
                      <div>
                        <a href="javascript:void(0);" class="text-truncate-1-line"
                          >Dashboard Design</a
                        >
                        <div class="fs-11 text-muted">App UI Kit</div>
                      </div>
                    </div>
                    <div class="d-flex flex-grow-1 align-items-center">
                      <div class="progress w-100 me-3 ht-5">
                        <div
                          class="progress-bar bg-primary"
                          role="progressbar"
                          style="width: 86%"
                          aria-valuenow="86"
                          aria-valuemin="0"
                          aria-valuemax="100"
                        ></div>
                      </div>
                      <span class="text-muted">86%</span>
                    </div>
                  </div>
                  <hr class="border-dashed my-3" />
                  <div class="mb-4 pb-1 d-flex">
                    <div class="d-flex w-50 align-items-center me-3">
                      <img
                        src="assets/images/brand/facebook.png"
                        alt="vue-logo"
                        class="me-3"
                        width="35"
                      />
                      <div>
                        <a href="javascript:void(0);" class="text-truncate-1-line"
                          >Facebook Marketing</a
                        >
                        <div class="fs-11 text-muted">Marketing</div>
                      </div>
                    </div>
                    <div class="d-flex flex-grow-1 align-items-center">
                      <div class="progress w-100 me-3 ht-5">
                        <div
                          class="progress-bar bg-success"
                          role="progressbar"
                          style="width: 90%"
                          aria-valuenow="90"
                          aria-valuemin="0"
                          aria-valuemax="100"
                        ></div>
                      </div>
                      <span class="text-muted">90%</span>
                    </div>
                  </div>
                  <hr class="border-dashed my-3" />
                  <div class="mb-4 pb-1 d-flex">
                    <div class="d-flex w-50 align-items-center me-3">
                      <img
                        src="assets/images/brand/github.png"
                        alt="react-logo"
                        class="me-3"
                        width="35"
                      />
                      <div>
                        <a href="javascript:void(0);" class="text-truncate-1-line"
                          >React Dashboard Github</a
                        >
                        <div class="fs-11 text-muted">Dashboard</div>
                      </div>
                    </div>
                    <div class="d-flex flex-grow-1 align-items-center">
                      <div class="progress w-100 me-3 ht-5">
                        <div
                          class="progress-bar bg-info"
                          role="progressbar"
                          style="width: 37%"
                          aria-valuenow="37"
                          aria-valuemin="0"
                          aria-valuemax="100"
                        ></div>
                      </div>
                      <span class="text-muted">37%</span>
                    </div>
                  </div>
                  <hr class="border-dashed my-3" />
                  <div class="d-flex">
                    <div class="d-flex w-50 align-items-center me-3">
                      <img
                        src="assets/images/brand/paypal.png"
                        alt="sketch-logo"
                        class="me-3"
                        width="35"
                      />
                      <div>
                        <a href="javascript:void(0);" class="text-truncate-1-line"
                          >Paypal Payment Gateway</a
                        >
                        <div class="fs-11 text-muted">Payment</div>
                      </div>
                    </div>
                    <div class="d-flex flex-grow-1 align-items-center">
                      <div class="progress w-100 me-3 ht-5">
                        <div
                          class="progress-bar bg-warning"
                          role="progressbar"
                          style="width: 29%"
                          aria-valuenow="29"
                          aria-valuemin="0"
                          aria-valuemax="100"
                        ></div>
                      </div>
                      <span class="text-muted">29%</span>
                    </div>
                  </div>
                </div>
              </div>
              <a
                href="javascript:void(0);"
                class="card-footer fs-11 fw-bold text-uppercase text-center"
                >Upcomming Projects</a
              >
            </div>
          </div>
          <!--! END: [Project Status] !-->
          <!--! BEGIN: [Team Progress] !-->
          <div class="col-xxl-4">
            <div class="card stretch stretch-full">
              <div class="card-header">
                <h5 class="card-title">Team Progress</h5>
                <div class="card-header-action">
                  <div class="card-header-btn">
                    <div
                      data-bs-toggle="tooltip"
                      title=""
                      data-bs-original-title="Delete"
                    >
                      <a
                        href="javascript:void(0);"
                        class="avatar-text avatar-xs bg-danger"
                        data-bs-toggle="remove"
                      >
                      </a>
                    </div>
                    <div
                      data-bs-toggle="tooltip"
                      title=""
                      data-bs-original-title="Refresh"
                    >
                      <a
                        href="javascript:void(0);"
                        class="avatar-text avatar-xs bg-warning"
                        data-bs-toggle="refresh"
                      >
                      </a>
                    </div>
                    <div
                      data-bs-toggle="tooltip"
                      title=""
                      data-bs-original-title="Maximize/Minimize"
                    >
                      <a
                        href="javascript:void(0);"
                        class="avatar-text avatar-xs bg-success"
                        data-bs-toggle="expand"
                      >
                      </a>
                    </div>
                  </div>
                  <div class="dropdown">
                    <a
                      href="javascript:void(0);"
                      class="avatar-text avatar-sm"
                      data-bs-toggle="dropdown"
                      data-bs-offset="25, 25"
                    >
                      <div
                        data-bs-toggle="tooltip"
                        title=""
                        data-bs-original-title="Options"
                      >
                        <i class="feather-more-vertical"></i>
                      </div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end">
                      <a href="javascript:void(0);" class="dropdown-item"
                        ><i class="feather-at-sign"></i>New</a
                      >
                      <a href="javascript:void(0);" class="dropdown-item"
                        ><i class="feather-calendar"></i>Event</a
                      >
                      <a href="javascript:void(0);" class="dropdown-item"
                        ><i class="feather-bell"></i>Snoozed</a
                      >
                      <a href="javascript:void(0);" class="dropdown-item"
                        ><i class="feather-trash-2"></i>Deleted</a
                      >
                      <div class="dropdown-divider"></div>
                      <a href="javascript:void(0);" class="dropdown-item"
                        ><i class="feather-settings"></i>Settings</a
                      >
                      <a href="javascript:void(0);" class="dropdown-item"
                        ><i class="feather-life-buoy"></i>Tips &amp; Tricks</a
                      >
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-body custom-card-action">
                <div
                  class="hstack justify-content-between border border-dashed rounded-3 p-3 mb-3"
                >
                  <div class="hstack gap-3">
                    <div class="avatar-image">
                      <img src="assets/images/avatar/1.png" alt="" class="img-fluid" />
                    </div>
                    <div>
                      <a href="javascript:void(0);">Alexandra Della</a>
                      <div class="fs-11 text-muted">Frontend Developer</div>
                    </div>
                  </div>
                  <div
                    class="team-progress-1"
                    role="progressbar"
                    aria-valuemin="0"
                    aria-valuemax="100"
                    aria-valuenow="40"
                  >
                    <svg
                      version="1.1"
                      width="100"
                      height="100"
                      viewBox="0 0 100 100"
                      class="circle-progress"
                    >
                      <circle
                        class="circle-progress-circle"
                        cx="50"
                        cy="50"
                        r="47"
                        fill="none"
                        stroke="#ddd"
                        stroke-width="8"
                      ></circle>
                      <path
                        d="M 50 3 A 47 47 0 0 1 77.62590685774623 88.02379873562253"
                        class="circle-progress-value"
                        fill="none"
                        stroke="#00E699"
                        stroke-width="8"
                      ></path>
                      <text
                        class="circle-progress-text"
                        x="50"
                        y="50"
                        font="16px Arial, sans-serif"
                        text-anchor="middle"
                        fill="#999"
                        dy="0.4em"
                      >
                        40%
                      </text>
                    </svg>
                  </div>
                </div>
                <div
                  class="hstack justify-content-between border border-dashed rounded-3 p-3 mb-3"
                >
                  <div class="hstack gap-3">
                    <div class="avatar-image">
                      <img src="assets/images/avatar/2.png" alt="" class="img-fluid" />
                    </div>
                    <div>
                      <a href="javascript:void(0);">Archie Cantones</a>
                      <div class="fs-11 text-muted">UI/UX Designer</div>
                    </div>
                  </div>
                  <div
                    class="team-progress-2"
                    role="progressbar"
                    aria-valuemin="0"
                    aria-valuemax="100"
                    aria-valuenow="65"
                  >
                    <svg
                      version="1.1"
                      width="100"
                      height="100"
                      viewBox="0 0 100 100"
                      class="circle-progress"
                    >
                      <circle
                        class="circle-progress-circle"
                        cx="50"
                        cy="50"
                        r="47"
                        fill="none"
                        stroke="#ddd"
                        stroke-width="8"
                      ></circle>
                      <path
                        d="M 50 3 A 47 47 0 1 1 11.976201264377472 77.62590685774624"
                        class="circle-progress-value"
                        fill="none"
                        stroke="#00E699"
                        stroke-width="8"
                      ></path>
                      <text
                        class="circle-progress-text"
                        x="50"
                        y="50"
                        font="16px Arial, sans-serif"
                        text-anchor="middle"
                        fill="#999"
                        dy="0.4em"
                      >
                        65%
                      </text>
                    </svg>
                  </div>
                </div>
                <div
                  class="hstack justify-content-between border border-dashed rounded-3 p-3 mb-3"
                >
                  <div class="hstack gap-3">
                    <div class="avatar-image">
                      <img src="assets/images/avatar/3.png" alt="" class="img-fluid" />
                    </div>
                    <div>
                      <a href="javascript:void(0);">Malanie Hanvey</a>
                      <div class="fs-11 text-muted">Backend Developer</div>
                    </div>
                  </div>
                  <div
                    class="team-progress-3"
                    role="progressbar"
                    aria-valuemin="0"
                    aria-valuemax="100"
                    aria-valuenow="50"
                  >
                    <svg
                      version="1.1"
                      width="100"
                      height="100"
                      viewBox="0 0 100 100"
                      class="circle-progress"
                    >
                      <circle
                        class="circle-progress-circle"
                        cx="50"
                        cy="50"
                        r="47"
                        fill="none"
                        stroke="#ddd"
                        stroke-width="8"
                      ></circle>
                      <path
                        d="M 50 3 A 47 47 0 0 1 50 97"
                        class="circle-progress-value"
                        fill="none"
                        stroke="#00E699"
                        stroke-width="8"
                      ></path>
                      <text
                        class="circle-progress-text"
                        x="50"
                        y="50"
                        font="16px Arial, sans-serif"
                        text-anchor="middle"
                        fill="#999"
                        dy="0.4em"
                      >
                        50%
                      </text>
                    </svg>
                  </div>
                </div>
                <div
                  class="hstack justify-content-between border border-dashed rounded-3 p-3 mb-2"
                >
                  <div class="hstack gap-3">
                    <div class="avatar-image">
                      <img src="assets/images/avatar/4.png" alt="" class="img-fluid" />
                    </div>
                    <div>
                      <a href="javascript:void(0);">Kenneth Hune</a>
                      <div class="fs-11 text-muted">Digital Marketer</div>
                    </div>
                  </div>
                  <div
                    class="team-progress-4"
                    role="progressbar"
                    aria-valuemin="0"
                    aria-valuemax="100"
                    aria-valuenow="75"
                  >
                    <svg
                      version="1.1"
                      width="100"
                      height="100"
                      viewBox="0 0 100 100"
                      class="circle-progress"
                    >
                      <circle
                        class="circle-progress-circle"
                        cx="50"
                        cy="50"
                        r="47"
                        fill="none"
                        stroke="#ddd"
                        stroke-width="8"
                      ></circle>
                      <path
                        d="M 50 3 A 47 47 0 1 1 3 50.00000000000001"
                        class="circle-progress-value"
                        fill="none"
                        stroke="#00E699"
                        stroke-width="8"
                      ></path>
                      <text
                        class="circle-progress-text"
                        x="50"
                        y="50"
                        font="16px Arial, sans-serif"
                        text-anchor="middle"
                        fill="#999"
                        dy="0.4em"
                      >
                        75%
                      </text>
                    </svg>
                  </div>
                </div>
              </div>
              <a
                href="javascript:void(0);"
                class="card-footer fs-11 fw-bold text-uppercase text-center"
                >Update 30 Min Ago</a
              >
            </div>
          </div>
          <!--! END: [Team Progress] !-->
        </div>
      </div>
      <!-- [ Main Content ] end -->
    </div>
    <Footer />
  </main>
  <Customizer />
</template>
