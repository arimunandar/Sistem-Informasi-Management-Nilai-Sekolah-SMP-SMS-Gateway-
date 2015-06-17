<?php
 
//koneksi ke mysql dan db nya
mysql_connect("localhost", "root", "");
mysql_select_db("skripsi-dini");
 
// query untuk membaca SMS yang belum diproses
$query = "SELECT * FROM inbox WHERE Processed = 'false'";
$hasil = mysql_query($query);
while ($data = mysql_fetch_array($hasil))
{
  // membaca ID SMS
  $id = $data['ID'];
 
  // membaca no pengirim
  $noPengirim = $data['SenderNumber'];
 
  // membaca pesan SMS dan mengubahnya menjadi kapital
  $msg = strtoupper($data['TextDecoded']);
 
  // proses parsing 
 
  // memecah pesan berdasarkan karakter
  $pecah = explode("#", $msg);
  
  // jika kata terdepan dari SMS adalah 'NILAI' maka cari nilai Kalkulus
  if ($pecah[0] == "NILAI")
  {
     // baca nis dari pesan SMS
     $nis = $pecah[1];
     $mp = $pecah[2];
     $semester = $pecah[3];
     $tahun = $pecah[4];
     $jenis = $pecah[5];
 
     // cari nilai kalkulus berdasar nis
     $query2 = "SELECT nilai.nilai_id, nilai.nilai_poin, siswa.siswa_id, siswa.siswa_nama, siswa.siswa_nis, pelajaran.pelajaran_nama, jenis.jenis_nama, semester.semester_nama, tahun.tahun_nama 
                FROM nilai 
                INNER JOIN siswa ON nilai.siswa_id=siswa.siswa_id 
                INNER JOIN pelajaran ON nilai.pelajaran_id=pelajaran.pelajaran_id 
                INNER JOIN jenis ON nilai.jenis_id=jenis.jenis_id
                INNER JOIN semester ON nilai.semester_id=semester.semester_id 
                INNER JOIN tahun ON nilai.tahun_id=tahun.tahun_id 
                WHERE siswa.siswa_nis='$nis' AND pelajaran.pelajaran_nama='$mp' AND semester.semester_nama='$semester' AND tahun.tahun_nama='$tahun' AND jenis.jenis_nama='$jenis'";
     $hasil2 = mysql_query($query2);
 
     // cek bila data nilai tidak ditemukan
     if (mysql_num_rows($hasil2) == 0) $reply = "Data Tidak Ditemukan";
     else
     {
        // bila nilai ditemukan
        $data2 = mysql_fetch_array($hasil2);
        $nama = $data2['siswa_nama'];
        $nilai = $data2['nilai_poin'];
        $pelajaran = $data2['pelajaran_nama'];
        $jenis = $data2['jenis_nama'];
        $semester = $data2['semester_nama'];
        $reply = "Nama : ".$nama. " | " .$pelajaran. " | Semester : " .$semester. " | " .$jenis. " | Poin : " .$nilai;
     }
  }elseif ($pecah[0] == "NILAIFULL") {
    // baca nis dari pesan SMS
     $nis = $pecah[1];
     $semester = $pecah[2];
     $tahun = $pecah[3];
     $jenis = $pecah[4];
 
     // cari nilai kalkulus berdasar nis
     $query2 = "SELECT nilai.nilai_id, GROUP_CONCAT(CONCAT_WS('-',pelajaran.pelajaran_nama, nilai.nilai_poin)SEPARATOR ' | ') AS nilai, siswa.siswa_id, siswa.siswa_nama, siswa.siswa_nis, jenis.jenis_nama, semester.semester_nama, tahun.tahun_nama 
                FROM nilai 
                INNER JOIN siswa ON nilai.siswa_id=siswa.siswa_id 
                INNER JOIN pelajaran ON nilai.pelajaran_id=pelajaran.pelajaran_id 
                INNER JOIN jenis ON nilai.jenis_id=jenis.jenis_id
                INNER JOIN semester ON nilai.semester_id=semester.semester_id 
                INNER JOIN tahun ON nilai.tahun_id=tahun.tahun_id 
                WHERE siswa.siswa_nis='$nis' AND semester.semester_nama='$semester' AND tahun.tahun_nama='$tahun' AND jenis.jenis_nama='$jenis'";
     $hasil2 = mysql_query($query2);
 
     // cek bila data nilai tidak ditemukan
     if (mysql_num_rows($hasil2) == 0) $reply = "Data Tidak Ditemukan";
     else
     {
        // bila nilai ditemukan
        $data2 = mysql_fetch_array($hasil2);
        $nama = $data2['siswa_nama'];
        $nilai = $data2['nilai'];
        $reply = "Nama : ".$nama. " | " .$nilai;
        
     }
  }
  else $reply = "Maaf Perintah Salah";
 
  // membuat SMS balasan
 
  $query3 = "INSERT INTO outbox(DestinationNumber, TextDecoded) VALUES ('$noPengirim', '$reply')";
  $hasil3 = mysql_query($query3);
 
  // ubah nilai 'processed' menjadi 'true' untuk setiap SMS yang telah diproses
 
  $query3 = "UPDATE inbox SET Processed = 'true' WHERE ID = '$id'";
  $hasil3 = mysql_query($query3);
}
?>