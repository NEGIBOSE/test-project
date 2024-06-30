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
	<label for="tab3_3">Third Tab</label>
	<input type="radio" name="cp_tab" id="tab3_4" aria-controls="force_tab03">
	<label for="tab3_4">Force Tab</label>
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
