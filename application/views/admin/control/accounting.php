<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Control>Accounting | Administration Panel</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url();?>assets/admin/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?php echo base_url();?>assets/admin/css/plugins/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="<?php echo base_url();?>assets/admin/css/plugins/timeline.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url();?>assets/admin/css/sb-admin-2.css" rel="stylesheet">

    <!-- DataTables CSS -->
    <link href="<?php echo base_url();?>assets/admin/css/plugins/dataTables.bootstrap.css" rel="stylesheet">
  
    <!-- Custom Fonts -->
    <link href="<?php echo base_url();?>assets/admin/font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
<style>
#content {
border-collapse:collapse;
table-layout:fixed;
 word-wrap: break-word;
}

</style>
</head>

<body>

<input type="hidden" value="<?php echo base_url();?>" id="baseurl" name="baseurl">
    <div id="wrapper">

        <!-- Navigation -->
    <div class="navbar navbar-default navbar-static-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        <a class="navbar-brand" href="<?php echo base_url();?>admin/"><img src="<?php echo base_url();?>assets/images/ezlogo.png" style="width: 294px; margin-left: -96px;"></a>
                
        </div>
        <div class="navbar-collapse collapse">
        
      <div class="col-md-2"></div>
      <div class="col-md-4">
      <table width="100%" border="0">
  <tr>
    <td width="66%">Active Subscribers</td>
    <td width="34%">: <?php echo $countActiveMembers;?></td>
  </tr>
  <tr>
    <td>
Inactive Subscribers</td>
    <td>: <?php echo $countInactiveMembers;?></td>
  </tr>
  <tr>
    <td>6 Months Extension</td>
    <td>: <?php echo $countMonthsExtension;?></td>
  </tr>
  <tr>
    <td>1 Year Extension</td>
    <td>: <?php echo $countYearExtension;?></td>
  </tr>
