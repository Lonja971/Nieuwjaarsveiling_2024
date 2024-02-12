<!DOCTYPE html>
<html lang="en">
<head>
	<title>WomT Veiling 2024</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/base.css">
	<link rel="stylesheet" type="text/css" href="css/auction.css">
	<link rel="stylesheet" type="text/css" href="css/bonusCodes.css">
	<meta name="viewport" content="width=device-width,initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<meta name="format-detection" content="telephone=no">
	<link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@400;500;600;700;800;900&display=swap"
		rel="stylesheet">
</head>
<body id="body" class="body">
	<div class="wrapper">
		<?php
			require_once 'include/db.php';

			// Виконати запит до бази даних, щоб отримати вміст шапки
			$query = "SELECT content FROM components WHERE name = 'header'";
			$result = mysqli_query($mysqli, $query);

			if ($result) {
				// Перевірка наявності результатів
				if (mysqli_num_rows($result) > 0) {
					// Отримання вмісту шапки з результату запиту
					$row = mysqli_fetch_assoc($result);
					$header_content = $row['content'];

					// Відображення вмісту шапки на сайті
					echo $header_content;
				} else {
					echo "Шапка не знайдена";
				}
			} else {
				echo "Помилка запиту: " . mysqli_error($mysqli);
			}
		?>
		<header class="header">
			<div class="header__container _container">
				<div id="text" class="header__text">
					<img class="header__text1" id="text1" src="img/background/text1_1.png" alt="">
					<img class="header__text2" id="text2" src="img/background/text1_2.png" alt="">
				</div>
			</div>
		</header>
		<div class="auction">
			<div class="auction__container _container">
				<div class="auction__wave auction__first">
					<div class="auction__timer-box">
						<div class="auction__timer-wave">De eerste golf</div>
						<div id="timerMaintext1" class="auction__timer-maintext noneText">
							<div class="timer__hours">
								<div id="hour1" class="timer__hours-time"></div>
								<p class="timer__hours-text">uur</p>
							</div>
							<div class="auction__2_tochki">:</div>
							<div class="timer__hours">
								<div id="minute1" class="timer__hours-time"></div>
								<p class="timer__hours-text">min</p>
							</div>
							<div class="auction__2_tochki">:</div>
							<div class="timer__hours">
								<div id="second1" class="timer__hours-time"></div>
								<p class="timer__hours-text">sec</p>
							</div>
							<p id="firstWaveMain" class="auction__timer-NoText">Het aftellen begint binnenkort</p>
						</div>
						<p id="firstWaveSecondtext" class="auction__timer-secondtext">(in dit geval verschijnt er een timer,
							die dat zal mededelen
							als de prijs daalt.)</p>
					</div>
					<div class="auction__tanks-box">
						<div class="auction__tanks-slider">
							<div class="auction__slider-helper">
								<div id="kv-2Box" class="auction__tank-box tank-closed">
									<a href="WomT/tanks/ussr/kv-2.html" class="info-a">
										<img src="img/background/info.png" alt="" class="info-img">
									</a>
									<div class="auction__info-photos">
										<img src="img/flags/USSR_flag.png" alt="" class="auction__info-flag">
										<img src="img/tanksIcons/ht.png" alt="" class="auction__info-type">
									</div>
									<div class="auction__tank-block">
										<img class="tank__block-img" src="img/tanks/ussr/kv-2.png" alt="">
									</div>
									<div class="auction__info-block">
										<p class="auction__info-name">КВ-2</p>
										<div class="auction__info-price">
											<p id="kv2Price" class="auction__price-text">8000</p>
											<img class="auction__price-img" src="img/resurses/gold.png">
										</div>
									</div>
									<form id="kv2Button" class="formButton">
										<button onclick="purchase('kv_2','gold');" class="button buttonFormTank buttonClickSound">
											<div class="button-side button-side1"></div>
											<div class="button-side button-side2"></div>
											<div class="button-side button-side3"></div>
											<div class="button-side button-side4"></div>
											<p class="button-side button-text button__text-tanks displayBlock">Kopen</p>
											<p class="button-side button-text button__text-tanks displayNone">Gekocht</p>
										</button>
									</form>
									<div class="tank__camo-block">
										<img class="tank__camo-img" src="img/tanks/none.png">
									</div>
								</div>
							</div>
							<div class="auction__slider-helper">
								<div id="togg2Box" class="auction__tank-box tank-closed">
									<a href="WomT/tanks/britaine/togg_2.html" class="info-a">
										<img src="img/background/info.png" alt="" class="info-img">
									</a>
									<div class="auction__info-photos">
										<img src="img/flags/Uk_flag.png" alt="" class="auction__info-flag">
										<img src="img/tanksIcons/ht.png" alt="" class="auction__info-type">
									</div>
									<div class="auction__tank-block">
										<img class="tank__block-img" src="img/tanks/britaine/tog_2.png" alt="">
									</div>
									<div class="auction__info-block">
										<p class="auction__info-name">TOGG II*</p>
										<div class="auction__info-price">
											<p id="togg2Price" class="auction__price-text">8000</p>
											<img class="auction__price-img" src="img/resurses/gold.png">
										</div>
									</div>
									<form id="togg2Button" class="formButton">
										<button onclick="purchase('togg2','gold');" class="button buttonFormTank buttonClickSound">
											<div class="button-side button-side1"></div>
											<div class="button-side button-side2"></div>
											<div class="button-side button-side3"></div>
											<div class="button-side button-side4"></div>
											<p class="button-side button-text button__text-tanks displayBlock">Kopen</p>
											<p class="button-side button-text button__text-tanks displayNone">Gekocht</p>
										</button>
									</form>
									<div class="tank__camo-block">
										<img class="tank__camo-img" src="img/tanks/none.png">
									</div>
								</div>
							</div>
							<div class="auction__slider-helper">
								<div id="amx_els_bicBox" class="auction__tank-box tank-closed">
									<a href="WomT/tanks/france/amx_els_bis.html" class="info-a">
										<img src="img/background/info.png" alt="" class="info-img">
									</a>
									<div class="auction__info-photos">
										<img src="img/flags/France_flag.png" alt="" class="auction__info-flag">
										<img src="img/tanksIcons/lt.png" alt="" class="auction__info-type">
									</div>
									<div class="auction__tank-block">
										<img class="tank__block-img" src="img/tanks/france/amx_els_bic.png" alt="">
									</div>
									<div class="auction__info-block">
										<p class="auction__info-name">AMX ELS bic</p>
										<div class="auction__info-price">
											<p id="amx_els_bicPrice" class="auction__price-text">7500</p>
											<img class="auction__price-img" src="img/resurses/gold.png">
										</div>
									</div>
									<form id="amx_els_bicButton" class="formButton">
										<button onclick="purchase('amx_els_bic','gold');" class="button buttonFormTank buttonClickSound">
											<div class="button-side button-side1"></div>
											<div class="button-side button-side2"></div>
											<div class="button-side button-side3"></div>
											<div class="button-side button-side4"></div>
											<p class="button-side button-text button__text-tanks displayBlock">Kopen</p>
											<p class="button-side button-text button__text-tanks displayNone">Gekocht</p>
										</button>
									</form>
									<div class="tank__camo-block">
										<img class="tank__camo-img" src="img/tanks/none.png">
									</div>
								</div>
							</div>
							<div class="auction__slider-helper">
								<div id="cromwell_bBox" class="auction__tank-box tank-closed">
									<a href="WomT/tanks/britaine/cromwell_berlin.html" class="info-a">
										<img src="img/background/info.png" alt="" class="info-img">
									</a>
									<div class="auction__info-photos">
										<img src="img/flags/Uk_flag.png" alt="" class="auction__info-flag">
										<img src="img/tanksIcons/lt.png" alt="" class="auction__info-type">
									</div>
									<div class="auction__tank-block">
										<img class="tank__block-img" src="img/tanks/britaine/cromwell_b.png" alt="">
									</div>
									<div class="auction__info-block">
										<p class="auction__info-name">Cromwell Berlin</p>
										<div class="auction__info-price">
											<p id="cromwell_bPrice" class="auction__price-text">7500</p>
											<img class="auction__price-img" src="img/resurses/gold.png">
										</div>
									</div>
									<form id="cromwell_bButton" class="formButton">
										<button onclick="purchase('crombell_b','gold');" class="button buttonFormTank buttonClickSound">
											<div class="button-side button-side1"></div>
											<div class="button-side button-side2"></div>
											<div class="button-side button-side3"></div>
											<div class="button-side button-side4"></div>
											<p class="button-side button-text button__text-tanks displayBlock">Kopen</p>
											<p class="button-side button-text button__text-tanks displayNone">Gekocht</p>
										</button>
									</form>
									<div class="tank__camo-block">
										<img class="tank__camo-img" src="img/tanks/none.png">
									</div>
								</div>
							</div>
							<div class="auction__slider-helper">
								<div id="bt-svBox" class="auction__tank-box tank-closed">
									<a href="WomT/tanks/ussr/bt-sv.html" class="info-a">
										<img src="img/background/info.png" alt="" class="info-img">
									</a>
									<div class="auction__info-photos">
										<img src="img/flags/USSR_flag.png" alt="" class="auction__info-flag">
										<img src="img/tanksIcons/lt.png" alt="" class="auction__info-type">
									</div>
									<div class="auction__tank-block">
										<img class="tank__block-img" src="img/tanks/ussr/bt-sv.png" alt="">
									</div>
									<div class="auction__info-block">
										<p class="auction__info-name">БТ-СВ</p>
										<div class="auction__info-price">
											<p id="bt_svPrice" class="auction__price-text">7500</p>
											<img class="auction__price-img" src="img/resurses/gold.png">
										</div>
									</div>
									<form id="bt-svButton" class="formButton">
										<button onclick="purchase('bt_sv','gold');" class="button buttonFormTank buttonClickSound">
											<div class="button-side button-side1"></div>
											<div class="button-side button-side2"></div>
											<div class="button-side button-side3"></div>
											<div class="button-side button-side4"></div>
											<p class="button-side button-text button__text-tanks displayBlock">Kopen</p>
											<p class="button-side button-text button__text-tanks displayNone">Gekocht</p>
										</button>
									</form>
									<div class="tank__camo-block">
										<img class="tank__camo-img" src="img/tanks/none.png">
									</div>
								</div>
							</div>
							<div class="auction__slider-helper">
								<div id="s35_caBox" class="auction__tank-box tank-closed">
									<a href="WomT/tanks/france/s_35_ca.html" class="info-a">
										<img src="img/background/info.png" alt="" class="info-img">
									</a>
									<div class="auction__info-photos">
										<img src="img/flags/France_flag.png" alt="" class="auction__info-flag">
										<img src="img/tanksIcons/td.png" alt="" class="auction__info-type">
									</div>
									<div class="auction__tank-block">
										<img class="tank__block-img" src="img/tanks/france/s35_ca.png" alt="">
									</div>
									<div class="auction__info-block">
										<p class="auction__info-name">S35 CA</p>
										<div class="auction__info-price">
											<p id="s35_caPrice" class="auction__price-text">7000</p>
											<img class="auction__price-img" src="img/resurses/gold.png">
										</div>
									</div>
									<form id="s35_caButton" class="formButton">
										<button onclick="purchase('s35_ca','gold');" class="button buttonFormTank buttonClickSound">
											<div class="button-side button-side1"></div>
											<div class="button-side button-side2"></div>
											<div class="button-side button-side3"></div>
											<div class="button-side button-side4"></div>
											<p class="button-side button-text button__text-tanks displayBlock">Kopen</p>
											<p class="button-side button-text button__text-tanks displayNone">Gekocht</p>
										</button>
									</form>
									<div class="tank__camo-block">
										<img class="tank__camo-img" src="img/tanks/none.png">
									</div>
								</div>
							</div>
							<div class="auction__slider-helper">
								<div id="cherchill_gcBox" class="auction__tank-box tank-closed">
									<a href="WomT/tanks/britaine/churchill_gc.html" class="info-a">
										<img src="img/background/info.png" alt="" class="info-img">
									</a>
									<div class="auction__info-photos">
										<img src="img/flags/Uk_flag.png" alt="" class="auction__info-flag">
										<img src="img/tanksIcons/td.png" alt="" class="auction__info-type">
									</div>
									<div class="auction__tank-block">
										<img class="tank__block-img" src="img/tanks/britaine/cherchill_gc.png" alt="">
									</div>
									<div class="auction__info-block">
										<p class="auction__info-name">Cherchill GC</p>
										<div class="auction__info-price">
											<p id="cherchill_gcPrice" class="auction__price-text">7000</p>
											<img class="auction__price-img" src="img/resurses/gold.png">
										</div>
									</div>
									<form id="cherchill_gcButton" class="formButton">
										<button onclick="purchase('cherchill_gc','gold');" class="button buttonFormTank buttonClickSound">
											<div class="button-side button-side1"></div>
											<div class="button-side button-side2"></div>
											<div class="button-side button-side3"></div>
											<div class="button-side button-side4"></div>
											<p class="button-side button-text button__text-tanks displayBlock">Kopen</p>
											<p class="button-side button-text button__text-tanks displayNone">Gekocht</p>
										</button>
									</form>
									<div class="tank__camo-block">
										<img class="tank__camo-img" src="img/tanks/none.png">
									</div>
								</div>
							</div>
							<div class="auction__slider-helper">
								<div id="wz_pilBox" class="auction__tank-box tank-closed">
									<a href="WomT/tanks/china/wz_pilauchiy.html" class="info-a">
										<img src="img/background/info.png" alt="" class="info-img">
									</a>
									<div class="auction__info-photos">
										<img src="img/flags/China_flag.png" alt="" class="auction__info-flag">
										<img src="img/tanksIcons/td.png" alt="" class="auction__info-type">
									</div>
									<div class="auction__tank-block">
										<img class="tank__block-img" src="img/tanks/china/zw_pilauchiy.png" alt="">
									</div>
									<div class="auction__info-block">
										<p class="auction__info-name">WZ Brandend</p>
										<div class="auction__info-price">
											<p id="wz_pilPrice" class="auction__price-text">7000</p>
											<img class="auction__price-img" src="img/resurses/gold.png">
										</div>
									</div>
									<form id="wz_pylButton" class="formButton">
										<button onclick="purchase('wz_pil','gold');" class="button buttonFormTank buttonClickSound">
											<div class="button-side button-side1"></div>
											<div class="button-side button-side2"></div>
											<div class="button-side button-side3"></div>
											<div class="button-side button-side4"></div>
											<p class="button-side button-text button__text-tanks displayBlock">Kopen</p>
											<p class="button-side button-text button__text-tanks displayNone">Gekocht</p>
										</button>
									</form>
									<div class="tank__camo-block">
										<img class="tank__camo-img" src="img/tanks/none.png">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="auction__wave auction__second">
					<div class="auction__timer-box">
						<p class="auction__timer-wave">De tweede golf</p>
						<div id="timerMaintext2" class="auction__timer-maintext noneText">
							<div class="timer__hours">
								<div id="hour2" class="timer__hours-time"></div>
								<p class="timer__hours-text">uur</p>
							</div>
							<div class="auction__2_tochki">:</div>
							<div class="timer__hours">
								<div id="minute2" class="timer__hours-time"></div>
								<p class="timer__hours-text">min</p>
							</div>
							<div class="auction__2_tochki">:</div>
							<div class="timer__hours">
								<div id="second2" class="timer__hours-time"></div>
								<p class="timer__hours-text">sec</p>
							</div>
							<p id="secondWaveMain" class="auction__timer-NoText">Het aftellen begint binnenkort</p>
						</div>
						<p id="secondWaveSecondtext" class="auction__timer-secondtext">(in dit geval verschijnt er een timer,
							die dat zal mededelen
							als de prijs daalt.)</p>
					</div>
					<div class="auction__tanks-box">
						<div class="auction__tanks-slider">
							<div class="auction__slider-helper">
								<div id="is-2_var2Box" class="auction__tank-box tank-locked">
									<a href="WomT/tanks/ussr/is-2_var_2.html" class="info-a">
										<img src="img/background/info.png" alt="" class="info-img">
									</a>
									<div class="auction__info-photos">
										<img src="img/flags/USSR_flag.png" alt="" class="auction__info-flag">
										<img src="img/tanksIcons/ht.png" alt="" class="auction__info-type">
									</div>
									<div class="auction__tank-block">
										<img class="tank__block-img" src="img/tanks/ussr/is2_var2.png" alt="">
									</div>
									<div class="auction__info-block">
										<p class="auction__info-name">ИС-2 вар.2</p>
										<div class="auction__info-price">
											<p id="is_2_var2Price" class="auction__price-text">8000</p>
											<img class="auction__price-img" src="img/resurses/gold.png">
										</div>
									</div>
									<form id="is-2_var2Button" class="formButton">
										<button onclick="purchase('is_2_var2','gold');" class="button buttonFormTank buttonClickSound">
											<div class="button-side button-side1"></div>
											<div class="button-side button-side2"></div>
											<div class="button-side button-side3"></div>
											<div class="button-side button-side4"></div>
											<p class="button-side button-text button__text-tanks displayBlock">Kopen</p>
											<p class="button-side button-text button__text-tanks displayNone">Gekocht</p>
										</button>
									</form>
									<div class="tank__camo-block">
										<img class="tank__camo-img" src="img/tanks/none.png">
									</div>
								</div>
							</div>
							<div class="auction__slider-helper">
								<div id="lorraine_40tBox" class="auction__tank-box tank-locked">
									<a href="WomT/tanks/france/lorrain_40t.html" class="info-a">
										<img src="img/background/info.png" alt="" class="info-img">
									</a>
									<div class="auction__info-photos">
										<img src="img/flags/France_flag.png" alt="" class="auction__info-flag">
										<img src="img/tanksIcons/ht.png" alt="" class="auction__info-type">
									</div>
									<div class="auction__tank-block">
										<img class="tank__block-img" src="img/tanks/france/lorraine_40t.png" alt="">
									</div>
									<div class="auction__info-block">
										<p class="auction__info-name">Lorraine 40t</p>
										<div class="auction__info-price">
											<p id="lorraine_40tPrice" class="auction__price-text">7500</p>
											<img class="auction__price-img" src="img/resurses/gold.png">
										</div>
									</div>
									<form id="lorraine_40tButton" class="formButton">
										<button onclick="purchase('lorraine_40t','gold');" class="button buttonFormTank buttonClickSound">
											<div class="button-side button-side1"></div>
											<div class="button-side button-side2"></div>
											<div class="button-side button-side3"></div>
											<div class="button-side button-side4"></div>
											<p class="button-side button-text button__text-tanks displayBlock">Kopen</p>
											<p class="button-side button-text button__text-tanks displayNone">Gekocht</p>
										</button>
									</form>
									<div class="tank__camo-block">
										<img class="tank__camo-img" src="img/tanks/none.png">
									</div>
								</div>
							</div>
							<div class="auction__slider-helper">
								<div id="wz-111Box" class="auction__tank-box tank-locked">
									<a href="WomT/tanks/china/wz_111.html" class="info-a">
										<img src="img/background/info.png" alt="" class="info-img">
									</a>
									<div class="auction__info-photos">
										<img src="img/flags/China_flag.png" alt="" class="auction__info-flag">
										<img src="img/tanksIcons/ht.png" alt="" class="auction__info-type">
									</div>
									<div class="auction__tank-block">
										<img class="tank__block-img" src="img/tanks/china/wz_111.png" alt="">
									</div>
									<div class="auction__info-block">
										<p class="auction__info-name">WZ-111</p>
										<div class="auction__info-price">
											<p id="wz_111Price" class="auction__price-text">7500</p>
											<img class="auction__price-img" src="img/resurses/gold.png">
										</div>
									</div>
									<form id="wz-111Button" class="formButton">
										<button onclick="purchase('wz_111','gold');" class="button buttonFormTank buttonClickSound">
											<div class="button-side button-side1"></div>
											<div class="button-side button-side2"></div>
											<div class="button-side button-side3"></div>
											<div class="button-side button-side4"></div>
											<p class="button-side button-text button__text-tanks displayBlock">Kopen</p>
											<p class="button-side button-text button__text-tanks displayNone">Gekocht</p>
										</button>
									</form>
									<div class="tank__camo-block">
										<img class="tank__camo-img" src="img/tanks/none.png">
									</div>
								</div>
							</div>
							<div class="auction__slider-helper">
								<div id="amx_30_prot1Box" class="auction__tank-box tank-locked">
									<a href="WomT/tanks/france/amx_30-1.html" class="info-a">
										<img src="img/background/info.png" alt="" class="info-img">
									</a>
									<div class="auction__info-photos">
										<img src="img/flags/France_flag.png" alt="" class="auction__info-flag">
										<img src="img/tanksIcons/lt.png" alt="" class="auction__info-type">
									</div>
									<div class="auction__tank-block">
										<img class="tank__block-img" src="img/tanks/france/amx30-1.png" alt="">
									</div>
									<div class="auction__info-block">
										<p class="auction__info-name">AMX 30 prot.1</p>
										<div class="auction__info-price">
											<p id="amx_30_prot1Price" class="auction__price-text">8000</p>
											<img class="auction__price-img" src="img/resurses/gold.png">
										</div>
									</div>
									<form id="amx_30_prot1Button" class="formButton">
										<button onclick="purchase('amx_30_prot1','gold');" class="button buttonFormTank buttonClickSound">
											<div class="button-side button-side1"></div>
											<div class="button-side button-side2"></div>
											<div class="button-side button-side3"></div>
											<div class="button-side button-side4"></div>
											<p class="button-side button-text button__text-tanks displayBlock">Kopen</p>
											<p class="button-side button-text button__text-tanks displayNone">Gekocht</p>
										</button>
									</form>
									<div class="tank__camo-block">
										<img class="tank__camo-img" src="img/tanks/none.png">
									</div>
								</div>
							</div>
							<div class="auction__slider-helper">
								<div id="t-49Box" class="auction__tank-box tank-locked">
									<a href="WomT/tanks/usa/t-49.html" class="info-a">
										<img src="img/background/info.png" alt="" class="info-img">
									</a>
									<div class="auction__info-photos">
										<img src="img/flags/USA_flag.png" alt="" class="auction__info-flag">
										<img src="img/tanksIcons/lt.png" alt="" class="auction__info-type">
									</div>
									<div class="auction__tank-block">
										<img class="tank__block-img" src="img/tanks/usa/t49.png" alt="">
									</div>
									<div class="auction__info-block">
										<p class="auction__info-name">T-49</p>
										<div class="auction__info-price">
											<p id="t_49Price" class="auction__price-text">8500</p>
											<img class="auction__price-img" src="img/resurses/gold.png">
										</div>
									</div>
									<form id="t-49Button" class="formButton">
										<button onclick="purchase('t_49','gold');" class="button buttonFormTank buttonClickSound">
											<div class="button-side button-side1"></div>
											<div class="button-side button-side2"></div>
											<div class="button-side button-side3"></div>
											<div class="button-side button-side4"></div>
											<p class="button-side button-text button__text-tanks displayBlock">Kopen</p>
											<p class="button-side button-text button__text-tanks displayNone">Gekocht</p>
										</button>
									</form>
									<div class="tank__camo-block">
										<img class="tank__camo-img" src="img/tanks/none.png">
									</div>
								</div>
							</div>
							<div class="auction__slider-helper">
								<div id="amx_13_75Box" class="auction__tank-box tank-locked">
									<a href="WomT/tanks/france/amx_13_57.html" class="info-a">
										<img src="img/background/info.png" alt="" class="info-img">
									</a>
									<div class="auction__info-photos">
										<img src="img/flags/France_flag.png" alt="" class="auction__info-flag">
										<img src="img/tanksIcons/lt.png" alt="" class="auction__info-type">
									</div>
									<div class="auction__tank-block">
										<img class="tank__block-img" src="img/tanks/france/amx_13_75.png" alt="">
									</div>
									<div class="auction__info-block">
										<p class="auction__info-name">AMX 13 75</p>
										<div class="auction__info-price">
											<p id="amx_13_75Price" class="auction__price-text">7000</p>
											<img class="auction__price-img" src="img/resurses/gold.png">
										</div>
									</div>
									<form id="amx_13_75Button" class="formButton">
										<button onclick="purchase('amx_13_75','gold');" class="button buttonFormTank buttonClickSound">
											<div class="button-side button-side1"></div>
											<div class="button-side button-side2"></div>
											<div class="button-side button-side3"></div>
											<div class="button-side button-side4"></div>
											<p class="button-side button-text button__text-tanks displayBlock">Kopen</p>
											<p class="button-side button-text button__text-tanks displayNone">Gekocht</p>
										</button>
									</form>
									<div class="tank__camo-block">
										<img class="tank__camo-img" src="img/tanks/none.png">
									</div>
								</div>
							</div>
							<div class="auction__slider-helper">
								<div id="sy-152Box" class="auction__tank-box tank-locked">
									<a href="WomT/tanks/ussr/sy-152.html" class="info-a">
										<img src="img/background/info.png" alt="" class="info-img">
									</a>
									<div class="auction__info-photos">
										<img src="img/flags/USSR_flag.png" alt="" class="auction__info-flag">
										<img src="img/tanksIcons/td.png" alt="" class="auction__info-type">
									</div>
									<div class="auction__tank-block">
										<img class="tank__block-img" src="img/tanks/ussr/cy-152.png" alt="">
									</div>
									<div class="auction__info-block">
										<p class="auction__info-name">СУ-152</p>
										<div class="auction__info-price">
											<p id="sy_152Price" class="auction__price-text">7500</p>
											<img class="auction__price-img" src="img/resurses/gold.png">
										</div>
									</div>
									<form id="sy-152Button" class="formButton">
										<button onclick="purchase('sy_152','gold');" class="button buttonFormTank buttonClickSound">
											<div class="button-side button-side1"></div>
											<div class="button-side button-side2"></div>
											<div class="button-side button-side3"></div>
											<div class="button-side button-side4"></div>
											<p class="button-side button-text button__text-tanks displayBlock">Kopen</p>
											<p class="button-side button-text button__text-tanks displayNone">Gekocht</p>
										</button>
									</form>
									<div class="tank__camo-block">
										<img class="tank__camo-img" src="img/tanks/none.png">
									</div>
								</div>
							</div>
							<div class="auction__slider-helper">
								<div id="t-28_defBox" class="auction__tank-box tank-locked">
									<a href="WomT/tanks/usa/t28_defender.html" class="info-a">
										<img src="img/background/info.png" alt="" class="info-img">
									</a>
									<div class="auction__info-photos">
										<img src="img/flags/USA_flag.png" alt="" class="auction__info-flag">
										<img src="img/tanksIcons/td.png" alt="" class="auction__info-type">
									</div>
									<div class="auction__tank-block">
										<img class="tank__block-img" src="img/tanks/usa/t28-defender.png" alt="">
									</div>
									<div class="auction__info-block">
										<p class="auction__info-name">T-28 Defender</p>
										<div class="auction__info-price">
											<p id="t_28_defPrice" class="auction__price-text">7500</p>
											<img class="auction__price-img" src="img/resurses/gold.png">
										</div>
									</div>
									<form id="t-28_defButton" class="formButton">
										<button onclick="purchase('t_28_def','gold');" class="button buttonFormTank buttonClickSound">
											<div class="button-side button-side1"></div>
											<div class="button-side button-side2"></div>
											<div class="button-side button-side3"></div>
											<div class="button-side button-side4"></div>
											<p class="button-side button-text button__text-tanks displayBlock">Kopen</p>
											<p class="button-side button-text button__text-tanks displayNone">Gekocht</p>
										</button>
									</form>
									<div class="tank__camo-block">
										<img class="tank__camo-img" src="img/tanks/none.png">
									</div>
								</div>
							</div>
							<div class="auction__slider-helper">
								<div id="sy-130_pmBox" class="auction__tank-box tank-locked">
									<a href="WomT/tanks/ussr/sy-130pm.html" class="info-a">
										<img src="img/background/info.png" alt="" class="info-img">
									</a>
									<div class="auction__info-photos">
										<img src="img/flags/USSR_flag.png" alt="" class="auction__info-flag">
										<img src="img/tanksIcons/td.png" alt="" class="auction__info-type">
									</div>
									<div class="auction__tank-block">
										<img class="tank__block-img" src="img/tanks/ussr/cy-130-pm.png" alt="">
									</div>
									<div class="auction__info-block">
										<p class="auction__info-name">СУ-130 ПМ</p>
										<div class="auction__info-price">
											<p id="sy_130_pmPrice" class="auction__price-text">7500</p>
											<img class="auction__price-img" src="img/resurses/gold.png">
										</div>
									</div>
									<form id="cy-130_pmButton" class="formButton">
										<button onclick="purchase('sy_130_pm','gold');" class="button buttonFormTank buttonClickSound">
											<div class="button-side button-side1"></div>
											<div class="button-side button-side2"></div>
											<div class="button-side button-side3"></div>
											<div class="button-side button-side4"></div>
											<p class="button-side button-text button__text-tanks displayBlock">Kopen</p>
											<p class="button-side button-text button__text-tanks displayNone">Gekocht</p>
										</button>
									</form>
									<div class="tank__camo-block">
										<img class="tank__camo-img" src="img/tanks/none.png">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="auction__wave auction__third">
					<div class="auction__timer-box">
						<p class="auction__timer-wave">De derde golf</p>
						<div id="timerMaintext3" class="auction__timer-maintext noneText">
							<div class="timer__hours">
								<div id="hour3" class="timer__hours-time"></div>
								<p class="timer__hours-text">uur</p>
							</div>
							<div class="auction__2_tochki">:</div>
							<div class="timer__hours">
								<div id="minute3" class="timer__hours-time"></div>
								<p class="timer__hours-text">min</p>
							</div>
							<div class="auction__2_tochki">:</div>
							<div class="timer__hours">
								<div id="second3" class="timer__hours-time"></div>
								<p class="timer__hours-text">sec</p>
							</div>
							<p id="thirdWaveMain" class="auction__timer-NoText">Het aftellen begint binnenkort</p>
						</div>
						<p id="thirdWaveSecondtext" class="auction__timer-secondtext">(in dit geval verschijnt er een timer,
							die dat zal mededelen
							als de prijs daalt.)</p>
					</div>
					<div class="auction__tanks-box">
						<div class="auction__tanks-slider">
							<div class="auction__slider-helper">
								<div id="type_5_heavyBox" class="auction__tank-box tank-locked">
									<a href="WomT/tanks/japan/type_5_heavy.html" class="info-a">
										<img src="img/background/info.png" alt="" class="info-img">
									</a>
									<div class="auction__info-photos">
										<img src="img/flags/Japan_flag.png" alt="" class="auction__info-flag">
										<img src="img/tanksIcons/ht.png" alt="" class="auction__info-type">
									</div>
									<div class="auction__tank-block">
										<img class="tank__block-img" src="img/tanks/japan/type_5_heavy.png" alt="">
									</div>
									<div class="auction__info-block">
										<p class="auction__info-name">Type 5 Heavy</p>
										<div class="auction__info-price">
											<p id="type_5_heavyPrice" class="auction__price-text">10000</p>
											<img class="auction__price-img" src="img/resurses/gold.png">
										</div>
									</div>
									<form id="type_5_heavyButton" class="formButton">
										<button onclick="purchase('type_5_heavy','gold');" class="button buttonFormTank buttonClickSound">
											<div class="button-side button-side1"></div>
											<div class="button-side button-side2"></div>
											<div class="button-side button-side3"></div>
											<div class="button-side button-side4"></div>
											<p class="button-side button-text button__text-tanks displayBlock">Kopen</p>
											<p class="button-side button-text button__text-tanks displayNone">Gekocht</p>
										</button>
									</form>
									<div class="tank__camo-block">
										<img class="tank__camo-img" src="img/tanks/none.png">
									</div>
								</div>
							</div>
							<div class="auction__slider-helper">
								<div id="is-7Box" class="auction__tank-box tank-locked">
									<a href="WomT/tanks/ussr/is-7.html" class="info-a">
										<img src="img/background/info.png" alt="" class="info-img">
									</a>
									<div class="auction__info-photos">
										<img src="img/flags/USSR_flag.png" alt="" class="auction__info-flag">
										<img src="img/tanksIcons/ht.png" alt="" class="auction__info-type">
									</div>
									<div class="auction__tank-block">
										<img class="tank__block-img" src="img/tanks/ussr/is-7.png" alt="">
									</div>
									<div class="auction__info-block">
										<p class="auction__info-name">ИС-7</p>
										<div class="auction__info-price">
											<p id="is_7Price" class="auction__price-text">8500</p>
											<img class="auction__price-img" src="img/resurses/gold.png">
										</div>
									</div>
									<form id="is-7Button" class="formButton">
										<button onclick="purchase('is_7','gold');" class="button buttonFormTank buttonClickSound">
											<div class="button-side button-side1"></div>
											<div class="button-side button-side2"></div>
											<div class="button-side button-side3"></div>
											<div class="button-side button-side4"></div>
											<p class="button-side button-text button__text-tanks displayBlock">Kopen</p>
											<p class="button-side button-text button__text-tanks displayNone">Gekocht</p>
										</button>
									</form>
									<div class="tank__camo-block">
										<img class="tank__camo-img" src="img/tanks/none.png">
									</div>
								</div>
							</div>
							<div class="auction__slider-helper">
								<div id="t-57_heavyBox" class="auction__tank-box tank-locked">
									<a href="WomT/tanks/usa/t57_heavy.html" class="info-a">
										<img src="img/background/info.png" alt="" class="info-img">
									</a>
									<div class="auction__info-photos">
										<img src="img/flags/USA_flag.png" alt="" class="auction__info-flag">
										<img src="img/tanksIcons/ht.png" alt="" class="auction__info-type">
									</div>
									<div class="auction__tank-block">
										<img class="tank__block-img" src="img/tanks/usa/t57_heavy.png" alt="">
									</div>
									<div class="auction__info-block">
										<p class="auction__info-name">T-57 Heavy</p>
										<div class="auction__info-price">
											<p id="t_57_heavyPrice" class="auction__price-text">8000</p>
											<img class="auction__price-img" src="img/resurses/gold.png">
										</div>
									</div>
									<form id="t-57_heavyButton" class="formButton">
										<button onclick="purchase('t_57_heavy','gold');" class="button buttonFormTank buttonClickSound">
											<div class="button-side button-side1"></div>
											<div class="button-side button-side2"></div>
											<div class="button-side button-side3"></div>
											<div class="button-side button-side4"></div>
											<p class="button-side button-text button__text-tanks displayBlock">Kopen</p>
											<p class="button-side button-text button__text-tanks displayNone">Gekocht</p>
										</button>
									</form>
									<div class="tank__camo-block">
										<img class="tank__camo-img" src="img/tanks/none.png">
									</div>
								</div>
							</div>
							<div class="auction__slider-helper">
								<div id="super_conquerorBox" class="auction__tank-box tank-locked">
									<a href="WomT/tanks/britaine/super_conquerror.html" class="info-a">
										<img src="img/background/info.png" alt="" class="info-img">
									</a>
									<div class="auction__info-photos">
										<img src="img/flags/Uk_flag.png" alt="" class="auction__info-flag">
										<img src="img/tanksIcons/ht.png" alt="" class="auction__info-type">
									</div>
									<div class="auction__tank-block">
										<img class="tank__block-img" src="img/tanks/britaine/super_conqueror.png" alt="">
									</div>
									<div class="auction__info-block">
										<p class="auction__info-name">Super Conqueror</p>
										<div class="auction__info-price">
											<p id="super_conquerorPrice" class="auction__price-text">8500</p>
											<img class="auction__price-img" src="img/resurses/gold.png">
										</div>
									</div>
									<form id="super_conquerorButton" class="formButton">
										<button onclick="purchase('super_conqueror','gold');" class="button buttonFormTank buttonClickSound">
											<div class="button-side button-side1"></div>
											<div class="button-side button-side2"></div>
											<div class="button-side button-side3"></div>
											<div class="button-side button-side4"></div>
											<p class="button-side button-text button__text-tanks displayBlock">Kopen</p>
											<p class="button-side button-text button__text-tanks displayNone">Gekocht</p>
										</button>
									</form>
									<div class="tank__camo-block">
										<img class="tank__camo-img" src="img/tanks/none.png">
									</div>
								</div>
							</div>
							<div class="auction__slider-helper">
								<div id="bat-chat_25tBox" class="auction__tank-box tank-locked">
									<a href="WomT/tanks/france/bat-chat_25t.html" class="info-a">
										<img src="img/background/info.png" alt="" class="info-img">
									</a>
									<div class="auction__info-photos">
										<img src="img/flags/France_flag.png" alt="" class="auction__info-flag">
										<img src="img/tanksIcons/lt.png" alt="" class="auction__info-type">
									</div>
									<div class="auction__tank-block">
										<img class="tank__block-img" src="img/tanks/france/bat-chat_25t.png" alt="">
									</div>
									<div class="auction__info-block">
										<p class="auction__info-name">Bat-Chat 25t</p>
										<div class="auction__info-price">
											<p id="bat_chat_25tPrice" class="auction__price-text">8000</p>
											<img class="auction__price-img" src="img/resurses/gold.png">
										</div>
									</div>
									<form id="bat-chat_25tButton" class="formButton">
										<button onclick="purchase('bat_chat_25t','gold');" class="button buttonFormTank buttonClickSound">
											<div class="button-side button-side1"></div>
											<div class="button-side button-side2"></div>
											<div class="button-side button-side3"></div>
											<div class="button-side button-side4"></div>
											<p class="button-side button-text button__text-tanks displayBlock">Kopen</p>
											<p class="button-side button-text button__text-tanks displayNone">Gekocht</p>
										</button>
									</form>
									<div class="tank__camo-block">
										<img class="tank__camo-img" src="img/tanks/none.png">
									</div>
								</div>
							</div>
							<div class="auction__slider-helper">
								<div id="udes_15/16Box" class="auction__tank-box tank-locked">
									<a href="WomT/tanks/sweden/udes_15-16.html" class="info-a">
										<img src="img/background/info.png" alt="" class="info-img">
									</a>
									<div class="auction__info-photos">
										<img src="img/flags/Sweden_flag.png" alt="" class="auction__info-flag">
										<img src="img/tanksIcons/lt.png" alt="" class="auction__info-type">
									</div>
									<div class="auction__tank-block">
										<img class="tank__block-img" src="img/tanks/sweden/udes_15-16_v2.png" alt="">
									</div>
									<div class="auction__info-block">
										<p class="auction__info-name">Udes 15/16</p>
										<div class="auction__info-price">
											<p id="udes_15_16Price" class="auction__price-text">8500</p>
											<img class="auction__price-img" src="img/resurses/gold.png">
										</div>
									</div>
									<form id="udes_15/16Button" class="formButton">
										<button onclick="purchase('udes_15_16','gold');" class="button buttonFormTank buttonClickSound">
											<div class="button-side button-side1"></div>
											<div class="button-side button-side2"></div>
											<div class="button-side button-side3"></div>
											<div class="button-side button-side4"></div>
											<p class="button-side button-text button__text-tanks displayBlock">Kopen</p>
											<p class="button-side button-text button__text-tanks displayNone">Gekocht</p>
										</button>
									</form>
									<div class="tank__camo-block">
										<img class="tank__camo-img" src="img/tanks/none.png">
									</div>
								</div>
							</div>
							<div class="auction__slider-helper">
								<div id="type-59_goldBox" class="auction__tank-box tank-locked">
									<a href="WomT/tanks/china/type_59_gold.html" class="info-a">
										<img src="img/background/info.png" alt="" class="info-img">
									</a>
									<div class="auction__info-photos">
										<img src="img/flags/China_flag.png" alt="" class="auction__info-flag">
										<img src="img/tanksIcons/lt.png" alt="" class="auction__info-type">
									</div>
									<div class="auction__tank-block">
										<img class="tank__block-img" src="img/tanks/china/type-59_gold.png" alt="">
									</div>
									<div class="auction__info-block">
										<p class="auction__info-name">Type-59 Gold</p>
										<div class="auction__info-price">
											<p id="type_59_gPrice" class="auction__price-text">8000</p>
											<img class="auction__price-img" src="img/resurses/gold.png">
										</div>
									</div>
									<form id="type-59_goldButton" class="formButton">
										<button onclick="purchase('type_59_gold','gold');" class="button buttonFormTank buttonClickSound">
											<div class="button-side button-side1"></div>
											<div class="button-side button-side2"></div>
											<div class="button-side button-side3"></div>
											<div class="button-side button-side4"></div>
											<p class="button-side button-text button__text-tanks displayBlock">Kopen</p>
											<p class="button-side button-text button__text-tanks displayNone">Gekocht</p>
										</button>
									</form>
									<div class="tank__camo-block">
										<img class="tank__camo-img" src="img/tanks/none.png">
									</div>
								</div>
							</div>
							<div class="auction__slider-helper">
								<div id="strv_103bBox" class="auction__tank-box tank-locked">
									<a href="WomT/tanks/sweden/strv_103b.html" class="info-a">
										<img src="img/background/info.png" alt="" class="info-img">
									</a>
									<div class="auction__info-photos">
										<img src="img/flags/Sweden_flag.png" alt="" class="auction__info-flag">
										<img src="img/tanksIcons/td.png" alt="" class="auction__info-type">
									</div>
									<div class="auction__tank-block">
										<img class="tank__block-img" src="img/tanks/sweden/strv_103b.png" alt="">
									</div>
									<div class="auction__info-block">
										<p class="auction__info-name">Strv 103b</p>
										<div class="auction__info-price">
											<p id="strv_103bPrice" class="auction__price-text">9000</p>
											<img class="auction__price-img" src="img/resurses/gold.png">
										</div>
									</div>
									<form id="strv_103bButton" class="formButton">
										<button onclick="purchase('strv_103b','gold');" class="button buttonFormTank buttonClickSound">
											<div class="button-side button-side1"></div>
											<div class="button-side button-side2"></div>
											<div class="button-side button-side3"></div>
											<div class="button-side button-side4"></div>
											<p class="button-side button-text button__text-tanks displayBlock">Kopen</p>
											<p class="button-side button-text button__text-tanks displayNone">Gekocht</p>
										</button>
									</form>
									<div class="tank__camo-block">
										<img class="tank__camo-img" src="img/tanks/none.png">
									</div>
								</div>
							</div>
							<div class="auction__slider-helper">
								<div id="tortoiseBox" class="auction__tank-box tank-locked">
									<a href="WomT/tanks/britaine/tortoise.html" class="info-a">
										<img src="img/background/info.png" alt="" class="info-img">
									</a>
									<div class="auction__info-photos">
										<img src="img/flags/Uk_flag.png" alt="" class="auction__info-flag">
										<img src="img/tanksIcons/td.png" alt="" class="auction__info-type">
									</div>
									<div class="auction__tank-block">
										<img class="tank__block-img" src="img/tanks/britaine/tortoise.png" alt="">
									</div>
									<div class="auction__info-block">
										<p class="auction__info-name">Tortoise</p>
										<div class="auction__info-price">
											<p id="tortoisePrice" class="auction__price-text">8000</p>
											<img class="auction__price-img" src="img/resurses/gold.png">
										</div>
									</div>
									<form id="tortoiseButton" class="formButton">
										<button onclick="purchase('tortoise','gold');" class="button buttonFormTank buttonClickSound">
											<div class="button-side button-side1"></div>
											<div class="button-side button-side2"></div>
											<div class="button-side button-side3"></div>
											<div class="button-side button-side4"></div>
											<p class="button-side button-text button__text-tanks displayBlock">Kopen</p>
											<p class="button-side button-text button__text-tanks displayNone">Gekocht</p>
										</button>
									</form>
									<div class="tank__camo-block">
										<img class="tank__camo-img" src="img/tanks/none.png">
									</div>
								</div>
							</div>
							<div class="auction__slider-helper">
								<div id="fosh_155Box" class="auction__tank-box tank-locked">
									<a href="WomT/tanks/france/fosh_155.html" class="info-a">
										<img src="img/background/info.png" alt="" class="info-img">
									</a>
									<div class="auction__info-photos">
										<img src="img/flags/France_flag.png" alt="" class="auction__info-flag">
										<img src="img/tanksIcons/td.png" alt="" class="auction__info-type">
									</div>
									<div class="auction__tank-block">
										<img class="tank__block-img" src="img/tanks/france/fosh_155.png" alt="">
									</div>
									<div class="auction__info-block">
										<p class="auction__info-name">FOSH 155</p>
										<div class="auction__info-price">
											<p id="fosh_155Price" class="auction__price-text">8500</p>
											<img class="auction__price-img" src="img/resurses/gold.png">
										</div>
									</div>
									<form id="fosh_155Button" class="formButton">
										<button onclick="purchase('fosh_155','gold');" class="button buttonFormTank buttonClickSound">
											<div class="button-side button-side1"></div>
											<div class="button-side button-side2"></div>
											<div class="button-side button-side3"></div>
											<div class="button-side button-side4"></div>
											<p class="button-side button-text button__text-tanks displayBlock">Kopen</p>
											<p class="button-side button-text button__text-tanks displayNone">Gekocht</p>
										</button>
									</form>
									<div class="tank__camo-block">
										<img class="tank__camo-img" src="img/tanks/none.png">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="auction__tokens">
					<div class="auction__tokens-text auction__timer-maintext">
						<p class="auction__token-text">Tokenwinkel</p>
						<img src="img/resurses/token.png" class="auction__text-token">
					</div>
					<div class="auction__tanks-box">
						<div class="auction__tanks-slider">
							<div class="auction__slider-helper">
								<div id="goldBox" class="auction__tank-box">
									<div class="auction__tank-block">
										<img class="tank__block-img tank__block-gold" src="img/resurses/gold.png" alt="">
									</div>
									<div class="auction__info-block">
										<p class="auction__info-name">1000 goud</p>
										<div class="auction__info-price">
											<p class="auction__price-text">2</p>
											<img class="auction__price-img" src="img/resurses/token.png">
										</div>
									</div>
									<form id="goldButton" class="formButton">
										<button onclick="purchase('gold','goldItem');" class="button buttonFormTank">
											<div class="button-side button-side1"></div>
											<div class="button-side button-side2"></div>
											<div class="button-side button-side3"></div>
											<div class="button-side button-side4"></div>
											<p class="button-side button-text button__text-tanks displayBlock">Kopen</p>
											<p class="button-side button-text button__text-tanks displayNone">Gekocht</p>
										</button>
									</form>
								</div>
							</div>
							<div class="auction__slider-helper">
								<div id="t-34_kharkivBox" class="auction__tank-box">
									<a href="WomT/tanks/ukraine/t54.html" class="info-a">
										<img src="img/background/info.png" alt="" class="info-img">
									</a>
									<div class="auction__info-photos">
										<img src="img/flags/Ukraine_flag.png" alt="" class="auction__info-flag">
										<img src="img/tanksIcons/lt.png" alt="" class="auction__info-type">
									</div>
									<div class="auction__tank-block">
										<img class="tank__block-img" src="img/tanks/ukraine/t-54.png" alt="">
									</div>
									<div class="auction__info-block">
										<p class="auction__info-name">Т-54</p>
										<div class="auction__info-price">
											<p class="auction__price-text">5</p>
											<img class="auction__price-img" src="img/resurses/token.png">
										</div>
									</div>
									<form id="t-34_kharkivButton" class="formButton">
										<button onclick="purchase('t_34_kharkiv','tokens');" class="button buttonFormTank buttonClickSound">
											<div class="button-side button-side1"></div>
											<div class="button-side button-side2"></div>
											<div class="button-side button-side3"></div>
											<div class="button-side button-side4"></div>
											<p class="button-side button-text button__text-tanks displayBlock">Kopen</p>
											<p class="button-side button-text button__text-tanks displayNone">Gekocht</p>
										</button>
									</form>
								</div>
							</div>
							<div class="auction__slider-helper">
								<div id="t-64_bm_oplotBox" class="auction__tank-box">
									<a href="WomT/tanks/ukraine/t640plot.html" class="info-a">
										<img src="img/background/info.png" alt="" class="info-img">
									</a>
									<div class="auction__info-photos">
										<img src="img/flags/Ukraine_flag.png" alt="" class="auction__info-flag">
										<img src="img/tanksIcons/ht.png" alt="" class="auction__info-type">
									</div>
									<div class="auction__tank-block">
										<img class="tank__block-img" src="img/tanks/ukraine/t64oplot.png" alt="">
									</div>
									<div class="auction__info-block">
										<p class="auction__info-name">Т-64 БМ Оплот</p>
										<div class="auction__info-price">
											<p class="auction__price-text">12</p>
											<img class="auction__price-img" src="img/resurses/token.png">
										</div>
									</div>
									<form id="t-64_bm_oplotButton" class="formButton">
										<button onclick="purchase('t_64_bm_oplot','tokens');" class="button buttonFormTank buttonClickSound">
											<div class="button-side button-side1"></div>
											<div class="button-side button-side2"></div>
											<div class="button-side button-side3"></div>
											<div class="button-side button-side4"></div>
											<p class="button-side button-text button__text-tanks displayBlock">Kopen</p>
											<p class="button-side button-text button__text-tanks displayNone">Gekocht</p>
										</button>
									</form>
								</div>
							</div>
							<div class="auction__slider-helper">
								<div id="t-34_winterBox" class="auction__tank-box">
									<a href="WomT/tanks/ukraine/t34_kharkiv.html" class="info-a">
										<img src="img/background/info.png" alt="" class="info-img">
									</a>
									<div class="auction__info-photos">
										<img src="img/flags/Ukraine_flag.png" alt="" class="auction__info-flag">
										<img src="img/tanksIcons/lt.png" alt="" class="auction__info-type">
									</div>
									<div class="auction__tank-block">
										<img class="tank__block-img" src="img/tanks/ukraine/t34_winter.png" alt="">
									</div>
									<div class="auction__info-block">
										<p class="auction__info-name">Зимній снайпер</p>
										<div class="auction__info-price">
											<p class="auction__price-text">3</p>
											<img class="auction__price-img" src="img/resurses/token.png">
										</div>
									</div>
									<form id="t-34_winterButton" class="formButton">
										<button onclick="purchase('t_34_winter','tokens');" class="button buttonFormTank buttonClickSound">
											<div class="button-side button-side1"></div>
											<div class="button-side button-side2"></div>
											<div class="button-side button-side3"></div>
											<div class="button-side button-side4"></div>
											<p class="button-side button-text button__text-tanks displayBlock">Kopen</p>
											<p class="button-side button-text button__text-tanks displayNone">Gekocht</p>
										</button>
									</form>
									<div class="tank__camo-block">
										<img class="tank__camo-img" src="img/tanks/none.png">
									</div>
								</div>
							</div>
							<div class="auction__slider-helper">
								<div id="t-34_kharkiv_skin1Box" class="auction__tank-box tank-locked">
									<a href="WomT/tanks/ukraine/t54.html" class="info-a">
										<img src="img/background/info.png" alt="" class="info-img">
									</a>
									<div class="auction__info-photos">
										<img src="img/flags/Ukraine_flag.png" alt="" class="auction__info-flag">
										<img src="img/tanksIcons/lt.png" alt="" class="auction__info-type">
									</div>
									<div class="auction__tank-block">
										<img class="tank__block-img" src="img/tanks/ukraine/t-54_patriot1.png" alt="">
									</div>
									<div class="auction__info-block">
										<p class="auction__info-name">Т-54 Патріот</p>
										<div class="auction__info-price">
											<p class="auction__price-text">2</p>
											<img class="auction__price-img" src="img/resurses/token.png">
										</div>
									</div>
									<form id="t-34_kharkiv_skin1Button" class="formButton">
										<button onclick="purchase('t_34_kharkiv_skin1','tokens');" class="button buttonFormTank buttonClickSound">
											<div class="button-side button-side1"></div>
											<div class="button-side button-side2"></div>
											<div class="button-side button-side3"></div>
											<div class="button-side button-side4"></div>
											<p class="button-side button-text button__text-tanks displayBlock">Kopen</p>
											<p class="button-side button-text button__text-tanks displayNone">Gekocht</p>
										</button>
									</form>
									<div class="tank__camo-block">
										<img class="tank__camo-img" src="img/tanks/none.png">
									</div>
								</div>
							</div>
							<div class="auction__slider-helper">
								<div id="t-34_kharkiv_skin2Box" class="auction__tank-box tank-locked">
									<a href="WomT/tanks/ukraine/t54.html" class="info-a">
										<img src="img/background/info.png" alt="" class="info-img">
									</a>
									<div class="auction__info-photos">
										<img src="img/flags/Ukraine_flag.png" alt="" class="auction__info-flag">
										<img src="img/tanksIcons/lt.png" alt="" class="auction__info-type">
									</div>
									<div class="auction__tank-block">
										<img class="tank__block-img" src="img/tanks/ukraine/t-54_patriot2.png" alt="">
									</div>
									<div class="auction__info-block">
										<p class="auction__info-name">Т-54 Патріот</p>
										<div class="auction__info-price">
											<p class="auction__price-text">2</p>
											<img class="auction__price-img" src="img/resurses/token.png">
										</div>
									</div>
									<form id="t-34_kharkiv_skin2Button" class="formButton">
										<button onclick="purchase('t_34_kharkiv_skin2','tokens');" class="button buttonFormTank buttonClickSound">
											<div class="button-side button-side1"></div>
											<div class="button-side button-side2"></div>
											<div class="button-side button-side3"></div>
											<div class="button-side button-side4"></div>
											<p class="button-side button-text button__text-tanks displayBlock">Kopen</p>
											<p class="button-side button-text button__text-tanks displayNone">Gekocht</p>
										</button>
									</form>
									<div class="tank__camo-block">
										<img class="tank__camo-img" src="img/tanks/none.png">
									</div>
								</div>
							</div>
							<div class="auction__slider-helper">
								<div id="t-64_bm_oplot_skinBox" class="auction__tank-box tank-locked">
									<a href="WomT/tanks/ukraine/t640plot.html" class="info-a">
										<img src="img/background/info.png" alt="" class="info-img">
									</a>
									<div class="auction__info-photos">
										<img src="img/flags/Ukraine_flag.png" alt="" class="auction__info-flag">
										<img src="img/tanksIcons/ht.png" alt="" class="auction__info-type">
									</div>
									<div class="auction__tank-block">
										<img class="tank__block-img" src="img/tanks/ukraine/t64oplot_skin.png" alt="">
									</div>
									<div class="auction__info-block">
										<p class="auction__info-name auction__text-help">Boze pixel</p>
										<div class="auction__info-price">
											<p class="auction__price-text">3</p>
											<img class="auction__price-img" src="img/resurses/token.png">
										</div>
									</div>
									<form id="t-64_bm_oplot_skinButton" class="formButton">
										<button onclick="purchase('t_64_bm_oplot_skin','tokens');" class="button buttonFormTank buttonClickSound">
											<div class="button-side button-side1"></div>
											<div class="button-side button-side2"></div>
											<div class="button-side button-side3"></div>
											<div class="button-side button-side4"></div>
											<p class="button-side button-text button__text-tanks displayBlock">Kopen</p>
											<p class="button-side button-text button__text-tanks displayNone">Gekocht</p>
										</button>
									</form>
									<div class="tank__camo-block">
										<img class="tank__camo-img" src="img/tanks/none.png">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<footer class="footer">
			<div class="footer__container _container">
				<p class="footer__text">Wil je de kenmerken van tanks zien? Je kunt het <a class="link"
						href="WomT/WomT.html">hier</a> doen! Deze veiling is gemaakt op basis van het bouwspel "World of mine tanks".
						Meldingen van alle aankopen op deze site worden naar de eigenaar van het spel gestuurd <span>(Leonid
						Aleksieiev)</span>. Als u vragen heeft, kunt u <a class="link"
						href="https://t.me/Nowqqq">mij</a> schrijven!</p>
				<div class="footer__photo">
					<img class="footer__photo-img" src="img/background/logo-big.png">
					</img>
				</div>
		</footer>
	</div>
	<div id="popupPromo" class="popup_promo">
		<div id="promoBack" class="promo__back buttonClickSound">
			<span></span>
			<span></span>
			<span></span>
		</div>
		<form type="submit" id="popupLoginBox" class="popup__login-box">
			<div class="popup__login-maintext">Voer de bonuscode in:</div>
			<div class="popup__login-inputBox">
				<input type="text" id="loginPromo" name="loginPromo" class="popup__login-input">
			</div>
			<div class="loginTextAlerp">!!! Deze code is niet actief of is al gebruikt !!!</div>
			<div class="popup__login-form">
				<button class="button buttonClickSound">
					<div class="button-side button-side1"></div>
					<div class="button-side button-side2"></div>
					<div class="button-side button-side3"></div>
					<div class="button-side button-side4"></div>
					<p class="button-side button-text">Activeren</p>
				</button>
			</div>
		</form>
	</div>
	<div id="popupAnimationEventListener" class="popup__animation">
		<div class="popup__animation-box">
			<div id="case" class="animation__box-case">
				<div id="buyedTankBlock" class="buyedTankBlock">
					<div id="kv_2Anima" class="auction__tokens-box ussr displayNone">
						<div class="auction__tokens-tank">
							<img class="auction__tank-type" src="img/tanksIcons/ht.png">
							<img class="auction__tank-tank" src="img/tanks_full/ussr/kv-2.png">
							<div class="auction__tank-name">КВ-2</div>
						</div>
					</div>
					<div id="pz_b2Anima" class="auction__tokens-box gr">
						<div class="auction__tokens-tank">
							<img class="auction__tank-type" src="img/tanksIcons/ht.png">
							<img class="auction__tank-tank" src="img/tanks_full/germany/pz_b2.png">
							<div class="auction__tank-name">PZ B2</div>
						</div>
					</div>
					<div id="togg2Anima" class="auction__tokens-box br">
						<div class="auction__tokens-tank">
							<img class="auction__tank-type" src="img/tanksIcons/ht.png">
							<img class="auction__tank-tank" src="img/tanks_full/britaine/tog_2.png">
							<div class="auction__tank-name">TOGG II*</div>
						</div>
					</div>
					<div id="amx_els_bicAnima" class="auction__tokens-box fr">
						<div class="auction__tokens-tank">
							<img class="auction__tank-type" src="img/tanksIcons/lt.png">
							<img class="auction__tank-tank" src="img/tanks_full/france/amx_els_bic.png">
							<div class="auction__tank-name">AMX ELS bic</div>
						</div>
					</div>
					<div id="crombell_bAnima" class="auction__tokens-box br">
						<div class="auction__tokens-tank">
							<img class="auction__tank-type" src="img/tanksIcons/lt.png">
							<img class="auction__tank-tank" src="img/tanks_full/britaine/cromwell_b.png">
							<div class="auction__tank-name">Crombell Berlin</div>
						</div>
					</div>
					<div id="bt_svAnima" class="auction__tokens-box ussr">
						<div class="auction__tokens-tank">
							<img class="auction__tank-type" src="img/tanksIcons/lt.png">
							<img class="auction__tank-tank" src="img/tanks_full/ussr/bt-sv.png">
							<div class="auction__tank-name">БТ-СВ</div>
						</div>
					</div>
					<div id="s35_caAnima" class="auction__tokens-box fr">
						<div class="auction__tokens-tank">
							<img class="auction__tank-type" src="img/tanksIcons/td.png">
							<img class="auction__tank-tank" src="img/tanks_full/france/s35_ca.png">
							<div class="auction__tank-name">S 35 CA</div>
						</div>
					</div>
					<div id="cherchill_gcAnima" class="auction__tokens-box br">
						<div class="auction__tokens-tank">
							<img class="auction__tank-type" src="img/tanksIcons/td.png">
							<img class="auction__tank-tank" src="img/tanks_full/britaine/cherchill_gc.png">
							<div class="auction__tank-name">Cherchill GC</div>
						</div>
					</div>
					<div id="wz_pilAnima" class="auction__tokens-box ch">
						<div class="auction__tokens-tank">
							<img class="auction__tank-type" src="img/tanksIcons/td.png">
							<img class="auction__tank-tank" src="img/tanks_full/china/zw_pilauchiy.png">
							<div class="auction__tank-name">WZ Brandend</div>
						</div>
					</div>
					<div id="is_2_var2Anima" class="auction__tokens-box ussr">
						<div class="auction__tokens-tank">
							<img class="auction__tank-type" src="img/tanksIcons/ht.png">
							<img class="auction__tank-tank" src="img/tanks_full/ussr/is2_var2.png">
							<div class="auction__tank-name">ИС-2 вар.2</div>
						</div>
					</div>
					<div id="lorraine_40tAnima" class="auction__tokens-box fr">
						<div class="auction__tokens-tank">
							<img class="auction__tank-type" src="img/tanksIcons/ht.png">
							<img class="auction__tank-tank" src="img/tanks_full/france/lorraine_40t.png">
							<div class="auction__tank-name">Lorraine 40t</div>
						</div>
					</div>
					<div id="wz_111Anima" class="auction__tokens-box ch">
						<div class="auction__tokens-tank">
							<img class="auction__tank-type" src="img/tanksIcons/ht.png">
							<img class="auction__tank-tank" src="img/tanks_full/china/wz_111.png">
							<div class="auction__tank-name">WZ-111</div>
						</div>
					</div>
					<div id="amx_30_prot1Anima" class="auction__tokens-box fr">
						<div class="auction__tokens-tank">
							<img class="auction__tank-type" src="img/tanksIcons/lt.png">
							<img class="auction__tank-tank" src="img/tanks_full/france/amx30-1.png">
							<div class="auction__tank-name">AMX 30 prot.1</div>
						</div>
					</div>
					<div id="t_49Anima" class="auction__tokens-box usa">
						<div class="auction__tokens-tank">
							<img class="auction__tank-type" src="img/tanksIcons/lt.png">
							<img class="auction__tank-tank" src="img/tanks_full/usa/t49.png">
							<div class="auction__tank-name">T-49</div>
						</div>
					</div>
					<div id="amx_13_75Anima" class="auction__tokens-box fr">
						<div class="auction__tokens-tank">
							<img class="auction__tank-type" src="img/tanksIcons/lt.png">
							<img class="auction__tank-tank" src="img/tanks_full/france/amx_13_75.png">
							<div class="auction__tank-name">AMX 13 75</div>
						</div>
					</div>
					<div id="sy_152Anima" class="auction__tokens-box ussr">
						<div class="auction__tokens-tank">
							<img class="auction__tank-type" src="img/tanksIcons/td.png">
							<img class="auction__tank-tank" src="img/tanks_full/ussr/cy-152.png">
							<div class="auction__tank-name">СУ-152</div>
						</div>
					</div>
					<div id="scorpion_gAnima" class="auction__tokens-box gr">
						<div class="auction__tokens-tank">
							<img class="auction__tank-type" src="img/tanksIcons/td.png">
							<img class="auction__tank-tank" src="img/tanks_full/germany/scorpion.png">
							<div class="auction__tank-name">Scorpion G</div>
						</div>
					</div>
					<div id="t_28_defAnima" class="auction__tokens-box usa">
						<div class="auction__tokens-tank">
							<img class="auction__tank-type" src="img/tanksIcons/td.png">
							<img class="auction__tank-tank" src="img/tanks_full/usa/t28-defender.png">
							<div class="auction__tank-name">T-28 Defender</div>
						</div>
					</div>
					<div id="sy_130_pmAnima" class="auction__tokens-box ussr">
						<div class="auction__tokens-tank">
							<img class="auction__tank-type" src="img/tanksIcons/td.png">
							<img class="auction__tank-tank" src="img/tanks_full/ussr/cy-130-pm.png">
							<div class="auction__tank-name">СУ-130 ПМ</div>
						</div>
					</div>
					<div id="type_5_heavyAnima" class="auction__tokens-box jp">
						<div class="auction__tokens-tank">
							<img class="auction__tank-type" src="img/tanksIcons/ht.png">
							<img class="auction__tank-tank" src="img/tanks_full/japan/type_5_heavy.png">
							<div class="auction__tank-name">Type 5 Heavy</div>
						</div>
					</div>
					<div id="is_7Anima" class="auction__tokens-box ussr">
						<div class="auction__tokens-tank">
							<img class="auction__tank-type" src="img/tanksIcons/ht.png">
							<img class="auction__tank-tank" src="img/tanks_full/ussr/is-7.png">
							<div class="auction__tank-name">ИС-7</div>
						</div>
					</div>
					<div id="t_57_heavyAnima" class="auction__tokens-box usa">
						<div class="auction__tokens-tank">
							<img class="auction__tank-type" src="img/tanksIcons/ht.png">
							<img class="auction__tank-tank" src="img/tanks_full/usa/t57_heavy.png">
							<div class="auction__tank-name">T-57 Heavy</div>
						</div>
					</div>
					<div id="super_conquerorAnima" class="auction__tokens-box br">
						<div class="auction__tokens-tank">
							<img class="auction__tank-type" src="img/tanksIcons/ht.png">
							<img class="auction__tank-tank" src="img/tanks_full/britaine/super_conqueror.png">
							<div class="auction__tank-name">Super Conqueror</div>
						</div>
					</div>
					<div id="bat_chat_25tAnima" class="auction__tokens-box fr">
						<div class="auction__tokens-tank">
							<img class="auction__tank-type" src="img/tanksIcons/lt.png">
							<img class="auction__tank-tank" src="img/tanks_full/france/bat-chat_25t.png">
							<div class="auction__tank-name">Bat-Chat 25t</div>
						</div>
					</div>
					<div id="udes_15_16Anima" class="auction__tokens-box sw">
						<div class="auction__tokens-tank">
							<img class="auction__tank-type" src="img/tanksIcons/lt.png">
							<img class="auction__tank-tank" src="img/tanks_full/sweden/udes_15-16_v2.png">
							<div class="auction__tank-name">UDES 15/16</div>
						</div>
					</div>
					<div id="type_59_goldAnima" class="auction__tokens-box ch">
						<div class="auction__tokens-tank">
							<img class="auction__tank-type" src="img/tanksIcons/lt.png">
							<img class="auction__tank-tank" src="img/tanks_full/china/type-59_gold.png">
							<div class="auction__tank-name">Type-59 Gold</div>
						</div>
					</div>
					<div id="strv_103bAnima" class="auction__tokens-box sw">
						<div class="auction__tokens-tank">
							<img class="auction__tank-type" src="img/tanksIcons/td.png">
							<img class="auction__tank-tank" src="img/tanks_full/sweden/strv_103b.png">
							<div class="auction__tank-name">STRV 103b</div>
						</div>
					</div>
					<div id="grill_15Anima" class="auction__tokens-box gr">
						<div class="auction__tokens-tank">
							<img class="auction__tank-type" src="img/tanksIcons/td.png">
							<img class="auction__tank-tank" src="img/tanks_full/germany/grill_15.png">
							<div class="auction__tank-name">Grill-15</div>
						</div>
					</div>
					<div id="tortoiseAnima" class="auction__tokens-box br">
						<div class="auction__tokens-tank">
							<img class="auction__tank-type" src="img/tanksIcons/td.png">
							<img class="auction__tank-tank" src="img/tanks_full/britaine/tortoise.png">
							<div class="auction__tank-name">Tortoise</div>
						</div>
					</div>
					<div id="fosh_155Anima" class="auction__tokens-box fr">
						<div class="auction__tokens-tank">
							<img class="auction__tank-type" src="img/tanksIcons/td.png">
							<img class="auction__tank-tank" src="img/tanks_full/france/fosh_155.png">
							<div class="auction__tank-name">FOSH 155</div>
						</div>
					</div>
					<div id="t_34KharkivAnima" class="auction__tokens-box ua">
						<div class="auction__tokens-tank">
							<img class="auction__tank-type" src="img/tanksIcons/lt.png">
							<img class="auction__tank-tank" src="img/tanks_full/ukraine/t34_kharkiv.png">
							<div class="auction__tank-name">Т-34 Харків</div>
						</div>
					</div>
					<div id="t_34_kharkivAnima" class="auction__tokens-box ua">
						<div class="auction__tokens-tank">
							<img class="auction__tank-type" src="img/tanksIcons/lt.png">
							<img class="auction__tank-tank" src="img/tanks_full/ukraine/t-54.png">
							<div class="auction__tank-name">Т-54</div>
						</div>
					</div>
					<div id="t_34_kharkiv_skin1Anima" class="auction__tokens-box ua">
						<div class="auction__tokens-tank">
							<img class="auction__tank-type" src="img/tanksIcons/lt.png">
							<img class="auction__tank-tank" src="img/tanks_full/ukraine/t-54_patriot1.png">
							<div class="auction__tank-name">Т-54 Патріот</div>
						</div>
					</div>
					<div id="t_34_kharkiv_skin2Anima" class="auction__tokens-box ua">
						<div class="auction__tokens-tank">
							<img class="auction__tank-type" src="img/tanksIcons/lt.png">
							<img class="auction__tank-tank" src="img/tanks_full/ukraine/t-54_patriot2.png">
							<div class="auction__tank-name">Т-54 Патріот</div>
						</div>
					</div>
					<div id="t_64_bm_oplotAnima" class="auction__tokens-box ua">
						<div class="auction__tokens-tank">
							<img class="auction__tank-type" src="img/tanksIcons/ht.png">
							<img class="auction__tank-tank" src="img/tanks_full/ukraine/t64oplot.png">
							<div class="auction__tank-name">Т-64 БМ Оплот</div>
						</div>
					</div>
					<div id="t_64_bm_oplot_skinAnima" class="auction__tokens-box ua">
						<div class="auction__tokens-tank">
							<img class="auction__tank-type" src="img/tanksIcons/ht.png">
							<img class="auction__tank-tank" src="img/tanks_full/ukraine/t64oplot_skin.png">
							<div class="auction__tank-name">Розлючений Піксель</div>
						</div>
					</div>
					<div id="t_34_winterAnima" class="auction__tokens-box ua">
						<div class="auction__tokens-tank">
							<img class="auction__tank-type" src="img/tanksIcons/lt.png">
							<img class="auction__tank-tank" src="img/tanks_full/ukraine/t34_winter.png">
							<div class="auction__tank-name">Зимній снайпер</div>
						</div>
					</div>
				</div>
				<div id="congAnima" class="congratAnima"></div>
			</div>
			<div class="caseShadow-block">
				<div class="caseShadow"></div>
			</div>
			<div id="animaText" class="popup__animation-text">
				Open, open!
			</div>
			<form id="tankAnimationButton" class="formButton animation__button">
				<button id="animaButton" class="button buttonFormTank animation-button buttonClickSound">
					<div class="button-side button-side1"></div>
					<div class="button-side button-side2"></div>
					<div class="button-side button-side3"></div>
					<div class="button-side button-side4"></div>
					<p class="button-side button-text button__text-tanks displayBlock">Zeker!</p>
				</button>
			</form>
		</div>
		<div id="wit_sec" class="wit-second"></div>
		<video muted loop id="popupVideo" class="popup__video" src="video/candy.mp4"></video>
	</div>
	<div id="messages" class="messages">
	</div>
</body>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="js/auction.js"></script>
<script src="js/slick.min.js"></script>
<script src="js/headerText.js"></script>
<script src="https://cdn.jsdelivr.net/npm/axios@1.1.2/dist/axios.min.js"></script>
<audio id="audioClick" preload="auto" src="audio/click.mp3"></audio>
<audio id="audioClick" preload="auto" src="audio/case_opening.mp3"></audio>
<audio id="audioClick" preload="auto" src="audio/hlopushka.mp3"></audio>
<audio id="audioClick" preload="auto" src="audio/negative_message.mp3"></audio>
<audio id="audioClick" preload="auto" src="audio/message.mp3"></audio>
</html>