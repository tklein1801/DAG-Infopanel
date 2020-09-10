<?php require_once "../config.php"; ?>
<!DOCTYPE html>
<html lang="de">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width-device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="id=edge" />
  <meta name="theme-color" content="<?php echo $other_theme_color; ?>" />
  <meta property="og:image" content="<?php echo $other_logo; ?>" />
  <meta name="description" content="Infopanel der DulliAG" />
  <meta property="og:type" content="website" />
  <title>Infopanel | Markt</title>
  <link rel="icon" href="<?php echo $other_logo; ?>" />
  <link rel="stylesheet" href="<?php echo $dir_plugins . "fontawesome-free/css/all.min.css"; ?>" />
  <link rel="stylesheet" href="<?php echo $dir_css . "adminlte.min.css"; ?>" />
  <link rel="stylesheet" href="<?php echo $dir_css . "theme.css"; ?>" />
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet" />
</head>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">
    <!-- Main-Header -->
    <?php require_once $comp_navbar; ?>
    <!-- ./Main-Header -->

    <!-- Sidebar -->
    <?php require_once $comp_sidebar; ?>
    <!-- ./Sidebar -->

    <!-- Content Wrapper -->
    <div class="content-wrapper">
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Markt</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="<?php echo $url_host; ?>">Infopanel</a></li>
                <li class="breadcrumb-item"><a href="<?php echo $url_host . "Dashboard/"; ?>">Dashboard</a></li>
                <li class="breadcrumb-item active">Markt</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
      <!-- ./content-header -->

      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div id="item-calc" class="col-12">
              <div class="card card-outline card-warning">
                <div class="card-header border-0">
                  <h3 class="card-title font-weight-bold">Farmrechner</h3>
                </div>
                <div class="card-body pt-0">
                  <form>
                    <div class="row">
                      <div class="col-6 col-md mb-3 mb-md-0">
                        <input list="items" name="item" id="item" class="form-control" placeholder="Item" />
                        <datalist id="items"></datalist>
                      </div>
                      <div class="col-6 col-md mb-3 mb-md-0">
                        <input type="number" pattern="numeric" name="iweight" id="iweight" class="form-control" placeholder="Itemgewicht" />
                      </div>
                      <div class="col-6 col-md mb-3 mb-md-0">
                        <input type="number" pattern="numeric" name="pweight" id="pweight" class="form-control" placeholder="Rucksackkapazität" />
                      </div>
                      <div class="col-6 col-md mb-3 mb-md-0">
                        <input type="number" pattern="numeric" name="vweight" id="vweight" class="form-control" placeholder="Fahrzeugkapazität" />
                      </div>
                      <div class="col-12 col-md">
                        <input type="submit" class="btn btn-outline-warning w-100" value="Berechnen" />
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>

            <div id="server-1" class="col-md-3 col-12">
              <div class="card card-outline card-orange">
                <div class="card-header border-0 mb-0">
                  <p class="card-title font-weight-bold">Server 1</p>
                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                      <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool refresh-market" data-server="1">
                      <i class="fas fa-sync-alt"></i>
                    </button>
                  </div>
                </div>
                <div class="card-body pt-0">
                  <div class="table-responsive table-borderless">
                    <table class="table table-sm mb-0">
                      <thead>
                        <tr>
                          <th>Item</th>
                          <th class="text-right">Verkaufspreis</th>
                        </tr>
                      </thead>
                      <tbody></tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>

            <div id="server-2" class="col-md-3 col-12">
              <div class="card card-outline card-orange">
                <div class="card-header border-0 mb-0">
                  <p class="card-title font-weight-bold">Server 2</p>
                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                      <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool refresh-market" data-server="2">
                      <i class="fas fa-sync-alt"></i>
                    </button>
                  </div>
                </div>
                <div class="card-body pt-0">
                  <div class="table-responsive table-borderless">
                    <table class="table table-sm mb-0">
                      <thead>
                        <tr>
                          <th>Item</th>
                          <th class="text-right">Verkaufspreis</th>
                        </tr>
                      </thead>
                      <tbody></tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>

            <div id="top-jobs" class="col-md-6 col-12">
              <div class="card bg-orange">
                <div class="card-header border-0">
                  <p class="card-title font-weight-bold text-white">
                    <i class="fas fa-chart-line mr-1"></i>
                    Top Jobs
                  </p>
                  <div class="card-tools">
                    <ul class="nav nav-tabs border-0" id="myTab" role="tablist">
                      <li class="nav-item mr-1" role="presentation">
                        <a href="#s1-tab" class="btn btn-sm btn-warning active" data-toggle="tab" style="background-color: rgba(0,0,0,.2)!important;">Server 1</a>
                      </li>
                      <li class="nav-item mr-1" role="presentation">
                        <a href="#s2-tab" class="btn btn-sm btn-warning" data-toggle="tab" style="background-color: rgba(0,0,0,.2)!important;">Server 2</a>
                      </li>
                      <button type="button" class="btn btn-sm btn-warning" data-card-widget="collapse" style="background-color: rgba(0,0,0,.2)!important;">
                        <i class="fas fa-minus"></i>
                      </button>
                    </ul>
                  </div>
                </div>
                <div class="card-body">
                  <div class="tab-content" id="myTabContent">
                    <div id="s1-tab" class="tab-pane fade show active" role="tabpanel">
                      <h1 class="text-center">
                        <canvas class="chart chartjs-render-monitor" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%; display: block; width: 287px;" width="358" height="312"></canvas>
                      </h1>
                    </div>

                    <div id="s2-tab" class="tab-pane fade" role="tabpanel">
                      <canvas class="chart chartjs-render-monitor" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%; display: block; width: 287px;" width="358" height="312"></canvas>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- ./row -->
        </div>
      </div>
      <!-- ./content -->
    </div>
    <!-- ./Content Wrapper -->

    <!-- Footer -->
    <?php require_once $comp_footer; ?>
    <!-- ./Footer -->
  </div>
  <!-- ./Wrapper -->

  <div id="farm-calc-modal" class="modal fade">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header border-0">
          <h5 class="modal-title title font-weight-bold">Farmrechner</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body py-0">
          <table class="table table-borderless bg-0">
            <thead>
              <tr class="text-center">
                <th class="pb-0">Anzahl</th>
                <th class="pb-0">Server 1</th>
                <th class="pb-0">Server 2</th>
              </tr>
            </thead>
            <tbody></tbody>
          </table>
        </div>
        <div class="modal-footer border-0">
          <button type="button" class="btn text" data-dismiss="modal">Abbrechen</button>
        </div>
      </div>
    </div>
  </div>

  <!-- REQUIRED SCRIPTS -->
  <!-- jQuery -->
  <script src="<?php echo $dir_plugins . "jquery/jquery.min.js"; ?>"></script>
  <!-- Bootstrap 4 -->
  <script src="<?php echo $dir_plugins . "bootstrap/js/bootstrap.bundle.min.js"; ?>"></script>
  <!-- ChartJS -->
  <script src="<?php echo $dir_plugins . "chart.js/Chart.min.js"; ?>"></script>
  <!-- AdminLTE App -->
  <script src="<?php echo $dir_js . "adminlte.min.js"; ?>"></script>
  <script src="<?php echo $dir_js . "loader.js"; ?>"></script>
  <script src="<?php echo $dir_js . "realliferpg.js"; ?>"></script>
  <script>
    new Loader().init();
    document.querySelector(".main-sidebar #market").classList.add("active");
    const rl = new ReallifeRPG();
    const calc = document.querySelector(".content #item-calc");
    const calcForm = calc.querySelector("form");
    const refreshMarket = document.querySelectorAll(".content .refresh-market");

    var items = [rl.getMarket(1), rl.getMarket(2)];
    items[0].map((item, index) => {
      calcForm.querySelector("#items").innerHTML += `<option value="${item.localized}" />`;
    });
    calcForm.addEventListener("submit", function(e) {
      e.preventDefault();

      const modal = document.querySelector("#farm-calc-modal");
      let calcData = {
        item: calcForm.querySelector("#item").value,
        iweight: parseInt(calcForm.querySelector("#iweight").value),
        pweight: parseInt(calcForm.querySelector("#pweight").value),
        vweight: parseInt(calcForm.querySelector("#vweight").value),
      };
      items = [rl.getMarket(1), rl.getMarket(2)];
      var itemPrice = [];
      items.forEach((list) => {
        list.map((item, index) => {
          if (item.localized == calcData.item) {
            itemPrice.push(item.price);
          }
        });
      });
      var totalCap = calcData.pweight + calcData.vweight;
      var itemAmount = totalCap / calcData.iweight;
      console.log(itemPrice, totalCap, calcData.item);
      modal.querySelector("table tbody").innerHTML = `<tr class="text-center">
          <td class="pt-0"><p class="text mb-0">${itemAmount} Stück</p></td>
          <td class="pt-0"><p class="text mb-0">${(itemPrice[0] * itemAmount).toLocaleString(undefined)} €</p></td>
          <td class="pt-0"><p class="text mb-0">${(itemPrice[1] * itemAmount).toLocaleString(undefined)} €</p></td>
        </tr>`;
      $(modal).modal("show");
    });

    $("#farm-calc-modal").on("hide.bs.modal", function(e) {
      const modal = this;
      modal.querySelector("table tbody").innerHTML = "";
    })

    setItems(1);
    setItems(2);

    refreshMarket.forEach((element) => {
      element.addEventListener("click", function(e) {
        const server = this.getAttribute("data-server");
        document.querySelectorAll(`.content #server-${server} table body`).innerHTML = "";
        setItems(server);
      });
    });

    setTop(1);
    setTop(2);

    function setItems(server) {
      const items = rl.getMarket(server)
      items.forEach(item => {
        var output = document.querySelector(`.content #server-${server} table tbody`);
        output.innerHTML += `<tr>
          <td>
            <p class="text mb-0">${item.localized}</p>
          </td>
            <td class="text-right">
              <p class="text mb-0">${item.price.toLocaleString(undefined)} €</p>
            </td>
          </td>
        </tr>`;
      });
    }

    function setTop(server) {
      const top = rl.getTopJobs(server);
      var labels = [],
        prices = [];
      for (let i = 0; i < top.length; i++) {
        const item = top[i];
        labels.push(item[0]);
        prices.push(item[1]);
      }

      const chart = document.querySelector(`#top-jobs #s${server}-tab .chart`).getContext("2d");
      const chartData = {
        labels: labels,
        datasets: [{
          fill: false,
          borderWidth: 2,
          lineTension: 0,
          spanGaps: true,
          borderColor: '#fff',
          pointRadius: 3,
          pointHoverRadius: 7,
          pointColor: '#fff',
          pointBackgroundColor: '#fff',
          backgroundColor: "rgba(0, 0, 0, .6)",
          data: prices
        }]
      };

      const chartOptions = {
        maintainAspectRatio: false,
        responsive: true,
        legend: {
          display: false,
        },
        scales: {
          xAxes: [{
            ticks: {
              fontColor: '#fff',
            },
            gridLines: {
              display: false,
              color: '#fff',
              drawBorder: false,
            }
          }],
          yAxes: [{
            ticks: {
              fontColor: '#fff',
            },
            gridLines: {
              display: true,
              color: '#fff',
              drawBorder: false,
            }
          }]
        }
      };

      const salesGraphChart = new Chart(chart, {
        type: "bar",
        data: chartData,
        options: chartOptions
      })
    }
  </script>
</body>

</html>