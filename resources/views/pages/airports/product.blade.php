@extends('layouts.dashboard')
@section('content')
<section class="wrapper">
  <div class="p-2 d-flex justify-content-between">
    <div class="d-flex">
      <div>
        <a href="/airport/1" class="btn btn-outline-link">
          <i class="fa fa-arrow-left"></i>
        </a>
      </div>
      <div>
        <h3 class="font-weight-bold">Jet A - 1</h3>
      </div>
    </div>
    <div class="d-flex bg-white shadow-sm rounded p-2 btn btn-link-outlined">
      <div>Log Report</div>
      <div class="pl-2">
        <i class="fa fa-history"></i>
      </div>
    </div>
  </div>
  <div class="d-flex justify-content-between mb-4">
    <div class="flex-fill">
      <!-- Plane Image -->
      <div class="p-3 shadow bg-white rounded mb-4">
        <center>
        <img src="{{ asset('img/refuel.png') }}" alt="plane">
        </center>
      </div>
      <!-- Numeric -->
      <div class="d-flex justify-content-between">
        <div class="p-5 bg-white border-danger shadow rounded flex-fill mr-4"
          style="border-bottom: 8px solid"
        >
          <div class="text-center font-weight-bold h4">0</div>
          <div class="text-center font-weight-bold h4">State</div>
        </div>
        <div class="p-5 bg-white border-primary shadow rounded flex-fill mr-4"
          style="border-bottom: 8px solid"
        >
          <div class="text-center font-weight-bold h4">0</div>
          <div class="text-center font-weight-bold h4">Saturation</div>
        </div>
        <a href="/airport/1/product/1/warning-event" class="p-5 bg-white border-success shadow rounded flex-fill btn"
          style="border: none; border-bottom: 8px solid;"
        >
          <div class="text-center font-weight-bold h4">1</div>
          <div class="text-center font-weight-bold h4">Warning</div>
        </a>
      </div>
    </div>
    <div class="flex-fill ml-4">
      <!-- General Interlock -->
      <div class="p-3 bg-white shadow rounded mb-4">
        <div class="font-weight-bold h5 mb-4">General Interlock</div>
        <div class="d-flex">
          <div class="flex-fill">
            <div class="mb-2">
              <i class="fa fa-circle text-danger" aria-hidden="true"></i>
              <span class="ml-2">PUMP TAKEOFF</span>
            </div>
            <div>
              <i class="fa fa-circle text-danger" aria-hidden="true"></i>
              <span class="ml-2">INPUT COUPLER</span>
            </div>
          </div>
          <div class="flex-fill">
            <div class="mb-2">
              <i class="fa fa-circle text-danger" aria-hidden="true"></i>
              <span class="ml-2">EARTH (BOND)</span>
            </div>
            <div>
              <i class="fa fa-circle text-danger" aria-hidden="true"></i>
              <span class="ml-2">EMERGENCY SHUTDOWN</span>
            </div>
          </div>
        </div>
      </div>
      <!-- Top Loader Interlock -->
      <div class="p-3 bg-white shadow rounded mb-4">
        <div class="font-weight-bold h5 mb-4">Top Loader Interlock</div>
        <div class="d-flex">
          <div class="flex-fill">
            <div class="mb-2">
              <i class="fa fa-circle text-danger" aria-hidden="true"></i>
              <span class="ml-2">UNDERWING COUPLER RIGHT</span>
            </div>
            <div class="mb-2">
              <i class="fa fa-circle text-danger" aria-hidden="true"></i>
              <span class="ml-2">PLATFORM ANTENNA LEFT</span>
            </div>
            <div class="mb-2">
              <i class="fa fa-circle text-danger" aria-hidden="true"></i>
              <span class="ml-2">PLATFORM DECK</span>
            </div>
            <div class="mb-2">
              <i class="fa fa-circle text-danger" aria-hidden="true"></i>
              <span class="ml-2">PANTOGRAPH</span>
            </div>
          </div>
          <div class="flex-fill">
          <div class="mb-2">
              <i class="fa fa-circle text-danger" aria-hidden="true"></i>
              <span class="ml-2">UNDERWING COUPLER RIGHT</span>
            </div>
            <div class="mb-2">
              <i class="fa fa-circle text-danger" aria-hidden="true"></i>
              <span class="ml-2">PLATFORM ANTENNA LEFT</span>
            </div>
            <div class="mb-2">
              <i class="fa fa-circle text-danger" aria-hidden="true"></i>
              <span class="ml-2">PLATFORM DECK</span>
            </div>
            <div class="mb-2">
              <i class="fa fa-circle text-danger" aria-hidden="true"></i>
              <span class="ml-2">PANTOGRAPH</span>
            </div>
          </div>
        </div>
      </div>
      <!-- Bottom Loader Interlock -->
      <div class="p-3 bg-white shadow rounded">
        <div class="font-weight-bold h5 mb-4">Bottom Loader Interlock</div>
        <div class="d-flex">
          <div class="flex-fill">
            <div class="mb-2">
              <i class="fa fa-circle text-danger" aria-hidden="true"></i>
              <span class="ml-2">UNDERWING COUPLER HOSE REEL</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div>
    <!-- Pressure Chart -->
    <div class="p-2 bg-white rounded mb-4">
      <div id="chart-pressure" style="width:100%; height:400px;"></div>
    </div>
    <!-- Volume Chart -->
    <div class="p-2 bg-white rounded mb-4">
      <div id="chart-volume" style="width:100%; height:400px;"></div>
    </div>
    <!-- Volume Flowrate -->
    <div class="p-2 bg-white rounded mb-4">
      <div id="chart-flowrate" style="width:100%; height:400px;"></div>
    </div>
  </div>
