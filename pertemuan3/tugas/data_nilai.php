<?php
    include_once 'header.php';
?>

<div class="container">
  <h2>Data Mahasiswa</h2>
  <table class="table">
      <thead>
          <tr>
              <th>No</th>
              <th>Nama Lengkap</th>
              <th>Mata Kuliah</th>
              <th>UTS</th>
              <th>UAS</th>
              <th>Tugas</th>
              <th>Rerata</th>
              <th>Grade</th>
              <th>Predikat</th>
              <th>Keterangan</th>
          </tr>
      </thead>
      <tbody>
          <tr>
              <td>1</td>
              <td>Fakhirul</td>
              <td>Statistika dan Probabilitas</td>
              <td>89</td>
              <td>95</td>
              <td>80</td>
              <td>87.95</td>
              <td>A</td>
              <td>Sangat Memuaskan</td>
              <td>Lulus</td>
          </tr>
          <tr>
              <td>2</td>
              <td>Rul</td>
              <td>Statistika dan Probabilitas</td>
              <td>78</td>
              <td>81</td>
              <td>80</td>
              <td>79.75</td>
              <td>B</td>
              <td>Memuaskan</td>
              <td>Lulus</td>
          </tr>

        <?php
            require('libfungsi.php');
            if (isset($_POST['tombol'])) {
                $nama = $_POST['nama'];
                $matkul = $_POST['matkul'];
                $uts = $_POST['uts'];
                $uas = $_POST['uas'];
                $tugas = $_POST['tugas'];
                $rata_rata = ($uts+ $uas + $tugas)/3;
                $grade = grade($rata_rata);
                $predikat = predikat($grade); 
                $kelulusan = kelulusan($rata_rata);
        ?>
        <div class="mt-4">
            <tr>
                <td>3</td>
                <td><?= $nama ?></td>
                <td><?= $matkul ?></td>
                <td><?= $uts ?></td>
                <td><?= $uas ?></td>
                <td><?= $tugas ?></td>
                <td><?= number_format($rata_rata, 2) ?></td>    
                <td><?= $grade ?></td>
                <td><?= $predikat ?></td>
                <td><?= $kelulusan ?></td>
            </tr>
        </div>
      </tbody>
  </table>
</div>
<?php
}
?>
<?php
    include_once 'footer.php';
?>