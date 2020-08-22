@extends('layouts.dashboard')
@section('content')
<section class="wrapper">
  <div class="p-2 d-flex justify-content-between">
    <div class="d-flex">
      <div>
        <a href="/airport" class="btn btn-outline-link">
          <i class="fa fa-arrow-left"></i>
        </a>
      </div>
      <div>
        <h3 class="font-weight-bold">Soekarno Hatta</h3>
      </div>
    </div>
  </div>
  <div class="d-flex justify-content-between">
    <!-- Last 30 Day's Transaction -->
    <div class="p-3 rounded shadow-sm flex-fill mr-2">
      <div id="chart" style="width:100%; height:400px;"></div>
    </div>
    <!-- Last Activity -->
    <div class="bg-danger p-3 rounded">
      <div class="text-white mb-2 font-weight-bold h5">Last Activity</div>
      <div class="mb-2">
        <table>
          <tbody>
            <tr>
              <td class="font-weight-bold text-white">Soe - 01</td>
              <td class="text-white pl-2">Gain 20 Transaction</td>
            </tr>
            <tr>
              <td class="font-weight-bold text-white">Soe - 01</td>
              <td class="text-white pl-2">Gain 10 Transaction</td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="d-flex justify-content-end">
        <a class="btn btn-link text-white cursor-pointer small">
          See More
          <i class="fa fa-forward pl-2"></i>
        </a>
      </div>
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
  var chart = Highcharts.chart('chart', {
    chart: {
        type: 'spline',
        scrollablePlotArea: {
            minWidth: 600,
            scrollPositionX: 1
        }
    },
    title: {
        text: 'Last 30 Day Transactions',
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
            text: 'Wind speed (m/s)'
        },
        minorGridLineWidth: 0,
        gridLineWidth: 0,
        alternateGridColor: null
    },
    tooltip: {
        valueSuffix: ' m/s'
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
      name: 'Hestavollane',
      data: [
          3.7, 3.3, 3.9, 5.1, 3.5, 3.8, 4.0, 5.0, 6.1, 3.7, 3.3, 6.4,
          6.9, 6.0, 6.8, 4.4, 4.0, 3.8, 5.0, 4.9, 9.2, 9.6, 9.5, 6.3,
          9.5, 10.8, 14.0, 11.5, 10.0, 10.2, 10.3, 9.4, 8.9, 10.6, 10.5, 11.1,
          10.4, 10.7, 11.3, 10.2, 9.6, 10.2, 11.1, 10.8, 13.0, 12.5, 12.5, 11.3,
          10.1
      ]
    }],
    navigation: {
        menuItemStyle: {
            fontSize: '10px'
        }
    }
});
});

</script>
@endsection