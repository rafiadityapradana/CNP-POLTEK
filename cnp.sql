-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Jan 2021 pada 05.10
-- Versi server: 10.4.13-MariaDB
-- Versi PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cnp`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `activity`
--

CREATE TABLE `activity` (
  `_id` varchar(60) NOT NULL,
  `title` varchar(100) NOT NULL,
  `image` varchar(200) NOT NULL,
  `desc_activity` text NOT NULL,
  `date_upload` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `activity`
--

INSERT INTO `activity` (`_id`, `title`, `image`, `desc_activity`, `date_upload`) VALUES
('ltp_04xo8r3rqin8aipvghqwxquk4qephjs24oqql9fyniepldrr94', 'Work Hard, Party Hard in a Luxury Chalet in the Alps', 'image_1.jpg', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Totam voluptatem assumenda maiores modi rem dicta quo earum, ab, debitis molestias neque, odit suscipit animi quasi autem quidem in deleniti quam!\r\n    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repudiandae harum vel blanditiis sit eos voluptate natus commodi maxime amet veniam nostrum quo necessitatibus, cum similique unde nam. Officia, laudantium sunt.\r\n    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Modi porro ea architecto magni illo praesentium minus ad fuga corrupti voluptas, quia natus a ratione laboriosam veritatis quisquam officiis exercitationem repudiandae?', '01 Oct 2020'),
('ltp_hknjfs8lo6ygogb5m5xw6pbbflomxhyhf39yn6gnp8so29p5me', 'Work Hard, Party Hard in a Luxury Chalet in the Alps', 'image_5.jpg', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis soluta illo odit enim accusantium, minima, voluptatum nisi ipsa magni consequatur obcaecati! Ipsam error harum, dolorem facere adipisci nisi officia repellat?\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Unde harum laboriosam ducimus nostrum, sequi tenetur quas sint nobis ipsam autem praesentium quidem, pariatur reiciendis amet optio. Deleniti error sequi dolor.\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Ad quaerat architecto deserunt sit molestias odit ex minus, ea voluptas modi magni explicabo! Laudantium eveniet sed velit numquam, animi quam maxime?', '02 Oct 2020'),
('ltp_hzadyjigwi65swza1r14enhpw4jtrlfw6uk1w5h6h9s6f633tg', 'Work Hard, Party Hard in a Luxury Chalet in the Alps', 'image_6.jpg', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis soluta illo odit enim accusantium, minima, voluptatum nisi ipsa magni consequatur obcaecati! Ipsam error harum, dolorem facere adipisci nisi officia repellat?\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Unde harum laboriosam ducimus nostrum, sequi tenetur quas sint nobis ipsam autem praesentium quidem, pariatur reiciendis amet optio. Deleniti error sequi dolor.\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Ad quaerat architecto deserunt sit molestias odit ex minus, ea voluptas modi magni explicabo! Laudantium eveniet sed velit numquam, animi quam maxime?', '04 Oct 2020'),
('ltp_ueww2uutt62yqpxux1nwq0r8y9usuolehodz8x3r30g6bk19iu', 'Work Hard, Party Hard in a Luxury Chalet in the Alps', 'image_3.jpg', ' Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus labore atque iusto, provident eaque nesciunt numquam deleniti quisquam excepturi rerum? Ipsam, magnam. Eaque animi quis quasi, nesciunt adipisci ducimus rerum.\r\n    Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga natus excepturi assumenda fugit, cumque cum deserunt nam ex sunt, praesentium voluptatum culpa omnis fugiat quae sit dicta, sequi quo eligendi.\r\n    Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam corrupti fuga cupiditate dolorem rerum fugiat asperiores, quae quod dolor earum labore quia temporibus, provident minima aliquid. Corrupti ullam consequuntur ex?', '07 Oct 2020 '),
('ltp_xkknfjoqqczo21kusqlobfp1urizd4a5ucu0p2f86ociaxqm1x', 'Work Hard, Party Hard in a Luxury Chalet in the Alps', 'image_2.jpg', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Totam voluptatem assumenda maiores modi rem dicta quo earum, ab, debitis molestias neque, odit suscipit animi quasi autem quidem in deleniti quam!\r\n    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repudiandae harum vel blanditiis sit eos voluptate natus commodi maxime amet veniam nostrum quo necessitatibus, cum similique unde nam. Officia, laudantium sunt.\r\n    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Modi porro ea architecto magni illo praesentium minus ad fuga corrupti voluptas, quia natus a ratione laboriosam veritatis quisquam officiis exercitationem repudiandae?', '09 Oct 2020'),
('ltp_ydt8jqvh55cglxs3grnja2ihossblre88farje0n2ty6nfnqsi', 'Work Hard, Party Hard in a Luxury Chalet in the Alps', 'image_4.jpg', '    Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus labore atque iusto, provident eaque nesciunt numquam deleniti quisquam excepturi rerum? Ipsam, magnam. Eaque animi quis quasi, nesciunt adipisci ducimus rerum.\r\n    Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga natus excepturi assumenda fugit, cumque cum deserunt nam ex sunt, praesentium voluptatum culpa omnis fugiat quae sit dicta, sequi quo eligendi.\r\n    Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam corrupti fuga cupiditate dolorem rerum fugiat asperiores, quae quod dolor earum labore quia temporibus, provident minima aliquid. Corrupti ullam consequuntur ex?', '06 Oct 2020');

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_user_tokens`
--

