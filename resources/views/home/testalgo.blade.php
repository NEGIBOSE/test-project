<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Color Selection</title>
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
</style>
</head>
<body>
<h1>色を選択してください</h1>
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
