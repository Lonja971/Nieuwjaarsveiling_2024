//-------------------GOP STOP INDIEN NIET GEREGISTREERD--------------------------

function getCookie(name) {
	var value = "; " + document.cookie;
	var parts = value.split("; " + name + "=");
	
	if (parts.length === 2) {
		 return parts.pop().split(";").shift();
	}
}

$(document).ready(function () {
	if (!getCookie('player_id')) {
		 window.location.href = '../registration/registration.php';
	}
});

//---------------BASIS-INFO-GEBRUIKER------------------

const nameHTML = document.getElementById('name');
const moneyHTML = document.getElementById('gold');
const tokensHTML = document.getElementById('tokens');

var userInfo = {
	name: 'User',
	gold: 0,
	tokens: 0
};

//------------FUNCTIES-GEGEVENS KRIJGEN EN UPDATEN--------------

// Een functie om informatie uit de database op te halen en userInfo bij te werken
function getUserInfoFromDatabase() {
	var playerId = getCookie('player_id');

	$.ajax({
		 url: '../include/get_user_info.php',
		 method: 'GET',
		 data: { player_id: playerId },
		 success: function(data) {
			  userInfo = JSON.parse(data);
			  updateHTML();
		 },
		 error: function(xhr, status, error) {
			  console.error('Fout bij het ophalen van informatie uit de database: ' + error);
		 }
	});
}

// Functie om de cookiewaarde op naam te krijgen
function getCookie(name) {
	var nameEQ = name + "=";
	var ca = document.cookie.split(';');
	for (var i = 0; i < ca.length; i++) {
		 var c = ca[i];
		 while (c.charAt(0) == ' ') c = c.substring(1, c.length);
		 if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
	}
	return null;
}

// Functie voor het bijwerken van HTML-elementen
function updateHTML() {
	nameHTML.innerText = userInfo.player_name;
	moneyHTML.innerText = userInfo.gold;
	tokensHTML.innerText = userInfo.tokens;
	nameHTML.href = `WomT/reels/${userInfo.player_name}.html`;
}

$(document).ready(function() {
	getUserInfoFromDatabase();
});

// Functie voor het bijwerken van informatie in de database
function updateDatabase() {
	$.ajax({
		url: '../include/update_database.php',
		method: 'POST',
		contentType: 'application/json',
		data: JSON.stringify(userInfo),
		cache: false,
		success: function(response) {
			console.log('De informatie in de database is succesvol bijgewerkt.');
		},
		error: function(xhr, status, error) {
			console.error('Fout bij het bijwerken van informatie in de database:', status, error);
		}
	});
}

//--------------------------DEFECTEN-MET-HOVER------------------------------

const infoLinks = document.querySelectorAll('.info-a');
infoLinks.forEach(infoLink => {
  infoLink.addEventListener('mouseenter', () => {
   const tankBox = infoLink.closest('.auction__tank-box');
	if (tankBox) {
      tankBox.classList.add('no-hover');
   }
  });
  infoLink.addEventListener('mouseleave', () => {
   const tankBox = infoLink.closest('.auction__tank-box');

   if (tankBox) {
      tankBox.classList.remove('no-hover');
   }
  	});
});

//--------------------------MELODIEËN------------------------------

const buttons = document.querySelectorAll('.buttonClickSound');

buttons.forEach(function(button) {
   button.addEventListener('click', function() {
		const audioClick = new Audio("audio/click.mp3");
		audioClick.play();
   });
});

function newMessage(){
	const audioMessage = new Audio("audio/message.mp3");
	audioMessage.play();
}
function negativeMessage(){
	const audioMessage = new Audio("audio/negative_message.mp3");
	audioMessage.play();
}

//--------------------------CHECK-GEKOCHTE TANKS------------------------------

const kv_2Block = document.getElementById('kv-2Box');
const togg2Block = document.getElementById('togg2Box');
const amx_els_bicBlock = document.getElementById('amx_els_bicBox');
const crombell_bBlock = document.getElementById('cromwell_bBox');
const bt_svBlock = document.getElementById('bt-svBox');
const s_35_caBlock = document.getElementById('s35_caBox');
const cherchill_gcBlock = document.getElementById('cherchill_gcBox');
const wz_pilBlock = document.getElementById('wz_pilBox');
const is_2_var2Block = document.getElementById('is-2_var2Box');
const lorraine_40tBlock = document.getElementById('lorraine_40tBox');
const wz_111Block = document.getElementById('wz-111Box');
const amx_30_prot1Block = document.getElementById('amx_30_prot1Box');
const t_49Block = document.getElementById('t-49Box');
const amx_13_75Block = document.getElementById('amx_13_75Box');
const sy_152Block = document.getElementById('sy-152Box');
const scorpion_gBlock = document.getElementById('scorpion_gBox');
const t_28_defBlock = document.getElementById('t-28_defBox');
const sy_130_pmBlock = document.getElementById('sy-130_pmBox');
const type_5_heavyBlock = document.getElementById('type_5_heavyBox');
const is_7Block = document.getElementById('is-7Box');
const t_57_heavyBlock = document.getElementById('t-57_heavyBox');
const super_conquerorBlock = document.getElementById('super_conquerorBox');
const bat_chat_25tBlock = document.getElementById('bat-chat_25tBox');
const udes_15_16Block = document.getElementById('udes_15/16Box');
const type_59_goldBlock = document.getElementById('type-59_goldBox');
const strv_103bBlock = document.getElementById('strv_103bBox');
const grill_15Block = document.getElementById('grill_15Box');
const tortoiseBlock = document.getElementById('tortoiseBox');
const fosh_155Block = document.getElementById('fosh_155Box');
const t_34Block = document.getElementById('t-34_kharkivBox');
const t_64Block = document.getElementById('t-64_bm_oplotBox');
const t_34_s1Block = document.getElementById('t-34_kharkiv_skin1Box');
const t_34_s2Block = document.getElementById('t-34_kharkiv_skin2Box');
const t_64_sBlock = document.getElementById('t-64_bm_oplot_skinBox');
const t_34_winterBlock = document.getElementById('t-34_winterBox');
const goldBlock = document.getElementById('goldBox');