</table>
     
      </div>   
      <div class="col-md-3">
      <br />
       
      <?php
       $fullname = $this->session->userdata('fullname');
	   ?>
      Administrator: <?php echo ucwords($fullname);?><br />
      <a href="<?php echo base_url();?>admin/loggedout/">Logout</a>
      </div>
        </div><!--/.nav-collapse -->
        
        
        <div class="navbar-collapse collapse">
           <ul class="nav navbar-nav navbar-right">
                
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">SUBSCRIBERS <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo base_url();?>admin/active/">ACTIVE</a></li>
                            <li><a href="<?php echo base_url();?>admin/inactive/">INACTIVE</a></li>
                        <li><a href="<?php echo base_url();?>admin/expired/">EXPIRED</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">PAYMENTS<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo base_url();?>admin/basic/">BASIC</a></li>
                            <li><a href="<?php echo base_url();?>admin/premium/">PREMIUM</a></li>
                            <li><a href="<?php echo base_url();?>admin/six_months/">6 MONTHS</a></li>
                        <li><a href="<?php echo base_url();?>admin/one_year/">1 YEAR</a></li>
                        <li><a href="<?php echo base_url();?>admin/bundle/">BUNDLE</a></li>
                        </ul>
                    </li>
                    <li><a href="<?php echo base_url();?>admin/ewallet/">E-WALLET</a></li>
                    <li class="dropdown">
                   <a href="#" class="dropdown-toggle" data-toggle="dropdown">E-CREDIT <b class="caret"></b></a>
                       <ul class="dropdown-menu">
                            <li><a href="<?php echo base_url();?>admin/ecredit/">E-CREDIT REQUEST </a></li>
              
                            <li><a href="<?php echo base_url();?>admin/ecredit_history/">E-CREDIT TRANSFER HISTORY </a></li>
                             <li><a href="<?php echo base_url();?>admin/ecreditconversionhistory/">E-CREDIT CONVERSION HISTORY </a></li>
               
                        </ul>

                        </li>
                     <li>
                 <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">TRANSFER <b class="caret"></b></a>
                       <ul class="dropdown-menu">
                            <li><a href="<?php echo base_url();?>admin/bank_request/">BANK REQUEST </a></li>
              
              <li><a href="<?php echo base_url();?>admin/bank_history/">BANK HISTORY </a></li>
                
                        </ul>
                    </li>
                    <li class="dropdown active">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">CONTROL <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo base_url();?>admin/administrator/">ADMINISTRATOR</a></li>
                            <li><a href="<?php echo base_url();?>admin/announcement/">ANNOUNCEMENT</a></li>
                            <li><a href="<?php echo base_url();?>admin/accounting/">ACCOUNTING</a></li>
                    
                        </ul>
                    </li>
                <li><a href="<?php echo base_url();?>admin/leads/">LEADS</a></li> 
                   
                </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>

                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-dollar fa-fw"></i>Accounting
                            
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">

                        <ul class="nav nav-tabs" id="tab">
    <li class="active in"><a href="#daily" data-toggle="tab">Daily Total Sales</a></li>
      <li><a href="#weekly" data-toggle="tab">Weekly Total Sales</a></li>
      <li><a href="#monthly" data-toggle="tab">Monthly Total Sales</a></li>
  </ul>
  <div class="tab-content">
      <div class="tab-pane active" id="daily">
        <h3>Daily Total Sales</h3>
        <br />
       
                             <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                         <tr>
                                            <th colspan="5"></th>
                                            <th colspan="3"><div align="center">Profit Sharing</div></th>
                                            
                                        </tr>

                                        <tr>
                                            <th>Date</th>
                                            <th>Sales</th>
                                            <th>Commission</th>
                                            <th>Gross Profit</th>
                                            <th>Maintenance (15%)</th>
                                            <th>Alvin (30%)</th>
                                            <th>Lowel (30%)</th>
                                            <th>Mhel (25%)</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                  
                                   <?php
                                   if(!empty($daily_sales)){

                                    foreach ($daily_sales as $sales) {
                                      $date = $sales->date;
                                      $totalsales = $sales->amount;
                                      $commission = $sales->commission;
                                      $gross = $totalsales - $commission;
                                      $maintenance = 0.150 * $gross;
                                      $profit_1 = 0.300 * $gross;//alvin 30%
                                      $profit_2 = 0.300 * $gross;//Lowel 30%
                                      $profit_3 = 0.250 * $gross;//Mhel 25%

                                    ?>
                                        <tr class="odd gradeX">
                                          <td><?php echo date('Y-m-d',strtotime($date));?></td>
                                            <td><?php echo 'Php '.number_format($totalsales);?></td>
                                            <td><?php echo 'Php '.number_format($commission);?></td>
                                            <td><?php echo 'Php '.number_format($gross);?></td>
                                            <td><?php echo 'Php '.number_format($maintenance);?></td>
                                            <td><?php echo 'Php '.number_format($profit_1);?></td>
                                            <td><?php echo 'Php '.number_format($profit_2);?></td>
                                            <td><?php echo 'Php '.number_format($profit_3);?></td>
                                        </tr>
                                  <?php
                                    }
                                     }
                                  ?>
                                 
                                    </tbody>
                                </table>
                                <br />
      <div align="left">
      <a href="<?php echo base_url();?>admin/exportdaily/">Export to Excel</a>
      </div>

      </div>
  
      <div class="tab-pane" id="weekly">
        <h3>Weekly Total Sales</h3>
        <br />

