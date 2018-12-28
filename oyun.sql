-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 22 May 2017, 09:29:54
-- Sunucu sürümü: 5.6.20
-- PHP Sürümü: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Veritabanı: `oyun`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kategoriler`
--

CREATE TABLE IF NOT EXISTS `kategoriler` (
`kategori_id` int(11) NOT NULL,
  `kategori_ad` varchar(30) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci AUTO_INCREMENT=28 ;

--
-- Tablo döküm verisi `kategoriler`
--

INSERT INTO `kategoriler` (`kategori_id`, `kategori_ad`) VALUES
(1, '3D OYUNLAR'),
(2, '2 KISILIK'),
(3, 'ONLINE'),
(4, 'ARABA'),
(5, 'BARBIE'),
(6, 'BECERI'),
(7, 'BOYAMA'),
(8, 'CIZGI FILM'),
(9, 'COCUK'),
(10, 'DOVUS'),
(11, 'FUTBOL'),
(12, 'GIYDIRME'),
(13, 'KARISIK'),
(14, 'KIZ'),
(15, 'KOMIK'),
(16, 'MACERA'),
(17, 'MAKYAJ'),
(18, 'MARIO'),
(19, 'MOTOR'),
(20, 'NISAN'),
(21, 'SAVAS'),
(22, 'SPOR'),
(23, 'STRATEJI'),
(24, 'YARIS'),
(25, 'YETENEK'),
(26, 'YEMEK'),
(27, 'ZEKA');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `oyun_ozellik`
--

CREATE TABLE IF NOT EXISTS `oyun_ozellik` (
`oyun_id` int(11) NOT NULL,
  `oyun_link` varchar(200) COLLATE utf8_turkish_ci NOT NULL,
  `oyun_adi` varchar(200) COLLATE utf8_turkish_ci NOT NULL,
  `oyun_resim` varchar(200) COLLATE utf8_turkish_ci NOT NULL,
  `oyun_hikayesi` varchar(500) COLLATE utf8_turkish_ci NOT NULL,
  `oyun_video` varchar(300) COLLATE utf8_turkish_ci NOT NULL,
  `kategori_id` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci AUTO_INCREMENT=37 ;

--
-- Tablo döküm verisi `oyun_ozellik`
--

INSERT INTO `oyun_ozellik` (`oyun_id`, `oyun_link`, `oyun_adi`, `oyun_resim`, `oyun_hikayesi`, `oyun_video`, `kategori_id`) VALUES
(27, 'http://www.roketoyun.com/askeri-gorev.html', 'Askeri GÃ¶rev Oyunu', 'resimler/e.jpg', ' Askeri Ã¼sse gizlice giriÅŸ yaptÄ±k. Ä°Ã§eriye ilerlemek sizin gÃ¶reviniz. Elinizdeki minimum silahla kendinizi savunmalÄ±sÄ±nÄ±z. Silah deÄŸiÅŸikliÄŸi yapmak iÃ§in "E, Q" harflerini kullanacaksÄ±nÄ±z. DÃ¼ÅŸman cephaneliÄŸinden yeni silahlar da edinebilirsiniz.', 'https://www.youtube.com/embed/yYjD78X1d9Q', 1),
(28, 'http://www.roketoyun.com/kar-temizleme.html', 'Kar Temizleme Oyunu', 'resimler/h.jpg', ' Otoparkta kalan araÃ§larÄ±, kar kÃ¼reme aracÄ± ile kurtarmak gerekiyor. Kar aracÄ±nÄ± ok tuÅŸlarÄ±nÄ± kullanarak yÃ¶nlendireceÄŸiz. Temizlik yaparken, toplanan fazla kar yÄ±ÄŸÄ±nlarÄ±nÄ± kar temizleme aracÄ± itemez. Bu durumda kar yÄ±ÄŸÄ±nÄ±nÄ±n etrafÄ±ndan dolanmalÄ±sÄ±nÄ±z. OtoparkÄ±n yeterince temizlenmiÅŸ sayÄ±lmasÄ± iÃ§in %70 oranÄ±na ulaÅŸmak gerekiyor. SaÄŸ Ã¼stte Ã§Ä±kan kahve fincanÄ±n Ã¼zerin tÄ±klayÄ±nca yardÄ±ma ihtiyacÄ± olan diÄŸer otoparka geÃ§miÅŸ olacaksÄ±nÄ±z. ', 'https://www.youtube.com/embed/yYjD78X1d9Q', 2),
(29, 'https://games.cdn.famobi.com/html5games/h/hop-dont-stop/v010/?fg_domain=play.famobi.com&fg_aid=A-SILVERGAMES&fg_uid=93136c60-f037-4952-9679-92b1e075db5a&fg_pid=8a24e5f2-94a8-4593-b4e5-81cc68f524c8&fg_', 'Kar KÃ¼reme Oyunu ', 'resimler/Ä±.jpg', ' Kar kÃ¼reme araÃ§larÄ± bu yaÄŸÄ±ÅŸÄ±n Ã¼stesinden gelebilir. Ancak AtaÅŸehirde gÃ¶revli aracÄ±n biri boÅŸta bekliyor. AtaÅŸehir bÃ¶lgesini temizlemek iÃ§in bir ÅŸofÃ¶re ihtiyacÄ±mÄ±z var. Yollar kapanmadan tÃ¼m ana yollarÄ± temizlemiÅŸ olmalÄ±sÄ±n', 'https://www.youtube.com/embed/yYjD78X1d9Q', 1),
(30, 'https://games.cdn.famobi.com/html5games/j/jetpack-master/v380/?fg_domain=play.famobi.com&fg_aid=A1000-1&fg_uid=3d29f086-1059-4efb-9b1a-4b6460d35607&fg_pid=4638e320-4444-4514-81c4-d80a8c662371&fg_beat=', 'Candy Bubble', 'resimler/k.jpg', 'Askeri Ã¼sse gizlice giriÅŸ yaptÄ±k. Ä°Ã§eriye ilerlemek sizin gÃ¶reviniz. Elinizdeki minimum silahla kendinizi savunmalÄ±sÄ±nÄ±z. Silah deÄŸiÅŸikliÄŸi yapmak iÃ§in "E, Q" harflerini kullanacaksÄ±nÄ±z. DÃ¼ÅŸman cephaneliÄŸinden yeni silahlar da edinebilirsiniz.', 'https://www.youtube.com/embed/yYjD78X1d9Q', 1),
(31, 'sadasdasdasdas', 'sad', 'resimler/a.jpg', 'dsasadsad', 'dsa', 3),
(32, 'http://www.roketoyun.com/askeri-gorev.html', 'fifa18', 'resimler/h.jpg', 'https://games.cdn.famobi.com/html5games/j/jewelish-blitz/v080/?fg_domain=play.famobi.com&fg_aid=A1000-1&fg_uid=395b0746-6d0e-4ec8-b11c-18cab8009214&fg_pid=4638e320-4444-4514-81c4-d80a8c662371&fg_beat=918#_ga=2.77877588.1776705259.1495400486-2100426001.1495399353', 'https://www.youtube.com/embed/yYjD78X1d9Q', 1),
(33, 'http://www.roketoyun.com/askeri-gorev.html', 'fifa18', 'resimler/a.jpg', 'asd a dasdasdasads sajkgdjasg jdas jasjh sajd hagsjdh askhgd jags jagfsjhf sbdhfabh dbhsfb sdbfsayugf uydsgfusydgauafydagfduaygayguasfgdhsjsfd', 'https://www.youtube.com/embed/yYjD78X1d9Q', 3),
(34, 'http://www.roketoyun.com/kar-temizleme.html', 'fifa18', 'resimler/a.jpg', 'Legends of Honor strateji ve savaÅŸ oyunlarÄ±nÄ± sevenler iÃ§in harika bir deneyim vaadediyor. Oyunda stratejinizi belirleyerek geliÅŸiminizi sÃ¼rdÃ¼rÃ¼rken, gÃ¼cÃ¼nÃ¼zÃ¼ ve savunmanÄ±zÄ± etkileyecek olan bazÄ± elementleri de keÅŸfedip doÄŸru ÅŸekilde kullanmanÄ±z gerekecek. Rakiplirinize karÅŸÄ± koymak iÃ§in mÃ¼mkÃ¼n olan en iyi ÅŸekilde hareket etmeniz sizi zafere dahada yaklaÅŸtÄ±racaktÄ±r. Online platformda diÄŸer oyunculara meydan okumak iÃ§in hemen baÅŸla!', 'https://www.youtube.com/embed/yYjD78X1d9Q', 2),
(35, 'https://games.cdn.famobi.com/html5games/h/hop-dont-stop/v010/?fg_domain=play.famobi.com&fg_aid=A-SILVERGAMES&fg_uid=93136c60-f037-4952-9679-92b1e075db5a&fg_pid=8a24e5f2-94a8-4593-b4e5-81cc68f524c8&fg_', 'fifa18', 'resimler/g.jpg', 'Legends of Honor strateji ve savaÅŸ oyunlarÄ±nÄ± sevenler iÃ§in harika bir deneyim vaadediyor. Oyunda stratejinizi belirleyerek geliÅŸiminizi sÃ¼rdÃ¼rÃ¼rken, gÃ¼cÃ¼nÃ¼zÃ¼ ve savunmanÄ±zÄ± etkileyecek olan bazÄ± elementleri de keÅŸfedip doÄŸru ÅŸekilde kullanmanÄ±z gerekecek. Rakiplirinize karÅŸÄ± koymak iÃ§in mÃ¼mkÃ¼n olan en iyi ÅŸekilde hareket etmeniz sizi zafere dahada yaklaÅŸtÄ±racaktÄ±r. Online platformda diÄŸer oyunculara meydan okumak iÃ§in hemen baÅŸla!', 'https://www.youtube.com/embed/yYjD78X1d9Q', 2),
(36, 'https://games.cdn.famobi.com/html5games/h/hop-dont-stop/v010/?fg_domain=play.famobi.com&fg_aid=A-SILVERGAMES&fg_uid=93136c60-f037-4952-9679-92b1e075db5a&fg_pid=8a24e5f2-94a8-4593-b4e5-81cc68f524c8&fg_', 'araba', 'resimler/f.jpg', 'Legends of Honor strateji ve savaÅŸ oyunlarÄ±nÄ± sevenler iÃ§in harika bir deneyim vaadediyor. Oyunda stratejinizi belirleyerek geliÅŸiminizi sÃ¼rdÃ¼rÃ¼rken, gÃ¼cÃ¼nÃ¼zÃ¼ ve savunmanÄ±zÄ± etkileyecek olan bazÄ± elementleri de keÅŸfedip doÄŸru ÅŸekilde kullanmanÄ±z gerekecek. Rakiplirinize karÅŸÄ± koymak iÃ§in mÃ¼mkÃ¼n olan en iyi ÅŸekilde hareket etmeniz sizi zafere dahada yaklaÅŸtÄ±racaktÄ±r. Online platformda diÄŸer oyunculara meydan okumak iÃ§in hemen baÅŸla!', 'https://www.youtube.com/embed/yYjD78X1d9Q', 4);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `uyeler`
--

CREATE TABLE IF NOT EXISTS `uyeler` (
`k_id` int(11) NOT NULL,
  `kadi` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `pass` varchar(20) COLLATE utf8_turkish_ci NOT NULL,
  `mail` varchar(50) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci AUTO_INCREMENT=15 ;

--
-- Tablo döküm verisi `uyeler`
--

INSERT INTO `uyeler` (`k_id`, `kadi`, `pass`, `mail`) VALUES
(9, 'emrah', '123456', 'inamemrah@gmail.com'),
(10, 'burak', '123456', 'burakbuyurukcu@gmail.com'),
(11, 'tolga', '123456', 'iskenderoÄŸlu@gmail.com'),
(12, 'Ã¶zkan', '123456', 'tastabak@gmail.com'),
(13, 'halit', '123456', 'akhalit@gmail.com'),
(14, 'metecan', '145236', 'metecan@gmail.com');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yorumlar`
--

