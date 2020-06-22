<?php
class Database
{
	var $host="localhost";
	var $user="root";
	var $pass="";
	var $db="test";
	var $tbname="khrc";
	public function connect()
	{
		$con=mysqli_connect($this->host,$this->user,$this->pass,$this->db);
		return$con;
	}
	public function fetch()
	{
		$conn=$this->connect();
		$q=msqli_query($conn,"select * from".$this->tbname)
		or die(mysqli_error($conn));
	?>

<table class="table table-striped custom-table mb-0 datatable">
			<thead>
			<tr>
			<th style="min-width:100px;">S/N</th>
			<th style="min-width:100px;">Male</th>
			<th style="min-width:100px;">Female</th>
			<th style="min-width:100px;">Total</th>
			<th style="min-width:100px;">No.from field</th>
			<th style="min-width:100px;">CC. form Received</th>
			<th style="min-width:100px;">Local Data</th>
			</tr>
			</thead>
		<tbody>
			
			<?php
			while($r=mysqli_fetch_array($q))
			{
			?>
		<tr>	
			<td><?php echo $r['id'];?></td>
			<td><?php echo $r['male'];?></td>
			<td><?php echo $r['female'];?></td>
			<td><?php echo $r['total'];?></td>
			<td><?php echo $r['no_from_field'];?></td>
			<td><?php echo $r['cc_form_received'];?></td>
			<td><?php echo $r['local_data'];?></td>
		</tr>

		<?php
		}
		?>
</table>
<?php
	}
}

?>