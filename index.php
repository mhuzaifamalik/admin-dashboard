<!DOCTYPE html>
<html>

<head>
  <title> Dashboard </title>
  <meta charset="UTF-8">
  <meta name="keywords" content="HTML, CSS, JavaScript">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="/usdoorsdev/images/fav.png" type="image/x-icon">
  <?php include 'includes/css-links.php';?>
</head>

<body>
  <main>
    <div class="dashboard-wrapper">
      <?php include 'includes/sidebar.php';?>
      <div class="dashboard-content">
        <div class="admin-top-bar">
          <div class="admin-drp-wrapper">
            <a class="dropdown-link" href="javascript:;">
              <span class="icon"><i class="fa-solid fa-user-tie"></i></span>Hi, Admin!
            </a>
            <ul class="admin-dropdown">
              <!-- <li>
                <a href="javascript:;">
                  <span class="icon">
                    <i class="fa-solid fa-user"></i>
                  </span>
                  Profile
                </a>
              </li> -->
              <li>
                <a href="/usdoorsdev/dashboard/logout">
                  <span class="icon">
                    <i class="fa-solid fa-arrow-right-from-bracket"></i>
                  </span>
                  Log Out
                </a>
              </li>
            </ul>
          </div>
          <select class="time-period-select dashboard-filter">
            <option value="Daily">Daily</option>
            <option value="Monthly">Monthly</option>
            <option value="Yearly">Yearly</option>
          </select>
        </div>
        <div class="dashboard-card">
          <h5 class="theme-h5">Dashboard</h5>
          <div class="row g-4">
            <div class="col-lg-2 col-md-4 col-12 panel">
              <div class="dashboard-card-item h-100">
                <span class="icon" style="background-color: #6FD943;">
                  <i class="fa-solid fa-box-check"></i>
                </span>
                <h6 class="card-item-h6">Total Products</h6>
                <h6 class="items-count products-count">12</h6>
              </div>
            </div>
            <div class="col-lg-2 col-md-4 col-12 panel">
              <div class="dashboard-card-item h-100">
                <span class="icon" style="background-color: #3ec9d6;">
                  <i class="fa-solid fa-users"></i>
                </span>
                <h6 class="card-item-h6">Total Customers</h6>
                <h6 class="items-count customers-count">2</h6>
              </div>
            </div>
            <div class="col-lg-2 col-md-4 col-12 panel">
              <div class="dashboard-card-item h-100">
                <span class="icon" style="background-color: #ffa21d;">
                  <i class="fa-solid fa-money-check-dollar-pen"></i>
                </span>
                <h6 class="card-item-h6">Total Orders</h6>
                <h6 class="items-count orders-count">10</h6>
              </div>
            </div>
            <div class="col-lg-2 col-md-4 col-12 panel">
              <div class="dashboard-card-item h-100">
                <span class="icon" style="background-color: #0a66c2;">
                  <i class="fa-solid fa-money-bill-1-wave"></i>
                </span>
                <h6 class="card-item-h6">Total Sales</h6>
                <h6 class="items-count sales-count">$1</h6>
              </div>
            </div>
            <div class="col-md-2 col-12 panel">
              <div class="dashboard-card-item h-100">
                <span class="icon" style="background-color: #eb8698;">
                  <i class="fa-solid fa-users"></i>
                </span>
                <h6 class="card-item-h6">Total Visitors</h6>
                <h6 class="items-count visitor-count">35</h6>
              </div>
            </div>
            <div class="col-md-2 col-12 panel">
              <div class="dashboard-card-item h-100">
                <span class="icon" style="background-color: #eb8698;">
                  <i class="fa-solid fa-users"></i>
                </span>
                <h6 class="card-item-h6">Current Visitors</h6>
                <h6 class="items-count current-visitor">1</h6>
              </div>
            </div>
            <!-- <div class="col-lg-4 col-12 panel">
              <div class="dashboard-card-item h-100">
                <h4 class="theme-h4 mb-3">Good Afternoon,</h4>
                <h6 class="card-item-h6">
                  Hi, Admin!
                </h6>
                <p class="theme-p">Have a nice day! Did you know that you can quickly add your favorite product or category to the theme?</p>
              </div>
            </div> -->
            <div class="col-8 panel">
              <div class="dashboard-card-item h-100">
                <div class="card-head">
                  <h5 class="theme-h5">Website Visits</h5>
                  <select class="lead-filters">
                    <option value="" selected>All Category</option>
                    <option value="Campaign Lead">Campaign Lead</option>
                    <option value="Organic Lead">Organic Lead</option>
                    <option value="LinkedIn Lead">LinkedIn Lead</option>
                    <option value="Instagram Lead">Instagram Lead</option>
                    <option value="TikTok Lead">TikTok Lead</option>
                    <option value="Twitter Lead">Twitter Lead</option>
                    <option value="Pinterest Lead">Pinterest Lead</option>
                    <option value="Facebook Lead">Facebook Lead</option>
                    <option value="Google Lead">Google Lead</option>
                    <option value="Non-organic Lead">Non-organic Lead</option>
                  </select>
                </div>
                <div class="loading-lead">
                  <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                    style="margin:auto;background:transparent;display:block;" width="200px" height="200px"
                    viewBox="0 0 100 100" preserveAspectRatio="xMidYMid">
                    <path d="M10 50A40 40 0 0 0 90 50A40 42 0 0 1 10 50" fill="#e15b64" stroke="none">
                      <animateTransform attributeName="transform" type="rotate" dur="1s" repeatCount="indefinite"
                        keyTimes="0;1" values="0 50 51;360 50 51"></animateTransform>
                    </path>
                  </svg>
                </div>
                <table class="table dashboard-table lead-table">
                  <thead>
                    <tr>
                      <th>Lead Type</th>
                      <th>Date</th>
                      <th>Source</th>
                      <th>Duration</th>
                      <th>Urls</th>
                      <th>City</th>
                      <th>Country</th>
                      <th>Time Zone</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody class="leads-table-body">

                    <tr>
                      <td>Organic Lead</td>
                      <td>August 7, 2023</td>
                      <td></td>
                      <td>02:18:58</td>
                      <td>10</td>
                      <td>New Castle</td>
                      <td>United States</td>
                      <td>America/New_York</td>
                      <td>
                        <a href="javascript:;" data-lead="64d16026fb14afb62546151b"
                          onclick="detLeadFetch('64d16026fb14afb62546151b')" class="view-item" title="View Lead"><i
                            class="fa-solid fa-eye"></i></a>
                      </td>
                    </tr>

                    <tr>
                      <td>Organic Lead</td>
                      <td>August 7, 2023</td>
                      <td></td>
                      <td>00:00:16</td>
                      <td>4</td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td>
                        <a href="javascript:;" data-lead="64d16249ba42dec7bf48aa1a"
                          onclick="detLeadFetch('64d16249ba42dec7bf48aa1a')" class="view-item" title="View Lead"><i
                            class="fa-solid fa-eye"></i></a>
                      </td>
                    </tr>

                    <tr>
                      <td>Organic Lead</td>
                      <td>August 7, 2023</td>
                      <td></td>
                      <td>00:00:18</td>
                      <td>4</td>
                      <td>Irving</td>
                      <td>United States</td>
                      <td>America/Chicago</td>
                      <td>
                        <a href="javascript:;" data-lead="64d16c9dfb14afb625461565"
                          onclick="detLeadFetch('64d16c9dfb14afb625461565')" class="view-item" title="View Lead"><i
                            class="fa-solid fa-eye"></i></a>
                      </td>
                    </tr>

                    <tr>
                      <td>Non-organic Lead</td>
                      <td>August 7, 2023</td>
                      <td></td>
                      <td>00:00:12</td>
                      <td>3</td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td>
                        <a href="javascript:;" data-lead="64d16e6914829296efc20a57"
                          onclick="detLeadFetch('64d16e6914829296efc20a57')" class="view-item" title="View Lead"><i
                            class="fa-solid fa-eye"></i></a>
                      </td>
                    </tr>

                    <tr>
                      <td>Non-organic Lead</td>
                      <td>August 7, 2023</td>
                      <td></td>
                      <td>00:01:23</td>
                      <td>2</td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td>
                        <a href="javascript:;" data-lead="64d16ecf14829296efc20aa8"
                          onclick="detLeadFetch('64d16ecf14829296efc20aa8')" class="view-item" title="View Lead"><i
                            class="fa-solid fa-eye"></i></a>
                      </td>
                    </tr>

                  </tbody>
                </table>
                <ul class="lead-pagination pagination">

                  <li><button class="active" onclick="leadPagination(this,'1')">1</button></li>

                  <li><button class="" onclick="leadPagination(this,'2')">2</button></li>

                  <li><button class="" onclick="leadPagination(this,'3')">3</button></li>

                  <li><button class="" onclick="leadPagination(this,'4')">4</button></li>

                  <li><button class="" onclick="leadPagination(this,'5')">5</button></li>

                  <li><button class="" onclick="leadPagination(this,'6')">6</button></li>

                  <li><button class="" onclick="leadPagination(this,'7')">7</button></li>

                </ul>
              </div>
            </div>
            <div class="col-4">
              <div class="dashboard-card-item">
                <h4 class="theme-h4 mb-3">Good Afternoon,</h4>
                <h6 class="card-item-h6">
                  <!-- <span class="icon"><i class="fa-solid fa-user-tie"></i></span> -->
                  Hi, Admin!
                </h6>
                <p class="theme-p">Have a nice day! Did you know that you can quickly check your visitors info...</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </main>
  <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#detail-lead-modal">
    Launch demo modal
  </button> -->
  <div class="modal fade lead-modal" id="detail-lead-modal" tabindex="-1" aria-labelledby="detail-lead-modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <button type="button" class="close-btn" data-bs-dismiss="modal" aria-label="Close"><i class="fa-solid fa-xmark"></i></button>
        <h5 class="theme-h5 m-0" id="detail-lead-modalLabel">Lead Details</h5>
        <hr>
        <div class="lead-content">
          <div class="row g-4">
            <div class="col-lg-6 col-12">
              <div class="dashboard-card-item">
                <h6 class="card-item-h6">Url Visits</h6>
                <ul class="det-ul url-ul" id="det-lead-url"></ul>
              </div>
            </div>
            <div class="col-lg-6 col-12">
              <div class="dashboard-card-item">
                <h6 class="card-item-h6">Lead Detail</h6>
                <ul class="det-ul info-ul" id="det-lead-info"></ul>
              </div>
            </div>
          </div>
        </div>
        <!-- <button type="button" class="theme-btn" data-bs-dismiss="modal">Close</button> -->
      </div>
    </div>
  </div>
  <?php include 'includes/footer.php';?>
  <?php include 'includes/script-links.php';?>
  <script>
    function millisecondsToReadableString(milliseconds) {
      const seconds = Math.floor((milliseconds / 1000) % 60);
      const minutes = Math.floor((milliseconds / (1000 * 60)) % 60);
      const hours = Math.floor(milliseconds / (1000 * 60 * 60));

      const hoursStr = hours.toString().padStart(2, '0');
      const minutesStr = minutes.toString().padStart(2, '0');
      const secondsStr = seconds.toString().padStart(2, '0');

      return `${hoursStr}:${minutesStr}:${secondsStr}`;
    }
    const detLeadFetch = async (id) => {
      $(".loader").css("display", "flex")
      const leadRes = await fetch('/usdoorsdev/dashboard/leads/fetchById', {
        method: 'POST',
        headers: {
          "Content-Type": "application/json",
        },
        body: JSON.stringify({
          id
        })
      })
      const timeOptions = {
        hour: 'numeric',
        minute: 'numeric',
        second: 'numeric',
        hour12: true
      };
      const dateOptions = {
        year: 'numeric',
        month: 'long',
        day: 'numeric'
      };
      const leadData = await leadRes.json()
      const lead = leadData.lead
      console.log(lead)
      $("#det-lead-info").html('')
      $("#det-lead-url").html('')
      let leadInfo = ''
      leadInfo += `<li><strong>ClientIp:</strong><span>${lead.clientIp}</span></li>`
      leadInfo += `<li><strong>Date:</strong><span>${new Date(lead.sessionStart).toLocaleString('en-US', dateOptions)}</span></li>`
      leadInfo += `<li><strong>sessionStart:</strong><span>${new Date(lead.sessionStart).toLocaleString('en-US', timeOptions)}</span></li>`
      leadInfo += `<li><strong>sessionEnd:</strong><span>${new Date(lead.sessionEnd).toLocaleString('en-US', timeOptions)}</span></li>`
      leadInfo += `<li><strong>sessionDuration:</strong><span>${millisecondsToReadableString(lead.sessionDuration)}</span></li>`
      leadInfo += `<li><strong>leadType:</strong><span>${lead.leadType}</span></li>`
      if (lead.utmSource) {
        leadInfo += `<li><strong>utmSource</strong><span>${lead.utmSource}</span></li>`
      }
      if (lead.utmMedium) {
        leadInfo += `<li><strong>utmMedium</strong><span>${lead.utmMedium}</span></li>`
      }
      if (lead.utmCampaign) {
        leadInfo += `<li><strong>utmCampaign</strong><span>${lead.utmCampaign}</span></li>`
      }
      leadInfo += `<li><strong>country</strong><span>${lead.country}</span></li>`
      leadInfo += `<li><strong>city</strong><span>${lead.city}</span></li>`
      leadInfo += `<li><strong>timeZone</strong><span>${lead.timeZone}</span></li>`
      lead.routeUrls.forEach(currentUrl => {
        $("#det-lead-url").append(`<li><a class="url" href="${currentUrl.url}" target="_blank" >${currentUrl.url}</a><span class="duration">${new Date(currentUrl.time).toLocaleString('en-US', timeOptions)}</span></li>`)
      });
      $("#det-lead-info").html(leadInfo)
      $(".loader").css("display", "none")
      $("#detail-lead-modal").modal('show')
      console.log(leadData)
    }
  </script>
  <script>
    const leadPagination = async (btn, page, filter = '') => {
      if (!$(btn).hasClass('active')) {
        $(".dashboard-card-item .loading-lead").css("display", "flex")
        $(".lead-pagination li button").removeClass("active")
        $(btn).addClass("active")
        const leadRes = await fetch('/usdoorsdev/dashboard/leads/pagination', {
          method: 'POST',
          headers: {
            "Content-Type": "application/json",
          },
          body: JSON.stringify({
            page,
            filter
          })
        })
        const leadData = await leadRes.json()
        debugger
        $(".leads-table-body").html('')
        leadData.lead.forEach(lead => {
          $(".leads-table-body").append(`
              <tr>
                <td>${lead.leadType}</td>
                <td>${new Date(lead.sessionStart).toLocaleString('en-US', {year: 'numeric', month: 'long', day: 'numeric'})}</td>
                <td>${lead.utmSource}</td>
                <td>${millisecondsToReadableString(lead.sessionDuration)}</td>
                <td>${lead.routeUrls.length}</td>
                <td>${lead.city}</td>
                <td>${lead.country}</td>
                <td>${lead.timeZone}</td>
                <td>
                  <a href="javascript:;" data-lead="${lead._id}" onclick="detLeadFetch('${lead._id}')" class="view-item" title="View Lead"><i class="fa-solid fa-eye"></i></a>
                </td>
              </tr>
            `)
        })
        $(".dashboard-card-item .loading-lead").css("display", "none")
      }
    }
  </script>
  <script>
    $(".lead-filters").change(async function() {
      $(".dashboard-card-item .loading-lead").css("display", "flex")
      const filter = $(this).val()
      $(".lead-pagination li button").removeClass("active")
      $(this).addClass("active")
      const leadRes = await fetch('/usdoorsdev/dashboard/leads/filter', {
        method: 'POST',
        headers: {
          "Content-Type": "application/json",
        },
        body: JSON.stringify({
          filter
        })
      })
      const leadData = await leadRes.json()
      $(".leads-table-body").html('')
      leadData.leads.forEach(lead => {
        $(".leads-table-body").append(`
            <tr>
              <td>${lead.leadType}</td>
              <td>${new Date(lead.sessionStart).toLocaleString('en-US', {year: 'numeric', month: 'long', day: 'numeric'})}</td>
              <td>${lead.utmSource}</td>
              <td>${millisecondsToReadableString(lead.sessionDuration)}</td>
              <td>${lead.routeUrls.length}</td>
              <td>${lead.city}</td>
              <td>${lead.country}</td>
              <td>${lead.timeZone}</td>
              <td>
                <a href="javascript:;" data-lead="${lead._id}" onclick="detLeadFetch('${lead._id}')" class="view-item" title="View Lead"><i class="fa-solid fa-eye"></i></a>
              </td>
            </tr>
          `)
      })
      const pages = Math.ceil(leadData.totalLeads / 5)
      $(".lead-pagination").html('')
      for (i = 1; i <= pages; i++) {
        $(".lead-pagination").append(`<li><button class="${ i == 1 ? 'active':'' }" onclick="leadPagination(this,'${i}','${filter}')">${ i }</button></li>`)
      }
      $(".dashboard-card-item .loading-lead").css("display", "none")
    })
  </script>
  <script>
    $(".time-period-select").change(async function() {
      $(".dashboard-card-item .items-count:not(.current-visitor):not(.sales-count)").html(`<i class="fa-solid fa-spinner-third fa-spin"></i>`)
      const filter = $(this).val()
      const countRes = await fetch('/usdoorsdev/countdocuments/', {
        method: 'POST',
        headers: {
          "Content-Type": "application/json",
        },
        body: JSON.stringify({
          filter
        })
      })
      const countData = await countRes.json()
      $(".products-count").html(countData.data.productCount)
      $(".customers-count").html(countData.data.customerCount)
      $(".orders-count").html(countData.data.orderCount)
      $(".visitor-count").html(countData.data.leadCount)
    })
  </script>
</body>

</html>