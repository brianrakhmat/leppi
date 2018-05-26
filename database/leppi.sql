-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2018 at 09:37 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.5.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `leppi`
--

-- --------------------------------------------------------

--
-- Table structure for table `datalaptop`
--

CREATE TABLE `datalaptop` (
  `id_laptop` varchar(3) NOT NULL,
  `nama_laptop` varchar(25) NOT NULL,
  `gambar_laptop` varchar(255) NOT NULL DEFAULT 'http://lepiku.azurewebsites.net/assets/image/laptop.jpg',
  `jenis_laptop` enum('laptop','notebook','Ultrabook','') NOT NULL,
  `tipe_laptop` varchar(25) NOT NULL,
  `harga` varchar(10) NOT NULL,
  `harga_B` varchar(10) NOT NULL,
  `harga_rupiah` varchar(45) NOT NULL,
  `layar` varchar(10) NOT NULL,
  `layar_B` varchar(10) NOT NULL,
  `layar_inch` varchar(10) NOT NULL,
  `penyimpanan` varchar(10) NOT NULL,
  `penyimpanan_B` varchar(10) NOT NULL,
  `penyimpanan_GB` varchar(10) NOT NULL,
  `ram` varchar(10) NOT NULL,
  `ram_B` varchar(10) NOT NULL,
  `ram_GB` varchar(10) NOT NULL,
  `processor` varchar(10) NOT NULL,
  `processor_B` varchar(10) NOT NULL,
  `jenis_processor` varchar(10) NOT NULL,
  `grafis` varchar(10) NOT NULL,
  `grafis_B` varchar(10) NOT NULL,
  `grafis_jenis` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `datalaptop`
--

INSERT INTO `datalaptop` (`id_laptop`, `nama_laptop`, `gambar_laptop`, `jenis_laptop`, `tipe_laptop`, `harga`, `harga_B`, `harga_rupiah`, `layar`, `layar_B`, `layar_inch`, `penyimpanan`, `penyimpanan_B`, `penyimpanan_GB`, `ram`, `ram_B`, `ram_GB`, `processor`, `processor_B`, `jenis_processor`, `grafis`, `grafis_B`, `grafis_jenis`) VALUES
('1ek', 'HPa', 'https://www.hpshopping.id/media/catalog/product/cache/75eed2686e01eb22cb4050b2f40ddf97/1/X/1XE14PA-1_T1526382498.png', 'laptop', '14-bw005AU', '1', '', '3.499.000', '3', '', '14', '2', '', '500', '2', '', '4', '1', '', 'AMD', '4', '', 'intel HD'),
('1ik', 'DELL', 'https://static.digit.in/product/53136560c742c646a0baaacf8ee0d1c9cd1c1d33.jpeg', 'laptop', ' Inspiron 5567', '1', '', '10.709.000', '4', '', '15.6', '4', '', '1000', '3', '', '8', '4', '', 'core i7', '2', '', 'AMD Radeon'),
('1li', 'ASUS', 'http://images.dimensidata.com/images/11559/0029597_300.jpeg', 'laptop', 'E402MA-WX0022D ', '4', '98', '3.349.000', '3', '75', '14', '2', '50', '500', '1', '25', '2', '2', '30', 'Dual core', '4', '98', 'intel HD'),
('1uv', 'ACER', 'https://static.acer.com/up/Resource/Acer/Images/Landing%20Page/Avengers_edition/20180409/1/Avengers_Swift_3_gallery_02.png', 'laptop', 'Swift 3 - Marvel?s Avenge', '1', '25', '16.499.000', '3', '75', '14', '1', '25', '256', '3', '75', '8', '5', '98', 'core i5', '3', '75', 'Nvidia'),
('1wj', 'ASUS', 'https://www.jakartanotebook.com/images/products/1/2/15767/25/asus-k401lb-fr068d-i5-5200u-gt940m-4gb-1tb-dos-dark-blue-14.jpg', 'laptop', 'K401LB-FR068D ', '2', '50', '7.899.000', '3', '75', '14', '4', '98', '1000', '2', '50', '4', '5', '98', 'core i5', '3', '75', 'Nvidia'),
('2m9', 'b', 'http://lepiku.azurewebsites.net/assets/image/laptop.jpg', 'laptop', 'a', '1', '', 'a', '1', '', 'a', '2', '', 'a', '2', '', 'a', '3', '', 'a', '3', '', 'a'),
('2wl', 'ASUS', 'https://multipro.id/image/cache/asus%20notebook/nHBfsgAACQAAABoAAGl43gAA4tI[1]-1000x1000.jpg', 'laptop', 'E202SA-FD002D ', '4', '98', '3.149.000', '1', '25', '11', '2', '50', '500', '1', '25', '2', '2', '30', 'Dual core', '4', '98', 'intel HD'),
('3fl', 'APPLE', 'https://nizva.com/wp-content/uploads/2017/12/94549_d1_0.jpg', 'laptop', 'Macbook Pro 2017 MPXR2', '1', '25', '19.999.000', '1', '25', '13', '1', '25', '128', '3', '75', '8', '5', '98', 'core i5', '4', '98', 'intel HD'),
('4ak', 'ASUS', 'https://www.jakartanotebook.com/images/products/1/2/15767/25/asus-k401lb-fr068d-i5-5200u-gt940m-4gb-1tb-dos-dark-blue-14.jpg', 'laptop', 'A455LF-WX052D ', '3', '75', '5.999.000', '3', '75', '14', '2', '50', '500', '1', '25', '2', '3', '40', 'core i3', '3', '75', 'Nvidia'),
('4o7', 'MSI', 'https://img20.jd.id/Indonesia/s800x800_/nHBfsgAACQAAAAgAOHZsXgAFElA.png', 'laptop', 'GL62M 7RC', '2', '50', '9.999.000', '4', '98', '15.6', '4', '98', '1000', '2', '50', '4', '5', '98', 'core i5', '3', '75', 'Nvidia'),
('4tk', 'ACER', 'https://images-eu.ssl-images-amazon.com/images/I/41zW2riqpLL._SL500_AC_SS350_.jpg', 'laptop', 'Swift 7 SF713-51', '1', '25', '18.429.000', '3', '75', '13.3', '1', '25', '256', '3', '75', '8', '4', '75', 'core i7', '4', '98', 'intel HD'),
('5s5', 'ASUS', 'http://reportaseharga.com/wp-content/uploads/2016/01/Harga-Laptop-Gaming-Asus-A455LB-Terbaru-Cocok-untuk-Multitasking.jpg', 'laptop', 'A455LB-WX001D ', '3', '75', '6.099.000', '3', '75', '14', '4', '98', '1000', '1', '25', '2', '3', '40', 'core i3', '3', '75', 'Nvidia'),
('6bh', 'HP', 'https://www.itgaleri.com/wp-content/uploads/2015/11/HP-Envy-14-j119TX-3-1.jpg', 'laptop', 'HP ENVY 14-j119tx', '1', '25', '14.999.000', '3', '75', '14', '4', '98', '1000', '3', '75', '8', '4', '75', 'core i7', '3', '75', 'MSI Gforce'),
('6kr', 'ACER', 'https://static.bmdstatic.com/pk/product/medium/ACER-Aspire-Z3-451-AMD-A10-5757M-Non-Windows-Black-Merchant--SKU14916596-201612299160.jpg', 'laptop', 'Aspire Z3-451', '3', '75', '4.729.000', '3', '75', '14', '2', '50', '500', '2', '50', '4', '1', '20', 'AMD', '2', '50', 'AMD Radeon'),
('7n9', 'ACER', 'https://static.bmdstatic.com/pk/product/medium/ACER-Aspire-E5-473G-Core-i7-5500U-Win-10-Black-Merchant--SKU07516958-2016811161458.jpg', 'laptop', 'E5-473G ', '2', '50', '8.959.000', '3', '75', '14', '4', '98', '1000', '2', '50', '4', '4', '75', 'core i7', '3', '75', 'Nvidia'),
('7w3', 'DELL', 'https://img20.jd.id/Indonesia/s800x800_/nHBfsgAABwAAABIACoPaYQACu70.jpg', 'laptop', 'Inspiron 7460 338KP-I7-GL', '1', '25', '13.719.000', '3', '75', '14', '4', '98', '1128', '3', '75', '8', '4', '75', 'core i7', '3', '75', 'Nvidia'),
('8xy', 'HP', 'https://zdnet2.cbsistatic.com/hub/i/r/2018/01/05/193316ad-3131-453d-8135-f463dcc5ea82/resize/770xauto/d51f49efac155b9e8b444265e09f8197/hpprobook650.jpg', 'laptop', '14AF1188AU', '3', '75', '4.000.000', '3', '75', '14', '2', '50', '500', '2', '50', '4', '1', '20', 'AMD', '2', '50', 'AMD Radeon'),
('9ss', 'ASUS', 'http://s.blanja.com/picspace/484/122340/456.434_ea5495c414344d10b3f11c435c2b980a.JPG_348x348.jpg', 'laptop', 'X555YI-A6-7310 ', '3', '75', '4.799.000', '4', '98', '15.6', '2', '50', '500', '1', '25', '2', '1', '20', 'AMD', '2', '50', 'AMD Radeon'),
('A34', 'LENOVO', 'http://product-image.bdstall.com/giant_40788.jpg', 'laptop', 'IDEAPAD 100', '4', '98', '3.700.000', '3', '75', '14', '4', '98', '1000', '2', '50', '4', '2', '30', 'Dual core', '4', '98', 'intel HD'),
('A35', 'LENOVO', 'https://img20.jd.id/Indonesia/s800x800_/nHBfsgAABgAAAAkAGSLtVwAFcOM.jpg', 'laptop', 'IDEAPAD 520S', '1', '25', '11.300.000', '3', '75', '14', '4', '98', '1000', '2', '50', '4', '4', '75', 'core i7', '3', '75', 'Nvidia'),
('A70', 'MSI', 'https://img20.jd.id/Indonesia/s386x386_/nHBfsgAACwAAABgADdE56QAGPTI.png', 'laptop', 'GP62MVR 7RFX-1244 ', '1', '25', '18.299.000', '4', '98', '15.6', '4', '98', '1128', '3', '75', '8', '4', '75', 'core i7', '3', '75', 'Nvidia'),
('akd', 'DELL', 'https://static.digit.in/product/5d035bfe71e41f2c981271f87aa212073fc20a6b.jpeg', 'laptop', 'Inspiron 15 7567 Gaming', '1', '25', '17.159.000', '4', '98', '15.6', '4', '98', '1256', '4', '98', '16', '4', '75', 'core i7', '3', '75', 'Nvidia'),
('au7', 'HP', 'https://img20.jd.id/imgw/s800x800_/nHBfsgAAAgAAAAgAC6QxOgAJhv0.png', 'laptop', 'Spectre X360 Conv 13-ac05', '1', '25', '17.629.000', '3', '75', '13.3', '1', '25', '256', '3', '75', '8', '5', '98', 'core i5', '4', '98', 'intel HD'),
('auq', 'LENOVO', 'https://s1.bukalapak.com/img/1894833991/s-300-300/LENOVO_YOGA_520_8KID_GRAY___GOLD.jpg', 'laptop', 'Yoga 520-8MID', '1', '25', '11.049.000', '3', '75', '14', '4', '98', '1000', '3', '75', '8', '5', '98', 'core i5', '3', '75', 'Nvidia'),
('btz', 'HP', 'https://www.hpshopping.id/media/catalog/product/cache/75eed2686e01eb22cb4050b2f40ddf97/3/B/3BE22PA-1.png', 'laptop', 'Spectre 13-af080TU', '1', '25', '28.409.000', '3', '75', '13.3', '2', '50', '500', '4', '98', '16', '4', '75', 'core i7', '4', '98', 'intel HD'),
('c8t', 'ACER', 'https://ecs7.tokopedia.net/img/cache/700/product-1/2017/9/29/5075364/5075364_be21c7ad-fd11-42f0-9abb-b6d1ee040f9c_1920_970.jpg', 'laptop', 'SP111-31-C34R', '3', '75', '5.019.000', '3', '75', '14', '2', '50', '500', '2', '50', '4', '2', '30', 'Dual core', '4', '98', 'intel HD'),
('chj', 'HP', 'https://www.hpshopping.id/media/catalog/product/cache/75eed2686e01eb22cb4050b2f40ddf97/1/H/1HP49PA-1_T1526381933.png', 'laptop', 'x360 Convert 11-ab035TU', '3', '75', '4.469.000', '1', '25', '11.6', '2', '50', '500', '2', '50', '4', '2', '30', 'Dual core', '4', '98', 'intel HD'),
('csp', 'MSI', 'https://static.bmdstatic.com/pk/product/medium/MSI-Notebook-Gaming-GS73VR-7RF-Stealth-Pro-9S7-17B112-276-Black-3315557195-201722893511.jpg', 'laptop', 'GS73VR 7RF-276', '1', '25', '29.699.000', '4', '98', '17.3', '4', '98', '1256', '4', '98', '16', '4', '75', 'core i7', '3', '75', 'Nvidia'),
('dak', 'DELL', 'https://www.notebookcheck.net/fileadmin/Notebooks/Dell/Inspiron_13_5368/4zu3_dell_Inspiron_13_5368.jpg', 'laptop', 'Inspiron 5368', '3', '75', '7.979.000', '3', '75', '13.3', '2', '50', '500', '2', '50', '4', '3', '40', 'core i3', '4', '98', 'intel HD'),
('dal', 'DELL', 'https://s.nsit.com/uk01/en-gb/item/0007205720_lg.jpg', 'laptop', 'Latitude 5280', '1', '25', '12.869.000', '1', '25', '12.5', '4', '98', '1000', '2', '50', '4', '5', '98', 'core i5', '4', '98', 'intel HD'),
('dnp', 'HP', 'https://www.notebookcheck.net/uploads/tx_nbc2/4zu3_HPZBook15G3.png', 'laptop', 'Zbook 15 G3 Ultra', '1', '25', '21.999.000', '2', '50', '15', '4', '98', '1000', '3', '75', '8', '1', '20', 'AMD', '2', '50', 'AMD Radeon'),
('dui', 'APPLE', 'https://img20.jd.id/Indonesia/s386x386_/nHBfsgAABAAAABQAF0-kkQADlI8.jpg', 'laptop', 'Macbook Pro 2017 MPXQ2', '1', '25', '17199000', '1', '25', '13', '1', '25', '128', '3', '75', '8', '5', '98', 'core i5', '4', '98', 'intel HD'),
('ekc', 'APPLE', 'https://i2.cdscdn.com/pdt2/0/8/6/1/700x700/app3700980717086/rw/apple-macbook-air-13-pouces-1-4-ghz-intel-core-i5.jpg', 'laptop', 'MacBook Air MJVM2', '3', '75', '9.775.000', '1', '25', '11.6', '1', '25', '128', '2', '50', '4', '5', '98', 'core i5', '4', '98', 'intel HD'),
('far', 'APPLE', 'https://dzvfs5sz5rprz.cloudfront.net/media/catalog/product/cache/1/image/1200x/9df78eab33525d08d6e5fb8d27136e95/a/p/apple_macbook_pro_13_core_i5_with_touch_bar_silver_mpxx2__1.jpg', 'laptop', 'Macbook Pro 2017 MPTT2', '1', '25', '34.299.000', '2', '50', '15', '3', '75', '512', '4', '98', '16', '4', '75', 'core i7', '3', '75', 'Nvidia'),
('fhp', 'HP', 'https://img20.jd.id/Indonesia/s800x800_/nHBfsgAACQAAAAUAF7LBGQAKW0Y.jpg', 'laptop', 'Joy 14-bp002TU', '3', '75', '3.599.000', '3', '75', '14', '2', '50', '500', '2', '50', '4', '2', '30', 'Dual core', '4', '98', 'intel HD'),
('fk3', 'ACER', 'https://static.acer.com/up/Resource/Acer/Notebooks/AGW2%20Aspire%20E/Images/20131023/1/E1-410_E1-432_E1-472_white_non-touch_non-glare-sku-main.png', 'laptop', 'ASPIRE E1-410', '3', '75', '4.000.000', '3', '75', '14', '1', '25', '320', '1', '25', '2', '2', '30', 'Dual core', '4', '98', 'intel HD'),
('h1f', 'APPLE', 'https://www.notebookcheck.net/fileadmin/Notebooks/Apple/MacBook_12_Early_2016/4zu3_macbook12.jpg', 'laptop', 'Macbook 2017 MNYH2', '1', '25', '16.999.000', '1', '25', '12', '1', '25', '256', '3', '75', '8', '2', '30', 'Dual core', '4', '98', 'intel HD'),
('hhy', 'LENOVO', 'https://img20.jd.id/Indonesia/s800x800_/nHBfsgAABwAAAA4AD7N6LwAFklo.jpg', 'laptop', 'IP510S-4DID', '2', '50', '9.899.000', '3', '75', '14', '4', '98', '1000', '2', '50', '4', '4', '75', 'core i7', '2', '50', 'AMD Radeon'),
('imf', 'ACER', 'https://www.itgaleri.com/wp-content/uploads/2018/04/Acer-Aspire-6-Captain-America-2.jpg', 'laptop', 'Aspire 6 - Marvel?s Aveng', '1', '25', '11.999.000', '4', '98', '15.6', '4', '98', '1000', '2', '50', '4', '5', '98', 'core i5', '3', '75', 'Nvidia'),
('ior', 'LENOVO', 'https://images-na.ssl-images-amazon.com/images/I/61lT4dUsaTL._SX355_.jpg', 'laptop', 'IDEAPAD 300', '3', '75', '5.900.000', '3', '75', '14', '2', '50', '500', '2', '50', '4', '5', '98', 'core i5', '2', '50', 'AMD Radeon'),
('j30', 'LENOVO', 'https://img20.jd.id/Indonesia/s800x800_/nHBfsgAABAAAAAwAJgsrpwABpv0.jpg', 'laptop', 'IdeaPad 720s-0YID', '1', '25', '17.299.000', '3', '75', '14', '3', '75', '512', '3', '75', '8', '4', '75', 'core i7', '3', '75', 'Nvidia'),
('j8e', 'APPLE', 'https://static.bmdstatic.com/pk/product/medium/SKU04715938-2015723163743.jpg', 'laptop', 'MacBook MF865ID/A', '1', '25', '24459000', '1', '25', '12', '3', '75', '512', '3', '75', '8', '2', '30', 'Dual core', '4', '98', 'intel HD'),
('j8j', 'APPLE', 'http://smstechnologiesbd.com/wp-content/uploads/2017/10/Apple-MacBook-Pro-13-inch-Touch-Gray-500x554.jpg', 'laptop', 'Macbook Pro 2017 MPXV2', '1', '25', '22.799.000', '1', '25', '13', '1', '25', '256', '3', '75', '8', '5', '98', 'core i5', '4', '98', 'intel HD'),
('jjt', 'ASUS', 'https://images-na.ssl-images-amazon.com/images/I/41HBIiSshcL.jpg', 'laptop', 'X205TA-FD0039BS ', '3', '75', '4.199.000', '1', '25', '11.6', '1', '25', '128', '1', '25', '2', '2', '30', 'Dual core', '4', '98', 'intel HD'),
('jmv', 'ASUS', 'https://www.nbplaza.com.my/7812-thickbox_default/asus-vivobook-a442u-ffa040t-14-fhd-laptop-gold-i5-8250u-4gb-1tb-mx130-2gb-w10.jpg', 'laptop', 'A442U', '2', '50', '7.800.000', '3', '75', '14', '4', '98', '1000', '2', '50', '4', '5', '98', 'core i5', '3', '75', 'Nvidia'),
('kad', 'DELL', 'https://s3.amazonaws.com/computienda-woocommerce/wp-content/uploads/2017/08/20210720/laptop-dell-inspiron-14-3467-500x554.jpg', 'laptop', 'Inspiron 3462 6PFTF-CEL4W', '4', '98', '3.839.000', '3', '75', '14', '2', '50', '500', '2', '50', '4', '2', '30', 'Dual core', '4', '98', 'intel HD'),
('kfi', 'ACER', 'https://static.acer.com/up/Resource/Acer/Images/Landing%20Page/Avengers_edition/20180409/NITRO_5_main.png', 'laptop', 'Nitro 5 - Marvel?s Avenge', '1', '25', '14.999.000', '4', '98', '15.6', '4', '98', '1128', '3', '75', '8', '5', '98', 'core i5', '3', '75', 'Nvidia'),
('ksd', 'APPLE', 'https://s2.bukalapak.com/img/7689442461/w-300/MacBook_Air_13_inch__2017_MQD32.jpeg', 'laptop', 'Macbook Air 2017 MQD32', '1', '25', '11.799.000', '1', '25', '13', '1', '25', '128', '3', '75', '8', '5', '98', 'core i5', '4', '98', 'intel HD'),
('le6', 'APPLE', 'https://cdn.eglobalcentral.eu/images/magictoolbox_cache/8c95d73fec130487c102a73bf1ab42ce/1/7/17902/thumb360x360/3309605103/apple-macbook-12-1-2ghz-core-m5-512gb-vggfcz-2.jpg', 'laptop', 'MacBook MLHC2', '1', '25', '22.000.000', '1', '25', '12', '3', '75', '512', '3', '75', '8', '2', '30', 'Dual core', '4', '98', 'intel HD'),
('llz', 'LENOVO', 'https://brain-images-ssl.cdn.dixons.com/7/0/10146807/u_10146807.jpg', 'laptop', 'Ideapad 110', '3', '75', '4.399.000', '4', '98', '15.6', '4', '98', '1000', '2', '50', '4', '1', '20', 'AMD', '2', '50', 'AMD Radeon'),
('lzl', 'MSI', 'https://i.ebayimg.com/images/g/4l8AAOSwL5pZhf9w/s-l300.jpg', 'laptop', 'GS43VR 7RE-099 Phantom Pr', '1', '25', '26.099.000', '3', '75', '14', '4', '98', '1256', '4', '98', '16', '4', '75', 'core i7', '3', '75', 'Nvidia'),
('mck', 'ACER', 'http://id-live-02.slatic.net/p/2/acer-e5-475g-intel-core-i3-6006u-4gb-nvidia-940mx-2gb-14-grey-linux-8070-44413851-7be4018e9a4e7967a043eeb78810a904-catalog_233.jpg', 'laptop', 'E5-475G-70XV', '2', '50', '9.339.000', '3', '75', '14', '4', '98', '1000', '2', '50', '4', '4', '75', 'core i7', '3', '75', 'Nvidia'),
('mmu', 'APPLE', 'https://cdn3.macworld.co.uk/cmsdata/reviews/3659879/macbook-air-2017-apple_thumb800.jpg', 'laptop', 'Macbook Air 2017 MQD42', '1', '25', '14.549.000', '1', '25', '13', '1', '25', '256', '3', '75', '8', '5', '98', 'core i5', '4', '98', 'intel HD'),
('mtp', 'DELL', 'http://d2pa5gi5n2e1an.cloudfront.net/global/images/product/laptops/Dell_Inspiron_14_3467/Dell_Inspiron_14_3467_L_1.jpg', 'laptop', 'Inspiron 14-3467', '3', '75', '6.129.000', '3', '75', '14', '2', '50', '500', '2', '50', '4', '3', '40', 'core i3', '2', '50', 'AMD Radeon'),
('nzn', 'ASUS', 'https://www.jakartanotebook.com/images/products/1/2/15493/4/asus-x455la-wx401d-wx404d-wx405d-intel-i3-4005u-or-2gb-or-500gb-or-14-inch-dos-red-28.jpg', 'laptop', 'X455LA-WX401D ', '3', '75', '4.999.000', '3', '75', '14', '2', '50', '500', '1', '25', '2', '3', '40', 'core i3', '4', '98', 'intel HD'),
('odx', 'HP', 'https://img20.jd.id/Indonesia/s386x386_/nHBfsgAACAAAABQAC-A1ZgABkzA.jpg', 'laptop', 'Pavilion X360 13-U174TU', '2', '50', '7.600.000', '3', '75', '13.3', '1', '25', '256', '2', '50', '4', '3', '40', 'core i3', '4', '98', 'intel HD'),
('oir', 'LENOVO', 'https://images10.newegg.com/NeweggImage/ProductImage/34-860-846-V01.jpg', 'laptop', 'IDEAPAD 320', '2', '50', '7.900.000', '3', '75', '14', '4', '98', '1000', '2', '50', '4', '4', '75', 'core i7', '3', '75', 'Nvidia'),
('ojh', 'ACER', 'http://www.jagatreview.com/wp-content/uploads/2017/10/Acer-Swift-3-SF314-52G-Official-03.jpg', 'laptop', 'Swift 3', '1', '25', '12.029.000', '4', '98', '15.6', '4', '98', '1128', '3', '75', '8', '1', '20', 'AMD', '2', '50', 'AMD Radeon'),
('p7y', 'ASUS', 'http://media.pricebook.co.id/images/product/L/44426_L_1.jpg', 'laptop', 'ROG GL552JX', '1', '25', '11.799.000', '4', '98', '15.6', '4', '98', '1000', '2', '50', '4', '4', '75', 'core i7', '3', '75', 'Nvidia'),
('pkb', 'DELL', 'http://i.dell.com/sites/imagecontent/products/PublishingImages/latitude-14-5480-laptop/laptop-latitude-5480-polmag-pdp-1.jpg', 'laptop', 'Latitude 5480', '1', '25', '18.717.000', '3', '75', '14', '4', '98', '1000', '3', '75', '8', '4', '75', 'core i7', '3', '75', 'Nvidia'),
('psc', 'MSI', 'https://img20.jd.id/Indonesia/s800x800_/nHBfsgAAAwAAAAEAAx2zqwABPDE.jpg', 'laptop', 'GP62 6QE-679ID Leopard Pr', '1', '25', '13.599.000', '4', '98', '15.6', '4', '98', '1000', '2', '50', '4', '4', '75', 'core i7', '3', '75', 'Nvidia'),
('qgj', 'HP', 'http://www.jagatreview.com/wp-content/uploads/2017/10/HP-Omen-15-Official-01.jpg', 'laptop', 'Omen 15-ce085TX', '1', '25', '14.599.000', '2', '50', '15', '4', '98', '1000', '3', '75', '8', '4', '75', 'core i7', '3', '75', 'Nvidia'),
('roi', 'LENOVO', 'https://images-na.ssl-images-amazon.com/images/I/81LbzXT%2BX1L._SL1500_.jpg', 'laptop', 'IDEAPAD 310', '3', '75', '6.900.000', '3', '75', '14', '4', '98', '1000', '2', '50', '4', '5', '98', 'core i5', '3', '75', 'Nvidia'),
('rtm', 'DELL', 'http://www.symbios.pk/image/cache/data/e/e6220_1_1450178240-500x500.jpg', 'laptop', 'LATITUDE E6220', '4', '98', '3.500.000', '1', '25', '12.5', '1', '25', '320', '1', '25', '2', '5', '98', 'core i5', '4', '98', 'intel HD'),
('smn', 'MSI', 'https://im.ziffdavisinternational.com/pcmag_me/photo/default/msi-3_e1em.jpg', 'laptop', 'GT72S 6QF', '1', '25', '29.149.000', '4', '98', '17.3', '4', '98', '1000', '3', '75', '8', '4', '75', 'core i7', '3', '75', 'Nvidia'),
('uit', 'DELL', 'https://www.jakartanotebook.com/images/products/1/5/23284/4/dell-inspiron-11-3162-intel-celeron-n3060-2gb-500gb-116-inch-dos-red-1.jpg', 'laptop', 'Inspiron 3162', '4', '98', '2.949.000', '1', '25', '11.6', '2', '50', '500', '1', '25', '2', '2', '30', 'Dual core', '4', '98', 'intel HD'),
('uiy', 'MSI', 'http://d2pa5gi5n2e1an.cloudfront.net/global/images/product/laptops/MSI_GL62_6QE/MSI_GL62_6QE_L_1.jpg', 'laptop', 'MSI GL62 6QE', '1', '25', '10.415.040', '4', '98', '15,6', '4', '98', '1512', '3', '75', '8', '4', '75', 'core i7', '3', '75', 'Nvidia'),
('xds', 'MSI', 'https://img20.jd.id/Indonesia/s800x800_/nHBfsgAAAwAAAAEAAx2zqwABPDE.jpg', 'laptop', 'GP62M 7RD-019', '1', '25', '14.099.000', '4', '98', '15.6', '4', '98', '1128', '3', '75', '8', '4', '75', 'core i7', '3', '75', 'Nvidia'),
('yui', 'LENOVO', 'https://p1.akcdn.net/full/465082801.lenovo-ideapad-120s-81a50065hv.jpg', 'laptop', 'IDEAPAD 120S', '4', '98', '3.499.000', '3', '75', '14', '1', '25', '128', '2', '50', '4', '2', '30', 'Dual core', '4', '98', 'intel HD'),
('yuy', 'MSI', 'https://img20.jd.id/Indonesia/s800x800_/nHBfsgAAAQAAAAcADQCGkQACvPE.jpg', 'laptop', 'GS63VR 7RF-404', '1', '25', '28.799.000', '4', '98', '15.6', '4', '98', '1256', '4', '98', '16', '4', '75', 'core i7', '3', '75', 'Nvidia'),
('zll', 'MSI', 'https://images-na.ssl-images-amazon.com/images/I/810468ogIML._SX355_.jpg', 'laptop', 'GS63VR 7RG - Elite Versio', '1', '25', '39.699.000', '4', '98', '15.6', '4', '98', '2512', '4', '98', '16', '4', '75', 'core i7', '3', '75', 'Nvidia');

-- --------------------------------------------------------

--
-- Table structure for table `kriteria_grafis`
--

CREATE TABLE `kriteria_grafis` (
  `id_kriteria_grafis` int(11) NOT NULL,
  `nama_range` varchar(25) NOT NULL,
  `nilai` enum('1','2','3','4') NOT NULL,
  `bobot` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kriteria_grafis`
--

INSERT INTO `kriteria_grafis` (`id_kriteria_grafis`, `nama_range`, `nilai`, `bobot`) VALUES
(1, 'Intel HD', '1', '0-25'),
(2, 'AMD Radeon', '2', '26-50'),
(3, 'Nvidia Gforce', '3', '51-75'),
(4, 'MSI Geforce', '4', '76-100');

-- --------------------------------------------------------

--
-- Table structure for table `kriteria_grafis_bobot`
--

CREATE TABLE `kriteria_grafis_bobot` (
  `id_kriteria_grafis_bobot` int(11) NOT NULL,
  `nilai_kriteria_grafis` varchar(45) DEFAULT NULL,
  `bobot_kriteria_biaya` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kriteria_grafis_bobot`
--

INSERT INTO `kriteria_grafis_bobot` (`id_kriteria_grafis_bobot`, `nilai_kriteria_grafis`, `bobot_kriteria_biaya`) VALUES
(1, '1', '0'),
(2, '1', '1'),
(3, '1', '2'),
(4, '1', '3'),
(5, '1', '4'),
(6, '1', '5'),
(7, '1', '6'),
(8, '1', '7'),
(9, '1', '8'),
(10, '1', '9'),
(11, '1', '10'),
(12, '1', '11'),
(13, '1', '12'),
(14, '1', '13'),
(15, '1', '14'),
(16, '1', '15'),
(17, '1', '16'),
(18, '1', '17'),
(19, '1', '18'),
(20, '1', '19'),
(21, '1', '20'),
(22, '1', '21'),
(23, '1', '22'),
(24, '1', '23'),
(25, '1', '24'),
(26, '1', '25'),
(27, '2', '26'),
(28, '2', '27'),
(29, '2', '28'),
(30, '2', '29'),
(31, '2', '30'),
(32, '2', '31'),
(33, '2', '32'),
(34, '2', '33'),
(35, '2', '34'),
(36, '2', '35'),
(37, '2', '36'),
(38, '2', '37'),
(39, '2', '38'),
(40, '2', '39'),
(41, '2', '40'),
(42, '2', '41'),
(43, '2', '42'),
(44, '2', '43'),
(45, '2', '44'),
(46, '2', '45'),
(47, '2', '46'),
(48, '2', '47'),
(49, '2', '48'),
(50, '2', '49'),
(51, '2', '50'),
(52, '3', '51'),
(53, '3', '52'),
(54, '3', '53'),
(55, '3', '54'),
(56, '3', '55'),
(57, '3', '56'),
(58, '3', '57'),
(59, '3', '58'),
(60, '3', '59'),
(61, '3', '60'),
(62, '3', '61'),
(63, '3', '62'),
(64, '3', '63'),
(65, '3', '64'),
(66, '3', '65'),
(67, '3', '66'),
(68, '3', '67'),
(69, '3', '68'),
(70, '3', '69'),
(71, '3', '70'),
(72, '3', '71'),
(73, '3', '72'),
(74, '3', '73'),
(75, '3', '74'),
(76, '3', '75'),
(77, '4', '76'),
(78, '4', '77'),
(79, '4', '78'),
(80, '4', '79'),
(81, '4', '80'),
(82, '4', '81'),
(83, '4', '82'),
(84, '4', '83'),
(85, '4', '84'),
(86, '4', '85'),
(87, '4', '86'),
(88, '4', '87'),
(89, '4', '88'),
(90, '4', '89'),
(91, '4', '90'),
(92, '4', '91'),
(93, '4', '92'),
(94, '4', '93'),
(95, '4', '94'),
(96, '4', '95'),
(97, '4', '96'),
(98, '4', '97'),
(99, '4', '98'),
(100, '4', '99'),
(101, '4', '100');

-- --------------------------------------------------------

--
-- Table structure for table `kriteria_harga`
--

CREATE TABLE `kriteria_harga` (
  `id_kriteria_harga` int(11) NOT NULL,
  `nama_range` varchar(25) NOT NULL,
  `nilai` enum('1','2','3','4') NOT NULL,
  `bobot` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kriteria_harga`
--

INSERT INTO `kriteria_harga` (`id_kriteria_harga`, `nama_range`, `nilai`, `bobot`) VALUES
(1, 'Sangat Mahal', '1', '0-25'),
(2, 'Mahal', '2', '26-50'),
(3, 'Murah', '3', '51-75'),
(4, 'Sangat Murah', '4', '76-100');

-- --------------------------------------------------------

--
-- Table structure for table `kriteria_harga_bobot`
--

CREATE TABLE `kriteria_harga_bobot` (
  `id_kriteria_harga_bobot` int(11) NOT NULL,
  `nilai_kriteria_harga` varchar(45) DEFAULT NULL,
  `bobot_kriteria_harga` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kriteria_harga_bobot`
--

INSERT INTO `kriteria_harga_bobot` (`id_kriteria_harga_bobot`, `nilai_kriteria_harga`, `bobot_kriteria_harga`) VALUES
(1, '1', '0'),
(2, '1', '1'),
(3, '1', '2'),
(4, '1', '3'),
(5, '1', '4'),
(6, '1', '5'),
(7, '1', '6'),
(8, '1', '7'),
(9, '1', '8'),
(10, '1', '9'),
(11, '1', '10'),
(12, '1', '11'),
(13, '1', '12'),
(14, '1', '13'),
(15, '1', '14'),
(16, '1', '15'),
(17, '1', '16'),
(18, '1', '17'),
(19, '1', '18'),
(20, '1', '19'),
(21, '1', '20'),
(22, '1', '21'),
(23, '1', '22'),
(24, '1', '23'),
(25, '1', '24'),
(26, '1', '25'),
(27, '2', '26'),
(28, '2', '27'),
(29, '2', '28'),
(30, '2', '29'),
(31, '2', '30'),
(32, '2', '31'),
(33, '2', '32'),
(34, '2', '33'),
(35, '2', '34'),
(36, '2', '35'),
(37, '2', '36'),
(38, '2', '37'),
(39, '2', '38'),
(40, '2', '39'),
(41, '2', '40'),
(42, '2', '41'),
(43, '2', '42'),
(44, '2', '43'),
(45, '2', '44'),
(46, '2', '45'),
(47, '2', '46'),
(48, '2', '47'),
(49, '2', '48'),
(50, '2', '49'),
(51, '2', '50'),
(52, '3', '51'),
(53, '3', '52'),
(54, '3', '53'),
(55, '3', '54'),
(56, '3', '55'),
(57, '3', '56'),
(58, '3', '57'),
(59, '3', '58'),
(60, '3', '59'),
(61, '3', '60'),
(62, '3', '61'),
(63, '3', '62'),
(64, '3', '63'),
(65, '3', '64'),
(66, '3', '65'),
(67, '3', '66'),
(68, '3', '67'),
(69, '3', '68'),
(70, '3', '69'),
(71, '3', '70'),
(72, '3', '71'),
(73, '3', '72'),
(74, '3', '73'),
(75, '3', '74'),
(76, '3', '75'),
(77, '4', '76'),
(78, '4', '77'),
(79, '4', '78'),
(80, '4', '79'),
(81, '4', '80'),
(82, '4', '81'),
(83, '4', '82'),
(84, '4', '83'),
(85, '4', '84'),
(86, '4', '85'),
(87, '4', '86'),
(88, '4', '87'),
(89, '4', '88'),
(90, '4', '89'),
(91, '4', '90'),
(92, '4', '91'),
(93, '4', '92'),
(94, '4', '93'),
(95, '4', '94'),
(96, '4', '95'),
(97, '4', '96'),
(98, '4', '97'),
(99, '4', '98'),
(100, '4', '99'),
(101, '4', '100');

-- --------------------------------------------------------

--
-- Table structure for table `kriteria_layar`
--

CREATE TABLE `kriteria_layar` (
  `id_kriteria_layar` int(11) NOT NULL,
  `nama_range` varchar(25) NOT NULL,
  `nilai` enum('1','2','3','4') NOT NULL,
  `bobot` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kriteria_layar`
--

INSERT INTO `kriteria_layar` (`id_kriteria_layar`, `nama_range`, `nilai`, `bobot`) VALUES
(1, 'Kecil', '1', '0-25'),
(2, 'Sedang', '2', '26-50'),
(3, 'Besar', '3', '57-75'),
(4, 'Sangat Besar', '4', '76-100');

-- --------------------------------------------------------

--
-- Table structure for table `kriteria_layar_bobot`
--

CREATE TABLE `kriteria_layar_bobot` (
  `id_kriteria_layar_bobot` int(11) NOT NULL,
  `nilai_kriteria_biaya` varchar(45) DEFAULT NULL,
  `bobot_kriteria_biaya` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kriteria_layar_bobot`
--

INSERT INTO `kriteria_layar_bobot` (`id_kriteria_layar_bobot`, `nilai_kriteria_biaya`, `bobot_kriteria_biaya`) VALUES
(1, '1', '0'),
(2, '1', '1'),
(3, '1', '2'),
(4, '1', '3'),
(5, '1', '4'),
(6, '1', '5'),
(7, '1', '6'),
(8, '1', '7'),
(9, '1', '8'),
(10, '1', '9'),
(11, '1', '10'),
(12, '1', '11'),
(13, '1', '12'),
(14, '1', '13'),
(15, '1', '14'),
(16, '1', '15'),
(17, '1', '16'),
(18, '1', '17'),
(19, '1', '18'),
(20, '1', '19'),
(21, '1', '20'),
(22, '1', '21'),
(23, '1', '22'),
(24, '1', '23'),
(25, '1', '24'),
(26, '1', '25'),
(27, '2', '26'),
(28, '2', '27'),
(29, '2', '28'),
(30, '2', '29'),
(31, '2', '30'),
(32, '2', '31'),
(33, '2', '32'),
(34, '2', '33'),
(35, '2', '34'),
(36, '2', '35'),
(37, '2', '36'),
(38, '2', '37'),
(39, '2', '38'),
(40, '2', '39'),
(41, '2', '40'),
(42, '2', '41'),
(43, '2', '42'),
(44, '2', '43'),
(45, '2', '44'),
(46, '2', '45'),
(47, '2', '46'),
(48, '2', '47'),
(49, '2', '48'),
(50, '2', '49'),
(51, '2', '50'),
(52, '3', '51'),
(53, '3', '52'),
(54, '3', '53'),
(55, '3', '54'),
(56, '3', '55'),
(57, '3', '56'),
(58, '3', '57'),
(59, '3', '58'),
(60, '3', '59'),
(61, '3', '60'),
(62, '3', '61'),
(63, '3', '62'),
(64, '3', '63'),
(65, '3', '64'),
(66, '3', '65'),
(67, '3', '66'),
(68, '3', '67'),
(69, '3', '68'),
(70, '3', '69'),
(71, '3', '70'),
(72, '3', '71'),
(73, '3', '72'),
(74, '3', '73'),
(75, '3', '74'),
(76, '3', '75'),
(77, '4', '76'),
(78, '4', '77'),
(79, '4', '78'),
(80, '4', '79'),
(81, '4', '80'),
(82, '4', '81'),
(83, '4', '82'),
(84, '4', '83'),
(85, '4', '84'),
(86, '4', '85'),
(87, '4', '86'),
(88, '4', '87'),
(89, '4', '88'),
(90, '4', '89'),
(91, '4', '90'),
(92, '4', '91'),
(93, '4', '92'),
(94, '4', '93'),
(95, '4', '94'),
(96, '4', '95'),
(97, '4', '96'),
(98, '4', '97'),
(99, '4', '98'),
(100, '4', '99'),
(101, '4', '100');

-- --------------------------------------------------------

--
-- Table structure for table `kriteria_penyimpanan`
--

CREATE TABLE `kriteria_penyimpanan` (
  `id_kriteria_penyimpanan` int(11) NOT NULL,
  `nama_range` varchar(25) NOT NULL,
  `nilai` enum('1','2','3','4') NOT NULL,
  `bobot` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kriteria_penyimpanan`
--

INSERT INTO `kriteria_penyimpanan` (`id_kriteria_penyimpanan`, `nama_range`, `nilai`, `bobot`) VALUES
(1, 'Kecil', '1', '0-25'),
(2, 'Sedang', '2', '26-50'),
(3, 'Besar', '3', '51-75'),
(4, 'Sangat Besar', '4', '76-100');

-- --------------------------------------------------------

--
-- Table structure for table `kriteria_penyimpanan_bobot`
--

CREATE TABLE `kriteria_penyimpanan_bobot` (
  `id_kriteria_penyimpanan_bobot` int(11) NOT NULL,
  `nilai_kriteria_penyimpanan` varchar(45) DEFAULT NULL,
  `bobot_kriteria_penyimpanan` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kriteria_penyimpanan_bobot`
--

INSERT INTO `kriteria_penyimpanan_bobot` (`id_kriteria_penyimpanan_bobot`, `nilai_kriteria_penyimpanan`, `bobot_kriteria_penyimpanan`) VALUES
(1, '1', '0'),
(2, '1', '1'),
(3, '1', '2'),
(4, '1', '3'),
(5, '1', '4'),
(6, '1', '5'),
(7, '1', '6'),
(8, '1', '7'),
(9, '1', '8'),
(10, '1', '9'),
(11, '1', '10'),
(12, '1', '11'),
(13, '1', '12'),
(14, '1', '13'),
(15, '1', '14'),
(16, '1', '15'),
(17, '1', '16'),
(18, '1', '17'),
(19, '1', '18'),
(20, '1', '19'),
(21, '1', '20'),
(22, '1', '21'),
(23, '1', '22'),
(24, '1', '23'),
(25, '1', '24'),
(26, '1', '25'),
(27, '2', '26'),
(28, '2', '27'),
(29, '2', '28'),
(30, '2', '29'),
(31, '2', '30'),
(32, '2', '31'),
(33, '2', '32'),
(34, '2', '33'),
(35, '2', '34'),
(36, '2', '35'),
(37, '2', '36'),
(38, '2', '37'),
(39, '2', '38'),
(40, '2', '39'),
(41, '2', '40'),
(42, '2', '41'),
(43, '2', '42'),
(44, '2', '43'),
(45, '2', '44'),
(46, '2', '45'),
(47, '2', '46'),
(48, '2', '47'),
(49, '2', '48'),
(50, '2', '49'),
(51, '2', '50'),
(52, '3', '51'),
(53, '3', '52'),
(54, '3', '53'),
(55, '3', '54'),
(56, '3', '55'),
(57, '3', '56'),
(58, '3', '57'),
(59, '3', '58'),
(60, '3', '59'),
(61, '3', '60'),
(62, '3', '61'),
(63, '3', '62'),
(64, '3', '63'),
(65, '3', '64'),
(66, '3', '65'),
(67, '3', '66'),
(68, '3', '67'),
(69, '3', '68'),
(70, '3', '69'),
(71, '3', '70'),
(72, '3', '71'),
(73, '3', '72'),
(74, '3', '73'),
(75, '3', '74'),
(76, '3', '75'),
(77, '4', '76'),
(78, '4', '77'),
(79, '4', '78'),
(80, '4', '79'),
(81, '4', '80'),
(82, '4', '81'),
(83, '4', '82'),
(84, '4', '83'),
(85, '4', '84'),
(86, '4', '85'),
(87, '4', '86'),
(88, '4', '87'),
(89, '4', '88'),
(90, '4', '89'),
(91, '4', '90'),
(92, '4', '91'),
(93, '4', '92'),
(94, '4', '93'),
(95, '4', '94'),
(96, '4', '95'),
(97, '4', '96'),
(98, '4', '97'),
(99, '4', '98'),
(100, '4', '99'),
(101, '4', '100');

-- --------------------------------------------------------

--
-- Table structure for table `kriteria_prosesor`
--

CREATE TABLE `kriteria_prosesor` (
  `id_kriteria_harga` int(11) NOT NULL,
  `nama_range` varchar(25) NOT NULL,
  `nilai` enum('1','2','3','4','5') NOT NULL,
  `bobot` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kriteria_prosesor`
--

INSERT INTO `kriteria_prosesor` (`id_kriteria_harga`, `nama_range`, `nilai`, `bobot`) VALUES
(1, 'Dual Core', '1', '0-20'),
(2, 'Core i3', '2', '21-30'),
(3, 'Core i5', '3', '31-40'),
(4, 'Core i7', '4', '41-75'),
(5, 'AMD', '5', '76-100');

-- --------------------------------------------------------

--
-- Table structure for table `kriteria_prosesor_bobot`
--

CREATE TABLE `kriteria_prosesor_bobot` (
  `id_kriteria_prosesor_bobot` int(11) NOT NULL,
  `nilai_kriteria_prosesor` varchar(45) DEFAULT NULL,
  `bobot_kriteria_biaya` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kriteria_prosesor_bobot`
--

INSERT INTO `kriteria_prosesor_bobot` (`id_kriteria_prosesor_bobot`, `nilai_kriteria_prosesor`, `bobot_kriteria_biaya`) VALUES
(1, '1', '0'),
(2, '1', '1'),
(3, '1', '2'),
(4, '1', '3'),
(5, '1', '4'),
(6, '1', '5'),
(7, '1', '6'),
(8, '1', '7'),
(9, '1', '8'),
(10, '1', '9'),
(11, '1', '10'),
(12, '1', '11'),
(13, '1', '12'),
(14, '1', '13'),
(15, '1', '14'),
(16, '1', '15'),
(17, '1', '16'),
(18, '1', '17'),
(19, '1', '18'),
(20, '1', '19'),
(21, '1', '20'),
(22, '2', '21'),
(23, '2', '22'),
(24, '2', '23'),
(25, '2', '24'),
(26, '2', '25'),
(27, '2', '26'),
(28, '2', '27'),
(29, '2', '28'),
(30, '2', '29'),
(31, '2', '30'),
(32, '3', '31'),
(33, '3', '32'),
(34, '3', '33'),
(35, '3', '34'),
(36, '3', '35'),
(37, '3', '36'),
(38, '3', '37'),
(39, '3', '38'),
(40, '3', '39'),
(41, '3', '40'),
(42, '4', '41'),
(43, '4', '42'),
(44, '4', '43'),
(45, '4', '44'),
(46, '4', '45'),
(47, '4', '46'),
(48, '4', '47'),
(49, '4', '48'),
(50, '4', '49'),
(51, '4', '50'),
(52, '4', '51'),
(53, '4', '52'),
(54, '4', '53'),
(55, '4', '54'),
(56, '4', '55'),
(57, '4', '56'),
(58, '4', '57'),
(59, '4', '58'),
(60, '4', '59'),
(61, '4', '60'),
(62, '4', '61'),
(63, '4', '62'),
(64, '4', '63'),
(65, '4', '64'),
(66, '4', '65'),
(67, '4', '66'),
(68, '4', '67'),
(69, '4', '68'),
(70, '4', '69'),
(71, '4', '70'),
(72, '4', '71'),
(73, '4', '72'),
(74, '4', '73'),
(75, '4', '74'),
(76, '4', '75'),
(77, '5', '76'),
(78, '5', '77'),
(79, '5', '78'),
(80, '5', '79'),
(81, '5', '80'),
(82, '5', '81'),
(83, '5', '82'),
(84, '5', '83'),
(85, '5', '84'),
(86, '5', '85'),
(87, '5', '86'),
(88, '5', '87'),
(89, '5', '88'),
(90, '5', '89'),
(91, '5', '90'),
(92, '5', '91'),
(93, '5', '92'),
(94, '5', '93'),
(95, '5', '94'),
(96, '5', '95'),
(97, '5', '96'),
(98, '5', '97'),
(99, '5', '98'),
(100, '5', '99'),
(101, '5', '100');

-- --------------------------------------------------------

--
-- Table structure for table `kriteria_ram`
--

CREATE TABLE `kriteria_ram` (
  `id_kriteria_harga` int(11) NOT NULL,
  `nama_range` varchar(25) NOT NULL,
  `nilai` enum('1','2','3','4') NOT NULL,
  `bobot` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kriteria_ram`
--

INSERT INTO `kriteria_ram` (`id_kriteria_harga`, `nama_range`, `nilai`, `bobot`) VALUES
(1, 'Kecil', '1', '0-25'),
(2, 'Sedang', '2', '26-50'),
(3, 'Besar', '3', '51-75'),
(4, 'Sangat Besar', '4', '76-100');

-- --------------------------------------------------------

--
-- Table structure for table `kriteria_ram_bobot`
--

CREATE TABLE `kriteria_ram_bobot` (
  `id_kriteria_ram_bobot` int(11) NOT NULL,
  `nilai_kriteria_ram` varchar(45) DEFAULT NULL,
  `bobot_kriteria_biaya` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kriteria_ram_bobot`
--

INSERT INTO `kriteria_ram_bobot` (`id_kriteria_ram_bobot`, `nilai_kriteria_ram`, `bobot_kriteria_biaya`) VALUES
(1, '1', '0'),
(2, '1', '1'),
(3, '1', '2'),
(4, '1', '3'),
(5, '1', '4'),
(6, '1', '5'),
(7, '1', '6'),
(8, '1', '7'),
(9, '1', '8'),
(10, '1', '9'),
(11, '1', '10'),
(12, '1', '11'),
(13, '1', '12'),
(14, '1', '13'),
(15, '1', '14'),
(16, '1', '15'),
(17, '1', '16'),
(18, '1', '17'),
(19, '1', '18'),
(20, '1', '19'),
(21, '1', '20'),
(22, '1', '21'),
(23, '1', '22'),
(24, '1', '23'),
(25, '1', '24'),
(26, '1', '25'),
(27, '2', '26'),
(28, '2', '27'),
(29, '2', '28'),
(30, '2', '29'),
(31, '2', '30'),
(32, '2', '31'),
(33, '2', '32'),
(34, '2', '33'),
(35, '2', '34'),
(36, '2', '35'),
(37, '2', '36'),
(38, '2', '37'),
(39, '2', '38'),
(40, '2', '39'),
(41, '2', '40'),
(42, '2', '41'),
(43, '2', '42'),
(44, '2', '43'),
(45, '2', '44'),
(46, '2', '45'),
(47, '2', '46'),
(48, '2', '47'),
(49, '2', '48'),
(50, '2', '49'),
(51, '2', '50'),
(52, '3', '51'),
(53, '3', '52'),
(54, '3', '53'),
(55, '3', '54'),
(56, '3', '55'),
(57, '3', '56'),
(58, '3', '57'),
(59, '3', '58'),
(60, '3', '59'),
(61, '3', '60'),
(62, '3', '61'),
(63, '3', '62'),
(64, '3', '63'),
(65, '3', '64'),
(66, '3', '65'),
(67, '3', '66'),
(68, '3', '67'),
(69, '3', '68'),
(70, '3', '69'),
(71, '3', '70'),
(72, '3', '71'),
(73, '3', '72'),
(74, '3', '73'),
(75, '3', '74'),
(76, '3', '75'),
(77, '4', '76'),
(78, '4', '77'),
(79, '4', '78'),
(80, '4', '79'),
(81, '4', '80'),
(82, '4', '81'),
(83, '4', '82'),
(84, '4', '83'),
(85, '4', '84'),
(86, '4', '85'),
(87, '4', '86'),
(88, '4', '87'),
(89, '4', '88'),
(90, '4', '89'),
(91, '4', '90'),
(92, '4', '91'),
(93, '4', '92'),
(94, '4', '93'),
(95, '4', '94'),
(96, '4', '95'),
(97, '4', '96'),
(98, '4', '97'),
(99, '4', '98'),
(100, '4', '99'),
(101, '4', '100');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `no` int(11) NOT NULL,
  `nama_lengkap` varchar(30) NOT NULL,
  `jabatan` varchar(25) NOT NULL,
  `alamat` text NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  `jenis_kel` enum('laki-laki','perempuan','','') NOT NULL,
  `tgl_lahir` date NOT NULL,
  `tempat_lahir` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `foto` text NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `id_anggota` varchar(25) DEFAULT NULL,
  `level` enum('petugas','admin') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`no`, `nama_lengkap`, `jabatan`, `alamat`, `no_hp`, `jenis_kel`, `tgl_lahir`, `tempat_lahir`, `email`, `foto`, `username`, `password`, `id_anggota`, `level`) VALUES
(1, 'Hikmawan Hudzaifah Firdausi', 'Kepala Program', 'Gowok, Caturtunggal, Depok, Sleman', '083865531240', 'laki-laki', '1995-02-06', 'Surakarta', 'madzaidafirdausi@gmail.com', 'img/D.jpg', 'petugas', 'petugas', 'A01', 'petugas'),
(2, 'Hikmawan H F', 'Kepala Dinas', 'Solo', '083865531240', 'perempuan', '0000-00-00', 'Surakarta', 'madzaidafirdausi@gmail.com', 'img/IMG_20170821_073203_895.jpg', 'admin', 'admin', 'B01', 'admin'),
(3, 'Mutia', 'jabatan', 'Boyolali', '081226131151', 'perempuan', '0000-00-00', '', '', '', 'mufti', 'mufti', 'A03', 'petugas');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `datalaptop`
--
ALTER TABLE `datalaptop`
  ADD PRIMARY KEY (`id_laptop`);

--
-- Indexes for table `kriteria_grafis`
--
ALTER TABLE `kriteria_grafis`
  ADD PRIMARY KEY (`id_kriteria_grafis`);

--
-- Indexes for table `kriteria_grafis_bobot`
--
ALTER TABLE `kriteria_grafis_bobot`
  ADD PRIMARY KEY (`id_kriteria_grafis_bobot`);

--
-- Indexes for table `kriteria_harga`
--
ALTER TABLE `kriteria_harga`
  ADD PRIMARY KEY (`id_kriteria_harga`);

--
-- Indexes for table `kriteria_harga_bobot`
--
ALTER TABLE `kriteria_harga_bobot`
  ADD PRIMARY KEY (`id_kriteria_harga_bobot`);

--
-- Indexes for table `kriteria_layar`
--
ALTER TABLE `kriteria_layar`
  ADD PRIMARY KEY (`id_kriteria_layar`);

--
-- Indexes for table `kriteria_layar_bobot`
--
ALTER TABLE `kriteria_layar_bobot`
  ADD PRIMARY KEY (`id_kriteria_layar_bobot`);

--
-- Indexes for table `kriteria_penyimpanan`
--
ALTER TABLE `kriteria_penyimpanan`
  ADD PRIMARY KEY (`id_kriteria_penyimpanan`);

--
-- Indexes for table `kriteria_penyimpanan_bobot`
--
ALTER TABLE `kriteria_penyimpanan_bobot`
  ADD PRIMARY KEY (`id_kriteria_penyimpanan_bobot`);

--
-- Indexes for table `kriteria_prosesor`
--
ALTER TABLE `kriteria_prosesor`
  ADD PRIMARY KEY (`id_kriteria_harga`);

--
-- Indexes for table `kriteria_prosesor_bobot`
--
ALTER TABLE `kriteria_prosesor_bobot`
  ADD PRIMARY KEY (`id_kriteria_prosesor_bobot`);

--
-- Indexes for table `kriteria_ram`
--
ALTER TABLE `kriteria_ram`
  ADD PRIMARY KEY (`id_kriteria_harga`);

--
-- Indexes for table `kriteria_ram_bobot`
--
ALTER TABLE `kriteria_ram_bobot`
  ADD PRIMARY KEY (`id_kriteria_ram_bobot`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`no`),
  ADD UNIQUE KEY `id_anggota` (`id_anggota`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kriteria_grafis`
--
ALTER TABLE `kriteria_grafis`
  MODIFY `id_kriteria_grafis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `kriteria_harga`
--
ALTER TABLE `kriteria_harga`
  MODIFY `id_kriteria_harga` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `kriteria_layar`
--
ALTER TABLE `kriteria_layar`
  MODIFY `id_kriteria_layar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `kriteria_penyimpanan`
--
ALTER TABLE `kriteria_penyimpanan`
  MODIFY `id_kriteria_penyimpanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `kriteria_prosesor`
--
ALTER TABLE `kriteria_prosesor`
  MODIFY `id_kriteria_harga` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `kriteria_ram`
--
ALTER TABLE `kriteria_ram`
  MODIFY `id_kriteria_harga` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