CREATE TABLE `auth_user_tokens` (
  `_id` varchar(60) NOT NULL,
  `user_id` varchar(100) NOT NULL,
  `token_access` text NOT NULL,
  `date_time` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `auth_user_tokens`
--

INSERT INTO `auth_user_tokens` (`_id`, `user_id`, `token_access`, `date_time`) VALUES
('ltp-jwweutprxhwfp2hkgdzyqkp1k7s9xwigvono230121095829am', 'ltp_78lqj6pvvbhwp950ycgep1y5w7owkjvpp9gt4brt9o5mwrj1ki', 'ltp homv2722jk93rpp4jydv7nzf843vd82pw266teulv8qdbet9onomz3gbdnjznq2zw03y14rv5qjjmlksju6i2jy3tb6chvh8cnjmgutnfsnkk3ul24s2ayk5c7vgt5tqqh5ppzb50mzbrw4dh18ganoh35039gwpsp9svhd8sek4fmigftssep75tvxw5vwqd1ohbbmf9pxsppykajowy4s6edimpaf4yvo76elum7vm121ji3s4agrmmlotaxi6vc88m0679ilpdt4s47kr0vx27a3jbmfx2mero4hwlg5ofrxdswkiy5ly0o5ofivdkkdyg55a87z7sv9sg6eb2fso253lzsyro73noiiymkyqjaair4dfp28z5blowwqb9i1szfygoo6whm9veh0avk0f3nuuq1qkolg22yplq4vofhaaic911sgcp0fz84bsifoe0irsejdelba1k7733vds1nlwmdvhyg7qwh4ae7y6bcx58jd9zclrgsh0y7fs6xrckbxv9nbmxibnea30m1o2766vpv7kogk9v0qwngvweskp6w6fl7t7slf848a68fvv7jtji5mo17g1lowxtndcntr799jaaa1y6unqebfpewg2lgvlnyzs4ylb8pgotbx4kp3mav1zkqh7iovom3oj1unchnbjyy5e2p6qd328dyg5fzuasjyq63tj3e1a08dz35p9vk4c9z2btkgak3z5pydi3mrtrsca3x6kfscnfadil64m9flm1qnn4e2mwizt5kgz5ibqk1lnuskb3ounoou41rrswsuy9hom9r6xp91jqub1ao4x4i91z5zfdikbnuqfjepmil4evtfhq8484joozh4n9xlplrwr99qd7znaxmoufsg7an8m7v8gfa1ynhxxt2wna90qkkmz1gmaeyf8mln986ushkt2hc90vdx9yq1warwnjac1wh5rk6ugdbavekjd1czidxewilbnseche04yniownbq1', '25-01-2021 01:10:33'),
('ltp-xs882jcolon2lpx6iqorzkoh4zoq5r0n8mtc160121124048pm', 'ltp-af1yxnllo9eubsrs3wj0f51l5jgl3ollurtv150121090011am', 'ltp tr6uo3cy23xpybevtvcgt5rmebw601j3h34ldjuogipo4ouj5c9ocopgk2ius5d9gj7ef4fkhoifhpdia0l8f9mufszs4jkytqddsajz5uei7f9o23t30kfkdn1mcvfzr92w7zcg58tnjmdgxbmpg8dbmp07a3adau6b280mh6o8jpy8iukjqhbfxpu38h9695wy0twpt31w6k7vwvl2rl5mqmvcxt22cdsxa205cf74tj7oun89wd9z44h511rvavhmtkz1z95iunnotlstjy4fhog2i71w0p1wnxbicpa019xu3tx05avha5aoptw69z7adoog3fuxxjtoy8unbldx0p8qvrp8vzu35yic0iz2lf1q0o1s73h0qdoyc9x557udmd0i8v5ln532tu3w42ozpkya44o8hqrntcvp2z45p1anz9xn38sxy48m4o2119hsd7pc155lgszj8i2numkpfb0rswjnwgbyavkjm3zn1ak7f0jfptyc6ivysex0l3eoixfmd3o8opydfc0w3v8wrzh55bkpq35cyoteejvg3lxcq612idc828ghf3h36hv1wl5plu7nlsp9g4z95i2egtrwxmf921twe865ir3usbs59luxjjxv0f771kemsqwc2hnssceeqirl6rsen52bhn86n92ydoob96kpq1kzdl4vr4df4ap13rxd1v0n51qzssh7xq4ywkzrccofawg23g2ql25gdyw5l0l2308l38abfywe8m8fogm12e6cg7h23xxr7l11hmb0iozlw40bcl1k96edmfv0nuwgi25plxzki282bqh3ty4gcv59ibnmdx6uytrlgdanmc8vsz9hqfasc4n3zr1orxgw9dsaw0vts534m4jsourwxrqjl9ts2hjeukydluieehrqkgr9arzv6e9yvu89nm7fwipqvkfn02t3t5dx2umloenlqngbb0bmgftklczv09wp41vv4rj36qnoimiui15j', '16-01-2021 12:40:48'),
('_id-w9nuzdmktbwc6zjfrgyfmahvj0c936xbj1rh250121103139am', 'ltp_p4ptat3eties57jdq6m1xj4ghmjax8s6j6vr8xqzr97agmga60', 'ltp qxzcoyl2kpnhz60l4t94synauknz4dzkrzyywpku38kwlkb2us2be90jcx2tbchklbfsao7f32b0gwvsvadtns16da7jd4y5chmz9bk29uu1rtfbom8isg4myslh6tasi0npe7ednox6jz9oqayt5h9pjjj7iak63a31dlqt86qtxc2rn8azibxe79b4r3nz12nmi5fdh7lre1zw8d4f6htd7mu5c6097bzb687ge8hxd97k4a34gx34q0kz1zgvf4t3kjsrjpqdogq6up75nqyym34ld9cmnukdnp2syd034i7zxhw3c6hzfr63x6zsmesgalqn4buslaihmkmt0h71e53ffthxpg0cgd43rxq5z7sfue53skkhrsovh8wli4oq34e90vcwk35dc4b0ji0bfhgrq0pp36mf87y4i5rbog061kcdwfmo64i7y046tswd6w2d0zh7yklxcytmkt0bbifbdub69690ab1aq3syo0w7t0m0pqyhs5ucdwr0xtczr54gk0n2462e6jluxrbwy7l2cmpfcddbhs25wfhpmgkbttnav7l6zi3e0vlcgve4j2ah53l30jnamz2htiwn7renokwxrky4e4co0ogaveqmhsvy1hr271kvda2fwj56yvfjl9kc99uh1mimbcomhzv03jns8ozkvu6ypi9wztnb20pj9sklj3ytta9srlnn6mhzkiyqjowwf1pmv8xn1428vo5anwgbasvfye6n21t7eju4joftqhsx1kiobz2u48yz01hb4yzc25waxf5eodmq93l8x6b69pm8o7s2oq70e10chgp3lfihka4gcfswpnn6md3wjaqee9hqlmzxuqdeui61nz9nd1vs6mi5anihwk1rrmk7olovwvz80zen16iry9vt8ajqg9jsxigun7lwocppkal46heu1b1db8d51tln8bovkbf9hs2lz1dukqfzkm1fuwlnycwge844i94g1scseci3tcki', '25-01-2021 10:31:39');

-- --------------------------------------------------------

--
-- Struktur dari tabel `certificate`
--

CREATE TABLE `certificate` (
  `id_certificate` varchar(60) NOT NULL,
  `user_id` varchar(60) NOT NULL,
  `certificate_file` varchar(200) NOT NULL,
  `value_certificate` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `certificate`
--

INSERT INTO `certificate` (`id_certificate`, `user_id`, `certificate_file`, `value_certificate`) VALUES
('ltp_yavk7w9ys53vgupvdcdx0ivy6vnfqny98bz8d7td055byt26ri', 'ltp_p4ptat3eties57jdq6m1xj4ghmjax8s6j6vr8xqzr97agmga60', 'Absen_Poltek_11.pdf', 'Certifikat Berhasil Membohongi Guru DiSekolah Tahun 2020');

-- --------------------------------------------------------

--
-- Struktur dari tabel `color_header`
--

CREATE TABLE `color_header` (
  `id_color` int(11) NOT NULL,
  `user_id` varchar(60) NOT NULL,
  `color` varchar(10) NOT NULL,
  `status` enum('Aktif','Not Aktif') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `color_header`
--

INSERT INTO `color_header` (`id_color`, `user_id`, `color`, `status`) VALUES
(11, 'ltp_78lqj6pvvbhwp950ycgep1y5w7owkjvpp9gt4brt9o5mwrj1ki', '#1f4068', 'Aktif'),
(16, 'ltp_78lqj6pvvbhwp950ycgep1y5w7owkjvpp9gt4brt9o5mwrj1ki', '#0d7377', 'Not Aktif'),
(17, 'ltp_78lqj6pvvbhwp950ycgep1y5w7owkjvpp9gt4brt9o5mwrj1ki', '#3282b8', 'Not Aktif'),
(18, 'ltp_78lqj6pvvbhwp950ycgep1y5w7owkjvpp9gt4brt9o5mwrj1ki', '#52057b', 'Not Aktif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `company`
--

CREATE TABLE `company` (
  `id_company` varchar(60) NOT NULL,
  `company_name` varchar(100) NOT NULL,
  `company_sampul` varchar(200) NOT NULL,
  `company_mail` varchar(60) NOT NULL,
  `company_phone` varchar(30) NOT NULL,
  `company_site` varchar(60) NOT NULL,
  `company_address` text NOT NULL,
  `company_desc` text NOT NULL,
  `company_status` enum('Aktif','Not Aktif') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `company`
--

INSERT INTO `company` (`id_company`, `company_name`, `company_sampul`, `company_mail`, `company_phone`, `company_site`, `company_address`, `company_desc`, `company_status`) VALUES
('ltp_khm4j2fsiyy098iof5xr074sxlvvgidaehgh6zxbi1hqll6bzy', 'Chandra Asri Petrochemical', 'banner_cap_at_a_glance.jpg', 'info.candra@yoursite.com', '(62-254) 601 838 / 843', 'http://www.chandra-asri.com/', 'Jl. Raya Anyer Km. 123\r\nCiwandan, Cilegon\r\nBanten 42447, Indonesia Serang, Banten 42161   yyyy', 'Chandra Asri Petrochemical<br><br><br>PT Chandra Asri Petrochemical (CAP) merupakan penggabungan antara PT Chandra Asri dengan PT Tri Polyta Indonesia Tbk pada 1 Januari 2011 dan berkantor pusat di Jakarta.[1]<br><br>CAP merupakan BUMS yang bergerak di bidang petrokimia dengan memproduksi Olefins dan Polyethylene (PE) dan merupakan produsen Polypropylene terbesar di Indonesia. Saat ini, CAP dimiliki oleh dua pemegang saham utama yaitu Barito Pacific Group (milik konglomerat Prajogo Pangestu) dan SCG Chemicals Co., Ltd. (SCG), anak perusahaan dari SCG Group, Thailand. PT Chandra Asri Petrochemical memiliki beberapa anak perusahaan seperti PT Styrindo Mono Indonesia (SMI) yang memiliki pbrik di kawasan Bojonegara,Serang, Banten, PT Petrokimia Butadiene Indonesia (PBI) yang memiliki pabrik satu kawasan dengan PT. Chandra Asri di kawasan Anyer, Cilegon, Banten, dan juga PT Synthetic Rubber Indonesia yang merupakan perusahaan patungan antara SMI dengan produsen ban multinasional, Compagnie Financiere Du Groupe Michelin (Michelin) sebagai mitra strategis. Erwin Ciputra menjabat sebagai President Direktur CAP saat ini.[2] Diperkirakan bisnis ban Chandra Asri akan beroperasi pada 2018.[3]<br><br><br><br>Sebagai salah satu perusahaan petrokimia terbesar di Indonesia, Chandra Asri selalu memprioritaskan kepuasan pelanggan, yang mengantarkan kami menjadi pemimpin pertumbuhan pangsa pasar dalam dekade terakhir. Pertumbuhan ini adalah hasil dari tata kelola perusahaan dan manajemen keuangan yang baik. Secara bisnis, kami berkomitmen untuk membangun dan mengintegrasikan kemitraan global yang mengutamakan layanan. Berinvestasi pada sumber daya manusia serta menjalankan program tanggung jawab perusahaan yang adil adalah inti dari semua yang kami lakukan dan merupakan bagian yang tidak terpisahkan dari bisnis kami.<br><br>Kami menggabungkan teknologi dan fasilitas pendukung terkini untuk mengoperasikan satu-satunya pabrik Naphtha Cracker di negara ini guna menghasilkan Olefins (Ethylene, Propylene), Pygas dan Mixed C4, juga Polyolefins (Polyethylene dan Polypropylene).<br><br>Fasilitas produksi kami meliputi tiga train untuk produk Polyethylene dan Polypropylene. Kami juga mengoperasikan satu-satunya pabrik Butadiene di Indonesia. Pabrik Butadiene tersebut menggunakan Mixed C4 yang dihasilkan dari pabrik Olefins kami sebagai bahan bakunya.<br><br>Entitas anak kami, PT Styrindo Mono Indonesia (SMI), menghasilkan 340KTA Styrene Monomer. Kami adalah produsen tunggal untuk Ethylene, Styrene Monomer, dan Butadiene dalam negeri dan juga produsen Polyethylene dan Polypropylene terbesar di Indonesia. Kami memproduksi bahan baku plastik yang akan menghasilkan berbagai produk termasuk produk kemasan, pipa, otomotif, elektronik dan berbagai produk lainnya.<br><br>Untuk menangkap nilai tambah atas rantai produk petrokimia kami, bersama-sama dalam usaha patungan dengan produsen ban multinasional, Compagnie Financière du Groupe Michelin (Michelin) sebagai mitra strategis kami, kami mendirikan PT Synthetic Rubber Indonesia (SRI) yang memproduksi bahan baku untuk ban ramah lingkungan.<br><br>Berkomitmen melayani permintaan produk petrokimia dalam negeri dengan lebih baik serta berupaya meringankan beban impor negara, kami juga membangun kompleks petrokimia kedua kami, PT Chandra Asri Perkasa. Dengan ekspansi ini, kami bertujuan untuk mempertahankan kepemimpinan kami di pasar dan juga berkontribusi pada pertumbuhan ekonomi Indonesia serta meningkatkan neraca perdagangan.<br><br>Perusahaan kami membangun fondasi kekuatannya dari merger antara PT Tri Polyta Indonesia Tbk dan PT Chandra Asri, yang kemudian menjadi PT Chandra Asri Petrochemical Tbk (Chandra Asri). Setelah merger, kami menyambut SCG Chemicals Co. Ltd sebagai salah satu mitra strategis dan pemegang saham. SCG Chemicals bergabung dengan PT Barito Pacific Tbk, yang merupakan pemegang saham mayoritas Chandra Asri, menjadikan kami perusahaan petrokimia terbesar di Indonesia.<br><br>Untuk Company Profile kami unduh disini <br><br>', 'Aktif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `cv`
--

CREATE TABLE `cv` (
  `_id` varchar(60) NOT NULL,
  `user_id` varchar(60) NOT NULL,
  `title` varchar(80) NOT NULL,
  `cv` varchar(200) NOT NULL,
  `date_create` varchar(60) NOT NULL,
  `date_update` varchar(60) NOT NULL,
  `status_cv` enum('-','Hide') NOT NULL,
  `cv_key` enum('FALSE','TRUE') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `cv`
--

INSERT INTO `cv` (`_id`, `user_id`, `title`, `cv`, `date_create`, `date_update`, `status_cv`, `cv_key`) VALUES
('ltp-8po9jwgteh32rtvf8yb74ej3mzy1pnaz22pq150121010042am', 'ltp-af1yxnllo9eubsrs3wj0f51l5jgl3ollurtv150121090011am', 'New2  Commanditaire Vennootschap', 'ltp-VHCVNYPTNJ2021011510041am.pdf', '15-01-2021 01:00:42', '-', '-', 'TRUE'),
('ltp_pfuqjpcbrw038dee5txo7droq3r0udok8hh5i4hbam1jf7lqrb', 'ltp_p4ptat3eties57jdq6m1xj4ghmjax8s6j6vr8xqzr97agmga60', 'New  Commanditaire Vennootschap', 'ltp-PCPWBQZVQS2021011505320am.pdf', '17-10-2020 08:25:51', '15-01-2021 00:53:20', '-', 'TRUE');

-- --------------------------------------------------------

--
-- Struktur dari tabel `experience`
--

CREATE TABLE `experience` (
  `_id` varchar(60) NOT NULL,
  `user_id` varchar(60) NOT NULL,
  `value` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `experience`
--

INSERT INTO `experience` (`_id`, `user_id`, `value`) VALUES
('ltp_nog24bh265oq4obm40w9genks8fw288vbkfcf4te5jcpreishi', 'ltp_p4ptat3eties57jdq6m1xj4ghmjax8s6j6vr8xqzr97agmga60', 'Pernah Bekerja Di POLITEKNIK PGRI BANTEN Sebagai IT');

-- --------------------------------------------------------

--
-- Struktur dari tabel `gallery_company`
--

CREATE TABLE `gallery_company` (
  `_id` varchar(60) NOT NULL,
  `company_id` varchar(60) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `gallery_company`
--

INSERT INTO `gallery_company` (`_id`, `company_id`, `image`) VALUES
('ltp_0ahxy7lzic14iva4a087eebeyacp13a393md021120102154am', 'ltp_khm4j2fsiyy098iof5xr074sxlvvgidaehgh6zxbi1hqll6bzy', 'jetty_thumbnail.jpg'),
('ltp_isgr5kjoj4dwgzxjrkior6853jwtg6kqi2qj021120102209am', 'ltp_khm4j2fsiyy098iof5xr074sxlvvgidaehgh6zxbi1hqll6bzy', 'SMI_thumbnail.jpg'),
('ltp_ppn7df0htuv6ml4mo5nb7jyqr385wo4auv5l021120102145am', 'ltp_khm4j2fsiyy098iof5xr074sxlvvgidaehgh6zxbi1hqll6bzy', 'pe_thumbnail.jpg'),
('ltp_q78peq8y32sgl5a1i8uh921k26055np9l2z5021120102136am', 'ltp_khm4j2fsiyy098iof5xr074sxlvvgidaehgh6zxbi1hqll6bzy', 'supporting_facilities_thumbnail.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ip_access`
--

CREATE TABLE `ip_access` (
  `id` int(11) NOT NULL,
  `ip` varchar(30) NOT NULL,
  `start_access` varchar(30) NOT NULL,
  `end_access` varchar(30) NOT NULL,
  `tanggal` int(11) NOT NULL,
  `bulan` text NOT NULL,
  `tahun` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `ip_access`
--

INSERT INTO `ip_access` (`id`, `ip`, `start_access`, `end_access`, `tanggal`, `bulan`, `tahun`) VALUES
(210, '192.168.1.3', '12:09:13', '12:50:47', 2, 'Nov', 2020),
(214, '192.168.1.3', '23:11:19', '23:11:24', 2, 'Nov', 2020),
(217, '192.168.1.3', '14:04:52', '16:24:31', 4, 'Nov', 2020),
(236, '192.168.1.3', '00:09:45', '00:42:42', 6, 'Nov', 2020),
(257, '192.168.1.3', '03:01:39', '03:01:40', 6, 'Nov', 2020),
(258, '192.168.1.3', '09:53:32', '10:08:25', 7, 'Nov', 2020),
(260, '192.168.1.3', '10:08:45', '13:38:36', 7, 'Nov', 2020),
(261, '192.168.1.3', '20:59:08', '21:02:17', 7, 'Nov', 2020),
(745, '::1', '13:40:42', '17:29:36', 4, 'Dec', 2020),
(750, '::1', '15:16:57', '15:17:05', 11, 'Dec', 2020),
(751, '127.0.0.1', '23:13:29', '23:13:56', 26, 'Dec', 2020),
(752, '127.0.0.1', '01:15:45', '01:23:00', 10, 'Jan', 2021),
(753, '127.0.0.1', '01:26:37', '01:26:40', 10, 'Jan', 2021),
(754, '127.0.0.1', '11:15:08', '11:41:23', 13, 'Jan', 2021),
(755, '127.0.0.1', '11:29:52', '11:39:45', 13, 'Jan', 2021),
(756, '127.0.0.1', '11:50:18', '18:34:43', 13, 'Jan', 2021),
(757, '::1', '17:29:24', '18:34:44', 13, 'Jan', 2021),
(760, '127.0.0.1', '00:17:12', '', 14, 'Jan', 2021),
(761, '127.0.0.1', '00:17:20', '', 14, 'Jan', 2021),
(762, '127.0.0.1', '00:17:24', '', 14, 'Jan', 2021),
(763, '127.0.0.1', '00:17:27', '', 14, 'Jan', 2021),
(764, '127.0.0.1', '00:17:28', '', 14, 'Jan', 2021),
(765, '127.0.0.1', '00:17:31', '', 14, 'Jan', 2021),
(766, '127.0.0.1', '00:17:32', '', 14, 'Jan', 2021),
(767, '127.0.0.1', '00:17:36', '', 14, 'Jan', 2021),
(768, '127.0.0.1', '00:17:50', '', 14, 'Jan', 2021),
(769, '127.0.0.1', '00:17:55', '', 14, 'Jan', 2021),
(770, '127.0.0.1', '00:17:57', '', 14, 'Jan', 2021),
(771, '127.0.0.1', '00:21:58', '', 14, 'Jan', 2021),
(772, '127.0.0.1', '00:22:11', '', 14, 'Jan', 2021),
(773, '127.0.0.1', '00:24:39', '', 14, 'Jan', 2021),
(774, '127.0.0.1', '00:33:53', '', 14, 'Jan', 2021),
(775, '127.0.0.1', '00:34:10', '', 14, 'Jan', 2021),
(776, '127.0.0.1', '00:37:05', '', 14, 'Jan', 2021),
(777, '127.0.0.1', '00:37:41', '', 14, 'Jan', 2021),
(778, '127.0.0.1', '00:38:06', '', 14, 'Jan', 2021),
(779, '127.0.0.1', '00:42:27', '', 14, 'Jan', 2021),
(780, '127.0.0.1', '00:43:42', '', 14, 'Jan', 2021),
(781, '127.0.0.1', '00:44:07', '', 14, 'Jan', 2021),
(782, '127.0.0.1', '00:45:41', '', 14, 'Jan', 2021),
(783, '127.0.0.1', '00:45:49', '', 14, 'Jan', 2021),
(784, '127.0.0.1', '00:46:16', '', 14, 'Jan', 2021),
(785, '127.0.0.1', '00:46:38', '', 14, 'Jan', 2021),
(786, '127.0.0.1', '00:46:55', '', 14, 'Jan', 2021),
(787, '127.0.0.1', '00:47:04', '', 14, 'Jan', 2021),
(788, '127.0.0.1', '00:47:12', '', 14, 'Jan', 2021),
(789, '127.0.0.1', '00:47:25', '', 14, 'Jan', 2021),
(790, '127.0.0.1', '00:47:38', '', 14, 'Jan', 2021),
(791, '127.0.0.1', '00:47:49', '', 14, 'Jan', 2021),
(792, '127.0.0.1', '00:48:07', '', 14, 'Jan', 2021),
(793, '127.0.0.1', '00:48:25', '', 14, 'Jan', 2021),
(794, '127.0.0.1', '00:48:43', '', 14, 'Jan', 2021),
(795, '127.0.0.1', '00:48:53', '', 14, 'Jan', 2021),
(796, '127.0.0.1', '00:49:06', '', 14, 'Jan', 2021),
(797, '127.0.0.1', '00:49:15', '', 14, 'Jan', 2021),
(798, '127.0.0.1', '00:49:23', '', 14, 'Jan', 2021),
(799, '127.0.0.1', '00:49:40', '', 14, 'Jan', 2021),
(800, '127.0.0.1', '00:50:07', '', 14, 'Jan', 2021),
(801, '127.0.0.1', '00:50:30', '', 14, 'Jan', 2021),
(802, '127.0.0.1', '00:50:44', '', 14, 'Jan', 2021),
(803, '127.0.0.1', '00:51:43', '', 14, 'Jan', 2021),
(804, '127.0.0.1', '00:53:25', '', 14, 'Jan', 2021),
(805, '127.0.0.1', '00:53:59', '', 14, 'Jan', 2021),
(806, '127.0.0.1', '00:56:15', '', 14, 'Jan', 2021),
(807, '127.0.0.1', '00:56:48', '', 14, 'Jan', 2021),
(808, '127.0.0.1', '00:58:23', '', 14, 'Jan', 2021),
(809, '127.0.0.1', '00:58:54', '', 14, 'Jan', 2021),
(810, '127.0.0.1', '00:59:19', '', 14, 'Jan', 2021),
(811, '127.0.0.1', '00:59:57', '', 14, 'Jan', 2021),
(812, '127.0.0.1', '01:00:19', '', 14, 'Jan', 2021),
(813, '127.0.0.1', '01:00:34', '', 14, 'Jan', 2021),
(814, '127.0.0.1', '01:01:07', '', 14, 'Jan', 2021),
(815, '127.0.0.1', '01:01:44', '', 14, 'Jan', 2021),
(816, '127.0.0.1', '01:02:09', '', 14, 'Jan', 2021),
(817, '127.0.0.1', '01:02:18', '', 14, 'Jan', 2021),
(818, '127.0.0.1', '01:02:23', '', 14, 'Jan', 2021),
(819, '127.0.0.1', '01:02:30', '', 14, 'Jan', 2021),
(820, '127.0.0.1', '01:03:29', '', 14, 'Jan', 2021),
(821, '127.0.0.1', '01:03:33', '', 14, 'Jan', 2021),
(822, '127.0.0.1', '01:04:50', '', 14, 'Jan', 2021),
(823, '127.0.0.1', '01:05:39', '', 14, 'Jan', 2021),
(824, '127.0.0.1', '01:06:12', '', 14, 'Jan', 2021),
(825, '127.0.0.1', '01:06:34', '', 14, 'Jan', 2021),
(826, '127.0.0.1', '01:06:57', '', 14, 'Jan', 2021),
(827, '127.0.0.1', '01:07:52', '', 14, 'Jan', 2021),
(828, '127.0.0.1', '01:08:08', '', 14, 'Jan', 2021),
(829, '127.0.0.1', '01:08:24', '', 14, 'Jan', 2021),
(830, '127.0.0.1', '01:08:38', '', 14, 'Jan', 2021),
(831, '127.0.0.1', '01:09:00', '', 14, 'Jan', 2021),
(832, '127.0.0.1', '01:09:20', '', 14, 'Jan', 2021),
(833, '127.0.0.1', '01:09:40', '', 14, 'Jan', 2021),
(834, '127.0.0.1', '01:10:00', '', 14, 'Jan', 2021),
(835, '127.0.0.1', '01:10:13', '', 14, 'Jan', 2021),
(836, '127.0.0.1', '01:10:31', '', 14, 'Jan', 2021),
(837, '127.0.0.1', '01:11:01', '', 14, 'Jan', 2021),
(838, '127.0.0.1', '01:11:16', '', 14, 'Jan', 2021),
(839, '127.0.0.1', '01:11:53', '', 14, 'Jan', 2021),
(840, '127.0.0.1', '01:12:08', '', 14, 'Jan', 2021),
(841, '127.0.0.1', '01:12:23', '', 14, 'Jan', 2021),
(842, '127.0.0.1', '01:12:32', '', 14, 'Jan', 2021),
(843, '127.0.0.1', '01:13:22', '', 14, 'Jan', 2021),
(844, '127.0.0.1', '01:16:59', '', 14, 'Jan', 2021),
(845, '127.0.0.1', '01:20:32', '', 14, 'Jan', 2021),
(846, '127.0.0.1', '01:20:40', '', 14, 'Jan', 2021),
(847, '127.0.0.1', '01:20:56', '', 14, 'Jan', 2021),
(848, '127.0.0.1', '01:21:36', '', 14, 'Jan', 2021),
(849, '127.0.0.1', '01:21:44', '', 14, 'Jan', 2021),
(850, '127.0.0.1', '01:21:58', '', 14, 'Jan', 2021),
(851, '127.0.0.1', '01:22:32', '', 14, 'Jan', 2021),
(852, '127.0.0.1', '01:23:00', '', 14, 'Jan', 2021),
(853, '127.0.0.1', '01:23:06', '', 14, 'Jan', 2021),
(854, '127.0.0.1', '01:23:35', '', 14, 'Jan', 2021),
(855, '127.0.0.1', '01:24:15', '', 14, 'Jan', 2021),
(856, '127.0.0.1', '01:24:46', '', 14, 'Jan', 2021),
(857, '127.0.0.1', '01:25:13', '', 14, 'Jan', 2021),
(858, '127.0.0.1', '01:25:18', '', 14, 'Jan', 2021),
(859, '127.0.0.1', '01:25:19', '', 14, 'Jan', 2021),
(860, '127.0.0.1', '01:26:28', '', 14, 'Jan', 2021),
(861, '127.0.0.1', '01:26:30', '', 14, 'Jan', 2021),
(862, '127.0.0.1', '01:26:33', '', 14, 'Jan', 2021),
(863, '127.0.0.1', '01:27:26', '', 14, 'Jan', 2021),
(864, '127.0.0.1', '01:27:35', '', 14, 'Jan', 2021),
(865, '127.0.0.1', '01:27:42', '', 14, 'Jan', 2021),
(866, '127.0.0.1', '01:29:31', '', 14, 'Jan', 2021),
(867, '127.0.0.1', '01:30:22', '', 14, 'Jan', 2021),
(868, '127.0.0.1', '01:30:27', '', 14, 'Jan', 2021),
(869, '127.0.0.1', '01:30:49', '', 14, 'Jan', 2021),
(870, '127.0.0.1', '01:31:01', '', 14, 'Jan', 2021),
(871, '127.0.0.1', '01:31:36', '', 14, 'Jan', 2021),
(872, '127.0.0.1', '01:31:40', '', 14, 'Jan', 2021),
(873, '127.0.0.1', '01:33:29', '', 14, 'Jan', 2021),
(874, '127.0.0.1', '01:33:37', '', 14, 'Jan', 2021),
(875, '127.0.0.1', '01:34:15', '', 14, 'Jan', 2021),
(876, '127.0.0.1', '01:34:38', '', 14, 'Jan', 2021),
(877, '127.0.0.1', '01:34:49', '', 14, 'Jan', 2021),
(878, '127.0.0.1', '01:35:48', '', 14, 'Jan', 2021),
(879, '127.0.0.1', '01:36:05', '', 14, 'Jan', 2021),
(880, '127.0.0.1', '01:36:19', '', 14, 'Jan', 2021),
(881, '127.0.0.1', '01:36:36', '', 14, 'Jan', 2021),
(882, '127.0.0.1', '01:38:30', '', 14, 'Jan', 2021),
(883, '127.0.0.1', '01:39:46', '', 14, 'Jan', 2021),
(884, '127.0.0.1', '01:40:24', '', 14, 'Jan', 2021),
(885, '127.0.0.1', '01:40:40', '', 14, 'Jan', 2021),
(886, '127.0.0.1', '01:40:55', '', 14, 'Jan', 2021),
(887, '127.0.0.1', '01:41:16', '', 14, 'Jan', 2021),
(888, '127.0.0.1', '01:42:13', '', 14, 'Jan', 2021),
(889, '127.0.0.1', '01:42:15', '', 14, 'Jan', 2021),
(890, '127.0.0.1', '01:42:37', '', 14, 'Jan', 2021),
(891, '127.0.0.1', '01:47:38', '', 14, 'Jan', 2021),
(892, '127.0.0.1', '01:52:38', '', 14, 'Jan', 2021),
(893, '127.0.0.1', '01:54:59', '', 14, 'Jan', 2021),
(894, '127.0.0.1', '01:55:12', '03:22:39', 14, 'Jan', 2021),
(895, '127.0.0.1', '01:56:15', '', 14, 'Jan', 2021),
(896, '127.0.0.1', '01:56:24', '', 14, 'Jan', 2021),
(897, '127.0.0.1', '01:56:50', '', 14, 'Jan', 2021),
(898, '127.0.0.1', '01:56:53', '', 14, 'Jan', 2021),
(899, '127.0.0.1', '02:01:54', '', 14, 'Jan', 2021),
(900, '127.0.0.1', '02:04:04', '', 14, 'Jan', 2021),
(901, '127.0.0.1', '02:04:08', '', 14, 'Jan', 2021),
(902, '127.0.0.1', '02:09:09', '', 14, 'Jan', 2021),
(903, '127.0.0.1', '02:14:10', '', 14, 'Jan', 2021),
(904, '127.0.0.1', '02:19:10', '', 14, 'Jan', 2021),
(905, '127.0.0.1', '02:24:11', '', 14, 'Jan', 2021),
(906, '127.0.0.1', '02:29:11', '', 14, 'Jan', 2021),
(907, '127.0.0.1', '02:34:12', '', 14, 'Jan', 2021),
(908, '127.0.0.1', '02:39:15', '', 14, 'Jan', 2021),
(909, '127.0.0.1', '02:44:13', '', 14, 'Jan', 2021),
(910, '127.0.0.1', '02:47:44', '', 14, 'Jan', 2021),
(911, '127.0.0.1', '02:48:14', '', 14, 'Jan', 2021),
(912, '127.0.0.1', '02:48:20', '', 14, 'Jan', 2021),
(913, '127.0.0.1', '02:53:21', '', 14, 'Jan', 2021),
(914, '127.0.0.1', '02:58:21', '', 14, 'Jan', 2021),
(915, '127.0.0.1', '03:03:21', '', 14, 'Jan', 2021),
(916, '127.0.0.1', '03:07:18', '', 14, 'Jan', 2021),
(917, '127.0.0.1', '03:08:46', '', 14, 'Jan', 2021),
(918, '127.0.0.1', '03:11:50', '', 14, 'Jan', 2021),
(919, '127.0.0.1', '03:12:11', '', 14, 'Jan', 2021),
(920, '127.0.0.1', '03:13:40', '', 14, 'Jan', 2021),
(921, '127.0.0.1', '03:13:46', '', 14, 'Jan', 2021),
(922, '127.0.0.1', '03:13:50', '', 14, 'Jan', 2021),
(923, '127.0.0.1', '03:14:33', '', 14, 'Jan', 2021),
(924, '127.0.0.1', '03:15:27', '', 14, 'Jan', 2021),
(925, '127.0.0.1', '03:15:36', '', 14, 'Jan', 2021),
(926, '127.0.0.1', '03:16:12', '', 14, 'Jan', 2021),
(927, '127.0.0.1', '03:17:40', '', 14, 'Jan', 2021),
(928, '127.0.0.1', '03:17:56', '', 14, 'Jan', 2021),
(929, '127.0.0.1', '00:12:05', '01:18:48', 15, 'Jan', 2021),
(930, '127.0.0.1', '00:20:16', '00:22:21', 15, 'Jan', 2021),
(931, '::1', '00:22:41', '01:20:43', 15, 'Jan', 2021),
(932, '127.0.0.1', '08:55:58', '10:53:02', 15, 'Jan', 2021),
(933, '::1', '09:00:30', '', 15, 'Jan', 2021),
(934, '127.0.0.1', '16:47:40', '17:22:54', 15, 'Jan', 2021),
(935, '127.0.0.1', '10:42:22', '14:05:46', 16, 'Jan', 2021),
(936, '127.0.0.1', '12:39:38', '12:40:08', 16, 'Jan', 2021),
(937, '::1', '12:40:41', '14:05:24', 16, 'Jan', 2021),
(938, '127.0.0.1', '13:08:50', '14:05:28', 16, 'Jan', 2021),
(939, '127.0.0.1', '01:08:11', '01:56:14', 18, 'Jan', 2021),
(940, '127.0.0.1', '09:00:29', '18:09:14', 18, 'Jan', 2021),
(941, '127.0.0.1', '09:04:39', '', 18, 'Jan', 2021),
(942, '127.0.0.1', '09:16:44', '18:04:39', 18, 'Jan', 2021),
(943, '::1', '14:22:32', '14:42:39', 18, 'Jan', 2021),
(944, '127.0.0.1', '09:37:50', '20:11:02', 19, 'Jan', 2021),
(945, '::1', '16:59:45', '17:01:47', 19, 'Jan', 2021),
(946, '::1', '17:05:09', '20:08:56', 19, 'Jan', 2021),
(947, '127.0.0.1', '00:04:59', '01:02:16', 20, 'Jan', 2021),
(960, '::1', '15:50:43', '15:51:04', 22, 'Jan', 2021),
(961, '127.0.0.1', '15:51:20', '', 22, 'Jan', 2021),
(962, '127.0.0.1', '15:51:25', '', 22, 'Jan', 2021),
(963, '127.0.0.1', '15:52:00', '', 22, 'Jan', 2021),
(964, '127.0.0.1', '15:52:03', '', 22, 'Jan', 2021),
(965, '127.0.0.1', '15:52:43', '', 22, 'Jan', 2021),
(966, '127.0.0.1', '15:52:59', '', 22, 'Jan', 2021),
(967, '127.0.0.1', '15:53:06', '', 22, 'Jan', 2021),
(968, '127.0.0.1', '15:53:28', '', 22, 'Jan', 2021),
(969, '127.0.0.1', '15:53:41', '', 22, 'Jan', 2021),
(970, '127.0.0.1', '15:54:46', '', 22, 'Jan', 2021),
(971, '127.0.0.1', '15:56:27', '', 22, 'Jan', 2021),
(972, '127.0.0.1', '15:56:36', '', 22, 'Jan', 2021),
(973, '127.0.0.1', '15:57:10', '', 22, 'Jan', 2021),
(974, '127.0.0.1', '15:57:57', '', 22, 'Jan', 2021),
(975, '127.0.0.1', '15:58:27', '', 22, 'Jan', 2021),
(976, '127.0.0.1', '15:58:34', '', 22, 'Jan', 2021),
(977, '127.0.0.1', '15:58:49', '', 22, 'Jan', 2021),
(978, '127.0.0.1', '15:58:52', '', 22, 'Jan', 2021),
(979, '127.0.0.1', '15:59:16', '', 22, 'Jan', 2021),
(980, '127.0.0.1', '15:59:19', '', 22, 'Jan', 2021),
(981, '127.0.0.1', '15:59:20', '', 22, 'Jan', 2021),
(982, '127.0.0.1', '15:59:26', '', 22, 'Jan', 2021),
(983, '127.0.0.1', '16:01:23', '', 22, 'Jan', 2021),
(984, '127.0.0.1', '16:01:43', '', 22, 'Jan', 2021),
(985, '127.0.0.1', '16:01:59', '', 22, 'Jan', 2021),
(986, '127.0.0.1', '16:02:30', '', 22, 'Jan', 2021),
(987, '127.0.0.1', '16:02:48', '', 22, 'Jan', 2021),
(988, '127.0.0.1', '16:04:11', '', 22, 'Jan', 2021),
(989, '127.0.0.1', '16:04:26', '', 22, 'Jan', 2021),
(990, '127.0.0.1', '16:04:38', '', 22, 'Jan', 2021),
(991, '127.0.0.1', '16:04:52', '', 22, 'Jan', 2021),
(992, '127.0.0.1', '16:05:11', '', 22, 'Jan', 2021),
(993, '127.0.0.1', '16:05:55', '', 22, 'Jan', 2021),
(994, '127.0.0.1', '16:08:06', '', 22, 'Jan', 2021),
(995, '127.0.0.1', '16:08:07', '', 22, 'Jan', 2021),
(996, '127.0.0.1', '16:08:11', '', 22, 'Jan', 2021),
(997, '127.0.0.1', '16:09:07', '', 22, 'Jan', 2021),
(998, '127.0.0.1', '16:10:21', '', 22, 'Jan', 2021),
(999, '127.0.0.1', '16:11:36', '', 22, 'Jan', 2021),
(1000, '127.0.0.1', '16:12:06', '', 22, 'Jan', 2021),
(1001, '127.0.0.1', '16:12:26', '', 22, 'Jan', 2021),
(1002, '127.0.0.1', '16:14:02', '', 22, 'Jan', 2021),
(1003, '127.0.0.1', '16:15:57', '', 22, 'Jan', 2021),
(1004, '127.0.0.1', '16:16:20', '', 22, 'Jan', 2021),
(1005, '127.0.0.1', '16:17:14', '', 22, 'Jan', 2021),
(1006, '127.0.0.1', '16:17:20', '', 22, 'Jan', 2021),
(1007, '127.0.0.1', '16:18:45', '', 22, 'Jan', 2021),
(1008, '127.0.0.1', '16:19:17', '', 22, 'Jan', 2021),
(1009, '127.0.0.1', '16:21:03', '', 22, 'Jan', 2021),
(1010, '127.0.0.1', '16:21:57', '', 22, 'Jan', 2021),
(1011, '127.0.0.1', '16:23:09', '', 22, 'Jan', 2021),
(1012, '127.0.0.1', '16:24:06', '', 22, 'Jan', 2021),
(1013, '127.0.0.1', '16:24:14', '', 22, 'Jan', 2021),
(1014, '127.0.0.1', '16:32:34', '', 22, 'Jan', 2021),
(1015, '127.0.0.1', '16:40:54', '', 22, 'Jan', 2021),
(1016, '127.0.0.1', '16:49:14', '', 22, 'Jan', 2021),
(1017, '127.0.0.1', '16:57:34', '', 22, 'Jan', 2021),
(1018, '127.0.0.1', '17:05:54', '', 22, 'Jan', 2021),
(1019, '127.0.0.1', '09:44:59', '15:54:30', 23, 'Jan', 2021),
(1020, '127.0.0.1', '23:16:00', '23:54:03', 24, 'Jan', 2021),
(1021, '127.0.0.1', '00:02:23', '', 25, 'Jan', 2021),
(1022, '127.0.0.1', '00:05:01', '', 25, 'Jan', 2021),
(1023, '127.0.0.1', '00:07:23', '', 25, 'Jan', 2021),
(1024, '127.0.0.1', '00:07:44', '', 25, 'Jan', 2021),
(1025, '127.0.0.1', '00:09:04', '', 25, 'Jan', 2021),
(1026, '127.0.0.1', '00:10:52', '', 25, 'Jan', 2021),
(1027, '127.0.0.1', '00:11:15', '', 25, 'Jan', 2021),
(1028, '127.0.0.1', '00:11:38', '', 25, 'Jan', 2021),
(1029, '127.0.0.1', '00:12:08', '', 25, 'Jan', 2021),
(1030, '127.0.0.1', '00:12:20', '', 25, 'Jan', 2021),
(1031, '127.0.0.1', '00:15:32', '01:34:10', 25, 'Jan', 2021),
(1032, '127.0.0.1', '00:18:27', '', 25, 'Jan', 2021),
(1033, '127.0.0.1', '00:18:35', '', 25, 'Jan', 2021),
(1034, '127.0.0.1', '00:19:21', '', 25, 'Jan', 2021),
(1035, '127.0.0.1', '00:19:26', '', 25, 'Jan', 2021),
(1036, '127.0.0.1', '00:19:57', '', 25, 'Jan', 2021),
(1037, '127.0.0.1', '00:28:17', '', 25, 'Jan', 2021),
(1038, '127.0.0.1', '00:36:36', '', 25, 'Jan', 2021),
(1039, '127.0.0.1', '00:44:57', '', 25, 'Jan', 2021),
(1040, '127.0.0.1', '00:53:16', '', 25, 'Jan', 2021),
(1041, '127.0.0.1', '00:59:04', '', 25, 'Jan', 2021),
(1042, '127.0.0.1', '00:59:37', '', 25, 'Jan', 2021),
(1043, '127.0.0.1', '01:06:29', '', 25, 'Jan', 2021),
(1044, '127.0.0.1', '01:06:41', '', 25, 'Jan', 2021),
(1045, '127.0.0.1', '01:08:17', '', 25, 'Jan', 2021),
(1046, '127.0.0.1', '01:09:20', '', 25, 'Jan', 2021),
(1047, '127.0.0.1', '01:09:55', '', 25, 'Jan', 2021),
(1048, '127.0.0.1', '01:10:30', '', 25, 'Jan', 2021),
(1049, '127.0.0.1', '01:10:47', '', 25, 'Jan', 2021),
(1050, '127.0.0.1', '01:11:15', '', 25, 'Jan', 2021),
(1051, '127.0.0.1', '01:11:59', '', 25, 'Jan', 2021),
(1052, '127.0.0.1', '01:12:25', '', 25, 'Jan', 2021),
(1053, '127.0.0.1', '01:13:16', '', 25, 'Jan', 2021),
(1054, '127.0.0.1', '01:14:30', '', 25, 'Jan', 2021),
(1055, '127.0.0.1', '01:14:48', '', 25, 'Jan', 2021),
(1056, '127.0.0.1', '01:15:17', '', 25, 'Jan', 2021),
(1057, '127.0.0.1', '01:15:40', '', 25, 'Jan', 2021),
(1058, '127.0.0.1', '01:22:59', '01:33:15', 25, 'Jan', 2021),
(1059, '127.0.0.1', '01:24:01', '', 25, 'Jan', 2021),
(1060, '127.0.0.1', '01:26:57', '01:38:57', 25, 'Jan', 2021),
(1061, '127.0.0.1', '01:32:23', '', 25, 'Jan', 2021),
(1062, '127.0.0.1', '08:38:01', '11:04:17', 25, 'Jan', 2021),
(1063, '127.0.0.1', '10:31:32', '', 25, 'Jan', 2021);

-- --------------------------------------------------------

--
-- Struktur dari tabel `job_application`
--

CREATE TABLE `job_application` (
  `_id` varchar(60) NOT NULL,
  `user_id` varchar(60) NOT NULL,
  `cv_id` varchar(60) NOT NULL,
  `job_vacancy_id` varchar(60) NOT NULL,
  `date_send` varchar(60) NOT NULL,
  `status_job_application` enum('New','View','Pandding','Received','Rejected','Removed By Job Seekers') NOT NULL,
  `note_job_application` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `job_application`
--

INSERT INTO `job_application` (`_id`, `user_id`, `cv_id`, `job_vacancy_id`, `date_send`, `status_job_application`, `note_job_application`) VALUES
('ltp-tto4l6xl4xkg0m6rra0js2epbfr0bk806ur5190121114124am', 'ltp_p4ptat3eties57jdq6m1xj4ghmjax8s6j6vr8xqzr97agmga60', 'ltp_pfuqjpcbrw038dee5txo7droq3r0udok8hh5i4hbam1jf7lqrb', 'ltp-5ox5lzmrqpd0x6vgc0qx8ql2ewgsbmqld5f4180121010941am', '19-01-2021 11:41:24', 'View', ''),
('ltp-yfzdz4ndv088dyaicisxe0clpr756fz093ae190121114124am', 'ltp-af1yxnllo9eubsrs3wj0f51l5jgl3ollurtv150121090011am', 'ltp-8po9jwgteh32rtvf8yb74ej3mzy1pnaz22pq150121010042am', 'ltp-5ox5lzmrqpd0x6vgc0qx8ql2ewgsbmqld5f4180121010941am', '19-01-2021 11:41:24', 'Removed By Job Seekers', ''),
('ltp_4w31z9rwxds0wa0hboqdc8mghhpoosl1b5rk021120121801pm', 'ltp_p4ptat3eties57jdq6m1xj4ghmjax8s6j6vr8xqzr97agmga60', 'ltp_pfuqjpcbrw038dee5txo7droq3r0udok8hh5i4hbam1jf7lqrb', 'ltp_g3khgad7li4l7bo7axonodg26c9bxzdm7xok021120115633am', '02-11-2020 12:18:01', 'View', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `job_vacancy`
--

CREATE TABLE `job_vacancy` (
  `_id` varchar(60) NOT NULL,
  `company_id` varchar(60) NOT NULL,
  `title` varchar(80) NOT NULL,
  `poster` varchar(200) NOT NULL,
  `delivery_destination` enum('Job Request','Internship Request') NOT NULL,
  `date_create` varchar(60) NOT NULL,
  `close_in` varchar(30) NOT NULL,
  `note` text NOT NULL,
  `job_vacancy_status` enum('Show','Hide') NOT NULL,
  `notive` enum('TRUE','FALSE') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `job_vacancy`
--

INSERT INTO `job_vacancy` (`_id`, `company_id`, `title`, `poster`, `delivery_destination`, `date_create`, `close_in`, `note`, `job_vacancy_status`, `notive`) VALUES
('ltp-5ox5lzmrqpd0x6vgc0qx8ql2ewgsbmqld5f4180121010941am', 'ltp_khm4j2fsiyy098iof5xr074sxlvvgidaehgh6zxbi1hqll6bzy', 'Loker', 'ltp-PUTOUWTEFS2021011810940am.jpg', 'Job Request', '18 01 2021 01:09:41', '2021-01-30', 'Ini Loker', 'Show', 'FALSE'),
('ltp_g3khgad7li4l7bo7axonodg26c9bxzdm7xok021120115633am', 'ltp_khm4j2fsiyy098iof5xr074sxlvvgidaehgh6zxbi1hqll6bzy', 'Dibutuhkan', 'ltp_RHZSIPGXXJ20201105234522pm.jpeg', 'Job Request', '02 11 2020 11:56:33', '2021-01-24', 'rajin dan rapih', 'Show', 'FALSE'),
('_id-biy5ak63tf9m9kcgy9v7cp0hgmpv30b2zryt250121010915am', 'ltp_khm4j2fsiyy098iof5xr074sxlvvgidaehgh6zxbi1hqll6bzy', 'New Loker', 'ltp-JGNYFNRXHM2021012510915am.jpg', 'Internship Request', '25 01 2021 01:09:15', '2021-02-05', 'New Loker', 'Show', 'TRUE'),
('_id-jaytw2t1h2ya4e7qawenevuwd8tywou6smro250121011422am', 'ltp_khm4j2fsiyy098iof5xr074sxlvvgidaehgh6zxbi1hqll6bzy', 'Olimpik Loker Baju', 'ltp-DEAUFOTCUD2021012511422am.jpg', 'Internship Request', '25 01 2021 01:14:22', '2021-03-19', '<span style=\"background-color: rgb(140, 123, 198);\"><font color=\"#9C9C94\">WOW</font></span>..... ADA LOKER NIH GUYS<br>', 'Show', 'FALSE');

-- --------------------------------------------------------

--
-- Struktur dari tabel `language`
--

CREATE TABLE `language` (
  `id_language` varchar(60) NOT NULL,
  `file` varchar(60) NOT NULL,
  `language` varchar(60) NOT NULL,
  `switch_voice` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `language`
--

INSERT INTO `language` (`id_language`, `file`, `language`, `switch_voice`) VALUES
('en', 'english', 'UK English', 'I am a system designed to support job placements and apprenticeships. We are now preparing the language you have chosen. Please wait a few more seconds, Thank you.'),
('id', 'indonesian', 'Indonesian', 'Saya adalah sistem yang dirancang untuk mendukung penempatan kerja dan Pemagangan, Kami sekarang sedang mempersiapkan bahasa yang anda telah pilih, Mohon tunggu beberapa detik lagi, Terima kasih.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `majors`
--

CREATE TABLE `majors` (
  `id_major` varchar(60) NOT NULL,
  `code` varchar(3) NOT NULL,
  `major` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `majors`
--

INSERT INTO `majors` (`id_major`, `code`, `major`) VALUES
('ltp_ld0tjg8fjt2u6yzff38ik6gogys6mlh6y5uvi34736cqjqvrmw', 'MI', 'Managemen Informatika'),
('ltp_n0cvv8m1r68f0cow7unyqcus0qsq6kpqbwgps1gap55qicw3ro', 'TM', 'Teknik Mesin'),
('ltp_vvy2mqdiyabzz2kit6jebyugi1vjow8o3n5gmdxeo3p7q36q38', 'TE', 'Teknik Elektronika');

-- --------------------------------------------------------

--
-- Struktur dari tabel `prersonal_data`
--

CREATE TABLE `prersonal_data` (
  `_id` varchar(60) NOT NULL,
  `user_id` varchar(60) NOT NULL,
  `tinggi` int(7) NOT NULL,
  `berat` int(7) NOT NULL,
  `negara` enum('WNI','WNA') NOT NULL,
  `sim` enum('SIM A','SIM B I','SIM B II','SIM C','SIM D','-') NOT NULL,
  `golongan_darah` enum('A','B','AB','O') NOT NULL,
  `fisik` enum('Normal','Abnormal') NOT NULL,
  `catatan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `prersonal_data`
--

INSERT INTO `prersonal_data` (`_id`, `user_id`, `tinggi`, `berat`, `negara`, `sim`, `golongan_darah`, `fisik`, `catatan`) VALUES
('ltp-fn35ryxxisf466t175dkqvkyddjh90uzp5py160121131024pm', 'ltp-af1yxnllo9eubsrs3wj0f51l5jgl3ollurtv150121090011am', 160, 50, 'WNI', 'SIM C', 'O', 'Normal', 'SIAP TEMPUR'),
('ltp_sg8gg9e516absctq6kjgupqe70z51if5oh4eawze3vm9w6rksl', 'ltp_p4ptat3eties57jdq6m1xj4ghmjax8s6j6vr8xqzr97agmga60', 170, 50, 'WNI', 'SIM C', 'O', 'Normal', 'Kurang Perduli Dengan Penampilan, TIDAK SUKA DILARANG MEROKOK DAN NGOPI !');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `_id` varchar(60) NOT NULL,
  `nim` char(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `name` varchar(70) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `tempat_tanggal_lahir` varchar(60) NOT NULL,
  `jenis_kelamin` enum('Male','Female') NOT NULL,
  `status_pernikahan` enum('-','Single','Married','Divorced','Divorced Died') NOT NULL,
  `major_id` varchar(60) NOT NULL,
  `alamat` text NOT NULL,
  `password` varchar(200) NOT NULL,
  `photo` varchar(200) NOT NULL,
  `status` enum('New','View','Aktif','Tidak Aktif') NOT NULL,
  `role_id` int(3) NOT NULL,
  `company_id` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`_id`, `nim`, `email`, `name`, `phone`, `tempat_tanggal_lahir`, `jenis_kelamin`, `status_pernikahan`, `major_id`, `alamat`, `password`, `photo`, `status`, `role_id`, `company_id`) VALUES
('ltp-af1yxnllo9eubsrs3wj0f51l5jgl3ollurtv150121090011am', '22111333', 'tm@gmail.com', 'TM', '9065642345', '30 Januari 2020', 'Male', '-', 'ltp_n0cvv8m1r68f0cow7unyqcus0qsq6kpqbwgps1gap55qicw3ro', '', '$2y$10$GC96faUJc90.uZMXeM3dEu2A3C9lhB16WjyHiQMbmxPQqOn4mza0G', 'ltp-FCYHCBWYJJ20210116125340pm.jpg', 'Aktif', 3, ''),
('ltp_78lqj6pvvbhwp950ycgep1y5w7owkjvpp9gt4brt9o5mwrj1ki', '111111111', 'cnp@gmail.com', 'Cnp Admin', '111222333', 'Trimurjo 20 nov 1998', 'Male', 'Single', '', 'LK.TOTOKATON RT/RW 029/010 KEC.TRIMURJO, KAB.LAMPUNG TENGAH PRO.LAMPUNG', '$2y$10$CeaAVfb5LAmHDmeD8o5k.OEIRVXI32eAC755MSi0NEcom3tWDtM5a', 'person_3.jpg', 'Aktif', 1, ''),
('ltp_db98uomdqwlr9ozjdhfm8qvtxrciqpc6d48xg2004wl6ypvhbl', '21474836474343', 'new@gmail.com', 'new name', '4444', 'Jakarta, 20 Agustus 1999', 'Male', '-', 'ltp_n0cvv8m1r68f0cow7unyqcus0qsq6kpqbwgps1gap55qicw3ro', 'LK.TOTOKATON RT/RW 029/010 KEC.TRIMURJO, KAB.LAMPUNG TENGAH PRO.LAMPUNG', '$2y$10$W3Kjo//BH7qADkaiDMmHouTqDzcqMe5IKsS84LG99drR8EsW0OfmK', '', 'View', 3, ''),
('ltp_p4ptat3eties57jdq6m1xj4ghmjax8s6j6vr8xqzr97agmga60', '33333333', 'rafiadityapradana@gmail.com', 'Rafi Aditya Pradana', '+62833333333', 'Adipuro, 26 nov 1998', 'Male', 'Single', 'ltp_ld0tjg8fjt2u6yzff38ik6gogys6mlh6y5uvi34736cqjqvrmw', 'LK. TOTOKATON RT/RW 029/010, KEC. TRIMURJO, KAB. LAMPUNG TENGAH, PROV. LAMPUNG', '$2y$10$CeaAVfb5LAmHDmeD8o5k.OEIRVXI32eAC755MSi0NEcom3tWDtM5a', 'rafi.jpg', 'Aktif', 3, ''),
('ltp_qaxxxt356o68mca6mjbk145t4gvcfpm70g5r7xoo4jsv71jsdo', '22222222', 'pt@gmail.com', 'Candra', '222222222', 'Jogja 20 jan 2020', 'Female', 'Single', '', 'JL.TENGKU UMAR NO 27 JAKRTA SELATAN', '$2y$10$NONMCarQZGAAk7EZ8edETOkbtyzsHYo0nj4Mk6z7LsZL.z8ikMUFa', 'person-3.jpg', 'Aktif', 2, 'ltp_khm4j2fsiyy098iof5xr074sxlvvgidaehgh6zxbi1hqll6bzy');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users_activity`
--

CREATE TABLE `users_activity` (
  `id_activity` varchar(60) NOT NULL,
  `user_id` varchar(60) NOT NULL,
  `ip_access` varchar(30) NOT NULL,
  `time_login` varchar(30) NOT NULL,
  `device_name` varchar(100) NOT NULL,
  `total_access` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users_activity`
--

INSERT INTO `users_activity` (`id_activity`, `user_id`, `ip_access`, `time_login`, `device_name`, `total_access`) VALUES
('ltp-0xvmr2xkbnbeo2o3bmx4nno0pdzwxgpg7j7y160121124048pm', 'ltp-af1yxnllo9eubsrs3wj0f51l5jgl3ollurtv150121090011am', '::1', '16 Jan 2021', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.14', 1),
('ltp-13kf24x5ptu2mxkphzty6nnx6ai7skzxv2h2130121113758am', 'ltp_p4ptat3eties57jdq6m1xj4ghmjax8s6j6vr8xqzr97agmga60', '127.0.0.1', '13 Jan 2021', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:84.0) Gecko/20100101 Firefox/84.0', 2),
('ltp-3y4enky6v6pzwdgel5as2k9htim7wtb3vlo2150121002336am', 'ltp_p4ptat3eties57jdq6m1xj4ghmjax8s6j6vr8xqzr97agmga60', '::1', '15 Jan 2021', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.14', 1),
('ltp-4bnfp7u4gofv4wsekmiwpy6dc9coq015gp96111220151705pm', 'ltp_qaxxxt356o68mca6mjbk145t4gvcfpm70g5r7xoo4jsv71jsdo', '::1', '11 Dec 2020', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:83.0) Gecko/20100101 Firefox/83.0', 1),
('ltp-4k2skg6lxnxf57yih9672asdsl5t8o2pgcnc121120015550am', 'ltp_p4ptat3eties57jdq6m1xj4ghmjax8s6j6vr8xqzr97agmga60', '::1', '12 Nov 2020', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/86.0.4240.19', 53),
('ltp-6cagk80zwla94dlmjyuzk85e71effghfz2b1130121172933pm', 'ltp_qaxxxt356o68mca6mjbk145t4gvcfpm70g5r7xoo4jsv71jsdo', '::1', '13 Jan 2021', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.14', 1),
('ltp-f0vbmvezybauuuse8e1um4mc2xwc0krxspxl131120114916am', 'ltp_p4ptat3eties57jdq6m1xj4ghmjax8s6j6vr8xqzr97agmga60', '::1', '13 Nov 2020', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:82.0) Gecko/20100101 Firefox/82.0', 2),
('ltp-ha072kcyg0ad5zi16pwib67fv8wxyx8llg1z230121095551am', 'ltp_qaxxxt356o68mca6mjbk145t4gvcfpm70g5r7xoo4jsv71jsdo', '127.0.0.1', '23 Jan 2021', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:84.0) Gecko/20100101 Firefox/84.0', 1),
('ltp-l9tcfaydahajr9iy1ubpee5ks9lv4qpk73h3180121142238pm', 'ltp_p4ptat3eties57jdq6m1xj4ghmjax8s6j6vr8xqzr97agmga60', '::1', '18 Jan 2021', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.14', 1),
('ltp-okl7djvpsc8txwlubo8203ig53ywmkgzmqhq071120095338am', 'ltp_qaxxxt356o68mca6mjbk145t4gvcfpm70g5r7xoo4jsv71jsdo', '::1', '07 Nov 2020', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/86.0.4240.18', 5),
('ltp_h1qnih4wef2zusxrxdm2pwq78g52q3qhfp12021120095632am', 'ltp_qaxxxt356o68mca6mjbk145t4gvcfpm70g5r7xoo4jsv71jsdo', '::1', '02 Nov 2020', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/86.0.4240.11', 6),
('ltp_ise0e1x5n57kh1x5yjbpss2ha07840xpebou281020231954pm', 'ltp_p4ptat3eties57jdq6m1xj4ghmjax8s6j6vr8xqzr97agmga60', '192.168.1.3', '28 Oct 2020', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:82.0) Gecko/20100101 Firefox/82.0', 2),
('ltp_m6zw0tt28dmfntji73iwekdmerfjkbq3rub5021120121713pm', 'ltp_p4ptat3eties57jdq6m1xj4ghmjax8s6j6vr8xqzr97agmga60', '::1', '02 Nov 2020', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/86.0.4240.11', 6),
('_id-lsgvbbrwrx6b8ltcv7zi6l3vqyjrek295d2e250121102939am', 'ltp_p4ptat3eties57jdq6m1xj4ghmjax8s6j6vr8xqzr97agmga60', '127.0.0.1', '25 Jan 2021', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:84.0) Gecko/20100101 Firefox/84.0', 43),
('_id-z3zg1udjazie7j6k9x4utgiyuyiavgd0u599240121231607pm', 'ltp_qaxxxt356o68mca6mjbk145t4gvcfpm70g5r7xoo4jsv71jsdo', '127.0.0.1', '24 Jan 2021', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:84.0) Gecko/20100101 Firefox/84.0', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_ability`
--

CREATE TABLE `user_ability` (
  `_id` varchar(60) NOT NULL,
  `user_id` varchar(60) NOT NULL,
  `value_ability` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_ability`
--

INSERT INTO `user_ability` (`_id`, `user_id`, `value_ability`) VALUES
('ltp_ig2fi3r5ushu1kjs7mv8gvmzaqi8ly2xmcu7hue2trzchoaxdc', 'ltp_p4ptat3eties57jdq6m1xj4ghmjax8s6j6vr8xqzr97agmga60', 'Umum : MIKROTIK, Instalasi Jaringan, Instalasi PC/KOMPUTER, Microsoft Office'),
('ltp_is1ar1acpmir85i427kosetfdeeeywebf4byef810jyua2s1l9', 'ltp_p4ptat3eties57jdq6m1xj4ghmjax8s6j6vr8xqzr97agmga60', 'Pemograman : PHP Native, PHP Framework : CODEIGNITER, LARAVEL, JAVA, PYTHON, JAVASCRIPT Native, JAVASCRIPT Framework: REACT, ANGULAR, VUE, C#'),
('ltp_vb0yen8czxfmee7cwbgxmoj9i3459ytxertbx3bmw6l4o2xt1c', 'ltp_p4ptat3eties57jdq6m1xj4ghmjax8s6j6vr8xqzr97agmga60', 'Desain : Adobe illustrator, Photoshop, After effects, Premiere pro');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_roles`
--

CREATE TABLE `user_roles` (
  `id_role` int(3) NOT NULL,
  `roles` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_roles`
--

INSERT INTO `user_roles` (`id_role`, `roles`) VALUES
(1, 'Cnp'),
(2, 'Perusahaan'),
(3, 'Pencaker/Mahasiswa');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `activity`
--
ALTER TABLE `activity`
  ADD PRIMARY KEY (`_id`);

--
-- Indeks untuk tabel `auth_user_tokens`
--
ALTER TABLE `auth_user_tokens`
  ADD PRIMARY KEY (`_id`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indeks untuk tabel `certificate`
--
ALTER TABLE `certificate`
  ADD PRIMARY KEY (`id_certificate`);

--
-- Indeks untuk tabel `color_header`
--
ALTER TABLE `color_header`
  ADD PRIMARY KEY (`id_color`);

--
-- Indeks untuk tabel `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`id_company`),
  ADD UNIQUE KEY `company_phone` (`company_phone`),
  ADD UNIQUE KEY `company_mail` (`company_mail`),
  ADD UNIQUE KEY `company_site` (`company_site`);

--
-- Indeks untuk tabel `cv`
--
ALTER TABLE `cv`
  ADD PRIMARY KEY (`_id`);

--
-- Indeks untuk tabel `experience`
--
ALTER TABLE `experience`
  ADD PRIMARY KEY (`_id`);

--
-- Indeks untuk tabel `gallery_company`
--
ALTER TABLE `gallery_company`
  ADD PRIMARY KEY (`_id`);

--
-- Indeks untuk tabel `ip_access`
--
ALTER TABLE `ip_access`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `job_application`
--
ALTER TABLE `job_application`
  ADD PRIMARY KEY (`_id`);

--
-- Indeks untuk tabel `job_vacancy`
--
ALTER TABLE `job_vacancy`
  ADD PRIMARY KEY (`_id`);

--
-- Indeks untuk tabel `language`
--
ALTER TABLE `language`
  ADD PRIMARY KEY (`id_language`);

--
-- Indeks untuk tabel `majors`
--
ALTER TABLE `majors`
  ADD PRIMARY KEY (`id_major`);

--
-- Indeks untuk tabel `prersonal_data`
--
ALTER TABLE `prersonal_data`
  ADD PRIMARY KEY (`_id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`_id`),
  ADD UNIQUE KEY `nim` (`nim`);

--
-- Indeks untuk tabel `users_activity`
--
ALTER TABLE `users_activity`
  ADD PRIMARY KEY (`id_activity`);

--
-- Indeks untuk tabel `user_ability`
--
ALTER TABLE `user_ability`
  ADD PRIMARY KEY (`_id`);

--
-- Indeks untuk tabel `user_roles`
--
ALTER TABLE `user_roles`
  ADD PRIMARY KEY (`id_role`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `color_header`
--
ALTER TABLE `color_header`
  MODIFY `id_color` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `ip_access`
--
ALTER TABLE `ip_access`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1064;

--
-- AUTO_INCREMENT untuk tabel `user_roles`
--
ALTER TABLE `user_roles`
  MODIFY `id_role` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
