<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="MNREGA">
    <meta name="author" content="Bondili Rohan Singh">
    <link rel="shortcut icon" href="assets/icons/colors.ico">
    <title>Adminstrator | Dashboard</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/dashboard.css" rel="stylesheet">
    <link rel="shortcut icon" href="assets/icons/logo.ico">
  </head>

  <body>
<script type="text/javascript">
if (localStorage.pagecount) { localStorage.pagecount=Number(localStorage.pagecount) +1; } else { localStorage.pagecount=1; } document.write("Visits: " + localStorage.pagecount + " time(s).");

</script>
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <p id ="custom">MNREGA - Mahatma Gandhi Rural Employment Guarantee Act</p>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Dashboard</a></li>
            <li><a href="#">Settings</a></li>
            <li><a href="#">Profile</a></li>
            <li><a href="mlogout.php">Logout</a></li>
          </ul>
          <form class="navbar-form navbar-right">
            <input type="text" class="form-control" placeholder="Search">
          </form>
        </div>
      </div>
    </div>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li class="active"><a href="#">
              <span class="badge pull-right">2</span>
              Overview</a>
            </li>
              <li>
                <a href="#">
                <span class="badge pull-right">10</span>
                Reports
              </a>
              </li>
            <li><a href="#">User Groups</a></li>
            <li><a href="#">Job Tracking</a></li>

          </ul>

          <!-- 
          <ul class="nav nav-sidebar">
            <li><a href="">Nav item</a></li>
            <li><a href="">Nav item again</a></li>
            <li><a href="">One more nav</a></li>
            <li><a href="">Another nav item</a></li>
            <li><a href="">More navigation</a></li>
          </ul>
          <ul class="nav nav-sidebar">
            <li><a href="">Nav item again</a></li>
            <li><a href="">One more nav</a></li>
            <li><a href="">Another nav item</a></li>
          </ul> -->
        
        </div>

        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Dashboard</h1>

        <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Sr.</th>
                  <th>Name</th>
                  <th>Population</th>
                  <th>Jobs Available </th>
                  <th>Umemployment %</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>Katpadi</td>
                  <td>23,562</td>
                  <td>4,242</td>
                  <td>56 %</td>
                </tr>
                <tr>
                   <td>2</td>
                  <td>Nangaimozhi</td>
                  <td>34,432</td>
                  <td>4,322</td>
                  <td>69 %</td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>Jeeyapuram</td>
                  <td>4,432</td>
                  <td>322</td>
                  <td>20 %</td></tr>
                <tr>
                  <td>4</td>
                  <td>Solaithel</td>
                  <td>74,302</td>
                  <td>54,322</td>
                  <td>18 %</td>
                </tr>
                <tr>
                  <td>5</td>
                  <td>Tirur</td>
                  <td>84,482</td>
                  <td>67,322</td>
                  <td>24 %</td>
                </tr>
                <tr>
                  <td>6</td>
                  <td>Varus</td>
                  <td>76,982</td>
                  <td>64,789</td>
                  <td>12 %</td>
                </tr>
                <tr>
                  <td>7</td>
                  <td>Virup</td>
                  <td>34,432</td>
                  <td>2,322</td>
                  <td>89 %</td>
                </tr>
                <tr>
                  <td>8</td>
                  <td>Madicel</td>
                  <td>34,432</td>
                  <td>4,322</td>
                  <td>83 %</td>
                </tr>
                <tr>
                  <td>9</td>
                  <td>Narth Sarel</td>
                  <td>89,432</td>
                  <td>78,322</td>
                  <td>2 %</td>
                </tr>
                <tr>
                  <td>10</td>
                  <td>Muna Pudur</td>
                  <td>23,432</td>
                  <td>12,322</td>
                  <td>54 %</td>
                </tr>
                <!-- <tr>
                  <td>11</td>
                  <td>Annan Koli</td>
                  <td>34,432</td>
                  <td>4,322</td>
                  <td>69 %</td>
                </tr> -->
                <!-- <tr>
                  <td>1,004</td>
                  <td>label</td>
                  <td>label</td>
                  <td>label</td>
                  <td>label</td>
                </tr>
                <tr>
                  <td>1,005</td>
                  <td>label</td>
                  <td>label</td>
                  <td>label</td>
                  <td>label</td>
                </tr>
                <tr>
                  <td>1,006</td>
                  <td>label</td>
                  <td>label</td>
                  <td>label</td>
                  <td>label</td>
                </tr>
                <tr>
                  <td>1,007</td>
                  <td>label</td>
                  <td>label</td>
                  <td>label</td>
                  <td>label</td>
                </tr>
                <tr>
                  <td>1,008</td>
                  <td>label</td>
                  <td>label</td>
                  <td>label</td>
                  <td>label</td>
                </tr>
                <tr>
                  <td>1,009</td>
                  <td>label</td>
                  <td>label</td>
                  <td>label</td>
                  <td>label</td>
                </tr>
                <tr>
                  <td>1,010</td>
                  <td>label</td>
                  <td>label</td>
                  <td>label</td>
                  <td>label</td>
                </tr>
                <tr>
                  <td>1,011</td>
                  <td>label</td>
                  <td>label</td>
                  <td>label</td>
                  <td>label</td>
                </tr>
                <tr>
                  <td>1,012</td>
                  <td>label</td>
                  <td>label</td>
                  <td>label</td>
                  <td>label</td>
                </tr>
                <tr>
                  <td>1,013</td>
                  <td>label</td>
                  <td>label</td>
                  <td>label</td>
                  <td>label</td>
                </tr>
                <tr>
                  <td>1,014</td>
                  <td>label</td>
                  <td>label</td>
                  <td>label</td>
                  <td>label</td>
                </tr>
                <tr>
                  <td>1,015</td>
                  <td>label</td>
                  <td>label</td>
                  <td>label</td>
                  <td>label</td>
                </tr> -->
              </tbody>
            </table>
          </div>
       
       

        </div> 

        
      </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/docs.min.js"></script>
  </body>
</html>
