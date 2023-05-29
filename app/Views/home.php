<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container-fluid py-0 px-0">
    <div class="row">
        <div class="col-md-12 mb-5">
            <div id="carouselExample" class="carousel slide">
                <div class="carousel-inner">
                    <?php foreach ($wisata as $data) : ?>
                        <div class="carousel-item active">
                            <img src="<?= base_url('foto/' . $data->foto); ?>" class="d-block w-100" alt="..." style="height: 400px;">
                        </div>
                    <?php endforeach; ?>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <h3 class="text-center">
            Selamat Datang di Web Wisata Curug
        </h3>
        <div class="py-2 px-4">
            <p>
                Tasikmalaya merupakan salah satu daerah di Jawa Barat yang menyajikan banyak destinasi wisata. Wisatanya pun beragam, mulai dari kekayaan kuliner hingga alam yang indah. Salah satu objek wisata alam yang baru-baru ini dibuka oleh pemerintah adalah Curug Badak.

                Air terjun ini berada di dalam kawasan hutan pinus yang asri. Berwisata kemari bisa membantu melepaskan penat sejenak dari kesibukan sehari-hari.

                Tiket Masuk Curug Badak
                Harga tiket masuk yang harus dibayar oleh pengunjung Curug Badak terbilang murah dan terjangkau. Tiket belum termasuk retribusi parkir dan sewa tikar.
            </p>
            <br>
            <h4>
                Curug Badak
            </h4>
            <p>
                Curug Badak mengacu pada sepasang air terjun di kawasan Gunung Talaga Bodas. Lokasinya berada di tebing yang dikelilingi area hutan. Air terjun tertinggi bisa mencapai tinggi 40 meter.

                Namanya datang dari batu yang berada di tengah aliran salah satu air terjun. Batu tersebut berbentuk agak lonjong. Saat debit air sedang tinggi, batu itu tampak menyembul dari balik aliran air yang deras. Warga setempat menyebutnya mirip cula badak, sehingga air terjun ini dinamakan Curug Badak.

                Yang menarik dari curug ini adalah kandungan airnya. Air yang mengalir dari curug ternyata mengandung belerang. Ini kemungkinan karena air mengalir dari Gunung Talaga Bodas. Di sekitar lokasi jatuhan air, bebatuan terlihat agak menguning karena belerang dan berbau menyengat.

                Karena adanya belerang, warga percaya bahwa air ini bisa menyembuhkan berbagai penyakit terutama penyakit kulit. Namun, tidak disarankan mandi di sekitar curug ketika debit air sedang tinggi.
            </p>
            <br>
            <h4>
                Curug Batu Hanoman
            </h4>
            <p>
                Curug Hanoman atau Batu Hanoman adalah air terjun lainnya yang bisa ditemukan di sekitar Curug Badak. Bentuknya landai dan menyerupai sungai berarus deras. Dari jauh, bentuknya tampak seperti ekor kera berwarna putih. Inilah alasan pemberian nama “Hanoman” untuk air terjun tersebut.

                Curug Hanoman bisa ditemukan di area pinggir bukit. Jaraknya sekitar 25 meter dari Curug. Kolamnya lebih dangkal dan lebih luas. Pengunjung bisa leluasa bermain air di area curug ini.
            </p>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>