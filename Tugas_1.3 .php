//Fernanda Pasa Eka P 20051397033 D4 Manajemen Informatika

<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
<?php

echo "Program Data Novel Sejarah" . "<br>" . "<br>";

class novelSejarah {
    public  $judul = "judul",
            $pengarang = "penulis",
            $thnTerbit = "tahun terbit",
            $deskripsi = "deskripsi",
            $hargaBeli = 100000,
            $hargaJual = 150000;

    public function __construct( $judul, $pengarang, $thnTerbit, $deskripsi, $hargaBeli) {
        $this->judul = $judul;
        $this->pengarang = $pengarang;
        $this->thnTerbit = $thnTerbit;
        $this->deskripsi = $deskripsi;
        $this->hargaBeli = $hargaBeli;
    }
    
    public function getKeterangan (){
        return "$this->judul, $this->pengarang, $this->thnTerbit";
    }

    public function hitungHargaJual(){
        // $hargaJual = $hargaBeli-20/100*$hargaBeli;
    }

}
 
class CetakInfo {
    public function cetak($novelSejarah) {
        $str = "{$novelSejarah->getKeterangan()} | {$novelSejarah->deskripsi} | {$novelSejarah->hargaBeli}";
        return $str;
    }
}

$novelSejarah1 = new novelSejarah("Judul : Laut Bercerita", "Nama Pengarang : Leila.S Chudori", "Tahun Terbit : 2017", "Novel sejarah ini bercerita tentang kisah perjuangan Laut, seorang mahasiswa sekaligus aktivis kritis yang berani menyuarakan isu sosial pada masa orde baru. Karena dianggap berbahaya, Laut beserta kelompoknya ditangkap dan disiksa. Meskipun dihukum secara fisik dan mental, ia tetap bersikukuh memegang prinsipnya sampai akhir. Dengan membaca novel ini kamu akan mendapat gambaran bagaimana situasi masyarakat dan politik pada era tersebut.", 70000);
$novelSejarah2 = new novelSejarah("Judul : Orang-Orang Proyek", "Nama Pengarang : Ahmad Tohari", "Tahun Terbit : 2020", "Kabul adalah seorang insinyur dengan integritas dan idealisme. Namun, ia terpaksa dihadapkan pada kenyataan bahwa dalam mengerjakan proyek jembatan di Indonesia, Kabul harus berhadapan dengan budaya korupsi yang masif. Akhirnya, jembatan tersebut dibangun dengan mengesampingkan perencanaan yang seharusnya untuk memangkas biaya produksi. Ahmad Tohari dalam novelnya tersebut ingin menunjukan betapa bobroknya oknum-oknum pada masa tersebut ketika menjalankan proyek untuk keuntungannya sendiri. Ini juga sekaligus menjadi sindiran keras terhadap budaya korupsi yang terus merajalela.", 40000 );
$novelSejarah3 = new novelSejarah("Judul : Halaman Terakhir", "Nama Pengarangan : Yudi Herwibowo", "Tahun Terbit : 2015", "Kali ini kita kembali pada masa orde baru. Novel sejarah Halaman Terakhir karya Yudhi Herwibowo bercerita tentang seorang Kapolri bernama Hoegeng yang punya idealisme tinggi. Dihadapkan pada kasus besar pemerkosaan dan pencurian mobil, integritas Hoegeng diuji. Meskipun sudah berusaha sekuat tenaga, sayangnya usaha Hoegeng dalam mengungkap kejahatan tersebut gagal karena kuasa politik yang menghalanginya mengungkap kebenaran.", 50000 );

$infoNovelSejarah = new CetakInfo();
echo $infoNovelSejarah->cetak($novelSejarah1) . "<br>" . "<br>";
echo $infoNovelSejarah->cetak($novelSejarah2) . "<br>" . "<br>";
echo $infoNovelSejarah->cetak($novelSejarah3) . "<br>" . "<br>";

?>
</body>
</html>