const firstWaveMain = document.getElementById('firstWaveMain');
const secondWaveMain = document.getElementById('secondWaveMain');
const thirdWaveMain = document.getElementById('thirdWaveMain');
const firstWaveSecondtext = document.getElementById('firstWaveSecondtext');
const secondWaveSecondtext = document.getElementById('secondWaveSecondtext');
const thirdWaveSecondtext = document.getElementById('thirdWaveSecondtext');
const timerMaintext1 = document.getElementById("timerMaintext1");
const timerMaintext2 = document.getElementById("timerMaintext2");
const timerMaintext3 = document.getElementById("timerMaintext3");

const allTanksBlocks = {
	'КВ-2': kv_2Block,
	'Togg II*': togg2Block,
	'Amx els bic': amx_els_bicBlock,
	'Cromwell B': crombell_bBlock,
	'БТ-СВ': bt_svBlock,
	'S35 CA': s_35_caBlock,
	'Cherchill GC': cherchill_gcBlock,
	'WZ Blazing': wz_pilBlock,
	'ИС-2 вар2': is_2_var2Block,
	'Lorraine 40t': lorraine_40tBlock,
	'WZ-111': wz_111Block,
	'AMX 30 prot1': amx_30_prot1Block,
	'T-49': t_49Block,
	'AMX-13-75': amx_13_75Block,
	'СУ-152': sy_152Block,
	'T-28 Defender': t_28_defBlock,
	'СУ-130 ПМ': sy_130_pmBlock,
	'Type 5 Heavy': type_5_heavyBlock,
	'ИС-7': is_7Block,
	'T-57 Heavy': t_57_heavyBlock,
	'Super Conqueror': super_conquerorBlock,
	'Bat-chat 25t': bat_chat_25tBlock,
	'Udes 15/16': udes_15_16Block,
	'Type-59 Gold': type_59_goldBlock,
	'Strv 103b': strv_103bBlock,
	'Tortoise': tortoiseBlock,
	'FOSH 155': fosh_155Block,
	'Т-54': t_34Block,
	'Т-54 Патріот1': t_34_s1Block,
	'Т-54 Патріот2': t_34_s2Block,
	'Т-64 БМ Оплот': t_64Block,
	'Т-64 БМ Оплот Evil pixel': t_64_sBlock,
	'Winter sniper': t_34_winterBlock
};

function checkBuyedTanks() {
	$.ajax({
		 url: '../include/userTanksSynch.php',
		 method: 'GET',
		 dataType: 'json',
		 success: function (data) {
			let userTanks = Array.isArray(data) ? data : [data];
	  
			Object.keys(allTanksBlocks).forEach(function (tankName) {
				 if (userTanks.includes(tankName)) {
					allTanksBlocks[tankName].classList.add('buyedTank');
					if (tankName == 'Т-54'){
						t_34_s1Block.classList.remove('tank-locked');
						t_34_s2Block.classList.remove('tank-locked');
					}else if (tankName == 'Т-64 БМ Оплот'){
						t_64_sBlock.classList.remove('tank-locked');
					}
				}
			});
	  },		 
	});
}

// We roepen de functie aan wanneer de pagina wordt geladen
$(document).ready(function () {
	checkBuyedTanks();
});

//--------------------------MUNTEN------------------------------

let tokenInfoDiv = document.getElementById('tokenInfoDiv');
let response;
let tokenButton = document.getElementById('tokenButton');



function tokensTimerSynch(num, newValue = null, callback) {
    const playerId = getCookie('player_id');

    if (playerId) {
        const xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function () {
            if (xhr.readyState == 4 && xhr.status == 200) {
                response = JSON.parse(xhr.responseText);
                handleTokensTimerResponse(response, num);
                if (callback) {
                    callback(response);
                }
                updateButtonClass(response);
            }
        };

        let url = '../include/getTokens.php?player_id=' + playerId + '&num=' + num;
        if (num === 3 && newValue !== null) {
            url += '&newValue=' + newValue;
        }

        xhr.open('GET', url, true);
        xhr.send();
    } else {
        console.error('Player ID not found in cookies');
    }
}

function updateButtonClass(response) {
	const yourButtonId = 'tokenButton';
	const tokenButton = document.getElementById(yourButtonId);

	if (tokenButton) {
		 if (response.tokensTimer === null) {
			  tokenButton.classList.remove('lampsBuyed');
		 } else {
			  tokenButton.classList.add('lampsBuyed');
		 }
	} else {
		 console.error('Button not found');
	}
}

