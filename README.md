### Автотест на проверку наличия трейлера у видео.

Результатом решения должен являться автотест написанный на PHP с использованием Codeceprtion.
Сценарий:
1. Открыть https://yandex.ru/video/
2. Ввести в поиск “ураган”
3. Дождаться результатов поиска
4. Навести курсор мыши на любое видео из левого блока
5. Проверить, что у видео есть трейлер (превью картинка изменяется)

#### Поднять Selenium-server c ChromeDriver
```bash
java -Dwebdriver.chrome.driver=chromedriver -jar selenium-server-standalone-3.141.59.jar
```

#### Запустить тест VideoPreviewCest 
```bash
vendor/bin/codecept run acceptance -g testTask
```
