<?php

$r = Restaurant::o(26);

$perm = ['your-card-number-is-incorrect.','your-card-has-expired.','your-card-was-declined.--you-can-call-your-bank-for-details.','your-card-does-not-support-this-type-of-purchase.','there-is-no-token-with-id-card_15ibczjmxbwntq4rymhxc1vk.','there-is-no-token-with-id-card_15ic6ljmxbwntq4r0eyiigvg.','there-is-no-token-with-id-card_15ic4qjmxbwntq4r2hk2luge.','there-is-no-token-with-id-card_15ic8jjmxbwntq4ryotptpqx.'];
$perm[] = 'your-card-was-declined.';
$retry = ['no-card-meta'];

$fails = json_decode($r->notes_owner, true);
//$fails = json_decode('{"no-card-meta":[113462,113459,113318,113027,112973,112856,112721,112705,112516,112474,112471,112468,112420,112108,112075,112015,111880,111748,111724,111454,111406,111361,111055,111037,111004,110944,110893,110854,110806,110710,110575,110533,110461,110368,110323,110308,110287,110185,110170,110137,110026,110023,109990,109849,109813,109768,109765,109561,109558,109471,109309,109300,109270,109246,109204,109186,109114,109021,108748,108646,108499,108100,107875,107848,107806,107785,107473,107452,107278,107242,107083,106963,106954,106579,106408,106375,106363,106171,106108,106105,105916,105829,105718,105670,105619,105571,105565,105481,105181,105091,105052,105040,104998,104980,104905,104716,104695,104689,104537,104429,104397,104335,104313,104297,104291,104231,104215,104005,103983,103971,103935,103919,103861,103833,103831,103809,103807,103787,103717,103649,103527,103507,103399,103315,103301,103133,102869,102845,102830,102764,102680,102635,102620,102302,102230,102170,102065,102044,102008,101936,101927,101882,101750,101618,101555,101549,101282,101141,101129,101102,101099,101081,101066,101063,101021,100979,100976,100934,100919,100760,100577,100562,100436,100412,100304,100298,100241,100202,100199,100133,100097,99986,99818,99734,99641,99626,99542,99419,99344,98885,98750,98717,98618,98594,98549,98528,98513,98429,98354,98291,98045,97868,97829,97784,97694,97667,97493,97175,96935,96785,96668,96593,96533,96284,96188,95990,95903,95894,95882,95744,95702,95687,95507,95420,95183,95117,95054,94553,94505,94466,94376,94307,94115,94067,93917,93731,93677,93671,93653,93614,93530,93278,92999,92996,92969,92876,92828,92798,92672,92396,92381,92357,92276,92135,92000,91805,91628,91571,91514,91385,91274,91271,91247,91064,90923,90899,90890,90683,90596,90542,90362,89894,89798,89768,89690,89597,89474,89300,89120,89018,88841,88628,88550,88448,88328,88289,88256,88238,88070,87983,87935,87869,87836,87749,87647,87512,87143,87125,86888,86867,86861,86756,86744,86504,86348,86345,86207,86183,86168,86090,85943,85736,85700,85613,85502,85427,85391,85376,85313,84962,84902,84890,84848,84764,84101,83438,83105,82748,82409,82352,82310,82148,82013,81923,81866,81839,81539,81401,80915,80564,80066,79412,78056,77819,77300,75470,74219,73958,72998,71718,71268,67718,61499,59237,59006,58217,57356,56642,54950,52280,51413,50870,49925,48951,48357,46338,46224,45381,44664,42669,42294,38880,38718,37986,36270,35607,34252,33637,33502,33277,32321,32213,31608,31469,31445,31371,31301,31119,30998,30312,30309,30286,29872,29535,29510,29493,29393,29311,29054,28948,28943,28849,28809,28763,28629,28620,28341,28337,28329,28286,28173,28112,27871,27557,27468,27342,27272,27138,26911,26837,26529,26489,26444,26225,26188,26159,25284,24916,24793,24735,24732,24462,24401,24214,23956,23716,23582,23531,23447,23398,23344,23288,23164,23129,23080,22943,22741,22303,22162,22153,22119,21983,21752,21681,21623,21359,21232,21167,21056,20689,20599,20573,20495,20479,20476,20377,20196,20173,20172,19960,19933,19836,19806,19606,19542,19444,19303,19301,19183,19165,18881,18715,18683,18485,18121,18030,17875,17874,17859,17703,17616,17449,17439,17220,17216,17054,17007,17000,16750,16565,16465,16427,16385,16335,16236,16210,16171,16152,16148,16040,16038,16036,16025,16021,15917,15852,15721,15682,15599,15558,15448,15395,15247,15240,15082,14661,14583,14300,14298,14231,14087,14082,14042,14025,13884,13862,13845,13744,13617,13519,13277,13269,13263,13241,13201,13149,13111,13103,13056,12991,12982,12938,12903,12899,12843,12832,12820,12802,12792,12791,12782,12775,12753,12752,12737,12713,12709,12698,12696,12679,12676,12674,12667,12654,12642,12621,12582,12581,12561,12528,12527,12526,12519,12487,12461,12454,12453,12443,12435,12423,12407,12390,12355,12351,12341,12336,12331,12319,12311,12292,12290,12271,12245,12243,12218,12208,12148,12141,12140,12120,12118,12113,12102,12098,12039,12029,11999,11990,11984,11977,11968,11946,11933,11911,11905,11872,11868,11839,11838,11833,11822,11782,11763,11760,11756,11713,11652,11646,11631,11583,11582,11571,11568,11529,11526,11501,11495,11494,11485,11473,11453,11443,11440,11434,11415,11406,11390,11374,11369,11280,11273,11262,11239,11230,11199,11189,11177,11160,11146,11137,11134,11070,11061,11055,11051,11048,10992,10986,10939,10936,10934,10906,10895,10893,10888,10843,10841,10813,10806,10790,10752,10721,10714,10684,10680,10656,10639,10621,10616,10586,10568,10561,10544,10536,10533,10532,10515,10513,10507,10503,10474,10471,10440,10417,10413,10409,10377,10376,10373,10372,10352,10344,10336,10324,10319,10253,10250,10245,10235,10233,10228,10174,10164,10162,10161,10139,10136,10129,10120,10115,10087,10084,10083,10041,10030,10012,10006,9995,9979,9958,9956,9942,9915,9912,9907,9893,9872,9853,9821,9807,9799,9746,9734,9725,9722,9697,9664,9660,9659,9648,9634,9612,9601,9593,9592,9587,9554,9531,9509,9507,9504,9502,9484,9475,9438,9422,9420,9417,9405,9400,9394,9389,9366,9361,9334,9260,9259,9243,9240,9209,9200,9197,9193,9189,9172,9171,9163,9162,9135,9127,9121,9120,9114,9104,9076,9073,9068,9067,9056,9055,9053,9035,9031,9028,9015,9003,8982,8975,8971,8959,8933,8928,8912,8888,8878,8873,8850,8837,8832,8824,8821,8820,8789,8773,8759,8716,8694,8671,8670,8664,8657,8646,8622,8613,8593,8577,8558,8538,8502,8471,8416,8408,8389,8350,8347,8319,8294,8288,8281,8278,8264,8247,8243,8224,8223,8200,8196,8193,8180,8169,8164,8142,8129,8122,8111,8107,8095,8093,8079,8063,8054,8046,8032,8028,8008,8005,8000,7999,7985,7963,7961,7943,7930,7929,7926,7920,7919,7865,7847,7837,7824,7794,7793,7774,7743,7740,7714,7713,7688,7668,7666,7662,7650,7648,7628,7597,7588,7587,7585,7563,7557,7539,7526,7520,7518,7517,7515,7507,7497,7485,7466,7458,7451,7445,7434,7422,7407,7392,7375,7372,7334,7329,7325,7314,7313,7309,7293,7281,7267,7246,7241,7215,7212,7208,7202,7201,7192,7188,7182,7176,7160,7159,7151,7148,7142,7141,7134,7124,7112,7106,7099,7098,7097,7083,7074,7072,7052,7037,7008,7003,7002,6998,6983,6970,6953,6937,6934,6920,6906,6898,6893,6891,6885,6874,6872,6863,6854,6851,6848,6841,6837,6833,6831,6823,6821,6811,6807,6796,6791,6782,6772,6755,6742,6738,6734,6707,6703,6692,6683,6679,6666,6664,6662,6655,6608,6589,6584,6580,6576,6536,6511,6500,6488,6485,6483,6481,6480,6476,6443,6435,6431,6429,6418,6414,6384,6381,6378,6367,6359,6358,6357,6335,6331,6312,6300,6299,6291,6272,6256,6249,6239,6235,6230,6229,6214,6211,6210,6201,6178,6175,6170,6166,6163,6162,6155,6152,6147,6131,6117,6115,6112,6110,6109,6099,6082,6080,6078,6071,6067,6060,6033,6030,6006,5999,5996,5991,5988,5983,5981,5978,5974,5971,5966,5963,5956,5947,5945,5937,5932,5892,5875,5868,5866,5862,5858,5854,5849,5847,5844,5842,5837,5825,5821,5813,5808,5799,5791,5783,5780,5777,5772,5766,5765,5764,5701,5697,5695,5676,5667,5663,5645,5638,5636,5634,5632,5616,5614,5612,5606,5598,5594,5592,5574,5554,5553,5548,5523,5516,5511,5480,5477,5451,5447,5430,5426,5418,5413,5412,5407,5402,5397,5394,5384,5381,5378,5374,5370,5365,5355,5340,5338,5332,5330,5324,5308,5301,5296,5274,5269,5265,5263,5259,5253,5252,5233,5232,5231,5219,5213,5190,5188,5181,5180,5150,5147,5136,5132,5130,5122,5113,5111,5103,5076,5064,5059,5051,5045,5026,5021,5019,5017,5011,5004,5000,4992,4985,4984,4978,4974,4966,4950,4946,4945,4925,4923,4917,4912,4894,4892,4881,4876,4866,4835,4832,4825,4823,4821,4805,4803,4758,4744,4743,4740,4739,4721,4714,4707,4692,4691,4672,4667,4650,4637,4633,4631,4619,4617,4611,4610,4609,4597,4585,4583,4569,4560,4553,4546,4538,4517,4499,4492,4484,4482,4474,4467,4463,4453,4448,4445,4443,4437,4435,4431,4430,4422,4416,4407,4399,4387,4376,4374,4370,4360,4359,4357,4356,4354,4344,4325,4315,4312,4309,4306,4290,4284,4283,4267,4259,4248,4244,4234,4223,4218,4215,4214,4207,4189,4187,4172,4163,4159,4158,4147,4133,4130,4120,4117,4114,4109,4106,4090,4087,4081,4075,4074,4066,4042,4033,4029,3984,3981,3949,3941,3934,3931,3919,3915,3909,3907,3906,3905,3902,3898,3894,3889,3882,3881,3874,3863,3856,3852,3848,3842,3832,3828,3827,3815,3814,3802,3797,3795,3789,3788,3778,3777,3772,3769,3766,3765,3764,3757,3751,3743,3739,3736,3731,3730,3726,3725,3723,3722,3715,3712,3711,3706,3704,3703,3702,3699,3694,3687,3682,3675,3674,3669,3665,3664,3663,3660,3658,3657,3650,3647,3640,3637,3636,3635,3632,3631,3626,3624,3622,3616,3605,3599,3588,3583,3581,3567,3565,3559,3558,3553,3552,3550,3547,3544,3541,3537,3536,3535,3530,3528,3524,3521,3519,3514,3501,3494,3491,3481,3474,3471,3469,3465,3457,3455,3453,3451,3450,3446,3444,3436,3428,3427,3426,3421,3419,3417,3415,3411,3407,3405,3404,3401,3396,3395,3394,3392,3388,3386,3381,3373,3371,3369,3368,3367,3362,3361,3357,3352,3350,3348,3346,3343,3341,3340,3328,3325,3323,3319,3318,3313,3311,3310,3308,3304,3301,3294,3293,3292,3286,3284,3283,3280,3279,3276,3268,3267,3263,3262,3258,3257,3252,3239,3236,3233,3232,3226,3225,3224,3219,3216,3214,3206,3204,3202,3201,3199,3197,3192,3188,3183,3182,3181,3180,3179,3177,3173,3171,3169,3166,3165,3164,3154,3143,3131,3119,3115,3114,3112,3101,3096,3095,3090,3089,3088,3082,3080,3077,3076,3072,3070,3068,3064,3060,3058,3056,3051,3049,3048,3047,3034,3032,3031,3019,3017,3016,3014,3013,3006,2993,2987,2985,2984,2980,2976,2974,2972,2970,2961,2960,2955,2954,2949,2948,2947,2946,2942,2939,2936,2934,2930,2928,2927,2926,2924,2921,2916,2915,2914,2910,2901,2898,2896,2894,2893,2891,2890,2888,2887,2877,2873,2869,2864,2861,2859,2854,2850,2842,2834,2831,2829,2828,2823,2819,2815,2813,2810,2809,2803,2798,2793,2789,2786,2785,2781,2775,2770,2768,2767,2765,2761,2757,2751,2750,2749,2748,2747,2745,2744,2741,2740,2738,2735,2734,2733,2732,2727,2726,2723,2720,2717,2710,2707,2703,2700,2698,2687,2681,2678,2677,2673,2664,2660,2658,2651,2648,2647,2644,2640,2632,2621,2619,2618,2617,2616,2612,2608,2607,2605,2604,2603,2600,2599,2597,2595,2593,2592,2587,2586,2583,2581,2577,2576,2572,2569,2562,2561,2552,2551,2549,2545,2544,2543,2541,2535,2533,2532,2531,2529,2527,2526,2519,2517,2504,2492,2485,2484,2483,2482,2474,2472,2468,2464,2456,2455,2453,2450,2449,2447,2446,2443,2442,2441,2438,2437,2432,2426,2422,2421,2415,2414,2408,2407,2404,2399,2398,2397,2394,2393,2392,2390,2389,2387,2386,2385,2382,2381,2380,2379,2375,2372,2370,2363,2362,2360,2358,2355,2353,2350,2349,2348,2345,2337,2335,2333,2331,2330,2322,2321,2320,2318,2314,2308,2303,2301,2300,2299,2295,2293,2291,2288,2287,2286,2279,2278,2276,2271,2270,2265,2262,2259,2257,2252,2250,2246,2245,2244,2239,2233,2232,2228,2225,2224,2222,2216,2215,2211,2210,2207,2204,2202,2199,2198,2197,2192,2189,2187,2181,2177,2175,2166,2165,2163,2160,2155,2149,2148,2147,2142,2141,2136,2130,2128,2125,2124,2123,2120,2113,2111,2109,2106,2104,2099,2098,2097,2096,2091,2087,2086,2084,2082,2076,2074,2073,2071,2069,2068,2066,2065,2061,2060,2055,2052,2051,2049,2043,2042,2038,2037,2034,2033,2030,2029,2027,2025,2022,2019,2017,2013,2012,2010,2008,2002,1999,1998,1997,1995,1989,1988,1986,1984,1983,1981,1980,1967,1964,1963,1962,1960,1959,1955,1949,1945,1943,1942,1939,1937,1935,1932,1929,1927,1916,1914,1913,1908,1900,1898,1897,1895,1892,1890,1889,1888,1883,1876,1875,1868,1865,1861,1855,1851,1850,1848,1847,1846,1844,1839,1837,1836,1827,1820,1818,1816,1814,1805,1804,1802,1799,1798,1795,1794,1792,1790,1787,1782,1775,1774,1767,1764,1763,1759,1758,1757,1754,1752,1750,1747,1743,1737,1736,1733,1732,1730,1729,1727,1726,1725,1724,1721,1720,1717,1714,1710,1709,1708,1705,1703,1701,1699,1696,1694,1693,1689,1688,1684,1682,1679,1677,1676,1675,1672,1663,1662,1659,1654,1653,1651,1650,1642,1637,1636,1635,1634,1633,1630,1625,1624,1617,1615,1611,1609,1603,1600,1599,1597,1595,1594,1589,1587,1579,1575,1569,1565,1563,1558,1554,1550,1549,1548,1545,1541,1538,1533,1528,1527,1525,1524,1522,1520,1519,1517,1512,1511,1501,1500,1497,1495,1494,1487,1482,1477,1473,1470,1463,1460,1459,1455,1453,1452,1448,1446,1437,1435,1433,1430,1428,1423,1420,1418,1417,1413,1412,1411,1409,1407,1405,1404,1402,1396,1395,1388,1382,1377,1376,1372,1366,1363,1358,1357,1350,1349,1343,1341,1340,1339,1338,1334,1329,1327,1325,1321,1313,1306,1301,1300,1299,1298,1297,1290,1288,1286,1270,1266,1264,1263,1262,1260,1259,1255,1253,1252,1251,1250,1247,1246,1245,1242,1240,1233,1232,1229,1227,1225,1224,1222,1216,1215,1211,1210,1206,1202,1198,1197,1195,1194,1193,1185,1182,1180,1179,1174,1173,1170,1165,1158,1156,1151,1150,1147,1144,1141,1138,1137,1134,1128,1124,1123,1116,1113,1112,1110,1109,1101,1100,1099,1098,1096,1094,1089,1082,1081,1079,1077,1073,1072,1071,1070,1065,1062,1059,1055,1054,1053,1052,1051,1046,1040,1037,1033,1031,1029,1022,1019,1009,1008,1000,999,997,996,987,980,978,975,973,970,969,967,962,955,952,949,947,945,944,942,941,937,936,932,930,929,927,926,920,919,912,910,908,907,906,904,902,899,897,896,895,892,888,885,881,879,878,877,876,872,871,869,868,866,861,860,851,849,846,843,841,825,818,817,812,808,806,804,802,801,795,794,793,788,785,784,782,777,774,773,771,767,766,764,761,760,757,755,754,752,751,750,747,746,743,742,735,733,731,729,728,725,724,721,719,718,716,715,714,708,707,705,701,700,695,692,687,684,682,681,680,679,677,670,654,653,652,651,650,649,646,645,640,637,636,631,630,629,628,627,622,620,616,614,613,612,611,609,607,603,602,601,597,595,594,587,586,584,582,578,576,570,569,567,566,563,562,560,559,558,557,556,554,549,548,547,545,544,543,542,541,540,536,535,534,531,529,527,526,524,523,521,520,519,518,517,514,513,510,507,505,504,503,500,497,496,495,494,492,485,484,483,481,477,475,472,469,468,467,465,464,462,458,456,455,452,451,450,448,447,445,444,443,440,439,437,435,433,431,427,421,419,418,416,415,413,412,408,405,404,403,402,401,400,399,398,395,392,391,390,389,388,385,384,381,380,374,372,371,366,365,364,361,360,358,357,350,349,348,345,341,340,337,335,334,326,324,323,318,315,314,313,312,309,307,306,305,304,299,298,296,295,294,291,290,287,284,282,281,280,279,278,277,274,272,270,268,266,265,261,258,257,255,254,246,241,240,239,238,237,236,235,234,233,232],"your-card-was-declined.":[113198,112159,111568,111313,110149,109687,109600,108553,108004,107878,107239,106396,106222,106150,105721,105346,105094,104947,104461,104225,104125,103701,103349,103109,102776,102632,102113,101567,101393,101348,101105,100868,100559,100526,99875,99815,99539,99512,99377,99077,99029,98636,98510,98288,98264,98258,97805,97343,97316,97271,97202,96713,96629,96587,96407,96038,96032,95153,95090,94082,94061,94001,93620,93512,93089,92990,92816,92348,92255,92045,91604,91379,91373,91091,90929,90707,90593,90023,89711,89663,89309,89012,88655,88382,88367,88295,88052,87842,87593,87281,87221,86993,86909,86738,86462,86315,86177,86045,86006,85814,85715,85373,85370,84995,84929,84884,84296,84293,83864,83822,83099,83051,83021,83012,82889,82868,82631,82514,81626,81596,81536,81485,81446,81239,81098,80813,80768,80684,80663,80420,80378,80135,79994,79814,79595,79523,79463,79226,79043,78881,78719,78353,77693,77639,77615,77414,77408,77183,77123,77066,76580,76574,76562,76436,76301,76172,76028,75947,75773,75287,75284,75251,74933,74741,74540,74513,74381,74348,74297,73943,73844,73763,73424,73379,73301,73057,73022,72989,72899,72502,72216,72201,71985,71847,71796,71694,71448,70899,70761,70419,70110,70002,69612,69411,69228,69216,68940,68657,68618,68594,68576,68492,68273,68156,67997,67850,67616,67541,67364,67193,67088,67067,66911,66830,66800,66722,66593,66587,66287,66086,66068,65960,65702,65672,65477,65369,65354,65258,65120,64964,64766,64574,64460,64256,63959,63842,63782,63770,63467,63112,63082,62932,62920,62914,62854,62698,62610,62594,62476,62392,62312,62234,62220,61932,61930,61896,61872,61860,61824,61784,61768,61493,61454,61391,61376,61343,61331,61292,61256,61169,61157,61082,60830,60770,60689,60497,60428,60140,60065,59927,59870,59810,59774,59693,59669,59612,59573,59558,58976,58931,58886,58868,58841,58541,58466,58022,57815,57782,57581,57449,57275,56993,56876,56837,56810,56774,56669,56624,56615,56573,56117,56021,55937,55904,55877,55862,55763,55685,55676,55454,55340,55262,55109,54875,54869,54719,54674,54545,54518,54503,54428,54362,54341,54239,53987,53969,53846,53753,53714,53684,53648,53570,53543,53372,53357,53264,52799,52712,52637,52610,52583,52574,52529,52217,52007,51908,51719,51704,51698,51467,51449,51419,51389,51305,51263,51215,51173,51161,51158,50933,50618,50411,50075,49949,49868,49649,49586,49499,49355,49331,49250,49245,48954,48783,48651,48633,48573,48537,48531,48411,48381,48363,48360,48354,48348,48288,48270,48201,47553,47388,47370,47250,47232,47226,47202,47193,47160,47043,46968,46917,46875,46710,46653,46647,46575,46320,46311,46206,46041,46020,45960,45678,45621,45516,45486,45459,45345,45279,45246,45210,45117,45048,44916,44808,44655,44259,44136,44043,44022,44004,43920,43662,43653,43641,43623,43386,43146,42888,42816,42699,42618,42606,42546,42489,42384,42357,42270,42147,41853,41751,41676,41349,41289,41256,40578,40308,40284,40197,40188,39753,39600,39561,39489,39462,39432,39009,38514,38250,38049,38040,38034,37887,37851,37833,37650,37485,37392,37281,36921,36900,36465,36456,36183,35781,35739,35688,35595,35490,35175,35136,35127,34749,34734,34425,34231,34150,34105,34099,33991,33736,33535,33514,33511,33475,33382,33334,33157,33091,33031,32996,32878,32849,32828,32779,32761,32743,32702,32683,32629,32613,32609,32595,32594,32592,32549,32530,32512,32469,32465,32448,32337,32311,32269,32238,32235,32225,32110,32096,32015,31929,31923,31833,31794,31688,31647,31592,31557,31476,31451,31435,31430,31394,31382,31381,31376,31330,31327,31282,31240,31200,31194,31157,31140,31095,30997,30951,30884,30880,30860,30853,30766,30762,30760,30729,30718,30686,30634,30601,30573,30451,30413,30368,30305,30156,30091,30073,30031,30002,29971,29960,29937,29925,29901,29831,29804,29715,29713,29653,29599,29575,29572,29569,29559,29545,29508,29502,29498,29497,29495,29474,29464,29457,29451,29351,29350,29339,29318,29239,29217,29192,29159,29085,29064,29061,29058,29049,29030,28996,28989,28988,28949,28938,28914,28888,28845,28815,28782,28746,28711,28661,28645,28612,28607,28605,28546,28540,28530,28529,28486,28477,28476,28442,28437,28418,28355,28353,28335,28299,28273,28267,28233,28230,28219,28205,28176,28170,28143,28125,28118,28094,28088,28085,28069,28066,28040,27995,27983,27941,27936,27884,27841,27840,27835,27764,27756,27735,27730,27716,27680,27593,27587,27535,27516,27448,27445,27442,27400,27385,27384,27357,27337,27324,27310,27309,27306,27288,27286,27274,27253,27173,27122,27118,27098,27094,27090,27027,27003,26992,26989,26959,26940,26910,26895,26878,26853,26810,26796,26795,26773,26746,26716,26701,26699,26692,26652,26577,26564,26541,26481,26478,26388,26378,26370,26369,26313,26300,26298,26237,26219,26172,26139,26085,26062,26059,26058,26049,26032,26031,26021,25948,25932,25898,25870,25863,25829,25821,25789,25776,25749,25732,25717,25713,25697,25673,25621,25352,25160,25149,25145,25135,25127,25103,25083,25072,25065,25031,25006,24989,24941,24835,24794,24778,24673,24653,24633,24623,24613,24594,24592,24591,24585,24579,24542,24515,24496,24476,24473,24467,24420,24353,24351,24343,24319,24295,24276,24258,24257,24255,24241,24230,24199,24186,24176,24174,24128,24091,24073,24042,24010,23993,23982,23937,23933,23883,23872,23869,23808,23807,23774,23736,23730,23659,23608,23597,23581,23565,23520,23510,23505,23478,23476,23470,23462,23456,23452,23435,23414,23413,23388,23353,23295,23283,23276,23268,23263,23222,23219,23194,23193,23191,23176,23170,23148,23147,23126,23116,23107,23078,23025,23022,22940,22910,22898,22890,22860,22816,22797,22793,22788,22787,22783,22775,22746,22709,22701,22696,22681,22629,22618,22612,22596,22574,22564,22561,22559,22553,22546,22531,22472,22425,22424,22406,22395,22386,22378,22374,22291,22267,22259,22207,22206,22193,22182,22107,22083,22080,22070,22052,22031,22003,22002,21993,21991,21968,21962,21934,21892,21817,21812,21803,21757,21751,21743,21736,21735,21727,21715,21698,21686,21685,21684,21625,21612,21587,21562,21560,21553,21538,21536,21525,21447,21437,21419,21400,21398,21372,21328,21324,21313,21278,21247,21046,20432,20422,20368,20288,20270,20268,20254,20237,20210,20207,20198,20176,20171,20170,20148,20137,20132,20130,20127,20100,20085,20064,19990,19976,19970,19958,19926,19886,19879,19869,19859,19846,19818,19812,19810,19796,19771,19734,19733,19719,19696,19687,19683,19615,19593,19545,19541,19534,19532,19423,19390,19331,19322,19305,19304,19278,19250,19247,19194,19191,19173,19150,19137,19093,19083,19000,18966,18951,18925,18855,18837,18824,18818,18795,18790,18788,18725,18719,18706,18668,18644,18641,18637,18633,18582,18576,18425,18401,18334,18331,18319,18314,18312,18292,18271,18252,18246,18242,18224,18203,18189,18152,18122,18086,18082,18063,18062,18052,18045,18042,17919,17899,17884,17878,17861,17842,17817,17801,17790,17683,17675,17649,17645,17636,17629,17620,17538,17529,17524,17505,17504,17498,17481,17475,17435,17424,17378,17376,17367,17365,17355,17343,17337,17330,17304,17300,17288,17274,17241,17238,17237,17232,17182,17151,17124,17098,17086,17083,17059,17037,16832,16714,16688,16507,16504,16463,16327,16140,15978,15812,15600,15441,15137,15080,15048,15042,14767,14283,14226,13234,12931,11662,9460,9167],"your-card-number-is-incorrect.":[112045,110848,109978,109414,109303,108406,107998,107863,107845,107656,107641,107029,106441,106402,106198,105697,105298,105277,105208,105010,104575,103759,103603,103345,103313,103214,102059,101600,101402,101372,100895,100121,100082,99848,99611,99098,98882,98408,97400,97142,97037,96845,96734,96722,96707,96665,96650,96413,96179,96107,95138,95009,95006,94346,94013,93347,93323,93254,93209,92207,92075,91853,91739,90488,89846,89693,89240,88829,88664,88658,88538,88139,88013,87929,87887,87872,87476,87305,87179,87155,87026,86945,86732,86336,86060,85955,85787,85784,85727,85709,85631,85094,84686,84680,84530,84506,84500,83981,83420,83225,83153,83126,82901,82634,82565,82508,82493,82121,82070,81617,81323,81281,80600,80216,80072,80039,79841,79829,79625,79562,79559,79436,79421,79280,79241,79217,79121,78998,78983,78410,78098,77957,77558,77261,76571,76412,76346,76157,75848,75830,75647,75590,75314,75140,75122,74999,74861,74525,74468,74450,73994,73847,73403,72637,72631,72625,72571,72532,72449,72371,72297,72198,72039,71931,71724,71541,70989,70983,70947,70770,70764,70617,70566,70437,70416,70113,69933,69651,69516,69159,68979,68315,68225,68207,68201,68153,68093,68036,68033,67919,67916,67889,67712,67556,67514,67418,67277,67184,67106,67010,66854,66827,66530,66479,66419,66038,66017,65969,65777,65711,65342,65264,65156,64919,64751,64562,64529,64202,64112,64103,64082,63974,63923,63878,63548,63494,63428,63404,63368,63290,62894,62702,62688,62644,62484,62304,62174,62050,61970,61890,61866,61864,61840,61828,61782,61774,61720,61710,61670,61283,61268,61049,60902,60731,60503,60347,60269,60260,60083,59726,59717,59690,59285,58991,58967,58964,58928,58814,58778,58739,58706,58400,58307,58301,58157,58076,57716,57479,57080,56978,56819,56777,56354,56141,56063,56030,55961,55475,55466,55418,55259,55100,55046,55022,54947,54935,54893,54872,54740,54731,54704,54650,54635,54596,54485,54260,53762,53594,53399,53231,53180,52874,52802,52787,52652,52643,52589,52568,52523,52478,52412,52349,51926,51821,51815,51692,51230,51131,51104,50708,50699,50675,50663,50561,50399,50213,50144,50138,50057,49658,49652,49622,49328,49173,49152,49020,48723,48705,48564,48486,48453,48423,48219,47751,47715,47661,47484,47379,47256,46824,46740,46662,46509,46503,46455,45924,45864,45672,45420,45390,45348,45204,45123,45075,44925,44904,44535,44463,44283,44265,44208,43866,43236,43140,42975,42810,42795,42717,42711,42621,42588,42492,42480,42369,42174,41850,41793,41601,41520,41322,40683,40596,40569,40500,40335,40272,40182,40080,39723,39684,39621,39606,39597,39318,38106,38088,37989,37965,37818,37806,37725,37617,36942,36789,36720,36699,36672,36459,36204,35958,35631,35091,34887,34740,34656,34644,34503,34315,34306,34117,34111,34108,33886,33778,33640,33499,33493,33385,33328,33259,33214,33175,33115,32879,32871,32847,32842,32800,32792,32791,32739,32732,32727,32710,32667,32641,32630,32586,32564,32561,32520,32511,32475,32470,32453,32429,32391,32383,32157,32086,32079,32072,31924,31919,31871,31812,31687,31682,31651,31626,31598,31578,31517,31506,31502,31461,31452,31374,31364,31356,31347,31338,31335,31241,31233,31174,31094,31054,31038,31037,31033,31025,30995,30973,30916,30911,30886,30863,30859,30837,30833,30822,30813,30748,30700,30692,30636,30613,30606,30560,30535,30534,30473,30462,30456,30455,30453,30422,30412,30398,30322,30317,30291,30269,30233,30204,30100,30099,30098,30081,30071,30059,30012,30005,30001,29980,29858,29618,29544,29543,29540,29529,29504,29482,29452,29435,29426,29424,29412,29392,29387,29386,29383,29382,29353,29344,29313,29295,29285,29219,29198,29193,29174,29154,29123,29088,29077,29051,29019,29017,28851,28846,28838,28812,28807,28785,28765,28730,28727,28717,28670,28650,28649,28598,28579,28575,28574,28528,28517,28468,28452,28441,28438,28433,28415,28392,28231,28208,28199,28192,28177,28161,28158,28155,28128,28103,28067,28057,28052,28023,27979,27852,27801,27794,27707,27703,27697,27624,27586,27584,27574,27525,27503,27499,27497,27486,27482,27369,27366,27365,27361,27348,27275,27191,27187,27143,27140,27139,27123,27097,27065,27052,27050,27041,26939,26929,26923,26877,26869,26855,26849,26836,26780,26762,26761,26749,26741,26728,26722,26690,26675,26634,26621,26619,26604,26600,26578,26562,26555,26527,26507,26505,26479,26467,26428,26421,26413,26392,26326,26323,26320,26303,26302,26285,26278,26273,26198,26168,26126,26101,26087,26070,26033,26010,25994,25992,25990,25974,25971,25947,25943,25917,25907,25853,25832,25748,25724,25719,25688,25674,25489,25488,25376,25298,25275,25239,25210,25190,25179,25164,25158,25140,25098,25094,25081,25028,25027,25016,25014,25008,25005,24975,24969,24967,24921,24913,24912,24908,24907,24897,24836,24831,24828,24807,24781,24759,24679,24678,24675,24667,24657,24643,24546,24494,24474,24468,24441,24431,24430,24417,24407,24324,24322,24305,24263,24194,24148,24121,24118,24117,24111,24098,24072,24071,24059,24047,24021,24006,24002,23974,23957,23847,23838,23827,23798,23784,23781,23770,23740,23725,23719,23670,23623,23622,23614,23611,23606,23556,23533,23497,23472,23453,23441,23406,23386,23367,23351,23319,23238,23231,23224,23217,23216,23206,23199,23162,23154,23146,23140,23132,23128,23098,23063,23050,23020,22982,22973,22959,22941,22938,22893,22875,22863,22781,22778,22767,22761,22758,22748,22744,22737,22727,22711,22692,22634,22633,22627,22626,22624,22602,22593,22571,22503,22474,22467,22460,22449,22448,22441,22432,22426,22391,22388,22369,22363,22356,22332,22304,22274,22263,22255,22219,22216,22172,22161,22157,22066,22049,22041,22040,22015,22012,21999,21996,21992,21978,21927,21870,21865,21849,21837,21822,21782,21778,21766,21740,21716,21704,21680,21666,21602,21595,21551,21543,21512,21484,21481,21463,21445,21431,21425,21416,21383,21379,21377,21374,21321,21312,21282,21246,21234,21208,21194,21175,21160,21137,21126,21125,20369,20344,20199,20190,20180,20167,20164,20135,20120,20107,20094,20089,20034,20033,20028,20016,19996,19986,19967,19964,19935,19928,19922,19890,19885,19871,19847,19841,19839,19795,19781,19779,19758,19756,19754,19735,19704,19688,19608,19594,19590,19577,19576,19558,19547,19511,19498,19466,19449,19448,19445,19404,19402,19397,19367,19359,19339,19332,19308,19300,19268,19266,19263,19253,19239,19209,19161,19152,19141,19129,19115,19114,19102,19095,19077,19073,19069,19062,19047,19044,19037,19027,18992,18965,18950,18946,18945,18921,18920,18917,18910,18904,18894,18889,18885,18850,18835,18827,18825,18815,18762,18745,18741,18677,18624,18613,18611,18562,18549,18501,18461,18448,18443,18396,18390,18377,18372,18368,18364,18361,18329,18315,18276,18241,18222,18204,18202,18185,18163,18158,18139,18132,18116,18112,18111,18087,18083,18077,18069,18064,18048,18038,18037,18023,18018,18011,17990,17985,17984,17957,17953,17925,17918,17917,17895,17891,17857,17851,17838,17830,17825,17816,17814,17774,17771,17761,17759,17680,17647,17632,17625,17604,17561,17543,17542,17536,17533,17532,17519,17515,17514,17471,17452,17444,17421,17420,17411,17392,17391,17370,17360,17345,17316,17315,17314,17312,17309,17308,17305,17264,17246,17242,17236,17225,17223,17218,17193,17183,17177,17164,17157,17148,17116,17107,17093,16871,16357,15907,15711,15678,15667,15482,15368,15279,15249,15187,14768,14761,14735,14717,14599,14485,14461,14447,14418,13943,13696,13527,12960,10801],"your-card-does-not-support-this-type-of-purchase.":[108676,96815,87029,62428,30958,25934,23842,23490,21762,19941,18962,18956],"your-card-has-expired.":[100346,97592,93029,89177,88124,82865,82343,80231,76532,76133,70581,66740,65186,64238,64001,62608,61430,60938,50537,49221,46293,46005,44073,42645,41640,41538,39063,38028,37788,35895,34626,34243,32688,32421,32150,31617,30808,28300,28281,28130,28098,28037,27809,27695,27667,27570,27250,27226,27089,26798,26715,26550,26406,25174,25053,24945,24909,23666,23633,23548,23208,23002,22998,22664,22243,21826,21382,21366,19863,19787,18997,18727,18411,18114,18078,17889,17248,17074],"your-card-was-declined.--you-can-call-your-bank-for-details.":[98195,80696],"an-unknown-error-occurred":[21255,21222,21130,21111,21106,21076,21036,21027,21024,21018,20992,20989,20982,20970,20938,20935,20920,20912,20911,20910,20896,20876,20863,20852,20851,20843,20831,20829,20817,20806,20789,20779,20765,20758,20752,20742,20738,20709,20706,20702,20691,20675,20665,20658,20651,20644,20641,20637,20636,20633,20632,20625,20611,20605,20594,20592,20572,20569,20554,20539,20537,20533,20531,20529,20528,20527,20520,20511,20510,20494,20482,20478,20474,20468,20451,20437,20414,20402,20399,20375,20365,20363,20354,20325,20311,20306,20300,20285,20282,20249,20248,20217,20204,20010,19997,19100,19067,18981,18833],"there-is-no-token-with-id-card_15ibczjmxbwntq4rymhxc1vk.":[15216],"there-is-no-token-with-id-card_15ic6ljmxbwntq4r0eyiigvg.":[9583],"there-is-no-token-with-id-card_15ic4qjmxbwntq4r2hk2luge.":[8017],"there-is-no-token-with-id-card_15ic8jjmxbwntq4ryotptpqx.":[7531]}', true);


