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
            flex-wrap: wrap;
            margin-bottom: 10px;
        }

        .tab {
            background-color: #f0f0f0;
            padding: 10px 20px;
            cursor: pointer;
            border: 1px solid #ccc;
            border-radius: 4px 4px 0 0;
            transition: background-color 0.3s ease;
        }

        .tab:hover {
            background-color: #ddd;
        }

        /* Приховування контенту вкладок */
        .tab-content {
            display: none;
        }

        /* Відображення вкладки при виборі */
        .tab:checked + .tab-content {
            display: block;
        }

        /* Стилі для вкладок на мобільних */
        @media (max-width: 768px) {
            .tabs {
                flex-direction: column;
            }

            .tab {
                width: 100%;
                margin-bottom: 5px;
            }
        }

        /* Стилі для кнопок вкладок, що є радио-кнопками */
        .tab-input {
            display: none;
        }

        .tab-input:checked + .tab {
            background-color: #ccc;
            border-bottom: 2px solid #007bff;
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

    <div class="tab-content" id="content1">
        <p>Контент вкладки 1: Це текст для першої вкладки.</p>
    </div>
    <div class="tab-content" id="content2">
        <p>Контент вкладки 2: Це текст для другої вкладки.</p>
    </div>
    <div class="tab-content" id="content3">
        <p>Контент вкладки 3: Це текст для третьої вкладки.</p>
    </div>

</body>
</html>
