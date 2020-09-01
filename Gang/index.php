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
  <title>Infopanel • Gang</title>
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
              <h1 class="m-0">Gang</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="<?php echo $url_host; ?>">Infopanel</a></li>
                <li class="breadcrumb-item"><a href="<?php echo $url_host . "Dashboard/"; ?>">Dashboard</a></li>
                <li class="breadcrumb-item active">Gang</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
      <!-- ./content-header -->

      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div id="gang_money" class="col-md-7 col-12">
              <div class="card card-outline card-orange">
                <div class="card-header border-0">
                  <p class="card-title font-weight-bold">
                    Gangkasse: <small class="text-success"> 50.000 €</small>
                  </p>
                  <div class="card-tools">
                    <button class="btn btn-tool" data-toggle="modal" data-target="#add-transaction-modal">
                      <i class="fas fa-plus"></i>
                    </button>
                  </div>
                </div>
                <div class="card-body p-0">
                  <div class="table-responsive table-borderless">
                    <table class="table table-hover mb-0">
                      <thead>
                        <tr class="text-center">
                          <th>Datum</th>
                          <th>Verwendungszweck</th>
                          <th>Sender</th>
                          <th>Betrag</th>
                        </tr>
                      </thead>
                      <tbody></tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-5 col-12">
              <div class="card card-outline card-orange">
                <div class="card-header border-0">
                  <p class="card-title font-weight-bold">
                    Kontakte
                  </p>
                  <div class="card-tools">
                    <button class="btn btn-tool">
                      <i class="fas fa-user-plus"></i>
                    </button>
                  </div>
                </div>
                <div class="card-body p-0">
                  <div class="table-responsive table-borderless">
                    <table class="table mb-0">
                      <thead>
                        <tr>
                          <th>Vor- & Nachname</th>
                          <th>Beschreibung</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                            <p class="text mb-0">Michael Burns</p>
                          </td>
                          <td>
                            <p class="text mb-0">Krasser dude</p>
                          </td>
                          <td class="text-right">
                            <button class="btn btn-sm btn-outline-warning mr-2 px-3" style="margin-top: -0.3rem;">
                              <i class="fas fa-user-edit"></i>
                            </button>
                            <button class="btn btn-sm btn-outline-danger px-3" style="margin-top: -0.3rem;">
                              <i class="fas fa-trash-alt"></i>
                            </button>
                          </td>
                        </tr>
                      </tbody>
                    </table>
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

  <div id="add-transaction-modal" class="modal fade">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header border-0">
          <h5 class="modal-title title font-weight-bold">Transaktion registrieren</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form id="add-transaction-form">
          <div class="modal-body py-0">
            <div class="form-group">
              <label for="usage" class="text-white">Verwendungszweck</label>
              <input type="text" name="usage" id="usage" class="form-control" />
            </div>
            <div class="form-group">
              <label for="amount" class="text-white">Betrag</label>
              <input type="number" pattern="numeric" name="amount" id="amount" class="form-control" />
            </div>
          </div>
          <div class="modal-footer border-0">
            <button type="button" class="btn text" data-dismiss="modal">Abbrechen</button>
            <input type="submit" class="btn btn-sm btn-outline-warning" value="Speichern" />
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- REQUIRED SCRIPTS -->
  <!-- jQuery -->
  <script src="<?php echo $dir_plugins . "jquery/jquery.min.js"; ?>"></script>
  <!-- Bootstrap 4 -->
  <script src="<?php echo $dir_plugins . "bootstrap/js/bootstrap.bundle.min.js"; ?>"></script>
  <!-- AdminLTE App -->
  <script src="<?php echo $dir_js . "adminlte.min.js"; ?>"></script>
  <script src="<?php echo $dir_js . "loader.js"; ?>"></script>
  <script src="<?php echo $dir_api . "gang/gang.js"; ?>"></script>
  <script src="<?php echo $dir_api . "user/user.js"; ?>"></script>
  <script src="<?php echo $dir_api . "avatar/avatar.js"; ?>"></script>
  <script>
    new Loader().init();
    document.querySelector(".main-sidebar #gang").classList.add("active");
    const gang = new GangMoney;
    const user = new User;
    const userData = user.getSession();
    const balance = parseInt(gang.getBalance()).toLocaleString(undefined);
    const transactions = gang.getTransactions();
    const moneyOuput = document.querySelector(".content #gang_money table tbody");
    // FIXME When we have an negative number we there is an '-' in front of the number which is dark grey and not red
    document.querySelector(".content #gang_money .card-title").innerHTML = `Gangkasse: <small class="${balance > 0 ? 'text-success' : 'text-danger'}">${balance} €</small>`;
    for (const key in transactions) {
      const transaction = transactions[key];
      var rawAmount = parseInt(transaction.amount).toLocaleString(undefined);
      var amount = rawAmount > 0 ? `<p class="text text-success mb-0">+ ${rawAmount} €</p>` : `<p class="text text-danger mb-0">${rawAmount} €</p>`;
      var date = new Date(transaction.date);
      moneyOuput.innerHTML += `<tr id="transaction-${transaction.id}" class="text-center">
          <td>
            <p class="text mb-0" data-toggle="tooltip" title="${date.getHours()}:${date.getMinutes()} Uhr">
              ${date.getDate()}.${date.getMonth()}.${date.getFullYear()}
            </p>
          </td>
          <td><p class="text mb-0"><i>${transaction.reason}</i></p></td>
          <td>
            <p class="text mb-0">
              <img class="img-circle img-size-32 mr-2" src="${transaction.avatar_url}" alt="Avatar of ${transaction.username}" />
              ${transaction.username}
            </p>
          </td>
          <td>${amount}</td>
        </tr>`;
    }
    $('[data-toggle="tooltip"]').tooltip();

    $("#add-transaction-modal").on("show.bs.modal", function(e) {
      const modal = this,
        form = this.querySelector("#add-transaction-form");

      form.addEventListener("submit", function(e) {
        e.preventDefault();

        const formData = {
          user: userData.userId,
          usage: this.querySelector("#usage").value,
          amount: parseInt(this.querySelector("#amount").value)
        };
        let res = gang.registerTransaction(formData.user, formData.usage, formData.amount);
        if (res.error == null) {
          const now = new Date();
          const newBalance = parseInt(gang.getBalance()).toLocaleString(undefined);
          var amount =
            formData.amount > 0 ?
            `<p class="text text-success mb-0">+ ${formData.amount.toLocaleString(undefined)} €</p>` :
            `<p class="text text-danger mb-0">${formData.amount.toLocaleString(undefined)} €</p>`;
          const userAvatar = new Avatar().get(userData.userId).avatar_url;
          document.querySelector(".content #gang_money .card-title").innerHTML = `Gangkasse: <small class="${newBalance > 0 ? 'text-success' : 'text-danger'}">${newBalance} €</small>`;
          moneyOuput.innerHTML = `<tr id="transaction-${res.inserted_id}" class="text-center">
              <td>
                <p class="text mb-0" data-toggle="tooltip" title="${now.getHours()}:${now.getMinutes()} Uhr">
                  ${now.getDate()}.${now.getMonth()}.${now.getFullYear()}
                </p>
              </td>
              <td><p class="text mb-0"><i>${formData.usage}</i></p></td>
              <td>
                <p class="text mb-0">
                  <img class="img-circle img-size-32 mr-2" src="${userAvatar}" alt="Avatar of ${userData.username}" />
                  ${userData.username}
                </p>
              </td>
              <td>${amount}</td>
            </tr>` + moneyOuput.innerHTML;
        } else {
          console.error(res.error);
        }
        $(modal).modal("hide");
        form.reset();
      })
    });

    $("#add-transaction-modal").on("hide.bs.modal", function(e) {
      const modal = this,
        form = this.querySelector("#add-transaction-form");
      form.reset();
    });
  </script>
</body>

</html>