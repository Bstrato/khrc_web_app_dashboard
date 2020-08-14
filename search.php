<?php
include 'mainheader.php';
include 'sqliconn.php';
$obj = new Database();
$fetch=$obj->query_fetch('SELECT * from Weekly_Listings_current_datab');


$table_name="Weekly_Listings_current_datab";

if(isset($_POST['listings']) && isset($_POST['SEARCH'])){

    $table_name=$_POST['Weekly_Listings_current_datab'];
   
   if(!empty($_POST['Weekly_Listings_current_datab'])){
       
      try {
       $fetch=$obj->query_fetch("select * from ".$table_name.";");

      }catch (Exception $e) {
         echo 'Caught exception: ',  $e->getMessage(), "\n";
       } 
   }  
}

$cluster = '';
$cluster_query =$obj->query_fetch("SELECT DISTINCT cluster FROM Weekly_Listings_current_datab ORDER BY cluster ASC");


while ($row = mysqli_fetch_assoc($cluster_query))
{
  $cluster.='<option value="'.$row['cluster'].'">'.$row['cluster'].'</option>';
}

$grouping = '';
$grouping_query = $obj->query_fetch("SELECT DISTINCT groupings FROM Weekly_Listings_current_datab ORDER BY groupings ASC");


while ($row = mysqli_fetch_assoc($grouping_query))
{
  $grouping .='<option value="'.$row['groupings'].'">'.$row['groupings'].'</option>';
}

$district = '';
$district_query = $obj->query_fetch("SELECT DISTINCT district FROM Weekly_Listings_current_datab ORDER BY district ASC");

while ($row = mysqli_fetch_assoc($district_query))
{
  $district .='<option value="'.$row['district'].'">'.$row['district'].'</option>';
}

?>



<!-- Content -->
        <div class="page-wrapper bg-wrapper">
        <div class="content">
        <div class="buy-form">
        <h4 class="page-title">WEEKLY LISTINGS</h4>
      


              
      <div class="row">
                  <div class="col-sm-6 col-md-3" style="margin-top:-1.0rem;">
                    <label class="focus-label">CLUSTER</label>
                    <select class="select" name="filter_cluster" id="filter_cluster">
                    <option value="">Select Cluster</option>
                    <?php echo $cluster;?>
                    </select>     
                  </div>
            
                  <div class="col-sm-6 col-md-3" style="margin-top:-1.0rem;">
                    <label class="focus-label">GROUPING</label>
                    <select class="select" name="filter_grouping" id="filter_grouping">
                    <option value="">Select Grouping</option>
                    <?php echo $grouping;?>
                    </select>     
                  </div>

                  <div class="col-sm-6 col-md-3" style="margin-top:-1.0rem;">
                    <label class="focus-label">DISTRICT</label>
                    <select class="select" name="filter_district" id="filter_district">
                    <option value="">Select District</option>
                    <?php echo $district;?>
                    </select>     
                  </div><br><br>    
             
              <div class="form-group" align="right" style="margin-top:1.0rem;">
                <button type="button" name="filter" id="filter" class="btn btn-success">Filter</button>
              </div>
              </div><br><br>

                 
            </div>
    


    <p>
          <div class="row">
            <div class="col-md-12">
              <div class="table-responsive">
                <table class="table table-striped custom-table mb-0  cstable">
                  
                  <thead>
                    <tr>
                      <th style="min-width:100px;">No.</th>
                      <th style="min-width:100px;">Participant ID</th>      
                      <th style="min-width:100px;">Participant Name</th>
                      <th style="min-width:100px;">Mothers Name</th>
                      <th style="min-width:100px;">Compound Number</th>
                      <th style="min-width:100px;">Sex</th>
                      <th style="min-width:100px;">Date of Visit</th>
                      <th style="min-width:100px;">Date of Birth</th>
                      <th style="min-width:100px;">Lower Limit Date</th>
                      <th style="min-width:100px;">Due Date</th>
                      <th style="min-width:100px;">Upper Limit Date</th>
                      <th style="min-width:100px;">Village Name</th>
                      <th style="min-width:100px;">Remarks</th>
                      <th style="min-width:100px;">Land Mark</th>
                      <th style="min-width:100px;">Telephone</th>
                      <th style="min-width:100px;">District</th>
                      <th style="min-width:100px;">Cluster</th>
                      <th style="min-width:100px;">Visits</th>
                      <th style="min-width:100px;">Groupings</th>
                      <th style="min-width:100px;">Village Code</th>
                      <th style="min-width:100px;">Village Name</th>
                      <th style="min-width:100px;">Status</th>
                      <th style="min-width:100px;">Compound PermID</th>               
                      <th style="min-width:100px;">Mother PermID</th>
                    </tr>
                  </thead>


                 
                </table>
              </div>
            </div>
          </div>
          
        </p>
        </div>
</div>
</div>

    <div class="sidebar-overlay" data-reff=""></div>


<script> 
$(document). ready(function(){



    var table = $('.cstable').DataTable({
    "processing" : true,
    "serverSide" : true,
    "searching" : true,
    "order" : [],
    "ajax" :{ url:"fetch_query.php",
            type: "POST",
              data:{filter_cluster:'',filter_grouping:'', filter_district:''}
             

            }
  
  });
  

  $('#filter').click(function(e){

   e.preventDefault() ;

  var filter_cluster = $('#filter_cluster').val();
  var filter_grouping = $('#filter_grouping').val();
  var filter_district = $('#filter_district').val();

  alert("clicked");

  if(filter_cluster !='' && filter_grouping !='' && filter_district !='')
  {
    

    table.clear().destroy();

    alert("processing Starting"); 

    alert("My info "+filter_cluster+filter_grouping+filter_district);

    table = $('.cstable').DataTable({
    "processing" : true,
    "serverSide" : true,
    "searching" : true,
    "order" : [],
    "ajax" :{ url:"fetch_query.php",
            type: "POST",
              data:{filter_cluster:filter_cluster,filter_grouping:filter_grouping, filter_district:filter_district}
             

            }
  
   });

    alert("processing Done");
  }
  else
  {
    alert('Select all filter options');

    table.clear().destroy();
    table = $('.cstable').DataTable({
    "processing" : true,
    "serverSide" : true,
    "searching" : true,
    "order" : [],
    "ajax" :{ url:"fetch_query.php",
            type: "POST",
              data:{filter_cluster:'',filter_grouping:'', filter_district:''}
             

            }
  
  });
  }

});




});


</script>
