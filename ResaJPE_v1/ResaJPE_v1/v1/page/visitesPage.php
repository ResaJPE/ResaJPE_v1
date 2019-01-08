<?php
include('template/head.php');
include('template/menu.php');
?>
	 
	 
	 <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Responsive Hover Table</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
				  <?php
				  $i = 0;
				  $visites = visitesData_getAll();
				  //var_dump($nbVisites);
				  echo '<tr>
						<th>Entreprise</th>
						<th>Date</th>
						<th>Status</th>
						<th>Organisation</th>
							</tr>';
				  foreach ($visites as $i){
					  
						echo '<tr>
							<td>'.$i['entreprise_id'].'</td>
							<td>'.$i['date'].'</td>
							<td><span class="label label-success">'.$i['etat'].'</span></td>
							<td>'.$i['service_id'].'</td>
							<td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
							</tr>';
					  
				  }
				    
				  ?>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
<?php 
include('template/footer.php'); 
?>