function handleTokensTimerResponse(response, num) {
    switch (num) {
        case 1:
            if (response.tokensTimer === null) {
                console.log('Token Status: 0');
            } else {
            }
            break;
        case 2:
            console.log('Token Timer deleted');
            break;
        case 3:
            console.log('Token Timer updated');
            break;
        default:
            console.error('Invalid num value');
    }
}

function getCookie(name) {
    const match = document.cookie.match(new RegExp('(^| )' + name + '=([^;]+)'));
    if (match) return match[2];
    return null;
}

function tokensChecker(response) {
	if (response) {
		console.log('y2');
		 const lastClickTime = response.timerValue;
		 const currentTime = new Date().getTime();

		 if (lastClickTime === null || lastClickTime === undefined || (currentTime - Number(lastClickTime) >= 3600000)) {
			tokenButton.classList.remove('lampsBuyed');
			startTokens();
			tokensTimerSynch(2);
			tokenInfoDiv.innerHTML = 'Afhaal!';
		 } else {
				console.log('y3');
				const numericTime = Number(lastClickTime);
				const date = new Date(numericTime);
			
				const hours = date.getHours();
				const hoursPlusOne = hours + 1;
				const minutes = date.getMinutes();
				
				const formattedHours = hoursPlusOne < 10 ? `0${hoursPlusOne}` : hoursPlusOne;
				const formattedMinutes = minutes < 10 ? `0${minutes}` : minutes;
				const timeString = `${formattedHours}:${formattedMinutes}`;
				
				document.getElementById('tokenInfoDiv').innerHTML = timeString;
		 }
	} else {
		 console.error('Response is undefined or null');
	}
}

function startTokens() {
	tokenButton.addEventListener("click", function () {
		 const playerId = getCookie('player_id');
		 if (playerId) {
			  userInfo.tokens += 1;
			  updateHTML();
			  updateDatabase();
		 } else {
			  console.error('Speler-ID niet gevonden in cookies');
		 }
		 tokenButton.classList.add('lampsBuyed');

		 const currentTime = new Date().getTime();

		 const newValue = currentTime;
		 tokensTimerSynch(3, newValue, function (response) {
			  updateButtonClass(response);
		 });

		 const popup__message = document.createElement('div');
		 popup__message.innerHTML = `
		 <div class="popup__message">
			 <div class="popup__message-text">
				 Je hebt ontvangen: <span class="popup__message-value">+1</span><img class="popup__message-img" src="img/resurses/token.png">
			 </div>
		 </div>
		 `;
		 newMessage();
		 document.getElementById('messages').appendChild(popup__message);
		 setTimeout(function () {
			 popup__message.remove();
		 }, 9000);
	});
}

function updateButtonClass(response) {
	const tokenButton = document.getElementById('lampsBuyed');

	if (tokenButton) {
		 if (response.tokensTimer === null) {
			  tokenButton.classList.remove('lampsBuyed');
		 } else {
			  tokenButton.classList.add('lampsBuyed');
		 }
	}
}

const interval = 1000;

tokensTimerSynch(1, null, function(response) {
	tokensChecker(response);
	updateButtonClass(response);
	console.log('y1');
});

//--------------------------INFORMATIE-OVER-ALLE-TANKS------------------------------

let kv2Price = document.getElementById('kv2Price');
let pz_b2Price = document.getElementById('pz_b2Price');
let togg2_Price = document.getElementById('togg2Price');
let amx_els_bicPrice = document.getElementById('amx_els_bicPrice');
let cromwell_bPrice = document.getElementById('cromwell_bPrice');
let bt_svPrice = document.getElementById('bt_svPrice');
let s35_caPrice = document.getElementById('s35_caPrice');
let cherchill_gcPrice = document.getElementById('cherchill_gcPrice');
let wz_pilPrice = document.getElementById('wz_pilPrice');
let is_2_var2Price = document.getElementById('is_2_var2Price');
let lorraine_40tPrice = document.getElementById('lorraine_40tPrice');
let wz_111Price = document.getElementById('wz_111Price');
let amx_30_prot1Price = document.getElementById('amx_30_prot1Price');
let t_49Price = document.getElementById('t_49Price');
let amx_13_75Price = document.getElementById('amx_13_75Price');
let sy_152Price = document.getElementById('sy_152Price');
let scorpion_gPrice = document.getElementById('scorpion_gPrice');
let t_28_defPrice = document.getElementById('t_28_defPrice');
let sy_130_pmPrice = document.getElementById('sy_130_pmPrice');
let type_5_heavyPrice = document.getElementById('type_5_heavyPrice');
let is_7Price = document.getElementById('is_7Price');
let t_57_heavyPrice = document.getElementById('t_57_heavyPrice');
let super_conquerorPrice = document.getElementById('super_conquerorPrice');
let bat_chat_25tPrice = document.getElementById('bat_chat_25tPrice');
let udes_15_16Price = document.getElementById('udes_15_16Price');
let type_59_gPrice = document.getElementById('type_59_gPrice');
let strv_103bPrice = document.getElementById('strv_103bPrice');
let grill_15Price = document.getElementById('grill_15Price');
let tortoisePrice = document.getElementById('tortoisePrice');
let fosh_155Price = document.getElementById('fosh_155Price');


