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
  <title>Infopanel • Benutzerverwaltung</title>
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
              <h1 class="m-0">Benutzerverwaltung</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="<?php echo $url_host; ?>">Infopanel</a></li>
                <li class="breadcrumb-item"><a href="<?php echo $url_host . "Dashboard/"; ?>">Dashboard</a></li>
                <li class="breadcrumb-item active">Benutzerverwaltung</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
      <!-- ./content-header -->

      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col">
              <div class="card card-outline card-orange">
                <div class="card-header border-0">
                  <p class="card-title font-weight-bold">
                    Benutzer
                  </p>
                  <div class="card-tools">
                    <div class="input-group">
                      <input type="text" id="searchUser" class="form-control shadow-none" onkeyup="js:searchTable(3, 'userTable', this.id)" placeholder="Benutzer suchen">
                      <div class="input-group-append">
                        <button class="btn btn-outline-warning" data-toggle="modal" data-target="#add-user-modal">
                          <i class="fas fa-user-plus"></i>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-body p-0">
                  <div class="table-responsive table-borderless">
                    <table id="userTable" class="table table-hover mb-0">
                      <thead>
                        <tr class="text-center">
                          <th>Id</th>
                          <th>Panel zugriff</th>
                          <th>Rolle</th>
                          <th>Benutzername</th>
                          <th>E-Mail</th>
                        </tr>
                      </thead>
                      <tbody></tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

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

  <div id="add-user-modal" class="modal fade">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header border-0">
          <h5 class="modal-title title font-weight-bold">Benutzer erstellen</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form id="add-user-form">
          <div class="modal-body py-0">
            <div class="form-group">
              <label for="Rolle" class="text-white">Rolle</label>
              <select name="role" id="role" class="form-control"></select>
            </div>

            <div class="form-group">
              <label for="tool-access" class="text-white">Infopanel Zugriff</label>
              <select name="tool-access" id="tool-access" class="form-control">
                <option value="1">Gewährt</option>
                <option value="0">Verweigert</option>
              </select>
            </div>

            <div class="form-group">
              <label for="username" class="text-white">Benutzername</label>
              <input type="text" name="username" id="username" class="form-control" />
            </div>

            <div class="form-group">
              <label for="password" class="text-white">Passwort</label>
              <input type="text" name="password" id="password" class="form-control" />
            </div>

            <div class="form-group">
              <label for="email" class="text-white">E-Mail</label>
              <input type="text" name="email" id="email" class="form-control" />
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

  <div id="edit-user-modal" class="modal fade">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header border-0">
          <h5 class="modal-title title font-weight-bold">Benutzer bearbeiten</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form id="edit-user-form">
          <div class="modal-body p-0">

            <div id="nav-container" class="p-3">
              <nav class="nav nav-pills nav-justified rounded">
                <a href="#general" class="nav-item nav-link active" data-toggle="tab" role="tab">
                  Allgemeines
                </a>
                <a href="#pw" class="nav-item nav-link" data-toggle="tab" role="tab">
                  Passwort
                </a>
              </nav>
            </div>
            <div class="tab-container">
              <div class="tab-content px-3">
                <div id="general" class="tab-pane fade show active" role="tabpanel">
                  <div class="form-group">
                    <label for="role">Rolle</label>
                    <select name="role" id="role" class="form-control"></select>
                  </div>

                  <div class="form-group">
                    <label for="tool-access">Panel Zugriff</label>
                    <select name="tool-access" id="tool-access" class="form-control">
                      <option value="1">Gewährt</option>
                      <option value="0">Verweigert</option>
                    </select>
                  </div>

                  <div class="form-group">
                    <label for="username">Benutzername</label>
                    <input type="text" name="username" id="username" class="form-control">
                  </div>

                  <div class="form-group">
                    <label for="email">E-Mail</label>
                    <input type="text" name="email" id="email" class="form-control">
                  </div>
                </div>

                <div id="pw" class="tab-pane fade show" role="tabpanel">
                  <div class="form-group">
                    <label for="new-password">Neues Passwort</label>
                    <input type="text" name="new-password" id="new-password" class="form-control">
                  </div>

                  <div class="form-group">
                    <label for="repeat-password">Passwort wiederholen</label>
                    <input type="text" name="repeat-password" id="repeat-password" class="form-control">
                  </div>
                </div>
              </div>
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
  <script src="<?php echo $dir_js . "realliferpg.js"; ?>"></script>
  <script src="<?php echo $dir_api . "avatar/avatar.js"; ?>"></script>
  <script src="<?php echo $dir_api . "user/user.js"; ?>"></script>
  <script src="<?php echo $dir_api . "role/role.js"; ?>"></script>
  <script>
    new Loader().init();
    document.querySelector(".main-sidebar #user").classList.add("active");
    const avatar = new Avatar();
    const user = new User();
    const role = new Role();
    const roles = role.getAll();
    const userList = user.getAll();
    const userOutput = document.querySelector(".content table tbody");
    if (userList.length > 0) {
      userList.map((user, index) => {
        userOutput.innerHTML += `<tr id="user-${user.id}" class="text-center">
          <td>
            <p class="text mb-0"># ${user.id}</p>
          </td>
          <td><input type="checkbox" ${user.tool_access == "1" ? "checked" : "unchecked"} onclick="js:return false;"></td>
          <td>
            <p class="btn btn-sm btn-outline-warning mb-0">${user.role}</p>
          </td>
          <td>
            <p class="text mb-0">
              <img class="img-circle img-size-32 mr-2" src="${user.avatar_url}" alt="Avatar of ${user.username}">
              ${user.username}
            </p>
          </td>
          <td>${user.email != null ? `<a class="link" href="mailto:${user.email}">${user.email}</a>` : `<p class="text mb-0"><i>Keine E-Mail</i></p>`}</td>
          <td class="text-right">
            <button class="btn btn-outline-warning px-3 mr-2" data-toggle="modal" data-target="#edit-user-modal" data-user="${user.id}">
              <i class="fas fa-user-edit"></i>
            </button>
            <button class="btn btn-outline-danger px-3" data-user="${user.id}" onclick="document.querySelector('#user-${user.id}').remove(); user.delete(${user.id});">
              <i class="fas fa-trash-alt"></i>
            </button>
          </td>
        </tr>`;
      });
    } else {
      userOutput.innerHTML = `<td colspan="5"><p class="text text-center  mb-0">Keine Benutzer gefunden</p></td>`;
    }

    $("#add-user-modal").on("show.bs.modal", function(e) {
      const modal = this,
        form = this.querySelector("form");

      roles.map((role, index) => {
        form.querySelector("#role").innerHTML += `<option value="${role.id}">${role.role}</option>`;
      });

      form.addEventListener("submit", function(e) {
        e.preventDefault();
        e.stopImmediatePropagation();

        let formData = {
          role: form.querySelector("#role").value,
          toolAccess: form.querySelector("#tool-access").value,
          username: form.querySelector("#username").value,
          password: form.querySelector("#password").value,
          email: form.querySelector("#email").value != "" ? form.querySelector("#email").value : null,
        };

        let res = user.create(formData.toolAccess, formData.role, formData.username, formData.password, formData.email);
        if (res.error == null) {
          if (userList.length == 0) {
            userOutput.innerHTML = "";
          }
          let res1 = avatar.upload(res.inserted_id, null); // just setting the default avatar
          if (res1.error == null) {
            var userAvatar = avatar.get(res1.inserted_id).avatar_url;
            var userRole;
            for (const key in roles) {
              const role = roles[key];
              if (role.id == formData.role) {
                userRole = role.name;
              }
            }
            userOutput.innerHTML = `<tr id="user-${res.inserted_id}" class="text-center">
                <td>
                  <p class="text mb-0"># ${res.inserted_id}</p>
                </td>
                <td><input type="checkbox" ${formData.tool_access == "1" ? "checked" : "unchecked"} onclick="js:return false;"></td>
                <td>
                  <p class="btn btn-sm btn-outline-warning mb-0">${userRole}</p>
                </td>
                <td>
                  <p class="text mb-0">
                    <img class="img-circle img-size-32 mr-2" src="${userAvatar}" alt="Avatar of ${formData.username}">
                    ${formData.username}
                  </p>
                </td>
                <td>${formData.email != null ? `<a class="link" href="mailto:${formData.email}">${formData.email}</a>` : `<p class="text mb-0"><i>Keine E-Mail</i></p>`}</td>
                <td class="text-right">
                  <button class="btn btn-outline-warning px-3 mr-2" data-toggle="modal" data-target="#edit-user-modal" data-user="${res.inserted_id}">
                    <i class="fas fa-user-edit"></i>
                  </button>
                  <button class="btn btn-outline-danger px-3" data-user="${user.id}" onclick="document.querySelector('#user-${res.inserted_id}').remove(); user.delete(${res.inserted_id});">
                    <i class="fas fa-trash-alt"></i>
                  </button>
                </td>
              </tr>` + userOutput.innerHTML;
          }
        } else {
          console.error(err);
        }
        $(modal).modal("hide");
      });
    });

    $("#add-user-modal").on("hide.bs.modal", function(e) {
      const modal = this,
        form = this.querySelector("form");
      form.reset();
    });

    $("#edit-user-modal").on("show.bs.modal", function(e) {
      const modal = this,
        userId = e.relatedTarget.getAttribute("data-user"),
        userData = user.get(userId),
        form = this.querySelector("form");

      roles.map((role, index) => {
        form.querySelector("#role").innerHTML += `<option value="${role.id}">${role.role}</option>`;
      });

      form.querySelector("#username").value = userData.tool_access == "1" ? "Gewährt" : "Verweigert";
      form.querySelector("#username").value = userData.username;
      form.querySelector("#email").value = userData.email;

      form.addEventListener("submit", function(e) {
        e.preventDefault();
        e.stopImmediatePropagation();

        let formData;
        if (modal.querySelector("#general").classList.contains("active")) {
          formData = {
            role: form.querySelector("#role").value,
            toolAccess: form.querySelector("#tool-access").value,
            username: form.querySelector("#username").value,
            email: form.querySelector("#email").value,
          };
          var userAvatar = avatar.get(userId).avatar_url;
          let res = user.update(userId, formData.toolAccess, formData.role, formData.username, formData.email);
          // FIXME Display role instead of of role id
          if (res.error == null) {
            userOutput.querySelector(`#user-${userId}`).innerHTML = `<td>
                <p class="text mb-0"># ${userId}</p>
              </td>
              <td><input type="checkbox" ${formData.toolAccess == "1" ? "checked" : "unchecked"} onclick="js:return false;"></td>
              <td>
                <p class="btn btn-sm btn-outline-warning mb-0">${formData.role}</p>
              </td>
              <td>
                <p class="text mb-0">
                  <img class="img-circle img-size-32 mr-2" src="${userAvatar}" alt="Avatar of ${formData.username}">
                  ${formData.username}
                </p>
              </td>
              <td>${formData.email != null ? `<a class="link" href="mailto:${formData.email}">${formData.email}</a>` : `<p class="text mb-0"><i>Keine E-Mail</i></p>`}</td>
              <td class="text-right">
                <button class="btn btn-outline-warning px-3 mr-2" data-toggle="modal" data-target="#edit-user-modal" data-user="${userId}">
                  <i class="fas fa-user-edit"></i>
                </button>
                <button class="btn btn-outline-danger px-3" data-user="${userId}" onclick="document.querySelector('#user-${userId}').remove(); user.delete(${user.id});">
                  <i class="fas fa-trash-alt"></i>
                </button>
              </td>`;
            $(modal).modal("hide");
          } else {
            console.error(res.error);
          }
        } else {
          formData = {
            newPassword: form.querySelector("#new-password").value,
            repeatPassword: form.querySelector("#repeat-password").value,
          };
          if (formData.newPassword == formData.repeatPassword) {
            let res = user.updatePassword(userId, formData.newPassword);
            if (res.error == null) {
              $(modal).modal("hide");
            } else {
              console.error(res.error);
            }
          }
        }
      });
    });

    $("#edit-user-modal").on("hide.bs.modal", function(e) {
      const modal = this,
        form = this.querySelector("form");
      form.reset();
    });

    function searchTable(matrix, tableId, inputId) {
      var input, filter, table, tr, td, i, value, amount = 0;
      input = document.getElementById(inputId);
      filter = input.value.toUpperCase();
      table = document.getElementById(tableId);
      tr = table.getElementsByTagName("tr");
      for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[matrix];
        if (td) {
          value = td.textContent || td.innerText;
          if (value.toUpperCase().indexOf(filter) > -1) {
            tr[i].style.display = "";
            amount += 1;
          } else {
            tr[i].style.display = "none";
          }
          if (amount == 0) {
            if (table.querySelector("#no-results") == null) {
              $(`.content table tbody`).prepend(`<td id="no-results" colspan="5"><p class="text text-center  mb-0">Keine Benutzer gefunden</p></td>`);
            }
          } else {
            if (table.querySelector("#no-results") != null) {
              table.querySelector("#no-results").remove();
            }
          }
        }
      }
    }
  </script>
</body>

</html>