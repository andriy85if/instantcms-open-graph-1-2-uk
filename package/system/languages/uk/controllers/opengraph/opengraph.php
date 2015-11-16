<?php
/******************************************************************************/
//                                                                            //
//                             InstantMedia 2015                              //
//	 		  http://www.instantvideo.ru/, support@instantvideo.ru            //
//                               written by Fuze                              //
//                                                                            //
/******************************************************************************/
define('LANG_OPENGRAPH_CONTROLLER', 'Мікроформат Open Graph');
define('LANG_OPENGRAPH_TYPE', 'Тип розмітки Open Graph');
define('LANG_OPENGRAPH_TYPE_OTHER', 'Інші');
define('LANG_OPENGRAPH_TYPE_ARTICLES', 'Статті');
define('LANG_OPENGRAPH_TYPE_BOOK', 'Книги');
define('LANG_OPENGRAPH_TYPE_BASE', 'Загальний тип');
define('LANG_OPENGRAPH_TYPE_MUSIC', 'Музика');
define('LANG_OPENGRAPH_TYPE_MUSICTRACK', 'Музичний трек трек');
define('LANG_OPENGRAPH_TYPE_MUSIC_ALBUM', 'Музичний альбом');
define('LANG_OPENGRAPH_TYPE_MUSIC_PLAYLIST', 'Музичний плейлист');
define('LANG_OPENGRAPH_TYPE_RADIO', 'Радіостанція');
define('LANG_OPENGRAPH_TYPE_VIDEO', 'Відео');
define('LANG_OPENGRAPH_TYPE_FILM', 'Фільм');
define('LANG_OPENGRAPH_TYPE_SERIAL', 'Серія серіалу');
define('LANG_OPENGRAPH_TYPE_SHOW', 'Епізод телешоу');
define('LANG_OPENGRAPH_TYPE_LIVE', 'Трансляція');
define('LANG_OPENGRAPH_TYPE_MUSIC_VIDEO', 'Музичне відео');
define('LANG_OPENGRAPH_ENABLED_CTYPES', 'Типи контенту, в яких формувати розмітку');
define('LANG_OPENGRAPH_ENABLED_CTYPES_HINT', 'У включених типах контенту буде формуватися розмітка. В налаштуваннях типу контенту з’являться додаткові опції');
define('LANG_OPENGRAPH_IS_HTTPS_AVAILABLE', 'Сайт працює по https протоколу');
define('LANG_OPENGRAPH_IS_HTTPS_AVAILABLE_HINT', 'Увімкніть, якщо сайт працює в тому числі і по https протоколу. Переконайтесь також, якщо у вас зображення зберігаються на іншому хості, він також доступний по https протоколу.');
define('LANG_OPENGRAPH_DEFAULT_IMAGE', 'Зображенню по-замовчуванню');
define('LANG_OPENGRAPH_MAX_IMAGE_COUNT', 'Максимальна кількість зображень, які виводяться в og:image');
define('LANG_OPENGRAPH_DEFAULT_IMAGE_HINT', 'Буде використовуватись, якщо в типі контенту не задано інше зображення по-замовчуванню і у записі немає зображень');
define('LANG_OPENGRAPH_IMAGE_FIELDS', 'Поля для зображень розмітки Open Graph');
define('LANG_OPENGRAPH_IMAGE_FIELD', 'Поле зображення');
define('LANG_OPENGRAPH_ADD_FIELD', 'Додати поле');
define('LANG_OPENGRAPH_OTHER_FIELDS', 'Додаткові поля розмітки');
define('LANG_OPENGRAPH_FIELD_NAME', 'Назва поля');
define('LANG_OPENGRAPH_FIELD_CONTENT', 'задане значення');
define('LANG_OPENGRAPH_FIELD_CONTENT_HINT', 'Не задано - буде вибір поля');
define('LANG_OPENGRAPH_FIELD_FUNC', 'Функція обробки значення');
define('LANG_OPENGRAPH_FIELD_NEED_VALUE', 'Треба ввести значення');
define('LANG_OPENGRAPH_FIELD_NAME_HINT', 'Назва, згідно специфікації <a target="_blank" href="http://ogp.me/">OpenGraphProtocol</a> або рекомендацій <a target="_blank" href="https://yandex.ru/support/webmaster/open-graph/intro-open-graph.xml">Яндекс</a>. Можна вказати незмінне значення поля або ж скористуватись конструкціями {key}, де key - назва поля в таблиці записів типу контенту. Також можна вказувати ключовий вираз {host}, котрий буде замінено на поточний хост сайту з префіксом протоколу, наприклад {host}video/embed/{id} буде замінений на https://site.ru/video/embed/123');
