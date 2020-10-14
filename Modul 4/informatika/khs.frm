TYPE=VIEW
query=select `informatika`.`mahasiswa`.`NIM` AS `NIM`,`informatika`.`nilai`.`Nama_MK` AS `Nama_MK`,`informatika`.`nilai`.`Nilai_Angka` AS `Nilai_ANgka`,`informatika`.`nilai`.`Nilai_Huruf` AS `Nilai_Huruf` from (`informatika`.`mahasiswa` join `informatika`.`nilai` on(`informatika`.`mahasiswa`.`NIM` = `informatika`.`nilai`.`NIM`))
md5=33727d8f98b11378813403556d62810b
updatable=1
algorithm=0
definer_user=root
definer_host=localhost
suid=2
with_check_option=0
timestamp=2020-10-14 14:06:27
create-version=2
source=SELECT Mahasiswa.NIM, Nilai.Nama_MK, Nilai.Nilai_ANgka, Nilai.Nilai_Huruf FROM (Mahasiswa INNER JOIN Nilai ON Mahasiswa.NIM=Nilai.NIM)
client_cs_name=utf8mb4
connection_cl_name=utf8mb4_unicode_ci
view_body_utf8=select `informatika`.`mahasiswa`.`NIM` AS `NIM`,`informatika`.`nilai`.`Nama_MK` AS `Nama_MK`,`informatika`.`nilai`.`Nilai_Angka` AS `Nilai_ANgka`,`informatika`.`nilai`.`Nilai_Huruf` AS `Nilai_Huruf` from (`informatika`.`mahasiswa` join `informatika`.`nilai` on(`informatika`.`mahasiswa`.`NIM` = `informatika`.`nilai`.`NIM`))
mariadb-version=100411