</section>
<script src="{{ asset('refueler-assets/js/highcharts.js') }}"></script>
<script src="{{ asset('refueler-assets/js/series-label.js') }}"></script>
<script src="{{ asset('refueler-assets/js/exporting.js') }}"></script>
<script src="{{ asset('refueler-assets/js/export-data.js') }}"></script>
<script src="{{ asset('refueler-assets/js/accessibility.js') }}"></script>
<script>
document.addEventListener('DOMContentLoaded', function () {
    var chartPressure = Highcharts.chart('chart-pressure', {
        chart: {
            type: 'spline',
            scrollablePlotArea: {
                scrollPositionX: 1
            }
        },
        title: {
            text: 'Pressure Differential Gauge',
            align: 'left'
        },
        xAxis: {
            type: 'datetime',
            labels: {
                overflow: 'justify'
            }
        },
        yAxis: {
            title: {
                text: 'Pressure'
            },
            minorGridLineWidth: 0,
            gridLineWidth: 0,
            alternateGridColor: null,
            plotBands: [{
            color: '#e6ebf5'
            }]
        },
        plotOptions: {
            spline: {
                lineWidth: 4,
                states: {
                    hover: {
                        lineWidth: 5
                    }
                },
                marker: {
                    enabled: false
                },
                pointInterval: 3600000, // one hour
                pointStart: Date.UTC(2018, 1, 13, 0, 0, 0)
            }
        },
        series: [{
        name: 'Pressure',
        data: [
            3.7, 3.3, 3.9, 5.1, 3.5, 3.8, 4.0, 5.0, 6.1, 3.7, 3.3, 6.4,
            6.9, 6.0, 6.8, 4.4, 4.0, 3.8, 5.0, 4.9, 9.2, 9.6, 9.5, 6.3,
            9.5, 10.8, 14.0, 11.5, 10.0, 10.2, 10.3, 9.4, 8.9, 10.6, 10.5, 11.1,
            10.4, 10.7, 11.3, 10.2, 9.6, 10.2, 11.1, 10.8, 13.0, 12.5, 12.5, 11.3,
            10.1
        ],
        color: '#ff0000'
        }],
        navigation: {
            menuItemStyle: {
                fontSize: '10px'
            }
        }
    });

    var chartVolume = Highcharts.chart('chart-volume', {
        chart: {
            type: 'spline',
            scrollablePlotArea: {
                scrollPositionX: 1
            }
        },
        title: {
            text: 'Volume',
            align: 'left'
        },
        xAxis: {
            type: 'datetime',
            labels: {
                overflow: 'justify'
            }
        },
        yAxis: {
            title: {
                text: 'Volume'
            },
            minorGridLineWidth: 0,
            gridLineWidth: 0,
            alternateGridColor: null,
            plotBands: [{
            color: '#e6ebf5'
            }]
        },
        plotOptions: {
            spline: {
                lineWidth: 4,
                states: {
                    hover: {
                        lineWidth: 5
                    }
                },
                marker: {
                    enabled: false
                },
                pointInterval: 3600000, // one hour
                pointStart: Date.UTC(2018, 1, 13, 0, 0, 0)
            }
        },
        series: [{
        name: 'Volume',
        data: [
            3.7, 3.3, 3.9, 5.1, 3.5, 3.8, 4.0, 5.0, 6.1, 3.7, 3.3, 6.4,
            6.9, 6.0, 6.8, 4.4, 4.0, 3.8, 5.0, 4.9, 9.2, 9.6, 9.5, 6.3,
            9.5, 10.8, 14.0, 11.5, 10.0, 10.2, 10.3, 9.4, 8.9, 10.6, 10.5, 11.1,
            10.4, 10.7, 11.3, 10.2, 9.6, 10.2, 11.1, 10.8, 13.0, 12.5, 12.5, 11.3,
            10.1
        ],
        color: '#00ff00'
        }],
        navigation: {
            menuItemStyle: {
                fontSize: '10px'
            }
        }
    });

    var chartFlowrate = Highcharts.chart('chart-flowrate', {
        chart: {
            type: 'spline',
            scrollablePlotArea: {
                scrollPositionX: 1
            }
        },
        title: {
            text: 'Flowrate',
            align: 'left'
        },
        xAxis: {
            type: 'datetime',
            labels: {
                overflow: 'justify'
            }
        },
        yAxis: {
            title: {
                text: 'Flowrate'
            },
            minorGridLineWidth: 0,
            gridLineWidth: 0,
            alternateGridColor: null,
            plotBands: [{
            color: '#e6ebf5'
            }]
        },
        plotOptions: {
            spline: {
                lineWidth: 4,
                states: {
                    hover: {
                        lineWidth: 5
                    }
                },
                marker: {
                    enabled: false
                },
                pointInterval: 3600000, // one hour
                pointStart: Date.UTC(2018, 1, 13, 0, 0, 0)
            }
        },
        series: [{
        name: 'Flowrate',
        data: [
            3.7, 3.3, 3.9, 5.1, 3.5, 3.8, 4.0, 5.0, 6.1, 3.7, 3.3, 6.4,
            6.9, 6.0, 6.8, 4.4, 4.0, 3.8, 5.0, 4.9, 9.2, 9.6, 9.5, 6.3,
            9.5, 10.8, 14.0, 11.5, 10.0, 10.2, 10.3, 9.4, 8.9, 10.6, 10.5, 11.1,
            10.4, 10.7, 11.3, 10.2, 9.6, 10.2, 11.1, 10.8, 13.0, 12.5, 12.5, 11.3,
            10.1
        ],
        color: '#0000ff'
        }],
        navigation: {
            menuItemStyle: {
                fontSize: '10px'
            }
        }
    });
})
</script>
@endsection