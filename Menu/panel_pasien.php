<div class="table-responsive">
  <table class="table" border="1">
    <thead align="center">
      <tr>
        <th scope="col">#</th>
        <th scope="col" width="20%">Nama</th>
        <th scope="col">Jenis Kelamin</th>
        <th scope="col">Asuransi</th>
        <th scope="col">Dokter</th>
        <th scope="col">Spesialis</th>
        <th scope="col">Nomor Antrian</th>
        <th scope="col">Keluhan</th> 
        <th scope="col" width="10%">Action</th>
      </tr>
    </thead>
    <tbody>
    <?php   
      for($a=0; $a < count($data); $a++)
      {
        print "<tr>";
        // penomeran otomatis
        print "<th scope='row'>".$a."</td>";
        // menayangkan 
        print "<td>".$data[$a]['p_name']."</td>";
        print "<td>".$data[$a]['p_gender']."</td>";
        print "<td>".$data[$a]['p_insurance']."</td>";
        print "<td>".$data[$a]['doctor']."</td>";
        print "<td>".$data[$a]['doc_spc']."</td>";
        print "<td>".$data[$a]['number']."</td>";
        //print "<td>".$data[$a]['reason_visit']."</td>";
        print "<td><button type='button' class='btn btn-danger' onclick='play();'>Pangil</button>&nbsp<button type='button' class='btn btn-success'>Selesai</button></td>";
        print "</tr>";
      }
    ?>
    </tbody>
  </table>
</div>