var tanksArrays = {
	kv_2 : ['КВ-2',8000,1,],
	togg2 : ['TOGG II*',8000,2,],
	amx_els_bic : ['AMX ELS bic',7500,3,],
	crombell_b : ['Cromwell Berlin',7500,4,],
	bt_sv : ['БТ-СВ',7500,5,],
	s35_ca : ['S35 CA',7000,6,],
	cherchill_gc : ['Cherchill GC',7000,7,],
	wz_pil : ['WZ Пилаючий',7000,8,],
	is_2_var2 : ['ИС-2 вар.2',8000,9,],
	lorraine_40t : ['Lorraine 40t',7500,10,],
	wz_111 : ['WZ-111',7500,11,],
	amx_30_prot1 : ['AMX 30 prot.1',8000,12,],
	t_49 : ['T-49',8500,13,],
	amx_13_75 : ['AMX 13 75',7000,14,],
	sy_152 : ['СУ-152',7500,15,],
	t_28_def : ['T-28 Defender',8000,16,],
	sy_130_pm : ['СУ-130 ПМ',8000,17,],
	type_5_heavy : ['Type 5 Heavy',10000,18,],
	is_7 : ['ИС-7',8500,19,],
	t_57_heavy : ['T-57 Heavy',8000,20,],
	super_conqueror : ['Super Conqueror',8500,21,],
	bat_chat_25t : ['Bat-Chat 25t',8000,22,],
	udes_15_16 : ['Udes 15/16',8500,23,],
	type_59_gold : ['Type-59 Gold',8000,24,],
	strv_103b : ['Strv 103b',9000,25,],
	tortoise : ['Tortoise',8000,26,],
	fosh_155 : ['FOSH 155',8500,27,],
	t_64_bm_oplot : ['Т-64 БМ Оплот','12',30,],
	t_34_kharkiv : ['Т-54','5',29,],
	t_34_winter : ['Т-34 Зимній снайпер','3',33,],
	t_64_bm_oplot_skin : ['Т-64 БМ Оплот Скін','3',34,],
	t_34_kharkiv_skin1 : ['Т-54 Патріот1','2',31,],
	t_34_kharkiv_skin2 : ['Т-54 Патріот2','2',32,],
	gold : ['Gold','2',],
};

//--------------------------TIMER------------------------------

let timers = [
	{ date: new Date("11 04, 2023 21:33:00"), wave:0, number: 0.1},
	{ date: new Date("11 04, 2023 21:33:15"), wave:1, number: 1},
	{ date: new Date("11 04, 2023 21:33:30"), wave:1, number: 1},
	{ date: new Date("11 04, 2023 21:33:45"), wave:1, number: 1.3},
	{ date: new Date("11 04, 2023 21:34:00"), wave:1, number: 1.4},
	{ date: new Date("11 04, 2023 21:34:15"), wave:1, number: 0.2},
	{ date: new Date("12 04, 2023 21:34:30"), wave:2, number: 2},
	{ date: new Date("11 04, 2023 21:34:45"), wave:2, number: 2},
	{ date: new Date("11 04, 2023 21:35:00"), wave:2, number: 2.3},
	{ date: new Date("11 04, 2023 21:35:15"), wave:2, number: 2.4},
	{ date: new Date("11 04, 2023 21:35:30"), wave:2, number: 0.3},
	{ date: new Date("11 04, 2023 21:40:45"), wave:3, number: 3},
	{ date: new Date("11 04, 2023 21:41:00"), wave:3, number: 3},
	{ date: new Date("11 04, 2023 21:41:15"), wave:3, number: 3},
	{ date: new Date("11 04, 2023 21:41:30"), wave:3, number: 3.4},
	{ date: new Date("11 04, 2023 21:41:45"), wave:3, number: 3.5},
];

let timerNum = 0;
timer();

