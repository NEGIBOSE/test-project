<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Color Selection</title>

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;700&display=swap"
        rel="stylesheet"
    />
<style>
    body {
        font-family: Arial, sans-serif;
        text-align: center;
    }
    .button-red {
        background-color: red;
        color: white;
    }
    .button-blue {
        background-color: blue;
        color: white;
    }
    .button-yellow {
        background-color: yellow;
        color: black;
    }
    .button-green {
        background-color: green;
        color: white;
    }
    .button-black {
        background-color: black;
        color: white;
    }
    .cp_tab *, .cp_tab *:before, .cp_tab *:after {
	-webkit-box-sizing: border-box;
	        box-sizing: border-box;
}
.cp_tab {
	margin: 1em auto;
}
.cp_tab > input[type='radio'] {
	margin: 0;
	padding: 0;
	border: none;
	border-radius: 0;
	outline: none;
	background: none;
	-webkit-appearance: none;
	        appearance: none;
	display: none;
}
.cp_tab .cp_tabpanels {
	position: relative;
	min-height: 150px;/* エリアの高さ */
}
.cp_tab .cp_tabpanel {
	position: absolute;
	width: 100%;
	opacity: 0;
	padding: 0.5em 1em;
	transform: translateY(-10px);
	-webkit-transition: opacity 0.5s, -webkit-transform 0.5s;
	transition: opacity 0.5s, -webkit-transform 0.5s;
	transition: transform 0.5s, opacity 0.5s;
	transition: transform 0.5s, opacity 0.5s, -webkit-transform 0.5s;
}
.cp_tab > input:first-child:checked ~ .cp_tabpanels > .cp_tabpanel:first-child,
.cp_tab > input:nth-child(3):checked ~ .cp_tabpanels > .cp_tabpanel:nth-child(2),
.cp_tab > input:nth-child(5):checked ~ .cp_tabpanels > .cp_tabpanel:nth-child(3),
.cp_tab > input:nth-child(7):checked ~ .cp_tabpanels > .cp_tabpanel:nth-child(4),
.cp_tab > input:nth-child(9):checked ~ .cp_tabpanels > .cp_tabpanel:nth-child(5),
.cp_tab > input:nth-child(11):checked ~ .cp_tabpanels > .cp_tabpanel:nth-child(6) {
	opacity: 1;
	transform: translateY(0px);
}
.cp_tab > input:first-child:checked ~ .cp_tabpanels > .cp_tabpanel:first-child {
	background: #80CBC4;
}
.cp_tab > input:nth-child(3):checked ~ .cp_tabpanels > .cp_tabpanel:nth-child(2) {
	background: #90CAF9;
}
.cp_tab > input:nth-child(5):checked ~ .cp_tabpanels > .cp_tabpanel:nth-child(3) {
	background: #F48FB1;
}
.cp_tab > input:nth-child(7):checked ~ .cp_tabpanels > .cp_tabpanel:nth-child(4) {
	background: #8BC34A;
}
.cp_tab > label {
	position: relative;
	display: inline-block;
	padding: 5px 10px;
	cursor: pointer;
	border-radius: 6px 6px 0 0;
	font-weight: bold;
}
.cp_tab > input:first-child + label {
	background: #80CBC4;
}
.cp_tab > input:nth-child(3) + label {
	background: #90CAF9;
}
.cp_tab > input:nth-child(5) + label {
	background: #F48FB1;
}
.cp_tab > input:nth-child(7) + label {
	background: #8BC34A;
}
.cp_tab > label:hover {
	color: #0066cc;
}
.cp_tab > input:focus + label {
	color: #ffffff;
}
.cp_tab > input:checked + label {
	margin-bottom: -1px;
}
@media (max-width: 480px) {
	.cp_tab {
		width: 100%;
		font-size: 0.8em;
	}
	.cp_tab label {
		padding: 0.5em;
	}
}
.cp_tab label{
    width:56px;
}
</style>
</head>
<body>
<div class="cp_tab">
	<input type="radio" name="cp_tab" id="tab3_1" aria-controls="first_tab03" checked>
	<label for="tab3_1">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
            <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
            <path
                fill="#bf7fff"
                d="M64 416L168.6 180.7c15.3-34.4 40.3-63.5 72-83.7l146.9-94c3-1.9 6.5-2.9 10-2.9C407.7 0 416 8.3 416 18.6v1.6c0 2.6-.5 5.1-1.4 7.5L354.8 176.9c-1.9 4.7-2.8 9.7-2.8 14.7c0 5.5 1.2 11 3.4 16.1L448 416H240.9l11.8-35.4 40.4-13.5c6.5-2.2 10.9-8.3 10.9-15.2s-4.4-13-10.9-15.2l-40.4-13.5-13.5-40.4C237 276.4 230.9 272 224 272s-13 4.4-15.2 10.9l-13.5 40.4-40.4 13.5C148.4 339 144 345.1 144 352s4.4 13 10.9 15.2l40.4 13.5L207.1 416H64zM279.6 141.5c-1.1-3.3-4.1-5.5-7.6-5.5s-6.5 2.2-7.6 5.5l-6.7 20.2-20.2 6.7c-3.3 1.1-5.5 4.1-5.5 7.6s2.2 6.5 5.5 7.6l20.2 6.7 6.7 20.2c1.1 3.3 4.1 5.5 7.6 5.5s6.5-2.2 7.6-5.5l6.7-20.2 20.2-6.7c3.3-1.1 5.5-4.1 5.5-7.6s-2.2-6.5-5.5-7.6l-20.2-6.7-6.7-20.2zM32 448H480c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32z"
            />
        </svg>
    </label>
	<input type="radio" name="cp_tab" id="tab3_2" aria-controls="second_tab03">
	<label for="tab3_2">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
            <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
            <path
                fill="#7fbfff"
                d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM176.4 176a32 32 0 1 1 0 64 32 32 0 1 1 0-64zm128 32a32 32 0 1 1 64 0 32 32 0 1 1 -64 0zM160 336H352c8.8 0 16 7.2 16 16s-7.2 16-16 16H160c-8.8 0-16-7.2-16-16s7.2-16 16-16z"
            />
        </svg>
    </label>
	<input type="radio" name="cp_tab" id="tab3_3" aria-controls="third_tab03">
	<label for="tab3_3">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
            <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
            <path
                fill="#ff7fbf"
                d="M498 339.7c9.1-26.2 14-54.4 14-83.7C512 114.6 397.4 0 256 0S0 114.6 0 256S114.6 512 256 512c35.4 0 69.1-7.2 99.7-20.2c-4.8-5.5-8.5-12.2-10.4-19.7l-22.9-89.3c-10-39 11.8-80.9 51.8-92.1c37.2-10.4 73.8 10.1 87.5 44c12.7-1.6 25.1 .4 36.2 5zM296 332c0 6.9-3.1 13.2-7.3 18.3c-4.3 5.2-10.1 9.7-16.7 13.4c-2.7 1.5-5.7 3-8.7 4.3c3.1 1.3 6 2.7 8.7 4.3c6.6 3.7 12.5 8.2 16.7 13.4c4.3 5.1 7.3 11.4 7.3 18.3s-3.1 13.2-7.3 18.3c-4.3 5.2-10.1 9.7-16.7 13.4C258.7 443.1 241.4 448 224 448c-3.6 0-6.8-2.5-7.7-6s.6-7.2 3.8-9l0 0 0 0 0 0 0 0 .2-.1c.2-.1 .5-.3 .9-.5c.8-.5 2-1.2 3.4-2.1c2.8-1.9 6.5-4.5 10.2-7.6c3.7-3.1 7.2-6.6 9.6-10.1c2.5-3.5 3.5-6.4 3.5-8.6s-1-5-3.5-8.6c-2.5-3.5-5.9-6.9-9.6-10.1c-3.7-3.1-7.4-5.7-10.2-7.6c-1.4-.9-2.6-1.6-3.4-2.1l-.6-.4-.3-.2-.2-.1 0 0 0 0 0 0c-2.5-1.4-4.1-4.1-4.1-7s1.6-5.6 4.1-7l0 0 0 0 0 0 0 0 0 0 .2-.1c.2-.1 .5-.3 .9-.5c.8-.5 2-1.2 3.4-2.1c2.8-1.9 6.5-4.5 10.2-7.6c3.7-3.1 7.2-6.6 9.6-10.1c2.5-3.5 3.5-6.4 3.5-8.6s-1-5-3.5-8.6c-2.5-3.5-5.9-6.9-9.6-10.1c-3.7-3.1-7.4-5.7-10.2-7.6c-1.4-.9-2.6-1.6-3.4-2.1c-.4-.2-.7-.4-.9-.5l-.2-.1 0 0 0 0 0 0c-3.2-1.8-4.7-5.5-3.8-9s4.1-6 7.7-6c17.4 0 34.7 4.9 47.9 12.3c6.6 3.7 12.5 8.2 16.7 13.4c4.3 5.1 7.3 11.4 7.3 18.3zM176.4 176a32 32 0 1 1 0 64 32 32 0 1 1 0-64zm194.8 57.6c-17.6-23.5-52.8-23.5-70.4 0c-5.3 7.1-15.3 8.5-22.4 3.2s-8.5-15.3-3.2-22.4c30.4-40.5 91.2-40.5 121.6 0c5.3 7.1 3.9 17.1-3.2 22.4s-17.1 3.9-22.4-3.2zM434 352.3c-6-23.2-28.8-37-51.1-30.8s-35.4 30.1-29.5 53.4l22.9 89.3c2.2 8.7 11.2 13.9 19.8 11.4l84.9-23.8c22.2-6.2 35.4-30.1 29.5-53.4s-28.8-37-51.1-30.8l-20.2 5.6-5.4-21z"
            />
        </svg>
    </label>
	<input type="radio" name="cp_tab" id="tab3_4" aria-controls="force_tab03">
	<label for="tab3_4">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
            <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
            <path
                fill="#FFD43B"
                d="M426.8 14.2C446-5 477.5-4.6 497.1 14.9s20 51 .7 70.3c-6.8 6.8-21.4 12.4-37.4 16.7c-16.3 4.4-34.1 7.5-46.3 9.3c-1.6 .2-3.1 .5-4.6 .6c-5.6 .9-10.3-3.9-9.5-9.5c1.6-11.2 4.6-29.6 9-47c.3-1.3 .7-2.6 1-3.9c4.3-15.9 9.8-30.5 16.7-37.4zm-44.7 19c-1.5 4.8-2.9 9.6-4.1 14.3c-4.8 18.9-8 38.5-9.7 50.3c-4 26.8 18.9 49.7 45.7 45.8c11.9-1.6 31.5-4.8 50.4-9.7c4.7-1.2 9.5-2.5 14.3-4.1C534.2 227.5 520.2 353.8 437 437c-83.2 83.2-209.5 97.2-307.2 41.8c1.5-4.8 2.8-9.6 4-14.3c4.8-18.9 8-38.5 9.7-50.3c4-26.8-18.9-49.7-45.7-45.8c-11.9 1.6-31.5 4.8-50.4 9.7c-4.7 1.2-9.5 2.5-14.3 4.1C-22.2 284.5-8.2 158.2 75 75C158.2-8.3 284.5-22.2 382.2 33.2zM51.5 410.1c18.5-5 38.8-8.3 50.9-10c5.6-.9 10.3 3.9 9.5 9.5c-1.7 12.1-5 32.4-10 50.9C97.6 476.4 92 491 85.2 497.8C66 517 34.5 516.6 14.9 497.1s-20-51-.7-70.3c6.8-6.8 21.4-12.4 37.4-16.7zM416.4 202.3c-4.8-11.9-20.9-10.9-26.9 .4c-19.4 36.7-46.3 73.2-79.8 106.7s-70 60.3-106.7 79.8c-11.3 6-12.3 22.1-.4 26.9c59.4 24.1 129.9 12.2 177.9-35.8s59.9-118.5 35.8-177.9zM87.1 285.1c2 2 4.6 3.2 7.3 3.4l56.1 5.1 5.1 56.1c.3 2.8 1.5 5.4 3.4 7.3c6.3 6.3 17.2 3.6 19.8-4.9l29.7-97.4c3.5-11.6-7.3-22.5-19-19L92 265.3c-8.6 2.6-11.3 13.4-4.9 19.8zM265.3 92l-29.7 97.4c-3.5 11.6 7.3 22.5 19 19l97.4-29.7c8.6-2.6 11.3-13.4 4.9-19.8c-2-2-4.6-3.2-7.3-3.4l-56.1-5.1-5.1-56.1c-.3-2.8-1.5-5.4-3.4-7.3c-6.3-6.3-17.2-3.6-19.8 4.9z"
            />
        </svg>
    </label>
    <input type="radio" name="cp_tab" id="tab3_5" aria-controls="force_tab03">
	<label for="tab3_5">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
            <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
            <path
                d="M416 398.9c58.5-41.1 96-104.1 96-174.9C512 100.3 397.4 0 256 0S0 100.3 0 224c0 70.7 37.5 133.8 96 174.9c0 .4 0 .7 0 1.1v64c0 26.5 21.5 48 48 48h48V464c0-8.8 7.2-16 16-16s16 7.2 16 16v48h64V464c0-8.8 7.2-16 16-16s16 7.2 16 16v48h48c26.5 0 48-21.5 48-48V400c0-.4 0-.7 0-1.1zM96 256a64 64 0 1 1 128 0A64 64 0 1 1 96 256zm256-64a64 64 0 1 1 0 128 64 64 0 1 1 0-128z"
            />
        </svg>
    </label>
	<div class="cp_tabpanels">
		<div id="first_tab03" class="cp_tabpanel">
		<h2>First Tab</h2>
		<p>First Tab text</p>
		</div>
		<div id="second_tab03" class="cp_tabpanel">
		<h2>Second Tab</h2>
		<p>Second Tab text</p>
		</div>
		<div id="third_tab03" class="cp_tabpanel">
		<h2>Third Tab</h2>
		<p>Third Tab text</p>
		</div>
		<div id="force_tab03" class="cp_tabpanel">
		<h2>Force Tab</h2>
		<p>Force Tab text</p>
		</div>
	</div>