<?php
$today = date('Y-m-d');
$date = new DateTime($today);
$week_num = $date->format("W");
?>
        <strong>Today is week number <?php echo $week_num.' of year '.date('Y');?></strong>
        <br />
        <br />
        <table class="table table-striped table-bordered table-hover" id="example2">
                                    <thead>
                                         <tr>
                                            <th colspan="5"></th>
                                            <th colspan="3"><div align="center">Profit Sharing</div></th>
                                            
                                        </tr>

                                        <tr>
                                            <th>Week</th>
                                            <th>Sales</th>
                                            <th>Commission</th>
                                            <th>Gross Profit</th>
                                            <th>Maintenance (15%)</th>
                                            <th>Alvin (30%)</th>
                                            <th>Lowel (30%)</th>
                                            <th>Mhel (25%)</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                  
                                    <?php
                                   if(!empty($weekly_sales)){

                                    foreach ($weekly_sales as $weekly) {
                                    
                                      $weeklysales = $weekly->amount;
                                      $weeklycommission = $weekly->commission;
                                      $weeklygross = $weeklysales - $weeklycommission;
                                      $weeklymaintenance = 0.150 * $weeklygross;
                                      $weeklyprofit_1 = 0.300 * $weeklygross;//alvin 30%
                                      $weeklyprofit_2 = 0.300 * $weeklygross;//Lowel 30%
                                      $weeklyprofit_3 = 0.250 * $weeklygross;//Mhel 25%
                                      $ddate = $weekly->date;
                                      $week = $weekly->week;
                                      //$date = date('Y-m-d', strtotime($ddate) );
                                    
                                    ?>
                                        <tr class="odd gradeX">
                                          <td><?php echo  $week.' week of year '.date('Y',strtotime($ddate) );?></td>
                                            <td><?php echo 'Php '.number_format($weeklysales);?></td>
                                            <td><?php echo 'Php '.number_format($weeklycommission);?></td>
                                            <td><?php echo 'Php '.number_format($weeklygross);?></td>
                                            <td><?php echo 'Php '.number_format($weeklymaintenance);?></td>
                                            <td><?php echo 'Php '.number_format($weeklyprofit_1);?></td>
                                            <td><?php echo 'Php '.number_format($weeklyprofit_2);?></td>
                                            <td><?php echo 'Php '.number_format($weeklyprofit_3);?></td>
                                        </tr>
                                  <?php
                                    }
                                     }
                                  ?>
                                 
                                    </tbody>
                                </table>
                                <br />
      <div align="left">
      <a href="<?php echo base_url();?>admin/exportweekly/">Export to Excel</a>
      </div>

      </div>
      <div class="tab-pane" id="monthly">
        <h3>Mothly Total Sales</h3>
        <br />

            <table class="table table-striped table-bordered table-hover" id="example3">
                                    <thead>
                                         <tr>
                                            <th colspan="5"></th>
                                            <th colspan="3"><div align="center">Profit Sharing</div></th>
                                            
                                        </tr>

                                        <tr>
                                            <th>Month</th>
                                            <th>Sales</th>
                                            <th>Commission</th>
                                            <th>Gross Profit</th>
                                            <th>Maintenance (15%)</th>
                                            <th>Alvin (30%)</th>
                                            <th>Lowel (30%)</th>
                                            <th>Mhel (25%)</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                  
                                    <?php
                                   if(!empty($monthly_sales)){

                                    foreach ($monthly_sales as $monthly) {
                                      $month = $monthly->month;

                                      $monthsales = $monthly->amount;
                                      $monthcommission = $monthly->commission;
                                      $monthgross = $monthsales - $monthcommission;
                                      $monthmaintenance = 0.150 * $monthgross;
                                      $monthprofit_1 = 0.300 * $monthgross;//alvin 30%
                                      $monthprofit_2 = 0.300 * $monthgross;//Lowel 30%
                                      $monthprofit_3 = 0.250 * $monthgross;//Mhel 25%

                                    ?>
                                        <tr class="odd gradeX">
                                          <td><?php echo date('F Y',strtotime($month) );?></td>
                                            <td><?php echo 'Php '.number_format($monthsales);?></td>
                                            <td><?php echo 'Php '.number_format($monthcommission);?></td>
                                            <td><?php echo 'Php '.number_format($monthgross);?></td>
                                            <td><?php echo 'Php '.number_format($monthmaintenance);?></td>
                                            <td><?php echo 'Php '.number_format($monthprofit_1);?></td>
                                            <td><?php echo 'Php '.number_format($monthprofit_2);?></td>
                                            <td><?php echo 'Php '.number_format($monthprofit_3);?></td>
                                        </tr>
                                  <?php
                                    }
                                     }
                                  ?>
                                    </tbody>
                                </table>
                                                            <br />
      <div align="left">
      <a href="<?php echo base_url();?>admin/exportmonthly/">Export to Excel</a>
      </div>
                                  </div>
                                
                            </div> 
                                                   

                           </div> 
                          
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                   
                </div>
                <!-- /.col-lg-4 -->
      
       

    </div>
    <!-- /#wrapper -->

  


    <!-- jQuery Version 1.11.0 -->
    <script src="<?php echo base_url();?>assets/admin/js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url();?>assets/admin/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo base_url();?>assets/admin/js/plugins/metisMenu/metisMenu.min.js"></script>

 <!-- DataTables JavaScript -->
    <script src="<?php echo base_url();?>assets/admin/js/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="<?php echo base_url();?>assets/admin/js/plugins/dataTables/dataTables.bootstrap.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url();?>assets/admin/js/sb-admin-2.js"></script>
    
    <script src="<?php echo base_url();?>assets/js/script.js"></script>
<script>
    $(document).ready(function() {
  $('#dataTables-example').dataTable({
	 "bSort": false
	
	});

 $('#example2').dataTable({
   "bSort": false
  
  });

$('#example3').dataTable({
   "bSort": false
  
  });
    });
    </script>
</body>

</html>