function timer() {
	if (timerNum >= timers.length) {
		return;
	} else {
		let currentTimer = timers[timerNum].date;

		let x = setInterval(function () {
			let now = new Date().getTime();
			let t = currentTimer - now;
			let hours = Math.floor((t % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
			let minutes = Math.floor((t % (1000 * 60 * 60)) / (1000 * 60));
			let seconds = Math.floor((t % (1000 * 60)) / 1000);
			let waveNum = timers[timerNum].wave;
			if(waveNum > 0){
				document.getElementById("hour"+waveNum).innerHTML = hours;
				document.getElementById("minute"+waveNum).innerHTML = minutes;
				document.getElementById("second"+waveNum).innerHTML = seconds;
			}

			if (t < 0) {
				timerNum++;
				clearInterval(x);
				console.log(timers[timerNum - 1].number,timerNum);
				if(timers[timerNum - 1].number == 0.1){
					kv_2Block.classList.remove('tank-closed');
					togg2Block.classList.remove('tank-closed');
					amx_els_bicBlock.classList.remove('tank-closed');
					crombell_bBlock.classList.remove('tank-closed');;
					bt_svBlock.classList.remove('tank-closed');
					s_35_caBlock.classList.remove('tank-closed');
					cherchill_gcBlock.classList.remove('tank-closed');
					wz_pilBlock.classList.remove('tank-closed');
					timerMaintext1.classList.remove('noneText');
					//tokensStart();
				}else if (timers[timerNum - 1].number == 1) {
					minusPriceFirstWave();
					firstWaveSecondtext.innerHTML = `(Nadat de timer is afgelopen, daalt de prijs met 1000 goud)`;
			  	}else if (timers[timerNum - 1].number == 1.3){
					minusPriceFirstWave();
				}else if (timers[timerNum - 1].number == 1.4){
					minusPriceFirstWave();
					is_2_var2Block.classList.remove('tank-locked');
					is_2_var2Block.classList.add('tank-closed');
					lorraine_40tBlock.classList.remove('tank-locked');
					lorraine_40tBlock.classList.add('tank-closed');
					wz_111Block.classList.remove('tank-locked');
					wz_111Block.classList.add('tank-closed');
					amx_30_prot1Block.classList.remove('tank-locked');
					amx_30_prot1Block.classList.add('tank-closed');
					t_49Block.classList.remove('tank-locked');
					t_49Block.classList.add('tank-closed');
					amx_13_75Block.classList.remove('tank-locked');
					amx_13_75Block.classList.add('tank-closed');
					sy_152Block.classList.remove('tank-locked');
					sy_152Block.classList.add('tank-closed');
					t_28_defBlock.classList.remove('tank-locked');
					t_28_defBlock.classList.add('tank-closed');
					sy_130_pmBlock.classList.remove('tank-locked');
					sy_130_pmBlock.classList.add('tank-closed');
					firstWaveSecondtext.innerHTML = `!!! Nadat de timer is verstreken, is het onmogelijk om <span class="red">First </span>wave-tanks te kopen !!!`;
				}else if (timers[timerNum - 1].number == 0.2){
					kv_2Block.classList.add('tank-closed');
					togg2Block.classList.add('tank-closed');
					amx_els_bicBlock.classList.add('tank-closed');
					crombell_bBlock.classList.add('tank-closed');;
					bt_svBlock.classList.add('tank-closed');
					s_35_caBlock.classList.add('tank-closed');
					cherchill_gcBlock.classList.add('tank-closed');
					wz_pilBlock.classList.add('tank-closed');
					firstWaveMain.innerHTML = `Voltooid`;
					timerMaintext1.classList.add('noneText');
					firstWaveSecondtext.innerHTML = ``;
					is_2_var2Block.classList.remove('tank-closed');
					lorraine_40tBlock.classList.remove('tank-closed');
					wz_111Block.classList.remove('tank-closed');
					amx_30_prot1Block.classList.remove('tank-closed');
					t_49Block.classList.remove('tank-closed');
					amx_13_75Block.classList.remove('tank-closed');
					sy_152Block.classList.remove('tank-closed');
					t_28_defBlock.classList.remove('tank-closed');
					sy_130_pmBlock.classList.remove('tank-closed');
					timerMaintext2.classList.remove('noneText');
				} else if (timers[timerNum - 1].number == 2) {
					minusPriceSecondWave();
					secondWaveSecondtext.innerHTML = `(Nadat de timer is afgelopen, daalt de prijs met 1000 goud)`;
			  	}else if (timers[timerNum - 1].number == 2.3){
					minusPriceSecondWave();
				}else if (timers[timerNum - 1].number == 2.4){
					minusPriceSecondWave();
					type_5_heavyBlock.classList.remove('tank-locked');
					type_5_heavyBlock.classList.add('tank-closed');
					is_7Block.classList.remove('tank-locked');
					is_7Block.classList.add('tank-closed');
					t_57_heavyBlock.classList.remove('tank-locked');
					t_57_heavyBlock.classList.add('tank-closed');
					super_conquerorBlock.classList.remove('tank-locked');
					super_conquerorBlock.classList.add('tank-closed');
					bat_chat_25tBlock.classList.remove('tank-locked');
					bat_chat_25tBlock.classList.add('tank-closed');
					udes_15_16Block.classList.remove('tank-locked');
					udes_15_16Block.classList.add('tank-closed');
					type_59_goldBlock.classList.remove('tank-locked');
					type_59_goldBlock.classList.add('tank-closed');
					strv_103bBlock.classList.remove('tank-locked');
					strv_103bBlock.classList.add('tank-closed');
					tortoiseBlock.classList.remove('tank-locked');
					tortoiseBlock.classList.add('tank-closed');
					fosh_155Block.classList.remove('tank-locked');
					fosh_155Block.classList.add('tank-closed');
					secondWaveSecondtext.innerHTML = `!!! Nadat de timer is verstreken, is het onmogelijk om <span class="red">Tweede</span> golftanks te kopen !!!`;
				}else if (timers[timerNum - 1].number == 0.3){
					is_2_var2Block.classList.add('tank-closed');
					lorraine_40tBlock.classList.add('tank-closed');
					wz_111Block.classList.add('tank-closed');
					amx_30_prot1Block.classList.add('tank-closed');
					t_49Block.classList.add('tank-closed');
					amx_13_75Block.classList.add('tank-closed');
					sy_152Block.classList.add('tank-closed');
					t_28_defBlock.classList.add('tank-closed');
					sy_130_pmBlock.classList.add('tank-closed');
					secondWaveMain.innerHTML = `Voltooid`;
					timerMaintext2.classList.add('noneText');
					secondWaveSecondtext.innerHTML = ``;
		
					type_5_heavyBlock.classList.remove('tank-closed');
					is_7Block.classList.remove('tank-closed');
					t_57_heavyBlock.classList.remove('tank-closed');
					super_conquerorBlock.classList.remove('tank-closed');
					bat_chat_25tBlock.classList.remove('tank-closed');
					udes_15_16Block.classList.remove('tank-closed');
					type_59_goldBlock.classList.remove('tank-closed');
					strv_103bBlock.classList.remove('tank-closed');
					tortoiseBlock.classList.remove('tank-closed');
					fosh_155Block.classList.remove('tank-closed');
					timerMaintext3.classList.remove('noneText');
				} else if (timers[timerNum - 1].number == 3) {
					minusPriceThirdWave();
					thirdWaveSecondtext.innerHTML = `(Nadat de timer is afgelopen, daalt de prijs met 1000 goud)`;
			  	}else if(timers[timerNum - 1].number == 3.4){
					minusPriceThirdWave();
					thirdWaveSecondtext.innerHTML = `!!! Dit is de laatste kans om deze tanks te kopen !!!`;
				}else if(timers[timerNum - 1].number == 3.5){
					type_5_heavyBlock.classList.add('tank-closed');
					is_7Block.classList.add('tank-closed');
					t_57_heavyBlock.classList.add('tank-closed');
					super_conquerorBlock.classList.add('tank-closed');
					bat_chat_25tBlock.classList.add('tank-closed');
					udes_15_16Block.classList.add('tank-closed');
					type_59_goldBlock.classList.add('tank-closed');
					strv_103bBlock.classList.add('tank-closed');
					tortoiseBlock.classList.add('tank-closed');
					fosh_155Block.classList.add('tank-closed');
					thirdWaveMain.innerHTML = `Voltooid`;
					timerMaintext3.classList.add('noneText');
					thirdWaveSecondtext.innerHTML = ``;
					tokensStart(tokenStart = 0);
				}
				timer();
			}
		}, 10);
	}
}

//--------------------------RESULTATEN-COMPLETE-WAVE------------------------------

function minusPriceFirstWave() {
	tanksArrays['kv_2'][1] -= 1000;
	tanksArrays['togg2'][1] -= 1000;
	tanksArrays['amx_els_bic'][1] -= 1000;
	tanksArrays['crombell_b'][1] -= 1000;
	tanksArrays['bt_sv'][1] -= 1000;
	tanksArrays['s35_ca'][1] -= 1000;
	tanksArrays['cherchill_gc'][1] -= 1000;
	tanksArrays['wz_pil'][1] -= 1000;
	kv2Price.innerHTML = tanksArrays['kv_2'][1];
	togg2Price.innerHTML = tanksArrays['togg2'][1];
	amx_els_bicPrice.innerHTML = tanksArrays['amx_els_bic'][1];
	cromwell_bPrice.innerHTML = tanksArrays['crombell_b'][1];
	bt_svPrice.innerHTML = tanksArrays['bt_sv'][1];
	s35_caPrice.innerHTML = tanksArrays['s35_ca'][1];
	cherchill_gcPrice.innerHTML = tanksArrays['cherchill_gc'][1];
	wz_pilPrice.innerHTML = tanksArrays['wz_pil'][1];
};

function minusPriceSecondWave() {
	tanksArrays['is_2_var2'][1] -= 1000;
	tanksArrays['lorraine_40t'][1] -= 1000;
	tanksArrays['wz_111'][1] -= 1000;
	tanksArrays['amx_30_prot1'][1] -= 1000;
	tanksArrays['t_49'][1] -= 1000;
	tanksArrays['amx_13_75'][1] -= 1000;
	tanksArrays['sy_152'][1] -= 1000;
	tanksArrays['t_28_def'][1] -= 1000;
	tanksArrays['sy_130_pm'][1] -= 1000;
	is_2_var2Price.innerHTML = tanksArrays['is_2_var2'][1];
	lorraine_40tPrice.innerHTML = tanksArrays['lorraine_40t'][1];
	wz_111Price.innerHTML = tanksArrays['wz_111'][1];
	amx_30_prot1Price.innerHTML = tanksArrays['amx_30_prot1'][1];
	t_49Price.innerHTML = tanksArrays['t_49'][1];
	amx_13_75Price.innerHTML = tanksArrays['amx_13_75'][1];
	sy_152Price.innerHTML = tanksArrays['sy_152'][1];
	t_28_defPrice.innerHTML = tanksArrays['t_28_def'][1];
	sy_130_pmPrice.innerHTML = tanksArrays['sy_130_pm'][1];
};


function minusPriceThirdWave() {
	tanksArrays['type_5_heavy'][1] -= 1000;
	tanksArrays['is_7'][1] -= 1000;
	tanksArrays['t_57_heavy'][1] -= 1000;
	tanksArrays['super_conqueror'][1] -= 1000;
	tanksArrays['bat_chat_25t'][1] -= 1000;
	tanksArrays['udes_15_16'][1] -= 1000;
	tanksArrays['type_59_gold'][1] -= 1000;
	tanksArrays['strv_103b'][1] -= 1000;
	tanksArrays['grill_15'][1] -= 1000;
	tanksArrays['tortoise'][1] -= 1000;
	tanksArrays['fosh_155'][1] -= 1000;
	type_5_heavyPrice.innerHTML = tanksArrays['type_5_heavy'][1];
	is_7Price.innerHTML = tanksArrays['is_7'][1];
	t_57_heavyPrice.innerHTML = tanksArrays['t_57_heavy'][1];
	super_conquerorPrice.innerHTML = tanksArrays['super_conqueror'][1];
	bat_chat_25tPrice.innerHTML = tanksArrays['bat_chat_25t'][1];
	udes_15_16Price.innerHTML = tanksArrays['udes_15_16'][1];
	type_59_gPrice.innerHTML = tanksArrays['type_59_gold'][1];
	strv_103bPrice.innerHTML = tanksArrays['strv_103b'][1];
	tortoisePrice.innerHTML = tanksArrays['tortoise'][1];
	fosh_155Price.innerHTML = tanksArrays['fosh_155'][1];
};

//--------------------------PROMOTIE CODES------------------------------

let popupPromo = document.getElementById('popupPromo');
let loginPromo = document.getElementById('loginPromo');
let promoBox = document.getElementById('popupLoginBox');

document.getElementById('promoCodes').addEventListener('submit', function (e) {
	e.preventDefault();
	body.classList.add('lock');
	popupPromo.classList.add('promoActive');
	document.getElementById('promoBack').addEventListener('click', function (e) {
		e.preventDefault();
		body.classList.remove('lock');
		popupPromo.classList.remove('promoActive');
	});
});

promoBox.addEventListener('submit', function (e) {
	e.preventDefault();
	let promoCode = loginPromo.value.toLowerCase();
	if (promoCode === 'exit') {
		var playerIdValue = getCookie('player_id');
		if (playerIdValue) {
			 document.cookie = 'player_id' + '=;expires=Thu, 01 Jan 1970 00:00:00 GMT;path=/';
		}
		window.location.href = '../registration/registration.php';

		function getCookie(name) {
			var match = document.cookie.match(new RegExp('(^| )' + name + '=([^;]+)'));
			if (match) return match[2];
			return null;
	  }
  }

	$.ajax({
		url: '../include/check_promo_code.php',
		method: 'POST',
		dataType: 'json',
		data: { promoCode: loginPromo.value.toLowerCase() },
		success: function (data) {
			 if (data.success) {
				// Promotiecode is geldig
				let promoBox = document.getElementById('popupLoginBox');
				promoBox.classList.add('promoAlert');
				setTimeout(function () {
					promoBox.classList.remove('promoAlert');
				}, 5000);

				userInfo.gold = parseInt(userInfo.gold, 10) + parseInt(data.message, 10);
				updateHTML();
				updateDatabase();
				  
				const popup__message = document.createElement('div');
				popup__message.innerHTML = `
				<div class="popup__message">
					<div class="popup__message-text">
						Je hebt ontvangen: <span class="popup__message-value">+${data.message}</span><img class="popup__message-img" src="img/resurses/gold.png">
					</div>
			   </div>
				`;
				newMessage();
				document.getElementById('messages').appendChild(popup__message);
				setTimeout(function () {
				  popup__message.remove();
				}, 9000);
			 } else {
				  // Promotiecode is ongeldig of al geactiveerd
				  let promoBox = document.getElementById('popupLoginBox');
				  promoBox.classList.add('promoAlerp');
				  setTimeout(function () {
						promoBox.classList.remove('promoAlerp');
				  }, 5000);
			 }
		},
		error: function () {
			 console.log('Er is een fout opgetreden tijdens het uitvoeren van een verzoek aan de server');
		}
  });  
  
});

//--------------------------VERWERVING VAN TANKS------------------------------

let messagePopupNegative = document.getElementById('popup__message-negative');

function messageNegative() {
	const popup__message = document.createElement('div');
	popup__message.innerHTML = `
	<div class="popup__message popup__message-negative">
		 <div class="popup__message-text">
		 	Niet genoeg middelen!
		 </div>
	</div>
	`;
	negativeMessage();
	document.getElementById('messages').appendChild(popup__message);
	setTimeout(function () {
		popup__message.remove();
	}, 9000);

};

function purchase(tankId, currency) {
	event.preventDefault();
	var tank = tanksArrays[tankId];
	var tank_id = tank[2];
	var tankName = tank[0];
	var tankPrice = tank[1];

	if (currency == 'gold') {
		 if (userInfo.gold - tankPrice >= 0) {
			  animaSynch();
			  document.getElementById(tankId + 'Anima').classList.remove('displayNone');
			  anima(0);

			  userInfo.gold -= tankPrice;
			  updateHTML();
			  updateDatabase();
			  addTankToPlayer(tank_id);
		 } else {
			  messageNegative();
		 }
	}else if(currency == 'tokens'){
		if (userInfo.tokens - tankPrice >= 0) {
			animaSynch();
			document.getElementById(tankId+'Anima').classList.remove('displayNone');
			anima(0);

			userInfo.tokens -= tankPrice;
			updateHTML();
			updateDatabase();
			addTankToPlayer(tank_id);
		} else {
			messageNegative();
		};
	}else if(currency == 'skin'){
		if (userInfo.tokens - tankPrice >= 0) {
			userInfo.tokens -= tankPrice;
			updateHTML();
			updateDatabase();
			addTankToPlayer(tank_id);
		} else {
			messageNegative();
		};
	}else if(currency == 'goldItem'){
		if (userInfo.tokens - tankPrice >= 0) {
			userInfo.tokens -= 2;
			userInfo.gold += 1000;
			updateHTML();
			updateDatabase();
			const popup__message = document.createElement('div');
			popup__message.innerHTML = `
			<div class="popup__message">
				 <div class="popup__message-text">
				 	Je hebt ontvangen: <span class="popup__message-value">+1000</span><img class="popup__message-img" src="img/resurses/gold.png">
				 </div>
			</div>
			`;
			newMessage();
			document.getElementById('messages').appendChild(popup__message);
			setTimeout(function () {
				popup__message.remove();
			}, 9000);
			goldBlock.classList.add('buyedTank');
			setTimeout(function () {
				goldBlock.classList.remove('buyedTank');
			}, 5000);
		} else {
			messageNegative();
		};
	}
}

function addTankToPlayer(tank_id) {
	const playerId = getCookie('player_id');
	
	if (playerId) {
		 $.ajax({
			  url: '../include/add_tank_to_player.php',
			  method: 'POST',
			  dataType: 'json',
			  data: { playerId: playerId, tankId: tank_id },
			  success: function (response) {
					console.log('Tank toegevoegd aan speler:', response);
					checkBuyedTanks();
			  },
			  error: function (xhr, status, error) {
					console.error('Fout bij toevoegen van tank aan speler:', status, error);
			  }
		 });
	} else {
		 console.error('Speler-ID niet gevonden in cookies');
	}
}


//--------------------------ANIMATIE-AANKOOP------------------------------

const hlopushka = new Audio("audio/hlopushka.mp3");
const popupVideo = document.getElementById('popupVideo');

function animaSynch() {
	document.getElementById('kv_2Anima').classList.add('displayNone');
	document.getElementById('pz_b2Anima').classList.add('displayNone');
	document.getElementById('togg2Anima').classList.add('displayNone');
	document.getElementById('amx_els_bicAnima').classList.add('displayNone');
	document.getElementById('crombell_bAnima').classList.add('displayNone');
	document.getElementById('bt_svAnima').classList.add('displayNone');
	document.getElementById('s35_caAnima').classList.add('displayNone');
	document.getElementById('cherchill_gcAnima').classList.add('displayNone');
	document.getElementById('wz_pilAnima').classList.add('displayNone');
	document.getElementById('is_2_var2Anima').classList.add('displayNone');
	document.getElementById('lorraine_40tAnima').classList.add('displayNone');
	document.getElementById('wz_111Anima').classList.add('displayNone');
	document.getElementById('amx_30_prot1Anima').classList.add('displayNone');
	document.getElementById('amx_13_75Anima').classList.add('displayNone');
	document.getElementById('sy_152Anima').classList.add('displayNone');
	document.getElementById('scorpion_gAnima').classList.add('displayNone');
	document.getElementById('t_28_defAnima').classList.add('displayNone');
	document.getElementById('sy_130_pmAnima').classList.add('displayNone');
	document.getElementById('type_5_heavyAnima').classList.add('displayNone');
	document.getElementById('t_57_heavyAnima').classList.add('displayNone');
	document.getElementById('is_7Anima').classList.add('displayNone');
	document.getElementById('t_49Anima').classList.add('displayNone');
	document.getElementById('super_conquerorAnima').classList.add('displayNone');
	document.getElementById('bat_chat_25tAnima').classList.add('displayNone');
	document.getElementById('udes_15_16Anima').classList.add('displayNone');
	document.getElementById('type_59_goldAnima').classList.add('displayNone');
	document.getElementById('strv_103bAnima').classList.add('displayNone');
	document.getElementById('grill_15Anima').classList.add('displayNone');
	document.getElementById('tortoiseAnima').classList.add('displayNone');
	document.getElementById('fosh_155Anima').classList.add('displayNone');
	document.getElementById('t_34_kharkivAnima').classList.add('displayNone');
	document.getElementById('t_64_bm_oplotAnima').classList.add('displayNone');
	document.getElementById('t_34KharkivAnima').classList.add('displayNone');
	document.getElementById('t_34_kharkiv_skin1Anima').classList.add('displayNone');
	document.getElementById('t_34_kharkiv_skin2Anima').classList.add('displayNone');
	document.getElementById('t_64_bm_oplot_skinAnima').classList.add('displayNone');
	document.getElementById('t_34_winterAnima').classList.add('displayNone');
};


animaZone = document.getElementById('popupAnimationEventListener');
caseZone = document.getElementById('case');
animaText = document.getElementById('animaText');
animaButton = document.getElementById('tankAnimationButton');
buyedTankBlock = document.getElementById('buyedTankBlock');
congAnima = document.getElementById('congAnima');
wit_sec = document.getElementById('wit_sec');

function anima(value) {
	if (value == 1){
		 congAnima.innerHTML = 'Gelukkig 2024!';
	} else {
		 congAnima.innerHTML = 'Gefeliciteerd!';
	}

	body.classList.add('case-op');
	animaZone.classList.add('animaZoneOp');
	animaZone.addEventListener('click', e => {
		const audioOpen = new Audio("audio/case_opening.mp3");
		audioOpen.play();
		setTimeout(function () {
			hlopushka.play();
		}, 1700);
		wit_sec.classList.add('wit-op');
		popupVideo.play();

		setTimeout(function () {
			wit_sec.classList.remove('wit-op');
			caseZone.classList.add('case-op');
			animaText.classList.add('text-cl');
			buyedTankBlock.classList.add('tank-op');
			setTimeout(function () {
				animaButton.classList.add('button-op');
				congAnima.classList.add('textCon-op');
			}, 1000);
			animaButton.addEventListener('submit', function (e) {
				e.preventDefault();
				animaNone();
		  });
		}, 500);
	}, { once: true });
};

function animaNone() {
	animaZone.classList.remove('animaZoneOp');
	body.classList.remove('case-op');
	caseZone.classList.remove('case-op');
	popupVideo.pause();
	popupVideo.currentTime = 0;
	animaText.classList.remove('text-cl');
	animaButton.classList.remove('button-op');
	buyedTankBlock.classList.remove('tank-op');
	congAnima.classList.remove('textCon-op');
};