<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTML Tabs Without JavaScript</title>
    <style>
        /* Стилі для контейнера вкладок */
        .tabs {
            display: flex;
            flex-direction: row;
            border-bottom: 2px solid #ccc;
        }

        .tab {
            padding: 10px 20px;
            cursor: pointer;
            border: 1px solid #ccc;
            border-radius: 4px 4px 0 0;
            background-color: #f0f0f0;
            margin-right: 5px;
            transition: background-color 0.3s ease;
        }

        .tab:hover {
            background-color: #ddd;
        }

        /* Стилі для кнопок вкладок, що є radio-кнопками */
        .tab-input {
            display: none;
        }

        /* Вигляд вкладки при виборі */
        .tab-input:checked + .tab {
            background-color: #ccc;
            border-bottom: 2px solid #007bff;
        }

        /* Контент вкладок */
        .tab-content {
            display: none;
            padding: 20px;
            border: 1px solid #ccc;
            border-top: none;
            background-color: #f9f9f9;
        }

        /* Відображення вкладки при виборі */
        .tab-input:checked + .tab + .tab-content {
            display: block;
        }

        /* Респонсивність для мобільних */
        @media (max-width: 768px) {
            .tabs {
                flex-direction: column;
            }

            .tab {
                width: 100%;
                margin-bottom: 5px;
            }
        }
    </style>
</head>
<body>

    <div class="tabs">
        <!-- Використовуємо radio-кнопки для вкладок -->
        <input type="radio" id="tab1" name="tab" class="tab-input" checked>
        <label for="tab1" class="tab">Вкладка 1</label>

        <input type="radio" id="tab2" name="tab" class="tab-input">
        <label for="tab2" class="tab">Вкладка 2</label>

        <input type="radio" id="tab3" name="tab" class="tab-input">
        <label for="tab3" class="tab">Вкладка 3</label>
    </div>

    <div class="tab-content">
        <p>Контент вкладки 1: Це текст для першої вкладки.</p>
    </div>
    <div class="tab-content">
        <p>Контент вкладки 2: Це текст для другої вкладки.</p>
    </div>
    <div class="tab-content">
        <p>Контент вкладки 3: Це текст для третьої вкладки.</p>
    </div>

</body>
</html>