CREATE TABLE IF NOT EXISTS `yorumlar` (
`yorum_id` int(11) NOT NULL,
  `yorum` varchar(200) COLLATE utf8_turkish_ci NOT NULL,
  `oyun_id` int(11) NOT NULL,
  `k_id` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci AUTO_INCREMENT=54 ;

--
-- Tablo döküm verisi `yorumlar`
--

INSERT INTO `yorumlar` (`yorum_id`, `yorum`, `oyun_id`, `k_id`) VALUES
(28, 'Ã§ok gÃ¼Ã¼zel oyun maÅŸallah', 29, 1),
(29, 'hiÃ§ gÃ¼zel oyun deÄŸil leÅŸÅŸÅŸÅŸÅŸ', 29, 1),
(30, 'denemeeeeeeeeeeeeeeeee', 29, 1),
(31, 'efsane oyun karÅŸim', 30, 1),
(32, 'sadsadsadsa', 30, 1),
(33, 'eaesdsa dasd sad asdas', 27, 1),
(34, 'ea a aeadasdas das dasd as', 30, 1),
(35, 'sdadadas  asd as', 27, 1),
(36, 'sadddasas adas ', 27, 1),
(37, 'sdas', 27, 0),
(38, 'dsadasdas', 27, 9),
(39, 'dsadsadsadsa sa sa asdasdsa aas jhs fdsjabfsh jbaf jbfajd a', 27, 9),
(40, 'sdad sadada sadasdas dasd asd asd asas asd as', 29, 9),
(41, 'dsdsa as asdas dasdas', 27, 9),
(42, 'dsa asd as', 27, 10),
(43, 'fdjbj adshdsjkhkjdask jas nkfsjkfn asdjfn kjdas', 28, 11),
(44, 'd aSD AS Da daf s fsdgf sffiÅŸadli aÅŸs lidasÅŸ ldiaÅŸsdlaÅŸis l iaÅŸs', 29, 11),
(45, 'das jnsaj nasj sdadbhsabjdab sjbdjhb dsad as', 30, 11),
(46, 'as sa dasdadhas uagduas bdabjasb jash', 33, 11),
(47, 'dsa ab kaskd ask daksdnkjan dasndajs nd ajs sadasjn  dsajnsjsdnajsnd jasn dskan ja jadkja kda dkas ', 27, 13),
(48, 'dsaÄ±asjd asjdajsnja snd jan asnj dnaj ndajsn dkjansjdn ajs hasdaj dask', 28, 13),
(49, 'adsh bas askjn asjkndkajndkjas nkajsndjkan kdjansj dnakjsdnas dnask ndadas  asn djanskj da', 29, 13),
(50, 'adsb ajs djan djnasj nasjk nkajsndjansjk dnasjk ndajk nasjk ', 27, 14),
(51, 'sand jksan sjandsndsa nsdanjskn jkandjkasnkjda', 28, 14),
(52, 'sad das dsa assda ', 28, 14),
(53, 'asbjhsabhj asad as dsanjas njkdsanjndasjkdnajsas', 29, 14);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `kategoriler`
--
ALTER TABLE `kategoriler`
 ADD PRIMARY KEY (`kategori_id`);

--
-- Tablo için indeksler `oyun_ozellik`
--
ALTER TABLE `oyun_ozellik`
 ADD PRIMARY KEY (`oyun_id`);

--
-- Tablo için indeksler `uyeler`
--
ALTER TABLE `uyeler`
 ADD PRIMARY KEY (`k_id`);

--
-- Tablo için indeksler `yorumlar`
--
ALTER TABLE `yorumlar`
 ADD PRIMARY KEY (`yorum_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `kategoriler`
--
ALTER TABLE `kategoriler`
MODIFY `kategori_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=28;
--
-- Tablo için AUTO_INCREMENT değeri `oyun_ozellik`
--
ALTER TABLE `oyun_ozellik`
MODIFY `oyun_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=37;
--
-- Tablo için AUTO_INCREMENT değeri `uyeler`
--
ALTER TABLE `uyeler`
MODIFY `k_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- Tablo için AUTO_INCREMENT değeri `yorumlar`
--
ALTER TABLE `yorumlar`
MODIFY `yorum_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=54;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