</div>
<h1>色を選択してください</h1>
<p>同じ色を３回選択:スーパー"OO"くん</p>
<p>2回同じ色選択 & 1回別の色:"Δ" 系 "OO" 人</p>

<button class="button-red" onclick="selectColor('赤')">赤</button>
<button class="button-blue" onclick="selectColor('青')">青</button>
<button class="button-yellow" onclick="selectColor('黄色')">黄色</button>
<button class="button-green" onclick="selectColor('緑')">緑</button>
<button class="button-black" onclick="selectColor('黒')">黒</button>

<div id="message"></div>

<script>
    let selectedColors = [];
    let isFirstSelection = true; // 最初の選択かどうかを示すフラグ
    
    function selectColor(color) {
        selectedColors.push(color);
        
        if (isFirstSelection) {
            showMessage("第一進化成功！");
            isFirstSelection = false; // 最初の選択が完了したのでフラグを更新
        } else if (selectedColors.length === 2) {
            showMessage("変化はないようだ。");
        }

        if (selectedColors.length >= 3) {
            checkForSuperColor();
        }
    }

    function checkForSuperColor() {
        let colorCounts = {};
        let superColor = null;

        selectedColors.forEach(color => {
            colorCounts[color] = (colorCounts[color] || 0) + 1;
        });

        let distinctColors = Object.keys(colorCounts).length;

        if (distinctColors === 1 && colorCounts[selectedColors[0]] === 3) {
            showMessage(`超スーパー${selectedColors[0]}くん`);
        } else if (distinctColors === 2) {
            let singleColor = null;
            let doubleColor = null;

            for (let color in colorCounts) {
                if (colorCounts[color] === 1) {
                    singleColor = color;
                } else if (colorCounts[color] === 2) {
                    doubleColor = color;
                }
            }

            showMessage(`${singleColor} 系${doubleColor}人`);
        }
    }

    function showMessage(message) {
        // メッセージエリアをクリアして新しいメッセージを表示する
        document.getElementById("message").innerHTML = `<p>${message}</p>`;
    }
</script>
</body>
</html>
