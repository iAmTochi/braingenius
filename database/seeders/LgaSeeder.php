<?php
namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LgaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::insert("
        INSERT INTO lgas (id, state_id, lga_name) VALUES
            (2, 1, 'Aba North'),
            (3, 1, 'Aba South'),
            (4, 1, 'Arochukwu'),
            (5, 1, 'Bende'),
            (6, 1, 'Ikwuano'),
            (7, 1, 'Isiala-Ngwa North'),
            (8, 1, 'Isiala-Ngwa South'),
            (9, 1, 'Isuikwato'),
            (10, 1, 'Ngwa'),
            (11, 1, 'Obi Nwa'),
            (12, 1, 'Ohafia'),
            (13, 1, 'Osisioma'),
            (14, 1, 'Ugwunagbo'),
            (15, 1, 'Ukwa East'),
            (16, 1, 'Ukwa West '),
            (17, 1, 'Umu-Neochi'),
            (18, 1, 'Umuahia North'),
            (19, 1, 'Umuahia South'),
            (20, 10, 'Aniocha'),
            (21, 10, 'Aniocha South'),
            (22, 10, 'Bomadi'),
            (23, 10, 'Burutu'),
            (24, 10, 'Ethiope East'),
            (25, 10, 'Ethiope West'),
            (26, 10, 'Ika North-East'),
            (27, 10, 'Ika South'),
            (28, 10, 'Isoko North'),
            (29, 10, 'Isoko south'),
            (30, 10, 'Ndokwa East'),
            (31, 10, 'Ndokwa West'),
            (32, 10, 'Okpe'),
            (33, 10, 'Oshimili'),
            (34, 10, 'Oshimili North'),
            (35, 10, 'Patani'),
            (36, 10, 'Sapele'),
            (37, 10, 'Udu'),
            (38, 10, 'Ughelli North'),
            (39, 10, 'Ughelli South'),
            (40, 10, 'Ukwani '),
            (41, 10, 'Uvwie'),
            (42, 10, 'Warri Central '),
            (43, 10, 'Warri North'),
            (44, 10, 'Warri South'),
            (45, 11, 'Abakaliki'),
            (46, 11, 'Afikpo North'),
            (47, 11, 'Afikpo South'),
            (48, 11, 'Ebonyi'),
            (49, 11, 'Ezza'),
            (50, 11, 'Ezza South'),
            (51, 11, 'Ishielu'),
            (52, 11, 'Ivo'),
            (53, 11, 'lkwo'),
            (54, 11, 'Ohaozara'),
            (55, 11, 'Ohaukwu'),
            (56, 11, 'Onicha'),
            (57, 12, 'Akoko Edo'),
            (58, 12, 'Egor'),
            (59, 12, 'Esan Central'),
            (60, 12, 'Esan North-East'),
            (61, 12, 'Esan South-East'),
            (62, 12, 'Esan West'),
            (63, 12, 'Etsako Central'),
            (64, 12, 'Etsako East'),
            (65, 12, 'Etsako West'),
            (66, 12, 'Igueben'),
            (67, 12, 'Ikpoba Okha'),
            (68, 12, 'Oredo'),
            (69, 12, 'Orhiomwon'),
            (70, 12, 'Ovia North East'),
            (71, 12, 'Ovia SouthWest'),
            (72, 12, 'Owan East'),
            (73, 12, 'Owan West'),
            (74, 12, 'Uhunmwonde'),
            (75, 12, 'Ukpoba'),
            (76, 13, ' Ilejemeje'),
            (77, 13, 'Ado'),
            (78, 13, 'Efon'),
            (79, 13, 'Ekiti South-West'),
            (80, 13, 'Ekiti-East'),
            (81, 13, 'Ekiti-West'),
            (82, 13, 'Emure/Ise/Orun'),
            (83, 13, 'Gbonyin'),
            (84, 13, 'Ido/Osi'),
            (85, 13, 'Ijero'),
            (86, 13, 'Ikare'),
            (87, 13, 'Ikole'),
            (88, 13, 'Irepodun'),
            (89, 13, 'Ise/Orun'),
            (90, 13, 'Moba'),
            (91, 13, 'Oye'),
            (92, 14, 'Agwu'),
            (93, 14, 'Aninri'),
            (94, 14, 'Enugu Eas'),
            (95, 14, 'Enugu North'),
            (96, 14, 'Enugu South'),
            (97, 14, 'Ezeagu'),
            (98, 14, 'Igbo-Ekiti'),
            (99, 14, 'Igbo-Eze South'),
            (100, 14, 'IgboEze North'),
            (101, 14, 'Isi-Uzo'),
            (102, 14, 'Nkanu'),
            (103, 14, 'Nkanu East'),
            (104, 14, 'Nsukka'),
            (105, 14, 'Oji-River'),
            (106, 14, 'Udenu'),
            (107, 14, 'Udi'),
            (108, 14, 'Uzo-Uwani'),
            (109, 16, 'Akko'),
            (110, 16, 'Balanga'),
            (111, 16, 'Billiri'),
            (112, 16, 'Dukku'),
            (113, 16, 'Funakaye'),
            (114, 16, 'Gombe'),
            (115, 16, 'Kaltungo'),
            (116, 16, 'Kwami'),
            (117, 16, 'Nafada/Bajoga'),
            (118, 16, 'Shomgom'),
            (119, 16, 'Yamaltu/Delta'),
            (120, 17, 'Aboh-Mbaise'),
            (121, 17, 'Ahiazu-Mbaise'),
            (122, 17, 'Ehime-Mbano'),
            (123, 17, 'Ezinihitte'),
            (124, 17, 'Ideato North'),
            (125, 17, 'Ideato South'),
            (126, 17, 'Ihitte/Uboma'),
            (127, 17, 'Ikeduru'),
            (128, 17, 'Isiala Mbano'),
            (129, 17, 'Isu'),
            (130, 17, 'Mbaitoli'),
            (131, 17, 'Ngor-Okpala'),
            (132, 17, 'Njaba'),
            (133, 17, 'Nkwerre'),
            (134, 17, 'Nwangele'),
            (135, 17, 'Obowo'),
            (136, 17, 'Oguta'),
            (137, 17, 'Ohaji/Egbema'),
            (138, 17, 'Okigwe'),
            (139, 17, 'Orlu'),
            (140, 17, 'Orsu'),
            (141, 17, 'Oru East'),
            (142, 17, 'Oru West'),
            (143, 17, 'Owerri North'),
            (144, 17, 'Owerri West'),
            (145, 17, 'Owerri-Municipal'),
            (146, 18, 'Auyo'),
            (147, 18, 'Babura'),
            (148, 18, 'Biriniwa'),
            (149, 18, 'Birni Kudu'),
            (150, 18, 'Buji'),
            (151, 18, 'Dutse'),
            (152, 18, 'Gagarawa'),
            (153, 18, 'Garki'),
            (154, 18, 'Gumel'),
            (155, 18, 'Guri'),
            (156, 18, 'Gwaram'),
            (157, 18, 'Gwiwa'),
            (158, 18, 'Hadejia'),
            (159, 18, 'Jahun'),
            (160, 18, 'Kafin Hausa'),
            (161, 18, 'Kaugama Kazaure'),
            (162, 18, 'Kiri Kasamma'),
            (163, 18, 'Kiyawa'),
            (164, 18, 'Maigatari'),
            (165, 18, 'Malam Madori'),
            (166, 18, 'Miga'),
            (167, 18, 'Ringim'),
            (168, 18, 'Roni'),
            (169, 18, 'Sule-Tankarkar'),
            (170, 18, 'Taura'),
            (171, 18, 'Yankwashi'),
            (172, 19, 'Birni-Gwari'),
            (173, 19, 'Chikun'),
            (174, 19, 'Giwa'),
            (175, 19, 'Igabi'),
            (176, 19, 'Ikara'),
            (177, 19, 'jaba'),
            (178, 19, 'Jemaa'),
            (179, 19, 'Kachia'),
            (180, 19, 'Kaduna North'),
            (181, 19, 'Kaduna South'),
            (182, 19, 'Kagarko'),
            (183, 19, 'Kajuru'),
            (184, 19, 'Kaura'),
            (185, 19, 'Kauru'),
            (186, 19, 'Kubau'),
            (187, 19, 'Kudan'),
            (188, 19, 'Lere'),
            (189, 19, 'Makarfi'),
            (190, 19, 'Sabon-Gari'),
            (191, 19, 'Sanga'),
            (192, 19, 'Soba'),
            (193, 19, 'Zango-Kataf '),
            (194, 19, 'Zaria'),
            (195, 20, 'Ajingi'),
            (196, 20, 'Albasu'),
            (197, 20, 'Bagwai'),
            (198, 20, 'Bebeji'),
            (199, 20, 'Bichi'),
            (200, 20, 'Bunkure'),
            (201, 20, 'Dala'),
            (202, 20, 'Dambatta'),
            (203, 20, 'Dawakin Kudu'),
            (204, 20, 'Dawakin Tofa'),
            (205, 20, 'Doguwa'),
            (206, 20, 'Fagge'),
            (207, 20, 'Gabasawa'),
            (208, 20, 'Garko'),
            (209, 20, 'Garum'),
            (210, 20, 'Gaya'),
            (211, 20, 'Gezawa'),
            (212, 20, 'Gwale'),
            (213, 20, 'Gwarzo'),
            (214, 20, 'Kabo'),
            (215, 20, 'Kano Municipal'),
            (216, 20, 'Karaye'),
            (217, 20, 'Kibiya'),
            (218, 20, 'Kiru'),
            (219, 20, 'kumbotso'),
            (220, 20, 'Kunchi'),
            (221, 20, 'Kura'),
            (222, 20, 'Madobi'),
            (223, 20, 'Makoda'),
            (224, 20, 'Mallam'),
            (225, 20, 'Minjibir'),
            (226, 20, 'Nasarawa'),
            (227, 20, 'Rano'),
            (228, 20, 'Rimin Gado'),
            (229, 20, 'Rogo'),
            (230, 20, 'Shanono'),
            (231, 20, 'Sumaila'),
            (232, 20, 'Takali'),
            (233, 20, 'Tarauni'),
            (234, 20, 'Tofa'),
            (235, 20, 'Tsanyawa'),
            (236, 20, 'Tudun Wada'),
            (237, 20, 'Ungogo'),
            (238, 20, 'Warawa'),
            (239, 20, 'Wudil'),
            (240, 2, 'Demsa'),
            (241, 2, 'Fufore'),
            (242, 2, 'Ganaye'),
            (243, 2, 'Gireri'),
            (244, 2, 'Gombi'),
            (245, 2, 'Guyuk'),
            (246, 2, 'Hong'),
            (247, 2, 'Jada'),
            (248, 2, 'Lamurde'),
            (249, 2, 'Madagali'),
            (250, 2, 'Maiha'),
            (251, 2, 'Mayo-Belwa'),
            (252, 2, 'Michika'),
            (253, 2, 'Mubi North'),
            (254, 2, 'Mubi South'),
            (255, 2, 'Numan'),
            (256, 2, 'Shelleng'),
            (257, 2, 'Song'),
            (258, 2, 'Toungo'),
            (259, 2, 'Yola North'),
            (260, 2, 'Yola South'),
            (261, 21, 'Bakori'),
            (262, 21, 'Batagarawa'),
            (263, 21, 'Batsari'),
            (264, 21, 'Baure'),
            (265, 21, 'Bindawa'),
            (266, 21, 'Charanchi'),
            (267, 21, 'Dan Musa'),
            (268, 21, 'Dandume'),
            (269, 21, 'Danja'),
            (270, 21, 'Daura'),
            (271, 21, 'Dutsi'),
            (272, 21, 'Dutsin-Ma'),
            (273, 21, 'Faskari'),
            (274, 21, 'Funtua'),
            (275, 21, 'Ingawa'),
            (276, 21, 'Jibia'),
            (277, 21, 'Kafur'),
            (278, 21, 'Kaita'),
            (279, 21, 'Kankara'),
            (280, 21, 'Kankia'),
            (281, 21, 'Katsina'),
            (282, 21, 'Kurfi'),
            (283, 21, 'Kusada'),
            (284, 21, 'MaiAdua'),
            (285, 21, 'Malumfashi'),
            (286, 21, 'Mani'),
            (287, 21, 'Mashi'),
            (288, 21, 'Matazuu'),
            (289, 21, 'Musawa'),
            (290, 21, 'Rimi'),
            (291, 21, 'Sabuwa'),
            (292, 21, 'Safana'),
            (293, 21, 'Sandamu'),
            (294, 21, 'Zango'),
            (295, 22, 'Aleiro'),
            (296, 22, 'Arewa-Dandi'),
            (297, 22, 'Argungu'),
            (298, 22, 'Augie'),
            (299, 22, 'Bagudo'),
            (300, 22, 'Birnin Kebbi'),
            (301, 22, 'Bunza'),
            (302, 22, 'Dandi'),
            (303, 22, 'Fakai'),
            (304, 22, 'Gwandu'),
            (305, 22, 'Jega'),
            (306, 22, 'Kalgo'),
            (307, 22, 'Koko/Besse'),
            (308, 22, 'Maiyama'),
            (309, 22, 'Ngaski'),
            (310, 22, 'Sakaba'),
            (311, 22, 'Shanga'),
            (312, 22, 'Suru'),
            (313, 22, 'Wasagu/Danko'),
            (314, 22, 'Yauri'),
            (315, 22, 'Zuru'),
            (316, 23, 'Adavi'),
            (317, 23, 'Ajaokuta'),
            (318, 23, 'Ankpa'),
            (319, 23, 'Bassa'),
            (320, 23, 'Dekina'),
            (321, 23, 'Ibaji'),
            (322, 23, 'Idah'),
            (323, 23, 'Igalamela-Odolu'),
            (324, 23, 'Ijumu'),
            (325, 23, 'Kabba/Bunu'),
            (326, 23, 'Kogi'),
            (327, 23, 'Lokoja'),
            (328, 23, 'Mopa-Muro'),
            (329, 23, 'Ofu'),
            (330, 23, 'Ogori/Mangongo'),
            (331, 23, 'Okehi'),
            (332, 23, 'Okene'),
            (333, 23, 'Olamabolo'),
            (334, 23, 'Omala'),
            (335, 23, 'Yagba East'),
            (336, 23, 'Yagba West'),
            (337, 24, 'Asa'),
            (338, 24, 'Baruten'),
            (339, 24, 'Edu'),
            (340, 24, 'Ekiti'),
            (341, 24, 'Ifelodun'),
            (342, 24, 'Ilorin East'),
            (343, 24, 'Ilorin West'),
            (344, 24, 'Irepodun'),
            (345, 24, 'Isin'),
            (346, 24, 'Kaiama'),
            (347, 24, 'Moro'),
            (348, 24, 'Offa'),
            (349, 24, 'Oke-Ero'),
            (350, 24, 'Oyun'),
            (351, 24, 'Pategi'),
            (352, 25, 'Agege'),
            (353, 25, 'Ajeromi-Ifelodun'),
            (354, 25, 'Alimosho'),
            (355, 25, 'Amuwo-Odofin'),
            (356, 25, 'Apapa'),
            (357, 25, 'Badagry'),
            (358, 25, 'Epe'),
            (359, 25, 'Eti-Osa'),
            (360, 25, 'Ibeju/Lekki'),
            (361, 25, 'Ifako-Ijaye'),
            (362, 25, 'Ikeja'),
            (363, 25, 'Ikorodu'),
            (364, 25, 'Kosofe'),
            (365, 25, 'Lagos Island'),
            (366, 25, 'Lagos Mainland'),
            (367, 25, 'Mushin'),
            (368, 25, 'Ojo'),
            (369, 25, 'Oshodi-Isolo'),
            (370, 25, 'Shomolu'),
            (371, 25, 'Surulere'),
            (372, 26, ' Lafia'),
            (373, 26, 'Akwanga'),
            (374, 26, 'Awe'),
            (375, 26, 'Doma'),
            (376, 26, 'Karu'),
            (377, 26, 'Keana'),
            (378, 26, 'Keffi'),
            (379, 26, 'Kokona'),
            (380, 26, 'Nasarawa'),
            (381, 26, 'Nasarawa-Eggon'),
            (382, 26, 'Obi'),
            (383, 26, 'Toto'),
            (384, 26, 'Wamba'),
            (385, 27, 'Agaie'),
            (386, 27, 'Agwara'),
            (387, 27, 'Bida'),
            (388, 27, 'Borgu'),
            (389, 27, 'Bosso'),
            (390, 27, 'Chanchaga'),
            (391, 27, 'Edati'),
            (392, 27, 'Gbako'),
            (393, 27, 'Gurara'),
            (394, 27, 'Katcha'),
            (395, 27, 'Kontagora'),
            (396, 27, 'Lapai'),
            (397, 27, 'Lavun'),
            (398, 27, 'Magama'),
            (399, 27, 'Mariga'),
            (400, 27, 'Mashegu'),
            (401, 27, 'Mokwa'),
            (402, 27, 'Muya'),
            (403, 27, 'Pailoro'),
            (404, 27, 'Rafi'),
            (405, 27, 'Rijau'),
            (406, 27, 'Shiroro'),
            (407, 27, 'Suleja'),
            (408, 27, 'Tafa'),
            (409, 27, 'Wushishi'),
            (410, 28, 'Abeokuta North'),
            (411, 28, 'Abeokuta South'),
            (412, 28, 'Ado-Odo/Ota'),
            (413, 28, 'Ewekoro'),
            (414, 28, 'Ifo'),
            (415, 28, 'Ijebu East'),
            (416, 28, 'Ijebu North'),
            (417, 28, 'Ijebu North East'),
            (418, 28, 'Ijebu Ode'),
            (419, 28, 'Ikenne'),
            (420, 28, 'Imeko-Afon'),
            (421, 28, 'Ipokia'),
            (422, 28, 'Obafemi-Owode'),
            (423, 28, 'Odeda'),
            (424, 28, 'Odogbolu'),
            (425, 28, 'Ogun Waterside'),
            (426, 28, 'Remo North'),
            (427, 28, 'Shagamu'),
            (428, 28, 'Yewa North'),
            (429, 28, 'Yewa South'),
            (430, 29, 'Akoko North East'),
            (431, 29, 'Akoko North West'),
            (432, 29, 'Akoko South Akure East'),
            (433, 29, 'Akoko South West'),
            (434, 29, 'Akure North'),
            (435, 29, 'Akure South'),
            (436, 29, 'Ese-Odo'),
            (437, 29, 'Idanre'),
            (438, 29, 'Ifedore'),
            (439, 29, 'Ilaje'),
            (440, 29, 'Ile-Oluji'),
            (441, 29, 'Irele'),
            (442, 29, 'Odigbo'),
            (443, 29, 'Okeigbo'),
            (444, 29, 'Okitipupa'),
            (445, 29, 'Ondo East'),
            (446, 29, 'Ondo West'),
            (447, 29, 'Ose'),
            (448, 29, 'Owo'),
            (449, 30, ' Aiyedire'),
            (450, 30, 'Aiyedade'),
            (451, 30, 'Atakumosa East'),
            (452, 30, 'Atakumosa West'),
            (453, 30, 'Boluwaduro'),
            (454, 30, 'Boripe'),
            (455, 30, 'Ede North'),
            (456, 30, 'Ede South'),
            (457, 30, 'Egbedore'),
            (458, 30, 'Ejigbo'),
            (459, 30, 'Ife Central'),
            (460, 30, 'Ife East'),
            (461, 30, 'Ife North'),
            (462, 30, 'Ife South'),
            (463, 30, 'Ifedayo'),
            (464, 30, 'Ifelodun'),
            (465, 30, 'Ila'),
            (466, 30, 'Ilesha East'),
            (467, 30, 'Ilesha West'),
            (468, 30, 'Irepodun'),
            (469, 30, 'Irewole'),
            (470, 30, 'Isokan'),
            (471, 30, 'Iwo'),
            (472, 30, 'Obokun'),
            (473, 30, 'Odo-Otin'),
            (474, 30, 'Ola-Oluwa'),
            (475, 30, 'Olorunda'),
            (476, 30, 'Oriade'),
            (477, 30, 'Orolu'),
            (478, 30, 'Osogbo'),
            (479, 3, 'Abak'),
            (480, 3, 'Eastern Obolo'),
            (481, 3, 'Eket'),
            (482, 3, 'Esit Eket'),
            (483, 3, 'Essien Udim'),
            (484, 3, 'Etim Ekpo'),
            (485, 3, 'Etinan'),
            (486, 3, 'Ibeno'),
            (487, 3, 'Ibesikpo Asutan'),
            (488, 3, 'Ibiono Ibom'),
            (489, 3, 'Ika'),
            (490, 3, 'Ikono'),
            (491, 3, 'Ikot Abasi'),
            (492, 3, 'Ikot Ekpene'),
            (493, 3, 'Ini'),
            (494, 3, 'Itu'),
            (495, 3, 'Mbo'),
            (496, 3, 'Mkpat Enin'),
            (497, 3, 'Nsit Atai'),
            (498, 3, 'Nsit Ibom'),
            (499, 3, 'Nsit Ubium'),
            (500, 3, 'Obot Akara'),
            (501, 3, 'Okobo'),
            (502, 3, 'Onna'),
            (503, 3, 'Oron'),
            (504, 3, 'Oruk Anam'),
            (505, 3, 'Udung Uko'),
            (506, 3, 'Ukanafun'),
            (507, 3, 'Uruan'),
            (508, 3, 'Urue-Offong/Oruko'),
            (509, 3, 'Uyo'),
            (510, 31, ' Irepo'),
            (511, 31, 'Afijio'),
            (512, 31, 'Akinyele'),
            (513, 31, 'Atiba'),
            (514, 31, 'Atigbo'),
            (515, 31, 'Egbeda'),
            (516, 31, 'Ibadan North'),
            (517, 31, 'Ibadan North West'),
            (518, 31, 'Ibadan South East'),
            (519, 31, 'Ibadan South West'),
            (520, 31, 'IbadanCentral'),
            (521, 31, 'Ibarapa Central'),
            (522, 31, 'Ibarapa East'),
            (523, 31, 'Ibarapa North'),
            (524, 31, 'Ido'),
            (525, 31, 'Iseyin'),
            (526, 31, 'Itesiwaju'),
            (527, 31, 'Iwajowa'),
            (528, 31, 'Kajola'),
            (529, 31, 'Lagelu Ogbomosho North'),
            (530, 31, 'Ogbmosho South'),
            (531, 31, 'Ogo Oluwa'),
            (532, 31, 'Olorunsogo'),
            (533, 31, 'Oluyole'),
            (534, 31, 'Ona-Ara'),
            (535, 31, 'Orelope'),
            (536, 31, 'Ori Ire'),
            (537, 31, 'Oyo East'),
            (538, 31, 'Oyo West'),
            (539, 31, 'Saki East'),
            (540, 31, 'Saki West'),
            (541, 31, 'Surulere'),
            (542, 32, 'Barikin Ladi'),
            (543, 32, 'Bassa'),
            (544, 32, 'Bokkos'),
            (545, 32, 'Jos East'),
            (546, 32, 'Jos North'),
            (547, 32, 'Jos South'),
            (548, 32, 'Kanam'),
            (549, 32, 'Kanke'),
            (550, 32, 'Langtang North'),
            (551, 32, 'Langtang South'),
            (552, 32, 'Mangu'),
            (553, 32, 'Mikang'),
            (554, 32, 'Pankshin'),
            (555, 32, 'Qua an Pan'),
            (556, 32, 'Riyom'),
            (557, 32, 'Shendam'),
            (558, 32, 'Wase'),
            (559, 33, ' Oyigbo'),
            (560, 33, 'Abua/Odual'),
            (561, 33, 'Ahoada East'),
            (562, 33, 'Ahoada West'),
            (563, 33, 'Akuku Toru'),
            (564, 33, 'Andoni'),
            (565, 33, 'Asari-Toru'),
            (566, 33, 'Bonny'),
            (567, 33, 'Degema'),
            (568, 33, 'Eleme'),
            (569, 33, 'Emohua'),
            (570, 33, 'Etche'),
            (571, 33, 'Gokana'),
            (572, 33, 'Ikwerre'),
            (573, 33, 'Khana'),
            (574, 33, 'Obia/Akpor'),
            (575, 33, 'Ogba/Egbema/Ndoni'),
            (576, 33, 'Ogu/Bolo'),
            (577, 33, 'Okrika'),
            (578, 33, 'Omumma'),
            (579, 33, 'Opobo/Nkoro'),
            (580, 33, 'Port-Harcourt'),
            (581, 33, 'Tai'),
            (582, 34, 'Binji'),
            (583, 34, 'Bodinga'),
            (584, 34, 'Dange-shnsi'),
            (585, 34, 'Gada'),
            (586, 34, 'Gawabawa'),
            (587, 34, 'Goronyo'),
            (588, 34, 'Gudu'),
            (589, 34, 'Illela'),
            (590, 34, 'Isa'),
            (591, 34, 'kebbe'),
            (592, 34, 'Kware'),
            (593, 34, 'Rabah'),
            (594, 34, 'Sabon birni'),
            (595, 34, 'Shagari'),
            (596, 34, 'Silame'),
            (597, 34, 'Sokoto North'),
            (598, 34, 'Sokoto South'),
            (599, 34, 'Tambuwal'),
            (600, 34, 'Tqngaza'),
            (601, 34, 'Tureta'),
            (602, 34, 'Wamako'),
            (603, 34, 'Wurno'),
            (604, 34, 'Yabo'),
            (605, 35, 'Ardo-kola'),
            (606, 35, 'Bali'),
            (607, 35, 'Cassol'),
            (608, 35, 'Donga'),
            (609, 35, 'Gashaka'),
            (610, 35, 'Ibi'),
            (611, 35, 'Jalingo'),
            (612, 35, 'Karin-Lamido'),
            (613, 35, 'Kurmi'),
            (614, 35, 'Lau'),
            (615, 35, 'Sardauna'),
            (616, 35, 'Takum'),
            (617, 35, 'Ussa'),
            (618, 35, 'Wukari'),
            (619, 35, 'Yorro'),
            (620, 35, 'Zing'),
            (621, 36, 'Bade'),
            (622, 36, 'Bursari'),
            (623, 36, 'Damaturu'),
            (624, 36, 'Fika'),
            (625, 36, 'Fune'),
            (626, 36, 'Geidam'),
            (627, 36, 'Gujba'),
            (628, 36, 'Gulani'),
            (629, 36, 'Jakusko'),
            (630, 36, 'Karasuwa'),
            (631, 36, 'Karawa'),
            (632, 36, 'Machina'),
            (633, 36, 'Nangere'),
            (634, 36, 'Nguru Potiskum'),
            (635, 36, 'Tarmua'),
            (636, 36, 'Yunusari'),
            (637, 36, 'Yusufari'),
            (638, 37, 'Anka'),
            (639, 37, 'Bakura'),
            (640, 37, 'Birnin Magaji'),
            (641, 37, 'Bukkuyum '),
            (642, 37, 'Bungudu'),
            (643, 37, 'Gummi'),
            (644, 37, 'Gusau'),
            (645, 37, 'Kaura'),
            (646, 37, 'Maradun'),
            (647, 37, 'Maru'),
            (648, 37, 'Namoda'),
            (649, 37, 'Shinkafi'),
            (650, 37, 'Talata Mafara'),
            (651, 37, 'Tsafe'),
            (652, 37, 'Zurmi'),
            (653, 15, 'Abaji'),
            (654, 15, 'Abuja Municipal'),
            (655, 15, 'Bwari'),
            (656, 15, 'Gwagwalada'),
            (657, 15, 'Kuje'),
            (658, 15, 'Kwali'),
            (659, 4, 'Aguata'),
            (660, 4, 'Anambra East'),
            (661, 4, 'Anambra West'),
            (662, 4, 'Anaocha'),
            (663, 4, 'Awka North'),
            (664, 4, 'Awka South'),
            (665, 4, 'Ayamelum'),
            (666, 4, 'Dunukofia'),
            (667, 4, 'Ekwusigo'),
            (668, 4, 'Idemili North'),
            (669, 4, 'Idemili south'),
            (670, 4, 'Ihiala'),
            (671, 4, 'Njikoka'),
            (672, 4, 'Nnewi North'),
            (673, 4, 'Nnewi South'),
            (674, 4, 'Ogbaru'),
            (675, 4, 'Onitsha North'),
            (676, 4, 'Onitsha South'),
            (677, 4, 'Orumba North'),
            (678, 4, 'Orumba South'),
            (679, 4, 'Oyi'),
            (680, 5, 'Alkaleri'),
            (681, 5, 'Bauchi'),
            (682, 5, 'Bogoro'),
            (683, 5, 'Damban'),
            (684, 5, 'Darazo'),
            (685, 5, 'Dass'),
            (686, 5, 'Ganjuwa'),
            (687, 5, 'Giade'),
            (688, 5, 'Itas/Gadau'),
            (689, 5, 'Jama\'are'),
            (690, 5, 'Katagum'),
            (691, 5, 'Kirfi'),
            (692, 5, 'Misau'),
            (693, 5, 'Ningi'),
            (694, 5, 'Shira'),
            (695, 5, 'Tafawa-Balewa'),
            (696, 5, 'Toro'),
            (697, 5, 'Warji'),
            (698, 5, 'Zaki'),
            (699, 6, 'Brass'),
            (700, 6, 'Ekeremor'),
            (701, 6, 'Kolokuma/Opokuma'),
            (702, 6, 'Nembe'),
            (703, 6, 'Ogbia'),
            (704, 6, 'Sagbama'),
            (705, 6, 'Southern Jaw'),
            (706, 6, 'Yenegoa'),
            (707, 7, 'Ado'),
            (708, 7, 'Agatu'),
            (709, 7, 'Apa'),
            (710, 7, 'Buruku'),
            (711, 7, 'Gboko'),
            (712, 7, 'Guma'),
            (713, 7, 'Gwer East'),
            (714, 7, 'Gwer West'),
            (715, 7, 'Katsina-Ala'),
            (716, 7, 'Konshisha'),
            (717, 7, 'Kwande'),
            (718, 7, 'Logo'),
            (719, 7, 'Makurdi'),
            (720, 7, 'Obi'),
            (721, 7, 'Ogbadibo'),
            (722, 7, 'Ohimini'),
            (723, 7, 'Oju'),
            (724, 7, 'Okpokwu'),
            (725, 7, 'Oturkpo'),
            (726, 7, 'Tarka'),
            (727, 7, 'Ukum'),
            (728, 7, 'Ushongo'),
            (729, 7, 'Vandeikya'),
            (730, 8, 'Abadam'),
            (731, 8, 'Askira/Uba'),
            (732, 8, 'Bama'),
            (733, 8, 'Bayo'),
            (734, 8, 'Biu'),
            (735, 8, 'Chibok'),
            (736, 8, 'Damboa'),
            (737, 8, 'Dikwa'),
            (738, 8, 'Gubio'),
            (739, 8, 'Guzamala'),
            (740, 8, 'Gwoza'),
            (741, 8, 'Hawul'),
            (742, 8, 'Jere'),
            (743, 8, 'Kaga'),
            (744, 8, 'Kala/Balge'),
            (745, 8, 'Konduga'),
            (746, 8, 'Kukawa'),
            (747, 8, 'Kwaya Kusar'),
            (748, 8, 'Mafa'),
            (749, 8, 'Magumeri'),
            (750, 8, 'Maiduguri'),
            (751, 8, 'Marte'),
            (752, 8, 'Mobbar'),
            (753, 8, 'Monguno'),
            (754, 8, 'Ngala'),
            (755, 8, 'Nganzai'),
            (756, 8, 'Shani'),
            (757, 9, 'Abi'),
            (758, 9, 'Akamkpa'),
            (759, 9, 'Akpabuyo'),
            (760, 9, 'Bakassi'),
            (761, 9, 'Bekwara'),
            (762, 9, 'Biase'),
            (763, 9, 'Boki'),
            (764, 9, 'Calabar Municipality'),
            (765, 9, 'Calabar South'),
            (766, 9, 'Etung'),
            (767, 9, 'Ikom'),
            (768, 9, 'Obanliku'),
            (769, 9, 'Obubra'),
            (770, 9, 'Obudu'),
            (771, 9, 'Odukpani'),
            (772, 9, 'Ogoja'),
            (773, 9, 'Yala'),
            (774, 9, 'Yarkur')
        ");
    }
}
