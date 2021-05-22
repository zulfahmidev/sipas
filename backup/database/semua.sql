#
# TABLE STRUCTURE FOR: disposisi
#

DROP TABLE IF EXISTS `disposisi`;

CREATE TABLE `disposisi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sm_id` int(11) NOT NULL,
  `jabatan_id` int(11) DEFAULT NULL,
  `isi` text NOT NULL,
  `batas_waktu` date NOT NULL,
  `sifat_id` int(11) DEFAULT NULL,
  `catatan` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `sifat_id` (`sifat_id`),
  KEY `jabatan_id` (`jabatan_id`),
  KEY `disposisi_ibfk_1` (`sm_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

#
# TABLE STRUCTURE FOR: jabatan
#

DROP TABLE IF EXISTS `jabatan`;

CREATE TABLE `jabatan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(128) DEFAULT NULL COMMENT 'opsional',
  `jabatan` varchar(128) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

INSERT INTO `jabatan` (`id`, `nama`, `jabatan`) VALUES (1, 'H. Sahwan, S.H., M.H.', 'Kepala Biro Keuangan');
INSERT INTO `jabatan` (`id`, `nama`, `jabatan`) VALUES (2, 'Lilies Ainany, S.E., M.M.', 'Kepala Bagian PNBP');
INSERT INTO `jabatan` (`id`, `nama`, `jabatan`) VALUES (3, 'Jatmiko Hendro Yuwono, S.Kom', 'Kasubbag PNBP Peradilan C');
INSERT INTO `jabatan` (`id`, `nama`, `jabatan`) VALUES (4, 'Muhammad Ali Zaki, S.H., M.H.', 'Kasubbag PNBP Peradilan B');
INSERT INTO `jabatan` (`id`, `nama`, `jabatan`) VALUES (5, 'Galuh Admiati, S.E.', 'Kasubbag PNBP Peradilan A');
INSERT INTO `jabatan` (`id`, `nama`, `jabatan`) VALUES (6, 'Adia Maududi, S.Kom', 'Ahli Pertama -  Pranata Komputer');
INSERT INTO `jabatan` (`id`, `nama`, `jabatan`) VALUES (7, 'Agustian', 'PPNPN');


#
# TABLE STRUCTURE FOR: sifat
#

DROP TABLE IF EXISTS `sifat`;

CREATE TABLE `sifat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sifat` varchar(128) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

INSERT INTO `sifat` (`id`, `sifat`) VALUES (1, 'Segera');
INSERT INTO `sifat` (`id`, `sifat`) VALUES (2, 'Sangat Segera');
INSERT INTO `sifat` (`id`, `sifat`) VALUES (3, 'Rahasia');


#
# TABLE STRUCTURE FOR: surat_keluar
#

DROP TABLE IF EXISTS `surat_keluar`;

CREATE TABLE `surat_keluar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `no_agenda` int(11) NOT NULL,
  `pengirim` varchar(128) NOT NULL,
  `no_surat` varchar(128) NOT NULL,
  `isi` text NOT NULL,
  `tgl_surat` date NOT NULL,
  `tgl_diterima` date NOT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  `file` varchar(128) DEFAULT NULL,
  `created_at` date NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

INSERT INTO `surat_keluar` (`id`, `no_agenda`, `pengirim`, `no_surat`, `isi`, `tgl_surat`, `tgl_diterima`, `keterangan`, `file`, `created_at`, `user_id`) VALUES (3, 1, 'PNBP', 'B-16/Bua.3/KU.04/3/2021', 'Perjadin Sumsel (PT, PTA, PTUN Palembang)', '2021-03-29', '2021-04-29', 'Perjadin Sumsel (PT, PTA, PTUN Palembang)', 'B16Bua_3KU_0432021.pdf', '2021-04-19', 1);
INSERT INTO `surat_keluar` (`id`, `no_agenda`, `pengirim`, `no_surat`, `isi`, `tgl_surat`, `tgl_diterima`, `keterangan`, `file`, `created_at`, `user_id`) VALUES (4, 2, 'PNBP', 'ST-0183/Bua.3/III/2021', 'ST Perjadin Sumsel (PT, PTA, PTUN Palembang)', '2021-03-29', '2021-04-29', 'ST Perjadin Sumsel (PT, PTA, PTUN Palembang)', 'ST-0183Bua_3III2021.pdf', '2021-04-19', 1);
INSERT INTO `surat_keluar` (`id`, `no_agenda`, `pengirim`, `no_surat`, `isi`, `tgl_surat`, `tgl_diterima`, `keterangan`, `file`, `created_at`, `user_id`) VALUES (5, 3, 'PNBP', 'B/17/Bua.3/KU.04/4/2021', 'Pengelolaan Layanan PNBP di Mahkamah Agung u/ Kemenkeu', '2021-04-19', '2021-04-19', 'Pengelolaan Layanan PNBP di Mahkamah Agung u/ Kemenkeu', 'B17Bua_3KU_0442021.pdf', '2021-04-19', 1);
INSERT INTO `surat_keluar` (`id`, `no_agenda`, `pengirim`, `no_surat`, `isi`, `tgl_surat`, `tgl_diterima`, `keterangan`, `file`, `created_at`, `user_id`) VALUES (6, 4, 'PNBP', 'B/18/Bua.3/KU.04/4/2021', 'Pengelolaan Layanan PNBP di Mahkamah Agung u/ Internal', '2021-04-19', '2021-04-19', 'Pengelolaan Layanan PNBP di Mahkamah Agung u/ Internal', 'B18Bua_3KU_0442021.pdf', '2021-04-19', 1);


#
# TABLE STRUCTURE FOR: surat_masuk
#

DROP TABLE IF EXISTS `surat_masuk`;

CREATE TABLE `surat_masuk` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `no_agenda` int(11) DEFAULT NULL,
  `pengirim` varchar(128) DEFAULT NULL,
  `no_surat` varchar(128) DEFAULT NULL,
  `isi` text DEFAULT NULL,
  `tgl_surat` date DEFAULT NULL,
  `tgl_diterima` date DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  `file` varchar(128) DEFAULT NULL,
  `created_at` date NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

INSERT INTO `surat_masuk` (`id`, `no_agenda`, `pengirim`, `no_surat`, `isi`, `tgl_surat`, `tgl_diterima`, `keterangan`, `file`, `created_at`, `user_id`) VALUES (9, 1, 'tes', '001/tes', 'tes', '2021-05-04', '2021-05-04', 'tes', 'Logo_Mahkamah_Agung_RI.png', '2021-05-04', 1);


#
# TABLE STRUCTURE FOR: user
#

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(128) NOT NULL,
  `username` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `role_id` int(11) NOT NULL,
  `date_created` varchar(128) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `role_id` (`role_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

INSERT INTO `user` (`id`, `name`, `username`, `email`, `password`, `image`, `role_id`, `date_created`) VALUES (1, 'Akun Admin', 'admin123', 'admin@gmail.com', '$2y$10$i4HD610v2o5HOxZXEC4G5eO.E.D0oVy/eKAohNku2EXZOOW4Y75pC', 'logoMA.jpg', 1, '1595945906');
INSERT INTO `user` (`id`, `name`, `username`, `email`, `password`, `image`, `role_id`, `date_created`) VALUES (3, 'Akun user', 'user1234', 'user@gmail.com', '$2y$10$kBSc9s3Ev/dfUyLgdsqe8uGMe2WWsixHbksKjYILHMhbKz.pDTbe.', 'default.svg', 2, '1600783192');
INSERT INTO `user` (`id`, `name`, `username`, `email`, `password`, `image`, `role_id`, `date_created`) VALUES (4, 'Adia Maududi', 'Adia', 'adiakeuangan@gmail.com', '$2y$10$wBRIemzu7w.gM/ZjVqIBAub1lXeX01kCstVYC87ZB6Y7vj4rrDjzK', 'Logo_Mahkamah_Agung_RI.png', 2, '1618453172');


#
# TABLE STRUCTURE FOR: user_role
#

DROP TABLE IF EXISTS `user_role`;

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role` varchar(128) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

INSERT INTO `user_role` (`id`, `role`) VALUES (1, 'Admin');
INSERT INTO `user_role` (`id`, `role`) VALUES (2, 'User');


#
# TABLE STRUCTURE FOR: user_token
#

DROP TABLE IF EXISTS `user_token`;

CREATE TABLE `user_token` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(128) NOT NULL,
  `token` varchar(128) NOT NULL,
  `date_created` varchar(128) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