/*
foreach ($perm as $p) {
	foreach ($fails[$p] as $u) {
		$q .= ' and `user`.id_user != '.$u.' ';
	}
}
*/
foreach ($fails as $type => $d) {
	foreach ($d as $u) {
		$q .= ' and `user`.id_user != '.$u.' ';
	}
}
					 
$query = '
	select `user`.* from user_payment_type p
	left join `user` on `user`.id_user=p.id_user
	left join `order` on `order`.id_user=`user`.id_user
	where p.balanced_id is not null
	and p.stripe_id is null
	and `user`.name not like "%test%"
	and `order`.date > date_sub(now(), interval 6 month)
	and p.balanced_id like "CC%"
	and p.active = true
	'.$q.'
	group by user.id_user
	order by `user`.id_user desc
	limit '.($_REQUEST['l'] ? $_REQUEST['l'] : 200).'
';


$p = Crunchbutton_User::q($query);

foreach ($p as $user) {
	$status = $user->tempConvertBalancedToStripe();
	if ($status !== true) {
		if (!$fails[$status]) {
			$fails[$status] = [];
		}
		$fails[$status][] = $user->id_user;
	}
}

$r->notes_owner = json_encode($fails);
$r->save();


echo "\n\nALL DONE";

if ($_REQUEST['r']) {
	echo '<script>setTimeout(function(){window.location=window.location},10000);</script>';
}
